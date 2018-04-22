@extends('layouts.app')

@section('title','Item')

@section('page-title','Item')

@section('dashboard-content')
    <a href="#" class="btn btn-primary">
        Tambah
    </a>
    <table class="table" align="center">
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Action</th>
        </tr>
        @foreach($items as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->price}}</td>
            <td>{{$item->stock}}</td>
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
