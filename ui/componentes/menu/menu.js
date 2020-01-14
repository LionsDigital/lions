var url = (window.location.pathname.replace(/\/+/g,"")).replace("lions", "");
if (url == '') {
  document.querySelector(".menu__home").classList.add("ativo");
}else {
  document.querySelector(".menu__"+url).classList.add("ativo");
}
