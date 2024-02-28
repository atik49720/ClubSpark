<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($clubAlias)
    {
        $results = Club::all()->where('alias',$clubAlias)->first();
        if(isset($results)){
            var_dump($results);
            //return view('club.profile',compact($results));
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
    public function destroy(Club $club)
    {
        //
    }
}
