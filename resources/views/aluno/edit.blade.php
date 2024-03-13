<x-layout>

<!-- Page Wrapper -->
<div class="page-wrapper">
        
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        <div class="content container-fluid">
				
                <!-- Page Header -->
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Editar Alunos</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dados</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->
            
                <div class="row">
                    <div class="col-sm-12">
                    
                        <div class="card">
                            <div class="card-body">
                                <form action="/alunos/{{ $aluno->id }}" method="post" >
                                    @csrf
                                    @method('PUT') 
                                    <div class="row p-2">
                                        <div class="col-12 col-sm-4 m-3">  
                                            <div class="input-block local-forms">
                                                <label>Nome Completo </label>
                                                <input type="text" name="nome" id="nome" value="{{ $aluno->nome }}" maxlength="50" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-4 m-3">
                                            <div class="input-block local-forms">
                                                <label >Turma</label>
                                                <select name="turmas_id" id="professor" class="form-control" >
                                                    <option >Selecione a turma</option>
                                                    @foreach($turmas as $turma)
                                                    <option value="{{ $turma->id }}" {{ $turma->id == $aluno->turmas_id ? 'selected' : '' }}>{{ $turma->nome }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-4 m-3">  
                                            <div class="input-block local-forms">
                                                <label>Data Nascimento</label>
                                                <input type="date" value="{{ $aluno->nascimento }}" name="nascimento" id="nascimento" class="form-control" placeholder="DD-MM-YYYY" >
                                            </div>
                                        </div>
                                        <div class="col-12 m-3">
                                            <div class="student-submit">
                                                <button type="submit" class="btn btn-primary">Concluir</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                    </div>					
                </div>					
            </div>

</x-layout>