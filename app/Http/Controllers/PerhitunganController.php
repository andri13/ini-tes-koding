<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perhitungan;


class PerhitunganController extends Controller
{
    public function index(Request $request)
    {
        // dd($request->all());
        $semua_data = Perhitungan::pluck('jenis_barang')->unique();
        // dd($semua_data);
        $query = Perhitungan::query();

        if ($request->filled('jenis_barang') && $request->jenis_barang != null) {
            $query->where('jenis_barang', $request->jenis_barang);
        }

        if ($request->filled('tanggal_awal') && $request->filled('tanggal_akhir')) {
            $query->whereBetween('tanggal_transaksi', [$request->tanggal_awal, $request->tanggal_akhir]);
        }

        $data = $query->orderBy('jumlah_terjual', 'desc')->get();
        // dd($request->jenis_barang);
        if ($request->jenis_barang != null) {
            $max_jumlah_terjual = $data->first();
            $min_jumlah_terjual = $data->last();
            $data = collect([$max_jumlah_terjual, $min_jumlah_terjual]);
        }
        return view('welcome', compact('data','semua_data'));
    }

    function store(Request $request){
        // dd($request->all());
        $data = $request->except('_token');
        Perhitungan::create($data);
        return redirect()->back()->with('success', 'Data berhasil disimpan.');
    }

    public function delete($id)
    {
        $data = Perhitungan::find($id);
        if ($data) {
            $data->delete();
            return redirect()->back()->with('success', 'Data berhasil dihapus.');
        } else {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }
    }

    public function update(Request $request, $id)
    {
        $data = Perhitungan::find($id);
        if ($data) {
            $data->update($request->except(['_token', '_method']));
            return redirect()->back()->with('success', 'Data berhasil diupdate.');
        } else {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }
    }
}
