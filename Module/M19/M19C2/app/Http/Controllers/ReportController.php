<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\Payment;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;

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

        $totalCustomer = Customer::count();
        $totalOrder = (clone $orderQuery)->count();
        $totalRevenue = (clone $orderQuery)->sum('grand_total');

        $totalPaid = Payment::whereHas('order', function ($query) use ($from, $to) {
            $query->betweenDates($from, $to);
        })->sum('amount');

        $totaDue =  $totalRevenue - $totalPaid;


        $revenueByStatus = (clone $orderQuery)
            ->selectRaw('status, COUNT(*) as total_orders, SUM(grand_total) as total_revenue')
            ->groupBy('status')
            ->get();

        return response()->json([
            'totalCustomer' => $totalCustomer,
            'totalOrder' => $totalOrder,
            'totalRevenue' => $totalRevenue,
            'totalPaid' => $totalPaid,
            'totaDue' => $totaDue,
            'revenueByStatus' => $revenueByStatus,

        ]);
    }
}
