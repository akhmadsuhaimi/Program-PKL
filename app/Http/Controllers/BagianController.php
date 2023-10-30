<?php

namespace App\Http\Controllers;

use App\Models\bagian;
use Illuminate\Http\Request;

class BagianController extends Controller
{
    public function TampilHalamanBagian(){

        $bg = bagian::where('delstatus','=',1)->latest()->get();
        
        return view('halaman_2.bagian',compact('bg'));
    }

    public function TampilHalamanTambahBagian(){
        
        return view('halaman_2.tambah_bagian');
    }

    public function Simpanbagian(Request $request){

        bagian::create([
            'nama_bagian'=> $request->nama_bagian,
            //'user_id'=> Auth()->user()->id,
        ]);
        return redirect('Bagian');

    }

    public function TampilHalamanUpdateBagian ($id){

        $bg = bagian::findOrFail($id);

        return view('halaman_2.update_bagian',compact('bg'));
    }

    public function SimpanPerubahanBagian(Request $request, $id)
    {
            $bgn = bagian::findOrFail($id);

            $data = [
                'nama_bagian'=> $request->nama_bagian,
            ];

            $bgn->update($data);
            return redirect('Bagian');
        }

        public function hapusBagian($id)
    {
        $varbg = bagian::findOrFail($id);
        $databg = ['delstatus' => false,];
        $varbg->update($databg);
        return back();
    }


}
