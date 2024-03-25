<?php

namespace App\Http\Controllers;

use App\Http\Resources\products;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        // Haal alle producten op
        $products = Product::all();

        $formattedProducts = products::collection($products);

        return response()->json($formattedProducts);
    }

    public function show(Product $product)
    {
        return new products($product);
    }
}
