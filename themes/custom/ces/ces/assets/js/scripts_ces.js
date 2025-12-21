(function ($) {
  $(function () {

    var path = window.location.pathname;

    // Normalize the path (remove trailing slash)
    if (path.endsWith('/')) {
      path = path.slice(0, -1);
    }

    // Check if path is home (empty, /fr, or /en)
    if (path === '' || path === '/fr' || path === '/en') {
      // Remove active from other links
      $('.items__menu_principe .group , .items__menu_principe .group span').removeClass('text-cyan-400');

      // Add active to the first menu item
      $('.items__menu_principe .group:first-child,.items__menu_principe .group:first-child span').addClass('text-cyan-400');
    }

    // Mobile menu toggle
    $('#click_mobile').on('click', function () {
      $(this).toggleClass('is-open');
    });


    // Header scroll
    $(window).on('scroll', function () {
      if ($(window).scrollTop() > 0) {
        $('header').addClass('scrolled_header');
      } else {
        $('header').removeClass('scrolled_header');
      }
    });

    // Filter buttons (vanilla JS is OK here)
const buttons = document.querySelectorAll('.filter-btn');
    const items = document.querySelectorAll('.item');

    buttons.forEach(btn => {
      btn.addEventListener('click', () => {
        const filter = btn.dataset.filter;

        buttons.forEach(b => {
          b.classList.remove(
            'active',
            'bg-gradient-to-r',
            'from-cyan-500',
            'to-blue-600',
            'text-white'
          );
          b.classList.add('bg-white/5', 'text-gray-300');
        });

        btn.classList.add(
          'active',
          'bg-gradient-to-r',
          'from-cyan-500',
          'to-blue-600',
          'text-white'
        );
        btn.classList.remove('bg-white/5', 'text-gray-300');

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

  });
})(jQuery);
