// Upon reload, send to top (on index.php only)
$('body,html').animate({
    scrollTop: 0
}, 400);

// Get Elements
const caption = document.querySelector("#caption");
const header = document.querySelector("#headerContainer");
const captionButton = document.querySelector("#captionBtn");
const curtain = document.querySelector(".curtain");
const logoInBanner = document.querySelector("#mainLogo");

// Change the CSS of elements after 2.5s
setTimeout(function() {
    caption.classList.add("caption");
    caption.classList.add("text-center");
    caption.classList.remove("oldCaption");

    captionButton.classList.add("btn");
    captionButton.classList.add("btn-outline-light");
    captionButton.classList.add("btn-lg");
    captionButton.classList.remove("oldBtn");

    document.body.style.overflowY = "scroll";
}, 2500);

// Animations
const timeLine = new TimelineMax();
timeLine.fromTo(curtain, 1.2, {x: "-100%"}, {x: "0%", ease: Power2.easeInOut}, "+= 1.7");
timeLine.fromTo(logoInBanner, 1.2, {x: "-150%"}, {x: "0%", ease: Power2.easeInOut}, "-= 1.2");
timeLine.fromTo(header,  1.2, {x: "-100%"}, {x: "0%", ease: Power2.easeInOut}, "-= 0.8");