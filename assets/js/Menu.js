document.addEventListener("DOMContentLoaded", function () {
  //Header menu
  const burgerDiv = document.querySelector("#burger");
  const burgerIcon = document.querySelector("#burger__middle");
  const mobileMenuContainer = document.querySelector("#header__mobileMenu");
  const submenuItems = document.querySelectorAll(
    ".header__mobileNav .menu-item-has-children"
  );
  const menuLinks = document.querySelectorAll(".header__mobileNav a");

  function closeMenu() {
    burgerIcon.classList.remove("header__burger__middle--active");
    mobileMenuContainer.classList.add("header__mobileMenu--close");
  }

  // Toggle menu
  burgerDiv.addEventListener("click", (event) => {
    event.stopPropagation();
    burgerIcon.classList.toggle("header__burger__middle--active");
    mobileMenuContainer.classList.toggle("header__mobileMenu--close");
  });

  // Close menu when a menu item is clicked
  menuLinks.forEach((link) => {
    link.addEventListener("click", () => {
      closeMenu();
    });
  });
  // Close menu when clicking outside
  document.addEventListener("click", (event) => {
    if (
      !mobileMenuContainer.contains(event.target) &&
      !burgerDiv.contains(event.target)
    ) {
      closeMenu();
    }
  });

  submenuItems.forEach((item) => {
    let toggleIcon = document.createElement("span");
    toggleIcon.innerHTML = `
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M20.031 9.53062L12.531 17.0306C12.4614 17.1003 12.3787 17.1557 12.2876 17.1934C12.1966 17.2312 12.099 17.2506 12.0004 17.2506C11.9019 17.2506 11.8043 17.2312 11.7132 17.1934C11.6222 17.1557 11.5394 17.1003 11.4698 17.0306L3.96979 9.53062C3.82906 9.38988 3.75 9.19901 3.75 8.99999C3.75 8.80097 3.82906 8.61009 3.96979 8.46936C4.11052 8.32863 4.30139 8.24957 4.50042 8.24957C4.69944 8.24957 4.89031 8.32863 5.03104 8.46936L12.0004 15.4397L18.9698 8.46936C19.0395 8.39968 19.1222 8.34441 19.2132 8.30669C19.3043 8.26898 19.4019 8.24957 19.5004 8.24957C19.599 8.24957 19.6965 8.26898 19.7876 8.30669C19.8786 8.34441 19.9614 8.39968 20.031 8.46936C20.1007 8.53905 20.156 8.62177 20.1937 8.71282C20.2314 8.80386 20.2508 8.90144 20.2508 8.99999C20.2508 9.09854 20.2314 9.19612 20.1937 9.28716C20.156 9.37821 20.1007 9.46093 20.031 9.53062Z" fill="black"/>
          </svg>
          `;
    toggleIcon.classList.add("menu-toggle");

    item.querySelector("a").after(toggleIcon);

    let subMenu = item.querySelector(".sub-menu");
    if (subMenu) {
      subMenu.style.display = "none";
    }

    toggleIcon.addEventListener("click", function (e) {
      e.stopPropagation();
      if (subMenu.style.display === "none") {
        subMenu.style.display = "block";
        toggleIcon.innerHTML = `
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M20.031 15.5306C19.9614 15.6003 19.8787 15.6557 19.7876 15.6934C19.6966 15.7311 19.599 15.7506 19.5004 15.7506C19.4019 15.7506 19.3043 15.7311 19.2132 15.6934C19.1222 15.6557 19.0394 15.6003 18.9698 15.5306L12.0004 8.56029L5.03104 15.5306C4.89031 15.6713 4.69944 15.7504 4.50042 15.7504C4.30139 15.7504 4.11052 15.6713 3.96979 15.5306C3.82906 15.3899 3.75 15.199 3.75 15C3.75 14.801 3.82906 14.6101 3.96979 14.4694L11.4698 6.96935C11.5394 6.89962 11.6222 6.8443 11.7132 6.80656C11.8043 6.76882 11.9019 6.74939 12.0004 6.74939C12.099 6.74939 12.1966 6.76882 12.2876 6.80656C12.3787 6.8443 12.4614 6.89962 12.531 6.96935L20.031 14.4694C20.1008 14.539 20.1561 14.6217 20.1938 14.7128C20.2316 14.8038 20.251 14.9014 20.251 15C20.251 15.0985 20.2316 15.1961 20.1938 15.2872C20.1561 15.3782 20.1008 15.4609 20.031 15.5306Z" fill="black"/>
                  </svg>
                  `;
      } else {
        subMenu.style.display = "none";
        toggleIcon.innerHTML = `
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M20.031 9.53062L12.531 17.0306C12.4614 17.1003 12.3787 17.1557 12.2876 17.1934C12.1966 17.2312 12.099 17.2506 12.0004 17.2506C11.9019 17.2506 11.8043 17.2312 11.7132 17.1934C11.6222 17.1557 11.5394 17.1003 11.4698 17.0306L3.96979 9.53062C3.82906 9.38988 3.75 9.19901 3.75 8.99999C3.75 8.80097 3.82906 8.61009 3.96979 8.46936C4.11052 8.32863 4.30139 8.24957 4.50042 8.24957C4.69944 8.24957 4.89031 8.32863 5.03104 8.46936L12.0004 15.4397L18.9698 8.46936C19.0395 8.39968 19.1222 8.34441 19.2132 8.30669C19.3043 8.26898 19.4019 8.24957 19.5004 8.24957C19.599 8.24957 19.6965 8.26898 19.7876 8.30669C19.8786 8.34441 19.9614 8.39968 20.031 8.46936C20.1007 8.53905 20.156 8.62177 20.1937 8.71282C20.2314 8.80386 20.2508 8.90144 20.2508 8.99999C20.2508 9.09854 20.2314 9.19612 20.1937 9.28716C20.156 9.37821 20.1007 9.46093 20.031 9.53062Z" fill="black"/>
                  </svg>`;
      }
    });
  });
});
