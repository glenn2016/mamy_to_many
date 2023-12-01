@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Formation Appartement
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Formation Appartement</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('formation-appartements.update', $formationAppartement->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('formation-appartement.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
