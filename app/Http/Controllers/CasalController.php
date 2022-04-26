<?php

namespace App\Http\Controllers;
use App\Casal;
use App\Ciutat;

use Illuminate\Http\Request;

class CasalController extends Controller
{
    public function index(){
        // DB::table('ciutats')->select('nom')->get();
        $todos = Casal::get();
        return view('home',  compact('todos'));
    }
    public function crearcasal(){
        
        $todos = Ciutat::get();
        return view('anadir', compact('todos'));
    }
    public function anadircasal(Request $request){
        $a=strtotime($request->data_inici);
        $b=strtotime($request->data_inici);
        if($a<$b){
            $crear = new Casal;
            $crear ->nom = $request->nom;
            $crear ->data_inici = $request->data_inici;
            $crear ->data_final = $request->data_final;
            $crear ->n_places = $request->n_places;
            $crear ->id_ciutat = $request->id_ciutat;
            $crear -> save();
            return back();
        }else{
            return back()->with('status','fechas incorrectas');
        }
        
        
    }
    static function devolvernombre($id){
        return Ciutat::find($id)->nom;
    }
    public function eliminar($id){
        $categoria2 = Casal::find($id);
        $categoria2->delete();
        return back();
    }
    public function editar($id){
        $todos = Casal::where('id','=',$id)->get();
        $todas = Ciutat::get();
        return view('editar',  compact('todos', 'todas'));
    }
    public function actcasal($id){
        $a=strtotime(request('data_inici'));
        $b=strtotime(request('data_final'));
        if($a<$b){
        Casal::find($id)->update([
            'nom' => request('nom'),
            'data_inici' => request('data_inici'),
            'data_final' => request('data_final'),
            'n_places' => request('n_places'),
            'id_ciutat' => request('id_ciutat'),
        ]);
        return back()->with('status','actualizado');
    }else{
        return back()->with('status','fechas incorrectas');
    }
        
    }
}
