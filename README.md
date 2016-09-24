This is a module for Jelix, that show a very simple controller.


Installation
============

Install it by hands like any other Jelix modules, or use Composer if you installed
Jelix 1.6.9+ with Composer.

In your project:

```
composer require "jelix/helloworld-module"
```


Then declare the module into the configuration of your application

```ini
[modules]

helloworld.access=2
```

And then:

```
php yourapp/cmd.php install
```
