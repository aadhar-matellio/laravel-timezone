<?php

namespace aadhar_matellio\timezones;

use Carbon\Carbon;
use App\Http\Controllers\Controller;

class TimezonesController extends Controller
{
    public function index($timezone)
    {
        echo Carbon::now($timezone)->toDateTimeString();
    }
}