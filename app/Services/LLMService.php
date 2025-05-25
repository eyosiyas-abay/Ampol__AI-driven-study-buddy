<?php

namespace App\Services;

use Cloudstudio\Ollama\Facades\Ollama;

class LLMService
{
    public function generateQuiz($text, $config = [])
    {
        dd($config);

        $response = Ollama::prompt("generate a quiz based on the following text: {$text}")->model(config('llm.ollama_model', 'llama3.2:latest'))
            ->options(['stream' => false, 'num_ctx' => 2048, 'temperature' => 0.7])
            ->ask();

        return $response;
    }
}
