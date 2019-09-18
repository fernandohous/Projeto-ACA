@extends('layouts.app')

@section('content')
                
                <!-- Texto de boas vindas -->
                    <div class="textocenter">
                        <p class="display-1">Olá Professor</p>
                        <p class="display-3">Seja bem-vindo!</p>
                        <h2>
                            <small class="text-muted">                     
                            <p>O Prova Pro foi pensado para você.</p>
                            <p>Crie, corrija e gerencie suas provas, com segurança, eficiência e qualidade.</p>                                                
                        </h2>  
                    </div>

<div class="container">
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
                    
                    <div class="textocenter">
                        <h3>
                            <small class="text-muted">
                            O processo de criação de provas do Prova Pro possui etapas conforme o fluxo abaixo:   
                        </h3> 
                    </div>

                    <!-- Carrocel de imagens -->

                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">                        
                            <div class="carousel-item active">
                                <img class="w3-card-4" src="https://user-images.githubusercontent.com/53874458/65147675-02480500-d9f5-11e9-874b-e783a97181c0.png" alt="First slide" id="centro">
                            </div> 
                            
                            <div class="carousel-item">
                            <img class="w3-card-4" src="https://user-images.githubusercontent.com/53874458/65147584-d75db100-d9f4-11e9-885c-611b61904844.png" alt="Second slide" id="centro">    
                            </div>
    
                            <div class="carousel-item">
                            <img class="w3-card-4" src="https://user-images.githubusercontent.com/53874458/65147750-286da500-d9f5-11e9-84e1-5f1a0b3af299.png" alt="Third slide" id="centro">
                            </div>
                            
                            <div class="carousel-item">
                            <img class="w3-card-4" src="https://user-images.githubusercontent.com/53874458/65147635-f1978f00-d9f4-11e9-809c-ac1c657b890d.png" alt="Fourth slide" id="centro">               
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
