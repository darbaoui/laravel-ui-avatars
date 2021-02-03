# Laravel ui avatar generator based on  https://ui-avatars.com

<a href="https://github.styleci.io/repos/335413763"><img src="https://github.styleci.io/repos/335413763/shield?branch=master" alt="StyleCI Shield"></a>
<a href="https://travis-ci.com/darbaoui/laravel-ui-avatars"><img src="https://travis-ci.com/darbaoui/laravel-ui-avatars.svg" alt="build:passed"></a>
<a href="https://packagist.org/packages/darbaoui/laravel-ui-avatars"><img src="https://img.shields.io/packagist/dt/darbaoui/laravel-ui-avatars.svg?style=flat-square" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/darbaoui/laravel-ui-avatars"><img src="https://img.shields.io/packagist/v/darbaoui/laravel-ui-avatars.svg?style=flat-square" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/darbaoui/laravel-ui-avatars"><img src="https://img.shields.io/packagist/l/darbaoui/laravel-ui-avatars.svg?style=flat-square" alt="License"></a>

## Installation

This package requires Laravel 5.4 or higher.
if your laravel is > 5.4 you can skip the two steps (2, 3) below (Package Auto Discovery 5.5+).

1.  You can install the package via composer:

```bash
composer require darbaoui/laravel-ui-avatars
```

## Usage

```php

use Darbaoui\Avatar\Facades\Avatar;

// simple avatar 
Avatar::name('imad darbaoui')
        ->background('ffd1bf')
        ->color('ff4500');
// avatar = https://ui-avatars.com/api/?name=imad+darbaoui&background=ffd1bf&color=ff4500


// you can chain any other method if you want to add other parameters to your avatar
Avatar::name('imad darbaoui')
        ->size(124)
        ->rounded()
        ->uppercase(false)
        ->svg()
        ->background('ffd1bf')
        ->color('ff4500');
// avatar = https://ui-avatars.com/api/?size=124&rounded=1&uppercase=0&format=svg&name=imad+darbaoui&background=ffd1bf&color=ff4500
```

## Available methods

| methods                                        | description                                          | default value                                   |
| -------------------------------------------- | ---------------------------------------------- | ------------------------------------------- |
| `name()` | The name used to generate initials | `John Doe` |
| `size()` | Avatar image size in pixels. Between: 16 and 512 | `64` |
| `rounded()`    | Boolean specifying if the returned image should be a circle       |  `false`  |
| `uppercase()`    | Decide if the API should uppercase the name/initials.      | `true`      |
| `fontSize()`    | Font size in percentage of size. Between 0.1 and 1.      | `0.5`       |
| `background()`    | Hex color for the image background, without the hash (#)       | `f0e9e9`       |
| `color()`    | Hex color for the font, without the hash (#).     | `8b5d5d`       |
| `length()`    | Length of the generated initials.       | `2`      |
| `bold()`    | Boolean specifying if the returned letters should use a bold font. Default: false       | `false`      |
| `svg()`    |  Decide to the avatar should be return SVG     | `-`       |


