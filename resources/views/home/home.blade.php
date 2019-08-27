@extends('layouts.app')

@section('content')


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

                    Bem vindo ao PROVA PRO!

                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center ">
        <div class="col-md-12">
        <h3>Elabore suas questões -> Diagrame suas provas -> Gerencie suas turmas -> Corrija as provas de maneira fácil</h3>
        </div>
    </div>
</div>
@endsection
