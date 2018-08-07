#!/usr/bin/python

import sys
import codecs
import untangle
import moody

if (len(sys.argv) < 2) :
	exit()

infile = str(sys.argv[1])
outfile = infile.replace('.kml','.html')

xml = untangle.parse(infile)

loader = moody.make_loader('')
result = loader.render('template.html', xml = xml.kml.Document)

f = codecs.open(outfile, 'w', 'utf-8')
f.write(result)
f.close()
