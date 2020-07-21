# Requirements

* Install Docker
* Install DDEV

# Installation
````
$ git clone https://github.com/tarekdj/medium-ddev-blackfire-demo.git
$ ddev config
$ cd .ddev
$ curl https://raw.githubusercontent.com/drud/ddev-contrib/master/docker-compose-services/blackfire/docker-compose.blackfire.yaml > docker-compose.blackfire.yaml
$ mkdir php && curl https://raw.githubusercontent.com/drud/ddev-contrib/master/docker-compose-services/blackfire/php/blackfire.ini > php/blackfire.ini
````

Don't forget to edit **docker-compose.blackfire.yaml** file and replace *YOUR_SERVER_ID* and *YOUR_SERVER_TOKEN* with values from your Blackfire.io account.
