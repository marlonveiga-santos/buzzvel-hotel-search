<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<div align="center">
  <h1>Laravel/PHP Practical exercise - package</h1>
<h2>How to use</h2>
<p> Install with Packagist:</p>
<p> <code> composer require marveiga/hotel_search_package </code> </p>
<p> If the package not load automatically, then run the command:</p>
<code>composer dump-autoload</code>
<p>You can call the main method inside your controller. The method is:</p>
<code>Search::getNearbyHotels( $latitude, $longitude, $orderby )</code>
<p> This package creates two routes inside your project:</p>
<code>/search</code>
and
<code>/response</code>
<h2>Aditional features</h2>
<p> You can publish the views of this package for free customization with the command:</p>
<code>php artisan vendor:publish</code>
<p> And then select the respective number of this package</p>
<p> One practical example can be seen on the main branch of the package repository in Github.</p>
<h2>Technologies used</h2>
<ul>
<li>PHP</li>
<li>Laravel</li>
<li>Laravel</li>
<li>Composer</li>
<li>Bootstrap</li>
</ul>
<h2>Known issues</h2>

<h2>Personal note</h2>
</div>
