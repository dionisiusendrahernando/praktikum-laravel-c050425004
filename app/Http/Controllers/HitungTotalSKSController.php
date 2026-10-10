<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Http\Request;

class HitungTotalSKSController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // Menghitung total SKS dari semua matakuliah
        $totalSKS = Matakuliah::sum('sks');
        return "Jumlah total SKS dari semua matakuliah adalah: {$totalSKS}";
    }
}
