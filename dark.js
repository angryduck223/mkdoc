function dayHandler(self) {
  var target = document.querySelector("body");
  if (self.value === "켬") {
    target.style.backgroundColor = "black";
    target.style.color = "white";
    self.value = "끔";

    var list = document.querySelectorAll("a");
    for (var i = 0; i < list.length; i++) {
      list[i].style.color = "antiquewhite";
    }
  } else {
    target.style.backgroundColor = "antiquewhite";
    target.style.color = "black";
    self.value = "켬";

    var list = document.querySelectorAll("a");
    for (var i = 0; i < list.length; i++) {
      list[i].style.color = "black";
    }
  }
}
