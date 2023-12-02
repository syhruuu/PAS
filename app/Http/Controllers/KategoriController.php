<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function kategori()
    {
        $allKategori = Kategori::get();
        return view('admin.kategori.index', compact('allKategori'));
    }
    public function store()
    {
        $attributes = request()->validate([
            'nama' => 'required|max:50|min:5|unique:kategoris,nama',
        ], [
            'nama.required' => 'Kategori nama cannot be blank',
            'nama.unique' => 'The Kategori nama has already been taken.'
        ]);
        Kategori::create($attributes);
        return redirect()->to('Kategori')->with('succes', 'added data successfully');
    }
    public function destroy($id)
    {
        Kategori::where('id', $id)->delete();
        return redirect()->to('Kategori')->with('succes', 'The data has been successfully deleted');
    }
}
