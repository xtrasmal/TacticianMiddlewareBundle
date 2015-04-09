# TacticianMiddlewareBundle
[![Build Status](https://travis-ci.org/xtrasmal/TacticianMiddlewareBundle.svg)](https://travis-ci.org/xtrasmal/TacticianMiddlewareBundle)

Friendly companion bundle for the TacticianBundle, stacked with middleware
Tactician Bundle can be found here: [https://github.com/xtrasmal/TacticianBundle](https://github.com/xtrasmal/TacticianBundle)

## Setup 
First add this bundle to your composer dependencies:

`> composer require xtrasmal\tactician-middleware-bundle`

Then register it in your AppKernel.php.

```php
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Xtrasmal\TacticianMiddlewareBundle\TacticianMiddlewareBundle(),
            // ...
```

That's it! 