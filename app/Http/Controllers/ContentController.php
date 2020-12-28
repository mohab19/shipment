<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContentsRequest;
use Illuminate\Http\Request;
use App\Content;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contents = Content::all();
        return view("contents.index", compact("contents"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("contents.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($lang, ContentsRequest $request)
    {
        if($request->file('image') != null) {
            $imageName = time().'_'.$request->input('name').'.'.$request->file('image')->getClientOriginalExtension();
            request()->image->move(public_path('images/contents'), $imageName);
        } else {
            $imageName = "";
        }

        $content = Content::create([
            'title_ar'   => $request->title_ar,
            'title_en'   => $request->title_en,
            'content_ar' => $request->content_ar,
            'content_en' => $request->content_en,
            'type'       => $request->type,
            'value'      => $request->value,
            'image'      => $imageName,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function show($lang, Content $content)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function edit($lang, Content $content)
    {
        return view("contents.edit", compact("content"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function update($lang, ContentsRequest $request, Content $content)
    {
        if($request->file('image') != null) {
            $imageName = time().'_'.$request->input('name').'.'.$request->file('image')->getClientOriginalExtension();
            request()->image->move(public_path('images/contents'), $imageName);
        } else {
            $imageName = "";
        }

        $content->update([
            'title_ar'   => $request->title_ar,
            'title_en'   => $request->title_en,
            'content_ar' => $request->content_ar,
            'content_en' => $request->content_en,
            'type'       => $request->type,
            'value'      => $request->value,
            'image'      => $imageName,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function destroy($lang, Content $content)
    {
        $content->delete();
    }
}
