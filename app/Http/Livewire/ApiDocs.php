<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ApiDocs extends Component
{
    public $content = [
        'introduction' => [
            'title' => 'Introduction',
            'description' => 'Overview of the Barcode API capabilities.'
        ],
        'authentication' => [
            'title' => 'Authentication',
            'description' => 'How to retrieve an API access token.'
        ],
        //...
    ];

    public function render()
    {
        return view('livewire.api-docs');
    }
}
