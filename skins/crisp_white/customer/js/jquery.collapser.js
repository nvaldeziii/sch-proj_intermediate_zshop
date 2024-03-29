/**
 * Collapser plugin for jQuery + Bootstrap
 * v0.1
 * Makes any DOMElement collapsible.
 *
 * Released under the MIT license.
 */

(function($) {

  var defaults = {
    accordion: true,

    submenu: "ul",
    item: "li",
    firstOpen: false,
  };

  options = {};

  // jQuery plugin definition
  $.fn.collapser = function(overrides) {
    if ('undefined' === typeof(overrides)) {
      overrides = {};
    }

    options = _.defaults(overrides, defaults);

    initialize(this);

    return this;
  };

  function initialize(base) {
    if (base) {
      var parent = $(base);
      var items = parent.children(options.item);
      items.each(function() {
        var submenu = $(this).children(options.submenu);
        var link = $(document.createElement('a'))
        link.addClass('collapser');
        link.on('click', function() {
          submenu.collapse('toggle');
        });

        $(this).prepend(link);

        submenu.on('show.bs.collapse',function() {
          link.removeClass('trigger-show');
          link.addClass('trigger-hide');
        });
        submenu.on('hide.bs.collapse',function() {
          link.removeClass('trigger-hide');
          link.addClass('trigger-show');
        });
        submenu.addClass('in');
        submenu.collapse();

        return this;
      });

      if (options.firstOpen) {
        items.children(options.submenu).first().toggle();
      }

      parent.on('show.bs.collapse', function () {
          if (options.accordion) parent.find('.in').collapse('hide');
      });
    }
  }

})(jQuery);