<?php

use Illuminate\Database\Seeder;
// use App\Models\Portfolio;

class PortfoliosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolios')->insert([
        	[
        		'name' => 'Пенсійний опціон',
        		'images' => '/img/pension.jpg',
        		'filter' => 'pension'
        	],
        	[
        		'name' => 'Особисте страхування',
        		'images' => '/img/own.jpg',
        		'filter' => 'personal'	
        	],
        	[
        		'name' => 'Корпоративне страхування',
        		'images' => '/img/corporate.jpg',
        		'filter' => 'corporation'	
        	],
        	[
        		'name' => 'Страхування настання ризиків',
        		'images' => '/img/911.jpg',
        		'filter' => 'risk'	
        	],
        	[
				'name' => 'Страхування подорожуючих за межами України',
        		'images' => '/img/abroad.jpg',
        		'filter' => 'personal'
        	],
        	        	[
        		'name' => 'Страхування подорожуючих Україною',
        		'images' => '/img/country.jpg',
        		'filter' => 'personal'
        	],
        	[
        		'name' => 'Добровільне медичне страхування персоналу',
        		'images' => '/img/medical.jpg',
        		'filter' => 'corporation'	
        	],
        	[
        		'name' => 'Добровільне страхування від нещасних випадків',
        		'images' => '/img/accidents.jpg',
        		'filter' => 'personal'	
        	],
        	[
				'name' => 'Обов’язкове особисте страхування від нещасних випадків на транспорті',
        		'images' => '/img/accidents_car.jpg',
        		'filter' => 'personal'
        	],
        	[
        		'name' => 'Обов’язкове особисте страхування працівників відомчої та сільської пожежної охорони і членів добровільних пожежних дружин',
        		'images' => '/img/911.jpg',
        		'filter' => 'corporation'	
        	],
        	[
        		'name' => 'Майнове страхування',
        		'images' => '/img/things.jpg',
        		'filter' => 'things'	
        	],
        	[
				'name' => 'Мій дім - моя фортеця',
        		'images' => '/img/things.jpg',
        		'filter' => 'things'
        	],
        	        	[
        		'name' => 'Страхування майна юридичних осіб',
        		'images' => '/img/things.jpg',
        		'filter' => 'things'
        	],
        	[
        		'name' => 'Страхування вантажів та багажу',
        		'images' => '/img/things.jpg',
        		'filter' => 'things'	
        	],
        	[
        		'name' => 'Страхування транспортних засобів',
        		'images' => '/img/car.jpg',
        		'filter' => 'car'	
        	],
        	[
				'name' => 'АвтоКАСКО',
        		'images' => '/img/casco.jpg',
        		'filter' => 'car'
        	],
        	[
				'name' => 'Автоцивілка',
        		'images' => '/img/civil.jpg',
        		'filter' => 'car'
        	],
        	        	[
				'name' => 'Зелена карта',
        		'images' => '/img/green.jpg',
        		'filter' => 'car'
        	],
        	        	[
				'name' => 'Добровільне страхування цивільної відповідальності',
        		'images' => '/img/voluntarilly.jpg',
        		'filter' => 'car'
        	]
        ]);
    }
}
