@extends('layouts.app')

@section('content')
    {{--<table class="table">
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
    </table>--}}

    <table class="table">
        <thead>
        <tr>
            <th><abbr title="Position">No</abbr></th>
            <th><abbr title="Website Url">Website Url</abbr></th>
            <th><abbr title="Reported Times">Times</abbr></th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th><abbr title="Position">No</abbr></th>
            <th><abbr title="Website Url">Website Url</abbr></th>
            <th><abbr title="Reported Times">Times</abbr></th>
        </tr>
        </tfoot>
        <tbody>
            @foreach ($reports as $key => $report)
                <tr>
                    <td>
                        <strong>{{ $key+1 }}</strong>
                    </td>
                    <td>{{ $report->url }}</td>
                    <td>{{ $report->times }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection