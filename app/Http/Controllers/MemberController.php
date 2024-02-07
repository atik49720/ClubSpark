<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('member.auth.login');
    }
    public function login(Request $request)
    {

        $results = DB::table('members')->where('username', $request['username'])->first();
        if(isset($results)){
            if($request['password'] == $results->password){
                return redirect('./member-dashboard');
            }

        }
        return redirect('./');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('member.auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // dd($request->all());

        $member = new member();

        $member->username = $request['username'];
        $member->password = $request['password'];
        $member->name = $request['name'];
        $member->mobile = $request['mobile'];
        $member->email = $request['email'];
        $member->batch = $request['batch'];
        $member->dept = $request['dept'];

        $member->save();

        return redirect('./member-login');
    }

    /**
     * Display the specified resource.
     */
    public function show(Member $member)
    {
        return view('member.dashboard');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member)
    {
        //
    }
}
