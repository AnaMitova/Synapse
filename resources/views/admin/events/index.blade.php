<div class="max-w-7xl mx-auto py-10">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Управување со Настани</h2>
        <a href="{{ route('admin.events.create') }}" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700">+ Додај нов настан</a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-4 mb-4 rounded">{{ session('success') }}</div>
    @endif

    <div class="bg-white shadow overflow-hidden sm:rounded-md">
        <ul class="divide-y divide-gray-200">
            @foreach($events as $event)
                <li class="p-4 flex items-center justify-between hover:bg-gray-50">
                    <div class="flex items-center gap-4">
                        @if($event->image)
                            <img src="{{ asset('storage/'.$event->image) }}" class="h-12 w-12 object-cover rounded">
                        @endif
                        <div>
                            <p class="font-semibold text-gray-900">{{ $event->title }}</p>
                            <p class="text-sm text-gray-500">{{ $event->badge }} | {{ $event->views }} прегледи</p>
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <a href="{{ route('admin.events.edit', $event) }}" class="text-indigo-600 hover:underline">Измени</a>
                        
                        <form action="{{ route('admin.events.destroy', $event) }}" method="POST" onsubmit="return confirm('Дали сте сигурни дека сакате да го избришете овој настан?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Избриши</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>

