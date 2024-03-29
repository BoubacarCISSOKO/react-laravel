@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tableau de bord du Médecin pour voir tous les patients inscrits') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


        <h1 class="text-center my-5">Liste des patients</h1>
        <table class="table">
            <thead>
              <tr class="table-active">
                <th scope="col">ID</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Age</th>
                <th scope="col">Sex</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($patients as $patient)
              <tr>
                    <th>{{ $patient->id}}</th>
                    <td>
                        {{$patient->nom}}
                    </td>
                    <td>{{ $patient->prenom}}</td>
                    <td>{{ $patient->age}}</td>
                    <td>
                        {{$patient->sex}}
                    </td>
                
              </tr>
              @endforeach
            </tbody>
          </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
