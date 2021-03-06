@extends('layouts.app')

@section('content')
    <div class="m-auto  w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
               Update Car
            </h1>
        </div>
        <div class="flex justify-center pt-40">
            <form action="/rides/{{$car->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="block">
                    <input type="text" 
                    class="block shadow-5xl mb-10 p-2 w-80  italic placeholder-gray-400" 
                    name="name" value="{{$car->name}}" placeholder="brand name..">
                    <input type="text" 
                    class="block shadow-5xl mb-10 p-2 w-80  italic placeholder-gray-400" 
                    name="founded" value="{{$car->founded}}" placeholder="Year Founded">
                    <input type="text" 
                    class="block shadow-5xl mb-10 p-2 w-80  italic placeholder-gray-400" 
                    name="description" value="{{$car->description}}" placeholder="Description">
                    <button  type="submit" class="bg-green-500 block shadow mb-10 p-2 w-80 uppercase font-bold">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection