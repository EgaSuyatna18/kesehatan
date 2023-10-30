<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\CatatanKesehatan;
use Storage;

class DashboardController extends Controller
{
    function dashboard()
    {
        return view('dashboard.dashboard', [
            'title' => 'Dashboard',
            'cks' => CatatanKesehatan::where('user_id', auth()->user()->id)->orderby('tanggal', 'ASC')->paginate(10)
        ]);
    }

    function artikel()
    {
        return view('dashboard.artikel.index', [
            'title' => 'Artikel',
            'artikels' => Artikel::with('user')->where('user_id', auth()->user()->id)->paginate(9)
        ]);
    }

    function artikel_create()
    {
        return view('dashboard.artikel.create', ['title' => 'Tambah Artikel']);
    }

    function artikel_store(Request $request)
    {
        $validated = $request->validate([
            'foto' => 'required|mimes:png,jpg,jpeg',
            'judul' => 'required',
            'body' => 'required'
        ]);

        $validated['user_id'] = auth()->user()->id;
        $validated['slug'] = self::slugify($validated['judul']);
        $validated['foto'] = $request->file('foto')->store('foto_artikel');
        try {
            Artikel::create($validated);
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Judul Sudah Ada!', '');
        }
        return redirect('/artikel')->withSuccess('SUCCESS', 'Berhasil Menambah Artikel.');
    }

    function artikel_destroy(Artikel $artikel)
    {
        Storage::delete($artikel->foto);
        $artikel->delete();
        return redirect()->back()->withSuccess('Berhasil Menghapus Artikel', '');
    }

    function artikel_edit(Artikel $artikel)
    {
        return view('dashboard.artikel.edit', [
            'title' => 'Ubah Artikel',
            'artikel' => $artikel
        ]);
    }

    function artikel_update(Artikel $artikel, Request $request)
    {
        $rules = [
            'judul' => 'required',
            'body' => 'required'
        ];

        if ($request->file('foto')) {
            $rules['foto'] = 'required|mimes:png,jpg,jpeg';
        }

        $validated = $request->validate($rules);

        if ($request->file('foto')) {
            $validated['foto'] = $request->file('foto')->store('foto_artikel');
            Storage::delete($artikel->foto);
        }

        $validated['slug'] = self::slugify($validated['judul']);

        $artikel->update($validated);

        return redirect('/home/artikel/' . $validated['slug'])->withSuccess('SUCCESS', 'Berhasil Mengubah Artikel.');
    }

    function catatan_kesehatan() {
        return view('dashboard.catatan_kesehatan.index', [
            'title' => 'Catatan Kesehatan',
            'cks' => CatatanKesehatan::where('user_id', auth()->user()->id)->orderBy('tanggal', 'DESC')->paginate(10),
        ]);
    }

    function catatan_kesehatan_store(Request $request) {
        $validated = $request->validate([
            'sbp' => 'required|numeric|gt:0',
            'dbp' => 'required|numeric|gt:0',
            'kolesterol' => 'required|numeric|gt:0',
            'tanggal' => 'required|date|before_or_equal:today',
        ]);

        $validated['user_id'] = auth()->user()->id;
        $status = self::cekStatus($validated['sbp'], $validated['dbp'], $validated['kolesterol']);
        $validated['status_tekanan_darah'] = $status['tekanan_darah'];
        $validated['status_kadar_kolesterol'] = $status['status_kolesterol'];

        CatatanKesehatan::create($validated);

        return redirect()->back()->withSuccess('Berhasil Mencatat.', '');
    }

    function catatan_kesehatan_destroy(CatatanKesehatan $catatan_kesehatan) {
        $catatan_kesehatan->delete();
        return redirect()->back()->withSuccess('Berhasil Menghapus Catatan.', '');
    }

    function catatan_kesehatan_update(CatatanKesehatan $catatan_kesehatan, Request $request) {
        $validated = $request->validate([
            'sbp' => 'required|numeric|gt:0',
            'dbp' => 'required|numeric|gt:0',
            'kolesterol' => 'required|numeric|gt:0',
            'tanggal' => 'required|date|before_or_equal:today',
        ]);

        $status = self::cekStatus($validated['sbp'], $validated['dbp'], $validated['kolesterol']);
        $validated['status_tekanan_darah'] = $status['tekanan_darah'];
        $validated['status_kadar_kolesterol'] = $status['status_kolesterol'];

        $catatan_kesehatan->update($validated);

        return redirect()->back()->withSuccess('Berhasil Mengubah Catatan.', '');
    }

    function cekStatus($sbp, $dbp, $kolesterol) {
        // Tentukan status tekanan darah
        if ($sbp < 90 && $dbp < 60) {
            $tekananDarah = "Hipotensi";
        } elseif (($sbp >= 90 && $sbp <= 120) && ($dbp >= 60 && $dbp <= 80)) {
            $tekananDarah = "Tekanan darah normal";
        } elseif (($sbp > 120 && $sbp <= 140) || ($dbp > 80 && $dbp <= 90)) {
            $tekananDarah = "Prehipertensi";
        } else {
            $tekananDarah = "Hipertensi";
        }

        // Tentukan status kolesterol
        if ($kolesterol < 200) {
            $statusKolesterol = "Normal";
        } elseif ($kolesterol >= 200 && $kolesterol < 240) {
            $statusKolesterol = "Batas tinggi";
        } else {
            $statusKolesterol = "Tinggi";
        }

        // Kembalikan hasil dalam bentuk array
        return array(
            "tekanan_darah" => $tekananDarah,
            "status_kolesterol" => $statusKolesterol
        );
    }


    function slugify($judul)
    {
        // Menghapus karakter khusus dan mengganti spasi dengan tanda dash
        $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $judul);

        // Mengonversi teks menjadi huruf kecil
        $slug = strtolower($slug);

        // Menghapus tanda dash dari awal dan akhir string jika ada
        $slug = trim($slug, '-');

        return $slug;
    }
}