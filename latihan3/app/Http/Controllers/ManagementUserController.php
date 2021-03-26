<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementUserController extends Controller
{
    //disini isi controller management user
    public function index(){
        return "Hallo ini adalah method index, dalam controller ManagementUser.";
    }
}
    public function create()
    {
        return "Method ini nantinya akan digunakan untuk menampilkan form untuk menambahkan data user";
    }
    
    public function store(Request $request)
    {
        return "Method ini nantinya di gunakan untuk menciptakan data user yang baru";
    }

    public function show($id)
    {
        return "Method ini nantinya akan digunakan unutk mengambil satu data user dengan id-" . $id;
    }

    public function edit($id)
    {
        return "Method ini nantinya akan digunakan untuk menampilkan form untuk mengubah data edit dengan id=" . $id;
    }

    public function update(Request $request, $id)
    {
        return "Method ini nantinya akan digunakan untuk mengunah data user dengan id=". $id;
    }

    public function destroy($id)
    {
        return "Method ini nantinya akan digunakan untuk menghapus data user dengan id=" . $id;
    }