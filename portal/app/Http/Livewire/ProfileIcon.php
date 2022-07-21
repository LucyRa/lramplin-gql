<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProfileIcon extends Component
{
    public function render()
    {
        return <<<'SVG'
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
            <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
        </svg>
        SVG;
    }
}
