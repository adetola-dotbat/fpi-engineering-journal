<?php

namespace App\Http\Controllers;

use App\Helper\FileHelper;
use App\Http\Requests\PaperTemplateRequest;
use App\Services\AnnouncementService;
use App\Services\PaperTemplateService;
use App\Services\QuickLinksService;
use Illuminate\Http\Request;

class PaperTemplateController extends Controller
{
    public function __construct(protected PaperTemplateService $paperTemplateService, protected AnnouncementService $announcementService, protected QuickLinksService $quickLinksService)
    {
    }
    public function index()
    {
        $data = [
            'title' => 'Paper Template',
            'paper' => $this->paperTemplateService->getFirst(),
            'announcements' => $this->announcementService->getAllActiveAnnouncement(),
            'quickLinks' => $this->quickLinksService->all(),
        ];
        return view('user.pages.paper-template', $data);
    }

    public function create()
    {
        $data = [
            'title_page' => 'Paper Template',
            'paper' => $this->paperTemplateService->getFirst(),
        ];
        return view('administration.pages.paper-template.index', $data);
    }
    public function store(Request $request)
    {
        $this->paperTemplateService->store($request->all());
        return redirect()->route('call-for-paper.create')->with('success', 'Paper Template successfully added');
    }
    public function update(PaperTemplateRequest $request, $paper)
    {
        $data = $request->validated();
        if ($request->hasFile('file')) {
            $data['file'] = FileHelper::uploadsImage('file', $request, 'document/paper-template');
        }
        $this->paperTemplateService->update($paper, $data);
        return redirect()->route('paper-template.create')->with('success', 'Paper Template updated successfully');
    }
    public function destroy($paper)
    {
        $this->paperTemplateService->destroy($paper);
        return redirect()->back()->with('success', 'Paper Template deleted successfully');
    }
}
