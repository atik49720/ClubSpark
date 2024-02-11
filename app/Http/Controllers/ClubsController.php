<?php

namespace App\Http\Controllers;

use App\Models\Clubs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClubsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $results = Clubs::all();
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
    public function show(Clubs $clubs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Clubs $clubs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Clubs $clubs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Clubs $clubs)
    {
        //
    }
}
