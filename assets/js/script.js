const navLink = document.querySelectorAll(".navLink");
navLink.forEach((link) => {
  link.addEventListener("click", () => {
    navLink.forEach((link) => link.classList.remove("active"));
    link.classList.add("active");
  });
});

const subNavLink = document.querySelectorAll(".subNavLink");

subNavLink.forEach((link) => {
  const navLink = link.querySelector(".navLink");
  const subNavLinkMenu = link.querySelector(".subNavLinkMenu");
  const chevron = link.querySelector(".chevron");
  navLink.addEventListener("click", () => {
    subNavLinkMenu.classList.toggle("show");
    chevron.classList.toggle("rotate");
  });
});

  
