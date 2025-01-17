@extends('layouts.app')

@section('content')



<div class="container ">
    <div class="row justify-content-center   ">
        <div class="col-md-7">
            <h1 class="display-1 ">Turmas</h1>
        </div>
        <div class="col-md-4">
            <!-- Criar Aluno-->
            <a href="/alunos" class="btn btn-success questoesMargin3">Alunos</a>
        
                <!-- Criar Turma -->
                <a href="/turmas/criar" class="btn btn-primary questoesMargin3">Criar Turma</a>
        </div>
    </div>



    <div class="row justify-content-center ">
        <div class="col-md-12">
            <div class="card">
                <div class=" "></div>

                <div class="card-body fundoContent ">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        
                            <!--<div class=" row justify-content-center ">
                                    <div class="titleListQuestion col-md-2">
                                        <span>Nome</span>
                                    </div>
                                    <div class="titleListQuestion col-md-2">
                                            <span>Instituição</span>
                                    </div>
                                    <div class="titleListQuestion col-md-2">
                                        <span>Curso</span>
                                    </div>
                                    <div class="titleListQuestion col-md-2">
                                        <span>Período</span>
                                    </div>
                                    <div class="titleListQuestion col-md-2">
                                        <span>Semestre</span>
                                    </div>
                                    <div class="titleListQuestion col-md-2">
                                        <span>Alunos</span>
                                    </div>
                            </div> -->
                                     <!-- Confirmação -->
                            <script>
                                function confirmDelete(id) {
                                    var confirmation = confirm("Deseja realmente excluir?");

                                    if(confirmation){
                                        window.location = "/turmas/delete/"+id;
                                    }   
                                } 
                            </script>

                            <!-- script do modal -->

                            <script>
                                // Get the modal
                                var modal = document.getElementById("myModal");

                                // Get the button that opens the modal
                                var btn = document.getElementById("modalBtn");

                                // Get the <span> element that closes the modal
                                var span = document.getElementsByClassName("close")[0];

                                // When the user clicks the button, open the modal 
                                btn.onclick = function() {
                                modal.style.display = "block";
                                }

                                // When the user clicks on <span> (x), close the modal
                                span.onclick = function() {
                                modal.style.display = "none";
                                }

                                // When the user clicks anywhere outside of the modal, close it
                                window.onclick = function(event) {
                                if (event.target == modal) {
                                    modal.style.display = "none";
                                }
                                }
                            </script>

                                    <!-- loop para mostrar turmas do usuario -->
                                    <div class="row col-md-12 justify-content-center ">
                                    @foreach ($class as $q)
                                    <div class="row col-md-5 listclass justify-content-center">
                                        <div class="col-md-12">
                                                <b> Nome: </b>
                                            <span class="textQuestionList1" >{{$q->nome ?? ''}}</span>
                                        </div>
                                        <div class="col-md-12">
                                               <b> Instituição:</b>
                                                <span class="textQuestionList1" >{{$q->instituicao ?? ''}}</span>
                                        </div>
                                        <div class="col-md-12">
                                               <b> Curso: </b>
                                                <span class="textQuestionList1" >{{$q->curso ?? ''}}</span>
                                        </div>
                                        <div class="col-md-12">
                                                <b>Período:</b>
                                                <span class="textQuestionList1" >{{$q->periodo ?? ''}}</span>
                                        </div>
                                        <div class="col-md-12">
                                                <b>Alunos:</b>
                                                <span class="textQuestionList1" >{{$q->alunos ?? ''}}</span>
                                        </div>
                                        
                                        <div class=" textQuestionList1">
                                        <button class="btn btn-danger btn-sm " onclick="confirmDelete({{ $q->id }})">Excluir</button>
                                        </div>
                                        <div class=" textQuestionList1">
                                        <a class="btn btn-primary btn-sm" href="/turmas/editar/{{ $q->id }}">Editar</a>
                                        </div>
                                        <!--<div class=" textQuestionList1 col-md-1">
                                        <a class="button" href="/alunos/{{ $q->id }}">Alunos</a>
                                        </div>-->
                                        <div class=" textQuestionList1">
                                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal{{$q->id}}">Visualizar</button>
                                        </div>
                                        <div class=" textQuestionList1">
                                            <a class="btn btn-primary btn-sm" href="/turmas/provas/{{ $q->id }}">Provas</a>
                                        </div>
                                    </div>
                                
                                    

                                    <!-- Modal Visualizar -->
                                    <div class="modal fade" id="exampleModal{{$q->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h2 class="modal-title" id="exampleModalLabel">Visualizar Turma</h2>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <b>Nome:</b>{{$q->nome ?? ''}} <br>
                                            <b>Instituição:</b>{{$q->instituicao ?? ''}} <br>
                                            <b>Curso:</b>{{$q->curso ?? ''}} <br>
                                            <b>Período:</b>{{$q->periodo ?? ''}} <br>
                                            <b>Semestre:</b>{{$q->semestre ?? ''}} <br>
                                            <b>alunos:</b>{{$q->alunos ?? ''}} <br>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    
                                    @endforeach
                                    
                                    

                <div>
                    
                
                </div>           


                


                </div>
            </div>
        </div>
    </div>
</div>

@endsection