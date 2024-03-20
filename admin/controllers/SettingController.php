<?php

function settingListAll()
{
    $title = 'Danh sách Setting';
    $view = 'settings/index';
    $script = 'datetime';
    $style = 'datatable';
    // $style2 = 'form';
    $script3 = 'table';
    $active6 = 'active';

    $settings = listAll('setting');

    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}