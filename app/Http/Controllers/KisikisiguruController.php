<?php

namespace App\Http\Controllers;

use App\Models\kisikisiguru;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class KisikisiguruController extends Controller
{
        public function index()
        {
            // Mengambil semua data kisi-kisi guru
            $kisikisi = kisikisiguru::all();

            // Mengirimkan data ke view guru.kisikisiguru
            return view('guru.kisikisiguru', compact('kisikisi'));
        }

        public function createkisikisi(Request $request)
        {
            // Validasi input
            $kisikisi = $request->validate([
                'Nama_kisi_kisi' => 'required',
                'Mata_Pelajaran' => 'required',
                'Kelas' => 'required',
                'Jurusan' => 'required',
                'KIKD' => 'required',
                'Tujuan_Pembelajaran' => 'required',
                'Materi' => 'required',
                'Indikator_Soal' => 'required',
            ]);

            // Buat entri baru dalam tabel kisi-kisi guru
            kisikisiguru::create($kisikisi);

            // Redirect ke route 'siswa.kisikisisiwa' dengan pesan sukses
            return redirect('/kisikisi');
        }

}
