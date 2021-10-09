<?php

namespace App\Providers;

use App\Observers\{
    CategoryObserver,
    PlanObserver,
    ProductObserver,
    TableObserver,
    TenantObserver
};
use App\Models\{
    Category,
    Plan,
    Product,
    Table,
    Tenant
};

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Plan::observe(PlanObserver::class);
        Tenant::observe(TenantObserver::class);
        Category::observe(CategoryObserver::class);
        Product::observe(ProductObserver::class);
        Table::observe(TableObserver::class);
    }
}
