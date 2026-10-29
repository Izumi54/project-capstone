public function store(Request $request)
{
    $validated = $request->validate([
        'customer_id' => 'required|exists:customers,id',
        'jenis_pakaian' => 'required|string|max:255',
        'catatan_ukuran' => 'required|string',
        'status' => 'required|in:antri,dikerjakan,selesai',
        'harga' => 'nullable|integer|min:0',
    ]);

    \App\Models\Order::create($validated);

    return redirect()->route('orders.index')->with('success', 'Pesanan berhasil ditambahkan.');
}