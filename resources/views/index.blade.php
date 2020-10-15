@extends('layouts.master')
@section('name', 'Lets try it !')
@section('content')
<div class="content">
    <div class="title m-b-md">
        hallo dari child blade
    </div>

    <div class="links">
        <a href="https://laravel.com/docs">Docs</a>
        <a href="https://laracasts.com">Laracasts</a>
        <a href="https://laravel-news.com">News</a>
        <a href="https://blog.laravel.com">Blog</a>
        <a href="https://nova.laravel.com">Nova</a>
        <a href="https://forge.laravel.com">Forge</a>
        <a href="https://vapor.laravel.com">Vapor</a>
        <a href="https://github.com/laravel/laravel">GitHub</a>
    </div>
</div>
@endsection
@push('cutom-css')
<link href="/css/style.css" rel="stylesheet">
@endpush    