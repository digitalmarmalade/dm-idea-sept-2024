if ('function' === typeof importScripts) {
    importScripts('https://storage.googleapis.com/workbox-cdn/releases/3.3.0/workbox-sw.js');
    workbox.setConfig({
    debug: 0
    });

    workbox.core.setCacheNameDetails({
    prefix: 'crossword-4021',
    precache: 'precache',
    runtime: 'runtime',
    googleAnalytics: 'precache'
    });
        workbox.core.setLogLevel(workbox.core.LOG_LEVELS.silent);
    
    workbox.precaching.precacheAndRoute([
    {
        "url": "img\/completion-icon.png",
        "revision": 1589292127
    },
    {
        "url": "img\/try-again-icon.png",
        "revision": 1589292127
    },
    {
        "url": "data.json",
        "revision": 1589292131
    },
    {
        "url": "assets\/icons\/list.svg",
        "revision": 1589292127
    },
    {
        "url": "assets\/icons\/delete.svg",
        "revision": 1589292127
    },
    {
        "url": "assets\/icons\/reset.svg",
        "revision": 1589292127
    },
    {
        "url": "assets\/icons\/close.svg",
        "revision": 1589292127
    },
    {
        "url": "assets\/icons\/check.svg",
        "revision": 1589292127
    },
    {
        "url": "assets\/icons\/previous.svg",
        "revision": 1589292127
    },
    {
        "url": "assets\/icons\/reveal.svg",
        "revision": 1589292127
    },
    {
        "url": "assets\/icons\/more.svg",
        "revision": 1589292127
    },
    {
        "url": "assets\/icons\/pencil.svg",
        "revision": 1589292127
    },
    {
        "url": "assets\/icons\/next.svg",
        "revision": 1589292127
    },
    {
        "url": "assets\/icons\/pen.svg",
        "revision": 1589292127
    },
    {
        "url": "assets\/svg-defs.svg",
        "revision": 1589292127
    },
    {
        "url": "mp3\/tock.mp3",
        "revision": 1589292127
    },
    {
        "url": "locale.json",
        "revision": 1589292127
    },
    {
        "url": "js\/vendor\/axios.min.js",
        "revision": 1589292127
    },
    {
        "url": "js\/vendor\/jquery-3.4.1.min.js",
        "revision": 1589292127
    },
    {
        "url": "js\/vendor\/vue.js",
        "revision": 1589292127
    },
    {
        "url": "js\/crossword-vue.js",
        "revision": 1589292127
    },
    {
        "url": "js\/crossword-print.vue.js",
        "revision": 1589292127
    },
    {
        "url": "js\/core-puzzle.js",
        "revision": 1589292127
    },
    {
        "url": "js\/polyfills.js",
        "revision": 1589292127
    },
    {
        "url": "js\/class.crossword-tealium.js",
        "revision": 1589292127
    },
    {
        "url": "js\/core-puzzle-vue.js",
        "revision": 1589292127
    },
    {
        "url": "js\/class.marmalytics.js",
        "revision": 1589292127
    },
    {
        "url": "js\/crossword.js",
        "revision": 1589292127
    },
    {
        "url": "js\/class.dm-storage.js",
        "revision": 1589292127
    },
    {
        "url": "js\/class.tealium.js",
        "revision": 1589292127
    },
    {
        "url": "js\/class.dm-timer.js",
        "revision": 1589292127
    },
    {
        "url": "puzzle.pdf",
        "revision": 1589292131
    },
    {
        "url": "css\/main.css",
        "revision": 1589292127
    },
    {
        "url": "index.html",
        "revision": 1589292127
    },
    {
        "url": "fonts\/TimesClassicDisplayW00-Md.ttf",
        "revision": 1589292127
    },
    {
        "url": "fonts\/TimesClassicTextW00-Bold.woff",
        "revision": 1589292127
    },
    {
        "url": "fonts\/TimesClassicTextW00-MdIt.woff",
        "revision": 1589292127
    },
    {
        "url": "fonts\/TimesClassicTextW00-Medium.woff",
        "revision": 1589292127
    },
    {
        "url": "fonts\/TimesClassicDisplayW00-Rg.woff2",
        "revision": 1589292127
    },
    {
        "url": "fonts\/TimesClassicDisplayW05-Md.woff",
        "revision": 1589292127
    },
    {
        "url": "fonts\/TimesClassicDisplayW00-Rg.ttf",
        "revision": 1589292127
    },
    {
        "url": "fonts\/TimesClassicTextW00-BoldIt.woff",
        "revision": 1589292127
    },
    {
        "url": "fonts\/TimesClassicTextW05-Regular.woff",
        "revision": 1589292127
    },
    {
        "url": "fonts\/TimesClassicDisplayW05-Rg.woff2",
        "revision": 1589292127
    },
    {
        "url": "fonts\/TimesClassicDisplayW00-Bold.woff",
        "revision": 1589292127
    },
    {
        "url": "fonts\/TimesClassicDisplayW00-Rg.eot",
        "revision": 1589292127
    },
    {
        "url": "fonts\/TimesClassicTextW00-Regular.woff",
        "revision": 1589292127
    },
    {
        "url": "fonts\/TimesClassicTextW00-Italic.woff",
        "revision": 1589292127
    },
    {
        "url": "fonts\/TimesClassicDisplayW00-Md.woff2",
        "revision": 1589292127
    },
    {
        "url": "fonts\/TimesClassicTextW05-Medium.woff",
        "revision": 1589292127
    },
    {
        "url": "fonts\/TimesClassicDisplayW00-Md.eot",
        "revision": 1589292127
    },
    {
        "url": "fonts\/TimesClassicDisplayW05-Rg.woff",
        "revision": 1589292127
    },
    {
        "url": "fonts\/TimesClassicDisplayW00-Rg.woff",
        "revision": 1589292127
    },
    {
        "url": "fonts\/TimesClassicTextW05-Italic.woff",
        "revision": 1589292127
    },
    {
        "url": "fonts\/TimesClassicTextW05-Bold.woff",
        "revision": 1589292127
    },
    {
        "url": "fonts\/TimesClassicDisplayW00-Md.woff",
        "revision": 1589292127
    },
    {
        "url": "fonts\/TimesClassicDisplayW05-Bold.woff",
        "revision": 1589292127
    },
    {
        "url": "fonts\/TimesClassicTextW05-MdIt.woff",
        "revision": 1589292127
    },
    {
        "url": "fonts\/TimesClassicTextW05-BoldIt.woff",
        "revision": 1589292127
    },
    {
        "url": "css\/brand.css",
        "revision": 1589292131
    },
    {
        "url": "sw.js",
        "revision": 1589292131
    }
]);

    workbox.routing.registerRoute(/\.(?:js|css|png|gif|jpg|svg|json|html)$/,
    workbox.strategies.networkFirst()
    );

    workbox.googleAnalytics.initialize({
    parameterOverrides: {
    dimension1: 'offline',
    },
    });
}
