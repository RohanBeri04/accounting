

$( ".timeSelectionHeading" ).click(function() {
    $(this).toggleClass("active");
    $(this).siblings(".timeSelectionInput").toggleClass("active");
});
$( ".searchToggle" ).click(function() {
  $(".searchBx").toggleClass("active");
});
$( ".sidebarToggle" ).click(function() {
  $(".sidebar").toggleClass("shrink");
});
const myModal = document.getElementById('myModal')
const myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', () => {
  myInput.focus()
})
