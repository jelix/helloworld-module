This is a module for Jelix, that show a very simple controller.


Installation
============

Install it by hands like any other Jelix modules, or use Composer if you installed
Jelix 1.6.9+ with Composer.

In your project:

```
composer require "jelix/helloworld-module"
```


In Jelix 1.6
------------


Declare the module into the configuration of your application, mainconfig.ini.php:

```ini
[modules]

helloworld.access=2
```

then launch the installer to activate the module

```bash
php yourapp/install/installer.php
```

In Jelix 1.7
------------

Launch the configurator for your application to enabling the module

```bash
php yourapp/cmd.php module:configure jfeeds
```

And then launch the installer to activate the module

```bash
php yourapp/install/installer.php
```
