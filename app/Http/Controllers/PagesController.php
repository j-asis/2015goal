<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class PagesController extends BaseController
{
    public function welcome()
    {
        return view('welcome');
    }
    public function game()
    {
        return view('game');
    }
    public function pong()
    {
        return view('pong');
    }

    public function admin()
    {
        if (env('is_live', true)) {
            return redirect()->route('welcome');
        }
        return view('admin');
    }

}
