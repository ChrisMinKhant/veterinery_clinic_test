<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Breeds;
use App\Models\Genders;
use App\Models\Patients;
use App\Models\Status;
use App\Models\Townships;
use Illuminate\Http\Request;

class PatientsController extends Controller
{
    //This function is responsible for creating new patient.
    //In other words, storing new data to the patients database.
    public function createPatient(Request $request)
    {
        $validatedPatientData = $this->validatePatientData($request);

        Patients::create($validatedPatientData);

        return response()->json([
            'creation_status' => 'Patient Data Has Been Created Successfully!',
        ], $status = 200);
    }

    //This function is responsible for getting all patients.
    public function getAllPatients()
    {
        $patientsData = Patients::join('statuses', 'statuses.id', 'patients.status_id')
            ->join('breeds', 'breeds.id', 'patients.breed_id')
            ->join('genders', 'genders.id', 'patients.gender_id')
            ->join('townships', 'townships.id', 'patients.township_id')
            ->select(
                'patients.*',
                'statuses.status as status_name',
                'breeds.breed as breed_name',
                'genders.gender as gender_name',
                'townships.township as township_name'
            )
            ->get();

        return response()->json([
            'patients' => $patientsData
        ], $status = 200);
    }

    //This function is responsible for getting one specific patient.
    public function getOnePatient($id)
    {
        $patientData = Patients::where('patients.id', $id)->join('statuses', 'statuses.id', 'patients.status_id')
            ->join('breeds', 'breeds.id', 'patients.breed_id')
            ->join('genders', 'genders.id', 'patients.gender_id')
            ->join('townships', 'townships.id', 'patients.township_id')
            ->select(
                'patients.*',
                'statuses.status as status_name',
                'breeds.breed as breed_name',
                'genders.gender as gender_name',
                'townships.township as township_name'
            )
            ->first();

        $status = Status::get();
        $breeds = Breeds::get();
        $genders = Genders::get();
        $townships = Townships::get();

        return response()->json([
            'patient' => $patientData,
            'status' => $status,
            'breeds' => $breeds,
            'genders' => $genders,
            'townships' => $townships,
        ], $status = 200);
    }

    //This function is responsible for updating one specific patient data.
    public function updatePatient($id, Request $request)
    {
        $validatedPatientData = $this->validatePatientData($request);

        Patients::where('id', $id)->update($validatedPatientData);

        return response()->json([
            'updating_status' => 'Patient Data Has Been Updated Successfully!',
        ], $status = 200);
    }

    //This function is responsible for deleting one specific patient.
    public function deletePatient($id)
    {
        Patients::where('id', $id)->delete();

        return response()->json([
            'deletion_status' => 'Patient Data Has Been Deleted!',
        ], $status = 200);
    }

    //This function is responsible for validating requested data.
    private function validatePatientData(Request $request)
    {
        return $this->validate($request, [
            'name' => 'required',
            'status_id' => 'required|numeric|in:1,2,3',
            'pawrent' => 'required',
            'breed_id' => 'required|numeric',
            'gender_id' => 'required|numeric|in:1,2',
            'date_of_birth' => 'required',
            'phone' => 'required|numeric',
            'address' => 'required',
            'township_id' => 'required|numeric',
        ]);
    }
}
