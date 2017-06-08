<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/6/8
 * Time: 16:16
 */

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;

class VerifyController extends BaseController
{
    public function verify($username, $password)
    {
        $credentials = [
            'email' => $username,
            'password' => $password
        ];

        if (Auth::once($credentials)) {
            return Auth::user()->id;
        }

        return false;
    }
}