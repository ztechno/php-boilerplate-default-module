<?php

use Core\Page;

Page::setTitle(__('default.menu.users'));
Page::setModuleName(__('default.menu.module_name'));
Page::setBreadcrumbs([
    [
        'url' => routeTo('/'),
        'title' => __('default.content.home')
    ],
    [
        'url' => routeTo('default/users'),
        'title' => __('default.menu.users')
    ]
]);

return view('default/views/users/index');