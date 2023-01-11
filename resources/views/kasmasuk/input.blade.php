@extends('dashboard')
@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Input Kas Masuk</h4>
        <p class="card-description">
          Basic form elements
        </p>
        <form class="forms-sample" action="{{route('kasm.store')}}" method="POST">
            @csrf
          <div class="form-group">
            <label for="exampleInputName1">Kode </label>
            <input name="kode_akun" value="{{old('kode_akun')}}" type="text" class="form-control" id="exampleInputName1" placeholder="Kode Akun">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Sumber</label>
            <select name="sumber" class="form-control">
                <option value="Kas Masuk">Kas Masuk</option>
                <option value="Bank MAsuk">Bank Masuk</option>
                <option value="transfer">Transferan</option>
              </select>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword4">Tanggal Kas Masuk</label>
            <input name="tgl_kas_masuk" value="{{old('tgl_kas_masuk')}}" type="date" class="form-control" id="exampleInputPassword4" placeholder="Password">
          </div>
         
          <div class="form-group">
            <label for="exampleInputCity1">Nominal</label>
            <input name="kredit" value="{{old('kredit')}}"  type="text" class="form-control" id="exampleInputCity1" placeholder="Kredit">
          </div>
          <div class="form-group">
            <label for="exampleTextarea1">Keerangan</label>
            <textarea name="keterangan" value="{{old('keterangan')}}" class="form-control" id="exampleTextarea1" rows="4"></textarea>
          </div>
          <button type="submit" class="btn btn-primary me-2">Simpan</button>
          <a href="{{route('kasm.index')}}" class="btn btn-light">Batal</a>
        </form>
      </div>
    </div>
  </div>
@endsection