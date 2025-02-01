<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailPreviewController;

Route::get('api/v1/email/preview', EmailPreviewController::class); 