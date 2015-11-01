<?php

namespace App\Console\Commands;

use App\Model\AdsMongo;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Symfony\Component\DomCrawler\Crawler;
use Guzzle\Http\Client;


class Ads extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ads:import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import Ads';

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
     * @return mixed
     */
    public function handle()
    {
        // Search BY Lyon - Arronds - Rhone
       $client = new Client('http://www.pap.fr');

        $r = $client->post('http://www.pap.fr/annonce/vente-immobiliere',array(), [
            'recherche' => '1',
            'geo_objets_ids' => "35369,35370,35371,35372,35373,35374,35375,35376,35377,35398,35543,433,43590",
            'typesbien' => array('appartement'),
        ]);

        $response = $r->send();

        $url = $response->getEffectiveUrl();

        dump($url);

        //storage
        $results = array();

        // create http client instance
        $client = new Client();
        $request = $client->get($url.'-40-annonces-par-page');
        $response = $request->send();

        $url = $response->getEffectiveUrl();
        //dump($url);

        /**
         * Extraction du contenu de la 1ere page
         */
        $result = $response->getBody(true);
        $crawler = new Crawler($result);


        $crawler = new Crawler($result);
        $pages = $crawler->filter('ul.pagination > li > a');


        /**
         * Extraction des pages
         */
        foreach ($pages as $domElement) {
            $link = $domElement->getAttribute('href'); //get href
            $request = $client->get('http://www.pap.fr'.$link);
            $response = $request->send();
//            $url = $response->getEffectiveUrl();
            $result = $response->getBody(true); //get content
            $crawler = new Crawler($result); //crawl all content

            /**
             * Extraction de chaques annonces
             */
            $filter = $crawler->filter('li.annonce');
            dump(iterator_count($filter));

            if (iterator_count($filter) > 1) {

                // iterate over filter results
                foreach ($filter as $i => $content) {

                    // create crawler instance for result
                    $crawler = new Crawler($content);

                    // extract the values needed
                    $results[] = array(
//                        'id' => $crawler->filter('a.button-contact')->attr("data-annonce-id"),
                        'topic' => preg_replace('/(\v|\s)+/', ' ', $crawler->filter('.header-annonce')->text()),
                        'description' => preg_replace('/(\v|\s)+/', ' ', $crawler->filter('.description')->text()),
                        'image' => $crawler->filter('img')->attr('src'),
                        'link' => $crawler->filter('a')->attr('href'),
                        'prix' => $crawler->filter('.prix')->text(),
                        'source' => 'http://www.pap.fr'.$link,
                    );
                }



            }

        }

















//                $pages = $crawler->filter('ul.pagination > li > a');

               /* // this is the response body from the requested page (usually html)


                foreach ($pages as $domElement) {
//                    dump($domElement->firstChild->data);
                    $url = $domElement->getAttribute('href');
                }*/

//            exit();
                //$crawler = $client->followRedirect();

//
//                $crawler = new Crawler($result);
//
//


      ;  //dump($result);
        dump(count($results));
        dump(($results[0]));

    }
}
