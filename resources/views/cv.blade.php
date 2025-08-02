<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
    @vite('resources/js/app.js')
</head>
<body>
    <div class="py-9 px-7 w-200 mx-auto my-2 border-1">
        <header class="flex  justify-between items-start mb-12">
            <div>
                <h1 class="font-bold text-2xl">{{$cv['name']}}</h1>
                <h3> {{$cv['role']}}</h3>
            </div>
            <div>
                <ul>
                    <li>{{$cv['contact']['phone'] ?? ''}}</li>
                    <li>{{$cv['contact']['email'] ?? ''}}</li>
                    <li>{{$cv['contact']['website'] ?? ''}}</li>
                    <li>{{$cv['contact']['location'] ?? ''}}</li>
                </ul>
            </div>
        </header>
        <main>
            @if(isset($cv['experience']) && count($cv['experience']) > 0)
                <section>
                    <h2 class="mb-3 mt-6">EXPERIENCE</h2>
                    <hr class="border-dashed mb-4">
                    @for ($i=0; $i < count($cv['experience']); $i++)
                        <div class="mb-5">
                            <div class="flex justify-between align-items-start">
                                <div>
                                    <h3>{{$cv['experience'][$i]['role']}}</h3>
                                    <h4 class="text-gray-400">{{$cv['experience'][$i]['company']}}</h4>
                                </div>
                                <div class="text-gray-400">{{$cv['experience'][$i]['date']}}</div>
                            </div>
                            <ul class="list-disc pl-5">
                                @foreach ($cv['experience'][$i]['description'] as $desc)
                                    <li>{{$desc}}</li>
                                @endforeach
                            </ul>
                        </div>  
                    @endfor
                </section>
            @endif

            @if(isset($cv['education']) && count($cv['education']) > 0)
                <section>
                    <h2 class="mb-3 mt-6">EDUCATION</h2>
                    <hr class="border-dashed mb-4">
                    @for ($i=0; $i < count($cv['education']); $i++)
                        <div class="flex justify-between align-items-start">
                            <div>
                                <h3>{{$cv['education'][$i]['degree']}}</h3>
                                <h4 class="text-gray-400">{{$cv['education'][$i]['institution']}}</h4>
                            </div>
                            <div class="text-gray-400">{{$cv['education'][$i]['date']}}</div>
                        </div>
                    @endfor
                </section>
            @endif
            @if(isset($cv['certificates']) && count($cv['certificates']) > 0)
                <section>
                    <h2 class="mb-3 mt-6">CERTIFICATES</h2>
                    <hr class="border-dashed mb-4">
                    @for ($i=0; $i < count($cv['certificates']); $i++)
                        <div class="flex justify-between align-items-start">
                            <div>
                                <h3>{{$cv['certificates'][$i]['name']}}</h3>
                            </div>
                            <div class="text-gray-400">{{$cv['certificates'][$i]['date']}}</div>
                        </div>
                    @endfor
                </section>
            @endif
            @if(isset($cv['skills']) && count($cv['skills']) > 0)
                <section>
                    <h2 class="mb-3 mt-6">SKILLS</h2>
                    <hr class="border-dashed mb-4">
                    <table class="w-full">
                        @for ($i = 0; $i < count($cv['skills']); $i += 2)
                            <tr>
                                <td>{{ $cv['skills'][$i]['name'] }}</td>
                                <td class="text-gray-400">{{ $cv['skills'][$i]['level'] }}</td>
                                <td>{{ $cv['skills'][$i + 1]['name'] }}</td>
                                <td class="text-gray-400">{{ $cv['skills'][$i + 1]['level'] }}</td>
                            </tr>
                        @endfor
                    </table>
                </section>
            @endif
            @if(isset($cv['languages']) && count($cv['languages']) > 0)
                <section>
                    <h2 class="mb-3 mt-6">LANGUAGES</h2>
                    <hr class="border-dashed mb-4">
                    <table class="w-full">
                        @for ($i = 0; $i < count($cv['languages']); $i += 2)
                            <tr>
                                <td>{{ $cv['languages'][$i]['name'] }}</td>
                                <td class="text-gray-400">{{ $cv['languages'][$i]['level'] }}</td>
                                <td>{{ $cv['languages'][$i + 1]['name'] }}</td>
                                <td class="text-gray-400">{{ $cv['languages'][$i + 1]['level'] }}</td>
                            </tr>
                        @endfor
                    </table>
                </section>
            @endif
        </main>
    </div>
</body>
</html>