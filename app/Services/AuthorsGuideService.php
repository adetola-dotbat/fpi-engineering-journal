<?php

namespace App\Services;

use App\Models\AuthorsGuide;

class AuthorsGuideService
{

    public function __construct(protected AuthorsGuide $guide)
    {
    }
    public function all()
    {
        return $this->guide->get();
    }
    public function getGuideById($guide)
    {
        return $this->guide->findOrFail($guide);
    }
    public function update($guide, array $data)
    {
        $guide = $this->getGuideById($guide);
        return $guide->update($data);
    }
    public function destroy($guide)
    {
        $guide = $this->getGuideById($guide);
        $guide->delete();
    }
}
