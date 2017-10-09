<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BinaryTreeController extends Controller
{

    /**
     * RETURN THE VIEW OF BINARYTREE WHIT YOUR DATA
     * @return $this
     */
    public function index()
    {
        $breadcrumbs[0]['name']='Binary';

        return view('trees.binary.index')->with(['breadcrumbs'=>$breadcrumbs]);
    }

    /**
     * THIS METHOD RESPONSE A AJAX AND RETURN THE ARRAY OF USER IN A BINARYTREE
     * @return mixed
     */
    public function ajax()
    {
        $json = array();

        for ($i=0; $i<1;$i++){
            $json[$i]["username"]="asdrubal$i";
            $json[$i]["paquete"]="gold";
            $json[$i]["algo"]="algo";
        }

        $json = json_encode($json);
        return $json;

    }

}
