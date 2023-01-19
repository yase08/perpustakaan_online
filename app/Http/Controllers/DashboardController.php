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
    $books = Book::with('category')->paginate('3');
    return view('dashboard.index', [
      'newest' => Book::orderBy('download', 'desc')->take(3)->get(),
      'categories' => Category::all(),
      'books' => $books
    ]);
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
    $books = Book::with('category')->paginate('8');
    return view('dashboard.books', [
      'books' => $books,
      'categories' => Category::all(),
    ]);
  }

  public function categories()
  {
    return view('dashboard.categories', [
      'categories' => Category::all()
    ]);
  }

  public function book(Book $book)
  {
    return view('dashboard.show-book', [
      'book' => $book,
    ]);
  }

  public function category($id)
  {
    $books = Category::where('id', $id)->first();
    return view('dashboard.category', [
      'books' => $books->book,
      'categories' => Category::all(),
    ]);
  }
}
