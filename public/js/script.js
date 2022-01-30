let notification = $('#notification').attr('data-message');

console.log(notification);

if (notification) {
  if (notification == 'Subscription Failed!') {
    Swal.fire({
      icon: 'error',
      title: notification,
      text: 'Please fill the form correctly!',
      confirmButtonColor: '#000000',
      confirmButtonText: 'Okay'
    })
  }
  if (notification == 'Subscription Success!') {
    Swal.fire({
      icon: 'success',
      title: notification,
      text: 'Thank you for signing up!',
      confirmButtonColor: '#000000',
      confirmButtonText: 'Okay'
    })
  }
}

$(window).scroll(function () {
  var scroll = $(window).scrollTop();
  var height = 150;

  if (scroll >= height) {
    $(".navbar").addClass('bg-dark');
  } else {
    $(".navbar").removeClass('bg-dark');
  }
});

$(function () {
  $('.segment-picture').on('click', function () {
    $('.segment-picture').removeClass('active');
    $(this).addClass('active');
    var name = $(this).attr('alt');
    $('#segmentName').html(name);
  });
});

$(function () {
  $('.journey-month').on('click', function () {
    if ($(this).hasClass('collapsed')) {
      $(this).children('.fas').removeClass('fa-arrow-up');
      $(this).children('.fas').addClass('fa-arrow-down');
    } else {
      $(this).children('.fas').removeClass('fa-arrow-down');
      $(this).children('.fas').addClass('fa-arrow-up');
    }
  })
});

$(function () {
  $('.segment-button').on('click', function () {
    if ($(this).hasClass('collapsed')) {
      $(this).children('.fas').removeClass('fa-arrow-up');
      $(this).children('.fas').addClass('fa-arrow-down');
    } else {
      $(this).children('.fas').removeClass('fa-arrow-down');
      $(this).children('.fas').addClass('fa-arrow-up');
    }
  })
});