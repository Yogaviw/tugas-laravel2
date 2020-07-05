@extends('master')
@section('content')
<div class="card">
    @foreach ($jawabans as $jawaban)
        <h2>{{$jawaban->isi}}</h2> <br>
    @endforeach

</div>
@endsection