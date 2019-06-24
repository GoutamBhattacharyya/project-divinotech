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
            <video id="videoPlayer" width="100%" height="600" controls >
                <source src="images/divinotech_video_trial.mp4" type="video/mp4">
                <source src="images/divinotech_video_trial.webm" type="video/webm">
                Your browser does not support the video tag.
            </video> 

        </div>

        </div>

    </div>

</div>



<script>

    $('#myModal').modal('hide');

</script>

<?php } ?>

<div class="rightbar_side">

    <div class="block_cnt">

        <div class="erp">

            <div class="up">

                <div class="arrow_upper">

                    <div class="arrow_Upleft" id="erp1">

                        <div class="arrow">

                            <div class="" id="line1"></div>

                            <div class="" id="arrbox1"></div>

                        </div>

                        <!--<div class="black_div" id="black_div1"></div>-->

                        <div class="lopo lopo6">

                            <span id="l1" class="poppy erpbase0" data-container="body" data-toggle="popover" data-placement="right" 

                            data-content="<p style=&quot;text-align:justify;background-color:#ffffff; padding-top:10px; padding-left:10px; padding-right:10px; font-family: 'Roboto', sans-serif;&quot;>It takes the workforce teaming up and filling in as a group for an organization to run smoothly  ...</p>

                            <a href=&quot;erp-team-collaboration.html#enterprise-resource-planning&quot; id=&quot;view4&quot; style=&quot;color:#000; letter-spacing:0px; margin-top:5px; border-bottom: 2px solid #000; font-size:14px; padding:0px; height:20px; margin-bottom:20px; margin-left:10px; font-weight:700;&quot;>VIEW MORE</a>"

                            data-original-title="" title=""></span>

                        </div>

                        <p id="erp1_" style="display:none;">TEAM</p>

                        <p id="erp1_1" style="display:none">COLLABORATION</p>

                    </div>



                    <div class="arrow_UpRight" id="erp2">

                        <div class="arrow">

                            <div class="" id="line2"></div>

                            <div class="" id="arrbox2"></div>

                        </div>

                        <!--<div class="black_div2e" id="black_div2"></div>-->

                        <div class="lopo lopo7">

                            <span id="l2" class="poppy erpbase1" data-container="body" data-toggle="popover" data-placement="right" 

                            data-content="<p style=&quot;text-align:justify;background-color:#ffffff; padding-top:10px; padding-left:10px; padding-right:10px; font-family: 'Roboto', sans-serif;&quot;>The productivity and development of business are dependent upon plugging in the different processes and procedures at  ...</p>

                            <a href=&quot;erp-team-collaboration.html#improved-business-processes&quot; id=&quot;view4&quot; style=&quot;color:#000; letter-spacing:0px; margin-top:5px; border-bottom: 2px solid #000; font-size:14px; padding:0px; height:20px; margin-bottom:20px; margin-left:10px; font-weight:700;&quot;>VIEW MORE</a>"

                            data-original-title="" title=""></span>

                        </div>

                        <p id="erp2_" style="display:none">improved   </p>

                        <p id="erp2_1" style="display:none"> business </p>

                        <p id="erp2_2" style="display:none">process </p>

                    </div>

                </div>  

            </div>

            <div class="mid" >

                <h1><span class="tagline1" style="display:none">ERP</span></h1>

                <div class="mid_list" style="display:none">

                    <ul>

                        <li id="swap1">ENTERPRISE</li>

                        <li id="swap2">RESOURCE</li>

                        <li id="swap3">PLANNING</li>

                    </ul>

                </div>

            </div>



            <div class="right">

                <div class="arrow_Right" id="erp3">

                    <div class="arrow">

                        <div class="" id="line3"></div>

                        <div class="" id="arrbox3"></div>

                    </div>

                    <div class="lopo lopo8">

                        <span id="l3" class="poppy erpbase2" data-container="body" data-toggle="popover" data-placement="bottom" 

                        data-content="<p style=&quot;text-align:justify;background-color:#ffffff; padding-top:10px; padding-left:10px; padding-right:10px; font-family: 'Roboto', sans-serif;&quot;>Relationship with an organization can be developed and maintained by providing better customer service. Devising...</p>

                        <a href=&quot;erp-team-collaboration.html#customer-service&quot; id=&quot;view4&quot; style=&quot;color:#000; letter-spacing:0px; margin-top:5px; border-bottom: 2px solid #000; font-size:14px; padding:0px; height:20px; margin-bottom:20px; margin-left:10px; font-weight:700;&quot;>VIEW MORE</a>"

                        data-original-title="" title=""></span>

                    </div>

                    <p class="" id="erp3_" style="display:none">customer </p>

                    <p class="" id="erp3_1" style="display:none">service </p>

                </div>

            </div>



            <div class="bottom">

                <div class="arrow_bottom">

                    <div class="bottom_cnt">

                        <div class="arrow_BottomLeft" id="erp4">

                            <div class="arrow">

                                <div class="" id="line4"></div>

                                <div class="" id="arrbox4"></div>

                            </div>

                            <div class="lopo lopo9">

                                <span id="l4" class="poppy erpbase3" data-container="body" data-toggle="popover" data-placement="left" 

                                data-content="<p style=&quot;text-align:justify;background-color:#ffffff; padding-top:10px; padding-left:10px; padding-right:10px; font-family: 'Roboto', sans-serif;&quot;>In ERP third-party integrations must be made to make the application work more proficiently. These integrations ...</p>

                                <a href=&quot;erp-team-collaboration.html#deep-integration&quot; id=&quot;view4&quot; style=&quot;color:#000; letter-spacing:0px; margin-top:5px; border-bottom: 2px solid #000; font-size:14px; padding:0px; height:20px; margin-bottom:20px; margin-left:10px; font-weight:700;&quot;>VIEW MORE</a>"

                                data-original-title="" title=""></span>

                            </div>

                            <p class="" id="erp4_" style="display:none">deep </p>

                            <p class="" id="erp4_1" style="display:none"> integration </p>

                        </div>



                        <div class="arrow_BottomMiddle" id="erp5">

                            <div class="arrow">

                                <div class="" id="line5"></div>

                                <div class="" id="arrbox5"></div>

                            </div>

                            <div class="lopo lopo11e">

                                <span id="l5" class="poppy erpbase4" data-container="body" data-toggle="popover" data-placement="left" 

                                data-content="<p style=&quot;text-align:justify;background-color:#ffffff; padding-top:10px; padding-left:10px; padding-right:10px; font-family: 'Roboto', sans-serif;&quot;>An ERP framework lets the organization to examine each procedure that provides a birds-eye view through the real-time ...</p>

                                <a href=&quot;erp-team-collaboration.html#analysis&quot; id=&quot;view4&quot; style=&quot;color:#000; letter-spacing:0px; margin-top:5px; border-bottom: 2px solid #000; font-size:14px; padding:0px; height:20px; margin-bottom:20px; margin-left:10px; font-weight:700;&quot;>VIEW MORE</a>"

                                data-original-title="" title=""></span>

                            </div>

                            <p class="" id="erp5_" style="display:none">analysis </p>

                        </div>



                        <div class="arrow_BottomRight" id="erp6">

                            <div class="arrow">

                                <div class="" id="line6b"></div>
                                <div class="" id="arrbox6"></div>

                            </div>

                            <div class="lopo lopo10">

                                <span id="l6" class="poppy erpbase5" data-container="body" data-toggle="popover" data-placement="right" 

                                data-content="<p style=&quot;text-align:justify;background-color:#ffffff; padding-top:10px; padding-left:10px; padding-right:10px; font-family: 'Roboto', sans-serif;&quot;>Data security consists of measures, which prevents unauthorized access to the system. It prevents accidental...</p>

                                <a href=&quot;erp-team-collaboration.html#data-security&quot; id=&quot;view4&quot; style=&quot;color:#000; letter-spacing:0px; margin-top:5px; border-bottom: 2px solid #000; font-size:14px; padding:0px; height:20px; margin-bottom:20px; margin-left:10px; font-weight:700;&quot;>VIEW MORE</a>"

                                data-original-title="" title=""></span>

                            </div>

                            <p class="" id="erp6_" style="display:none">data </p>

                            <p class="" id="erp6_1" style="display:none">security</p>

                        </div>

                    </div>

                </div>



            </div>

        </div>

    </div>

</div>

<?php
//session_start(); 
if(!isset($_SESSION['browser_id'])) { ?>

<section class="end_bar endo">

    <div class="container-fluid">

        <div class="left">

            <button data-toggle="modal" data-target="#myModal" id="mod_btn" onclick="video_play()">

                <p>PLAY</p><i class="fa fa-play" aria-hidden="true"></i>                            

            </button>

            <!-- <a href="erp-team-collaboration.html" id="rp" class="pull-right"> -->

            <!-- <a href="service.html#enterpris-eresource-planning" id="rp" class="pull-right">

                

            </a> -->


            <div class="pull-right" id="rp">
                <div class="right_l">
                    <a href="service.html#enterpris-eresource-planning">
                        <div class="circle_l"></div>
                        <div class="arrow_l"></div>
                    </a>
                </div>
            </div>

        </div>

    </div>

</section>






<script>
    

function video_play()
{
   // alert('ashim');
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



<style>

    #l1, #l2, #l3, #l4, #l5, #l6, #erp1_, #erp1_1, #erp2_, #erp2_1, #erp2_2, #erp3_, #erp3_1{display:none;}

</style>



<script> //animate over words

//erp12 word

var myerp1;

var myerp2;

var myerp3;

var myerp4;

var myerp5;

var myerp6;

var myerp7;

var myerp8;

var myerp9;

var myerp10;

var myerp11;

var myerp12;





//function textanimation()

 //{

    // alert('Joy Maa kali');

    clearTimeout(myerp1);

    clearTimeout(myerp2);

    clearTimeout(myerp3);

    clearTimeout(myerp4);

    clearTimeout(myerp5);

    clearTimeout(myerp6);

    clearTimeout(myerp7);

    clearTimeout(myerp8);

    clearTimeout(myerp9);

    clearTimeout(myerp10);

    clearTimeout(myerp11);

    clearTimeout(myerp12);

    

 //}



        myerp1=setTimeout(function(){
            
           
            $('#line1').addClass("line line1"); 

            $('#arrbox1').addClass("arrowBox");

            $('#erp1_').addClass("ml12");
            $('#erp1_1').addClass("ml12");

            
            
            $('#erp1_, #l1').delay( 1250 ).animate( { width: "hide" }) //erp1 word

            .animate( { width: "show" }, 1200); 

            $('#erp1_1, #l1').delay( 2500 ).animate( { width: "hide" }) //erp1 word
            .animate( { width: "show" }, 1900);

            }, 3000);



        // myerp2=setTimeout(function(){

        //     $('#line1').addClass("line line1"); 

        //     $('#arrbox1').addClass("arrowBox");

        //     $('#erp1_1').addClass("ml12");

            

        //     $('#erp1_1, #l1').delay( 2500 ) //erp1 word

        //         .animate( { width: "show" }, 1900);

        //     }, 3000);



        myerp3=setTimeout(function(){

            $('#line2').addClass("line line2"); 

            $('#arrbox2').addClass("arrowBox");

            $('#erp2_').addClass("ml12");

            
            $('#erp2_, #l2').delay( 1000 ).animate( { width: "hide" })  //erp2 word
            .animate( { width: "show" }, 1800);

          
            $('#erp2_1, #l2').delay( 3000 ).animate( { width: "hide" })  //erp2 word
            .animate( { width: "show" }, 1800);
            
         
            $('#erp2_2, #l2').delay( 5000 ).animate( { width: "hide" })  //erp2 word
            .animate( { width: "show" }, 1800);
            }, 7000);



        myerp6=setTimeout(function(){
            $('#erp3_').hide();
            $('#erp3_1').hide();
           

            $('#line3').addClass("line line3"); 

            $('#arrbox3').addClass("arrowBox");

            $('#erp3_').addClass("ml12");

            

            $('#erp3_, #l3').delay( 1200 ).animate( { width: "hide" }) //erp3 word

            .animate( { width: "show" }, 1800);

            $('#erp3_1, #l3').delay( 3000 ).animate( { width: "hide" }) //erp3 word

            .animate( { width: "show" }, 1800);

            }, 13000);



        // myerp11=setTimeout(function(){

        //     $('#line3').addClass("line line3"); 

        //     $('#arrbox3').addClass("arrowBox");

        //     $('#erp3_1').addClass("ml12");

            

        //     $('#erp3_1, #l3').delay( 3000 ) //erp3 word

        //     .animate( { width: "show" }, 1800);

        //     }, 13000);



        


        myerp9=setTimeout(function(){
            $('#erp4_').hide();
            $('#erp4_1').hide();
            $('#line4').addClass("line line4"); 

            $('#arrbox4').addClass("arrowBox");

            $('#erp4_').addClass("ml12");

            

            $('#erp4_, #l4').delay( 1000 ).animate( { width: "hide" })  //erp4 word

            .animate( { width: "show" }, 2100);

            $('#erp4_1, #l4').delay( 1700 ).animate( { width: "hide" })  //erp4 word

            .animate( { width: "show" }, 3000);

            }, 17500);



        // myerp10=setTimeout(function(){

        //     $('#line4').addClass("line line4"); 

        //     $('#arrbox4').addClass("arrowBox");

        //     $('#erp4_1').addClass("ml12");

            

        //     $('#erp4_1, #l4').delay( 1700 )  //erp4 word

        //     .animate( { width: "show" }, 3000);

        //     }, 17500);

myerp7=setTimeout(function(){
            $('#erp5_').hide();
            
            $('#line5').addClass("line line5"); 

            $('#arrbox5').addClass("arrowBox");

            $('#erp5_').addClass("ml12");

            

            $('#erp5_, #l5').delay( 1200 ).animate( { width: "hide" })  //erp5 word

            .animate( { width: "show" }, 2800);

            }, 21000);


        myerp8=setTimeout(function(){
            $('#erp6_').hide();
            $('#erp6_1').hide();
           

            $('#line6b').addClass("line line6b");

            $('#arrbox6').addClass("arrowBox");

            $('#erp6_').addClass("ml12");

            

            $('#erp6_').delay( 1500 ).animate( { width: "hide" })  //erp5 word

            .animate( { width: "show" }, 2500);

            $('#erp6_1, #l6').delay( 2200 ).animate( { width: "hide" })  //erp5 word

            .animate( { width: "show" }, 3000);

            }, 24000);



        // myerp12=setTimeout(function(){

        //     $('#line6b').addClass("line line6b"); 

        //    $('#arrbox6').addClass("arrowBox");

        //     $('#erp6_1').addClass("ml12");

            

        //     $('#erp6_1, #l6').delay( 2200 )  //erp5 word

        //     .animate( { width: "show" }, 3000);

        //     }, 24000);



</script>

<script> //video play pause (youtube)

 // $('.close').click(function(e) {
 //   e.preventDefault();
 //   $('.modal-body').children('iframe').attr('src', '');
 // });

 //  $('#mod_btn').click(function(e) {
 //   e.preventDefault();
 //   $('.modal-body').children('iframe').attr('src', 'https://www.youtube.com/embed/jqIXnyL8B1k');
 // });

 

</script>



<script>

    $(document).ready(function(){

        

        $(".tagline1").show();

      

        $(".tagline1").letterfx({"fx":"fade","backwards":false,"timing":450,"fx_duration":"1000ms","letter_end":"stay","element_end":"stay"});

        //$(".tagline2").letterfx({"fx":"fall","words":true,"timing":1600});

        //$(".tagline3").letterfx({"fx":"fall","words":true,"timing":2200});
  $(".mid_list").show();
    })

    

    jQuery(document).ready(function() {

        setTimeout(function() {

            $(".tagline").show(),

            // $(".mid_list").show(),

            $(".tagline").letterfx({"fx":"fly-right fly-bottom spin","backwards":false,"timing":100,"fx_duration":"2000ms","letter_end":"stay","element_end":"stay"});
            $(".mid_list").show();
        }, 1200);

    });

</script>

<script>
//MOUSE POINTER
$(function () {
    $("#mod_btn, #rp").mouseover(function () {
        $(this).css({
            "opacity": 0.2,
            "cursor": "url(\"images/cursor_select.png\"), auto",
            "transition": "linear 2s"
        });
        $(this).animate({
            "opacity": 1,
            "cursor": "url(\"images/cursor_select.png\"), auto",
            "transition": "linear 2s"
        }, {
            duration: 5000,
            width: "linear",
            height: "easeOutBounce",
        }).fadeIn(2000);
    });
})
</script>




    <script>

    $(function(){

	// Our selector

    var $word1 = $("#swap1");

    var $word2 = $('#swap2');

    var $word3 = $('#swap3');

	

	// Use lettering.js to wrap each character & word in a span tag

    $word1.lettering();

    $word2.lettering();

    $word3.lettering();



	// Our declations	

	var $span = $("span");

    var length = $span.length;

	var array = [];

	

	// Push reference to our array

	for(var i=1; i<=length; i++)

		array.push(i);

	

	// Randomise array

	shuffleArray(array);

	

	// Wrap each word in its own div so words don't split on line break

    $word1.wrapInner('<span class="word"></span>');

    $word2.wrapInner('<span class="word"></span>');

    $word3.wrapInner('<span class="word"></span>');

	var regEx = new RegExp(/<span class=\"char(\d+)\"> <\/span>/g);

    $word1.html($word1.html().replace(regEx,'</span><span class="word">'));

    $word2.html($word2.html().replace(regEx,'</span><span class="word">'));

    $word3.html($word3.html().replace(regEx,'</span><span class="word">'));

	

	// Fire first animation

	setTimeout(function(){

		animateLetters(array,length,true);

	},500);

});



// Animate the letters

function animateLetters(array,length,animIn)

{	

	// Scale in or out?

	var scale = (animIn) ? 1 : 1.5;

	

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





<!-- <script>

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

</script> -->

<script>
//Selecting cursor
$(function(){
var cursor = $('.cursor');

//Following cursor
$(document).bind('mousemove', function (e) {
  
    var offset = $(window).scrollTop();
  
    TweenLite.to(cursor, 0, {left: e.pageX - 0, top: e.pageY - offset - 0.5});
  // -20 = half of your cursor width & height
  //Offset calculation to prevent position on scroll
});
    
    var hoverElem = $('#rp, #view, .logo img, #nav-icon2, #lp, #bx1, .accord .ptm i, .accord .ptm, .owl-prev, .owl-next, a, button, #psh, a#rp, #mod_btn p, #mod_btn p i, #psh1, .styled-checkbox + label, .push_right, a, #nav-icon2, .push_right, #psh, #menu li a')
    
    //Entering on the element, cursor changes
    hoverElem.on('mouseenter', function () {
        TweenLite.to(cursor, 0.6, {
            ease: Elastic.easeOut.config(1, 0.4),
            scale: 1.2,
            width: '20px',
            height: '20px',
            backgroundColor: 'transparent',
            // backgroundColor: 'rgba(255,255,255,0.5)',
        })
    });

    //Leaving the element, cursor goes default
    hoverElem.on('mouseleave', function () {
        TweenLite.to(cursor, 0.6, {
            ease: Elastic.easeOut.config(1, 0.4),
            scale: 0.4,
            backgroundColor: 'red',
            
        })
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