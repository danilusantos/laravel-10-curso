<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\SupportRequest;
use App\Models\Support;

class SupportController extends Controller
{
    private $support;

    public function __construct(Support $support)
    {
        $this->support = $support;
    }
    public function index()
    {
        $supports = $this->support->all();

        return view('admin.supports.index', compact('supports'));
    }

    public function create()
    {
        return view('admin.supports.create');
    }

    public function store(SupportRequest $request)
    {
        $this->support->create($request->validated());

        return redirect()->route('supports.index');
    }

    public function edit(Support $support)
    {
        return view('admin.supports.edit', compact('support'));
    }

    public function update(SupportRequest $request, Support $support)
    {
        if(! $support) {
            return redirect()->back();
        }

        $support->update($request->validated());

        return redirect()->route('supports.index');
    }

    public function show(Support $support)
    {
        if(! $support) {
            return redirect()->back();
        }
        return view('admin.supports.show', compact('support'));
    }

    public function destroy(Support $support)
    {
        if(! $support) {
            return redirect()->back();
        }

        $support->delete();

        return redirect()->route('supports.index');
    }
}
