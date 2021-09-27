<?php
header('Content-type: application/xml; charset="ISO-8859-1"',true);  
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc><?= base_url() ?></loc>
        <priority>0.1</priority>
    </url>
    <url>
        <loc><?= base_url('home') ?></loc>
        <priority>0.1</priority>
    </url>
    <url>
        <loc><?= base_url('player_rank') ?></loc>
        <priority>0.1</priority>
    </url>
    <url>
        <loc><?= base_url('clan_rank') ?></loc>
        <priority>0.1</priority>
    </url>
    <url>
        <loc><?= base_url('download') ?></loc>
        <priority>0.1</priority>
    </url>
    <url>
        <loc><?= base_url('webshop') ?></loc>
        <priority>0.1</priority>
    </url>
    <url>
        <loc><?= base_url('trade') ?></loc>
        <priority>0.1</priority>
    </url>
    <url>
        <loc><?= base_url('login') ?></loc>
        <priority>0.1</priority>
    </url>
    <url>
        <loc><?= base_url('register') ?></loc>
        <priority>0.1</priority>
    </url>
</urlset>