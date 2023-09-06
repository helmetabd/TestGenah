@props(['post'])

<x-card class="md:w-1/2 lg:w-1/3">
    <div class="mb-10 group wow fadeInUp" data-wow-delay=".1s">
        <div class="rounded overflow-hidden mb-8">
            <a href="blog-details.html" class="block">
                <img src="https://placehold.co/600x400" alt="image"
                    class="w-full transition group-hover:scale-125 group-hover:rotate-6" />
            </a>
        </div>
        <div>
            <span
                class="bg-primary rounded inline-block text-center py-1 px-4 text-xs leading-loose font-semibold text-white mb-5">
                {{ $post->created_at }}
            </span>
            <h3>
                <a href="blog-details.html"
                    class="font-semibold text-xl sm:text-2xl lg:text-xl xl:text-2xl mb-4 inline-block text-dark hover:text-primary">
                    {{ $post->title }}
                </a>
            </h3>
            <p class="text-base text-body-color">
                {{ $post->excerpt }}
            </p>
        </div>
    </div>
</x-card>
