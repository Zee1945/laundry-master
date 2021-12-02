<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Jenis;

class GuestController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $items = jenis::all();
        $no = 1;
        return view('home', [
            'items' => $items,
            'no' => $no
        ]);
    }
    public function search(Request $request)
    {
        $validated = $request->validate(
            [
                'search' => 'required|exists:cucian,kode',
            ],
            [
                'search.required' => 'Nomor Resi tidak boleh kosong !',
                'search.exists' => 'Nomor Resi tidak ditemukan pada sistem kami ! '
            ]
        );

        $keyword = $request->search;
        $resi = Task::with(['jeniss', 'users'])->where('kode',  $keyword)->first();

        return view('search', [
            'validate' => $validated,
            'resi' => $resi
        ]);
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
}
