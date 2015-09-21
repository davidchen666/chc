/**
 * Created with ATOM
 * User: hyanwang wanghaiyan@iresearch.com.cn
 * Date: 15-6-10
 * Time: 下午4:57
 * twig.js
 * copy parent node and append to next node
 */
//exp:
//        $p.com.twig("#user_attr", {
  //twig: '.twig',
  //    plus: ".userattr_plus",
  //    minus: ".userattr_minus",
  //    limit_num: 2,
  //    init: function () {
  //},
  //complete: function (tag_id) {
  //  $('#' + tag_id + '>.col-md-4>.form-group>#userattr_condition').attr('disabled', 'disable');
  //  $('#' + tag_id + '>.col-md-4>.form-group>#userattr_where').attr('disabled', 'disable');
  //  // console.log($(this)[0].body);
  //  if (typeof opt === 'function') {
  //    opt();
  //  } else {
  //    console.log(opt);
  //  }
  //}
  //});

define(function (require, exports, module) {
  var g = window;

  function Twig() {
    this.init = function (selector, options) {
      //var twig_id = '_' + (Math.random() * 1E18).toString(36).slice(0, 5).toUpperCase();
      var clone_exmplate = $(selector + '>' + options.twig);
      var i = 0; //id计数
      var id_tag = selector.substring(1, selector.length); //删除头一个字符作为id的标签
      clone_exmplate.attr('id', id_tag + i);
      if (typeof options.init === 'function') {
        options.init();
      }
      if ($(selector + '>' + options.twig) === 1) {
        $(selector + '>' + options.twig + '>' + options.minus).addClass('disable');
      }

      i = $(selector).children(options.twig).length;
      // plus stuff
      $(document).delegate(options.plus, 'click', function () {

        $(this).parent(options.twig).attr('co_twig', i);
        i++;

        //限定条数
        // if(parseInt(options.limit_num) == (parseInt(i)+1)){
        //   console.log(options.plus);
        //   $(options.plus).attr('disabled','disable');
        // }

        if (typeof options.body != 'undefined' || options.body != '') {
          var tmp = clone_exmplate.clone();
        } else {
          var tmp = options.body;
        }
        var item_html = tmp.attr('id', id_tag + i).outerHTML();
        $(selector).append(item_html);
        if (typeof options.complete === 'function') {
          options.complete(id_tag + i);
        }
      });
      // minus stuff
      $(document).delegate(options.minus, 'click', function () {
        //只剩一下一条的时候不做减少操作
        if ($(selector + '>' + options.twig).length === 1) {
          console.log('只有一条了');
          // $(this).attr({disable:'disable'});
          $(this).addClass('disable');
        } else {
          console.log($(selector + '>' + options.twig).length);
          $(this).parents(options.twig).remove();
          // console.log($(this).parents().find(options.twig));
        }
      });
    }
  }

  g[PagurianAlias].com.twig = function (selector, options) {
    var twig = new Twig();
    twig.init(selector, options);
    return twig;
  }
});
