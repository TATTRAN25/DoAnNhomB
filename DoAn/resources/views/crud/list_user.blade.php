@extends('layout')

@section('content')
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
    <div class="list-user mt-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <table class="mx-auto table table-striped">
                        <tr>
                            <th>#</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Quyền hạn</th>
                        </tr>
                        @foreach ($users as $user)
                            @if ($user->user_id != session('user_id')[0])
                                <tr>
                                    <td>{{ $user->user_id }}</td>
                                    <td>{{ $user->user_name }}</td>
                                    <td>{{ $user->email }}</td>
                                    @if ($user->is_admin == 1)
                                        <td><a href="{{ route('role', ['id' => $user->user_id]) }}" style="text-decoration: none; color:black">Admin</a></td>
                                    @else
                                        <td><a href="{{ route('role', ['id' => $user->user_id]) }}" style="text-decoration: none; color:black">User</a></td>
                                    @endif
                                </tr>
                            @endif
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
