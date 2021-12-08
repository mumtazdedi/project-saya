<!-- menggunakan kerangka dari halaman master.blade.php -->
@extends('master')

<!-- membuat komponen title sebagai judul halaman -->
@section('title', 'Blog')

<!-- membuat header dan tombol tambah artikel di atas -->
@section('header')
<center>
    <div>
        <h2 class="text-light" style="border-radius: 10px; padding-top:10px; padding-bottom:10px; background-color:#023e8a; margin-bottom:20px;">BLOG</h2>
    </div>
    <a href="/add"><button class="btn btn-light">Tambah Artikel</button></a>
</center>
@endsection

<!-- membuat komponen main yang berisi form untuk mengisi judul dan isi artikel -->
@section('main')
@foreach ($articles as $article)
<div class="col-md-4 col-sm-12 mt-4">
    <div class="card">
        <img src="https://www.whatsnxt.io/wp-content/uploads/2016/04/dummy-post-horisontal-thegem-blog-default.jpg" class="card-img-top" alt="gambar">
        <div class="card-body">
            <h5 class="card-title">{{ $article->judul }}</h5>
            <a href="/detail/{{ $article->id }}" class="btn btn-primary">Baca Artikel</a>
        </div>
    </div>
</div>
@endforeach
@endsection