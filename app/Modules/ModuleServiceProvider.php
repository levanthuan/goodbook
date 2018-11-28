<?php   
namespace App\Modules;

use Illuminate\Support\ServiceProvider;
use Request;

class ModuleServiceProvider extends ServiceProvider{

    public function register(){}

    public function boot(){
        // Load modules in config.module file
        $modules = config('module.modules');

        $mod = $modules['site'];
        //Detect backend route ?
        if(Request::is('admin') || Request::is('admin/*')){
            $mod = $modules['admin'];
        }

        //Load file route.php with other module
        if(file_exists(__DIR__ . '/' . $mod . '/routes.php')){
            include __DIR__ . '/' . $mod . '/routes.php';
        }

        //Load template with other module
        if(is_dir(__DIR__ . '/' . $mod . '/Views')){
            $this->loadViewsFrom(__DIR__ . '/' . $mod . '/Views', $mod);
        }
    }
}
