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
                <td>{{ $team->nama }}</td>
                <td>
                    @foreach ($anggota as $a)
                        @if ($team->id == $a->regus_id)
                            {{ $a->nama }} ({{ $a->nisn }})<br>
                        @endif
                    @endforeach
                </td>

                {{-- 13 menit 44 detik --}}

                <td>{{ $team->soal }}/20</td>
                <td>{{ $team->skor }}/100</td>
            </tr>
        @endforeach
    </table>
@endsection
