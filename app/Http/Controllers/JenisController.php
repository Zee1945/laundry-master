<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use App\Models\Jenis;

class JenisController extends Controller
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
        $items = jenis::all();
        $no = 1;
        return view(
            'admin.jenis.index',
            [
                'items' => $items,
                'no' => $no,
            ]
        );
    }




    public function edit($id)
    {
        $item = Jenis::findOrFail($id);

        return view(
            'admin.jenis.edit',
            [
                'item' => $item,

            ]
        );
    }
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $item = Jenis::findOrFail($id);
        $item->name = $request->name;
        $item->harga_satuan = $request->harga_satuan;
        $item->save();

        return redirect()->route('jenis');
    }

    public function store(Request $request)
    {
        // generate Kode 
        $jenis = new Jenis();
        $jenis->name = $request->name;
        $jenis->harga_satuan = $request->harga_satuan;


        $jenis->save();
        return redirect('/admin/harga');
    }

    public function destroy($id)
    {
        $item = Jenis::findOrFail($id);
        $item->delete();

        return redirect()->route('task');
    }
}
