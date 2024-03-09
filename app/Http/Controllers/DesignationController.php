<?php

namespace App\Http\Controllers;

use App\Http\Requests\DesignationRequest;
use App\Services\DesignationService;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    public function __construct(protected DesignationService $designationService)
    {
    }
    public function index()
    {
        $data = [
            'designations' => $this->designationService->all(),
        ];
        return view('user.pages.index', $data);
    }
    public function create()
    {
        $data = [
            'title_page' => 'Designation',
            'designations' => $this->designationService->all(),
        ];
        return view('administration.pages.designation.index', $data);
    }
    public function store(DesignationRequest $request)
    {
        $this->designationService->store($request->validated());
        return redirect()->back()->with('success', 'Designation successfully added');
    }
    public function edit($designation)
    {
        $data = [
            'title_page' => 'Edit Designation',
            'designations' => $this->designationService->all(),
            'designation' => $this->designationService->getDesignationById($designation),
        ];
        return view('administration.pages.designation.edit', $data);
    }
    public function update(DesignationRequest $request, $designation)
    {
        $this->designationService->update($designation, $request->validated());
        return redirect()->route('designation.create')->with('success', 'Designation updated successfully');
    }
    public function destroy($designation)
    {
        $this->designationService->destroy($designation);
        return redirect()->route('designation.create')->with('success', 'Designation deleted successfully');
    }
}
