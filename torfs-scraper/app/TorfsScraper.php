<?php
namespace App;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Symfony\Component\DomCrawler\Crawler;

class TorfsScraper {
private $client;

public function __construct() {

$this->client = new Client();
}

/**
* @throws GuzzleException
*/
public function fetchProducts() {

// GET Request
$response = $this->client->request('GET', 'https://www.torfs.be/nl/dames/schoenen');

// De body als een string ophalen
$html = (string) $response->getBody();

// DomCrawler van Symfony om de HTML te parsen
$crawler = new Crawler($html);

// Selecteer alle producten
return $crawler->filter('.product-tile')->each(function (Crawler $node) {
$name = $node->filter('a[itemprop="url"]')->count() ? $node->filter('a[itemprop="url"]')->text() : 'N/A';

    $price = $node->filter('span.value[itemprop="price"]')->count() ?
        $node->filter('span.value[itemprop="price"]')->text() : 'N/A';

$img = $node->filter('img')->attr('src');

return [
'name' => $name,
'price' => $price,
'img' => $img,
];
});
}
}
