@extends('layouts.app')
@section('content')
    <div class="container">
        <form class="login" method="POST" action="/setor" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" name="judul" class="form-control" id="judul" placeholder="Masukkan judul">
            </div>            
            <div class="form-group">
                <label for="deskripsi">Deskrispsi</label>
                <input type="text" name="deskripsi" class="form-control" id="deskripsi" placeholder="Masukkan deskripsi">
            </div>
            <div class="form-group">
                <label for="produser">Produser</label>
                <input type="text" name="produser" class="form-control" id="produser" placeholder="Masukkan produser">
            </div>
            <div class="form-group">
               <label for="file">Gambar</label>
                <input type="file" name="file" class="form-control" id="file" placeholder="Masukkan image">
            </div>           
            <button type="submit" class="btn btn-success btn-lg btn-block">Create</button>
        </form>
    </div>
   
@endsection