<?php

namespace App\Http\Controllers;

use App\lecture;
use Illuminate\Http\Request;

class LectureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lectures=lecture::all();
        return view('lecture.index',compact('lectures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\lecture  $lecture
     * @return \Illuminate\Http\Response
     */
    public function show(lecture $lecture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\lecture  $lecture
     * @return \Illuminate\Http\Response
     */
    public function edit(lecture $lecture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lecture  $lecture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, lecture $lecture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\lecture  $lecture
     * @return \Illuminate\Http\Response
     */
    public function destroy(lecture $lecture)
    {
        //
    }
}
