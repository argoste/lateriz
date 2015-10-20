# -*- coding: utf-8 -*-

###
### This file is generated automatically by SALOME v7.6.0 with dump python functionality
###

import sys
import salome

salome.salome_init()
import salome_notebook
notebook = salome_notebook.NoteBook(salome.myStudy)
sys.path.insert( 0, r'/home/ste/public_html/lateriz/hardware/Clamshell003')
# I need some more functions
import math

####################################################
##       Begin of NoteBook variables section      ##
####################################################
notebook.set("CsHeight", 30)
notebook.set("CsWidth", 180)
notebook.set("CsDepth", 140)
notebook.set("LidHeight", 15)
notebook.set("BaseHeight", 35)
notebook.set("CylinderRadius", "LidHeight/2.0")
notebook.set("Vector2size", "BaseHeight+CylinderRadius")
notebook.set("PivotRatio", "1.0/3")
notebook.set("PivotSize", "CsWidth*PivotRatio")
notebook.set("ScreenRatio", "4.0/3")
notebook.set("ScreenDiagonalInch", 5)
notebook.set("ScreenDiagonal", "ScreenDiagonalInch*2.54")
notebook.set("ScreenHeight", "math.sqrt((ScreenDiagonal ** 2)/ ( 1 + ScreenRatio ** 2))")
####################################################
##        End of NoteBook variables section       ##
####################################################
import iparameters
ipar = iparameters.IParameters(salome.myStudy.GetCommonParameters("Interface Applicative", 1), True)

#Set up visual properties:
ipar.setProperty("AP_ACTIVE_VIEW", "OCCViewer_1_0")
ipar.setProperty("AP_WORKSTACK_INFO", "0000000100000000000000020100000001000003c5000000040000000100000002000000080000001a004f00430043005600690065007700650072005f0031005f00300000000202")
ipar.setProperty("AP_ACTIVE_MODULE", "Geometry")
ipar.setProperty("AP_SAVEPOINT_NAME", "GUI state: 16")
#Set up lists:
# fill list AP_VIEWERS_LIST
ipar.append("AP_VIEWERS_LIST", "OCCViewer_1")
ipar.append("AP_VIEWERS_LIST", "OCCViewer_2")
# fill list OCCViewer_1
ipar.append("OCCViewer_1", "OCC scene:1 - viewer:1")
ipar.append("OCCViewer_1", "999|-1|scale=1.000000000000e+00*projX=5.773502691896e-01*projY=-5.773502691896e-01*projZ=5.773502691896e-01*twist=0.000000000000e+00*atX=0.000000000000e+00*atY=0.000000000000e+00*atZ=0.000000000000e+00*eyeX=2.886751345948e+02*eyeY=-2.886751345948e+02*eyeZ=2.886751345948e+02*scaleX=1.000000000000e+00*scaleY=1.000000000000e+00*scaleZ=1.000000000000e+00*isVisible=0*size=100.00*gtIsVisible=0*gtDrawNameX=1*gtDrawNameY=1*gtDrawNameZ=1*gtNameX=X*gtNameY=Z*gtNameZ=Z*gtNameColorRX=255*gtNameColorGX=0*gtNameColorBX=0*gtNameColorRY=0*gtNameColorGY=255*gtNameColorBY=0*gtNameColorRZ=0*gtNameColorGZ=0*gtNameColorBZ=255*gtDrawValuesX=1*gtDrawValuesY=1*gtDrawValuesZ=1*gtNbValuesX=3*gtNbValuesY=3*gtNbValuesZ=3*gtOffsetX=2*gtOffsetY=2*gtOffsetZ=2*gtColorRX=255*gtColorGX=0*gtColorBX=0*gtColorRY=0*gtColorGY=255*gtColorBY=0*gtColorRZ=0*gtColorGZ=0*gtColorBZ=255*gtDrawTickmarksX=1*gtDrawTickmarksY=1*gtDrawTickmarksZ=1*gtTickmarkLengthX=5*gtTickmarkLengthY=5*gtTickmarkLengthZ=5*background=bt$2;fn$;tm$0;ts$false;c1$#cddbff;c2$#698fff;gt$1;gr$")
# fill list OCCViewer_2
ipar.append("OCCViewer_2", "OCC scene:2 - viewer:1")
ipar.append("OCCViewer_2", "0|-1|scale=3.858513542687e+00*projX=7.508199058060e-02*projY=3.767390963566e-02*projZ=-9.964654390511e-01*twist=5.175664130759e+00*atX=9.105952176206e+01*atY=1.091720432886e+02*atZ=7.583469095285e+01*eyeX=1.045742800666e+02*eyeY=1.159533470230e+02*eyeZ=-1.035290880763e+02*scaleX=1.000000000000e+00*scaleY=1.000000000000e+00*scaleZ=1.000000000000e+00*isVisible=1*size=180.00*gtIsVisible=0*gtDrawNameX=1*gtDrawNameY=1*gtDrawNameZ=1*gtNameX=X*gtNameY=Z*gtNameZ=Z*gtNameColorRX=255*gtNameColorGX=0*gtNameColorBX=0*gtNameColorRY=0*gtNameColorGY=255*gtNameColorBY=0*gtNameColorRZ=0*gtNameColorGZ=0*gtNameColorBZ=255*gtDrawValuesX=1*gtDrawValuesY=1*gtDrawValuesZ=1*gtNbValuesX=3*gtNbValuesY=3*gtNbValuesZ=3*gtOffsetX=2*gtOffsetY=2*gtOffsetZ=2*gtColorRX=255*gtColorGX=0*gtColorBX=0*gtColorRY=0*gtColorGY=255*gtColorBY=0*gtColorRZ=0*gtColorGZ=0*gtColorBZ=255*gtDrawTickmarksX=1*gtDrawTickmarksY=1*gtDrawTickmarksZ=1*gtTickmarkLengthX=5*gtTickmarkLengthY=5*gtTickmarkLengthZ=5*background=bt$2;fn$;tm$0;ts$false;c1$#cddbff;c2$#698fff;gt$1;gr$")
# fill list AP_MODULES_LIST
ipar.append("AP_MODULES_LIST", "Geometry")


import clam_GEOM
clam_GEOM.RebuildData(salome.myStudy)

if salome.sg.hasDesktop():
  salome.sg.updateObjBrowser(1)
  iparameters.getSession().restoreVisualState(1)
