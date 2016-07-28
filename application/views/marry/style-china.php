<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.2//EN" "http://www.openmobilealliance.org/tech/DTD/xhtml-mobile12.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta property="og:image" content="http://youvividdmz.youvivid.net/invite_cimage/b570359-95952B3B4481DD1A70616EE7F60CCE96AJTAR8569.758.jpg"/>
<meta property="og:image:type" content="image/jpeg">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="http://cn.youvivid.net/mobile_invite_view.asp?sn=AJTAR" rel="canonical" />
<meta name="HandheldFriendly" content="true">
<meta name="MobileOptimized" content="width">
<meta name="viewport" content="width=320, minimum-scale=1.0, maximum-scale=2.0, user-scalable=yes">
<title>&#23433;&#21733;&#19982;&#25991;&#22969;&#23130;&#23476;&#36992;&#32422;</title>
<meta name="description" content="2016&#24180;07&#26376;15&#26085; 12&#26102; &#20013;&#21335;&#28023; &#23433;&#21733;&amp;&#25991;&#22969;"/>
<meta property="og:url" content="http://cn.youvivid.net/mobile_invite.asp?sn=AJTAR&bForceMobile=1"/>
<meta property="og:title" content="&#23433;&#21733;&#19982;&#25991;&#22969;&#23130;&#23476;&#36992;&#32422;"/>
<meta property="og:description" content="2016&#24180;07&#26376;15&#26085; 12&#26102; &#20013;&#21335;&#28023; &#23433;&#21733;&amp;&#25991;&#22969;"/>
<meta property="og:site_name" content="youvivid.net"/>
<meta property="og:type" content="article"/>
<meta property="fb:app_id" content="113568098684585"/>
<meta property="fb:admins" content="632874169"/>
<script src="http://youvivid-assets.youvivid.net/js/jquery-latest.js"></script>
<script type="text/javascript" src="http://youvivid-assets.youvivid.net/js/jquery-ui-1.8.18.full.min.js"></script>
<script type="text/javascript" src="/js/jquery.jplayer.min.js"></script>
<script type="text/javascript">
    function RefreshImage(valImageId) {
        var objImage = document.getElementById(valImageId)
        if (objImage == undefined) {
            return;
        }
        var now = new Date();
        objImage.src = objImage.src.split('?')[0] + '?x=' + now.toUTCString();
    }
    var instanceClose;

    function addWinOnloadEvent(func) {
        var oldonload = window.onload;
        if (typeof window.onload != 'function') {
            window.onload = func;
        } else {
            window.onload = function() {
                if (oldonload) {
                    oldonload();
                }
                func();
            }
        }
    }

</script>

    <link rel="stylesheet" href="css/animate.min.css">

    <link href="./code.photoswipe-3.0.5/3.0.5/examples/styles_leo5.css" type="text/css" rel="stylesheet" />

    <link href="./code.photoswipe-3.0.5/3.0.5/photoswipe.css" type="text/css" rel="stylesheet" />

    <script type="text/javascript" src="./code.photoswipe-3.0.5/3.0.5/lib/klass.min.js"></script>

    <script type="text/javascript" src="./code.photoswipe-3.0.5/3.0.5/code.photoswipe.jquery-3.0.5.min.js"></script>





<script type="text/javascript">











var invite_styletype = 0;



function processButtonBackground(){



    if (invite_styletype==1){

        $("h3:visible>.button").each(function(index) {

                //$('#detail' + $(this).attr('id').split('button')[1]).attr('id', 'detail' + (index + 1) );

                $(this).attr('id', 'button' + (index + 1) );

        });



        $("h3:visible+div>.detail").each(function(index) {

                $(this).attr('id', 'detail' + (index + 1) )

        });



    }

}



function initProcessButtonBackground(){



    if (invite_styletype==1){

        $("h3:visible>.button").each(function(index) {

                $(this).attr('id', 'button' + (index + 1) )

        });

        $("h3:visible+div>.detail").each(function(index) {

                $(this).attr('id', 'detail' + (index + 1) )

        });

    } else {

        $("h3>.button").each(function(index) {

                $(this).attr('id', $(this).attr('name') )

        });

        $("h3+div>.detail").each(function(index) {

                $(this).attr('id', $(this).attr('name') )

        });

    }





}





var oldFunc;

var mapCallBackFunc = function () {};









var dragFlag6141459 = false;

var start6141459 = 0, end6141459 = 0;



function thisTouchStart6141459(e)

{

    dragFlag6141459 = true;

    start6141459 = e.touches[0].pageY;

}



function thisTouchEnd6141459()

{

    dragFlag6141459 = false;

}



function thisTouchMove6141459(e)

{

    if ( !dragFlag6141459 ) return;

    end6141459 = e.touches[0].pageY;

    window.scrollBy( 0,( start6141459 - end6141459 ) );

}









    var map6141459 = null;

    var marker6141459;

    var map6141459_zoom = 16;

    var map6141459_latcenter = 31.240629;

    var map6141459_lngcenter = 121.512625;

    var map6141459_latmarker = 31.241401;

    var map6141459_lngmarker = 121.512876;





      function initialize6141459() {

//alert('initialize6141459');

        if(typeof google === 'undefined'){

           // return

           return false;

        };



        var myOptions = {

            zoom: 16,

            center: new google.maps.LatLng(map6141459_latcenter, map6141459_lngcenter),

            mapTypeId: google.maps.MapTypeId.ROADMAP,

            mapTypeControl: false,

            streetViewControl: false,

            draggable: false,

            mapTypeControlOptions: {

                position: google.maps.ControlPosition.BOTTOM_RIGHT

            }

        }

        map6141459 = new google.maps.Map(document.getElementById("map_canvas6141459"),

                                      myOptions);



         var image = new google.maps.MarkerImage('images/mobile_invite/map_marker.png',

          // This marker is 20 pixels wide by 32 pixels tall.

          new google.maps.Size(34, 34),

          // The origin for this image is 0,0.

          new google.maps.Point(0,0),

          // The anchor for this image is the base of the flagpole at 0,32.

          new google.maps.Point(17, 30));



        //var image = 'marker_34x34.png';

        var myLatLng = new google.maps.LatLng(map6141459_latmarker, map6141459_lngmarker);

        marker6141459 = new google.maps.Marker({

            position: myLatLng,

            map: map6141459,

            icon: image

        });



      }









        var oldFunc6141459 = mapCallBackFunc;

        mapCallBackFunc = function () {

            initialize6141459();

            oldFunc6141459();

        };









    function setMapCenter6141459(lat,lng) {

        var pos = new google.maps.LatLng(lat,lng);

        map6141459.setCenter(pos);

        map6141459_latcenter = lat;

        map6141459_lngcenter = lng;



    }









    function setMapZoom6141459(zoom) {

        map6141459.setZoom(zoom);

        map6141459_zoom = zoom;



    }



    function setMarkerPos6141459(lat,lng) {

        var pos = new google.maps.LatLng(lat,lng);

        marker6141459.setPosition(pos);

        map6141459_latmarker = lat;

        map6141459_lngmarker = lng;



    }



















$(document).ready(function() {







    //$("#accordion").accordion("activate",0);

    //$("#accordion").accordion("activate","#accordion10");



    $("#accordion").bind('accordionchange', function(event, ui) {

         //   ui.newHeader // jQuery object, activated header

         //   ui.oldHeader // jQuery object, previous header

         //   ui.newContent // jQuery object, activated content

         //   ui.oldContent // jQuery object, previous content

        //console.log(ui);

       // console.log($("#accordion").accordion( "option", "active" ));

            if ($(ui.newHeader).offset() != null){

                $('html, body').animate({scrollTop: $(ui.newHeader).offset().top} );

            }

        bVideoPlaying = 0;

        //alert("audioPlayer.paused=" + audioPlayer.paused + ", bMute=" + bMute)

        if (bMute==0) {

            $("#jquery_jplayer_1").jPlayer("play");

        }



    });



/*

            $("#accordion").bind('accordionchange', function(event, ui) {

                if (ui.newContent.attr('id') == 'invite_detail_content6141456'  )

                {



                    var cw = $('.gallery').width() * 0.33333 ; // 0.222 = 0.3333*0.6666

                    alert("open: cw="+cw + ", gallery width=" + $('.gallery').width());

                    $('.gallery li a .thumb').css({

                        'height': cw + 'px'

                    });





                }

            });

*/



            $("#accordion").bind('accordionchange', function(event, ui) {

             // ui.newHeader // jQuery object, activated header

             // ui.oldHeader // jQuery object, previous header

             // ui.newContent // jQuery object, activated content

             // ui.oldContent // jQuery object, previous content

             //  alert($(ui.newContent).attr("id") + " was opened, " + $(ui.oldContent).attr("id") + " was closed");

             //   console.log(ui.newHeader.attr('id'));

                if (ui.newContent.attr('id') == 'invite_detail_content6141459' && !map6141459 && $("#invite_detail_mapimgurl6141459").val() == '' )

                {

                    //alert("initialize6141459");

                    initialize6141459();

                }





            });



            var mapCanvas = document.getElementById("map_canvas6141459");



            if (!mapCanvas.addEventListener) {

                mapCanvas.attachEvent("touchstart", thisTouchStart6141459, true);

                mapCanvas.attachEvent("touchend", thisTouchEnd6141459, true);

                mapCanvas.attachEvent("touchmove", thisTouchMove6141459, true);

            } else {

                mapCanvas.addEventListener("touchstart", thisTouchStart6141459, true);

                mapCanvas.addEventListener("touchend", thisTouchEnd6141459, true);

                mapCanvas.addEventListener("touchmove", thisTouchMove6141459, true);

            }



            $("#accordion").bind('accordionchange', function(event, ui) {

             // ui.newHeader // jQuery object, activated header

             // ui.oldHeader // jQuery object, previous header

             // ui.newContent // jQuery object, activated content

             // ui.oldContent // jQuery object, previous content

             //  alert($(ui.newContent).attr("id") + " was opened, " + $(ui.oldContent).attr("id") + " was closed");

             //   console.log(ui.newHeader.attr('id'));

                if (ui.newContent.attr('id') == 'invite_detail_content6141462' && bInitUploader6141462 == 0 )

                {

                    //alert("init uploader6141462");

                    uploader6141462.init();

                    bInitUploader6141462 = 1;

                }





            });











});







var bPlayVideo=1;



function clickObj(o){

//    alert('clicked');

//  bPlayVideo=0;

    var o = document.getElementById(o);



    if( document.all){

        o.click();

        //o.fireEvent("onclick");



    }else{



        var e = document.createEvent('MouseEvent');

        e.initEvent('click', false, false);

        o.dispatchEvent(e);

    }



  }





</script>







    <script type="text/javascript">



    function loadScript() {

      var script = document.createElement('script');

      script.type = 'text/javascript';

      script.src = 'http://maps.googleapis.com/maps/api/js?key=AIzaSyCDViZntwGvZcB_hoA2vg6G9YGE1Zy_jps&sensor=false&callback=mapCallBackFunc';

      document.body.appendChild(script);

      //console.log("load script");



      setSlideshow();

    }



    /////addWinOnloadEvent(loadScript);





    </script>





        <script type="text/javascript" >



            function parseYoutubeVID(url) {

                //urlBuf = url.toLowerCase();

                urlBuf = url;



                var youtubeVID = urlBuf.match(/(?:https?:\/{2})?(?:w{3}\.)?youtu(?:be)?\.(?:com|be)(?:\/watch\?v=|\/)([^\s&]+)/);

                if(youtubeVID != null) {

                   return youtubeVID[1];

                } else {

                    return "ERR";

                }



            }







        </script>









<script language='javascript'>

<!--



  function init(){





  }





    function replaceAll(oldStr,findStr,repStr) {



      var srchNdx = 0;



      var newStr = "";

      while (oldStr.indexOf(findStr,srchNdx) != -1)

      {

        newStr += oldStr.substring(srchNdx,oldStr.indexOf(findStr,srchNdx));

        newStr += repStr;

        srchNdx = (oldStr.indexOf(findStr,srchNdx) + findStr.length);

      }

      newStr += oldStr.substring(srchNdx,oldStr.length);



      return newStr;

    }



/*

function getGlobalMobile(no) {

    start = String(no.slice(0,1));

    if (start == "+" ) {

        return String(no.slice(1,no.length))

    } else {

        if (start == "0") {

            return  "852" + String(no.slice(1,no.length))

        } else {

            return "852" + no

        }

    }

}

*/



function getGlobalMobile(no) {

    var tmp_no, inter_no;

    var preset_cc = '852';

    start = String(no.slice(0,1));

    if (start == "+" ) {

        tmp_no = String(no.slice(1,no.length)); //remove leading +

        if ( String(tmp_no.slice(0,preset_cc.length)) == preset_cc && String(tmp_no.slice(preset_cc.length,preset_cc.length+1)) == '0' ) {

            inter_no = preset_cc + String(tmp_no.slice(preset_cc.length + 1, tmp_no.length));

        } else {

            inter_no = tmp_no;

        }

    } else {

        if (start == "0") {

            inter_no = preset_cc + String(no.slice(1,no.length))

        } else {

            if ( String(no.slice(0,preset_cc.length)) == preset_cc ) {

                if ( String(no.slice(preset_cc.length,preset_cc.length+1)) == '0'  ) {

                    inter_no = preset_cc + String(no.slice(preset_cc.length + 1, no.length));

                } else {

                    inter_no =  no;

                }

            } else {

                inter_no = preset_cc + no;

            }

        }

    }

    return inter_no;



}





    function checkMobileNumber( mo ) {







        if (String(mo.slice(0,1)) == "+" ) {

            if( isNaN(mo.slice(1,mo.length))) {

                return false;

            }

            if( mo.length < 5) {

                return false;

            }

        } else {

            if( isNaN(mo)) {

                return false;

            }

            if( mo.length < 6) {

                return false;

            }

        }

        return true

    }









  function isIns2(){





    if( document.rform.remindname.value.length == 0){





        alertify.alert('请输入姓名！', function (e) {

            if (e) {

                document.rform.remindname.focus();

            }

        });



        return false;



    }



    if( document.rform.remindphone.value.length == 0){



        alertify.alert('请输入手机号！', function (e) {

            if (e) {

                document.rform.remindphone.focus();

            }

        });



        return false;



    }



        mo = replaceAll( document.rform.remindphone.value, '-','');

        mo = replaceAll( mo, ' ','');

        mo = replaceAll( mo, '(','');

        mo = replaceAll( mo, ')','');







    if ( checkMobileNumber(mo) == false ) {



        alertify.alert('您的手机号码格式不正确:', function (e) {

            if (e) {

                document.rform.remindphone.focus();

            }

        });



        return false;



    } else {



        //confirm mobile country code



        if (String(mo.slice(0,1)) != "+" ) {



            alertify.confirm("系统自动判别以下手机号位于 [Hong Kong / 香港]<br>" + mo + "<br><br>如不是,请在手机号前加上 +国码, <br>例:中国(国码86)手机号:<br>13061711111<br>请填入:+8613061711111", function (e) {

                if (e) {

                    document.rform.remindphone_data.value = getGlobalMobile(mo)

                    document.rform.submit();

                    // user clicked "ok"

                } else {

                    // user clicked "cancel"

                    document.rform.remindphone.focus();

                    return false;

                }

            });





        } else {

            document.rform.remindphone_data.value = getGlobalMobile(mo)

            document.rform.submit();

        }



    }

    return false;



  }





-->

</script>







<script language='javascript'>

<!--





  function addRow(parent_node, maxid){







    //取得屬於要應用新增列的區塊

    var obj=document.getElementById( parent_node);

    //取得目前有多少欄位

    //var sIndex=obj.getElementsByTagName('div').length+1;

    var sIndex = maxid;



    //依照原表單格式,先建一個div

    var div=document.createElement('div');

    div.id = 's'+sIndex;



    //再建立文字欄位,並指定相關屬性

    var input=document.createElement('input');

    input.type='radio';

    input.name='t'+parent_node.replace('q', '');





    var txt=document.createElement('span');

    txt.id='o'+maxid;

    txt.innerHTML = ' 新增选项';







    div.appendChild(input);

    div.appendChild(txt);



    obj.appendChild(div);







    var obj2 = eval('document.iform.t'+ parent_node.replace('q',''));

    if (typeof(obj2.length) == 'undefined'){



        obj2.style.display = 'none';



    }else{



        for (var i=0; i<obj2.length; i++){



             obj2[i].style.display = '';

        }

    }



  }



  function delRow(q, t){



    d = document.getElementById(t);



    d.parentNode.removeChild(d);







    var obj2 = eval('document.iform.t'+ q.replace('q',''));

    if (typeof(obj2.length) == 'undefined'){



        obj2.style.display = 'none';



    }else{



        for (var i=0; i<obj2.length; i++){



             obj2[i].style.display = '';

        }

    }



  }





  function setQuestionTitle(qq, txt){



     document.getElementById('qq'+qq).innerHTML = txt;



  }



  function showCheckin( bcheckin){







    if (bcheckin == true){

        $("#qrcode_B0ADF0FA96FBE0AC261").css({"display": ""});

        document.iform.bcheckin.value = "1";

    }else{

        $("#qrcode_B0ADF0FA96FBE0AC261").css({"display": "none"});

        document.iform.bcheckin.value = "0";

    }









  }





  function setOptionTitle(o, txt){



    var range_array, inputstr, qid;

    var leftstr, rightstr, midstr, leftpos, rightpos;

    var txtlength;

    var option_title, option_title_left, option_title_right;



    option_title = txt;

    option_title_right = option_title;



    leftstr = '';

    rightstr = '';

    midstr = '';



    inputstr = '';



    qid = document.getElementById('o'+o).parentNode.parentNode.id.replace('q','');



    if ( option_title.split('{').length-1 > 1){

         txtlength = 20;

    }else{

         txtlength = 20;

    }



    if ( option_title.split('{').length-1 > 0){



       for (var n=0; n<option_title.split('{').length-1; n++){

      //if (leftpos >= 0 && rightpos > 0){



          //是,{1-10}人 {}



          option_title_left = option_title_right;

          leftstr = "";

          rightstr = "";

          midstr = "";

          leftpos = parseInt( option_title_left.indexOf('{'));

          rightpos = parseInt( option_title_left.indexOf('}'));



          leftstr = option_title_left.substring(0, leftpos);



          midstr = option_title_left.substring( leftpos+1, rightpos);



          inputstr += leftstr;



          if ( midstr == ''){



              inputstr += '&nbsp;<input type="text" id="n' + qid + '" name="n' + qid + '" value="" size="' + txtlength + '" onkeyup="setOptionValue( ' + qid + ', this.value, ' + replaceAll(option_title,"'", "\'") + ', ' + o + ')" onblur="setOptionValue( ' + qid + ', this.value, ' + replaceAll(option_title,"'", "\'") + ', ' + o + ')">&nbsp;';







          }else if ( midstr.toLowerCase().indexOf('br') > 0){





              inputstr += '&nbsp;<textarea style="display:inline-block;vertical-align:top;" name="n' + qid + '" cols="' + txtlength + '" rows="' + midstr.toLowerCase().split('br').length + '" onkeyup="setOptionValue( ' + qid + ', this.value, ' + replaceAll(option_title,"'", "\'") + ', ' + o + ')" onblur="setOptionValue( ' + qid + ', this.value, ' + replaceAll(option_title,"'", "\'") + ', ' + o + ')"></textarea>';



          }else{





                    //inputstr = '';

                    inputstr += '&nbsp;<select id="n' + qid + '" name="n' + qid + '" onchange="setOptionValue( ' + qid + ', this.value, ' + replaceAll(option_title,"'", "\'")  + ', ' + o + ')">';

                    inputstr += '<option value="">请选择</option>';

                    option_array = midstr.split('|');

                    //alert(option_array.length);

                    cc = 1;

                    for (i = 0; i<option_array.length; i++){







                        range_array = option_array[i].split('-');





                        if (range_array.length==2) {

                            for (j = parseInt( range_array[0]); j<= parseInt(range_array[1]); j++) {

                                inputstr += '<option value="' + j + '">' + j + '</option>';

                                cc = cc + 1;

                            }

                        } else {

                            inputstr += '<option value="' + option_array[i] + '">' + option_array[i] + '</option>';

                        }



                        cc = cc + 1;



                    }

                    inputstr += '</select>&nbsp;';









                }



        //alert(leftstr + inputstr + rightstr);

               // inputstr += leftstr;



        leftpos = parseInt( option_title_left.indexOf('{'));

        rightpos = parseInt( option_title_left.indexOf('}'));

        option_title_right = option_title_left.substring( rightpos+1, txt.length);





     }

     inputstr += option_title_right;



     document.getElementById('o'+o).innerHTML = inputstr;



    }else{



        document.getElementById('o'+o).innerHTML = ' ' + txt;

    }







  }



  function updateSelect(parent_node, str){







    var s = document.getElementById( parent_node.replace('q', 't'));



    var arr = new Array();

    arr = parent.document.getElementById( parent_node).getElementsByTagName('input');





    s.options.length = 0;



    s.options[0] = new Option('请选择', 0);

    for (var i=0; i<arr.length; i++){



        if (arr[i].value.Trim().length != 0){



            s.options[i+1] = new Option( arr[i].value, arr[i].value);



            if( arr[i].value == str) s.options[i+1].selected = true;



        }

    }



  }



  function showMust(parent_node, check){



    var iform = eval('document.iform.' + parent_node);







    if (check){



       iform.value = '1';



       document.getElementById( parent_node.replace('b', 'nn')).innerHTML = '(必填)';



    }else{



       iform.value = '0';



       document.getElementById( parent_node.replace('b', 'nn')).innerHTML = '';

    }





  }



  function showQuestion(parent_node, check){







    if (check){



       document.getElementById( parent_node.replace('q', 'ta')).style.display = 'block';





    }else{



       document.getElementById( parent_node.replace('q', 'ta')).style.display = 'none';



       document.getElementById( parent_node.replace('q', 'nn')).innerHTML = '';



    }



    var n = 0;



    //console.log($("#rsvptable tr[style*='display: block']"));







    $("#rsvptable tr[style*='block']").each( function(n){

      n++;



      $(this).find("span:eq(0)").html(n);

    });



  }





  function setOptionValue( id, txt, order, optionid){





    var obj, obj2, obj3;

    var val;



    obj = eval('document.iform.q' + id);



    //obj3 = eval('document.iform.n' + id + '_' + optionid);

    obj3 = document.getElementsByName('n'+ id + '_' + optionid);



    //if (typeof(obj3.length) == 'undefined'){

    if (obj3.length == 1){

        obj.value = txt;



    }else{



        val = '';



        for (var i=0; i<obj3.length; i++){



            val += '^' + obj3[i].value + '^';



        }



        val = replaceAll(val,'^^','|');

        val = replaceAll(val, '^', '');



        obj.value = val;



    }





    obj2 = eval('document.iform.t' + id);



    if (typeof(obj2.length) == 'undefined'){



        obj2.checked = true;



    }else{



        for (var i=0; i<obj2.length; i++){



            if (obj2[i].value == order){



                obj2[i].checked = true;

            }

        }

    }

  }





String.prototype.Trim = function() {



  return this.replace(/(^\s*)|(\s*$)/g, "");



}









var bVideoPlaying = 0;







var bMute = 1;







//var audioPlayer; //initialize in $(window).load(function()





function setMusic(mp3Url) {



    $("#jquery_jplayer_1").jPlayer("pause");



    if (mp3Url.length > 0 ){

        $("#jquery_jplayer_1").jPlayer("setMedia", {

            mp3:  mp3Url

          }).jPlayer("play");

        bMute = 0;

    } else {

        bMute = 1;

    }

}





-->

</script>



<style type="text/css">







body {

    /*font-family:Georgia, "Times New Roman", Times, serif;*/

    font-family:隶书2,微软雅黑,宋体,Microsoft JhengHei,Microsoft YaHei,arial;

    margin-left: 4px;

    margin-top: 4px;

    margin-right: 4px;

    font-size:90%;

}







.ui-widget{

    /*font-family:Georgia, "Times New Roman", Times, serif;*/

    font-family:隶书2,微软雅黑,宋体,Microsoft JhengHei,Microsoft YaHei,arial;

}



.play_video_button{

border: solid 1px #CCC; /* 邊框樣式 */

-moz-box-shadow: 1px 1px 5px #999; /* Firefox */

-webkit-box-shadow: 1px 1px 5px #999; /* Safari 和 Chrome */

box-shadow: 1px 1px 5px #999; /* Opera 10.5 + */

}



/*

.header_style {

    -webkit-box-shadow: rgba(0,0,0,.3) 1px 1px 2px;

    margin-bottom: 8px;

}

*/



/*no use now */

.title {

    -webkit-border-radius: 6px;

    -moz-border-radius: 6px;

    -webkit-box-shadow: rgba(0,0,0,.3) 1px 1px 2px;

    border: 0px solid #E0E0E0;

    background-color: #ff87c3; /* Changes the homepage menu background color */

    text-align: center;

    padding: 3px 0 3px 0;

    margin-bottom: 5px;

    font-size: 120%; color:#999;







    background: #ff87c3; /* Old browsers */

    background: -moz-linear-gradient(top,  #fcecfc 0%, #fba6e1 50%, #fd89d7 51%, #ff87c3 100%); /* FF3.6+ */

    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#fcecfc), color-stop(50%,#fba6e1), color-stop(51%,#fd89d7), color-stop(100%,#ff87c3)); /* Chrome,Safari4+ */

    background: -webkit-linear-gradient(top,  #fcecfc 0%,#fba6e1 50%,#fd89d7 51%,#ff87c3 100%); /* Chrome10+,Safari5.1+ */

    background: -o-linear-gradient(top,  #fcecfc 0%,#fba6e1 50%,#fd89d7 51%,#ff87c3 100%); /* Opera 11.10+ */

    background: -ms-linear-gradient(top,  #fcecfc 0%,#fba6e1 50%,#fd89d7 51%,#ff87c3 100%); /* IE10+ */

    background: linear-gradient(top,  #fcecfc 0%,#fba6e1 50%,#fd89d7 51%,#ff87c3 100%); /* W3C */

    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fcecfc', endColorstr='#ff87c3',GradientType=0 );  /*IE6-9 */







}



/*jquery UI css overwrite*/

.ui-accordion-content, .detail {

/*

    filter: alpha(opacity=10);

    opacity:0.4;

*/

/*  background-image:url(images/index_bg_02.jpg);

    background-repeat: repeat;

    background-position: center center;

*/

    font-family: "微軟正黑體", "微软雅黑", "宋体", "Microsoft JhengHei", "Microsoft YaHei", verdana, tahoma, arial, serif;

}





input { height: 20px; font-size:14px; }

textarea {  font-size:14px; }





</style>







<link class="customcss" href="http://youvivid-assets.youvivid.net/css/dianna_royalred/custom4.css" rel="stylesheet" type="text/css" />

<link class="themecss" href="http://youvivid-assets.youvivid.net/css/common2.css" rel="stylesheet" type="text/css" />



<link class="fontcss" href="http://121.40.42.185:443/Fonts/getcss?family=%E9%9A%B6%E4%B9%A62&font=%E9%9A%B6%E4%B9%A6&text=%E6%9C%AC%E6%9C%8D%E5%8A%A1%E7%94%B1YouVivid%2Enet%E6%8F%90%E4%BE%9B%28%E5%85%8D%E8%B4%B9%E4%BD%93%E9%AA%8C%E7%89%88%E9%99%90%E5%88%B6%E6%9C%80%E5%A4%9A5%E4%B8%AA%E6%89%8B%E6%9C%BA%E6%89%93%E5%BC%80%29%E5%AE%89%E5%93%A5%E4%B8%8E%E6%96%87%E5%A6%B9%0D%0A%E5%A9%9A%E5%AE%B4%E9%82%80%E7%BA%A62016%E5%B9%B407%E6%9C%8815%E6%97%A5%E7%88%B1+%E7%9A%84+%E9%82%80+%E7%BA%A6%E5%A9%9A+%E7%BA%B1+%E7%9B%B8+%E5%86%8C%EF%BC%AD+%EF%BC%B6+%E8%A7%86+%E9%A2%91%E5%A9%9A+%E5%AE%B4+%E5%9B%9E+%E5%87%BD%E5%A9%9A+%E5%AE%B4+%E5%9C%B0+%E5%9B%BE%E5%96%9C+%E5%AE%B4+%E6%8F%90+%E9%86%92%E5%96%9C+%E8%AE%AF+%E5%88%86+%E4%BA%AB%E4%B8%8A+%E4%BC%A0+%E7%9B%B8+%E5%86%8C" rel="stylesheet" type="text/css" />



<style>

  * { -webkit-tap-highlight-color: rgba(0, 0, 0, 0); }

</style>



<script src="js/alertify.min.js"></script>



<script type="text/javascript">

// custom OK and Cancel label

// default: OK, Cancel

    alertify.set({ labels: {

        ok     : "确定",

        cancel : "取消"

    }

    });



    alertify.set({ buttonReverse: true});



</script>



<script type="text/javascript" src="plu218/js/math.uuid.js"></script>

<script type="text/javascript" src="plu218/js/plupload.full.min.js"></script>

<!-- activate language -->

<script type="text/javascript" src="plu218/js/i18n/zh_CN.js"></script>

<script>



    // run the currently selected effect

    function runEffect(controlID, page) {

      // get effect type from

      var selectedEffect = "blind";



      // most effect types need no options passed by default

      var options = {};





        //options = { percent: 0 };



        //options = { to: { width: 100%, height: auto } };





      // run the effect

      $( "#page-" + controlID + "-" +page ).toggle( selectedEffect, options, 500 );

      $( "#more-"+ controlID + "-" +(page-1) ).toggle( "puff", options, 500 );

    };



</script>



<link rel="stylesheet" href="css/alertify.css" />





</head>

<body >











<style>







  #Loading{

      position:fixed;

      top:0;

      left:0;



      width:100%;

      height:100%;



      background:#CCCCCC;

      margin:0px 0px 0px 0px;

      z-index:1001;

      -webkit-animation-duration: 2s;

      -moz-animation-duration: 2s;

      -ms-animation-duration: 2s;

      animation-duration: 2s;

  }

  #loading_bg {





      width:100%;

      height:100%;



   background: center center url(css/cover2/pattern2.jpg) repeat;





      margin: auto;

      z-index:300;

    -webkit-animation-duration: 1.6s;

    -moz-animation-duration: 1.6s;

    -ms-animation-duration: 1.6s;

    animation-duration: 1.6s;

  }







  #loading_bg2{

      width:100%;

      height:100%;





   background: center center url(css/cover2/pattern2.jpg) repeat;







      margin:0px 0px 0px 0px;

    -webkit-animation-duration: 1.6s;

    -moz-animation-duration: 1.6s;

    -ms-animation-duration: 1.6s;

    animation-duration: 1.6s;

     z-index:300;

  }









 #loading_circle_outer {

      position:absolute;

      width:100%;

      /*height:150px; */

    top:0; bottom:0; left:0; right:0;



        text-align: center;



     font-family:microsoft jhenghei,microsoft yahei,arial;

    display: table;

    height:100%;

     z-index:300;

 }





 #loading_circle_13 {



    position:relative;

    z-index: 1;

    width:320px;

    height:100%;

    margin: auto;



    vertical-align:middle;

        text-align: center;

 }





 #loading_circle {

    z-index: 800;

    position:relative;

    display: table-cell;

    vertical-align:middle;

        text-align: center;

 }







 #loading_circle_1 {

    position:relative;

    background: center center url(css/cover2/p1.jpg) no-repeat;

    background-size: 42px 1200px;

    height:1200px;

    width:26px;

    z-index: -1;

    top:0px;

    left: 100px; /***25%***/

    -webkit-animation-duration: 1.2s;

    -moz-animation-duration: 1.2s;

    -ms-animation-duration: 1.2s;

    animation-duration: 1.2s;





 }



 #loading_circle_2 {

    position:absolute;

    background: center center url(css/cover2/p2.jpg) repeat-x;

    background-size: 640px 42px;

    height:26px;

    width:100%;

    z-index: 100;

    top: 300px; /***60%***/

    -webkit-animation-duration: 1.2s;

    -moz-animation-duration: 1.2s;

    -ms-animation-duration: 1.2s;

    animation-duration: 1.2s;



 }



 #loading_circle_3 {

    position:absolute;

    background: center center url(css/cover2/p3.jpg) no-repeat;

    background-size: 7px 1200px;

    height:1200px;

    width:5px;



    z-index: -1;

    top:0px;

    /***left: calc(100%/4 - 12px);***/

    left: 80px;

    -webkit-animation-duration: 1.2s;

    -moz-animation-duration: 1.2s;

    -ms-animation-duration: 1.2s;

    animation-duration: 1.2s;

 }



 #loading_circle_4 {



    position:absolute;

    background: center center url(css/cover2/p4.jpg) repeat-x;

    background-size: 640px 7px;

    height:5px;

    width:100%;

    z-index: 100;

    /***top: calc(60% + 34px);***/

    top: 340px;



    -webkit-animation-duration: 1.2s;

    -moz-animation-duration: 1.2s;

    -ms-animation-duration: 1.2s;

    animation-duration: 1.2s;

 }





 #loading_circle_5 {



     position:absolute;



     text-align:left;

     vertical-align: bottom;

     color:#FFF;

     font-size:32px;

     font-weight:bold;







     /***

     padding-top: 60px;

     padding-left: 60px;

     ***/

    /***

    bottom:calc(60% - 26px - 35px);

    left: calc(25% + 26px + 10px);

    ***/





     height: 240px;

    width:180px;

    top: 50px;

    left: 130px;



    -webkit-animation-duration: 0.8s;

    -moz-animation-duration: 0.8s;

    -ms-animation-duration: 0.8s;

    animation-duration: 0.8s;

 }



#loading_circle_5 span{



    position:absolute;



    bottom:0;

    left:0;

}



 #loading_circle_67 {

     position:absolute;

     text-align:left;

     color:#F8F3F4;

     font-size:22px;



     /***

     font-weight:bold;

     padding-top: 60px;

     padding-left: 60px;

     ***/

    /***

    top:calc(60% + 26px + 30px);

    left: calc(25% + 26px + 10px);

    ***/

    top: 350px;

    left: 130px;



    -webkit-animation-duration: 1.2s;

    -moz-animation-duration: 1.2s;

    -ms-animation-duration: 1.2s;

    animation-duration: 1.2s;

 }



 #loading_circle_6 {

     position:relative;

     text-align:left;

     color:#F8F3F4;

     font-size:20px;



     /***

     font-weight:bold;

     padding-top: 60px;

     padding-left: 60px;



    top:calc(60% + 26px + 30px);

    left: calc(25% + 26px + 10px);

 ***/



    -webkit-animation-duration: 1.2s;

    -moz-animation-duration: 1.2s;

    -ms-animation-duration: 1.2s;

    animation-duration: 1.2s;

 }







 #loading_circle_7 {

     position:relative;

     text-align:left;

     color:#FFFFEF;

     font-size:16px;



    -webkit-animation-duration: 1.6s;

    -moz-animation-duration: 1.6s;

    -ms-animation-duration: 1.6s;

    animation-duration: 1.6s;

 }









 .hide-div {

     /*display:none;*/

     visibility:hidden;

 }

 .hide-div-display {

     display:none;

 }

</style>



<script language='javascript'>

<!--

$(document).ready(function() {

/*

    if (window.self != window.top) {

        $(document.body).addClass("in-iframe");

    }

*/

      $("#jquery_jplayer_1").jPlayer({

        ready: function() {

          $(this).jPlayer("setMedia", {

            mp3: ""

          }).jPlayer("play");

          var click = document.ontouchend === undefined ? 'click' : 'touchend';

          var kickoff = function () {

            $("#jquery_jplayer_1").jPlayer("play");

            document.documentElement.removeEventListener(click, kickoff, true);

          };

          document.documentElement.addEventListener(click, kickoff, true);

        },

        swfPath: "/js",

        loop: false

      });







    if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){

        $('#Loading').on('touchstart', function (e) {

            //stopLoading();

            if (bWinOnLoadFired==0){

                winOnloadFunc();

            }

        });

    } else {

        $('#Loading').on('click', function (e) {

            //stopLoading();

            if (bWinOnLoadFired==0){

                winOnloadFunc();

            }

        });



    }



    $('#loading_bg').removeClass('hide-div');

    $('#loading_bg').addClass('animated fadeIn');



    $('#loading_bg2').removeClass('hide-div');

    $('#loading_bg2').addClass('animated fadeIn');



    $('#loading_bg2').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',function(){



         $('#loading_circle_13').removeClass('hide-div');

         $('#loading_circle_13').addClass('animated fadeIn');



         $('#loading_circle_1').removeClass('hide-div');

         $('#loading_circle_1').addClass('animated slideInDown');

         $('#loading_circle_2').removeClass('hide-div');

         $('#loading_circle_2').addClass('animated slideInRight');

    });





    $('#loading_circle_2').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',function(){

         $('#loading_circle_3').removeClass('hide-div');

         $('#loading_circle_3').addClass('animated slideInDown');

         $('#loading_circle_4').removeClass('hide-div');

         $('#loading_circle_4').addClass('animated slideInRight');





    });



    $('#loading_circle_3').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',function(){





         $('#loading_circle_5').removeClass('hide-div');

         $('#loading_circle_5').addClass('animated slideInRight');



         $('#loading_circle_67').removeClass('hide-div');

         $('#loading_circle_67').addClass('animated fadeIn');





         $('#loading_circle_6').removeClass('hide-div');

         $('#loading_circle_6').addClass('animated slideInRight');

         $('#loading_circle_7').removeClass('hide-div');

         $('#loading_circle_7').addClass('animated slideInRight');

    });



    $('#loading_circle_7').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',function(){

        setTimeout(function() {

            //alert("bWinOnLoadFired");

            if (bWinOnLoadFired==0){

                winOnloadFunc();

            }

      // Do something after 20 seconds

}, 3000);



    });





});



    function stopLoading(){

/*

        $("#loading_circle_1").removeClass('animated slideInDown');

        $("#loading_circle_2").removeClass('animated slideInRight');



        $("#loading_circle_3").removeClass('animated slideInDown');

        $("#loading_circle_4").removeClass('animated slideInRight');

        $("#loading_circle_5").removeClass('animated slideInRight');

        $("#loading_circle_6").removeClass('animated slideInRight');

        $("#loading_circle_7").removeClass('animated slideInRight');

        $("#loading_circle_67").removeClass('animated fadeIn');

        $("#loading_circle_13").removeClass('animated fadeIn');





        $('#loading_circle_1').addClass('hide-div');

        $('#loading_circle_2').addClass('hide-div');



        $('#loading_circle_3').addClass('hide-div');

        $('#loading_circle_4').addClass('hide-div');

        $('#loading_circle_5').addClass('hide-div');

        $('#loading_circle_6').addClass('hide-div');

        $('#loading_circle_7').addClass('hide-div');

        $('#loading_circle_67').addClass('hide-div');

        $('#loading_circle_13').addClass('hide-div');

        $('#loading_circle_outer').addClass('hide-div');

*/





        if($.browser.msie && parseInt($.browser.version, 10) <= 9) {

            $("#Loading").fadeOut();

        } else {



            $("#Loading").addClass('animated fadeOut');



            $('#Loading').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',function(){

                 $('#Loading').addClass('hide-div');

                 $('#Loading').addClass('hide-div-display');

            });

        }





        //audioPlayer = $("#xaudio")[0];









    }





    function winOnloadFunc () {

        bWinOnLoadFired=1;

        stopLoading();

        loadScript();

    }





    var bWinOnLoadFired=0;



    $(window).load(function() {

        if($.browser.msie && parseInt($.browser.version, 10) <= 9) {

            if (bWinOnLoadFired==0){

                winOnloadFunc();

            }

        }



    });



    $(function() {

        setTimeout(function() {

            //alert("bWinOnLoadFired");

            if (bWinOnLoadFired==0){

                winOnloadFunc();

            }

      // Do something after 20 seconds

}, 30000);

    });







-->

</script>





<!-- <div class="ui-accordion-header ui-helper-reset ui-state-default ui-corner-all" > -->

<div id="Loading">

    <div id="loading_bg" class="hide-div">

        <div id="loading_bg2" class="hide-div">

        </div>

    </div>

    <div id = "loading_circle_outer">

            <div id = "loading_circle_13" class="hide-div">

                <div id = "loading_circle_1" class="hide-div" ></div>

                <div id = "loading_circle_3" class="hide-div" ></div>

                <div id = "loading_circle_5" class="hide-div"><span>敬邀参加</span></div>

                <div id = "loading_circle_67" class="hide-div">

                  <div id = "loading_circle_6" class="hide-div" >安哥与文妹婚宴邀约</div>

                  <div id = "loading_circle_7" class="hide-div" >2016年07月15日</div>

                </div>

            </div>

            <div id = "loading_circle_2" class="hide-div" ></div>

            <div id = "loading_circle_4" class="hide-div" ></div>

    </div>

</div>















<div id="MainBody">

<div id="coverpage"></div>

<div id="MainContent">



<div id="outter" >

    <div class="outter-main-tr"><div class="outter-main-tl"><div class="outter-main-tm"></div></div></div>

    <div class="outter-main-mr"><div class="outter-main-ml">



        <div class="ui-widget-header ui-corner-all"  >

            <div id="inner">

                <div class="inner-main-tr"><div class="inner-main-tl"><div class="inner-main-tm">

                    <div id="main-title">

                        <div class="main-title-tr"><div class="main-title-tl"><div class="main-title-tm">

                        </div></div></div>

                        <div class="main-title-mr"><div class="main-title-ml">



                            <div class="main-title-mm">

                                <div id="maintitlehtml" ><span style="text-decoration: none; font-style: normal; font-size: 24px; font-weight: normal;">安哥与文妹<br>婚宴邀约</span></div>

                                <div id="maintitle_decoration1"></div>

                            </div>



                        </div>

                        </div>

                        <div class="main-title-br"><div class="main-title-bl"><div class="main-title-bm">

                        </div></div></div>

                    </div>

                </div></div></div>

                <div class="inner-main-mr">

                    <div id="img_decoration1"></div>

                    <div id="img_decoration2"></div>

                    <div id="img_decoration4"></div>

                    <div class="inner-main-ml">

                        <div id="frame1_1"><div id="frame1_2"><div id="frame1_3"></div></div></div>

                        <div id="frame2_1"><div id="frame2_2"><div id="frame2_3"></div></div></div>

                        <div id="frame3_1"><div id="frame3_2"><div id="frame3_3"></div></div></div>

                        <div class="inner-main-mm">

<!-- 大圖 -->

                            <div id="main_image_container" >



                                <div class="invite_webimg_album" id="invite_webimg_album_mainimage" style=" display:none; background:url(http://youvividcnupload1.oss.aliyuncs.com/images/2013/7/f1302065111bb40c28cc.jpg) no-repeat center center; background-size: cover; min-width:100%; min-height:100%" ></div>



                                <img  id="invite_webimg" src="http://youvividcnupload1.oss.aliyuncs.com/images/2013/7/f1302065111bb40c28cc.jpg" width="100%" alt="Mobile Wedding Invitations">

                            </div>



                            <div id="img_videobutton_placeholder" style="position:relative;">

                                <div id="img_videobutton" style="display:none;" ></div>

                            </div>



<style type="text/css">

#main_image_container{position: relative;overflow: hidden; width:100%; height:100% }

.invite_webimg_album{float: left;position: absolute;top:0;left: 0; transform: scale(1.2,1.2); -webkit-transform: scale(1.2,1.2);}

/*.invite_webimg_album:last-child{display: block; -webkit-transform: scale(1.2,1.2);}*/



.auto{animation: imgScale 4s ease-out; -webkit-animation: imgScale 4s ease-out;}



@keyframes imgScale{

    0%{transform:scale(1,1);}

100%{transform:scale(1.2,1.2);}}





@-webkit-keyframes imgScale{

    0%{-webkit-transform:scale(1,1);}

100%{-webkit-transform:scale(1.2,1.2);}}

</style>



<script type="text/javascript">



$(function() {

/*

    $('#invite_webimg').on('load', function () {

        $("#main_image_container").width($(this).width()).height($(this).height());

        //alert('#invite_webimg onload, w=' + $(this).width() + ', h=' + $(this).height() );

    }).each(function() {

        if(this.complete) $(this).load();

    });





*/



});





var now_img=0,img_count=0;

var slideshowTimer



function setSlideshow() {



    //alert('#invite_webimg , w=' + $('#invite_webimg').width() + ', h=' + $('#invite_webimg').height() );



    //$("#main_image_container").width($('#invite_webimg').width()).height($('#invite_webimg').height());

    if (slideshowTimer) {

        clearInterval(slideshowTimer);

    }

    img_count = $('.invite_webimg_album').length;

    if(img_count>1){



        now_img = img_count-1;

        slideshowTimer = setInterval(function(){

                if(now_img == 0){

                    next_img = img_count-1;

                }else{

                    next_img  = now_img -1;

                }

              $(".invite_webimg_album").eq(next_img).fadeIn(1000).addClass('auto');

              $(".invite_webimg_album").eq(now_img).fadeOut(2000).removeClass('auto');



              now_img = next_img;

        },5000);

    } else {





    }



}





function addSlideshowItem(fileurl){





    $( "#main_image_container" ).prepend( "<div class='invite_webimg_album' style='background:url(" + fileurl + ") no-repeat center center; background-size: cover; min-width:100%; min-height:100%' ></div>" );



}

</script>







<script>



  var startX, startY



// detect if touch event supported or not

if ('ontouchstart' in document.documentElement) {

  document.getElementById("invite_webimg").addEventListener("touchmove", handleMove, false);

  document.getElementById("invite_webimg").addEventListener("touchend", handleEnd, false);

  document.getElementById("invite_webimg").addEventListener("touchstart", handleStart, false);

}



  function handleStart(event){

    //event.preventDefault();

    var touch = event.touches[0];

    startX = parseInt( touch.pageX);

    startY = parseInt( touch.pageY);



    //alert(startX + ' ' + startY);

  }



  function handleEnd(event){







  }



  function handleMove(event){



    //event.preventDefault();

    var x, y;





         var touch = event.touches[0];

         x = parseInt( touch.pageX) - startX;

         y = parseInt( touch.pageY) - startY;



    if ($("#Gallery6141456 li").size() > 0){



        if ((Math.abs(x) > Math.abs(y)) && (Math.abs(x) > 150) ){



                instance6141456.show(0);

            }

        }



  }



    // default mv parameter

  var invite_mediatype = 0;

    var invite_preview_objurl;

    var invite_preview_usrdata;







/*

    $(document).ready(function() {

            //init

            if (invite_mediatype == 1) {

                $( "#img_videobutton").show();

                $( "#img_videobutton_placeholder").show();

            } else {

                $( "#img_videobutton").hide();

                $( "#img_videobutton_placeholder").hide();

            }



    });

*/





    $(function() {

            //if (invite_mediatype == 1) {

            //  $( "#img_decoration1,#img_decoration2,#img_decoration3").css('cursor', 'pointer');

            //} else {

            //  $( "#img_decoration1,#img_decoration2,#img_decoration3").css('cursor', 'default');

            //}











            $( "#img_videobutton" ).click(function() {

                //alert("playVideo");

                if (invite_mediatype == 1) {



                        window.location = 'http://youvivid-streaming.oss-cn-hangzhou.aliyuncs.com/IVT20151208/Ud4jUvzb4US3iV0XN-tOEA.mp4';







                }





                return false;

            });





            if ($("#Gallery6141456 li").size() > 0){



                $( "#invite_webimg,#img_decoration1,#img_decoration2,#img_decoration3,#frame1_1,#frame1_2,#frame1_3,#frame2_1,#frame2_2,#frame2_3,#frame3_1,#frame3_2,#frame3_3").css('cursor', 'pointer');

            }else{

                $( "#invite_webimg,#img_decoration1,#img_decoration2,#img_decoration3,#frame1_1,#frame1_2,#frame1_3,#frame2_1,#frame2_2,#frame2_3,#frame3_1,#frame3_2,#frame3_3").css('cursor', 'default');

            }



            $( "#invite_webimg,#img_decoration1,#img_decoration2,#img_decoration3,#frame1_1,#frame1_2,#frame1_3,#frame2_1,#frame2_2,#frame2_3,#frame3_1,#frame3_2,#frame3_3" ).click(function() {





                if ($("#Gallery6141456 li").size() > 0){



                     //alert($("#Gallery a:first").html());

                     //$("#Gallery a:first").click();

                     instance6141456.show(0);

                }





                return false;

            });







    });



</script>

                        </div>

                    </div>

                </div>

                <div class="inner-main-br">

                <div id="img_decoration3"></div>

                <div class="inner-main-bl"><div class="inner-main-bm">



                    <div id="sub-title">

                        <div class="sub-title-tr"><div class="sub-title-tl"><div class="sub-title-tm">

                        </div></div></div>

                        <div class="sub-title-mr"><div class="sub-title-ml">



                            <div class="sub-title-mm">

                                <div id="subtitlehtml"><span style="font-weight: normal; font-size: 18px; ">2016年07月15日</span></div>

                            </div>



                        </div>

                        </div>

                        <div class="sub-title-br"><div class="sub-title-bl"><div class="sub-title-bm">

                        </div></div></div>

                    </div>





                </div></div></div>

            </div>



        </div>



    </div></div>

    <div class="outter-main-br"><div class="outter-main-bl"><div class="outter-main-bm"></div></div></div>

</div>



<!-- preload placeholder for custom.css assets-->

<div id="preload-01"></div>

<div id="preload-02"></div>

<div id="preload-03"></div>

<div id="preload-04"></div>

<div id="preload-05"></div>

<div id="preload-06"></div>

<div id="preload-07"></div>

<div id="preload-08"></div>

<div id="preload-09"></div>

<div id="preload-10"></div>

<div id="preload-11"></div>

<div id="preload-12"></div>

<div id="preload-13"></div>

<div id="preload-14"></div>

<div id="preload-15"></div>

<div id="preload-16"></div>

<div id="preload-17"></div>

<div id="preload-18"></div>

<div id="preload-19"></div>

<div id="preload-20"></div>





<div id="accordion">









    <h3 class="detail-compact" style="display:" id="invite_detail_title6141455" >



        <div name="button1" id="button1" class="button">

            <div class="button-tr"><div class="button-tl"><div class="button-tm"></div></div></div>

            <div class="button-mr">

            <div class="button-ml">

            <div class="button-mm">

                <a href="javaScript:void(0);"><img class="iconimage" alt="1.png" src="http://youvivid-assets.youvivid.net/css/dianna_royalred/images/icons/1.png"  border="0" align="absmiddle">&nbsp;<span id="invite_detail_name6141455" class="button-title">爱 的 邀 约</span>&nbsp;</a>

            </div>

            </div>

            </div>

            <div class="button-br"><div class="button-bl"><div class="button-bm"></div></div></div>

        </div>

    </h3>



    <div class="accordion" id="invite_detail_content6141455" >



    <div name="detail1" id="detail1"  class="detail">

        <div class="detail-tr"><div class="detail-tl"><div class="detail-tm"></div></div></div>

        <div class="detail-mr">

        <div class="detail-ml">

        <div class="detail-mm">





    <div class="invite_detail_editor" id="invite_detail_editor6141455"  >

        <p style="text-align: center;"><span style="font-family:隶书1,隶书10,微软雅黑,宋体,microsoft jhenghei,microsoft yahei,arial;"><span style="font-size:19px;">沉浸在幸福中的我们</span></span></p>



<p style="text-align: center;">&nbsp;</p>



<p style="text-align: center;"><span style="font-family:隶书1,隶书10,微软雅黑,宋体,microsoft jhenghei,microsoft yahei,arial;"><span style="font-size:16px;">谨定于<br />

<span style="font-size:19px;">2016年07月15日</span></span></span></p>



<p style="text-align: center;"><span style="font-family:隶书1,隶书10,微软雅黑,宋体,microsoft jhenghei,microsoft yahei,arial;"><span style="font-size: 16px;"><span style="font-size: 19px;">12时</span></span></span></p>



<div>&nbsp;</div>



<p style="text-align: center;"><span style="font-family:隶书1,隶书10,微软雅黑,宋体,microsoft jhenghei,microsoft yahei,arial;"><span style="font-size:16px;">为</span></span></p>



<table align="center" border="0" cellpadding="0" cellspacing="0">

    <tbody>

        <tr>

            <td style="border: 0px; width: 47%; text-align: right;"><span style="font-family:隶书1,隶书10,微软雅黑,宋体,microsoft jhenghei,microsoft yahei,arial;"><span style="font-size:16px;">新郎<br />

            <span style="font-size:19px;">安哥</span></span></span></td>

            <td style="border: 0px; width: 6%; vertical-align: middle; text-align: center; white-space: nowrap;"><span style="font-family:隶书1,隶书10,微软雅黑,宋体,microsoft jhenghei,microsoft yahei,arial;"><span style="font-size:16px;">&nbsp;&nbsp;<img src="http://cn.youvivid.com/images_funssage/template/redheart1.png" />&nbsp;&nbsp;</span></span></td>

            <td style="border: 0px; width: 47%;"><span style="font-family:隶书1,隶书10,微软雅黑,宋体,microsoft jhenghei,microsoft yahei,arial;"><span style="font-size:16px;">新娘<br />

            <span style="font-size:19px;">文妹</span></span></span></td>

        </tr>

    </tbody>

</table>



<p style="text-align: center;">&nbsp;</p>



<p style="text-align: center;"><span style="font-family:隶书1,隶书10,微软雅黑,宋体,microsoft jhenghei,microsoft yahei,arial;"><span style="font-size:16px;">举行结婚典礼&nbsp;</span></span></p>



<p style="text-align: center;"><span style="font-family:隶书1,隶书10,微软雅黑,宋体,microsoft jhenghei,microsoft yahei,arial;"><span style="font-size:16px;">敬备喜宴<br />

恭请光临</span></span><br />

&nbsp;</p>



<p style="text-align: center;"><span style="font-family:隶书1,隶书10,微软雅黑,宋体,microsoft jhenghei,microsoft yahei,arial;"><span style="font-size:16px;">席设</span></span></p>



<p style="text-align: center;"><span style="font-family:隶书1,隶书10,微软雅黑,宋体,microsoft jhenghei,microsoft yahei,arial;"><span style="font-size:16px;"><span style="font-size:19px;">中南海</span><br />

{场所地址}</span></span></p>



<p>&nbsp;</p>



<table border="0" cellpadding="1" cellspacing="1" style="width:100%">

    <tbody>

        <tr>

            <td style="text-align:right; vertical-align:top; white-space:nowrap; width:5%"><span style="font-family:隶书1,隶书10,微软雅黑,宋体,microsoft jhenghei,microsoft yahei,arial;"><span style="font-size:16px;">日期：</span></span></td>

            <td style="text-align:left; vertical-align:top"><span style="font-family:隶书1,隶书10,微软雅黑,宋体,microsoft jhenghei,microsoft yahei,arial;"><span style="font-size:16px;">2016年07月15日</span></span></td>

        </tr>

        <tr>

            <td style="text-align:right; vertical-align:top; white-space:nowrap; width:5%"><span style="font-family:隶书1,隶书10,微软雅黑,宋体,microsoft jhenghei,microsoft yahei,arial;"><span style="font-size:16px;">时间：</span></span></td>

            <td style="text-align:left; vertical-align:top"><span style="font-family:隶书1,隶书10,微软雅黑,宋体,microsoft jhenghei,microsoft yahei,arial;"><span style="font-size:16px;">12时</span></span></td>

        </tr>

        <tr>

            <td style="text-align:right; vertical-align:top; white-space:nowrap; width:5%"><span style="font-family:隶书1,隶书10,微软雅黑,宋体,microsoft jhenghei,microsoft yahei,arial;"><span style="font-size:16px;">地点：</span></span></td>

            <td style="text-align:left; vertical-align:top"><span style="font-family:隶书1,隶书10,微软雅黑,宋体,microsoft jhenghei,microsoft yahei,arial;"><span style="font-size:16px;">中南海</span></span></td>

        </tr>

        <tr>

            <td style="text-align:right; vertical-align:top; white-space:nowrap; width:5%"><span style="font-family:隶书1,隶书10,微软雅黑,宋体,microsoft jhenghei,microsoft yahei,arial;"><span style="font-size:16px;">地址：</span></span></td>

            <td style="text-align:left; vertical-align:top"><span style="font-family:隶书1,隶书10,微软雅黑,宋体,microsoft jhenghei,microsoft yahei,arial;"><span style="font-size:16px;">{场所地址}</span></span></td>

        </tr>

        <tr>

            <td style="text-align:right; vertical-align:top; white-space:nowrap; width:5%"><span style="font-family:隶书1,隶书10,微软雅黑,宋体,microsoft jhenghei,microsoft yahei,arial;"><span style="font-size:16px;">电话：</span></span></td>

            <td style="text-align:left; vertical-align:top"><span style="font-family:隶书1,隶书10,微软雅黑,宋体,microsoft jhenghei,microsoft yahei,arial;"><span style="font-size:16px;">{联络电话}</span></span></td>

        </tr>

        <tr>

            <td style="text-align:right; vertical-align:top; white-space:nowrap; width:5%">&nbsp;</td>

            <td style="text-align:left; vertical-align:top">&nbsp;</td>

        </tr>

    </tbody>

</table>



    </div>

<script type="text/javascript">



    //?建求XMLHttpRequest?象

    function createRequest() {

        try {

            request = new XMLHttpRequest();

        } catch (trymicrosoft) {

            try {

                request = new ActiveXObject("Msxml2.XMLHTTP");

            } catch (othermicrosoft) {

                try {

                    request = new ActiveXObject("Microsoft.XMLHTTP");

                } catch (failed) {

                    request = false;

                }

            }

        }

        if (!request)

            alert("ERROR XMLHttpRequest!");

    }







    function reloadWebFont6141455(){

        var webfontinfo_array = ['粗钢笔|粗钢笔1|http://121.40.42.185:443/Fonts/csslink?family=%E7%B2%97%E9%92%A2%E7%AC%941&font=%E7%B2%97%E9%92%A2%E7%AC%94|2','粗圆|粗圆1|http://121.40.42.185:443/Fonts/csslink?family=%E7%B2%97%E5%9C%861&font=%E7%B2%97%E5%9C%86|2','古印体|古印体1|http://121.40.42.185:443/Fonts/csslink?family=%E5%8F%A4%E5%8D%B0%E4%BD%931&font=%E5%8F%A4%E5%8D%B0%E4%BD%93|2','黑体|黑体1|http://121.40.42.185:443/Fonts/csslink?family=%E9%BB%91%E4%BD%931&font=%E9%BB%91%E4%BD%93|2','粗广告体|粗广告体1|http://121.40.42.185:443/Fonts/csslink?family=%E7%B2%97%E5%B9%BF%E5%91%8A%E4%BD%931&font=%E7%B2%97%E5%B9%BF%E5%91%8A%E4%BD%93|2','隶书|隶书1|http://121.40.42.185:443/Fonts/csslink?family=%E9%9A%B6%E4%B9%A61&font=%E9%9A%B6%E4%B9%A6|2','书宋二|书宋二1|http://121.40.42.185:443/Fonts/csslink?family=%E4%B9%A6%E5%AE%8B%E4%BA%8C1&font=%E4%B9%A6%E5%AE%8B%E4%BA%8C|2','中行书|中行书1|http://121.40.42.185:443/Fonts/csslink?family=%E4%B8%AD%E8%A1%8C%E4%B9%A61&font=%E4%B8%AD%E8%A1%8C%E4%B9%A6|2','粗行楷体|粗行楷体1|http://121.40.42.185:443/Fonts/csslink?family=%E7%B2%97%E8%A1%8C%E6%A5%B7%E4%BD%931&font=%E7%B2%97%E8%A1%8C%E6%A5%B7%E4%BD%93|2','甜妞体|甜妞体1|http://121.40.42.185:443/Fonts/csslink?family=%E7%94%9C%E5%A6%9E%E4%BD%931&font=%E7%94%9C%E5%A6%9E%E4%BD%93|2'];

        var htmltext = $("#invite_detail_editor6141455").html();

        plaintext = htmltext.replace( /(<[^<|>]+?>|\r\n|\n|\r|^\s*|\s*$|\s+|&nbsp;)/gim,'' );



        plaintext_array_inorder = plaintext.split('').sort();



        if (plaintext_array_inorder.length > 0) {

            plaintext_min = plaintext_array_inorder[0];

            prechr = plaintext_array_inorder[0];

            for (i=1; i<plaintext_array_inorder.length; i++){

                if (plaintext_array_inorder[i] != prechr){

                    prechr = plaintext_array_inorder[i];

                    plaintext_min = plaintext_min + plaintext_array_inorder[i];

                }

            }

        } else {

            plaintext_min = "";

        }





        contentcss_list = "";

        //alert(webfontinfo_array);



        for ( cc=0; cc < webfontinfo_array.length ; cc++) {



            tmp_webfontname = webfontinfo_array[cc].split('|')[0];

        //  alert(tmp_webfontname);

            tmp_webfont = webfontinfo_array[cc].split('|')[1];

            tmp_webfonturl = webfontinfo_array[cc].split('|')[2];

            tmp_webfonttype = webfontinfo_array[cc].split('|')[3];



            if (  htmltext.toUpperCase().indexOf(tmp_webfont.toUpperCase()) >= 0 ) {

                var_text = plaintext_min;

                if (tmp_webfonttype==1 ) {

                    $(document).find('head').append('<link class="fontcss_detail" id="' + tmp_webfont + '" rel="stylesheet" type="text/css" href="'+ tmp_webfonturl + "&text=" + encodeURIComponent(var_text) +'">');

                } else if (tmp_webfonttype==3 ) { //google webfont pure english,  no text parameter

                    $(document).find('head').append('<link class="fontcss_detail" id="' + tmp_webfont + '" rel="stylesheet" type="text/css" href="'+ tmp_webfonturl +'">');

                } else {

                    post_url = tmp_webfonturl.split('?')[0];

                    post_vars = tmp_webfonturl.split('?')[1] + "&text=" + encodeURIComponent(var_text);

                    createRequest();

                    //post_url = "http://cn.youvivid.com/test_test.asp";

                    //alert(parseInt($.browser.version, 10));





                        if($.browser.msie && parseInt($.browser.version, 10) <= 9) {

                            post_url = "http://cn.youvivid.net/mobile_invite_getcontentcssurl.asp";

                        } else {

                            post_url = "http://121.40.42.185:443/Fonts/csslink";

                        }









                    //alert(post_url);

                    request.open("POST", post_url, false);



                    request.setRequestHeader("Content-type","application/x-www-form-urlencoded");

                    //alert(post_url+"," + post_vars);

                    request.send(post_vars);

                    post_response = request.responseText; //?取服?器返回的JSON字串



                //  alert("post_response=" + post_response);

                    // this is for testing

                    //$(document).find('head').append('<link class="fontcss_detail" id="' + tmp_webfont + '" rel="stylesheet" type="text/css" href="'+ tmp_webfonturl + "&text=" + encodeURIComponent(var_text) +'">');

                    $(document).find('head').append('<link class="fontcss_detail" id="' + tmp_webfont + '" rel="stylesheet" type="text/css" href="'+ post_response +'">');



                }

            }else{

                var_text = tmp_webfontname ;

                if (tmp_webfonttype==1 ) {

                    $(document).find('head').append('<link class="fontcss_detail" id="' + tmp_webfont + '" rel="stylesheet" type="text/css" href="'+ tmp_webfonturl + "&text=" + encodeURIComponent(var_text) +'">');







                }else{

                    $(document).find('head').append('<link class="fontcss_detail" id="' + tmp_webfont + '" rel="stylesheet" type="text/css" href="">');



                }

            }//if (  htmltext.toUpperCase().indexOf(tmp_webfont.toUpperCase()) >= 0 ) {

        }

    } //end function reloadWebFont6141455(){







    $(document).ready(function() {



        reloadWebFont6141455();



        bReloadWebFontOnce6141455 = 0;





    });







</script>







    </div>



        </div>

        </div>

        <div class="detail-br"><div class="detail-bl"><div class="detail-bm"></div></div></div>

        </div>

    </div>











    <h3 class="detail-compact" style="display:" id="invite_detail_title6141456" >



        <div name="button7" id="button7" class="button">

            <div class="button-tr"><div class="button-tl"><div class="button-tm"></div></div></div>

            <div class="button-mr">

            <div class="button-ml">

            <div class="button-mm">

                <a href="javaScript:void(0);"><img class="iconimage" alt="7.png" src="http://youvivid-assets.youvivid.net/css/dianna_royalred/images/icons/7.png"  border="0" align="absmiddle">&nbsp;<span id="invite_detail_name6141456" class="button-title">婚 纱 相 册</span>&nbsp;</a>

            </div>

            </div>

            </div>

            <div class="button-br"><div class="button-bl"><div class="button-bm"></div></div></div>

        </div>

    </h3>



    <div class="accordion" id="invite_detail_content6141456" >



    <div name="detail7" id="detail7"  class="detail">

        <div class="detail-tr"><div class="detail-tl"><div class="detail-tm"></div></div></div>

        <div class="detail-mr">

        <div class="detail-ml">

        <div class="detail-mm">





  <!--<div id="slideshow" style="width:300px; height:300px;"></div>-->





    <span id="nopicture6141456">没有图片</span>









    <ul id="Gallery6141456" class="gallery">





<!--<li><a href="uploads/image/f0904273C82W2683.jpg" rel="external"><img src="uploads/image/f0904273C82W2683.jpg" alt="" /></a></li>-->







    </ul>







    <script type="text/javascript">



        //var cw = $('.gallery li').width() * 0.666 ; // there is no li exist on initial

/*

        $(document).ready(function() {



                var cw = $('.gallery').width() * 0.33333 ; // 0.222 = 0.3333*0.6666

                alert("ready: cw="+cw + ", gallery width=" + $('.gallery').width());

                $('.gallery li a .thumb').css({

                    'height': cw + 'px'

                });

        });



        $(window).resize(function() {

            var cw = $('.gallery').width() * 0.33333 ; // 0.222 = 0.3333*0.6666

                alert("resize: cw="+cw + ", gallery width=" + $('.gallery').width());

            $('.gallery li a .thumb').css({

                'height': cw + 'px'

            });

        });

*/

    </script>









    <script type="text/javascript">



     var instance6141456 = null;

     var options6141456 = { captionAndToolbarAutoHideDelay: 0, captionAndToolbarShowEmptyCaptions:false, autoStartSlideshow: false, slideSpeed:300, nextPreviousSlideSpeed:250,

      //  ,preventHide: true

        getImageCaption: function(item){



            return $(item).attr("cap") ;

        }

    };



        (function(window, $, PhotoSwipe){







                $(document).ready(function(){



                    if ($('#Gallery6141456 li').size() > 0){



                    //instance = window.Code.PhotoSwipe.attach( window.document.querySelectorAll('#Gallery a'), options );

                            instance6141456 =  $("#Gallery6141456 a").photoSwipe(options6141456);

 /*

                            instance6141456.addEventHandler( window.Code.PhotoSwipe.EventTypes.onShow, function(e){



                    setTimeout( function(){

                        instance6141456.resetPosition(); //redraw photoswipe

                    }, 120);



                            });



                            instance6141456.addEventHandler( window.Code.PhotoSwipe.EventTypes.onDisplayImage, function(e){





                    setTimeout( function(){

                        $(window).scrollTop(0);

                        instance6141456.resetPosition(); //redraw photoswipe

                    }, 120);



                            });



                            instance6141456.addEventHandler( window.Code.PhotoSwipe.EventTypes.onBeforeShow, function(e){



                    $(window).scrollTop(0);

                    //$("#MainContent").css("position","fixed");

                    //$("body").css("position","fixed");



                    //$("#PS").css("width", 200);

                    //$("#PS").css("height", 200);

                            });



                            instance6141456.addEventHandler( window.Code.PhotoSwipe.EventTypes.onBeforeHide, function(e){



                                //$("#MainContent").css("position","static");

                                //$("body").css("position","static");



                    //$("#PS").css("width", 1);

                    //$("#PS").css("height", 1);

                            });

*/



              }





            });











        }(window, window.jQuery, window.Code.PhotoSwipe));









  function addPhotoSwipe6141456(fileid, thumbnailurl, fileurl, photocount){





            var li = $('<li/>').append( $('<a/>')

              .attr('href', fileurl)

              .append(

                $('<img />').attr('id', fileid).attr('src', thumbnailurl).attr('alt', '')

              )).appendTo('ul#Gallery6141456');





            if ($("#Gallery6141456 li").size() == photocount){





                    instance6141456 =  $("#Gallery6141456 a").photoSwipe(options6141456);





            }

  }



    </script>







<div style="width:100%; height:3px"></div>



<div id="PS" style=" overflow: hidden; position: relative;"></div>





    </div>



        </div>

        </div>

        <div class="detail-br"><div class="detail-bl"><div class="detail-bm"></div></div></div>

        </div>

    </div>











    <h3 class="detail-deluxe" style="display:" id="invite_detail_title6141457" >



        <div name="button2" id="button2" class="button">

            <div class="button-tr"><div class="button-tl"><div class="button-tm"></div></div></div>

            <div class="button-mr">

            <div class="button-ml">

            <div class="button-mm">

                <a href="javaScript:void(0);"><img class="iconimage" alt="2.png" src="http://youvivid-assets.youvivid.net/css/dianna_royalred/images/icons/2.png"  border="0" align="absmiddle">&nbsp;<span id="invite_detail_name6141457" class="button-title">Ｍ Ｖ 视 频</span>&nbsp;</a>

            </div>

            </div>

            </div>

            <div class="button-br"><div class="button-bl"><div class="button-bm"></div></div></div>

        </div>

    </h3>



    <div class="accordion" id="invite_detail_content6141457" >



    <div name="detail2" id="detail2"  class="detail">

        <div class="detail-tr"><div class="detail-tl"><div class="detail-tm"></div></div></div>

        <div class="detail-mr">

        <div class="detail-ml">

        <div class="detail-mm">





        <div align="center">





<script>

var xobjurl6141457 = 'swf/1405.swf';

var xusrdata6141457 = 'web/getuserdata_embed.asp?embedid=Q9G7W';

</script>





        <video id="xvideo6141457"  width="100%" controls  poster="http://youvividcnupload1.oss.aliyuncs.com/cimage/f225036-01DF869BC7854588BA630FBB9EFDC6BAQ9G7W.jpg"  preload="meta" >

            <source src="http://youvivid-streaming.oss.aliyuncs.com/IVT_template/7n8_ihJv6E651-EJy6n4OA.mp4" type="video/mp4">

            你的浏览器不支持HTML5视频播放

        </video>



        <script>

            $(function() {

                $('#xvideo6141457').bind('play', function (e) {

                    $("#jquery_jplayer_1").jPlayer("pause");

                    bVideoPlaying=1;



                    alertify.alert('免费体验板手机只能播放样片\n付费发布后可播放自制MV');





                });

                $('#xvideo6141457').bind('pause', function (e) {

                        //bVideoPlaying=0;

                });

                $('#xvideo6141457').bind('ended', function (e) {

                        //bVideoPlaying=0;

                });





            });

        </script>





        <br />

免费体验板只能播放范例视频

<br />

 <span style="font-size:10px">(手机建议使用WiFi无线上网)</span>

        </div>





    </div>



        </div>

        </div>

        <div class="detail-br"><div class="detail-bl"><div class="detail-bm"></div></div></div>

        </div>

    </div>











    <h3 class="detail-compact" style="display:" id="invite_detail_title6141458" >



        <div name="button3" id="button3" class="button">

            <div class="button-tr"><div class="button-tl"><div class="button-tm"></div></div></div>

            <div class="button-mr">

            <div class="button-ml">

            <div class="button-mm">

                <a href="javaScript:void(0);"><img class="iconimage" alt="3.png" src="http://youvivid-assets.youvivid.net/css/dianna_royalred/images/icons/3.png"  border="0" align="absmiddle">&nbsp;<span id="invite_detail_name6141458" class="button-title">婚 宴 回 函</span>&nbsp;</a>

            </div>

            </div>

            </div>

            <div class="button-br"><div class="button-bl"><div class="button-bm"></div></div></div>

        </div>

    </h3>



    <div class="accordion" id="invite_detail_content6141458" >



    <div name="detail3" id="detail3"  class="detail">

        <div class="detail-tr"><div class="detail-tl"><div class="detail-tm"></div></div></div>

        <div class="detail-mr">

        <div class="detail-ml">

        <div class="detail-mm">







<script>

$(document).ready(function(){



    //$("#iform").submit(function(e)

     $("#rsvp_btn").on('click', function(){





        var btn='';



        if (document.iform.sum.value == '0'){



            btn = ' 送 出 ';



        }else{



            btn = ' 修 改 ';



        }





        alertify.confirm('您确定要' + btn + '？', function (e) {



            if (e) {



                //var postData = $(this).serialize();

                //var formURL = $(this).attr("action");

                var postData = $("#iform").serialize();

                var formURL = $("#iform").attr("action");



                $.ajax(

                {



                    url : formURL,

                    type: "POST",

                    data : postData,

                    success:function(data, textStatus, jqXHR)

                    {



                        $("#rsvptable tr").removeClass('taborder');



                        if (jqXHR.responseText == 'CAPTCHA'){



                            alertify.alert('回复失败，请填写正确的验证码！');



                        }else if (jqXHR.responseText == 'OK'){



                                //data: return data from server

                                alertify.alert('回复成功');

                                //alert('回复成功\n\n' + jqXHR.status + ' ' + jqXHR.responseText);



                              if ( $("form[name='iform'] input[name='bcheckin']").val() == "1"){



                                $("#qrcode_"+ $("form[name='iform'] input[name='invite_usrcookies']").val()).css({"display": ""});



                              }else{

                                //document.getElementById('qrcode_'+document.iform.invite_usrcookies.value).style.display = '';

                                $("#qrcode_"+ $("form[name='iform'] input[name='invite_usrcookies']").val()).css({"display": "none"});

                              }

                              $("#rsvp_btn").val(" 修 改 ");



                        }else{



                             var rtn = jqXHR.responseText.split('|');



                             alertify.alert( rtn[1]);



                             var bquestionid = rtn[0].split(',');



                             var color = $(".detail-mm").css('color')



                             for (var i=0; i<bquestionid.length;i++){

                                 $("#ta" + bquestionid[i]).addClass('taborder');

                                 $("#ta" + bquestionid[i]).css('border-color', color);

                             }



                        }

                    },

                    error: function(jqXHR, textStatus, errorThrown)

                    {

                        //if fails



                        alertify.alert('回复失败\n\n' + jqXHR.status + ' ' + jqXHR.responseText);



                    }

                });



                return false;

                //e.preventDefault(); //STOP default action



            } else {

                return false;

            }

        });







     });







});









</script>



<style>

 .taborder{



    border: 1px dashed #000000;

 }

</style>



    <!--  RSVP START -->

    <div id="rsvpdiv" >





    <!--onsubmit="javascript: return isIns();"-->

    <form id="iform" name="iform" action="mobile_invite_act.asp" method="post" style="display:block;">



        <input type="hidden" name="bcheckin" value="0">

        <input type="hidden" name="invite_usrcookies" value="B0ADF0FA96FBE0AC261">





         <input type="hidden" name="invite_covertitle" value="">



        <input type="hidden" name="sum" value="0">

        <input type="hidden" name="bsubmit" value="1">



       <!-- <input type="hidden" name="sn" value="AJTAR"> -->



        <input type="hidden" name="rsvp_invite_detail_id" value="57VSB4">



    <div id="qaprompt"><span>

为了方便统整婚宴资料，请您花几分钟填写以下内容，并请及时回复，我们的婚宴会因您的协助更加美好。</span></div>





    <table id="rsvptable" width="100%" cellpadding="3" cellspacing="1" border="0" class="n4" style="line-height: 20px;">













         <tr id="ta7105345" style=" padding: 3px; margin-top:10px; display: block">

          <td width="100%" height="50" align="left">



           <input type="hidden" name="questionid" value="7105345">

           <input type="hidden" name="answertype" value="1">

           <input type="hidden" name="q7105345" value="">

           <input type="hidden" name="b7105345" value="1">





          <span class="seq">1</span>.<span id="qq7105345">您的姓名&nbsp;<span id="nn7105345">(必填)</span></span>&nbsp;<br/>



<div style="margin-left:10px" >















          <div id="q7105345">





           <div id="s20419154" style="padding: 3px;">

            <input type="radio" name="t7105345"  style='display: none;' value="{}" >



            <span id="o20419154" >



          <input type="text" name="n7105345_20419154" value="" size="20" onkeyup="setOptionValue('7105345', this.value, '{}', '20419154');" onblur="setOptionValue('7105345', this.value, '{}', '20419154');">



             </span>

           </div>



          </div>







</div>

     </td></tr>





         <tr id="ta7105346" style=" padding: 3px; margin-top:10px; display: block">

          <td width="100%" height="50" align="left">



           <input type="hidden" name="questionid" value="7105346">

           <input type="hidden" name="answertype" value="1">

           <input type="hidden" name="q7105346" value="">

           <input type="hidden" name="b7105346" value="1">





          <span class="seq">2</span>.<span id="qq7105346">您会来参与我们的婚宴吗?&nbsp;<span id="nn7105346">(必填)</span></span>&nbsp;<br/>



<div style="margin-left:10px" >















          <div id="q7105346">





           <div id="s20419155" style="padding: 3px;">

            <input type="radio" name="t7105346" style='display:inline-block; vertical-align:top;' value="非常乐意，有{1-10}人参加" >



            <span id="o20419155" >

非常乐意，有



            <select name="n7105346_20419155" onchange="setOptionValue('7105346', this.value, '非常乐意，有{1-10}人参加', '20419155');">

             <option value="" >请选择</option>



             <option value="1" >1</option>



             <option value="2" >2</option>



             <option value="3" >3</option>



             <option value="4" >4</option>



             <option value="5" >5</option>



             <option value="6" >6</option>



             <option value="7" >7</option>



             <option value="8" >8</option>



             <option value="9" >9</option>



             <option value="10" >10</option>



            </select>

人参加

             </span>

           </div>



           <div id="s20419156" style="padding: 3px;">

            <input type="radio" name="t7105346" style='display:inline-block; vertical-align:top;' value="无法参加"  onclick="setOptionValue('7105346', '', '无法参加', '20419156');">



            <span id="o20419156" >

无法参加

             </span>

           </div>



          </div>







</div>

     </td></tr>





         <tr id="ta7105347" style=" padding: 3px; margin-top:10px; display: none">

          <td width="100%" height="50" align="left">



           <input type="hidden" name="questionid" value="7105347">

           <input type="hidden" name="answertype" value="1">

           <input type="hidden" name="q7105347" value="">

           <input type="hidden" name="b7105347" value="0">





          <span class="seq">2</span>.<span id="qq7105347">您是新郎还是新娘的宾客？&nbsp;<span id="nn7105347"></span></span>&nbsp;<br/>



<div style="margin-left:10px" >















          <div id="q7105347">





           <div id="s20419157" style="padding: 3px;">

            <input type="radio" name="t7105347" style='display:inline-block; vertical-align:top;' value="我是帅新郎的{亲戚|朋友|同学|同事}" >



            <span id="o20419157" >

我是帅新郎的



            <select name="n7105347_20419157" onchange="setOptionValue('7105347', this.value, '我是帅新郎的{亲戚|朋友|同学|同事}', '20419157');">

             <option value="" >请选择</option>



             <option value="亲戚" >亲戚</option>



             <option value="朋友" >朋友</option>



             <option value="同学" >同学</option>



             <option value="同事" >同事</option>



            </select>



             </span>

           </div>



           <div id="s20419158" style="padding: 3px;">

            <input type="radio" name="t7105347" style='display:inline-block; vertical-align:top;' value="我是俏新娘的{亲戚|朋友|同学|同事}" >



            <span id="o20419158" >

我是俏新娘的



            <select name="n7105347_20419158" onchange="setOptionValue('7105347', this.value, '我是俏新娘的{亲戚|朋友|同学|同事}', '20419158');">

             <option value="" >请选择</option>



             <option value="亲戚" >亲戚</option>



             <option value="朋友" >朋友</option>



             <option value="同学" >同学</option>



             <option value="同事" >同事</option>



            </select>



             </span>

           </div>



           <div id="s20419159" style="padding: 3px;">

            <input type="radio" name="t7105347" style='display:inline-block; vertical-align:top;' value="其他:{}" >



            <span id="o20419159" >

其他:

          <input type="text" name="n7105347_20419159" value="" size="20" onkeyup="setOptionValue('7105347', this.value, '其他:{}', '20419159');" onblur="setOptionValue('7105347', this.value, '其他:{}', '20419159');">



             </span>

           </div>



          </div>







</div>

     </td></tr>





         <tr id="ta7105348" style=" padding: 3px; margin-top:10px; display: none">

          <td width="100%" height="50" align="left">



           <input type="hidden" name="questionid" value="7105348">

           <input type="hidden" name="answertype" value="1">

           <input type="hidden" name="q7105348" value="">

           <input type="hidden" name="b7105348" value="0">





          <span class="seq">2</span>.<span id="qq7105348">需要为您准备素食吗？&nbsp;<span id="nn7105348"></span></span>&nbsp;<br/>



<div style="margin-left:10px" >















          <div id="q7105348">





           <div id="s20419160" style="padding: 3px;">

            <input type="radio" name="t7105348" style='display:inline-block; vertical-align:top;' value="是的，我需要{1-10}份" >



            <span id="o20419160" >

是的，我需要



            <select name="n7105348_20419160" onchange="setOptionValue('7105348', this.value, '是的，我需要{1-10}份', '20419160');">

             <option value="" >请选择</option>



             <option value="1" >1</option>



             <option value="2" >2</option>



             <option value="3" >3</option>



             <option value="4" >4</option>



             <option value="5" >5</option>



             <option value="6" >6</option>



             <option value="7" >7</option>



             <option value="8" >8</option>



             <option value="9" >9</option>



             <option value="10" >10</option>



            </select>

份

             </span>

           </div>



           <div id="s20419161" style="padding: 3px;">

            <input type="radio" name="t7105348" style='display:inline-block; vertical-align:top;' value="谢谢，不需要"  onclick="setOptionValue('7105348', '', '谢谢，不需要', '20419161');">



            <span id="o20419161" >

谢谢，不需要

             </span>

           </div>



          </div>







</div>

     </td></tr>





         <tr id="ta7105349" style=" padding: 3px; margin-top:10px; display: block">

          <td width="100%" height="50" align="left">



           <input type="hidden" name="questionid" value="7105349">

           <input type="hidden" name="answertype" value="1">

           <input type="hidden" name="q7105349" value="">

           <input type="hidden" name="b7105349" value="0">





          <span class="seq">3</span>.<span id="qq7105349">若您需要我们寄送纸本喜帖，请填写地址&nbsp;<span id="nn7105349"></span></span>&nbsp;<br/>



<div style="margin-left:10px" >















          <div id="q7105349">





           <div id="s20419162" style="padding: 3px;">

            <input type="radio" name="t7105349"  style='display: none;' value="{}" >



            <span id="o20419162" >



          <input type="text" name="n7105349_20419162" value="" size="20" onkeyup="setOptionValue('7105349', this.value, '{}', '20419162');" onblur="setOptionValue('7105349', this.value, '{}', '20419162');">



             </span>

           </div>



          </div>







</div>

     </td></tr>





         <tr id="ta7105350" style=" padding: 3px; margin-top:10px; display: none">

          <td width="100%" height="50" align="left">



           <input type="hidden" name="questionid" value="7105350">

           <input type="hidden" name="answertype" value="1">

           <input type="hidden" name="q7105350" value="">

           <input type="hidden" name="b7105350" value="0">





          <span class="seq">3</span>.<span id="qq7105350">我们会提供游览车从台中出发，您需要座位吗?&nbsp;<span id="nn7105350"></span></span>&nbsp;<br/>



<div style="margin-left:10px" >















          <div id="q7105350">





           <div id="s20419163" style="padding: 3px;">

            <input type="radio" name="t7105350" style='display:inline-block; vertical-align:top;' value="请提供{1-10}个" >



            <span id="o20419163" >

请提供



            <select name="n7105350_20419163" onchange="setOptionValue('7105350', this.value, '请提供{1-10}个', '20419163');">

             <option value="" >请选择</option>



             <option value="1" >1</option>



             <option value="2" >2</option>



             <option value="3" >3</option>



             <option value="4" >4</option>



             <option value="5" >5</option>



             <option value="6" >6</option>



             <option value="7" >7</option>



             <option value="8" >8</option>



             <option value="9" >9</option>



             <option value="10" >10</option>



            </select>

个

             </span>

           </div>



           <div id="s20419164" style="padding: 3px;">

            <input type="radio" name="t7105350" style='display:inline-block; vertical-align:top;' value="不需要"  onclick="setOptionValue('7105350', '', '不需要', '20419164');">



            <span id="o20419164" >

不需要

             </span>

           </div>



          </div>







</div>

     </td></tr>





         <tr id="ta7105351" style=" padding: 3px; margin-top:10px; display: block">

          <td width="100%" height="50" align="left">



           <input type="hidden" name="questionid" value="7105351">

           <input type="hidden" name="answertype" value="1">

           <input type="hidden" name="q7105351" value="">

           <input type="hidden" name="b7105351" value="0">





          <span class="seq">4</span>.<span id="qq7105351">请留下您的手机号码&nbsp;<span id="nn7105351"></span></span>&nbsp;<br/>



<div style="margin-left:10px" >















          <div id="q7105351">





           <div id="s20419165" style="padding: 3px;">

            <input type="radio" name="t7105351"  style='display: none;' value="{}" >



            <span id="o20419165" >



          <input type="text" name="n7105351_20419165" value="" size="20" onkeyup="setOptionValue('7105351', this.value, '{}', '20419165');" onblur="setOptionValue('7105351', this.value, '{}', '20419165');">



             </span>

           </div>



          </div>







</div>

     </td></tr>





         <tr id="ta7105352" style=" padding: 3px; margin-top:10px; display: none">

          <td width="100%" height="50" align="left">



           <input type="hidden" name="questionid" value="7105352">

           <input type="hidden" name="answertype" value="1">

           <input type="hidden" name="q7105352" value="">

           <input type="hidden" name="b7105352" value="0">





          <span class="seq">4</span>.<span id="qq7105352">请留下您的email&nbsp;<span id="nn7105352"></span></span>&nbsp;<br/>



<div style="margin-left:10px" >















          <div id="q7105352">





          </div>







</div>

     </td></tr>





         <tr id="ta7105353" style=" padding: 3px; margin-top:10px; display: block">

          <td width="100%" height="50" align="left">



           <input type="hidden" name="questionid" value="7105353">

           <input type="hidden" name="answertype" value="1">

           <input type="hidden" name="q7105353" value="">

           <input type="hidden" name="b7105353" value="0">





          <span class="seq">5</span>.<span id="qq7105353">请留下您对我们的祝福，衷心感谢您&nbsp;<span id="nn7105353"></span></span>&nbsp;<br/>



<div style="margin-left:10px" >















          <div id="q7105353">





           <div id="s20419166" style="padding: 3px;">

            <input type="radio" name="t7105353"  style='display: none;' value="{<BR><BR><BR>}" >



            <span id="o20419166" >



          <textarea style="display:inline-block;vertical-align:top;" name="n7105353_20419166" cols="20" rows="3" onkeyup="setOptionValue('7105353', this.value, '{<BR><BR><BR>}', '20419166');" onblur="setOptionValue('7105353', this.value, '{<BR><BR><BR>}', '20419166');"></textarea>



             </span>

           </div>



          </div>







</div>

     </td></tr>





         <tr id="ta7105354" style=" padding: 3px; margin-top:10px; display: none">

          <td width="100%" height="50" align="left">



           <input type="hidden" name="questionid" value="7105354">

           <input type="hidden" name="answertype" value="1">

           <input type="hidden" name="q7105354" value="">

           <input type="hidden" name="b7105354" value="0">





          <span class="seq">5</span>.<span id="qq7105354">备用问题1-选择&nbsp;<span id="nn7105354"></span></span>&nbsp;<br/>



<div style="margin-left:10px" >















          <div id="q7105354">





           <div id="s20419167" style="padding: 3px;">

            <input type="radio" name="t7105354" style='display:inline-block; vertical-align:top;' value="选项1"  onclick="setOptionValue('7105354', '', '选项1', '20419167');">



            <span id="o20419167" >

选项1

             </span>

           </div>



           <div id="s20419168" style="padding: 3px;">

            <input type="radio" name="t7105354" style='display:inline-block; vertical-align:top;' value="选项2"  onclick="setOptionValue('7105354', '', '选项2', '20419168');">



            <span id="o20419168" >

选项2

             </span>

           </div>



           <div id="s20419169" style="padding: 3px;">

            <input type="radio" name="t7105354" style='display:inline-block; vertical-align:top;' value="选项3"  onclick="setOptionValue('7105354', '', '选项3', '20419169');">



            <span id="o20419169" >

选项3

             </span>

           </div>



          </div>







</div>

     </td></tr>





         <tr id="ta7105355" style=" padding: 3px; margin-top:10px; display: none">

          <td width="100%" height="50" align="left">



           <input type="hidden" name="questionid" value="7105355">

           <input type="hidden" name="answertype" value="1">

           <input type="hidden" name="q7105355" value="">

           <input type="hidden" name="b7105355" value="0">





          <span class="seq">5</span>.<span id="qq7105355">备用问题2-单行文字&nbsp;<span id="nn7105355"></span></span>&nbsp;<br/>



<div style="margin-left:10px" >















          <div id="q7105355">





           <div id="s20419170" style="padding: 3px;">

            <input type="radio" name="t7105355"  style='display: none;' value="{}" >



            <span id="o20419170" >



          <input type="text" name="n7105355_20419170" value="" size="20" onkeyup="setOptionValue('7105355', this.value, '{}', '20419170');" onblur="setOptionValue('7105355', this.value, '{}', '20419170');">



             </span>

           </div>



          </div>







</div>

     </td></tr>





         <tr id="ta7105356" style=" padding: 3px; margin-top:10px; display: none">

          <td width="100%" height="50" align="left">



           <input type="hidden" name="questionid" value="7105356">

           <input type="hidden" name="answertype" value="1">

           <input type="hidden" name="q7105356" value="">

           <input type="hidden" name="b7105356" value="0">





          <span class="seq">5</span>.<span id="qq7105356">备用问题3-多行文字&nbsp;<span id="nn7105356"></span></span>&nbsp;<br/>



<div style="margin-left:10px" >















          <div id="q7105356">





           <div id="s20419171" style="padding: 3px;">

            <input type="radio" name="t7105356"  style='display: none;' value="{<BR><BR><BR>}" >



            <span id="o20419171" >



          <textarea style="display:inline-block;vertical-align:top;" name="n7105356_20419171" cols="20" rows="3" onkeyup="setOptionValue('7105356', this.value, '{<BR><BR><BR>}', '20419171');" onblur="setOptionValue('7105356', this.value, '{<BR><BR><BR>}', '20419171');"></textarea>



             </span>

           </div>



          </div>







</div>

     </td></tr>





         <tr id="ta7105357" style=" padding: 3px; margin-top:10px; display: none">

          <td width="100%" height="50" align="left">



           <input type="hidden" name="questionid" value="7105357">

           <input type="hidden" name="answertype" value="1">

           <input type="hidden" name="q7105357" value="">

           <input type="hidden" name="b7105357" value="0">





          <span class="seq">5</span>.<span id="qq7105357">备用问题4-组合&nbsp;<span id="nn7105357"></span></span>&nbsp;<br/>



<div style="margin-left:10px" >















          <div id="q7105357">





           <div id="s20419172" style="padding: 3px;">

            <input type="radio" name="t7105357"  style='display: none;' value="姓名<BR>{}<BR>生日<BR>{1950-2016}/{1-12}/{1-31}<BR>职业<BR>{士|农|工|商}" >



            <span id="o20419172" >

姓名<BR>

          <input type="text" name="n7105357_20419172" value="" size="20" onkeyup="setOptionValue('7105357', this.value, '姓名<BR>{}<BR>生日<BR>{1950-2016}/{1-12}/{1-31}<BR>职业<BR>{士|农|工|商}', '20419172');" onblur="setOptionValue('7105357', this.value, '姓名<BR>{}<BR>生日<BR>{1950-2016}/{1-12}/{1-31}<BR>职业<BR>{士|农|工|商}', '20419172');">

<BR>生日<BR>



            <select name="n7105357_20419172" onchange="setOptionValue('7105357', this.value, '姓名<BR>{}<BR>生日<BR>{1950-2016}/{1-12}/{1-31}<BR>职业<BR>{士|农|工|商}', '20419172');">

             <option value="" >请选择</option>



             <option value="1950" >1950</option>



             <option value="1951" >1951</option>



             <option value="1952" >1952</option>



             <option value="1953" >1953</option>



             <option value="1954" >1954</option>



             <option value="1955" >1955</option>



             <option value="1956" >1956</option>



             <option value="1957" >1957</option>



             <option value="1958" >1958</option>



             <option value="1959" >1959</option>



             <option value="1960" >1960</option>



             <option value="1961" >1961</option>



             <option value="1962" >1962</option>



             <option value="1963" >1963</option>



             <option value="1964" >1964</option>



             <option value="1965" >1965</option>



             <option value="1966" >1966</option>



             <option value="1967" >1967</option>



             <option value="1968" >1968</option>



             <option value="1969" >1969</option>



             <option value="1970" >1970</option>



             <option value="1971" >1971</option>



             <option value="1972" >1972</option>



             <option value="1973" >1973</option>



             <option value="1974" >1974</option>



             <option value="1975" >1975</option>



             <option value="1976" >1976</option>



             <option value="1977" >1977</option>



             <option value="1978" >1978</option>



             <option value="1979" >1979</option>



             <option value="1980" >1980</option>



             <option value="1981" >1981</option>



             <option value="1982" >1982</option>



             <option value="1983" >1983</option>



             <option value="1984" >1984</option>



             <option value="1985" >1985</option>



             <option value="1986" >1986</option>



             <option value="1987" >1987</option>



             <option value="1988" >1988</option>



             <option value="1989" >1989</option>



             <option value="1990" >1990</option>



             <option value="1991" >1991</option>



             <option value="1992" >1992</option>



             <option value="1993" >1993</option>



             <option value="1994" >1994</option>



             <option value="1995" >1995</option>



             <option value="1996" >1996</option>



             <option value="1997" >1997</option>



             <option value="1998" >1998</option>



             <option value="1999" >1999</option>



             <option value="2000" >2000</option>



             <option value="2001" >2001</option>



             <option value="2002" >2002</option>



             <option value="2003" >2003</option>



             <option value="2004" >2004</option>



             <option value="2005" >2005</option>



             <option value="2006" >2006</option>



             <option value="2007" >2007</option>



             <option value="2008" >2008</option>



             <option value="2009" >2009</option>



             <option value="2010" >2010</option>



             <option value="2011" >2011</option>



             <option value="2012" >2012</option>



             <option value="2013" >2013</option>



             <option value="2014" >2014</option>



             <option value="2015" >2015</option>



             <option value="2016" >2016</option>



            </select>

/



            <select name="n7105357_20419172" onchange="setOptionValue('7105357', this.value, '姓名<BR>{}<BR>生日<BR>{1950-2016}/{1-12}/{1-31}<BR>职业<BR>{士|农|工|商}', '20419172');">

             <option value="" >请选择</option>



             <option value="1" >1</option>



             <option value="2" >2</option>



             <option value="3" >3</option>



             <option value="4" >4</option>



             <option value="5" >5</option>



             <option value="6" >6</option>



             <option value="7" >7</option>



             <option value="8" >8</option>



             <option value="9" >9</option>



             <option value="10" >10</option>



             <option value="11" >11</option>



             <option value="12" >12</option>



            </select>

/



            <select name="n7105357_20419172" onchange="setOptionValue('7105357', this.value, '姓名<BR>{}<BR>生日<BR>{1950-2016}/{1-12}/{1-31}<BR>职业<BR>{士|农|工|商}', '20419172');">

             <option value="" >请选择</option>



             <option value="1" >1</option>



             <option value="2" >2</option>



             <option value="3" >3</option>



             <option value="4" >4</option>



             <option value="5" >5</option>



             <option value="6" >6</option>



             <option value="7" >7</option>



             <option value="8" >8</option>



             <option value="9" >9</option>



             <option value="10" >10</option>



             <option value="11" >11</option>



             <option value="12" >12</option>



             <option value="13" >13</option>



             <option value="14" >14</option>



             <option value="15" >15</option>



             <option value="16" >16</option>



             <option value="17" >17</option>



             <option value="18" >18</option>



             <option value="19" >19</option>



             <option value="20" >20</option>



             <option value="21" >21</option>



             <option value="22" >22</option>



             <option value="23" >23</option>



             <option value="24" >24</option>



             <option value="25" >25</option>



             <option value="26" >26</option>



             <option value="27" >27</option>



             <option value="28" >28</option>



             <option value="29" >29</option>



             <option value="30" >30</option>



             <option value="31" >31</option>



            </select>

<BR>职业<BR>



            <select name="n7105357_20419172" onchange="setOptionValue('7105357', this.value, '姓名<BR>{}<BR>生日<BR>{1950-2016}/{1-12}/{1-31}<BR>职业<BR>{士|农|工|商}', '20419172');">

             <option value="" >请选择</option>



             <option value="士" >士</option>



             <option value="农" >农</option>



             <option value="工" >工</option>



             <option value="商" >商</option>



            </select>



             </span>

           </div>



          </div>







</div>

     </td></tr>





         <tr id="ta7105358" style=" padding: 3px; margin-top:10px; display: none">

          <td width="100%" height="50" align="left">



           <input type="hidden" name="questionid" value="7105358">

           <input type="hidden" name="answertype" value="1">

           <input type="hidden" name="q7105358" value="">

           <input type="hidden" name="b7105358" value="0">





          <span class="seq">5</span>.<span id="qq7105358">备用问题5&nbsp;<span id="nn7105358"></span></span>&nbsp;<br/>



<div style="margin-left:10px" >















          <div id="q7105358">





          </div>







</div>

     </td></tr>



<!-- captcha 安全碼 -->

<!--

     <tr><td width="100%" height="30" align="center" valign="middle">





<br>

        <img src="/captcha/captcha.asp" align="absmiddle" id="imgCaptcha" />&nbsp;

        <a href="javascript:void(0);" onClick="RefreshImage('imgCaptcha');">刷新</a><br />

          请输入验证码 <input type="text" name="txtCaptcha" id="txtCaptcha" value="" size="6"/>





     </td></tr>

-->

<tr><td width="100%" height="25" align="center" valign="middle">

    <input type="hidden" name="bshowbless" value="">

    <!--<br><input type="checkbox" name="bshowbless" value="1" style="vertical-align:middle">&nbsp;私人回复-->



  </td></tr>





     <tr><td width="100%" height="30" align="center" valign="middle">





     <!--<input type="submit" value=" 送 出 2">-->

     <!--onclick="isIns(); return false;"-->



     <input id="rsvp_btn" type="button" value=" 送 出 " >







<BR><BR>

     <div id="qrcode_B0ADF0FA96FBE0AC261" style="display: none;">













     </div>







     </td></tr>





    </table>



    </form>



<style style="display: none;">/* Gradient transparent - color - transparent */



hr.style-two {



    clear:left;

    border: 0;

    height: 1px;



/***

    background-image: -webkit-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0));

    background-image:    -moz-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0));

    background-image:     -ms-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0));

    background-image:      -o-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0));

***/



    border: 0;

    height: 0;

    border-top: 1px solid rgba(0, 0, 0, 0.1);

    border-bottom: 1px solid rgba(255, 255, 255, 0.3);



}



span.two{



  font-size: 8pt;

}



  .bless_sortable {

     display: block;

     width: 100%;

     list-style-type: none;

     margin: 0;

     padding: 0;

  }

  .bless_sortable li { float: left;}

  .bless_sortable li:first-child { text-align: left;width: 50%;}

  .bless_sortable li:last-child { text-align: right;width: 50%;}





  .bless_first {

     width: 100%;

     list-style-type: none;

     margin: 0;

     padding: 0;

     text-align: right;

  }





  .bless_other {

     display: block;

     width: 100%;

     list-style-type: none;

     margin: 0;

     padding: 0;

  }



  .bless_other li { width: 100%; float: left;}



</style>







    </div>



    <!--RSVP END-->



    </div>



        </div>

        </div>

        <div class="detail-br"><div class="detail-bl"><div class="detail-bm"></div></div></div>

        </div>

    </div>











    <h3 class="detail-compact" style="display:" id="invite_detail_title6141459" >



        <div name="button4" id="button4" class="button">

            <div class="button-tr"><div class="button-tl"><div class="button-tm"></div></div></div>

            <div class="button-mr">

            <div class="button-ml">

            <div class="button-mm">

                <a href="javaScript:void(0);"><img class="iconimage" alt="4.png" src="http://youvivid-assets.youvivid.net/css/dianna_royalred/images/icons/4.png"  border="0" align="absmiddle">&nbsp;<span id="invite_detail_name6141459" class="button-title">婚 宴 地 图</span>&nbsp;</a>

            </div>

            </div>

            </div>

            <div class="button-br"><div class="button-bl"><div class="button-bm"></div></div></div>

        </div>

    </h3>



    <div class="accordion" id="invite_detail_content6141459" >



    <div name="detail4" id="detail4"  class="detail">

        <div class="detail-tr"><div class="detail-tl"><div class="detail-tm"></div></div></div>

        <div class="detail-mr">

        <div class="detail-ml">

        <div class="detail-mm">





    <input type="hidden" name="invite_detail_mapimgurl6141459" id="invite_detail_mapimgurl6141459" value="">



    <img class="mapimg" id="invite_detail_mapimg6141459" style="width:100%; border:thin; border-style:solid; border-color:#999;" src="" width="100%"/>



    <div  id="map_canvas6141459" style="border:thin; border-style:solid; border-color:#999; margin-bottom:5px; width:100%; height:300px;"></div>





    <div id="map_direction6141459" style="width:100%" align="right">

        <input id="map_direction_button6141459" name="map_direction_button6141459" onclick="google_map_direction6141459();"  type="button"  value="地图导航子页" />

    <script language="javascript">

        function google_map_direction6141459(){



            //url_buf = "https://maps.google.com/maps?q=" + map6141459_latmarker+","+map6141459_lngmarker+"&z="+ map6141459_zoom ;

            url_buf = "http://maps.apple.com/?q=" + map6141459_latmarker+","+map6141459_lngmarker+"&z="+ map6141459_zoom ;



            //alert(url_buf);

            $("#jquery_jplayer_1").jPlayer("pause");



            window.open(url_buf);



        }

    </script>





    </div>







    <div id="map_desc6141459">中南海<br>地址：{场所地址}<br>电话：{联络电话}</div>







     <script language="javascript">

    $(document).ready(function() {

        //init

        if ($("#invite_detail_mapimgurl6141459").val() == '') {

            $("#invite_detail_mapimg6141459").hide();

            $("#map_canvas6141459").show();

            $("#map_direction6141459").show();

        } else {

            $("#invite_detail_mapimg6141459").show();

            $("#map_canvas6141459").hide();

            $("#map_direction6141459").hide();

        }





    });

    </script>











    </div>



        </div>

        </div>

        <div class="detail-br"><div class="detail-bl"><div class="detail-bm"></div></div></div>

        </div>

    </div>











    <h3 class="detail-deluxe" style="display:" id="invite_detail_title6141460" >



        <div name="button6" id="button6" class="button">

            <div class="button-tr"><div class="button-tl"><div class="button-tm"></div></div></div>

            <div class="button-mr">

            <div class="button-ml">

            <div class="button-mm">

                <a href="javaScript:void(0);"><img class="iconimage" alt="6.png" src="http://youvivid-assets.youvivid.net/css/dianna_royalred/images/icons/6.png"  border="0" align="absmiddle">&nbsp;<span id="invite_detail_name6141460" class="button-title">喜 宴 提 醒</span>&nbsp;</a>

            </div>

            </div>

            </div>

            <div class="button-br"><div class="button-bl"><div class="button-bm"></div></div></div>

        </div>

    </h3>



    <div class="accordion" id="invite_detail_content6141460" >



    <div name="detail6" id="detail6"  class="detail">

        <div class="detail-tr"><div class="detail-tl"><div class="detail-tm"></div></div></div>

        <div class="detail-mr">

        <div class="detail-ml">

        <div class="detail-mm">





<script>







    //var countdownendtime = '2016/7/15 下午 12:00:00';

    var countdown_yy = 2016;

    var countdown_mm = 6;

    var countdown_dd = 15;

    var countdown_hh = 12;

    var countdown_mn = 0;



    CountDownTimer('countdown');



    function CountDownTimer(id)

    {



        var _second = 1000;

        var _minute = _second * 60;

        var _hour = _minute * 60;

        var _day = _hour * 24;

        var timer;



        function showRemaining() {

            var end = new Date(countdown_yy,countdown_mm,countdown_dd,countdown_hh,countdown_mn,0);

            var now = new Date();

            var distance =  end - now;

            //alert (end + "\n" + now + "\n" + distance);

            if (distance < 0) {



                clearInterval(timer);

                document.getElementById(id).innerHTML = '已经到期了!';



                return;

            }

            var days = Math.floor(distance / _day);

            var hours = Math.floor((distance % _day) / _hour);

            var minutes = Math.floor((distance % _hour) / _minute);

            var seconds = Math.floor((distance % _minute) / _second);

            document.getElementById(id).innerHTML = days + '天 ';

            document.getElementById(id).innerHTML += hours + '时 ';

            document.getElementById(id).innerHTML += minutes + '分 ';

            document.getElementById(id).innerHTML += seconds + '秒';

        }



        timer = setInterval(showRemaining, 1000);

    }



</script>



            <div style="margin-top:0px; margin-bottom:25px">

                <div id="countdowntitle" style="font-size:14px; margin-bottom:5px" align="center">

                    <span>距离开始时间还有</span>

                </div>

                <div style="width:100%" align="center">

                    <div style=" width:80%; height:20px; border-radius:4px; border:1px solid #777; background-color:#FFF; font-size:16px; color:#777;" id="countdown"></div>

                </div>

            </div>







<div id="remindtitle" style="padding-bottom:10px" ><span>亲爱的您容易健忘吗？输入您的姓名与手机号码， 婚宴前，我们会有贴心的手机短信提醒</span></div>





<form name="rform" action="mobile_invite_remind_act.asp" method="post" onsubmit="javascript: return isIns2();" style="display:block;">



  <input type="hidden" name="sn" value="AJTAR">

  <input type="hidden" name="invite_id" value="570359">

  <input type="hidden" name="invite_usrcookies" value="B0ADF0FA96FBE0AC261">

  <input type="hidden" name="remindtime" value="'2016/7/12 14:0:0'">

  <input type="hidden" name="remindphone_data" value="" >





  <table width="100%" cellpadding="3" cellspacing="3" border="0">

   <tr>

    <td nowrap height="30" align="right" >

        姓　　名&nbsp;

    </td>

    <td height="30" >

        <input type="text" name="remindname" value="" size="18">

    </td>

   </tr>

   <tr>

    <td nowrap height="30" align="right" >

        手机号码&nbsp;

    </td>

    <td height="30" >

        <input name="remindphone" type="text" value="" size="18">

    </td>

   </tr>





   <tr>

    <td height="45" colspan="2" align="center">

        <input type="submit" value=" 送 出 " onclick="alertify.alert('请帖尚未发布，无法送出提醒'); return false;">

    </td>

   </tr>







  </table>



</form>





    </div>



        </div>

        </div>

        <div class="detail-br"><div class="detail-bl"><div class="detail-bm"></div></div></div>

        </div>

    </div>











    <h3 class="detail-compact" style="display:" id="invite_detail_title6141461" >



        <div name="button5" id="button5" class="button">

            <div class="button-tr"><div class="button-tl"><div class="button-tm"></div></div></div>

            <div class="button-mr">

            <div class="button-ml">

            <div class="button-mm">

                <a href="javaScript:void(0);"><img class="iconimage" alt="5.png" src="http://youvivid-assets.youvivid.net/css/dianna_royalred/images/icons/5.png"  border="0" align="absmiddle">&nbsp;<span id="invite_detail_name6141461" class="button-title">喜 讯 分 享</span>&nbsp;</a>

            </div>

            </div>

            </div>

            <div class="button-br"><div class="button-bl"><div class="button-bm"></div></div></div>

        </div>

    </h3>



    <div class="accordion" id="invite_detail_content6141461" >



    <div name="detail5" id="detail5"  class="detail">

        <div class="detail-tr"><div class="detail-tl"><div class="detail-tm"></div></div></div>

        <div class="detail-mr">

        <div class="detail-ml">

        <div class="detail-mm">





<!--



            <div style="margin-top:5px; margin-bottom:15px">

                <div style="font-size:14px; margin-bottom:5px">你可以将请帖转发到朋友手机:</div>

                <div style="width:100%" align="center">

                    <textarea  name="invitesms" cols="20" rows="5" id="invitesms" style="border:1px solid #777; background-color:#FFC; font-size:20px; color:#777;" title="请按滑鼠右键选择复制" alt="请按滑鼠右键选择复制" >本请帖尚未发布</textarea>



                    <div style="font-size:12px; margin-top:5px">请复制以上文字后, 贴上手机短信,<br>微信, QQ传送给朋友</div>

                </div>

            </div>

<script>

    $(function() {

        $('#invitesms').click(function(){

                if($.browser.msie) this.createTextRange().select();

                else {

                    this.selectionStart = 0;

                    this.selectionEnd = this.value.length;

                }

        });

    })

</script>

-->



                <div style="font-size:14px; margin-bottom:15px; -webkit-user-select: none;">分享网址:</div>

                <div style="width:100%; margin-bottom:15px;" align="center">

                    <div style="width:100%; padding-top:4px;padding-bottom:4px; border-radius:4px; border:1px solid #777; background-color:#FFF; font-size:14px; letter-spacing:-1px; color:#777;" >

                         本请帖尚未发布

                    </div>

                </div>



<script>

    $(function() {

        $('#inviteurl').click(function(){

                if($.browser.msie) this.createTextRange().select();

                else {

                    this.selectionStart = 0;

                    this.selectionEnd = this.value.length;

                }

        });

    })

</script>







<script>



/**

 * Utility functions for linking into native messaging applications (currently SMS and WhatsApp) without prepoluating a phone number.

 *

 * Plinks is based on this blog post I wrote earlier this year:

 * http://blog.julianklotz.de/2015/03/14/the-sms-uri-scheme/

 *

 * MIT license.

 */



window.plinks = (function() {

    'use strict';



    var exports = {};



    var isIosDevice = (function() {

        var ua = navigator.userAgent.toLowerCase();

        if (ua.indexOf("iphone") > -1 || ua.indexOf("ipad") > -1) {

            return true;

        } else {

            return false;

        }

    })();



    /**

     * Call plinks.smsLink('myMessage') to get a proper SMS link href

     * The phone number cannot be pre-populated.

     */

    exports.smsLink = function(message) {

        var msg = encodeURIComponent(message), href;



        // No more support for iOS 6 + 7

        if(isIosDevice) {

            href = "sms:&body=" + msg;

        } else {

            href = "sms:?body=" + msg;

        }



        return href

    };



    exports.whatsAppLink = function(message) {

        var msg = encodeURIComponent(message), href;

        href = "whatsapp://send?text=" + msg;



        return href

    }



    return exports

}).call(this);

</script>



                <div id="fb-root" ></div>

                <script>(function(d, s, id) {

                  var js, fjs = d.getElementsByTagName(s)[0];

                  if (d.getElementById(id)) return;

                  js = d.createElement(s); js.id = id;

                  js.src = "//connect.facebook.net/zh_CN/sdk.js#xfbml=1&appId=113568098684585&version=v2.0";

                  fjs.parentNode.insertBefore(js, fjs);

                }(document, 'script', 'facebook-jssdk'));</script>

                <div align="left" >

                    <div class="fb-send" style="float:left; width:33%;" ></div>

                    <div style="float:left; width:33%;" onClick="javascript:location.href = plinks.smsLink('安哥与文妹婚宴邀约 http://cn.youvivid.net/v/AJTAR');" ><img src="images/sms_100x40.png" alt="" width="50" height="20" /></div>

                    <div style="float:left; width:33%;" onClick="javascript:location.href = plinks.whatsAppLink('安哥与文妹婚宴邀约 http://cn.youvivid.net/v/AJTAR');"><img src="images/whatsapp_144x40.png" alt="" width="72" height="20" /></div>

                </div>

                   <br>

                   <br>





                <!-- AddToAny BEGIN -->



                <div class="a2a_kit a2a_kit_size_32 a2a_default_style" style="margin: 0 auto; width: 100%;" id="share_buttons">

                <a class="a2a_button_line" title="Line"></a>

                <a class="a2a_button_whatsapp" title="WhatsApp"></a>

                <a class="a2a_button_facebook" title="Facebook"></a>

                <a class="a2a_button_twitter" title="Twitter"></a>

                <a class="a2a_button_linkedin" title="Linkedin"></a>

                <a class="a2a_button_email" title="Email"></a>

                <a class="a2a_dd" href="https://www.addtoany.com/share_save?linkurl=http%3A%2F%2Fcn%2Eyouvivid%2Enet%2Fv%2FAJTAR&amp;linkname=%E5%AE%89%E5%93%A5%E4%B8%8E%E6%96%87%E5%A6%B9%E5%A9%9A%E5%AE%B4%E9%82%80%E7%BA%A6"  title="More sharing options"></a>

                </div>





                <script type="text/javascript">





                var a2a_config = a2a_config || {};

                a2a_config.prioritize = ["qzone", "blogger_post", "delicious", "digg", "google_bookmarks"];

                a2a_config.linkname = "安哥与文妹婚宴邀约";

                a2a_config.linkurl = "http://youvivid.net/v/ajtar";

                a2a_config.locale = "zh_CN";

                //a2a_config.num_services = 6;

                </script>

                <script type="text/javascript" src="//static.addtoany.com/menu/page.js"></script>

                <!-- AddToAny END -->





    </div>



        </div>

        </div>

        <div class="detail-br"><div class="detail-bl"><div class="detail-bm"></div></div></div>

        </div>

    </div>











    <h3 class="detail-deluxe" style="display:" id="invite_detail_title6141462" >



        <div name="button1007" id="button1007" class="button">

            <div class="button-tr"><div class="button-tl"><div class="button-tm"></div></div></div>

            <div class="button-mr">

            <div class="button-ml">

            <div class="button-mm">

                <a href="javaScript:void(0);"><img class="iconimage" alt="7.png" src="http://youvivid-assets.youvivid.net/css/dianna_royalred/images/icons/7.png"  border="0" align="absmiddle">&nbsp;<span id="invite_detail_name6141462" class="button-title">上 传 相 册</span>&nbsp;</a>

            </div>

            </div>

            </div>

            <div class="button-br"><div class="button-bl"><div class="button-bm"></div></div></div>

        </div>

    </h3>



    <div class="accordion" id="invite_detail_content6141462" >



    <div name="detail1007" id="detail1007"  class="detail">

        <div class="detail-tr"><div class="detail-tl"><div class="detail-tm"></div></div></div>

        <div class="detail-mr">

        <div class="detail-ml">

        <div class="detail-mm">





  <!--<div id="slideshow" style="width:300px; height:300px;"></div>-->





    <div id="guest_album_desc6141462">婚礼当天请协助我们拍摄现场照片上传，保留更多美好回忆，谢谢</div>











<!-- plu upload start -->



<div id="plu_container6141462">

<input id="pickfiles6141462" type="button" value=" 上传文件 "  >

<!--

<input id="btnCancel6141462" type="button" value="取消上传" onClick="location.reload(true);"  style="margin-left: 1px; font-size: 8pt; height: 22px;" />

-->

</div>





<div id="filelist6141462">Initializing...</div>

<div style="color:#F00" id="console6141462"></div>



<script type="text/javascript">

// Custom example logic









    Date.prototype.getWeek = function() {

        var determinedate = new Date();

        determinedate.setFullYear(this.getFullYear(), this.getMonth(), this.getDate());

        var D = determinedate.getDay();

        if(D == 0) D = 7;

        determinedate.setDate(determinedate.getDate() + (4 - D));

        var YN = determinedate.getFullYear();

        var ZBDoCY = Math.floor((determinedate.getTime() - new Date(YN, 0, 1, -6)) / 86400000);

        var WN = 1 + Math.floor(ZBDoCY / 7);

        return WN;

    }



    var s_filesize = 0;



    var now = new Date();

    var codepath = "images/" + now.getFullYear() + '/' + now.getWeek() + '/';

    var iLen = ('0' + (now.getMonth()+1).toString()).length;

    var code = now.getFullYear().toString().substring(4, 2) + ('0' + (now.getMonth()+1).toString()).substring(iLen, iLen - 2) + now.getDate() + Math.uuid(13) + '.jpg';







    var keys3 = '';







var upload_counter=1;

var upload_success_total=0;

var bInitUploader6141462=0;



    var uploader6141462 = new plupload.Uploader({

        runtimes : 'html5,flash,html4',

        //runtimes : 'html5',

        browse_button : 'pickfiles6141462', // you can pass an id...

        container: document.getElementById('plu_container6141462'), // ... or DOM Element itself

        //url : 'upload.php',

        url : 'http://youvividcnupload2.youvivid.net',



        multipart: true,





        flash_swf_url : 'plu218/js/Moxie.swf',

        silverlight_xap_url : 'plu218/js/Moxie.xap',

    //    unique_names : true,

        multi_selection : true,





        resize: {width : 1500, height : 1500, quality : 76, crop:false, enabled:true, preserve_headers: false}, //must have for flash resize





        filters : {

            max_file_size : '40mb',

            //mime_types: [{title : "", extensions : ""}]

            mime_types: [

                {title : "Image files", extensions : "jpg,jpeg,JPG,JPEG"}

            ]



        },





        init: {

            PostInit: function() {

                document.getElementById('filelist6141462').innerHTML = '';



                //document.getElementById('uploadfiles').onclick = function() {

                //  uploader.start();

                //  return false;

                //};

            },



            QueueChanged: function(up) {



                document.getElementById('console6141462').innerHTML = '';

            },



            FilesAdded: function(up, files) {



                if(up.files.length > 4)

                 {

                    up.splice();

                    document.getElementById('filelist6141462').innerHTML = '';

                    alert("选取上传的文件数目超过上限了.\n : 请选取最多不能超过 4个文件.");



                    //alert('no more than '+ '4' + ' file(s)');

                 } else {

                    plupload.each(files, function(file) {

                        document.getElementById('filelist6141462').innerHTML += '<div id="' + file.id + '">' + file.name + ' (' + plupload.formatSize(file.size) + ') <b></b></div>';

                    });

                    up.start();

                 }





            },



            UploadProgress: function(up, file) {

                document.getElementById(file.id).getElementsByTagName('b')[0].innerHTML = '<span>' + file.percent + "%</span>";

            },



            Error: function(up, err) {



                document.getElementById('console6141462').innerHTML += '<div>' + "\nError #" + err.code + ": " + err.message + '<b></b></div>';





                //document.getElementById('console').appendChild(document.createTextNode("\nError #" + err.code + ": " + err.message));

            },





            BeforeUpload: function(up, file) {







                if (upload_counter == 1){

                    now = new Date();

                    iLen = ('0' + (now.getMonth()+1).toString()).length;

                    code = now.getFullYear().toString().substring(4, 2) + ('0' + (now.getMonth()+1).toString()).substring(iLen, iLen - 2) + now.getDate() + Math.uuid(13) + '.jpg';



                    keys3 = codepath + 'f' + code;

                    up.setOption('resize', {width : 1500, height : 1500, quality : 76, crop:false, enabled:true,  preserve_headers: false});

                    s_filesize = file.size

                }



                if (upload_counter == 2){

                    keys3 = codepath + 'e' + code;

                    up.setOption('resize', {width : 150, height : 150, quality : 85, crop:false, enabled:true,  preserve_headers: false});

                }



                if (upload_counter == 3){

                    keys3 = codepath + 't' + code;

                    up.setOption('resize', {width : 100, height : 100, quality : 85, crop:false, enabled:true,  preserve_headers: false});

                }else{

                }





                var xmlhttp;

                //var params = "bucket=" + "youvividcnupload2" + "&filename="+encodeURIComponent(file.name) +"&key="+keys3 + "&rnd=" + Math.random();

                var params = "bucket=" + "youvividcnupload2" +"&key="+keys3 + "&rnd=" + Math.random();

                var url = "/services/getsignature_plu_aliyun.php";

            //alert(params);

                if( window.ActiveXObject){

            //alert('window.ActiveXObject');



                    xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');

                    xmlhttp.open( 'POST', url, false);

                    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

                    xmlhttp.send(params);

                    if( xmlhttp.readyState == 4 && xmlhttp.status == 200){



                        var response = xmlhttp.responseText; //?取服?器返回的JSON字串



                        var arr = response.split(',');



                        key = arr[0];

                        hmacSignature = arr[1];

                        encodedPolicy = arr[2];







                        up.setOption('multipart_params', {'key': key,'acl': 'public-read','OSSAccessKeyId' : '5Z9wc4CEiAAhVaQc','policy': encodedPolicy,'signature': hmacSignature,'success_action_status' : '201','x-amz-meta-sig': 'youvivid'  });



                    }

                }

                else if( window.XMLHttpRequest){

                //alert('window.XMLHttpRequest');



                    xmlhttp = new XMLHttpRequest();



                    xmlhttp.open( 'POST', url, false);

                    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

                    //xmlhttp.setRequestHeader("Content-length", params.length);

                    //xmlhttp.setRequestHeader("Connection", "close");

                    xmlhttp.send(params);

                    if( xmlhttp.readyState == 4 && xmlhttp.status == 200){



                        var response = xmlhttp.responseText; //?取服?器返回的JSON字串



                        var arr = response.split(',');



                        key = arr[0];

                        hmacSignature = arr[1];

                        encodedPolicy = arr[2];



                        up.setOption('multipart_params', {'key': key,'acl': 'public-read','OSSAccessKeyId' : '5Z9wc4CEiAAhVaQc','policy': encodedPolicy,'signature': hmacSignature,'success_action_status' : '201','x-amz-meta-sig': 'youvivid'  });

                    }

                }









                //file.name= "80_" + upload_counter + ".jpg";







                //alert(up.getOption('resize').width);

                //alert(up.getOption('multipart_params').signature);



                ////alert('upload_counter=' + upload_counter + ', key=' + key);







            },



            FileUploaded: function(up, file) {







                if (upload_counter ==3) {

                    upload_counter=0;



                    upload_success_total = upload_success_total + 1;



                    var xmlhttp3;



                    var url = "/services/updateFileData_guest.asp?bucket=youvividcnupload2.youvivid.net&s_filename=" + encodeURIComponent(file.name) + "&filename=" + code + "&filepath=" + codepath + "&s_filesize=" + s_filesize + "&filealbumid=6141462&sid=78155666&usrid=0&rnd=" + Math.random();

                    ////alert(url);

                    if( window.ActiveXObject){



                      xmlhttp3 = new ActiveXObject('Microsoft.XMLHTTP');

                      xmlhttp3.open( 'GET', url, false);

                      xmlhttp3.onreadystatechange = function(){



                         if( xmlhttp3.readyState == 4 && xmlhttp3.status == 200){



                            var response = xmlhttp3.responseText; //?取服?器返回的JSON字串



                              //alert('response1:' + response);



                            s3_fileimage_path = "http://youvividcnupload2.youvivid.net" + "/" + codepath + "f" + code;

                            s3_editimage_path = "http://youvividcnupload2.youvivid.net" + "/" + codepath + "e" + code;



                            addPhotoSwipe6141462(-1, s3_editimage_path, s3_fileimage_path, -1);

                            $('#nopicture6141462').html("");

                            if (response != 'OK') {

                                alertify.alert('本相册相片总数已经超过限制，无法继续上传！');

                                up.splice();

                                up.disableBrowse(true);

                                $("#pickfiles6141462").prop('disabled', true);



                            }





                         }

                      }



                      xmlhttp3.send(null);



                    }

                    else if( window.XMLHttpRequest){



                      xmlhttp3 = new XMLHttpRequest();



                      xmlhttp3.open( 'GET', url, false);

                      xmlhttp3.onreadystatechange = function(){



                         if( xmlhttp3.readyState == 4 && xmlhttp3.status == 200){



                            var response = xmlhttp3.responseText; //?取服?器返回的JSON字串

                              //alert('response2:' + response);

                            s3_fileimage_path = "http://youvividcnupload2.youvivid.net" + "/" + codepath + "f" + code;

                            s3_editimage_path = "http://youvividcnupload2.youvivid.net" + "/" + codepath + "e" + code;



                            addPhotoSwipe6141462(-1, s3_editimage_path, s3_fileimage_path, -1);

                            $('#nopicture6141462').html("");

                            if (response != 'OK') {

                                alertify.alert('本相册相片总数已经超过限制，无法继续上传！');

                                up.splice();

                                up.disableBrowse(true);

                                $("#pickfiles6141462").prop('disabled', true);



                            }





                         }

                      }

                      xmlhttp3.send(null);





                    }



                    ////alert("已完成");

                } else {

                    file.loaded = 0;

                    file.percent = 0;

                    file.status = plupload.QUEUED;

                    up.trigger("QueueChanged");

                    up.refresh();

                }







                upload_counter = upload_counter + 1;







            },



            UploadComplete: function(up, file) {

                // Called when all files are either uploaded or failed

                //document.getElementById(this.customSettings.cancelButtonId).disabled = true;



                up.splice(); //

                document.getElementById('filelist6141462').innerHTML = '';

                upload_counter=1;

                upload_success_total=0;

            }









        }

    });









        $(function() {



            uploader6141462.init();

            bInitUploader6141462 = 1;



        });







</script>





<!-- plu upload end -->







    <br>





    <span id="nopicture6141462">没有图片</span>









    <ul id="Gallery6141462" class="gallery">





<!--<li><a href="uploads/image/f0904273C82W2683.jpg" rel="external"><img src="uploads/image/f0904273C82W2683.jpg" alt="" /></a></li>-->



        <div id="page-6141462-0">









        </div>



    </ul>







    <script type="text/javascript">



        //var cw = $('.gallery li').width() * 0.666 ; // there is no li exist on initial

/*

        $(document).ready(function() {



                var cw = $('.gallery').width() * 0.33333 ; // 0.222 = 0.3333*0.6666

                alert("ready: cw="+cw + ", gallery width=" + $('.gallery').width());

                $('.gallery li a .thumb').css({

                    'height': cw + 'px'

                });

        });



        $(window).resize(function() {

            var cw = $('.gallery').width() * 0.33333 ; // 0.222 = 0.3333*0.6666

                alert("resize: cw="+cw + ", gallery width=" + $('.gallery').width());

            $('.gallery li a .thumb').css({

                'height': cw + 'px'

            });

        });

*/

    </script>









    <script type="text/javascript">



     var instance6141462 = null;

     var options6141462 = { captionAndToolbarAutoHideDelay: 0, captionAndToolbarShowEmptyCaptions:false, autoStartSlideshow: false, slideSpeed:300, nextPreviousSlideSpeed:250

      //  ,preventHide: true

    };



        (function(window, $, PhotoSwipe){







                $(document).ready(function(){



                    if ($('#Gallery6141462 li').size() > 0){



                    //instance = window.Code.PhotoSwipe.attach( window.document.querySelectorAll('#Gallery a'), options );

                            instance6141462 =  $("#Gallery6141462 a").photoSwipe(options6141462);

 /*

                            instance6141462.addEventHandler( window.Code.PhotoSwipe.EventTypes.onShow, function(e){



                    setTimeout( function(){

                        instance6141462.resetPosition(); //redraw photoswipe

                    }, 120);



                            });



                            instance6141462.addEventHandler( window.Code.PhotoSwipe.EventTypes.onDisplayImage, function(e){





                    setTimeout( function(){

                        $(window).scrollTop(0);

                        instance6141462.resetPosition(); //redraw photoswipe

                    }, 120);



                            });



                            instance6141462.addEventHandler( window.Code.PhotoSwipe.EventTypes.onBeforeShow, function(e){



                    $(window).scrollTop(0);

                    //$("#MainContent").css("position","fixed");

                    //$("body").css("position","fixed");



                    //$("#PS").css("width", 200);

                    //$("#PS").css("height", 200);

                            });



                            instance6141462.addEventHandler( window.Code.PhotoSwipe.EventTypes.onBeforeHide, function(e){



                                //$("#MainContent").css("position","static");

                                //$("body").css("position","static");



                    //$("#PS").css("width", 1);

                    //$("#PS").css("height", 1);

                            });

*/



              }





            });











        }(window, window.jQuery, window.Code.PhotoSwipe));









  function addPhotoSwipe6141462(fileid, thumbnailurl, fileurl, photocount){





            var li;



            if (fileid == -1) {

                li = $('<li/>').css('width', '25%').append( $('<a/>').attr('href', fileurl)

                  .append($('<div class="thumb" />').attr('id', fileid).css('background-image', 'url('+thumbnailurl+')').css('min-height', '55px').append($('<img />').attr('src', 'images/spacer.gif').attr('width', '100%')

                  ))).prependTo('ul#Gallery6141462');

            } else {

                li = $('<li/>').css('width', '25%').append( $('<a/>').attr('href', fileurl)

                  .append($('<div class="thumb" />').attr('id', fileid).css('background-image', 'url('+thumbnailurl+')').css('min-height', '55px').append($('<img />').attr('src', 'images/spacer.gif').attr('width', '100%')

                  ))).appendTo('ul#Gallery6141462');

            }







            if ($("#Gallery6141462 li").size() == photocount | photocount==-1){





                    instance6141462 =  $("#Gallery6141462 a").photoSwipe(options6141462);





            }

  }



    </script>







<div style="width:100%; height:3px"></div>



<div id="PS" style=" overflow: hidden; position: relative;"></div>





    </div>



        </div>

        </div>

        <div class="detail-br"><div class="detail-bl"><div class="detail-bm"></div></div></div>

        </div>

    </div>







   <div id="accordion_bottom"></div>



</div>













<!--<div id="PhotoSwipeTarget"></div>-->



<div id="footer" ><div id="copyright"><div id="copyright-text"><div id="copyright-text-content">

    (免费体验版限制最多5个手机打开)

</div></div></div></div>



<a id="autoMobileVideo"  href="mobile_invite_autovideo.asp?sn=AJTAR&autovideourl=http://youvivid-streaming.oss.aliyuncs.com/IVT_template/7n8_ihJv6E651-EJy6n4OA.mp4&ts=1469747527"></a>



</div>

</div>



<div id="jquery_jplayer_1" style=" width:1px; height:1px"></div>



</body>







</html>


