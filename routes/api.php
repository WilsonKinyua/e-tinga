<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Machinery Categories
    Route::post('machinery-categories/media', 'MachineryCategoriesApiController@storeMedia')->name('machinery-categories.storeMedia');
    Route::apiResource('machinery-categories', 'MachineryCategoriesApiController');

    // Site
    Route::post('sites/media', 'SiteApiController@storeMedia')->name('sites.storeMedia');
    Route::apiResource('sites', 'SiteApiController');

    // Contact Messages
    Route::apiResource('contact-messages', 'ContactMessagesApiController', ['except' => ['store', 'update', 'destroy']]);

    // Blog
    Route::post('blogs/media', 'BlogApiController@storeMedia')->name('blogs.storeMedia');
    Route::apiResource('blogs', 'BlogApiController');

    // Blog Category
    Route::apiResource('blog-categories', 'BlogCategoryApiController');

    // Aboutus
    Route::post('aboutus/media', 'AboutusApiController@storeMedia')->name('aboutus.storeMedia');
    Route::apiResource('aboutus', 'AboutusApiController');

    // Sliders
    Route::post('sliders/media', 'SlidersApiController@storeMedia')->name('sliders.storeMedia');
    Route::apiResource('sliders', 'SlidersApiController');

    // Customer Reviews
    Route::apiResource('customer-reviews', 'CustomerReviewsApiController', ['except' => ['store', 'update', 'destroy']]);

    // Subscribers
    Route::apiResource('subscribers', 'SubscribersApiController', ['except' => ['store', 'update', 'destroy']]);

    // Bookings
    Route::apiResource('bookings', 'BookingsApiController', ['except' => ['store', 'update', 'destroy']]);

    // Category
    Route::post('categories/media', 'CategoryApiController@storeMedia')->name('categories.storeMedia');
    Route::apiResource('categories', 'CategoryApiController');

    // Farmers
    Route::apiResource('farmers', 'FarmersApiController');

    // Comments
    Route::apiResource('comments', 'CommentsApiController');

    // Tags
    Route::apiResource('tags', 'TagsApiController');
});
