<?php

namespace App\Http\Controllers;

use App\Http\Requests\GuidelineRequest;
use App\Services\AnnouncementService;
use App\Services\GuideLineService;
use App\Services\QuickLinksService;
use Illuminate\Http\Request;

class GuidelineController extends Controller
{
    public function __construct(protected AnnouncementService $announcementService, protected QuickLinksService $quickLinksService, protected GuideLineService $guideLineService)
    {
    }
    public function index()
    {
        $data = [
            'title' => 'Guideline',
            'guideline' => $this->guideLineService->getFirst(),
            'announcements' => $this->announcementService->getAllActiveAnnouncement(),
            'quickLinks' => $this->quickLinksService->all(),
        ];
        return view('user.pages.guideline', $data);
    }

    public function create()
    {
        $data = [
            'title_page' => 'Guideline',
            'guideline' => $this->guideLineService->getFirst(),
        ];
        return view('administration.pages.guideline.index', $data);
    }
    public function store(Request $request)
    {
        $this->guideLineService->store($request->all());
        return redirect()->route('guideline.create')->with('success', 'Guideline successfully added');
    }
    public function update(GuidelineRequest $request, $guideline)
    {
        $data = $request->validated();
        $this->guideLineService->update($guideline, $data);
        return redirect()->route('guideline.create')->with('success', 'Guideline updated successfully');
    }
    public function destroy($guideline)
    {
        $this->guideLineService->destroy($guideline);
        return redirect()->back()->with('success', 'Guideline deleted successfully');
    }
}
