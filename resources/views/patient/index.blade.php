@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tous les patients') }}</div>
                <hr>
                <div>                
                    <a href="{{ route('create') }}" class="btn btn-primary text-sm text-gray-700 dark:text-gray-500 underline">Ajouter Patients</a>
                </div>
                <hr>
                <div>                
                    <a href="{{ route('medecin.create') }}" class="btn btn-primary text-sm text-gray-700 dark:text-gray-500 underline">Ajouter Un Medecin</a>
                </div>
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
                <th scope="col">Action</th>
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

                    <td>
                        <div class="row">
                            <div class="col-md-2">
                            <a href="{{ route('show', $patient->id) }}" class="btn btn-info btn-sm">
                                Détail
                                </a>
                            </div>
                            <div  class="col-md-2">
                            <a href="{{ route('edit', $patient->id)}}" class="btn btn-warning mx-3">Modifier</a>
                                
                            </div>
                        </div>
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
