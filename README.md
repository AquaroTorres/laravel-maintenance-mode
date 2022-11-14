# Laravel Maintenance Mode without terminal access

## Require laravel/laravel ^6.0

## Installation 
- ```composer require aquaro/laravel-maintenance-mode```

- Add "maintenance" route on ```App\Http\Middleware\PreventRequestsDuringMaintenance.php``` 

```
protected $except = [
    'maintenance',
];
```

- Add MAINTENANCE_TOKEN on .env file

## Routes
- /maintenance


## License
Open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).