@extends('layouts.dashboard')

@section('content')

    <div class="flex flex-wrap">
        <div class="w-full mx-2 text-white card bg-gradient-green rounded-sm font-montserrat md:w-5/12 flex p-5 justify-between mt-5 items-center">
                <div>
                    <svg aria-hidden="true" data-prefix="fas" data-icon="clipboard-list"
                        class="h-12 w-12 svg-inline--fa fa-clipboard-list fa-w-12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentColor" d="M336 64h-80c0-35.3-28.7-64-64-64s-64 28.7-64 64H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM96 424c-13.3 0-24-10.7-24-24s10.7-24 24-24 24 10.7 24 24-10.7 24-24 24zm0-96c-13.3 0-24-10.7-24-24s10.7-24 24-24 24 10.7 24 24-10.7 24-24 24zm0-96c-13.3 0-24-10.7-24-24s10.7-24 24-24 24 10.7 24 24-10.7 24-24 24zm96-192c13.3 0 24 10.7 24 24s-10.7 24-24 24-24-10.7-24-24 10.7-24 24-24zm128 368c0 4.4-3.6 8-8 8H168c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16zm0-96c0 4.4-3.6 8-8 8H168c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16zm0-96c0 4.4-3.6 8-8 8H168c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16z"/></svg>
                </div>
            <div class="text-right">
                <h1 class="text-sm">Tareas Pendientes</h1>
                <a href="{{route('student.penddings')}}">
                        <span>{{$jobs->count()}}</span>
                </a>
            </div>

        </div>

        <div class="w-full mx-2 text-white card bg-gradient-red rounded-sm font-montserrat md:w-5/12 flex p-5 justify-between mt-5 items-center">

            <div>
                <svg aria-hidden="true" data-prefix="fas" data-icon="briefcase"
                    class="h-12 w-12 svg-inline--fa fa-briefcase fa-w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M320 336c0 8.84-7.16 16-16 16h-96c-8.84 0-16-7.16-16-16v-48H0v144c0 25.6 22.4 48 48 48h416c25.6 0 48-22.4 48-48V288H320v48zm144-208h-80V80c0-25.6-22.4-48-48-48H176c-25.6 0-48 22.4-48 48v48H48c-25.6 0-48 22.4-48 48v80h512v-80c0-25.6-22.4-48-48-48zm-144 0H192V96h128v32z"/></svg>
            </div>
            <div class="text-right">

                <h1 class="text-sm">Entregas</h1>

            <a href="{{route('student.deliveries')}}">
                    <span>{{$deliveries->count()}}</span>
                </a>

            </div>

        </div>
    </div>


    {{-- Nuevo index alumnos --}}
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-2">

        @if(count($subjects)>0)
        @foreach ($subjects ??[] as $subject)

        {{-- nuevo card --}}

            <div class="w-auto rounded-sm overflow-hidden shadow-lg hover:shadow-2xl bg-white m-4 font-montserrat border-b-4 border-bluedark-300">
                <div class="flex flex-col min-h-full">
                    <div class="px-6 py-4 border-b flex justify-between items-center">
                        <div class="pb-2 pt-2">
                            <a href="{{route('posts.index', $subject->id)}}">
                                <?xml version="1.0"?>
                            <svg xmlns="http://www.w3.org/2000/svg" height="62" viewBox="0 0 511.997 511.997" width="62"><path d="M226.554 166.843v48.838c0 11.685 12.791 18.746 22.659 12.804l40.542-24.42c9.657-5.819 9.634-19.802-.001-25.606l-40.541-24.419c-9.937-5.986-22.659 1.188-22.659 12.803zm55.384 24.419l-40.385 24.323.002-48.647z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#0E2A3F"/><path d="M275.351 114.867c-4.017-1.022-8.097 1.401-9.119 5.416s1.402 8.097 5.416 9.119c28.363 7.225 48.172 32.662 48.172 61.86 0 35.19-28.63 63.82-63.82 63.82s-63.82-28.63-63.82-63.82c0-29.198 19.809-54.636 48.172-61.86 4.014-1.022 6.438-5.104 5.416-9.119s-5.11-6.438-9.119-5.416c-35.015 8.918-59.469 40.333-59.469 76.396 0 43.462 35.358 78.82 78.82 78.82s78.82-35.358 78.82-78.82c-.001-36.063-24.455-67.478-59.469-76.396z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#0E2A3F"/><path d="M477.692 28.32H34.305C15.389 28.32 0 43.708 0 62.625V319.9c0 18.916 15.389 34.305 34.305 34.305h32.868c-.807 13.721 4.223 26.389 13.008 35.678h-.499c-23.601 0-42.801 19.2-42.801 42.801v34.138c0 9.295 7.562 16.856 16.856 16.856h122.366a16.75 16.75 0 009.355-2.845 16.755 16.755 0 009.356 2.845H317.18c3.46 0 6.677-1.05 9.356-2.845a16.755 16.755 0 009.356 2.845h122.366c9.295 0 16.856-7.562 16.856-16.856v-34.138c0-23.601-19.2-42.801-42.801-42.801h-.5c8.764-9.266 13.816-21.923 13.009-35.678h32.867c18.916 0 34.305-15.389 34.305-34.305V208.762c0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5V319.9c0 10.645-8.66 19.305-19.305 19.305h-36.218a47.888 47.888 0 00-9.612-15h42.635c4.143 0 7.5-3.357 7.5-7.5V65.82c0-4.143-3.357-7.5-7.5-7.5H37.5a7.499 7.499 0 00-7.5 7.5v250.885c0 4.143 3.357 7.5 7.5 7.5h42.635a47.645 47.645 0 00-9.612 15H34.305C23.66 339.205 15 330.544 15 319.9V62.625C15 51.98 23.66 43.32 34.305 43.32h443.388c10.645 0 19.305 8.66 19.305 19.305v111.138c0 4.143 3.357 7.5 7.5 7.5s7.5-3.357 7.5-7.5V62.625c-.001-18.917-15.39-34.305-34.306-34.305zM177.959 466.821a1.858 1.858 0 01-1.855 1.856H53.737a1.859 1.859 0 01-1.856-1.856v-34.138c0-15.329 12.472-27.801 27.801-27.801h70.478c15.329 0 27.8 12.472 27.8 27.801v34.138zM82.081 357.043c0-18.032 14.645-32.839 32.839-32.839 18.138 0 32.839 14.76 32.839 32.839 0 18.107-14.731 32.839-32.839 32.839s-32.839-14.731-32.839-32.839zm103.378 51.473c-7.721-11.242-20.661-18.634-35.3-18.634h-.5c8.764-9.266 13.816-21.923 13.009-35.678h45.583c-.807 13.746 4.239 26.405 13.009 35.678h-.5c-14.639 0-27.58 7.391-35.301 18.634zm-35.754-84.311h71.509a47.897 47.897 0 00-9.612 15h-52.284a47.642 47.642 0 00-9.613-15zm169.333 142.616a1.859 1.859 0 01-1.856 1.856H194.815a1.859 1.859 0 01-1.856-1.856v-34.138c0-15.329 12.472-27.801 27.801-27.801h70.478c15.329 0 27.801 12.472 27.801 27.801v34.138zm-95.879-109.778c0-18.145 14.77-32.839 32.84-32.839 18.075 0 32.839 14.697 32.839 32.839 0 18.107-14.731 32.839-32.839 32.839s-32.84-14.731-32.84-32.839zm103.379 51.473c-7.721-11.242-20.662-18.634-35.301-18.634h-.499c8.764-9.266 13.816-21.923 13.009-35.678h45.583c-.807 13.747 4.239 26.406 13.009 35.678h-.499c-14.64 0-27.581 7.391-35.302 18.634zm-35.754-84.311h71.509a47.916 47.916 0 00-9.613 15h-52.284a47.605 47.605 0 00-9.612-15zm141.532 80.677c15.329 0 27.801 12.472 27.801 27.801v34.138a1.859 1.859 0 01-1.856 1.856H335.895a1.859 1.859 0 01-1.856-1.856v-34.138c0-15.329 12.472-27.801 27.801-27.801zm-68.078-47.839c0-18.098 14.72-32.839 32.839-32.839 18.11 0 32.84 14.733 32.84 32.839 0 18.107-14.731 32.839-32.84 32.839-18.107 0-32.839-14.731-32.839-32.839zM45 309.205V73.32h421.997v235.885z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#0E2A3F"/></svg>
                            </a>
                        </div>
                        <div>
                            <a href="{{route('posts.index', $subject->id)}}">
                                <h1 class="font-montserrat font-semibold text-lg text-right text-bluedark-500">{{$subject->name}}</h1>
                            </a>
                            <h1 class="text-sm font-montserrat font-medium text-right text-gray-700">{{$subject->course->name}}</h1>
                        </div>
                    </div>
                    <div class="px-6 py-4 font-montserrat w-auto flex justify-between items-center">
                        <p class="text-gray-700 text-sm">
                            0 Tareas Pendientes
                        </p>

                        <div class="w-auto flex justify-between items-center">
                            <a href="{{route('teacher.index', $subject->id)}}">
                                <svg xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 0 36 36" width="32px"><path d="M8.377 31.833c6.917 0 11.667 3.583 15 3.583S33.71 33.5 33.71 18.167 24.293.583 20.627.583c-17.167 0-24.5 31.25-12.25 31.25z" fill="#efefef" data-original="#EFEFEF"/><path d="M20.25 9.75h-2v1a1 1 0 01-1 1h-5.5a1 1 0 01-1-1v-1h-2c-1.1 0-2 .9-2 2v12.5c0 1.1.9 2 2 2h11.5c1.1 0 2-.9 2-2v-12.5c0-1.1-.9-2-2-2z" fill="#f3f3f1" data-original="#F3F3F1"/><path d="M18.25 8.75v2a1 1 0 01-1 1h-5.5a1 1 0 01-1-1v-2h1.75c0-1.1.9-2 2-2s2 .9 2 2zM21.532 28.72l-3.005.53.53-3.005 7.425-7.425c.391-.391.847-.567 1.237-.177l1.237 1.237a.999.999 0 010 1.414z" fill="#2c84c7" data-original="#2FDF84" data-old_color="#2fdf84"/><path d="M20.5 10.75v-.975c-.083-.011-.164-.025-.25-.025h-2v1a1 1 0 01-1 1h2.25a1 1 0 001-1zM9 24.25v-12.5c0-1.014.768-1.849 1.75-1.975V9.75h-2c-1.1 0-2 .9-2 2v12.5c0 1.1.9 2 2 2H11c-1.1 0-2-.9-2-2z" fill="#d5dbe1" data-original="#D5DBE1"/><path d="M13 10.75v-2h1.75c0-.683.348-1.289.875-1.65a1.984 1.984 0 00-1.125-.35c-1.1 0-2 .9-2 2h-1.75v2a1 1 0 001 1H14a1 1 0 01-1-1zM21.308 26.245l7.007-7.007-.595-.595c-.391-.391-.847-.214-1.237.177l-7.425 7.425-.53 3.005 2.322-.41z" fill="#216294" data-original="#00B871" class="active-path" data-old_color="#00b871"/><path d="M18.527 30a.748.748 0 01-.738-.88l.53-3.005a.746.746 0 01.208-.4l7.425-7.425c.913-.913 1.808-.668 2.298-.177l1.237 1.237a1.75 1.75 0 010 2.475l-7.425 7.425a.746.746 0 01-.4.208l-3.005.53a.715.715 0 01-.13.012zm1.228-3.392l-.303 1.717 1.717-.303 7.258-7.258a.25.25 0 000-.354l-1.228-1.228c-.01.019-.086.066-.187.167zM16.01 27H8.75A2.752 2.752 0 016 24.25v-12.5A2.752 2.752 0 018.75 9h1.88v1.5H8.75c-.689 0-1.25.561-1.25 1.25v12.5c0 .689.561 1.25 1.25 1.25h7.26zM23 18.81h-1.5v-7.06c0-.689-.561-1.25-1.25-1.25h-1.87V9h1.87A2.752 2.752 0 0123 11.75z" data-original="#000000"/><path d="M17.25 12.5h-5.5c-.965 0-1.75-.785-1.75-1.75v-2a.75.75 0 01.75-.75h1.104c.328-1.153 1.39-2 2.646-2s2.318.847 2.646 2h1.104a.75.75 0 01.75.75v2c0 .965-.785 1.75-1.75 1.75zm-5.75-3v1.25c0 .138.112.25.25.25h5.5a.25.25 0 00.25-.25V9.5h-1a.75.75 0 01-.75-.75c0-.689-.561-1.25-1.25-1.25s-1.25.561-1.25 1.25a.75.75 0 01-.75.75zM9.75 14h9.5v1.5h-9.5zM9.75 17h9.5v1.5h-9.5zM9.75 20h9.5v1.5h-9.5z" data-original="#000000"/><path d="M28.314 14.78c-.827 0-1.5-.673-1.5-1.5s.673-1.5 1.5-1.5 1.5.673 1.5 1.5-.672 1.5-1.5 1.5zm0-2c-.275 0-.5.225-.5.5s.225.5.5.5.5-.225.5-.5-.224-.5-.5-.5zM16.375 3.25h2v1h-2zM10.625 3.25h2v1h-2zM14.125 0h1v2h-1z" fill="#a4afc1" data-original="#A4AFC1"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach

        @else
            <div>
                <h1>No posee materias asignadas</h1>
            </div>
        @endif
    </div>



    {{-- eliminar despues --}}
    {{-- <div id="accordion">
        <h1 class="mb-4">
            tailwind collapsible
        </h1>
        <section class="shadow">
            @foreach($subjects as $subject)

            <article class="border-b">
                <div class="border-l-2 border-transparent">
                    <header class="flex justify-between items-center p-5 pl-8 pr-8 cursor-pointer select-none">
                        <span class="text-grey-darkest font-thin text-xl">
                            {{$subject->name}}
                        </span>
                        <div class="rounded-full border border-grey w-7 h-7 flex items-center justify-center">

                            <svg aria-hidden="true" class="" data-reactid="266" fill="none" height="24" stroke="#606F7B" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <polyline points="6 9 12 15 18 9">
                                </polyline>
                            </svg>
                        </div>
                    </header>
                    <div>
                        <div class="pl-8 pr-8 pb-5 text-grey-darkest">
                            <ul class="pl-4">
                                @foreach ($subject->posts as $post)
                                    <li class="pb-2">
                                    <span>Autor {{$post->user->name}}</span>
                                    {{$post->title}}
                                    @foreach ($post->annotations as $annotation)
                                       <div>
                                        <div class="pl-8 pr-8 pb-5 text-grey-darkest">
                                            <ul class="pl-4">
                                                <li class="pb-2">
                                                <h2>Comment: {{$annotation->annotation}} </h2>
                                                    <span>by{{$annotation->user->name}}</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    @endforeach
                                    <form action="{{route('annotations.store')}}" method="POST">
                                        @csrf
                                        <input type="text" name="post_id" value="{{$post->id}}" hidden>
                                        <input type="text" name="subject_id" value="{{$subject->id}}" hidden>
                                        <div
                                            class="w-8/12 mx-5 border border-gray-600 bg-white h-8 rounded-full px-5 py-1 content-center flex items-center">
                                            <input name="annotation" type="text" class="bg-transparent focus:outline-none w-full  text-sm   ">
                                            <button type="submit" class="text-teal-600 font-semibold">Comment</button>
                                        </div>
                                    </form>
                                    </li>
                                @endforeach


                            </ul>
                        </div>
                    </div>
                </div>
            </article>
            @endforeach


        </section>
    </div> --}}


@endsection
