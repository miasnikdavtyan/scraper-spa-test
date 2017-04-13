/**
 * Created by developer on 4/13/17.
 */
module.exports = {
    entry: './public/js/app.js',
    output: {
        path: '/var/www/scraper-spa-test/public/js',
        filename: 'bundle.js'
    },
    module: {
        // Special compilation rules
        // loaders: [
        //     {
        //         // Ask webpack to check: If this file ends with .js, then apply some transforms
        //         test: /\.js$/,
        //         // Transform it with babel
        //         loader: 'babel-loader',
        //         // don't transform node_modules folder (which don't need to be compiled)
        //         exclude: /node_modules/
        //     }
        // ]
    }
};