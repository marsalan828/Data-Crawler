<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Symfony\Component\DomCrawler\Crawler;

class CrawlerController extends Controller
{
    public function crawl()
    {
        $client = new Client();
        $response = $client->request('GET','https://www.besthf.com/best/Furniture/Chairs/Swivel-Glide/CAROLY');
        $html = (string) $response->getBody();

        $crawler = new Crawler($html);
        
        $selectionText = $crawler->filter('p')->text();
        // echo $crawler->filter('img')->count();
        $imageSrc = $crawler->filter('img')->attr('src');

        return response()->json([
            'p'=>$selectionText,
            'img'=>$imageSrc
        ]);
    }
}
