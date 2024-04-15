<?php

namespace App\Services;

use App\Enums\StatusEnum;
use App\Models\Announcement;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class AnnouncementService
{

    public function __construct(protected Announcement $announcement)
    {
    }

    public function all()
    {
        return $this->announcement->get();
    }
    public function getAllActiveAnnouncement()
    {
        return $this->announcement->where('status', StatusEnum::ACTIVATE)->latest()->get();
    }
    public function getAnnouncementBySlug($announcement){
        return $this->announcement->where('slug', $announcement)->first();
    }
    public function store(array $data)
    {
        if (isset($data['title'])) {
            $data['slug'] = Str::slug($data['title']);
        }
        $data['status'] = $data['status'] == StatusEnum::PENDING ? StatusEnum::PENDING : StatusEnum::ACTIVATE;
        return $this->announcement->create($data);
    }
    public function getAnnouncementById($announcement)
    {
        return $this->announcement->findOrFail($announcement);
    }
    public function update(int $announcement, array $data)
    {
        if (isset($data['title'])) {
            $data['slug'] = Str::slug($data['title']);
        }
        $announcement = $this->getAnnouncementById($announcement);
        return $announcement->update($data);
    }

    public function destroy($announcement)
    {
        $announcement = $this->getAnnouncementById($announcement);
        $announcement->delete();
    }
}
