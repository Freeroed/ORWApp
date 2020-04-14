<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        	'name' => 'author exe 24',
        	'descriprion'=>'The best bike for different riders',
        	'photo' => 'https://avatars.mds.yandex.net/get-mpic/1669769/img_id923612094569862606.jpeg/9hq',
        	'price' => 49900.00
        ]);
        DB::table('products')->insert([
        	'name' => 'gt la bomba',
        	'descriprion'=>'Bike by large prouzvoditel',
        	'photo' => 'https://trial-sport.ru/images/catalog/g19_g23159m_26_m_labomba_pur_os_1427572.jpg',
        	'price' => 56900.00
        ]);
    	DB::table('products')->insert([
        	'name' => 'DA bomb',
        	'descriprion'=>'BIKE FOR VERY rich riders',
        	'photo' => 'https://sc01.alicdn.com/kf/UTB8vq7gz8ahduJk43Jaq6zM8FXaW/231470969/UTB8vq7gz8ahduJk43Jaq6zM8FXaW.jpg',
        	'price' => 496900.00
        ]);
    	DB::table('products')->insert([
        	'name' => 'Cannandail',
        	'descriprion'=>'Goot fatbike',
        	'photo' => 'https://trial-sport.ru/images/catalog/c17_c28507m_trq_1256284_1256562.jpg',
        	'price' => 116900.00
        ]);
    	DB::table('products')->insert(['name' => 'STELS',
        	'descriprion'=>'BOMBA PUSHKA',
        	'photo' => 'https://velogo.ru/upload/iblock/823/823feee00e435e8139b9a4d8bf5c1010.jpg',
        	'price' => 9900.00
        ]);
        DB::table('products')->insert(['name' => 'CUBE',
        	'descriprion'=>'NE dorogoi BIKE with electric driver',
        	'photo' => 'https://static.evanscycles.com/production/electric-bikes/electric-mountain-bikes/product-image/Original/cube-reaction-hybrid-ex-625-2020-electric-mountain-bike-black-EV369868-8500-1.jpg',
        	'price' => 160900.00
        ]
    	);
    }
}
