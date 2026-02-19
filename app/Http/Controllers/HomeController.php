<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        return 'Hi, Welcome Back!';
    }
    public function greetings() {
        return 'Did you eat today? And how was ur sleep last night?';
    }
    public function reminder() {
        return 'Don\'t forget to prays, drink, and do your homework!';
    }
}
