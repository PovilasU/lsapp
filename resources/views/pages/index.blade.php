@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Welcome to Povilas Laravel Blog App!</h1>
        <p>This is the laravel CRUD demo application</p>
        <p>Features: Registration (with validation), Login, Logout, Add/Edit/Delete posts, Upload Images, Pagination, and more... </p>
        <p>Software architecture pattern: Model View Controller (MVC)  </p> 
        <p>Technologies:  HTML, CSS, SASS, Bootrsap 4, JQuery, PHP 7, Laravel 5.7, Artisan, Coposer, Node, Git bash</p>
        <p>Database: MySQL</p>
        <p>Created at: 22/02/2019</p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a><a class="btn btn-success btn-lg" href="/register" role="button">Register</a> </p>
    </div>
@endsection

