@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <table class="table table-striped">
                    <thead class="table-dark">
                    <tr>
                        <td class="table-dark" >name</td>
                        <td class="table-dark">type</td>
                        @if(Auth::user()->role=='Admin')
                        <td class="table-dark">Utilisateur</td>
                        @endif
                        <td class="table-dark">action</td>
                    </tr>
                    <thead>
                    <tbody>
                    @foreach($projets as $projet)
                    <tr>
                        <td>{{$projet->nom}}</td>
                        <td>{{$projet->type->nom}}</td>
                         @if(Auth::user()->role=='Admin')
                        <td>{{$projet->user->name}}</td>
                        @endif
                        <td>
                            <a href="{{url('projet/'.$projet->id.'/show')}}" class="btn btn-info">consulter</a>
                        </td>
                    </tr>
                    @endforeach
                 </tbody>
</table>

<br><br><br>

                  <table class="table table-striped">
                    <thead class="table-dark">
                    <tr>
                        <td class="table-dark">name</td>
                        <td class="table-dark">prenom</td>
                        <td class="table-dark">experience</td>
                        <td class="table-dark">action</td>

                    </tr>
                                        <thead>
                    <tbody>
                    @foreach($employeurs as $employeur)
                    <tr>
                        <td>{{$employeur->nom}}</td>
                        <td>{{$employeur->prenom}}</td>
                        <td>{{$employeur->exp}}</td>

                        <td>
                            <a href="{{url('Employeur/'.$employeur->id.'/show')}}" class="btn btn-info">consulter</a>
                        </td>
                    </tr>
                    @endforeach
                           </tbody>
</table>

        </div>
    </div>
</div>
@endsection
