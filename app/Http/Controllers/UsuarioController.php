<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class UsuarioController extends Controller
{
    public function listarUsuarios(Request $request){
        return response()->json($torneoModel->listarTorneos($request));
    }
}
