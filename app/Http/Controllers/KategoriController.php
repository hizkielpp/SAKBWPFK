<?php

namespace App\Http\Controllers;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
        ]);
        // dd($request->input('name'));
        // $userId = Auth::id();
        // dd($request->input('kategori'));
        $name=$request->input('name');
        try{
            Kategori::create([    
                'name'=>$name,
            ]);
        }catch(\Exception $e){
            return redirect()->route('admin.informasi')->with('failed','Kategori gagal ditambahkan'.$e);
        }
        return redirect()->route('admin.informasi')->with('success','Kategori berhasil ditambahkan');

    }
}
