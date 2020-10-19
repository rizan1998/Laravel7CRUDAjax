<?php

namespace App\Http\Controllers\MasterData;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Karyawan;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawan = Karyawan::find(1);
        $jabatan = Karyawan::find(1)->Jabatan;
        if ($jabatan) {
            echo "Nama Karyawan = " . $karyawan->nama_karyawan;
            echo "jabatan = " . $jabatan->nama_jabatan;
        }
        $keluarga = Karyawan::find(1)->karyawan_keluarga;
        echo "</br></br>Nama Karyawan = " . $karyawan->nama_karyawan;
        foreach ($keluarga as $kel) {
            echo "</br>nama : " . $kel->nama;
            echo "</br>Hubunagan : " . $kel->hubungan;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
}
