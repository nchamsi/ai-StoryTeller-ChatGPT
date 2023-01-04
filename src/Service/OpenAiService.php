<?php

namespace App\Service;

use Orhanerday\OpenAi\OpenAi;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class OpenAiService 
{
    public function __construct(ParameterBagInterface $parameterBag) {
        $this->parameterBag = $parameterBag;
    }
    public function getHistory(string $regex): string
    {
        $open_ai_key = $this->parameterBag->get('OPENAI_API_KEY');
        $open_ai = new OpenAi($open_ai_key);

        $complete = $open_ai->completion([
            'model' => 'text-davinci-003',
            'prompt' => 'Raconte moi une histoire incroyable pour enfants avec les éléments suivants: ' . $regex,
            'temperature' => 0,
            'max_tokens' => 3500,
            'frequency_penalty' => 0.5,
            'presence_penalty' => 0,
        ]);

        $json = json_decode($complete, true);

        if (isset($json['choices'][0]['text'])) {
            $json = $json['choices'][0]['text'];
        } else {
            $json = 'Une erreur est survenue. Wonderwoman n\'a pas pu vous aider et ne peux créer cette histoire pour l\'instant.';
        }
        
        //dd($json);

        return $json;
    }
}