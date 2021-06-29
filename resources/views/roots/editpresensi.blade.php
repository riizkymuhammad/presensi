@extends('templates.main')

@section('content')
<section class="section">
          <div class="section-header">
            <h1>Presensi</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">User</a></div>
              <div class="breadcrumb-item"><a href="#">Create</a></div>
            </div>
          </div>
          <div class="section-body">
            <h2 class="section-title">Edit Data Presensi</h2>

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
                    @foreach($presensi as $p)
                  <form action="{{route('admin.updatepresensi')}}" method="post">
                  @csrf
                  <input type="hidden" name="ID" value="{{ $p->ID }}"> <br/>
                    <div class="card-header">
                      <h4>Edit Data Presensi</h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" required="" name="PIN" placeholder="Masukkan Nama Lengkap" readonly  value="{{$p->namauser->name ?? $p->PIN}}">
                      </div>
                      <div class="form-group">
                        <label>NIP / NIK / NIDN</label>
                        <input type="text" class="form-control" required="" name="PIN" placeholder="Masukkan NIP / NIK/ NIDN" readonly  value="{{$p->PIN}}">
                      </div>
                      <div class="form-group">
                        <label>Tanggal Presensi</label>
                        <input type="date" class="form-control" required="" name="ScanDate" placeholder="Masukkan Tanggal Presensi"  value="{{$p->ScanDate ?? old('ScanDate')}}">
                      </div>
                      <div class="form-group">
                        <label>Presensi Masuk</label>
                        <input type="time" class="form-control" required="" name="ScanIn" placeholder="Masukkan Waktu Presensi Masuk"  value="{{$p->ScanIn ?? old('ScanIn')}}">
                      </div>
                      <div class="form-group">
                        <label>Lokasi Presensi</label>
                        <input type="text" class="form-control" required="" name="SN_IN" placeholder="Masukkan Lokasi Presensi"  value="{{$p->SN_IN ?? old('SN_IN')}}">
                      </div>
                      <div class="form-group">
                        <label>Presensi Pulang</label>
                        <input type="text" class="form-control" required="" name="ScanOut" placeholder="Masukkan Waktu Presensi Pulang"  value="{{$p->ScanOut ?? old('ScanOut')}}">
                      </div>
                      <div class="form-group">
                        <label>Lokasi Presensi Pulang</label>
                        <input type="text" class="form-control" required="" name="SN_OUT" placeholder="Masukkan Lokasi Presensi"  value="{{$p->SN_OUT ?? old('SN_OUT')}}">
                      </div>
                    <div class="card-footer text-right">
                    <button class="btn btn-danger">Batal</button>
                    <input type="submit" class="btn btn-primary" value="Simpan">
                    </div>
                  </form>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </section>
@endsection