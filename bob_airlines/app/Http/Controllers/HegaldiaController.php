<?php

namespace App\Http\Controllers;

use App\Models\Hegaldia;
use Illuminate\Http\Request;

class HegaldiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        $request->validate([
            'irteera_aireportua' => 'required|min:3',
            'helmuga_aireportua' => 'required|min:3',
        ]);
    
        $hegaldia = new Hegaldia;
        $hegaldia->irteera_aireportua = $request->irteera_aireportua;
        $hegaldia->helmuga_aireportua = $request->helmuga_aireportua;
        $hegaldia->irteera_eguna_ordua = $request->irteera_eguna_ordua;
        $hegaldia->iraupena = $request->iraupena;
        $hegaldia->save();
    
        return redirect()->route('app')->with('success', 'Hegaldia sortuta!');
    }

    public function index(){
        $hegaldias = Hegaldia::all();
        return view('hegaldia.index', ['hegaldiak' => $hegaldias]);

    }

    public function indexApi(){
        $hegaldias = Hegaldia::all();
        return $hegaldias;

    }
    public function showApi($id){
        $hegaldias = Hegaldia::find($id);
        return $hegaldias;

    }
    public function show($id){
        $hegaldias = Hegaldia::find($id);
        return view('hegaldia.show', ['hegaldiak' => $hegaldias]);

    }

    public function update(Request $request, $id){
        $hegaldias = Hegaldia::find($id);
        $hegaldias->irteera_aireportua = $request->irteera_aireportua;
        $hegaldias->helmuga_aireportua = $request->helmuga_aireportua;
        $hegaldias->irteera_eguna_ordua = $request->irteera_eguna_ordua;
        $hegaldias->iraupena = $request->iraupena;
        $hegaldias->save();
        
        //return view('liburuak.index', ['success' => 'Liburua aldatuta!']);
        return redirect()->route('app')->with('success', 'Hegaldia aldatuta!'); 
    }

    public function destroy($id){
        $hegaldias = Hegaldia::find($id);
        $hegaldias->delete();
      //  return "Hegaldia ezabatu da"; 
    }
}
