@extends('layouts.app')

@section('title','Admin')

@section('page-title','Admin')

@section('dashboard-content')
    <script src="path/to/bootstrap.js"></script>
    <a href="#" class="btn btn-primary">
        Tambah
    </a>
    <table class="table">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        @foreach($admins as $admin)
        <tr>
            <td>{{$admin->first_name}}</td>
            <td>{{$admin->last_name}}</td>
            <td>{{$admin->username}}</td>
            <td>{{$admin->email}}</td>
            <td>
                <a href="#" class="btn btn-success">
                    <i class="fa fa-pencil"></i>
                </a>
                <form class='delete' method="POST" action="/admin/{{$admin->id}}" style="display: inline-block">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
        <script>
            $(".delete").on("submit", function(){
                return confirm("Do you want to delete this item?");
            });
        </script>
    </table>
    
@endsection
