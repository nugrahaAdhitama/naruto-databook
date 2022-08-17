<section id="home" class="pt-36 h-screen">
    <div class="container">
        <div class="flex flex-wrap">
            <!-- sebelah kiri -->
            <div class="w-full self-center px-4">
                <img src="<?= BASEURL; ?>/img/carousel/naruto-logo.png" alt="" class="mb-5">
                <h1 class="font-bold text-2xl lg:text-5xl">Fulfill the curiosity of people about data from naruto series</h1>
                <p class="font-medium text-xl lg:text-2xl">We work with independently to collect data about almost everything about naruto series.</p>
            </div>
        </div>
    </div>
</section>

<!-- about us -->
<section id="about" class="h-screen bg-dark">
    <div class="container bg-dark rounded-md">
        <div class="flex flex-wrap">
            <div class="w-full px-4 mb-10 lg:w-9/12">
                <p class="text-white capitalize text-sm font-bold mt-10">Who we are</p>
                <p class="text-white font-bold text-xl lg:text-2xl mb-5">We're always people-first</p>
                <p class="text-white font-medium text-base lg:text-xl">We help fans and not fans to know more about naruto series and satisfy their curiousity about this series. Alwayas people-first, all of the time.</p>
            </div>
        </div>
    </div>
</section>

<!-- arc -->
<section id="arcs" class="pt-36">
    <div class="container">
        <div class="flex flex-wrap">
            <!-- Arc 1 -->
            <?php foreach($data['arcs'] as $arc) : ?>
            <div class="w-full px-4 border-l-2 border-dark mb-5 mt-10">
                <h3 class="font-bold capitalize text-sm"><?= $arc['judul_arc']; ?></h3>
                <h2 class="font-bold text-xl lg:text-2xl mb-5"><?= $arc['episode']; ?></h2>
                <p class="font-medium text-base lg:text-xl"><?= $arc['deskripsi_arc']; ?></p>
            </div>
            <?php endforeach; ?>

            <?php foreach($data['arcs'] as $arc) : ?>
            <div class="border-4 border-dark">
                <img src="<?= BASEURL; ?>/img/carousel/<?= $arc['thumbnail_arc']; ?>" alt="" class="rotate-12">
            </div>
            <?php endforeach; ?>
</section>

<!-- villages -->
<div id="villages" class="pt-10 bg-dark mt-28 h-screen">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full px-4">
                <h2 class="font-bold text-white text-2xl mb-10">Villages</h2>
                <h3 class="font-medium text-white text-3xl border-b-[1px] border-white pb-3 mb-5">Iwagakure</h3>
                <h3 class="font-medium text-white text-3xl border-b-[1px] border-white pb-3 mb-5">Kirigakure</h3>
                <h3 class="font-medium text-white text-3xl border-b-[1px] border-white pb-3 mb-5">Konohagakure</h3>
                <h3 class="font-medium text-white text-3xl border-b-[1px] border-white pb-3 mb-5">Kumogakure</h3>
                <h3 class="font-medium text-white text-3xl border-b-[1px] border-white pb-3 mb-5">Sunagakure</h3>
            </div>
        </div>
    </div>
</div>