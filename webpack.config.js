let webpack = require('webpack');
let path = require('path');

module.exports = {
    entry: './resources/js/app.js',

    output: {
        path: path.resolve(__dirname, 'public/js'),
        filename: 'app.js',
        publicPath: './public'
    },

    resolve: {
        alias: {
            'vue$': 'vue/dist/vue.common.js' // 'vue/dist/vue.common.js' for webpack 1
        }
    }


};
