<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\EducarTechAlunos;
use App\Http\Resources\AlunoCollection; //Collection
use App\Http\Resources\AlunoResource;  //Resource
use App\Repository\AlunoRepository;   //Repository



class Educartech_aluno extends Controller
{
    /**
    * @OA\Get(
 *     path="/api/seduc/aluno",
        *     tags={"Aluno"},
        * 
        *     summary=" Dados da Tabela Aluno",
        *     description=
        * "Exemplo de uso: 
          
        *      Exemplo 1 => Usando o Where: URL + ?fields=GoogleTurmaID,GoogleUserID,GedAluCod&coditions=GedAluCod:=:1158331  
        *      Exemplo 2  => Usando o like: URL + ?fields=GoogleTurmaID,GoogleUserID,GedAluCod&coditions=GedAluCod:like:%1%  ",
       
            *     @OA\Parameter(
            *         name="GoogleTurmaID",
            *         in="path",
            *         description="GoogleTurmaID",
            *         required=true,
            * 
            *         @OA\Schema(
            *              format="int64",
            *             type="integer"
            *         ),
            *         example="454164466354",
       
            *         style="form"),
            * 
            *  
            *     @OA\Response(response="200", description="OK"),
            *     @OA\Response(response=422,   description="Missing Data"),
            *     @OA\Response(response=401,   description="fail"),
            *     @OA\Response(response=404,   description="fail"),
            * 
            * 
            * )
            * return 
        */
        public function __construct(EducarTechAlunos $aluno) 
        {
            $this->aluno = $aluno;
        }

       
        public function index(Request $request) 
        {

            $alunos = $this->aluno;
            $alunoRespository = new AlunoRepository($alunos);

            if($request->has('coditions')) {
                $alunoRespository->selectCoditions($request->get('coditions'));
            }

            if($request->has('fields')) {
                $alunoRespository->selectFilter($request->get('fields'));
            }

        return new AlunoCollection($alunoRespository->getResult()->paginate(15));
         }


   



        // public function show($ESCOLA_ID)
        // {
        //     //$educarTech = $this->educarTech->find($ESCOLA_ID);
        //     $educarTech = EducarTech::where('ESCOLA_ID', '=', $ESCOLA_ID)->paginate(15);

        //     return new ProfessorResource($educarTech);
        // }



        
} 