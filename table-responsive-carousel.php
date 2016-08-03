<!DOCTYPE html>
<html>
    <head>
        <title>Responsive Carousel Table v02 for Mobile</title>
        <meta content="responsive table, responsive carousel table, jquery css responsive table, responsive table mobile" name="keywords">
        <meta content="Responsive table, single column visible for mobile, scroll between columns using a carousel" name="description">
        <meta content="Dott. Anton Duoda" name="author">
        <meta content="text/html; charset=ISO-8859-1" http-equiv="Content-Type">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <link href="table.responsive.carousel.v02.css" rel="stylesheet" />
    </head>
    <body>
        <h1>Responsive carousel table</h1>
        <h2>Responsive table for mobile with selected columns visible. Use of carousel to view the other columns</h2>
        <p>
            An easy solution for the problem of using tables with small screens on mobile phones. This solution hides some of the columns of the table. To view the hided columns, this solution uses a carousel placed on the table cell headers.
        </p>
        <p>
            This solution works only if the table has the <code>&lt;th&gt;</code> tag.
        </p>
        <p>
            To use this solution three steps are required:
        </p>
        <ol>
            <li>
                Link required files:<br>
                <code>
                    &lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"&gt;&lt;/script&gt;<br>
                    &lt;script src="table.responsive.carousel.js"&gt;&lt;/script&gt;<br>
                    &lt;link href="table.responsive.carousel.css" rel="stylesheet" /&gt;
                </code>
            </li>
            <li>
                Add to the table an <code>id="..."</code> of your choice
            </li>
            <li>
                On document ready call: 
                <code>
                    var responsiveTableCarousel1 = new ResponsiveTableCarousel({
                        id: 'my-table-1',
                        start: 1, 
                        active: 1,
                        vWidth: 1024
                    });
                </code>
            </li>
            <li>
                Options for the carousel
                <ol>
                    <li>
                        <code>id</code> is the id of the selected table
                    </li>
                    <li>
                        <code>start</code> sets which columns will be visible and which will be visible with a carousel default 1
                    </li>
                    <li>
                        <code>active</code> sets which column of the ones beeing visible with a carosuel is active default 1
                    </li>
                    <li>
                        <code>vWidth</code> sets the width of the window on which to apply the carousel, default window.outerWidth
                    </li>
                </ol>
            </li>
        </ol>
        <p><b>Tip:</b> If <code>vWidth</code> is smaller than the window outer width resize your browser to see the changes.</p>
        <h3>Table without carousel</h3>
        <table class="t-r-c">
            <tr>
                <th>Flight</th>
                <th>Arriving</th>
                <th>Number</th>
                <th>Scheduled</th>
                <th>Estimated</th>
                <th>Details</th>
            </tr>
            <tr>
                <td>
                    Ryanair
                </td>
                <td>
                    COPENHAGEN
                            </td>
                <td>
                    FR2677
                            </td>
                <td>
                    12:05
                            </td>
                <td>
                    11:55
                            </td>
                <td>
                    Landed <strong>11:51</strong>
                </td>
            </tr>
            <tr>
                <td>
                    Ryanair
                </td>
                <td>
                    KOS
                            </td>
                <td>
                    FR2722
                            </td>
                <td>
                    12:05
                            </td>
                <td>
                    12:00
                            </td>
                <td>
                    Landed <strong>12:05</strong>
                </td>
            </tr>
            <tr>
                <td>
                    Royal Air Maroc
                </td>
                <td>
                    CASABLANCA
                            </td>
                <td>
                    AT946
                            </td>
                <td>
                    12:10
                            </td>
                <td>
                    12:10
                            </td>
                <td>
                    Landed <strong>12:06</strong>
                </td>
            </tr>
            <tr>
                <td>
                    Klm
                </td>
                <td>
                    AMSTERDAM
                            </td>
                <td>
                    KL1583
                            </td>
                <td>
                    12:35
                            </td>
                <td>
                    12:33
                            </td>
                <td>
                    Landed <strong>12:29</strong>
                </td>
            </tr>
            <tr>
                <td>
                    Air Dolomiti
                </td>
                <td>
                    MUNICH
                            </td>
                <td>
                    EN8240
                            </td>
                <td>
                    12:50
                            </td>
                <td>
                    12:39
                            </td>
                <td>
                    Landed <strong>12:37</strong>
                </td>
            </tr>
            <tr>
                <td>
                    Ryanair
                </td>
                <td>
                    VALENCIA
                            </td>
                <td>
                    FR6422
                            </td>
                <td>
                    15:10
                            </td>
                <td>
                    15:00
                            </td>
                <td>
                    Cancelled
                </td>
            </tr>
        </table>
        <h3>Table with carousel on first column with first element active no parameters</h3>
        <table id="my-table-1">
            <tr>
                <th>Flight</th>
                <th>Arriving</th>
                <th>Number</th>
                <th>Scheduled</th>
                <th>Estimated</th>
                <th>Details</th>
            </tr>
            <tr>
                <td>
                    Ryanair
                </td>
                <td>
                    COPENHAGEN
                            </td>
                <td>
                    FR2677
                            </td>
                <td>
                    12:05
                            </td>
                <td>
                    11:55
                            </td>
                <td>
                    Landed <strong>11:51</strong>
                </td>
            </tr>
            <tr>
                <td>
                    Ryanair
                </td>
                <td>
                    KOS
                            </td>
                <td>
                    FR2722
                            </td>
                <td>
                    12:05
                            </td>
                <td>
                    12:00
                            </td>
                <td>
                    Landed <strong>12:05</strong>
                </td>
            </tr>
            <tr>
                <td>
                    Royal Air Maroc
                </td>
                <td>
                    CASABLANCA
                            </td>
                <td>
                    AT946
                            </td>
                <td>
                    12:10
                            </td>
                <td>
                    12:10
                            </td>
                <td>
                    Landed <strong>12:06</strong>
                </td>
            </tr>
            <tr>
                <td>
                    Klm
                </td>
                <td>
                    AMSTERDAM
                            </td>
                <td>
                    KL1583
                            </td>
                <td>
                    12:35
                            </td>
                <td>
                    12:33
                            </td>
                <td>
                    Landed <strong>12:29</strong>
                </td>
            </tr>
            <tr>
                <td>
                    Air Dolomiti
                </td>
                <td>
                    MUNICH
                            </td>
                <td>
                    EN8240
                            </td>
                <td>
                    12:50
                            </td>
                <td>
                    12:39
                            </td>
                <td>
                    Landed <strong>12:37</strong>
                </td>
            </tr>
            <tr>
                <td>
                    Ryanair
                </td>
                <td>
                    VALENCIA
                            </td>
                <td>
                    FR6422
                            </td>
                <td>
                    15:10
                            </td>
                <td>
                    15:00
                            </td>
                <td>
                    Cancelled
                </td>
            </tr>
        </table>
        <h3>
            Table with carousel on second column with first element active mobile/tablet
        </h3>
        <div class="code">
            <code>
                <pre>{
    id: 'my-table-2',
    mobile: {
        start: 2, 
        active: 1 
    },
    tablet: {
        start: 2, 
        active: 1 
    }
}</pre>
            </code>
        </div>
        <table id="my-table-2">
            <tr>
                <th>Flight</th>
                <th>Arriving</th>
                <th>Number</th>
                <th>Scheduled</th>
                <th>Estimated</th>
                <th>Details</th>
            </tr>
            <tr>
                <td>
                    Ryanair
                </td>
                <td>
                    COPENHAGEN
                            </td>
                <td>
                    FR2677
                            </td>
                <td>
                    12:05
                            </td>
                <td>
                    11:55
                            </td>
                <td>
                    Landed <strong>11:51</strong>
                </td>
            </tr>
            <tr>
                <td>
                    Ryanair
                </td>
                <td>
                    KOS
                            </td>
                <td>
                    FR2722
                            </td>
                <td>
                    12:05
                            </td>
                <td>
                    12:00
                            </td>
                <td>
                    Landed <strong>12:05</strong>
                </td>
            </tr>
            <tr>
                <td>
                    Royal Air Maroc
                </td>
                <td>
                    CASABLANCA
                            </td>
                <td>
                    AT946
                            </td>
                <td>
                    12:10
                            </td>
                <td>
                    12:10
                            </td>
                <td>
                    Landed <strong>12:06</strong>
                </td>
            </tr>
            <tr>
                <td>
                    Klm
                </td>
                <td>
                    AMSTERDAM
                            </td>
                <td>
                    KL1583
                            </td>
                <td>
                    12:35
                            </td>
                <td>
                    12:33
                            </td>
                <td>
                    Landed <strong>12:29</strong>
                </td>
            </tr>
            <tr>
                <td>
                    Air Dolomiti
                </td>
                <td>
                    MUNICH
                            </td>
                <td>
                    EN8240
                            </td>
                <td>
                    12:50
                            </td>
                <td>
                    12:39
                            </td>
                <td>
                    Landed <strong>12:37</strong>
                </td>
            </tr>
            <tr>
                <td>
                    Ryanair
                </td>
                <td>
                    VALENCIA
                            </td>
                <td>
                    FR6422
                            </td>
                <td>
                    15:10
                            </td>
                <td>
                    15:00
                            </td>
                <td>
                    Cancelled
                </td>
            </tr>
        </table>
        <h3>Table with carousel on second column with third element active mobile/tablet</h3>
        <div class="code">
            <code>
                <pre>{
    id: 'my-table-3',
    mobile: {
        start: 2, 
        active: 3 
    },
    tablet: {
        start: 2, 
        active: 3 
    }
}</pre>
            </code>
        </div>
        <table id="my-table-3">
            <tr>
                <th>Flight</th>
                <th>Arriving</th>
                <th>Number</th>
                <th>Scheduled</th>
                <th>Estimated</th>
                <th>Details</th>
            </tr>
            <tr>
                <td>
                    Ryanair
                </td>
                <td>
                    COPENHAGEN
                            </td>
                <td>
                    FR2677
                            </td>
                <td>
                    12:05
                            </td>
                <td>
                    11:55
                            </td>
                <td>
                    Landed <strong>11:51</strong>
                </td>
            </tr>
            <tr>
                <td>
                    Ryanair
                </td>
                <td>
                    KOS
                            </td>
                <td>
                    FR2722
                            </td>
                <td>
                    12:05
                            </td>
                <td>
                    12:00
                            </td>
                <td>
                    Landed <strong>12:05</strong>
                </td>
            </tr>
            <tr>
                <td>
                    Royal Air Maroc
                </td>
                <td>
                    CASABLANCA
                            </td>
                <td>
                    AT946
                            </td>
                <td>
                    12:10
                            </td>
                <td>
                    12:10
                            </td>
                <td>
                    Landed <strong>12:06</strong>
                </td>
            </tr>
            <tr>
                <td>
                    Klm
                </td>
                <td>
                    AMSTERDAM
                            </td>
                <td>
                    KL1583
                            </td>
                <td>
                    12:35
                            </td>
                <td>
                    12:33
                            </td>
                <td>
                    Landed <strong>12:29</strong>
                </td>
            </tr>
            <tr>
                <td>
                    Air Dolomiti
                </td>
                <td>
                    MUNICH
                            </td>
                <td>
                    EN8240
                            </td>
                <td>
                    12:50
                            </td>
                <td>
                    12:39
                            </td>
                <td>
                    Landed <strong>12:37</strong>
                </td>
            </tr>
            <tr>
                <td>
                    Ryanair
                </td>
                <td>
                    VALENCIA
                            </td>
                <td>
                    FR6422
                            </td>
                <td>
                    15:10
                            </td>
                <td>
                    15:00
                            </td>
                <td>
                    Cancelled
                </td>
            </tr>
        </table>
        <h3>Table with carousel on second columnt with fifth element active mobile, and carousel on third element with fourth element active tablet</h3>
        <div class="code">
            <code>
                <pre>{
    id: 'my-table-4',
    mobile: {
        start: 2, 
        active: 5 
    },
    tablet: {
        start: 3, 
        active: 4 
    }
}</pre>
            </code>
        </div>
        <table id="my-table-4">
            <tr>
                <th>Flight</th>
                <th>Arriving</th>
                <th>Number</th>
                <th>Scheduled</th>
                <th>Estimated</th>
                <th>Details</th>
            </tr>
            <tr>
                <td>
                    Ryanair
                </td>
                <td>
                    COPENHAGEN
                            </td>
                <td>
                    FR2677
                            </td>
                <td>
                    12:05
                            </td>
                <td>
                    11:55
                            </td>
                <td>
                    Landed <strong>11:51</strong>
                </td>
            </tr>
            <tr>
                <td>
                    Ryanair
                </td>
                <td>
                    KOS
                            </td>
                <td>
                    FR2722
                            </td>
                <td>
                    12:05
                            </td>
                <td>
                    12:00
                            </td>
                <td>
                    Landed <strong>12:05</strong>
                </td>
            </tr>
            <tr>
                <td>
                    Royal Air Maroc
                </td>
                <td>
                    CASABLANCA
                            </td>
                <td>
                    AT946
                            </td>
                <td>
                    12:10
                            </td>
                <td>
                    12:10
                            </td>
                <td>
                    Landed <strong>12:06</strong>
                </td>
            </tr>
            <tr>
                <td>
                    Klm
                </td>
                <td>
                    AMSTERDAM
                            </td>
                <td>
                    KL1583
                            </td>
                <td>
                    12:35
                            </td>
                <td>
                    12:33
                            </td>
                <td>
                    Landed <strong>12:29</strong>
                </td>
            </tr>
            <tr>
                <td>
                    Air Dolomiti
                </td>
                <td>
                    MUNICH
                            </td>
                <td>
                    EN8240
                            </td>
                <td>
                    12:50
                            </td>
                <td>
                    12:39
                            </td>
                <td>
                    Landed <strong>12:37</strong>
                </td>
            </tr>
            <tr>
                <td>
                    Ryanair
                </td>
                <td>
                    VALENCIA
                            </td>
                <td>
                    FR6422
                            </td>
                <td>
                    15:10
                            </td>
                <td>
                    15:00
                            </td>
                <td>
                    Cancelled
                </td>
            </tr>
        </table>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="table.responsive.carousel.v02.js"></script>
        <script>
            $(document).ready(function () {
                var responsiveTableCarousel1 = new ResponsiveTableCarousel({
                    id: 'my-table-1'
                });
                var responsiveTableCarousel2 = new ResponsiveTableCarousel({
                    id: 'my-table-2',
                    mobile: {
                        start: 2, 
                        active: 1 
                    },
                    tablet: {
                        start: 2, 
                        active: 1 
                    }
                });
                var responsiveTableCarousel3 = new ResponsiveTableCarousel({
                    id: 'my-table-3',
                    mobile: {
                        start: 2, 
                        active: 3 
                    },
                    tablet: {
                        start: 2, 
                        active: 3 
                    }
                });
                var responsiveTableCarousel4 = new ResponsiveTableCarousel({
                    id: 'my-table-4',
                    mobile: {
                        start: 2, 
                        active: 5 
                    },
                    tablet: {
                        start: 3, 
                        active: 4 
                    }
                });
            });
        </script>
    </body>
</html>
