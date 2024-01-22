@extends('layouts.main')

@section('container')
    <link rel="stylesheet" href="css/teams.css">

    <table id="tabelTeams" class="table-bordered">
        <tr>
            <th>Nama Sekolah</th>
            <th>Anggota</th>
            <th>Soal</th>
            <th>Skor</th>
        </tr>
        @foreach ($teams as $team)
            <tr>
                <td>{{ $team['regu'] }}</td>
                <td>
                    @foreach ($team['anggota'] as $anggota)
                        {{ $anggota }}<br>
                    @endforeach
                </td>
                <td>{{ $team['soal'] }}/20</td>
                <td>{{ $team['skor'] }}/100</td>
            </tr>
        @endforeach
    </table>
@endsection
