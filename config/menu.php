<?php

return [
    [
        'label' => 'default.menu.users',
        'icon'  => 'fa-fw fa-xl me-2 fa-solid fa-users',
        'route' => routeTo('crud/index',['table'=>'users']),
        'activeState' => 'default.users'
    ],
    [
        'label' => 'default.menu.roles',
        'icon'  => 'fa-fw fa-xl me-2 fa-solid fa-cubes',
        'route' => routeTo('crud/index',['table'=>'roles']),
        'activeState' => 'default.roles'
    ],
];