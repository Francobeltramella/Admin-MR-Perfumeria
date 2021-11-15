<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Rubro;
use App\Models\Subrubro;
use Illuminate\Http\Request;

class ProductoController extends Controller
{


    public function index(Request $request){
       $productos = Producto::all();

       $data['productos'] = $productos;
       

       return view('productos.lista', $data);
    }


    public function create(){
        $data['rubros'] = Rubro::orderBy('nombre', 'desc')
                                ->get();
    
        $data['subrubros'] = Subrubro::orderBy('nombre', 'desc')
        ->get();
                                
        return view('productos.form', $data);
    }


    public function store(Request $request)
    {
        // Validate the request...

        $producto = new Producto();

        $producto->nombre = $request->nombre;
        $producto->identificador = $request->identificador;
        $producto->categoria = $request->categoria;
        $producto->marca = $request->marca;
        $producto->descripcion = $request->descripcion;
        $producto->stock = $request->stock;

        if($request->hasFile("foto")){


            $imagen = $request->file("foto");
            $nombreimagen = Str::slug($request->nombre).".".$imagen->guessExtension();
            $ruta = public_path("img/productos/");

            //$imagen->move($ruta,$nombreimagen);
            copy($imagen->getRealPath(),$ruta.$nombreimagen);

            $producto->foto = $nombreimagen;            
            
        }else{
            $producto->foto = "img/prod-4.jpg";
        }
        $producto->rubro_id = $request->rubro;
        $producto->subrubros_id = "1";

        $producto->peso = $request->peso;
        $producto->alto = $request->alto;
        $producto->profundidad = $request->profundidad;
        $producto->ancho =  $request->ancho;

        $producto->variante = $request->variante;

        $producto->precio = $request->precio;
        $producto->precio_promocional = $request->precio_promocional;
       
       
        $producto->codigo_barra = $request->codigo_barra;
        
        $producto->envio = $request->envio;
        $producto->sexo = $request->sexo;
        $producto->rango_edad = $request->rango_edad;
       

     
        $producto->save();
    }
}
