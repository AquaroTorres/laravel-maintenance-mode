# Laravel Maintenance Mode without terminal access

## Require laravel/framework ^9.0

## Installation 
- ```composer require aquaro/laravel-maintenance-mode```
- Add MAINTENANCE_TOKEN on .env file
- Add "maintenance" route on ```App\Http\Middleware\PreventRequestsDuringMaintenance.php``` 
```
protected $except = [
    'maintenance',
];
```

## Routes
- /maintenance

## License
Open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
