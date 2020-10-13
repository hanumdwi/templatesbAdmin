<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use Storage;

class Data2Controller extends Controller
{
    public function getCountries()
    {
        $provinsi = DB::table('provinsi')->pluck("NAMA_PROVINSI","ID_PROVINSI");
        return view('dropdown',compact('provinsi'));
    }

    public function getStates($id) 
    {        
        $kota = DB::table("kota")->where("ID_PROVINSI",$id)->pluck("NAMA_KOTA","ID_KOTA");
        return json_encode($kota);
    }
    public function getKecamatan($id) 
    {        
        $kecamatan = DB::table("kecamatan")->where("ID_KOTA",$id)->pluck("NAMA_KECAMATAN","ID_KECAMATAN");
        return json_encode($kecamatan);
    }
    public function getKelurahan($id) 
    {        
        $kelurahan = DB::table("kelurahan")->where("ID_KECAMATAN",$id)->get();
        return json_encode($kelurahan);
    }
    public function getKodepos($id) 
    {        
        $kelurahan = DB::table("kelurahan")->where("ID_KELURAHAN",$id)->pluck("KODEPOS","ID_KELURAHAN");
        return json_encode($kelurahan);
    }

    public function customer_store1(Request $request)
    {
        //ID CUSTOMER BELUM AUTO INCREMENT
        DB::table('customer')->insert(['ID_CUSTOMER'=>'100','NAMA' => $request->nama,
        'ALAMAT' => $request->alamat,
        'FOTO' => $request->fotoo,
        'ID_KELURAHAN'=> $request->kelurahan,
        ]);
        return redirect('/dropdownlist');
    }

    public function customer_store2(Request $request)
    {
        $base64_str = substr($request->foto, strpos($request->foto, ",")+1);
        $foto = base64_decode($base64_str) ;
        $x = 1000;
        $path = '/public/file_foto/foto_customer'.$x.'.png';
        Storage::put($path,$foto);

        DB::table('customer')->insert(['ID_CUSTOMER'=>'400','NAMA' => $request->nama,
        'ALAMAT' => $request->alamat,
        'FILE_PATH' => $path,
        'ID_KELURAHAN'=> $request->kelurahan,
        ]);
        return redirect('/dropdownlist');
    }

    public function getCountries1()
    {
        $provinsi = DB::table('provinsi')->pluck("NAMA_PROVINSI","ID_PROVINSI");
        return view('dropdown1',compact('provinsi'));
    }

    public function index()
    {
        $customer = DB::table('customer')->get();
        //dump($customer);
        return view ('indexdropdown',['customer' =>$customer]);
    }

    public function index1()
    {
        $customer = DB::table('customer')->get();
        //dump($customer);
        return view ('indexdropdown1',['customer' =>$customer]);
    }
}
