@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <p class="eyebrow">POINT OF SALE FOUNDATIONS</p>
    <h1>Laravel POS System</h1>
    <p>Welcome to the Laravel Point of Sale System.</p>
    <p>This application demonstrates Laravel routes, controllers, Blade templates, navigation links, and static PHP array data.</p>
    <h2>Available Pages</h2>
    <div class="cards">
        <a href="{{ route('about') }}"><h3>About</h3><p>Learn about the application and how it works.</p></a>
        <a href="{{ route('customers') }}"><h3>Customer Accounts</h3><p>View five sample customer records.</p></a>
        <a href="{{ route('users') }}"><h3>User Accounts</h3><p>View five sample staff accounts and roles.</p></a>
    </div>
@endsection
