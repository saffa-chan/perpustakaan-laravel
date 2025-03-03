@extends('layout.app')
@section('title', 'Tambah Kategori')

@section('content')
    <form action="{{ route('book.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Category Book</label>
            <select name="category_id" id="" class="form-control">
                <option value="">Pilih Kategori</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                @endforeach




            </select>
        </div>

        <div class="form-group">
            <label for="">Judul</label>
            <input type="text" name="judul" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Jumlah</label>
            <input type="number" name="jumlah" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Penerbit</label>
            <input type="text" name="penerbit" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Tahun Terbit</label>
            <input type="text" name="tahun_terbit" id="" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Penulis</label>
            <input type="text" name="penulis" id="" class="form-control">
        </div>


        <div class="form-group">
            <button type="submit" class="btn btn-danger">Simpan</button>
        </div>

    </form>
@endsection
