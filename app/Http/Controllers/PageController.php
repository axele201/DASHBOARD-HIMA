<?php

namespace App\Http\Controllers;
use App\Models\Mail;
use App\Models\Contact;
class PageController extends Controller
{
    public function dashboard()
    {
        $data = ['content' => 'post.dashboard'];
        return view('pembungkus.wrapper', $data);
    }

    public function aboutme()
    {
        $data = ['content' => 'post.aboutme'];
        return view('pembungkus.wrapper', $data);
    }

    public function namaDosen()
    {
        $data = ['content' => 'post.nama-dosen'];
        return view('pembungkus.wrapper', $data);
    }

    public function galery()
    {
        $data = ['content' => 'post.galery'];
        return view('pembungkus.wrapper', $data);
    }

    public function contact()
    {
        // Ambil data kontak dari database
        $contacts = Contact::all();
        
        // Kirimkan data kontak ke view
        $data = [
            'content' => 'post.contact',
            'contacts' => $contacts
        ];
        return view('pembungkus.wrapper', $data);
    }

    public function kalender()
    {
        $data = ['content' => 'post.kalender'];
        return view('pembungkus.wrapper', $data);
    }

    public function news()
    {
        $mails = Mail::all();
        $data = [
            'content' => 'post.news',
            'mails' => $mails
        ];
        return view('pembungkus.wrapper', $data);
    }
}
