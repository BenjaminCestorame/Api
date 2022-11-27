<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use App\Models\Provincia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactEmail;


class ProvinciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('contactanos.index');
         
    //    $provincias = Provincia::all();
       
        
    //     return response()->json([ 
    //         'mensaje' => 'Listado de provincias',
    //         'data'=>  $provincias
    //     ]);
             
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $provincia = Provincia::create([
            'nombre' => $request['nombre'],
            

          ]);
           
           

        $details =[
            'title' => 'Post title: ' . $provincia->id,
            'body' => $provincia->nombre
            ];
            Mail::to('Benjamincestorame@gmail.com')->send(new ContactEmail($details));
            
            return response([ 
             'mensaje'=> 'Mensaje enviado con exito',
             
           ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Provincia  $provincia
     * @return \Illuminate\Http\Response
     */
    public function show(Provincia $provincia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Provincia  $provincia
     * @return \Illuminate\Http\Response
     */
    public function edit(Provincia $provincia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Provincia  $provincia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Provincia $provincia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Provincia  $provincia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Provincia $provincia)
    {
        //
    }   
    
    
    public function getProvincia()
     { 
        $client = new Client();
        
        $res = $client->request('GET', 'https://apis.datos.gob.ar/georef/api/municipios?provincia=22&campos=id,nombre&max=100');
        //echo  $res->getBody();
        $provincias = json_decode($res->getBody(), true);
          $data = [];
      
         return response($provincias['municipios']);
     }
      
       public function Holamundo(){ 
         return response ('hola mundo!');
       }
}


 

        
