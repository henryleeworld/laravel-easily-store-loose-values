<?php

namespace App\Http\Controllers;

use Spatie\Valuestore\Valuestore;

class SettingController extends Controller
{
    public function show() 
    {
        $settingAry = [
            'title'    => __('Henry\'s world'),
            'paginate' => rand(1, 100),
        ];
        $pathToFile = storage_path('settings/settings.json');
        $valuestore = Valuestore::make($pathToFile);
        $valuestore->put($settingAry);
        foreach ($valuestore->all() as $key => $value) {
            echo __('Key \':key\' corresponding value is \':value\'', ['key' => $key, 'value' => $value]) . PHP_EOL;
        }
    }
}
