<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function index()
    {
        $Peoples = People::all();
        return response()->json($Peoples);
    }

    public function show($id)
    {
        $People = People::find($id);
        return response()->json($People);
    }

    public function store(Request $request)
    {

        $newPeople = New People();
        $newPeople->name=$request->name;
        $newPeople->surname=$request->surname;
        $newPeople->phone_number=$request->phone_number;
        $newPeople->street = $request->street;
        $newPeople->city_country=$request->city_country;
        $newPeople->save();

        return response()->json($newPeople);
    }

    public function update(Request $request, $id)
    {
        $newPeople = People::findorfail($request->id);

        foreach ($request->all() as $key => $value) {
            if (!is_null($value)) {
                $newPeople->$key = $value;
            }
            $newPeople->update();
            return response()->json($newPeople);
        }
    }

    public function destroy($id)
    {
        $People = People::find($id);
        $People->delete();

        return response()->json("deleted successfully");
    }
}
