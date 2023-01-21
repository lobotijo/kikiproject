@extends('dashboard')


@section('content')
    
@extends('dashboard')
@section('content')



<div class="row">
    <div class="col-md-12 stretch-card">
      
      <div class="card">
     
        <div class="card-body">
          <p class="card-title">Kas Keluar</p>
          <a href="{{route('kask.create')}}" class="btn btn-primary btn-rounded text-white btn-fw float-right">
              Create
          </a>
          
          <div class="table-responsive">
            <table id="recent-purchases-listing" class="table">
              <thead>
                <tr>
                    <th>Kode Akun</th>
                    <th>Pengeluaran</th>
                    <th>Tgl Kas Masuk</th>
                    <th>Debit</th>
                    <th>Kredit</th>
                    <th>Saldo</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                </tr>
              </thead>
              <tbody>
               
                  @foreach ($kask as $kas)
                  <tr>
                    <td>{{$kas->kode_akun}}</td>
                    <td>{{$kas->nama_transaksi}}</td>
                    <td>{{$kas->tgl_kas_keluar}}</td>
                    <td>{{$kas->debit}}</td>
                    <td>{{$kas->kredit}}</td>
                    <td>{{$kas->saldo}}</td>
                    <td>{{$kas->keterangan}}</td>
                    <td>
                      <div class="align-center">
                        <a href=""><i class="mdi mdi-chevron-double-left "></i></a>
                        <a href=""><i class="mdi mdi-delete "></i></a>
                      </div>
                      
                    </td>
                  </tr>
                  @endforeach    
                            
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
