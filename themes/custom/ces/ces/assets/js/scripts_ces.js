jQuery(document).ready(function ($) {
   $(window).scroll(function () {
    if ($(window).scrollTop() > 0) {
      $('header').addClass('scrolled_header');
    } else {
      $('header').removeClass('scrolled_header');
    }
  });
//
 const buttons = document.querySelectorAll('.filter-btn');
  const items = document.querySelectorAll('.item');

  buttons.forEach(btn => {
    btn.addEventListener('click', () => {
      const filter = btn.dataset.filter;

      // active button style
      buttons.forEach(b => b.classList.remove('active', 'bg-gradient-to-r', 'from-cyan-500', 'to-blue-600', 'text-white'));
      btn.classList.add('active', 'bg-gradient-to-r', 'from-cyan-500', 'to-blue-600', 'text-white');

      items.forEach(item => {
        const categories = item.dataset.category.split(' ');

        if (filter === 'all' || categories.includes(filter)) {
          item.classList.remove('hidden');
        } else {
          item.classList.add('hidden');
        }
      });
    });
  });
})(jQuery);
// $(document).ready(function () {
//   $('#exampleModal').modal('show');
// });
