<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class UserController extends Controller
{
    public function index() {
        return view('users.index');
    }

    public function create (){
        return view('users.create');
    }

    public function store(Request $request){
        return $request->all();
    }

    public function edit(string $id){
        $data['id'] = $id;
        return view ('users.edit', $data);
    }

    public function show(string $id) {
        $data['id'] = $id;
        return view ('users.show', $data);
    }


    public function update(Request $request) {
        return $request->all();
    }

    public function destroy(string $id) {
        return 'Delete data with the id of' . $id;
    }
}
