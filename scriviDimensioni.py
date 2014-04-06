#!/usr/bin/env python
# vim: set fileencoding=utf8 :

'''
Created on 2/apr/2014

@author: francesco
'''
import sys
import re, os
from PIL import Image

maxHeight = 180;

def scorriDirectory(output, directory, prefisso, conta):
    for filename in os.listdir(directory):
        if os.path.isdir(directory+'/'+filename):
            conta = scorriDirectory(output, directory+'/'+filename, prefisso+'/'+filename, conta);
        else:
            try:
                img = Image.open(directory+'/'+filename)
                width, height = img.size;

                resizedWidth = int(round((1-((height-maxHeight)/float(height)))*width));

                # print('filename >> %s width >> %s height >> %s resizedWidth >> %s' % (filename, width, height, resizedWidth));
                output.writelines('            array(\n');
                output.writelines('                \'row\' =>  \'%s\',\n' %( int(conta / 3)+1 ));
                output.writelines('                \'column\' =>  \'1\',\n');
                output.writelines('                \'file\' =>  \'%s\',\n' %(prefisso+'/'+filename));
                # output.writelines('                \'width\' =>  \'30\',\n');
                output.writelines('                \'width\' =>  \'%s\',\n' %(resizedWidth));
                output.writelines('                \'height\' =>  \'%s\',\n' %(maxHeight));
                output.writelines('                \'alternate\' => \'\',\n');
                # output.writelines('                \'title\' => \'%s\',\n' %( filename[:filename.rfind('.')].replace('-',' ').replace('_',' ').capitalize() ));
                # output.writelines('                \'body\' => \'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.\',\n');
                output.writelines('                \'title\' => \'Info Lista\',\n');
                output.writelines('                \'body\' => \'Agenzia di viaggio Follie Viaggi.<br> IBAN: 6153723527<br> <a href=\\\'./posta.php\\\'>Lasciaci un pensiero</a>\',\n');
                output.writelines('            ),\n');

                conta = conta + 1;
            except IOError:
                # filename not an image file
                print('Il file non è un\'immagine >> %s' %(filename));
    return conta;

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

    scorriDirectory(output, directory, '.', 0)

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
