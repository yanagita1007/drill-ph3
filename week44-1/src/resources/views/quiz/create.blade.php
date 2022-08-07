@extends('layouts.app')

@section('content')
    <div class="flex flex-col max-w-3xl mx-auto">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('quizzes.store') }}" method="post">
            @csrf

            <div class="mb-6">
                <label for="sample" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sample
                    </label>
                <input type="text" id="sample"
                    name="sample"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="sample text">
            </div>
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">送信</button>
        </form>
    </div>
@endsection
