console.log(document.location.pathname);
menuAtivar();
function menuAtivar() {
  let home = document.location.origin+'/lions/';
  let urlAtual = window.location.href;
  if (urlAtual == home) {
    document.querySelector(".menu").classList.add("home");
  }
}
