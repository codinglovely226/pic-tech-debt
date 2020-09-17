<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'site_management_access',
            ],
            [
                'id'    => 18,
                'title' => 'isoto_country_create',
            ],
            [
                'id'    => 19,
                'title' => 'isoto_country_edit',
            ],
            [
                'id'    => 20,
                'title' => 'isoto_country_show',
            ],
            [
                'id'    => 21,
                'title' => 'isoto_country_delete',
            ],
            [
                'id'    => 22,
                'title' => 'isoto_country_access',
            ],
            [
                'id'    => 23,
                'title' => 'organisation_create',
            ],
            [
                'id'    => 24,
                'title' => 'organisation_edit',
            ],
            [
                'id'    => 25,
                'title' => 'organisation_show',
            ],
            [
                'id'    => 26,
                'title' => 'organisation_delete',
            ],
            [
                'id'    => 27,
                'title' => 'organisation_access',
            ],
            [
                'id'    => 28,
                'title' => 'specialist_create',
            ],
            [
                'id'    => 29,
                'title' => 'specialist_edit',
            ],
            [
                'id'    => 30,
                'title' => 'specialist_show',
            ],
            [
                'id'    => 31,
                'title' => 'specialist_delete',
            ],
            [
                'id'    => 32,
                'title' => 'specialist_access',
            ],
            [
                'id'    => 33,
                'title' => 'agent_ref_management_access',
            ],
            [
                'id'    => 34,
                'title' => 'agent_create',
            ],
            [
                'id'    => 35,
                'title' => 'agent_edit',
            ],
            [
                'id'    => 36,
                'title' => 'agent_show',
            ],
            [
                'id'    => 37,
                'title' => 'agent_delete',
            ],
            [
                'id'    => 38,
                'title' => 'agent_access',
            ],
            [
                'id'    => 39,
                'title' => 'subscription_create',
            ],
            [
                'id'    => 40,
                'title' => 'subscription_edit',
            ],
            [
                'id'    => 41,
                'title' => 'subscription_show',
            ],
            [
                'id'    => 42,
                'title' => 'subscription_delete',
            ],
            [
                'id'    => 43,
                'title' => 'subscription_access',
            ],
            [
                'id'    => 44,
                'title' => 'team_create',
            ],
            [
                'id'    => 45,
                'title' => 'team_edit',
            ],
            [
                'id'    => 46,
                'title' => 'team_show',
            ],
            [
                'id'    => 47,
                'title' => 'team_delete',
            ],
            [
                'id'    => 48,
                'title' => 'team_access',
            ],
            [
                'id'    => 49,
                'title' => 'dash_access',
            ],
            [
                'id'    => 50,
                'title' => 'analytic_access',
            ],
            [
                'id'    => 51,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 52,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 53,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 54,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 55,
                'title' => 'doc_access',
            ],
            [
                'id'    => 56,
                'title' => 'data_set_create',
            ],
            [
                'id'    => 57,
                'title' => 'data_set_edit',
            ],
            [
                'id'    => 58,
                'title' => 'data_set_show',
            ],
            [
                'id'    => 59,
                'title' => 'data_set_delete',
            ],
            [
                'id'    => 60,
                'title' => 'data_set_access',
            ],
            [
                'id'    => 61,
                'title' => 'site_data_set_create',
            ],
            [
                'id'    => 62,
                'title' => 'site_data_set_edit',
            ],
            [
                'id'    => 63,
                'title' => 'site_data_set_show',
            ],
            [
                'id'    => 64,
                'title' => 'site_data_set_delete',
            ],
            [
                'id'    => 65,
                'title' => 'site_data_set_access',
            ],
            [
                'id'    => 66,
                'title' => 'profile_password_edit',
            ],
            [
                'id' => 67,
                'title' => 'manage_incidents',
            ],
            [
                'id' => 68,
                'title' => 'manage_templates',
            ],
            [
                'id' => 69,
                'title' => 'add_call_notes',
            ],
            [
                'id' => 70,
                'title' => 'add_call_records',
            ],
            [
                'id' => 71,
                'title' => 'create_call_files',
            ],
            [
                'id' => 72,
                'title' => 'view_deleted_files',
            ],
            [
                'id' => 73,
                'title' => 'view_call_records',
            ],
        ];

        Permission::insert($permissions);
    }
}
