<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
        <div class="rounded-md bg-gradient-to-r from-slate-800 to-slate-900 hover:to-slate-800 mb-4">
            <div class="p-4 flex gap-4">
                <div>
                    <img src="{{ $reply->user->avatar() }}" alt="{{ $reply->user->name }}" class="rounded-md">
                </div>

                <div class="w-full">
                    {{-- <h2 class="mb-4 flex items-start justify-between">
                        <a href="{{ route('thread', $thread) }}" class="text-xl font-semibold text-white/90">
                            {{ $thread->title }}
                        </a>
                        <span class="rounded-full text-xs py-2 px-4 capitalize" style="color: {{ $thread->category->color }}; border: 1px solid {{ $thread->category->color }}">
                            {{ $thread->category->name }}
                        </span>
                    </h2> --}}
                    <p class="mb-2 text-blue-600 font-semibold text-xs">
                        {{ $reply->user->name }}
                        {{-- <span class="text-w hite/90">{{ $thread->created_at->diffForHumans() }}</span> --}}
                    </p>
                    <p class="text-white/60 text-xs">
                        {{ $reply->body }}
                    </p>
                    <p class="mt-4 text-white/60 text-xs flex gap-2 justify-end">
                        <a href="" class="hover:text-white">Responder</a>
                        <a href="" class="hover:text-white">Editar</a>
                    </p>
                </div>
            </div>
        </div>
</div>
