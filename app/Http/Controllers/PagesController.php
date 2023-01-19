<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class PagesController extends Controller
{
    public function index(Book $books) {
      $books = Book::with('category')->paginate('3');
      return view('pages.index', [
        'books' => $books
      ]);
    }
    public function login() {
      return view('pages.login');
    }
    public function register() {
      return view('pages.register');
    }
}
