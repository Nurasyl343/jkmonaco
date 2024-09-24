<?php

namespace App\Http\Controllers;

use App\Exports\ApplicationsExport;
use App\Models\Application;
use Illuminate\Http\Request;
use App\Http\Requests\ApplicationCreateRequest;
use Maatwebsite\Excel\Facades\Excel;

class ApplicationController extends Controller
{
    public function admin(Request $request)
    {
        $applications = Application::all();
        return view('admin', ['applications' => $applications]);
    }

    public function create(ApplicationCreateRequest $request)
    {
        $validated = $request->validated();

        Application::create($validated);

        return redirect()->route('main')->with('success', 'Заявка успешно отправлена!');
    }

    public function exportToExcel()
    {
        return Excel::download(new ApplicationsExport, 'applications.xlsx');
    }
}
