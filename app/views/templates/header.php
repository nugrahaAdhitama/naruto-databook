<!doctype html>
<?php
session_start();
?>

<html lang="en" class="overflow-x-hidden scroll-smooth">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/output.css">

    <script src="https://cdn.tailwindcss.com"></script>
    
    <script>
      tailwind.config = {
        theme: {
        container: {
          center: true,
          padding: '16px',
        },
        extend: {
          colors: {
            primary: '#14b8a6',
            dark: '#0f172a',
            secondary: '#64748b',
            pinky : '#ec4899',
          },
          screens: {
            '2xl': '1320px',
          },
        },
      },
      plugins: [],
      }
    </script>

    <title><?= $data['judul']; ?></title>
  </head>
  <body>


<header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10 border-black border-b">
  <div class="container">
    <div class="flex items-center justify-between relative">
      <!-- elemen sebelah kiri -->
      <div class="px-4">
        <a href="<?= BASEURL; ?>" class="text-dark font-bold text-lg block py-6">Naruto Databook</a>
      </div>

      <!-- elemen sebalah kanan -->
      <div class="flex flex-wrap px-4">
        <!-- hamburger element -->
        <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden self-center">
          <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
          <span class="hamburger-line transition duration-300 ease-in-out"></span>
          <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
        </button>

        <!-- navbar -->
        <nav id="nav-menu" class="hidden absolute py-5 shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none transition duration-300 ease-in-out">
          <ul class="block lg:flex bg-dark lg:bg-white rounded-md">
            <li class="group">
              <a href="<?= BASEURL; ?>" class="text-base text-white py-2 mx-8 flex group-hover:text-orange-400 group-hover:scale-110 group-hover:font-semibold group-hover:underline transition duration-300 ease-in-out">Home</a>
            </li>
            <li class="group">
              <a href="#about" class="text-base text-white lg:text-dark py-2 mx-8 flex group-hover:text-orange-400 group-hover:scale-110 group-hover:font-semibold group-hover:underline transition duration-300 ease-in-out">About Us</a>
            </li>
            <li class="group">
              <a href="#arcs" class="text-base text-white lg:text-dark py-2 mx-8 flex group-hover:text-orange-400 group-hover:scale-110 group-hover:font-semibold group-hover:underline transition duration-300 ease-in-out">Arcs</a>
            </li>
            <li class="group">
              <a href="#villages" class="text-base text-white lg:text-dark py-2 mx-8 flex group-hover:text-orange-400 group-hover:scale-110 group-hover:font-semibold group-hover:underline transition duration-300 ease-in-out">Villages</a>
            </li>
            <li class="group">
              <a href="#akatsuki" class="text-base text-white lg:text-dark py-2 mx-8 flex group-hover:text-orange-400 group-hover:scale-110 group-hover:font-semibold group-hover:underline transition duration-300 ease-in-out">Akatsuki</a>
            </li>
            
            <!-- kalo ada session email maka tombol login/register ilang dan diganti email user -->
            <?php if( isset($_SESSION['email']) ) : ?>
              <li class="group">
              <p class="text-base text-white lg:text-dark py-2 mx-8 flex group-hover:text-orange-400 group-hover:scale-110 group-hover:font-semibold group-hover:underline transition duration-300 ease-in-out"><?= $_SESSION['email']; ?></p>
              </li>
              <?php else : ?>
                <!-- kalo ga ada session email maka tombol login/register tetep ada -->
                <li>
              <!-- Button trigger modal -->
              <a href="<?= BASEURL; ?>/auth"><button type="button" class="px-6 py-2.5 bg-dark text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-dark hover:shadow-lg focus:bg-dark focus:shadow-lg focus:outline-none focus:ring-0 active:bg-dark active:shadow-lg transition duration-150 ease-in-out"> Login / Register
              </button></a>
            </li>
            <?php endif; ?>
          </ul>
        </nav>
      </div>

    </div>
  </div>
</header>