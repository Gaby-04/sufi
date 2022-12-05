<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    public function index(){

        return view('login');
    }

    public function store(Request $request){
        date_default_timezone_set('America/El_Salvador');
        $miJson= file_get_contents("credenciales.json");
        $linksJson = file_get_contents("links.json");
        $miArray = json_decode($miJson,TRUE);
        $milinks = json_decode($linksJson,true);
        $fecha = date('m/d/Y g:ia');
        if(($request->get('email') === $miArray["usuarios"][0]["email"])  && ($request->get('pass')== $miArray["usuarios"][0]["password"]) ){
            file_put_contents("log.txt",$miArray["usuarios"][0]["nombre"]." ".$fecha,FILE_APPEND);
            return view('contact')->with('miArray',$miArray["usuarios"][0]["rol"])->with('linkUser',$milinks['linksUser'][0])->with('linkAdmin',$milinks['linksAdmin'][0]);
        }
        elseif(($request->get('email')== $miArray["usuarios"][1]["email"])  && ($request->get('pass')== $miArray["usuarios"][1]["password"])){
            file_put_contents("log.txt",$miArray["usuarios"][1]["nombre"]." ".$fecha,FILE_APPEND);
            return view('contact')->with('miArray',$miArray["usuarios"][1])->with('linkUser',$milinks['linksUser'][0]);
        }
        elseif(($request->get('email')== $miArray["usuarios"][2]["email"])  && ($request->get('pass')== $miArray["usuarios"][2]["password"])){
            file_put_contents("log.txt",$miArray["usuarios"][2]["nombre"]." ".$fecha.FILE_APPEND);
            return view('contact')->with('miArray',$miArray["usuarios"][2])->with('linkUser',$milinks['linksUser'][0]);
        }
        else{
            return view('login');
        }


    }
}
