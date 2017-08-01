$(function () {

    var $wn = $(window),
        $h = $('#header_top'),
        $n = $('#main_nav'),
        $plax = $('#plax_background');


    $('.collapse').collapse({
        toggle: false
    });

    $('input[type=radio], input[type=checkbox], select').uniform();


    /*
     *
     * Listeners
     *
     */
    $('.airline').on('click', function () {
        $('.collapse').collapse('hide');

        $b = $(this).find('button');

        if ($b.hasClass('down')) {
            $b.text('Collapse').removeClass('down').addClass('up');
        } else {
            $b.text('Learn More').removeClass('up').addClass('down');
        }
    });

    $('.flight_simulator .button').on('click', function () {
        $b = $(this);

        if ($b.hasClass('down')) {
            $b.text('Collapse').removeClass('down').addClass('up');
        } else {
            $b.text('Learn More').removeClass('up').addClass('down');
        }
    });

    $wn.on({
        scroll : function () {

            ($wn.scrollTop() > 120) ? $n.addClass('freeze') : $n.removeClass('freeze');

            var st = $wn.scrollTop(),
                $dy = 0;

            dy = -.2 * st;

            $plax.attr('style','-webkit-transform: translate3d(0px, ' + dy + 'px, 0px);-moz-transform: translate3d(0px, ' + dy + 'px, 0px);transform: translate3d(0px, ' + dy + 'px, 0px);');
        }
    });

    $('form.wufoo').on('submit', function () {
        Wufoo.submit($(this));
        return false;
    });

    $('#show_nav').on('click', function () {
        $(this).toggleClass('close_menu');
        ($n.hasClass('show')) ? $n.removeClass('show') : $n.addClass('show');
        return false;
    });

    // Wufoo
    var Wufoo = (function () {

        // class vars
        var pub = {};

        /********************************************************
         * submit:void
         *
         * Submit form to wufoo
         ********************************************************
        /                                                      */
        pub.submit = function(form) {

            var $form = $(form),
                url  = '/lib/wufoo.php?hash=' + $form.data('wufooFormId'),
                data = $form.serialize();

            $.ajax({
                url        : url,
                type       : 'POST',
                data       : data,
                dataType   : 'xml',
                beforeSend : _before($form)
            }).done(function(resp) {
                switch($(resp).find('Success').text()) {
                    case '1':  // Success
                        _yeah($form, $(resp));
                        break;
                    case '0':  // Error(s)
                        _oops($form, $(resp));
                        break;
                }
            }).fail(function(resp) {
                _ef($(resp));
            });
        };

        /********************************************************
         * reset:void
         *
         * Resets the form back to init state
         ********************************************************
        /                                                      */
        pub.reset = function(form) {
            var $form = $(form);

            $form.removeClass('success');
            $form.find('.error').removeClass('error');
            $form.find('input[type=text], textarea').val('');
        }

        /********************************************************
         * _before:void
         *
         * Before form is sumbitted
         ********************************************************
        /                                                      */
        function _before($form) {
            $form.find('.error').removeClass('error');
        }

        /********************************************************
         * yeah:void
         *
         * If submit is a success
         ********************************************************
        /                                                      */
        function _yeah($form, $xml) {
            $form.parent().addClass('success');
        };

        /********************************************************
         * oops:void
         *
         * If there were validation errors
         ********************************************************
        /                                                      */
        function _oops($form, $xml) {
            $xml.find('ApiFieldError').each(function() {
              $form.find('#' + $(this).find('ID').text()).addClass('error');
            });
        };

        /********************************************************
         * ef:void
         *
         * If there was a failure to submit form
         ********************************************************
        /                                                      */
        function _ef($xml) {
            //console.log($xml);
        };

        return pub;
    }());
});
