



const buttons = document.querySelectorAll(".container .button");



  buttons.forEach(button => button.addEventListener("click", e => {
    let classActive = document.querySelectorAll(".active");

    [].forEach.call(classActive, el => el.classList.remove("active"));

    const classClicked = e.target.className.split("_")[0];

  document.getElementById(classClicked).classList.add("active");
  if (classClicked == "skills") {
  $(function() {
    $('progress').each(function() {
      var max = $(this).val();
      $(this).val(0).animate({ value: max }, { duration: 2000, easing: 'easeOutCirc' });
        });
  });
}
}));

$(document).ready(function() {
  document.getElementById("aboutme_button").click();
});
