<?php

Auth::routes();

Route::group(['middleware' => ['auth']], function () {

    Route::get('/', function () {
        return view('pages.dashboard-one');
    })->name('home');

    $routeGroups = [
        'advanced-ui'   => ['cropper', 'owl-carousel', 'sweet-alert'],
        'apps'          => ['calendar', 'chat'],
        'charts'        => ['apex', 'chartjs', 'flot', 'morrisjs', 'peity', 'sparkline'],
        'email'         => ['compose', 'inbox', 'read'],
        'error'         => ['404', '500'],
        'forms'         => ['advanced-elements', 'basic-elements', 'editors', 'wizard'],
        'general'       => ['blank-page', 'faq', 'invoice', 'pricing', 'profile', 'timeline'],
        'icons'         => ['feather-icons', 'flag-icons', 'mdi-icons'],
        'tables'        => ['basic-table', 'data-table'],
        'ui-components' => [
            'alerts', 'badges', 'breadcrumbs', 'button-group', 'buttons', 'cards', 'carousel', 'collapse', 'dropdowns',
            'list-group', 'media-object', 'modal', 'navbar', 'navs', 'pagination', 'popover', 'progress', 'scrollbar',
            'scrollspy', 'spinners', 'tooltips',
        ],
    ];

    foreach ($routeGroups as $prefix => $routes) {
        Route::group(['prefix' => $prefix], function () use ($prefix, $routes) {
            foreach ($routes as $route) {
                Route::get((string)$route, function () use ($prefix, $route) {
                    return view("pages.{$prefix}.{$route}");
                });
            }
        });
    }
});

