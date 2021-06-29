@extends('templates.main')

@section('content')
<section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Prsensi</a></div>
            </div>
          </div>

          <div class="section-body">
           

            <div class="row">

              <div class="col-12 col-md-12 col-lg-12">
              <div class="card">
                  <div class="card-header">
                  <h4>Data User</h4>
                    <div class="card-header-action">
                    <a href="{{route('admin.create2')}}" class="btn btn-primary">Tambah User Excel </a>
                    <a href="{{route('admin.create')}}" class="btn btn-primary">Tambah Data User </a>
                  </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-md">
                      <thead>
                        <tr>
                        <th>No</th>
                        <th>NIP / NIK / NIDN</th>
                        <th>Nama</th>
                        <th>Presensi Masuk</th>
                        <th>Lokasi Presensi Masuk</th>
                        <th>Presensi Pulang</th>
                        <th>Lokasi Presensi Pulang</th>
                        <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                      @php $x = 1; @endphp
                      @foreach($presensi as $p)
                            <tr>
                            <td>{{ $x++ }}</td>
                            <td>{{$p->PIN}}</td>
                            <td>{{$p->namauser->nama ?? '-'}}</td>
                            <td>{{$p->ScanIn}}</td>
                            <td>{{$p->SN_IN}}</td>
                            <td>{{$p->ScanOut}}</td>
                            <td>{{$p->SN_OUT}}</td>
                            <td><a href="/admin/presensi/edit/{{ $p->ID }}" class="btn btn-icon btn-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ubah Data"><i class="far fa-edit"></i></a></td>             
                            </tr>
                            @endforeach
                        
                      </tbody>
                    </table>
                  </div>
                </div>

              </div>
              <div class="card-footer text-right">
                    <nav class="d-inline-block">
                      <ul class="pagination mb-0">      
                        {{ $presensi->links() }}
                      </ul>
                    </nav>
                  </div>
            </div>
          </div>
        </section>
@endsection