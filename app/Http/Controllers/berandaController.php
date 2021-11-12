<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\link;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class berandaController extends Controller
{
    public function index(link $link){
        return view('main', [
            // 'link'=> $link,
            'url'=> link::all()
        ]);
    }

}
