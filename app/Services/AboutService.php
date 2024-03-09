<?php

namespace App\Services;

use App\Models\About;
use App\Traits\UploadImage;
use Illuminate\Http\UploadedFile;

class AboutService
{
    use UploadImage;
    public function __construct(protected About $about)
    {
    }

    public function all()
    {
        return $this->about->get();
    }
    public function getAboutById($about)
    {
        return $this->about->findOrFail($about);
    }
    public function store(array $data)
    {
        if (isset($data['image']) && $data['image'] instanceof UploadedFile) {
            $data['image'] = $this->uploadImage($data['image'], 'images/about');
        } else {
            unset($data['image']); // Remove image from the array if not present or not valid
        }
        $store = $this->about->create($data);
        return $store;
    }
    public function update($about, array $data)
    {
        $about = $this->getAboutById($about);
        return $about->update($data);
    }
    public function first()
    {
        return $this->about->first();
    }
}
