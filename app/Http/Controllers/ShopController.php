<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Shop; //add this line

class ShopController extends Controller
{
   public function create()
   {
     $shop = new Shop();

     return view('shops.create', [
      'shop' => $shop,
      ]);
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param \Illuminate\Http\Request $request
    *
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
      $shop = new Shop;
      $shop->fill($request->all());
      $shop->save();

      return redirect()->route('shop.index');
    }

    public function index()
    {
      $shops = Shop::orderBy('id', 'asc')->get();

      return view('shops.index', [
        'shops' => $shops
      ]);
     }

     public function show($id)
      {
          $shop = Shop::find($id);
          if(!$shop) throw new ModelNotFoundException;

           return view('shops.show', [
           'shop' => $shop
           ]);
       }

       public function edit($id)
       {
         $shop = Shop::find($id);
         if(!$shop) throw new ModelNotFoundException;

         return view('shops.edit', [
           'shop' => $shop
         ]);
        }

        public function update(Request $request, $id)
        {
          $shop = Shop::find($id);
          if(!$shop) throw new ModelNotFoundException;

          $shop->fill($request->all());
          $shop->save();

          return redirect()->route('shop.index');
        }

        public function destroy($id)
        {
          $division = Shop::find($id);
          $division->delete();
          return redirect()->route('shop.index');
        }
}
