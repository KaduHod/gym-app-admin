<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Http;

class RegisterController extends Controller
{
    public function __construct() {}

    public function register(RegisterRequest $request) {
        $user = [
            "name" => $request->input('name'),
            "nickname" => $request->input('nickname'),
            "email" => $request->input('email'),
            "password" => $request->input('password'),
            "birthday" => $request->input('birthdate'),
            "cellphone" => $request->input('cellphone'),
        ];
        $res = Http::post('http://localhost:3000/personal', $user);
        $status = $res->status();
        $data = $res->json();
        dd($data, $status);
    }

    public function index(Request $request) {
        return view('sign-up');
    }
}
