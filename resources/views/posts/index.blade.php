@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto p-4">
        <h1 class="text-2xl font-bold mb-6">
            記事一覧a
        </h1><!-- /.text-2xl font-bold mb-6 -->
        <div class="mb-6">
            <a href="{{ route('posts.create') }}" class="px-r py-2 bg-green-500 text-white rounded hover:bg-green-600">
                新規投稿
            </a>
        </div><!-- /.mb-6 -->
        <div class="test"></div>
        @if ($posts->isEmpty())
            <p>まだ記事がありません。</p>
        @else
            <div class="space-y-4">
                @foreach ($posts as $post)
                    <div class="p-6 bg-white rounded shadow-md hover:shadow-lg transition">
                        <h2 class="text-2xl font-semibold text-gray-800">{{ $post->title }}</h2>
                        <p class="text-gray-600 mt-2">{{ Str::limit($post->body, 100) }}</p>
                        <div class="flex justify-between items-center mt-4 text-sm text-gray-500">
                            <span>投稿日時:{{ $post->created_at->format('Y/m/d H:i') }}</span>
                            <div class="flex space-x-4">
                                <a href="{{ route('posts.edit', $post) }}" class="text-blue-600 hover:underline">編集</a>
                                <form action="{{ route('posts.destroy', $post) }}" method="POST"
                                    onsubmit="return confirm('本当に削除しますか？');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline">削除</button>
                                </form>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
