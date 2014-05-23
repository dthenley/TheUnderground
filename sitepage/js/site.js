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

 });
