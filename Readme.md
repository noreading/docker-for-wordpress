# Docker Setup for Wordpress

This is a simple [Docker](https://www.docker.com/) setup to run a local WordPress development environment.

**Included:**

- [Nginx](https://www.nginx.com/)
- [PHP](https://www.php.net) 7.3-FPM
- [MariaDB](https://mariadb.org/)

## Installation

1. Install [Docker](https://www.docker.com/).
1. Clone this [repository](https://github.com/noreading/docker-for-wordpress).
1. Edit the file `docker/nginx/site.conf` and add the wanted local domain
   (e.g. dev.wordpress.com).
1. Add the domain to your local `hosts` file.
1. Download [WordPress](https://wordpress.org/) in your language.
1. Extract the content of the ZIP file to the `public` folder in your cloned repository.
1. Build the docker containers:
   ```bash
   docker-compose build
   ```
1. Start the containers (as a daemon)
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
   docker-compose exec {container name} bash
   ```