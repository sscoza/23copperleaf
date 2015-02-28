Translation
=======

An extension of illuminate\translation.

Modules and plugins can have localization files in the /lang directory. Plugin and module localization files are registered automatically.

## Accessing localization strings

````
// Get a localization string from the CMS module
echo Lang::get('cms::errors.page.not_found');

// Get a localization string from the october/blog plugin.
echo Lang::get('october.blog::messages.post.added');
````

## Overriding localization strings

System users can override localization strings without altering the modules' and plugins' files. This is done by adding localization files to the app/lang directory. To override a plugin's localization:

````
app
  lang
    vendorname
      pluginname
        en
          file.php
````
Example: lang/october/blog/en/errors.php

To override a module's localization:

````
app
  lang
    modulename
      en
        file.php
````
Example: lang/cms/en/errors.php