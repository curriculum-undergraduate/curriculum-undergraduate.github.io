<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Landing-Page</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet" href="./assets/css/custom-css.css" />
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@600&family=Lato&family=Roboto:ital,wght@0,400;1,500&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.2/dist/flowbite.min.css" />

  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: "#da373d",
            lms: "#659093",
          },
          fontFamily: {
            lato: "Lato",
            inter: "Inter",
          },
          screens: {
            mdx: { max: "760px" },
            smx: { max: "560px" },
            lgx: { max: "1024px" }

          },
        },
      },
    };
  </script>
</head>

<body class="bg-[#f7f2f0]">
  <!-- Navbar -->

  <section class="navbar">

    <nav class="bg-[#DDB07F] border-gray-200 px-2 sm:px-4 py-2.5  dark:bg-[#DDB07F]">
      <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="#" class="flex items-center ">
          <img src="./assets/img/landing/lumintu.jpg" class="mr-3 h-6 sm:h-9" alt="LumintuLogo" />
          <div class="text-white font-medium">Lumintu’s Stack</div>
        </a>
        <button data-collapse-toggle="mobile-menu" type="button"
          class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
          aria-controls="mobile-menu" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
              clip-rule="evenodd"></path>
          </svg>
          <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
              clip-rule="evenodd"></path>
          </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
          <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
            <li>
              <a href="./auth/Login.php"
                class=" nav-link block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-100 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent ">Sign
                In</a>
            </li>
            <li>
              <a href="./auth/Register.php"
                class=" nav-link block py-2 pr-4 pl-3 text-white hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-100 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Sign
                Up</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  </section>

  <div class="container">
    <div class="jumbotron mx-5 mt-8 mdx:mt-1 rounded">
      <div class="row">
        <div class="gap-40 grid lgx:grid-cols-1 md:grid-cols-2 mr-6">
          <div class="master-img">
            <img class="mdx:visible md:invisible md:hidden hover:shadow-md" src="./assets/img/landing/master-img.jpg"
              alt="master-img">
            <div
              class="mt-1 ml-10 content mdx:my-12 md:max-w-xl mdx:h-40 mdx:mb-10 rounded-lg drop-shadow-md hover:drop-shadow-xl">


              <div class="row space-y-8">

                <h1 class="text-lg font-inter md:text-4xl mdx:text-4xl fadein">
                  <span class="text-sm mdx:text-xl">HELLO THERE</span> <br> We Are <span
                    class="text-[#659093]">Lumintu’s Stack</span>

                </h1>
                <p class="mt-10 rounded-md text-gray-500 ">

                  Selama <span class="text-[#659093]">magang</span>, kita akan mengerjakan beberapa proyek terkait
                  dengan bidang <span class="text-[#659093]">Teknologi Informasi</span>, diantaranya adalah praktek
                  <span class="text-[#659093]">pembuatan framework, pengembangan database, Kapustakan yang bekerjasama
                    dengan Kraton Ngayogyakarta, pengintegrasian API, hingga pendokumentasian setiap proyek</span>
                </p>



              </div>
              <div class="mt-8">
                <button>
                  <a href="https://lumintu-logic.com/" type="button"
                    class=" mdx:hidden absolute mb-300 shadow-md w-50 text-white bg-[#DDB07F] hover:bg-[#c6925b] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center">
                    Get Started
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd"
                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                    </svg>
                  </a>
              </div>
            </div>
          </div>
          <img class="md:visible mdx:hidden rounded-lg shadow-md hover:shadow-lg" src="./assets/img/landing/master-img.jpg"
            alt="master-img">
        </div>
      </div>
      <div class="project">

        <div class=" row text-center">
          <h1 class=" my-24 mb-12 text-3xl font-inter smx:mt-72  smx:text-2xl ">
            Lumintu Logic <br> intership Program
          </h1>
          <div class="row  w-100 h-30 my-5 grid lgx:grid-cols-1 lgx:inline-block lgx:mx-auto  md:grid-cols-4">
            <div class="mx-6 my-4 ">
              <div
                class="bg-gradient-to-t to-yellow-300 from-yellow-100 hover:border-2 red:300 hover:border-transparent max-w-sm  rounded-lg  shadow-md  ">
                <a href="#">
                  <img class="rounded-t-lg bg-gradient-to-tr from-red-100  to-orange-300 " src="./assets/img/landing/UG.png" />
                </a>
                <div class="p-5 bg-[#F7F2F0] h-56">


                  <a href="#">
                    <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-[#659093] font-inter">
                      Undergraduate</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-xs">
                    Curriculum undergraduate adalah project untuk mahasiswa akhir dan fresh graduate bagi perguruan
                    tinggi negri dan swasta.
                  </p>
                  <button
                    class="mdx:visible md:hidden md:mt-10 h-10 smx:text-xs smx:h-8 text-[10] mx-auto text-white bg-[#DDB07F] hover:bg-[#d4a36e] focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-[#DDB07F] dark:hover:bg-[#c4986a]"
                    type="button" data-modal-toggle="UG">
                    >
                  </button>
                  <button
                    class=" md:visible mdx:hidden md:mt-10 h-10  smx:text-xs smx:h-8 text-[10] mx-auto text-white bg-[#DDB07F] hover:bg-[#d4a36e] focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-[#DDB07F] dark:hover:bg-[#c4986a]"
                    type="button" data-modal-toggle="UG">
                    read more
                  </button>

                  <!-- Main modal -->
                  <div id="UG" tabindex="-1" aria-hidden="true"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                      <!-- Modal content -->
                      <div class="relative bg-white rounded-lg shadow dark:bg-[#f7f2f0]">
                        <!-- Modal header -->
                        <div class="flex justify-between items-start p-5 rounded-t border-b dark:border-gray-600">
                          <h3 class="text-xl
                                        font-semibold text-gray-900 lg:text-2xl dark:text-[#659093]">
                            Undergraduate
                          </h3>
                          <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="UG">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                              xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                            </svg>
                          </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-6 space-y-6 bg-scroll bg-contain overflow-auto  h-96 min-w-full">
                          <div class="text-justify text-base leading-relaxed text-gray-500 dark:text-gray-400">
                            GradIT merupakan Lembaga Digital Talent Academy dengan mata pelajaran Web Programming yang
                            berbasis di Yogyakarta.
                            GradIT memfasilitasi bagi mahasiswa jurusan IT yang ada di Yogyakarta untuk mengembangkan
                            Skill IT yang mereka miliki, khususnya dibidang Web Programming.
                            <div class="text-justify mb-3 text-base leading-relaxed text-gray-500 dark:text-gray-400">
                              Pengajaran dilakukan dengan menarik dan diajarkan oleh mentor yang ahli dibidangnya, serta
                              peserta course akan mengerjakan real projek dan dilatih Hard dan Soft Skillnya agar bisa
                              menjadi seseorang yang proffesional dibidang IT.
                              Mentor Ahli dan Berpengalaman Belajar dari Dasar Hingga Ahli Dilaksanakan secara Offline
                              Fasilitas Memadai + Pendampingan Secara Inklusif
                            </div>
                            <div class="text-left text-base  leading-relaxed text-gray-500 dark:text-gray-400">Mengapa
                              Harus GradIT ?</div>
                            <div class="text-left text-base leading-relaxed text-gray-500 dark:text-gray-400">Hard Skill
                              => People Skill => Proffesional </div>
                            <div class="text-justify text-base leading-relaxed text-gray-500 dark:text-gray-400">Hard
                              Skill Pendampingan materi serta pengaplikasian Practical skill yang telah dipelajari untuk
                              menyelesaikan project, meliputi kemampuan coding dan web programming yang mereka miliki.
                            </div>
                            <div class="text-justify text-base leading-relaxed text-gray-500 dark:text-gray-400"></div>
                            People skill juga ditingkatkan dalam setiap kegiatan mereka, meliputi Hard Working tiap
                            perseorangan, Team Work yang mereka punya dan juga bagaimana problem solving yang akan
                            dijalankan.
                            Proffesional dengan mendapatkan Hard Skill & People Skill maka siswa yang mengikuti course
                            merasakan pengalaman untuk menjadi proffesional di bidang IT
                            Mari bergabung bersama kami, rasakan pengalaman pembelajaran yang menarik dan menambah
                            pengalaman anda di dunia IT secara langsung. GradIT adalah pilihan terbaik untuk belajar dan
                            mempertajam skill IT yang kamu miliki.
                          </div>
                          <div class="text-justify text-base leading-relaxed text-gray-500 dark:text-gray-400">Benefit :
                            <li>Mendapatkan Pelatihan dan Pengajaran dari mentor IT Terbaik dan berpengalaman</li>
                            <li>Mampu membuat layout web sederhana, menggunakan bahasa pemrograman HTML, dan menilai
                              situs web</li>
                            <li>mengenali grid pada Bootstrap dan bisa mengaplikasikan web yang responsif</li>
                            <li>Membuat database web sederhana dan mengimplementasikan SQL .</li>
                            <li>Setiap Selesai pembelajaran di tiap minggunya peserta akan mendapatkan Report Card dan
                              akan mendapatkan Sertifikat Saat menyelesaikan seluruh pembelajaran.</li>
                            <li>Modul bimbingan selama pembelajaran</li>
                          </div>

                          <div class="text-left text-base leading-relaxed text-gray-500 dark:text-gray-400"> Materi :
                            <li>HTML, CSS,BOOTSTRAP,SQL,PHP,DIRECTUS,HOSTING</li>
                          </div>

                          <div class="text-left text-base leading-relaxed text-gray-500 dark:text-gray-400">
                            Durasi Program :
                            <li>Program akan dijalankan selama 3x pertemuan/3 minggu dari tanggal 10 Mei 2022 hingga 27
                              Mei 2022</li>
                          </div>
                        </div>
                        <!-- Modal footer -->

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="mx-6 my-4 ">
              <div
                class="bg-gradient-to-t to-yellow-300 from-yellow-100 hover:border-2 red:300 hover:border-transparent max-w-sm rounded-lg  shadow-md  ">

                <a href="#">
                  <img class="rounded-t-lg bg-gradient-to-tr from-red-100  to-orange-300" src="./assets/img/landing/IC.png" />
                </a>
                <div class="p-5 bg-[#F7F2F0] h-56">
                  <a href="#">
                    <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-[#659093] font-inter">
                      Incareer</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-xs">
                    In career merupakan suatu project akademi untuk orang-orang berusia 25 tahun ke atas, yang ingin
                    berkarir dalam bidang IT.
                  </p>

                  <button
                    class="mdx:visible md:hidden md:mt-10 h-10 smx:text-xs smx:h-8 text-[10] mx-auto text-white bg-[#DDB07F] hover:bg-[#d4a36e] focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-[#DDB07F] dark:hover:bg-[#c4986a]"
                    type="button" data-modal-toggle="Incareer">
                    >
                  </button>
                  <button
                    class="  md:visible mdx:hidden md:mt-10 h-10  smx:text-xs smx:h-8 text-[10] mx-auto text-white bg-[#DDB07F] hover:bg-[#d4a36e] focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-[#DDB07F] dark:hover:bg-[#c4986a]"
                    type="button" data-modal-toggle="Incareer">
                    read more
                  </button>


                  <!-- Main modal -->
                  <div id="Incareer" tabindex="-1" aria-hidden="true"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                      <!-- Modal content -->
                      <div class="relative bg-white rounded-lg shadow dark:bg-[#f7f2f0]">
                        <!-- Modal header -->
                        <div class="flex justify-between items-start p-5 rounded-t border-b dark:border-gray-600">
                          <h3 class="text-xl
                                        font-semibold text-gray-900 lg:text-2xl dark:text-[#659093]">
                            InCareer
                          </h3>
                          <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="Incareer">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                              xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                            </svg>
                          </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-6 space-y-6 bg-scroll bg-contain overflow-auto  h-96 min-w-full">
                          <p class="text-justify text-base leading-relaxed text-gray-500 dark:text-gray-400">
                            In Career merupakan produk akademi yang berfokus dalam pengembangan karier di bidang IT dari
                            Lumintu Logic. Produk In Career dapat diakses oleh peserta usia 25 tahun ke atas yang ingin
                            mengembangkan karirnya di bidang IT maupun bagi mereka yang belum memiliki karir di bidang
                            IT dan ingin berpindah karir ke bidang IT. In Career didirikan untuk menjembatani kebutuhan
                            industri IT dengan kapasitas SDM yang memadai.
                          </p>
                          <p class="text-left text-base leading-relaxed text-gray-500 dark:text-gray-400">
                            Benefit Program In Career

                          <div class="text-left text-base mb-8 leading-relaxed text-gray-500 dark:text-gray-400">
                            <li>Bimbingan belajar secara intensif</li>
                            <li>Bimbingan bersama Mentor professional dengan sertifikat global</li>
                            <li>Kurikulum IT didesain dengan standar industri global</li>
                            <li>Modul bimbingan kelas In Career</li>
                            <li>Penilaian tugas akhir </li>
                            <li>Sertifikat</li>
                            <li>Perluas koneksi</li>
                          </div>
                          </p>
                          <div class="text-left text-base leading-relaxed text-gray-500 dark:text-gray-400">Target
                            Audiens
                            Karyawan / Non Karyawan berusia 25 tahun ke atas yang bekerja di bidang IT maupun non-IT
                          </div>
                          <div class="text-justify text-base leading-relaxed text-gray-500 dark:text-gray-400">Materi
                            Big Data : ( Sadev ) </div>
                          <div class="text-justify text-base leading-relaxed text-gray-500 dark:text-gray-400">Big Data
                            adalah Gabungan dari beberapa data yang sangat besar dan akan bertambah di setiap
                            waktunya.Big data digunakan untuk membantu kita dalam proses menganalisis data.Contoh
                            penerapan big data ada adalah dalam kegiatan berbisnis.Karena big data dapat memudahkan kita
                            dalam menganalisis pasar bisnis secara teratur dan terstruktur sehingga kita dapat
                            mengetahui perkembangan bisnis yang kita jalani.Adapun contoh lainnya adalah sebagai berikut
                            : </div>
                          <div class="text-justify leading-relaxed text-gray-500 dark:text-gray-400">1. Bidang
                            perbankan,karena dengan analisis menggunakan big data dapat mengakses informasi yang
                            dibutuhkan dan dapat menghilangkan sistem yang bersifat tumpang tindih</div>
                          <div class=" text-justify text-base leading-relaxed text-gray-500 dark:text-gray-400"> 2.
                            Bidang Retail,Karena para sebagai pembeli menginginkan peritel yang cerdas dan memahami
                            peluang yang ada.Sehingga dengan menggunakan big data dapat memungkinkan peritel memprediksi
                            tren hingga memungkinkan dapat memberikan rekomendasi produk terbaru.</div>

                          </p>
                          <div class="text-justify text-base mt-3 leading-relaxed text-gray-500 dark:text-gray-400">
                            Durasi :
                          </div>
                          <div class="text-justify text-base leading-relaxed text-gray-500 dark:text-gray-400">
                            Program akan berlangsung selama 3 minggu (2x pertemuan/minggu)
                          </div>
                        </div>
                        <!-- Modal footer -->

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="mx-6 my-4 ">
              <div
                class="bg-gradient-to-t to-yellow-300 from-yellow-100 hover:border-2 red:300 hover:border-transparent max-w-sm rounded-lg  shadow-md ">
                <a href="#">
                  <img class="rounded-t-lg bg-gradient-to-tr from-red-100  to-orange-300" src="./assets/img/landing/SMK.png" />
                </a>
                <div class="p-5 bg-[#F7F2F0] h-56">
                  <a href="#">
                    <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-[#659093] font-inter">SMK
                    </h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-xs">
                    For SMK Student adalah membangun sebuah project yang akan nantinya di gunakan oleh anak SMK yang
                    ingin mau belajar lewat online.
                  </p>
                  <button
                    class="mdx:visible md:hidden md:mt-10 h-10 smx:text-xs smx:h-8 text-[10] mx-auto text-white bg-[#DDB07F] hover:bg-[#d4a36e] focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-[#DDB07F] dark:hover:bg-[#c4986a]"
                    type="button" data-modal-toggle="SMK">
                    >
                  </button>
                  <button
                    class="  md:visible mdx:hidden md:mt-10 h-10  smx:text-xs smx:h-8 text-[10] mx-auto text-white bg-[#DDB07F] hover:bg-[#d4a36e] focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-[#DDB07F] dark:hover:bg-[#c4986a]"
                    type="button" data-modal-toggle="SMK">
                    read more
                  </button>


                  <!-- Main modal -->
                  <div id="SMK" tabindex="-1" aria-hidden="true"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                      <!-- Modal content -->
                      <div class="relative bg-white rounded-lg shadow dark:bg-[#f7f2f0]">
                        <!-- Modal header -->
                        <div class="flex justify-between items-start p-5 rounded-t border-b dark:border-gray-600">
                          <h3 class="text-xl
                  font-semibold text-gray-900 lg:text-2xl dark:text-[#659093]">
                            SMK
                          </h3>
                          <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="SMK">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                              xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                            </svg>
                          </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-6 space-y-6 bg-scroll bg-contain overflow-auto  h-96 min-w-full">
                          <p class="text-justify text-base leading-relaxed text-gray-500 dark:text-gray-400">
                            Dalam program ini, kami berfokus pada kurikulum pembelajaran programming bagi siswa SMK.
                            Sistem pembelajaran programming dirancang sesuai dengan usia tersebut dengan perencanaan
                            kurikulum dan metode yang efektif, namun masih di lingkup yang ramah bagi pelajar sekolah
                            menengah. Pengajar atau mentor pun terpilih berdasarkan kualifikasi tertentu sehingga
                            menunjang kegiatan belajar mengajar dalam program ini.

                          </p>
                          <p class="text-justify text-base leading-relaxed text-gray-500 dark:text-gray-400">
                            CodeCation hadir sebagai platform belajar dalam bidang TI, khususnya pemrograman untuk
                            teman-teman yang saat ini duduk dibangku SMK. Produk ini dirancang untuk menemani,
                            membersamai, dan memberikan pelayanan terbaik dan relevan dalam proses belajar TI di luar
                            pembelajaran formal menjadi tujuan dari CodeCation.

                          </p>
                          <div class="text-justify text-base leading-relaxed text-gray-500 dark:text-gray-400">
                            Menjadi salah satu dari empat program turunan Lumintu Logic house, CodeCation tidak
                            didominasi nama Lumintu. Namun, Lumintu terlibat secara langsung dalam rancangan dan
                            perkembangan produk CodeCation.
                          </div>
                          <div class="text-justify text-base leading-relaxed text-gray-500 dark:text-gray-400">
                            Benefit :
                            <li>Resolusi pembelajaran IT masa kini! Saat ini, IT telah membawa banyak perubahan. Banyak
                              hal, termasuk proses pembelajaran juga perlu diperbarui. Maka dari itu, CodeCation hadir
                              dengan rancangan yang disusun oleh para ahli.
                            </li>
                            <li> Pengajar profesional!CodeCation memilih secara objektif pengajar dengan kualifikasi
                              khusus dan pengalaman yang mumpuni untuk mendukung kegiatan belajar mengajar efektif.
                            </li>
                            <li>
                              Akses kelas harga terjangkau! Pelatihan IT lain sebagian besar membutuhkan biaya yang
                              tidak sedikit, sehingga tidak ramah bagi ukuran siswa SMK. Tapi tidak dengan CodeCation
                              yang menawarkan program kelas dengan harga yg terjangkau.
                            </li>
                            <li>
                              Alternatif pembelajaran non formal Belajar bisa berasal dari mana saja. CodeCation hadir
                              untuk memberikan pengalaman belajar yang berbeda dibanding sekolah formal biasa.
                            </li>
                            <li>
                              Kembangkan potensimu disini! CodeCation hadir sebagai wadah bagi para siswa SMK yang ingin
                              mengeksplor dirinya lebih jauh, terutama dalam bidang IT.
                            </li>
                            <li>
                              Belajar IT efektif dan sistematis! Dengan pengajar profesional dan kurikulum yang disusun
                              langsung oleh tim khusus, para siswa akan belajar banyak hal tanpa takut tertinggal.
                            </li>
                            <div class="text-justify text-base mt-3 leading-relaxed text-gray-500 dark:text-gray-400">
                              Materi secara umum :
                            </div>
                            <div class="text-justify text-base leading-relaxed text-gray-500 dark:text-gray-400">
                              Peserta program CodeCation akan belajar banyak tentang Website Development, yang merupakan
                              proses pembangunan dan pemeliharaan website. Website development dilakukan untuk membuat
                              website yang sesuai kebutuhan pengguna.
                            </div>
                            <div class="text-justify text-base mt-3 leading-relaxed text-gray-500 dark:text-gray-400">
                              Durasi :
                            </div>
                            <div class="text-justify text-base leading-relaxed text-gray-500 dark:text-gray-400">
                              Program belajar ini akan berlangsung selama tiga minggu dengan tiga pertemuan setiap
                              minggunya.
                            </div>
                          </div>
                        </div>
                        <!-- Modal footer -->

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="mx-6 my-4">
              <div
                class="relative bg-gradient-to-t to-yellow-300 from-yellow-100 hover:border-2 red:300 hover:border-transparent max-w-sm rounded-lg  shadow-md ">
                <a href="#">
                  <img class="rounded-t-lg bg-gradient-to-tr from-red-100  to-orange-300 " src="./assets/img/landing/K5.png" />
                </a>
                <div class="p-5 bg-[#F7F2F0] h-56 ">
                  <a href="#">
                    <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-[#659093] font-inter">K5
                    </h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-xs">
                    Curriculum k5 merupakan sebuah program yang diinisiasi lumintu learners. LMS K5 ini membuat Aplikasi
                    "LEARNING MANAGEMENT SYSTEM" untuk anak-anak usia 5-12 tahun.
                  </p>
                  <button
                    class="mdx:visible md:hidden md:mt-10 h-10 smx:text-xs smx:h-8 text-[10] mx-auto text-white bg-[#DDB07F] hover:bg-[#d4a36e] focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-[#DDB07F] dark:hover:bg-[#c4986a]"
                    type="button" data-modal-toggle="K5">
                    >
                  </button>
                  <button
                    class="  md:visible mdx:hidden md:mt-6 h-10  smx:text-xs smx:h-8 text-[10] mx-auto text-white bg-[#DDB07F] hover:bg-[#d4a36e] focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-[#DDB07F] dark:hover:bg-[#c4986a]"
                    type="button" data-modal-toggle="K5">
                    read more
                  </button>


                  <!-- Main modal -->
                  <div id="K5" tabindex="-1" aria-hidden="true"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                      <!-- Modal content -->
                      <div class="relative bg-white rounded-lg shadow dark:bg-[#f7f2f0]">
                        <!-- Modal header -->
                        <div class="flex justify-between items-start p-5 rounded-t border-b dark:border-gray-600">
                          <h3 class="text-xl
                                        font-semibold text-gray-900 lg:text-2xl dark:text-[#659093]">
                            K5
                          </h3>
                          <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="K5">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                              xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                            </svg>
                          </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-6 space-y-6 bg-scroll bg-contain overflow-auto  h-96 min-w-full">
                          <p class=" text-justify text-base leading-relaxed text-gray-500 dark:text-gray-400">
                            ProKidz Academy merupakan platform belajar coding untuk anak-anak dengan lingkungan dan
                            pembelajaran yang menyenangkan. Di sini, anak-anak akan mempelajari materi basic coding for
                            beginner yang dikemas secara menarik. Dengan metode pembelajaran secara tatap muka,
                            diharapkan peserta bisa menikmati proses belajar yang interaktif. ProKidz juga menerapkan
                            Learnings Management System (LMS) guna menunjang pembelajarannya seperti penugasan, test,
                            dan sebagainya.

                          </p>
                          <p class=" text-left text-base leading-relaxed text-gray-500 dark:text-gray-400">
                          </p>
                          <div class="text-justify text-base mt-3 leading-relaxed text-gray-500 dark:text-gray-400">
                            Target Audience:
                          </div>
                          <div class="text-justify text-base leading-relaxed text-gray-500 dark:text-gray-400">
                            Anak usia 6-10 tahun yang berdomisili di Yogyakarta.
                          </div>
                          <div class="text-justify text-base mt-3 leading-relaxed text-gray-500 dark:text-gray-400">
                            Materi :
                          </div>
                          <div class="text-justify text-base leading-relaxed text-gray-500 dark:text-gray-400">
                            Peserta mendapatkan materi dasar mengenai IoT dan mengaplikasikan ke dalam bentuk nyata.
                            Internet of thing (IoT) merupakan suatu konsep yang guna memperluas manfaat dari
                            konektivitas internet yang tersambung secara terus menerus.
                          </div>
                          <div class="text-justify text-base leading-relaxed text-gray-500 dark:text-gray-400">
                            Benefit :
                            <li>Instruktur atau mentor yang seru
                            </li>
                            <li>Materi pembelajaran yang menarik
                            </li>
                            <li>
                              Selama program berlangsung, peserta mendapatkan bimbingan intensif
                            </li>
                            <li>
                              Orang tua bisa memantau kegiatan anak
                            </li>
                            <li>
                              Menumbuhkan skill coding peserta
                            </li>
                            <li>
                              Meningkatkan daya saing peserta di era teknologi
                            </li>
                            <div class="text-justify text-base mt-3 leading-relaxed text-gray-500 dark:text-gray-400">
                              Durasi :
                            </div>
                            <div class="text-justify text-base leading-relaxed text-gray-500 dark:text-gray-400">
                              Program akan berlangsung selama 3 minggu (2x pertemuan/minggu)
                            </div>
                          </div>
                        </div>
                        <!-- Modal footer -->

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <section class="aboutus ">
            <div class="row mx-8 mb-12 ">
              <h1 class="text-3xl font-inter text-center mt-12 ">About <br>Lumintu Logic</h1>
              <div class="flex justify-center my-5">
                <svg class="animate-bounce" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="32"
                  height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                  <path fill="currentColor"
                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z" />
                </svg>

              </div>


              <div class=" mdx:w-full flex justify-center w-1/2 mx-auto mt-10 ">
                <a href="#"
                  class="  block p-6 max-w-sm bg-white rounded-lg  shadow-md hover:bg-gray-100 dark:bg-[#F7F2F0]  dark:hover:bg-gray-100">



                  <p class=" mdx:text-xs font-normal  text-gray-700 dark:text-gray-400">
                    <span class="text-[#659093]">Lumintu Logic</span> is an IT company that originates from Yogyakarta,
                    Indonesia. The word Lumintu itself means continuous service in Javanese. Founded in <span
                      class="text-[#659093]">2009</span>, Lumintu Logic developed its first products mostly for <span
                      class="text-[#659093]">desktop application</span> environment.
                  </p>

                </a>
              </div>
            </div>
          </section>
        </div>
      </div>


    </div>
    <section class="footer">
      <div class="row absolute w-full">
        <footer class="p-4 bg-[#DDB07F] shadow md:px-6 dark:bg-[#DDB07F]">
          <div class="sm:flex sm:items-center sm:justify-between">
            <a href="https://flowbite.com" class="flex items-center mb-4 sm:mb-0">
              <img src="./assets/img/landing/lumintu-text.png" class="mr-3 h-8" alt="Lumintu Logo" />


            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm text-gray-500 sm:mb-0 dark:text-gray-100">

              <li>
                <a href="#" class="mr-4 hover:underline md:mr-6">About</a>
              </li>
              <li>
                <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
              </li>
              <li>
                <a href="#" class="mr-4 hover:underline md:mr-6">Licensing</a>
              </li>
              <li>
                <a href="#" class="hover:underline">Contact</a>
              </li>
            </ul>
          </div>
          <hr class="my-6 border-gray-200 sm:mx-auto  lg:my-8" />
          <span class="block text-sm  sm:text-center text-white">© 2022
            <a href="https://flowbite.com" class="hover:underline">Lumintu’s Stack™</a>. All Rights Reserved.
          </span>
        </footer>
        <script src="https://unpkg.com/flowbite@1.4.2/dist/flowbite.js"></script>
</body>

</html>