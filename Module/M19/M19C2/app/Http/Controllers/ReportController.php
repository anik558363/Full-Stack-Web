<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function summary(Request $request)
    {

        $from = $request->query('from');
        $to = $request->query('to');

        if (!$from || !$to) {
            $to = now()->toDateString();
            $from = now()->subDays(30)->toDateString();
        }

        // base query

        $orderQuery = Order::query()->betweenDates($from, $to);

        return $orderQuery;

    }
}
