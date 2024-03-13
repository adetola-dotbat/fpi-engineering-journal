<?php

namespace App\Http\Controllers;

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
            'title_page' => 'Designation',
            'designations' => $this->quickLinksService->all(),
        ];
        return view('administration.pages.designation.index', $data);
    }
    public function store(DesignationRequest $request)
    {
        $this->quickLinksService->store($request->validated());
        return redirect()->back()->with('success', 'Designation successfully added');
    }
    public function edit($designation)
    {
        $data = [
            'title_page' => 'Edit Designation',
            'designations' => $this->quickLinksService->all(),
            'designation' => $this->quickLinksService->getDesignationById($designation),
        ];
        return view('administration.pages.designation.edit', $data);
    }
    public function update(DesignationRequest $request, $designation)
    {
        $this->quickLinksService->update($designation, $request->validated());
        return redirect()->route('designation.create')->with('success', 'Designation updated successfully');
    }
    public function destroy($designation)
    {
        $this->quickLinksService->destroy($designation);
        return redirect()->route('designation.create')->with('success', 'Designation deleted successfully');
    }
}
