<?php

namespace App\Http\Controllers;

use App\Enums\StatusEnum;
use App\Http\Requests\AnnouncementRequest;
use App\Models\Announcement;
use App\Services\AnnouncementService;
use App\Services\QuickLinksService;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function __construct(protected AnnouncementService $announcementService, protected QuickLinksService $quickLinksService)
    {
    }
    public function index()
    {
        $data = [
            'title' => 'Announcement',
            'announcements' => $this->announcementService->all(),
        ];
        return view('user.pages.announcement', $data);
    }

    public function create()
    {
        $data = [
            'title_page' => 'Announcement',
            'announcements' => $this->announcementService->all(),
        ];
        return view('administration.pages.announcement.index', $data);
    }
    public function show($announcement){
        $data = [
            'title' => 'Announcement',
            'announcements' => $this->announcementService->getAllActiveAnnouncement(),
            'announcement' => $this->announcementService->getAnnouncementBySlug($announcement),
            'quickLinks' => $this->quickLinksService->all(),
        ];
        return view('user.pages.announcement', $data);
    }
    public function store(AnnouncementRequest $request)
    {
        $data = $request->validated();
        if ($request->status == null) {
            $data['status'] =  StatusEnum::PENDING;
        }
        $this->announcementService->store($data);
        return redirect()->route('announcement.create')->with('success', 'Announcement successfully added');
    }
    public function edit($announcement)
    {
        $data = [
            'title_page' => 'Edit Announcement',
            'announcement' => $this->announcementService->getAnnouncementById($announcement),
        ];
        return view('administration.pages.announcement.edit', $data);
    }
    public function update(Request $request, $announcement)
    {
        $data = $request->all();
        $status = $request->input('status');
        if ($status === null || $status == StatusEnum::PENDING) {
            $data['status'] = StatusEnum::PENDING;
        } else {
            $data['status'] = StatusEnum::ACTIVATE;
        }
        $this->announcementService->update($announcement, $data);
        return redirect()->route('announcement.create')->with('success', 'Announcement updated successfully');
    }
    public function destroy($announcement)
    {
        $this->announcementService->destroy($announcement);
        return redirect()->back()->with('success', 'Announcement deleted successfully');
    }
}
