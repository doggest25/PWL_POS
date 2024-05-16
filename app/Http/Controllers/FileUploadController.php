<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function fileUpload()
    {
        return view('file-upload');
    }

    public function prosesFileUpload(Request $request)
    {
        $request->validate([
            'filename' => 'required|string',
            'berkas' => 'required|file|image|max:5000', // ukuran maksimal 5MB
        ]);

        // Mendapatkan ekstensi file asli
        $extension = $request->berkas->getClientOriginalExtension();
        // Mengambil nama file dari input pengguna dan menambahkan ekstensi
        $namaFile = $request->input('filename') . '.' . $extension;

        // Memindahkan file ke folder 'gambar' dengan nama file baru
        $path = $request->berkas->move(public_path('gambar'), $namaFile);
        $pathBaru = str_replace("\\", "/", $path);

        // Simpan URL file di sesi
        session()->flash('fileUrl', url('gambar/' . $namaFile));
        session()->flash('fileName', $namaFile);

        return redirect()->back();
    }
}

