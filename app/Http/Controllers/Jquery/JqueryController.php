<?php

namespace App\Http\Controllers\Jquery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JqueryController extends Controller
{
    public function getoriginality1(Request $request)
    {
        $id_originality1 = $request->id_originality1;

        echo "{$id_originality1}";

    }


    public function getoriginality2(Request $request)
    {
        $id_originality2 = $request->id_originality2;

        echo "{$id_originality2}";
    }

    public function getoriginality3(Request $request)
    {
        $id_originality3 = $request->id_originality3;

        echo "{$id_originality3}";
    }

    public function getoriginality4(Request $request)
    {
        $id_originality4 = $request->id_originality4;

        echo "{$id_originality4}";
    }

    public function getoriginality5(Request $request)
    {
        $id_originality5 = $request->id_originality5;

        echo "{$id_originality5}";
    }

    public function getoriginality6(Request $request)
    {
        $id_originality6 = $request->id_originality6;

        echo "{$id_originality6}";
    }

    public function getusefulness1(Request $request)
    {
        $id_usefulness1 = $request->id_usefulness1;

        echo "{$id_usefulness1}";
    }

    public function getusefulness2(Request $request)
    {
        $id_usefulness2 = $request->id_usefulness2;

        echo "{$id_usefulness2}";
    }

    public function getusefulness3(Request $request)
    {
        $id_usefulness3 = $request->id_usefulness3;

        echo "{$id_usefulness3}";
    }

    public function getusefulness4(Request $request)
    {
        $id_usefulness4 = $request->id_usefulness4;

        echo "{$id_usefulness4}";
    }

    public function getusefulness5(Request $request)
    {
        $id_usefulness5 = $request->id_usefulness5;

        echo "{$id_usefulness5}";
    }

    public function getusefulness6(Request $request)
    {
        $id_usefulness6 = $request->id_usefulness6;

        echo "{$id_usefulness6}";
    }
}
