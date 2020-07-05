@extends('master')
@section('content')
<div class="card">
    <a href="{{url('/pertanyaan/create')}}">
    <button type="submit" class="btn btn-primary">Create Pertanayaan</button>
    </a>
    <table class="table table-bordered">
    
        <thead>
            <th>No</th>
            <th>List Pertanyaan</th>
            <th>Edit Pertanyaan</th>
            <th>Detai Jawababan</th>
            <th>Masukan Jawaban</th>
            <th>Detai QnA</th>
            <th>Delete Pertanyaan</th>
        </thead>
        <tbody>
        <tr>
            @foreach($pertanyaans as $pertanyaan)
            <td>{{ $loop->iteration }} </td>
            <td>{{ $pertanyaan->isi }} </td>
            <td>
                <a href="{{url('/pertanyaan/'.$pertanyaan->id.'/edit ') }}">
                    <button type="submit" class="btn btn-warning">Edit Pertanyaan</button>
                </a>
            </td>
            <td>
                <a href="{{url('/jawaban/'.$pertanyaan->id)}}">
                    <button type="submit" class="btn btn-primary success">Lihat Jawaban</button>
                </a>
            </td>
            <td>
                <form action="{{url('/jawaban/'.$pertanyaan->id)}}" method="post">
                    @csrf
                    <input type="text" name="isi">
                    <input hidden name="pertanyaan_id" value="{{$pertanyaan->id}}">
                    <input hidden name="tanggal_dibuat" value="{{\Carbon\Carbon::now()}}">             
                    <input hidden name="tanggal_diperbaharui" value="{{\Carbon\Carbon::now()}}">               
                    <button type="submit" class="btn btn-success">Submit Jawaban</button>
                </form>
                </td>
                <td>
                    <a href="{{url('/pertanyaan/'.$pertanyaan->id)}}">
                    <button type="submit" class="btn btn-primary">Lihat QnA</button>
                    </a>
                </td>
                <td>
                    <form method="POST" action="{{url('/pertanyaan/'.$pertanyaan->id)}}">
                        @csrf
                        {{method_field('delete')}}
                        <button type="submit" class="btn btn-danger">Delete Pertanyaan</button>
                    </form>
                    </td>
             </td>
        </tr>
            

            @endforeach
        </tbody>
    </table>
</div>
@endsection