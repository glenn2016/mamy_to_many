@extends('layouts.app')

@section('template_title')
    {{ $formationAppartement->name ?? "{{ __('Show') Formation Appartement" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Formation Appartement</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('formation-appartements.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Formation Id:</strong>
                            {{ $formationAppartement->formation_id }}
                        </div>
                        <div class="form-group">
                            <strong>Apprenant Id:</strong>
                            {{ $formationAppartement->apprenant_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
