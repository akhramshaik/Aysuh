<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', 'HomeController@dashboard')->name('dashboard');
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');





Route::get('/manageContact', 'ContactController@manageContact')->name('manageContact');
Route::get('/fetchContact', 'ContactController@fetchContact')->name('fetchContact');
Route::get('/addContact', 'ContactController@addContact')->name('addContact');
Route::post('/addContactData', 'ContactController@addContactData')->name('addContactData');
Route::get('/deleteContact/{id}', 'ContactController@deleteContact')->name('deleteContact');


Route::get('/manageLead', 'LeadController@manageLead')->name('manageLead');
Route::get('/fetchLead', 'LeadController@fetchLead')->name('fetchLead');
Route::get('/addLead', 'LeadController@addLead')->name('addLead');
Route::post('/addLeadData', 'LeadController@addLeadData')->name('addLeadData');
Route::get('/deleteLead/{id}', 'LeadController@deleteLead')->name('deleteLead');

Route::get('/manageVendor', 'VendorController@manageVendor')->name('manageVendor');
Route::get('/fetchVendor', 'VendorController@fetchVendor')->name('fetchVendor');
Route::get('/addVendor', 'VendorController@addVendor')->name('addVendor');
Route::post('/addVendorData', 'VendorController@addVendorData')->name('addVendorData');
Route::get('/deleteVendor/{id}', 'VendorController@deleteVendor')->name('deleteVendor');

Route::get('/manageProducts', 'ProductController@manageProducts')->name('manageProducts');
Route::get('/addProduct', 'ProductController@addProduct')->name('addProduct');
Route::get('/fetchProducts', 'ProductController@fetchProducts')->name('fetchProducts');
Route::get('/deleteProduct/{id}', 'ProductController@deleteProduct')->name('deleteProduct');
Route::post('/addProductData', 'ProductController@addProductData')->name('addProductData');

Route::get('/manageCategories', 'CategoryController@manageCategories')->name('manageCategories');
Route::get('/fetchCategory', 'CategoryController@fetchCategory')->name('fetchCategory');
Route::get('/addCategory', 'CategoryController@addCategory')->name('addCategory');
Route::post('/addCategoryData', 'CategoryController@addCategoryData')->name('addCategoryData');
Route::get('/deleteCategory/{id}', 'CategoryController@deleteCategory')->name('deleteCategory');

 
Route::get('/manageInventory', 'InventoryController@manageInventory')->name('manageInventory');
Route::get('/fetchInventory', 'InventoryController@fetchInventory')->name('fetchInventory');
Route::get('/addInventory', 'InventoryController@addInventory')->name('addInventory');
Route::post('/addInventoryData', 'InventoryController@addInventoryData')->name('addInventoryData');
Route::get('/deleteInventory/{id}', 'InventoryController@deleteInventory')->name('deleteInventory');

Route::get('/manageStores', 'StoreController@manageStores')->name('manageStores');
Route::get('/get_stores', 'StoreController@getStores')->name('getStores');
Route::post('/addStoreData', 'StoreController@addStoreData')->name('addStoreData');
Route::get('/addStore', 'StoreController@addStore')->name('addStore');
Route::get('/deleteStore/{id}', 'StoreController@deleteStore')->name('deleteStore');


Route::get('/manageSales', 'SalesController@manageSales')->name('manageSales');
Route::get('/fetchSales', 'SalesController@fetchSales')->name('fetchSales');
Route::get('/addSales', 'SalesController@addSales')->name('addSales');
Route::post('/addSalesData', 'SalesController@addSalesData')->name('addSalesData');
Route::get('/deleteSales/{id}', 'SalesController@deleteSales')->name('deleteSales');

Route::get('/manageStock', 'StockController@manageStock')->name('manageStock');
Route::get('/fetchStock', 'StockController@fetchStock')->name('fetchStock');
Route::get('/addStock', 'StockController@addStock')->name('addStock');
Route::post('/addStockData', 'StockController@addStockData')->name('addStockData');
Route::get('/deleteStock/{id}', 'StockController@deleteStock')->name('deleteStock');

Route::get('/manageReplacements', 'ReplacementController@manageReplacements')->name('manageReplacements');
Route::get('/fetchReplacement', 'ReplacementController@fetchReplacement')->name('fetchReplacement');
Route::get('/addReplacement', 'ReplacementController@addReplacement')->name('addReplacement');
Route::post('/addReplacementData', 'ReplacementController@addReplacementData')->name('addReplacementData');
Route::get('/deleteReplacement/{id}', 'ReplacementController@deleteReplacement')->name('deleteReplacement');

Route::get('/manageExpenses', 'ExpensesController@manageExpenses')->name('manageExpenses');
Route::get('/fetchExpenses', 'ExpensesController@fetchExpenses')->name('fetchExpenses');
Route::get('/addExpenses', 'ExpensesController@addExpenses')->name('addExpenses');
Route::post('/addExpensesData', 'ExpensesController@addExpensesData')->name('addExpensesData');
Route::get('/deleteExpenses/{id}', 'ExpensesController@deleteExpenses')->name('deleteExpenses');

 