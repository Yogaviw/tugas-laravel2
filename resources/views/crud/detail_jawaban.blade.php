@extends('master')
@section('content')
<div class="card">
 
    <h2>Pertanyaan </h2><br>
    <!-- ngambil di table jawaban -->
    <p> Judul : {{$pertanyaan->judul}}</p> <br>
    <p> isi : {{$pertanyaan->isi}}</p> <br>
    <p> tanggal dibuat : {{$pertanyaan->tanggal_dibuat}}</p><br>
    <p> tanggal di update : {{$pertanyaan->tanggal_diperbaharui}}</p><br>

    <h2>Jawaban/s</h2>
    @foreach ($jawabans as $jawaban)
    <p> {{$jawaban->isi}}</p>
    @endforeach
</div>
@endsection
