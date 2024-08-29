<div>
    @if (session('success'))
    <span class="w-100 py3 bg-green-300">{{ session('success') }}</span>
    @endif
    <form wire:submit.prevent="createArticle" action="">
        <input class="block rounded border border-gray-100 px-3 py-1 mb-2" wire:model="name" type="text" placeholder="name"><br>
        @error('name')
        <span class="text-danger-500">{{ $message }}</span>
        @enderror <br><br>
        <input class="block rounded border border-gray-100 px-3 py-1 mb-2" wire:model="name" type="text" placeholder="name"> <br><br>
        <input class="block rounded border border-gray-100 px-3 py-1 mb-2" wire:model="name" type="text" placeholder="name"> <br><br>
        <button>Submit</button>
    </form>
    <div>
        @foreach ($articles as $article)
        {{ $article->name }} <br>
        @endforeach
        
    </div>
</div>
