<?php

namespace App\Livewire\QuizNote;

use Livewire\Component;
use Livewire\Attributes\On;

class GenerateQuizOptions extends Component
{
    public $selectedOption = [];

    #[On('submit-quiz-options')]
    public function submitQuizOptions($options)
    {
        $this->dispatch('generate-quiz', $options);
    }

    public function render()
    {
        return view('livewire.quiz-note.generate-quiz-options');
    }
}
