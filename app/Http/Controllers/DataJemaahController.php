<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\DataJemaah;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class DataJemaahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.data_jemaah.index',[
            'data_jemaah' => DataJemaah::all()

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.data_jemaah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validateData = $request->validate([
            'no_pendaftaran'    => 'required',
            'pergi'             => 'date|required',
            'pulang'                => 'date|required',
            'paket'                     => 'required',
            'keterangan_paket_khusus'       => 'required',
            'tipe_kamar'            => 'required',
            'nik'                   => 'numeric|required',
            'nama_jemaah'           => 'required',
            'tempat_lahir'          => 'required',
            'tanggal_lahir'         => 'date|required',
            'gender'                => 'required',
            'pernikahan'            => 'required',
            'nama_ayah'             => 'required',
            'nama_ibu'              => 'required',
            'alamat'                => 'required',
            'no_paspor'             => 'required',
            'terbit'                => 'date|required',
            'expired'               => 'date|required',
            'pendidikan'            => 'required|',
            'pekerjaan'             => 'required|',
            'riwayat_penyakit'      => '',
            'no_tlp'                => 'numeric',
            'no_tlp_1'              => 'numeric',
            'no_tlp_2'              => 'numeric',
            'status_pembayaran'     => 'required',
            'slug'                  => 'required|'
        ]);

        $validateData['user_id'] = auth()->user()->id;
        DataJemaah::create($validateData);
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

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(DataJemaah::class,'slug',$request->nama_jemaah);
        return response()->json(['slug'=> $slug]);
    }
}
