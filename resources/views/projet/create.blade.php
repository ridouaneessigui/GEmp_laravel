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
                      {!! Form::open(['method' => 'POST', 'url' => 'projet/enregistrer', 'class' => 'form-horizontal']) !!}
                          <div class="form-group{{ $errors->has('nom') ? ' has-error' : '' }}">
                              {!! Form::label('nom', 'nom de projet :') !!}
                              {!! Form::text('nom', null, ['class' => 'form-control', 'required' => 'required']) !!}
                              <small class="text-danger">{{ $errors->first('nom') }}</small>
                          </div>

                         <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                              {!! Form::label('date', 'date d entre se projet :') !!}
                              {!! Form::date('date', null, ['class' => 'form-control', 'required' => 'required']) !!}
                              <small class="text-danger">{{ $errors->first('date') }}</small>
                          </div>

                          <div class="form-group{{ $errors->has('type_id') ? ' has-error' : '' }}">
                              {!! Form::label('type_id', 'type de projet') !!}
                              {!! Form::select('type_id', $types, null, ['class' => 'form-control', 'required' => 'required']) !!}
                              <small class="text-danger">{{ $errors->first('type_id') }}</small>
                          </div>


                          <div class="form-group{{ $errors->has('ter') ? ' has-error' : '' }}">
                              {!! Form::label('ter', 'le projet deja termine :') !!}<br>
            
                              {!! Form::radio('ter', 'oui' , true) !!}
                              {!! Form::label('ter', 'oui ') !!}<br>
                              {!! Form::radio('ter', 'non' , false) !!}
                              {!! Form::label('ter', 'non ') !!}
                              <small class="text-danger">{{ $errors->first('ter') }}</small>
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
@endsection
