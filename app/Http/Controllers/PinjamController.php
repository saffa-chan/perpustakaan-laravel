<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Alert;

class PinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //select * from categorys;
        $datas = Category::get();
        return view('pinjam.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('pinjam.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category;
        $category->category_name = $request->category_name;
        $category->save();

        //cara ke 2
        //category::create([
        //'name' => $request->name,
        //'email' => $request->email,
        //'password' => $request->password,
        //]);
        //category::create($request->all());

        return redirect()->to('category')->with('message', 'Data berhasil diubah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$category = category::where('id', $id)->first();
        $edit = Category::find($id);
        return view('category/edit', compact('edit'));
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
        $category = Category::find($id);
        Category::where('id', $id)->update([
            'category_name' => $request->category_name,

        ]);

        //$category = category::find($id);
        //$category->name = $request->name;
        //$category->email = $request->email;
        //$category->password = $request->password;
        //$category->save();

        return redirect()->to('category')->with('message', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::find($id)->delete();
        return redirect()->to('category')->with('message', 'Data berhasil dihapus');
    }
}
