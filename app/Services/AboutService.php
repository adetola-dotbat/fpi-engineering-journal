<?php

namespace App\Services;

use App\Models\About;

class AboutService
{

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
    public function update($about, array $data)
    {
        $about = $this->getAboutById($about);
        return $about->update($data);
    }
    public function destroy($about)
    {
        $about = $this->getAboutById($about);
        $about->delete();
    }
}
