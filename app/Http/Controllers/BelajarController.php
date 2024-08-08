<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelajarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "Konnichiwa";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "This is a halaman create";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "Zhe shi halaman edit with nama param " . $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function tambah()
    {
        $jumlah = 0;
        return view('tambah', compact('jumlah'));
    }

    public function storeTambah(Request $request)
    {
        $number1 = $request->number1;
        $number2 = $request->number2;

        $jumlah = $number1 + $number2;
        return view('tambah', compact('jumlah'));
        //return "Jumlahnya adalah " . $jumlah;
    }

    public function kurang()
    {
        $jumlah = 0;
        return view('kurang', compact('jumlah'));
    }

    public function storeKurang(Request $request)
    {
        $number1 = $request->number1;
        $number2 = $request->number2;

        $jumlah = $number1 - $number2;
        return view('kurang', compact('jumlah'));
        //return "Jumlahnya adalah " . $jumlah;
    }

    public function kali()
    {
        $jumlah = 0;
        return view('kali', compact('jumlah'));
    }

    public function storeKali(Request $request)
    {
        $number1 = $request->number1;
        $number2 = $request->number2;

        $kali = $number1 . $number2;
        return view('kali', compact('jumlah'));
        //return "Jumlahnya adalah " . $jumlah;
    }

    public function bagi()
    {
        $jumlah = 0;
        return view('bagi', compact('jumlah'));
    }

    public function storeBagi(Request $request)
    {
        $number1 = $request->number1;
        $number2 = $request->number2;

        $jumlah = $number1 / $number2;
        return view('bagi', compact('jumlah'));
        //return "Jumlahnya adalah " . $jumlah;
    }
}
