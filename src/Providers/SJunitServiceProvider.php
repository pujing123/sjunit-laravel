<?php
/**
 * Created by PhpStorm.
 * User: 王鹏
 * Date: 2019/7/26
 * Time: 9:48
 */
namespace  ShineYork\SJunitLaravel\Providers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class SJunitServiceProvider extends ServiceProvider
{
    public function register()
    {
        //注册组件路由
        $this->registerRoutes();

        $this->loadViewsFrom(
            __DIR__.'/../../resources/views', 'sjunit'
        );
     //echo "这是sjunit 服务组件";
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //


    }

    private function registerRoutes()
    {

        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/../Http/routes.php');
        });
    }

    private function routeConfiguration()
    {
        return [
//            'domain' => config('telescope.domain', null),
            'namespace' => 'ShineYork\SJunitLaravel\Http\Controllers',
            'prefix' => 'sjunit',
            'middleware' => 'web',
        ];
    }
}