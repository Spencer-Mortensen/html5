<?php

namespace SpencerMortensen\Html5;


// Test
$html = Html5::getElementHtml($name, $attributes, $innerHtml);

// Input
$name = 'a';
$attributes = null;
$innerHtml = null;

// Output
$html = '<a></a>';

// Input
$name = 'a';
$attributes = array();
$innerHtml = null;

// Output
$html = '<a></a>';

// Input
$name = 'a';
$attributes = array('href' => 'http://example.com');
$innerHtml = null;

// Output
$html = '<a href="http://example.com"></a>';

// Input
$name = 'a';
$attributes = array('href' => 'http://example.com', 'title' => 'example');
$innerHtml = null;

// Output
$html = '<a href="http://example.com" title="example"></a>';

// Input
$name = 'a';
$attributes = array('data-x' => "a '\"\t<>");
$innerHtml = null;

// Output
$html = "<a data-x=\"a '&quot;\t&lt;&gt;\"></a>";

// Input
$name = 'a';
$attributes = null;
$innerHtml = '<i>text</i>';

// Output
$html = '<a><i>text</i></a>';

// Input
$name = 'a';
$attributes = array('href' => 'http://example.com', 'title' => 'example');
$innerHtml = '<i>example</i>';

// Output
$html = '<a href="http://example.com" title="example"><i>example</i></a>';


// Test
$html = Html5::getTextHtml($text);

// Input
$text = 'text';

// Output
$html = 'text';

// Input
$text = "a '\"\t<>";

// Output
$html = "a&nbsp;'\"&nbsp;&nbsp;&nbsp;&nbsp;&lt;&gt;";
