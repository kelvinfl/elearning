<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css"  rel="stylesheet" />
    <title>Calon Influencer</title>
    @vite('resources/css/app.css')
</head>
<body>
    <style>
        body {
    overflow-x: hidden; /* Mencegah scroll horizontal */
}

    </style>
<!--
  Heads up! 👋

  Plugins:
    - @tailwindcss/forms
-->

<header>
    <nav class=" border-gray-200 px-4 lg:px-6 py-2.5 ">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="#" class="flex items-center">
                <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-6 sm:h-9" alt="Logo influencer" />
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-black">Calon Influencer</span>
            </a>
            <div class="flex items-center lg:order-2">
                <a href="{{route('member.index')}}" class="text-white dark:text-white hover:bg-hover focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2  focus:outline-none dark:focus:ring-gray-800 dark:bg-hover dark:hover:bg-primary-900 ">Login Member</a>
                <a href="#" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:bg-primary-900 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800 ">Jadi Influencer!!</a>
                <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <a href="#" class="block py-2 pr-4 pl-3 text-black rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-black" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-hover lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-hover dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">About us</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-hover lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-hover dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Class</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-hover lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-hover dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Team</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-hover lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-hover dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Testimonial</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-hover lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-hover dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
</header>
<section class="text-gray-600 body-font">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
      <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
        <span id="element" class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900"></span>
        <p class="mb-8 leading-relaxed animate__animated animate__fadeIn animate_slower">
        Ingin jadi influencer hits? Gampang banget! Dengan metode yang seru dan terbukti, kita bakal bantu kamu langkah demi langkah buat bangun kehadiran online yang kece dan menarik perhatian. Yuk, mulai petualanganmu sekarang dan lihat perubahan dalam 14 hari! Siap-siap jadi bintang di dunia maya!
    </p>

        <div class="flex justify-center" data-aos="slide-up">
            <button class="inline-flex text-white bg-green-500 border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded text-lg">Mulai Belajar</button>
            <button class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Pelajari Lebih Lanjut</button>
        </div>

      </div>
      <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
        <img class="object-cover object-center rounded" alt="hero" src="https://images.unsplash.com/photo-1528716321680-815a8cdb8cbe?q=80&w=1976&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
      </div>
    </div>
  </section>


  {{-- <section class="text-gray-600 body-font overflow-hidden" data-aos="fade-up">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-20">
            <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900" data-aos="fade-down">Pricing</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base text-gray-500" data-aos="fade-down">Pilih Paket Terbaik</p>
        </div>
        <div class="flex flex-wrap -m-4 justify-center">
            <!-- Start Plan -->
            <div class="m-2 xl:w-1/4 md:w-1/2 w-full" data-aos="fade-up" data-aos-delay="100" data-aos-duration="500">
                <div class="h-full p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden">
                    <h2 class="text-sm tracking-widest title-font mb-1 font-medium">ISENG</h2>
                    <h1 class="text-5xl text-gray-900 pb-4 mb-4 border-b border-gray-200 leading-none">GRATIS!!</h1>
                    <p class="flex items-center text-gray-600 mb-2">
                        <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-primary-900 text-white rounded-full flex-shrink-0">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                <path d="M20 6L9 17l-5-5"></path>
                            </svg>
                        </span>Mencoba Trial Materi dari kami
                    </p>
                    <button class="flex items-center mt-auto text-white bg-gray-400 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-500 rounded">Mulai Jadi Influencer!</button>
                    <p class="text-xs text-gray-500 mt-3">Cocok jika ingin mencoba dahulu.</p>
                </div>
            </div>
            <!-- Pro Plan -->
     <!-- Pro Plan dengan harga dicoret -->
<div class=" m-2 xl:w-1/4 md:w-1/2 w-full" data-aos="fade-up" data-aos-delay="200" data-aos-duration="500">
    <div class="h-full p-6 rounded-lg border-2 border-green-500 flex flex-col relative overflow-hidden">
        <span class="bg-green-500 text-white px-3 py-1 tracking-widest text-xs absolute right-0 top-0 rounded-bl">POPULAR</span>
        <h2 class="text-sm tracking-widest title-font mb-1 font-medium">MULAI SUKA!!!</h2>
        <h1 class="text-5xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
            <!-- Harga yang dicoret -->
            <span class="text-sm font-normal text-gray-500 line-through mr-2">Rp.150.000</span>
            <span>Rp.100.000</span><span class="text-lg ml-1 font-normal text-gray-500">/14 hari</span>
        </h1>
        <p class="flex items-center text-gray-600 mb-2">
            <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-primary-900 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                    <path d="M20 6L9 17l-5-5"></path>
                </svg>
            </span>
            Mendapatkan pelatihan selama 14 hari
        </p>
        <button class="flex items-center mt-auto text-white bg-green-500 border-0 py-2 px-4 w-full focus:outline-none hover:bg-green-600 rounded">Mulai Suka!!</button>
        <p class="text-xs text-gray-500 mt-3">Cocok jika mulai mau serius mengkonten</p>
    </div>
</div>

            <!-- Business Plan -->
            <div class="m-2 xl:w-1/4 md:w-1/2 w-full" data-aos="fade-up" data-aos-delay="300" data-aos-duration="500">
                <div class="h-full p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden">
                    <h2 class="text-sm tracking-widest title-font mb-1 font-medium">CALON INFLUENCER!!</h2>
                    <h1 class="text-5xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
                        <span>Rp.200.000</span><span class="text-lg ml-1 font-normal text-gray-500">/mo</span>
                    </h1>
                    <p class="flex items-center text-gray-600 mb-2">
                        <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-primary-900 text-white rounded-full flex-shrink-0">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                <path d="M20 6L9 17l-5-5"></path>
                            </svg>
                        </span>
                        Pelatihan 1 bulan</p>
                    <button class="flex items-center mt-auto text-white bg-gray-400 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-500 rounded">Calon Influencer!!</button>
                    <p class="text-xs text-gray-500 mt-3">Cocok jika ingin menjadi influencer.</p>
                </div>
            </div>
        </div>
    </div>
</section> --}}




{{--
  <section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col text-center w-full mb-20">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Master Cleanse Reliac Heirloom</h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.</p>
      </div>
      <div class="flex flex-wrap -m-4 text-center">
        <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
          <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-green-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
              <path d="M8 17l4 4 4-4m-4-5v9"></path>
              <path d="M20.88 18.09A5 5 0 0018 9h-1.26A8 8 0 103 16.29"></path>
            </svg>
            <h2 class="title-font font-medium text-3xl text-gray-900">2.7K</h2>
            <p class="leading-relaxed">Downloads</p>
          </div>
        </div>
        <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
          <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-green-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
              <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
              <circle cx="9" cy="7" r="4"></circle>
              <path d="M23 21v-2a4 4 0 00-3-3.87m-4-12a4 4 0 010 7.75"></path>
            </svg>
            <h2 class="title-font font-medium text-3xl text-gray-900">1.3K</h2>
            <p class="leading-relaxed">Users</p>
          </div>
        </div>
        <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
          <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-green-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
              <path d="M3 18v-6a9 9 0 0118 0v6"></path>
              <path d="M21 19a2 2 0 01-2 2h-1a2 2 0 01-2-2v-3a2 2 0 012-2h3zM3 19a2 2 0 002 2h1a2 2 0 002-2v-3a2 2 0 00-2-2H3z"></path>
            </svg>
            <h2 class="title-font font-medium text-3xl text-gray-900">74</h2>
            <p class="leading-relaxed">Files</p>
          </div>
        </div>
        <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
          <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-green-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
            </svg>
            <h2 class="title-font font-medium text-3xl text-gray-900">46</h2>
            <p class="leading-relaxed">Places</p>
          </div>
        </div>
      </div>
    </div>
  </section> --}}

  <section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto flex flex-wrap">
      <div class="flex flex-wrap w-full">
        <div class="lg:w-2/5 md:w-1/2 md:pr-10 md:py-6">
          <div class="flex relative pb-12" data-aos="fade-up" data-aos-duration="500">
            <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
              <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
            </div>
            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-green-500 inline-flex items-center justify-center text-white relative z-10">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
              </svg>
            </div>
            <div class="flex-grow pl-4">
              <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">STEP 1</h2>
              <p class="leading-relaxed">Tanya pada diri sendiri, kenapa kamu ingin jadi influencer? Temukan motivasimu dan tetapkan tujuan yang jelas!</p>
            </div>
          </div>
          <div class="flex relative pb-12" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
            <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
              <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
            </div>
            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-green-500 inline-flex items-center justify-center text-white relative z-10">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
              </svg>
            </div>
            <div class="flex-grow pl-4">
              <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">STEP 2</h2>
              <p class="leading-relaxed">Lakukan penelusuran terhadap konten yang sudah kamu buat. Apa yang kamu kuasai? Temukan kemampuan dan gaya unikmu!</p>
            </div>
          </div>
          <div class="flex relative pb-12" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
            <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
              <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
            </div>
            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-green-500 inline-flex items-center justify-center text-white relative z-10">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <circle cx="12" cy="5" r="3"></circle>
                <path d="M12 22V8M5 12H2a10 10 0 0020 0h-3"></path>
              </svg>
            </div>
            <div class="flex-grow pl-4">
              <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">STEP 3</h2>
              <p class="leading-relaxed">Kami akan memberikan teori dan studi kasus nyata dari influencer sukses. Pelajari dari pengalaman mereka!</p>
            </div>
          </div>
          <div class="flex relative pb-12" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">
            <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
              <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
            </div>
            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-green-500 inline-flex items-center justify-center text-white relative z-10">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
              </svg>
            </div>
            <div class="flex-grow pl-4">
              <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">STEP 4</h2>
              <p class="leading-relaxed">Kami ajarkan semua teknik editing dan hal teknis lainnya. Dari jam upload yang tepat hingga alat yang harus digunakan!</p>
            </div>
          </div>
          <div class="flex relative" data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">
            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-green-500 inline-flex items-center justify-center text-white relative z-10">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                <path d="M22 4L12 14.01l-3-3"></path>
              </svg>
            </div>
            <div class="flex-grow pl-4">
              <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">FINISH</h2>
              <p class="leading-relaxed">Setelah semua langkah, kamu siap untuk menjadi influencer! Tunjukkan keahlianmu dan bangun komunitasmu sendiri!</p>
            </div>
          </div>
        </div>
        <img class="lg:w-3/5 md:w-1/2 object-cover object-center rounded-lg md:mt-0 mt-12 hidden md:block" style="height: 600px;" src="https://plus.unsplash.com/premium_photo-1676210736121-3994f53bb493?q=80&w=1996&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="step">
      </div>
    </div>

  </section>
  <section class="text-gray-600 body-font overflow-hidden" data-aos="fade-up">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-20">
            <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900" data-aos="fade-down">Kelas Kami</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base text-gray-500" data-aos="fade-down">Pilih kelas terbaik untuk Anda</p>
        </div>
        <div class="flex flex-wrap -m-4 justify-center">
            @foreach($classes as $class)
            <div class="m-2 xl:w-1/4 md:w-1/2 w-full" data-aos="fade-up" data-aos-delay="100" data-aos-duration="500">
                <div class="h-full p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden">
                    <img src="{{ asset('storage/' . $class->thumbnail) }}" alt="{{ $class->name }}" class="w-full h-48 object-cover mb-4">
                    <h2 class="text-sm tracking-widest title-font mb-1 font-medium">{{ $class->name }}</h2>
                    <h1 class="text-5xl text-gray-900 pb-4 mb-4 border-b border-gray-200 leading-none">
                        @if($class->discount)
                        <span class="text-sm font-normal text-gray-500 line-through mr-2">Rp.{{ number_format($class->price, 0, ',', '.') }}</span>
                        <span>Rp.{{ number_format($class->discount, 0, ',', '.') }}</span>
                        @else
                        <span>Rp.{{ number_format($class->price, 0, ',', '.') }}</span>
                        @endif
                    </h1>
                    <button onclick="window.location.href='{{ route('verifikasi.kelas', ['class_id' => $class->id]) }}';"
                        class="flex items-center mt-auto text-white bg-primary-500 border-0 py-2 px-4 w-full focus:outline-none hover:bg-primary-600 rounded">
                    Daftar Sekarang
                </button>




                    <p class="text-xs text-gray-500 mt-3">Bergabunglah sekarang untuk pengalaman belajar yang menyenangkan.</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


 <section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20" data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000">
      <h1 class="text-2xl font-medium title-font mb-4 text-gray-900 tracking-widest">OUR TEAM</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Meet our dedicated team of professionals who strive to provide the best service.</p>
    </div>
    <div class="flex flex-wrap justify-center -m-4">
      <!-- Team Member 1 -->
      <div class="p-4 w-full sm:w-1/2 lg:w-1/4" data-aos="flip-left" data-aos-delay="200" data-aos-duration="500">
        <div class="h-full flex flex-col items-center text-center">
          <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center mb-4" src="https://dummyimage.com/200x200">
          <div class="flex-grow">
            <h2 class="title-font font-medium text-lg text-gray-900">Putri</h2>
            <h3 class="text-gray-500 mb-3">Team Leader</h3>
            <p class="mb-4"></p>
            <span class="inline-flex">
              <a class="text-gray-500" href="#">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                </svg>
              </a>
              <a class="ml-2 text-gray-500" href="#">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                </svg>
              </a>
              <a class="ml-2 text-gray-500" href="#">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
              </a>
            </span>
          </div>
        </div>
      </div>

      <!-- Team Member 2 -->
      <div class="p-4 w-full sm:w-1/2 lg:w-1/4" data-aos="flip-right" data-aos-delay="300" data-aos-duration="1000">
        <div class="h-full flex flex-col items-center text-center">
          <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center mb-4" src="https://dummyimage.com/201x201">
          <div class="flex-grow">
            <h2 class="title-font font-medium text-lg text-gray-900">Dila</h2>
            <h3 class="text-gray-500 mb-3">Graphic Designer</h3>
            <p class="mb-4"></p>
            <span class="inline-flex">
              <a class="text-gray-500" href="#">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                </svg>
              </a>
              <a class="ml-2 text-gray-500" href="#">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                </svg>
              </a>
              <a class="ml-2 text-gray-500" href="#">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
              </a>
            </span>
          </div>
        </div>
      </div>

      <!-- Team Member 3 -->
      <div class="p-4 w-full sm:w-1/2 lg:w-1/4" data-aos="flip-left" data-aos-delay="200" data-aos-duration="1000">
        <div class="h-full flex flex-col items-center text-center">
          <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center mb-4" src="https://dummyimage.com/204x204">
          <div class="flex-grow">
            <h2 class="title-font font-medium text-lg text-gray-900">Kelvin</h2>
            <h3 class="text-gray-500 mb-3">Developer</h3>
            <p class="mb-4"></p>
            <span class="inline-flex">
              <a class="text-gray-500" href="#">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                </svg>
              </a>
              <a class="ml-2 text-gray-500" href="#">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                </svg>
              </a>
              <a class="ml-2 text-gray-500" href="#">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
              </a>
            </span>
          </div>
        </div>
      </div>

      <!-- Team Member 4 -->
      <div class="p-4 w-full sm:w-1/2 lg:w-1/4" data-aos="flip-right" data-aos-delay="300" data-aos-duration="1000">
        <div class="h-full flex flex-col items-center text-center">
          <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center mb-4" src="https://dummyimage.com/205x205">
          <div class="flex-grow">
            <h2 class="title-font font-medium text-lg text-gray-900">Ahmad</h2>
            <h3 class="text-gray-500 mb-3">Mentor</h3>
            <p class="mb-4"></p>
            <span class="inline-flex">
              <a class="text-gray-500" href="#">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                </svg>
              </a>
              <a class="ml-2 text-gray-500" href="#">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                </svg>
              </a>
              <a class="ml-2 text-gray-500" href="#">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
              </a>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


  <section class="text-gray-600 body-font"  data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1500">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-wrap -m-4">
            <div class="lg:w-1/3 lg:mb-0 mb-6 p-4">
                <div class="h-full text-center">
                    <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="https://dummyimage.com/302x302">
                    <p class="leading-relaxed">“Jujur, ikut kelas ini bener-bener ngebantu aku ngerti cara branding di media sosial. Sekarang followers aku naik terus dan brand mulai ngajak kolab. Gokil banget sih!”</p>
                    <span class="inline-block h-1 w-10 rounded bg-green-500 mt-6 mb-4"></span>
                    <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">SARAH PUTRI</h2>
                    <p class="text-gray-500">Influencer Sosial Media</p>
                </div>
            </div>
            <div class="lg:w-1/3 lg:mb-0 mb-6 p-4">
                <div class="h-full text-center">
                    <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="https://dummyimage.com/300x300">
                    <p class="leading-relaxed">“Dulu cuma main medsos biasa, tapi setelah belajar di sini, aku ngerti gimana cara bikin konten yang bisa viral. Hasilnya? Follower aku sekarang naik terus!”</p>
                    <span class="inline-block h-1 w-10 rounded bg-green-500 mt-6 mb-4"></span>
                    <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">RAKA NUGRAHA</h2>
                    <p class="text-gray-500">Content Creator</p>
                </div>
            </div>
            <div class="lg:w-1/3 lg:mb-0 p-4">
                <div class="h-full text-center">
                    <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="https://dummyimage.com/305x305">
                    <p class="leading-relaxed">“Dari nol banget jadi ngerti cara bikin brand personal yang kuat. Sekarang aku sering dapet endorse dari brand lokal dan nasional!”</p>
                    <span class="inline-block h-1 w-10 rounded bg-green-500 mt-6 mb-4"></span>
                    <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">ALFIAN PRATAMA</h2>
                    <p class="text-gray-500">Brand Ambassador</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -m-4">
      <!-- Blog Post 1 -->
      <div class="p-4 md:w-1/3" data-aos="flip-up" data-aos-delay="200" data-aos-duration="1500">
        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
          <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://dummyimage.com/720x400" alt="blog">
          <div class="p-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">TEKNOLOGI</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Perkembangan Teknologi AI di Tahun 2024</h1>
            <p class="leading-relaxed mb-3">Dari chatbot yang lebih pintar hingga mobil tanpa sopir, perkembangan AI di tahun ini menghadirkan berbagai inovasi menarik yang terus mempengaruhi kehidupan sehari-hari.</p>
            <div class="flex items-center flex-wrap ">
              <a class="text-green-500 inline-flex items-center md:mb-2 lg:mb-0">Selengkapnya
                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M5 12h14"></path>
                  <path d="M12 5l7 7-7 7"></path>
                </svg>
              </a>
              <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">1.5K</span>
              <span class="text-gray-400 inline-flex items-center leading-none text-sm">10</span>
            </div>
          </div>
        </div>
      </div>
      <!-- Blog Post 2 -->
      <div class="p-4 md:w-1/3" data-aos="flip-up" data-aos-delay="200" data-aos-duration="1500">
        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
          <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://dummyimage.com/721x401" alt="blog">
          <div class="p-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">GAYA HIDUP</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">5 Tips Menjaga Kesehatan Mental di Era Digital</h1>
            <p class="leading-relaxed mb-3">Di tengah kehidupan serba cepat dan digital, menjaga kesehatan mental menjadi semakin penting. Berikut adalah 5 tips praktis yang bisa diterapkan sehari-hari.</p>
            <div class="flex items-center flex-wrap">
              <a class="text-green-500 inline-flex items-center md:mb-2 lg:mb-0">Selengkapnya
                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M5 12h14"></path>
                  <path d="M12 5l7 7-7 7"></path>
                </svg>
              </a>
              <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">890</span>
              <span class="text-gray-400 inline-flex items-center leading-none text-sm">15</span>
            </div>
          </div>
        </div>
      </div>
      <!-- Blog Post 3 -->
      <div class="p-4 md:w-1/3" data-aos="flip-up" data-aos-delay="200" data-aos-duration="1500">
        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
          <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://dummyimage.com/722x402" alt="blog">
          <div class="p-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">KEUANGAN</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Investasi yang Cocok untuk Generasi Milenial</h1>
            <p class="leading-relaxed mb-3">Generasi milenial memiliki banyak pilihan dalam hal investasi. Mari kita lihat beberapa opsi investasi yang menarik bagi kaum muda.</p>
            <div class="flex items-center flex-wrap ">
              <a class="text-green-500 inline-flex items-center md:mb-2 lg:mb-0">Selengkapnya
                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M5 12h14"></path>
                  <path d="M12 5l7 7-7 7"></path>
                </svg>
              </a>
              <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">1.8K</span>
              <span class="text-gray-400 inline-flex items-center leading-none text-sm">22</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<footer class="bg-white rounded-lg shadow m-3">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-2">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="#" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-black">Calon Influencer</span>
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">About</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">Contact</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="https://flowbite.com/" class="hover:underline">Calon influencer™</a>. All Rights Reserved.</span>
    </div>
</footer>


</body>

<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
<script>
    var typed = new Typed('#element', {
      strings: ['<i>Jadilah Influencer</i><br><i>Hanya Dalam 14 Hari!</i>'],
      typeSpeed: 50,
      // Mengaktifkan pengaturan HTML agar <br> dapat dirender
      contentType: 'html',
      // Opsi tambahan
      backSpeed: 50, // kecepatan penghapusan
      loop: true, // apakah untuk mengulang atau tidak
    });
  </script>

<script>
    AOS.init({
        duration: 5000, // durasi animasi dalam milidetik
        easing: 'ease-in-out', // efek easing
        delay: 1000, // values from 0 to 3000, with step 50ms
    });
</script>
@vite('resources/js/app.js')
</html>

