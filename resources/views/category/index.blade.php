@extends('layout.app')
@section('title', 'Data Category')

@section('content')
    <h1>Data Category</h1>
    <div align="right">
        <a href="{{ route('category.create') }}" class="btn btn-primary">Tambah</a>
    </div>
    <br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->category_name }}</td>
                    <td>
                        <a class="btn btn-success btn-xs" href="{{ route('category.edit', $item->id) }}">Edit</a>
                        <form class="d-inline" action="{{ route('category.destroy', $item->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <!--<input type="hidden" name="_method" value="DELETE">-->
                            <button class="btn btn-danger btn-xs" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
