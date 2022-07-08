'use strict';
var notify = $.notify('<i class="fa fa-cloud-upload"></i><strong>Loading</strong> skrin...', {
    type: 'theme',
    allow_dismiss: true,
    delay: 2000,
    timer: 300
});

setTimeout(function() {
    notify.update('message', '<i class="fa fa-cloud-upload"></i><strong>Loading</strong> Maklumat.');
}, 1000);
