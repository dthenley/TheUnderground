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
      });
    
    $("#jquery_jplayer_2").jPlayer({
        ready: function () {
          $(this).jPlayer("setMedia", {
            title: "<h2>Childish Gambino</h2><p>L.E.S</p>",
            m4a: "audio/LES.mp3",
            oga: "http://www.jplayer.org/audio/ogg/Miaow-07-Bubble.ogg"
          });
        },
        swfPath: "/js",
        supplied: "m4a, oga"
      });
    });*/
  $("#myPlayButton").click( function() {
     $("#jquery_jplayer_1").jPlayer("play");
     

