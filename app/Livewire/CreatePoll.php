<?php

namespace App\Livewire;

use App\Models\poll;
use Livewire\Component;

class CreatePoll extends Component
{
    public $title;
    public $options = [];

    // protected $rules =;

    protected $messages =[
        'options.*'=>'The option cant be empty'
    ];

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
        $this->validate([
            'title' => 'required|min:3|max:255',
            'options' => 'array|required|min:1|max:10',
            'options.*' => 'required|min:1|max:255'
        ]);

        poll::create([
            'title' => $this->title
        ])->options()->createMany(
                collect($this->options)
                    ->map(fn($option) => ['name' => $option])
                    ->all()
            );


        // foreach ($this->options as $optionName) {
        //     $pool->option()->create([
        //         'name'=>$optionName
        //     ]);
        // }

        $this->reset(['title', 'options']);

        $this->dispatch('poll-Created');
    }
}
