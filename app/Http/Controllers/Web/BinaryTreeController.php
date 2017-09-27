<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BinaryTreeController extends Controller
{

    public function index()
    {
        $breadcrumbs[0]['name']='Binary';
//        $breadcrumbs[0]['route']='binarytree';
        /*$breadcrumbs[1]['name']='summary';
        $breadcrumbs[1]['route']='summary';*/

//        $Users = array();
//        $Users['padre']=

        return view('trees.binarytree.index')->with(['breadcrumbs'=>$breadcrumbs]);
    }

    public function show()
    {
        return view('');
    }

    /**
     * @return mixed
     */
    public function ajax()
    {
        $json = array();

        for ($i=0; $i<10;$i++){
            $json[$i]["username"]="asdrubal$i";
            $json[$i]["paquete"]="gold";
            $json[$i]["algo"]="algo";
        }

        $json = json_encode($json);
        return $json;

    }

}
