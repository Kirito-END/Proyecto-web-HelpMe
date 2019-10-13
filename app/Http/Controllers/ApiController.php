<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $client = new Client();
      $response = $client->request('GET', 'https://api.simwood.com/v3/tools/myip');
      $statusCode = $response->getStatusCode();
      $body = json_decode($response->getBody()->getContents())->ip;

      $cliente = new Client();
      $respons = $cliente->request('GET', 'https://api.simwood.com/v3/tools/time');
      $statusCod = $respons->getStatusCode();
      $api = json_decode($respons->getBody()->getContents())->rfc;

      $clientes = new Client();
      $respon = $clientes->request('GET', 'https://api.simwood.com/v3/tools/explain');
      $statusCod= $respon->getStatusCode();
      $api2 = json_decode($respon->getBody()->getContents());


      return view('api',compact('body','api','api2'));
    }
}
