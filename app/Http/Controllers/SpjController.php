<?php

namespace App\Http\Controllers;

use App\Models\spj;
use App\Models\belanja;
use App\Models\bagian;
use App\Models\dokumen;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SpjController extends Controller
{
    
    public function TampilHalamanSpj(){

        $s = spj::with('belanja','bagian')->latest()->paginate(8);

        return view('halaman_3.spj',compact('s'));
    }

    public function details($id)
    {
        $spj = spj::where([
            ['delstatus','=',true],
            ['id', '=', $id]
        ])->first();
    
        return view('detail_spj', compact('spj'));
    }

    public function modal($id)
    {
        $spj = spj::where([
            ['delstatus','=',true],
            ['id', '=', $id]
        ])->first();
    
        return view('welcome', compact('spj'));
    }
    

    public function TambahSPJK(){
        $sp = belanja::all();
        $ssp = bagian::all();
        // Inisialisasi $vardoc dengan nilai yang benar
        $spjData = spj::with('dokumen')->get(); // Misalnya, mengambil semua data SPJ dengan dokumen terkait
    
        // foreach($spjData as $spj){
        //     if($spj->dokumen->isNotEmpty()){ // Memeriksa apakah program memiliki dokumen
        //         $spj->status = 'Lengkap';
        //     } else {
        //         $spj->status = 'Tidak Lengkap';
        //     }
        //     $spj->save(); // Menyimpan perubahan status ke basis data
        //}
    
        // Pass data programsWithoutDocument ke view untuk menampilkan program yang tidak memiliki dokumen
        return view('halaman_3.tambah_spj', compact('sp', 'ssp', 'spjData'));
    }
    
    

    public function SimpanSPJ(Request $request){

        $request->validate([
            'kode_program' => 'required|string|unique:spj',
            'pptk' => 'required|string',
            'program' => 'required|string',
            'kegiatan' => 'required|string',
            'sub_kegiatan' => 'required|string',
            'tgl' => 'required|date',
            // Tambahkan aturan validasi untuk kolom-kolom lainnya
        ], [
            'kode_program.required' => 'Kode program tidak boleh kosong',
            'kode_program.unique' => 'Kode program sudah ada, harap masukkan kode yang berbeda',
            'program.required' => 'program tidak boleh kosong',
            'kegiatan.required' => 'Kegiatan tidak boleh kosong',
            'sub_kegiatan.required' => 'sub Kegiatan tidak boleh kosong',
            'tgl.required' => 'Tanggal tidak boleh kosong',
            'pptk.required' => 'PPTK tidak boleh kosong',

        ]);

        spj::create([
            'kode_program'=> $request->kode_program,
            'pptk'=> $request->pptk,
            'bagian_id'=> $request->bagian_id,
            'program'=> $request->program,
            'kegiatan'=> $request->kegiatan,
            'sub_kegiatan'=> $request->sub_kegiatan,
            'belanja_id'=> $request->belanja_id,
            'tgl'=> $request->tgl,
            'status'=> 'Pemeriksaan Kelengkapan',
            //'user_id'=> Auth()->user()->id,
        ]);

        Session::flash('success', 'spj telah tersimpan');

        return redirect('Tambah_Spj');

    }

    public function TampilHalamanUpdateSpj($id){

        $s15  = spj::findOrFail($id);
       

        return view('halaman_3.update_spj',compact('s15'));
    }

    public function SimpanPerubahanSpj(Request $request, $id)
    {
            $ss = spj::findOrFail($id);

            $data = [
                // 'kode_program'=> $request->kode_program,
                'pptk'=> $request->pptk,
                'program'=> $request->program,
                'kegiatan'=> $request->kegiatan,
                'id_bagian' => $request->id_bagian,
                'sub_kegiatan'=> $request->sub_kegiatan,
                'tgl'=> $request->tgl,
                //'status'=> $request->status,
            ];

            $ss->update($data);
            return redirect('Spj');
        }

    //     public function hapusSpj($id)
    // {
    //     $var = spj::findOrFail($id);
    //     $data = ['delstatus' => false,];
    //     $var->update($data);
    //     return back();
    // }

    public function hapusSpj($id)
    {
        $varspj = spj::findOrFail($id);
        $varspj->delete();
        return back();
    }

    public function Welcome(Request $request)
{
    if ($request->has('search')) {
        $s = spj::with('belanja', 'bagian', 'dokumen')
            ->where('program', 'LIKE', '%' . $request->search . '%')
            ->orWhereHas('bagian', function ($query) use ($request) {
                $query->where('nama_bagian', 'LIKE', '%' . $request->search . '%');
            })
            ->orderBy('created_at', 'desc')
            ->paginate(5);
    } else {
        $s = spj::with('belanja', 'bagian')
            ->orderBy('created_at', 'desc')
            ->paginate(5);
    }

    return view('welcome', compact('s'));
}


}
