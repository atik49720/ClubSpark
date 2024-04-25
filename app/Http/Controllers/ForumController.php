<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\Forum;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($clubAlias)
    {

        $clubList = Club::all();
        $questionList = Forum::all()->where('isQuestion',1)->where('clubAlias',$clubAlias);
        return view('club.forum', compact('clubList','questionList','clubAlias'));
    }
    public function details($clubAlias,$questionId)
    {
        $clubList = Club::all();
        $question = Forum::all()->where('id',$questionId)->where('clubAlias',$clubAlias)->first();
        $replies = Forum::all()->where('parentQuestionId',$questionId)->where('clubAlias',$clubAlias);
        return view('club.question', compact('clubList','question','replies','clubAlias'));
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
    public function show(Forum $forum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Forum $forum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Forum $forum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Forum $forum)
    {
        //
    }
}
