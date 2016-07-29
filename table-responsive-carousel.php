<!DOCTYPE html>
<html>
    <head>
        <title>Responsive Carousel Table for Mobile</title>
        <meta content="responsive table, responsive carousel table, jquery css responsive table, responsive table mobile" name="keywords">
        <meta content="Responsive table, single column visible for mobile, scroll between columns using a carousel" name="description">
        <meta content="Quanton81" name="author">
        <meta content="text/html; charset=ISO-8859-1" http-equiv="Content-Type">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <link href="table.responsive.carousel.css" rel="stylesheet" />
    </head>
    <body>
        <h1>Responsive carousel table</h1>
        <h2>Responsive table for mobile with single column visible. Use of carousel to view the desired column</h2>
        <p>
            An easy solution for the problem of using tables with small screens on mobile phones. This solution transforms an HTML table from multi column to single column. To view the other columns, this solution uses a carousel placed on the table cell headers.
        </p>
        <p>
            This solution works only if the table has the <code>&lt;th&gt;</code> tag.
        </p>
        <p>
            To use this solution three steps are required:
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
                    Add to the table <code>class="t-r-c"</code> and an <code>id="..."</code> of your choice
                </li>
                <li>
                    On document ready call <code>var responsiveTableCarousel = new ResponsiveTableCarousel('my-table-1');</code> where <i>my-table-1</i> is an <code>id</code> of your choice
                </li>
            </ol>
        </p>
        <p><b>Tip:</b> If you are using a desktop browser resize your browser to see the changes.</p>
        <p>
            Since only one column is visible, the script permits you to change the order of the column viewed at first. To accomplish this add the <code>class="h-a"</code> to the <code>&lt;th&gt;</code> that you like. In the example beneath the visible column is the third.
            <code>
                &lt;th class='h-a'&gt;
                    Third
                &lt;/th&gt;
            </code>
        </p>
        <table id="my-table-1" class="t-r-c">
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
        <p>
            In the example beneath the first column is viewed by default. No <code>class="h-a"</code> at any <code>&lt;th&gt;</code> has been set.
        </p>
        <table id='my-table-2' class='t-r-c'>
            <tbody>
                <tr>
                    <th>
                        First
                    </th>
                    <th>
                        Second
                    </th>
                    <th>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="table.responsive.carousel.js"></script>
        <script>
            $(document).ready(function () {
                var responsiveTableCarousel1 = new ResponsiveTableCarousel('my-table-1');
                var responsiveTableCarousel2 = new ResponsiveTableCarousel('my-table-2');
            });
        </script>
    </body>
</html>
