SQL Changes that happen when upgrading:

updating to v6.0:

Added time offset from server time
Added version number

 ==============================================

updating to v5.0:

Reset the censor area because the SQL defs were set too short.
Added a date and time format area.
Added a column to the shouts for tracking IPs of users for banning purposes (cant ban from old shouts).

 ==============================================

updating to v4.5:

 Some admin configurations get reset. WHY: Added new options.

 ==============================================

 updating to v4.0:

Some admin configurations get reset. WHY: There were changes to the background color area.

The emoticons database gets reset: WHY: Previous version had invalid smiley links. The corrected ones reset them.

What you have to do:

    -If you have added any smilies, readd them. If you deleted any, delete them.
    -Reset your admin options in the admin panel. (censors, banned users, and banned IPs are unaffected by this upgrade).
