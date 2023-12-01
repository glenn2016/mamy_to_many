@extends('layouts.app')

@section('template_title')
    {{ $appartement->name ?? "{{ __('Show') Appartement" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Appartement</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('appartements.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Matricule:</strong>
                            {{ $appartement->matricule }}
                        </div>
                        <div class="form-group">
                            <strong>Nom:</strong>
                            {{ $appartement->nom }}
                        </div>
                        <div class="form-group">
                            <strong>Prenom:</strong>
                            {{ $appartement->prenom }}
                        </div>
                        <div class="form-group">
                            <strong>Niveau:</strong>
                            {{ $appartement->niveau }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
