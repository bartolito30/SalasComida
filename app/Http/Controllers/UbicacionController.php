<?php

namespace App\Http\Controllers;

use App\Models\Ubicacion;
use Illuminate\Http\Request;

class UbicacionController extends Controller
{
    public function listLocations() {
        $ubicaciones = Ubicacion::all();
        echo $ubicaciones;
    }
}
