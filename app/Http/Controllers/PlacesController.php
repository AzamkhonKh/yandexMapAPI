<?php

namespace App\Http\Controllers;

use App\Models\Places;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlacesController extends Controller
{
    public function getPlaces()
    {
        $user = Auth::user();
        $places = Places::where('user_id', $user->id)->get();
        return response()->json(['data' => $places], 201);
    }

    public function addPlace(Request $request)
    {
        $user = Auth::user();
        try {
            $place = new Places();
            $place->user_id = $user->id;
            $place->name = $request->name;
            $place->dolgota = $request->dolgota;
            $place->shirota = $request->shirota;
            $place->location = $request->location;
            $place->baloon_text = $request->baloon_text;
            $place->save();
            return response()->json(['message' => 'successfully created', 'data' => $place], 201);

        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage(), 'line' => $e->getLine(), 'file' => $e->getFile()], 500);
        }
    }

    public function editPlace(Request $request)
    {
        $user = Auth::user();
        $place = Places::where('user_id', $user->id)->where('id', $request->input('place_id'))->first();
        if (empty($place)) $place = new Places();
        try {
            $place->name = $request->name;
            $place->dolgota = $request->dolgota;
            $place->shirota = $request->shirota;
            $place->location = $request->location;
            $place->baloon_text = $request->baloon_text;
            $place->save();
            return response()->json(['message' => 'successfully created', 'data' => $place], 201);

        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage(), 'line' => $e->getLine(), 'file' => $e->getFile()], 500);
        }
    }

    public function deletePlace(Request $request)
    {
        $user = Auth::user();
        $place = Places::where('user_id', $user->id)->where('id', $request->input('place_id'))->first();
        if (empty($place)) return response()->json(['message' => 'not found such place'], 404);
        $place->delete();
        return response()->json(['message' => 'successfully deleted'], 201);
    }

}
