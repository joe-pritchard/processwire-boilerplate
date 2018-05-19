# processwire-boilerplate
Another Processwire Boilerplate to make my life a little easier

Uses Laravel Mix to make the webpack experience something I don't have to think about anymore
and includes a pretty decent start for an nginx configuration. Also starts me off with Twig templating.

**Installation**

 - Download processwire, and copy the `/wire/` directory, `install.php`, and `index.php` to project root, or just execute `init.sh`.
 - Change project name in `package.json` (doesn't really matter), and `/docker/.env` (also doesn't really matter)
 - Run `docker-compose -f ./docker/docker-compose.yml up -d --build` for dev, or copy `/docker/vhost.conf` for a production server
 - Run `composer install`
 - Run `npm install`
 - Make `site/assets/`, `/site/modules/`, and `site/config.php` writable by nginx
 - Visit site root in browser and do install
 - Delete `install.php`
 - Delete `/site/install/`
 - Install the `TemplateEngineFactory` and `TemplateEngineTwig` modules
 - With install done (and if you're in production) it's probably an idea to set php-fpm's `request_terminate_timeout`, php's `max_execution_time`, and nginx's `fastcgi_read_timeout` back down to something sensible like 30 second
 
**Usage**

Your "Controllers" go in `/templates/` and your corresponding twig files go in `/templates/twig/`. 
You can change that in the TemplateEngineTwig config.  

`/templates/js/main.js` and `/templates/sass/main.scss` will be comiled down to `/site/assets/`

All requests will go through `index.php` with the exception of anything in `site/assets` which will be 
directly accessible under the docroot (except not of course the  cache, logs, and sessions directories)

Images, JS, and CSS will be serviced up directly from the `/wire/` directory too, otherwise the admin would not work.
