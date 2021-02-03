
reservedseating
===============
Reserved/Allocated/Assigned Seating for Venues and Events

![Build Status](https://mindpowered.dev/assets/images/github-badges/build-passing.svg)

Contents
========

* [Source Code and Documentation](#source-code-and-documentation)
* [About](#about)
* [Requirements](#requirements)
* [Installation](#installation)
* [Usage](#usage)
* [Support](#support)
* [Licensing](#licensing)

# Source Code and Documentation
- Source Code: [https://github.com/mindpowered/reserved-seating-php](https://github.com/mindpowered/reserved-seating-php)
- Documentation: [https://mindpowered.github.io/reserved-seating-php](https://mindpowered.github.io/reserved-seating-php)

# About
Reserved seating is when each event ticket has a specific seat. That is, attendees will know where they will sit ahead of time. Seats are usually identified by row and seat using numbers or letters.

Venues may be set up for different types of events. In this case, the seating configuration, and seats available, will change.

Buying tickets for a reserved seating event can end in disappointment. Unless a system is in place that can hold a seat, they may sell out during the sale process. The system must also have a time limit on holds to make sure enough seats are available to buy. Holds should only last until the sale process is complete or expired. Expired holds should release the seats for sale again. Holds should only last long enough to complete the sale process.

This package aims to reserve seats for a venue and event and allow booking with holds that expire.

# Requirements
- php >= 7
- php `mbstring` extension
- php `xml` extension


Third-party dependencies may have additional requirements.

# Installation

You can get reservedseating using Composer. Composer manages dependencies for packages from Packagist and you can get it here: <https://getcomposer.org/> .

Create a composer.json file in the top-most directory of your project and add `mindpowered/reservedseating` to the requirements:
```
{
        "require": {
                "mindpowered/reservedseating" : "*"
        }
}
```
Now you can run the command to update composer: `composer update`. In order for composer to install the package dependencies you will need an archive manager such as zip installed. Composer requires use of the commands `zip` and `unzip`.


# Usage
```php
require __DIR__ . '/vendor/autoload.php';

use \mindpowered\reservedseating\ReservedSeating;

$rs = new ReservedSeating();
$rs->CreateVenue("123", "Venue 1", "250")

```


# Support
We are here to support using this package. If it doesn't do what you're looking for, isn't working, or you just need help, please [Contact us][contact].

There is also a public [Issue Tracker][bugs] available for this package.

# Licensing
This package is released under the MIT License.



[bugs]: https://github.com/mindpowered/reserved-seating-php/issues
[contact]: https://mindpowered.dev/support/?ref=reserved-seating-php/
[docs]: https://mindpowered.github.io/reserved-seating-php/
[licensing]: https://mindpowered.dev/?ref=reserved-seating-php
[purchase]: https://mindpowered.dev/purchase/
