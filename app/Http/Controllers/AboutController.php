<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutRequest;
use App\Services\AboutService;
use App\Services\AnnouncementService;
use App\Services\QuickLinksService;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __construct(protected AboutService $aboutService, protected AnnouncementService $announcementService, protected QuickLinksService $quickLinksService)
    {
    }
    public function index()
    {
        $data = [
            'title' => 'About us',
            'about' => $this->aboutService->first(),
            'announcements' => $this->announcementService->getAllActiveAnnouncement(),
            'quickLinks' => $this->quickLinksService->all(),
        ];
        return view('user.pages.about', $data);
    }
    public function create()
    {
        $data = [
            'title_page' => 'About Us',
            'about' => $this->aboutService->first()
        ];
        return view('administration.pages.about.about', $data);
    }
    public function edit($about)
    {
        $data = [
            'about' => $this->aboutService->first()
        ];
        return view('administration.pages.about.about', $data);
    }
    public function store(AboutRequest $request)
    {
        $this->aboutService->store($request->validated());
        return redirect()->back();
    }
    public function update(AboutRequest $request)
    {
        if ($request->id) {
            $this->aboutService->update($request->id, $request->validated());
        }
        return back()->with('message', 'Update Successful');
    }
}
