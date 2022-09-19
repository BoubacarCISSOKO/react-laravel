<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Patient;
use App\Models\Medecin;
class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('patient.index', [
            'patients' => Patient::orderBy('created_at', 'desc')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $nomMedecins = Medecin::all();
        return view("patient.create", compact('nomMedecins'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $patients = new Patient;
        $patients->nom = $request->nom;
        $patients->prenom = $request->prenom;
        $patients->age = $request->age;
        $patients->sex = $request->sex;
        $patients->medecin_id = $request->medecin_id;
        
        $patients->save(); 
        return redirect()->route('index')->with("added", "Patient bien inscrit");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        //
    
        $medecin = Patient::join('medecins', 'patients.medecin_id', '=','medecins.id' )
                        ->where('patients.medecin_id', $patient->id)
                        ->get();
                        
        return view("patient.show", compact('patient','medecin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        //
        $nomMedecins = Medecin::all();
        return view("patient.edit", compact('patient','nomMedecins'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        //
        $patient->nom = $request->nom;
        $patient->prenom = $request->prenom;
        $patient->age = $request->age;
        $patient->sex = $request->sex;
        $patient->medecin_id = $request->medecin_id;
        
        $patient->save(); 
        return redirect()->route('index')->with("added", "Patient bien modifié");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
