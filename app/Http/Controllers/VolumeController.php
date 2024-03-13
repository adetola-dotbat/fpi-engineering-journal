<?php

namespace App\Http\Controllers;

use App\Enums\StatusEnum;
use App\Helper\FileHelper;
use App\Http\Requests\VolumeRequest;
use App\Models\Volume;
use App\Services\VolumeService;
use Illuminate\Http\Request;

class VolumeController extends Controller
{
    public function __construct(protected VolumeService $volumeService)
    {
    }
    public function index()
    {
        $data = [
            'volume' => $this->volumeService->all(),
        ];
        return view('user.pages.index', $data);
    }
    public function create()
    {
        $data = [
            'title_page' => 'Volume',
            'volumes' => $this->volumeService->all(),
        ];
        return view('administration.pages.volume.index', $data);
    }
    public function store(VolumeRequest $request)
    {
        $data = $request->validated();
        // Handle the image upload using a dedicated method or service
        if ($request->hasFile('image')) {
            $data['image'] = FileHelper::uploadsImage('image', $request, 'images/volume');
        }
        $this->volumeService->store($data);
        return redirect()->back()->with('success', 'Volume successfully added');
    }
    public function edit($volume)
    {
        $data = [
            'title_page' => 'Edit Volume',
            'volumes' => $this->volumeService->all(),
            'volume' => $this->volumeService->getVolumeById($volume),
        ];
        return view('administration.pages.volume.edit', $data);
    }
    public function update(Request $request, $volume)
    {
        $data = $request->all();
        $status = $request->input('status');
        if ($status === null || $status == StatusEnum::PENDING) {
            $data['status'] = StatusEnum::PENDING;
        } else {
            $data['status'] = StatusEnum::ACTIVATE;
        }
        $this->volumeService->update($volume, $data);
        return redirect()->route('volume.create')->with('success', 'Volume updated successfully');
    }
    public function destroy($volume)
    {
        $this->volumeService->destroy($volume);
        return redirect()->route('volume.create')->with('success', 'Volume deleted successfully');
    }
}
