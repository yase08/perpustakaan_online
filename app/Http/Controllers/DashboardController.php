<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function index() {
    return view('dashboard.index');
  }
  public function users() {
    return view('dashboard.users', [
      'users' => User::all()
    ]);
  }
  public function books() {
    return view('dashboard.books', [
      'categories' => Category::all(),
    ]);
  }
  public function categories() {
    return view('dashboard.categories');
  }
}
