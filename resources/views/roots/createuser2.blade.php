@extends('templates.main')

@push('after-style')
<link rel="stylesheet" href="https://jsuites.net/v3/jsuites.css" type="text/css" />
<link rel="stylesheet" href="https://bossanova.uk/jspreadsheet/v3/jexcel.css" type="text/css" />
<style>
        .jexcel_content {
            width: 100%;
        }

        table.jexcel {
            width: 100%;
        }

    </style>

@endpush

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

          <form action="{{route('admin.store2')}}" method="post" id="formJson">
          @csrf
          <div id="spreadsheet" ></div>
          <input type="hidden" name="formPengguna" id="txt">
          <div class="card-footer text-right">
                    <button class="btn btn-danger">Batal</button>
                    <input type="submit" class="btn btn-primary" value="Simpan">
                    </div>
          </form>

        </section>
@endsection

@push('before-script')
<script src="https://bossanova.uk/jspreadsheet/v3/jexcel.js"></script>
<script src="https://jsuites.net/v3/jsuites.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>



// var data = [
  
// ];

// // jexcel(document.getElementById('spreadsheet'), {
// //     data:data,
// //     minDimensions:[10,10],
// //     columns: [
// //                         { type:'text', title:'Nama', width:120 },
// //                         { type:'text', title:'Gelar Depan', width:50 },
// //                         { type:'text', title:'Gelar Belakang', width:50 },
// //                         { type:'dropdown', title:'Dosen / Tendik', width:'100', source:['ACTIVE','ALUMNI'] },
// //                         { type:'dropdown', title:'Unit', width:100},
// //                         { type:'dropdown', title:'Homebase', width:100 },
// //                         { type:'text', title:'NIP/NIK/NIDN', width:100 },
// //                         { type:'text', title:'Password', width:100 },
// //                         { type:'text', title:'Email', width:100 },
// //                         { type:'text', title:'No.HP', width:100 },
// //                         { type:'text', title:'Whatsapp', width:100 },
// //                     ],

// // });




$(document).ready(function () {
                var data1 = {
                    data:{!! old('formPengguna') ?? '[]' !!},
                    minDimensions:[10,3],
                    columns: [
                        { type:'text', title:'Nama', width:120 },
                        { type:'text', title:'Gelar Depan', width:50 },
                        { type:'text', title:'Gelar Belakang', width:50 },
                        { type:'dropdown', title:'Dosen / Tendik', width:'100', source:[{'id':'dosen', 'name':'Dosen'}, {'id':'tendik', 'name':'Tenaga Kependidikan'}] },
                        { type:'dropdown', title:'Unit', width:100 , source:{!! $units !!}, autocomplete:true},
                        { type:'dropdown', title:'Homebase', width:100, source:{!! $homebase !!}, autocomplete:true },
                        { type:'dropdown', title:'Status', width:'100', source:[{'id':'pns', 'name':'PNS'}, {'id':'pppk', 'name':'PPPK'}, {'id':'tetap', 'name':'Tetap Non PNS'}, {'id':'kontrak', 'name':'Kontrak'}] },
                        { type:'text', title:'NIP/NIK/NIDN', width:100 },
                        { type:'text', title:'Password', width:100 },
                        { type:'text', title:'Email', width:100 },
                        { type:'text', title:'No.HP', width:100 },
                        { type:'text', title:'Whatsapp', width:100 },
                    ],
                }
                var tableJexcel = jexcel(document.getElementById('spreadsheet'), data1);
                $('#formJson').on('submit', function () {
                    var data = tableJexcel.getData();
                    console.log(data);

                    $('#txt').val(JSON.stringify(data));
                    return true;
                })
            });



            

</script>

@endpush