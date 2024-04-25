<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $results = Club::all();
        //$results = DB::table('clubs')->get();

        return view('index', compact('results'));
    }
    public function list()
    {
        $results = Club::all();
        //$results = DB::table('clubs')->get();

        return view('club.list', compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50'
        ]);
        $Club = new Club();
        $Club->name = $request['name'];
        $Club->alias = $request['alias'];
        $Club->dept = $request['dept'];
        $Club->room = $request['room'];
        $Club->fbPageURL = $request['fbPageURL'];
        $Club->fbGroupURL = $request['fbGroupURL'];
        $Club->intro = $request['intro'];
        $Club->objective = $request['objective'];
        $Club->committee = $request['committee'];

        $folder = "club/images";

        $file = $request->file('mainImage');
        $path = Storage::disk('public_uploads')->put($folder, $file);
        if(!isset($path)) {
            return false;
        }
        $Club->mainImage = "public/uploads/".$path;

        $multipleImages = [];
        if($request->hasFile('achievements'))
        {
            $i=0;
            foreach ($request->file('achievements') as $achievementImage){
                $path = Storage::disk('public_uploads')->put($folder, $achievementImage);
                if(!isset($path)) {
                    return false;
                }
                $multipleImages[$i] = "public/uploads/".$path;
                $i++;
            }
        }
        $Club->achievements = implode(', ', $multipleImages);

        $Club->createdBy = auth()->user()->id;
        $Club->updatedBy = auth()->user()->id;
        $Club->save();
        return redirect()->back()->with('Success', 'Club created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($clubAlias)
    {
        $result = Club::all()->where('alias',$clubAlias)->first();
        if(isset($result)){
            //var_dump($result);
            return view('club.profile',compact('result'));
        }
        else{
            return redirect('./');
        }
    }

    public function api($key,$clubAlias){
        if ($key=="amiatik"){
            $results = Club::all()->where('alias',$clubAlias)->first();
            if(isset($results)){
                //return view('club.profile',compact($results));
                return response()->json($results);
            }
            else{
                return response()->json(["Not Found"]);
            }
        }
        else{
            return response()->json(["Not Authorized"]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Club $club)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Club $club)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Club::where('id', $request['id'])->delete();
        return redirect()->back()->with('success', 'Club deleted successfully!');
    }
}
