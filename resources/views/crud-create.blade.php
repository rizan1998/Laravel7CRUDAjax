@extends('layouts.master')
@section('title', 'Create')
@section('content')

    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                      <h4>HTML5 Form Basic</h4>
                    </div>
                    <div class="card-body">
                    <form action="{{route('cr.s')}}" method="post">
                      @csrf
                      <div class="form-group">
                        <label>kode barang</label>
                        <input type="text" name="kode_barang" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>nama barang</label>
                        <input name="nama_barang" type="text" class="form-control">
                      </div>
                  
                    <div class="card-footer text-right">
                      <button class="btn btn-primary mr-1" type="submit">Submit</button>
                      <button class="btn btn-secondary" type="reset">Reset</button>
                    </div>
                  </form>
                  </div>
            </div>
        </div>
    </div>
@endsection
@push('cutom-css')
<link href="/css/style.css" rel="stylesheet">
@endpush    