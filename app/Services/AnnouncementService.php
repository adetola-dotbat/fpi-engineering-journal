<?php

namespace App\Services;

use App\Enums\StatusEnum;
use App\Models\Announcement;
use Illuminate\Support\Arr;

class AnnouncementService
{

    public function __construct(protected Announcement $announcement)
    {
    }

    public function all()
    {
        return $this->announcement->get();
    }
    public function store(array $data)
    {
        $data['status'] = $data['status'] == StatusEnum::PENDING ? StatusEnum::PENDING : StatusEnum::ACTIVATE;
        return $this->announcement->create($data);
    }
    public function getAnnouncementById($announcement)
    {
        return $this->announcement->findOrFail($announcement);
    }
    public function update(int $announcement, array $data)
    {
        // dd($data);
        $announcement = $this->getAnnouncementById($announcement);
        return $announcement->update($data);
    }

    public function destroy($announcement)
    {
        $announcement = $this->getAnnouncementById($announcement);
        $announcement->delete();
    }
}
