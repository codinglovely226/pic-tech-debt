<?php

return [
    'userManagement'     => [
        'title'          => 'Управление пользователями',
        'title_singular' => 'Управление пользователями',
    ],
    'permission'         => [
        'title'          => 'Разрешения',
        'title_singular' => 'Разрешение',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Title',
            'title_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'role'               => [
        'title'          => 'Роли',
        'title_singular' => 'Роль',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Title',
            'title_helper'       => '',
            'permissions'        => 'Permissions',
            'permissions_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
        ],
    ],
    'user'               => [
        'title'          => 'Пользователи',
        'title_singular' => 'Пользователь',
        'fields'         => [
            'id'                         => 'ID',
            'id_helper'                  => '',
            'name'                       => 'Name',
            'name_helper'                => '',
            'email'                      => 'Email',
            'email_helper'               => '',
            'email_verified_at'          => 'Email verified at',
            'email_verified_at_helper'   => '',
            'password'                   => 'Password',
            'password_helper'            => '',
            'roles'                      => 'Roles',
            'roles_helper'               => '',
            'remember_token'             => 'Remember Token',
            'remember_token_helper'      => '',
            'created_at'                 => 'Created at',
            'created_at_helper'          => '',
            'updated_at'                 => 'Updated at',
            'updated_at_helper'          => '',
            'deleted_at'                 => 'Deleted at',
            'deleted_at_helper'          => '',
            'user_loggedin_state'        => 'User Loggedin State',
            'user_loggedin_state_helper' => '',
            'user_login_time'            => 'UserLoginTime',
            'user_login_time_helper'     => '',
            'user_login_hash'            => 'User Login Hash',
            'user_login_hash_helper'     => '',
            'user_log_out_time'          => 'User Log Out Time',
            'user_log_out_time_helper'   => '',
            'user_phone'                 => 'User Phone',
            'user_phone_helper'          => '',
            'user_job'                   => 'User Job',
            'user_job_helper'            => '',
            'team'                       => 'Team',
            'team_helper'                => '',
        ],
    ],
    'siteManagement'     => [
        'title'          => 'Site Management',
        'title_singular' => 'Site Management',
    ],
    'isotoCountry'       => [
        'title'          => 'Country',
        'title_singular' => 'Country',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => '',
            'country_name'        => 'Country Name',
            'country_name_helper' => '',
            'iso_alpha_2'         => 'Iso Alpha 2',
            'iso_alpha_2_helper'  => '',
            'iso_un_m_49'         => 'Iso UN M 49',
            'iso_un_m_49_helper'  => '',
            'created_at'          => 'Created at',
            'created_at_helper'   => '',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => '',
            'deleted_at'          => 'Deleted at',
            'deleted_at_helper'   => '',
            'iso_alpha_3'         => 'Iso Alpha 3',
            'iso_alpha_3_helper'  => '',
        ],
    ],
    'organisation'       => [
        'title'          => 'Organisation',
        'title_singular' => 'Organisation',
        'fields'         => [
            'id'                           => 'ID',
            'id_helper'                    => '',
            'iso_alpha_2'                  => 'Country',
            'iso_alpha_2_helper'           => '',
            'organisation_name'            => 'Organisation Name',
            'organisation_name_helper'     => '',
            'organisation_state'           => 'Organisation State',
            'organisation_state_helper'    => '',
            'organisation_street'          => 'Organisation Street',
            'organisation_street_helper'   => '',
            'organisation_street_2'        => 'Organisation Street 2',
            'organisation_street_2_helper' => '',
            'organisation_city'            => 'Organisation City',
            'organisation_city_helper'     => '',
            'organisation_postcode'        => 'Organisation Postcode',
            'organisation_postcode_helper' => '',
            'created_at'                   => 'Created at',
            'created_at_helper'            => '',
            'updated_at'                   => 'Updated at',
            'updated_at_helper'            => '',
            'deleted_at'                   => 'Deleted at',
            'deleted_at_helper'            => '',
            'logo'                         => 'Logo',
            'logo_helper'                  => '',
        ],
    ],
    'specialist'         => [
        'title'          => 'Specialists',
        'title_singular' => 'Specialist',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => '',
            'user_in_system'         => 'User In System?',
            'user_in_system_helper'  => '',
            'user'                   => 'User',
            'user_helper'            => '',
            'specialist_name'        => 'Specialist Name',
            'specialist_name_helper' => '',
            'specialty'              => 'Specialty',
            'specialty_helper'       => '',
            'created_at'             => 'Created at',
            'created_at_helper'      => '',
            'updated_at'             => 'Updated at',
            'updated_at_helper'      => '',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => '',
            'site'                   => 'Site',
            'site_helper'            => '',
        ],
    ],
    'agentRefManagement' => [
        'title'          => 'Agent Ref Management',
        'title_singular' => 'Agent Ref Management',
    ],
    'agent'              => [
        'title'          => 'Agents',
        'title_singular' => 'Agent',
        'fields'         => [
            'id'                            => 'ID',
            'id_helper'                     => '',
            'agent_reference_name'          => 'Agent Reference Name',
            'agent_reference_name_helper'   => '',
            'agent_reference_url'           => 'Agent Reference URL',
            'agent_reference_url_helper'    => '',
            'agent_reference_source'        => 'Agent Reference Source',
            'agent_reference_source_helper' => '',
            'created_at'                    => 'Created at',
            'created_at_helper'             => '',
            'updated_at'                    => 'Updated at',
            'updated_at_helper'             => '',
            'deleted_at'                    => 'Deleted at',
            'deleted_at_helper'             => '',
            'dataset'                       => 'Dataset',
            'dataset_helper'                => '',
        ],
    ],
    'subscription'       => [
        'title'          => 'Subscription',
        'title_singular' => 'Subscription',
        'fields'         => [
            'id'                        => 'ID',
            'id_helper'                 => '',
            'organisation'              => 'Organisation',
            'organisation_helper'       => '',
            'created_at'                => 'Created at',
            'created_at_helper'         => '',
            'updated_at'                => 'Updated at',
            'updated_at_helper'         => '',
            'deleted_at'                => 'Deleted at',
            'deleted_at_helper'         => '',
            'subscription_type'         => 'Subscription Type',
            'subscription_type_helper'  => '',
            'subscription_start'        => 'Subscription Start',
            'subscription_start_helper' => '',
            'duration'                  => 'Duration',
            'duration_helper'           => 'Years',
        ],
    ],
    'team'               => [
        'title'          => 'Sites',
        'title_singular' => 'Site',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => '',
            'created_at'          => 'Created at',
            'created_at_helper'   => '',
            'updated_at'          => 'Updated At',
            'updated_at_helper'   => '',
            'deleted_at'          => 'Deleted At',
            'deleted_at_helper'   => '',
            'name'                => 'Name',
            'name_helper'         => '',
            'shortcode'           => 'Short Code',
            'shortcode_helper'    => '',
            'organisation'        => 'Organisation',
            'organisation_helper' => '',
            'country'             => 'Country',
            'country_helper'      => '',
            'timezone'            => 'Default Timezone',
            'timezone_helper'     => '',
            'logo'                => 'Logo',
            'logo_helper'         => '',
            'region'              => 'Region',
            'region_helper'       => '',
        ],
    ],
    'dash'               => [
        'title'          => 'Dashboard',
        'title_singular' => 'Dashboard',
    ],
    'analytic'           => [
        'title'          => 'Analytics',
        'title_singular' => 'Analytic',
    ],
    'userAlert'          => [
        'title'          => 'User Alerts',
        'title_singular' => 'User Alert',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'alert_text'        => 'Alert Text',
            'alert_text_helper' => '',
            'alert_link'        => 'Alert Link',
            'alert_link_helper' => '',
            'user'              => 'Users',
            'user_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
        ],
    ],
    'doc'                => [
        'title'          => 'User Manual',
        'title_singular' => 'User Manual',
    ],
    'dataSet'            => [
        'title'          => 'Data Sets',
        'title_singular' => 'Data Set',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'source'            => 'Source',
            'source_helper'     => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'siteDataSet'        => [
        'title'          => 'Site Data Sets',
        'title_singular' => 'Site Data Set',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'dataset'           => 'Dataset',
            'dataset_helper'    => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
            'team'              => 'Team',
            'team_helper'       => '',
        ],
    ],
];
