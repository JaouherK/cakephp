<?php
header('content-type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<?xml-stylesheet type="text/xsl" href="/css/simple.xsl" ?>';
echo $this->fetch('content');
