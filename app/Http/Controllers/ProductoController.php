<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function store(Request $resquest){

        $Producto = new Producto();
        $Producto->producto = $resquest->producto;
        $Producto->precio = $resquest->precio;
        $Producto->cantidad = $resquest->cantidad;
        $Producto->save();
        return back();
    }
    public function productos(){

        $Producto =Producto::all();
        return view('Productos.producto',compact('Producto'));
     
    }
    public function delete($id){
        $Producto = Producto::find($id);
        $Producto->delete();
        return back();
    }
    public function edit($id){
        $Producto = Producto::find($id);
        return view('welcome',compact('Producto'));
    }
    public function Update($id,Request $resquest){
        $Producto = Producto::find($id);
        $Producto->producto = $resquest->producto;
        $Producto->precio = $resquest->precio;
        $Producto->cantidad = $resquest->cantidad;
        $Producto->save();
        return redirect('/');
        
    }
}
