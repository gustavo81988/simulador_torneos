<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Torneo as TorneoModel;
use App\Http\Requests\ListarTorneosRequest;

class TorneosController extends Controller
{
    public function listarTorneos(ListarTorneosRequest $request,TorneoModel $torneoModel)
    {
        return response()->json($torneoModel->listarTorneos($request));
    }
}
