<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function index()
  {
    $books = Book::with('category')->paginate('8');
    return view('dashboard.index', compact('books'));
  }
  public function users()
  {
    $users = User::where('role', 'member')->get();
    return view('dashboard.users', [
      'users' => $users,
    ]);
  }
  public function books()
  {
    return view('dashboard.books', [
      'categories' => Category::all(),
      'books' => Book::all(),
    ]);
  }
  public function categories()
  {
    return view('dashboard.categories', [
      'categories' => Category::all()
    ]);
  }
}
