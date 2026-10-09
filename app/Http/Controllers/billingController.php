<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillingController extends Controller
{
    public function index()
    {
        $bills = [
            ['id' => 1, 'customer' => 'Ahmad', 'amount' => 500, 'status' => 'Paid'],
            ['id' => 2, 'customer' => 'Mohammad', 'amount' => 750, 'status' => 'Pending'],
            ['id' => 3, 'customer' => 'Mahmood', 'amount' => 300, 'status' => 'Paid'],
        ];

        return view('billing.index', compact('bills'));
    }

    public function create()
    {
        return view('billing.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('billing.index');
    }

    public function show(string $id)
    {
        $bill = [
            'id' => $id,
            'customer' => 'Ahmad',
            'amount' => 500,
            'status' => 'Paid',
        ];

        return view('billing.show', compact('bill'));
    }

    public function edit(string $id)
    {
        $bill = [
            'id' => $id,
            'customer' => 'Ahmad',
            'amount' => 500,
            'status' => 'Paid',
        ];

        return view('billing.edit', compact('bill'));
    }

    public function update(Request $request, string $id)
    {
        return redirect()->route('billing.index');
    }

    public function destroy(string $id)
    {
        return redirect()->route('billing.index');
    }
}
