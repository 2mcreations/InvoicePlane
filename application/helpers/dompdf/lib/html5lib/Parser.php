<?php

require_once dirname(__FILE__) . '/Data.php';
require_once dirname(__FILE__) . '/InputStream.php';
require_once dirname(__FILE__) . '/TreeBuilder.php';
require_once dirname(__FILE__) . '/Tokenizer.php';

/**
 * Outwards facing interface for HTML5.
 */
class HTML5_Parser
{
    /**
     * Parses a full HTML document.
<<<<<<< HEAD
     * @param $text HTML text to parse
     * @param $builder Custom builder implementation
     * @return Parsed HTML as DOMDocument
=======
     * @param $text | HTML text to parse
     * @param $builder | Custom builder implementation
     * @return DOMDocument|DOMNodeList Parsed HTML as DOMDocument
>>>>>>> 955424fcce2fd999f1b899078b3258c002cf5b62
     */
    static public function parse($text, $builder = null) {
        $tokenizer = new HTML5_Tokenizer($text, $builder);
        $tokenizer->parse();
        return $tokenizer->save();
    }
<<<<<<< HEAD
    /**
     * Parses an HTML fragment.
     * @param $text HTML text to parse
     * @param $context String name of context element to pretend parsing is in.
     * @param $builder Custom builder implementation
     * @return Parsed HTML as DOMDocument
=======

    /**
     * Parses an HTML fragment.
     * @param $text | HTML text to parse
     * @param $context String name of context element to pretend parsing is in.
     * @param $builder | Custom builder implementation
     * @return DOMDocument|DOMNodeList Parsed HTML as DOMDocument
>>>>>>> 955424fcce2fd999f1b899078b3258c002cf5b62
     */
    static public function parseFragment($text, $context = null, $builder = null) {
        $tokenizer = new HTML5_Tokenizer($text, $builder);
        $tokenizer->parseFragment($context);
        return $tokenizer->save();
    }
}
