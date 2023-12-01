<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('matricule') }}
            {{ Form::text('matricule', $appartement->matricule, ['class' => 'form-control' . ($errors->has('matricule') ? ' is-invalid' : ''), 'placeholder' => 'Matricule']) }}
            {!! $errors->first('matricule', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nom') }}
            {{ Form::text('nom', $appartement->nom, ['class' => 'form-control' . ($errors->has('nom') ? ' is-invalid' : ''), 'placeholder' => 'Nom']) }}
            {!! $errors->first('nom', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('prenom') }}
            {{ Form::text('prenom', $appartement->prenom, ['class' => 'form-control' . ($errors->has('prenom') ? ' is-invalid' : ''), 'placeholder' => 'Prenom']) }}
            {!! $errors->first('prenom', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('niveau') }}
        
        <select class="form-select" aria-label="Default select example"name="niveau">
            <option selected>Selectione le niveau</option>
            <option value="Debutant">Debutant</option>
            <option value="Intermediare">Intermediare</option>
        </select>
        {!! $errors->first('niveau', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>