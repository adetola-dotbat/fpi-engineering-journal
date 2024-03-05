<?php

namespace App\Services;

use App\Models\Designation;

class DesignationService
{

    public function __construct(protected Designation $designation)
    {
    }

    public function all()
    {
        return $this->designation->get();
    }
    public function getDesignationById($designation)
    {
        return $this->designation->findOrFail($designation);
    }
    public function update($designation, array $data)
    {
        $designation = $this->getDesignationById($designation);
        $designation->update($data);
    }
    public function destroy($designation)
    {
        $designation = $this->getDesignationById($designation);
        $designation->delete();
    }
}
