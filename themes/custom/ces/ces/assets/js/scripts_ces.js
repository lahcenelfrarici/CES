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
  jQuery(document).ready(function ($) {
    $('button:contains("Produits")').on('click', function () {
      var $submenu = $(this).next('.ml-4.mt-2.space-y-2');
      var $arrow = $(this).find('svg');

      // Close all other submenus except current one
      $('.ml-4.mt-2.space-y-2').not($submenu).hide();
      $('.ml-4.mt-2.space-y-2').not($submenu).prev('button').find('svg').css('transform', 'rotate(0deg)');

      // Toggle current submenu
      $submenu.toggle(300);

      // Toggle arrow rotation
      if ($submenu.is(':visible')) {
        $arrow.css({
          'transform': 'rotate(180deg)',
          'transition': 'transform 0.3s'
        });
      } else {
        $arrow.css({
          'transform': 'rotate(0deg)',
          'transition': 'transform 0.3s'
        });
      }
    });
  });
})(jQuery);
