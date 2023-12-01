@extends('layouts.app')

@section('template_title')
    {{ $formation->name ?? "{{ __('Show') Formation" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Formation</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('formations.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Code:</strong>
                            {{ $formation->code }}
                        </div>
                        <div class="form-group">
                            <strong>Nom:</strong>
                            {{ $formation->nom }}
                        </div>
                        <div class="form-group">
                            <strong>Duree:</strong>
                            {{ $formation->duree }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
