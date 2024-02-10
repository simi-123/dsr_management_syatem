<?php
use Illuminate\Support\Facades\{Route,Auth};
// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);
