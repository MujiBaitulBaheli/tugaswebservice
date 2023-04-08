@extends('app')
@section('content')

<div class="container mt-3">

    <form action="{{ route('tugas.update', $table_blog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="">Id</label>
            <input type="text" class="form-control" name="id" value="{{ $table_blog->id }}">
        </div>
        <div class="form-group">
            <label for="">Author</label>
            <input type="text" class="form-control" name="author" value="{{ $table_blog->author }}">
        </div>
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" class="form-control" name="title" value="{{ $table_blog->title }}">
        </div>
        <div class="form-group">
            <label for="">Body</label>
            <input type="text" class="form-control" name="body" value="{{ $table_blog->body }}">
        </div>
        <div class="form-group">
            <label for="">Keyword</label>
            <input type="text" class="form-control" name="keyword" value="{{ $table_blog->keyword }}">
        </div>
        <div class="card-harder">
            <input type="submit" value="Simpan" class="btn btn-primary float-right">
        </div>
    </form>


</div>

@endsection
