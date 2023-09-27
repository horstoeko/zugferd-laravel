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
    - [Create a new Document Builder in the MINIMUM-Profile](#create-a-new-document-builder-in-the-minimum-profile)
    - [Create a new Document Builder in the BASIC-Profile](#create-a-new-document-builder-in-the-basic-profile)
    - [Create a new Document Builder in the BASIC-WL-Profile](#create-a-new-document-builder-in-the-basic-wl-profile)
    - [Create a new Document Builder in the EN16931-Profile (COMFORT-Profile)](#create-a-new-document-builder-in-the-en16931-profile-comfort-profile)
    - [Create a new Document Builder in the EXTENDED-Profile](#create-a-new-document-builder-in-the-extended-profile)
    - [Create a new Document Builder in the XRECHNUNG-Profile (Version 2.2)](#create-a-new-document-builder-in-the-xrechnung-profile-version-22)
    - [Create a new Document Builder in the XRECHNUNG-Profile (Version 2.3)](#create-a-new-document-builder-in-the-xrechnung-profile-version-23)
    - [Create a new Document Builder in the XRECHNUNG-Profile (Version 3.0)](#create-a-new-document-builder-in-the-xrechnung-profile-version-30)
    - [Create a Document Reader from an existing XML file](#create-a-document-reader-from-an-existing-xml-file)
    - [Create a Document Reader from an XML string](#create-a-document-reader-from-an-xml-string)
    - [Create a Document Reader from an existing PDF file (which has an attached XML file)](#create-a-document-reader-from-an-existing-pdf-file-which-has-an-attached-xml-file)
    - [Create a merged PDF (XML as attachment) by the output of a ZugferdDocumentBuilder](#create-a-merged-pdf-xml-as-attachment-by-the-output-of-a-zugferddocumentbuilder)
    - [Create a merged PDF by an existing XML file and existing PDF file](#create-a-merged-pdf-by-an-existing-xml-file-and-existing-pdf-file)
    - [Create a merged PDF by an existing XML data string and existing PDF file](#create-a-merged-pdf-by-an-existing-xml-data-string-and-existing-pdf-file)
    - [Create a merged PDF by an existing XML file and a PDF data string](#create-a-merged-pdf-by-an-existing-xml-file-and-a-pdf-data-string)
    - [Create a merged PDF by an existing XML data string and a PDF data string](#create-a-merged-pdf-by-an-existing-xml-data-string-and-a-pdf-data-string)

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

This package provides a facade ```ZugferdLaravel``` which is used in the following examples.

Just add an use clause in the form of

```php
use horstoeko\zugferdlaravel\Facades\ZugferdLaravel;
```

### Create a new Document Builder in the MINIMUM-Profile

```php
$document = ZugferdLaravel::createDocumentInMinimumProfile();
```

### Create a new Document Builder in the BASIC-Profile

```php
$document = ZugferdLaravel::createDocumentInBasicProfile();
```

### Create a new Document Builder in the BASIC-WL-Profile

```php
$document = ZugferdLaravel::createDocumentInBasicWlProfile();
```

### Create a new Document Builder in the EN16931-Profile (COMFORT-Profile)

```php
$document = ZugferdLaravel::createDocumentInEN16931Profile();
```

### Create a new Document Builder in the EXTENDED-Profile

```php
$document = ZugferdLaravel::createDocumentInExtendedProfile();
```

### Create a new Document Builder in the XRECHNUNG-Profile (Version 2.2)

```php
$document = ZugferdLaravel::createDocumentInXRechnung22Profile();
```

### Create a new Document Builder in the XRECHNUNG-Profile (Version 2.3)

```php
$document = ZugferdLaravel::createDocumentInXRechnung23Profile();
```

### Create a new Document Builder in the XRECHNUNG-Profile (Version 3.0)

```php
$document = ZugferdLaravel::createDocumentInXRechnung30Profile();
```

### Create a Document Reader from an existing XML file

```php
$document = ZugferdLaravel::readXmlFromFile('/path/to/file.xml');
```

### Create a Document Reader from an XML string

```php
$document = ZugferdLaravel::readXmlFromString('<xml>...</xml>');
```

### Create a Document Reader from an existing PDF file (which has an attached XML file)

```php
$document = ZugferdLaravel::readXmlFromPdfFile('/path/to/file.pdf');
```

### Create a merged PDF (XML as attachment) by the output of a ZugferdDocumentBuilder

```php
$document = ZugferdDocumentBuilder::CreateNew(ZugferdProfiles::PROFILE_EN16931);
  $document
    ->setDocumentInformation("471102", "380", \DateTime::createFromFormat("Ymd", "20180305"), "EUR")
    ->....

ZugferdLaravel::buildMergedPdfByDocumentBuilder($document, '/path/to/existing.pdf', '/path/to/merged.pdf');
```

### Create a merged PDF by an existing XML file and existing PDF file

```php
$xmlDataOrFilename = '/path/to/file.xml';
$pdfDataOrFilename = '/path/to/file.pdf';
$mergedPdfFilename = '/path/to/merged.pdf';

ZugferdLaravel::buildMergedPdfByXmlDataOrXmlFilename($xmlDataOrFilename, $pdfDataOrFilename, $mergedPdfFilename);
```

### Create a merged PDF by an existing XML data string and existing PDF file

```php
$xmlDataOrFilename = '<?xml version="1.0" encoding="UTF-8"?><rsm:CrossIndustryInvoice.....';
$pdfDataOrFilename = '/path/to/file.pdf';
$mergedPdfFilename = '/path/to/merged.pdf';

ZugferdLaravel::buildMergedPdfByXmlDataOrXmlFilename($xmlDataOrFilename, $pdfDataOrFilename, $mergedPdfFilename);
```

### Create a merged PDF by an existing XML file and a PDF data string

```php
$xmlDataOrFilename = '/path/to/file.xml';
$pdfDataOrFilename = '%PDF-1.5....';
$mergedPdfFilename = '/path/to/merged.pdf';

ZugferdLaravel::buildMergedPdfByXmlDataOrXmlFilename($xmlDataOrFilename, $pdfDataOrFilename, $mergedPdfFilename);
```

### Create a merged PDF by an existing XML data string and a PDF data string

```php
$xmlDataOrFilename = '<?xml version="1.0" encoding="UTF-8"?><rsm:CrossIndustryInvoice....';
$pdfDataOrFilename = '%PDF-1.5....';
$mergedPdfFilename = '/path/to/merged.pdf';

ZugferdLaravel::buildMergedPdfByXmlDataOrXmlFilename($xmlDataOrFilename, $pdfDataOrFilename, $mergedPdfFilename);
```
