document.addEventListener("DOMContentLoaded", () => {
  const myButton = document.getElementById("btn-back-to-top");

  if (myButton) {
    window.addEventListener("scroll", () => {
      if (window.scrollY > 20) {
        myButton.style.display = "block";
      } else {
        myButton.style.display = "none";
      }
    });

    myButton.addEventListener("click", () => {
      window.scrollTo({
        top: 0,
        behavior: "smooth",
      });
    });
  }
});











