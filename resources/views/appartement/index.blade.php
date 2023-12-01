@extends('layouts.app')

@section('template_title')
    Appartement
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Appartement') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('appartements.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Matricule</th>
										<th>Nom</th>
										<th>Prenom</th>
										<th>Niveau</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($appartements as $appartement)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $appartement->matricule }}</td>
											<td>{{ $appartement->nom }}</td>
											<td>{{ $appartement->prenom }}</td>
											<td>{{ $appartement->niveau }}</td>

                                            <td>
                                                <form action="{{ route('appartements.destroy',$appartement->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('appartements.show',$appartement->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('appartements.edit',$appartement->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $appartements->links() !!}
            </div>
        </div>
    </div>
@endsection
