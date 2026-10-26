@extends('layouts.app')
@section('title', 'Customer Accounts')
@section('content')
    <h1>Customer Accounts</h1>
    <p>Sample customers for the POS application. These are fictional records.</p>
    <p class="count">{{ count($customers) }} accounts</p>
    <div class="table-wrap">
        <table>
            <caption>Customer account list</caption>
            <thead><tr><th scope="col">Id</th><th scope="col">Name</th><th scope="col">Email</th><th scope="col">Phone</th><th scope="col">Address</th></tr></thead>
            <tbody>
                @foreach ($customers as $record)
                    <tr><td>{{ $record['id'] }}</td><td>{{ $record['name'] }}</td><td>{{ $record['email'] }}</td><td>{{ $record['phone'] }}</td><td>{{ $record['address'] }}</td></tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
