<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peserta;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PesertaRequest;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pencarian = $request->search;
        $pesertas = Peserta::where('nama','LIKE','%'.$pencarian.'%')
        ->orWhere('angkatan','LIKE','%'.$pencarian.'%')
        ->orWhere('email','LIKE','%'.$pencarian.'%')
        ->orWhere('alamat','LIKE','%'.$pencarian.'%')
        ->latest()->paginate(10);
        return view('peserta.index', ['pesertas'=>$pesertas])->with('i',(request()->input('page',1)-1)*10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peserta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $validated = $request->validate([
        //    'foto' => 'required',
        //     'nama'=> 'required|max:100',
        //     'alamat'=>'required|max:100',
        //     'email'=>'required|max:100|unique',
        //     'password'=>'required|max:100',
        //     'angkatan'=>'required|max:100',
        // ]);

        $file = $request->file('foto');
        $nama_file = time()."_". $file->getClientOriginalName();

        $tujuan_upload = 'data_img/peserta';
        $file->move($tujuan_upload, $nama_file);

        Peserta::create([
            'foto'=>$nama_file,
            'nama'=>$request->nama,
            'alamat'=>$request->alamat,
            'email'=>$request->email,
            'password'=>$request->password,
            'angkatan'=>$request->angkatan,
        ]);

        return redirect()->route('peserta.index')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_peserta)
    {
        // $peserta = Peserta::find($id);

        $peserta = Peserta::where('id_peserta', $id_peserta)->first();

        if (!$peserta) {
            // Handle jika data tidak ditemukan, bisa redirect atau menampilkan pesan error
            return redirect()->back()->with('error', 'Peserta tidak ditemukan.');
        }
        return view('peserta.details',['peserta'=>$peserta]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Peserta $peserta)
    {
        return view('peserta.edit', compact('peserta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peserta $peserta)
    {
        $this->validate($request,[
            'nama'=>'required',
            'alamat'=>'required',
            'email'=>'required',
            'password'=>'required',
            'angkatan'=>'required',
        ]);

        $peserta->update($request->all());
        return redirect()->route('peserta.index')->with('success', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::connection()->enableQueryLog();
        $deleted = Peserta::where('id_peserta', $id)->delete();
        $queries = DB::getQueryLog();
        
        return redirect()->route('peserta.index')->with('success', 'Data berhasil dihapus');
    }

}
