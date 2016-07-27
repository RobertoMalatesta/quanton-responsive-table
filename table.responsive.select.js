var ResponsiveTableSelect = function (id) {
    this.element = undefined;
    this.tdsToShow = undefined;
    this.tdsOption = undefined;
    this.init = function () {
        $('table#' + id + ' tr:first-child').prepend('<th class="h-s">Select</th>');
        this.paintResponsiveTable();
    };
    this.createResponsiveTable = function () {
        if (($(window).width() < 767) && $(this.element).hasClass('h-c')) {
            this.tdsOption = $(this.element).index() + 1;
            this.tdsToShow = this.tdsOption - 1;
            $('table#' + id + ' tr th').css('display', 'none');
            $('table#' + id + ' tr td').css('display', 'none');
            $('table#' + id + ' tr th:not(.h-s)').each(function () {
                $(this).removeClass('h-c');
            });
            $('table#' + id + ' tr th.h-s').css('display', 'block');
            $('table#' + id + ' tr th:not(.h-s)').css('display', 'block');
            $('table#' + id + ' tr th.h-s').text($(this.element).text());
            $('table#' + id + ' tr td:nth-child(' + this.tdsToShow + ')').css('display', 'table-cell');
        } else if (($(window).width() < 767)) {
            this.tdsOption = $(this.element).index() + 1;
            this.tdsToShow = this.tdsOption - 1;
            $('table#' + id + ' tr th:not(.h-s)').each(function () {
                $(this).removeClass('h-a');
            });
            $('table#' + id + ' tr th:not(.h-s):nth-child(' + this.tdsOption + ')').addClass('h-a');
            $('table#' + id + ' tr th:not(.h-s):nth-child(' + this.tdsOption + ')').addClass('h-c');
            $('table#' + id + ' tr td').css('display', 'none');
            $('table#' + id + ' tr td:nth-child(' + this.tdsToShow + ')').css('display', 'table-cell');
            $('table#' + id + ' tr th.h-s').css('display', 'none');
            $('table#' + id + ' tr th:not(.h-s)').css('display', 'none');
            $('table#' + id + ' tr th.h-a').css('display', 'block');
        }
    };
    this.paintResponsiveTable = function () {
        if (($(window).width() < 767)) {
            this.element = $('table#' + id + ' tr th.h-a')[0];
            if (this.element === undefined)
            {
                this.element = $('table#' + id + ' tr th:nth-child(2)');
                $('table#' + id + ' tr th:nth-child(2)').addClass('h-a');
            }
            $(this.element).removeClass('h-c');
            this.createResponsiveTable();
        } else {
            $('table#' + id + ' tr th').css('display', 'table-cell');
            $('table#' + id + ' tr th.h-s').css('display', 'none');
            $('table#' + id + ' tr td').css('display', 'table-cell');
        }
    };
    var self = this;
    $(window).on('resize', {self: self}, function () {
        self.paintResponsiveTable();
    });
    $(document).on('click', 'table#' + id + ' tr th:not(.h-s)', {self: self}, function () {
        self.element = this;
        self.createResponsiveTable();
    });
    this.init();
};
