<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EducarTech;
use App\Models\EducarTechAlunos;


class Dashboard extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $consultaProfessor     = EducarTech::count();
        $consultaAluno         = EducarTechalunos::count();
        $consulta_Aluno        = EducarTechalunos::query()->limit(5)->get();    

        $consulta_Professor    = EducarTech::query()->limit(5)->get();    

        
        
     //   $consulta =EducarTechalunos::query()->limit(1);


        return view(
            'Dashboard.home',
            [
                'consultaProfessor' => $consultaProfessor,
                'consultaAluno' => $consultaAluno,
                'consulta_Aluno' => $consulta_Aluno,
                'consulta_Professor' => $consulta_Professor,
                
                
            ]
        );
        

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
              // $consulta = EducarTech::where('GoogleTurmaID', '=', '463445207008')->get();
       $consulta = EducarTech::where('Escola_ID', '=', $id)->get();
       return $consulta;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
