<?php

namespace App\Http\Controllers;

use App\Datatables\LogDataTable;
use Illuminate\Http\Request;
use App\Models\Report;

class LogController extends Controller
{
    public function __construct()
    {
            $this->middleware('checkAdmin');
    }
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index(LogDataTable $dataTable)
    {   
        return $dataTable->render('reports.indexLog');
    }
}
