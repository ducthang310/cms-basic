<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class DashboardController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function index()
    {
        return view('admin.dashboard', []);
    }


    public function forms()
    {
        return view('admin.forms', []);
    }


    public function tabs()
    {
        return view('admin.tabs', []);
    }


    public function tables()
    {
        return view('admin.tables', []);
    }


    public function collection()
    {
        return view('admin.collection', []);
    }


    public function cards()
    {
        return view('admin.cards', []);
    }


    public function sliders()
    {
        return view('admin.sliders', []);
    }


    public function images()
    {
        return view('admin.images', []);
    }
}
