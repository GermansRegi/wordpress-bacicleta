=== WP-Routes Plugin ===
Contributors: Mark Taylor
Donate link: http://www.bikes.org.uk/about/
Tags: cycling, cycling routes, google maps, gps, gpsies, maps, mountain bike trails, routes, route finder, tracks, trails,
Requires at least: 2.5
Tested up to: 3.4.2
Stable tag: 0.4

Add Cycle Routes, Mountain Bike Trails, Running Tracks, Walking Routes and much more to your posts and pages.

== Description ==

WP-Routes Plugin allows you to embed routes into wordpress posts and pages. It is ideal for Wordpress Blogs dedicated to cyclists, mountain bikers, runners, joggers, walkers, hikers, swimmers, canoeists, sailers, motorbikers and anyone else looking for routes, trails or tracks, on roads, paths, trails or even on water. 

<h2>WP-Routes</h2>

<p><a href="http://www.gpsies.com/">GPSies</a> is an interactive service that lets you view, print or download routes, tracks and trails. These routes are available on-screen for those researching new tracks, printable for those who want to take a paper copy with them or downloadable to a wide variety of devices for those a little more tech savvy.</p>

<p>Routes are searchable by an interactive map and list details such as distance, elevation, route characteristics etc. It uses the GPSies API [http://www.gpsies.com/api/GPSiesAPI_en.pdf] and allows you to embed GPS maps direct into your wordpress blog.</p>

<p>Based on an original idea by Flavio Alberti [http://flavio.alicubi.net/gpsiesembed/] and further developed by <a href="https://plus.google.com/106960773695030875332/about">Mark Taylor</a> at <a href="http://www.bikes.org.uk/">Bikes.org.uk</a>.</p>

<h2>Map Features</h2>

The WP-Routes plugin feature rich and fully interactive maps. Key features include;

* Interactive Map
* Zoom In &amp; Out
* Highlighted Route
* Route Distances in kilometers &amp; miles
* Altitudes in meters &amp; feet
* Dynamic Altitude Profile
* Altitude Range (min &amp; max altitudes)
* Total Climb &amp; Descents
* Printable Map
* Download to GPS Devices
* Track Types
* Locations (country, city, latitude, longitude)

One of the things that puts this GPS route finder ahead of other web services is that each route can be downloaded in a wide variety of file types, including downloads to all the leading GPS devices. This is the full range of downloadable options;

* On-Screen via GPSies Website
* Printable Routes
* Google Earth .kml or .kmz file
* GPX Route & Trail
* CSV or MS Excel file
* PCX5 Track
* Garmin Course CRS & TCX
* OVL (ASCII)
* Fugawi
* KOMPASS Verlag
* GeoRSS Track
* OziExplorer
* MagicMaps IKT
* JSON Track
* PathAway
* Navigon RTE 5.x & 6.x
* Navigon Freshroute
* TomTom ITN
* Magellan Track
* CompeGPS Track
* qpeGPS Track
* Garmin Logbook

== Installation ==

1. Upload the entire 'wp-routes' folder to the '/wp-content/plugins/' directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Add New Post or Edit Post, and insert the desired [gpsies ...] code
4. More info at http://www.bikes.org.uk/route-finder/wp-routes-plugin/

<h2>Localization</h2>

If you have translated into your language, please let me know.

== Changelog ==

= version 0.4 =

* Some minor bug fixes to the display elements

= version 0.3 =

* Some minor bug fixes
* Improvements to API interaction
* Improvements to displayed content
* Changes to trackInfo.php and wp-routes.php files

= version 0.2 =
* Minor changes to readme.txt and wp-routes.php files

= version 0.1 =
* WP-Routes Plugin Launched

== Frequently Asked Questions ==

<h2>How to Display Routes</h2>

1. Go to http://www.gpsies.com
2. Search for the route that you want to display on your blog
3. Once selected, extract the 'fileId' from the URL
4. Insert the 'fileId' into the following code and add to your blog post or page [gpsies fileId=mzyvqctfxssgxdjy show=full]

<h2>WP-Routes Plugin Demo</h2>

The following demo uses the <em>North Wirral Loop</em> cycle route, which can be found at the following page on the <a href="http://www.gpsies.com/map.do?fileId=mzyvqctfxssgxdjy" target="_blank" >GPSies website</a>.

As you will see from that page, the fileId can be taken direct from the URL,

<code>http://www.gpsies.com/map.do?fileId=mzyvqctfxssgxdjy</code>

<code>fileId=mzyvqctfxssgxdjy</code>

Using the WP-Routes Plugin code [gpsies ...], insert the fileId to produce the map.

[gpsies fileId=mzyvqctfxssgxdjy show=full]

An example of how this should look can be seen on the following page - <a href="http://www.bikes.org.uk/north-wirral-cycle-loop/">North Wirral Cycle Loop Map</a>.

== Screenshots ==

An example of how this should look can be seen on the following page - <a href="http://www.bikes.org.uk/north-wirral-cycle-loop/">North Wirral Cycle Loop Map</a>.
