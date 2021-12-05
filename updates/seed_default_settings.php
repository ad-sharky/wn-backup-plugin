<?php namespace MEB\Backup\Updates;

use Winter\Storm\Database\Updates\Seeder;
use MEB\Backup\Models\Settings;

class SeedDefaultSettings extends Seeder
{
    public function run()
    {
        $pathsToInclude = [
            ['path' => 'themes'],
            ['path' => 'plugins'],
        ];
        $pathsToExclude = [
            ['path' => 'vendor'],
            ['path' => 'plugins/winter'],
        ];
        Settings::set('include_files', $pathsToInclude);
        Settings::set('exclude_files', $pathsToExclude);
        Settings::set('maximum_execution_time', 30);
    }
}
