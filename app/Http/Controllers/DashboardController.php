<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use Storage;

class DashboardController extends Controller
{
    function dashboard() {
        return view('dashboard.dashboard', ['title' => 'Dashboard']);
    }

    function artikel() {
        return view('dashboard.artikel.index', [
            'title' => 'Artikel',
            'artikels' => Artikel::with('user')->where('user_id', auth()->user()->id)->paginate(9)
        ]);
    }

    function artikel_create() {
        return view('dashboard.artikel.create', ['title' => 'Tambah Artikel']);
    }

    function artikel_store(Request $request) {
        $validated = $request->validate([
            'foto' => 'required|mimes:png,jpg,jpeg',
            'judul' => 'required',
            'body' =>'required'
        ]);

        $validated['user_id'] = auth()->user()->id;
        $validated['slug'] = self::slugify($validated['judul']);
        $validated['foto'] = $request->file('foto')->store('foto_artikel');
        try {
            Artikel::create($validated);
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Judul Sudah Ada!', '');
        }
        return redirect('/artikel')->withSuccess('Berhasil Menambah Artikel', '');
    }

    function artikel_destroy(Artikel $artikel) {
        Storage::delete($artikel->foto);
        $artikel->delete();
        return redirect()->back()->withSuccess('Berhasil Menghapus Artikel', '');
    }

    function artikel_edit(Artikel $artikel) {
        return view('dashboard.artikel.edit', [
            'title' => 'Ubah Artikel',
            'artikel' => $artikel
        ]);
    }

    function artikel_update(Artikel $artikel, Request $request) {
        $rules = [
            'judul' => 'required',
            'body' => 'required'
        ];

        if($request->file('foto')) {
            $rules['foto'] = 'required|mimes:png,jpg,jpeg';
        }

        $validated = $request->validate($rules);

        if($request->file('foto')) {
            $validated['foto'] = $request->file('foto')->store('foto_artikel');
            Storage::delete($artikel->foto);
        }

        $validated['slug'] = self::slugify($validated['judul']);

        $artikel->update($validated);

        return redirect('/home/artikel/' . $validated['slug'])->withSuccess('Berhasil Mengubah Artikel.', '');
    }

    function slugify($judul) {
        // Menghapus karakter khusus dan mengganti spasi dengan tanda dash
        $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $judul);
        
        // Mengonversi teks menjadi huruf kecil
        $slug = strtolower($slug);
        
        // Menghapus tanda dash dari awal dan akhir string jika ada
        $slug = trim($slug, '-');
        
        return $slug;
    }
}