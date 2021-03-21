const path = require('path')
const webpack = require('webpack')

module.exports = {
    
    sassOptions: {
        includePaths: [path.join(__dirname, 'styles')],
    },
    async redirects() {
        return [
          {
            source: '/contact',
            destination: '/',
            permanent: true,
          },
        ]
    },
    webpack: (config, { dev }) => {
        config.plugins.push(
            new webpack.ProvidePlugin({
                '$': 'jquery',
                'jQuery': 'jquery',
            })
        )
        return config
    }
}

