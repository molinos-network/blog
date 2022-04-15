<a id="content"></a>
<article class="px-4 py-24 mx-auto max-w-7xl" itemid="#" itemscope itemtype="http://schema.org/BlogPosting">
  <div class="w-full mx-auto mb-12 text-center md:w-2/3">
    <strong>&larrlp;</strong> <a href="javascript:history.back()">volver</a><br/>
    <h1 class="mb-3 text-4xl font-bold text-gray-900 md:leading-tight md:text-5xl" itemprop="headline" title="<?php echo $post['TITLE'] ?>">
      <?php echo $post['TITLE'] ?>
    </h1>
    <p class="text-gray-800"><?php echo $post['DESCRIPTION'] ?></p>
    <p class="text-gray-700">
      Escrito por
      <span class="byline author vcard" itemprop="author" itemscope="itemscope" itemtype="http://schema.org/Person">
        <span class="font-bold hover:font-extrabold" itemprop="name"><?php echo $post['AUTHOR'] ?></span>
      </span>
      el <time itemprop="datePublished dateModified" datetime="2010-08-07 11:11:03-0400" pubdate><?php echo $post['TIME'] ?></time>
    </p>
    <img src="<?php echo $post['IMAGE'] ?>" class="object-cover w-full h-96 mb-5 bg-center rounded" alt="<?php echo $post['TITLE'] ?>" loading="lazy" />
  </div>

  <div class="mx-auto">
      <?php echo $post['POST'] ?>
  </div>
</article>

