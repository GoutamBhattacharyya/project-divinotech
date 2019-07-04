<style type="text/css">
    p {
        font-family: 'bebas_neuebook';
}
</style>
<!-- Modal -->
<?php
session_start(); 
 if(isset($_SESSION['browser_id']))  { ?>
<div class="modal fade mod" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
    <div class="modal-dialog" role="document"> 
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
        </div>
        <div class="modal-body">
        <!-- <iframe width="100%" height="600" src="https://www.youtube.com/embed/jqIXnyL8B1k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
            <video id="videoPlayer" width="100%" height="600" controls>
                <source src="images/divinotech_video_trial.mp4" type="video/mp4">
                <source src="images/divinotech_video_trial.webm" type="video/webm">
                Your browser does not support the video tag.
            </video>
        </div>
        </div>
    </div>
</div>

<script>
    $('#myModal').modal('hide')
</script>

<?php } ?>
<div class="rightbar_side">
<div class="block_cnt">
    <div class="erp apps">
        <div class="up">
            <div class="arrow_upper">
                <div class="arrow_Upleft" id="erp19">
                    <div class="arrow">
                        <div class="" id="line19"></div>
                        <div class="" id="arrbox19"></div>
                    </div>
                    <div class="lopo applopo1">
                    <span id="l1"  class="poppy appbase1" data-container="body" data-toggle="popover" data-placement="right"
                        data-content="<p style=&quot;text-align:justify;background-color:#ffffff; padding-top:10px; padding-left:10px; padding-right:10px;  font-family: 'Roboto', sans-serif;&quot;>A mobile application is more efficient because it is easily accessible. It offers the user with a personalized experience  ...</p><a href=&quot;apps-efficiency.html#efficiency&quot; id=&quot;view4&quot; style=&quot;color:#000; letter-spacing:0px; margin-top:5px; border-bottom: 2px solid #000; font-size:14px; padding:0px; height:20px; margin-bottom:20px; margin-left:10px; font-weight:700;&quot;>VIEW MORE</a>"
        data-original-title="" title=""></span></div>
                    <p class="" id="erp19_" style="display:none">Efficiency</p>
                    
                </div>

                <div class="arrow_UpRight" id="erp21">
                    <div class="arrow">
                        <div class="" id="line21"></div>
                        <div class="" id="arrbox21"></div>
                    </div>
                    <div class="lopo2 applopo2">
                    <span id="l2i" class="poppy appbase2" data-container="body" data-toggle="popover" data-placement="left"
                        data-content="<p style=&quot;text-align:justify;background-color:#ffffff; padding-top:10px; padding-left:10px; padding-right:10px;  font-family: 'Roboto', sans-serif;&quot;>A mobile application allows the user to access, review, retain, reply and manage the process from anywhere  ...</p>
                        <a href=&quot;apps-efficiency.html#improves-productivity&quot; id=&quot;view4&quot; style=&quot;color:#000; letter-spacing:0px; margin-top:5px; border-bottom: 2px solid #000; font-size:14px; padding:0px; height:20px; margin-bottom:20px; margin-left:10px; font-weight:700;&quot;>VIEW MORE</a>"
        data-original-title="" title=""></span></div>

                    <p class="" id="erp21_" style="display:none">Improved</p>
                    <p class="" id="erp21_1" style="display:none">Productivity</p>
                    
                </div>
            </div>  
        </div>
        <div class="mid">
            <h1><span class="tagline1" style="display:none">APP<span style="font-size:80px">s</span></span></h1>
            <div class="mid_list" style="display:none">
                <ul >
                    <li id="swap1">MOBILE</li>
                    <li id="swap2">APPLICATION</li>
                </ul>
            </div>
        </div>

        <div class="bottom">
            <div class="arrow_bottom">
                <div class="bottom_cnt">
                    <div class="arrow_BottomLeft" id="erp21">
                        <div class="arrow">
                            <div class="" id="line22"></div>
                            <div class="" id="arrbox22"></div>
                        </div>
                        <div class="lopo2 applopo3">
                        <span id="l3i" class="poppy appbase3" data-container="body" data-toggle="popover" data-placement="right" 
                        data-content="<p style=&quot;text-align:justify;background-color:#ffffff; padding-top:10px; padding-left:10px; padding-right:10px;  font-family: 'Roboto', sans-serif;&quot;>Ad and promotional campaigns can be run on mobile applications in a cost-effective manner. The ability to show display  ...</p>
                        <a href=&quot;apps-efficiency.html#advertisement-and-promotions&quot; id=&quot;view4&quot; style=&quot;color:#000; letter-spacing:0px; margin-top:5px; border-bottom: 2px solid #000; font-size:14px; padding:0px; height:20px; margin-bottom:20px; margin-left:10px; font-weight:700;&quot;>VIEW MORE</a>"
        data-original-title="" title=""></span>
                         </div>
                        <p class="" id="erp22_" style="display:none">Advertisement </p>
                        <p class="" id="erp22_1" style="display:none">And </p>
                        <p class="" id="erp22_2" style="display:none">Promotion </p>
                        
                    </div>

                    <div class="arrow_BottomMid" id="erp24">
                        <div class="arrow">
                            <div class="" id="line24"></div>
                            <div class="" id="arrbox24"></div>
                        </div>
                        <div class="lopo2 applopo4">
                        <span id="l4" class="poppy appbase4" data-container="body" data-toggle="popover" data-placement="left" 
                        data-content="<p style=&quot;text-align:justify;background-color:#ffffff; padding-top:10px; padding-left:10px; padding-right:10px;  font-family: 'Roboto', sans-serif;&quot;>It is very much easier to build direct communicational opportunities with the customer through mobile application  ...</p>
                        <a href=&quot;apps-efficiency.html#customer-service&quot; id=&quot;view4&quot; style=&quot;color:#000; letter-spacing:0px; margin-top:5px; border-bottom: 2px solid #000; font-size:14px; padding:0px; height:20px; margin-bottom:20px; margin-left:10px; font-weight:700;&quot;>VIEW MORE</a>"
        data-original-title="" title=""></span>
                       </div>
                        <p class="" id="erp24_" style="display:none">Customer </p>
                        <p class="" id="erp24_1" style="display:none">Service </p>
                          
                    </div>

                    <div class="arrow_BottomRight" id="erp25">
                        <div class="arrow">
                            <div class="" id="line25"></div>
                            <div class="" id="arrbox25"></div>
                        </div>
                        <div class="lopo2 applopo5">
                        <span id="l5" class="poppy appbase5" data-container="body" data-toggle="popover" data-placement="left" 
                        data-content="<p style=&quot;text-align:justify;background-color:#ffffff; padding-top:10px; padding-left:10px; padding-right:10px;  font-family: 'Roboto', sans-serif;&quot;>Mobile applications are more secured as compared to any other counterpart. Device-based security, biometrics ...</p>
                        <a href=&quot;apps-efficiency.html#security&quot; id=&quot;view4&quot; style=&quot;color:#000; letter-spacing:0px; margin-top:5px; border-bottom: 2px solid #000; font-size:14px; padding:0px; height:20px; margin-bottom:20px; margin-left:10px; font-weight:700;&quot;>VIEW MORE</a>"
        data-original-title="" title=""></span>
                         </div>
                        <p class="" id="erp25_" style="display:none">Security </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

</div>

<?php

if(!isset($_SESSION['browser_id'])) { ?>

<section class="end_bar endo">
    <div class="container-fluid">
        <div class="left">
            <button data-toggle="modal" data-target="#myModal" id="mod_btn" onclick="video_play()">
                <p style="font-family: 'Roboto', sans-serif;">PLAY</p><i class="fa fa-play" aria-hidden="true"></i>                            
            </button>
            <div class="pull-right" id="rp">
                <a href="apps-efficiency.html">
                    <div class="right_l">
                        <div class="circle_l"></div>
                        <div class="arrow_l"></div>
                    </div>
                </a>
            </div>
                
        </div>
    </div>
</section>

<!-- <footer>
    <div class="container">
        <div class="text-center">
            <p style="font-family: 'Roboto', sans-serif;">© Divinotech | Contact <a style="font-family: 'Roboto', sans-serif;" href="tel:0331246988">033-1246988</a></p>
        </div>
    </div>
</footer> -->
<script>
    

function video_play()
{
    var videoPlayer = document.getElementById('videoPlayer');
    videoPlayer.load();
    if (videoPlayer.paused == false) {
            videoPlayer.pause();
            videoPlayer.firstChild.nodeValue = 'Play';
        } else {
            videoPlayer.currentTime = 0;            
            videoPlayer.play();
            videoPlayer.firstChild.nodeValue = 'Pause';
        }
}

$('#myModal').click(function() {
    
     var videoPlayer = document.getElementById('videoPlayer');
    if (videoPlayer.paused == false) {
            videoPlayer.pause();
            videoPlayer.firstChild.nodeValue = 'Play';
            
        }
       
    });


</script>
<?php } 
else if($_SESSION['back']=='TEMP'){?>

<section class="end_bar endo">
    <div class="container-fluid">
        <div class="left">
            <button data-toggle="modal" data-target="#myModal" id="mod_btn" onclick="video_play()">
                <p style="font-family: 'Roboto', sans-serif;">PLAY</p><i class="fa fa-play" aria-hidden="true"></i>                            
            </button>
            <div class="pull-right" id="rp">
                <a href="about.html">
                    <div class="right_l">
                        <div class="circle_l"></div>
                        <div class="arrow_l"></div>
                    </div>
                </a>
            </div>
                
        </div>
    </div>
</section>

<!-- <footer>
    <div class="container">
        <div class="text-center">
            <p style="font-family: 'Roboto', sans-serif;">© Divinotech | Contact <a style="font-family: 'Roboto', sans-serif;" href="tel:0331246988">033-1246988</a></p>
        </div>
    </div>
</footer> -->
<script type="text/javascript">
    function video_play()
{
     
    var videoPlayer = document.getElementById('videoPlayer');
    if (videoPlayer.paused == false) {
            videoPlayer.pause();
            videoPlayer.firstChild.nodeValue = 'Play';
        } else {
            videoPlayer.play();
            videoPlayer.firstChild.nodeValue = 'Pause';
        }
}

$('#myModal').click(function() {
    
     var videoPlayer = document.getElementById('videoPlayer');
    if (videoPlayer.paused == false) {
            videoPlayer.pause();
            videoPlayer.firstChild.nodeValue = 'Play';
        }
       
    });

</script>
<?php } ?>
<style>
    #l1, #l2i, #l3i, #l4, #l5{display:none;}
</style>

<script> //animate over words

//erp12 word
var myapp1;
var myapp2;
var myapp3;
var myapp4;
var myapp5;
var myapp6;
var myapp7;
var myapp8;
var myapp9;
var myapp10;
var myapp11;


//function textanimation()
 //{
    // alert('Joy Maa kali');
    clearTimeout(myapp1);
    clearTimeout(myapp2);
    clearTimeout(myapp3);
    clearTimeout(myapp4);
    clearTimeout(myapp5);
    clearTimeout(myapp6);
    clearTimeout(myapp7);
    clearTimeout(myapp8);
    clearTimeout(myapp9);
    clearTimeout(myapp10);
    clearTimeout(myapp11);
    
 //}


        //erp19 word
        myapp1=setTimeout(function(){
            $('#line19').addClass("line line19"); 
            $('#arrbox19').addClass("arrowBox");
            $('#erp19_').addClass("ml17");
            
            $('#erp19_, #l1').delay( 2000 ).animate( { width: "hide" }) //erp19 word
            .animate( { width: "show" }, 1000);
            }, 2500);
        //erp19 word

        //erp21 word
        myapp2=setTimeout(function(){
            $('#line21').addClass("line line21"); 
            $('#arrbox21').addClass("arrowBox");
            $('#erp21_').addClass("ml17");
            
            $('#erp21_, #l2i').delay( 2000 ).animate( { width: "hide" }) //erp21 word
            .animate( { width: "show" }, 1000);

            $('#erp21_1, #l2i').delay( 3000 ).animate( { width: "hide" }) //erp21 word
            .animate( { width: "show" }, 1000);
            }, 6500);

        //     myapp3=setTimeout(function(){
        //     $('#line21').addClass("line line21"); 
        //     $('#arrbox21').addClass("arrowBox");
        //     $('#erp21_1').addClass("ml14");
            
        //     $('#erp21_1, #l2i').delay( 3000 ) //erp21 word
        // .animate( { width: "show" }, 1000);
        //     }, 6500);
            //erp21 word

            //erp22 word
            myapp4=setTimeout(function(){
            $('#line22').addClass("line line22"); 
            $('#arrbox22').addClass("arrowBox");
            $('#erp22_').addClass("ml15");
            
            $('#erp22_, #l3i').delay( 2000 ).animate( { width: "hide" }) //erp22 word
            .animate( { width: "show" }, 2800);

            $('#erp22_1, #l3i').delay( 4000 ).animate( { width: "hide" }) //erp22 word
            .animate( { width: "show" }, 1200);

            $('#erp22_2, #l3i').delay( 4500 ).animate( { width: "hide" }) //erp22 word
            .animate( { width: "show" },2800);
            }, 10000);

            // myapp5=setTimeout(function(){
            // $('#line22').addClass("line line22"); 
            // $('#arrbox22').addClass("arrowBox");
            // $('#erp22_1').addClass("ml16");
            
            // $('#erp22_1, #l3i').delay( 4000 ) //erp22 word
            // .animate( { width: "show" }, 1200);
            // }, 10000);

            // myapp6=setTimeout(function(){
            // $('#line22').addClass("line line22"); 
            // $('#arrbox22').addClass("arrowBox");
            // $('#erp22_2').addClass("ml17");
            
            // $('#erp22_2, #l3i').delay( 4500 ) //erp22 word
            // .animate( { width: "show" },2800);
            // }, 10000);
            //erp21 word
        
        //erp22 word
        // myapp7=setTimeout(function(){
        //     $('#line23').addClass("line line22"); 
        //     $('#arrbox23').addClass("arrowBox");
        //     $('#erp23_').addClass("ml18");
            
        //     $('#erp23_, #l4').delay( 2000 )  //erp22 word
        //     .animate( { width: "show" }, 2000);
        //     }, 16000);
            //erp22 word
                                      
            //erp24 word
         myapp8=setTimeout(function(){
            $('#line24').addClass("line line24"); 
            $('#arrbox24').addClass("arrowBox");
            $('#erp24_').addClass("ml19");
            
            $('#erp24_, #l4').delay( 2000 ).animate( { width: "hide" }) //erp24 word
            .animate( { width: "show" }, 2000);

            $('#erp24_1, #l4').delay( 3100 ).animate( { width: "hide" }) //erp24 word
            .animate( { width: "show" }, 2000);
            }, 17000); 

            // myapp9=setTimeout(function(){
            // $('#line24').addClass("line line24"); 
            // $('#arrbox24').addClass("arrowBox");
            // $('#erp24_1').addClass("ml20");
            
            // $('#erp24_1, #l5').delay( 3100 ) //erp24 word
            // .animate( { width: "show" }, 2000);
            // }, 17000); 

            // myapp10=setTimeout(function(){
            // $('#line24').addClass("line line24"); 
            // $('#arrbox24').addClass("arrowBox");
            // $('#erp24_2').addClass("ml21");
            
            // $('#erp24_2, #l5').delay( 4000 ) //erp24 word
            // .animate( { width: "show" }, 2000);
            // }, 17000);
            //erp24 word
            
            //erp25 word
         myapp11=setTimeout(function(){
            $('#line25').addClass("line line25"); 
            $('#arrbox25').addClass("arrowBox");
            $('#erp25_').addClass("ml22");
            
            $('#erp25_, #l5').delay( 1500 ).animate( { width: "hide" }) //erp25 word
            .animate( { width: "show" }, 2000);
            }, 21000);          
            
</script>

<script> //video play pause (youtube)

 $('.close').click(function(e) {
   e.preventDefault();
   $('.modal-body').children('iframe').attr('src', '');
 });

  $('#mod_btn').click(function(e) {
   e.preventDefault();
   $('.modal-body').children('iframe').attr('src', 'https://www.youtube.com/embed/jqIXnyL8B1k');
 });

 

</script>

<script>

    $(document).ready(function(){

        

        $(".tagline1").show();

        $(".mid_list").show();

        $(".tagline1").letterfx({"fx":"fade","backwards":false,"timing":450,"fx_duration":"1000ms","letter_end":"stay","element_end":"stay"});

        //$(".tagline2").letterfx({"fx":"fall","words":true,"timing":1600});

        //$(".tagline3").letterfx({"fx":"fall","words":true,"timing":2200});

    })

    

    jQuery(document).ready(function() {

        setTimeout(function() {

            $(".tagline").show(),

            $(".mid_list").show(),

            $(".tagline").letterfx({"fx":"fly-right fly-bottom spin","backwards":false,"timing":100,"fx_duration":"2000ms","letter_end":"stay","element_end":"stay"});

        }, 1200);

    });

</script>
<script>
    //middle word animation
    $(function(){
    // Our selector
    var $word1 = $("#swap1");
    var $word2 = $("#swap2");
    
    // Use lettering.js to wrap each character & word in a span tag
    $word1.lettering();
    $word2.lettering();
    // Our declations	
    var $span = $("span");
    var length = $span.length;
    var array = [];
    //alert(length);
    // Push reference to our array
    for(var i=1; i<=length; i++)
        array.push(i);
    
    // Randomise array
    shuffleArray(array);
    
    // Wrap each word in its own div so words don't split on line break
    $word1.wrapInner('<span class="word"></span>');
    $word2.wrapInner('<span class="word"></span>');
    
    var regEx = new RegExp(/<span class=\"char(\d+)\"> <\/span>/g);
    $word1.html($word1.html().replace(regEx,'</span><span class="word">'));
    $word2.html($word2.html().replace(regEx,'</span><span class="word">'));
    
    // Fire first animation
    setTimeout(function(){
        animateLetters(array,length,true);
    },500);
});

// Animate the letters
function animateLetters(array,length,animIn)
{	
    // Scale in or out?
    var scale = (animIn) ? 1 : 2.5;
    
    // Arrange array ordering
    var arrayToUse = (animIn) ? array : array.reverse();
    
    // Opacity value to use
    var opacity = (animIn) ? 1 : 0;
    
    // Loop through each letter, adding inline styles
    for(var i=0; i<=length; i++)
    {
        $(".char" + arrayToUse[i]).attr("style","opacity: " + opacity + "; transition-delay: " + (50 * i) + "ms; transform:perspective(1050px) rotateY(0deg) scale(" + scale + "); -webkit-transition-delay: " + (50 * i) + "ms; -webkit-transform:perspective(1050px) rotateY(0deg) scale(" + scale + ");");
    }
    
    // Flip animIn value for next animation
    animIn = (animIn) ? false : true;
    
    // Randomise array for next animate in
    array = (animIn) ? shuffleArray(array) : array;
    
    // How long before refiring?
    var timeout = (animIn) ? 3500 : 5000;
    
    // Animate out or show replay button
    setTimeout(function(){
        return;
        if(!animIn)
        {
            // Animate out
            animateLetters(array,length,animIn);
        } else {
            // Create replay button
            $("body").prepend('<button>Replay?</button>');
            $("button").on("click",function(){
                $(this).remove();
                // Replay animation
                setTimeout(function(){
                    animateLetters(array,length,true);
                },500);
                
            });
        }
    },timeout);
}

// Randomize array element order in-place. Using Fisher-Yates shuffle algorithm.
// Ref: http://stackoverflow.com/questions/2450954/how-to-randomize-shuffle-a-javascript-array
function shuffleArray(array)
{
    for (var i=array.length -1; i>0; i--)
    {
        var j = Math.floor(Math.random() * (i + 1));
        var temp = array[i];
        array[i] = array[j];
        array[j] = temp;
    }
    return array;
}
</script>



<script>
    $(document).ready(function(){
        
        $(".tagline1").show();
        $(".tagline1").letterfx({"fx":"fade","backwards":false,"timing":450,"fx_duration":"1000ms","letter_end":"stay","element_end":"stay"});
        //$(".tagline2").letterfx({"fx":"fall","words":true,"timing":1600});
        //$(".tagline3").letterfx({"fx":"fall","words":true,"timing":2200});
    })
    
    jQuery(document).ready(function() {
        setTimeout(function() {
            $(".tagline").show(),
            $(".tagline").letterfx({"fx":"fly-right fly-bottom spin","backwards":false,"timing":100,"fx_duration":"2000ms","letter_end":"stay","element_end":"stay"});
        }, 1200);
    });
</script>


<script> // popover 
    $(".poppy").popover({ trigger: "manual" , html: true, animation:false})
    .on("mouseenter", function () {
        var _this = this;
        $(this).popover("show");
        $(".popover").on("mouseleave", function () {
            $(_this).popover('hide');
        });
    }).on("mouseleave", function () {
        var _this = this;
        setTimeout(function () {
            if (!$(".popover:hover").length) {
                $(_this).popover("hide");
            }
        }, 300);
});
</script>


<script>
$(function () {//mouseover animate
    $("#rp, #view, .logo img, #nav-icon2, #lp, #bx1, .accord .ptm i, .accord .ptm, .owl-prev, .owl-next, a, button, #psh, a#rp, #mod_btn p, #mod_btn p i").mouseover(function () {
        $(this).css({ "opacity": 0.2, "cursor": "url(\"images/cursor_select.png\"), auto", "transition": "linear 2s" });
        $(this).animate({ "opacity": 1, "cursor": "url(\"images/cursor_select.png\"), auto", "transition": "linear 2s" }, {
            duration: 5000,
            width: "linear",
            height: "easeOutBounce",
        }
        ).fadeIn(2000);
    });
})
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-136015334-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-136015334-1');
</script>
