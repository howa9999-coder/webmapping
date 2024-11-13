@extends('layout')

@section('content')
  <!--first section-->
  <div class="mt-20">
    <div class="relative bg-gradient-to-r from-cyan-500 to-blue-500 h-screen  md:h-96 bg-cover bg-center" id="home">
      <div class="absolute inset-0 bg-black opacity-50"></div> <!-- Optional overlay for better text visibility -->
      <div class="flex flex-col items-center justify-center h-full" id="home-about">
        <h1 class="text-black text-5xl mb-6 md:text-6xl font-bold text-center">
          Gaza Events
        </h1>
        <p class="text-white text-xl font-medium text-center">
          " Remembering, Reflecting, Rising"
        </p>

      </div>
      <!-- About Us Button -->
      <div class="absolute left-8 top-14 ">
        <a href="#" id="about-btn"
          class="bg-gray-200 shadow-lg z-30 text-blue-500  py-2 px-4 rounded-lg hover:bg-gray-200 transition">
          About Gaza Events
        </a>
      </div>
    </div>
  </div>


  <!--Red div-->
  <div class=" bg-red-600 h-[46px] py-2"></div>

  <!--Articles section-->
  <div class="container mx-auto p-4 mt-4 " id="articles">
    <h2 class="text-2xl font-bold my-8 text-center">Latest Articles</h2>
    <div class="flex flex-wrap -mx-2">
      <div class="w-full sm:w-1/2 md:w-1/3 px-2 mb-4">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
          <img src="images/article.webp" alt="Article Image" class="w-full h-50 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-semibold">Article Title 1</h3>
            <p class="text-gray-600 mt-1">This is a short description of the article that gives a brief overview of
              its content.</p>
            <div class="mt-4 text-sm text-gray-500">
              <span>By Author Name</span> | <span>Published on Oct 29, 2024</span>
            </div>
          </div>
        </div>
      </div>

      <div class="w-full sm:w-1/2 md:w-1/3 px-2 mb-4">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
          <img src="images/article.webp" alt="Article Image" class="w-full h-50 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-semibold">Article Title 1</h3>
            <p class="text-gray-600 mt-1">This is a short description of the article that gives a brief overview of
              its content.</p>
            <div class="mt-4 text-sm text-gray-500">
              <span>By Author Name</span> | <span>Published on Oct 29, 2024</span>
            </div>
          </div>
        </div>
      </div>


      <div class="w-full sm:w-1/2 md:w-1/3 px-2 mb-4">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
          <img src="images/article.webp" alt="Article Image" class="w-full h-50 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-semibold">Article Title 2</h3>
            <p class="text-gray-600 mt-1">This is a short description of the article that gives a brief overview of
              its content.</p>
            <div class="mt-4 text-sm text-gray-500">
              <span>By Author Name</span> | <span>Published on Oct 29, 2024</span>
            </div>
          </div>
        </div>
      </div>


    </div>
    <div class="flex justify-end my-6">
      <a href="/more-articles" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition">
        More Articles
      </a>
    </div>

    <hr>
  </div>

  <!--Map section-->
  <div class=" container flex-col mt-4 mx-auto" id="map-section">
    <h2 class="text-2xl font-bold mb-2 text-center">Gaza Damage Map</h2>

    <div class="w-full mx-auto p-6 bg-white mt-20 rounded-lg shadow-lg flex flex-col lg:flex-row items-center">

      <div class="lg:w-1/2 lg:pr-4 mb-4 lg:mb-0">
        <h3 class="mb-6">Explore the Gaza Damage Map: A Visual Representation of Impact</h3>
        <p class="text-gray-700 my-3">
          This interactive map serves as a powerful tool to visualize the extensive damages inflicted upon Gaza due to
          ongoing conflict and occupation. By incorporating multiple data layers, the map provides users with an
          intuitive and comprehensive view of the destruction across various regions.
        </p>

        <button class="bg-green-500 mt-3 text-white px-5 py-2 rounded-full hover:bg-[#87ec9f]">Map</button>

      </div>
      <div id="map" class="lg:w-1/2 mt-3 z-20 w-full rounded-lg shadow" style="height: 400px;"></div>

    </div>
  </div>

  <!--Associations section-->
  <div class="container mx-auto my-8 p-6 carousel" id="associations">
    <h2 class="text-2xl font-bold my-8 text-center">Associations</h2>
    <div class="relative">
      <div class="overflow-hidden">
        <div class="flex transition-transform duration-300 ease-in-out carousel-body">
          <!-- Association Item 1 -->
          <div class="flex-none w-full md:w-1/3 p-2">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
              <img src="images/association.jpg" alt="Association 1" class="w-full h-40 object-cover">
              <div class="p-4">
                <h3 class="font-semibold text-lg">Association 1</h3>
                <p class="mt-2 text-gray-600">Description of Association 1.</p>
                <a href="/association1" class="mt-4 inline-block text-blue-500 hover:underline">View More</a>
              </div>
            </div>
          </div>
          <!-- Association Item 2 -->
          <div class="flex-none w-full md:w-1/3 p-2">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
              <img src="images/association.jpg" alt="Association 2" class="w-full h-40 object-cover">
              <div class="p-4">
                <h3 class="font-semibold text-lg">Association 2</h3>
                <p class="mt-2 text-gray-600">Description of Association 2.</p>
                <a href="/association2" class="mt-4 inline-block text-blue-500 hover:underline">View More</a>
              </div>
            </div>
          </div>
          <!-- Association Item 3 -->
          <div class="flex-none w-full md:w-1/3 p-2">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
              <img src="images/association.jpg" alt="Association 3" class="w-full h-40 object-cover">
              <div class="p-4">
                <h3 class="font-semibold text-lg">Association 3</h3>
                <p class="mt-2 text-gray-600">Description of Association 3.</p>
                <a href="/association3" class="mt-4 inline-block text-blue-500 hover:underline">View More</a>
              </div>
            </div>
          </div>
          <!-- Association Item 4 -->
          <div class="flex-none w-full md:w-1/3 p-2">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
              <img src="images/association.jpg" alt="Association 4" class="w-full h-40 object-cover">
              <div class="p-4">
                <h3 class="font-semibold text-lg">Association 4</h3>
                <p class="mt-2 text-gray-600">Description of Association 4.</p>
                <a href="/association3" class="mt-4 inline-block text-blue-500 hover:underline">View More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button id="prevSlide"
        class="prevSlide absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-500 text-white p-2 rounded-full">
        &#10094;
      </button>
      <button id="nextSlide"
        class="nextSlide absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-500 text-white p-2 rounded-full">
        &#10095;
      </button>
    </div>
    <hr>

  </div>
@endsection

@section('scripts')
  @vite(['resources/js/home.js', 'resources/js/slide.js'])
@endsection
