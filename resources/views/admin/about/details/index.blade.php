@extends('layouts.merge.dashboard')
@section('titulo', 'Detalhes Sobre o IMED')

@section('content')
    <div class="card mb-2">
        <div class="card-body">

            <div class="col-md-12">
                <div class="row align-items-center">
                    <div class="col">
                        <h2 class="h5 page-title">
                            Detalhes Sobre o imed
                        </h2>
                    </div>
                    <div class="col-auto">
                        @isset($about)
                            <a type="button" class="btn btn-sm btn-primary text-white"
                                href="{{ url("admin/about/edit/{$about->id}") }}">
                                <span class="fe fe-edit fe-16 mr-2"></span>Editar Sobre o IMED
                            </a>
                        @endisset
                    </div>
                </div>
            </div>

        </div>
    </div>

    @isset($about)
        <div class="card shadow">
            <div class="card-body">

                <div class="container-fluid">
                    <div class="row m-4">



                        <div class="col-md-12 mb-2">

                            <b>Título:</b>
                            <p class="mb-1 text-dark">
                                <h4> {{ $about->title }}</h4>
                            </p>
                        </div>
                        <div class="col-md-12 mb-2">

                            <b>Corpo:</b><br>
                            <p class="mb-1 text-dark">
                                {!! html_entity_decode($about->body) !!}
                            </p>
                        </div>

                    </div> <!-- .row -->
                    <div class="row align-items-center">
                        <div class="col-md-7 mb-2">
                            <hr>
                            <p class="mb-1 text-dark"><b>Data de Cadastro:</b> {{ $about->created_at }}
                            </p>
                            <p class="mb-1 text-dark"><b>Última Actualização:</b> {{ $about->updated_at }}
                            </p>

                        </div>
                    </div>
                </div> <!-- .container-fluid -->
            </div>
        </div>
    @endisset


@endsection

