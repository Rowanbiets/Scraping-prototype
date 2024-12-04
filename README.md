# Scraping-Prototype

Dit project is een **Laravel-gebaseerd prototype** ontworpen voor het scrapen van productinformatie van de Torfs-website, specifiek gericht op **schoenen voor heren**. Het prototype verzamelt essentiële gegevens zoals de **naam**, **prijs**, en **afbeelding** van de producten. Deze informatie wordt gepresenteerd in een eenvoudige, gebruiksvriendelijke interface.

De verzamelde data kan gebruikt worden voor diverse doeleinden, zoals:
- Het analyseren van het productaanbod.
- Het vergelijken van prijzen en trends.
- Onderzoek naar e-commerce en marktstrategie.

Dit project dient als een basis voor geavanceerdere scraping-toepassingen en kan worden uitgebreid om meer functies en datapunten te ondersteunen.

---

## Functionaliteiten

- **Productinformatie verzamelen:** Het systeem scrapt productgegevens van de Torfs-website.
- **Weergave in een interface:** De gescrapete data wordt weergegeven in een eenvoudige interface met behulp van Laravel Blade.
- **Flexibele structuur:** De architectuur maakt het eenvoudig om extra scraping-logica toe te voegen of andere databronnen te integreren.

---

## Installatie

### Vereisten
- PHP 8.0 of hoger
- Composer
- Laravel 10 of hoger
- Een browser of tool zoals Postman om de resultaten te bekijken

### Stappen
1. **Project clonen:**
   ```bash
   git clone [repository-url]
   cd scraping-prototype
   ```
2. **Dependencies installeren:**
```bash
composer install
npm install && npm run dev
```
3. **.env configureren:**
```bash
APP_NAME=ScrapingPrototype
APP_URL=http://localhost
```
4. **Database instellen:**
Hoewel dit prototype geen database gebruikt, kan het eenvoudig worden uitgebreid met databaseondersteuning. Zorg dat de databaseconfiguratie correct is ingesteld in .env.

5. **Applicatie starten:**
```bash
php artisan serve
````

### Sources

- Laravel Documentatie: https://laravel.com/docs/10.x/http-client
- PHP Web Scraping Libraries : https://symfony.com/doc/current/components/dom_crawler.html
- Scraping in Laravel: https://zubairidrisaweda.medium.com/introduction-to-web-scraping-with-laravel-a217e1444f7c
-  Scraping in Laravel : https://brightdata.com/?pscd=get.brightdata.com&ps_partner_key=eXVsaWFzYWRvdmExOTMz&sid=3CenCItlXZMVdLVurrUGn2arLnD1iHGT6fixqq1hGhGW63&ps_xid=PLzx4WWABJXxls&gsxid=PLzx4WWABJXxls&gspk=eXVsaWFzYWRvdmExOTMz&utm_source=affiliates&utm_campaign=eXVsaWFzYWRvdmExOTMz
