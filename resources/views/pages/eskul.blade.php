@extends('layout')

@section('title', 'eskul Page')

@section('content')
    <h2>eskul.</h2>
    <div>
        <table cellpadding=10 cellspacing=0 border=1>
            <tr>
                <th>id</th>
                <th>Nama eskul</th>
                <th>Nama pembina</th>
                <th>Jumlah anggota</th>
            </tr>
            @foreach($data as $person)
            <tr>
                <td>{{$loop->iteration}}</td>
             
                <td>{{$person->namaeskul}}</td>
                <td>{{$person->namapembina}}</td>
                <td>{{$person->jumlahanggota}}</td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection