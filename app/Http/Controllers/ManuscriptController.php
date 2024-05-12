<?php

namespace App\Http\Controllers;

use App\Enums\StatusEnum;
use App\Helper\FileHelper;
use App\Http\Requests\ArticleRequest;
use App\Http\Requests\ManuscriptRequest;
use App\Services\AnnouncementService;
use App\Services\ManuscriptService;
use App\Services\QuickLinksService;
use App\Services\VolumeService;
use Illuminate\Http\Request;

class ManuscriptController extends Controller
{
    public function __construct(protected ManuscriptService $manuscriptService, protected VolumeService $volumeService, protected AnnouncementService $announcementService, protected QuickLinksService $quickLinksService)
    {
    }
    public function index()
    {
        // used
        $data = [
            'title' => 'Manuscript',
            'announcements' => $this->announcementService->getAllActiveAnnouncement(),
            'quickLinks' => $this->quickLinksService->all(),
        ];
        return view('user.pages.manuscript', $data);
    }
    public function create()
    {
        $data = [
            'title_page' => 'Manuscripts',
            'manuscripts' => $this->manuscriptService->all(),
        ];
        return view('administration.pages.manuscript.index', $data);
    }
    public function store(ManuscriptRequest $request)
    {
        // used
        try {
            $data = $request->validated();
            if ($request->hasFile('file')) {
                $data['file'] = FileHelper::uploadsImage('file', $request, 'document/manuscript');
            }
            $this->manuscriptService->store($data);
            return redirect()->back()->with('success', 'Article successfully added');
        } catch (\Exception $ex) {
            dd($ex);
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
    public function edit($manuscript)
    {
        $data = [
            'title_page' => 'Edit manuscript',
            'volumes' => $this->volumeService->all(),
            'manuscripts' => $this->manuscriptService->all(),
            'article' => $this->manuscriptService->getManuscriptById($manuscript),
        ];
        return view('administration.pages.article.edit', $data);
    }
    public function show($article)
    {
        if(auth()->user()){
            $data = [
                'title_page' => 'Article details',
                'articles' => $this->manuscriptService->all(),
                'volumes' => $this->volumeService->all(),
                'article' => $this->manuscriptService->getArticleById($article),
            ];
            return view('administration.pages.article.view', $data);
        }
        $data=[
            'title' => 'Article details',
            'article' => $this->manuscriptService->getArticleBySlug($article),
            'announcements' => $this->announcementService->getAllActiveAnnouncement(),
            'quickLinks' => $this->quickLinksService->all(),
        ];
        return view('user.pages.view-article', $data);


    }
    public function update(Request $request, $manuscript)
    {
        // dd($request);
        $data = $request->all();
        $status = $request->input('status');
        if ($status === null || $status == StatusEnum::PENDING) {
            $data['status'] = StatusEnum::PENDING;
        } else {
            $data['status'] = StatusEnum::ACTIVATE;
        }
        $this->manuscriptService->update($manuscript, $data);
        return redirect()->route('manuscript.create')->with('success', 'Manuscript updated successfully');
    }
    public function destroy($manuscript)
    {
        $this->manuscriptService->destroy($manuscript);
        return redirect()->route('manuscript.create')->with('success', 'Manuscript deleted successfully');
    }
}
