HTML 2 Module
=============
This module allows you to change HTML pages to a module.

READ EVERYTHING FIRST!!!

First make a backup copy of this folder, so you can reuse this over and over again if needed.

Simply rename the html/modules/Page Name to the name you want to show up for your module.  For example
I have a page that shows maps.  I would rename the folder to Maps.  

After you have installed this module you will be able to access it by this name.  
Using the previous example http://www.yoursite.com/modules.php?name=Maps

Then copy your html pages into the newly named folder along with your images.  

Make sure that the images are pointing correctly to this folder!!

A page has to be named page.html for this to work.  This page will also be the default page for the module.  
So when someone goes to, using the previous example http://www.yoursite.com/modules.php?name=Maps
they will see page.html.

All pages MUST end with .html for this to work.  All page must contain alphanumeric character names and/or _- 
anything else will not work.

Then upload the module to your website.  You should now be able to access it.

To access any other pages in the module use &page=name to get to them.  Using the previous
map example, let's say I have a map of Dust.  The html page name is dust.html.  To access it I 
would go to http://www.yoursite.com/modules.php?name=Maps&page=dust
Notice there is no .html at the end, that will cause a failure.

You can reuse this as many times as you want as long as there is no repeating module names.