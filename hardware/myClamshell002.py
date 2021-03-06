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
notebook.set("ScreenHeight", "((ScreenDiagonal ** 2)/ ( 1 + ScreenRatio ** 2))")
####################################################
##        End of NoteBook variables section       ##
####################################################
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
geomObj_2 = geompy.MakeMarker(0, 0, 0, 1, 0, 0, 0, 1, 0)
geomObj_3 = geompy.MakeVertex(-1448.5, -1220.5, 0)
geomObj_4 = geompy.MakeVertex(1448.5, -1220.5, 0)
geomObj_5 = geompy.MakeVertex(1448.5, 1220.5, 0)
geomObj_6 = geompy.MakeVertex(-1448.5, 1220.5, 0)
LidBox001 = geompy.MakeBoxDXDYDZ("CsWidth", "CsDepth", "LidHeight")
Base001 = geompy.MakeBoxDXDYDZ("CsWidth", "CsDepth", "BaseHeight")
Vector_1 = geompy.MakeVectorDXDYDZ(0, 0, "BaseHeight")
LidBox002 = geompy.MakeTranslationVector(LidBox001, Vector_1)
Pivot001 = geompy.MakeCylinderRH("CylinderRadius", "CsWidth")
geompy.Rotate(Pivot001, OX, 90*math.pi/180.0)
geompy.TranslateDXDYDZ(Pivot001, 0, 0, "Vector2size")
geompy.Rotate(Pivot001, OZ, 90*math.pi/180.0)
geompy.TranslateDXDYDZ(Pivot001, 0, "CylinderRadius", 0)
Lid001 = geompy.MakeCutList(LidBox002, [Pivot001], True)
LidEater = geompy.MakeBoxDXDYDZ("CsWidth", "CylinderRadius", "LidHeight")
geompy.TranslateDXDYDZ(LidEater, 0, 0, "BaseHeight")
Lid002 = geompy.MakeCutList(Lid001, [LidEater], True)
PivotStart = geompy.MakeVertex("PivotSize", 0, 0)
Plane001 = geompy.MakePlane(PivotStart, OX, 200)
Plane002 = geompy.MakeTranslation(Plane001, "PivotSize", 0, 0)
Pivot002 = geompy.MakeTranslation(Pivot001, "PivotSize", 0, 0)
Pivot003Left = geompy.MakeCutList(Pivot001, [Pivot002], True)
Pivot004Central = geompy.MakeTranslation(Pivot003Left, "PivotSize", 0, 0)
Pivot005Right = geompy.MakeTranslation(Pivot004Central, "PivotSize", 0, 0)
Lid003 = geompy.MakeFuseList([Lid002, Pivot003Left, Pivot005Right], True, True)
PivotJunction = geompy.MakeBoxDXDYDZ("PivotSize", "LidHeight", "CylinderRadius")
geompy.TranslateDXDYDZ(PivotJunction, "PivotSize", 0, "BaseHeight")
Base002 = geompy.MakeFuseList([Base001, Pivot004Central, PivotJunction], True, True)
RotVertex001 = geompy.MakeVertex(0, "CylinderRadius", "Vector2size")
RotVertex002 = geompy.MakeVertex("CsWidth", "CylinderRadius", "Vector2size")
RotLine001 = geompy.MakeLineTwoPnt(RotVertex001, RotVertex002)
RotVertex001.SetMarkerStd(GEOM.MT_O_PLUS, GEOM.MS_40)
RotVertex002.SetMarkerStd(GEOM.MT_O_PLUS, GEOM.MS_40)
geompy.addToStudy( O, 'O' )
geompy.addToStudy( OX, 'OX' )
geompy.addToStudy( OY, 'OY' )
geompy.addToStudy( OZ, 'OZ' )
geompy.addToStudy( Base001, 'Base001' )
geompy.addToStudy( LidBox001, 'LidBox001' )
geompy.addToStudy( Vector_1, 'Vector_1' )
geompy.addToStudy( LidBox002, 'LidBox002' )
geompy.addToStudy( Pivot001, 'Pivot001' )
geompy.addToStudy( Lid001, 'Lid001' )
geompy.addToStudy( LidEater, 'LidEater' )
geompy.addToStudy( Lid002, 'Lid002' )
geompy.addToStudy( PivotStart, 'PivotStart' )
geompy.addToStudy( Plane001, 'Plane001' )
geompy.addToStudy( Plane002, 'Plane002' )
geompy.addToStudy( Pivot002, 'Pivot002' )
geompy.addToStudy( Pivot004Central, 'Pivot004Central' )
geompy.addToStudy( Pivot003Left, 'Pivot003Left' )
geompy.addToStudy( Pivot005Right, 'Pivot005Right' )
geompy.addToStudy( Lid003, 'Lid003' )
geompy.addToStudy( PivotJunction, 'PivotJunction' )
geompy.addToStudy( Base002, 'Base002' )
geompy.addToStudy( RotVertex001, 'RotVertex001' )
geompy.addToStudy( RotVertex002, 'RotVertex002' )
geompy.addToStudy( RotLine001, 'RotLine001' )


if salome.sg.hasDesktop():
  salome.sg.updateObjBrowser(1)
