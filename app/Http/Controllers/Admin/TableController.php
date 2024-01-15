<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;

class TableController extends Controller
{
    public function index()
    {   
        $books = DB::table('buku')->get();
        return view('admin.table', ['books' => $books]);
    }

    public function store(Request $request)
    {
        // Validasi data yang diterima dari form
        $validatedData = $request->validate([
            'title' => 'required|string',
            'author' => 'required|string',
            'publisher' => 'required|string',
            'publication_year' => 'required|integer',
            'category' => 'required|string',
            'isbn' => 'required|string',
            'price' => 'required|integer',
            'pages' => 'required|integer',
            'description' => 'required|string',
            'stock' => 'required|integer',
            'cover_image_url' => 'required|string',
        ]);

        // Simpan data buku ke dalam database
        $book = new buku($validatedData);
        $book->save();

        // Redirect ke halaman lain atau tampilkan pesan sukses
        return redirect()->route('admin.crud');
         // Ganti 'books.index' dengan nama route Anda
    }

    public function destroy($id): RedirectResponse
    {
        // Temukan buku berdasarkan ID
        $book = buku::findOrFail($id);
    
        // Simpan ID buku terkecil dan terbesar sebelum penghapusan
        $minId = buku::min('id');
        $maxId = buku::max('id');
    
        // Hapus buku
        $book->delete();
    
        // Periksa apakah buku yang dihapus memiliki ID yang sama dengan ID buku terkecil atau terbesar
        if ($id == $minId || $id == $maxId) {
            // Jika ya, urutkan ulang ID buku
            $books = buku::orderBy('id')->get();
            $newId = $minId;
    
            foreach ($books as $book) {
                $book->update(['id' => $newId]);
                $newId++;
            }
        }
    
        // Redirect ke index dengan pesan sukses
        return redirect()->route('admin.crud')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $validatedData = $request->validate(Buku::getValidationRules());
        $book = buku::findOrFail($id);
        $book->update($validatedData);

        return redirect()->route('admin.crud')->with(['success' => 'Data Berhasil Diperbarui!']);
    }


}

