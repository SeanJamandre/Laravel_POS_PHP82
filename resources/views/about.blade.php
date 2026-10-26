@extends('layouts.app')
@section('title', 'About')
@section('content')
    <h1>About Laravel POS</h1>
    <p>Laravel POS is a simple Point of Sale foundation project created for Technical Formative Assessment 5 in IT0049, Web System Technologies.</p>
    <h2>How the application works</h2>
    <p>Routes connect URLs to controller methods. Controllers prepare the data and pass it to Blade views. The views display the pages and share one layout for navigation.</p>
    <h2>Temporary data source</h2>
    <p>The Customer Accounts and User Accounts pages each use a static PHP array containing five sample records. Blade's foreach directive displays each record as a table row.</p>
    <h2>Scope</h2>
    <p>This activity covers four read-only pages. Sales transactions, login, and adding or editing accounts are outside this version's scope. Optional migration and seeder files are included for submission; the pages still use static arrays.</p>
@endsection
