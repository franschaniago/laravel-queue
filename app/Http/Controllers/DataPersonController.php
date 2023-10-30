<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\DataPersonJob;
use Faker\Factory;
use App\Models\DataPerson;

class DataPersonController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $starttime = microtime(true);

        DataPersonJob::dispatch();

        $endtime = microtime(true);
        $timediff = $endtime - $starttime;

        return sprintf('%0.2f',$timediff);

    }
}
