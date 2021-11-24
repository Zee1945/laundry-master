<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use App\Models\Jenis;

class TasksController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        Task::all();
        return view('admin.index');
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        // generate Kode 

        // Penjumlahan harga
        $berat = $request->berat;
        $jenis = $request->jenis;
        $q_satuan = Jenis::selectRaw('jenis.id, jenis.harga_satuan')->where('jenis.id', $jenis)->first();
        $h_satuan = $q_satuan->harga_satuan;
        $total = $h_satuan * $berat;

        $task = new Task();
        $task->name = $request->name;
        $task->kode = '20opskj';
        $task->id_jenis = $request->jenis;
        $task->berat = $request->berat;
        $task->harga_total = $total;
        $task->status_progress = 1;
        $task->status_bayar = $request->status_bayar;
        $task->created_by = Auth::user()->id;

        $task->save();
        return redirect('tasks');
    }
}
