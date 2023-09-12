<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class LoginController extends BaseController
{
    public function loginTest()
    {
        
        $permissionPage = DB::select("SELECT * 
            FROM `mes_check_permission`
            WHERE `employee_id` = 'SC';");

            var_dump($permissionPage);
    }
}
