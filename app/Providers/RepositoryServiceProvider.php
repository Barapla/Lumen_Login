<?php
namespace App\Providers;

use App\Repositories\OrderRepository;
use App\Repositories\ProductRepository;
use Illuminate\Support\ServiceProvider;
use App\Repositories\Interfaces\IOrderRepository;
use App\Repositories\Interfaces\IProductRepository;

class RepositoryServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(IProductRepository::class, ProductRepository::class);
        $this->app->bind(IOrderRepository::class, OrderRepository::class);
        $this->app->bind(IIdentityRepository::class, IIdentityRepository::class);
        
    }
}