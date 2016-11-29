<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

/**
 * Class TaskController
 * @package App\Http\Controllers
 */
class TaskController extends Controller
{
    protected $client;
    protected $urlTodosBakend="http://localhost:8081/api/v1/task";

    /**
     * TaskController constructor.
     * @param $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }


    /**
     *
     */
    public function index()
    {

        $tasks = \GuzzleHttp\json_decode($this->client->request('GET',$this->urlTodosBakend)->getBody())->data;
//        dd($tasks);

        return view('tasks')->with('tasks', $tasks);


    }
}
