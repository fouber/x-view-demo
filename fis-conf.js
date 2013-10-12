//fis.config.set('namespace', 'common');
fis.config.set('roadmap.path', [
    {
        reg : '**.php',
        url : '$&',
        release : '/template/$&',
        useMap : true
    },
    {
        reg : /^^\/([a-z_]+-)*map\.json$/i,
        release : '/map/$&'
    },
    {
        reg : '**',
        release : '/static/$&'
    }
]);

fis.config.set('pack', {
    'pkg/aio.js' : [ 'a.js', 'test.js' ]
});