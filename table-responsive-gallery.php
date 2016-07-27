<!DOCTYPE html>
<html>
    <head>
        <title>Image Gallery for Mobile with Responsive Table</title>
        <meta content="responsive table gallery, responsive carousel table gallery, jquery css responsive table gallery, responsive table mobile gallery" name="keywords">
        <meta content="Responsive table gallery, single column gallery visible for mobile, scroll between columns using a carousel or a select" name="description">
        <meta content="Dott. Anton Duoda" name="author">
        <meta content="text/html; charset=ISO-8859-1" http-equiv="Content-Type">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <link href="table.responsive.carousel.css" rel="stylesheet" />
        <link href="table.responsive.select.css" rel="stylesheet" />
        <style>
            table.t-r-s tr th {
                text-align: left;
            }
            table.t-r-s tr th.h-s {
                padding-left: 5px;
            }
            table th img {
                vertical-align: middle;
                border-radius: 2px;
                margin-left: 5px;
            }
            table td {
                border-radius: 5px;
                text-align: center;
            }
            td img {
                width: calc(100% - 10px);
                padding: 5px;
                margin: 0;
            }
        </style>
    </head>
    <body>
        <h1>Image gallery with Table responsive</h1>
        <h2>Image gallery with Table responsive carousel</h2>
        <table id="my-table-carousel-1" class="t-r-c">
            <tbody>
                <tr>
                    <th>
                        First
                    </th>
                    <th>
                        Second
                    </th>
                    <th class="h-a">
                        Third
                    </th>
                    <th>
                        Fourth
                    </th>
                    <th>
                        Fifth
                    </th>
                </tr>
                <tr>
                    <td>
                        <img src="(1).jpg">
                    </td>
                    <td>
                        <img src="(2).jpg">
                    </td>
                    <td>
                        <img src="(3).jpg">
                    </td>
                    <td>
                        <img src="(4).jpg">
                    </td>
                    <td>
                        <img src="(5).jpg">
                    </td>
                </tr>
            </tbody>
        </table>
        <h2>Image gallery with Table responsive select</h2>
        <table id="my-table-select-1" class="t-r-s">
            <tbody>
                <tr>
                    <th>
                        <img src="(1).jpg" width="45"> First
                    </th>
                    <th>
                        <img src="(2).jpg" width="45"> Second
                    </th>
                    <th class="h-a">
                        <img src="(3).jpg" width="45"> Third
                    </th>
                    <th>
                        <img src="(4).jpg" width="45"> Fourth
                    </th>
                    <th>
                        <img src="(5).jpg" width="45"> Fifth
                    </th>
                </tr>
                <tr>
                    <td>
                        <img src="(1).jpg">
                    </td>
                    <td>
                        <img src="(2).jpg">
                    </td>
                    <td>
                        <img src="(3).jpg">
                    </td>
                    <td>
                        <img src="(4).jpg">
                    </td>
                    <td>
                        <img src="(5).jpg">
                    </td>
                </tr>
            </tbody>
        </table>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="table.responsive.carousel.js"></script>
        <script src="table.responsive.select.js"></script>
        <script>
            $(document).ready(function () {
                var responsiveTableCarousel1 = new ResponsiveTableCarousel('my-table-carousel-1');
                var responsiveTableSelect1 = new ResponsiveTableSelect('my-table-select-1');
            });
        </script>
    </body>
</html>
