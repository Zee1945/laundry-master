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
        return view(
            'admin.dashboard',
            [
                'total_laundry' => Task::count(),
                'selesai' => Task::where('status_progres', '2')->count(),
                'proses' => Task::where('status_progres', '1')->count(),
                'belum_bayar' => Task::where('status_bayar', '1')->count(),

            ]
        );
    }

    public function tasks()
    {
        $items = Task::all();
        $no = 1;





        return view(
            'admin.index',
            [
                'items' => $items,
                'no' => $no,

            ]
        );
    }

    public function harga()
    {
        $items = jenis::all();
        $no = 1;





        return view(
            'admin.harga',
            [
                'items' => $items,
                'no' => $no,
            ]
        );
    }




    public function edit($id)
    {
        $item = Task::findOrFail($id);

        return view(
            'admin.edit',
            [
                'item' => $item,

            ]
        );
    }
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $item = Task::findOrFail($id);
        $item->status_bayar = $request->bayar;
        $item->status_progres = $request->progres;
        $item->save();

        return redirect()->route('task');
    }

    public function store(Request $request)
    {
        // generate Kode 
        $n = 6;
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }
        $kode = $randomString;
        // Penjumlahan harga
        $berat = $request->berat;
        $jenis = $request->jenis;
        $q_satuan = Jenis::selectRaw('harga_satuan')->where('id', $jenis)->first();
        $h_satuan = $q_satuan->harga_satuan;
        $total = $h_satuan * $berat;

        $task = new Task();
        $task->name = $request->name;
        $task->kode = $kode;
        $task->id_jenis = $request->jenis;
        $task->berat = $request->berat;
        $task->harga_total = $total;
        $task->status_progres = 1;
        $task->status_bayar = 1;
        $task->created_by = Auth::user()->id;

        $task->save();
        return redirect('/admin/tasks');
    }

    public function destroy($id)
    {
        $item = Task::findOrFail($id);
        $item->delete();

        return redirect()->route('task');
    }
}
