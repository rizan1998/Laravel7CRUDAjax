@extends('layouts.master')
@section('title', 'Crud')
@section('content')

    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-10">
            <a href="{{route('cr.a')}}" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i>Create a new data</a>
            <hr>
            <table class="table">
                    <tr>
                        <th>No</th>
                        <th>Kode barang</th>
                        <th>Nama barang</th>
                        <th>Action</th>
                    </tr>
                
                        @foreach ($data_barang as $no => $data)
                        <tr>
                            <td>{{$data_barang->firstItem()+$no}}</td>   
                            <td>{{$data->kode_barang}}</td>
                            <td>{{$data->nama_barang}}</td>
                            <td>
                                <a href="" class="badge badge-warning">Edit</a>
                                <a href="" class="badge badge-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
            </table>
            {{$data_barang->links()}}
            </div>
        </div>
    </div>
@endsection
@push('cutom-css')
<link href="css/style.css" rel="stylesheet">
@endpush    