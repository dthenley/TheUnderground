/*$(document).ready(function(){
      $("#jquery_jplayer_1").jPlayer({
        ready: function () {
          $(this).jPlayer("setMedia", {
            title: "<h2>Childish Gambino</h2><p>Bonfire</p>",
            m4a: "http://www.jplayer.org/audio/ogg/Miaow-07-Bubble.ogg",
            oga: "http://www.jplayer.org/audio/ogg/Miaow-07-Bubble.ogg"
          });
        },
        swfPath: "/js",
        supplied: "m4a, oga"
      });*/
 $(document).ready(function(){
  $("#jquery_jplayer_1").jPlayer({
   ready: function () {
    $(this).jPlayer("setMedia", {
      title: "<h2>Maroon 5</h2><p>Sunday Morning</p>",
      m4a: "audio/SundayMorning.mp3",
      //oga: "http://www.jplayer.org/audio/ogg/Miaow-07-Bubble.ogg"
    });
   },
   cssSelectorAncestor: "#jp_container_1",
   swfPath: "/js",
   supplied: "m4a, oga"
  });


  $("#jquery_jplayer_2").jPlayer({
   ready: function () {
    $(this).jPlayer("setMedia", {
      title: "<h2>Childish Gambino</h2><p>Bonfire</p>",
      m4a: "audio/Bonfire.mp3",
      //oga: "http://www.jplayer.org/audio/ogg/Miaow-07-Bubble.ogg"
    });
   },
   cssSelectorAncestor: "#jp_container_2",
   swfPath: "/js",
   supplied: "m4a, oga"
  });

  $("#jquery_jplayer_3").jPlayer({
   ready: function () {
    $(this).jPlayer("setMedia", {
      title: "<h2>Childish Gambino</h2><p>LES</p>",
      m4a: "audio/LES.mp3",
      //oga: "http://www.jplayer.org/audio/ogg/Miaow-07-Bubble.ogg"
    });
   },
   cssSelectorAncestor: "#jp_container_3",
   swfPath: "/js",
   supplied: "m4a, oga"
  });

  $("#jquery_jplayer_4").jPlayer({
   ready: function () {
    $(this).jPlayer("setMedia", {
      title: "<h2>Big Sam</h2><p>BBAS</p>",
      m4a: "audio/BBAS.mp3",
      //oga: "http://www.jplayer.org/audio/ogg/Miaow-07-Bubble.ogg"
    });
   },
   cssSelectorAncestor: "#jp_container_4",
   swfPath: "/js",
   supplied: "m4a, oga"
  });

  $("#jquery_jplayer_5").jPlayer({
   ready: function () {
    $(this).jPlayer("setMedia", {
      title: "<h2>Big Sam</h2><p>Origami</p>",
      m4a: "audio/Bonfire.mp3",
      //oga: "http://www.jplayer.org/audio/ogg/Miaow-07-Bubble.ogg"
    });
   },
   cssSelectorAncestor: "#jp_container_5",
   swfPath: "/js",
   supplied: "m4a, oga"
  });

/*
  // Icon Click Focus
  $('div.navbar-collapse').click(function(){
    $('input#search').focus();
  });
    $("input#search").live("keyup", function(e) {

    // Set Search String
    var search_string = $(this).val();

    // Do Search
    if(search_string !== ''){
        $.ajax({
            type: "POST",
            url: "search.php",
            data: { query: search_string },
            cache: false,
            success: function(html){
                $("ul#results").html(html);
            }
        });
    }return false;
  });
    // On Search Submit and Get Results
function search() {
    var query_value = $('input#search').val();
    $('b#search-string').html(query_value);
    if(query_value !== ''){
        $.ajax({
            type: "POST",
            url: "search.php",
            data: { query: query_value },
            cache: false,
            success: function(html){
                $("ul#results").html(html);
            }
        });
    }return false;
}
*/
$('#followButton').click(function(){
  window.open('https://www.facebook.com/dontewebdesign','_blank');
});
$('#shareButton').click(function(){
  alert("you've been shared!");
});
$('#favoriteButton').click(function(){
  window.open('favorite.php');
  return false;
});
$('#messageButton').click(function(){
  window.open('mailto: dontewebdesign@gmail.com','_blank');
});


 });
