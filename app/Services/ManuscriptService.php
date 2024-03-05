<?php

namespace App\Services;

use App\Models\Manuscript;

class ManuscriptService
{

    public function __construct(protected Manuscript $manuscript)
    {
    }

    public function all()
    {
        return $this->manuscript->get();
    }
    public function getManuscriptById($manuscript)
    {
        return $this->manuscript->findOrFail($manuscript);
    }
    public function update($manuscript, array $data)
    {
        $manuscript = $this->getManuscriptById($manuscript);
        return $manuscript->update($data);
    }
    public function destroy($manuscript)
    {
        $manuscript = $this->getManuscriptById($manuscript);
        $manuscript->delete();
    }
}
