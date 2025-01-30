<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Carbon;

class ProductsController extends Controller
{
    public function show()
    {
		$product = Product::find(1);
		echo __('Product name: ') . $product->name . PHP_EOL;
		echo __('Product price: ') . $product->price . PHP_EOL;
		echo __('Product stock: ') . $product->stock . PHP_EOL;
		$product->increaseStock(10);
		echo __('Product stock after :items items increasing: ', ['items' => 10]) . $product->stock . PHP_EOL;
		echo __('Product stock: ') . $product->stock . PHP_EOL;
        $product->decreaseStock(10);
		echo __('Product stock after :items items decreasing: ', ['items' => 10]) . $product->stock . PHP_EOL;
		echo __('Product stock: ') . $product->stock . PHP_EOL;
		$product->mutateStock(10);
		echo __('Product stock after :items items increasing: ', ['items' => 10]) . $product->stock . PHP_EOL;
		echo __('Product stock: ') . $product->stock . PHP_EOL;
        $product->mutateStock(-10);
		echo __('Product stock after :items items decreasing: ', ['items' => 10]) . $product->stock . PHP_EOL;
		echo __('Product stock: ') . $product->stock . PHP_EOL;
        // $product->stock(Carbon::now()->subDays(10));
    }
}
