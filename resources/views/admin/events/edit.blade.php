@extends('layouts.admin') 

@section('content')
<div class="max-w-4xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
    
    <div class="mb-8">
        <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight">Измени го настанот</h2>
        <p class="mt-2 text-sm text-slate-500">Ажурирајте ги информациите за <span class="font-semibold text-slate-700">"{{ $event->title }}"</span></p>
    </div>

    <form action="{{ route('admin.events.update', $event) }}" method="POST" enctype="multipart/form-data" class="bg-white p-8 shadow-sm border border-slate-100 rounded-2xl space-y-8">
        @csrf
        @method('PUT') 
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            
            <div class="md:col-span-2">
                <label class="block text-sm font-semibold text-slate-700 mb-1">Наслов на настанот</label>
                <input type="text" name="title" value="{{ old('title', $event->title) }}" required 
                       class="block w-full rounded-lg border-slate-200 px-4 py-3 text-slate-900 placeholder-slate-400 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm transition-colors">
            </div>

            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-1">Категорија (Badge)</label>
                <select name="badge" 
                        class="block w-full rounded-lg border-slate-200 px-4 py-3 text-slate-900 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm transition-colors bg-white">
                    <option value="НОВОСТИ" {{ old('badge', $event->badge) == 'НОВОСТИ' ? 'selected' : '' }}>НОВОСТИ</option>
                    <option value="РЕСУРСИ" {{ old('badge', $event->badge) == 'РЕСУРСИ' ? 'selected' : '' }}>РЕСУРСИ</option>
                    <option value="КУРСЕВИ" {{ old('badge', $event->badge) == 'КУРСЕВИ' ? 'selected' : '' }}>КУРСЕВИ</option>
                </select>
            </div>

            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-1">Главна слика (остави празно за истата)</label>
                @if($event->image)
                    <div class="mb-3 flex items-center gap-4">
                        <img src="{{ asset('storage/'.$event->image) }}" alt="Current Image" class="h-12 w-12 object-cover rounded border border-slate-200 shadow-sm">
                        <span class="text-xs text-slate-500">Тековна слика</span>
                    </div>
                @endif
                <input type="file" name="image" accept="image/*" 
                       class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-600 hover:file:bg-indigo-100 transition-colors border border-slate-200 rounded-lg shadow-sm bg-white">
            </div>

            <div class="md:col-span-2">
                <label class="block text-sm font-semibold text-slate-700 mb-1">Текст на објавата</label>
                <textarea name="description" rows="6" required 
                          class="block w-full rounded-lg border-slate-200 px-4 py-3 text-slate-900 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm transition-colors">{{ old('description', $event->description) }}</textarea>
            </div>

        </div>

        <hr class="border-slate-100">

        <div>
            <h3 class="text-lg font-bold text-slate-900 mb-4">Логика на копчето</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 bg-slate-50 p-6 rounded-xl border border-slate-100">
                
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-1">Каде води копчето?</label>
                    <select name="action_type" 
                            class="block w-full rounded-lg border-slate-200 px-4 py-3 text-slate-900 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm transition-colors bg-white">
                        <option value="modal" {{ old('action_type', $event->action_type) == 'modal' ? 'selected' : '' }}>Отвора Pop-up прозорец</option>
                        <option value="external" {{ old('action_type', $event->action_type) == 'external' ? 'selected' : '' }}>Води кон друг веб-сајт</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-1">Надворешен Линк</label>
                    <input type="url" name="action_url" value="{{ old('action_url', $event->action_url) }}" 
                           class="block w-full rounded-lg border-slate-200 px-4 py-3 text-slate-900 placeholder-slate-400 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm transition-colors" 
                           placeholder="Пр. https://www.google.com (Само за друг сајт)">
                </div>

            </div>
        </div>

        <div class="flex items-center justify-end gap-4 pt-4">
            <a href="{{ route('admin.events.index') }}" 
               class="text-sm font-medium text-slate-600 hover:text-slate-900 transition-colors px-4 py-2">
                Откажи
            </a>
            <button type="submit" 
                    class="inline-flex justify-center rounded-lg bg-indigo-600 px-8 py-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition-all">
                Зачувај промени
            </button>
        </div>
    </form>
</div>
@endsection