<?php
/**
 * Index.php
 *
 * Ceci est le fichier principal de ma structure de site web
 * Celui-ci appel les éléments nécessaire suivant les redirections
 * Home.php est la page par défaut du site web.
 *
 *
 * @package Culotte de l'Elfe
 * @subpackage Index
 * @since 1.0
 * @version 1.0
 * @author Laurent Grimaldi
 */

if (!isset($_GET['section']) OR $_GET['section'] == 'index')
{
    $headTitle = "Laurent Grimaldi";
    include_once('src/views/home.php');
}