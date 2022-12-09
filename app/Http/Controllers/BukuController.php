<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function paginate($items, $perPage = 2, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }

    public function index()
    {
        //
        $file = file_get_contents(public_path() . "/buku.json");
        $data = json_decode($file, true);
        $datas = $this->paginate($data);
        
        return view('pages.listdata', compact('datas'));
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
            'title' => $request->title,
            'author' => $request->author,
            'genre' => $request->genre,
            'tahun' => $request->tahun,
            'gambar' => $request->gambar,
            'deskripsi' => $request->deskripsi
        );

        $jsonfile = json_encode($datas, JSON_PRETTY_PRINT);
        $file = file_put_contents(public_path() . "/buku.json",$jsonfile);

        return redirect('/');
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
        $file = file_get_contents(public_path() . "/buku.json");
        $datas = json_decode($file, true);
        $jsonfile = $datas[$id-1];
        
        return view('pages.detail', compact('jsonfile'));
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
            'title' => $request->title,
            'author' => $request->author,
            'genre' => $request->genre,
            'tahun' => $request->tahun,
            'gambar' => $request->gambar,
            'deskripsi' => $request->deskripsi
        );

        $jsonfile = json_encode($datas, JSON_PRETTY_PRINT);
        $file = file_put_contents(public_path() . "/buku.json",$jsonfile);

        return redirect('/');
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

        return redirect('/');
    }

    //Dashboard
    public function dashboard(){
        //
        $file = file_get_contents(public_path() . "/buku.json");
        $datas = json_decode($file, true);
        return view('pages.dashboard', compact('datas'));
    }
}
