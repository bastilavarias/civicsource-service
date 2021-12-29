<?php

namespace App\Http\Controllers;

use App\Models\Property;

class PropertyController extends Controller
{
    public function show($id)
    {
        $property = Property::with('bid')->find($id);

        if ($property) {
            return customResponse()
                ->data($property)
                ->message('Property found.')
                ->success()
                ->generate();
        }

        return customResponse()
            ->data(null)
            ->message('Property not found.')
            ->success()
            ->generate();
    }
}
