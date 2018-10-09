Nova.booting((Vue, router) => {
    Vue.component('index-nova-header', require('./components/IndexField'));
    Vue.component('detail-nova-header', require('./components/DetailField'));
    Vue.component('form-nova-header', require('./components/FormField'));
})
