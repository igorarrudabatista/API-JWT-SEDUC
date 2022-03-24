<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\EducarTech;


class EducarTechController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    
    {
        $response = Http::withToken('AIzaSyAEX2rWRIXE66R9w3kZaI5xtZhUE5_Q7T0')->post('https://api-gateway-seduc-mt-63016sob.uc.gateway.dev');
       // dd($response->json());
       return $response;
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
        EducarTech::create($request->all());

    }


    public function show($id)
    {
       // $consulta = EducarTech::where('GoogleTurmaID', '=', '463445207008')->get();
       $consulta = EducarTech::where('Escola_ID', '=', $id)->get();
       return $consulta;

    }


    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
