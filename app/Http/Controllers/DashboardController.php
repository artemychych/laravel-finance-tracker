<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $expensesByCategory = Transaction::join('categories', 'transactions.category_id', '=', 'categories.id')
            ->where('categories.type', 'expense')
            ->select('categories.name', DB::raw('SUM(transactions.amount) as total'))
            ->groupBy('categories.name')
            ->get();

        $labels = $expensesByCategory->pluck('name');
        $data = $expensesByCategory->pluck('total');

        return view('dashboard', compact('labels', 'data'));
    }
}