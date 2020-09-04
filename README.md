TangoMan JsonDecode Twig Extension Bundle
=======================================

**TangoMan JsonDecode Twig Extension Bundle** allows to decode json string from twig.


How to install
--------------

With composer 

```console
$ composer require tangoman/jsonDecode-bundle
```


Enable the bundle
-----------------

Don't forget to enable the bundle in the kernel:

```php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new TangoMan\JsonDecodeBundle\TangoManJsonDecodeBundle(),
    );
}
```

You don't have to add **TangoMan JsonDecodeBundle** to the `service.yml` of your project.
**twig.extension.jsonDecode** service should load automatically.

Note
====

If you find any bug please report here : [Issues](https://github.com/TangoMan75/JsonDecodeBundle/issues/new)

License
=======

Copyrights (c) 2020 Matthias Morin

[![License][license-MIT]][license-url]
Distributed under the MIT license.

If you like **TangoMan JsonDecodeBundle** please star!
And follow me on GitHub: [TangoMan75](https://github.com/TangoMan75)
... And check my other cool projects.

[tangoman.free.fr](https://tangoman.io)

[license-MIT]: https://img.shields.io/badge/Licence-MIT-green.svg
[license-url]: LICENSE
