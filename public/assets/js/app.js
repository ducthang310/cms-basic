
var _app = {
    init: function () {
        this.initSelect();
    },

    initSelect: function () {
        $('select').css('opacity', 0).material_select();

    }
};



$(document).ready(function() {
    _app.init();
});


