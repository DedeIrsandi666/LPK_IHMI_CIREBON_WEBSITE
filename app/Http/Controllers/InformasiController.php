<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;
use App\Http\Controllers\InformasiRequest;

class InformasiController extends Controller
{
    public function index()
    {
    $informasis = Informasi::latest()->paginate(10);
    return view('informasi.index', compact('informasis'))->with('i', (request()->input('page',1)-1) * 10);
    }

    public function create()
    {
        return view('informasi.create');
    }

    public function store(Request $request)
    {
        // $validated = $request->validate([
        //     'postingan' => 'required',
        //      'gambar'=> 'required',
        //  ]);
        
        $file = $request->file('gambar');
        $nama_file = time()."_". $file->getClientOriginalName();

        $tujuan_upload = 'data_img/informasi';
        $file->move($tujuan_upload,$nama_file);

        Informasi::create([
        'postingan' => $request->postingan,
        'gambar' => $nama_file,
        ]);

    return redirect()->route('informasi.index')->with('success','Data berhasil disimpan');
    }

    public function edit(informasi $informasi)
    {
        return view('informasi.edit',compact('informasi'));
    }

    public function destroy(Informasi $informasi)
    {
        $informasi->delete();
        return redirect()->route('informasi.index')
        ->with('success','Data berhasil dihapus');
    }
}
