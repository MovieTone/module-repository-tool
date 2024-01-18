<?php

namespace App\Http\Controllers;

use App\Http\Requests\ModuleFormRequest;
use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function create()
    {
        return view('module.create');
    }

    public function store(ModuleFormRequest $request)
    {
        $data = $request->validated();

        $module = Module::create($data);
        return redirect('/add-module')->with('message', 'Module created');
    }

    public function index()
    {
        $modules = Module::all();
        return view('module.index', compact('modules'));
    }

    public function edit($code)
    {
        $module = Module::find($code);
        return view('module.edit', compact('module'));
    }

    public function update(ModuleFormRequest $request, $code)
    {
        $data = $request->validated();

        $module = Module::where('code', $code)->update([
            'name' => $data['name'],
            'faculty' => $data['faculty'],
            'department' => $data['department'],
            'lecturer' => $data['lecturer'],
            'credit' => $data['credit']
        ]);

        return redirect('/show-modules')->with('message','The module has been updated');
    }

    public function delete($code)
    {
        $module = Module::find($code)->delete();
        return redirect('/show-modules')->with('message','The module has been removed');
    }
}
