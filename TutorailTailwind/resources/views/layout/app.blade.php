<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <nav class="relative container mx-auto p-6">
    <div class="flex justify-between items-center">
      <div class="pt-2">
        <img src="{{ asset('img/logo.svg') }}" alt="">
      </div>
      <div class="hidden md:flex space-x-6">
        <a class="hover:text-darkGrayishBlue" href="#">Pricing</a>
        <a class="hover:text-darkGrayishBlue" href="#">Product</a>
        <a class="hover:text-darkGrayishBlue" href="#">About Us</a>
        <a class="hover:text-darkGrayishBlue" href="#">Career</a>
        <a class="hover:text-darkGrayishBlue" href="#">Contact</a>
      </div>
      <a href="" class="hidden md:block p-3 px-6 text-white bg-brightRed rounded-full baseline hover:bg-brightRedLight">
        Get Started
      </a>
      <button id="menu-btn" class="block hamburger md:hidden focus:outline-none">
        <span class="hamburger-top"></span>
        <span class="hamburger-middle"></span>
        <span class="hamburger-bottom"></span>
      </button>
    </div>
    <div class="md:hidden">
      <div id="menu" class="absolute hidden flex-col items-center self-end py-8 mt-10 space-y-6 font-bold bg-white sm:w-auto sm:self-center left-6 right-6 drop-shadow-md">
        <a href="">Pricing</a>
        <a href="">Product</a>
        <a href="">About Us</a>
        <a href="">Careers</a>
        <a href="">Community</a>
      </div>
    </div>
  </nav>
  <section class="">
    <div class="container flex flex-col-reverse items-center px-6 mx-auto mt-10 space-y-0 md:space-y-0 md:flex-row">
      <div class="flex flex-col mb-32 space-y-12 md:w-1/2">
        <h1 class="max-w-md text-4xl font-bold text-center md:text-5xl md:text-left">
          Bring everyone together to build better products
        </h1>
        <p class="max-w-sm text-center text-darkGrayishBlue md:text-left">
          Manage make it simple for software teams to plan day-to-day tasks while keeping the larger team goals in view
        </p>
        <div class="flex justify-center md:justify-start">
          <a href="" class="p-3 px-6 text-white bg-brightRed rounded-full baseline hover:bg-brightRedLight">
            Get Started
          </a>
        </div>
      </div>
      <div class="md:w-1/2">
        <img src="{{ asset('img/illustration-intro.svg') }}" alt="">
      </div>
    </div>
  </section>
  <section id="features">
    <div class="container flex flex-col px-4 mx-auto mt-10 space-y-12 md:space-y-0 md:flex-row">
      <div class="flex flex-col space-y-12 md:w-1/2">
        <h2 class="max-w-md mx-auto text-4xl font-bold text-center md:text-left">
          What's different about Manage?
        </h2>
        <p class="max-w-sm text-center text-darkGrayishBlue md:text-left">
          Manage provides all the functionality your team needs, without the complexity. Our software is tailor-made for modern digital product teams.
        </p>
      </div>
      <div class="flex flex-col space-y-8 md:w-1/2">

        <div class="flex flex-col space-y-3 md:space-y-0 md:space-x-6 md:flex-row">
          <div class="rounded-l-full bg-brightRedSupLight md:bg-transparent">
            <div class="flex items-center space-x-2">
              <div class="px-4 py-2 text-white md:py-1 bg-brightRed rounded-full">
                01
              </div>
              <h3 class="text-base md:mb-4 md:hidden font-bold">
                Track company-wide progress
              </h3>
            </div>
          </div>
          <div>
            <h3 class="text-lg hidden mb-4 md:block font-bold">
              Track company-wide progress
            </h3>
            <p class="text-darkGrayishBlue">
              See how your day-to-day tasks fit into the wider vision. Go from tracking progress at the milestone level all the way done to the smalllest of details. Never lose sight of the bigger picture again.
            </p>
          </div>
        </div>

        <div class="flex flex-col space-y-3 md:space-y-0 md:space-x-6 md:flex-row">
          <div class="rounded-l-full bg-brightRedSupLight md:bg-transparent">
            <div class="flex items-center space-x-2">
              <div class="px-4 py-2 text-white md:py-1 bg-brightRed rounded-full">
                02
              </div>
              <h3 class="text-base md:mb-4 md:hidden font-bold">
                Track company-wide progress
              </h3>
            </div>
          </div>
          <div>
            <h3 class="text-lg hidden mb-4 md:block font-bold">
              Track company-wide progress
            </h3>
            <p class="text-darkGrayishBlue">
              See how your day-to-day tasks fit into the wider vision. Go from tracking progress at the milestone level all the way done to the smalllest of details. Never lose sight of the bigger picture again.
            </p>
          </div>
        </div>

        <div class="flex flex-col space-y-3 md:space-y-0 md:space-x-6 md:flex-row">
          <div class="rounded-l-full bg-brightRedSupLight md:bg-transparent">
            <div class="flex items-center space-x-2">
              <div class="px-4 py-2 text-white md:py-1 bg-brightRed rounded-full">
                03
              </div>
              <h3 class="text-base md:mb-4 md:hidden font-bold">
                Track company-wide progress
              </h3>
            </div>
          </div>
          <div>
            <h3 class="text-lg hidden mb-4 md:block font-bold">
              Track company-wide progress
            </h3>
            <p class="text-darkGrayishBlue">
              See how your day-to-day tasks fit into the wider vision. Go from tracking progress at the milestone level all the way done to the smalllest of details. Never lose sight of the bigger picture again.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="testimonials">
    <div class="max-w-6xl px-5 mx-auto mt-32 text-center">
      <h2 class="text-4xl text-center font-bold">
        What's different About Manage?
      </h2>
      <div class="flex flex-col md:flex-row mt-24 md:space-x-6">
        <div class="flex flex-col items-center p-6 space-y-6 rounded-lg bg-veryLightGrey md:w-1/3">
          <img src="{{ asset('img/avatar-anisha.png') }}" class=" w-16 -mt-14" alt="">
          <h5 class="text-lg font-bold">
            Anisha Li
          </h5>
          <p class="text-sm text-darkGrayishBlue">
            "Manage has supercharged our team's workflow. The ability to maintain visibility on larger milestones at all times keeps everyone motivated."
          </p>
        </div>

        <div class="hidden md:flex flex-col items-center p-6 space-y-6 rounded-lg bg-veryLightGrey md:w-1/3">
          <img src="{{ asset('img/avatar-ali.png') }}" class=" w-16 -mt-14" alt="">
          <h5 class="text-lg font-bold">
            Ali Bravo
          </h5>
          <p class="text-sm text-darkGrayishBlue">
            "Manage has supercharged our team's workflow. The ability to maintain visibility on larger milestones at all times keeps everyone motivated."
          </p>
        </div>

        <div class="hidden md:flex flex-col items-center p-6 space-y-6 rounded-lg bg-veryLightGrey md:w-1/3">
          <img src="{{ asset('img/avatar-richard.png') }}" class=" w-16 -mt-14" alt="">
          <h5 class="text-lg font-bold">
            Richard Watts
          </h5>
          <p class="text-sm text-darkGrayishBlue">
            "Manage has supercharged our team's workflow. The ability to maintain visibility on larger milestones at all times keeps everyone motivated."
          </p>
        </div>
      </div>
      <div class="my-16">
        <a href="" class="p-3 px-6 pt-2 text-white bg-brightRed rounded-full baseline hover:bg-brightRedLight">
          Get Started
        </a>
      </div>
    </div>
  </section>
  <section id="cta" class="bg-brightRed">
    <div class="container flex flex-col items-center justify-between px-6 py-24 mx-auto space-y-12 md:py-12 md:flex-row md:space-y-0">
      <h2 class=" text-5xl font-bold leading-tight text-center text-white md:text-4xl md:max-w-xl md:text-left">
        Simplify how your team works today
      </h2>
      <div>
        <a href="" class="p-3 px-6 pt-2 text-brightRed bg-white rounded-full shadow-2xl baseline hover:bg-gray-300">
          Get Started
        </a>
      </div>
    </div>
  </section>
  <footer class="bg-veryDarkBlue">
    <div class="container flex flex-col-reverse justify-between px-6 py-10 mx-auto space-y-8 md:flex-row md:space-y-0">
      <div class="flex flex-col-reverse items-center justify-between space-y-12 md:flex-col md:space-y-0 md:items-start">
        <div class="max-auto text-center my-6 text-white md:hidden">
          Copyright &copy; 2022, All Rights Reserved.
        </div>
        <div>
          <img src="{{ asset('img/logo-white.svg') }}" class="h-8" alt="">
        </div>
        <div class="flex justify-center space-x-4">
          <a href="">
            <img src="{{ asset('img/icon-facebook.svg') }}" class="h-8" alt="">
          </a>
          <a href="">
            <img src="{{ asset('img/icon-youtube.svg') }}" class="h-8" alt="">
          </a>
          <a href="">
            <img src="{{ asset('img/icon-twitter.svg') }}" class="h-8" alt="">
          </a>
          <a href="">
            <img src="{{ asset('img/icon-pinterest.svg') }}" class="h-8" alt="">
          </a>
          <a href="">
            <img src="{{ asset('img/icon-instagram.svg') }}" class="h-8" alt="">
          </a>
        </div>
      </div>
      <div class="flex justify-around space-x-32">
        <div class="flex flex-col space-y-3 text-white">
          <a href="#" class="hover:text-brightRed">Home</a>
          <a href="#" class="hover:text-brightRed">Pricing</a>
          <a href="#" class="hover:text-brightRed">Products</a>
          <a href="#" class="hover:text-brightRed">About</a>
        </div>
        <div class="flex flex-col space-y-3 text-white">
          <a href="#" class="hover:text-brightRed">Careers</a>
          <a href="#" class="hover:text-brightRed">Community</a>
          <a href="#" class="hover:text-brightRed">Privacy Policy</a>
        </div>
      </div>
      <div class="flex flex-col justify-between">
        <form action="">
          <div class="flex space-x-3">
            <input type="text" class="flex-1 px-4 rounded-full focus:outline-none" placeholder="Update in your inbox">
            <button class="px-6 py-2 text-white rounded-full bg-brightRed hover:bg-brightRedLight focus:outline-none">Go</button>
          </div>
        </form>
        <div class="hidden text-white md:block">
          Copyright &copy; 2022, All Rights Reserved.
        </div>
      </div>
    </div>
  </footer>
  <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
