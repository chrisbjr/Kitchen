## Setting up Sentry

Migrate the database

    $ php artisan migrate --path=vendor/chrisbjr/kitchen/vendor/cartalyst/sentry/src/migrations

Publish configuration

    $ php artisan config:publish --path=vendor/chrisbjr/kitchen/vendor/cartalyst/sentry/src/config cartalyst/sentry

