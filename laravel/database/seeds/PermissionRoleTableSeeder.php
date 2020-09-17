<?php

use App\Permission;
use App\Role;
use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{
    public function run()
    {
        //Add everything to admin - roleid=1
        $admin_permissions = Permission::all();
        Role::findOrFail(1)->permissions()->sync($admin_permissions->pluck('id'));
        
        //add to user = roleid = 2
        //dash_access analytic_access user_alert_show user_alert_access doc_access 
        /*profile_password_edit add_call_notes add_call_records create_call_files 
        * view_call_records
        */
        $user_permissions = $admin_permissions->filter(function ($permission) {
			switch($permission->title) {
				case "dash_access":
				case "analytic_access":
				case "user_alert_show":
				case "user_alert_access":
				case "doc_access":
				case "profile_password_edit":
				case "add_call_notes":
				case "add_call_records":
				case "create_call_files":
				case "view_call_records":
				case "team_show":
					return True;
				default: 
					break;
			}
         });
        Role::findOrFail(2)->permissions()->sync($user_permissions);
        
        //add to site-admin roleid=3
        /*user_management_access role_show 
         * user_create user_edit user_show user_delete user_access 
         * site_management_access 
         * specialist_create specialist_edit specialist_show specialist_delete specialist_access 
         * agent_ref_management_access 
         * subscription_show subscription_access 
         * team_show team_access 
         * dash_access analytic_access 
         * user_alert_show user_alert_access doc_access 
         * data_set_show data_set_access site_data_set_create 
         * site_data_set_edit site_data_set_show site_data_set_delete 
         * site_data_set_access profile_password_edit manage_incidents 
         * manage_templates add_call_notes add_call_records 
         * create_call_files view_deleted_files view_call_records
         */
         $siteadmin_permissions = $admin_permissions->filter(function ($permission) {
			switch($permission->title) {
				case "dash_access":
				case "analytic_access":
				case "user_management_access":
				case "user_access":
				case "user_create":
				case "user_edit":
				case "user_show":
				case "user_delete":
				case "role_show":
				case "site_management_access":
				case "specialist_access":
				case "specialist_create":
				case "specialist_edit":
				case "specialist_show":
				case "specialist_delete":
				case "subscription_show":
				case "subscription_access":
				case "team_show":
				case "team_access":
				case "user_alert_show":
				case "user_alert_access":
				case "doc_access":
				case "data_set_show":
				case "data_set_access":
				case "site_data_set_*":
				case "manage_incidents":
				case "manage_templates":
				case "profile_password_edit":
				case "add_call_notes":
				case "add_call_records":
				case "view_call_records":
				case "view_deleted_files":
				case "team_show":
					return True;
				default: 
					break;
			}
         });
         dd($siteadmin_permissions);
        Role::findOrFail(2)->permissions()->sync($siteadmin_permissions);
        
        //add to specialist roleid=4
        /* team_show dash_access analytic_access 
         * user_alert_show user_alert_access doc_access 
         * profile_password_edit 
         * add_call_notes add_call_records view_call_records
         */
         $specialist_permissions = $admin_permissions->filter(function ($permission) {
			switch($permission->title) {
				case "dash_access":
				case "analytic_access":
				case "user_alert_show":
				case "user_alert_access":
				case "doc_access":
				case "profile_password_edit":
				case "add_call_notes":
				case "add_call_records":
				case "view_call_records":
				case "team_show":
					return True;
				default: 
					break;
			}
         });
        Role::findOrFail(2)->permissions()->sync($specialist_permissions);
    }
}
