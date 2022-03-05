<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomeEtcModel;
class HomeEtcController extends Controller
{
    function onSelectVideo(){

        $result=HomeEtcModel::select('video_des','video_url')->get();
        return $result;
    }
    function onSelectProjectClientHome(){

        $result=HomeEtcModel::select('total_project','total_client')->get();
        return $result;
    }
    function onSelectTechDesHome(){

        $result=HomeEtcModel::select('tech_des')->get();
        return $result;
    }
    function onSelectHomeTopTitle(){

        $result=HomeEtcModel::select('home_title','home_subtitle')->get();
        return $result;
    }
}
