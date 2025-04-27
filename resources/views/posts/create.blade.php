@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">新規投稿</h1>

    <form method="POST" action="{{ route('posts.store') }}" class="space-y-4">
        @csrf
        <div>
            <label for="title" class="block text-sm font-medium text-gray-700">タイトル</label>
            <input type="text" name="title" id="title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
        </div>

        <div>
            <label for="body" class="block text-sm font-medium text-gray-700">本文</label>
            <textarea name="body" id="body" rows="5" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></textarea>
        </div>

        <div>
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">投稿する</button>
        </div>
    </form>
@endsection
