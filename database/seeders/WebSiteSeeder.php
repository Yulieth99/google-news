<?php

namespace Database\Seeders;

use App\Models\WebSite;
use Illuminate\Database\Seeder;

class WebSiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $webSite = new WebSite();
        $webSite -> web_site_name = 'Diario el Tiempo';
        $webSite -> save();

        $webSite = new WebSite();
        $webSite -> web_site_name = 'El Heraldo';
        $webSite -> save();

        $webSite = new WebSite();
        $webSite -> web_site_name = 'CNN';
        $webSite -> save();

        $webSite = new WebSite();
        $webSite -> web_site_name = 'Univision Noticias';
        $webSite -> save();

        $webSite = new WebSite();
        $webSite -> web_site_name = 'El diario NY';
        $webSite -> save();

        $webSite = new WebSite();
        $webSite -> web_site_name = 'ESPN';
        $webSite -> save();




    }
}
