# Cryptographers

Cryptographer is a [PHP](http://php.net) library that takes care of the common encryption task in communitiy

[![contributions welcome](https://img.shields.io/badge/contributions-welcome-brightgreen.svg?style=flat)](https://github.com/bariseser/cryptographers/issues)
[![Latest Stable Version](https://poser.pugx.org/bariseser/cryptographers/v/stable)](https://packagist.org/packages/bariseser/cryptographers)
[![Total Downloads](https://poser.pugx.org/bariseser/cryptographers/downloads)](https://packagist.org/packages/bariseser/cryptographers)
[![License](https://poser.pugx.org/bariseser/cryptographers/license)](https://packagist.org/packages/bariseser/cryptographers)
[![Build Status](https://travis-ci.org/bariseser/cryptographers.svg?branch=master)](https://travis-ci.org/bariseser/cryptographers)

Features
---

* Data Encryption
* Data Decryption
* Random Salt Generator
* 173 Algorithm

System requirements
---
* PHP >= 5.6
* openSSL

Example
---
````php
use Bariseser\Cryptographers;

//get all Algorithm
Cryptographers::getCipherMethods()

//Encode:
$encoded = Cryptographers::encrypt("Hello World");

//Decode:
$decoded = Cryptographers::decrypt($encoded);

echo  $encoded.PHP_EOL;
echo  $decoded.PHP_EOL;

//Output: 
//bMhFJ86i3GckUaoq.FTAdoRaUOrs79Rs=
//Hello World

//Get Random Salt
Cryptographers::getRandomByte();
````

Supportted Algorithm
---
* AES-128-CBC
* AES-128-CBC-HMAC-SHA1
* AES-128-CFB
* AES-128-CFB1
* AES-128-CFB8
* AES-128-CTR
* AES-128-ECB
* AES-128-OFB
* AES-128-XTS
* AES-192-CBC
* AES-192-CFB
* AES-192-CFB1
* AES-192-CFB8
* AES-192-CTR
* AES-192-ECB
* AES-192-OFB
* AES-256-CBC
* AES-256-CBC-HMAC-SHA1
* AES-256-CFB
* AES-256-CFB1
* AES-256-CFB8
* AES-256-CTR
* AES-256-ECB
* AES-256-OFB
* AES-256-XTS
* BF-CBC
* BF-CFB
* BF-ECB
* BF-OFB
* CAMELLIA-128-CBC
* CAMELLIA-128-CFB
* CAMELLIA-128-CFB1
* CAMELLIA-128-CFB8
* CAMELLIA-128-ECB
* CAMELLIA-128-OFB
* CAMELLIA-192-CBC
* CAMELLIA-192-CFB
* CAMELLIA-192-CFB1
* CAMELLIA-192-CFB8
* CAMELLIA-192-ECB
* CAMELLIA-192-OFB
* CAMELLIA-256-CBC
* CAMELLIA-256-CFB
* CAMELLIA-256-CFB1
* CAMELLIA-256-CFB8
* CAMELLIA-256-ECB
* CAMELLIA-256-OFB
* CAST5-CBC
* CAST5-CFB
* CAST5-ECB
* CAST5-OFB
* DES-CBC
* DES-CFB
* DES-CFB1
* DES-CFB8
* DES-ECB
* DES-EDE
* DES-EDE-CBC
* DES-EDE-CFB
* DES-EDE-OFB
* DES-EDE3
* DES-EDE3-CBC
* DES-EDE3-CFB
* DES-EDE3-CFB1
* DES-EDE3-CFB8
* DES-EDE3-OFB
* DES-OFB
* DESX-CBC
* IDEA-CBC
* IDEA-CFB
* IDEA-ECB
* IDEA-OFB
* RC2-40-CBC
* RC2-64-CBC
* RC2-CBC
* RC2-CFB
* RC2-ECB
* RC2-OFB
* RC4
* RC4-40
* RC4-HMAC-MD5
* SEED-CBC
* SEED-CFB
* SEED-ECB
* SEED-OFB
* aes-128-cbc
* aes-128-cbc-hmac-sha1
* aes-128-ccm
* aes-128-cfb
* aes-128-cfb1
* aes-128-cfb8
* aes-128-ctr
* aes-128-ecb
* aes-128-gcm
* aes-128-ofb
* aes-128-xts
* aes-192-cbc
* aes-192-ccm
* aes-192-cfb
* aes-192-cfb1
* aes-192-cfb8
* aes-192-ctr
* aes-192-ecb
* aes-192-gcm
* aes-192-ofb
* aes-256-cbc
* aes-256-cbc-hmac-sha1
* aes-256-ccm
* aes-256-cfb
* aes-256-cfb1
* aes-256-cfb8
* aes-256-ctr
* aes-256-ecb
* aes-256-gcm
* aes-256-ofb
* aes-256-xts
* bf-cbc
* bf-cfb
* bf-ecb
* bf-ofb
* camellia-128-cbc
* camellia-128-cfb
* camellia-128-cfb1
* camellia-128-cfb8
* camellia-128-ecb
* camellia-128-ofb
* camellia-192-cbc
* camellia-192-cfb
* camellia-192-cfb1
* camellia-192-cfb8
* camellia-192-ecb
* camellia-192-ofb
* camellia-256-cbc
* camellia-256-cfb
* camellia-256-cfb1
* camellia-256-cfb8
* camellia-256-ecb
* camellia-256-ofb
* cast5-cbc
* cast5-cfb
* cast5-ecb
* cast5-ofb
* des-cbc
* des-cfb
* des-cfb1
* des-cfb8
* des-ecb
* des-ede
* des-ede-cbc
* des-ede-cfb
* des-ede-ofb
* des-ede3
* des-ede3-cbc
* des-ede3-cfb
* des-ede3-cfb1
* des-ede3-cfb8
* des-ede3-ofb
* des-ofb
* desx-cbc
* id-aes128-CCM
* id-aes128-GCM
* id-aes128-wrap
* id-aes192-CCM
* id-aes192-GCM
* id-aes192-wrap
* id-aes256-CCM
* id-aes256-GCM
* id-aes256-wrap
* id-smime-alg-CMS3DESwrap
* idea-cbc
* idea-cfb
* idea-ecb
* idea-ofb
* rc2-40-cbc
* rc2-64-cbc
* rc2-cbc
* rc2-cfb
* rc2-ecb
* rc2-ofb
* rc4
* rc4-40
* rc4-hmac-md5
* seed-cbc
* seed-cfb
* seed-ecb
* seed-ofb

Getting help / Contact
---
* bariseser@gmail.com
* [Issue](https://github.com/bariseser/cryptographers/issues)

Contributing
---
1 - Fork the Project

2 - Ensure you have Composer installed (see Composer Download Instructions)

3 - Install Development Dependencies

```bash
composer install
```

4 - Run the Test Suite
```bash
vendor/bin/phpunit
```

5 - Send us a Pull Request



