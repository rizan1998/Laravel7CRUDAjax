@extends('layouts.master')
@section('title', 'Crud')
@section('content')

    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
                <a href="/crud/create" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i>Create a new data</a>
            </div>
        </div>
    </div>
@endsection
@push('cutom-css')
<link href="css/style.css" rel="stylesheet">
@endpush    