<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('customer')->latest()->get();

        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        $customers = Customer::all();

        return view('orders.create', compact('customers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_id' => 'required',
            'jenis_pakaian' => 'required',
            'catata_ukuran' => 'required',
            'harga' => 'nullable|integer',
        ]);

        Order::create($request->all());

        return redirect()->route('orders.index')->with('success', 'persanan berhasil', 'Pesanan berhasil ditambahkan!');
    }
}
