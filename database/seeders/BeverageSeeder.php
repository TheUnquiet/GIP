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
        $water = [
            // Spa
            ['name' => 'Spa Reine', 'description' => '1.5L Still Water', 'image_url' => 'https://pizzataliano.be/wp-content/uploads/2019/03/spa_reine1000x1000.png', 'category_id' => 12, 'price' => 0.88],
            ['name' => 'Spa Reine', 'description' => '1.5L 6pc Still Water', 'image_url' => 'https://www.calipage.be/static/images/high-res/51865_2.jpg', 'category_id' => 12, 'price' => 4.55],
            ['name' => 'Spa Reine', 'description' => '1L Still Water', 'image_url' => 'https://productimages.thequestionmark.org/images/medium/0cd2ef1689e5ba193f5939f32aef2247.jpg', 'category_id' => 12, 'price' => 0.68],
            ['name' => 'Spa Reine', 'description' => '1L 6pc Still Water', 'image_url' => 'https://cdn.carrefour.eu/1200_04315698_5410013101710_01.jpeg', 'category_id' => 12, 'price' => 4.25],
            ['name' => 'Spa Reine', 'description' => '750ml Still Water', 'image_url' => 'https://drinkspaal.be/uploads/products/05353.jpg', 'category_id' => 12, 'price' => 1.15],
            ['name' => 'Spa Reine', 'description' => '750ml 6pc Still Water', 'image_url' => 'https://cdn.carrefour.eu/1200_04315525_5410013117056_02.jpeg', 'category_id' => 12, 'price' => 6.75],
            ['name' => 'Spa Reine', 'description' => '500ml Still Water', 'image_url' => 'https://www.rob-brussels.be/media/catalog/product/cache/4674fdbecbe8e81d26c2d902fe2fbc48/b/e/b-ea-plpet-1040-b-ea-plpet-1040-image_1-090419_3885.jpg', 'category_id' => 12, 'price' => 0.55],
            ['name' => 'Spa Reine', 'description' => '50cl 24pc Still Water', 'image_url' => 'https://www.calipage.be/static/images/high-res/51794_2.jpg', 'category_id' => 12, 'price' => 4.49],
            ['name' => 'Spa Reine', 'description' => '33cl Still Water', 'image_url' => 'https://static.hanos.com/sys-master/productimages/h43/h40/9638927761438/02130054_los.jpg_914Wx914H', 'category_id' => 12, 'price' => 0.33],
            ['name' => 'Spa Reine', 'description' => '33cl 12pc Still Water', 'image_url' => 'https://www.calipage.be/static/images/high-res/549_2.jpg', 'category_id' => 12, 'price' => 6.33],
            ['name' => 'Spa Reine', 'description' => '1L Sparkling', 'image_url' => 'https://assets.lyreco.com/is/image/lyrecows/2018-4236012?$300px$&fmt=jpg&locale=BE_nl', 'category_id' => 12, 'price' => 1.02],
            ['name' => 'Spa Reine', 'description' => '1L 6pc Sparkling', 'image_url' => 'https://cdn.carrefour.eu/1200_04358778_5410013111719_00.jpeg', 'category_id' => 12, 'price' => 6.4],
            ['name' => 'Spa Reine', 'description' => '500ml Sparkling', 'image_url' => 'https://prod.isg.bruneau.media/external/f8e078c5b13339ce0b88271c97b10e274811c2cb?source=https%3A%2F%2Fbruneau.simpleworkspace.net%2Fphp%2Fscripts%2FgetFile.php%3Ftype%3DpubAssetBase%26s%26key%3DMxFg9jNekrAADf4yBQ2vFwH8zQlar__PGl3_nR2yPtdA55kEqhA%26t%3D16490881110000%26name%3D35315.jpg&dpi=2.00&format=webp&height=477&quality=85&width=477', 'category_id' => 12, 'price' => 0.55],
            ['name' => 'Spa Reine', 'description' => '500ml 6pc Sparkling', 'image_url' => 'https://www.prikentik.be/media/catalog/product/cache/23d9da881b836928ceaa9fe24f71827f/s/p/spa-intense-clip-6-x-50cl.jpg', 'category_id' => 12, 'price' => 4.23],
            ['name' => 'Spa Reine', 'description' => '1L Still water Glass bottle', 'image_url' => 'https://www.rob-brussels.be/media/catalog/product/cache/4674fdbecbe8e81d26c2d902fe2fbc48/b/e/b-ea-plcon-1015-b-ea-plcon-1015-image_1-230217_2412.jpg', 'category_id' => 12, 'price' => 0.98],
            ['name' => 'Spa Reine', 'description' => '1L Sparkling Glass bottle', 'image_url' => 'https://cdn.carrefour.eu/1200_01298079_5410013111009_00.jpeg', 'category_id' => 12, 'price' => 0.98],
            // Evian
            ['name' => 'Evian', 'description' => '1.5L Still water', 'image_url' => 'https://selvastoreuk.com/wp-content/uploads/2020/12/3068320084602.jpg', 'category_id' => 12, 'price' => 0.95],
            ['name' => 'Evian', 'description' => '1.5L Still water 6pc', 'image_url' => 'https://cdn.shopify.com/s/files/1/0360/6353/products/Evian_1.5L.jpeg?crop=center&height=1024&v=1523636306&width=1024', 'category_id' => 12, 'price' => 6.55],
            ['name' => 'Evian', 'description' => '1L Still water', 'image_url' => 'https://eshop.bigbagdelivery.com/img/p/2/1/6/2/2162-large_default.jpg', 'category_id' => 12, 'price' => 0.93],
            ['name' => 'Evian', 'description' => '1L Still water 6pc', 'image_url' => 'https://static.delhaize.be/medias/sys_master/h0c/hf2/11723025743902.jpg', 'category_id' => 12, 'price' => 5.44],
            ['name' => 'Evian', 'description' => '6L Still water', 'image_url' => 'https://www.evian.com/fileadmin/user_upload/fr/slider-6L-V2.png', 'category_id' => 12, 'price' => 3.19],
            ['name' => 'Evian', 'description' => '500ml Still water', 'image_url' => 'https://www.evian.com/fileadmin/user_upload/be/Product_Shots/evian_be-nl_prestigegamma-50cl.png', 'category_id' => 12, 'price' => 0.64],
            ['name' => 'Evian', 'description' => '500ml Still water 6pc', 'image_url' => 'https://cdn.carrefour.eu/1200_06438860_3068320124544_00.jpeg', 'category_id' => 12, 'price' => 4.34],
            ['name' => 'Evian', 'description' => '1L Still water Glass Bottle', 'image_url' => 'https://dentips.be/uploads/products/00215.jpg', 'category_id' => 12, 'price' => 1.4],
            // Chaudfontaine
            ['name' => 'Chaudfontaine', 'description' => '1.5L Still water', 'image_url' => 'https://drankenhandel.blob.core.windows.net/thumbs/0021186_Chaudfontaine-Plat-1-5L-Pet_510.png', 'category_id' => 12, 'price' => 1.33],
            ['name' => 'Chaudfontaine', 'description' => '1.5L Still water 6pc',        'image_url' => 'https://static.ah.nl/dam/product/AHI_43545239393038343739?revLabel=2&rendition=800x800_JPG_Q90&fileType=binary',        'category_id' => 12,        'price' => 5.22,],
            ['name' => 'Chaudfontaine', 'description' => '1L Still water',        'image_url' => 'https://drinksdiest.be/uploads/products/09451.jpg',        'category_id' => 12,        'price' => 0.96,],
            ['name' => 'Chaudfontaine', 'description' => '1L Still water 6pc',        'image_url' => 'https://cdn.carrefour.eu/1200_04996128_5449000002730_00.jpeg',        'category_id' => 12,        'price' => 5.00,],
            ['name' => 'Chaudfontaine', 'description' => '1.5L Sparkling',        'image_url' => 'https://www.kantinewinkel.nl/media/catalog/product/cache/3/image/9df78eab33525d08d6e5fb8d27136e95/c/h/chaudfontaine_sparkling_15l_pet.png',        'category_id' => 12,        'price' => 1.33,],
            ['name' => 'Chaudfontaine', 'description' => '1.5L Sparkling 6pc',        'image_url' => 'https://cdn.carrefour.eu/1200_01017510_5449000111722_01.jpeg',        'category_id' => 12,        'price' => 8.09,],
            ['name' => 'Chaudfontaine', 'description' => '1L Sparkling Glass bottle',        'image_url' => 'https://www.prikentik.be/media/catalog/product/c/h/chaudfontaine_sparkling_ref._glass_1.00l_ecom_2d_front_preview.jpg',        'category_id' => 12,        'price' => 0.99,],
            ['name' => 'Chaudfontaine', 'description' => '1L Still water Glass Bottle',        'image_url' => 'https://www.prikentik.be/media/catalog/product/cache/23d9da881b836928ceaa9fe24f71827f/c/h/chaudfontaine_still_ref._glass_1.00l_ecom_2d_front_preview.jpg',        'category_id' => 12,        'price' => 0.99,],

        ];


        $soda = [
            ['name' => 'Sprite', 'description' => '1.5L', 'image_url' => 'https://night-shop.be/30-home_default/sprite-15l.jpg', 'category_id' => 13, 'price' => 2.40,],
            ['name' => 'Sprite', 'description' => '1.5L', 'image_url' => 'https://cdn.carrefour.eu/1200_01198535_5449000019660_00.jpeg', 'category_id' => 13, 'price' => 9.99,],
            ['name' => 'Sprite', 'description' => '500ml', 'image_url' => 'https://cdn.shopify.com/s/files/1/0084/8494/5999/products/CD-500SPRITE24_1024x.png?v=1637338624', 'category_id' => 13, 'price' => 1.45,],
            ['name' => 'Sprite', 'description' => '500ml 6pc', 'image_url' => 'https://cdn.carrefour.eu/1200_01505683_5449000028624_01.jpeg',   'category_id' => 13,        'price' => 8.66,],
            ['name' => 'Sprite', 'description' => '330ml', 'image_url' => 'https://c-pi.niceshops.com/upload/image/product/large/default/49889_a1ff27f9.512x512.jpg',        'category_id' => 13,        'price' => 0.83,],
            ['name' => 'Sprite', 'description' => '330ml 6pc',     'image_url' => 'https://drinx.lu/wp-content/uploads/2022/01/006063_20220107_091116006063_20220107_091116.png',        'category_id' => 13,        'price' => 5.44,],
            ['name' => 'Sprite', 'description' => '330ml 24pc',     'image_url' => 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcQsXLwlytUlu5lCtacciaqyUAV5G7Pgw-dxRjmzWxLLX4rZT0yY4GdNIhCUMvGOoN05meSPJ5XSUa-NEsH-W7WAp3KNPCNx31KmJMsfumqWHMRTsj4b5FUp&usqp=CAE',        'category_id' => 13,        'price' => 19.22,],
            ['name' => 'Coke Classic', 'description' => '1.5L',        'image_url' => 'https://www.providore.shop/media/catalog/product/c/o/coke-1.5l.jpg',        'category_id' => 13,        'price' => 1.70,],
            ['name' => 'Coke Classic', 'description' => '1.5L 6pc',        'image_url' => 'https://www.prikentik.be/media/catalog/product/cache/23d9da881b836928ceaa9fe24f71827f/c/o/coca-cola_pet_1.50l_x_6_ecom_3d_preview_1.jpg',        'category_id' => 13,        'price' => 7.33,],
            ['name' => 'Coke Classic', 'description' => '1L',        'image_url' => 'https://www.prikentik.be/media/catalog/product/cache/23d9da881b836928ceaa9fe24f71827f/c/o/coca-cola_pet_1.00l_ecom_2d_front_preview_1.jpg',        'category_id' => 13,        'price' => 1.50,],
            ['name' => 'Coke Classic', 'description' => '1L 6pc',        'image_url' => 'https://www.prikentik.be/media/catalog/product/cache/23d9da881b836928ceaa9fe24f71827f/c/o/coca-cola_pet_1.00l_x_6_ecom_3d_preview_1.jpg',        'category_id' => 13,        'price' => 6.10,],
            ['name' => 'Coke Classic', 'description' => '330ml',        'image_url' => 'https://cdn.webshopapp.com/shops/224948/files/228390929/600x600x2/coca-cola-coke-330ml.jpg',        'category_id' => 13,        'price' => 0.88,],
            ['name' => 'Coke Classic', 'description' => '330ml 6pc',        'image_url' => 'https://cdn.carrefour.eu/1200_04410018_5449000217189_00.jpeg',        'category_id' => 13,        'price' => 5.22,],
            ['name' => 'Coke Zero', 'description' => '1.5L', 'image_url' => 'https://assets.iceland.co.uk/i/iceland/coca_cola_zero_sugar_15l_55441_T1.jpg?$pdpzoom$', 'category_id' => 13, 'price' => 1.70],
            ['name' => 'Coke Zero', 'description' => '1.5L 6pc', 'image_url' => 'https://static.delhaize.be/medias/sys_master/h7c/h01/11236828315678.jpg', 'category_id' => 13, 'price' => 7.33],
            ['name' => 'Coke Zero', 'description' => '1L', 'image_url' => 'https://d3el976p2k4mvu.cloudfront.net/medias/sys_master/h8f/ha4/9019759296542.jpg', 'category_id' => 13, 'price' => 1.50],
            ['name' => 'Coke Zero', 'description' => '1L 6pc', 'image_url' => 'https://static.ah.nl/dam/product/AHI_43545239393035313239?revLabel=2&rendition=800x800_JPG_Q90&fileType=binary', 'category_id' => 13, 'price' => 6.10],
            ['name' => 'Coke Zero', 'description' => '330ml', 'image_url' => 'https://dj0m4io8o9yuz.cloudfront.net/storage/media/catalog/products/420/8/4200002498/ccz-330ml-can-s-gr-800x800-px.png?id=1620374517', 'category_id' => 13, 'price' => 0.88],
            ['name' => 'Coke Zero', 'description' => '330ml 6pc', 'image_url' => 'https://cdn.carrefour.eu/1200_04447539_5449000217165_01.jpeg', 'category_id' => 13, 'price' => 5.22],
            ['name' => 'Fanta', 'description' => '330ml', 'image_url' => 'https://www.klavertje-vier.net/autoimg/2101699/900x900/ffffff/w/frisdrank-fanta-orange-blik-330ml.jpg', 'category_id' => 13, 'price' => 0.86],
            ['name' => 'Fanta', 'description' => '330ml 6pc', 'image_url' => 'https://cdn.carrefour.eu/1200_01026066_5449000218452_00.jpeg', 'category_id' => 13, 'price' => 5.30]
        ];

        $juice = [
            ['name' => 'Tropicana Orange', 'description' => '1L', 'image_url' => 'https://m.media-amazon.com/images/I/71wMrB2fMBL._SL1500_.jpg', 'category_id' => 14, 'price' => 1.70],
            ['name' => 'Tropicana Fruit delight', 'description' => '1L', 'image_url' => 'https://m.media-amazon.com/images/I/71IIGn9bV4L._SL1500_.jpg', 'category_id' => 14, 'price' => 1.70],
            ['name' => 'Tropicana Apple', 'description' => '1L', 'image_url' => 'https://m.media-amazon.com/images/I/712GOTdpsdL._SL1500_.jpg', 'category_id' => 14, 'price' => 1.70],
            ['name' => 'Tropicana Guava', 'description' => '1L', 'image_url' => 'https://m.media-amazon.com/images/I/71K1b-PxLFL._SX522_.jpg', 'category_id' => 14, 'price' => 1.70],
            ['name' => 'Tropicana Litchi', 'description' => '1L', 'image_url' => 'https://www.mymadrasmart.com/wp-content/uploads/2021/02/li1.jpg', 'category_id' => 14, 'price' => 1.70],
            ['name' => 'Tropicana Mango', 'description' => '1L', 'image_url' => 'https://m.media-amazon.com/images/I/712cRVCElbL._SL1500_.jpg', 'category_id' => 14, 'price' => 1.70],
            ['name' => 'Tropicana Mixed fruits', 'description' => '1L', 'image_url' => 'https://m.media-amazon.com/images/I/71vt4IZb8QL._SX522_.jpg', 'category_id' => 14, 'price' => 1.70],
            ['name' => 'Tropicana Pineapple', 'description' => '1L', 'image_url' => 'https://m.media-amazon.com/images/I/718We08xeaL._SL1500_.jpg', 'category_id' => 14, 'price' => 1.70],
            ['name' => 'Minute Maid Orange', 'description' => '1L', 'image_url' => 'https://images.collectandgo.be/images/step/JPG/JPG/500x500/std.lang.all/90/06/asset-2389006.jpg', 'category_id' => 14, 'price' => 1.54],
            ['name' => 'Minute Maid Apple', 'description' => '1L', 'image_url' => 'https://cdn.carrefour.eu/1200_06848373_9049000000017_01.jpeg', 'category_id' => 14, 'price' => 1.54],
            ['name' => 'Minute Maid Fruits', 'description' => '1L', 'image_url' => 'https://images.collectandgo.be/images/step/JPG/JPG/500x500/std.lang.all/89/98/asset-2388998.jpg', 'category_id' => 14, 'price' => 1.55],
            ['name' => 'Minute Maid Fruit punch', 'description' => '1L', 'image_url' => 'https://cdn.shopify.com/s/files/1/0586/6091/3302/products/6000201041946.jpg?v=1661990771', 'category_id' => 14, 'price' => 1.55],
            ['name' => 'Minute Maid Peach', 'description' => '1L', 'image_url' => 'https://i5.walmartimages.com/asr/342b3397-0eb6-4481-a844-61d593b9c175.a08cfadddda267cba931ad46f329788d.jpeg?odnHeight=2000&odnWidth=2000&odnBg=ffffff', 'category_id' => 14, 'price' => 1.45],
            ['name' => 'Minute Maid Grape', 'description' => '1L', 'image_url' => 'https://www.minutemaid.com/content/dam/nagbrands/us/minutemaidus/en/products/lemonades-and-fruit-drinks/grape-punch/Minute-Maid_Lemonades_Fruit-Drinks_Grape_Punch_59oz.png', 'category_id' => 14, 'price' => 1.45],
            ['name' => 'Minute Maid Pink lemonade', 'description' => '1L', 'image_url' => 'https://www.minutemaid.com/content/dam/nagbrands/us/minutemaidus/en/products/lemonades-and-fruit-drinks/pink-lemonade/Minute-Maid_Lemonades_Fruit-Drinks_Pink-Lemonade_59oz.png', 'category_id' => 14, 'price' => 1.50],
            ['name' => 'Minute Maid Cranberry', 'description' => '1L', 'image_url' => 'https://i5.walmartimages.com/asr/ad55bb2b-da0b-4377-8df3-298f3f638d24.ae36b5d1a3f86b71736df4731ab21020.jpeg?odnHeight=2000&odnWidth=2000&odnBg=ffffff', 'category_id' => 14, 'price' => 1.55],
            ['name' => 'Granini Orange', 'description' => '1L', 'image_url' => 'https://cdn.carrefour.eu/1200_04871164_4048517691584_02.jpeg', 'category_id' => 14, 'price' => 3],
            ['name' => 'Granini Mixed fruits', 'description' => '1L', 'image_url' => 'https://cdn.carrefour.eu/1200_04367478_4048517693045_00.jpeg', 'category_id' => 14, 'price' => 3],
            ['name' => 'Granini Pineapple', 'description' => '1L', 'image_url' => 'https://cdn.carrefour.eu/1200_04531494_3503780002051_00.jpeg', 'category_id' => 14, 'price' => 3],
            ['name' => 'Granini Mango', 'description' => '1L', 'image_url' => 'https://static.delhaize.be/medias/sys_master/h6a/h1a/11465502326814.jpg', 'category_id' => 14, 'price' => 3.06]
        ];

        $dairy = [
            ['name' => 'Semi-skimmed milk', 'description' => '1L', 'image_url' => 'https://www.aldi.be/content/aldi/belgium/promotions/source-localenhancement/2019/2019-01/2019-01-02/vast_assortiment/602/1/0/_jcr_content/assets/imported-images/BILD_INTERNET12/0602_halfvolle_melk-1.png/_jcr_content/renditions/opt.1250w.png.res/1679372391996/opt.1250w.png', 'category_id' => 15, 'price' => 0.99],
            ['name' => 'Whole milk', 'description' => '1L', 'image_url' => 'https://www.aldi.be/content/aldi/belgium/promotions/source-localenhancement/2019/2019-01/2019-01-02/vast_assortiment/601/1/0/jcr:content/assets/imported-images/BILD_INTERNET17/0601_volle_melk-1.png/jcr:content/renditions/opt.440w.png.res/1679458433072/opt.440w.png', 'category_id' => 15, 'price' => 1.06],
            ['name' => 'Skimmed milk', 'description' => '1L', 'image_url' => 'https://www.aldi.be/content/aldi/belgium/promotions/source-localenhancement/2019/2019-01/2019-01-02/vast_assortiment/603/1/0/jcr:content/assets/imported-images/BILD_INTERNET12/0603_magere_melk-1.png/jcr:content/renditions/opt.440w.png.res/1679375008264/opt.440w.png', 'category_id' => 15, 'price' => 0.99],
            ['name' => 'Chocolate milk', 'description' => '1L', 'image_url' => 'https://www.aldi.be/content/aldi/belgium/promotions/source-localenhancement/2019/2019-01/2019-01-02/vast_assortiment/607/1/0/jcr:content/assets/imported-images/BILD_INTERNET12/0607_chocomelk_21-1.png/jcr:content/renditions/opt.440w.png.res/1679704576011/opt.440w.png', 'category_id' => 15, 'price' => 1.10],
            ['name' => 'Semi-skimmed milk', 'description' => '500ml 6pc', 'image_url' => 'https://www.aldi.be/content/aldi/belgium/promotions/source-localenhancement/2019/2019-01/2019-01-02/vast_assortiment/605/1/0/jcr:content/assets/imported-images/BILD_INTERNET15/0605_halfvolle_melk-1.png/jcr:content/renditions/opt.440w.png.res/1680824205104/opt.440w.png', 'category_id' => 15, 'price' => 4.33],
            ['name' => 'Whole milk', 'description' => '500ml 6pc', 'image_url' => 'https://www.aldi.be/content/aldi/belgium/promotions/source-localenhancement/2019/2019-01/2019-01-02/vast_assortiment/605/1/0/jcr:content/assets/imported-images/BILD_INTERNET15/0605_halfvolle_melk-1.png/jcr:content/renditions/opt.440w.png.res/1680824205104/opt.440w.png', 'category_id' => 15, 'price' => 4.33],
            ['name' => 'Fortified milk 500ml 6pc',    'description' => '',    'image_url' => 'https://www.aldi.be/content/aldi/belgium/promotions/source-localenhancement/2019/2019-01/2019-01-02/vast_assortiment/621/1/0/jcr:content/assets/imported-images/BILD_INTERNET6/0621_PRIMARY_0_nl-fr-de_Gevitamineerde_melk_1_l_Milsa_01.png/jcr:content/renditions/opt.440w.png.res/1680824211045/opt.440w.png',    'category_id' => 15,    'price' => 4.70],
            ["name" => "Chocolate milk",    "description" => "500ml 6pc",    "image_url" => "https://www.aldi.be/content/aldi/belgium/promotions/source-localenhancement/2019/2019-01/2019-01-02/vast_assortiment/4975/1/0/jcr:content/assets/imported-images/BILD_INTERNET10/4975_halfvolle_chocomelk-1.png/jcr:content/renditions/opt.440w.png.res/1681309671815/opt.440w.png",    "category_id" => 15,    "price" => 5.33],
            ["name" => "Low-fat Yogurt Banana",    "description" => "750ml",    "image_url" => "https://www.aldi.be/content/aldi/belgium/promotions/source-localenhancement/2019/2019-01/2019-01-02/vast_assortiment/3000147/1/0/jcr:content/assets/imported-images/BILD_INTERNET4/3000147_magere_drinkyoghurt-3.png/jcr:content/renditions/opt.440w.png.res/1679378074489/opt.440w.png",    "category_id" => 15,    "price" => 1.33],
            ["name" => "Low-fat Yogurt Passion fruit",    "description" => "750ml",    "image_url" => "https://www.aldi.be/content/aldi/belgium/promotions/source-localenhancement/2019/2019-01/2019-01-02/vast_assortiment/3000147/1/0/jcr:content/assets/imported-images/BILD_INTERNET2/3000147_magere_drinkyoghurt-2.png/jcr:content/renditions/opt.440w.png.res/1679378074682/opt.440w.png",    "category_id" => 15,    "price" => 1.33],
            ["name" => "Low-fat Yogurt Berries",    "description" => "750ml",    "image_url" => "https://www.aldi.be/content/aldi/belgium/promotions/source-localenhancement/2019/2019-01/2019-01-02/vast_assortiment/3000147/1/0/jcr:content/assets/imported-images/BILD_INTERNET3/3000147_magere_drinkyoghurt-1.png/jcr:content/renditions/opt.440w.png.res/1679378074873/opt.440w.png",    "category_id" => 15,    "price" => 1.33],
            ["name" => "Low-fat Yogurt Strawberry",    "description" => "750ml",    "image_url" => "https://www.aldi.be/content/aldi/belgium/promotions/source-localenhancement/2019/2019-01/2019-01-02/vast_assortiment/3000146/1/0/jcr:content/assets/imported-images/BILD_INTERNET1/3000146_magere_drinkyoghurt_met_aardbei.png/jcr:content/renditions/opt.440w.png.res/1679378073456/opt.440w.png",    "category_id" => 15,    "price" => 1.33],
            ["name" => "Actimel Strawberry", "description" => "100ml 8pc", "image_url" => "https://www.rob-brussels.be/media/catalog/product/cache/4674fdbecbe8e81d26c2d902fe2fbc48/7/b/7-bl-blpls-1090-7-bl-blpls-1090-image_1-220217_1901.jpg", "category_id" => 15, "price" => 6.33],
            ["name" => "Actimel", "description" => "100ml 8pc", "image_url" => "https://www.rob-brussels.be/media/catalog/product/cache/4674fdbecbe8e81d26c2d902fe2fbc48/7/b/7-bl-blpls-1030-7-bl-blpls-1030-image_1-220217_1899.jpg", "category_id" => 15, "price" => 6.33],
            ["name" => "Actimel Mixed fruit", "description" => "100ml 12pc", "image_url" => "https://d2wwnnx8tks4e8.cloudfront.net/images/app/large/5060058331735_3.JPG", "category_id" => 15, "price" => 9.99],
            ["name" => "Actimel Coconut", "description" => "100ml 8pc", "image_url" => "https://www.ocado.com/productImages/336/33628011_0_640x640.jpg?identifier=707dcbf6e8bb5adf3531ca5e6cb2f30a", "category_id" => 15, "price" => 6.33],
            ["name" => "Danup Strawberry", "description" => "600ml", "image_url" => "https://cdn.carrefour.eu/1200_01724836_5410146406669_02.jpeg", "category_id" => 15, "price" => 3.50],
            ["name" => "Danup Banana", "description" => "600ml", "image_url" => "https://static.ah.nl/dam/product/AHI_43545239373332313235?revLabel=2&rendition=800x800_JPG_Q90&fileType=binary", "category_id" => 15, "price" => 3.50],
            ["name" => "Yazoo Strawberry", "description" => "400ml", "image_url" => "https://m.media-amazon.com/images/S/aplus-media/vc/bd9eb429-1baa-467a-b949-8bb9eccdf0e0.__CR0,0,300,400_PT0_SX300_V1___.png", "category_id" => 15, "price" => 3],
            ["name" => "Yazoo chocolate", "description" => "400ml", "image_url" => "https://m.media-amazon.com/images/S/aplus-media/vc/c650f663-0b3e-43d1-9e1e-8ee8a64b7196.__CR0,0,2370,3160_PT0_SX300_V1___.png", "category_id" => 15, "price" => 3]
        ];

        DB::table('products')->insert($water);
        DB::table('products')->insert($soda);
        DB::table('products')->insert($juice);
        DB::table('products')->insert($dairy);
    }
}
