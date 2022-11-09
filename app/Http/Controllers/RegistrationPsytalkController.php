<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RegistrationPsytalkController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $response = Http::get('https://ruangberproses-be.herokuapp.com/api/admin/program/psytalk-list');
        $response = $response->object();
        return view('program.psytalk.daftar', [
            'title' => 'Pendaftaran Psytalk',
            'message' => NULL,
            'psytalks' => $response->data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'psytalk_id' => 'required',
            'alasan' => 'required',
            'asal_info' => 'required',
            'pertanyaan' => 'required',
            'bukti_transfer' => '',
            'status_pendaftaran' => 'required',
            'ide_topik' => 'required'
        ]);

        $uploadPath = public_path('storage/bukti-transfer/psytalk');
        if ($request->hasFile('bukti_transfer')) {
            $file = $request->file('bukti_transfer');
            $uniqueFileName = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move($uploadPath, $uniqueFileName);
            $imagePath = 'bukti-transfer/psytalk' . $uniqueFileName;
        } else {
            $imagePath = NULL;
        }

        $response = Http::asForm()->post("https://ruangberproses-be.herokuapp.com/api/layanan/professional-counseling/daftar", [
            'user_id' => $request->input('user_id'),
            'psytalk_id' => $request->input('psytalk_id'),
            'alasan' => $request->input('alasan'),
            'asal_info' => $request->input('asal_info'),
            'pertanyaan' => $request->input('pertanyaan'),
            'bukti_transfer' => $imagePath,
            'status_pendaftaran' => $request->input('status_pendaftaran'),
            'ide_topik' => $request->input('ide_topik')
        ]);
        if ($response->status() == 200) {
            return redirect('/program/psytalk')->with('success', 'Pendaftaran berhasil!');
        } else {
            return redirect('/program/psytalk/daftar')->with('success', 'Pendaftaran gagal!');
        }
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