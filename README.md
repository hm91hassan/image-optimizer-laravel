

# Image Optimizer Laravel
Symple Image Optimizer for laravel

[![Latest Stable Version](https://poser.pugx.org/luova/imageoptimizer/v/stable)](https://packagist.org/packages/luova/imageoptimizer)
[![Total Downloads](https://poser.pugx.org/luova/imageoptimizer/downloads)](https://packagist.org/packages/luova/imageoptimizer)
[![Latest Unstable Version](https://poser.pugx.org/luova/imageoptimizer/v/unstable)](https://packagist.org/packages/luova/imageoptimizer)
[![License](https://poser.pugx.org/luova/imageoptimizer/license)](https://packagist.org/packages/luova/imageoptimizer)
[![Monthly Downloads](https://poser.pugx.org/luova/imageoptimizer/d/monthly)](https://packagist.org/packages/luova/imageoptimizer)
[![Daily Downloads](https://poser.pugx.org/luova/imageoptimizer/d/daily)](https://packagist.org/packages/luova/imageoptimizer)
[![composer.lock](https://poser.pugx.org/luova/imageoptimizer/composerlock)](https://packagist.org/packages/luova/imageoptimizer)



# Installation

```bash
composer require luova/imageoptimizer
```


# Setup

## 1.1 ) if you are using Laravel before version 5.4, manually register the service provider in your config/app.php file

```php
Luova\ImageOptimizer\ImageOptimizerServiceProvider::class,
```

## 1.2 ) Here's how you can use it:

```php

    use Luova\ImageOptimizer\Optimizer;

    $optimizer = new Optimizer();
    // first parameter for image file path, second parameter for where you want save optimize image and third parameter for image qualify
    $info = $optimizer->optimize($file, $optimize_path,80);

```


  

# Any query

* hm91hassan@gmail.com
