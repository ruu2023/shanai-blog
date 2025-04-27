@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto p-4">
        <h1 class="text-2xl font-bold mb-6">記事編集</h1>

        <form action="{{ route('posts.update', $post) }}" method="POST" class="space-y-4">
            @csrf
            @method('put')

            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">タイトル</label>
                <input type="text" name="title" id="title"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" value="{{ old('title', $post->title) }}"
                    required>
            </div>

            <div>
                <label for="body" class="block text-sm font-medium text-gray-700">本文</label>
                <input type="text" name="body" id="body"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" value="{{ old('body', $post->body) }}"
                    required>
            </div>

            <div>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">更新する</button>
            </div>
        </form>
    </div>
@endsection
