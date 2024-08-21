<?php
 
namespace App\Http\Controllers;

use Illuminate\View\View;
 
class HomeController extends Controller
{
    public function index(): View
    {
        return view('home.index');
    }

    public function about(): View
    {
        $data = [
            'title' => 'About us - Online Store',
            'subtitle' => 'About us',
            'description' => 'This is an about page ...',
            'author' => 'Developed by: Sofia Rodriguez'
        ];

        return view('home.about', $data);
    }

    public function contact(): View
    {
        $data = [
            'title' => 'Contact - Online Store',
            'subtitle' => 'Contact us',
            'email' => 'appeafit@eafit.edu.co',
            'address' => 'Cr 30B #11-04',
            'cellphone' => '3148426004'
        ];

        return view('home.contact', $data);
    }
}