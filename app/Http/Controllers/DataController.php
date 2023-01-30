<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function postrequest()
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('post','http://localhost:8001/api/store',[
            'form_params'  =>[
                'name' =>'ali',
            ]
            ]);

            $response = $response->getBody()->getContents();
            echo '<pre>';
            print_r($response);
    }
    public function getrequest(Request $request)
    {
        $client = new \GuzzleHttp\Client();
        $request = $client->get('http://localhost:8001/api/index');
        $response = $request->getBody()->getContents();
        echo '<pre>';
        print_r($response);
        exit;
    }
}
