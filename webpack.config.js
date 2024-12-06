const Encore = require('@symfony/webpack-encore'); // Import the Encore library from Symfony

// Configure the runtime environment if it is not already configured
if (!Encore.isRuntimeEnvironmentConfigured()) {
    Encore.configureRuntimeEnvironment(process.env.NODE_ENV || 'dev'); // Set the runtime environment to the value of NODE_ENV or 'dev' if NODE_ENV is not set
}

Encore
    .setOutputPath('public/build/')
    .setPublicPath('/build')
    .addEntry('app', './assets/js/app.js')
    .addEntry('delete', './assets/js/delete.js')
    .splitEntryChunks()
    .enableSingleRuntimeChunk()
    .cleanupOutputBeforeBuild()
    .enableBuildNotifications()
    .enableSourceMaps(!Encore.isProduction())
    .enableVersioning(Encore.isProduction())
    .configureBabelPresetEnv((config) => {
        config.useBuiltIns = 'usage';
        config.corejs = '3.23';
    })
    .enableReactPreset()
    .enablePostCssLoader() // Ajout du support pour PostCSS
    .addStyleEntry('styles', './assets/styles/app.css'); // Ajout d'une entrée spécifique pour les styles CSS


module.exports = Encore.getWebpackConfig(); // Export the final Webpack configuration
