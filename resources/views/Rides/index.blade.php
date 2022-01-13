@extends('layouts.app')

@section('content')
    <div class="m-auto  w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Cars
            </h1>
        </div>
        <div class="pt-10">
            <a href="rides/create">Add a New Car &rarr;</a>
        </div>
        @foreach ($cars as $car)
        <div class="w-5/6 py-10">
            <div class="m-auto">
                <div class="float-right">
                    <a href="rides/{{$car->id}}/edit">Edit &rarr;</a>
                    <form action="/rides/{{$car->id}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="text-red-500 py-3">Delete &rarr;</button>
                    </form>
                </div>
                <span class="uppercase text-blue-500 font-bold italic text-xs">
                    Founded: {{$car->founded}}
                </span>
                <h2 class="text-gray-700 text-5xl hover:text-green-200">
                    <a href="/rides/{{$car->id}}">{{$car->name}}</a>
                </h2>
                <p class="text-lg text-gray-500 py-6">
                   {{$car->description}}
                </p>
                <hr class="mt-4 mb-8">
            </div>
        </div>
        @endforeach
    </div>
    
@endsection