<?php

namespace App\Http\Controllers;
use App\Models\Information;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class InformationController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'nomor' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required'
        ]);
        // $userId = Auth::id();
        // dd($request->input('kategori'));
        $nomor=$request->input('nomor');
        $kategori=$request->input('kategori');
        $deskripsi =$request->input('deskripsi');  
        try{
            Information::create([    
                'nomor'=>$nomor,
                'kategori'=>$kategori,
                'deskripsi'=>$deskripsi
            ]);
        }catch(\Exception $e){
            return redirect()->route('admin.informasi')->with('failed','Informasi gagal ditambahkan'.$e);
        }
        return redirect()->route('admin.informasi')->with('success','Informasi berhasil ditambahkan');

    }
    public function userInformation()
    {
        $informationAlurs = Information::where('kategori','=','Alur Pembuatan Konten')->orderBy('nomor','asc')->get();
        $informationCaras = Information::where('kategori','=','Tata Cara Upload Konten')->orderBy('nomor','asc')->get();
        $email = Auth::user()->email;
        return view('user.informasi',compact('email','informationAlurs','informationCaras'));

    }
    public function adminInformation()
    {
        $kategoris = Kategori::select('*')->get();
        $informations = Information::select('*')->orderBy('nomor','asc')->get();
        return view('admin.informasi',compact('informations','kategoris'));
    }
    public function delete(Request $request, $id)
    {
        $res = Information::where('id',$id)->delete();
        if($res)
        {
            return redirect()->route('admin.informasi')->with('success','Informasi berhasil dihapus');
        }else{
            return redirect()->route('admin.informasi')->with('failed','Informasi gagal dihapus');
        }
    }
    public function edit(Request $request, $id)
    {
        $isEdit = new \stdClass();
        $isEdit->true = "true";
        $specificInformation = Information::where('id',$id)->first();
        $kategoris = Kategori::select('*')->get();
        $informations = Information::select('*')->orderBy('nomor','asc')->get();
        return view('admin.informasi',compact('informations','kategoris','isEdit','specificInformation'));
    }
    public function update(Request $request)
    {
        $request->validate([
            'nomor' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required'
        ]);
        // $userId = Auth::id();
        // dd($request->input('kategori'));
        $nomor=$request->input('nomor');
        $kategori=$request->input('kategori');
        $deskripsi =$request->input('deskripsi');  
        try{
            Information::update([    
                'nomor'=>$nomor,
                'kategori'=>$kategori,
                'deskripsi'=>$deskripsi
            ]);
        }catch(\Exception $e){
            return redirect()->route('admin.informasi')->with('failed','Informasi gagal diedit'.$e);
        }
        return redirect()->route('admin.informasi')->with('success','Informasi berhasil diedit');
    }
}
