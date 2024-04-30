<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        $this->support->create($request->all());

        return redirect()->route('supports.index');
    }

    public function edit(Support $support)
    {
        return view('admin.supports.edit', compact('support'));
    }

    public function update(Request $request, Support $support)
    {
        $support->update($request->all());

        return redirect()->route('supports.index');
    }

    public function show(Support $support)
    {
        if(! $support) {
            return redirect()->back();
        }
        return view('admin.supports.show', compact('support'));
    }
}
