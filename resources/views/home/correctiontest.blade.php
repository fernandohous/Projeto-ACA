@extends('layouts.app')

@section('content')



<div class="container ">
    <div class="row justify-content-center   ">
        <div class="col-md-7">
            <h1 class="display-1 ">Corrigir</h1>
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

                                
                                    <?php $count = 0 ?>
                                    <!-- Loop que mostra os alunos -->
                                        @foreach ($testQuestion as $q)
                                         
                                        <form method="POST" action="{{ route('corrigido', $q->test_id) }}" enctype="multipart/form-data">
                                            @csrf
                                                    
                                                    <div class="row justify-content-center ">
                                                        <div class="col-md-10">
                                                                Enunciado:
                                                                <b class="formulariosquestoes">{{$q->enunciado}}  </b>
                                                        </div>
                                                        <div class="col-md-2">
                                                                Peso:<input name="peso" type="number" class="formulariosquestoes">
                                                        </div>
                                                        
                                                    </div>

                                        @endforeach

                                            <button type="submit" class="btn btn-success">Corrigir</button>
                                                    
                                                    <a href="/correcao" class="btn btn-danger">Cancelar</a>             
            
                                            </form>

                        <div>
                    </div>           
                </div>
            </div>
        </div>
    </div>
</div>

@endsection