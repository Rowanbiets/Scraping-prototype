<?php
namespace Scraper;

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

class TorfsScraper{
    private $client;

    public function __construct(){

$this->client = new Client();
    }


public function fetchProducts() {

    //GET request naar Torfs website

    $response = $this->client->request('GET','https://www.torfs.be/nl/dames/schoenen')

    //Body 

    $html = $response->getBody()->getContents();

    //HTML parsen met Domcrawler(symfony)

    $crawler = new Crawler($html);

    //Productbeschrijving

    $products =$crawler->filter('.prodcut.tile')->each(function(Crawler $node)
    return [
        'name' => $node ->filter('.product.name')->text();
    ]
    
    )
    
}




}