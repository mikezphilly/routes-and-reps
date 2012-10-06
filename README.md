Routes and Reps - SEPTA
http://septa-n-reps.phpfogapp.com/

DESCRIPTION:

Select a SEPTA route to get a list of political districts & representatives through which the route passes.

The results should include:

-info about the route
-info about the reps (congresional, pa house, pa senate, city council)
-maps, similar to those in /image_samples
-single form to contact all the reps (re the selected route)
-a way to integrate public notices and hearings:
	http://septa.org/notice/
	http://septa.org/notice/asp/hearings.html

//-----------------------------------------------

CONTENT (besides this file):

/image_samples - images demonstrating the concept

/data_source - the routines used to create a lookup table for the app
/data_source/csv.zip - correlation of districts for surface route, one for each route
/data_source/RailCSV.zip - correlation of districts for regional rail routes (not yet used)
/data_source/parse_csv.php - parses above csv's and creates sql 'insert' statement
/data_source/route_dist_lookuptable_insert.sql - sample output from above php script

/app - routines for the web app, and it's stunning UI: http://septa-n-reps.phpfogapp.com/
/app/index.html - list of all the route options
/app/get_rep.php - script that looks up 'Reps' the for selected routes, ugly, i know
/app/rep_format.txt - sample api output for sunlightlabs.com api

/db/routes_and_reps.sql - mysqldump of lookup table used in the app, also not pretty

//-----------------------------------------------

RESOURCES:

API's:

Congressional District Reps
http://services.sunlightlabs.com/api/

All the other districs: 
http://www.azavea.com/products/cicero/

Political boundries and SEPTA routes c/o PASDA:  http://www.pasda.psu.edu/ 


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


APP:
http://septa-n-reps.phpfogapp.com/



