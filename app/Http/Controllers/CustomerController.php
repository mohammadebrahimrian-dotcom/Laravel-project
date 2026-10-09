<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            ['id' => 1, 'name' => 'Ahmad', 'phone' => '0700000001', 'email' => 'ahmad@example.com'],
            ['id' => 2, 'name' => 'Mohammad', 'phone' => '0700000002', 'email' => 'mohammad@example.com'],
            ['id' => 3, 'name' => 'Mahmood', 'phone' => '0700000003', 'email' => 'mahmood@example.com'],
        ];

        return view('customers.index', compact('customers'));
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('customers.index');
    }

    public function show(string $id)
    {
        $customer = [
            'id' => $id,
            'name' => 'Ahmad',
            'phone' => '0700000001',
            'email' => 'ahmad@example.com',
        ];

        return view('customers.show', compact('customer'));
    }

    public function edit(string $id)
    {
        $customer = [
            'id' => $id,
            'name' => 'Ahmad',
            'phone' => '0700000001',
            'email' => 'ahmad@example.com',
        ];

        return view('customers.edit', compact('customer'));
    }

    public function update(Request $request, string $id)
    {
        return redirect()->route('customers.index');
    }

    public function destroy(string $id)
    {
        return redirect()->route('customers.index');
    }
}
