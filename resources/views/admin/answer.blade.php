@extends('admin.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Question</h1>
    </div>

    <div class="table-responsive small">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Answer</th>
                    <th scope="col">Correct</th>
                    <th scope="col">Question Id</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($answers as $answer)
                    <tr>
                        <td>{{ $answer->id }}</td>
                        <td>{{ $answer->answer }}</td>
                        <td>{{ $answer->correct }}</td>
                        <td>{{ $answer->questions_id }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
