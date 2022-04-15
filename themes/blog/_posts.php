    <!-- <h2><?php echo $posts['TOTAL'] ?></h2> -->

<section class="grid grid-cols-1 gap-0 bg-[#e2e1e1] bg-opacity-25 md:grid-cols-2 md:pt-2">
  <div class="mx-10 px-4 py-8 md:py-16 lg:px-20">
    <h1 class="mb-6 text-2xl font-bold leading-tight md:text-4xl lg:text-5xl">Bienvenido a <u>molinos.network</u></h1>
  </div>
  <div class="lg:mx-10 mt-10 px-4 pb-8 pt-12 lg:px-20">
    <form action="https://network.us14.list-manage.com/subscribe/post" method="POST" class="w-full mb-6">
    <input type="hidden" name="u" value="d9a12279757f0e02d610fe24f">
    <input type="hidden" name="id" value="beceb82084">
      <div class="w-full form-append flex flex-col sm:flex-row">
        <input name="MERGE0" class="text-gray-900 form-input form-input-lg h-10 rounded-md p-6" type="email" placeholder="Tu correo electrónico" required="true" />
        <button class="text-white bg-gray-900 hover:bg-gray-800 rounded-md mt-3 md:mt-0 ml-0 md:ml-3 p-2" type="submit">Suscríbeme</button>
      </div>
    </form>
    <p class="pr-0 text-base xl:pr-16">Suscríbete para obtener en tú correo actualizaciones de Urbit, molinos.network, y de la comunidad hispanohablante.</p>
  </div>
</section>

<section class="px-4 py-24 mx-auto max-w-7xl">
    <?php foreach ($posts['POSTS'] as $post){ ?>
        <div class="flex flex-row items-start justify-center px-4 lg:px-20 py-5 lg:py-8">
            <div>
                <img src="<?php echo $post['IMAGE'] ?>" class="object-cover w-full h-96 mb-5 bg-center rounded" alt="<?php echo $post['TITLE'] ?>" loading="lazy" />
                <h2 class="mb-2 text-lg font-semibold text-gray-900 flex justify-center"><a href="?post=<?php echo $post['LINK'] ?>"><?php echo $post['TITLE'] ?></a></h2>
                    <p class="mb-3 text-sm font-normal text-gray-500 flex justify-center">
                        <a class="font-medium text-gray-900 decoration-transparent"><?php echo $post['AUTHOR'] ?></a>
                        ⠀•⠀<?php echo $post['TIME'] ?>
                    </p>
            </div>
        </div>
    <?php } ?>
</section>


<!-- pagination -->
<?php include 'blocks/pagination.php' ?>
