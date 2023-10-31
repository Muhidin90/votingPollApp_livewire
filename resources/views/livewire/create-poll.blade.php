<div>
    <label for="">POLL TITTLE</label>

    <form>
        
    <input type="text" wire:model.live="title">

   <div >the title is :{{ $title }}</div> 
     
    
        <button class='btn mt-4' wire:click.prevent='addOption'>Add option</button>
    <div class="mt-4">
        @foreach ($options as $index => $option)
            <div>{{ $index }} - {{ $option }}</div>
        @endforeach
    </div>
     
    </form>
</div>
