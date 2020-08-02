<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
use App\Penerbit;
use App\Kategori;
use App\Http\Requests\BukuRequest;
use Storage;

class BukuController extends Controller
{

	    private function uploadFoto(BukuRequest $request){
        $foto = $request->file('foto');
        $ext = $foto->getClientOriginalExtension();

        if ($request->file('foto')->isValid()) {
            $foto_name = date('YmdHis'). ".$ext";
            $request->file('foto')->move('fotoupload', $foto_name);
            return $foto_name;
        }
        return false;
    }

    private function updateFoto(Buku $buku, BukuRequest $request){
        //jika user mengisi foto
        if ($request->hasFile('foto')) {
            //hapus foto lama jika ada foto baru
            $exist = Storage::disk('foto')->exists($buku->foto);
            if (isset($buku->foto) && $exist) {
                $delete = Storage::disk('foto')->delete($buku->foto);
            }

            //upload foto baru
            $foto = $request->file('foto');
            $ext = $foto->getClientOriginalExtension();
            if ($request->file('foto')->isValid()) {
                $foto_name = date('YmdHis'). ".$ext";
                $upload_path = 'fotoupload';
                $request->file('foto')->move($upload_path, $foto_name);
                return $foto_name;
            }
        }
    }

    private function hapusFoto(Buku $buku){
        $is_foto_exist = Storage::disk('foto')->exists($buku->foto);

        if ($is_foto_exist) {
            Storage::disk('foto')->delete($buku->foto);
        }
    }

	public function index(){
	    $buku_list = Buku::orderBy('judul', 'asc')->paginate(3);
		$jumlah_buku = Buku::count();
		// return view('readData', compact( 'buku_list', 'jumlah_buku'));
        return view('dashboard', compact( 'buku_list', 'jumlah_buku'));
	}

    public function read(){
        $buku_list = Buku::orderBy('judul', 'asc')->paginate(3);
        $jumlah_buku = Buku::count();
        return view('readData', compact( 'buku_list', 'jumlah_buku'));
        //return view('dashboard', compact( 'buku_list', 'jumlah_buku'));
    }

	public function create(){
		$list_penerbit = Penerbit::pluck('nama_penerbit', 'id');
        $list_kategori = Kategori::pluck('nama_kategori', 'id');
        return view('create', compact('list_penerbit', 'list_kategori'));
		//return view('create');
	}

	public function show(Buku $buku){
    	return view('show', compact('buku'));
    }

	public function store(BukuRequest $request){
		// $buku = new Buku;
		// $buku->id_buku		= $request->id_buku;
		// $buku->judul	= $request->judul;
		$input = $request->all();

        //upload foto
        if ($request-> hasFile('foto')) {
            $input['foto'] = $this->uploadFoto($request);
        }

        //insert Buku
        $buku = Buku::create($input);
        
        //insert simpan kategori
        $buku->kategori()->attach($request->input('kategori_buku'));

    	return redirect('/buku/read');
	}

    public function edit(Buku $buku){
        //$buku = Buku::findOrFail($id);
        //$list_penerbit = Penerbit::pluck('nama_penerbit', 'id');
        //$list_penerbit = \App\Penerbit::get()->pluck('nama_penerbit', 'id');

        //$list_kategori = Kategori::pluck('nama_kategori', 'id');
        //return view('edit', compact('buku','list_penerbit', 'list_kategori'));
        return view ('edit', compact('buku'));
     }

    public function update(Buku $buku, BukuRequest $request){
        $input = $request->all();

        //update foto 
        if ($request->hasFile('foto')) {

            $input['foto'] = $this->updateFoto($buku, $request);

        }
        //update data buku
        $buku->update($input);


        //update data kategori
        $buku->kategori()->sync($request->input('kategori_buku'));
        return redirect('/buku/read');
    }    

	public function destroy(Buku $buku){
        //hapus foto kalau ada
        $this->hapusFoto($buku);
        $buku->delete();
        return redirect('buku');
    }

}
