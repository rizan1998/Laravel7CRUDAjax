@extends('layouts.master')
@section('title', 'Crud')
@section('content')

    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-10">
            <a href="{{route('cr.a')}}" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i>Create a new data</a>
            <hr>
            @if (session('message'))
                <div class="alert alert-success alert-dismissible show fade">
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert"><span>x</span></button>
                        {{session('message')}}
                    </div>
                </div>
            @endif
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
                            <a href="{{route('cr.e', $data->id)}}" class="badge badge-warning">Edit</a>
                                <a href="#" data-id="{{$data->id}}" class="badge badge-danger swal-cruddelete">
                                <form action="{{route('cr.d',$data->id)}}" id="delete{{$data->id}}" method="post">
                                    @csrf
                                    @method('delete')
                                </form>
                                Delete</a>
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
@push('pages-sctipts')
<script src="/js/sweetalert.min.js"></script>
@endpush

@push('after-scripts')
    <script>
        $(".swal-cruddelete").click(function(e) {
            id = e.target.dataset.id;
            swal({
                title: 'Are you sure?'+id,
                text: 'Once deleted, you will not be able to recover this imaginary file!',
                icon: 'warning',
                buttons: true,
                dangerMode: true,
              })
              .then((willDelete) => {
                if (willDelete) {
                swal('Poof! Your imaginary file has been deleted!', {
                  icon: 'success',
                });
                $(`#delete${id}`).submit();
                } else {
                swal('Your imaginary file is safe!');
                }
              });
          });
    </script>
@endpush