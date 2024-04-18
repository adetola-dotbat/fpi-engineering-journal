<?php

namespace App\Services;

use App\Models\Manuscript;

class ManuscriptService
{

    public function __construct(protected Manuscript $manuscript, protected VolumeService $volumeService)
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
    public function store(array $data)
    {
        $volume = $this->volumeService->getLatestVolume();
        $data['volume_id']= $volume->id;
        return $this->manuscript->create($data);
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
