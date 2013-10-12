//fis.config.set('namespace', 'common');
fis.config.set('roadmap.path', [
    {
        reg : 'index.php'
    },
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
        reg : 'README.md',
        release : false
    },
    {
        reg : '**',
        release : '/static/$&'
    }
]);

fis.config.set('pack', {
    'pkg/aio.js' : [ 'a.js', 'test.js' ]
});