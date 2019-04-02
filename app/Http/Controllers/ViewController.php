<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Shop;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    public function welcome()
    {
      return view('welcome');
    }

    public function about()
    {
      return view('about');
    }

    public function contact()
    {
      return view('contact');
    }

    public function shops_categories(Request $request)
    {
      if(isset($_GET['search_category']))
      {
        $shop = Shop::select('select * from shops where category = :category',['category'=> $request->category]);

        return view('shops_categories', ['shop' => $shop]);
      }
      else
      {
        return view('shops_categories');
      }
    }

    public function shops_floor(Request $request)
    {
      if(isset($_GET['search']))
      {
        if($request->zone == "all")
        {
          $shop = Shop::select('select * from shops where floor = :floor',['floor'=> $request->floor]);
        }
        else
        {
          $shop = Shop::select('select * from shops where floor = :floor and zone = :zone',['floor'=> $request->floor, 'zone' => $request->zone]);
        }

        return view('shops_floor', ['shop' => $shop]);
      }
      else {
        return view('shops_floor');
      }
    }

    public function shops_name(Request $request)
    {
      if(isset($_GET['search']))
      {
        $shop = Shop::select("select * from shops where name like '$:name'",['name' => $request->name]);

        return view('shops_name', ['shop' => $shop]);
      }
      else {
        return view('shops_name');
      }
    }
}
