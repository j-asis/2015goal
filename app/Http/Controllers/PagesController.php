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
        if (!Auth::check()) {
            return redirect(route('welcome'));
        }
        return view('admin');
    }
    
}
