<?php

defined('BASEPATH') || exit('No direct script access allowed');
/*
 * ZUGFeRD v1.0 (Historic file come from of InvoicePlane v1.4.7 to v1.6.2)
 * Need generator libraries/XMLtemples/Zugferdv10Xml.php'
 * Note:
 * When the include_zugferd option are disabled and update to InvoicePlane v1.6.3
 * the zugferd v1 files (template and config) are deleted by the setup!
 */
$xml_setting = [
    'full-name'   => 'E-Fattura v1.0',
    'countrycode' => 'IT',
    'embedXML'    => false,
    'XMLname'     => '',
    'generator'   => 'Einvoicev10',
    'options'     => ['CIIname' => '{{{user_country}}}{{{user_vat_id}}}_{{{invoice_number}}}.xml'],
];
