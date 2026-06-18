<div class="max-w-3xl mx-auto py-10">
    <h2 class="text-2xl font-bold mb-6">Измени го настанот: {{ $event->title }}</h2>

    <form action="{{ route('admin.events.update', $event) }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 shadow rounded-md space-y-4">
        @csrf
        @method('PUT') 
        <div>
            <label class="block font-medium text-gray-700">Наслов</label>
            <input type="text" name="title" value="{{ old('title', $event->title) }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm border p-2">
        </div>

        <div>
            <label class="block font-medium text-gray-700">Категорија (Badge)</label>
            <select name="badge" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm border p-2">
                <option value="НОВОСТИ" {{ $event->badge == 'НОВОСТИ' ? 'selected' : '' }}>НОВОСТИ</option>
                <option value="РЕСУРСИ" {{ $event->badge == 'РЕСУРСИ' ? 'selected' : '' }}>РЕСУРСИ</option>
                <option value="КУРСЕВИ" {{ $event->badge == 'КУРСЕВИ' ? 'selected' : '' }}>КУРСЕВИ</option>
            </select>
        </div>

        <div>
            <label class="block font-medium text-gray-700">Текст на објавата</label>
            <textarea name="description" rows="5" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm border p-2">{{ old('description', $event->description) }}</textarea>
        </div>

        <div>
            <label class="block font-medium text-gray-700">Главна слика (остави празно за да ја задржиш старата)</label>
            @if($event->image)
                <div class="mb-2">
                    <img src="{{ asset('storage/'.$event->image) }}" class="h-20 w-20 object-cover rounded">
                </div>
            @endif
            <input type="file" name="image" accept="image/*" class="mt-1 block w-full">
        </div>

        <div>
            <label class="block font-medium text-gray-700">Каде води копчето?</label>
            <select name="action_type" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm border p-2">
                <option value="page" {{ $event->action_type == 'page' ? 'selected' : '' }}>Отвора нова страна</option>
                <option value="modal" {{ $event->action_type == 'modal' ? 'selected' : '' }}>Отвора Pop-up прозорец</option>
                <option value="external" {{ $event->action_type == 'external' ? 'selected' : '' }}>Води кон друг веб-сајт</option>
            </select>
        </div>

        <div>
            <label class="block font-medium text-gray-700">Надворешен Линк (само ако е надворешен)</label>
            <input type="url" name="action_url" value="{{ old('action_url', $event->action_url) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm border p-2">
        </div>

        <div class="pt-4 flex gap-4">
            <button type="submit" class="bg-indigo-600 text-white px-6 py-2 rounded-md hover:bg-indigo-700">Зачувај промени</button>
            <a href="{{ route('admin.admin') }}" class="text-gray-600 px-4 py-2">Откажи</a>
        </div>
    </form>
</div>