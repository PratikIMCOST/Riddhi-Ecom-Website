<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    // Method for home page (index)
    public function index()
    {
        return view('frontend.index'); // assuming the home page view is 'frontend.home'
    }

    // Other methods as previously defined
    public function shop()
    {
        return view('frontend.shop');
    }

    public function collection()
    {
        return view('frontend.collection');
    }

    public function magazine()
    {
        return view('frontend.magazine');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function faq()
    {
        return view('frontend.faq');
    }

    public function wishlist()
    {
        return view('frontend.wishlist');
    }

    public function account()
    {
        return view('frontend.account');
    }

    public function cart()
    {
        return view('frontend.cart');
    }

    public function checkout()
    {
        return view('frontend.checkout');
    }

    public function singleProduct()
    {
        return view('frontend.single-product');
    }

    public function singleBlog()
    {
        return view('frontend.single-blog');
    }
}
