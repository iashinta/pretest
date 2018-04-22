@extends('layouts.app')

@section('title','Student')

@section('page-title','Student')

@section('dashboard-content')
    <a href="#" class="btn btn-primary">
        Tambah
    </a>
    <table class="table">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Action</th>
        </tr>
        @foreach($students as $student)
        <tr>
            <td>{{$student->nim}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->address}}</td>
            <td>{{$student->phone}}</td>
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
