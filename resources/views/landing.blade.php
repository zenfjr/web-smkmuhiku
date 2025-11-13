
<!doctype html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      SMK MUHIKU
    </title>
    <link
      rel="shortcut icon"
      href="assets/images/logosmk.png"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="./src/css/tailwind.css" />

    <!-- ==== WOW JS ==== -->
    <script src="assets/js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
  </head>

  <body>
    <!-- ====== Navbar Section Start -->
    <div
      class="absolute top-0 left-0 z-40 flex items-center w-full bg-transparent ud-header"
    >
      <div class="container px-4 mx-auto">
        <div class="relative flex items-center justify-between -mx-4">
          <div class="max-w-full px-4 w-60">
            <a href="http://127.0.0.1:8000/" class="block w-full py-5 navbar-logo">
              <img
                src="assets/images/logo/smkmuhiku.png"
                alt="logo"
                class="w-full header-logo"
              />
            </a>
          </div>
          <div class="flex items-center justify-between w-full px-4">
            <div>
              <button
                id="navbarToggler"
                class="absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] ring-primary focus:ring-2 lg:hidden"
              >
                <span
                  class="relative my-[6px] block h-[2px] w-[30px] bg-white"
                ></span>
                <span
                  class="relative my-[6px] block h-[2px] w-[30px] bg-white"
                ></span>
                <span
                  class="relative my-[6px] block h-[2px] w-[30px] bg-white"
                ></span>
              </button>
              <nav
                id="navbarCollapse"
                class="absolute right-4 top-full hidden w-full max-w-[250px] rounded-lg bg-white py-5 shadow-lg dark:bg-dark-2 lg:static lg:block lg:w-full lg:max-w-full lg:bg-transparent lg:px-4 lg:py-0 lg:shadow-none dark:lg:bg-transparent xl:px-6"
              >
                <ul class="blcok lg:flex 2xl:ml-20">
                  <li class="relative group">
                    <a
                      href="#home"
                      class="flex py-2 mx-8 text-base font-medium ud-menu-scroll text-dark group-hover:text-primary dark:text-white lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70"
                    >
                      Home
                    </a>
                  </li>
                  <li class="relative group">
                    <a
                      href="#about"
                      class="flex py-2 mx-8 text-base font-medium ud-menu-scroll text-dark group-hover:text-primary dark:text-white lg:ml-7 lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-10"
                    >
                      About
                    </a>
                  </li>
                        <path
                          d="M7.99999 14.9C7.84999 14.9 7.72499 14.85 7.59999 14.75L1.84999 9.10005C1.62499 8.87505 1.62499 8.52505 1.84999 8.30005C2.07499 8.07505 2.42499 8.07505 2.64999 8.30005L7.99999 13.525L13.35 8.25005C13.575 8.02505 13.925 8.02505 14.15 8.25005C14.375 8.47505 14.375 8.82505 14.15 9.05005L8.39999 14.7C8.27499 14.825 8.14999 14.9 7.99999 14.9Z"
                        />
                      </svg>
                    </a>
                    <div
                      class="submenu relative left-0 top-full hidden w-[250px] rounded-xs bg-white p-4 transition-[top] duration-300 group-hover:opacity-100 dark:bg-dark-2 lg:invisible lg:absolute lg:top-[110%] lg:block lg:opacity-0 lg:shadow-lg lg:group-hover:visible lg:group-hover:top-full"
                    >
                      <a
                        href="about.html"
                        class="block rounded-sm px-4 py-[10px] text-sm text-body-color hover:text-primary dark:text-dark-6 dark:hover:text-primary"
                      >
                        About Page
                      </a>
                      <a
                        href="pricing.html"
                        class="block rounded-sm px-4 py-[10px] text-sm text-body-color hover:text-primary dark:text-dark-6 dark:hover:text-primary"
                      >
                        Pricing Page
                      </a>
                      <a
                        href="contact.html"
                        class="block rounded-sm px-4 py-[10px] text-sm text-body-color hover:text-primary dark:text-dark-6 dark:hover:text-primary"
                      >
                        Contact Page
                      </a>
                      <a
                        href="blog-grids.html"
                        class="block rounded-sm px-4 py-[10px] text-sm text-body-color hover:text-primary dark:text-dark-6 dark:hover:text-primary"
                      >
                        Blog Grid Page
                      </a>
                      <a
                        href="blog-details.html"
                        class="block rounded-sm px-4 py-[10px] text-sm text-body-color hover:text-primary dark:text-dark-6 dark:hover:text-primary"
                      >
                        Blog Details Page
                      </a>
                      <a
                        href="{{ route('register') }}"
                        class="block rounded-sm px-4 py-[10px] text-sm text-body-color hover:text-primary dark:text-dark-6 dark:hover:text-primary"
                      >
                        Register
                      </a>

                      <a
                        href="{{ route('login') }}"
                        class="block rounded-sm px-4 py-[10px] text-sm text-body-color hover:text-primary dark:text-dark-6 dark:hover:text-primary"
                      >
                        Login
                      </a>
                        404 Page
                      </a>
                    </div>
                  </li>
                </ul>
              </nav>
            </div> 
                    <defs>
                      <clipPath id="clip0_2172_3070">
                        <rect width="24" height="24" fill="white" />
                      </clipPath>
                    </defs>
                  </svg>
                </span>
              </label>
              <div class="hidden sm:flex">
                <a
                  href="{{ route('login') }}"
                  class="block rounded-sm px-4 py-[10px] text-sm bg-white text-blue-600 hover:bg-blue-100 dark:bg-white dark:text-blue-600 dark:hover:bg-blue-200"
                >
                  Login
                </a>

                <a
                  href="{{ route('register') }}"
                  class="block rounded-sm px-4 py-[10px] text-sm text-white hover:text-white dark:text-white dark:hover:text-white"
                >
                  Register
                </a>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ====== Navbar Section End -->

    <!-- ====== Hero Section Start -->
    <div
      id="home"
      class="relative overflow-hidden bg-primary pt-[120px] md:pt-[130px] lg:pt-[160px]"
    >
      <div class="container px-4 mx-auto">
        <div class="flex flex-wrap items-center -mx-4">
          <div class="w-full px-4">
            <div
              class="hero-content wow fadeInUp mx-auto max-w-[780px] text-center"
              data-wow-delay=".2s"
            >
              <h1
                class="mb-6 text-3xl font-bold leading-snug text-white sm:text-4xl sm:leading-snug lg:text-5xl lg:leading-[1.2]"
              >
                SMK Muhammadiyah Kutowinangun
              </h1>
              <p
                class="mx-auto mb-9 max-w-[600px] text-base font-medium text-white sm:text-lg sm:leading-[1.44]"
              >
                Sekolah berstandar nasional di Kabupaten Kebumen. SMK penerima program sekolah center of excellent (CoE) 
                yang dicanangkan oleh pemerintah pusat kepada Dinas Kependidikan dan kebudayaan (Dispendikbud).
              </p>
              <ul
                class="flex flex-wrap items-center justify-center gap-5 mb-10"
              >
                        <path
                          d="M0.521393 0.0454102H40.5214V31.9174H0.521393V0.0454102Z"
                        />
                      </mask>
                      <g mask="url(#mask0_2005_10788)">
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M8.82951 0.048584C6.54719 0.048584 4.85835 2.04626 4.93395 4.21266C5.00655 6.29398 4.91223 8.98962 4.23366 11.1879C3.55264 13.3923 2.4017 14.7893 0.521393 14.9686V16.993C2.4017 17.1727 3.55264 18.5689 4.23358 20.7737C4.91223 22.9719 5.00647 25.6676 4.93387 27.7489C4.85827 29.915 6.54711 31.913 8.82983 31.913H32.2163C34.4987 31.913 36.1872 29.9153 36.1116 27.7489C36.039 25.6676 36.1333 22.9719 36.8119 20.7737C37.4929 18.5689 38.641 17.1721 40.5214 16.993V14.9686C38.6411 14.7889 37.493 13.3927 36.8119 11.1879C36.1332 8.9899 36.039 6.29398 36.1116 4.21266C36.1872 2.04654 34.4987 0.048584 32.2163 0.048584H8.82951ZM27.6401 19.6632C27.6401 22.6463 25.415 24.4554 21.7224 24.4554H15.4366C15.2568 24.4554 15.0844 24.3839 14.9572 24.2568C14.8301 24.1297 14.7587 23.9572 14.7587 23.7774V8.18422C14.7587 8.00442 14.8301 7.83194 14.9572 7.70482C15.0844 7.57766 15.2568 7.50626 15.4366 7.50626H21.6866C24.7656 7.50626 26.7863 9.17406 26.7863 11.7347C26.7863 13.5319 25.427 15.1409 23.6952 15.4228V15.5165C26.0526 15.7751 27.6401 17.408 27.6401 19.6632ZM21.037 9.65538H17.453V14.7179H20.4716C22.8052 14.7179 24.092 13.7782 24.092 12.0986C24.0917 10.5245 22.9855 9.65538 21.037 9.65538ZM17.453 16.7265V22.3055H21.1689C23.5986 22.3055 24.8856 21.3306 24.8856 19.4984C24.8856 17.6663 23.5625 16.7263 21.0126 16.7263L17.453 16.7265Z"
                        />
                      </g>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>



    <!-- ====== About Section Start -->
    <section
      id="about"
      class="bg-gray-1 pb-8 pt-20 dark:bg-dark-2 lg:pb-[70px] lg:pt-[120px]"
    >
      <div class="container px-4 mx-auto">
        <div class="wow fadeInUp" data-wow-delay=".2s">
          <div class="flex flex-wrap items-center -mx-4">
            <div class="w-full px-4 lg:w-1/2">
              <div class="mb-12 max-w-[540px] lg:mb-0">
                <h2
                  class="mb-5 text-3xl font-bold leading-tight text-dark dark:text-white sm:text-[40px] sm:leading-[1.2]"
                >
                  SMK Muhammadiyah Kutowinangun
                </h2>
                <p
                  class="mb-10 text-base leading-relaxed text-body-color dark:text-dark-6"
                >
                  merupakan sekolah berstandar nasional di Kabupaten Kebumen. 
                  SMK penerima program sekolah center of excellent (CoE) yang dicanangkan
                  oleh pemerintah pusat kepada Dinas Kependidikan dan kebudayaan (Dispendikbud).
                  <br />
                  <br />
                 
                </p>

                <a
                  href="https://smkmuhiku.sch.id/"
                  class="inline-flex items-center justify-center py-3 text-base font-medium text-center text-white border rounded-md border-primary bg-primary px-7 hover:border-blue-dark hover:bg-blue-dark"
                >
                  Lebih Lanjut
                </a>
              </div>
            </div>

            <div class="w-full px-4 lg:w-1/2">
              <div class="flex flex-wrap -mx-2 sm:-mx-4 lg:-mx-2 xl:-mx-4">
                <div class="w-full px-2 sm:w-1/2 sm:px-4 lg:px-2 xl:px-4">
                  <div
                    class="mb-4 sm:mb-8 sm:h-[400px] md:h-[540px] lg:h-[400px] xl:h-[500px]"
                  >
                    <img
                      src="./assets/images/about/about-image-01.jpeg"
                      alt="about image"
                      class="object-cover object-center w-full h-full"
                    />
                  </div>
                </div>

                <div class="w-full px-2 sm:w-1/2 sm:px-4 lg:px-2 xl:px-4">
                  <div
                    class="mb-4 sm:mb-8 sm:h-[220px] md:h-[346px] lg:mb-4 lg:h-[225px] xl:mb-8 xl:h-[310px]"
                  >
                    <img
                      src="./assets/images/about/about-image-02.jpeg"
                      alt="about image"
                      class="object-cover object-center w-full h-full"
                    />
                  </div>

                  <div
                    class="relative z-10 mb-4 flex items-center justify-center overflow-hidden bg-primary px-6 py-12 sm:mb-8 sm:h-[160px] sm:p-5 lg:mb-4 xl:mb-8"
                  >
                    <div>
                      <span class="block text-5xl font-extrabold text-white">
                        SMK
                      </span>
                      <span class="block text-base font-semibold text-white">
                        PUSAT
                      </span>
                      <span
                        class="block text-base font-medium text-white text-opacity-70"
                      >
                        KEUNGGULAN
                      </span>
                    </div>
    </script>
  </body>
</html>