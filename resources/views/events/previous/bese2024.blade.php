<x-guest-layout>
    @push('styles')
    <style>
    #dropdown-content {

        max-height: 0!important;
       overflow: hidden;
        transition: max-height 0.5s ease, padding 0.5s ease;
        /*padding: 0 20px;  Padding for smooth transition */
    }

    /* Style for visible state */
    .show {
        max-height: 400px; /* Adjust this value based on content height */
        padding: 10px 20px; /* Adding padding when visible */
    }

    #toggle-content {
        margin: 20px 0px;
        padding: 10px 15px;
        cursor: pointer;
    }
    .swiper-slide img{
        height: 408px;
        width: auto;
    }
    .pre-amnesty .swiper-slide {
    display: none;
    }

    .pre-amnesty .swiper-slide-active {
    display: block;
    }

    .media-flex-container {
        display: flex;
        justify-content: space-between; /* Distributes space between the items */
        gap: 20px; /* Adds space between columns */
        max-width: 1200px; /* Optional: Set a max width for the layout */
        margin: 0 auto; /* Center the container */
    }

    .media-item {
        flex: 1; /* Makes all media items take equal space */
        max-width: 23%; /* Each item takes about 1/4 of the container, accounting for gaps */
    }

    .media-item video,
    .media-item img {
        width: 100%;
        height: 400px; /* Set height for video and images */
        object-fit: cover; /* Ensures the media scales proportionally */
    }
    .events-card__title a{
        font-size: 14px!important;
        line-height: 0!important;
    }
</style>
@endpush
    <section class="page-header" style="background-image: url({{asset('_nuxt/page-header-1-1.BAD7W5SW.jpg')}}); padding-bottom: 5.375rem; padding-top: 5.375rem;">
        <div class="container">
           <ul class="list-unstyled breadcrumb-one">
              <li><a href="{{route('home')}}">Home</a></li>
              <li><span>Events</span></li>
           </ul>
           <h2 class="page-header__title">Annual Bese Puko Children’s Fiesta 2024</h2>
        </div>
    </section>


    <section class="my-container sec-pad-top sec-pad-bottom about-one bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 min-h-screen py-10">
        <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg p-6">
            <div class="text-center">
                <h1 class="text-3xl font-bold text-yellow-600">King Ateke Tom Foundation</h1>
                <h2 class="text-2xl font-semibold text-blue-700 mt-2">Annual Bese Puko Children’s Fiesta</h2>
            </div>

            <div class="mt-6">
                <p class="text-lg text-gray-700 text-center">
                    The King Ateke Tom Foundation Annual Bese Puko Children’s Fiesta is a heartwarming celebration of unity, love, and togetherness, held in December in the Okochiri Kingdom, Rivers State. Dedicated to bringing joy to children, including those from orphanages, this event creates a safe, festive space where every child feels seen, valued, and cherished.
                </p>
            </div>

            <div class="mt-6">
                <h3 class="text-xl font-semibold text-purple-600 text-center">Theme: <span class="italic">“The Gift of Togetherness”</span></h3>
                <p class="text-md text-gray-700 mt-2 text-center">
                    The Bese Puko Children’s Fiesta goes beyond entertainment—it fosters community spirit, promotes cultural heritage, and spreads kindness. The event features exciting activities like games, cultural performances, gift-sharing, and a sit-down meal for the children, ensuring they experience the warmth and joy of the holiday season.
                </p>
            </div>

            <div class="mt-6 text-center">
                <h3 class="text-xl font-semibold text-green-600">Join Us in Making a Difference!</h3>
                <p class="text-md text-gray-700 mt-2">
                    Through the generous support of partners, donors, and volunteers, the King Ateke Tom Foundation continues to make this annual fiesta a memorable and impactful event. Join us in giving every child the gift of hope and happiness.
                </p>
            </div>

            <div class="mt-8 grid grid-cols-2 md:grid-cols-3 gap-4">
                @foreach([1,2,3,4,5,6,7,8,9,10, 11,12] as $image)
                    <div>
                        <img src="{{ asset('images/bese/' . $image . '.jpg') }}" class="rounded-lg shadow-md w-full h-48 object-cover" alt="Bese Puko Event Image" loading="lazy">
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</x-guest-layout>



