<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{$quiz->title}}
        </h2>
    </x-slot>


    <form method="POST" action="{{route('learn.store')}}/">
        @csrf

        @foreach ($quiz['questions'] as $question)
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 mt-4   sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        <div class="flex items-center">
                            <fieldset>
                                <legend class="text-lg font-medium text-gray-900 mb-2">
                                    {{ $question->title }}
                                </legend>
                                @foreach ($question['options'] as $option)
                                    <div>
                                        <input type="radio" id="{{$option->id}}" name="{{$question->id}}" value="{{$option->title}}">
                                        <label for="{{$option->id}}"> {{ $option->title }} </label>
                                    </div>
                                @endforeach
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach

        <button type="submit">Save</button>
    </form>




</x-app-layout>
