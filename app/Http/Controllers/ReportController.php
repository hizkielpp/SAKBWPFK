<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Log;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use DataTables;

class ReportController extends Controller
{
    public function uploadKegiatan($id=null)
    {
        $email = Auth::user()->email;
        if(empty($id)){
            return view('user.upload-kegiatan', [
                'email' => $email,
            ]);
        }else{
            return view('user.upload-kegiatan', [
                'email' => $email,
                'id' => $id
            ]);
        }

    }
    public function getJson()
    {
        $report = Report::where('id_user', Auth::id())->get();
        return $report->toJson();
    }
    public function indexDatatable()
    {
        $email = Auth::user()->email;
        $rejectedReports = Report::where([['id_user', '=', Auth::id()],['keterangan', '<>','null']])->get();
        if ($rejectedReports->isEmpty()) {
            return view('user.laporan-kegiatan', [
                'reports' => Report::where('id_user', Auth::id())->get(),
                'email' => $email,
            ]);
        }
        return view('user.laporan-kegiatan', [
            'rejectedReports' => $rejectedReports,
            'reports' => Report::where('id_user', Auth::id())->get(),
            'email' => $email,
        ]);
    }
    //menampilkan semua laporan untuk user
    public function index()
    {
        // $report = Report::where('id','2')->first();
        // $report->update(['name' => 'Berita 2 terupdate']);
        // dd($report);
        $userId = Auth::id();
        $reports = Report::where('id_user', '=', $userId)->orderBy('created_at', 'asc')->orderBy('updated_at', 'desc')->paginate(10);
        return view('reports.index', compact('reports'))->with(request()->input('page'));
    }
    //menampilkan laporan untuk admin
    public function indexAdmin()
    {
        $reports = Report::where('status', '=', 'terupload')->orderBy('created_at', 'desc')->get();
        $countTerupload = $reports->count();
        $countDiproses = Report::where('status', '=', 'diproses')->count();
        $countValidasi = Report::where('status', '=', 'validasi supervisor')->count();
        $countDitolak = Report::where('status', '=', 'ditolak')->count();
        $countDiposting = Report::where('status', '=', 'sudah diposting')->count();
        return view('admin.index', compact('reports', 'countTerupload', 'countDiproses', 'countValidasi', 'countDitolak', 'countDiposting'));
    }
    public function prodi()
    {
        $reports = Report::with('user')->where('status', '!=', 'sudah diposting')->where('status', '!=', 'ditolak')->orderBy('updated_at', 'desc')->get();
        // return view('reports.indexAdmin', compact('reports'))->with(request()->input('page'));
        return view('admin.prodi', compact('reports'));
    }
    //fungsi untuk menolak laporan dengan alasan yang spesifik
    public function ditolak(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'alasan'=> 'required'
        ]);
        $report = Report::where('id', $request->input('id'))->first();
        $report->keterangan = $request->input('alasan');
        $report->status = "ditolak";
        $report->save();
        Log::create([
            'id_user' => Auth::id(),
            'name' => $report->name,
            'keterangan' => 'terupload ke ditolak'
        ]);
        return back()->with('success', 'berita telah berhasil ditolak');
    }
    //fungsi untuk user upload laporan
    public function store(Request $request)
    {
        //validate input
        // dd($request->input('name'));
        $request->validate([
            'name' => 'required',
            'file' => 'required|mimes:docx,pdf'
        ]);
        $userId = Auth::id();
        $name = $request->input('name');
        $file = $request->file('file');
        $fileName = time() . '.' . $file->getClientOriginalName();
        $request->file->move(public_path('uploads'), $fileName);
        try {
            Report::create([
                'name' => $name,
                'file_name' => $fileName,
                'id_user' => $userId
            ]);
        } catch (\Exception $e) {
            return redirect()->route('indexDatatable')->with('failed', 'Bahan berita gagal diupload');
        }
        Log::create([
            'id_user' => Auth::id(),
            'name' => $name,
            // 'pre'=>'terupload',
            // 'post'=>'diproses',
            'keterangan' => 'user mengupload bahan berita'
        ]);
        if($request->input('id')){
            $prevReport = Report::where('id',$request->input('id'))->first();
            $prevReport->keterangan = null;
            // dd($prevReport->keterangan);
            $prevReport->save();
            dd($prevReport);
            return redirect()->route('indexDatatable')->with('success', 'Bahan berita sebagai revisi berhasil diupload');
        }
        //redirect the user and send friendly message
        return redirect()->route('indexDatatable')->with('success', 'Bahan berita berhasil diupload');
    }
    //fungsi untuk memproses laporan baik diproses, divalidasi supervisor ataupun diposting
    public function edit(Request $request, $id)
    {
        $report = Report::where('id', $id)->first();
        if ($request->input('edit')) {
            $query = $request->input('edit');
            if ($query == "diproses") {
                $report->status = "diproses";
                $report->save();
                Log::create([
                    'id_user' => Auth::id(),
                    'name' => $report->name,
                    // 'pre'=>'terupload',
                    // 'post'=>'diproses',
                    'keterangan' => 'terupload ke diproses'
                ]);
                return back()->with('success', 'berita telah berganti status menjadi diproses');
            } else if ($query == "ditolak") {
                $report->status = "ditolak";
                $report->save();
                Log::create([
                    'id_user' => Auth::id(),
                    'name' => $report->name,
                    // 'pre'=>'terupload',
                    // 'post'=>'ditolak',
                    'keterangan' => 'terupload ke ditolak'
                ]);
                return back()->with('success', 'berita telah berganti status menjadi ditolak');
            } else if ($query == "validasi supervisor") {
                $report->status = "validasi supervisor";
                $report->save();
                Log::create([
                    'id_user' => Auth::id(),
                    'name' => $report->name,
                    // 'pre'=>'diproses',
                    // 'post'=>'validasi supervisor',
                    'keterangan' => 'diproses ke validasi supervisor'
                ]);
                return back()->with('success', 'berita telah berganti status menjadi validasi supervisor');
            } else if ($query == "sudah diposting") {
                $report->status = "sudah diposting";
                $report->save();
                Log::create([
                    'id_user' => Auth::id(),
                    'name' => $report->name,
                    // 'pre'=>'validasi supervisor',
                    // 'post'=>'sudah diposting',
                    'keterangan' => 'validasi supervisor ke sudah diposting'
                ]);
                return back()->with('success', 'berita telah berganti status menjadi sudah diposting');
            }
        }
        return redirect()->route('reportIndexAdmin')->with('query tidak ada');
    }
    //fungsi untuk download laporan bagi admin
    public function download(Request $request, $id)
    {
        $report = Report::where('id', $id)->get();
        // dd($report[0]->file_name);
        $fileName = "\\" . $report[0]->file_name;
        $filePath = public_path('uploads') . $fileName;
        // dd($filePath);
        $headers = array(
            'Content-Type: application/pdf/docx',
        );
        return response()->download($filePath, $report[0]->file_name, $headers);
        // return Response::download($file, $report[0]->file_name, $headers);
    }
}
