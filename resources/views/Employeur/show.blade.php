@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Création de nouveau emp</div><br>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-10 col-md-offset-1">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">name</th>
      <th scope="col">prenom</th>
      <th scope="col">adresse</th>
      <th scope="col">telephone</th>
      <th scope="col">exp</th>
      <th scope="col">date</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>{{$Employeur->nom}} </th>
      <td>{{$Employeur->prenom}}</td>
      <td>{{$Employeur->adresse}}</td>
      <td>{{$Employeur->telephone}}</td>
      <td>{{$Employeur->exp}} </td>
      <td>{{$Employeur->date}} </td>
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
