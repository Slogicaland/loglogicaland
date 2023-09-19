<?php get_header(); ?>
<main class="wrap">
  <section class="content-area content-thin">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article class="article-loop">
        <header>
          <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
          By: <?php the_author(); ?>
        </header>
        <?php the_excerpt(); ?>
      </article>
    <?php endwhile; else : ?>
    <div class="container-with-border">
    <div id="widgets" class="grid col-300 fit">
            <div id="search-2" class="widget-wrapper widget_search">	<form method="get" id="searchform" action="https://www.logicaland.co.jp/">
		<input type="text" class="field" name="s" id="s" placeholder="search here …">
		<input type="submit" class="submit" name="submit" id="searchsubmit" value="Go">
	</form>
</div>
       <div class="inner-content">
        <article>
          <h1><p>会社概要</p></h1>
          <p>設立　平成24年7月2日（登記）</p>
          <p>資本金 10,000,000円</p>
          <p>従業員　20名</p>
          <p>代表取締役社長　青木伸介</p>
          <p>所在地　〒395-0003 長野県飯田市上郷別府2689-1</p>
          <p>所在地　〒395-0003 長野県飯田市上郷別府2689-1</p>
          <h1>業務内容</h1>
          <h4>WEBシステム開発</h4>
          <p>WEBサイトのシステム化、自動化からECサイト構築等について各種CMSを用いた敏速な立ち上げからフルスクラッチまでご対応致します。 お気軽にご相談ください。</p>
          <h4>スマホアプリ</h4>
          <p>iPhone・Androidのネイティブ・アプリケーション開発承ります。スタンドアローンタイプからサーバーサイド連携までを包括したシステムとして開発対応することが可能です。</p>
          <h4>サービス事業</h4>
          <p>これまでに培ったオープン系の技術と経験を用いてロジカランドとしてWEBサービスをご提供する予定です。ECサイトを中心とした情報サイトを運営する計画です。</p>
        
        </article>
      </div>
      </div>
    <?php endif; ?>
  </section>
</main>
<?php get_footer(); ?>
<?php get_Access(); ?>
