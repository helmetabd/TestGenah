<section class="pt-20 lg:pt-[120px] pb-10 lg:pb-20">
    <div class="container">
        <div class="flex flex-wrap -mx-4">
            <div {{$attributes->merge(['class' => 'w-full px-4'])}}>
                {{$slot}}
            </div>
        </div>
    </div>
</section>