<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\Forum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($clubAlias)
    {

        $clubList = Club::all();
        $questionList = Forum::all()->where('isQuestion',1)->where('clubAlias',$clubAlias)->sortByDesc('created_at');
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
    public function create(Request $request)
    {
        $Forum = new Forum();
        $Forum->isQuestion = true;
        $Forum->questionTitle = $request['questionTitle'];
        $Forum->questionDetails = $request['questionDetails'];

        if($request->hasFile('questionAttachment')){
            $folder = "forum/attachments";
            $file = $request->file('questionAttachment');
            $path = Storage::disk('public_uploads')->put($folder, $file);
            if(!isset($path)) {
                return false;
            }
            $Forum->questionAttachment = "public/uploads/".$path;
        }

        $Forum->clubAlias = $request['clubAlias'];
        $Forum->userId = $request['userId'];

        $Forum->save();
        return redirect()->back()->with('Success', 'Question created successfully!');
    }

    public function reply($clubAlias, Request $request)
    {
        $Forum = new Forum();
        $Forum->parentQuestionId = $request['parentQuestionId'];
        $Forum->questionDetails = $request['questionDetails'];

        if($request->hasFile('questionAttachment')){
            $folder = "forum/attachments";
            $file = $request->file('questionAttachment');
            $path = Storage::disk('public_uploads')->put($folder, $file);
            if(!isset($path)) {
                return false;
            }
            $Forum->questionAttachment = "public/uploads/".$path;
        }

        $Forum->clubAlias = $clubAlias;
        $Forum->userId = $request['userId'];

        $Forum->save();
        return redirect()->back()->with('Success', 'Reply created successfully!');
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
