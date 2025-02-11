<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CompanyInfo;
use Illuminate\Http\Request;

class AdminCompanyInfoController extends Controller
{
    public function index(Request $request)
    {
        $company_info = CompanyInfo::all()->toArray();

        return view('admin.page_company_info.index', ['company_info' => $company_info]);
    }

    public function new(Request $request)
    {
        if ($request->isMethod('POST')) {

            $data = $request->request->all();
            unset($data['_token']);

            CompanyInfo::create($data);

            return redirect()->route('admin_page_company_info_index');
        }

        return view('admin.page_company_info.new', ['types' => CompanyInfo::TYPE]);
    }

    public function edit(Request $request, $id)
    {
        $company_info = CompanyInfo::find($id);
        if ($request->isMethod('PATCH')) {

            $data = $request->request->all();
            unset($data['_token']);

            $data['active'] = $request->has('active') ? true : false;

            $company_info->update($data);

            return redirect()->route('admin_page_company_info_edit', ['id' => $id]);
        }


        return view('admin.page_company_info.edit', $company_info, ['types' => CompanyInfo::TYPE]);
    }

    public function delete($id)
    {
        $company_info = CompanyInfo::find($id);
        $company_info->delete();

        return redirect()->route('admin_page_company_info_index');
    }
}
