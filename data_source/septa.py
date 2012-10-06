# ---------------------------------------------------------------------------
# Spatial joins SEPTA routes (lines) to representative districts (polygons).
# Created for Mike Zaleski's Routes and Reps app
# (http://septa-n-reps.phpfogapp.com) for the Hacks for Democracy hackathon.
# ---------------------------------------------------------------------------

import arcpy

SEPTA = "SEPTARoutesFall2012.shp"
DISTRICTS = "district.shp"
temp = "temp.shp"
Route_shp = "Output\\Route"

field_mapping = arcpy.FieldMappings()
field_mapping.addTable(DISTRICTS)
field_mapping.addTable(SEPTA)

rows = arcpy.SearchCursor(SEPTA)

for row in rows:
    route = row.getValue("ROUTE")
    output = Route_shp + route + ".shp"    
    inserts = arcpy.InsertCursor(temp)
    inserts.insertRow(row)    
    arcpy.SpatialJoin_analysis(temp,
                               DISTRICTS,
                               output,
                               "JOIN_ONE_TO_MANY",
                               "KEEP_ALL",
                               field_mapping)
    arcpy.DeleteRows_management(temp)
    print 'Route %s saved to %s' % (route, output)

print 'Done!'
