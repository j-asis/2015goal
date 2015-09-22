<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class PagesController extends BaseController
{
    public function welcome()
    {
        return view('welcome');
    }

    public function admin()
    {
        return view('admin');
    }
}
