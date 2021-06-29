<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Unit;
use App\Models\User;
use App\Models\Scanlog;
use App\Models\Homebase;

class RootController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function user()
    {
        $users = User::where('role','4')->paginate(20);
        return view('roots.user',compact('users'));
    }

    public function presensi()
    {
        $presensi = Scanlog::paginate(25);
        return view('roots.presensi',compact('presensi'));
    }

    public function editpresensi($id)
    {
        $presensi = Scanlog::where('id',$id)->get();
        return view('roots.editpresensi',compact('presensi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $units = Unit::pluck('nama_unit', 'id')
        ->toArray();
        $homebase = Homebase::pluck('nama', 'id')
        ->toArray();
        return view('roots.createuser',compact('units','homebase'));
    }

    public function create2()
    {
        $units = Unit::select('id','nama_singkat as name')
        ->get()->toJson();
        $homebase = Homebase::select('id','nama as name')
        ->get()->toJson();
        return view('roots.createuser2',compact('units','homebase'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $messages = [
            'name.required' => 'Form nama harus diisi',
            'gelar_depan.required' => 'Form gelar depan harus diisi',
            'gelar_belakang.required' => 'Form gelar belakang harus diisi',
            'doskar.required' => 'Form dosen / karyawan harus diisi',
            'unit_kerja.required' => 'Form Unit harus diisi',
            'homebase.required' => 'Form homabase formasi harus diisi',
            'status.required' => 'Form status harus diisi',
            'identity_number.required' => 'Form nip / nik / nidn harus diisi',
            'password.required' => 'Form password formasi harus diisi',
            'no_hp.required' => 'Form nomor hp harus diisi',
            'whatsapp.required' => 'Form no whatsapp formasi harus diisi',
        ];
        $this->validate($request,[
            'name' => 'required',
            'gelar_depan' => 'required',
            'gelar_belakang' => 'required',
            'doskar' => 'required',
            'unit_kerja' => 'required',
            'homebase' => 'required',
            'status' => 'required',
            'identity_number' => 'required',
            'password' => 'required',
            'no_hp' => 'required',
            'whatsapp' => 'required',
        ],$messages);
        
        $user = User::create([
            'name' => $request->name,
            'gelar_depan' => $request->gelar_depan,
            'gelar_belakang' => $request->gelar_belakang,
            'doskar' => $request->doskar,
            'unit_kerja' => $request->unit_kerja,
            'homebase' => $request->homebase,
            'status' => $request->status,
            'identity_number' => $request->identity_number,
            'password' =>  Hash::make($request->password),
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'whatsapp' => $request->whatsapp,
            'role' => 4,
        ]);

        $user->assignRole('user');

        return redirect()->route('admin.user')->with('success', 'Data calon tenaga ahli telah ditambahkan.');
    }

    public function store2(Request $request)
    {
        $fpengguna = $request->formPengguna;
        $r =json_decode($fpengguna);
       
        foreach ($r as $key => $value) {
            $users = User::create([
                'name' => $value[0],
                'gelar_depan' => $value[1],
                'gelar_belakang' => $value[2],
                'doskar' => $value[3],
                'unit_kerja' => $value[4],
                'homebase' => $value[5],
                'status' => $value[6],
                'identity_number' => $value[7],
                'password' =>  Hash::make($value[8]),
                'email' => $value[9],
                'no_hp' => $value[10],
                'whatsapp' => $value[11],
                'role' => 4,
            ]);

            $users->assignRole('user');
        }

        return redirect()->route('admin.user')->with('success', 'Data calon tenaga ahli telah ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function updatepresensi(Request $request)
    {
        Scanlog::where('id',$request->id)->update([
            'ScanDate' => $request->ScanDate,
            'ScanIn' => $request->ScanIn,
            'ScanOut' => $request->ScanOut,
            'SN_IN' => $request->SN_IN,
            'SN_OUT' => $request->SN_OUT
        ]);

        return redirect()->route('admin.presensi')->with('success', 'Data presensi telah diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
