<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function __construct() {}

    public function register(RegisterRequest $request) {
        return "heello from the server";
    }

    public function index(Request $request) {
        return view('sign-up');
    }
}
