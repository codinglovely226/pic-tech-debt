<?php
/**
 * routes/web.php
 *
 * @package default
 */


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@spa');

//Route::get('/', 'HomeController@spa');

//// Authentication Routes...
//$this->get('login', 'Auth\LoginController@showLoginForm')->name('auth.login');
//$this->post('login', 'Auth\LoginController@login')->name('auth.login');
//$this->post('logout', 'Auth\LoginController@logout')->name('auth.logout');

//// Change Password Routes...
//$this->get('password/change', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.password.change');
//$this->patch('password/change', 'Auth\ChangePasswordController@changePassword')->name('auth.password.change');

//// Password Reset Routes...
//$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');
//$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
//$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
//$this->post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');

// Authentication Routes...
Route::name('auth.')->group(function () {
	Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
	Route::post('login', 'Auth\LoginController@login')->name('login');
	Route::post('logout', 'Auth\LoginController@logout')->name('logout');


// Change Password Routes...
	Route::get('password/change', 'Auth\ChangePasswordController@showChangePasswordForm')->name('password.change');
	Route::patch('password/change', 'Auth\ChangePasswordController@changePassword')->name('password.change');

// Password Reset Routes...
	Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
	Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.reset');
	Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
	Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.reset');
});

Route::middleware(['auth'])->group(function () {
//	Route::prefix('settings')->group(function () {
  //Route::group(['prefix' => 'settings', 'as' => 'admin.'], function () {
    //Route::get('/', 'HomeController@index');
    //Route::resource('abilities', 'Admin\AbilitiesController');
    //Route::post('abilities_mass_destroy', ['uses' => 'Admin\AbilitiesController@massDestroy', 'as' => 'abilities.mass_destroy']);
    //Route::resource('roles', 'Admin\RolesController');
    //Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    //Route::resource('users', 'Admin\UsersController');
    //Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);
    //Route::resource('sites', 'Admin\SitesController');
    //Route::delete('specialists/destroy', 'SpecialistsController@massDestroy')->name('specialists.massDestroy');
    //Route::resource('specialists', 'SpecialistsController');
    //Route::resource('/site', 'Settings\SiteController');
    //Route::get('sites', 'SiteController@index');
    //Route::post('sites.destroy','SiteController@destroy');
//  });

Route::group(['prefix' => 'settings', 'as' => 'admin.', 'namespace' => 'Admin'], function () { //, 'middleware' => ['auth']
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('user-alerts/read', 'UserAlertsController@read');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::post('permissions/parse-csv-import', 'PermissionsController@parseCsvImport')->name('permissions.parseCsvImport');
    Route::post('permissions/process-csv-import', 'PermissionsController@processCsvImport')->name('permissions.processCsvImport');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::post('roles/parse-csv-import', 'RolesController@parseCsvImport')->name('roles.parseCsvImport');
    Route::post('roles/process-csv-import', 'RolesController@processCsvImport')->name('roles.processCsvImport');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::post('users/parse-csv-import', 'UsersController@parseCsvImport')->name('users.parseCsvImport');
    Route::post('users/process-csv-import', 'UsersController@processCsvImport')->name('users.processCsvImport');
    Route::resource('users', 'UsersController');

    // Isoto Countries
    Route::delete('isoto-countries/destroy', 'IsotoCountryController@massDestroy')->name('isoto-countries.massDestroy');
    Route::post('isoto-countries/parse-csv-import', 'IsotoCountryController@parseCsvImport')->name('isoto-countries.parseCsvImport');
    Route::post('isoto-countries/process-csv-import', 'IsotoCountryController@processCsvImport')->name('isoto-countries.processCsvImport');
    Route::resource('isoto-countries', 'IsotoCountryController');

    // Organisations
    Route::delete('organisations/destroy', 'OrganisationController@massDestroy')->name('organisations.massDestroy');
    Route::post('organisations/media', 'OrganisationController@storeMedia')->name('organisations.storeMedia');
    Route::post('organisations/ckmedia', 'OrganisationController@storeCKEditorImages')->name('organisations.storeCKEditorImages');
    Route::post('organisations/parse-csv-import', 'OrganisationController@parseCsvImport')->name('organisations.parseCsvImport');
    Route::post('organisations/process-csv-import', 'OrganisationController@processCsvImport')->name('organisations.processCsvImport');
    Route::resource('organisations', 'OrganisationController');

    // Specialists
    Route::delete('specialists/destroy', 'SpecialistsController@massDestroy')->name('specialists.massDestroy');
    Route::post('specialists/parse-csv-import', 'SpecialistsController@parseCsvImport')->name('specialists.parseCsvImport');
    Route::post('specialists/process-csv-import', 'SpecialistsController@processCsvImport')->name('specialists.processCsvImport');
    Route::resource('specialists', 'SpecialistsController');

    // Agents
    Route::delete('agents/destroy', 'AgentsController@massDestroy')->name('agents.massDestroy');
    Route::post('agents/parse-csv-import', 'AgentsController@parseCsvImport')->name('agents.parseCsvImport');
    Route::post('agents/process-csv-import', 'AgentsController@processCsvImport')->name('agents.processCsvImport');
    Route::resource('agents', 'AgentsController');

    // Subscriptions
    Route::delete('subscriptions/destroy', 'SubscriptionController@massDestroy')->name('subscriptions.massDestroy');
    Route::post('subscriptions/parse-csv-import', 'SubscriptionController@parseCsvImport')->name('subscriptions.parseCsvImport');
    Route::post('subscriptions/process-csv-import', 'SubscriptionController@processCsvImport')->name('subscriptions.processCsvImport');
    Route::resource('subscriptions', 'SubscriptionController');

    // Teams
    Route::delete('teams/destroy', 'TeamController@massDestroy')->name('teams.massDestroy');
    Route::post('teams/media', 'TeamController@storeMedia')->name('teams.storeMedia');
    Route::post('teams/ckmedia', 'TeamController@storeCKEditorImages')->name('teams.storeCKEditorImages');
    Route::post('teams/parse-csv-import', 'TeamController@parseCsvImport')->name('teams.parseCsvImport');
    Route::post('teams/process-csv-import', 'TeamController@processCsvImport')->name('teams.processCsvImport');
    Route::resource('teams', 'TeamController');

    // User Alerts
    Route::delete('user-alerts/destroy', 'UserAlertsController@massDestroy')->name('user-alerts.massDestroy');
    Route::resource('user-alerts', 'UserAlertsController', ['except' => ['edit', 'update']]);

    // Data Sets
    Route::delete('data-sets/destroy', 'DataSetsController@massDestroy')->name('data-sets.massDestroy');
    Route::resource('data-sets', 'DataSetsController');

    // Site Data Sets
    Route::delete('site-data-sets/destroy', 'SiteDataSetsController@massDestroy')->name('site-data-sets.massDestroy');
    Route::post('site-data-sets/parse-csv-import', 'SiteDataSetsController@parseCsvImport')->name('site-data-sets.parseCsvImport');
    Route::post('site-data-sets/process-csv-import', 'SiteDataSetsController@processCsvImport')->name('site-data-sets.processCsvImport');
    Route::resource('site-data-sets', 'SiteDataSetsController');

    Route::get('messenger', 'MessengerController@index')->name('messenger.index');
    Route::get('messenger/create', 'MessengerController@createTopic')->name('messenger.createTopic');
    Route::post('messenger', 'MessengerController@storeTopic')->name('messenger.storeTopic');
    Route::get('messenger/inbox', 'MessengerController@showInbox')->name('messenger.showInbox');
    Route::get('messenger/outbox', 'MessengerController@showOutbox')->name('messenger.showOutbox');
    Route::get('messenger/{topic}', 'MessengerController@showMessages')->name('messenger.showMessages');
    Route::delete('messenger/{topic}', 'MessengerController@destroyTopic')->name('messenger.destroyTopic');
    Route::post('messenger/{topic}/reply', 'MessengerController@replyToTopic')->name('messenger.reply');
    Route::get('messenger/{topic}/reply', 'MessengerController@showReply')->name('messenger.showReply');
});

  Route::group(['prefix' => 'analytics', 'as' => 'analytics.', 'namespace' => 'Analytics'], function () {
    Route::get('/', 'EasyQueryController@index')->name('index');
    Route::get('/data/{method}/{param?}', 'QueryBuilderController@data');
    Route::get('/reports', 'QueryBuilderController@reports')->name('reports');
    Route::post('/query', 'QueryBuilderController@couchQuery');
    Route::get('/getSpecialists', 'QueryBuilderController@getSpecialists')->name('getSpecialists');
    Route::get('/extdata/{method}/{param?}', 'QueryBuilderController@extdata')->name('extdata');
  });
  Route::get('storage/sites/{siteId}/{filename}', 'HomeController@getSiteFile');
  
  Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.', 'namespace' => 'Dashboard'], function () {
    Route::get('/', 'DashboardController@index')->name('index');
    Route::get('/getDashboard', 'DashboardController@getDashboard')->name('getDashboard');
    Route::get('/data/{method}/{param?}', 'DashboardController@data');
  });
  
  Route::group(['prefix' => 'docs', 'as' => 'docs.', 'namespace' => 'Docs'], function () {
	  Route::get('/', 'DocController@getDocAsset')->name('index');
	  Route::any('{asset}', 'DocController@getDocAsset')->where('asset', '.*');
	});

  
});
