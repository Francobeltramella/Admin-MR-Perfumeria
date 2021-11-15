<?php

namespace App\Http\Controllers;

use App\Models\Rubro;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class RubroController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['rubros'] = Rubro::all();
        return view('rubros.lista_rubros',$data);
    }

    public function create(Request $request){
        return view('rubros.form');
    }

        public function store(Request $request)
    {
            $rubro = new Rubro();
            $rubro->nombre = $request->nombre;
            $rubro->save();
            return redirect('/rubros');

    }

    
        public function edit($id)
        {
            $rubro = Rubro::find($id);
            $data['rubro'] =  Rubro::find($id);

            return view('rubros.edit_form', $data);
            
        }

        public function update(Request $request, Rubro $rubro)
        {
            $request->validate([
                'nombre' => 'required',
            ]);
            
            $rubro->update($request->all());
            return redirect('/rubros');
        }



        public function destroy($id)
    {
        // delete
        $rubro = Rubro::find($id);
        $rubro->delete();

        // redirect
        session()->flash('message', 'Successfully deleted the shark!');
        return redirect('/rubros');
    }


}
