var ResponsiveTableCarousel = function (id) {
    this.element = undefined;
    this.numThs = 0;
    this.init = function () {
        this.numThs = $('table#' + id + ' th').size();
        $('table#' + id + ' tr:first-child').prepend('<th id="p-b" class="h-p-b">&nbsp;</th><th class="h-h">Select</th><th id="n-b" class="h-n-b">&nbsp;</th>');
        this.paintResponsiveTableCarousel();
    };
    this.createResponsiveTableCarousel = function() {
        if (($(window).width() < 767)) {
            var tdsToShow = $(this.element).index() - 2;
            $('table#' + id + ' tr th').css('display', 'none');
            $('table#' + id + ' tr td').css('display', 'none');
            $('table#' + id + ' tr th.h-p-b').css('display', 'inline-block');
            $('table#' + id + ' tr th.h-n-b').css('display', 'inline-block');
            $('table#' + id + ' tr th.h-h').css('display', 'inline-block');
            $('table#' + id + ' tr th:nth-child(2)').text($(this.element).text());
            $('table#' + id + ' tr td:nth-child('+tdsToShow+')').css( 'display', 'table-cell' );
        }
    };
    this.paintResponsiveTableCarousel = function() {
        if (($(window).width() < 767)) {
            this.element = $('table#' + id + ' tr th.h-a')[0];
            if(this.element === undefined)
            {
                this.element = $('table#' + id + ' tr th:nth-child(4)');
                $('table#' + id + ' tr th:nth-child(4)').addClass('h-a');
            }
            this.refreshNextPrevTable();
            this.createResponsiveTableCarousel();
        }
        else {
            $('table#' + id + ' tr th').css('display', 'table-cell');
            $('table#' + id + ' tr th.h-p-b').css('display', 'none');
            $('table#' + id + ' tr th.h-n-b').css('display', 'none');
            $('table#' + id + ' tr th.h-h').css('display', 'none');
            $('table#' + id + ' tr td').css('display', 'table-cell');
        }
    };
    this.paintNextPrevTable = function (side) {
        var currentActive = $('table#' + id + ' tr th.h-a').index() + 1;
        $('table#' + id + ' tr th.h-a').removeClass('h-a');
        switch(side) {
            case 'prev':
                currentActive = currentActive - 1;
                $('table#' + id + ' tr th:nth-child('+currentActive+')').addClass('h-a');
                break;
            case 'next':
                currentActive = currentActive + 1;
                $('table#' + id + ' tr th:nth-child('+currentActive+')').addClass('h-a');
                break;
        }
    };
    this.refreshNextPrevTable = function (side) {
        var currentActive = $('table#' + id + ' tr th.h-a').index() + 1;
        if(currentActive >= 5) {
            $('table#' + id + ' tr th:first-child').attr('id', 'p-b');
        } else {
            $('table#' + id + ' tr th:first-child').attr('id', 'p-b-h');
        }
        if(currentActive <= ((this.numThs + 3) - 1)) {
            $('table#' + id + ' tr th:nth-child(3)').attr('id', 'n-b');
        } else {
            $('table#' + id + ' tr th:nth-child(3)').attr('id', 'n-b-h');
        }
    };
    var self = this;
    $(window).on('resize', {self: self}, function(){
        self.paintResponsiveTableCarousel();
    });
    $(document).on('click', 'table#' + id + ' tr th#p-b', {self: self}, function() {
        self.paintNextPrevTable('prev');
        self.paintResponsiveTableCarousel();
    });
    $(document).on('click', 'table#' + id + ' tr th#n-b', {self: self}, function() {
        self.paintNextPrevTable('next');
        self.paintResponsiveTableCarousel();
    });
    this.init();
};
