<?php

namespace App\Http\Controllers\DataAsetGardu;

use Illuminate\Http\Request;
use App\Models\DataAsetGardu;
use App\Http\Controllers\Controller;

class DataAsetGarduController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_aset_gardu = DataAsetGardu::orderBy('created_at', 'DESC')->get();
        return view('DataAsetGardu.index',compact('data_aset_gardu'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('DataAsetGardu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DataAsetGardu::create($request->all());
        return redirect()->route('DataAsetGardu')->with('success','Data Aset Gardu Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data_aset_gardu = DataAsetGardu::findOrFail($id);
        return view('DataAsetGardu.show',compact('data_aset_gardu'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data_aset_gardu = DataAsetGardu::findOrFail($id);
        return view('DataAsetGardu.edit',compact('data_aset_gardu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data_aset_gardu = DataAsetGardu::findOrFail($id);
        $data_aset_gardu->update($request->all());
        return redirect()->route('DataAsetGardu')->with('success','Data Aset Gardu Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data_aset_gardu = DataAsetGardu::findOrFail($id);
        $data_aset_gardu->delete();
        return redirect()->route('DataAsetGardu')->with('success', 'Data Aset Gardu Berhasil Dihapus');
    }

    public function search(Request $request)
{
    $query = $request->input('query');

    // Mencari DataAsetGardu berdasarkan nama atau ulp
    $data_aset_gardu = DataAsetGardu::where('name', 'LIKE', "%$query%")
                    ->orWhere('ulp', 'LIKE', "%$query%")
                    ->orWhere('location', 'LIKE', "%$query%")
                    ->orWhere('bulan', 'LIKE', "%$query%")
                    ->get();
    return view('DataAsetGardu.index', compact('data_aset_gardu'));
}
}
