<?php



Route::resource('admins', 'AdminController');

Route::resource('achievementLevels', 'AchievementLevelsController');

Route::resource('achievementLogs', 'AchievementLogController');

Route::resource('adminLoginLogs', 'AdminLoginLogController');

Route::resource('creditDebits', 'CreditDebitController');

Route::resource('creditDebitManuallies', 'CreditDebitManuallyController');

Route::resource('messages', 'MessageController');

Route::resource('offersHistories', 'offersHistoryController');

Route::resource('offersLogs', 'offersLogController');

Route::resource('offerwallNetworks', 'offerwallNetworksController');

Route::resource('storeCategories', 'StoreCategoryController');

Route::resource('storeGiftCards', 'StoreGiftCardsController');

Route::resource('storeOrders', 'StoreOrdersController');

Route::resource('storeOrdersCryptos', 'StoreOrdersCryptoController');

Route::resource('storeProducts', 'StoreProductsController');

Route::resource('usersAchievements', 'UsersAchievementController');

Route::resource('usersLoginLogs', 'UsersLoginLogController');

Route::resource('userWallets', 'UserWalletController');

Route::resource('vipLevels', 'VipLevelController');

Route::resource('wallets', 'WalletsController');