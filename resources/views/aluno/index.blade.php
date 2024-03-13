
<x-layout >



<!-- Page Wrapper -->
<div class="page-wrapper">
				@isset($mensagemSucesso)
							<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
								 {{ $mensagemSucesso }}
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>
						@endisset
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Alunos</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item active">Revisar</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="student-group-form mb-4" >
						<div class="row">
							<div class="col-lg-3 col-md-6">  
								<div class="input-block local-forms">
									<label >Professor</label>
									<select name="professor" id="professor" class="form-control" >
                            			<option value="" >Selecione o Professor</option>
                                        <option value="BIANCA" >BIANCA</option>
                                        <option value="CARLOS" >CARLOS</option>
                           			 </select>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">  
								<div class="input-block local-forms">
									<label >Mês</label>
									<select name="professor" id="professor" class="form-control" >
                            			<option value="" >Selecione o mês</option>
                                        <option value="BIANCA" >1 -Janeiro</option>
                                        <option value="CARLOS" >2 - Fevereiro</option>
                           			 </select>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">  
								<div class="input-block local-forms">
									<label >Ano</label>
									<select name="professor" id="professor" class="form-control" >
                            			<option value="" >Selecione o ano</option>
                                        <option value="BIANCA" >2023</option>
                                        <option value="CARLOS" >2024</option>
                           			 </select>
								</div>
							</div>
							<div class="col-lg-2">  
								<div class="search-student-btn">
									<button type="btn" class="btn btn-primary">Filtrar</button>
								</div>
							</div>
						</div>
					</div>
				
					<div class="row">
						<div class="col-sm-12">
						
							<div class="card card-table">
								<div class="card-body">
								
									<!-- Page Header -->
									<div class="page-header">
										<div class="row align-items-center">
											
											
										</div>
									</div>
									<!-- /Page Header -->
								
									<table class="table border-0 star-student table-hover table-center mb-0 table-striped">
										<thead class="student-thread">
											<tr>
												
												<th>ID</th>
												<th>Nome</th>
												<th>Turma</th>											
											
											</tr>
										</thead>
										<tbody>
										@foreach($alunos as $aluno)
											<tr>
											
												<td>{{ $aluno->id }}</td>
												<td>
													<h2>
														<a>{{ $aluno->nome }}</a>
													</h2>
												</td>
												<td>{{ $aluno->turmas->nome }}</td>

												<td>
													<div class="d-flex">
														<a href="/alunos/{{ $aluno->id }}/editar" type="button" class="btn btn-outline-success me-1 mb-1" id="type-success">Editar</a>
														
														<form  action="/alunos/{{ $aluno->id }}" method="post">
															@csrf
															@method('delete')	
															<button type="submit" class="btn btn-outline-danger me-1 mb-1" id="type-error">Excluir</button>
														</form>
													</div>
												</td>
											</tr>
											@endforeach
																				
										</tbody>
									</table>
									
								</div>
							</div>							
						</div>					
					</div>					
				</div>

</x-layout>