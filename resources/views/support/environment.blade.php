<x-guest-layout>
    @push('styles')
    <style>
        section ul {
                list-style-type: disc;
                margin-left: 20px;
            }

            section ul li {
                font-size: 16px;
                margin-bottom: 10px;
            }
            .volunteers-card__title{
                font-size: 20px;
            }


        .swiper-slide img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        }

        h1 {
            text-align: center;
            color: #4CAF50; /* Green color for the heading */
        }

        .content {
            margin: 20px 0;
            line-height: 1.6;
            color: #333;
        }

        .images-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr); /* Four equal columns */
            gap: 20px; /* Space between images */
        }

        .image-item {
            background-color: #fff; /* White background for images */
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .image-item img {
            width: 100%;
            height: 200px; /* Set a fixed height */
            object-fit: cover; /* Ensure the image covers the space */
        }

        .caption {
            padding: 10px;
            text-align: center;
            font-size: 14px;
            color: #555; /* Darker grey for captions */
        }

    </style>
    @endpush
    <section class="page-header" style="background-image: url({{asset('_nuxt/page-header-1-1.BAD7W5SW.jpg')}}); padding-bottom: 5.375rem; padding-top: 5.375rem;">
        <div class="container">
           <ul class="list-unstyled breadcrumb-one">
              <li><a href="/">Home</a></li>
              <li><span>Support</span></li>
           </ul>
           <h2 class="page-header__title">Environmental Sustainability</h2>
        </div>
    </section>

    <section class="sec-pad-top sec-pad-bottom about-one">
        <div class="about-one__shape-1 float-bob-y"><img src="{{asset('_nuxt/about-1-1.BzIvtQQI.png')}}" alt=""></div>
        <div class="about-one__shape-2 float-bob-x"><img src="{{asset('_nuxt/about-1-2.D_jGqYhl.png')}}" alt=""></div>
        <div class="container">
           <div class="row">

            <div class="container">
                <h1>Environmental Sustainability</h1>
                <div class="content">
                    <p>The King Ateke Tom Foundation is dedicated to preserving the environment for future generations. Through reforestation projects, clean energy initiatives, and educational programs, we promote sustainable practices that protect natural resources. We support local farmers with eco-friendly farming techniques and advocate for waste reduction and recycling efforts within our communities. Our goal is to create a healthier, greener planet while empowering and educating individuals to adopt environmentally responsible lifestyles.</p>

                    <p>The King Ateke Tom Foundation believes in a proactive approach to environmental sustainability. Through reforestation, we can restore vibrant green space, reduce the greenhouse effect, and control soil runoffs as well as preserve wildlife for future generations. The best time is now.</p>
                </div>

                <div class="images-container">
                    <!-- Image 1 -->
                    <div class="image-item">
                        <img src="{{asset('images/environment/8.jpg')}}" alt="Reforestation Project">
                        <div class="caption">Reforestation Project</div>
                    </div>
                    <!-- Image 2 -->
                    <div class="image-item">
                        <img src="{{asset('images/environment/5.jpg')}}" alt="Clean Energy Initiative">
                        <div class="caption">Clean Energy Initiative</div>
                    </div>
                    <!-- Image 3 -->
                    <div class="image-item">
                        <img src="{{asset('images/environment/9.jpg')}}" alt="Eco-Friendly Farming">
                        <div class="caption">Eco-Friendly Farming</div>
                    </div>
                    <!-- Image 4 -->
                    <div class="image-item">
                        <img src="{{asset('images/environment/recycle.webp')}}" alt="Community Recycling Efforts">
                        <div class="caption">Community Recycling Efforts</div>
                    </div>
                </div>
            </div>

        </div>
    </section>

</x-guest-layout>


