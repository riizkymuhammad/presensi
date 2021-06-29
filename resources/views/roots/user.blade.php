@extends('templates.main')

@section('content')
<section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">User</a></div>
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
                        <th>Gelar Depan</th>
                        <th>Gelar Belakang</th>
                        <th>Dosen / Karyawan</th>
                        <th>UNIT</th>
                        <th>Homebase</th>
                        <th>Status</th>
                        <th>Email</th>
                        <th>No HP</th>
                        <th>Whatsapp</th>
                        <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                      @php $x = 1; @endphp
                      @foreach($users as $p)
                            <tr>
                            <td>{{ $x++ }}</td>
                            <td>{{$p->identity_number}}</td>
                            <td>{{$p->name}}</td>
                            <td>{{$p->gelar_depan}}</td>
                            <td>{{$p->gelar_belakang}}</td>
                            <td>{{$p->doskar}}</td>
                            <td>{{$p->unitkerja->nama_singkat}}</td>
                            <td>{{$p->homebases->nama}}</td>
                            <td>{{$p->status}}</td>
                            <td>{{$p->email}}</td>
                            <td>{{$p->no_hp}}</td>
                            <td>{{$p->whatsapp}}</td>
                            <td><a href="#" class="btn btn-icon btn-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ubah Data"><i class="far fa-edit"></i></a></td>
                            
                            </tr>
                            @endforeach
                        
                      </tbody>
                    </table>
                  
                  </div>
                </div>

              </div>
            </div>
          </div>
        </section>
@endsection