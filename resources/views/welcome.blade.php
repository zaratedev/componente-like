<x-app-layout>
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8 py-4">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl py-4">Componente Boton Like</h1>

        <div class="bg-white">
            <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
                <h2 class="text-xl font-bold text-gray-900">Posts</h2>
                
                <div class="mt-8 grid grid-cols-1 gap-y-12 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
                    @foreach ($posts as $post)
                    <div>
                        <div class="relative">
                            <div class="relative h-72 w-full overflow-hidden rounded-lg">
                                <img src="https://tailwindui.com/img/ecommerce-images/product-page-03-related-product-01.jpg"
                                    alt="Front of zip tote bag with white canvas, black canvas straps and handle, and black zipper pulls."
                                    class="h-full w-full object-cover object-center">
                            </div>
                            <div class="relative mt-4">
                                <h3 class="text-sm font-medium text-gray-900">{{ $post->name }}</h3>
                                <p class="mt-1 text-sm text-gray-500">{{ $post->description }}</p>
                            </div>
                            <div
                                class="absolute inset-x-0 top-0 flex h-72 items-end justify-end overflow-hidden rounded-lg p-4">
                                <div aria-hidden="true"
                                    class="absolute inset-x-0 bottom-0 h-36 bg-gradient-to-t from-black opacity-50">
                                </div>
                            </div>
                        </div>
                        <div class="mt-6">
                            <livewire:like-button :post="$post" />
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>
        </div>


    </div>
</x-app-layout>
