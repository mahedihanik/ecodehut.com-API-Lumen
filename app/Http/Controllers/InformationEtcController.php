<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InformationEtcModel;

class InformationEtcController extends Controller
{
    function onSelectAll(){

        $result=InformationEtcModel::all();
        return $result;
    }
}
