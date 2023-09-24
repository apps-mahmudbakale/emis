<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateSystemSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('system.app_name', 'Spatie');
        $this->migrator->add('system.address', 'Address');
        $this->migrator->add('system.logo', 'logo');
        $this->migrator->add('system.favicon', 'favicon');
        $this->migrator->add('system.footer', 'footer');
    }
}
