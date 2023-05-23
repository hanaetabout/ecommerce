<?php
  
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\View\View;
USE App\Models\Product;
  
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(): View
    {
        return view('home');
    } 
    public function welcome(): View
    {
        $products=Product::all();
        return view('welcome', compact('products'));
    } 

    // public function welcome(): View
    // {
        
    //     return view('welcome');
    // } 
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome(): View
    {
        return view('adminHome');
    }
  
    // /**
    //  * Show the application dashboard.
    // //  *
    // //  * @return \Illuminate\Contracts\Support\Renderable
    // //  */
    // // public function managerHome(): View
    // // {
    // //     return view('managerHome');
    // // }
}