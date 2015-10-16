/**
 * Created by hyanwang on 2015/10/8.
 * email:wanghaiyan@iresearch.com.cn
 */
'use strict';

define(function (require, exports, module) {
    var app = require('../../lib/app');
    var model = require('./model');

    app.page.reactjs = function () {

        var Component1 = React.createClass({
            displayName: 'Component1',

            render: function render() {
                return React.createElement(
                    'div',
                    { className: 'component1' },
                    'this is the first component'
                );
            }
        });

        ReactDOM.render(React.createElement(Component1, null), document.getElementById('helo'));
    };

    module.exports = app;
});