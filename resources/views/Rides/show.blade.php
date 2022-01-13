@extends('layouts.app')


@section('content')
    <div class="m-auto  w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                {{$car->name}}
            </h1>
        </div>
        <div class="py-10 text-center">
            <div class="m-auto">
                <span class="uppercase text-blue-500 font-bold italic text-xs">
                    Founded: {{$car->founded}}
                </span>
                <p class="text-lg text-gray-500 py-6">
                   {{$car->description}}
                </p>
                <table class="table-auto">
                    <tr class="bg-blue-100">
                        <th class="w-1/2 border-4 border-gray-500">Model</th>
                        <th class="w-1/2 border-4 border-gray-500">Engines</th>
                    </tr>
                    @forelse ($car->carModels as $model)
                        <tr>
                            <td class="border-4 bortder-gray-500">{{$model->model_name}}</td>
                            <td class="border-4 bortder-gray-500">
                                @foreach ($car->engine as $item)
                                    @if ($model->id == $item->model_id)
                                        {{$item->engine_name}}
                                    @endif
                                @endforeach
                            </td>
                        </tr>
                    @empty
                        <p>No car Models found</p>
                    @endforelse
                </table>
                <hr class="mt-4 mb-8">
            </div>
        </div>
    </div>
@endsection