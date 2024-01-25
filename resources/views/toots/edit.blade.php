<x-layout>
    <x-panel>
    <div class="mt-5">
        <h2 class="text-xl font-bold m-2">Edit toot</h2>
        <form action="/toots/{{$toot->id}}/edit" method="POST">
            @csrf
            @method('PATCH')
            <x-form.input name="title" :value="old('title', $toot->title)" />
            <x-form.textarea name="body" rows="5" placeholder="Say something">{{ old('body', $toot->body) }}</x-form.textarea>
            <textarea name="body" class="w-full text-sm m-2 focus:outline-none focus:ring" rows="5" required>

            </textarea>
            <x-form.error name="body"/>
            <div class="flex justify-end mt-5 border-t border-gray-200 pt-3 ">
                <x-form.button name="toot"></x-form.button>
            </div>
        </form>
    </div>
    </x-panel>
</x-layout>