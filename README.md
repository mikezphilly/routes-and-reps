Routes and Reps - SEPTA

http://www3.septa.org/reps/

Find Elected Officials for any SEPTA route.
A user selects any route on the septa.org
system, and the app returns a list of all
the political districs through which that
passes in the form of maps, and lists of 
elected officials.

This app was created at the #hack4d hackathon.
http://www.azavea.com/a/hacks-for-democracy/


TODO

-add Rail and atypical bus names to the app
-fix styles in the app
-include info/stats about the route
-a single contact form to contact all the elected officials on a route
-a way to integrate public notices and hearings:
	http://septa.org/notice/
	http://septa.org/notice/asp/hearings.html
-generate route/district lookup up on the fly (cartoDB)
-search dy district (and view all routes that go through the district

//-----------------------------------------------

CONTENT (besides this file):

/image_samples - images demonstrating the concept

/data_source - the routines used to create a lookup table for the app
/data_source/septa.py - script used in ArcGIS to generate the CSV's zipped below
/data_source/csv.zip - correlation of districts for surface route, one for each route
/data_source/RailCSV.zip - correlation of districts for regional rail routes (not yet used)
/data_source/parse_csv.php - parses above csv's and creates sql 'insert' statement (piped to the file below)
/data_source/route_dist_lookuptable_insert.sql - output ov the parse_csv.php script
/data_source/routes_and_reps.sql - mysqldump of lookup table used in the app

/app - routines for the web app
/app/index.html - list of all the route options
/app/about.html - a simple about page
/app/get_rep.php - script that looks up 'Reps' the for selected routes, ugly, i know
/app/route_dis_map.php - script that loads the map
/app/authentication.php - stores data and cicero api credentials
/app/get_valid_input.php - routines validate user input
/app/htaccess - .htaccess file used for clean urls



//-----------------------------------------------

RESOURCES:

API's:

Congressional District Reps
http://services.sunlightlabs.com/api/

All the other districs: 
http://www.azavea.com/products/cicero/

Political boundries and SEPTA routes c/o PASDA:  
http://www.pasda.psu.edu/ 


POLITICAL BOUNDRIES:

PA House reps
http://www.pasda.psu.edu/uci/MetadataDisplay.aspx?entry=PASDA&file=PaHouse2011_01.xml&dataset=53

PA Senate
http://www.pasda.psu.edu/uci/MetadataDisplay.aspx?entry=PASDA&file=PaSenatorial2011_01.xml&dataset=39

PA Congress
http://www.pasda.psu.edu/uci/MetadataDisplay.aspx?entry=PASDA&file=PaCongressional2011_01.xml&dataset=38

Phila City Council:
http://www.pasda.psu.edu/uci/MetadataDisplay.aspx?entry=PASDA&file=PhiladelphiaCouncilDistricts_2000.xml&dataset=1320


SEPTA ROUTES:

High speed 
http://www.pasda.psu.edu/uci/MetadataDisplay.aspx?entry=PASDA&file=SEPTAGISHighspeedLines_201207.xml&dataset=3053

Regional Rail
http://www.pasda.psu.edu/uci/MetadataDisplay.aspx?entry=PASDA&file=SEPTAGISRegionalRailLines_201207.xml&dataset=3056

Surface Routes
http://www.pasda.psu.edu/uci/MetadataDisplay.aspx?entry=PASDA&file=SEPTARoutesFall2012.xml&dataset=3058



