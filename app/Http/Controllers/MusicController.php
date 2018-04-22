<?php

namespace App\Http\Controllers;

use App\music;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $musics=music::all();
        return view('music.index',compact('musics'));
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
     * @param  \App\music  $music
     * @return \Illuminate\Http\Response
     */
    public function show(music $music)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\music  $music
     * @return \Illuminate\Http\Response
     */
    public function edit(music $music)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\music  $music
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, music $music)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\music  $music
     * @return \Illuminate\Http\Response
     */
    public function destroy(music $music)
    {
        //
    }
}
