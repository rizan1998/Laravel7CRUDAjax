<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setup;

class SetupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setup = Setup::get();
        return view('setup', compact('setup'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
        $this->_validation($request);
        Setup::create($request->all());
        return redirect()->back();
    }
    private function _validation(Request $request)
    {
        $validation = $request->validate([
            'nama_aplikasi' => 'required|max:10|min:3',
            'jumlah_hari_kerja' => 'required|max:100|min:3'
        ], [
            'nama_aplikasi.required' => 'nama aplikasi harus diisi',
            'jumlah_hari_kerja.required' => 'jumlah hari libur harus diisi'
        ]);
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
        $setup = Setup::find($id);
        return view('setup-edit', compact('setup'));
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
        //validation
        $this->_validation($request);
        Setup::where('id', $id)->update([
            'nama_aplikasi' => $request->nama_aplikasi,
            'jumlah_hari_kerja' => $request->jumlah_hari_kerja
        ]);
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
