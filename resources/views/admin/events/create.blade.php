<div class="max-w-3xl mx-auto py-10">
    <h2 class="text-2xl font-bold mb-6">Додај нов настан</h2>

    <form action="{{ route('admin.events.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 shadow rounded-md space-y-4">
        @csrf
        
        <div>
            <label class="block font-medium text-gray-700">Наслов</label>
            <input type="text" name="title" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm border p-2">
        </div>

        <div>
            <label class="block font-medium text-gray-700">Категорија (Badge)</label>
            <select name="badge" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm border p-2">
                <option value="НОВОСТИ">НОВОСТИ</option>
                <option value="РЕСУРСИ">РЕСУРСИ</option>
                <option value="КУРСЕВИ">КУРСЕВИ</option>
            </select>
        </div>

        <div>
            <label class="block font-medium text-gray-700">Текст на објавата</label>
            <textarea name="description" rows="5" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm border p-2"></textarea>
        </div>

        <div>
            <label class="block font-medium text-gray-700">Главна слика</label>
            <input type="file" name="image" accept="image/*" required class="mt-1 block w-full">
        </div>

       
        <div>
            <label class="block font-medium text-gray-700">Каде води копчето?</label>
            <select name="action_type" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm border p-2">
                <option value="modal">Отвора Pop-up прозорец (Modal)</option>
                <option value="external">Води кон друг веб-сајт</option>
            </select>
        </div>

        <div>
            <label class="block font-medium text-gray-700">Надворешен Линк (Само ако избравте "друг веб-сајт")</label>
            <input type="url" name="action_url" placeholder="https://www.google.com" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm border p-2">
        </div>
         <div class="pt-4 flex gap-4">
            <button type="submit" class="bg-indigo-600 text-white px-6 py-2 rounded-md hover:bg-indigo-700">Зачувај</button>
            <a href="{{ route('admin.events.index') }}" class="text-gray-600 px-4 py-2">Откажи</a>
        </div>
    </form>
</div>