<?php

namespace App\Livewire\GetStarted;

use Livewire\Component;
use Livewire\Attributes\On;

class FileDetails extends Component
{
    public $fileContent = '';
    public $fileType = '';
    public $fileName = '';
    public $fileSize = 0;

    #[On('file-uploaded')]
    public function updateFileContent($data)
    {
        $this->fileContent = $data['content'];
        $this->fileType = $data['type'];
        $this->fileName = $data['name'];
        $this->fileSize = formatBytes($data['size']);
    }

    public function render()
    {
        return view('livewire.get-started.file-details');
    }
}
