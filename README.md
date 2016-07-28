#quanton-responsive-table
##Responsive table solutions for mobile applications

###Why should I use this solution?
Two easy solutions for the problem of using tables with small screens on mobile phones. 
These solutions transforms an HTML table from multi column to single column. 
To view the other columns, these solutions use a select or a carousel placed on the table cell headers.

For examples, visit:

[Quanton-table-responsive-carousel](http://www.ciaomondo.it/code/quanton-responsive-table/table-responsive-carousel.php)

[Quanton-table-responsive-select](http://www.ciaomondo.it/code/quanton-responsive-table/table-responsive-select.php)

And some nice aplications. 
You can use the Responsive table to create a gallery. Have a look.

[Quanton-table-responsive-gallery](http://www.ciaomondo.it/code/quanton-responsive-table/table-responsive-gallery.php)

###License
Released under the MIT license - http://opensource.org/licenses/MIT

##Installation

###Step 1: Link required files
**For the select**
```html
<!-- jQuery library (served from Google) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- table.responsive.select Javascript file -->
<script src="table.responsive.select.js"></script>
<!-- table.responsive.select CSS file -->
<link href="table.responsive.select.css" rel="stylesheet" />
```
**For the carousel**
```html
<!-- jQuery library (served from Google) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- table.responsive.carousel Javascript file -->
<script src="table.responsive.carousel.js"></script>
<!-- table.responsive.carousel CSS file -->
<link href="table.responsive.carousel.css" rel="stylesheet" />
```

###Step 2: Add a class and an (id of your choice) to the table
**For the select**
add a `class="t-r-s" id="my-table-1"` to the table. The id can have any value, the class must be `class="t-r-s"`.
**For the carousel**
add a `<table class="t-r-c" id="my-table-1">` to the table. The id can have any value, the class must be `class="t-r-c"`.

###Step 3: On document ready call
**For the select**
```javascript
$(document).ready(function(){
  var responsiveTableSelect = new ResponsiveTableSelect('my-table-1');
});
```
**For the carousel**
```javascript
$(document).ready(function(){
  var responsiveTableCarousel1 = new ResponsiveTableCarousel('my-table-1');
});
```

##Configuration options

Since only one column is visible, the scripts permits you to change the order of the column viewed at first. To accomplish this add `class="h-a"` to the `<th>` that you like. If you place the class to the third `<th>` the visible column whould be the third. This configuration works for both of the scripts, **select** and **carousel**.

```html
<th class='h-a'> 
  Third 
</th>
```

There can be used multiple tables in the same page. Just use different ids and use the right javascript

```javascript
$(document).ready(function(){
  var responsiveTableCarousel1 = new ResponsiveTableCarousel('my-table-carousel-1');
  var responsiveTableCarousel2 = new ResponsiveTableCarousel('my-table-carousel-2');
  var responsiveTableSelect1 = new ResponsiveTableSelect('my-table-select-1');
  var responsiveTableSelect2 = new ResponsiveTableSelect('my-table-select-2');
});
```

Enjoy.
