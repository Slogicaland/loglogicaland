<?php get_header(); ?>
<main class="wrap">
  <section class="content-area content-thin">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="article-full">
          <div class="container">
            <div class="inner-container">
              <div class="content-right">
                <img src="http://localhost:10003/wp-content/uploads/2023/09/logicalAnd.png" alt="Your Image Alt Text">
              </div>
              <div class="content-left">
                <h1 class="featured-title">ロジカランド株式会社</h1>
                <h2 class="featured-subtitle">長野県飯田市のITシステム開発会社です</h2>
                <p>私たちは長野県飯田市を拠点に活動しているITシステム開発会社です・<br>主にUNIX/Linuxを基盤とするオープン系の技術を用いたWEBその他システムの構築を行なっております/
                </p>
                <br>
                <br>
                <div class="call-to-action">
                  <a href="index.php" class="blue button">>>お問い合わせ</a>
                </div>
              </div>
            </div>
          </div>
          <div class="title-box-container">
    <div class="title-box"> 
      <h3>WEBシステム</h3>
      WEBサイトのシステム化、自動化からECサイト構築等について各種CMSを用いた敏速な立ち上げからフルスクラッチまでご対応致します。
    お気軽にご相談ください。
    </div>
    <div class="title-box2"> 
      <h3>スマホアプリ</h3>
      iPhone・Androidのネイティブ・アプリケーション開発承ります。スタンドアローンタイプからサーバーサイド連携まで包括したシステムとして開発対応することが可能です。

    </div>
 
    <div class="title-box3"> 
      <h3>サービス事業</h3>
      
これまでに培ったオープン系の技術と経験を用いてロジカランドとしてWEBサービスをご提供する予定です。ECサイトを中心とした情報サイトを運営する計画です。
  </div>
</div>
<div class="title-box4"> 
      <h3>最近の投稿</h3>
     <li> <a href="https://www.logicaland.co.jp/archives/1083">BBM_20230804_JavaScriptエンジンについて</a></li>
<li> <a href="https://www.logicaland.co.jp/archives/1078">BBM_20230707_WAGBY紹介<a href="https://www.logicaland.co.jp/archives/1078">BBM_20230707_WAGBY紹介</a></li>
<li> <a href="https://www.logicaland.co.jp/archives/1074">BBM_20230602_プログラミング用フォントの紹介</a></li>
<li><a href="https://www.logicaland.co.jp/archives/1060">BBM_20230303 ゲームキャラクターモデル制作環境から学ぶテンプレートの大切さ</a></li>
<li><a href="https://www.logicaland.co.jp/archives/1055">BBM_20230203 「信頼」について</a></li>
<li><a href="https://www.logicaland.co.jp/archives/1050">BBM_20220113 IPv6とインターネットの輻輳</a></li>
<li><a href="https://www.logicaland.co.jp/archives/1045">BBM_20221202 ChatGPT</a></li>
<li><a href="https://www.logicaland.co.jp/archives/1042">BBM_20221202 物流DX ~倉庫作業(ピッキング)のAR導入事例 ~</a></li>
<li><a href="https://www.logicaland.co.jp/archives/1027">BBM_20221007 IEが廃止になって使えるようになったCSS</a></li>
<li><a href="https://www.logicaland.co.jp/archives/1022">BBM_20220902 Move to Earn</a></li>
  </div>
          </div>
          </div>


        </article>
      <?php endwhile;
    else : ?>
      <article>
      </article>
    <?php endif; ?>
  </section>
  <?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>