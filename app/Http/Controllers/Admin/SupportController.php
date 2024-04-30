<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\SupportRequest;
use App\Models\Support;
use App\Services\SupportService;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    private $support;

    public function __construct(
        protected SupportService $service
    ) {
    }

    public function index(Request $request)
    {
        $supports = $this->service->getAll($request->get('filter'));

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

    public function edit(string|int $id)
    {
        if(! $support = $this->service->findOne($id)) {
            return redirect()->back();
        }

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

    public function show(string|int $id)
    {
        if(! $support = $this->service->findOne($id)) {
            return redirect()->back();
        }

        return view('admin.supports.show', compact('support'));
    }

    public function destroy(string|int $id)
    {
        $this->service->delete($id);

        return redirect()->route('supports.index');
    }
}
