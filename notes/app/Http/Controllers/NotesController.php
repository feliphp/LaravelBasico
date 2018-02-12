<?php

namespace App\Http\Controllers;
use App\Note;
use Illuminate\Http\Request;
use App\Http\Requests;

class NotesController extends Controller
{
    public function index(){
      $notas = Note::all();
      return view('notes/index',['notes' => $notas]);
    }
    
    public function show($id){
      $note =note::find($id);
      return view('notes/show',['note' => $note]);
    }
}
