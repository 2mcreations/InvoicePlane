<<<<<<< HEAD
<?php return array (
  'sans-serif' => 
  array (
    'normal' => DOMPDF_FONT_DIR . 'Helvetica',
    'bold' => DOMPDF_FONT_DIR . 'Helvetica-Bold',
    'italic' => DOMPDF_FONT_DIR . 'Helvetica-Oblique',
    'bold_italic' => DOMPDF_FONT_DIR . 'Helvetica-BoldOblique',
  ),
  'times' => 
  array (
    'normal' => DOMPDF_FONT_DIR . 'Times-Roman',
    'bold' => DOMPDF_FONT_DIR . 'Times-Bold',
    'italic' => DOMPDF_FONT_DIR . 'Times-Italic',
    'bold_italic' => DOMPDF_FONT_DIR . 'Times-BoldItalic',
  ),
  'times-roman' => 
  array (
    'normal' => DOMPDF_FONT_DIR . 'Times-Roman',
    'bold' => DOMPDF_FONT_DIR . 'Times-Bold',
    'italic' => DOMPDF_FONT_DIR . 'Times-Italic',
    'bold_italic' => DOMPDF_FONT_DIR . 'Times-BoldItalic',
  ),
  'courier' => 
  array (
    'normal' => DOMPDF_FONT_DIR . 'Courier',
    'bold' => DOMPDF_FONT_DIR . 'Courier-Bold',
    'italic' => DOMPDF_FONT_DIR . 'Courier-Oblique',
    'bold_italic' => DOMPDF_FONT_DIR . 'Courier-BoldOblique',
  ),
  'helvetica' => 
  array (
    'normal' => DOMPDF_FONT_DIR . 'Helvetica',
    'bold' => DOMPDF_FONT_DIR . 'Helvetica-Bold',
    'italic' => DOMPDF_FONT_DIR . 'Helvetica-Oblique',
    'bold_italic' => DOMPDF_FONT_DIR . 'Helvetica-BoldOblique',
  ),
  'zapfdingbats' => 
  array (
    'normal' => DOMPDF_FONT_DIR . 'ZapfDingbats',
    'bold' => DOMPDF_FONT_DIR . 'ZapfDingbats',
    'italic' => DOMPDF_FONT_DIR . 'ZapfDingbats',
    'bold_italic' => DOMPDF_FONT_DIR . 'ZapfDingbats',
  ),
  'symbol' => 
  array (
    'normal' => DOMPDF_FONT_DIR . 'Symbol',
    'bold' => DOMPDF_FONT_DIR . 'Symbol',
    'italic' => DOMPDF_FONT_DIR . 'Symbol',
    'bold_italic' => DOMPDF_FONT_DIR . 'Symbol',
  ),
  'serif' => 
  array (
    'normal' => DOMPDF_FONT_DIR . 'Times-Roman',
    'bold' => DOMPDF_FONT_DIR . 'Times-Bold',
    'italic' => DOMPDF_FONT_DIR . 'Times-Italic',
    'bold_italic' => DOMPDF_FONT_DIR . 'Times-BoldItalic',
  ),
  'monospace' => 
  array (
    'normal' => DOMPDF_FONT_DIR . 'Courier',
    'bold' => DOMPDF_FONT_DIR . 'Courier-Bold',
    'italic' => DOMPDF_FONT_DIR . 'Courier-Oblique',
    'bold_italic' => DOMPDF_FONT_DIR . 'Courier-BoldOblique',
  ),
  'fixed' => 
  array (
    'normal' => DOMPDF_FONT_DIR . 'Courier',
    'bold' => DOMPDF_FONT_DIR . 'Courier-Bold',
    'italic' => DOMPDF_FONT_DIR . 'Courier-Oblique',
    'bold_italic' => DOMPDF_FONT_DIR . 'Courier-BoldOblique',
  ),
  'dejavu sans' => 
  array (
    'bold' => DOMPDF_FONT_DIR . 'DejaVuSans-Bold',
    'bold_italic' => DOMPDF_FONT_DIR . 'DejaVuSans-BoldOblique',
    'italic' => DOMPDF_FONT_DIR . 'DejaVuSans-Oblique',
    'normal' => DOMPDF_FONT_DIR . 'DejaVuSans',
  ),
  'dejavu sans light' => 
  array (
    'normal' => DOMPDF_FONT_DIR . 'DejaVuSans-ExtraLight',
  ),
  'dejavu sans condensed' => 
  array (
    'bold' => DOMPDF_FONT_DIR . 'DejaVuSansCondensed-Bold',
    'bold_italic' => DOMPDF_FONT_DIR . 'DejaVuSansCondensed-BoldOblique',
    'italic' => DOMPDF_FONT_DIR . 'DejaVuSansCondensed-Oblique',
    'normal' => DOMPDF_FONT_DIR . 'DejaVuSansCondensed',
  ),
  'dejavu sans mono' => 
  array (
    'bold' => DOMPDF_FONT_DIR . 'DejaVuSansMono-Bold',
    'bold_italic' => DOMPDF_FONT_DIR . 'DejaVuSansMono-BoldOblique',
    'italic' => DOMPDF_FONT_DIR . 'DejaVuSansMono-Oblique',
    'normal' => DOMPDF_FONT_DIR . 'DejaVuSansMono',
  ),
  'dejavu serif' => 
  array (
    'bold' => DOMPDF_FONT_DIR . 'DejaVuSerif-Bold',
    'bold_italic' => DOMPDF_FONT_DIR . 'DejaVuSerif-BoldItalic',
    'italic' => DOMPDF_FONT_DIR . 'DejaVuSerif-Italic',
    'normal' => DOMPDF_FONT_DIR . 'DejaVuSerif',
  ),
  'dejavu serif condensed' => 
  array (
    'bold' => DOMPDF_FONT_DIR . 'DejaVuSerifCondensed-Bold',
    'bold_italic' => DOMPDF_FONT_DIR . 'DejaVuSerifCondensed-BoldItalic',
    'italic' => DOMPDF_FONT_DIR . 'DejaVuSerifCondensed-Italic',
    'normal' => DOMPDF_FONT_DIR . 'DejaVuSerifCondensed',
  ),
) ?>
=======
<?php
$distFontDir = $rootDir . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . 'fonts' . DIRECTORY_SEPARATOR;
return array(
    'sans-serif' =>
        array(
            'normal' => $distFontDir . 'Helvetica',
            'bold' => $distFontDir . 'Helvetica-Bold',
            'italic' => $distFontDir . 'Helvetica-Oblique',
            'bold_italic' => $distFontDir . 'Helvetica-BoldOblique'
        ),
    'times' =>
        array(
            'normal' => $distFontDir . 'Times-Roman',
            'bold' => $distFontDir . 'Times-Bold',
            'italic' => $distFontDir . 'Times-Italic',
            'bold_italic' => $distFontDir . 'Times-BoldItalic'
        ),
    'times-roman' =>
        array(
            'normal' => $distFontDir . 'Times-Roman',
            'bold' => $distFontDir . 'Times-Bold',
            'italic' => $distFontDir . 'Times-Italic',
            'bold_italic' => $distFontDir . 'Times-BoldItalic'
        ),
    'courier' =>
        array(
            'normal' => $distFontDir . 'Courier',
            'bold' => $distFontDir . 'Courier-Bold',
            'italic' => $distFontDir . 'Courier-Oblique',
            'bold_italic' => $distFontDir . 'Courier-BoldOblique'
        ),
    'helvetica' =>
        array(
            'normal' => $distFontDir . 'Helvetica',
            'bold' => $distFontDir . 'Helvetica-Bold',
            'italic' => $distFontDir . 'Helvetica-Oblique',
            'bold_italic' => $distFontDir . 'Helvetica-BoldOblique'
        ),
    'zapfdingbats' =>
        array(
            'normal' => $distFontDir . 'ZapfDingbats',
            'bold' => $distFontDir . 'ZapfDingbats',
            'italic' => $distFontDir . 'ZapfDingbats',
            'bold_italic' => $distFontDir . 'ZapfDingbats'
        ),
    'symbol' =>
        array(
            'normal' => $distFontDir . 'Symbol',
            'bold' => $distFontDir . 'Symbol',
            'italic' => $distFontDir . 'Symbol',
            'bold_italic' => $distFontDir . 'Symbol'
        ),
    'serif' =>
        array(
            'normal' => $distFontDir . 'Times-Roman',
            'bold' => $distFontDir . 'Times-Bold',
            'italic' => $distFontDir . 'Times-Italic',
            'bold_italic' => $distFontDir . 'Times-BoldItalic'
        ),
    'monospace' =>
        array(
            'normal' => $distFontDir . 'Courier',
            'bold' => $distFontDir . 'Courier-Bold',
            'italic' => $distFontDir . 'Courier-Oblique',
            'bold_italic' => $distFontDir . 'Courier-BoldOblique'
        ),
    'fixed' =>
        array(
            'normal' => $distFontDir . 'Courier',
            'bold' => $distFontDir . 'Courier-Bold',
            'italic' => $distFontDir . 'Courier-Oblique',
            'bold_italic' => $distFontDir . 'Courier-BoldOblique'
        ),
    'dejavu sans' =>
        array(
            'bold' => $distFontDir . 'DejaVuSans-Bold',
            'bold_italic' => $distFontDir . 'DejaVuSans-BoldOblique',
            'italic' => $distFontDir . 'DejaVuSans-Oblique',
            'normal' => $distFontDir . 'DejaVuSans'
        ),
    'dejavu sans mono' =>
        array(
            'bold' => $distFontDir . 'DejaVuSansMono-Bold',
            'bold_italic' => $distFontDir . 'DejaVuSansMono-BoldOblique',
            'italic' => $distFontDir . 'DejaVuSansMono-Oblique',
            'normal' => $distFontDir . 'DejaVuSansMono'
        ),
    'dejavu serif' =>
        array(
            'bold' => $distFontDir . 'DejaVuSerif-Bold',
            'bold_italic' => $distFontDir . 'DejaVuSerif-BoldItalic',
            'italic' => $distFontDir . 'DejaVuSerif-Italic',
            'normal' => $distFontDir . 'DejaVuSerif'
        )
);
>>>>>>> 955424fcce2fd999f1b899078b3258c002cf5b62
