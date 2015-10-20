# -*- coding: utf-8 -*-

###
### This file is generated automatically by SALOME v7.6.0 with dump python functionality
###

import sys
import salome

salome.salome_init()
theStudy = salome.myStudy

import salome_notebook
notebook = salome_notebook.NoteBook(theStudy)
sys.path.insert( 0, r'/home/ste/public_html/lateriz/hardware')

import iparameters
ipar = iparameters.IParameters(salome.myStudy.GetCommonParameters("Interface Applicative", 1), True)

#Set up visual properties:
ipar.setProperty("AP_ACTIVE_VIEW", "OCCViewer_0_0")
ipar.setProperty("AP_WORKSTACK_INFO", "0000000100000000000000020100000001000002a8000000040000000100000001000000080000001a004f00430043005600690065007700650072005f0030005f00300000000102")
ipar.setProperty("AP_ACTIVE_MODULE", "Geometry")
ipar.setProperty("AP_SAVEPOINT_NAME", "GUI state: 2")
#Set up lists:
# fill list AP_VIEWERS_LIST
ipar.append("AP_VIEWERS_LIST", "OCCViewer_1")
# fill list OCCViewer_1
ipar.append("OCCViewer_1", "OCC scene:1 - viewer:1")
ipar.append("OCCViewer_1", "0|-1|scale=1.000000000000e+00*projX=0.000000000000e+00*projY=0.000000000000e+00*projZ=1.000000000000e+00*twist=0.000000000000e+00*atX=0.000000000000e+00*atY=0.000000000000e+00*atZ=0.000000000000e+00*eyeX=0.000000000000e+00*eyeY=0.000000000000e+00*eyeZ=5.000000000000e+02*scaleX=1.000000000000e+00*scaleY=1.000000000000e+00*scaleZ=1.000000000000e+00*isVisible=1*size=151.29*gtIsVisible=0*gtDrawNameX=1*gtDrawNameY=1*gtDrawNameZ=1*gtNameX=X*gtNameY=Y*gtNameZ=Z*gtNameColorRX=255*gtNameColorGX=0*gtNameColorBX=0*gtNameColorRY=0*gtNameColorGY=255*gtNameColorBY=0*gtNameColorRZ=0*gtNameColorGZ=0*gtNameColorBZ=255*gtDrawValuesX=1*gtDrawValuesY=1*gtDrawValuesZ=1*gtNbValuesX=3*gtNbValuesY=3*gtNbValuesZ=3*gtOffsetX=2*gtOffsetY=2*gtOffsetZ=2*gtColorRX=255*gtColorGX=0*gtColorBX=0*gtColorRY=0*gtColorGY=255*gtColorBY=0*gtColorRZ=0*gtColorGZ=0*gtColorBZ=255*gtDrawTickmarksX=1*gtDrawTickmarksY=1*gtDrawTickmarksZ=1*gtTickmarkLengthX=5*gtTickmarkLengthY=5*gtTickmarkLengthZ=5*background=bt$2;fn$;tm$0;ts$false;c1$#cddbff;c2$#698fff;gt$1;gr$")
# fill list AP_MODULES_LIST
ipar.append("AP_MODULES_LIST", "Geometry")


###
### GEOM component
###

import GEOM
from salome.geom import geomBuilder
import math
import SALOMEDS


geompy = geomBuilder.New(theStudy)

O = geompy.MakeVertex(0, 0, 0)
OX = geompy.MakeVectorDXDYDZ(1, 0, 0)
OY = geompy.MakeVectorDXDYDZ(0, 1, 0)
OZ = geompy.MakeVectorDXDYDZ(0, 0, 1)
geomObj_1 = geompy.MakeMarker(0, 0, 0, 1, 0, 0, 0, 1, 0)
sk = geompy.Sketcher2D()
sk.addPoint(-151.291513, -33.825338)
sk.addSegmentAbsolute(0.000000, 0.000000)
Sketch_1 = sk.wire(geomObj_1)
geompy.addToStudy( O, 'O' )
geompy.addToStudy( OX, 'OX' )
geompy.addToStudy( OY, 'OY' )
geompy.addToStudy( OZ, 'OZ' )
geompy.addToStudy( Sketch_1, 'Sketch_1' )

### Store presentation parameters of displayed objects
import iparameters
ipar = iparameters.IParameters(theStudy.GetModuleParameters("Interface Applicative", "GEOM", 1))

#Set up entries:
# set up entry GEOM_5 (Sketch_1) parameters
objId = geompy.getObjectID(Sketch_1)
ipar.setParameter(objId, "OCCViewer_0_Visibility", "Off")
ipar.setParameter(objId, "OCCViewer_0_DisplayMode", "0")
ipar.setParameter(objId, "OCCViewer_0_Transparency", "0")
ipar.setParameter(objId, "OCCViewer_0_TopLevelFlag", "false")
ipar.setParameter(objId, "OCCViewer_0_Isos", "0:0")
ipar.setParameter(objId, "OCCViewer_0_VectorMode", "false")
ipar.setParameter(objId, "OCCViewer_0_VerticesMode", "false")
ipar.setParameter(objId, "OCCViewer_0_NameMode", "false")
ipar.setParameter(objId, "OCCViewer_0_DeflectionCoeff", "0.001")
ipar.setParameter(objId, "OCCViewer_0_MarkerType", "7:3")
ipar.setParameter(objId, "OCCViewer_0_Material", "Physical=0:FrontShininess=0.13:BackShininess=0.13:Transparency=0:Ambient=1:AmbientColor=#333333:FrontAmbientCoefficient=0.3:BackAmbientCoefficient=0.25:Diffuse=1:DiffuseColor=#000000:FrontDiffuseCoefficient=0.5:BackDiffuseCoefficient=0.4:Specular=1:SpecularColor=#ffffff:FrontSpecularCoefficient=0.3:BackSpecularCoefficient=0.3:Emissive=0:EmissiveColor=#000000:FrontEmissiveCoefficient=0:BackEmissiveCoefficient=0")
ipar.setParameter(objId, "OCCViewer_0_EdgeWidth", "1")
ipar.setParameter(objId, "OCCViewer_0_IsosWidth", "1")


if salome.sg.hasDesktop():
  salome.sg.updateObjBrowser(1)
  iparameters.getSession().restoreVisualState(1)
