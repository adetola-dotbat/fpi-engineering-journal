<?php

namespace App\Services;

use App\Models\QuickLinks;

class QuickLinksService
{

    public function __construct(protected QuickLinks $quickLink)
    {
    }

    public function all()
    {
        return $this->quickLink->get();
    }
    public function getQuickLinkById($quickLink)
    {
        return $this->quickLink->findOrFail($quickLink);
    }
    public function update($quickLink, array $data)
    {
        $quickLink = $this->getQuickLinkById($quickLink);
        return $quickLink->update($data);
    }
    public function destroy($quickLink)
    {
        $quickLink = $this->getQuickLinkById($quickLink);
        $quickLink->delete();
    }
}
