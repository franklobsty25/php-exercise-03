<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


Route::get('/orders/{orderId}', function ($orderId) {
    function get_order_with_details($orderId) {
        $orderDetails = DB::select('select * from order_details where order_id = ?', array($orderId));

        return $orderDetails;
    }

    get_order_with_details($orderId);

    /**
     *  Improvements that can be made to the code is by using eloquent relationships
     */

});
