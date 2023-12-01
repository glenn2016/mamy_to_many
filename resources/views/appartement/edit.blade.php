@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Appartement
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Appartement</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('appartements.update', $appartement->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('appartement.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
