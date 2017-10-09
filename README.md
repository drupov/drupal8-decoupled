# Drupal 8 and React

## Installation instructions - backend

The backend (Drupal) part is based on the drupal-composer project, so that [most of its' documentation](https://github.com/drupal-composer/drupal-project) should apply here too.

Run `composer update` inside root folder to get files needed for your Drupal installation.

In order to use the configuration through the config_installer profile add this to you settings.php

`$settings['install_profile'] = 'config_installer';`

Run `drush si config_installer --db-url=mysql://root:@localhost/d8_react --account-pass=admin --yes` inside your `web` folder (change the appropriate credentials and database names).

## Installation instructions - frontend

The frontend (React) part is based on the create-react-app project, so that [most of its' documentation](https://github.com/facebookincubator/create-react-app) should apply here too.

Run `npm start` or `yarn start` inside your frontend folder.

Open [http://localhost:3000](http://localhost:3000) to view it in the browser.
