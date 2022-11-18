<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Torneo as TorneoModel;

class TorneosController extends Controller
{
    public function listarTorneos(Request $request,TorneoModel $torneoModel)
    {
        return response()->json($torneoModel->listarTorneos($request));
    }
}
