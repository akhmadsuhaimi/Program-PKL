<?php

namespace App\Http\Controllers;

use App\Models\spj;
use App\Models\dokumen;
use App\Models\belanja;
use Illuminate\Http\Request;

class BelanjaController extends Controller
{
    public function TampilHalamanBelanja (){

        $blnj = belanja::where('delstatus','=',1)->latest()->get();

        //$blnj = belanja::all();

        return view('halaman_1.belanja',compact('blnj'));

    }

    public function TampilHalamanTambahBelanja (){

        return view('halaman_1.tambah_belanja');

    }

    public function SimpanBelanja(Request $request){

        belanja::create([
            'nama_belanja'=> $request->nama_belanja,
            //'user_id'=> Auth()->user()->id,
        ]);
        return redirect('Belanja');

    }

    public function TampilHalamanUpdateBelanja ($id){

        $be = belanja::findOrFail($id);

        return view('halaman_1.update_belanja',compact('be'));
    }

    public function SimpanPerubahanBelanja(Request $request, $id)
    {
            $blj = belanja::findOrFail($id);

            $data = [
                'nama_belanja'=> $request->nama_belanja,
            ];

            $blj->update($data);
            return redirect('Belanja');
        }

        public function hapusBelanja($id)
    {
        $varbe = belanja::findOrFail($id);
        $databe = ['delstatus' => false,];
        $varbe->update($databe);
        return back();
    }

    public function Dasboard(){

        $spjmsk=spj::count();
        $dokmsk=dokumen::count();
        
        return view('halaman_1.Dasboard',compact('spjmsk','dokmsk'));
    }


}
