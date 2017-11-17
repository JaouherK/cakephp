<?php
header('content-type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<?xml-stylesheet type="text/xsl" href="/css/simple.xsl" ?>';
echo '<sitemapindex xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
              xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9"
              xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
echo $this->fetch('content');
echo '</sitemapindex>';
