<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    //
    public function index($id=0)
    {
        
        # lister tous les produits
        if ($id!= 0) {
            # code...
            //on fait une requete sql qui selection les produits par 
            //categorie en ordre decroissant 
            $products = Product ::where('category_id',$id)
        ->orderBy('created_at','desc')
        ->paginate(6);
        }else {
            # code...
            $products = Product ::orderBy('created_at','desc')
        ->paginate(6);
        }
        ;
        return view('welcome',compact('products'));
    }

    public function detail(Product $product)
    {
        # code...
        return view ('detail',compact('product'));

    }
}
