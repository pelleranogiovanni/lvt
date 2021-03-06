@extends('layouts.dashboard')

@section('content')

{{-- Nuevo --}}
{{-- card tarea --}}
<div class="container font-montserrat text-sm mb-8">
    <div class="card  rounded-sm bg-gray-100 mx-auto mt-6 shadow-lg md:w-10/12">
        <div class="card-title bg-white w-full p-5 border-b flex items-center justify-between md:justify-between">
            <div>
                <p class="sm:text-lg md:text-xl lg:text-2xl xl:text-3xl font-semibold placeholder-gray-700">Editar Tarea: {{$job->title}}</p>
                <p class="md:text-md text-sm text-primary-500 font-semibold">{{$job->subject->name}}</p>
                <p class="md:text-sm text-xs text-primary-400">{{$job->subject->course->name}}</p>
            </div>
            <a href="{{route('teacher.index', $job->subject->id)}}" class="flex text-teal-600 font-semibold p-3 rounded-full hover:bg-gray-200 mx-1 focus:shadow-sm focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 inline-block" viewBox="0 0 306 306"><path data-original="#000000" class="active-path" data-old_color="#000000" fill="#A0AEC0" d="M247.35 35.7L211.65 0l-153 153 153 153 35.7-35.7L130.05 153z"/></svg>
              </a>
        </div>
        <div class="card-body py-4">
            <form method="POST" action="/teachers/{{$job->id}}" enctype="multipart/form-data" class="mx-auto">
                @csrf
                @method('PUT')

                <input hidden type="text" name="subject" id="" value="{{$job->subject->id}}">

                <div class="flex flex-wrap my-5">
                    <div class="w-full md:w-full px-6 md:mb-0 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                          Título
                        </label>
                        <input type="text" id="title" name="title" class="form-input w-full block" id="grid-last-name" type="text" placeholder="Título de la tarea" value="{{$job->title}}">
                        <span class="flex italic text-red-600  text-sm" role="alert">
                            {{$errors->first('title')}}
                        </span>
                    </div>
                </div>

                <div class="flex flex-wrap my-5">
                    <div class="w-full md:w-full px-6 md:mb-0 mb-1">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                          Descripción/Instrucciones
                        </label>
                        <textarea name="description" id="description" cols="30" rows="10" class="form-input w-full block" id="grid-last-name" type="text" placeholder="Descripción o instrucciones de la tarea" value="">{{$job->description}}</textarea>
                        <span class="flex italic text-red-600  text-sm" role="alert">
                            {{$errors->first('content')}}
                        </span>
                    </div>
                </div>

                <div class="flex flex-wrap my-5">
                    <div class="w-full md:w-full px-6 md:mb-0 mb-1">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                          Fecha de Inicio
                        </label>
                        <input type="date" id="start" name="start" class="form-input w-full block" id="grid-last-name" type="text" placeholder="Título de la tarea" value="{{$job->start->format('Y-m-d')}}">
                        <span class="flex italic text-red-600  text-sm" role="alert">
                            {{$errors->first('title')}}
                        </span>
                    </div>
                </div>

                <div class="flex flex-wrap my-5">
                    <div class="w-full md:w-full px-6 md:mb-0 mb-1">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                          Fecha Límite de Entrega
                        </label>
                        <input type="date" id="end" name="end" class="form-input w-full block" id="grid-last-name" type="text" placeholder="Título de la tarea" value="{{$job->end->format('Y-m-d')}}">
                        <span class="flex italic text-red-600  text-sm" role="alert">
                            {{$errors->first('title')}}
                        </span>
                    </div>
                </div>

                <div class="flex flex-wrap my-5">
                    <div class="w-full md:w-full px-6 md:mb-0 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                          Link de Youtube (Opcional)
                        </label>
                        <input type="text" name="link" id="link" value="{{$job->link}}" class="form-input w-full block" id="grid-last-name" type="text" placeholder="Link del video">
                        <span class="flex italic text-red-600  text-sm" role="alert">
                            {{$errors->first('title')}}
                        </span>
                    </div>
                </div>

                <div class="flex flex-wrap my-5">
                    <div class="w-full md:w-full px-6 md:mb-0 mb-1">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                          File
                        </label>
                        <div class="relative">
                            <div class="overflow-hidden relative w-auto mt-4 mb-4">
                                <div class="flex items-center justify-center bg-grey-lighter">
                                    <label
                                        class="w-full flex flex-col items-center px-4 py-4 bg-gray-200 text-gray-700 border-b-2 border-gray-400 tracking-wide uppercase cursor-pointer hover:text-primary-300 hover:bg-gray-300">
                                        <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                        </svg>
                                        <span class="mt-2 text-sm leading-normal" id="selected">Select a file</span>
                                        <input type='file' value="{{$job->file_path}}" class="hidden" name="file" id="fileName"
                                            onchange="setName()" />
                                    </label>
                                </div>
                            </div>
                        </div>
                        <span class="flex italic text-red-600  text-sm" role="alert">
                            {{$errors->first('title')}}
                        </span>
                    </div>
                </div>

                <div class="flex flex-wrap my-5">
                    <div class="w-full md:w-full px-6 md:mb-0 mb-6">
                        @if ($job->file_path)
                        <div class="flex justify-center">
                            <iframe src="{{asset('tareas/'. $job->file_path)}}" id="viewer" height="600" width="800"
                                frameborder="0"></iframe>
                        </div>
                        @endif
                    </div>
                </div>

                <button type="submit" class="flex mx-auto btn btn-primary">Save</button>

            </form>
        </div>
    </div>
</div>






            {{-- star modal --}}
            <div
                class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
                <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
                <div class="modal-container bg-white mx-auto rounded shadow-lg z-50 overflow-y-auto">
                    <div class="modal-content py-4 text-left px-6">
                        <div class="flex justify-end items-center pb-3">
                            <div class="modal-close cursor-pointer z-50">
                                <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18"
                                    height="18" viewBox="0 0 18 18">
                                    <path
                                        d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div class="flex justify-center">
                            <iframe id="viewer" height="600" width="800" frameborder="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end modal --}}

@endsection

@push('js')
<script>
    let ancho = screen.width;
    if (ancho <= 640) {
        let marco = document.getElementById('viewer');
        marco.setAttribute('height',200);
        marco.setAttribute('width',270);
    }

    function setName(){
        let fileName = document.getElementById('fileName');
        var cad = fileName.value;
        cad = cad.split('\\');
        let selected = document.getElementById('selected');
        selected.innerHTML = cad[2];
        fileDocument = document.getElementById("fileName").files[0];
        fileDocument_url = URL.createObjectURL(fileDocument);
        document.getElementById('viewer').setAttribute('src', fileDocument_url);
    }
</script>
@endpush
