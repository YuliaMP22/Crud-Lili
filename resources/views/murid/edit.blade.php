@extends('layouts.master')

@section('content')
<div class="container">
<h1>Edit Data</h1>

<form action="/murid/{{$murid->id}}" method="POST">
    @method('put')
<div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">nama</label>
        <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$murid->nama}}">
    </div>
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">kelas</label>
        <input type="text" name="kelas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$murid->kelas}}">
    </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">jenis_kelamin</label>
            <input type="text" name="jenis_kelamin" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"value="{{$murid->jenis_kelamin}}">
    </div>
            @csrf
            <select class="form-select" name="jenis_kelamin">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="L" @if($murid->jenis_kelamin == "L") selected @endif>Laki-laki</option>
                <option value="P" @if($murid->jenis_kelamin == "P") selected @endif>Perempuan</option>
            </select><br>  
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">nama_wali</label>
            <input type="text" name="nama_wali" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$murid->nama_wali}}">
    </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">alamat</label>  
            <textarea class="form-control" name="alamat" cols="30" rows="10">{{$murid->alamat}}</textarea><br>
        </div>
            <input type="submit" name="submit" class="btn btn-danger" value="Update">
</form>
</div>

@endsection