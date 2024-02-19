<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class Home extends Controller {


    public function index() {


        $data = [
            'title' => 'Admin Panel',
            'description' => 'Admin Panel Description'
        ];

        return view('admin.home', $data);


    }


    public function reviews () {

    return 'reviews';

    }





}
