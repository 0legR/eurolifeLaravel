<?php

use Illuminate\Database\Seeder;
// use App\Models\Page;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('pages')->insert([
    		[
    			'name' => 'Головна',
    			'alias' => 'Home',
    			'text' => '<h2><strong>ЄВРОЛАЙФ</strong> Україна</h2>
    				<p>Із дня заснування ЄВРОЛАЙФ Україна у 2000 році, кількість клієнтів склала понад  40.000, а об’єм  нових премій – понад 126 млн. гривень. Таким чином, ЄВРОЛАЙФ Україна, з великим відривом, є найуспішнішою брокерською компанією України.

Не дивлячись на успіх, основним завданням ЄВРОЛАЙФ Україна залишається задоволеність та впевненість клієнтів. Тільки ті продукти, які відповідають потребам клієнтів та враховують їх індивідуальні побажання, забезпечують плідне та довготривале  партнерство, що у рівній мірі важливо як для наших клієнтів, так і для наших консультантів.

ЄВРОЛАЙФ Україна  - це провідний фінансовий консультант на українському ринку страхування життя. Компанія була заснована у 1999 році, у 2000 році ми розпочали свою активну діяльність на ринку України. З самого початку своєї роботи, опираючись на широкий досвід та know-how міжнародного концерну, компанії вдалося завоювати лідерські позиції серед посередників зі страхування життя, і на сьогоднішній день утримувати позицію  найбільшої компанії у даній сфері діяльності.

Слідуючи  своєму девізу «Together on the Top» – «Разом на Вершині», ЄВРОЛАЙФ Україна  будує свою діяльність на принципах довіри, партнерських взаємовідносин та командної роботи. Кожен клієнт, співробітник та партнер ЄВРОЛАЙФ Україна  користується перевагами сучасної європейської компанії, яка є номером один на ринку страхування життя в Україні.

Своїм співробітникам ЄВРОЛАЙФ Україна  пропонує першокласне навчання, перспективи кар’єрного зростання, а також можливість досягти успіху та забезпечити свою фінансову стабільність. Для консультантів компанії співробітництво з інтернаціональною командою ЄВРОЛАЙФ  стає не лише цікавою професійною діяльністю, але й стилем їх життя.

Клієнтам компанії ми пропонуємо кваліфіковані консультації та індивідуальні рішення в області страхування життя.

Партнери ЄВРОЛАЙФ Україна  –  ГРАВЕ Україна та MetLife Україна – найсильніші компанії на ринку страхуванням життя в Україні, які забезпечують максимальну надійність своїх клієнтів.

Ми щасливі, що маємо можливість брати участь в процесі стрімкого розвитку, який наразі переживає ринок страхування життя України, та пишаємось тим, що за 17 років своєї діяльності змогли серйозно з позитивного боку вплинути на зростання цього сегмента ринку в країні.</p>',
    			'images' => '/img/eurolife.jpg'
    		],
    		[
    			'name' => 'Про компанію',
    			'alias' => 'About',
    			'text' => '<h2>Наша філософія</h2>
    				<p><strong>ЄВРОЛАЙФ Україна</strong> – це не просто компанія-посередник. Будучи спеціалістами у сфері сімейного забезпечення, накопичення та забезпечення в старості, ми несемо відповідальність за Ваш добробут. Ми пропонуємо Вам прості та професійні рішення для реалізації Ваших планів з фінансового забезпечення.

- Чи вистачить моїх грошей в старості?

- Як краще захистити моїх близьких?

Це – ті запитання, які ставить собі кожен із нас. Наші досвідчені консультанти допоможуть вам знайти відповіді на них. Щоб гарантувати фінансову стабільність не тільки на даний час, але й на майбутнє, вони враховують Вашу життєву ситуацію в цілому. Головна мета нашої консалтингової діяльності полягає в тому, щоб знайти фінансові інструменти, які будуть відповідати саме Вашим індивідуальним цілям та потребам.</p>',
				'images' => 'http://www.eurolife.ua/images/Philosophy.jpg?m=1476391871'
    		]
    	]);
    }
}