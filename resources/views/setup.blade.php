@extends('layoutss.master')
@section('title', 'Konfigurasi')
@section('content')

    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-10">
                @if (sizeof($setup) == 0)
                <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Aw, yeah!</button>
                @endif
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
                        <th>Hari Kerja</th>
                        <th>Nama Aplikasi</th>
                        <th>Action</th>
                    </tr>
                
                        @foreach ($setup as $no => $data)
                        <tr>
                            <td>{{$no+1}}</td>   
                            <td>{{$data->jumlah_hari_kerja}}</td>
                            <td>{{$data->nama_aplikasi}}</td>
                            <td>
                            <a href="#" data-id="{{$data->id}}" data-toggle="modal" data-target="#Modal-edit" class="badge badge-warning btn-edit">Edit</a>
                            </td>
                        </tr>
                        @endforeach
            </table>
           
            
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

<div class="modal fade" tabindex="-1" role="dialog" id="exampleModal" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="{{route('kon.kir')}}" method="post">
        <div class="modal-body">
                @csrf
                <div class="form-group">
                  <label>Nama Aplikasi</label>
                <input type="text" name="nama_aplikasi" value="{{old('nama_aplikasi')}}" class="form-control">
                  @error('nama_aplikasi')
                      <small class="text-danger" > {{$message}} </small>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Jumlah Hari Kerja</label>
                  <input name="jumlah_hari_kerja" type="number" value="{{old('jumlah_hari_kerja')}}" class="form-control">
                  @error('jumlah_hari_kerja')
                  <small class="text-danger" > {{$message}} </small>
                   @enderror
                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        </form>
    </div>
  </div>

  {{-- modal edit --}}
  
<div class="modal fade"  role="dialog" id="Modal-edit" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="" method="post" id="form-edit">
        <div class="modal-body">
        </div>
        <div class="modal-footer bg-whitesmoke br">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary btn-update">Save changes</button>
        </div>
        </form>
    </div>
  </div>

  {{-- jquery edit data --}}
  <script>
      //menampilkan modal kembali untuk validasi tambah data
      @if($errors->any()) //jika error apapun maka jalankan
        $('#exampleModal').modal('show');
      @endIf

      //read data dimodal untuk edit
      $('.btn-edit').on('click', function(){
          console.log($(this).data('id'))
          let id = $(this).data('id')
          $.ajax({
              url:`/konfirmasi/edit/${id}`,
              method: "GET",
              success: function(data){
                  console.log(data)
                  $('#Modal-edit').find('.modal-body').html(data); //untuk menangkap return dari function konfirmasi edit
                  $('#Modal-edit').modal('show'); //untuk menampilkan modal
              },
              error:function(error){
                  console.log(error)
              }
          });
      });

      //update data menggunakan ajax
      $('.btn-update').on('click', function(){
          let id = $('#form-edit').find('#id_data').val()
          let formData = $('#form-edit').serialize() //ambil semua data yang ada di form termasuk csrf
          console.log(formData)
        //   console.log(id)
          $.ajax({
              url:`/konfirmasi/update/${id}`,
              method: "PATCH",
              data: formData,
              success: function(data){
                  $('#modal-edit').modal('hide'); //untuk hide modal
                  window.location.assign('/konfirmasi'); //reload page
              },
              error:function(error){
                  console.log(error)
                    if(error.status == 422){
                        //jquery carikan saya id dengan modal edit dan
                        //carikan saya atribute dengan name=nama_aplikasi
                        //$('#modal-edit').find('[name="nama_aplikasi"]').
                    }
              }
          });
      });


  </script>
@endpush