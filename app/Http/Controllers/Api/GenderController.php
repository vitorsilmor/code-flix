<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use Illuminate\Http\Request;

class GenderController extends Controller
{

    public function index()
    {
        return Gender::all();
    }

    public function store(Request $request)
    {
        return Gender::create($request->all());
    }

    public function show(Gender $gender)
    {
        return $gender;
    }

    public function update(Request $request, Gender $gender)
    {
        $gender->fill($request->all());
        $gender->save();
        return $gender;
    }


    public function destroy(Gender $gender)
    {
        $gender->delete();
        return response()->noContent();
    }
}
