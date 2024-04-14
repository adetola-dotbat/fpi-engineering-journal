<?php

namespace App\Services;

use App\Models\EditorialBoard;
use App\Traits\FileHelper;
use App\Traits\UploadImage;
use Illuminate\Http\UploadedFile;

class EditorialBoardService
{
    public function __construct(protected EditorialBoard $editorialBoard)
    {
    }

    public function all()
    {
        return $this->editorialBoard->get();
    }
    public function getEditorialBoardById($editorialBoard)
    {
        return $this->editorialBoard->findOrFail($editorialBoard);
    }
    public function getEditorInChief(){
        return $this->editorialBoard->first();
    }
    public function store(array $data)
    {
        return $this->editorialBoard->create($data);
    }
    public function update($editorialBoard, array $data)
    {
        $editorialBoard = $this->getEditorialBoardById($editorialBoard);
        return $editorialBoard->update($data);
    }
    public function destroy($editorialBoard)
    {
        $editorialBoard = $this->getEditorialBoardById($editorialBoard);
        $editorialBoard->delete();
    }
}
