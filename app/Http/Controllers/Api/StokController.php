<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\StockModel;
use Illuminate\Http\Request;

class StokController extends Controller
{
    public function index()
    {
        return StockModel::all();
    }
    public function store(Request $request)
    {
        $stok = StockModel::create($request->all());
        return response()->json($stok,201);
    }
    public function show(StockModel $stok)
    {
        return StockModel::find($stok);
    }
    public function update(Request $request, StockModel $stok)
    {
        $stok->update($request->all());
        return StockModel::find($stok);
    }
    public function destroy(StockModel $stok)
    {
        $stok->delete();

        return response()->json([
            'success'   => true,
            'message'   => 'Data Terhapus',
        ]);
    }
}