## About 
As only free account is used, there are limitations 
- Only, single email sent is tested here

## Installation

### Without docker
Need,
- PHP v8
- Apache or Nginx server in your local
- After cloning, just run `composer install`

### Wit docker
- Need docker and docker compose installed properly
- Change the port if necessary in the docker compose file
- Run `docker compose up -d`
- Then: `dcoker compose exec php composer install`
