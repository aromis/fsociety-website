window.onload = () => {
    Vue.component('example', require('./components/Example.vue'));
    const app = new Vue({
        el: '#test'
    });
};