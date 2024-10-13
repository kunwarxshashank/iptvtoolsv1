
<html>

<head>
  <title>Kaltura Stream [Spidermax]</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<link rel="shortcut icon" type="image/x-icon" href="">
<script src="https://qa-apache-php7.dev.kaltura.com/p/1091/sp/109100/embedPlaykitJs/uiconf_id/15215933/partner_id/1091"></script>


      <style>
     
#video-player {
    width: 100% !important;
    height: 100% !important;
 
}

option {
    background-color: black;
}
      </style>
</head>
<body>

    <div id="video-player" style="width:500px; height: 300px;position: absolute;"></div>
  <script>
    
    var _0x5ce117=_0x56e4;(function(_0x4c76f2,_0x344475){var _0x553392=_0x56e4,_0x517c27=_0x4c76f2();while(!![]){try{var _0x2455a4=parseInt(_0x553392(0xdb))/0x1+-parseInt(_0x553392(0xd7))/0x2+-parseInt(_0x553392(0xdc))/0x3+parseInt(_0x553392(0xd8))/0x4+parseInt(_0x553392(0xda))/0x5+-parseInt(_0x553392(0xdd))/0x6*(parseInt(_0x553392(0xd5))/0x7)+-parseInt(_0x553392(0xd9))/0x8;if(_0x2455a4===_0x344475)break;else _0x517c27['push'](_0x517c27['shift']());}catch(_0x2ce7e5){_0x517c27['push'](_0x517c27['shift']());}}}(_0x23ac,0x3bc32));function _0x23ac(){var _0x5b1366=['471952ZaSlWq','1322940rgTHyB','4224OSVqjJ','581oovKDI','location','742428MnOJPx','1203048mJhVst','634288pgeaDF','2109920gqiAOU'];_0x23ac=function(){return _0x5b1366;};return _0x23ac();}function _0x56e4(_0x415e7e,_0x7ec9d7){var _0x23ac22=_0x23ac();return _0x56e4=function(_0x56e4e4,_0x1f866b){_0x56e4e4=_0x56e4e4-0xd5;var _0x3a0c14=_0x23ac22[_0x56e4e4];return _0x3a0c14;},_0x56e4(_0x415e7e,_0x7ec9d7);}var urlParams=new URLSearchParams(window[_0x5ce117(0xd6)]['search']);
function _0x5e4f(){var _0x41b712=['max','1788670HvZdWI','77787cfqfhf','13811880nyeCUB','950555OhqSRd','6MePpPJ','1716428CPVAgZ','156FJUgoo','1359473gywOws','7849828AMKzGT','9OThDKY'];_0x5e4f=function(){return _0x41b712;};return _0x5e4f();}var _0x336706=_0x3fd4;(function(_0x42b84a,_0x57a115){var _0x42d1f3=_0x3fd4,_0x348b0d=_0x42b84a();while(!![]){try{var _0x4710f9=parseInt(_0x42d1f3(0xfb))/0x1+-parseInt(_0x42d1f3(0xf9))/0x2+parseInt(_0x42d1f3(0x100))/0x3*(parseInt(_0x42d1f3(0xfa))/0x4)+-parseInt(_0x42d1f3(0xf7))/0x5*(-parseInt(_0x42d1f3(0xf8))/0x6)+parseInt(_0x42d1f3(0xfc))/0x7+-parseInt(_0x42d1f3(0x101))/0x8+parseInt(_0x42d1f3(0xfd))/0x9*(-parseInt(_0x42d1f3(0xff))/0xa);if(_0x4710f9===_0x57a115)break;else _0x348b0d['push'](_0x348b0d['shift']());}catch(_0x54ad9b){_0x348b0d['push'](_0x348b0d['shift']());}}}(_0x5e4f,0xe047d));function _0x3fd4(_0x2ddfe2,_0x92a4ea){var _0x5e4f02=_0x5e4f();return _0x3fd4=function(_0x3fd446,_0x12295d){_0x3fd446=_0x3fd446-0xf7;var _0xec8021=_0x5e4f02[_0x3fd446];return _0xec8021;},_0x3fd4(_0x2ddfe2,_0x92a4ea);}var maxvalue=urlParams['get'](_0x336706(0xfe));
      




      try {
  const config = {
    targetId: "video-player",
    provider: {
      partnerId: "1091",
      uiConfId: "15215933"
    }
  };
  var kalturaPlayer = KalturaPlayer.setup(config);
  
  kalturaPlayer.setMedia({
    //use setMedia instead of loadMedia API
    session: {
      isAnonymous: true, //if ks is for anonymous or login
      partnerId: 1234, //you partner id
      uiConfId: 1234 //your uiconf
    },
    sources: {
      //you can pass also only hls or only dash and as long as platform support it it will work
      hls: [
        {
          url:
           "<?php echo $_SERVER['QUERY_STRING']; ?>",
          mimetype: "application/x-mpegURL"
        }
      ],
      progressive: [],
      id: "1_r0tzzzgp", //entry ID
      type: "Live", //either vod or live
      poster: "", // poster url
      dvr: false, //for live, if DVR or not
      vr: null, //
      metadata: {
        name: "Live test for AWS", //entry name
        description: ""
      }
    },
    plugins: {
      // secondaryUrl
    }
  });
} catch (e) {
  console.error(e.message);
}
  </script>
</body>
</html>