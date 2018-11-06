# Laravel Nova Header [![Total Downloads](https://poser.pugx.org/arsenaltech/nova-header/downloads)](https://packagist.org/packages/arsenaltech/nova-header)


Custom Nova field to add field header when using tabs https://github.com/arsenaltech/nova-tab


## Installation

Install the package into a Laravel app that uses [Nova](https://nova.laravel.com) with Composer:

```bash
composer require arsenaltech/nova-header
```

## Usage



Add the field to your resource in the `fields` method:

```php

new NovaTab('User Information', [
            NovaHeader::make('Example Title'),
            Text::make('Name')
                ->sortable()
                ->rules('required', 'max:255'),
            Text::make('Email')
                ->sortable()
                ->rules('required', 'email', 'max:255')
                ->creationRules('unique:users,email')
                ->updateRules('unique:users,email,{{resourceId}}')]),
new NovaTab('Address Information', $this->addressFields()),
new NovaTab('Other Information', $this->otherFields()),


```

