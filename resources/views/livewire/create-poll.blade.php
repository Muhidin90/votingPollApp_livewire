<div>
    <label for="">POLL TITTLE</label>

    <form wire:submit.prevent="createPoll">

        <input type="text" wire:model="title">
        <div> @error('title')
                <div class="text-red-500">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button class='btn mt-4' wire:click.prevent='addOption'>Add option</button>
        <div class="mt-4">
            @foreach ($options as $index => $option)
                <div class="mt-4">
                    <label>OPTION {{ $index + 1 }}</label>
                    <div class="flex gap-2">
                        <input type="text" wire:model='options.{{ $index }}'>
                        <button class="btn" wire:click.prevent="removeOption({{ $index }})">remove</button>
                       

                    </div>
                </div>
                <div>
                @error("options.{$index}")
                    <div class="text-red-500">
                        {{ $message }}
                    </div>
                @enderror
            </div> 
            @endforeach
           
        </div>
        <button type="submit" class="btn">create poll</button>
    </form>
</div>
