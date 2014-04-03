#!/usr/bin/env python
# vim: set fileencoding=utf8 :

'''
Created on 2/apr/2014

@author: francesco
'''
import sys
import re, os
from PIL import Image

maxHeight = 150;

def scorriDirectory(output, directory, prefisso):
 
    for filename in os.listdir(directory):
        # print('filename >> %s %r' % (filename,os.path.isdir(filename)));
        if os.path.isdir(directory+'/'+filename):
            scorriDirectory(output, directory+'/'+filename, prefisso+'/'+filename);
        else:
            try:
                img = Image.open(directory+'/'+filename)
                width, height = img.size;

                resizedWidth = int(round((1-((height-maxHeight)/float(height)))*width));

                # print('filename >> %s width >> %s height >> %s resizedWidth >> %s' % (filename, width, height, resizedWidth));
                output.writelines('            array(\n');
                output.writelines('                \'row\' =>  \'1\',\n');
                output.writelines('                \'column\' =>  \'1\',\n');
                output.writelines('                \'file\' =>  \'%s\',\n' %(prefisso+'/'+filename));
                output.writelines('                \'width\' =>  \'%s\',\n' %(resizedWidth));
                output.writelines('                \'height\' =>  \'%s\',\n' %(maxHeight));
                output.writelines('                \'alternate\' => \'alternate\',\n');
                output.writelines('                \'title\' => \'Geisha\',\n');
                output.writelines('                \'body\' => \'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.\',\n');
                output.writelines('            ),\n');
            except IOError:
                # filename not an image file
                print('Il file non è un\'immagine >> %s' %(filename));
    pass

def leggiFile(directory):
    output = file('/Users/francesco/lavoro/personal/siti/wedding/php/lista-nozze-riempita.php', 'w')
    
    output.writelines('<?php\n');
    output.writelines('    require \'./h2o.php\';\n');
    output.writelines('    require \'./session.php\';\n');
    output.writelines('    $h2o = new h2o(\'templates/lista-nozze-riempita.html\');\n');
    output.writelines('    echo $h2o->render(array(\'DEBUG_ENABLE\'=>False,\n');
    output.writelines('        \'charset\' => \'UTF-8\',\n');
    output.writelines('        \'pagina\' => \'lista-nozze\',\n');
    output.writelines('        \'imageBaseUrl\' => \'./static/img/viaggio/\',\n');
    output.writelines('        \'objList\' => array(\n');

    scorriDirectory(output, directory, '.')

    output.writelines('        ),\n');
    output.writelines('    ));\n');
    output.writelines('?>\n');

    output.flush() 
    output.close()
    print('FINE');
    pass

if __name__ == '__main__':
    if len(sys.argv) <> 2:
        print("Usage <directory>")
    else:
        leggiFile(sys.argv[1])
    pass
