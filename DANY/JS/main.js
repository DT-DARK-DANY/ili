window.onscroll = function () {
  showPosition();
};

function showPosition() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;

  var height =
    document.documentElement.scrollHeight -
    document.documentElement.clientHeight;

  var scrolled = (winScroll / height) * 100;
  document.querySelector("#progress__bar").style.width = scrolled + "%";
}

const exploreBtn = document.getElementById("explore_btn");
const videoSection = document.querySelector(".video-section");
const videoMain = document.querySelector(".main-video");
const closeBtn = document.querySelector(".closeBtn");

exploreBtn.addEventListener("click", () => {
  exploreBtn.style.outline = "none";
  videoSection.style.display = "block";
  window.scrollTo(0, 920);
  videoMain.autoplay = true;
  videoMain.load();
});
closeBtn.addEventListener("click", () => {
  videoSection.style.display = "none";
});
