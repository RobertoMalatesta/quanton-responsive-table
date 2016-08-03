function empty(mixed_var) {
    var undef, key, i, len;
    var emptyValues = [undef, null, false, 0, '', '0'];

    for (i = 0, len = emptyValues.length; i < len; i++) {
        if (mixed_var === emptyValues[i]) {
            return true;
        }
    }

    if (typeof mixed_var === 'object') {
        for (key in mixed_var) {
            return false;
        }
        
        return true;
    }

    return false;
}

function isset() {
    var a = arguments, l = a.length, i = 0, undef;

    if (l === 0) {
        throw new Error('Empty isset');
    }

    while (i !== l) {
        if (a[i] === undef || a[i] === null) {
            return false;
        }
        
        i++;
    }
    
    return true;
}

var ResponsiveTableCarousel = function (parameters) {
    var self = this;
    this.element = undefined;
    this.numThs = 0;
    this.id = parameters.id;
    
    this.mobileStart = !empty(parameters.mobile) && !empty(parameters.mobile.start) && parameters.mobile.start > 0 ? parameters.mobile.start : 1;
    this.mobileActive = !empty(parameters.mobile) && !empty(parameters.mobile.active) && parameters.mobile.active > 0 ? parameters.mobile.active : 1;
    this.mobileVWidth = !empty(parameters.mobile) && !empty(parameters.mobile.vWidth) && parameters.mobile.vWidth > 0 ? parameters.mobile.vWidth : 768;
    
    this.tabletStart = !empty(parameters.tablet) && !empty(parameters.tablet.start) && parameters.tablet.start > 0 ? parameters.tablet.start : 1;
    this.tabletActive = !empty(parameters.tablet) && !empty(parameters.tablet.active) && parameters.tablet.active > 0 ? parameters.tablet.active : 1;
    this.tabletVWidth = !empty(parameters.tablet) && !empty(parameters.tablet.vWidth) && parameters.tablet.vWidth > 0 ? parameters.tablet.vWidth : 1024;
    
    this.init = function () {
        if(isset(this.id)) {
            $('table#' + this.id).addClass('t-r-c');
            this.numThs = $('table#' + this.id + ' th').size();
            this.mobileActive = Math.min(this.mobileActive, this.numThs - (this.mobileStart - 1));
            this.tabletActive = Math.min(this.tabletActive, this.numThs - (this.tabletStart - 1));
            this.navThs();
            this.paintResponsiveTableCarousel();
        }
    };
    this.navThs = function() {
        $('table#' + this.id + ' tr th.h-p-b').remove();
        $('table#' + this.id + ' tr th.h-h').remove();
        $('table#' + this.id + ' tr th.h-n-b').remove();
        if (($(window).width() >= this.mobileVWidth) && ($(window).width() < this.tabletVWidth)) {
            if(this.tabletStart > 1) {
                $('table#' + this.id + ' tr:first-child th:nth-child('+(this.tabletStart - 1)+')').after('<th id="p-b" class="h-p-b">&nbsp;</th><th class="h-h">Select</th><th id="n-b" class="h-n-b">&nbsp;</th>');
            } else {
                $('table#' + this.id + ' tr:first-child').prepend('<th id="p-b" class="h-p-b">&nbsp;</th><th class="h-h">Select</th><th id="n-b" class="h-n-b">&nbsp;</th>');
            }
        } else if (($(window).width() < this.mobileVWidth)) {
            if(this.mobileStart > 1) {
                $('table#' + this.id + ' tr:first-child th:nth-child('+(this.mobileStart - 1)+')').after('<th id="p-b" class="h-p-b">&nbsp;</th><th class="h-h">Select</th><th id="n-b" class="h-n-b">&nbsp;</th>');
            } else {
                $('table#' + this.id + ' tr:first-child').prepend('<th id="p-b" class="h-p-b">&nbsp;</th><th class="h-h">Select</th><th id="n-b" class="h-n-b">&nbsp;</th>');
            }
        } 
        
    };
    this.createResponsiveTableCarousel = function() {
        if (($(window).width() >= this.mobileVWidth) && ($(window).width() < this.tabletVWidth)) {
            var tdsToShow = $(this.element).index() - 2;
            for(var i = this.tabletStart; i <= this.numThs + 3; i++) {
                $('table#' + this.id + ' tr th:nth-child('+i+')').css('display', 'none');
            }
            for(var i = this.tabletStart; i <= this.numThs; i++) {
                $('table#' + this.id + ' tr td:nth-child('+i+')').css('display', 'none');
            }
            $('table#' + this.id + ' tr th.h-p-b').css('display', 'inline-block');
            $('table#' + this.id + ' tr th.h-n-b').css('display', 'inline-block');
            $('table#' + this.id + ' tr th.h-h').text($(this.element).text()).css('display', 'inline-block');
            $('table#' + this.id + ' tr td:nth-child('+(tdsToShow)+')').css( 'display', 'table-cell' );
        } else if (($(window).width() < this.mobileVWidth)) {
            var tdsToShow = $(this.element).index() - 2;
            for(var i = this.mobileStart; i <= this.numThs + 3; i++) {
                $('table#' + this.id + ' tr th:nth-child('+i+')').css('display', 'none');
            }
            for(var i = this.mobileStart; i <= this.numThs; i++) {
                $('table#' + this.id + ' tr td:nth-child('+i+')').css('display', 'none');
            }
            $('table#' + this.id + ' tr th.h-p-b').css('display', 'inline-block');
            $('table#' + this.id + ' tr th.h-n-b').css('display', 'inline-block');
            $('table#' + this.id + ' tr th.h-h').text($(this.element).text()).css('display', 'inline-block');
            $('table#' + this.id + ' tr td:nth-child('+(tdsToShow)+')').css( 'display', 'table-cell' );
        } 
    };
    this.paintResponsiveTableCarousel = function() {
        $('table#' + this.id + ' tr th').css('display', 'table-cell');
        $('table#' + this.id + ' tr th.h-p-b').css('display', 'none');
        $('table#' + this.id + ' tr th.h-n-b').css('display', 'none');
        $('table#' + this.id + ' tr th.h-h').css('display', 'none');
        $('table#' + this.id + ' tr td').css('display', 'table-cell');
            
        if (($(window).width() >= this.mobileVWidth) && ($(window).width() < this.tabletVWidth)) {
            this.element = $('table#' + this.id + ' tr th.h-a')[0];
            if(this.element === undefined) {
                this.element = $('table#' + this.id + ' tr th:nth-child('+(this.tabletStart+3+(this.tabletActive-1))+')');
                $('table#' + this.id + ' tr th:nth-child('+(this.tabletStart+3+(this.tabletActive-1))+')').addClass('h-a');
            }
            this.refreshNextPrevTable();
            this.createResponsiveTableCarousel();
        } else if (($(window).width() < this.mobileVWidth)) {
            this.element = $('table#' + this.id + ' tr th.h-a')[0];
            if(this.element === undefined) {
                this.element = $('table#' + this.id + ' tr th:nth-child('+(this.mobileStart+3+(this.mobileActive-1))+')');
                $('table#' + this.id + ' tr th:nth-child('+(this.mobileStart+3+(this.mobileActive-1))+')').addClass('h-a');
            }
            this.refreshNextPrevTable();
            this.createResponsiveTableCarousel();
        }
    };
    this.paintNextPrevTable = function (side) {
        var currentActive = $('table#' + this.id + ' tr th.h-a').index();
        $('table#' + this.id + ' tr th.h-a').removeClass('h-a');
        switch(side) {
            case 'prev':
                $('table#' + this.id + ' tr th:nth-child('+currentActive+')').addClass('h-a');
                break;
            case 'next':
                currentActive = currentActive + 2;
                $('table#' + this.id + ' tr th:nth-child('+currentActive+')').addClass('h-a');
                break;
        }
    };
    this.refreshNextPrevTable = function () {
        var currentActive = $('table#' + this.id + ' tr th.h-a').index();
        
        if (($(window).width() >= this.mobileVWidth) && ($(window).width() < this.tabletVWidth)) {
            if(currentActive >= (this.tabletStart + 3)) {
                $('table#' + this.id + ' tr th:nth-child('+(this.tabletStart)+')').attr('id', 'p-b');
            } else {
                $('table#' + this.id + ' tr th:nth-child('+(this.tabletStart)+')').attr('id', 'p-b-h');
            }
            if(currentActive <= (this.numThs + 1)) {
                $('table#' + this.id + ' tr th:nth-child('+(this.tabletStart+2)+')').attr('id', 'n-b');
            } else {
                $('table#' + this.id + ' tr th:nth-child('+(this.tabletStart+2)+')').attr('id', 'n-b-h');
            }
        } else if (($(window).width() < this.mobileVWidth)) {
            if(currentActive >= (this.mobileStart + 3)) {
                $('table#' + this.id + ' tr th:nth-child('+(this.mobileStart)+')').attr('id', 'p-b');
            } else {
                $('table#' + this.id + ' tr th:nth-child('+(this.mobileStart)+')').attr('id', 'p-b-h');
            }
            if(currentActive <= (this.numThs + 1)) {
                $('table#' + this.id + ' tr th:nth-child('+(this.mobileStart+2)+')').attr('id', 'n-b');
            } else {
                $('table#' + this.id + ' tr th:nth-child('+(this.mobileStart+2)+')').attr('id', 'n-b-h');
            }
        }
    };
    $(window).on('resize', {self: self}, function(){
        self.navThs();
        self.paintResponsiveTableCarousel();
    });
    $(document).on('click', 'table#' + this.id + ' tr th#p-b', {self: self}, function() {
        self.navThs();
        self.paintNextPrevTable('prev');
        self.paintResponsiveTableCarousel();
    });
    $(document).on('click', 'table#' + this.id + ' tr th#n-b', {self: self}, function() {
        self.navThs();
        self.paintNextPrevTable('next');
        self.paintResponsiveTableCarousel();
    });
    this.init();
};
