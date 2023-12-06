globalThis.addEventListener("scroll", function () {
    const nav = document.querySelector("#navbar-fixed");
    const image_md = document.querySelector("#img-startup-md");
    const image_xs = document.querySelector("#img-startup-xs");
    const btn_burguer = document.querySelector("#btn-burguer");
    if (window.pageYOffset > 50) {
        nav.classList.add("shrink");
        image_md.classList.add("shrink");
        image_xs.classList.add("shrink");
        btn_burguer.classList.add("shrink");
    } else {
        nav.classList.remove("shrink");
        image_md.classList.remove("shrink");
        image_xs.classList.remove("shrink");
        btn_burguer.classList.remove("shrink");
    }
});
