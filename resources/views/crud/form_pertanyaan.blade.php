@extends('master')
@section('content')
<div class=card>
    <form action="{{url('/pertanyaan')}}" method="POST">
    @csrf
    <label for="Judul Pertanyaan">Judul Pertanyaan</label>
    <input type="text" name="judul" class="form-control">
    <label for="">Pertanyaan Baru</label>
    <textarea name="isi" id="" cols="30" rows="10 " class="form-control"></textarea>
    <input type="" hidden name ="tanggal_dibuat" value="{{ \Carbon\Carbon::now()}}">
    <input type="" hidden name="tanggal_diperbaharui" value="{{ \Carbon\Carbon::now()}}">
    <br>
    <button class="btn btn-primary" type="submit">Create</button>

    </form>
</div>
@endsection