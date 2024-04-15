<?php

namespace App\Services;

use App\Models\PaperTemplate;
use App\Models\QuickLinks;

class PaperTemplateService
{

    public function __construct(protected PaperTemplate $paperTemplate)
    {
    }
    public function all()
    {
        return $this->paperTemplate->latest()->limit(8)->get();
    }
    public function getFirst(){
        return $this->paperTemplate->latest()->first();
    }
    public function getPaperTemplateById($paperTemplate)
    {
        return $this->paperTemplate->findOrFail($paperTemplate);
    }
    public function store(array $data)
    {
        return $this->paperTemplate->create($data);
    }
    public function update($paperTemplate, array $data)
    {
        $paperTemplate = $this->getPaperTemplateById($paperTemplate);
        return $paperTemplate->update($data);
    }
    public function destroy($paperTemplate)
    {
        $paperTemplate = $this->getPaperTemplateById($paperTemplate);
        $paperTemplate->delete();
    }
}
