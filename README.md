# Gesso

Gesso is a [Sass](http://sass-lang.com/)-based starter theme that outputs
accessible HTML5 markup. It uses a mobile-first responsive approach and
leverages [SMACSS](https://smacss.com/) to organize styles as outlined in the
[Drupal 8 CSS architecture guidelines](https://www.drupal.org/node/1887918).
This encourages a component-based approach to theming through the creation of
discrete, reusable UI elements.

For a full description of this theme, view the
[Gesso project page](https://drupal.org/project/gesso/). To submit bug reports
or feature requests, visit the
[Gesso issue queue](https://drupal.org/project/issues/gesso/).


## Requirements

This theme requires the following Drupal modules:

* [HTML5 Tools](https://drupal.org/project/html5_tools): Provides HTML5 elements
for use in fields and forms, updates Drupal core markup to match HTML5
standards, and streamlines CSS and JavaScript tags.

* [Magic](https://drupal.org/project/magic): Provides advanced CSS/JavaScript
handling and includes theme development enhancements.

If you want to take advantage of Sass, [Ruby](https://www.ruby-lang.org/) is
required to compile it into CSS using [Compass](http://compass-style.org/).
Check out the README within the sass directory for more information.


## Recommended modules

* [Blockify](https://drupal.org/project/blockify): Exposes a number of core
  Drupal elements, traditionally found in page.tpl.php, as blocks. This theme
  does not include these items in page.tpl.php to allow greater flexibility in
  where they can be placed.

* [Clean Markup](https://drupal.org/project/clean_markup): Allows you to control
  the markup of blocks, panel regions, and panel panes via the UI.

* [Modernizr](https://drupal.org/project/modernizr): Provides deep integration
  with the Modernizr JS library, allowing modules and themes to register tests
  and load additional assets as needed.


## Installation

1.  Place the Gesso theme in your site’s theme directory.
    (e.g., sites/all/themes/gesso) Read documentation on
    [installing themes](https://drupal.org/getting-started/install-contrib/themes)
    for more information.

2.  Because Gesso is a starter theme, it is not meant to be used directly.
    Instead, you should rename the Gesso directory or copy its contents to a new
    custom theme directory.

    Replace all instances of 'gesso' within this directory with a machine-
    readable name of your choice, including folder names, filenames, and all
    occurences within files. This custom name must start with a letter and may
    only contain lowercase letters, numbers, and underscores.

3.  Edit the .info file and update the theme name and description. You can also
    change the screenshot image (images/screenshot.png) shown on the Appearance
    admin page.


## Configuration

Gesso includes a theme-specific setting to output only SMACSS classes, which you
can change at admin/appearance/settings/gesso.


## Maintainers

The Gesso theme is maintained by [Dan Mouyard](https://drupal.org/u/dcmouyard)
([@dcmouyard](http://twitter.com/dcmouyard)) and
[Corey Lafferty](https://drupal.org/u/clafferty)
([@coreylafferty](http://twitter.com/coreylafferty)).