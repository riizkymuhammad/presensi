@extends('templates.main')

@section('content')
<section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Index</a></div>
            </div>
          </div>

          <div class="section-body">
           

            <div class="row">

              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Presensi Unit</h4>
                  </div>
                  <div class="card-body">
                    <div class="section-title mt-0">Presensi Unit PTIK Hari ini</div>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                        <th>NIP / NIK</th>
                        <th>NAMA</th>
                        <th>Lokasi Masuk</th>
                        <th>Masuk</th>
                        <th>Keluar</th>
                        <th>Lokasi Keluar</th>
                        </tr>
                      </thead>
                      <tbody>
                     
                            
                            <tr>
                                <td></td>
                                <td></td>
                                <td > <a href="#" class="btn btn-primary btn-icon-split btn-sm">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-file-alt"></i>
                                        </span>
                                        <span class="text">Detail</span>
                                    </a></td>
                        
                      </tbody>
                    </table>
                  
                  </div>
                </div>

              </div>
            </div>
          </div>
        </section>
@endsection