# Drupal 8 and React

## Docker

The backend runs on a docker-compose generated image with PHP 7.1 and most convenient tools preselected. It is based on [Wodby's Docker4Drupal project](https://github.com/wodby/docker4drupal).
See also the "Quick start" section in the [documentation](https://wodby.com/stacks/drupal/docs/local/quick-start/).

Therefore set the permissions (works for Ubuntu). Execute in the root folder of the repo:

```
sudo chown -R 82:alpine-www-data .
sudo setfacl -dR -m u:$(whoami):rwX -m u:21:rX -m u:82:rwX  .
sudo setfacl -R -m u:$(whoami):rwX -m u:21:rX -m u:82:rwX .

```

Run the following command to start the containers: `docker-compose up -d`

You should now be able to connect to the container on [http://d8-react.docker.localhost:8000](http://d8-react.docker.localhost:8000).

If you're starting from scratch there will be a "File not found"-error, as the backend is not installed yet (see next section).

## Installation instructions - backend

The backend (Drupal) part is based on the drupal-composer project, so that [most of its' documentation](https://github.com/drupal-composer/drupal-project) should apply here too.

Connect to the started container by `docker-compose run php bash`. Once inside the container change into the `/backend` folder and run `composer update` to get files needed for your Drupal installation.

In order to use the configuration through the config_installer profile add this to you `settings.php`:

`$settings['install_profile'] = 'config_installer';`

Run `drush si config_installer --db-url=mysql://drupal:drupal@mariadb/drupal --account-pass=admin --yes` inside your `/backend/web` folder in the container.

You should now be able to see a fully installed Drupal 8 at [http://d8-react.docker.localhost:8000](http://d8-react.docker.localhost:8000).

## Installation instructions - frontend

The frontend (React) part is based on the create-react-app project, so that [most of its' documentation](https://github.com/facebookincubator/create-react-app) should apply here too.

Run `npm start` or `yarn` inside your `/frontend` folder to download the dependencies.

To run the app execute `npm start` or `yarn start` inside your `/frontend` folder.

Open [http://localhost:3000](http://localhost:3000) to view it in the browser.

## Connect the app with the backend

Drupal is configured to not allow sending content to a different domain than its own. Following needs to be done:

Copy `/backend/web/sites/default/default.services.yml` to `/backend/web/sites/default/services.yml` and change following values:

```
  cors.config:
    enabled: true
    # Specify allowed headers, like 'x-allowed-header'.
    allowedHeaders: ['Content-Type', 'Access-Control-Allow-Origin']
    # Specify allowed request methods, specify ['*'] to allow all possible ones.
    allowedMethods: ['*']
```

Clear the cache, so that the changes take effect.

Note, there is not authentication in the app (yet), so anonymous user in Drupal are assigned the permission "Execute arbitrary GraphQL requests".
