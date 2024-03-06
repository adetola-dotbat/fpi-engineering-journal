<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditorialBoardRequest;
use App\Services\EditorialBoardService;
use Illuminate\Http\Request;

class EditorialBoardController extends Controller
{
    public function __construct(protected EditorialBoardService $editorialBoardService)
    {
    }
    public function index()
    {
        $data = [
            'editorials' => $this->editorialBoardService->all(),
        ];
        return view('user.pages.index', $data);
    }

    public function editorialBoard()
    {
        $data = [
            'title_page' => 'Editorial Board',
            'editorials' => $this->editorialBoardService->all(),
        ];
        return view('admin.pages.editorial.index', $data);
    }
    public function edit($editorial)
    {
        $data = [
            'title_page' => 'Edit Designation',
            'editorials' => $this->editorialBoardService->all(),
            'designation' => $this->editorialBoardService->getEditorialBoardById($editorial),
        ];
        return view('admin.pages.editorial.edit', $data);
    }
    public function update(EditorialBoardRequest $request, $editorial)
    {
        $this->editorialBoardService->update($editorial, $request->validated());
        return redirect()->back();
    }
    public function destroy($editorial)
    {
        $this->editorialBoardService->destroy($editorial);
        return redirect()->back();
    }
}
