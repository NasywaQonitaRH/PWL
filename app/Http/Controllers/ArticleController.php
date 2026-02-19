<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($id) {
        return 'There\'s an Article talking about you, 
        is in websites number: ' . $id;
    }
}
