function generateitem() {
  var items = [];
  $(".scrolled").css("opacity", "0");
  var item = -210;
  var min = 1;
  var max = 14;
  $(".scrolled .item").html("<div class='before'></div>");
  for (var i = 0; i < 300; i++) {
    var random = Math.floor(Math.random() * (+max - +min)) + +min;
    $(".scrolled .item .before").before(
      "<div class='items item" + random + "'></div>"
    );
    var newitem = { random };
    items.push(newitem);
  }
  for (var i = 1; i <= 14; i++) {
    $(".item" + i).css("background-position", item * i + "px -5px");
    $(".scrolled").css("opacity", "1");
  }
}
function animatecase() {
  var top = 0;
  var transformy = 0;
  setInterval(function () {
    if (top < 13) {
      top++;
    } else {
      $(".center").css("opacity", "1");
    }
    $(".caixa").css("margin", top + "%" + "auto");
  }, 100);
}

$(".caixa").click(function () {
  scrollar();
});

function scrollar() {
  generateitem();
  var min = 9;
  var max = 15;
  for (var i = 0; i < 20; i++) {
    var random = Math.floor(Math.random() * (+max - +min)) + +min;
    scroll = random * -900;
    $(".scrollar").css("transform", "translateX(" + scroll + "px)");
    var audio = new Audio("roulette_spin.wav?raw=true");
    audio.play();
  }
}
