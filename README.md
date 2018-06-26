<p align="center">
  <img src="https://cdn.rawgit.com/mister-bk/craft-mix/master/resources/img/craft-mix-logo.svg" alt="Craft Mix Logo">
</p>

<p align="center">
  Helper plugin for <a href="https://github.com/JeffreyWay/laravel-mix/">Laravel Mix</a> in <a href="https://github.com/craftcms/cms/">Craft CMS</a> templates.
</p>

## Requirements

This plugin requires Craft CMS 2.5.0 or later.

## Installation

To install the plugin, follow these instructions.

1. Download the latest release from [here](https://github.com/mister-bk/craft-mix/releases).

2. Unzip the file and place the `mix` directory into your `craft/plugins` directory.

3. In the Craft Control Panel, go to Settings → Plugins and click the "Install" button for **Mix**.

## Configuration

To configure Mix go to Settings → Plugins → Mix in the Craft Control Panel.

The available settings are:

  * **Public Path** - The path of the public directory containing the index.php
  * **Asset Path** - The path of the asset directory where Laravel Mix stores the compiled files

> **NOTE:** Both **Public Path** and **Asset Path** get trimmed to enabled all kind of path combinations. Here are some examples:
>  * `/web/` + `/assets/` → `/web/assets/`
>  * `web` + `assets` → `/web/assets/`
>  * `/` + `assets` → `/assets/`
>  * `/web` + `/` → `/web/`

## Usage

Find a versioned CSS file.
```twig
<link rel="stylesheet" href="{{ mix('css/main.css') }}">
```

Find a versioned JavaScript file.
```twig
<script src="{{ mix('js/main.js') }}"></script>
```

Lazily find a versioned file and build the tag based on the file extension.
```twig
{{ craft.mix.withTag('js/main.js') | raw }}
```

Alternatively include the content of a versioned file inline.
```twig
{{ craft.mix.withTag('css/main.css', true) | raw }}
```

## License

Craft Mix is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT/).
