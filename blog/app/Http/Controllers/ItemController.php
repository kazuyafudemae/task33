<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ItemController extends Controller
{
	public function index(Request $request) {
		if (isset($request->id)) {
			$param = ['id' => $request->id];
			$items = DB::select('select * from items where id = :id', $param);
			return view('item.index', ['items' => $items]);
		} else {
			$items = DB::select('select * from items');
			return view('item.index', ['items' => $items]);
		}
	}
}
