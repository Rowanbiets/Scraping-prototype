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
        // Maak een GET-verzoek naar de Torfs schoenen pagina
        $response = $this->client->request('GET', 'https://www.torfs.be/nl/heren/schoenen/');

        // De body van de response als string ophalen
        $html = (string) $response->getBody();

        // Gebruik DomCrawler om de HTML te parsen
        $crawler = new Crawler($html);

        // Selecteer alle producten
        return $crawler->filter('.product-tile')->each(function (Crawler $node) {
            $name = $node->filter('a[itemprop="url"]')->count() ?
                $node->filter('a[itemprop="url"]')->text() : 'N/A';

            $price = $node->filter('span.value[itemprop="price"]')->count() ?
                $node->filter('span.value[itemprop="price"]')->text() : 'N/A';

            // Controleer verschillende attributen voor de afbeelding
            $img = $node->filter('img')->count() ?
                ($node->filter('img')->attr('src') ?:
                    $node->filter('img')->attr('data-src') ?:
                        $node->filter('img')->attr('data-original') ?:
                            'Afbeelding niet beschikbaar') : 'Afbeelding niet beschikbaar';

            return [
                'name' => $name,
                'price' => $price,
                'img' => $img,
            ];
        });
    }
}
