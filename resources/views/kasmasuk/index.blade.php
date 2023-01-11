@extends('dashboard')
@section('content')



<div class="row">
    <div class="col-md-12 stretch-card">
      
      <div class="card">
     
        <div class="card-body">
          <p class="card-title">Kas Masuk</p>
          <a href="{{route('kasm.create')}}" class="btn btn-primary btn-rounded text-white btn-fw float-right">
              Input
          </a>
          
          <div class="table-responsive">
            <table id="recent-purchases-listing" class="table">
              <thead>
                <tr>
                    <th>Kode Akun</th>
                    <th>Sumber</th>
                    <th>Tgl Kas Masuk</th>
                    <th>Debit</th>
                    <th>Kredit</th>
                    <th>Keerangan</th>
                    <th>Action</th>
                </tr>
              </thead>
              <tbody>
               
                  @foreach ($kasm as $kas)
                  <tr>
                    <td>{{$kas->kode_akun}}</td>
                    <td>{{$kas->sumber}}</td>
                    <td>{{$kas->tgl_kas_masuk}}</td>
                    <td>{{$kas->debit}}</td>
                    <td>{{$kas->kredit}}</td>
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
