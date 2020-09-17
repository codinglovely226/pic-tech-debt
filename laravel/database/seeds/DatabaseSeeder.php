<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            PermissionsTableSeeder::class,
            RolesTableSeeder::class,
            PermissionRoleTableSeeder::class,
            UsersTableSeeder::class,
            RoleUserTableSeeder::class,
        ]);
        $this->call(IsotoCountriesTableSeeder::class);
        $this->call(OrganisationsTableSeeder::class);
        $this->call(TeamsTableSeeder::class);
        $this->call(DataSetsTableSeeder::class);
        $this->call(AgentsTableSeeder::class);
    }
}
