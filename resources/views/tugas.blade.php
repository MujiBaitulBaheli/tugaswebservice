@extends('app')
@section('content')
    <table>

        <a href="{{ route('tugas.create') }}" class=" btn btn-info float-end mt-2">Tambah Data</a>
        <table class="table table-bordered mt-5" style="margin-top: -100px;">
            <thead>
                <th>No</th>
                <th>Author</th>
                <th>Tilte</th>
                <th>Body</th>
                <th>Keyword</th>
                <th>Action</th>
            </thead>


            <tbody>
                @foreach ($data as $d)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $d->author }}</td>
                        <td>{{ $d->title }}</td>
                        <td>{{ $d->body }}</td>
                        <td>{{ $d->keyword }}</td>
                        <td><a href="{{ route('tugas.edit', $d->id) }}" class="btn btn-warning"> Edit </a>
                            <form action="{{ route('tugas.delete', ['id' => 1]) }}">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                        <td>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </table>
@endsection
