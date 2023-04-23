<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FrozenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pizza = [
            ["name"=>"Mini pizza's Ham & cheese","price"=>"3.1","description"=>"12pc 30g","image_url"=>"https://www.aldi.be/content/aldi/belgium/promotions/source-localenhancement/2019/2019-01/2019-01-02/vast_assortiment/3295/1/0/jcr:content/assets/imported-images/BILD_INTERNET13/3295_mini_pizza_12stuks-4.png/jcr:content/renditions/opt.440w.png.res/1679456044434/opt.440w.png","category_id"=>"18"],
            ["name"=>"Mini pizza's Salami","price"=>"3.1","description"=>"12pc 30g","image_url"=>"https://www.aldi.be/content/aldi/belgium/promotions/source-localenhancement/2019/2019-01/2019-01-02/vast_assortiment/3295/1/0/jcr:content/assets/imported-images/BILD_INTERNET38/3295_mini_pizza_12stuks-1.png/jcr:content/renditions/opt.440w.png.res/1681861052524/opt.440w.png","category_id"=>"18"],
            ["name"=>"Mini pizza's Mozzarella","price"=>"3.1","description"=>"12pc 30g","image_url"=>"https://www.aldi.be/content/aldi/belgium/promotions/source-localenhancement/2019/2019-01/2019-01-02/vast_assortiment/3295/1/0/jcr:content/assets/imported-images/BILD_INTERNET8/3295_mini_pizza_12stuks-3.png/jcr:content/renditions/opt.440w.png.res/1679456044939/opt.440w.png","category_id"=>"18"],
            ["name"=>"Mini pizza's Margarita","price"=>"3.1","description"=>"12pc 30g","image_url"=>"https://www.aldi.be/content/aldi/belgium/promotions/source-localenhancement/2019/2019-01/2019-01-02/vast_assortiment/3295/1/0/jcr:content/assets/imported-images/BILD_INTERNET33/3295_mini_pizza_12stuks-5.png/jcr:content/renditions/opt.440w.png.res/1681861045714/opt.440w.png","category_id"=>"18"],
            ["name"=>"Mini pizza's Cheese & spinach","price"=>"3.1","description"=>"12pc 30g","image_url"=>"https://www.aldi.be/content/aldi/belgium/promotions/source-localenhancement/2019/2019-01/2019-01-02/vast_assortiment/3295/1/0/jcr:content/assets/imported-images/BILD_INTERNET9/3295_mini_pizza_12stuks-2.png/jcr:content/renditions/opt.440w.png.res/1679456045410/opt.440w.png","category_id"=>"18"],
            ["name"=>"Mozzarella","price"=>"3.40","description"=>"2pc 335g","image_url"=>"https://www.aldi.be/content/aldi/belgium/promotions/source-localenhancement/2019/2019-01/2019-01-02/vast_assortiment/3172/1/0/jcr:content/assets/imported-images/BILD_INTERNET13/3172_pizza_mozzarella.png/jcr:content/renditions/opt.440w.png.res/1680219464842/opt.440w.png","category_id"=>"18"],
            ["name"=>"Salami Pizza","price"=>"3.4","description"=>"2pc 335g","image_url"=>"https://www.aldi.be/content/aldi/belgium/promotions/source-localenhancement/2019/2019-01/2019-01-02/vast_assortiment/2162/1/0/jcr:content/assets/imported-images/BILD_INTERNET37/2162_pizza_salami.png/jcr:content/renditions/opt.440w.png.res/1681861348168/opt.440w.png","category_id"=>"18"],
            ["name"=>"Prosciutto Pizza","price"=>"3.4","description"=>"2pc 335g","image_url"=>"https://www.aldi.be/content/aldi/belgium/promotions/source-localenhancement/2019/2019-01/2019-01-02/vast_assortiment/3193/1/0/jcr:content/assets/imported-images/BILD_INTERNET11/3193_pizza_prosciutto.png/jcr:content/renditions/opt.440w.png.res/1680219518149/opt.440w.png","category_id"=>"18"],
            ["name"=>"Pizza speciale","price"=>"3.4","description"=>"2pc 335g","image_url"=>"https://www.aldi.be/content/aldi/belgium/promotions/source-localenhancement/2019/2019-01/2019-01-02/vast_assortiment/3225/1/0/jcr:content/assets/imported-images/BILD_INTERNET11/3225_pizza_speciale.png/jcr:content/renditions/opt.440w.png.res/1680219478174/opt.440w.png","category_id"=>"18"],
            ["name"=>"Hawaï","price"=>"3.4","description"=>"2pc 335g","image_url"=>"https://www.aldi.be/content/aldi/belgium/promotions/source-localenhancement/2019/2019-01/2019-01-02/vast_assortiment/3166/1/0/jcr:content/assets/imported-images/BILD_INTERNET11/3166_pizza_hawaii.png/jcr:content/renditions/opt.440w.png.res/1680219459362/opt.440w.png","category_id"=>"18"],
            ["name"=>"Funghi","price"=>"3.4","description"=>"2pc 335g","image_url"=>"https://www.aldi.be/content/aldi/belgium/promotions/source-localenhancement/2019/2019-01/2019-01-02/vast_assortiment/3120/1/0/jcr:content/assets/imported-images/BILD_INTERNET12/3120_pizza_funghi.png/jcr:content/renditions/opt.440w.png.res/1680219382491/opt.440w.png","category_id"=>"18"],
            ["name"=>"4 Cheeses Pizza","price"=>"3.4","description"=>"2pc 335g","image_url"=>"https://www.aldi.be/content/aldi/belgium/promotions/source-localenhancement/2019/2019-01/2019-01-02/vast_assortiment/3213/1/0/jcr:content/assets/imported-images/BILD_INTERNET15/3213_pizza_quattro_formaggi.png/jcr:content/renditions/opt.440w.png.res/1680219567928/opt.440w.png","category_id"=>"18"],
            ["name"=>"Pizza Tonno","price"=>"3.4","description"=>"2pc 335g","image_url"=>"https://www.aldi.be/content/aldi/belgium/promotions/source-localenhancement/2019/2019-01/2019-01-02/vast_assortiment/3226/1/0/jcr:content/assets/imported-images/BILD_INTERNET11/3226_pizza_tonno.png/jcr:content/renditions/opt.440w.png.res/1680219536330/opt.440w.png","category_id"=>"18"],

        ];

        $iceCream = [
            ["name"=>"Ben & Jerry's Coffee Buzz","price"=>"7.33","description"=>"112g","image_url"=>"https://www.benjerry.com/files/live/sites/systemsite/files/US%20and%20Global%20Assets/Flavors/Product%20Assets/US/Coffee%20Coffee%20BuzzBuzzBuzz!%20Ice%20Cream/coffee-coffee-buzz-2022-landing-open.png","category_id"=>"19"],
            ["name"=>"Ben & Jerry's Super fudge","price"=>"7.33","description"=>"112g","image_url"=>"https://www.benjerry.com/files/live/sites/systemsite/files/US%20and%20Global%20Assets/Flavors/Product%20Assets/US/New%20York%20Super%20Fudge%20Chunk%20Ice%20Cream/new-york-super-fudge-2022-detail.png","category_id"=>"19"],
            ["name"=>"Ben & Jerry's Mint Chocolate Chance","price"=>"7.33","description"=>"112g","image_url"=>"https://www.benjerry.com/files/live/sites/systemsite/files/US%20and%20Global%20Assets/Flavors/Product%20Assets/US/Mint%20Chocolate%20Chance%20Non-Dairy/mint-chocolate-chance-2022-sunflower-detail.png","category_id"=>"19"],
            ["name"=>"Ben & Jerry's Chocolatey Love A-fair","price"=>"7.33","description"=>"112g","image_url"=>"https://www.benjerry.com/files/live/sites/systemsite/files/US%20and%20Global%20Assets/Flavors/Product%20Assets/US/Chocolatey%20Love-A-Fair%20Ice%20Cream/US_ChocolateLoveAffair_473mL_RGB_Open.png","category_id"=>"19"],
            ["name"=>"Ben & Jerry's Cookie Dough","price"=>"7.33","description"=>"112g","image_url"=>"https://www.benjerry.com/files/live/sites/systemsite/files/US%20and%20Global%20Assets/Flavors/Product%20Assets/US/Chocolate%20Chip%20Cookie%20Dough%20Ice%20Cream/choc-chip-cookie-dough-2022-landing-open.png","category_id"=>"19"],
            ["name"=>"Ben & Jerry's Chunky monkey","price"=>"7.33","description"=>"112g","image_url"=>"https://www.benjerry.com/files/live/sites/systemsite/files/US%20and%20Global%20Assets/Flavors/Product%20Assets/US/Chunky%20Monkey%20Ice%20Cream/chunky-monkey-2022-landing-open.png","category_id"=>"19"],
            ["name"=>"Ben & Jerry's Phish Food","price"=>"7.33","description"=>"112g","image_url"=>"https://www.benjerry.com/files/live/sites/systemsite/files/US%20and%20Global%20Assets/Flavors/Product%20Assets/US/Phish%20Food%20Ice%20Cream/phish-food-2022-detail-open.png","category_id"=>"19"],
            ["name"=>"Magnum Classic pint","price"=>"4.66","description"=>"440ml","image_url"=>"https://asset-apac.unileversolutions.com/content/dam/unilever/heart/global/pack_shot/1404705-32073620-png.png.ulenscale.400x400.png","category_id"=>"19"],
            ["name"=>"Magnum Almond pint","price"=>"4.66","description"=>"440ml","image_url"=>"https://asset-apac.unileversolutions.com/content/dam/unilever/heart/global/pack_shot/magnum_pint_almond-32073635-png.png.ulenscale.400x400.png","category_id"=>"19"],
            ["name"=>"Magnum Almond remix pint","price"=>"4.66","description"=>"440ml","image_url"=>"https://www.magnumicecream.com/content/dam/unilever/magnum/austria/pack_shot/8711327537941.01-59035658-png.png","category_id"=>"19"],
            ["name"=>"Magnum Double sunflower","price"=>"4.66","description"=>"440ml","image_url"=>"https://www.gb.se/content/dam/unilever/magnum/sweden/pack_shot/8711327585607.01-89947075-png.png","category_id"=>"19"],
            ["name"=>"Magnum Double white chocolate","price"=>"4.66","description"=>"440ml","image_url"=>"https://ijsexpress.nl/wp-content/uploads/Magnum-White-Chocolate-Cookie_ccexpress-1.png","category_id"=>"19"],
            ["name"=>"Ben & Jerry's Chocolate Cookie dough","price"=>"5.21","description"=>"226g","image_url"=>"https://www.benjerry.com/files/live/sites/systemsite/files/US%20and%20Global%20Assets/Flavors/Product%20Assets/US/Chocolate%20Chip%20Cookie%20Dough%20Chunks/chocolate-chip-cookie-dough-chunks-8oz-detail.png","category_id"=>"19"],
            ["name"=>"Ben & Jerry's Chocolate Chocolate Cookie dough","price"=>"5.12","description"=>"226g","image_url"=>"https://www.benjerry.com/files/live/sites/systemsite/files/US%20and%20Global%20Assets/Flavors/Product%20Assets/US/Chocolate%20Chocolate%20Chip%20Cookie%20Dough%20Chunks/chocolate-chocolate-chip-cookie-dough-detail.png","category_id"=>"19"],
            ["name"=>"Ben & Jerry's Cinnamon Bun Dough chunks","price"=>"5.12","description"=>"226g","image_url"=>"https://www.benjerry.com/files/live/sites/systemsite/files/US%20and%20Global%20Assets/Flavors/Product%20Assets/US/Cinnamon%20Bun%20Dough%20Chunks/cinnamon-buns-chunks-8oz-2022-detail.png","category_id"=>"19"],
            ["name"=>"Ben & Jerry's Half baked Cookie dough","price"=>"5.12","description"=>"226g","image_url"=>"https://www.benjerry.com/files/live/sites/systemsite/files/US%20and%20Global%20Assets/Flavors/Product%20Assets/US/Half%20Baked%20Dough%20Chunks/half-baked-cookie-dough-mix-detail.png","category_id"=>"19"],
            ["name"=>"Ben & Jerry's Change is Brewing","price"=>"4.66","description"=>"112g","image_url"=>"https://www.benjerry.com/files/live/sites/systemsite/files/US%20and%20Global%20Assets/Flavors/Product%20Assets/US/Change%20is%20Brewing%20Ice%20Cream/US-change_is_brewing-2022-open-landing.png","category_id"=>"19"],
            ["name"=>"Ben & Jerry's Churray for Churros!","price"=>"4.66","description"=>"112g","image_url"=>"https://www.benjerry.com/files/live/sites/systemsite/files/US%20and%20Global%20Assets/Flavors/Product%20Assets/US/Churray%20for%20Churros/37659_US_IC_Churray-for-Churros_473ml_Open_Brand-1902px.png","category_id"=>"19"],
            ["name"=>"Ben & Jerry's Mouse Pie","price"=>"4.66","description"=>"112g","image_url"=>"https://www.benjerry.com/files/live/sites/systemsite/files/US%20and%20Global%20Assets/Flavors/Product%20Assets/US/Mousse%20Pie/37648_US_IC_Mousse-Pie_473ml_Open_Brand-1902px.png","category_id"=>"19"],
            ["name"=>"Ben & Jerry's Brownie Batter Core","price"=>"5.2","description"=>"112g","image_url"=>"https://www.benjerry.com/files/live/sites/systemsite/files/US%20and%20Global%20Assets/Flavors/Product%20Assets/US/Brownie%20Batter%20Core/brownie-batter-core-2022-landing-open.png","category_id"=>"19"],
        ];

        DB::table('products')->insert($pizza);
        DB::table('products')->insert($iceCream);
    }
}
