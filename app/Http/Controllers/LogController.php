<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Log;

class LogController extends Controller
{
    public function log()
    {
        $logs = Log::select('*')->orderBy('created_at','desc')->get();
        // return view('reports.indexAdmin', compact('reports'))->with(request()->input('page'));
        return view('admin.log', compact('logs'));
    }

}
