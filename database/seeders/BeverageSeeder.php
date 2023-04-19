<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BeverageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // - All drinks -
        //  - Water -

        // Spa
        $data = [
            ['name' => 'Spa Reine',        'description' => '1.5L Still Water',        'image_url' => 'https://pizzataliano.be/wp-content/uploads/2019/03/spa_reine1000x1000.png',        'category_id' => 12,        'price' => 0.88,],
            ['name' => 'Spa Reine',        'description' => '1.5L 6pc Still Water',        'image_url' => 'https://www.calipage.be/static/images/high-res/51865_2.jpg',        'category_id' => 12,        'price' => 4.55,],
            ['name' => 'Spa Reine',        'description' => '1L Still Water',        'image_url' => 'https://productimages.thequestionmark.org/images/medium/0cd2ef1689e5ba193f5939f32aef2247.jpg',        'category_id' => 12,        'price' => 0.68,],
            ['name' => 'Spa Reine',        'description' => '1L 6pc Still Water',        'image_url' => 'https://cdn.carrefour.eu/1200_04315698_5410013101710_01.jpeg',        'category_id' => 12,        'price' => 4.25,],
            ['name' => 'Spa Reine',        'description' => '750ml Still Water',        'image_url' => 'https://drinkspaal.be/uploads/products/05353.jpg',        'category_id' => 12,        'price' => 1.15,],
            ['name' => 'Spa Reine',        'description' => '750ml 6pc Still Water',        'image_url' => 'https://cdn.carrefour.eu/1200_04315525_5410013117056_02.jpeg',        'category_id' => 12,        'price' => 6.75,],
            ['name' => 'Spa Reine',        'description' => '500ml Still Water',        'image_url' => 'https://www.rob-brussels.be/media/catalog/product/cache/4674fdbecbe8e81d26c2d902fe2fbc48/b/e/b-ea-plpet-1040-b-ea-plpet-1040-image_1-090419_3885.jpg',        'category_id' => 12,        'price' => 0.55,],
            ['name' => 'Spa Reine',        'description' => '50cl 24pc Still Water',        'image_url' => 'https://www.calipage.be/static/images/high-res/51794_2.jpg',        'category_id' => 12,        'price' => 4.49,],
            ['name' => 'Spa Reine',        'description' => '33cl Still Water',        'image_url' => 'https://static.hanos.com/sys-master/productimages/h43/h40/9638927761438/02130054_los.jpg_914Wx914H',        'category_id' => 12,        'price' => 0.33,],
            ['name' => 'Spa Reine',        'description' => '33cl 12pc Still Water',        'image_url' => 'https://www.calipage.be/static/images/high-res/549_2.jpg',        'category_id' => 12,        'price' => 6.33,],
            ['name' => 'Spa Reine',        'description' => '1L Sparkling',        'image_url' => 'https://assets.lyreco.com/is/image/lyrecows/2018-4236012?$300px$&fmt=jpg&locale=BE_nl',        'category_id' => 12,        'price' => 1.02,],
            ['name' => 'Spa Reine',        'description' => '1L 6pc Sparkling',        'image_url' => 'https://cdn.carrefour.eu/1200_04358778_5410013111719_00.jpeg',        'category_id' => 12,        'price' => 6.40,],
            ['name' => 'Spa Reine',        'description' => '500ml Sparkling',        'image_url' => 'https://prod.isg.bruneau.media/external/f8e078c5b13339ce0b88271c97b10e274811c2cb?source=https%3A%2F%2Fbruneau.simpleworkspace.net%2Fphp%2Fscripts%2FgetFile.php%3Ftype%3DpubAssetBase%26s%26key%3DMxFg9jNekrAADf4yBQ2vFwH8zQlar__PGl3_nR2yPtdA55kEqhA%26t%3D16490881110000%26name%3D35315.jpg&dpi=2.00&format=webp&height=477&quality=85&width=477',        'category_id' => 12,        'price' => 0.55,],
            ['name' => 'Spa Reine',        'description' => '500ml 6pc Sparkling',        'image_url' => 'https://www.prikentik.be/media/catalog/product/cache/23d9da881b836928ceaa9fe24f71827f/s/p/spa-intense-clip-6-x-50cl.jpg',        'category_id' => 12,        'price' => 4.23,],
            ['name' => 'Spa Reine',        'description' => '1L Still water Glass bottle',        'image_url' => 'https://www.rob-brussels.be/media/catalog/product/cache/4674fdbecbe8e81d26c2d902fe2fbc48/b/e/b-ea-plcon-1015-b-ea-plcon-1015-image_1-230217_2412.jpg',        'category_id' => 12,        'price' => 0.98,],
            ['name' => 'Spa Reine',        'description' => '1L Sparkling Glass bottle',        'image_url' => 'https://cdn.carrefour.eu/1200_01298079_5410013111009_00.jpeg',        'category_id' => 12,        'price' => 0.98,]
        ];

        // Evian
        DB::table('products')->insert([
            'name' => 'Evian',
            'description' => '1.5L Still water',
            'image_url' => 'https://selvastoreuk.com/wp-content/uploads/2020/12/3068320084602.jpg',
            'category_id' => 12,
            'price' => 0.95,
        ]);

        DB::table('products')->insert([
            'name' => 'Evian',
            'description' => '1.5L Still water 6pc',
            'image_url' => 'https://cdn.shopify.com/s/files/1/0360/6353/products/Evian_1.5L.jpeg?crop=center&height=1024&v=1523636306&width=1024',
            'category_id' => 12,
            'price' => 6.55,
        ]);

        DB::table('products')->insert([
            'name' => 'Evian',
            'description' => '1L Still water',
            'image_url' => 'https://eshop.bigbagdelivery.com/img/p/2/1/6/2/2162-large_default.jpg',
            'category_id' => 12,
            'price' => 0.93,
        ]);

        DB::table('products')->insert([
            'name' => 'Evian',
            'description' => '1L Still water 6pc',
            'image_url' => 'https://static.delhaize.be/medias/sys_master/h0c/hf2/11723025743902.jpg',
            'category_id' => 12,
            'price' => 5.44,
        ]);

        DB::table('products')->insert([
            'name' => 'Evian',
            'description' => '6L Still water',
            'image_url' => 'https://www.evian.com/fileadmin/user_upload/fr/slider-6L-V2.png',
            'category_id' => 12,
            'price' => 3.19,
        ]);

        DB::table('products')->insert([
            'name' => 'Evian',
            'description' => '500ml Still water',
            'image_url' => 'https://www.evian.com/fileadmin/user_upload/be/Product_Shots/evian_be-nl_prestigegamma-50cl.png',
            'category_id' => 12,
            'price' => 0.64,
        ]);

        DB::table('products')->insert([
            'name' => 'Evian',
            'description' => '500ml Still water 6pc',
            'image_url' => 'https://cdn.carrefour.eu/1200_06438860_3068320124544_00.jpeg',
            'category_id' => 12,
            'price' => 4.34,
        ]);

        DB::table('products')->insert([
            'name' => 'Evian',
            'description' => '1L Still water Glass Bottle',
            'image_url' => 'https://dentips.be/uploads/products/00215.jpg',
            'category_id' => 12,
            'price' => 1.40,
        ]);

        // Chaudfontaine
        DB::table('products')->insert([
            'name' => 'Chaudfontaine',
            'description' => '1.5L Still water',
            'image_url' => 'https://drankenhandel.blob.core.windows.net/thumbs/0021186_Chaudfontaine-Plat-1-5L-Pet_510.png',
            'category_id' => 12,
            'price' => 1.33,
        ]);

        DB::table('products')->insert([
            'name' => 'Chaudfontaine',
            'description' => '1.5L Still water 6pc',
            'image_url' => 'https://static.ah.nl/dam/product/AHI_43545239393038343739?revLabel=2&rendition=800x800_JPG_Q90&fileType=binary',
            'category_id' => 12,
            'price' => 5.22,
        ]);

        DB::table('products')->insert([
            'name' => 'Chaudfontaine',
            'description' => '1L Still water',
            'image_url' => 'https://drinksdiest.be/uploads/products/09451.jpg',
            'category_id' => 12,
            'price' => 0.96,
        ]);

        DB::table('products')->insert([
            'name' => 'Chaudfontaine',
            'description' => '1L Still water 6pc',
            'image_url' => 'https://cdn.carrefour.eu/1200_04996128_5449000002730_00.jpeg',
            'category_id' => 12,
            'price' => 5.00,
        ]);

        DB::table('products')->insert([
            'name' => 'Chaudfontaine',
            'description' => '1.5L Sparkling',
            'image_url' => 'https://www.kantinewinkel.nl/media/catalog/product/cache/3/image/9df78eab33525d08d6e5fb8d27136e95/c/h/chaudfontaine_sparkling_15l_pet.png',
            'category_id' => 12,
            'price' => 0,
        ]);

        DB::table('products')->insert([
            'name' => 'Chaudfontaine',
            'description' => '1.5L Sparkling 6pc',
            'image_url' => 'https://cdn.carrefour.eu/1200_01017510_5449000111722_01.jpeg',
            'category_id' => 12,
            'price' => 8.09,
        ]);

        // GLass Bottle
        DB::table('products')->insert([
            'name' => 'Chaudfontaine',
            'description' => '1L Sparkling Glass bottle',
            'image_url' => 'https://www.prikentik.be/media/catalog/product/c/h/chaudfontaine_sparkling_ref._glass_1.00l_ecom_2d_front_preview.jpg',
            'category_id' => 12,
            'price' => 0.99,
        ]);

        DB::table('products')->insert([
            'name' => 'Chaudfontaine',
            'description' => '1L Still water Glass Bottle',
            'image_url' => 'https://www.prikentik.be/media/catalog/product/cache/23d9da881b836928ceaa9fe24f71827f/c/h/chaudfontaine_still_ref._glass_1.00l_ecom_2d_front_preview.jpg',
            'category_id' => 12,
            'price' => 0.99,
        ]);

        // Soda's
        DB::table('products')->insert([
            'name' => 'Sprite',
            'description' => '1.5L',
            'image_url' => 'https://night-shop.be/30-home_default/sprite-15l.jpg',
            'category_id' => 13,
            'price' => 2.40,
        ]);

        DB::table('products')->insert([
            'name' => 'Sprite',
            'description' => '1.5L',
            'image_url' => 'https://cdn.carrefour.eu/1200_01198535_5449000019660_00.jpeg',
            'category_id' => 13,
            'price' => 9.99,
        ]);

        DB::table('products')->insert([
            'name' => 'Sprite',
            'description' => '500ml',
            'image_url' => 'https://cdn.shopify.com/s/files/1/0084/8494/5999/products/CD-500SPRITE24_1024x.png?v=1637338624',
            'category_id' => 13,
            'price' => 1.45,
        ]);

        DB::table('products')->insert([
            'name' => 'Sprite',
            'description' => '500ml 6pc',
            'image_url' => 'https://cdn.shopify.com/s/files/1/0084/8494/5999/products/CD-500SPRITE24_1024x.png?v=1637338624',
            'category_id' => 13,
            'price' => 8.66,
        ]);

        DB::table('products')->insert([
            'name' => 'Sprite',
            'description' => '330ml',
            'image_url' => 'https://c-pi.niceshops.com/upload/image/product/large/default/49889_a1ff27f9.512x512.jpg',
            'category_id' => 13,
            'price' => 0.83,
        ]);

        DB::table('products')->insert([
            'name' => 'Sprite',
            'description' => '330ml 6pc',
            'image_url' => '',
            'category_id' => 13,
            'price' => 5.44,
        ]);
    }
}
