@csrf
<div class="form-group">
  <label>Nama Aplikasi</label>
<input type="text" name="nama_aplikasi" value="{{$setup->nama_aplikasi}}" class="form-control">
  @error('nama_aplikasi')
      <small class="text-danger" > {{$message}} </small>
  @enderror
</div>
<input type="hidden" name="id" id="id_data" value="{{$setup->id}}">
<div class="form-group">
  <label>Jumlah Hari Kerja</label>
  <input name="jumlah_hari_kerja" type="number" value="{{$setup->jumlah_hari_kerja}}" class="form-control">
  @error('jumlah_hari_kerja')
  <small class="text-danger" > {{$message}} </small>
   @enderror
</div>