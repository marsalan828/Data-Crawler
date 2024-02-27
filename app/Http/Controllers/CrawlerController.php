<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Symfony\Component\DomCrawler\Crawler;

class CrawlerController extends Controller
{
    public function crawl()
    {
        $client = new Client();
        $response = $client->request('GET','https://besthf.com/best/Furniture/Chairs');
        $html = (string) $response->getBody();

        $crawler = new Crawler($html,'https://besthf.com/best/Furniture/Chairs');
        
        $selectionHeading = $crawler->filter('h1')->count();
        $selectionText = $crawler->filter('p')->text();
        $imageSrc = $crawler->filter('img')->image()->getUri();

        $formattedSelectionText = "<p>$selectionText</p>";
        $formattedSelectionHeading = "<h1>$selectionHeading</h1>";
        // $imageSrc = $crawler->filter('img')->count() > 0 ? $crawler->filter('img')->attr('src') : 'https://besthf.com/best/Furniture/Chairs';
        $formattedImageSrc = "<img src='$imageSrc'/>";



        $jsonData = [
            'p'=>$formattedSelectionText,
            'img'=>$formattedImageSrc,
            'h1'=>$formattedSelectionHeading
        ];

        // $formattedJson = json_encode($jsonData,JSON_PRETTY_PRINT);
        return View::make('json',['formattedJson'=>$jsonData]);
    }
}
