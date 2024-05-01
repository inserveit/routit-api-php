## Requirements
[![PHP Version Require](https://poser.pugx.org/inserve/routit-api-php/require/php)](https://packagist.org/packages/inserve/routit-api-php)

## Status

![workflow](https://github.com/inserveit/routit-api-php/actions/workflows/build-actions.yml/badge.svg)
[![Latest Stable Version](https://poser.pugx.org/inserve/routit-api-php/v)](https://packagist.org/packages/inserve/routit-api-php)
[![Latest Unstable Version](https://poser.pugx.org/inserve/routit-api-php/v/unstable)](https://packagist.org/packages/inserve/routit-api-php)
[![License](https://poser.pugx.org/inserve/routit-api-php/license)](https://packagist.org/packages/inserve/routit-api-php)

# About
A PHP Wrapper for the RoutIT API

## Installation
`composer require inserve/routit-api-php`

## Usage example

```php
<?php

use Inserve\RoutITAPI\RoutITAPIClient;

require 'vendor/autoload.php';

$apiClient = new RoutITAPIClient(
    baseUri: 'https://example-uri.com'
);

$apiClient->configure(
    'username',
    'password',
    'interfaces/routit/id'
);

$result = $apiClient->getCustomerData(take: 5);

```
