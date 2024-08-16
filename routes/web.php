<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Frontend\HomePageController;
use App\Http\Controllers\Frontend\ListController;
use App\Http\Controllers\Frontend\ContactusController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\BookingController;
use App\Http\Controllers\Frontend\LiveAuctionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

    Route::get('/', function () {
        return view('welcome');
    });

    Auth::routes();

    //user athentication
    Route::get('/userlogin', [UserController::class, 'Login'])->name('user.login');
    Route::get('/usersignup', [UserController::class, 'Signup'])->name('user.usersignup');
    Route::post('/store_signup', [UserController::class, 'Store_signup'])->name('user.store_signup');
    Route::get('otp/{userId}', [UserController::class, 'Otp'])->name('user.getotp');
    Route::post('/store_otp', [UserController::class, 'StoreOtp'])->name('user.store_otp');

    //user home
    Route::get('/home', [HomePageController::class, 'Homepage'])->name('user.home');
    Route::get('home/filterslider', [HomePageController::class, 'Filterslider'])->name('home.filterslider');
    Route::get('home.filterselect', [HomePageController::class, 'Filterselect'])->name('home.filterselect');

    Route::get('aboutus', [HomePageController::class, 'Aboutus'])->name('aboutus');

    Route::get('liveauction', [LiveAuctionController::class, 'Liveauction'])->name('liveauction');
    Route::get('liveauction/stickerfilter', [LiveAuctionController::class, 'LiveauctionStickerFilter'])->name('liveauction.stickerfilter');
    Route::get('liveauction/sidebar_filter', [LiveAuctionController::class, 'LiveauctionSidebarFilter'])->name('liveauction.sidebar_filter');
    Route::get('liveauction/rangefilter', [LiveAuctionController::class, 'LiveauctionRangefilterFilter'])->name('liveauction.rangefilter');

    Route::get('show_extended_auction_car', [LiveAuctionController::class, 'ShowextendedAuctionCar'])->name('show_extended_auction_car');
    Route::get('show_quick_auction_car', [LiveAuctionController::class, 'ShowQuickAuctionCar'])->name('show_quick_auction_car');

    Route::get('calender', [HomePageController::class, 'Calender'])->name('calender');
    Route::get('details/{id}', [HomePageController::class, 'Details'])->name('details');
    Route::post('update_car_status', [HomePageController::class, 'updateCarStatus'])->name('update_car_status');
    
    Route::get('livebidding/{id}', [HomePageController::class, 'Livebidding'])->name('livebidding');
    Route::post('get_car_data', [HomePageController::class, 'GetCarData'])->name('get_car_data');

    /*----------------------------------------------
    //Contact us page (Routes)
    //----------------------------------------------*/

    Route::get('contactus', [ContactusController::class, 'Contactus'])->name('contactus');
    Route::post('storecontactus', [ContactusController::class, 'ContactusStore'])->name('storecontactus');


    /*----------------------------------------------
    //Find Your Car Filter(List Filter) Routes
    //----------------------------------------------*/
    Route::get('list', [ListController::class, 'List'])->name('list');

    //sidebar filters
    Route::get('list/filter', [ListController::class, 'filterMake'])->name('list.filter_make');

    //sidebar filtermakeactiontype
    Route::get('list/filter_make_auction_type', [ListController::class, 'FilterMakeAuctionType'])->name('list.filter_make_auction_type');

    //range filter
    Route::get('list/rangefilter', [ListController::class, 'Rangefilter'])->name('list.rangefilter');

    //sticker fiter
    Route::get('list/stickerfilter', [ListController::class, 'StickerFilter'])->name('list.stickerfilter');

    /*
    -------------------------------------------------
        Logged In user accesible routes
    -------------------------------------------------
    */

    Route::prefix('user')->middleware(['auth', 'user-access:user'])->group(function () {
  
    // Route::get('/home', [HomePageController::class, 'Homepage'])->name('user.home');

    //user hub
        Route::get('dashboard', [UserController::class, 'Dashboard'])->name('user.dashboard');
        Route::get('myvehicle', [UserController::class, 'MyVehicle'])->name('user.myvehicle');
        Route::get('wonvehicles', [UserController::class, 'Wonvehicles'])->name('user.wonvehicles');
        Route::get('lostbid', [UserController::class, 'Lostbid'])->name('user.lostbid');
        Route::get('profile', [UserController::class, 'Profile'])->name('user.profile');
        Route::post('update_profile', [UserController::class, 'UpdateProfile'])->name('user.update_profile');
        Route::post('update_profile_documents', [UserController::class, 'UpdateProfileDocument'])->name('user.update_profile_documents');
        Route::get('award', [UserController::class, 'Dashboard'])->name('user.award');
        Route::get('getcartdata', [UserController::class, 'GetCartInfo'])->name('user.getcartdata');

        //user cart
        Route::get('cart', [BookingController::class, 'Cart'])->name('user.cart');
        Route::get('checkout', [BookingController::class, 'Checkout'])->name('user.checkout');
        Route::post('checkout-buy-car', [BookingController::class, 'CheckoutStatus'])->name('user.checkout-buy-car');
        //user buy now car
        
        Route::post('buy_now_car', [BookingController::class, 'BuyNowCar'])->name('user.buy_now_car');
        Route::post('store_car_services', [BookingController::class, 'StoreCarService'])->name('user.store_car_services');
        Route::post('remove_car_service', [BookingController::class, 'RemoveCarService'])->name('user.remove_car_service');

        Route::get('pricingplan', [UserController::class, 'Pricingplan'])->name('user.pricingplan');

        //details page put bid
        Route::post('store_bid', [HomePageController::class, 'StoreBid'])->name('user.store_bid');

        //livebidding page put bid
        Route::post('auction_store_bid', [HomePageController::class, 'AuctionStoreBid'])->name('user.auction_store_bid');

        //logout
        Route::get('/logout',[HomeController::class,'UserLogout'])->name('user.logout');
    });



/*------------------------------------------
All Inspector Routes List
--------------------------------------------*/

Route::prefix('inspector')->middleware(['auth', 'user-access:inspector'])->group(function () {

    Route::get('/home', [HomeController::class, 'adminHome'])->name('inspector.home');
    Route::get('/dashboard', [CarController::class, 'InspectorDashboard'])->name('inspector.dashboard');

    //show inspector sidebar me
    // Route::get('/addcar/{id?}',[CarController::class,'Addcar'])->name('inspector.addcar');
    // Route::get('/addcar/{action?}', [CarController::class,'Addcar'])->name('inspector.addcar');
    // Route::get('/view_car',[CarController::class,'ViewCar'])->name('inspector.view_car');
    

    //store forms
    Route::post('/storecar',[CarController::class,'Storecar'])->name('inspector.storecar');
    Route::post('/store_car_form2',[CarController::class,'Storecar2'])->name('inspector.store_car_form2');
    Route::post('/store_car_form3',[CarController::class,'Storecar3'])->name('inspector.store_car_form3');
    Route::post('/store_car_form4',[CarController::class,'Storecar4'])->name('inspector.store_car_form4');
    Route::post('/store_car_form5',[CarController::class,'Storecar5'])->name('inspector.store_car_form5');
    Route::post('/store_car_form6',[CarController::class,'Storecar6'])->name('inspector.store_car_form6');
    Route::post('/store_car_form8',[CarController::class,'Storecar8'])->name('inspector.store_car_form8');
    Route::post('/store_car_form9',[CarController::class,'Storecar9'])->name('inspector.store_car_form9');
    Route::post('/store_car_form10',[CarController::class,'Storecar10'])->name('inspector.store_car_form10');
    Route::post('/store_car_form10_electric',[CarController::class,'Storecarform10electric'])->name('inspector.store_car_form10_electric');
    Route::post('/store_car_form11',[CarController::class,'Storecar11'])->name('inspector.store_car_form11');
    Route::post('/store_car_form13',[CarController::class,'Storecar13'])->name('inspector.store_car_form13');
    Route::post('/store_car_form14',[CarController::class,'Storecar14'])->name('inspector.store_car_form14');
    Route::post('/store_car_form15',[CarController::class,'Storecar15'])->name('inspector.store_car_form15');
    Route::post('/store_car_end',[CarController::class,'StorecarEnd'])->name('inspector.store_car_end');

    Route::post('/store_car_form2/battery_Store',[CarController::class,'BatteryStore'])->name('inspector.store_car_form2.battery_Store');
    
    // Delete Car
    Route::post('/delete_images',[CarController::class,'DeleteImage'])->name('inspector.delete_images');

    // Remaining delete images
    Route::get('/logout',[CarController::class,'InspectorLogout'])->name('inspector.logout');
    Route::delete('/deletecar/{car_id}', [CarController::class,'DeleteCar'])->name('inspector.deletecar');
 
});
  


/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::prefix('admin')->middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/home', [HomeController::class, 'adminHome'])->name('admin.home');
  
    //show forms
    Route::get('/dashboard', [CarController::class, 'Dashboard'])->name('admin.dashboard');

    //Admin Addcar
    Route::get('/addcar/{id?}',[CarController::class,'Addcar'])->name('admin.addcar');
    Route::get('/addcar/{action?}', [CarController::class,'Addcar'])->name('admin.addcarnew');
    Route::get('/view_car',[CarController::class,'ViewCar'])->name('admin.view_car');

    //action
    // Route::get('/addauction/{id? }', [CarController::class,'Auction'])->name('admin.addauction');
    Route::get('/addauction/{car_id?}',  [CarController::class,'Auction'])->name('admin.addauction');
    Route::post('/store_auction',  [CarController::class,'StoreAuction'])->name('admin.store_auction');


    //Admin Inspector
    Route::get('/add_inspector',[CarController::class,'AddInspector'])->name('admin.add_inspector');
    Route::post('/store_inspector',[CarController::class,'StoreInspector'])->name('admin.store_inspector');
    Route::get('/view_inspector',[CarController::class,'ViewInspector'])->name('admin.view_inspector');
    Route::delete('/delete_inspector/{inspector_id}', [CarController::class,'DeleteInspector'])->name('admin.delete_inspector');

    Route::get('/logout',[CarController::class,'Logout'])->name('admin.logout');

    // Store forms
    Route::post('/store_car/{id?}',[CarController::class,'Storecar'])->name('admin.storecar');
    Route::post('/store_car_form2',[CarController::class,'Storecar2'])->name('admin.store_car_form2');
    Route::post('/store_car_form3',[CarController::class,'Storecar3'])->name('admin.store_car_form3');
    Route::post('/store_car_form4',[CarController::class,'Storecar4'])->name('admin.store_car_form4');
    Route::post('/store_car_form5',[CarController::class,'Storecar5'])->name('admin.store_car_form5');
    Route::post('/store_car_form6',[CarController::class,'Storecar6'])->name('admin.store_car_form6');
    Route::post('/store_car_form8',[CarController::class,'Storecar8'])->name('admin.store_car_form8');
    Route::post('/store_car_form9',[CarController::class,'Storecar9'])->name('admin.store_car_form9');
    Route::post('/store_car_form10',[CarController::class,'Storecar10'])->name('admin.store_car_form10');
    Route::post('/store_car_form10_electric',[CarController::class,'Storecarform10electric'])->name('admin.store_car_form10_electric');
    Route::post('/store_car_form11',[CarController::class,'Storecar11'])->name('admin.store_car_form11');
    Route::post('/store_car_form13',[CarController::class,'Storecar13'])->name('admin.store_car_form13');
    Route::post('/store_car_form14',[CarController::class,'Storecar14'])->name('admin.store_car_form14');
    Route::post('/store_car_form15',[CarController::class,'Storecar15'])->name('admin.store_car_form15');
    Route::post('/store_car_end',[CarController::class,'StorecarEnd'])->name('admin.store_car_end');
    Route::post('/store_car_form2/battery_Store',[CarController::class,'BatteryStore'])->name('admin.store_car_form2.battery_Store');
    
    // Delete Car
    Route::post('/delete_images',[CarController::class,'DeleteImage'])->name('admin.delete_images');
    Route::delete('/deletecar/{car_id}', [CarController::class,'DeleteCar'])->name('admin.deletecar');

});

  