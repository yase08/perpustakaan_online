<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;
use Illuminate\Support\Facades\Hash;
use PDF;

class UserController extends Controller
{
    public function editStore(User $users)
    {
        return view('dashboard.edit-user', [
            'users' => $users,
            'categories' => Category::all(),
        ]);
    }

    public function updateStore(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email:rfc',
            'address' => 'required',
            'phone' => 'required',
            'password' => 'required'
        ]);

        User::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone,
            'password' => Hash::make($request->password)
        ]);
        return redirect('/users');
    }

    public function editCategory(Category $category)
    {
        return view('dashboard.edit-category', [
            'category' => $category
        ]);
    }

    public function updateCategory(Request $request, $id)
    {
        $request->validate([
            'category' => 'required',
        ]);

        Category::where('id', $id)->update([
            'category' => $request->category,
        ]);
        return redirect('/categories');
    }

    public function editBook(Book $book)
    {
        return view('dashboard.edit-book', [
            'book' => $book,
            'categories' => Category::all(),
        ]);
    }

    public function updateBook(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'category_id' => 'required',
            'isbn' => 'required',
            'synopsis' => 'required',
            'cover_book' => 'required|image|max:3999',
        ]);

        if ($request->hasFile('cover_book')) {
            $filenameWithExt = $request->file('cover_book')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('cover_book')->getClientOriginalExtension();
            $filenameSave = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('cover_book')->storeAs('public/images', $filenameSave);
        } else {
            $filenameSave = 'noimage.jpg';
        }

        Book::where('id', $id)->update([
            'title' => $request->title,
            'author' => $request->author,
            'publisher' => $request->publisher,
            'category_id' => $request->category_id,
            'isbn' => $request->isbn,
            'synopsis' => $request->synopsis,
            'cover_book' => $filenameSave,
        ]);
        return redirect('/books');
    }

    public function deleteStore($id)
    {
        User::where('id', $id)->delete();
        return redirect('/users');
    }

    public function deleteBook($id)
    {
        Book::where('id', $id)->delete();
        return redirect('/books');
    }

    public function deleteCategory($id)
    {
        Category::where('id', $id)->delete();
        return redirect('/categories');
    }

    public function pdf(Book $book)
    {
        $pdf = PDF::loadview('pdf', ['book' => $book]);
        return $pdf->download($book->title . '.pdf');
    }

    // public function updateDownload(Request $request, $id)
    // {
    //     Book::where('id', $id)->update([
    //         'download' => $request->download + 1
    //     ]);
    //     return redirect()->route('pdf');
    // }
}
