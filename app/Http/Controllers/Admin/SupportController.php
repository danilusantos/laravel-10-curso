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
}
