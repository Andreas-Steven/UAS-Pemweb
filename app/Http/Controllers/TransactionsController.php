<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Charts\UserChart;

use App\TransactionsModel;

class TransactionsController extends Controller
{
    public function index()
    {
        // https://stackoverflow.com/questions/53563704/laravel5-7-get-sum-for-current-month-using-model-returned-in-view
        // https://stackoverflow.com/questions/25173471/laravel-simple-month-selection
        // https://charts.erik.cat/
        //https://belajarphp.net/tutorial-membuat-chart-laravel/
        $data = collect([]); // Could also be an array
        for ($Month = 1; $Month < 12; $Month++) {
            // Could also be an array_push if using an array rather than a collection.
            $data->push(TransactionsModel::whereMonth('created_at', $Month)->sum('PurchaseAmount'));
        }

        $usersChart = new UserChart;
        $usersChart->labels(['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'Septembar', 'Oktober', 'November', 'Desember']);
        $usersChart->dataset('Total Penjualan', 'bar', $data)->color("rgb(255, 99, 132)")->backgroundcolor("rgb(255, 99, 132)");;
        return view('Admin/Admin-Dashbord', [ 'usersChart' => $usersChart ] );
    }
}