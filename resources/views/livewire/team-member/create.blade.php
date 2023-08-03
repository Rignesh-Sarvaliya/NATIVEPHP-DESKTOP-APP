<div>
    <div class="flex items-center justify-between mb-10">
        <h1 class="text-xl font-bold">Add Team Member</h1>
        <a href="{{route('index')}}" type="button"
           class="rounded-full bg-pink-600 px-2 py-1 text-xs font-bold text-white shadow hover:bg-pink-500 flex items-center">
            Go Back
        </a>
    </div>
    <form wire:submit="createMember">
        <div>
            <label for="name" class="block text-sm font-medium leading-6 text-gray-100">What is your team member's
                name?</label>
            <div class="mt-2">
                <input type="text" wire:model="name" id="name"
                       class="block w-full rounded-md border-0 py-1.5 text-gray-400 shadow-sm bg-gray-800 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-600 sm:text-sm sm:leading-6"
                       placeholder="Sarthak">
                @error('name')
                <div class="mt-1 text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mt-6">
            <label for="timezone" class="block text-sm font-medium leading-6 text-gray-100">What is your team member's
                timezone</label>
            <select id="timezone" wire:model="timezone"
                    class="mt-2 block w-full rounded-md border-0 py-1.5 text-gray-400 shadow-sm bg-gray-800 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-600 sm:text-sm sm:leading-6">
                @foreach(timezone_identifiers_list() as $timezone)
                <option wire:key="{{ $timezone }}">{{$timezone}}</option>
                @endforeach
            </select>
            @error('timezone')
            <div class="mt-1 text-red-500 text-sm">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit"
                class="mt-6 rounded bg-pink-600 px-2 py-1 font-bold text-white shadow hover:bg-pink-500 w-full">Add Team
            Mate
        </button>
    </form>
</div>
