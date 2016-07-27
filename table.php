<!DOCTYPE html>
<html>
    <head>
        <title>Responsive Table</title>
        <meta content="text/html; charset=ISO-8859-1" http-equiv="Content-Type">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <style>
            div.table-responsive table {
                width: 100%;
            }
            div.table-responsive table, th, td {
                border: 1px solid #000;
            }
            div.table-responsive table {
                border: none;
                border-spacing: 2px;
            }
            div.table-responsive td {
                padding: 5px;
            }
            div.table-responsive table tr th.selected:nth-child(1) {
                display: none;
            }
            @media screen and (max-width: 767px) {
                div.table-responsive table tr th.selected:nth-child(1) {
                    background-image: linear-gradient(45deg, transparent 50%, #000 50%), linear-gradient(135deg, #000 50%, transparent 50%);
                    background-position: calc(100% - 19px) calc(1em + -5px), calc(100% - 14px) calc(1em + -5px);
                    background-size: 5px 5px, 5px 5px;
                    background-repeat: no-repeat;
                    padding-top: 4px;
                    padding-bottom: 4px;
                    border: 1px solid #000;
                    border-radius: 1px;
                    box-shadow: 0px 0px 0px 2px rgba(0,0,0,0.2); 
                }
                div.table-responsive table tr th.option {
                    display: none;
                    padding-top: 4px;
                    padding-bottom: 4px;
                    position: relative;
                    border: none;
                    border-right: 1px solid #000;
                    border-left: 1px solid #000;
                }
                div.table-responsive table tr th.option:last-child {
                    border-bottom: 1px solid #000;
                }
                div.table-responsive table tr th.option:hover {
                    background-color: #bfbfbf;
                    text-decoration: none;
                    cursor: pointer;
                    color: #fff;
                }
                div.table-responsive table tr th.active {
                    background-color: #f2f2f2;
                    color: #000;
                    display: block;
                }
                div.table-responsive table tr.options th.closed {
                    background-image: linear-gradient(45deg, transparent 50%, #000 50%), linear-gradient(135deg, #000 50%, transparent 50%);
                    background-position: calc(100% - 19px) calc(1em + -5px), calc(100% - 14px) calc(1em + -5px);
                    background-size: 5px 5px, 5px 5px;
                    background-repeat: no-repeat;
                    border-top: 1px solid #000;
                    border-bottom: 1px solid #000;
                }
                div.table-responsive table tr.options th.closed:hover {
                    background-image: linear-gradient(45deg, transparent 50%, #fff 50%), linear-gradient(135deg, #fff 50%, transparent 50%);
                    background-position: calc(100% - 19px) calc(1em + -5px), calc(100% - 14px) calc(1em + -5px);
                    background-size: 5px 5px, 5px 5px;
                    background-repeat: no-repeat;
                }
                div.table-responsive table tr td {
                    display: none;
                }
                div.table-responsive table tr td:nth-child(1) {
                    display: table-cell;
                }
            }
        </style>
    </head>
    <body>
        <div class="table-responsive">
            <table>
                <tbody>
                    <tr class="options">
                        <th class="option">
                            First
                        </th>
                        <th class="option active closed">
                            Second
                        </th>
                        <th class="option">
                            Third
                        </th>
                        <th class="option">
                            Fourth
                        </th>
                        <th class="option">
                            Fifth
                        </th>
                    </tr>
                    <tr>
                        <td>
                            First 01
                        </td>
                        <td>
                            Second 01
                        </td>
                        <td>
                            Third 01
                        </td>
                        <td>
                            Fourth 01
                        </td>
                        <td>
                            Fifth 01
                        </td>
                    </tr>
                    <tr>
                        <td>
                            First 02
                        </td>
                        <td>
                            Second 02
                        </td>
                        <td>
                            Third 02
                        </td>
                        <td>
                            Fourth 02
                        </td>
                        <td>
                            Fifth 02
                        </td>
                    </tr>
                    <tr>
                        <td>
                            First 03
                        </td>
                        <td>
                            Second 03
                        </td>
                        <td>
                            Third 03
                        </td>
                        <td>
                            Fourth 03
                        </td>
                        <td>
                            Fifth 03
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <script>
            var tdsToShow = null;
            var tdsOption = null;
            var $this = null;
            $(document).ready(function () {
                var responsiveTable = function() {
                    if (($(window).width() < 767) && $($this).hasClass( "closed" )) {
                        $("div.table-responsive table tr th.option").each(function(){
                            $(this).removeClass('closed');
                        });
                        $('.selected').text($($this).text());
                        $('.selected').css('display', 'block');
                        $('.option').css('display', 'block');
                    } else if (($(window).width() < 767)) {
                        tdsOption = $($this).index() + 1;
                        tdsToShow = tdsOption - 1;
                        $("div.table-responsive table tr th.option").each(function(){
                            $(this).removeClass('active');
                        });
                        $("div.table-responsive table tr th.option:nth-child("+tdsOption+")").addClass('active');
                        $("div.table-responsive table tr th.option:nth-child("+tdsOption+")").addClass('closed');
                        $("div.table-responsive table tr td").css("display", "none");
                        $("div.table-responsive table tr td:nth-child("+tdsToShow+")").css( "display", "table-cell" );
                        $('.selected').css('display', 'none');            
                        $('.option').css('display', 'none');
                        $('.option.active').css('display', 'block');
                    }
                };
                
                var paintResponsiveTable = function() {
                    if (($(window).width() < 767)) {
                        $this = $("div.table-responsive table tr th.closed")[0];
                        $($this).removeClass('closed');
                        responsiveTable();
                    }
                    else {
                        $("div.table-responsive table tr th:not(.selected)").css("display", "table-cell");
                        $("div.table-responsive table tr td").css("display", "table-cell");
                    }
                };
                
                $(window).on('resize', function(){
                    paintResponsiveTable();
                });
                
                $("div.table-responsive table tr.options").prepend('<th class="selected">Select</th>');
                paintResponsiveTable();
                
                $('.option').on('click', function() {
                    $this = this;
                    responsiveTable();
                });
            });
        </script>
    </body>
</html>