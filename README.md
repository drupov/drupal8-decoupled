# Drupal 8 and React

## Lando

The backend runs on a [lando](https://docs.devwithlando.io/tutorials/drupal8.html) environment with with PHP 7.1.

Run the following command to start the lando environment: `lando start`

You should now be able to connect to the container on [https://d8-react.lndo.site](https://d8-react.lndo.site).

If you're starting from scratch there will be a "File not found"-error, as the backend is not installed yet (see next section).

## Installation instructions - backend

The backend (Drupal) part is based on the drupal-composer project, so that [most of its' documentation](https://github.com/drupal-composer/drupal-project) should apply here too.

Change into the `/backend` folder and run `lando composer update` to get files needed for your Drupal installation.

In order to use the configuration through the config_installer profile add this to you `settings.php`:

`$settings['install_profile'] = 'config_installer';`

Run `lando drush si config_installer --db-url=mysql://drupal8:drupal8@database/drupal8 --account-pass=admin --yes` inside your `/backend/web` folder in the container.

You should now be able to see a fully installed Drupal 8 at [https://d8-react.lndo.site](https://d8-react.lndo.site).

## Installation instructions - frontend

The frontend (React) part is based on the create-react-app project, so that [most of its' documentation](https://github.com/facebookincubator/create-react-app) should apply here too.

Run `npm install` or `yarn install` inside your `/frontend` folder to download the dependencies.

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
