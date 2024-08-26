![Moox Core](https://github.com/mooxphp/moox/raw/main/art/banner/core.jpg)

# Moox Core

The Moox Core package cares for many common features. It is required by all Moox packages including Moox Builder. If you want to use Moox Builder to generate a Custom Package, check out the features you're already able to use, if you want to Moox Core independently in your app or a package, you  need to use the traits accordingly.

## Installation

If you want to install Moox Core (normally not necessary, because this package is required by all other Moox packages), you can:

```bash
composer require moox/core
php artisan mooxcore:install
```

## Traits

### Dynamic Tabs

Moox allows you to change (or remove) the Filter tabs for Filament Resources. The HasDynamicTabs Trait  is used in all of our packages including Moox Builder.

#### Disable Tabs

If you want to disable tabs for this resource, just do a

```php
            'tabs' => [],
```

A pretty basic example:

```php
            'tabs' => [
                'all' => [
                    'label' => 'trans//core::core.all',
                    'icon' => 'gmdi-filter-list',
                    'query' => [],
                ],
                'user' => [
                    'label' => 'trans//core::core.user_session',
                    'icon' => 'gmdi-account-circle',
                    'query' => [
                        [
                            'field' => 'user_id',
                            'operator' => '!=',
                            'value' => null,
                        ],
                    ],
                ],
            ],
```

As mentioned, the DynamicTabs trait is already implemented, if you want to implement this feature from outside Moox, please have a look at one of our Filament resources list pages:

```php
use Moox\Core\Traits\HasDynamicTabs;

class ListItems extends ListRecords
{
    use HasDynamicTabs;

		public function getTabs(): array
    {
        return $this->getDynamicTabs('package.resources.item.tabs', Expiry::class);
    }
```

and the config of the package:

```php
    'resources' => [
        'item' => [

            /*
            |--------------------------------------------------------------------------
            | Tabs
            |--------------------------------------------------------------------------
            |
            | Define the tabs for the Resource table. They are optional, but
            | pretty awesome to filter the table by certain values.
            | You may simply do a 'tabs' => [], to disable them.
            |
            */

            'tabs' => [
                'all' => [
                    'label' => 'trans//core::core.all',
                    'icon' => 'gmdi-filter-list',
                    'query' => [],
                ],
                'documents' => [
                    'label' => 'trans//core::core.documents',
                    'icon' => 'gmdi-text-snippet',
                    'query' => [
                        [
                            'field' => 'expiry_job',
                            'operator' => '=',
                            'value' => 'Documents',
                        ],
                    ],
                ],
            ],
        ],
    ],
```

### Queries in Config

Dynamic Tabs uses the QueriesInConfig Trait, that means you can build queries like this:

The simplest query is for the All tab, of course:

```php
					'query' => [],
```

All other queries require three parameters: 

```php
                    'query' => [
                        [
                            'field' => 'status',
                            'operator' => '=',
                            'value' => 'open',
                        ],
                    ],
```

Add more, if you need:

```php
                    'query' => [
                        [
                            'field' => 'post_type',
                            'operator' => '=',
                            'value' => 'Post',
                        ],
                        [
                            'field' => 'deleted',
                            'operator' => '!=',
                            'value' => 'false',
                        ],
                    ],
```

We DON'T YET support relations nor the like operator. If you're in the need, we would be happy to merge a PR :-) 

```php
                    // TODO: not implemented yet
										'query' => [
                        [
                            'field' => 'user_name',
                            'relation' => 'user',
                            'operator' => 'like',
                            'value' => 'Alf',
                        ],
                    ],
```

The value of a query accepts a closure. Following example is perfect for a "My Tab" as it filters for the current user:

```php
                    'query' => [
                        [
                            'field' => 'user_id',
                            'operator' => '=',
                            'value' => function () {
                                return auth()->user()->id;
                            },
                        ],
                    ],
```

Finally, a special idea and therefor NOT YET implemented: if the value contains a class and a forth parameter `hide-if-not-exists`set to true, Moox will check, if the class exists and otherwise hide the tab. That allows us to register buttons for packages, that are not necessarily required.

```php
                    // TODO: not implemented yet
										'query' => [
                        [
                            'field' => 'status',
                            'operator' => '=',
                            'value' => 'Moox\Press\Models\WpUser',
                            'hide-if-not-exists' => true,
                        ],
                    ],
```

An practical example (works for Sessions, Devices and other user-related entities):

```php
            'tabs' => [
	            'mine' => [
                    'label' => 'My Sessions',
                    'icon' => 'gmdi-account-circle',
                    'query' => [
                        [
                            'field' => 'user_id',
                            'operator' => '=',
                            'value' => function () {
                                return auth()->user()->id;
                            },
                        ],
                    ],
                ],
                'all' => [
                    'label' => 'trans//core::core.all',
                    'icon' => 'gmdi-filter-list',
                    'query' => [],
                ],
                'user' => [
                    'label' => 'User Sessions',
                    'icon' => 'gmdi-account-circle',
                    'query' => [
                        [
                            'field' => 'user_type',
                            'operator' => '=',
                            'value' => 'Moox\User\Models\User',
                        ],
                    ],
                ],
                'wpuser' => [
                    'label' => 'WordPress Sessions',
                    'icon' => 'gmdi-account-circle',
                    'query' => [
                        [
                            'field' => 'user_type',
                            'operator' => '=',
                            'value' => 'Moox\Press\Models\WpUser',
                        ],
                    ],
                ],
                'anonymous' => [
                    'label' => 'Anonymous Sessions',
                    'icon' => 'gmdi-no-accounts',
                    'query' => [
                        [
                            'field' => 'user_id',
                            'operator' => '=',
                            'value' => null,
                        ],
                    ],
                ],
            ],
```

And finally the most-known mistake, throws "Cannot access offset of type string on string":

```php
        'query' => [
						'field' => 'user_id',
						'operator' => '=',
						'value' => null,
        ],
```

So don't forget to put the query in an extra array, even if it is a single query.

As mentioned, the QueriesInConfig trait is used in HasDynamicTabs, another Trait in Moox Core. Please code dive there, to see how to implement the Feature from outside Moox.

### Translations in Config

A simple but useful feature is the TranslationsInConfig Trait that is used a lot in our config files, as seen with Tabs:

```php
                    'label' => 'trans//core::core.all',
```

Translations of our packages are generally organized in Moox Core. Only few of our packages ship with own translation files. These packages are registered in the core.php configuration file. If you develop a custom package (preferably using Moox Builder) you need to add your custom package to the [Package Registration](#Package-registration).

Translations in Config are used in the CoreServiceProvider like this:

```php
use Moox\Core\Traits\TranslatableConfig;

class CoreServiceProvider extends PackageServiceProvider
{
    use TranslatableConfig;
 
    public function boot()
    {
        parent::boot();

        $this->app->booted(function () {
            $this->translateConfigurations();
        });
    }
}
```

### Request in Model

The RequestInModel Trait is currently used by all Moox Press packages. It allows us to use the request data in some of our models. You can code dive into Moox\Press\Models\WpTerm.php, to find more code examples. The basic implementation looks like this:

```php
use Illuminate\Database\Eloquent\Model;
use Moox\Core\Traits\RequestInModel;

class WpTerm extends Model
{
	use RequestInModel;
  
  $description = $wpTerm->getRequestData('description');
}
```

### Google Material Design Icons

As [Google Material Design Icons](https://blade-ui-kit.com/blade-icons?set=20) provides one of the largest sets of high quality icons, we decided to use them as default for Moox. The GoogleIcons Trait changes the default Filament Icons, too. It is used in the CoreServiceProvider like this:

```php
use Moox\Core\Traits\GoogleIcons;

class CoreServiceProvider extends PackageServiceProvider
{
    use GoogleIcons;
 
    public function boot()
    {
        parent::boot();

        $this->useGoogleIcons();
    }
}
```

## Services

### DNS Lookup

The DnsLookupService does just a - you guessed it - DNS Lookup.

## API

The Core API  `api/core` provides all available packages (and their configuration - work-in-progress). It is used by Moox Sync, for example.

The Core API is work in progress. It probably will be secured.

## Config

### Package Registration

Moox has a simple package registration. To ensure that some features of Moox Core are only available for known packages, all Moox  packages and all custom packages, created with Moox Builder, need to register here:

```php
return [

    /*
    |--------------------------------------------------------------------------
    | Moox Packages
    |--------------------------------------------------------------------------
    |
    | This config array registers all known Moox packages. You may add own
    | packages to this array. If you use Moox Builder, these packages
    | work out of the box. Adding a non-compatible package fails.
    |
    */

    'packages' => [
        'audit' => 'Moox Audit',
        'builder' => 'Moox Builder',
        'core' => 'Moox Core',
        'expiry' => 'Moox Expiry',
        'jobs' => 'Moox Jobs',
        'login-link' => 'Moox Login Link',
        'notifications' => 'Moox Notifications',
        'page' => 'Moox Page',
        'passkey' => 'Moox Passkey',
        'permission' => 'Moox Permission',
        'press' => 'Moox Press',
        'press-wiki' => 'Moox Press Wiki',
        'security' => 'Moox Security',
        'sync' => 'Moox Sync',
        'training' => 'Moox Trainings',
        'user' => 'Moox User',
        'user-device' => 'Moox User Device',
        'user-session' => 'Moox User Session',
    ],
];
```

You can publish the Moox Core configuration file and add own packages:

```bash
php artisan vendor:publish --tag="core-config"
```

 but remember to update the Array regularly then, to allow newer Moox packages to work flawlessly.

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Security Vulnerabilities

Please review [our security policy](https://github.com/mooxphp/moox/security/policy) on how to report security vulnerabilities.

## Credits

-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
