<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Milon\Barcode\DNS1D;
use DB;
use PDF;

class BarcodeController extends Controller
{
    function barcode(){

        // $d = new DNS1D();
        // $d->setStorPath(__DIR__.'/cache/');
        // $barcode_data = $d->getBarcodeHTML('9780691147727', 'C128');
        $barang=DB::table('barang')->get();



        return view('barcode', ['barang' =>$barang]);

    }

    function pdf_barcode($id){
        $barang = DB::table('barang')->where('id_barang',$id)->get();
        $barang_id=$id;
        $pdf = PDF::loadview('/cetakbarcode',['barang'=>$barang,'barang_id'=>$barang_id])->setPaper('a4');
        
        // $paper = array(0, 0, 51,0236, 107,717);
        //  $pdf->setPaper($paper);
        // $pdf->setPaper($paper,'landscape');
        return $pdf->stream();
        // return view('/barcode/pdf-barcode',['barang'=>$barang,'barang_id'=>$barang_id]);
    }

    function test_barcode(){
        return view('test-barcode');
    }
}
