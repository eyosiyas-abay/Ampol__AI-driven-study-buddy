<?php

namespace App\Livewire\GetStarted;

use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Livewire\Component;
use Livewire\Attributes\On;
use Illuminate\Support\Str;
use Smalot\PdfParser\Parser;

class UploadDragLink extends Component
{
    use WithFileUploads;

    public $fileContent;
    public $fileType;

    #[On('upload-file')]
    public function uploadFile($fileData)
    {
        $this->fileType = $this->getFileType($fileData['name']);

        $fileName = 'uploaded_file_' . time() . '.' . $this->fileType;
        $filePath = 'public/uploads/' . $fileName;

        Storage::put($filePath, base64_decode($fileData['content']));

        $this->fileContent = $this->readFileContent($fileData['content'], $this->fileType, $filePath);

        $this->dispatch('file-uploaded', [
            'content' => $this->fileContent,
            'type' => $this->fileType,
            'name' => $fileData['name'],
            'size' => $fileData['size'],
        ]);
    }

    private function getFileType($fileName)
    {
        return Str::lower(pathinfo($fileName, PATHINFO_EXTENSION));
    }

    private function readFileContent($base64Content, $fileType, $filePath)
    {
        switch ($fileType) {
            case 'txt':
            case 'md':
            case 'json':
            case 'csv':
                return base64_decode($base64Content);
            case 'pdf':
                try {
                    $parser = new Parser();
                    $tempFile = tempnam(sys_get_temp_dir(), 'pdf_');
                    file_put_contents($tempFile, base64_decode($base64Content));

                    $pdf = $parser->parseFile($tempFile);
                    $text = $pdf->getText();

                    unlink($tempFile);

                    $text = preg_replace('/\s+/', ' ', $text);
                    $text = trim($text);

                    Storage::disk('public')->delete($filePath);

                    return $text ?: "No text content found in the PDF.";
                } catch (\Exception $e) {
                    if (isset($tempFile) && file_exists($tempFile)) {
                        unlink($tempFile);
                    }
                    Storage::disk('public')->delete($filePath);
                    return "Error reading PDF: " . $e->getMessage();
                }
            default:
                return "Unsupported file type: {$fileType}";
        }
    }

    public function render()
    {
        return view('livewire.get-started.upload-drag-link');
    }
}
