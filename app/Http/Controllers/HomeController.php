<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $view;
    public function __construct()
    {
        $this->middleware('auth');
        $this->view;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function home(){
        $sanPham = new SanPham();

        $this->view['listProduct'] = $sanPham->loadAllProduct();
        // dd($data);
        return view('clients.trangchu', $this->view);
    }
}
