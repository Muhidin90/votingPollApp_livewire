<div>
    {{-- Stop trying to control. --}}

   <div>
    @forelse ($polls as $poll)
        <h3>{{ $poll->title }}</h3>
        
        @foreach ($poll->options as $option )
        <div class="mb-2 flex gap-2">
              <button class="btn" wire:click='vote({{ $option->id }})'>vote</button>
            <p class="mt-2 pb-2 text-gray-500">{{ $option->name }} :<span class="text-green-500 font-bold">{{ $option->votes->count() }}</span></p>
        </div>
          
        @endforeach
    @empty
        <p class="text-gray-500">
            No available polls
        </p>
    @endforelse
    <hr>
   </div>
</div>
