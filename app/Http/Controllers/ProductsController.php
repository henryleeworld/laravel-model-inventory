<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Carbon\Carbon;

class ProductsController extends Controller
{
    public function show()
    {
		$product = Product::find(1);
		echo '商品名稱：' . $product->name . PHP_EOL;
		echo '商品價格：' . $product->price . PHP_EOL;
		echo '商品庫存：' . $product->stock . PHP_EOL;
		$product->increaseStock(10);
		echo '商品庫存 +10 後：' . $product->stock . PHP_EOL;
		echo '商品庫存：' . $product->stock . PHP_EOL;
        $product->decreaseStock(10);
		echo '商品庫存 -10 後：' . $product->stock . PHP_EOL;
		echo '商品庫存：' . $product->stock . PHP_EOL;
		$product->mutateStock(10);
		echo '商品庫存 +10 後：' . $product->stock . PHP_EOL;
		echo '商品庫存：' . $product->stock . PHP_EOL;
        $product->mutateStock(-10);
		echo '商品庫存 -10 後：' . $product->stock . PHP_EOL;
		echo '商品庫存：' . $product->stock . PHP_EOL;
        // $product->stock(Carbon::now()->subDays(10));
    }
}
