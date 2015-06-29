/**
 * Created with ATOM
 * User: hyanwang wanghaiyan@iresearch.com.cn
 * Date: 15-6-10
 * Time: 下午4:57
 * twig.js
 * copy parent node and append to next node
 */

define(function(require, exports, module) {
  var g = window;

  function Twig() {
    this.init = function(selector, options) {
      var clone_exmplate = $(selector + '>' + options.twig);
      var item_html = clone_exmplate.outerHTML();

      $(document).delegate(options.plus, 'click', function() {
        $(selector).append(item_html);
      });

      $(document).delegate(options.minus, 'click', function() {
        if ($(selector + '>' + options.twig).length === 1) {

        } else {
          $(this).parents(options.twig).remove();
          console.log($(this).parents().find(options.twig));
        }
      });
    }

  };
  g[PagurianAlias].com.twig = function(selector, options) {
    var twig = new Twig();
    twig.init(selector, options);
    return twig;
  }

});
