<?php

namespace App\Http\Controllers;

use App\Models\CompanyInfo;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::all()->toArray();
        $company_info = CompanyInfo::where('active', 1)->get()->toArray();

        return view('home.index', [
            'products' => $products,
            'company_info' => $this->prepareCompanyInfo($company_info),
        ]);
    }

    private function prepareCompanyInfo(array $companyInfo): array
    {
        $result = [];
        foreach ($companyInfo as $item) {
            $result[$item['type']] = $item;
        }
        return $result;
    }
}
