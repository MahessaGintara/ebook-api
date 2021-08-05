<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'NIS' => 3103119104,
            'Name' => 'Mahessa Gintara Dwi Rosliyadi',
            'Gender' => 'Male',
            'Phone' => '082138906519',
            'Class' => 'XII RPL 3'
        ];
    }
}
