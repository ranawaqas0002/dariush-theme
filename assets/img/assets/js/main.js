
window.addEventListener("scroll", checkHeaderScroll);

function checkHeaderScroll() {
  if (window.pageYOffset > 10) {
    $("#header").addClass("floating");
  } else {
    $("#header").removeClass("floating");
  }
}

checkHeaderScroll();
    
jQuery('#navbutton').on('click',function(e){
  e.preventDefault();

  console.log($(this).hasClass('active'));

  if($(this).hasClass('active')){
    jQuery('#header .right ul').addClass('fade-out-top');
    jQuery(this).removeClass('active');

    setTimeout(function(){
      jQuery('#header .right ul').removeClass('active');
      jQuery('#header .right ul').removeClass('fade-out-top');
      console.log('active removed');
    },600);

  } else {
    jQuery('#header .right ul').addClass('active');
    jQuery(this).addClass('active');
  }

});

let previousScrollPosition = 0;

const isScrollingDown = () => {
  let goingDown = false;

  let scrollPosition = window.pageYOffset;

  if (scrollPosition > previousScrollPosition) {
    goingDown = true;
  }

  previousScrollPosition = scrollPosition;

  return goingDown;
};

const handleScroll = () => {
  if (isScrollingDown()&&window.pageYOffset>10) {
    $('#header').addClass('hide');
  } else {
    $('#header').removeClass('hide');
  }
};

window.addEventListener("scroll", handleScroll);

$('header ul li a').on('click',function(){
  $(this).closest('ul').removeClass('active');
  $('#navbutton').removeClass('active');
});


inView('.animate')
  .on('enter', function(item){
    $(item).delay(500).addClass('animated');
    $(item).delay(500).addClass($(item).attr('data-animate'));
  })
  .on('exit', el => {
    // $(el).removeClass('animated');
    // $(el).removeClass($(el).attr('data-animate'));
  });

  
var conController = new ScrollMagic.Controller({globalSceneOptions: {}});
var scene = [];

function createMagicMain(){

var conClass = [];
conScene = new Array();

if($('.revealscroll').length){
    range = [];
    indx = 0;
    $('.revealscroll').each(function (){
        targ  = $(this);
        newscene = new ScrollMagic.Scene({triggerElement: "#"+$(this).attr('id'),duration: $(targ).outerHeight()/2})
            .on("enter", function (d) {
            })
            .on("leave", function () {
            }).on("refresh", function (d) {
            })
            .on("progress", function (d) {
                tg = d.currentTarget.triggerElement();
                words  = $(tg).find('.revealtexts .word').length;
                range = 100/words;
                currentWords = Math.round((d.progress*100) / range);
                if(d.scrollDirection=="FORWARD") {
                    for(x=0;x<currentWords;x++){
                        t = $(tg).find('.word').eq(x+1);
                        if(!$(t).hasClass('active'))
                            $(tg).find('.word').eq(x+1).addClass('active');
                    }
                } else {
                    for(x=words;x>currentWords;x--){
                        t = $(tg).find('.word').eq(x);
                        if($(t).hasClass('active'))
                            $(t).removeClass('active');
                    }
                }
            })
            // .addIndicators({name: "test"+indx}) // add indicators (requires plugin)
            .addTo(conController);

        scene.push(newscene);
        indx++;
    });
}
}


function destroyMagicControllerMain() {
  conController.destroy(true);
  if(scene.length)
      for(x=0;x<scene.length;x++) {
          if(scene[x].length)
              scene[x].destroy(true);
      }
}


// Resize
window.addEventListener("resize", function() {
  destroyMagicControllerMain();
  conController = new ScrollMagic.Controller({globalSceneOptions: {}});
  createMagicMain();
});

$(document).ready(function(){
createMagicMain();
});
