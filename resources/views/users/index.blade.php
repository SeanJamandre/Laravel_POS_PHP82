@extends('layouts.app')
@section('title', 'User Accounts')
@section('content')
    <h1>User Accounts</h1>
    <p>Sample users for the POS application. These are fictional records.</p>
    <p class="count">{{ count($users) }} accounts</p>
    <div class="table-wrap">
        <table>
            <caption>User account list</caption>
            <thead><tr><th scope="col">Id</th><th scope="col">Name</th><th scope="col">Username</th><th scope="col">Email</th><th scope="col">Role</th></tr></thead>
            <tbody>
                @foreach ($users as $record)
                    <tr><td>{{ $record['id'] }}</td><td>{{ $record['name'] }}</td><td>{{ $record['username'] }}</td><td>{{ $record['email'] }}</td><td>{{ $record['role'] }}</td></tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
