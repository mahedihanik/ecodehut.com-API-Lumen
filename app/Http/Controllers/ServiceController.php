<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServiceTableModel;

class ServiceController extends Controller
{
    function onSelectAll(){

        $result=ServiceTableModel::all();
        return $result;
    }
}
