<?php

namespace App\Services;

use App\Models\EditorialBoard;

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
