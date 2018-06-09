
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});

require('./cycle');

var menu = $('.menu__wrapper');
var nav = $('.navigation__wrapper');

var openMain = function () {
    menu.animate({'font-size': 0}, 500, null, nav.animate({'font-size': '.8em'}, 600));
};
var openMenu = function () {
    nav.animate({'font-size': 0}, 400, null, menu.animate({'font-size': '.8em'}, 400));
};
var slidePicture = function () {
    var container_list = $('.item-block');
    container_list.each(function (index, element) {
        var kids = $(element).children();
        var count = kids.length;
        var $kid;
        for (var i = 0; i < count; i++) {
            $kid = $(kids[i]);
            if ($kid.css('display') === 'block') {
                $kid.css('display', 'none');
                $(kids[++i < count ? i : 0]).css('display', 'block');
                break;
            }
        }
    });
};

$('.navigation__in-circle').on('click', openMenu);
$('.menu__return').on('click', openMain);

$(document).ready(function () {
    setTimeout(openMain, 2000);
    setInterval(slidePicture, 2000);
});