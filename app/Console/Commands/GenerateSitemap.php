<?php

namespace App\Console\Commands;

use App\Models\Category;
use App\Models\Group;
use App\Models\Social;
use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Sitemap;
use Spatie\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generar the sitemap';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // SitemapGenerator::create(env('APP_URL'))->writeToFile('public/sitemap.xml');
        // SitemapGenerator::create(env('APP_URL'))->writeToFile(public_path('sitemap.xml'));

        $sitemap = Sitemap::create()
            ->add(env('APP_URL'));

        Social::all()->each(function (Social $social) use ($sitemap) {
            $sitemap->add(env('APP_URL') . '/en/' . $social->name);
        });

        Group::with('categoria', 'subcategoria', 'type', 'social')->get()->each(function (Group $group) use ($sitemap) {
            $sitemap->add(env('APP_URL') . '/en/' . $group->social->name . "/" . $group->type->name . "/categoria/" . $group->categoria->slug . "/" . $group->subcategoria->slug . "/" . $group->slug);
        });

        Category::with('groups')->get()->each(function (Category $category) use ($sitemap) {
            if (!!count($category->groups)) {
                $sitemap->add(env('APP_URL') . '/en/' . 'categoria/' . $category->slug);
            }
        });


        // NewsItem::all()->each(function (NewsItem $newsItem) use ($sitemap) {
        //     $sitemap->add(Url::create("/news/{$newsItem->slug}"));
        // });

        // Projects::all()->each(function (Project $project) use ($sitemap) {
        //     $sitemap->add(Url::create("/project/{$project->slug}"));
        // });

        $sitemap->writeToFile(public_path('sitemap.xml'));



        return 0;
    }
}
