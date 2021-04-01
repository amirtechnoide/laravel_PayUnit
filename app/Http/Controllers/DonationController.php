<?php

namespace App\Http\Controllers;

use App\Models\PayUnit;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    //p 
    public function donate(Request $request)
    {

        $myPayment = new PayUnit(
            "ddd23a5b550f9891d59d94e313eb12ea19a57e2f",
            "f4d656f2-2a4d-4b55-992a-887eb6805cf4",
            "payunit_sand_EvfYadcNp",
            "http://127.0.0.1:8000/posts",
            "",
            "test",
            "Test payment",
            "",

            "XAF",
            "Amir"
        );

        $myPayment->makePayment($request->amount);
    }
}
