<?php

namespace App\Services;

use App\Models\CallForPaper;

class CallForPaperService
{

    public function __construct(protected CallForPaper $paper)
    {
    }

    public function all()
    {
        return $this->paper->get();
    }
    public function getPaperById($paper)
    {
        return $this->paper->findOrFail($paper);
    }
    public function update($paper, array $data)
    {
        $paper = $this->getPaperById($paper);
        return $paper->update($data);
    }
    public function destroy($paper)
    {
        $paper = $this->getPaperById($paper);
        $paper->delete();
    }
}
