@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Création de nouveau projet</div><br>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-10 col-md-offset-1">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">name</th>
      <th scope="col">date</th>
      <th scope="col">type</th>
      <th scope="col">termine ou non</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>{{$projet->nom}} </th>
      <td>{{$projet->date}} </td>
      <td>{{$projet->type->nom}}</td>
      <td>{{$projet->ter}}</td>
    </tr>
  </tbody>
</table>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
