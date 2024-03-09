<?php

namespace App\Http\Controllers;

use App\Services\CallForPaperService;
use Illuminate\Http\Request;

class CallForPaperController extends Controller
{
    public function __construct(protected CallForPaperService $callForPaperService)
    {
    }
    public function index()
    {
        return true;
    }

    public function create()
    {
        $data = [
            'title_page' => 'Call for Paper',
            'paper' => $this->callForPaperService->getFirst(),
        ];
        return view('administration.pages.call-for-paper.index', $data);
    }
    public function store(Request $request)
    {
        $this->callForPaperService->store($request->all());
        return redirect()->route('call-for-paper.create')->with('success', 'Call for paper successfully added');
    }
    public function update(Request $request, $paper)
    {
        $data = $request->all();
        $this->callForPaperService->update($paper, $data);
        return redirect()->route('call-for-paper.create')->with('success', 'Call for paper updated successfully');
    }
    public function destroy($paper)
    {
        $this->callForPaperService->destroy($paper);
        return redirect()->back()->with('success', 'Call for paper deleted successfully');
    }
}
