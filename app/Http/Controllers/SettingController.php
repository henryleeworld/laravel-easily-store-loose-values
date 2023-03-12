<?php

namespace App\Http\Controllers;

use Spatie\Valuestore\Valuestore;

class SettingController extends Controller
{
    public function show() 
    {
        $settingAry = [
            'title'    => '亨利的世界',
            'paginate' => rand(1, 100),
        ];
        $pathToFile = config_path('settings.json');
        $valuestore = Valuestore::make($pathToFile);
        $valuestore->put($settingAry);
        foreach ($valuestore->all() as $key => $value) {
            echo '鍵值「' . $key . '」的' . '對應值【' . $value . '】' . PHP_EOL;
        }
    }
}
