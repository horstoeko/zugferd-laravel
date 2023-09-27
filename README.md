# ZUGFeRD/XRechnung/Factur-X for Laravel

[![Latest Stable Version](https://poser.pugx.org/horstoeko/zugferd-laravel/v/stable.png)](https://packagist.org/packages/horstoeko/zugferd-laravel) [![Total Downloads](https://poser.pugx.org/horstoeko/zugferd-laravel/downloads.png)](https://packagist.org/packages/horstoeko/zugferd-laravel) [![Latest Unstable Version](https://poser.pugx.org/horstoeko/zugferd-laravel/v/unstable.png)](https://packagist.org/packages/horstoeko/zugferd-laravel) [![License](https://poser.pugx.org/horstoeko/zugferd/license.png)](https://packagist.org/packages/horstoeko/zugferd) [![Gitter](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/horstoeko/zugferd)

[![CI (Ant, PHP 7.3)](https://github.com/horstoeko/zugferd-laravel/actions/workflows/build.php73.ant.yml/badge.svg)](https://github.com/horstoeko/zugferd-laravel/actions/workflows/build.php73.ant.yml) [![CI (Ant, PHP 7.4)](https://github.com/horstoeko/zugferd-laravel/actions/workflows/build.php74.ant.yml/badge.svg)](https://github.com/horstoeko/zugferd-laravel/actions/workflows/build.php74.ant.yml) [![CI (PHP 8.0)](https://github.com/horstoeko/zugferd-laravel/actions/workflows/build.php80.ant.yml/badge.svg)](https://github.com/horstoeko/zugferd-laravel/actions/workflows/build.php80.ant.yml) [![CI (PHP 8.1)](https://github.com/horstoeko/zugferd-laravel/actions/workflows/build.php81.ant.yml/badge.svg)](https://github.com/horstoeko/zugferd-laravel/actions/workflows/build.php81.ant.yml)

A simple ZUGFeRD/XRechnung/Factur-X Library for Laravel

## Table of Contents

- [ZUGFeRD/XRechnung/Factur-X for Laravel](#zugferdxrechnungfactur-x-for-laravel)
  - [Table of Contents](#table-of-contents)
  - [License](#license)
  - [Overview](#overview)
  - [Dependencies](#dependencies)
  - [Installation](#installation)
  - [Usage](#usage)
    - [Create a new Document Builer in the MINIMUM-Profile](#create-a-new-document-builer-in-the-minimum-profile)
    - [Create a new Document Builer in the BASIC-Profile](#create-a-new-document-builer-in-the-basic-profile)
    - [Create a new Document Builer in the BASIC-WL-Profile](#create-a-new-document-builer-in-the-basic-wl-profile)
    - [Create a new Document Builer in the EN16931-Profile (COMFORT-Profile)](#create-a-new-document-builer-in-the-en16931-profile-comfort-profile)
    - [Create a new Document Builer in the EXTENDED-Profile](#create-a-new-document-builer-in-the-extended-profile)
    - [Create a new Document Builer in the XRECHNUNG-Profile (Version 2.2)](#create-a-new-document-builer-in-the-xrechnung-profile-version-22)

## License

The code in this project is provided under the [MIT](https://opensource.org/licenses/MIT) license.

## Overview

This library is an extension of the [horstoeko/zugferd](https://github.com/horstoeko/zugferd) library for the Laravel framework. It provides facades for communication with the underlying library [horstoeko/zugferd](https://github.com/horstoeko/zugferd).

## Dependencies

This package makes use of

- [horstoeko/zugferd](https://github.com/horstoeko/zugferd)

## Installation

There is one recommended way to install `horstoeko/zugferd-laravel` via [Composer](https://getcomposer.org/):

* adding the dependency to your ``composer.json`` file:

```js
  "require": {
      ..
      "horstoeko/zugferd-laravel":"^1",
      ..
  },
```

## Usage

In general, you should read the [documentation](https://github.com/horstoeko/zugferd/blob/master/README.md) and [examples](https://github.com/horstoeko/zugferd/tree/master/examples) of the ```horstoeko/zugferd``` library before using this library.

### Create a new Document Builer in the MINIMUM-Profile

```php
$documentBuilder = ZugferdLaravel::createDocumentInMinimumProfile();
```

### Create a new Document Builer in the BASIC-Profile

```php
$documentBuilder = ZugferdLaravel::createDocumentInBasicProfile();
```

### Create a new Document Builer in the BASIC-WL-Profile

```php
$documentBuilder = ZugferdLaravel::createDocumentInBasicWlProfile();
```

### Create a new Document Builer in the EN16931-Profile (COMFORT-Profile)

```php
$documentBuilder = ZugferdLaravel::createDocumentInEN16931Profile();
```

### Create a new Document Builer in the EXTENDED-Profile

```php
$documentBuilder = ZugferdLaravel::createDocumentInExtendedProfile();
```

### Create a new Document Builer in the XRECHNUNG-Profile (Version 2.2)

```php
$documentBuilder = ZugferdLaravel::createDocumentInXRechnungProfile();
```
