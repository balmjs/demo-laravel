const balm = require('balm');

balm.config = {
    inFrontend: false, // for PHP framework
    server: {
        proxy: 'your.project.local'
    },
    roots: {
        source: 'resources',
        target: 'public'
    },
    paths: {
        source: {
            css: 'sass',
            js: 'js'
        }
    },
    styles: {
        extname: 'scss'
    },
    scripts: {
        entry: './resources/assets/js/app.js'
    },
    assets: {
        // subDir: 'web',
        cache: true
    }
};

balm.go();
