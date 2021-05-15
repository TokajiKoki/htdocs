
$(".regular_3").slick({
  dots:false,
  infinite: true,
  autoplay:true, //自動スライド
  autoplaySpeed:3000, //スライドさせる間隔
  slidesToShow:3,
  cssEase:"cubic-bezier(0.9, 0.03, 0.4, 0.9)",　//CSS3アニメーションイージングを設定
  slidesToScroll: 1
});

/*====================================

// YouTubeの埋め込み
function onYouTubeIframeAPIReady() {
  ytPlayer = new YT.Player(
  'youtube', // 埋め込む場所の指定
  {
      videoId: 'FjHGZj2IjBk', // YouTubeのID
      playerVars: {
          height: '20%',
          width: '50%',
          loop: 1,//ループ設定
          playlist: 'FjHGZj2IjBk',//次に流すYouTubeのID　loopの設定が１の場合必須
          controls: 0,//コントローラー無し
          autoplay: 1,//オートプレイ
          showinfo: 0,//動画タイトル表示しない
          rel: 0,//関連動画の制御
          
          start: 30 //スタート秒数の指定
      },
      events: {
          'onReady': onPlayerReady
      }
  }
  );
  }
  //プレイ準備完了後
  function onPlayerReady(event) {
    event.target.playVideo();
    event.target.mute();
    }
========================================*/