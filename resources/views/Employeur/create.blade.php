@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Création de nouveau projet</div><br>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-sm-7">
                      {!! Form::open(['method' => 'POST', 'url' => 'employeur/enregistrer', 'class' => 'form-horizontal']) !!}
                          <div class="form-group{{ $errors->has('nom') ? ' has-error' : '' }}">
                              {!! Form::label('nom', 'LE Nom:') !!}
                              {!! Form::text('nom', null, ['class' => 'form-control', 'required' => 'required']) !!}
                              <small class="text-danger">{{ $errors->first('nom') }}</small>
                          </div>

                           <div class="form-group{{ $errors->has('prenom') ? ' has-error' : '' }}">
                              {!! Form::label('prenom', 'LE Prenom:') !!}
                              {!! Form::text('prenom', null, ['class' => 'form-control', 'required' => 'required']) !!}
                              <small class="text-danger">{{ $errors->first('prenom') }}</small>
                          </div>

                          <div class="form-group{{ $errors->has('adresse') ? ' has-error' : '' }}">
                              {!! Form::label('adresse', 'adresse:') !!}
                              {!! Form::text('adresse', null, ['class' => 'form-control', 'required' => 'required']) !!}
                              <small class="text-danger">{{ $errors->first('adresse') }}</small>
                          </div>

                          <div class="form-group{{ $errors->has('telephone') ? ' has-error' : '' }}">
                              {!! Form::label('telephone', 'telephone:') !!}
                              {!! Form::text('telephone', null, ['class' => 'form-control', 'required' => 'required']) !!}
                              <small class="text-danger">{{ $errors->first('telephone') }}</small>
                          </div>
  
                         <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                              {!! Form::label('date', 'date d entre se projet :') !!}
                              {!! Form::date('date', null, ['class' => 'form-control', 'required' => 'required']) !!}
                              <small class="text-danger">{{ $errors->first('date') }}</small>
                          </div>
  <div class="form-group{{ $errors->has('exp') ? ' has-error' : '' }}">
                              {!! Form::label('exp', 'exp') !!}
                              {!! Form::text('exp', null, ['class' => 'form-control', 'required' => 'required']) !!}
                              <small class="text-danger">{{ $errors->first('exp') }}</small>
                          </div>


                          <div class="form-group{{ $errors->has('projts_id') ? ' has-error' : '' }}">
                              {!! Form::label('projts_id', 'nom de projet') !!}
                              {!! Form::select('projts_id', $projets, null, ['class' => 'form-control', 'required' => 'required']) !!}
                              <small class="text-danger">{{ $errors->first('projts_id') }}</small>
                          </div>

                          <div class="btn-group pull-right">
                              {!! Form::reset("Annuler", ['class' => 'btn btn-warning']) !!}
                              {!! Form::submit("Enregistrer", ['class' => 'btn btn-success']) !!}
                          </div>
                      {!! Form::close() !!}
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br>
@endsection
