
Onfly (v1)
author: Alfredo Cosco - orazio.nelson@gmail.com - www.nelsonweb.it
version: 1
Date: 04/11/2013
Licence: GPL v2
*********************************************************
Copyright (C) yyyy  name of author
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, 
MA  02110-1301, USA.
***********************************************************

Onfly is a fast and 'easy to use' info system for mobile.
The code is HTML5 with jQueryMobile and some php, the database used is sqlite.

Onfly is a lightweight solution to share infos, messages and skills.

Install
1) unpack the zip (or tar.gz) to your localhost/

2) go to localhost/onfly/admin/ and push DB button fill in your DB, the default password is 'people'.
Just fill the table 'messages' and the table 'references'.

	a) Be careful, tags cannot contain empty spaces, if you want to insert a tag with multiple words you have to divide them with underscores "_", ex: control_room, spanish_auditorium... 

	b) Pay attention to the field 'code' in 'references' table. 
	A reference should be a phone number or a link, each reference must have a unique 'code'. 
	In 'messages' table you have tho put the references 'code' to show the number or the link. 

	c) Do not edit 'tags' table. See point 3.
	 
	d) Don't panic, the script is provided with a sample DB.

3) push the button "Taglist", then "Refresh Taglist" this will fill the 'tags' table with tags added in 'messages' table. Each time you add a message with new tags you have to rebuild the list.

4) Go to localhost/onfly/ to see your app, change styles, header, footer, background as you like.

5) Upload to your site without the admin/ folder.

Notes
DBMS: the DB interface is provided by a modified version of phpliteadmin (https://code.google.com/p/phpliteadmin/)

Recommendations
This is first release, the script is not sure. 
See sqlite documentation to see how give the right permissions to your DB file.  
