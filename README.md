# processwire-boilerplate
Another Processwire Boilerplate to make my life a little eaier

**Installation**

 - Download processwire, and copy the `/wire/` directory, `install.php`, and `index.php` to project root.
 - Change project name in `package.json` (doesn't really matter), and `/docker/.env` (also doesn't really matter)
 - Run docker compose  
 - Run `composer install`
 - Run `npm install`
 - Visit site root in browser and do install
 - Delete `install.php`
 - Delete `/site/install/`
 - Visit ProcessWire admin and check for new modules, install `TemplateEngineFactory` and `TemplateEngineTwig`
 
**Usage**

Your "Controllers" go in `/templates/` and your corresponding twig files go in `/templates/twig/`. 
You can change that in the TemplateEngineTwig config.  

`/templates/js/main.js` and `/templates/sass/main.scss` will be comiled down to `/site/assets/`

All requests will go through `index.php` with the exception of anything in `site/assets` which will be 
directly accessible under the docroot (except not of course the  cache, logs, and sessions directories)

Images, JS, and CSS will be serviced up directly from the `/wire/` directory too, otherwise the admin would not work.
