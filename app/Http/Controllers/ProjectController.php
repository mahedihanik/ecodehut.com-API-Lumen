<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProjectsTableModel;

class ProjectController extends Controller
{
    function onSelectThree(){

        $result=ProjectsTableModel::limit(3)->get();
        return $result;
    }
    function onSelectAll(){

        $result=ProjectsTableModel::all();
        return $result;
    }
    function onSelectDetails($projectID){
        $id= $projectID;
        $result=ProjectsTableModel::where(['id'=>$id])->get();
        return $result;
    }
}

