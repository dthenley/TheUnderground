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
      title: "<h2>Childish Gambino</h2><p>Bonfire</p>",
      m4a: "http://www.jplayer.org/audio/ogg/Miaow-07-Bubble.ogg",
      oga: "http://www.jplayer.org/audio/ogg/Miaow-07-Bubble.ogg"
    });
   },
   swfPath: "/js",
   supplied: "m4a, oga"
  });
 });
  $(document).ready(function(){
  $("#jquery_jplayer_2").jPlayer({
   ready: function () {
    $(this).jPlayer("setMedia", {
      title: "<h2>Childish Gambino</h2><p>Bonfire</p>",
      m4a: "audio/Bonfire.mp3",
      oga: "http://www.jplayer.org/audio/ogg/Miaow-07-Bubble.ogg"
    });
   },
   swfPath: "/js",
   supplied: "m4a, oga"
  });
 });