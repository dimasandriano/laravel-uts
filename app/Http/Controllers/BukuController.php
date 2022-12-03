<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $file = file_get_contents(public_path() . "/buku.json");
        $datas = json_decode($file, true);
        return view('pages.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.create');
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
        $file = file_get_contents(public_path() . "/buku.json");
        $datas = json_decode($file, true);

        $idlist = array_column($datas, 'id');
        $auto_increment_id = end($idlist);
        $datas [] = array(
            'id' => $auto_increment_id+1,
            'author' => $request->author,
            'title' => $request->title,
            'deskripsi' => $request->deskripsi
        );

        $jsonfile = json_encode($datas, JSON_PRETTY_PRINT);
        $file = file_put_contents(public_path() . "/buku.json",$jsonfile);

        return redirect('/buku');
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
        //
        $file = file_get_contents(public_path() . "/buku.json");
        $datas = json_decode($file, true);

        $jsonfile = $datas[$id-1];

        return view('pages.edit', compact('jsonfile'));
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
        $file = file_get_contents(public_path() . "/buku.json");
        $datas = json_decode($file, true);

        $datas[$id-1] = array(
            'id' => $request->id,
            'author' => $request->author,
            'title' => $request->title,
            'deskripsi' => $request->deskripsi
        );

        $jsonfile = json_encode($datas, JSON_PRETTY_PRINT);
        $file = file_put_contents(public_path() . "/buku.json",$jsonfile);

        return redirect('/buku');
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
        $file = file_get_contents(public_path() . "/buku.json");
        $datas = json_decode($file, true);

        unset($datas[$id-1]);

        $jsonfile = json_encode($datas, JSON_PRETTY_PRINT);
        $file = file_put_contents(public_path() . "/buku.json",$jsonfile);

        return redirect('/buku');
    }
}
