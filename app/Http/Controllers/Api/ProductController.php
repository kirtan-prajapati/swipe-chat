<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products(){
    	$products = [
    		[ 'id'=> '124', 'name' => 'ABC', 'price' => 254, 'stock'=> 100, 'code'=>'DFDA', 'description'=> 'test'],
    		[ 'id'=> '125', 'name' => 'dfd', 'price' => 42, 'stock'=> 100, 'code'=>'DFDA', 'description'=> 'test'],
    		[ 'id'=> '126', 'name' => 'ngth', 'price' => 13, 'stock'=> 100, 'code'=>'DFDA', 'description'=> 'test'],
    		[ 'id'=> '127', 'name' => 'fg', 'price' => 8, 'stock'=> 100, 'code'=>'DFDA', 'description'=> 'test'],
    	];

    	$response = [ 'status' => 'success', 'products'=> $products];

    	return response()->json($response);
    }
}
