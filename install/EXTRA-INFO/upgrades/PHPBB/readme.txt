/*****[NUKE-EVOLUTION BASIC: Upgrade]************************************

Before You Begin
----------------
It looks long and difficult, but it is not so bad.  We just have to cover everything
as much as possible.  Please do not be scared it will be ok.

Read EACH step COMPLETELY before attempting that step!!!

What You Will Lose
-------------------
This depends on what mods you have installed.  Generally speaking we have many of
the most common mods installed, so you might not loose anything.

But if you are concerned you should read what is in the Evolution package and
what can be installed on Evo-mods.com to insure you will keep the mods you 
want.

Prestart
--------
I would back up your site and DB if I were you.

First Step
----------
Your PHPBB DB MUST BE at version 2.0.20!!

If it is already then move to the second step.

If it is not we have included the upgrade files from phpbb.com.

Open upgrades/PHPBB/phpbb 2.0.x-2.0.20/upgrade.txt. Once you have
completed the directions in that file return to this file and continue to the
next step.


Second Step
----------
You must now upgrade your DB from phpbb to nuke

Open upgrades/PHPBB/phpbb db - nuke db/upgrade.txt. Once you have
completed the directions in that file return to this file and continue to the
next step.

Third Step
----------
Now its time to install Evolution (finally!)

You may want to open your config.php and write down those settings
since you will be using the same settings when you setup your
Evolution site.

Delete all files and folders on your website.  Please see the notes 
if you wish to save attachments, ranks, avatars, etc.

Fourth Step
-----------
DO ONLY 1 OF THESE 2 STEPS!!

If you choose in the Second Step to only upgrade the users
Open upgrades/PHPBB/Upgrade users/upgrade.txt Once you have
completed the directions in that file return to this file and continue to the
next step.

If you choose in the Second Step to only upgrade the users & forums
Open upgrades/PHPBB/Upgrade users & forum/upgrade.txt Once you have
completed the directions in that file return to this file and continue to the
next step.

Fifth Step
----------
Delete upgrade.php and the upgrade/ folder

Sixth Step
----------
Go to http://www.yoursite.com/admin.php and create a new admin account.  It is 
up to you but I would choose to have it not make a new user for you.

That should do it, enjoy!


Notes
-----

Save Images
===========
If you want to save all your images (avatars, ranks, smiles, etc.)

First back them up or rename the images/ folder

Then after you have finished installing Evolution you can then move
them to modules/Forums/images

Save Attachments
================
If you had the attachment mod and you wish to save the attachments

First back them up or do not delete the files/ folder

Then after you have finished installing Evolution you can then move
them to modules/Forums/files

Also you will need to change the tables prefix from phpbb_ to
nuke_bb.  This will allow you to save them.

************************************************************************\ 