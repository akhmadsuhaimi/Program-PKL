<?php

namespace App\Http\Controllers;

use App\Models\dokumen;
use App\Models\spj;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class docController extends Controller
{
    public function tampilLihatdDoc(Request $request){

        $dok = dokumen::with('spj')->get();

        $spjData = spj::with('dokumen')->get(); // Misalnya, mengambil semua data SPJ dengan dokumen terkait
    
        foreach($spjData as $spj){
            if($spj->dokumen->isNotEmpty()){ // Memeriksa apakah program memiliki dokumen
                $spj->status = 'Lengkap';
            } else {
                $spj->status = 'Tidak Lengkap';
            }
            $spj->save(); // Menyimpan perubahan status ke basis data
        }
       
        return view('halaman_4.TampilLihatDoc',compact('dok','spjData'));
       }

       public function tampilhalamandDoc(){

    
       $vardoc = spj::with('dokumen')->get();

        return view('halaman_4.tabel_dokumen',compact('vardoc'));
       }

       public function tampilDoc(){
       
        return view('halaman_4.singledokumen');
       }

    public function SimpanDoc(Request $request){

        $request->validate([
            'npd' =>'required|file|mimes:pdf,doc,docx|max:2048',
            'pernyataan' =>'required|file|mimes:pdf,doc,docx|max:2048',
            'stj_belanja'=>'required|file|mimes:pdf,doc,docx|max:2048',
            'gambar'=>'required|file|mimes:pdf,doc,jpg,png,jpeg,docx|max:2048',
            'bku'=>'required|file|mimes:pdf,doc,docx|max:2048',
            'belanja_adm'=>'required|file|mimes:pdf,doc,docx|max:2048',
            'kwitansi'=>'required|file|mimes:pdf,doc,docx|max:2048',
            'dftr_hdr'=>'required|file|mimes:pdf,doc,docx|max:2048',
            'ssp'=>'required|file|mimes:pdf,doc,docx|max:2048',
        ]);

        

        $doc = $request->file('npd');
        $doc1 = $request->file('pernyataan');
        $doc2 = $request->file('stj_belanja');
        $doc3 = $request->file('gambar');
        $doc4 = $request->file('bku');
        $doc5 = $request->file('belanja_adm');
        $doc6 = $request->file('kwitansi');
        $doc7 = $request->file('dftr_hdr');
        $doc8 = $request->file('ssp');

        $nmdoc = time().rand(100,999).'.'.$request->file('npd')->getClientOriginalExtension();
        $nmdoc1 = time().rand(100,999).'.'.$request->file('pernyataan')->getClientOriginalExtension();
        $nmdoc2 = time().rand(100,999).'.'.$request->file('stj_belanja')->getClientOriginalExtension();
        $nmdoc3 = time().rand(100,999).'.'.$request->file('gambar')->getClientOriginalExtension();
        $nmdoc4 = time().rand(100,999).'.'.$request->file('bku')->getClientOriginalExtension();
        $nmdoc5 = time().rand(100,999).'.'.$request->file('belanja_adm')->getClientOriginalExtension();
        $nmdoc6 = time().rand(100,999).'.'.$request->file('kwitansi')->getClientOriginalExtension();
        $nmdoc7 = time().rand(100,999).'.'.$request->file('dftr_hdr')->getClientOriginalExtension();
        $nmdoc8 = time().rand(100,999).'.'.$request->file('ssp')->getClientOriginalExtension();

        $doc->move(public_path().'/lampiran',$nmdoc);
        $doc1->move(public_path().'/lampiran',$nmdoc1);
        $doc2->move(public_path().'/lampiran',$nmdoc2);
        $doc3->move(public_path().'/lampiran',$nmdoc3);
        $doc4->move(public_path().'/lampiran',$nmdoc4);
        $doc5->move(public_path().'/lampiran',$nmdoc5);
        $doc6->move(public_path().'/lampiran',$nmdoc6);
        $doc7->move(public_path().'/lampiran',$nmdoc7);
        $doc8->move(public_path().'/lampiran',$nmdoc8);

        dokumen::create([
            'program'=> $request->program,
            'spj_id'=> $request->spj_id,
            'npd' => $nmdoc,
            'pernyataan' => $nmdoc1,
            'stj_belanja' => $nmdoc2,
            'gambar' => $nmdoc3,
            'bku' => $nmdoc4,
            'belanja_adm'=> $nmdoc5,
            'kwitansi'=> $nmdoc6,
            'dftr_hdr'=> $nmdoc7,
            'ssp'=> $nmdoc8,
        ]);
       
        Session::flash('success', 'Dokumen telah tersimpan');

        return redirect('Lihat-Dok');
       }

       public function singledoc($id)
    {

        $spj = spj::find($id); // Mengambil spj dengan ID yang diberikan

        $doc = dokumen::with('spj')->where([
            ['delstatus','=',true],
            ['id', '=', $id]
        ])->first();
    
        return view('halaman_4.singledokumen', compact('doc','spj'));
    }

    public function singletambahdoc($id)
    {
        $spj = spj::find($id); // Mengambil spj dengan ID yang diberikan

    $do = dokumen::where([
        ['id', '=', $id]
    ])->first();

    return view('halaman_4.dokumen', compact('do', 'spj'));
    }




}
