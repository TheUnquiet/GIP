<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Tiger bread',        'description' => '800g',        'image_url' => 'https://www.aldi.nl/content/dam/aldi/netherlands/aldi_merken/0007315-Tijgerbrood-Wit-1_WC_sRGB.png',        'category_id' => 5,        'price' => 1.98,],
            ['name' => 'Whole wheat Bread',        'description' => '800g',        'image_url' => 'https://www.aldi.nl/content/dam/aldi/netherlands/aldi_merken/0007307-02.png/jcr:content/renditions/opt.900w.png.res/1659092230888/opt.900w.png',        'category_id' => 5,        'price' => 1.60,],
            ['name' => 'Multigrain Bread',        'description' => '800g',        'image_url' => 'https://www.aldi.nl/content/dam/aldi/netherlands/aldi_merken/0001845_01.png/jcr:content/renditions/opt.900w.png.res/1637743094534/opt.900w.png',        'category_id' => 5,        'price' => 1.68,],
            ['name' => 'Farmers Bread',        'description' => '800g',        'image_url' => 'https://www.aldi.nl/content/dam/aldi/netherlands/aldi_merken/2006180_Tijger_Brood_Bruin_Los_WC_sRGB.png/jcr:content/renditions/opt.900w.png.res/1637240651002/opt.900w.png',        'category_id' => 5,        'price' => 1.68,],
            ['name' => 'Swedish brown Bread',        'description' => '800g',        'image_url' => 'https://www.aldi.nl/content/dam/aldi/netherlands/aldi_merken/0007285-02.png/jcr:content/renditions/opt.900w.png.res/1643047949647/opt.900w.png',        'category_id' => 5,        'price' => 2.50,],
            ['name' => 'Hamburger Buns',        'description' => '300g 4pc',        'image_url' => 'https://cdn.carrefour.eu/1200_01074791_3029330069355_01.jpeg',        'category_id' => 5,        'price' => 1.15,],
            ['name' => 'Milk Buns',        'description' => '350g 10pc',        'image_url' => 'https://static.ah.nl/dam/product/AHI_43545239383834353732?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',        'category_id' => 5,        'price' => 2.33,],
            ['name' => 'Baguette',        'description' => '75g 1pc',        'image_url' => 'https://www.aldi.nl/content/dam/aldi/netherlands/aldi_merken/0000752-Bo-Dv-Stokbrood-1-Stuk_WC_sRGB.png/jcr:content/renditions/opt.900w.png.res/1617890583017/opt.900w.png',        'category_id' => 5,        'price' => 0.99,],
            ['name' => 'Chocolate Rolls',        'description' => '85g',        'image_url' => 'https://www.aldi.nl/content/dam/aldi/netherlands/aldi_merken/0004355-Bo-Dv-Chocoladebroodje-1-Stuk_WC_sRGB.png/jcr:content/renditions/opt.900w.png.res/1617890397084/opt.900w.png',        'category_id' => 5,        'price' => 0.59,],
            ['name' => 'Croissant',             'description' => '85g',         'image_url' => 'https://www.aldi.nl/content/dam/aldi/netherlands/aldi_merken/0002462-Bo-Dv-Croissant-Naturel-1-Stuk_WC_sRGB.png/jcr:content/renditions/opt.900w.png.res/1617890529714/opt.900w.png',        'category_id' => 5,         'price' => 0.40],
            ['name' => 'Sugar coated Donut',    'description' => '64g',       'image_url' => 'https://www.aldi.nl/content/dam/aldi/netherlands/aldi_merken/0003674_Donut_01_VIC.png/jcr:content/renditions/opt.900w.png.res/1600092003499/opt.900w.png',      'category_id' => 5,      'price' => 0.49],
            ['name' => 'Sausage Rolls',        'description' => '60g',        'image_url' => 'https://www.aldi.nl/content/dam/aldi/netherlands/offers/weekactie/2022/wk12/0004064_Bo_Dv_Frikandelbroodje_1_Stuks_WC_VIC.png/jcr:content/renditions/opt.900w.png.res/1646908247074/opt.900w.png',        'category_id' => 5,        'price' => 0.99,],
            ['name' => 'Cinnamon Swirl',        'description' => '85g',         'image_url' => 'https://www.aldi.nl/content/dam/aldi/netherlands/aldi_merken/5559_01.png/jcr:content/renditions/opt.900w.png.res/1558361643649/opt.900w.png',       'category_id' => 5, 'price' => 0.70],
            ['name' => 'Spinach feta Borek',    'description' => '70g',         'image_url' => 'https://www.aldi.nl/content/dam/aldi/netherlands/offers/weekactie/2021/wk36/0003589-Borek-spinazie-feta-1x_WC_VIC_.png/jcr:content/renditions/opt.900w.png.res/1629977680231/opt.900w.png', 'category_id' => 5, 'price' => 0.88],
            ['name' => 'Pita Bread White',        'description' => '500g, 10x',        'image_url' => 'https://www.aldi.us/fileadmin/_processed_/f/b/csm_48001-LF-pita-bread-white-detail_8fd1c8156f.jpg',        'category_id' => 5,        'price' => 0.88,],
            ['name' => 'POCO LOCO Wraps',        'description' => '370g, 6x',        'image_url' => 'https://www.pocoloco.be/wp-content/uploads/2016/08/Folie-6-Tortilla-Wraps-natuur-370g-25cm-Packshot-RGB@2-1.png',        'category_id' => 5,        'price' => 2.25,],
            ['name' => 'POCO LOCO Whole Grain',        'description' => '370g, 6x',        'image_url' => 'https://www.pocoloco.be/wp-content/uploads/2016/08/4-Bakery-Wraps-Whole-wheat-Packshot-RGB@2.png',        'category_id' => 5,        'price' => 2.56,],
            ['name' => 'POCO LOCO Carrots',        'description' => '370g, 6x',        'image_url' => 'https://images.collectandgo.be/images/step/JPG/JPG/500x500/std.lang.all/13/80/asset-2821380.jpg',        'category_id' => 5,        'price' => 3.25,],
            ['name' => 'POCO LOCO Beetroot',        'description' => '370g, 6x',        'image_url' => 'https://images.collectandgo.be/images/step/JPG/JPG/500x500/std.lang.all/88/32/asset-2458832.jpg',        'category_id' => 5,        'price' => 3.25,],
            ['name' => 'POCO LOCO Chia wraps',        'description' => '370g, 6x',        'image_url' => 'https://static.colruytgroup.com/images/500x500/std.lang.all/84/53/asset-1758453.jpg',        'category_id' => 5,        'price' => 3.25,]
        ];

        DB::table('products')->insert($data);
    }
}
 