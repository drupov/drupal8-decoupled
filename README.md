# Drupal 8 and React

## Installation instructions - backend

The backend (Drupal) part is based on the drupal-composer project, so that [most of its' documentation](https://github.com/drupal-composer/drupal-project) should apply here too.

Run `composer update` inside root folder to get files needed for your Drupal installation.

In order to use the configuration through the config_installer profile add this to you settings.php

`$settings['install_profile'] = 'config_installer';`

Run `drush si config_installer --db-url=mysql://root:@localhost/d8_react --account-pass=admin --yes` inside your `web` folder (change the appropriate credentials and database names).

## Installation instructions - frontend

The frontend (React) part is based on the create-react-app project, so that [most of its' documentation](https://github.com/facebookincubator/create-react-app) should apply here too.

Run `npm init` or `yarn` inside your `frontend` folder to download the dependencies.

To run the app execute `npm start` or `yarn start` inside your `frontend` folder.

Open [http://localhost:3000](http://localhost:3000) to view it in the browser.

## Connect the app with the backend

Drupal is configured to not allow sending content to a different domain than its own. Following needs to be done:

Copy `/web/sites/default/default.services.yml` to `/web/sites/default/services.yml` and change following values:

```
  cors.config:
    enabled: true
    # Specify allowed headers, like 'x-allowed-header'.
    allowedHeaders: ['Content-Type', 'Access-Control-Allow-Origin']
    # Specify allowed request methods, specify ['*'] to allow all possible ones.
    allowedMethods: ['*']
```

Clear the cache, so that the changes take effect.

You'll also need to set the correct graphql endpoint URL (http://drupal-installation.dev/graphql) in `createBatchingNetworkInterface` in the App.js.

Note, there is not authentication in the app (yet), so anonymous user in Drupal are assigned the permission "Execute arbitrary GraphQL requests".
