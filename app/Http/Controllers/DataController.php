<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Data::all();

        return view('datatable', [
            'data' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create-user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'fname' => 'required|max:20',
            'lname' => 'required|max:20',
            'file' => 'required|mimes:jpeg,jpg,png',
        ]);

        $request->file('file')->store('foto', 'public');

        $data = new Data([
            'fname' => $request['fname'],
            'lname' => $request['lname'],
            'foto_path' => $request->file->hashName(),
        ]);
        $data->save();

        return redirect()->route('data.home')->with('tambah_data', 'Penambahan Data Berhasil');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Data::find($id);
        return view('detail-data', [
            'data' => $data,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Data::where('id', $id)->first();
        return view('update-user', [
            'data' => $data,
        ]);
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
        // dd($request);
        $request->validate([
            'fname' => 'required|max:20',
            'lname' => 'required|max:20',
        ]);

        $data = Data::findOrFail($id);
        
        if ($request->hasFile('file'))
        {
            $request->validate([
                'file' => 'mimes:jpeg,jpg,png',
            ]);
            Storage::disk('public')->delete('foto/'.$data->foto_path);
            $request->file('file')->store('foto', 'public');
            $data->update([
                'fname' => $request['fname'],
                'lname' => $request['lname'],
                'foto_path' => $request->file->hashName(),
            ]);
        }
        else
        {
            $data->update([
                'fname' => $request['fname'],
                'lname' => $request['lname'],
            ]);
        }
        return redirect()->route('data.home')->with('edit_data', 'Update Data Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Data::findOrFail($id);
        Storage::disk('public')->delete('foto/'.$data->foto_path);
        Data::destroy($id);
        return redirect()->route('data.home')->with('hapus_data', 'Hapus Data Berhasil');
    }
}
