<?php

namespace App\Services;

use App\Models\Guideline;

class GuideLineService
{

    public function __construct(protected Guideline $guideline)
    {
    }

    public function all()
    {
        return $this->guideline->get();
    }
    public function getGuidelineById($guideline)
    {
        return $this->guideline->findOrFail($guideline);
    }
    public function store(array $data)
    {
        $this->guideline->create($data);
    }
    public function update($guideline, array $data)
    {
        $guideline = $this->getGuidelineById($guideline);
        return $guideline->update($data);
    }
    public function destroy($guideline)
    {
        $guideline = $this->getGuidelineById($guideline);
        $guideline->delete();
    }
    public function getFirst()
    {
        return $this->guideline->first();
    }
}
