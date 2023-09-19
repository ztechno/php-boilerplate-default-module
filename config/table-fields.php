<?php

return [
    'users'  => [
        'name' => [
            'label' => __('default.label.users_name'),
            'type'  => 'text'
        ],
        'username' => [
            'label' => __('default.label.users_username'),
            'type'  => 'text'
        ],
        'password' => [
            'label' => __('default.label.users_password'),
            'type'  => 'password',
        ],
    ],
    'roles'  => [
        'name' => [
            'label' => __('default.label.roles_name'),
            'type'  => 'text'
        ],
    ],
    'role_routes'  => [
        'role_id' => [
            'label' => __('default.label.role_routes_role'),
            'type'  => 'options-obj:roles,id,name'
        ],
        'route_path' => [
            'label' => __('default.label.role_routes_path'),
            'type'  => 'text'
        ],
    ],
    'user_roles'  => [
        'user_id' => [
            'label' => __('default.label.user_roles_user'),
            'type'  => 'options-obj:users,id,name'
        ],
        'role_id' => [
            'label' => __('default.label.user_roles_role'),
            'type'  => 'options-obj:roles,id,name'
        ],
    ],
];