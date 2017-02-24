@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th><abbr title="Position">ID</abbr></th>
                <th><abbr title="Website Url">Website Url</abbr></th>
                <th><abbr title="Reason for Report">Reason</abbr></th>
                <th><abbr title="Reported By">By</abbr></th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th><abbr title="Position">ID</abbr></th>
                <th><abbr title="Website Url">Website Url</abbr></th>
                <th><abbr title="Reason for Report">Reason</abbr></th>
                <th><abbr title="Reported By">By</abbr></th>
            </tr>
            </tfoot>
            <tbody>
                @foreach ($reports as $report)
                    <tr>
                        <td>{{ $report->id }}</td>
                        <td>{{ $report->url }}</td>
                        <td>{{ $report->reason }}</td>
                        <td>{{ $report->user->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection