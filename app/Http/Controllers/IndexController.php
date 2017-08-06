<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Page;
use App\Models\People;
use App\Models\Portfolio;
use App\Models\Service;

class IndexController extends Controller
{
	const SERVICE = "Продукти MetLife";
	const PORTFOLIO = "Продукти Grawe";
	const CLIENT = "Клієнти";
	const TEAM = "Команда";
	const CONTACT = "Зворотній зв'язок";

    public function execute(Request $request) {

    	$pages = Page::get(array('name', 'alias', 'text', 'images'));
    	$people = People::get(array('name', 'position', 'images', 'text'));
    	$portfolios = Portfolio::get(array('name', 'images', 'filter'));
    	$services = Service::get(array('name', 'text', 'icon'));
    	$menu = [
    		'Services' => self::SERVICE,
    		'Portfolios' => self::PORTFOLIO,
    		'Clients' => self::CLIENT,
    		'Team' => self::TEAM,
    		'Contacts' => self::CONTACT
    	];
    
    	return view('public.index', ['pages' => $pages, 'menu' => $menu]);
    }
}
