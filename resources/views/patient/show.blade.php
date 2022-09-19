@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Détail Patient</div>
                <div>                
                    <a href="{{ route('index') }}" class="btn btn-primary text-sm text-gray-700 dark:text-gray-500 underline">Retour</a>
                </div>
                <div class="card-body">
                    <p>Nom: {{ $patient->nom}}</p>
                    <p>Prénom: {{ $patient->prenom}}</p>
                    <p>Age: {{ $patient->age}}</p>
                    <p>Sex: {{ $patient->sex}}</p>
                    @foreach($medecin as $nommedecin)
                        <p value="{{$nommedecin->id}}">Médecin: {{ $nommedecin->nom }}</p>
                    @endforeach 
                   
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
