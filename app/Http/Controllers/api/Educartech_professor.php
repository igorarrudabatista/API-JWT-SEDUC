<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\EducarTech;
use App\Http\Resources\ProfessorCollection; //Collection
use App\Http\Resources\ProfessorResource;  //Resource
use App\Repository\ProfessorRepository;   //Repository



class Educartech_professor extends Controller
{
  /** 
 *  @OA\Info(title="SEDUC API", version="0.1") 

  * @OA\Get(
 *     path="/api/seduc/professor",
 *     tags={"Professor"},
 * 
 *     summary="Dados da Tabela Professor",
 *     description= "Exemplo de uso: 
   
   *      Exemplo 1 => Usando o Where: URL + ?fields=ESCOLA_ID,TURMA_GID,NivelTurma,TURMA_NAME&coditions=ESCOLA_id:=:10766 
   *      Exemplo 2  => Usando o like: URL + ?fields=ESCOLA_ID,TURMA_GID,NivelTurma,TURMA_NAME&coditions=TURMA_NAME:like:%EM% ",
   *
     *     @OA\Parameter(
     *         name="ESCOLA_ID",
     *         in="path",
     *         description="ESCOLA_ID",
     *         required=true,
     * 
     *         @OA\Schema(
     *              format="int64",
     *             type="integer"
     *         ),
     *         example="15105",

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
        public function __construct(EducarTech $educarTech) 
        {
            $this->educarTech = $educarTech;
        }

       
        public function index(Request $request) 
        {

            $educarTechs = $this->educarTech;
            $professorRespository = new ProfessorRepository($educarTechs);

            if($request->has('coditions')) {
                $professorRespository->selectCoditions($request->get('coditions'));
            }

            if($request->has('fields')) {
                $professorRespository->selectFilter($request->get('fields'));
            }

        return new ProfessorCollection($professorRespository->getResult()->paginate(15));
         }


   


        
} 