
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

var menu = $('.menu__wrapper');
var nav = $('.navigation__wrapper');

var openMain = function () {
    menu.animate({'font-size': 0}, 200, null, nav.animate({'font-size': '.8em'}, 600));
};
var openMenu = function () {
    nav.animate({'font-size': 0}, 400, null, menu.animate({'font-size': '.8em'}, 400));
};

$('.navigation__in-circle').on('click', openMenu);
$('.menu__return').on('click', openMain);

openMain();