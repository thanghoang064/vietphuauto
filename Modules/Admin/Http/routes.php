<?php

Route::group(['prefix' => 'authenticate','middleware' => 'web','namespace' =>'App\Http\Controllers\AuthAdmin'],function(){
    Route::get('/login','AdminLoginController@getLoginAdmin' )->name('AdminLogin');
    Route::post('/login','AdminLoginController@postLoginAdmin');

    Route::get('/logout','AdminLoginController@getLogoutAdmin')->name('AdminLogout');
});


Route::group(['middleware' => ['web','auth:admins'], 'prefix' => 'api-admin', 'namespace' => 'Modules\Admin\Http\Controllers'], function()
{
   
    Route::get('/','DashboardController@index')->name('get.chart');
    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
    Route::group(['prefix' => 'menu'], function (){
        Route::get('/','AdminMenuController@getListMenu')->name('get.list.menu');
        Route::get('/create','AdminMenuController@create')->name('get.create.menu');
        Route::post('/create','AdminMenuController@store');

        Route::get('/update/{id}','AdminMenuController@edit')->name('get.edit.menu');
        Route::post('/update/{id}','AdminMenuController@update');

        Route::post('ajax/active/{id}','AdminMenuController@active')->name('ajax.post.active.menu');
        Route::post('ajax/hot/{id}','AdminMenuController@hot')->name('ajax.post.hot.menu');
        Route::post('ajax/delete/{id}','AdminMenuController@delete')->name('ajax.post.delete.menu');
    });


//    Route::get('/chart', 'DashboardController@index')->name('get.chart');



    Route::group(['prefix' => 'guest'], function (){
        Route::get('/','AdminGuestController@getListGuest')->name('get.list.guest');
        Route::get('/update/{id}','AdminGuestController@edit')->name('get.edit.guest');
        Route::post('/update/{id}','AdminGuestController@update')->name('get.update.guest');

        Route::post('/ajax/active/order/{id}','AdminGuestController@activeOrder')->name('ajax.post.order.active');
        Route::post('/ajax/preview/order/{id}','AdminGuestController@previewOrder')->name('ajax.post.preview.order');
        Route::post('/ajax/delete/order/{id}','AdminGuestController@deleteOrder')->name('ajax.post.order.delete');
    });

    Route::group(['prefix' => 'comment'], function (){
        Route::get('/','AdminCommentController@getListComment')->name('get.list.comment');
        Route::post('/ajax/delete/{id}','AdminCommentController@delete')->name('ajax.post.comment.delete');
        Route::post('ajax/active/{id}','AdminCommentController@active')->name('ajax.post.comment.active');
    });



    Route::group(['prefix' => 'article'], function (){
        Route::get('/','AdminArticleController@getListArticle')->name('get.list.article');
        Route::get('/create','AdminArticleController@create')->name('get.create.article');
        Route::post('/create','AdminArticleController@store');

        Route::get('/update/{id}','AdminArticleController@edit')->name('get.edit.article');
        Route::post('/update/{id}','AdminArticleController@update');
        Route::post('ajax/delete/{id}','AdminArticleController@delete')->name('ajax.post.delete.article');

        Route::post('ajax/active/{id}','AdminArticleController@active')->name('ajax.post.active.article');
        Route::get('ajax/delete/keyword','AdminArticleController@deleteKeyword')->name('ajax.post.delete.keyword.article');
        Route::post('ajax/preview/{id}','AdminArticleController@previewArticle')->name('ajax.post.preview.article');

    });

    Route::group(['prefix' => 'info'], function(){
        Route::get('/','AdminInformationController@getInfo')->name('get.info.information');
        Route::post('/','AdminInformationController@saveInfo');
    });

    Route::group(['prefix' => 'slide'], function(){
        Route::get('/','AdminSlideController@getListSlide')->name('get.list.slide');
        Route::get('/create','AdminSlideController@create')->name('get.create.slide');
        Route::post('/create','AdminSlideController@store')->name('get.store.slide');

        Route::get('/update/{id}','AdminSlideController@edit')->name('get.edit.slide');
        Route::post('/update/{id}','AdminSlideController@update');

        Route::post('/delete/{id}','AdminSlideController@delete')->name('get.delete.slide');

    });

    Route::group(['prefix' => 'store'], function(){
        Route::get('/','AdminStoreController@getListStore')->name('get.list.store');
        Route::get('/create','AdminStoreController@create')->name('get.create.store');
        Route::post('/create','AdminStoreController@store')->name('get.store.store');

        Route::get('/update/{id}','AdminStoreController@edit')->name('get.edit.store');
        Route::post('/update/{id}','AdminStoreController@update');

        Route::post('/ajax/delete/{id}','AdminStoreController@delete')->name('get.delete.store');
    });



    Route::group(['prefix' => 'image'], function(){
        Route::get('/','AdminImageController@getListImage')->name('get.list.image');
        Route::get('/create','AdminImageController@create')->name('get.create.image');
        Route::post('/create','AdminImageController@store')->name('get.store.image');

        Route::get('/delete/all','AdminImageController@deleteAll')->name('post.image.delete.all');

        Route::get('/ajax/list/','AdminImageController@getListImageAjax')->name('ajax.get.list.image');
        Route::post('/ajax/delete/{id}','AdminImageController@deleteImageAjax')->name('ajax.post.delete.image');
    });

    Route::group(['prefix' => 'admin'], function (){
        Route::get('/','AdminAdminController@getListAdmin')->name('get.list.admin');
        Route::get('/create','AdminAdminController@create')->name('get.create.admin');
        Route::post('/create','AdminAdminController@store');
        Route::get('/update/{id}','AdminAdminController@edit')->name('get.edit.admin');
        Route::post('/update/{id}','AdminAdminController@update');

        Route::get('/delete/{id}','AdminAdminController@delete')->name('get.delete.admin');

        Route::post('ajax/delete/{id}','AdminAdminController@delete')->name('ajax.post.delete.admin');
    });

    Route::group(['prefix' => 'permission'], function (){
        Route::get('/','AdminPermissionController@getListPermission')->name('get.list.permission');
        Route::get('/create','AdminPermissionController@create')->name('get.create.permission');
        Route::post('/create','AdminPermissionController@store');

        Route::get('/update/{id}','AdminPermissionController@edit')->name('get.edit.permission');
        Route::post('/update/{id}','AdminPermissionController@update');

        Route::get('/delete/{id}','AdminPermissionController@delete')->name('get.delete.permission');
    });

    Route::group(['prefix' => 'role'], function (){
        Route::get('/','AdminRoleController@getListRole')->name('get.list.role');
        Route::get('/create','AdminRoleController@create')->name('get.create.role');
        Route::post('/create','AdminRoleController@store');

        Route::get('/update/{id}','AdminRoleController@edit')->name('get.edit.role');
        Route::post('/update/{id}','AdminRoleController@update');

        Route::get('/delete/{id}','AdminRoleController@delete')->name('get.delete.role');
    });

    Route::group(['prefix' => 'order'], function(){
        Route::get('/', 'AdminOrderController@index')->name('get.list.orders');
        Route::get('/update/{id}', 'AdminOrderController@edit')->name('get.edit.order');
        Route::post('/update/{id}','AdminOrderController@update')->name('post.edit.order');
        Route::get('delete/{id}', 'AdminOrderController@deleteOrder')->name('delete.orders');
        Route::post('/ajax/delete/order/{id}','AdminOrderController@deleteOrder')->name('ajax.post.order.delete');
        
        Route::post('/ajax/preview/order/{id}','AdminOrderController@previewOrderUser')->name('ajax.order.preview.order');


        Route::post('/ajax/preview/order/update/{id}','AdminOrderController@previewUpdateOrder')->name('ajax.order.preview.update');

        Route::post('/ajax/preview/print','AdminOrderController@previewPrint')->name('ajax.order.preview.print');


        Route::post('/ajax/select/order/{id}','AdminOrderController@selectStatusOrder')->name('ajax.post.order.select');

        Route::post('/ajax/deposit/order','AdminOrderController@deposit')->name('ajax.post.order.deposit');


        Route::post('/ajax/staff/order','AdminOrderController@staff')->name('ajax.post.order.staff');

        Route::post('/ajax/car-viewing/order','AdminOrderController@carViewingDay')->name('ajax.post.order.car_viewing_day');

        Route::post('/ajax/unified-price/order','AdminOrderController@unifiedPrice')->name('ajax.post.order.unified_price');

        Route::post('/ajax/cacncel-appoinment/order','AdminOrderController@cancelAppointment')->name('ajax.post.order.cancel_appointment');

        Route::post('/ajax/success-payment/order','AdminOrderController@successPayment')->name('ajax.post.order.success_payment');

        Route::post('/ajax/cancel-buy-anymore/order','AdminOrderController@cancelDoNotBuyAnymore')->name('ajax.post.order.cancel_appointment');

    });
            Route::get('/print', 'AdminPdfController@index')->name('get.print');

        Route::group(['prefix' => 'rating'], function(){
        Route::get('/', 'AdminRatingController@index')->name('get.list.rating');
        Route::post('/ajax/delete/{id}','AdminRatingController@delete')->name('ajax.post.rating.delete');
    });
});