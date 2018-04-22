@extends('layouts.app')

@section('title','Music')

@section('page-title','Music')

@section('dashboard-content')
    <a href="#" class="btn btn-primary">
        Tambah
    </a>
    <table class="table">
        <tr>
            <th>Title</th>
            <th>Singer</th>
            <th>Genre</th>
            <th>Song Writer</th>
            <th>Action</th>
        </tr>
        @foreach($musics as $music)
        <tr>
            <td>{{$music->title}}</td>
            <td>{{$music->singer}}</td>
            <td>{{$music->genre}}</td>
            <td>{{$music->song_writer}}</td>
            <td>
                <a href="#" class="btn btn-success">
                    <i class="fa fa-pencil"></i>
                </a>
                <a href="#" class="btn btn-danger">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </table>
    
@endsection
