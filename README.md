# LarapiKit

[![Latest Stable Version](https://poser.pugx.org/your-vendor/your-package/v/stable)](https://packagist.org/packages/piratepixelx/larapikit)
[![Total Downloads](https://poser.pugx.org/your-vendor/your-package/downloads)](https://packagist.org/packages/piratepixelx/larapikit)
[![License](https://poser.pugx.org/your-vendor/your-package/license)](https://packagist.org/packages/piratepixelx/larapikit)

## Introduction

LarapiKit is a Laravel API package specifically crafted for sharing data from your Laravel website effortlessly using API keys. It simplifies the process of data sharing in Laravel applications, providing developers with time-saving, powerful security, easy integration, and an array of additional features.

## Features

- **Effortless Data Sharing:** Share data from your Laravel website seamlessly.
- **Robust Security:** Ensures data remains secure through API key authentication.
- **Simplified Integration:** Easily integrate LarapiKit into your Laravel projects.
- **Additional Features:** Explore a range of supplementary functionalities to enhance your data sharing capabilities.

## Requirements

- PHP 7.4+
- Laravel 8

## Installation

You can install LarapiKit via Composer by executing the following command:

```bash
composer require piratepixelx/larapikit
```
Upon installation, you can publish the package configuration file by running:

```bash
php artisan vendor:publish --tag=larapi-config
```

Open the .env file in your Laravel project and add your API key like this in both websites same api key ('your_api_key'):

```bash
API_KEY=<your_api_key>
```

## Configuration
Customize LarapiKit's behavior by modifying the configuration file located at config/larapi.php. This file contains settings for controlling various aspects of the package.

## Usage
To effectively use LarapiKit in your Laravel application, refer to the provided examples and code snippets in the official documentation. These resources will guide you through the integration process and demonstrate the package's capabilities.

## Example: Retrieving Data Using LarapiKit

To retrieve data from your Laravel API using LarapiKit and an API key, follow these steps:

```php
    use GuzzleHttp\Client;

    // Replace with your actual API key
    $apiKey = config('app.api_key');

    // Create a HTTP client
    $client = new Client();

    // Send a GET request to the API endpoint
    $response = $client->request('GET', 'http://website.com/api-key-auth/api-data-will-share-from-here', [
        'headers' => [
            'Authorization' => $apiKey,
        ],
    ]);

    // Parse the response data
    $data = json_decode($response->getBody(), true);

    // Now, you can work with the retrieved data as needed.
```

## Documentation

For comprehensive information and detailed usage instructions, please visit the official LarapiKit Github Repository.

## Support
If you encounter any issues or have questions related to LarapiKit, don't hesitate to reach out. You can find assistance by following our support guidelines.

## Contributing
We welcome contributions from the community. If you'd like to contribute to LarapiKit, please adhere to our contribution guidelines.

## License
LarapiKit is open-source software distributed under the MIT.
