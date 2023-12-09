<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "slug" => "/",
                "name" => "home",
                "seo_title" => "BTC mixer",
                "seo_description" => "",
            ],
            [
                "slug" => "/terms",
                "name" => "terms",
                "seo_title" => "Terms",
                "seo_description" => "",
            ],
            [
                "slug" => "/privacy-policy",
                "name" => "privacy-policy",
                "seo_title" => "Privacy policy",
                "seo_description" => "",
            ],
            [
                "slug" => "/bitcoin-white-paper",
                "name" => "bitcoin-white-paper",
                "seo_title" => "BTC white paper",
                "seo_description" => "",
            ],
            [
                "slug" => "/affiliates",
                "name" => "affiliates",
                "seo_title" => "Affiliate program",
                "seo_description" => "",
            ],
            [
                "slug" => "/faq",
                "name" => "faq",
                "seo_title" => "BTC mixer FAQ",
                "seo_description" => "",
            ]
        ];
        foreach ($data as $page){
            if (Page::whereName($page['name'])->doesntExist()){
                Page::create($page);
            }
        }
    }
}
