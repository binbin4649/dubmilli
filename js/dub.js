$(function(){
  // collapse のアイコン変える
  $('a[data-toggle="collapse"]').on('click', function(){
    if($(this).children('i').attr('class')=='fas fa-chevron-down'){
      $(this).children('i').addClass('fa-chevron-up').removeClass('fa-chevron-down');
    }else{
      $(this).children('i').addClass('fa-chevron-down').removeClass('fa-chevron-up');
    }
  });

  //上に戻るボタン
  var topBtn=$('#pageTop');
  topBtn.hide();
  //◇ボタンの表示設定
  $(window).scroll(function(){
    if($(this).scrollTop()>500){
      //---- 画面を80pxスクロールしたら、ボタンを表示する
      topBtn.fadeIn();
    }else{
      //---- 画面が80pxより上なら、ボタンを表示しない
      topBtn.fadeOut();
    }
  });
  // ◇ボタンをクリックしたら、スクロールして上に戻る
  topBtn.click(function(){
    $('body,html').animate({
    scrollTop: 0},700);
    return false;
  });

  //内部リンクをゆっくりスクロール
  // $('a[id="swing"]').click(function() {
  $('a[id="swing"]').on('click', function() {
    var speed = 700;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    $('body,html').animate({scrollTop:position}, speed, 'swing');
    return false;
 });
});
