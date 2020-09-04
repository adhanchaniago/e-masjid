$('.nav-item').on('click', function () {
  // console.log($(this).children())
  $('.nav-link').removeClass('text-white')
  $('.nav-link').addClass('text-secondary')
  $(this).children().removeClass('text-secondary')
  $(this).children().addClass('text-white')

})
