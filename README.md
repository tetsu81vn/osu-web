osu!web
=======

[![Build Status](https://travis-ci.org/ppy/osu-web.svg?branch=master)](https://travis-ci.org/ppy/osu-web)

The future face of osu!.

Requirements
------------

- A PHP 7.0 (or equivalent) environment
- MySQL 5.7+

For full support, we also recommend

- Redis
- Elasticsearch

Deploying
---------

### Environment

There are a few different options to get started:

- Create a fresh Ubuntu environment and run `sudo bootstrap.sh`. Note that this script is intended to be run on a *sandboxed environment*; do not run it on a shared development system without first understanding what it does.
- Use the php built-in server (run `php -S 127.0.0.1:8080` from the `public` folder). You will still need a database backend.
- Use vagrant (`cd vagrant; vagrant up`). Note that this is not actively supported or tested, and it is known to be quite slow on some platforms.
- Use your existing web dev environment.

### Creating user

    C:\osu-web\vagrant> vagrant ssh
    $ cd /data/osu\!web
    $ php artisan tinker
    >>> App\Models\User::create(["username" => "yourusername", "user_password" => password_hash(md5("yourpassword"), PASSWORD_BCRYPT)]);

### Generating assets

Using Laravel's [Elixir](http://laravel.com/docs/5.1/elixir).

    C:\osu-web\vagrant> vagrant ssh
    $ cd /data/osu\!web
    $ php artisan lang:js resources/assets/js/messages.js
    $ ./node_modules/.bin/gulp

### Reset the database + Seeding sample data

    C:\osu-web\vagrant> vagrant ssh
    $ cd /data/osu\!web
    $ php artisan migrate:refresh --seed

Run the above command to rebuild the database and seed with sample data. In order for the seeder to seed beatmaps, you must enter a valid osu! API key into your .env configuration file as it obtains beatmap data from the osu! API.

Developing
---------

### Generating assets while developing

To continuously generate assets as you make changes to files (less, coffeescript) you can run `gulp` in `watch` mode.

    $ ./node_modules/.bin/gulp watch

### Use of React vs Laravel Blade templates

For the time being, using React is generally preferred for pages which involve interaction beyond simple hyperlinks (ie. when state is present that can be modified by the user) or when real-time changes are presented to the user (ie. the state is volatile depending on back-end updates).

### Use of BEM for CSS naming

Much of the CSS present abides to [BEM](http://getbem.com/) conventions but there is also a fair deal that doesn't. We haven't come to a unanimous decision about how to proceed going forward, so please use your own discretion or continue the discussion in the relevant [issue](https://github.com/ppy/osu-web/issues/53).

Contributing
------------

We welcome all contributions, but keep in mind that we already have the full site designed (mock-ups). If you wish to work on a new section, please open a ticket and we will give you what you need from a design perspective to proceed. If you want to make *changes* to the design, we recommend you open an issue with your intentions before spending too much time, to ensure no effort is wasted.

Contributions can be made via pull requests to this repository. We hope to credit and reward larger contributions via a [bounty system](https://goo.gl/nFdoyI). If you're unsure of what you can help with, check out the [list](https://github.com/ppy/osu-web/issues?utf8=%E2%9C%93&q=is%3Aissue+is%3Aopen+label%3Abounty) of available issues with bounty.

Note that while we already have certain standards in place, nothing is set in stone. If you have an issue with the way code is structured; with any libraries we are using; with any processes involved with contributing, *please* bring it up. I welcome all feedback so we can make contributing to this project as easy as possible.

Seeking Help
------------

If you need help with anything, you have two options:

#### Create an Issue

If you have something you want to discuss in detail, or have hit an issue which you believe others will also have in deployment or development on the system, [opening an issue](https://github.com/ppy/osu-web/issues) is the best way to get help. It creates a permanent resource for others wishing to contribute to conversation. Please **make sure to search first** in case someone else has already addressed the same issue!

Licence
-------

osu!web is licensed under AGPL version 3 or later. Please see [the licence file](LICENCE) for more information. [tl;dr](https://tldrlegal.com/license/gnu-affero-general-public-license-v3-(agpl-3.0)) if you want to use any code, design or artwork from this project, attribute it and make your project open source under the same licence.
