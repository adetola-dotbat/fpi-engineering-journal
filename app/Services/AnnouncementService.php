<?php

namespace App\Services;

use App\Models\Announcement;

class AnnouncementService
{

    public function __construct(protected Announcement $announcement)
    {
    }

    public function all()
    {
        return $this->announcement->get();
    }
    public function getAnnouncementById($announcement)
    {
        return $this->announcement->findOrFail($announcement);
    }
    public function update($announcement, array $data)
    {
        $announcement = $this->getAnnouncementById($announcement);
        return $announcement->update($data);
    }
    public function destroy($announcement)
    {
        $announcement = $this->getAnnouncementById($announcement);
        $announcement->delete();
    }
}
