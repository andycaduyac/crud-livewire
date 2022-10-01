@extends('base')
@extends('navbar')
@section('content')
    <div class="m-5 col-md-5">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Timestamp</th>
                    <th>Logs Entry</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $logs as $log )
                    <tr>
                        <td>{{ $log->created_at }}</td>
                        <td>{{ $log->log_entry }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- <a href='/clear'  class="btn btn-danger">Clear Logs</a> --}}
    </div>
@endsection
