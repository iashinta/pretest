@extends('layouts.app')

@section('title','Lecture')

@section('page-title','Lecture')

@section('dashboard-content')
    <a href="#" class="btn btn-primary">
        Tambah
    </a>
    <table class="table">
        <tr>
            <th>NIP</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Tanggal</th>
            <th>Action</th>
        </tr>
        @foreach($lectures as $lecture)
        <tr>
            <td>{{$lecture->nip}}</td>
            <td>{{$lecture->name}}</td>
            <td>{{$lecture->age}}</td>
            <td>{{$lecture->date_of_birth}}</td>
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
