<?php

namespace App\Livewire;

use App\Models\pool;
use Livewire\Component;

class CreatePoll extends Component
{
    public $title;
    public $options = [];

    public function render()
    {

        return view('livewire.create-poll');
    }

    public function addOption()
    {
        $this->options[] = ' ';
    }

    public function removeOption($index)
    {

        unset($this->options[$index]);

        $this->options = array_values($this->options);

    }

    public function createPoll()
    {
        pool::create([
            'title' => $this->title
        ])->option()->createMany(
                collect($this->options)
                    ->map(fn($option) => ['name' => 'option'])
                    ->all()
            );


        // foreach ($this->options as $optionName) {
        //     $pool->option()->create([
        //         'name'=>$optionName
        //     ]);
        // }

        $this->reset(['title', 'options']);
    }
}
