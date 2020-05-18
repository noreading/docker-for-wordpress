# Docker Setup for Wordpress

This is a simple [Docker](https://www.docker.com/) setup to run a local WordPress development environment.

**Included:**

- [Apache](https://httpd.apache.org/) 2.4
- [PHP](https://www.php.net) 7.4 FPM
- [MariaDB](https://mariadb.org/) 10.5

## Installation

1. Install [Docker](https://www.docker.com/).
1. Clone this [repository](https://github.com/noreading/docker-for-wordpress).
   ```bash
   git clone git@github.com:noreading/docker-for-wordpress.git
   ```
1. Delete the `.git` folder:
   ```bash
   rm -rf .git
   ```
1. Edit the file `docker/apache2/wordpress.conf` and add the wanted local domain
   (e.g. dev.wordpress.com).
1. Add the domain to your local `hosts` file.
1. Download [WordPress](https://wordpress.org/) in your language.
   ```bash
   curl https://de.wordpress.org/latest-de_DE.zip --output latest-de_DE.zip
   ```
1. Extract the content of the ZIP file and move them to the `public` folder.
   ```bash
   unzip latest-de_DE.zip
   mv wordpress/* public
   ```
1. Remove the downloaded and extracted files.
   ```bash
   rm latest-de_DE.zip
   rm -rf wordpress
   ```
1. Build and start the containers (as a daemon)
   ```bash
   docker-compose up -d
   ```

## Basic commands

1. Start the containers:
   ```bash
   docker-compose up -d
   ```
1. Stopping the containers:
   ```bash
   docker-compose stop
   ```
1. Restarting the containers:
   ```bash
   docker-compose restart
   ```
1. Deleting the containers:
   ```bash
   docker-compose rm
   ```
1. Logging in by SSH into a container:
   ```bash
   docker-compose exec {container name} sh
   ```
