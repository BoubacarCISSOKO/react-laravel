@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Inscription Patients</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('udapte', $patient->id) }}">
                    @method("PUT")
                    @csrf 
                        <div class="row mb-3">
                            <label for="nom" class="col-md-4 col-form-label text-md-end">Nom</label>

                            <div class="col-md-6">
                                <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ $patient->nom }}" required autocomplete="nom" autofocus>

                                @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="prenom" class="col-md-4 col-form-label text-md-end">Prenom</label>

                            <div class="col-md-6">
                                <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ $patient->prenom }}" required autocomplete="prenom">

                                @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="age" class="col-md-4 col-form-label text-md-end">Age</label>

                            <div class="col-md-6">
                                <input id="age" type="text" value="{{ $patient->age }}" class="form-control @error('age') is-invalid @enderror" name="age" required autocomplete="age">

                                @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $age }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="sex" class="col-md-4 col-form-label text-md-end">Genre</label>

                            <div class="col-md-6">
                                <input id="sex" type="text" class="form-control" name="sex" value="{{ $patient->sex }}" required autocomplete="sex">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="medecin_id" class="col-md-4 col-form-label text-md-end">Nom du Médecin:</label>

                            <div class="col-md-6">
                            <select data-placeholder="veuillez selectionner" name="medecin_id" id="medecin_id" class="form-control">
                                <option>Veuillez choisir</option>
                                @foreach($nomMedecins as $nomMedecin)
                                    <option {{ $patient->medecin_id == $nomMedecin->id ? 'selected' : "" }} value="{{$nomMedecin->id}}">{{ $nomMedecin->nom }}</option>
                                @endforeach
                            </select>                           
                            </div>
                            
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    modifier
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
