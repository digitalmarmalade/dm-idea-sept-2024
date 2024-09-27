if ('function' === typeof importScripts) {
    importScripts('https://storage.googleapis.com/workbox-cdn/releases/3.3.0/workbox-sw.js');
    workbox.setConfig({
    debug: 1
    });

    workbox.core.setCacheNameDetails({
    prefix: 'wordsearch-108',
    precache: 'precache',
    runtime: 'runtime',
    googleAnalytics: 'precache'
    });
        workbox.core.setLogLevel(workbox.core.LOG_LEVELS.debug);
    
    workbox.precaching.precacheAndRoute([
    {
        "url": "css\/AvenirNextLTPro-BoldCn.otf",
        "revision": 1607956771
    },
    {
        "url": "css\/main.css",
        "revision": 1607956771
    },
    {
        "url": "css\/main.css.map",
        "revision": 1607956771
    },
    {
        "url": "data.json",
        "revision": 1607956772
    },
    {
        "url": "fonts\/3A92D6_0_0.eot",
        "revision": 1607956771
    },
    {
        "url": "fonts\/3A92D6_0_0.ttf",
        "revision": 1607956771
    },
    {
        "url": "fonts\/3A92D6_0_0.woff",
        "revision": 1607956771
    },
    {
        "url": "fonts\/3A92D6_0_0.woff2",
        "revision": 1607956771
    },
    {
        "url": "fonts\/3A92D6_1_0.eot",
        "revision": 1607956771
    },
    {
        "url": "fonts\/3A92D6_1_0.ttf",
        "revision": 1607956771
    },
    {
        "url": "fonts\/3A92D6_1_0.woff",
        "revision": 1607956771
    },
    {
        "url": "fonts\/3A92D6_1_0.woff2",
        "revision": 1607956771
    },
    {
        "url": "fonts\/3A92D6_2_0.eot",
        "revision": 1607956771
    },
    {
        "url": "fonts\/3A92D6_2_0.ttf",
        "revision": 1607956771
    },
    {
        "url": "fonts\/3A92D6_2_0.woff",
        "revision": 1607956771
    },
    {
        "url": "fonts\/3A92D6_2_0.woff2",
        "revision": 1607956771
    },
    {
        "url": "fonts\/3A92D6_3_0.eot",
        "revision": 1607956771
    },
    {
        "url": "fonts\/3A92D6_3_0.ttf",
        "revision": 1607956771
    },
    {
        "url": "fonts\/3A92D6_3_0.woff",
        "revision": 1607956771
    },
    {
        "url": "fonts\/3A92D6_3_0.woff2",
        "revision": 1607956771
    },
    {
        "url": "fonts\/bluunext-bold-webfont.svg",
        "revision": 1607956771
    },
    {
        "url": "fonts\/bluunext-bold-webfont.woff",
        "revision": 1607956771
    },
    {
        "url": "fonts\/bluunext-bold-webfont.woff2",
        "revision": 1607956771
    },
    {
        "url": "fonts\/bluunext-bold.ttf",
        "revision": 1607956771
    },
    {
        "url": "img\/circle-0.svg",
        "revision": 1607956771
    },
    {
        "url": "img\/circle-1.svg",
        "revision": 1607956771
    },
    {
        "url": "img\/circle-10.svg",
        "revision": 1607956771
    },
    {
        "url": "img\/circle-2.svg",
        "revision": 1607956771
    },
    {
        "url": "img\/circle-3.svg",
        "revision": 1607956771
    },
    {
        "url": "img\/circle-4.svg",
        "revision": 1607956771
    },
    {
        "url": "img\/circle-5.svg",
        "revision": 1607956771
    },
    {
        "url": "img\/circle-6.svg",
        "revision": 1607956771
    },
    {
        "url": "img\/circle-7.svg",
        "revision": 1607956771
    },
    {
        "url": "img\/circle-8.svg",
        "revision": 1607956771
    },
    {
        "url": "img\/circle-9.svg",
        "revision": 1607956771
    },
    {
        "url": "img\/circle.svg",
        "revision": 1607956771
    },
    {
        "url": "img\/explosion.png",
        "revision": 1607956771
    },
    {
        "url": "img\/firework-sprite-min.png",
        "revision": 1607956771
    },
    {
        "url": "img\/icons\/check.svg",
        "revision": 1607956771
    },
    {
        "url": "img\/icons\/email.svg",
        "revision": 1607956772
    },
    {
        "url": "img\/icons\/help.svg",
        "revision": 1607956772
    },
    {
        "url": "img\/icons\/life-empty.svg",
        "revision": 1607956772
    },
    {
        "url": "img\/icons\/life-full.svg",
        "revision": 1607956772
    },
    {
        "url": "img\/icons\/list-view.svg",
        "revision": 1607956772
    },
    {
        "url": "img\/icons\/more.svg",
        "revision": 1607956772
    },
    {
        "url": "img\/icons\/pen-pencil.svg",
        "revision": 1607956772
    },
    {
        "url": "img\/icons\/redo.svg",
        "revision": 1607956772
    },
    {
        "url": "img\/icons\/reset.svg",
        "revision": 1607956772
    },
    {
        "url": "img\/icons\/reveal.svg",
        "revision": 1607956772
    },
    {
        "url": "img\/icons\/settings.svg",
        "revision": 1607956772
    },
    {
        "url": "img\/icons\/text-size.svg",
        "revision": 1607956772
    },
    {
        "url": "img\/icons\/undo.svg",
        "revision": 1607956772
    },
    {
        "url": "img\/logo.png",
        "revision": 1607956772
    },
    {
        "url": "img\/logo.svg",
        "revision": 1607956772
    },
    {
        "url": "img\/sprite2.png",
        "revision": 1607956772
    },
    {
        "url": "img\/sprites-600-min.png",
        "revision": 1607956772
    },
    {
        "url": "img\/sprites-600.png",
        "revision": 1607956772
    },
    {
        "url": "index.html",
        "revision": 1607956772
    },
    {
        "url": "js\/class.dm-storage.js",
        "revision": 1607956772
    },
    {
        "url": "js\/class.dm-timer.js",
        "revision": 1607956772
    },
    {
        "url": "js\/class.marmalytics.js",
        "revision": 1607956772
    },
    {
        "url": "js\/class.tealium.js",
        "revision": 1607956772
    },
    {
        "url": "js\/class.wordsearch-tealium.js",
        "revision": 1607956772
    },
    {
        "url": "js\/client.js",
        "revision": 1607956772
    },
    {
        "url": "js\/core-puzzle-vue.js",
        "revision": 1607956772
    },
    {
        "url": "js\/core-puzzle.js",
        "revision": 1607956772
    },
    {
        "url": "js\/polyfills.js",
        "revision": 1607956772
    },
    {
        "url": "js\/vendor\/axios.min.js",
        "revision": 1607956772
    },
    {
        "url": "js\/vendor\/bodymovin.js",
        "revision": 1607956772
    },
    {
        "url": "js\/vendor\/Draggable.min.js",
        "revision": 1607956772
    },
    {
        "url": "js\/vendor\/jquery-2.2.4.min.js",
        "revision": 1607956772
    },
    {
        "url": "js\/vendor\/jquery-3.4.1.min.js",
        "revision": 1607956772
    },
    {
        "url": "js\/vendor\/lottie.min.js",
        "revision": 1607956772
    },
    {
        "url": "js\/vendor\/TweenMax.min.js",
        "revision": 1607956772
    },
    {
        "url": "js\/vendor\/vue.js",
        "revision": 1607956772
    },
    {
        "url": "js\/wordsearch-drag.js",
        "revision": 1607956772
    },
    {
        "url": "js\/wordsearch-vue.js",
        "revision": 1607956772
    },
    {
        "url": "js\/wordsearch.js",
        "revision": 1607956772
    },
    {
        "url": "locale.json",
        "revision": 1607956772
    },
    {
        "url": "lottie\/lightning-bolt-large.json",
        "revision": 1607956772
    },
    {
        "url": "lottie\/lives.json",
        "revision": 1607956772
    },
    {
        "url": "lottie\/timeturner-black.json",
        "revision": 1607956772
    },
    {
        "url": "scss\/components\/_action-buttons.scss",
        "revision": 1607956772
    },
    {
        "url": "scss\/components\/_animations.scss",
        "revision": 1607956772
    },
    {
        "url": "scss\/components\/_buttons.scss",
        "revision": 1607956772
    },
    {
        "url": "scss\/components\/_default.scss",
        "revision": 1607956772
    },
    {
        "url": "scss\/components\/_font-size.scss",
        "revision": 1607956772
    },
    {
        "url": "scss\/components\/_fonts.scss",
        "revision": 1607956772
    },
    {
        "url": "scss\/components\/_form-checkbox.scss",
        "revision": 1607956772
    },
    {
        "url": "scss\/components\/_help.scss",
        "revision": 1607956772
    },
    {
        "url": "scss\/components\/_ie11.scss",
        "revision": 1607956772
    },
    {
        "url": "scss\/components\/_layout.scss",
        "revision": 1607956772
    },
    {
        "url": "scss\/components\/_menu-bar.scss",
        "revision": 1607956772
    },
    {
        "url": "scss\/components\/_modal.scss",
        "revision": 1607956772
    },
    {
        "url": "scss\/components\/_overlays.scss",
        "revision": 1607956772
    },
    {
        "url": "scss\/components\/_secret-letters.scss",
        "revision": 1607956772
    },
    {
        "url": "scss\/components\/_settings-menu.scss",
        "revision": 1607956772
    },
    {
        "url": "scss\/components\/_timer.scss",
        "revision": 1607956772
    },
    {
        "url": "scss\/components\/_tooltips.scss",
        "revision": 1607956772
    },
    {
        "url": "scss\/components\/_word-list.scss",
        "revision": 1607956772
    },
    {
        "url": "scss\/components\/_wordsearch-grid.scss",
        "revision": 1607956772
    },
    {
        "url": "scss\/main.scss",
        "revision": 1607956772
    },
    {
        "url": "scss\/_print.scss",
        "revision": 1607956772
    },
    {
        "url": "scss\/_reset.scss",
        "revision": 1607956772
    },
    {
        "url": "scss\/_variables.scss",
        "revision": 1607956772
    },
    {
        "url": "css\/brand.css",
        "revision": 1607956772
    },
    {
        "url": "sw.js",
        "revision": 1607956772
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
