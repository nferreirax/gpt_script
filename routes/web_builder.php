<?php



Route::resource('admins', 'AdminController');

Route::resource('achievementLevels', 'AchievementLevelsController');

Route::resource('achievementLogs', 'AchievementLogController');

Route::resource('adminLoginLogs', 'AdminLoginLogController');

Route::resource('creditDebits', 'CreditDebitController');

Route::resource('creditDebitManuallies', 'CreditDebitManuallyController');