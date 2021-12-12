@auth
<x-panel>
    <form method="POST" action="/posts/{{ $post->slug }}/comments">
        @csrf

        <header class="flex items-center">
            <img src="https://i.pravatar.cc/100?u={{ auth()->id() }}" alt="" width="40" height="40"
                class="rounded-full">
            <h2 class="ml-4">some</h2>
        </header>

        <x-form.textarea name='body'/>

        <div class="flex justify-end mt-6 pt-6 border-t border-gray-200 pt-6">
            <x-form.button>Post</x-form.button>
        </div>
    </form>
</x-panel>
@else
<p class="">
    <a href="/register" class="hover:underline">Register</a> or <a href="/login" class="hover:underline">Login</a> to
    leave a comment.
</p>
@endauth
