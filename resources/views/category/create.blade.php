@extends('layout.app')
@section('title', 'Tambah Kategori')

@section('content')
    <form action="{{ route('category.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Category Name</label>
            <input type="text" name="category_name">
        </div>


        <div class="form-group">
            <button type="submit" class="btn btn-danger">Simpan</button>
        </div>

    </form>
@endsection
