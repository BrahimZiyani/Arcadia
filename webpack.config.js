const Encore = require('@symfony/webpack-encore');

// Configure le runtime environnement si ce n'est pas déjà fait
if (!Encore.isRuntimeEnvironmentConfigured()) {
    Encore.configureRuntimeEnvironment(process.env.NODE_ENV || 'dev');
}

Encore
    // Répertoire où les assets compilés seront stockés
    .setOutputPath('public/build/')
    // Chemin public utilisé par le serveur web pour accéder aux assets
    .setPublicPath('/build')
    // Ajouter une entrée pour l'application
    .addEntry('app', './assets/js/app.js')
    // Permet de diviser les fichiers en plus petits morceaux pour une optimisation accrue
    .splitEntryChunks()
    // Active un fichier de runtime unique
    .enableSingleRuntimeChunk()
    // Nettoie le répertoire de sortie avant chaque build
    .cleanupOutputBeforeBuild()
    // Active les notifications de build
    .enableBuildNotifications()
    // Active les maps sources pour le debug (désactivé en production)
    .enableSourceMaps(!Encore.isProduction())
    // Active les noms de fichiers avec hash pour le cache busting
    .enableVersioning(Encore.isProduction())
    // Configure Babel pour utiliser des polyfills
    .configureBabelPresetEnv((config) => {
        config.useBuiltIns = 'usage';
        config.corejs = '3.23';
    })
    // Active le preset React
    .enableReactPreset()
;

module.exports = Encore.getWebpackConfig();
