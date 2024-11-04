# Scraping-prototype

Dit project is een Laravel-gebaseerd prototype voor het scrapen van productinformatie van de Torfs-website, specifiek gericht op schoenen voor dames. Het prototype haalt gegevens op zoals de naam, prijs, en afbeelding van de producten, en toont deze in een eenvoudige interface. De verzamelde data kan nuttig zijn voor het analyseren van het aanbod, het prijzenbeleid, of andere toepassingen in e-commerceonderzoek.

## Projectstructuur

De kern van het scraping-proces bevindt zich in de TorfsScraper.php-klasse, welke zich bevindt in de map app/Services. De controller die deze gegevens aan de view doorgeeft, ScraperController.php, staat in app/Http/Controllers.

- app/Http/Controllers/ScraperController.php: De controller die de scrape-functie aanroept en de resultaten naar de view stuurt.
- app/Services/TorfsScraper.php: De serviceklasse die de scraping-logica bevat.
- resources/views/products/index.blade.php: De Blade-template voor het tonen van de gescrapete productinformatie.

