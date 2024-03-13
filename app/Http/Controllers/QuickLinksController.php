<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuickLinkRequest;
use App\Services\QuickLinksService;
use Illuminate\Http\Request;

class QuickLinksController extends Controller
{
    public function __construct(protected QuickLinksService $quickLinksService)
    {
    }
    public function index()
    {
        $data = [
            'designations' => $this->quickLinksService->all(),
        ];
        return view('user.pages.index', $data);
    }
    public function create()
    {
        $data = [
            'title_page' => 'Quick links',
            'quickLinks' => $this->quickLinksService->all(),
        ];
        return view('administration.pages.quick-link.index', $data);
    }
    public function store(QuickLinkRequest $request)
    {
        $this->quickLinksService->store($request->validated());
        return redirect()->back()->with('success', 'Quick link successfully added');
    }
    public function edit($quickLink)
    {
        $data = [
            'title_page' => 'Edit quickLink',
            'quickLinks' => $this->quickLinksService->all(),
            'quickLink' => $this->quickLinksService->getQuickLinkById($quickLink),
        ];
        return view('administration.pages.quick-link.edit', $data);
    }
    public function update(QuickLinkRequest $request, $quickLink)
    {
        $this->quickLinksService->update($quickLink, $request->validated());
        return redirect()->route('quick-link.create')->with('success', 'Quick link updated successfully');
    }
    public function destroy($quickLink)
    {
        $this->quickLinksService->destroy($quickLink);
        return redirect()->route('quick-link.create')->with('success', 'Quick link deleted successfully');
    }
}
