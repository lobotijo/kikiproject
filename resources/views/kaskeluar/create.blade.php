@extends('dashboard')
@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Buat Kas Keluar</h4>
        {{-- <p class="card-description">
          Basic form elements
        </p> --}}
        <form class="forms-sample" action="{{route('kask.store')}}" method="POST">
            @csrf
          <div class="form-group">
            <label for="exampleInputName1">Kode </label>
            <input name="kode_akun" value="{{old('kode_akun')}}" type="text" class="form-control" id="exampleInputName1" placeholder="Kode Akun">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Transaksi</label>
            <input name="nama_transaksi" value="{{old('nama_transaksi')}}" type="text" class="form-control" id="nama_transaksi" placeholder="Jenis Pengeluaran">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword4">Tanggal Kas Masuk</label>
            <input name="tgl_kas_keluar" value="{{old('tgl_kas_keluar')}}" type="date" class="form-control" >
          </div>
         
          <div class="form-group">
            <label for="exampleInputCity1">Nominal</label>
            <input name="kredit" value="{{old('kredit')}}"  type="text" class="form-control" id="kredit" placeholder="kredit">
          </div>
          <div class="form-group">
            <label for="exampleTextarea1">Keterangan</label>
            <textarea name="keterangan" value="{{old('keterangan')}}" class="form-control" id="exampleTextarea1" rows="4"></textarea>
          </div>
          <button type="submit" class="btn btn-primary me-2">Simpan</button>
          <a href="{{route('kask.index')}}" class="btn btn-light">Batal</a>
        </form>
      </div>
    </div>
  </div>
@endsection