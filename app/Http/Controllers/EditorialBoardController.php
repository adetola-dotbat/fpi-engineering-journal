<?php

namespace App\Http\Controllers;

use App\Enums\StatusEnum;
use App\Helper\FileHelper;
use App\Http\Requests\EditorialBoardRequest;
use App\Services\DesignationService;
use App\Services\EditorialBoardService;
use Illuminate\Http\Request;

class EditorialBoardController extends Controller
{

    public function __construct(protected EditorialBoardService $editorialBoardService, protected DesignationService $designationService)
    {
    }
    public function index()
    {
        $data = [
            'editorials' => $this->editorialBoardService->all(),
        ];
        return view('user.pages.index', $data);
    }

    public function create()
    {
        $data = [
            'title_page' => 'Editorial Board',
            'editorials' => $this->editorialBoardService->all(),
            'designations' => $this->designationService->all(),
        ];
        return view('administration.pages.editorial-board.index', $data);
    }
    public function store(EditorialBoardRequest $request)
    {
        $data = $request->validated();

    // Handle the image upload using a dedicated method or service
    if ($request->hasFile('image')) {
        $data['image'] = FileHelper::uploadsImage('image', $request, 'images/about');
    }

    $this->editorialBoardService->store($data);
        return redirect()->route('editorial-board.create')->with('success', 'Editorial member added successfully');
    }
    public function show($editorial)
    {
        $data = [
            'title_page' => 'View Board Member',
            'editorial' => $this->editorialBoardService->getEditorialBoardById($editorial),
        ];
        return view('administration.pages.editorial-board.view', $data);
    }
    public function edit($editorial)
    {
        $data = [
            'title_page' => 'Edit Editorial Board',
            'editorials' => $this->editorialBoardService->all(),
            'editorial' => $this->editorialBoardService->getEditorialBoardById($editorial),
        ];
        return view('admin.pages.editorial.edit', $data);
    }
    public function update(Request $request, $editorial)
    {
        $data = $request->all();
        $status = $request->input('status');
        if ($status === null || $status == StatusEnum::PENDING) {
            $data['status'] = StatusEnum::PENDING;
        } else {
            $data['status'] = StatusEnum::ACTIVATE;
        }
        $this->editorialBoardService->update($editorial, $data);
        return redirect()->back();
    }
    public function destroy($editorial)
    {
        $this->editorialBoardService->destroy($editorial);
        return redirect()->back();
    }
}
