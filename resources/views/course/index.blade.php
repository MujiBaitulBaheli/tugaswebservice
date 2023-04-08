@extends('master')

@section('title', 'course')

@section('content')

<div class="altert altert-info">Course</div>

<a href="#" class="btn btn-success float-end mb-3">Tambah Data</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Institution</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $row )
        <tr>
            <td> {{$loop->iteration}}</td>
            <td> {{$row->name}}</td>
            <td> {{$row->description}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
        @endforeach
