<?php

// // cek status login user
// if($user->isLoggedIn()){ 

//     header("location: " .BASEURL); //Redirect ke index 

// } 

// // cek ada data yang dikirim atau nggak
// if( isset($_POST['kirim']) ) {
//     $email = $_POST['email'];
//     $password = $_POST['password'];

//     // proses login user
//     if ($user->login($email, $password)) {

//         header("location: " .BASEURL);
//     } else {

//         // Jika login gagal, ambil pesan error 

//         $error = $user->getLastError();
//     }
// }

?>

<!-- form nya -->
<div class="container">
    <div class="w-full px-4">
        <div class="max-w-xl mx-auto text-center mb-16">
            <h4 class="font-semibold text-lg text-primary mb-2">Login</h4>
            <p class="font-medium text-medium text-secondary md:text-lg">Already have account? <a href="<?= BASEURL; ?>/auth/login">Login now!</a></p>
        </div>
    </div>

    <form action="<?= BASEURL; ?>/auth/tambah/" method="post">


        <div class="w-full lg:w-2/3 lg:mx-auto">
            <div class="w-full px-4 mb-8">
                <label for="email" class="text-base text-primary font-bold">Email</label>
                <input type="email" name="email" id="email" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">
            </div>
            
            <div class="w-full px-4 mb-8">
                <label for="password" class="text-base text-primary font-bold">Password</label>
                <input type="password" name="password" id="message" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary"></input>
            </div>

            <div class="w-full px-4">
                <button class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full w-full hover:opacity-80 hover:shadow-lg tarnsition duration-300 ease-in-out" name="kirim">Kirim</button>
            </div>
        </div>
    </form>
</div>
