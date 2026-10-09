<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimcardController extends Controller
{
    public function index()
    {
        $simcards = [
            ['id' => 1, 'number' => '0700000001', 'type' => 'Prepaid', 'status' => 'Active'],
            ['id' => 2, 'number' => '0700000002', 'type' => 'Postpaid', 'status' => 'Active'],
            ['id' => 3, 'number' => '0700000003', 'type' => 'Prepaid', 'status' => 'Inactive'],
        ];

        return view('simcards.index', compact('simcards'));
    }

    public function create()
    {
        return view('simcards.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('simcards.index');
    }

    public function show(string $id)
    {
        $simcard = [
            'id' => $id,
            'number' => '0700000001',
            'type' => 'Prepaid',
            'status' => 'Active',
        ];

        return view('simcards.show', compact('simcard'));
    }

    public function edit(string $id)
    {
        $simcard = [
            'id' => $id,
            'number' => '0700000001',
            'type' => 'Prepaid',
            'status' => 'Active',
        ];

        return view('simcards.edit', compact('simcard'));
    }

    public function update(Request $request, string $id)
    {
        return redirect()->route('simcards.index');
    }

    public function destroy(string $id)
    {
        return redirect()->route('simcards.index');
    }
}
