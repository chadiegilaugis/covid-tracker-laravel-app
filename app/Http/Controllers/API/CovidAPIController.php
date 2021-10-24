<?php

namespace App\Http\Controllers\API;


use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;


use App\Models\CovidAPI;
use Illuminate\Support\Facades\DB;

class CovidAPIController extends BaseController
{

    /**
     * @return JsonResponse
     */

    public function index(){

        $covid_api = DB::table('covid_apis')->get();

        return response()->json(['covid_api'=>$covid_api],200);
    }
}
