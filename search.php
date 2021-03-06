<?php get_header(); ?>

<?php get_sidebar(); ?>

<article <?php post_class( 'article-content' ); ?>>
<!-- タイトル表示 -->
  <div class="archive-ttl">
    <div class="c-site-ttl-bg bg-menu">
     <h1 class="c-site-ttl">Search</h1>
    </div>
  </div>
  <div class="content-wrapper">
    <section>
      <h2 class="c-sub-head">小見出しが入ります</h2>
      <p>テキストが入ります。テキストが入ります。テキストが入ります。テキスト</p>
    </section>

    <?php query_posts($query_string.'&posts_per_page=5'); ?>
      <!-- ループ -->
    <?php if ( have_posts() ): while( have_posts() ): the_post(); ?>
      <!-- 投稿を出力 -->
      <?php get_template_part( 'card-loop' ); ?>
    <?php endwhile; else : ?>
      <p>投稿がありません</p>
    <?php endif; ?>
  </div>
  <!-- ナビゲーション -->
  <?php wp_pagenavi(); ?>
</article>



<?php get_footer(); ?>