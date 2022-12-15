@extends('layout.master')
@section('title', 'Add New Book')
@section('content')
<h2>Add New Book</h2>
<form action="{{ route('books.store') }}" method="POST">
 @csrf
 <div class="row">
 <div class="col-md-6 mb-3">
 <label for="id">ID</label>
 <input type="text" class="form-control @error('id') is-invalid @enderror"
 name="id" id="id" value="{{ old('id') }}">
 @error('id')
 <div class="text-danger">{{ $message }}</div>
 @enderror
 </div>

 <div class="col-md-6 mb-3">
 <label for="judul">Judul</label>
 <input type="text" class="form-control @error('judul') is-invalid @enderror"
 name="judul" id="judul" value="{{ old('judul') }}">
 @error('judul')
 <div class="text-danger">{{ $message }}</div>
 @enderror
 </div>
 </div>

 <div class="form-group">
 <label for="halaman">Halaman</label>
 <textarea class="form-control @error('halaaman') is-invalid @enderror"
 name="halaman" id="halaman" rows="3">{{ old('halaman') }}</textarea>
 @error('halaman')
 <div class="text-danger">{{ $message }}</div>
 @enderror
 </div>

 <div class="form-group">
    <label for="kategori">Kategori</label>
    <textarea class="form-control @error('kategori') is-invalid @enderror"
    name="kategori" id="kategori" rows="3">{{ old('kategori') }}</textarea>
    @error('kategori')
    <div class="text-danger">{{ $message }}</div>
    @enderror
    </div>


    <div class="form-group">
        <label for="penerbit">Penerbit</label>
        <textarea class="form-control @error('penerbit') is-invalid @enderror"
        name="penerbit" id="penerbit" rows="3">{{ old('penerbit') }}</textarea>
        @error('penerbit')
        <div class="text-danger">{{ $message }}</div>
        @enderror
        </div>

 </div>
 <button class="btn btn-primary btn-lg btn-block" type="submit">Add</button>
</form>
@endsection
