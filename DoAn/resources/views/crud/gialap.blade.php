@extends('dashboard')

@section('content')
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table table-dark table-striped">
                    <tr>
                        <td>#</td>
                        <td>Username</td>
                        <td>Email</td>
                        <td>Is admin</td>
                        <td></td>
                    </tr>

                    @foreach($user as $carlos)
                    <tr>
                        <td>{{ $carlos->user_id }}</td>
                        <td>{{ $carlos->user_name }}</td>
                        <td>{{ $carlos->email }}</td>
                        @if($carlos->is_admin == 1)
                        <td>Admin</td>
                        @else
                        <td>User</td>
                        @endif
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection