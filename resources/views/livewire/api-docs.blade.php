<div>

    <h1 class="text-3xl font-bold mb-4">API Documentation</h1>

    @foreach ($content as $section)


    <section class="mb-8">

        <h2 class="text-xl font-semibold mb-2">{{ $section['title'] }}</h2>

        <p class="text-gray-700">{{ $section['description'] }}</p>

    </section>
    @endforeach

</div>