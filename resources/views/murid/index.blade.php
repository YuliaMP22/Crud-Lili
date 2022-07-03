@extends('layouts.master')

@section('content')
    <div class="container">
        <h1 align="center" class="fw-bold">DATA SISWA SMKN 1 SURABAYA</h1>
        <a class="btn btn-secondary" href="/murid/create">Add Data</a>
        <table class="table table-light table-striped">
<tr>
<th>Nomor Absen</th>
<th>Nama</th>
<th>Kelas</th>
<th>Jenis Kelamin</th>
<th>Nama Wali</th>
<th>Alamat</th>
<th>Opsi</th>
</tr>
@foreach ($murid as $sm)
<tr>
<td>{{$loop->iteration}}</td>
<td>{{$sm->nama}}</td>
<td>{{$sm->kelas}}</td>
<td>{{$sm->jenis_kelamin}}</td>
<td>{{$sm->nama_wali}}</td>
<td>{{$sm->alamat}}</td>
<td>
<div class="btn-group" role="group" aria-label="Basic example">    
                        <a class="btn btn-secondary" href="/murid/{{$sm->id}}/edit">Edit</a>
                            <form action="/murid/{{$sm->id}}" method="POST">
                                @csrf
                                @method('delete')
                                <input class="btn btn-danger" type="submit" name="submit" value="Delete" onclick="confirm('Sure?')">
                            </form>
                    </div>
                    </td>
                </tr>
        @endforeach
    </table>
        </div>
@endsection