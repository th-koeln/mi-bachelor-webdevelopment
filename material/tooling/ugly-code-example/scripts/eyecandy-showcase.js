/* Eyecandy Showcase

Färbt die Showcase Items hübsch ein
############################################################################ */

var eyecandyShowcase=
{basecolor:[147,19,206],
    colors:[[147,19,206],
    [221,17,102],[73,82,225]],lastAdd:0,
    getOpacity:function(){return(Math.floor(4*Math.random())+6)/10},getColor:
    function(e){if("single"===e)return eyecandyShowcase.basecolor;var a=Math
    .floor(Math.random()*eyecandyShowcase.colors.length);return eyecandyShowcase.
    colors[a]},getRGBA:function(){for(var e=eyecandyShowcase.getOpacity();Math.
        abs(eyecandyShowcase.lastAdd-e)<.1;)e=eyecandyShowcase.getOpacity();eyecandyShowcase.
        lastAdd=e;var a=eyecandyShowcase.getColor();return a.join(",")+","+e}};document.
        addEventListener("DOMContentLoaded",function(e){var a,o=document.
            querySelectorAll(".showcase__item");for(a=0;a<o.length;a++){var c=
                eyecandyShowcase.getRGBA();o[a].style.backgroundColor="rgba("+c+")"}});