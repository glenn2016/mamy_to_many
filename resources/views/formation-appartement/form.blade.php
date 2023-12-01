<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Formation') }}
            <select class="form-select{{ $errors->has('formation_id') ? ' is-invalid' : '' }}" name="formation_id" id="formation_id" aria-label="Default select example">
                <option selected disabled>--Faites votre choix--</option>
                @foreach ($formations as $Formation)
                    <option value="{{ $Formation->id }}" {{ $Formation->id == $formationAppartement->formation_id ? 'selected' : '' }}>{{ $Formation->nom }} {{ $Formation->name }}</option>
                @endforeach
            </select>
            {!! $errors->first('formation_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('Aprenant') }}
            <select class="form-select{{ $errors->has('apprenant_id') ? ' is-invalid' : '' }}" name="apprenant_id" id="apprenant_id" aria-label="Default select example">
                <option selected disabled>--Faites votre choix--</option>
                @foreach ($appartements as $Appartement)
                    <option value="{{ $Appartement->id }}" {{ $Appartement->id == $formationAppartement->apprenant_id ? 'selected' : '' }}>{{ $Appartement->nom }} {{ $Appartement->prenom }}</option>
                @endforeach
            </select>
            {!! $errors->first('apprenant_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>