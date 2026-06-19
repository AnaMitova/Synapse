@extends('layouts.admin') 

@section('content')
<div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
    
    <div class="flex flex-col sm:flex-row sm:items-center justify-between mb-4 gap-4">
        <div>
            <h3 class="text-lg font-bold text-slate-900">Управување со Настани</h3>
            <p class="text-sm text-slate-500">Преглед, измена и бришење на сите ваши објави и настани.</p>
        </div>
        <div class="flex items-center gap-4">
            <span class="inline-flex items-center rounded bg-indigo-50 px-2 py-1 text-xs font-medium text-indigo-700 ring-1 ring-inset ring-indigo-700/10">
                {{ $events->count() }} вкупно
            </span>
            <a href="{{ route('admin.events.create') }}" class="bg-indigo-600 text-white text-sm font-semibold px-4 py-2 rounded-md hover:bg-indigo-700 transition-colors">
                + Додај нов
            </a>
        </div>
    </div>

    @if(session('success'))
        <div class="bg-emerald-50 text-emerald-700 p-3 mb-4 rounded-lg text-sm border border-emerald-100">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white border border-slate-200 rounded-xl overflow-hidden shadow-sm">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-slate-200">
                <thead>
                    <tr>
                        <th scope="col" class="px-6 py-4 text-left text-xs font-bold text-slate-500 uppercase tracking-widest">Слика</th>
                        <th scope="col" class="px-6 py-4 text-left text-xs font-bold text-slate-500 uppercase tracking-widest">Наслов</th>
                        <th scope="col" class="px-6 py-4 text-left text-xs font-bold text-slate-500 uppercase tracking-widest">Категорија</th>
                        <th scope="col" class="px-6 py-4 text-left text-xs font-bold text-slate-500 uppercase tracking-widest">Прегледи</th>
                        <th scope="col" class="px-6 py-4 text-right text-xs font-bold text-slate-500 uppercase tracking-widest">Акции</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 bg-white">
                    @forelse($events as $event)
                        <tr class="hover:bg-slate-50 transition-colors">
                            
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($event->image)
                                    <img src="{{ asset('storage/'.$event->image) }}" class="object-cover rounded border border-slate-200" style="width: 44px; height: 44px; min-width: 44px;">
                                @else
                                    <div class="rounded bg-slate-100 border border-slate-200 flex items-center justify-center text-slate-400 text-[10px] uppercase font-bold" style="width: 44px; height: 44px; min-width: 44px;">
                                        Нема
                                    </div>
                                @endif
                            </td>

                            <td class="px-6 py-4 font-medium text-slate-900 text-sm max-w-xs truncate">
                                {{ $event->title }}
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="bg-slate-100 text-slate-700 px-2.5 py-1 rounded-md text-xs font-semibold border border-slate-200">
                                    {{ $event->badge }}
                                </span>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-500">
                                {{ $event->views }}
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <div class="flex items-center justify-end gap-3">
                                    <a href="{{ route('admin.events.edit', $event) }}" class="text-indigo-600 hover:text-indigo-900">Измени</a>
                                    
                                    <form action="{{ route('admin.events.destroy', $event) }}" method="POST" onsubmit="return confirm('Дали сте сигурни дека сакате да го избришете овој настан?');" class="m-0 p-0 inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-red-700">Избриши</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-10 text-center text-slate-500 text-sm">
                                Немате додадено настани.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection