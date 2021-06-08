<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function p1()
    {
        return redirect('https://www.educastudio.com/category/marbel-edu-games');
    }
    public function p2()
    {
        return redirect('https://www.educastudio.com/category/marbel-and-friends-kids-games');;
    }
    public function p3()
    {
        return redirect('https://www.educastudio.com/category/riri-story-books');
    }
    public function p4()
    {
        return redirect('https://www.educastudio.com/category/kolak-kids-songs');
    }
}
