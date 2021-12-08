<!-- menggunakan kerangka dari master.blade.php -->
@extends('master')

@section('header')
<h2 class="text-light" style="border-radius: 10px; padding-top:10px; padding-bottom:10px; background-color:#023e8a; margin-bottom:20px;">
    <center>List Artikel</center>
</h2>
@if($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif

@endsection

@section('title', 'Halaman Khusus Admin')

@section('main')
<div class="col-md-12 bg-white p-4" style="border-radius: 6px;">
    <a href="/add"><button class="btn btn-primary mb-3">Tambah Artikel</button></a>
    <table class="table table-responsive table-hover table-stripped">
        <thead>
            <tr>
                <th>No.</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th width="15%">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $i => $article)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $article->judul }}</td>
                <td>{{ $article->deskripsi }}</td>
                <td>
                    <a href="/edit/{{ $article->id }}"><button class="btn btn-success">Edit</button></a>
                    <a href="/delete/{{ $article->id }}"><button class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection