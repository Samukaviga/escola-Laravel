
<x-layout >

<!-- Page Wrapper -->
<div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Revisar</h3>
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
									<label >Turma</label>
									<input name="turma" id="turma" class="form-control" >
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
												<th>Dia</th>
												<th>Horário</th>
												<th>Método</th>
												<th>Unidade</th>
												<th>Status</th>
												<th>Ação</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												
												<td>01</td>
												<td>
													<h2>
														<a>Samuel Gomes</a>
													</h2>
												</td>
												<td>04/03/2024</td>
												<td>13:00</td>
												<td>Presencial</td>
												<td>Fisk Suzano</td>
												<td><span class="badge bg-success">Aprovado</span></td>
												<td>
													<div>
														<button type="button" class="btn btn-outline-success me-1 mb-1" id="type-success">Aprovar</button>
														<button type="button" class="btn btn-outline-danger me-1 mb-1" id="type-error">Reprovar</button>
													</div>
												</td>
											</tr>
											<tr>
											
												<td>02</td>
												<td>
													<h2>
														<a>Gabriel</a>
													</h2>
												</td>
												<td>04/03/2024</td>
												<td>13:00</td>
												<td>Presencial</td>
												<td>Fisk Suzano</td>
												<td><span class="badge bg-warning">Em Análise</span></td>
												<td>
													<div>
														<button type="button" class="btn btn-outline-success me-1 mb-1" id="type-success">Aprovar</button>
														<button type="button" class="btn btn-outline-danger me-1 mb-1" id="type-error">Reprovar</button>
													</div>
												</td>
											</tr>											
										</tbody>
									</table>
									
								</div>
							</div>							
						</div>					
					</div>					
				</div>

</x-layout>