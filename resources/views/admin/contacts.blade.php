@extends('layouts.app')

@section('content')

    <!-- Main -->
    <main class="max-w-7xl mx-auto px-6 py-10">

        <div class="bg-white rounded-3xl shadow-sm border border-slate-200 overflow-hidden">

            <!-- Table Header -->
            <div class="px-6 py-5 border-b border-slate-200 flex justify-between items-center">
                <div>
                    <h2 class="text-lg font-semibold">All Applications</h2>
                    <p class="text-sm text-slate-500">Latest submissions from users</p>
                </div>
            </div>

            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead class="bg-slate-50 text-slate-500 uppercase text-xs tracking-wider">
                        <tr>
                            <th class="px-6 py-4 text-left">ID</th>
                            <th class="px-6 py-4 text-left">Име</th>
                            <th class="px-6 py-4 text-left">Компанија</th>
                            <th class="px-6 py-4 text-left">Email</th>
                            <th class="px-6 py-4 text-left">Телефон</th>
                            <th class="px-6 py-4 text-left">Датум</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-slate-100">
                        @foreach ($contacts as $contact)
                            <tr class="hover:bg-slate-50 transition">
                                <td class="px-6 py-4 font-semibold text-slate-700">
                                    #{{ $contact->id }}
                                </td>

                                <td class="px-6 py-4 font-medium">
                                    {{ $contact->full_name }}
                                </td>

                                <td class="px-6 py-4 text-slate-600">
                                    {{ $contact->company }}
                                </td>

                                <td class="px-6 py-4">
                                    <span class="text-blue-600">
                                        {{ $contact->email }}
                                    </span>
                                </td>

                                <td class="px-6 py-4 text-slate-600">
                                    {{ $contact->phone }}
                                </td>

                                <td class="px-6 py-4 text-slate-500">
                                    {{ $contact->created_at->format('d M Y • H:i') }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>

    </main>

<!-- QUESTIONS TABLE -->
<div class="mt-10 mx-14 bg-white rounded-3xl shadow-sm border border-slate-200 overflow-hidden">

    <!-- Header -->
    <div class="px-6 py-5 border-b border-slate-200 flex justify-between items-center">
        <div>
            <h2 class="text-lg font-semibold">All Questions</h2>
            <p class="text-sm text-slate-500">Latest submitted questions</p>
        </div>
    </div>

    <!-- Table -->
    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead class="bg-slate-50 text-slate-500 uppercase text-xs tracking-wider">
                <tr>
                    <th class="px-6 py-4 text-left">ID</th>
                    <th class="px-6 py-4 text-left">Име</th>
                    <th class="px-6 py-4 text-left">Компанија</th>
                    <th class="px-6 py-4 text-left">Email</th>
                    <th class="px-6 py-4 text-left">Телефон</th>
                    <th class="px-6 py-4 text-left">Прашање</th>
                    <th class="px-6 py-4 text-left">Датум</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-slate-100">
                @foreach ($questions as $item)
                    <tr class="hover:bg-slate-50 transition">

                        <td class="px-6 py-4 font-semibold text-slate-700">
                            #{{ $item->id }}
                        </td>

                        <td class="px-6 py-4 font-medium">
                            {{ $item->full_name }}
                        </td>

                        <td class="px-6 py-4 text-slate-600">
                            {{ $item->company }}
                        </td>

                        <td class="px-6 py-4 text-blue-600">
                            {{ $item->email }}
                        </td>

                        <td class="px-6 py-4 text-slate-600">
                            {{ $item->phone }}
                        </td>

                        <td class="px-6 py-4 text-slate-700">
                            {{ $item->question }}
                        </td>

                        <td class="px-6 py-4 text-slate-500">
                            {{ $item->created_at->format('d M Y • H:i') }}
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection