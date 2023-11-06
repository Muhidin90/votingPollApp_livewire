<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;
use App\Models\option;

class Poll extends Component
{
    #[On('poll-Created')]
    public function render()
    {

        $polls = \App\Models\Poll::with('options.votes')->latest()->get();

        return view('livewire.poll', ['polls' => $polls]);
    }

    public function vote(option $option){
      

        $option->votes()->create();

    }
}
