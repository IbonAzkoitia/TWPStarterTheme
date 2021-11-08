TWP Starter Theme
===

Installation
---------------

### Requirements

`Trinchera WP Starter Theme` requires the following dependencies:

- [Node.js](https://nodejs.org/)
- [Composer](https://getcomposer.org/)

### Quick Start

Clone or download this repository, change its name to something else (like, say, `my-awesome-project`), and then you'll need to do a four-step find and replace on the name in all the templates.

1. Search for `'twp'` (inside single quotations) to capture the text domain and replace with: `'my-awesome-project'`.
2. Search for `_twp_` to capture all the functions names and replace with: `my_awesome_project`.
3. Search for `Text Domain: twp` in `style.css` and replace with: `Text Domain: my-awesome-project`.
4. Search for `_TWP_` (in uppercase) to capture constants and replace with: `MY_AWESOME_PROJECT_`.

Then, update the stylesheet header in `style.css`. Next, update or delete this readme.

### Setup

To start using all the tools that come with `Trinchera WP Starter Theme`  you need to install the necessary Node.js and Composer dependencies :

```sh
$ composer install
$ npm install
```

### Available CLI commands

`Trinchera WP Starter Theme` comes packed with CLI commands tailored for WordPress theme development :

- `npm run watch` : watches all the css/Tailwind files and recompiles them to css when they change.
- `npm run prod` : generates the files ready for production.

Now you're ready to go!
