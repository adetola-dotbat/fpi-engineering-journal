<?php

namespace App\Services;

use App\Models\Volume;

class VolumeService
{

    public function __construct(protected Volume $volume)
    {
    }

    public function all()
    {
        return $this->volume->get();
    }
    public function getVolumeById($volume)
    {
        return $this->volume->findOrFail($volume);
    }
    public function store(array $data)
    {
        $this->volume->create($data);
    }
    public function update($volume, array $data)
    {
        $volume = $this->getVolumeById($volume);
        return $volume->update($data);
    }
    public function destroy($volume)
    {
        $volume = $this->getVolumeById($volume);
        $volume->delete();
    }
}
