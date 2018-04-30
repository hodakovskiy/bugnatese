function getURLVar(key) {
  var value = [];

  var query = String(document.location).split('?');

  if (query[1]) {
    var part = query[1].split('&');

    for (i = 0; i < part.length; i++) {
      var data = part[i].split('=');

      if (data[0] && data[1]) {
        value[data[0]] = data[1];
      }
    }

    if (value[key]) {
      return value[key];
    } else {
      return '';
    }
  }
}

// count shopping cart products
function updateCartQuantity() {
  var s = $('#cart-total').text();
  var re = /\d+/;
  var qty = s.match(re);

  $('#cart-total').text(qty);

  if ($('#cart-total').text() !== "0") {
    $('#cart-total').css("display", "block");
  }
}

$(document).ready(function() {

  $('#content .product-layout:nth-child(4n+4)').after('<div class="clearfix"></div>');

  // highlight any found errors
  $('.text-danger').each(function() {
    var element = $(this).parent().parent();

    if (element.hasClass('form-group')) {
      element.addClass('has-error');
    }
  });

  // currency
  $('#currency .currency-select').on('click', function(e) {
    e.preventDefault();

    $('#currency input[name=\'code\']').attr('value', $(this).attr('name'));

    $('#currency').submit();
  });

  // language
  $('#language a').on('click', function(e) {
    e.preventDefault();

    $('#language input[name=\'code\']').attr('value', $(this).attr('href'));

    $('#language').submit();
  });

  // search
  $('#search input[name=\'search\']').parent().find('button').on('click', function() {
    url = $('base').attr('href') + 'index.php?route=product/search';

    var value = $('input[name=\'search\']').val();

    if (value) {
      url += '&search=' + encodeURIComponent(value);
    }

    location = url;
  });

  $('#search input[name=\'search\']').on('keydown', function(e) {
    if (e.keyCode == 13) {
      $('input[name=\'search\']').parent().find('button').trigger('click');
    }
  });

  // checkout
  $(document).on('keydown', '#collapse-checkout-option input[name=\'email\'], #collapse-checkout-option input[name=\'password\']', function(e) {
    if (e.keyCode == 13) {
      $('#collapse-checkout-option #button-login').trigger('click');
    }
  });

  // tooltips on hover
  $('[data-toggle=\'tooltip\']').tooltip({container: 'body'});

  // makes tooltips work on ajax generated content
  $(document).ajaxStop(function() {
    $('[data-toggle=\'tooltip\']').tooltip({container: 'body'});
  });

  // dropdown menu
  $('.dropdown-menu input').click(function(e) {
    e.stopPropagation();
  });

  updateCartQuantity();

});

// fixed header
$(document).ready(function() {
  var nav = $("header");

  if ($("#home").length > 0) {
    $(window).scroll(function() {
      if ($(this).scrollTop() > 700) {
        nav.addClass("header-bg");
      } else {
        nav.removeClass("header-bg");
      }
    });
  } else {
      $(window).scroll(function() {
        if ($(this).scrollTop() > 72) {
          nav.addClass("header-bg");
        } else {
          nav.removeClass("header-bg");
        }
      });
  }
});

// side navigation
$(function() {
    function a() {
        e.toggleClass(j), d.toggleClass(i), f.toggleClass(k), g.toggleClass(l)
    }

    function b() {
        e.addClass(j), d.animate({
            left: "0px"
        }, n), f.animate({
            left: o
        }, n), g.animate({
            left: o
        }, n)
    }

    function c() {
        e.removeClass(j), d.animate({
            left: "-" + o
        }, n), f.animate({
            left: "0px"
        }, n), g.animate({
            left: "0px"
        }, n)
    }
    var d = $(".side-nav"),
        e = $("body"),
        f = $("#container"),
        g = $(".push"),
        h = $(".site-overlay"),
        i = "side-nav-left side-nav-open",
        j = "side-nav-active",
        k = "container-push",
        l = "push-push",
        m = $(".menu-btn, .side-nav a"),
        n = 200,
        o = d.width() + "px";
    if (cssTransforms3d = function() {
            var a = document.createElement("p"),
                b = !1,
                c = {
                    webkitTransform: "-webkit-transform",
                    OTransform: "-o-transform",
                    msTransform: "-ms-transform",
                    MozTransform: "-moz-transform",
                    transform: "transform"
                };
            document.body.insertBefore(a, null);
            for (var d in c) void 0 !== a.style[d] && (a.style[d] = "translate3d(1px,1px,1px)", b = window.getComputedStyle(a).getPropertyValue(c[d]));
            return document.body.removeChild(a), void 0 !== b && b.length > 0 && "none" !== b
        }()) m.click(function() {
        a()
    }), h.click(function() {
        a()
    });
    else {
        d.css({
            left: "-" + o
        }), f.css({
            "overflow-x": "hidden"
        });
        var p = !0;
        m.click(function() {
            p ? (b(), p = !1) : (c(), p = !0)
        }), h.click(function() {
            p ? (b(), p = !1) : (c(), p = !0)
        })
    }
});

// cart add remove functions
var cart = {
  'add': function(product_id, quantity) {
    $.ajax({
      url: 'index.php?route=checkout/cart/add',
      type: 'post',
      data: 'product_id=' + product_id + '&quantity=' + (typeof(quantity) != 'undefined' ? quantity : 1),
      dataType: 'json',
      complete: function() {
        $('#cart > button').button('reset');
      },
      success: function(json) {
        $('.alert, .text-danger').remove();

        if (json.redirect) {
          location = json.redirect;
        }

        if (json.success) {
          $('#content').parent().before('<div class="alert alert-success">' + json.success + '<button type="button" class="close" data-dismiss="alert"><i class="icon ion-ios-close-empty"></i></button></div>');

          setTimeout(function () {

            $('#cart-total').html(json.total);

            updateCartQuantity();

          }, 100);

          $('html, body').animate({ scrollTop: 0 }, 'slow');

          $('#cart > ul').load('index.php?route=common/cart/info ul li');

        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
      }
    });
  },
  'update': function(key, quantity) {
    $.ajax({
      url: 'index.php?route=checkout/cart/edit',
      type: 'post',
      data: 'key=' + key + '&quantity=' + (typeof(quantity) != 'undefined' ? quantity : 1),
      dataType: 'json',
      complete: function() {
        $('#cart > button').button('reset');
      },
      success: function(json) {
        setTimeout(function () {

          $('#cart-total').html(json.total);

          updateCartQuantity();

        }, 100);

        if (getURLVar('route') == 'checkout/cart' || getURLVar('route') == 'checkout/checkout') {
          location = 'index.php?route=checkout/cart';
        } else {
          $('#cart > ul').load('index.php?route=common/cart/info ul li');
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
      }
    });
  },
  'remove': function(key) {
    $.ajax({
      url: 'index.php?route=checkout/cart/remove',
      type: 'post',
      data: 'key=' + key,
      dataType: 'json',
      complete: function() {
        $('#cart > button').button('reset');
      },
      success: function(json) {
        setTimeout(function () {

          $('#cart-total').html(json.total);

          updateCartQuantity();

        }, 100);

        if (getURLVar('route') == 'checkout/cart' || getURLVar('route') == 'checkout/checkout') {
          location = 'index.php?route=checkout/cart';
        } else {
          $('#cart > ul').load('index.php?route=common/cart/info ul li');
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
      }
    });
  }
};

var voucher = {
  'add': function() {

  },
  'remove': function(key) {
    $.ajax({
      url: 'index.php?route=checkout/cart/remove',
      type: 'post',
      data: 'key=' + key,
      dataType: 'json',
      complete: function() {
        $('#cart > button').button('reset');
      },
      success: function(json) {
        setTimeout(function () {

          $('#cart-total').html(json.total);

          updateCartQuantity();

        }, 100);

        if (getURLVar('route') == 'checkout/cart' || getURLVar('route') == 'checkout/checkout') {
          location = 'index.php?route=checkout/cart';
        } else {
          $('#cart > ul').load('index.php?route=common/cart/info ul li');
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
      }
    });
  }
};

var wishlist = {
  'add': function(product_id) {
    $.ajax({
      url: 'index.php?route=account/wishlist/add',
      type: 'post',
      data: 'product_id=' + product_id,
      dataType: 'json',
      success: function(json) {
        $('.alert').remove();

        if (json.redirect) {
          location = json.redirect;
        }

        if (json.success) {
          $('#content').parent().before('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json.success + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
        }

        $('#wishlist-total span').html(json.total);
        $('#wishlist-total').attr('title', json.total);

        $('html, body').animate({ scrollTop: 0 }, 'slow');
      },
      error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
      }
    });
  },
  'remove': function() {

  }
};

var compare = {
  'add': function(product_id) {
    $.ajax({
      url: 'index.php?route=product/compare/add',
      type: 'post',
      data: 'product_id=' + product_id,
      dataType: 'json',
      success: function(json) {
        $('.alert').remove();

        if (json.success) {
          $('#content').parent().before('<div class="alert alert-success">' + json.success + '<button type="button" class="close" data-dismiss="alert"><i class="icon ion-ios-close-empty"></i></button></div>');

          $('#compare-total').html(json.total);

          $('html, body').animate({ scrollTop: 0 }, 'slow');
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
      }
    });
  },
  'remove': function() {

  }
};

// agree to terms
$(document).delegate('.agree', 'click', function(e) {
  e.preventDefault();

  $('#modal-agree').remove();

  var element = this;

  $.ajax({
    url: $(element).attr('href'),
    type: 'get',
    dataType: 'html',
    success: function(data) {
      html  = '<div id="modal-agree" class="modal">';
      html += '  <div class="modal-dialog">';
      html += '    <div class="modal-content">';
      html += '      <div class="modal-header">';
      html += '        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>';
      html += '        <h4 class="modal-title">' + $(element).text() + '</h4>';
      html += '      </div>';
      html += '      <div class="modal-body">' + data + '</div>';
      html += '    </div';
      html += '  </div>';
      html += '</div>';

      $('body').append(html);

      $('#modal-agree').modal('show');
    }
  });
});

// autocomplete
(function($) {
  $.fn.autocomplete = function(option) {
    return this.each(function() {
      this.timer = null;
      this.items = [];

      $.extend(this, option);

      $(this).attr('autocomplete', 'off');

      // focus
      $(this).on('focus', function() {
        this.request();
      });

      // blur
      $(this).on('blur', function() {
        setTimeout(function(object) {
          object.hide();
        }, 200, this);
      });

      // keydown
      $(this).on('keydown', function(event) {
        switch(event.keyCode) {
          case 27: // escape
            this.hide();
            break;
          default:
            this.request();
            break;
        }
      });

      // click
      this.click = function(event) {
        event.preventDefault();

        value = $(event.target).parent().attr('data-value');

        if (value && this.items[value]) {
          this.select(this.items[value]);
        }
      };

      // show
      this.show = function() {
        var pos = $(this).position();

        $(this).siblings('ul.dropdown-menu').css({
          top: pos.top + $(this).outerHeight(),
          left: pos.left
        });

        $(this).siblings('ul.dropdown-menu').show();
      };

      // hide
      this.hide = function() {
        $(this).siblings('ul.dropdown-menu').hide();
      };

      // request
      this.request = function() {
        clearTimeout(this.timer);

        this.timer = setTimeout(function(object) {
          object.source($(object).val(), $.proxy(object.response, object));
        }, 200, this);
      };

      // response
      this.response = function(json) {
        html = '';

        if (json.length) {
          for (i = 0; i < json.length; i++) {
            this.items[json[i].value] = json[i];
          }

          for (i = 0; i < json.length; i++) {
            if (!json[i].category) {
              html += '<li data-value="' + json[i].value + '"><a href="#">' + json[i].label + '</a></li>';
            }
          }

          // get all the ones with a categories
          var category = [];

          for (i = 0; i < json.length; i++) {
            if (json[i].category) {
              if (!category[json[i].category]) {
                category[json[i].category] = [];
                category[json[i].category].name = json[i].category;
                category[json[i].category].item = [];
              }

              category[json[i].category].item.push(json[i]);
            }
          }

          for (var i in category) {
            html += '<li class="dropdown-header">' + category[i].name + '</li>';

            for (j = 0; j < category[i].item.length; j++) {
              html += '<li data-value="' + category[i].item[j].value + '"><a href="#">&nbsp;&nbsp;&nbsp;' + category[i].item[j].label + '</a></li>';
            }
          }
        }

        if (html) {
          this.show();
        } else {
          this.hide();
        }

        $(this).siblings('ul.dropdown-menu').html(html);
      };

      $(this).after('<ul class="dropdown-menu"></ul>');
      $(this).siblings('ul.dropdown-menu').delegate('a', 'click', $.proxy(this.click, this)); 

    });
  };
})(window.jQuery);
