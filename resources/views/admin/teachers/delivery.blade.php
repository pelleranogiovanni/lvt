@extends('layouts.dashboard')

@section('content')

    {{-- <div class="card w-8/12 bg-white">

            <div class="card-title">
            <h1>{{$delivery->job->subject->name}}  - {{$delivery->job->title}}</h1>
            </div>

            <div class="card-body">
                <div>
                <p>Fecha de entrega <span>{{$delivery->created_at->format('d-m-Y')}}</span></p>
                <textarea class="border boder-gray-600" name="" id="" cols="30" rows="10">
                    {{$delivery->job->description}}
                </textarea>
                <p><a href="{{route('teacher.descargarDelivery', $delivery->file_path)}}" class="block py-2">Descargar</a> </p>
        <form action="{{route('update.delivery',$delivery->id)}}" method="POST">
            @method('PUT')
            @csrf
                <select id="course" name="state" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                    <option disabled selected value> -- select a course -- </option>

                        <option value="0">Inactivo</option>
                        <option value="1">Delivered</option>
                        <option value="2">Rejected</option>
                        <option value="3">Aprobado</option>

                </select>

                </div>

            </div>
            <button type="submit" class="w-2/12 bg-teal-600 ">Update</button>
        </form>


    </div> --}}

    {{-- card --}}
    <div class="flex justify-center p-6">
        <div class="card bg-white rounded sm:w-10/12  p-4 shadow-lg">
          <div class="flex">
            <div class="w-2/3">
              <h1 class="font-semibold">
                {{$delivery->job->title}}
              </h1>
              <span class="block text-xs uppercase text-teal-600">{{$delivery->job->subject->name}}</span>
            </div>
            <div class="w-1/3">
            {{-- <span class="float-right text-xs bg-blue-400 rounded px-2 py-1 text-white">Activo</span> --}}
            <span class="float-right rounded-full text-green-700 bg-green-200 px-2 py-1 text-xs font-bold mr-3">Activo</span>
            </div>
          </div>
          <div class="py-4 text-sm">
            {{$delivery->job->description}}
          </div>

          <form action="{{route('update.delivery',$delivery->id)}}" method="POST">
            @method('PUT')
            @csrf
            <input type="text" hidden name="id_job" value="{{$delivery->job->id}}">
                <div class="flex pt-8">
                    <span class="text-xs font-semibold py-1">Actualizar Estado</span>
                    {{-- <span class="text-xs font-semibold py-1 ml-auto text-blue-600">75%</span> --}}
                </div>
                <div class="flex pt-2">
                    <select id="course" name="state" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                        <option disabled selected value> -- select a course -- </option>
                            <option value="0">Inactivo</option>
                            <option value="1">Delivered</option>
                            <option value="2">Rejected</option>
                            <option value="3">Aprobado</option>
                    </select>
                </div>
                <button type="submit" class="bg-teal-600 text-white text-sm p-2 mt-4 shadow-lg hover:text-white w-full hover:bg-teal-900 rounded">Update</button>
            </form>

        </div>
      </div>


@endsection