<?php

namespace App\Service;

use Symfony\Component\DependencyInjection\Attribute\Autowire;

class JsonToArray
{
    private string $file;
    public function __construct(
        private string $projectDir,
        string $file)
    {
        $this->file = $file;
    }

    public function getArray(): array
    {
        $path = $this->projectDir.'/public/'.$this->file;
        $content = file_get_contents($path);
        return json_decode(
            $content,
            true,
            512,
            JSON_THROW_ON_ERROR
        );
    }
}
