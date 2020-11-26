<?php

namespace App\Http\Controllers\Controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Name;
use Auth;

class TestController extends Controller
{
    public function index() {
          $names = Name::all();
      return view('index', compact('names'));
    }

    public function edit($id) {
          $name = Name::where('_id', $id)->first();
      return view('edit', compact('name'));
    }

    public function add() {
       return view('create');
    }

    public function create(Request $request) {
        Name::create(array(
            'name'   => $request->name,
        ));
       return redirect(route('names.all'));
    }

    public function update(Request $request, $id) {
          $name = Name::where('_id', $id)->update(array(
              'name' => $request->name,
          ));
       return redirect(route('names.all'));
    }

    public function destroy($id) {
          $name = Name::where('_id', $id)->delete();
       return redirect(route('names.all'));
    }
}
