<?php

use Core\Page;
use Modules\Crud\Libraries\Repositories\CrudRepository;

// init table fields
$role_id    = $_GET['id'];
$tableName  = 'role_routes';
$table      = tableFields($tableName);
$fields     = $table->getFields();
$module     = $table->getModule();
$success_msg = get_flash_msg('success');

// get data
$crudRepository = new CrudRepository($tableName);
$crudRepository->setModule($module);
$data           = $crudRepository->get();

if(isset($_GET['draw']))
{
    return $crudRepository->dataTable($fields);
}

// page section
$title = _ucwords(__("$module.label.$tableName"));
Page::setActive("$module.$tableName");
Page::setTitle($title);
Page::setModuleName($title);
Page::setBreadcrumbs([
    [
        'url' => routeTo('/'),
        'title' => __('crud.label.home')
    ],
    [
        'url' => routeTo('crud/index', ['table' => $tableName]),
        'title' => $title
    ],
    [
        'title' => 'Index'
    ]
]);

Page::pushFoot("<script src='".asset('assets/crud/js/crud.js')."'></script>");

return view('crud/views/index', compact('data', 'fields', 'tableName', 'success_msg'));