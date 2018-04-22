@extends('layouts.app')

@section('title','Band')

@section('page-title','Band')

@section('dashboard-content')
    <a href="#" class="btn btn-primary">
        Tambah
    </a>
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Vocalist</th>
            <th>Genre</th>
            <th>Since</th>
            <th>Action</th>
        </tr>
        @foreach($bands as $band)
        <tr>
            <td>{{$band->name}}</td>
            <td>{{$band->vocalist}}</td>
            <td>{{$band->genre}}</td>
            <td>{{$band->since}}</td>
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
