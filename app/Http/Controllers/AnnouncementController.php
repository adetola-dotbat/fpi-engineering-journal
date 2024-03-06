<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnnouncementRequest;
use App\Models\Announcement;
use App\Services\AnnouncementService;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function __construct(protected AnnouncementService $announcementService)
    {
    }
    public function index()
    {
        $data = [
            'announcements' => $this->announcementService->all(),
        ];
        return view('user.pages.index', $data);
    }

    public function announcement()
    {
        $data = [
            'title_page' => 'Announcement',
            'announcements' => $this->announcementService->all(),
        ];
        return view('admin.pages.index', $data);
    }
    public function edit($announcement)
    {
        $data = [
            'title_page' => 'Edit Announcement',
            'announcements' => $this->announcementService->all(),
            'announcement' => $this->announcementService->getAnnouncementById($announcement),
        ];
        return view('admin.pages.edit', $data);
    }
    public function update(AnnouncementRequest $request, $announcement)
    {
        $this->announcementService->update($announcement, $request->validated());
        return redirect()->back();
    }
    public function destroy($announcement)
    {
        $this->announcementService->delete($announcement);
        return redirect()->bank();
    }
}
