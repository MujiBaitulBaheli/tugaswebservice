@extends('app')
@section('content')


    <div class="card-harder">
        <h2> Tambah Data</h2>
        <a href="{{ route('tugas') }}" class=" btn btn-warning float-end mt-2">Kembali</a>
    </div>


        <!-- /resources/views/post/create.blade.php -->

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card-body">

        <!-- Create Post Form -->

        <form action="{{ route('tugas.store') }}" method="post">
        {{ csrf_field() }}
            <div class="form-group">
                <label for="">Author</label>
                <input type="text" class="form-control" name="author">
            </div>
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="form-group">
                <label for="">Body</label>
                <input type="text" class="form-control" name="body">
            </div>
            <div class="form-group">
                <label for="">Keyword</label>
                <input type="text" class="form-control" name="keyword">
            </div>
            <div class="card-harder">
                <input type="submit" value="Simpan" class="btn btn-primary float-right">
            </div>
            <div class="card-harder">
                <input type="submit" value="Ubah" class="btn btn-warning float-right">
            </div>
        </form>
    </div>
    </div>
@endsection
