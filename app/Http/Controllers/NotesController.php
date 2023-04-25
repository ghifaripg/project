<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NotesController extends Controller
{
    public function showAll() {
        $note = DB::table('notes')->get();
        return view('notes', ['notes' => $note]);$note = DB::table('notes')->get();
    }

    public function getById($id) {
        $note = DB::table('notes')->where('id', $id)->first();
        return view('detail', ["detail" => $note]);
    }
    
    public function create(Request $request) {
        if ($request->isMethod('post')) {
            $inputs = $request->all();
            $idExists = DB::table('notes')->where('id', $inputs['id'])->exists();
    
            if ($idExists) {
                return redirect('/create')->with('error', 'ID already exists!');
            }
    
            unset($inputs['_token']);
    
            DB::table('notes')->insert($inputs);
    
            return redirect('/notes');
        } else {
            return view('create');
        }
    }
    public function delete($id)
    {
    DB::table('notes')->where('id', '=', $id)->delete();
    return redirect('/notes');
    }
    
    public function edit($id)
    {
        $note = DB::table('notes')->find($id);
        return view('edit', ['note' => $note]);
    }
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'id' => 'required|integer',
            'date' => 'required|date',
            'title' => 'required|max:255',
            'note' => 'required',
        ]);

        DB::table('notes')->where('id', $id)->update($data);

        return redirect('/notes');
    }
}