@extends('base')

@section('content')



<main role="main" class="col-md-9 ml-sm-auto col-lg-10 my-3">
			<div class="card-list">
				<div class="row">
					<div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
						<div class="card blue">
							<div class="title"> <h6> Professores </h6></div>
							<i class="zmdi zmdi-download"></i>
							<div class="value">{{number_format($consultaProfessor, 2)}}
 </div>
							<div class="stat"><b>SEDUC </b> Database BI</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
						<div class="card green">
							<div class="title"> <h6> Estudantes </h6> </div>
							<i class="zmdi zmdi-download"></i>
							<div class="value"> 
							{{number_format($consultaAluno, 2)}}
							</div>
							<div class="stat"><b>SEDUC	</b>data Base BI</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
						<div class="card orange">
							<div class="title"> <h6> PROFESSORES </h6></div>
							<i class="zmdi zmdi-upload"></i>
							<div class="value">Numero</div>
							<div class="stat"><b>EDUCAR TECH</b> Database</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
						<div class="card red">
							<div class="title"> <h6> Estudantes </h6></div>
							<i class="zmdi zmdi-download"></i>
							<div class="value">Numero</div>
							<div class="stat"><b>EDUCAR TECH</b> Database </div>
						</div>
					</div>
				</div>
			</div>
			<div class="projects mb-4">
				<div class="projects-inner">
					<header class="projects-header">
						<div class="title"> SEDUC / Educar Tech</div>
						<div class="count">| Sistema para envio de dados</div>
						<i class="zmdi zmdi-download"></i>
					</header>
					<table class="projects-table">
						<thead>
							<tr>
								<th>Tabela</th>
								<th>Enviados</th>
								<th>Não Enviados</th>
								<th>Status</th>
								<th>Ações</th>
							</tr>
						</thead>
						<tr>
						<td class="member">
								<figure><img src="img/prof.jpg" /></figure>
								<div class="member-info">
									<p>PROFESSORES</p>
									{{number_format($consultaProfessor, 2)}}

								</div>
							</td>
							<td>
								<p>Número de enviados</p>
								<p class="text-primary">Enviados</p>
							</td>
						
							<td>
								<p>Número de não enviados</p>
								<p class="text-danger">Não enviados</p>
							</td>
							<td class="status">
								<span class="status-text status-orange">Processando</span>
							</td>
							<td>
								<form class="form" action="/dashboard/educartechclass" method="POST">
									@csrf
									
									<button class="btn btn-primary" type="submit" disabled>Tramitar </button>


								</form>
							</td>
									
						
						
						</tr>


						<td class="member">
								<figure><img src="img/aluno.png" /></figure>
								<div class="member-info">
									<p>ALUNOS</p>
									{{number_format($consultaAluno, 2)}}

								</div>
							</td>
							<td>
								<p>Número de enviados</p>
								<p class="text-primary">Enviados</p>
							</td>
						
							<td>
								<p>Número de não enviados</p>
								<p class="text-danger">Não enviados</p>
							</td>
							<td class="status">
								<span class="status-text status-orange"> Processando</span>
							</td>
							<td>
								<form class="form" action="#" method="POST">
									<button class="btn btn-primary" type="submit" disabled>Tramitar </button>


								</form>
							</td>
</tr>

</div> </div>
<hr>

<table class="table table-bordered">
  <thead>
    <tr>
		<th scope="col" class="text-danger text-center table-light">ESCOLA_ID</th>
		<th scope="col" class="text-danger table-light">ESCOLA_INEP</th>
		<th scope="col" class="text-danger table-light">TURMA_GID</th>
		<th scope="col" class="text-danger table-light">TURMA_NAME</th>
		<th scope="col" class="text-danger table-light">TURMA_SURNAME</th>
		<th scope="col" class="text-danger table-light">PROFESSOR_GID</th>
		<th scope="col" class="text-danger table-light">OWNER_EMAIL_GID</th>
		<th scope="col" class="text-danger table-light">NivelTurma</th>
		<th scope="col" class="text-danger table-light">CodigoIbgeMunicipio</th>
		<th scope="col" class="text-danger table-light"> NomeMunicipio</th>
		<th scope="col" class="text-danger table-light"> CodigoIbgeDRE</th>
		<th scope="col" class="text-danger table-light"> NomeDRE</th>
		<th scope="col" class="text-danger table-light"> NomeEscola</th>

	</tr>
  </thead>
  @foreach($consulta_Professor as $consultando)

  <tbody>
    <tr>

      <th scope="row" class="text-light">{{$consultando->ESCOLA_ID}}</th>
	  <td class="text- table-light">	 {{$consultando->ESCOLA_INEP}}</td> 
	  <td class="bg-danger table-light"> {{$consultando->TURMA_GID}}</td> 
	  <td class="text- table-light">	 {{$consultando->TURMA_NAME}}</td> 
	  <td class="text- table-light">	 {{$consultando->TURMA_SURNAME}}</td> 
	  <td class="text- table-light">	 {{$consultando->PROFESSOR_GID}}</td> 
	  <td class="text- table-light">	 {{$consultando->OWNER_EMAIL_GID}}</td>  
	  <td class="bg-danger table-light"> {{$consultando->NivelTurma}}</td> 
	  <td class="text- table-light">	 {{$consultando->CodigoIbgeMunicipio}}</td> 
	  <td class="text- table-light">	 {{$consultando->NomeMunicipio}}</td> 
	  <td class="text- table-light">	 {{$consultando->CodigoIbgeDRE}}</td> 
	  <td class="text- table-light">	 {{$consultando->NomeDRE}}</td> 
	  <td class="text- table-light">	 {{$consultando->NomeEscola}}</td> 


	  @endforeach
    </tr>

  </tbody>
</table>








			




<!-- <tr class="danger-item">
							<td>
								<p>New Dashboard</p>
								<p>Google</p>
							</td>
							<td>
								<p>17th Oct, 15</p>
								<p class="text-danger">Overdue</p>
							</td>
							<td class="member">
								<figure><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/584938/people_8.png" /></figure>
								<div class="member-info">
									<p>Myrtle Erickson</p>
									<p>UK Design Team</p>
								</div>
							</td>
							<td>
								<p>$4,670</p>
								<p>Paid</p>
							</td>
							<td class="status">
								<span class="status-text status-red">Blocked</span>
							</td>
							<td>
								<form class="form" action="#" method="POST">
									<select class="action-box">
										<option>Actions</option>
										<option>Start project</option>
										<option>Send for QA</option>
										<option>Send invoice</option>
									</select>
								</form>
							</td>
						</tr>
						<tr>
							<td>
								<p>New Dashboard</p>
								<p>Google</p>
							</td>
							<td>
								<p>17th Oct, 15</p>
								<p class="text-danger">Overdue</p>
							</td>
							<td class="member">
								<figure><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/584938/people_8.png" /></figure>
								<div class="member-info">
									<p>Myrtle Erickson</p>
									<p>UK Design Team</p>
								</div>
							</td>
							<td>
								<p>$4,670</p>
								<p>Paid</p>
							</td>
							<td class="status">
								<span class="status-text status-orange">In progress</span>
							</td>
							<td>
								<form class="form" action="#" method="POST">
									<select class="action-box">
						  <option>Actions</option>
						  <option>Start project</option>
						  <option>Send for QA</option>
						  <option>Send invoice</option>
						</select>
								</form>
							</td>
						</tr>
						<tr>
							<td>
								<p>New Dashboard</p>
								<p>Google</p>
							</td>
							<td>
								<p>17th Oct, 15</p>
								<p class="text-danger">Overdue</p>
							</td>
							<td class="member">
								<figure><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/584938/people_8.png" /></figure>
								<div class="member-info">
									<p>Myrtle Erickson</p>
									<p>UK Design Team</p>
								</div>
							</td>
							<td>
								<p>$4,670</p>
								<p>Paid</p>
							</td>
							<td class="status">
								<span class="status-text status-blue">Early stages</span>
							</td>
							<td>
								<form class="form" action="#" method="POST">
									<select class="action-box">
						  <option>Actions</option>
						  <option>Start project</option>
						  <option>Send for QA</option>
						  <option>Send invoice</option>
						</select>
								</form>
							</td>
						</tr>
						<tr>
							<td>
								<p>New Dashboard</p>
								<p>Google</p>
							</td>
							<td>
								<p>17th Oct, 15</p>
								<p class="text-danger">Overdue</p>
							</td>
							<td class="member">
								<figure><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/584938/people_8.png" /></figure>
								<div class="member-info">
									<p>Myrtle Erickson</p>
									<p>UK Design Team</p>
								</div>
							</td>
							<td>
								<p>$4,670</p>
								<p>Paid</p>
							</td>
							<td class="status">
								<span class="status-text status-orange">In progress</span>
							</td>
							<td>
								<form class="form" action="#" method="POST">
									<select class="action-box">
						  <option>Actions</option>
						  <option>Start project</option>
						  <option>Send for QA</option>
						  <option>Send invoice</option>
						</select>
								</form>
							</td>
						</tr> 
						-->
					</table>
				</div>
			</div> 
			<br><br><br>
			
						</div>
					</div>
				</div>
			</div>
		</main>
	</div>
</div>

@endsection