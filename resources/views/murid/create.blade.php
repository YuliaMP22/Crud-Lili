@extends('layouts.master')

@section('content')
<div class="container">
<h1 align="center" class="fw-bold">Create murid</h1>
<form action="/murid/store" method="POST">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">NAMA</label>
        <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">KELAS</label>
        <input type="text" name="kelas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">JENIS_KELAMIN</label>
            <input type="text" name="jenis_kelamin" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
            @csrf
            <select class="form-select" name="jenis_kelamin">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">NAMA_WALI</label>
            <input type="text" name="nama_wali" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ALAMAT</label>  
            <textarea class="form-control" name="alamat" cols="30" rows="10"></textarea>
        </div>
            <input type="submit" name="submit" class="btn btn-danger" value="Save">
</form>
</div>