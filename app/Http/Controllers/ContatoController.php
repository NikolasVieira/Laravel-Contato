<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;
use PDF;

class ContatoController extends Controller
{
    public function index() {
        $contato = Contato::where('status', '=', true)->get();
        return view('pages.contato.index', compact(['contato']));
    }

    public function create() {
        $contato = Contato::all();
        return view('pages.contato.create', compact('contato'));
    }

    public function store(Request $request) {
        $contato = new contato();
        $contato->nome = $request->input('nome');
        $contato->email = $request->input('email');
        $contato->telefone = $request->input('telefone');
        $contato->path = $request->file('foto')->store('fotos');
        $contato->save();
        return redirect()->route('contato.index', compact('contato'));
    }

    public function show($id) {
        $contato = Contato::where('id', $id)->first();

        $pdf = PDF::loadView('pages.contato.show', compact('contato'));
        return $pdf->setPaper('a4')->stream('contato.pdf');
    }

    public function edit($id) {
        $contato = Contato::find($id);
        if (isset($contato)) {
            return view('pages.contato.edit', compact('contato'));
        }
        return view('pages.contato.index');
    }

    public function update(Request $request, $id) {
        $contato = Contato::find($id);
        if (isset($contato)) {
            $contato->nome = $request->input('nome');
            $contato->email = $request->input('email');
            $contato->telefone = $request->input('telefone');
            $contato->save();
        }
        return redirect()->route('contato.index', compact('contato'));
    }

    public function destroy(Request $request, $id) {
        $contato = Contato::find($id);
        if (isset($contato)) {
            $contato->status = false;
            $contato->save();
        }
        return redirect()->route('contato.index', compact('contato'));
    }
}
