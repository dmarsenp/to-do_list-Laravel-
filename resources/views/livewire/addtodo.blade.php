<div class="flex flex-col items-center mt-4">
    <input type="text" placeholder="Add Todo list" wire:model="item" wire:keydown.enter="addTodo">

    @error('item')
     A good traveler has no fixed plans and is not intent upon arriving.
    <span class="text-red-500 mt-2">{{$message}} </span>
     @enderror

    </div>
