
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./http-common');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

let options = {
    inputClasses: {
        valid: 'form-control-success',
        invalid: 'form-control-danger'
    }
};


Vue.component('example', require('./components/Example.vue'));

import {HTTP} from './http-common';
import VueForm from 'vue-form';

const app = new Vue({
    el: '#app',
    mixins: [new VueForm(options)],
    data: {
        formstate: {},
        message: 'Hello Vue!',
        model: {
            email: '',
        }
    },
    methods: {
        firstOrNewEmail: function(){
            HTTP.get(`/firstOrNewEmail`)
                .then(response => {
                    this.posts = response.data;
                    console.log(this.posts);
                })
                .catch(e => {
                    this.errors.push(e)
                });
            // this.message = this.message.split('').reverse().join('');
        },
        fieldClassName: function (field) {
            if(!field) {
                return '';
            }
            if((field.$touched || field.$submitted) && field.$valid) {
                return 'has-success';
            }
            if((field.$touched || field.$submitted) && field.$invalid) {
                return 'has-error';
            }
        }
    }
});



