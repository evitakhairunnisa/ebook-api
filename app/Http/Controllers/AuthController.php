<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return[
        "nis" => "3103118056",
        "name" => "Evita Julia Khairunnisa",
        "gender" => "Perempuan",
        "phone" => "089623676174",
        "class" => "XII RPL 2"];
    }
}
