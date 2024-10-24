<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function kirim(Request $request)
    {
        // Validasi form
        $validatedData = $request->validate([
            'status' => 'required',
            'nama' => 'required',
            'tentang' => 'required',
            'alamat' => 'required',
            'nomor' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Simpan foto
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('foto', 'public');
        }

        // Simpan ke database
        $contact = new Contact();
        $contact->status = $request->input('status');
        $contact->nama = $request->input('nama');
        $contact->tentang = $request->input('tentang');
        $contact->alamat = $request->input('alamat');
        $contact->nomor = $request->input('nomor');
        $contact->foto = basename($fotoPath);
        $contact->save();

        return redirect()->back()->with('success', 'Kontak berhasil disimpan');
    }
}
