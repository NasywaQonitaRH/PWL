<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello() {
        return 'Hello World';
    }
    public function greets() {
        return view('blog.hello')
        ->with('name', 'Nasywa')
        ->with('age', 17)
        ->with('Occupation','Astronaut');
    }
    // public function world() {
    //     return 'World';
    // }
    // public function test() {
    //     return 'Welcome to Indomart';
    // }
    // public function about() {
    //     return 'Nasywa Qonita RH/244107020170';
    // }
    // public function user($name) {
    //     return 'Hi, My Name is ' . $name . '!';
    // }
    // public function posts($postId, $commentId) {
    //     return 'Post ID: ' . $postId . ', Comment ID: ' . $commentId;
    // }
    // public function articles($id) {
    //     return 'Article Page: ' . $id;  
    // }
}