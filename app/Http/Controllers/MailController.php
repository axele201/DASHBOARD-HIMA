<?php
namespace App\Http\Controllers;

use App\Models\Mail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function kirim(Request $request)
    {
        // Validasi data yang diterima
        $request->validate([
            'from' => 'required|email',
            'deskripsi' => 'required|string',
        ]);

        try {
            // Menyimpan data ke database
            Mail::create([
                'from' => $request->from,
                'deskripsi' => $request->deskripsi,
            ]);

            // Redirect dengan pesan sukses
            return redirect('/news')->with('success', 'Email berhasil dikirim!');
        } catch (\Exception $e) {
            // Menangani kesalahan jika penyimpanan gagal
            return back()->with('error', 'Gagal mengirim email: ' . $e->getMessage());
        }
    }
    public function destroy($id)
{
    $mail = Mail::findOrFail($id);
    $mail->delete();

    return redirect('/news')->with('success', 'Email berhasil dihapus!');
}
}
