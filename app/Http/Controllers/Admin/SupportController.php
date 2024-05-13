<?php

namespace App\Http\Controllers\Admin;

use App\DTO\{
    CreateSupportDTO,
    UpdateSupportDTO
};
use App\Http\Controllers\Controller;
use App\Http\Requests\admin\SupportRequest;
use App\Services\SupportService;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function __construct(
        protected SupportService $service
    ) {
    }

    public function index(Request $request)
    {
        $supports = $this->service->paginate(
            page: 1,
            totalPerPage: 20,
            filter: $request->get('filter')
        );

        return view('admin.supports.index', compact('supports'));
    }

    public function create()
    {
        return view('admin.supports.create');
    }

    public function store(SupportRequest $request)
    {
        $this->service->new(
            CreateSupportDTO::makeFromRequest($request)
        );

        return redirect()->route('supports.index');
    }

    public function edit(string|int $id)
    {
        if(! $support = $this->service->findOne($id)) {
            return redirect()->back();
        }

        return view('admin.supports.edit', compact('support'));
    }

    public function update(SupportRequest $request, $id)
    {
        if(! $support = $this->service->findOne($id)) {
            return redirect()->back();
        }

        $this->service->update(
            UpdateSupportDTO::makeFromRequest($request, $support->id)
        );

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
