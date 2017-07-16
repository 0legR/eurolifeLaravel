<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Page;
use App\Models\People;
use App\Models\Portfolio;
use App\Models\Service;

class IndexController extends Controller
{
    public function execute(Request $request) {

    	$pages = Page::get(array('name', 'alias', 'text', 'images'));
    	$people = People::get(array('name', 'position', 'images', 'text'));
    	$portfolios = Portfolio::get(array('name', 'images', 'filter'));
    	$services = Service::get(array('name', 'text', 'icon'));

    	return view('public.index');
    }
}
