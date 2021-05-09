<?php
Route::get('/', 'HomePageController@homepage')->name('home.page');

Route::get('/homepage', function () {
    return view('layouts.homepage');
});
// Route::redirect('/', '/login');


Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Route::get('userVerification/{token}', 'UserVerificationController@approve')->name('userVerification');
Auth::routes();

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Machinery Categories
    Route::delete('machinery-categories/destroy', 'MachineryCategoriesController@massDestroy')->name('machinery-categories.massDestroy');
    Route::post('machinery-categories/media', 'MachineryCategoriesController@storeMedia')->name('machinery-categories.storeMedia');
    Route::post('machinery-categories/ckmedia', 'MachineryCategoriesController@storeCKEditorImages')->name('machinery-categories.storeCKEditorImages');
    Route::resource('machinery-categories', 'MachineryCategoriesController');

    // Site
    Route::delete('sites/destroy', 'SiteController@massDestroy')->name('sites.massDestroy');
    Route::post('sites/media', 'SiteController@storeMedia')->name('sites.storeMedia');
    Route::post('sites/ckmedia', 'SiteController@storeCKEditorImages')->name('sites.storeCKEditorImages');
    Route::resource('sites', 'SiteController');

    // Contact Messages
    Route::resource('contact-messages', 'ContactMessagesController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);

    // Blog
    Route::delete('blogs/destroy', 'BlogController@massDestroy')->name('blogs.massDestroy');
    Route::post('blogs/media', 'BlogController@storeMedia')->name('blogs.storeMedia');
    Route::post('blogs/ckmedia', 'BlogController@storeCKEditorImages')->name('blogs.storeCKEditorImages');
    Route::resource('blogs', 'BlogController');

    // Blog Category
    Route::delete('blog-categories/destroy', 'BlogCategoryController@massDestroy')->name('blog-categories.massDestroy');
    Route::resource('blog-categories', 'BlogCategoryController');

    // Aboutus
    Route::delete('aboutus/destroy', 'AboutusController@massDestroy')->name('aboutus.massDestroy');
    Route::post('aboutus/media', 'AboutusController@storeMedia')->name('aboutus.storeMedia');
    Route::post('aboutus/ckmedia', 'AboutusController@storeCKEditorImages')->name('aboutus.storeCKEditorImages');
    Route::resource('aboutus', 'AboutusController');

    // Sliders
    Route::delete('sliders/destroy', 'SlidersController@massDestroy')->name('sliders.massDestroy');
    Route::post('sliders/media', 'SlidersController@storeMedia')->name('sliders.storeMedia');
    Route::post('sliders/ckmedia', 'SlidersController@storeCKEditorImages')->name('sliders.storeCKEditorImages');
    Route::resource('sliders', 'SlidersController');

    // Customer Reviews
    Route::resource('customer-reviews', 'CustomerReviewsController', ['except' => ['store', 'edit', 'update', 'destroy']]);

    // Subscribers
    Route::resource('subscribers', 'SubscribersController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);

    // Bookings
    Route::resource('bookings', 'BookingsController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);

    // Category
    Route::delete('categories/destroy', 'CategoryController@massDestroy')->name('categories.massDestroy');
    Route::post('categories/media', 'CategoryController@storeMedia')->name('categories.storeMedia');
    Route::post('categories/ckmedia', 'CategoryController@storeCKEditorImages')->name('categories.storeCKEditorImages');
    Route::resource('categories', 'CategoryController');

    // Farmers
    Route::delete('farmers/destroy', 'FarmersController@massDestroy')->name('farmers.massDestroy');
    Route::resource('farmers', 'FarmersController');

    // Audit Logs
    Route::resource('audit-logs', 'AuditLogsController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);

    // Comments
    Route::delete('comments/destroy', 'CommentsController@massDestroy')->name('comments.massDestroy');
    Route::resource('comments', 'CommentsController');

    // Tags
    Route::delete('tags/destroy', 'TagsController@massDestroy')->name('tags.massDestroy');
    Route::resource('tags', 'TagsController');

    Route::get('system-calendar', 'SystemCalendarController@index')->name('systemCalendar');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});

// public route

// getting machineries by category id
Route::get("category/{id}","HomePageController@categoryMachinery")->name('machinery.category');
// getting machinery details
Route::get('machinery-details/{id}','HomePageController@machineryDetails')->name('machinery.details');
// getting about page
Route::get('about-us','HomePageController@aboutUs')->name('about.us');
// list blogs
Route::get("blogs",'HomePageController@blogList')->name('blogs.list');
// preview blog details
Route::get("blog/{id}","HomePageController@blogDetails")->name("blog.details");
// add blog comment
Route::post('comment/add','HomePageController@addComment')->name('comment.add');
// contact us
Route::get('contact-us',"HomePageController@contactUs")->name('contact.us');
// add contact messages
Route::post('contact/add','HomePageController@contactAdd')->name('contact.add');
// adding subscribers
Route::post('subscriber/add',"HomePageController@addNewsletter")->name('subsciber.add');
// homepage search
Route::post("search","HomePageController@search")->name("search.machinery");