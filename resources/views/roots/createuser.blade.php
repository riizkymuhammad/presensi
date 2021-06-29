@extends('templates.main')

@section('content')
<section class="section">
          <div class="section-header">
            <h1>Pengguna</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">User</a></div>
              <div class="breadcrumb-item"><a href="#">Create</a></div>
            </div>
          </div>
          <div class="section-body">
            <h2 class="section-title">Tambah Data User</h2>

            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                @if(count($errors) > 0)
                <div class="alert alert-danger alert-dismissible show fade">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>×</span>
                        </button>
                        <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                      </div>
                    </div>
                    @endif
                  <form action="{{route('admin.store')}}" method="post">
                  @csrf
                    <div class="card-header">
                      <h4>Tambah Data User</h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" required="" name="name" placeholder="Masukkan Nama Lengkap">
                      </div>
                      <div class="form-group">
                        <label>Gelar Depan</label>
                        <input type="text" class="form-control" required="" name="gelar_depan" placeholder="Masukkan Gelar Depan">
                      </div>
                      <div class="form-group">
                        <label>Gelar Belakang</label>
                        <input type="text" class="form-control" required="" name="gelar_belakang" placeholder="Masukkan Gelar Belakang">
                      </div>
                      <div class="form-group">
                      <label>Dosen / Tenaga Kependidikan</label>
                      <select class="form-control" name="doskar">
                      <option selected>Pilih Dosen / Tenaga Kependidikan</option>
                        <option value="dosen">Dosen</option>
                        <option value="tendik">Tenaga Kependidikan</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Unit Kerja</label>
                      <select class="form-control" name="unit_kerja">
                      <option selected>Pilih Unit Kerja</option>
                      @foreach($units as $key => $value)
                          <option  value="{{$key}}">{{$value}}</option>
                      @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Homebase</label>
                      <select class="form-control" name="homebase">
                      <option selected>Pilih Homebase</option>
                      @foreach($homebase as $key => $value)
                          <option  value="{{$key}}">{{$value}}</option>
                      @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label>PNS / PPPK / Tetap Non PNS / Kontrak</label>
                      <select class="form-control" name="status">
                      <option selected>Pilih Status</option>
                        <option value="pns">PNS</option>
                        <option value="pppk">PPPK</option>
                        <option value="tetap">Tetap Non PNS</option>
                        <option value="kontrak">Kontrak</option>
                      </select>
                    </div>
                      <div class="form-group">
                        <label>NIP / NIK / NIDN</label>
                        <input type="number" class="form-control" required="" name="identity_number">
                      </div>
                      <div class="form-group">
                        <label>Password Hotspot</label>
                        <input type="text" class="form-control" required="" name="password">
                      </div>
                      <div class="form-group">
                        <label>Email UMRAH</label>
                        <input type="email" class="form-control" required="" name="email">
                      </div>
                      <div class="form-group">
                        <label>No. Handphone</label>
                        <input type="number" class="form-control" required="" name="no_hp">
                      </div>
                      <div class="form-group">
                        <label>No. Whatsapp</label>
                        <input type="number" class="form-control" required="" name="whatsapp">
                      </div>
                    <div class="card-footer text-right">
                    <button class="btn btn-danger">Batal</button>
                    <input type="submit" class="btn btn-primary" value="Simpan">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
@endsection