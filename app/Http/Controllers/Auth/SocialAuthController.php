<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Social;
use App\Models\User;
use App\Models\Profile;
use App\Traits\ActivationTrait;
use App\Traits\CaptureIpTrait;
use Carbon\Carbon;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Log;
use Laravel\Socialite\Facades\Socialite;
use jeremykenedy\LaravelRoles\Models\Permission;
use jeremykenedy\LaravelRoles\Models\Role;

class SocialAuthController extends Controller
{
    //
}
