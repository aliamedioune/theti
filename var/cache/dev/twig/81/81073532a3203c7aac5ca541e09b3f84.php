<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/about.html.twig */
class __TwigTemplate_98fceb906d36027cf2a6b292f9b4781a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/about.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/about.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/about.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<style>
    .custom-container {
        background-color: #f9f9f9; /* Fond gris clair */
        border-radius: 10px; /* Bords arrondis */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Ombre portée légère */
        padding: 2rem; /* Espacement interne */
        margin-top: 2rem; /* Marge en haut */
        margin-bottom: 2rem; /* Marge en bas */
        border: 1px solid #ddd; /* Bordure subtile */
    }
    
    /* Vous pouvez également ajouter d'autres styles spécifiques ici */
</style>
    <main id=\"about\">
\t\t<section>
        <div class=\"container custom-container\">
\t\t\t\t<h1>A propos de nous</h1>
\t\t\t\t<h2>Notre équipe</h2>
\t\t\t\t<h3>Amélie,fondatrice de Cup of Tea</h3>
\t\t\t\t<img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/amelie.jpg"), "html", null, true);
        echo "\" alt=\"amélie\">
\t\t\t\t<p>Amélie a commencé sa quête de la tasse de thé parfaite dans les hauts plateaux de Darjeeling. Sa passion pour les mélanges aromatiques et son engagement envers le commerce équitable ont donné naissance à Cup of Tea. Aujourd’hui, elle sélectionne personnellement chaque feuille, assurant une expérience inoubliable à chaque gorgée.
                </p>
                <p>La genèse de Cup of Tea Cup of Tea est née d'une rencontre fortuite dans les contreforts de l'Himalaya. Amélie, une sommelière de thé française, explorait les jardins de thé de Darjeeling à la recherche de saveurs uniques, tandis que Xavier, un entrepreneur britannique, y menait une étude sur le développement durable dans l'agriculture. Leur passion commune pour le thé et leur vision partagée d'un commerce éthique les ont réunis autour d'un projet ambitieux : créer une marque de thé qui se distingue par l’excellence et l’éthique.</p>
                
                <h3>Xavier, fondateur de Cup of Tea</h3>
\t\t\t\t<img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/xavier.jpg"), "html", null, true);
        echo "\" alt=\"xavier\">
\t\t\t\t<p>Xavier, avec son palais expert et son sens aigu des affaires, a rejoint Amélie pour former l'équipe idéale. Ensemble, ils ont créé une collection de thés qui se distingue non seulement par sa qualité, mais aussi par son histoire et son impact sur les communautés productrices.</p>
                <h3>La genèse de Cup of Tea</h3>
                <p>Cup of Tea est née d'une rencontre fortuite dans les contreforts de l'Himalaya. Amélie, une sommelière de thé française, explorait les jardins de thé de Darjeeling à la recherche de saveurs uniques, tandis que Xavier, un entrepreneur britannique, y menait une étude sur le développement durable dans l'agriculture. Leur passion commune pour le thé et leur vision partagée d'un commerce éthique les ont réunis autour d'un projet ambitieux : créer une marque de thé qui se distingue par l’excellence et l’éthique.</p>
                <h3>Création de la marque</h3>
                <p>Leur première collection a été conçue dans l'appartement d'Amélie, transformé en laboratoire de goût et en espace de brainstorming. Des échantillons de feuilles sèches aux arômes variés s'éparpillaient sur chaque surface, tandis que des cartes des régions productrices tapissaient les murs, illustrant leur quête globale. Chaque thé a été sélectionné pour son caractère distinctif et sa capacité à transporter le consommateur dans son lieu d'origine, créant ainsi une expérience sensorielle qui transcende le rituel quotidien du thé.</p>


                <h2>Notre Concept</h2>
\t\t\t\t<p>Au cœur de Cup of Tea réside une promesse simple : offrir des thés d’exception et des infusions qui éveillent les sens. Nous parcourons le monde à la recherche des meilleures feuilles, cultivées dans le respect des traditions et de l'environnement. Notre engagement va au-delà du goût; il s’agit de célébrer les cultures et de soutenir les agriculteurs.</p>
                
               <aside>
                    <div class=\"container padding\">

                        <article>
                            <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/concept/1.svg"), "html", null, true);
        echo "\" alt=\"Théière iconique\">
                            <h3>Artisanat Traditionnel</h3>
                            <p>Chaque feuille de thé dans notre collection est le résultat d'un savoir-faire traditionnel, transmis de génération en génération. Nous valorisons l'artisanat authentique et les méthodes de culture et de récolte qui respectent le rythme de la nature, assurant une qualité et une fraîcheur inégalées à chaque infusion.</p>
                        </article>

                        <article>
                            <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/concept/2.svg"), "html", null, true);
        echo "\" alt=\"Coeur engagé\">
                            <h3>Engagement Éthique</h3>
                            <p>Notre cœur bat pour une éthique irréprochable. Cela se traduit par un engagement direct dans le soutien des communautés de cultivateurs et une transparence totale dans notre chaîne d'approvisionnement. Chez Cup of Tea, acheter une tasse de thé signifie investir dans le bien-être des producteurs et dans la pérennité de leur terre.</p>
                        </article>

                        <article>
                            <img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/concept/3.svg"), "html", null, true);
        echo "\" alt=\"Sourire satisfait\">
                            <h3>Expérience Client</h3>
                            <p>L'expérience Cup of Tea ne s'arrête pas à la dernière goutte de votre tasse. Nous créons des moments de délectation et de partage autour de nos thés. Notre engagement envers la satisfaction du client est la pierre angulaire de notre service, assurant une expérience à la hauteur de vos attentes, à chaque commande.</p>
                        </article>
                    </div>
                </aside>

\t\t\t</div>
\t\t</section>
\t\t

    </main>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 56,  125 => 50,  116 => 44,  98 => 29,  89 => 23,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %} 

{% block body %}
<style>
    .custom-container {
        background-color: #f9f9f9; /* Fond gris clair */
        border-radius: 10px; /* Bords arrondis */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Ombre portée légère */
        padding: 2rem; /* Espacement interne */
        margin-top: 2rem; /* Marge en haut */
        margin-bottom: 2rem; /* Marge en bas */
        border: 1px solid #ddd; /* Bordure subtile */
    }
    
    /* Vous pouvez également ajouter d'autres styles spécifiques ici */
</style>
    <main id=\"about\">
\t\t<section>
        <div class=\"container custom-container\">
\t\t\t\t<h1>A propos de nous</h1>
\t\t\t\t<h2>Notre équipe</h2>
\t\t\t\t<h3>Amélie,fondatrice de Cup of Tea</h3>
\t\t\t\t<img src=\"{{asset(\"assets/img/amelie.jpg\")}}\" alt=\"amélie\">
\t\t\t\t<p>Amélie a commencé sa quête de la tasse de thé parfaite dans les hauts plateaux de Darjeeling. Sa passion pour les mélanges aromatiques et son engagement envers le commerce équitable ont donné naissance à Cup of Tea. Aujourd’hui, elle sélectionne personnellement chaque feuille, assurant une expérience inoubliable à chaque gorgée.
                </p>
                <p>La genèse de Cup of Tea Cup of Tea est née d'une rencontre fortuite dans les contreforts de l'Himalaya. Amélie, une sommelière de thé française, explorait les jardins de thé de Darjeeling à la recherche de saveurs uniques, tandis que Xavier, un entrepreneur britannique, y menait une étude sur le développement durable dans l'agriculture. Leur passion commune pour le thé et leur vision partagée d'un commerce éthique les ont réunis autour d'un projet ambitieux : créer une marque de thé qui se distingue par l’excellence et l’éthique.</p>
                
                <h3>Xavier, fondateur de Cup of Tea</h3>
\t\t\t\t<img src=\"{{asset(\"assets/img/xavier.jpg\")}}\" alt=\"xavier\">
\t\t\t\t<p>Xavier, avec son palais expert et son sens aigu des affaires, a rejoint Amélie pour former l'équipe idéale. Ensemble, ils ont créé une collection de thés qui se distingue non seulement par sa qualité, mais aussi par son histoire et son impact sur les communautés productrices.</p>
                <h3>La genèse de Cup of Tea</h3>
                <p>Cup of Tea est née d'une rencontre fortuite dans les contreforts de l'Himalaya. Amélie, une sommelière de thé française, explorait les jardins de thé de Darjeeling à la recherche de saveurs uniques, tandis que Xavier, un entrepreneur britannique, y menait une étude sur le développement durable dans l'agriculture. Leur passion commune pour le thé et leur vision partagée d'un commerce éthique les ont réunis autour d'un projet ambitieux : créer une marque de thé qui se distingue par l’excellence et l’éthique.</p>
                <h3>Création de la marque</h3>
                <p>Leur première collection a été conçue dans l'appartement d'Amélie, transformé en laboratoire de goût et en espace de brainstorming. Des échantillons de feuilles sèches aux arômes variés s'éparpillaient sur chaque surface, tandis que des cartes des régions productrices tapissaient les murs, illustrant leur quête globale. Chaque thé a été sélectionné pour son caractère distinctif et sa capacité à transporter le consommateur dans son lieu d'origine, créant ainsi une expérience sensorielle qui transcende le rituel quotidien du thé.</p>


                <h2>Notre Concept</h2>
\t\t\t\t<p>Au cœur de Cup of Tea réside une promesse simple : offrir des thés d’exception et des infusions qui éveillent les sens. Nous parcourons le monde à la recherche des meilleures feuilles, cultivées dans le respect des traditions et de l'environnement. Notre engagement va au-delà du goût; il s’agit de célébrer les cultures et de soutenir les agriculteurs.</p>
                
               <aside>
                    <div class=\"container padding\">

                        <article>
                            <img src=\"{{asset('assets/img/concept/1.svg')}}\" alt=\"Théière iconique\">
                            <h3>Artisanat Traditionnel</h3>
                            <p>Chaque feuille de thé dans notre collection est le résultat d'un savoir-faire traditionnel, transmis de génération en génération. Nous valorisons l'artisanat authentique et les méthodes de culture et de récolte qui respectent le rythme de la nature, assurant une qualité et une fraîcheur inégalées à chaque infusion.</p>
                        </article>

                        <article>
                            <img src=\"{{asset('assets/img/concept/2.svg')}}\" alt=\"Coeur engagé\">
                            <h3>Engagement Éthique</h3>
                            <p>Notre cœur bat pour une éthique irréprochable. Cela se traduit par un engagement direct dans le soutien des communautés de cultivateurs et une transparence totale dans notre chaîne d'approvisionnement. Chez Cup of Tea, acheter une tasse de thé signifie investir dans le bien-être des producteurs et dans la pérennité de leur terre.</p>
                        </article>

                        <article>
                            <img src=\"{{asset('assets/img/concept/3.svg')}}\" alt=\"Sourire satisfait\">
                            <h3>Expérience Client</h3>
                            <p>L'expérience Cup of Tea ne s'arrête pas à la dernière goutte de votre tasse. Nous créons des moments de délectation et de partage autour de nos thés. Notre engagement envers la satisfaction du client est la pierre angulaire de notre service, assurant une expérience à la hauteur de vos attentes, à chaque commande.</p>
                        </article>
                    </div>
                </aside>

\t\t\t</div>
\t\t</section>
\t\t

    </main>

{% endblock %} 
{# <!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css\" integrity=\"sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=\" crossorigin=\"anonymous\" />
    <link href=\"https://fonts.googleapis.com/css?family=Amaranth&display=swap\" rel=\"stylesheet\"> 
    
    <link rel=\"stylesheet\" href=\"{{ asset(\"assets/css/flexslider.css\") }}\">
    <link rel=\"stylesheet\" href=\"{{ asset(\"assets/css/normalize.css\") }}\">
    <link rel=\"stylesheet\" href=\"{{ asset(\"assets/css/style.css\") }}\">
    <title>Accueil - Cup Of Tea</title>
</head>
<body>
    <header>

        <p>Livraison offerte à partir de 65€ d'achat!</p>
        <img src=\"{{asset(\"assets/img/ribbon.svg\" )}} \"alt=\"\">

        <div class=\"container padding\">

            <div>
                <a href=\"/\">
                    <img src=\"{{asset(\"assets/img/logo.png\")}}\" alt=\"\">
                </a>
                <p><span id=\"panier\">Mon panier</span><i class=\"fas fa-shopping-cart\"></i><span id=\"priceheader\">42,00€</span></p>
            </div>

            <nav>
                <a href=\"listing.html\" class=\"upper\">thés</a>
                <a href=\"\" class=\"upper\">grands crus</a>
                <a href=\"\" class=\"upper\">contact</a>
                <a href=\"\" class=\"upper\">Sign In</a>
                <a href=\"about\" class=\"upper\">notre histoire</a>
            </nav>

        </div>

    </header>
    <main id=\"about\">
\t\t<section>
\t\t\t<div class=\"container padding\">
\t\t\t\t<h1>A propos de nous</h1>
\t\t\t\t<h2>Notre équipe</h2>
\t\t\t\t<h3>Amélie,fondatrice de Cup of Tea</h3>
\t\t\t\t<img src=\"{{asset(\"assets/img/amelie.jpg\")}}\" alt=\"amélie\">
\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada feugiat. Curabitur fermentum bibendum nulla, non dictum ipsum tincidunt non. Quisque convallis pharetra tempor. Donec id pretium leo. Pellentesque luctus massa non elit viverra pellentesque. Cras vitae neque molestie, rhoncus ipsum sit amet, lobortis dui. Fusce in urna sem. Vivamus vehicula dignissim augue et scelerisque. Etiam quam nisi, molestie ac dolor in, tincidunt tincidunt arcu. Praesent sed justo finibus, fringilla velit quis, porta erat. Donec blandit metus ut arcu iaculis iaculis. Cras nec dolor fringilla justo ullamcorper auctor. Aliquam eget pretium velit. Morbi urna justo, pulvinar id lobortis in, aliquet placerat orci.</p>
\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada feugiat. Curabitur fermentum bibendum nulla, non dictum ipsum tincidunt non. Quisque convallis pharetra tempor. Donec id pretium leo. Pellentesque luctus massa non elit viverra pellentesque. Cras vitae neque molestie, rhoncus ipsum sit amet, lobortis dui. Fusce in urna sem. Vivamus vehicula dignissim augue et scelerisque. Etiam quam nisi, molestie ac dolor in, tincidunt tincidunt arcu. Praesent sed justo finibus, fringilla velit quis, porta erat. Donec blandit metus ut arcu iaculis iaculis. Cras nec dolor fringilla justo ullamcorper auctor. Aliquam eget pretium velit. Morbi urna justo, pulvinar id lobortis in, aliquet placerat orci.</p>
\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada feugiat. Curabitur fermentum bibendum nulla, non dictum ipsum tincidunt non. Quisque convallis pharetra tempor. Donec id pretium leo. Pellentesque luctus massa non elit viverra pellentesque. Cras vitae neque molestie, rhoncus ipsum sit amet, lobortis dui. Fusce in urna sem. Vivamus vehicula dignissim augue et scelerisque. Etiam quam nisi, molestie ac dolor in, tincidunt tincidunt arcu. Praesent sed justo finibus, fringilla velit quis, porta erat. Donec blandit metus ut arcu iaculis iaculis. Cras nec dolor fringilla justo ullamcorper auctor. Aliquam eget pretium velit. Morbi urna justo, pulvinar id lobortis in, aliquet placerat orci.</p>
\t\t\t\t<h3>Xavier, fondateur de Cup of Tea</h3>
\t\t\t\t<img src=\"{{asset(\"assets/img/xavier.jpg\")}}\" alt=\"xavier\">
\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada feugiat. Curabitur fermentum bibendum nulla, non dictum ipsum tincidunt non. Quisque convallis pharetra tempor. Donec id pretium leo. Pellentesque luctus massa non elit viverra pellentesque. Cras vitae neque molestie, rhoncus ipsum sit amet, lobortis dui. Fusce in urna sem. Vivamus vehicula dignissim augue et scelerisque. Etiam quam nisi, molestie ac dolor in, tincidunt tincidunt arcu. Praesent sed justo finibus, fringilla velit quis, porta erat. Donec blandit metus ut arcu iaculis iaculis. Cras nec dolor fringilla justo ullamcorper auctor. Aliquam eget pretium velit. Morbi urna justo, pulvinar id lobortis in, aliquet placerat orci.</p>
\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada feugiat. Curabitur fermentum bibendum nulla, non dictum ipsum tincidunt non. Quisque convallis pharetra tempor. Donec id pretium leo. Pellentesque luctus massa non elit viverra pellentesque. Cras vitae neque molestie, rhoncus ipsum sit amet, lobortis dui. Fusce in urna sem. Vivamus vehicula dignissim augue et scelerisque. Etiam quam nisi, molestie ac dolor in, tincidunt tincidunt arcu. Praesent sed justo finibus, fringilla velit quis, porta erat. Donec blandit metus ut arcu iaculis iaculis. Cras nec dolor fringilla justo ullamcorper auctor. Aliquam eget pretium velit. Morbi urna justo, pulvinar id lobortis in, aliquet placerat orci.</p>
\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada feugiat. Curabitur fermentum bibendum nulla, non dictum ipsum tincidunt non. Quisque convallis pharetra tempor. Donec id pretium leo. Pellentesque luctus massa non elit viverra pellentesque. Cras vitae neque molestie, rhoncus ipsum sit amet, lobortis dui. Fusce in urna sem. Vivamus vehicula dignissim augue et scelerisque. Etiam quam nisi, molestie ac dolor in, tincidunt tincidunt arcu. Praesent sed justo finibus, fringilla velit quis, porta erat. Donec blandit metus ut arcu iaculis iaculis. Cras nec dolor fringilla justo ullamcorper auctor. Aliquam eget pretium velit. Morbi urna justo, pulvinar id lobortis in, aliquet placerat orci.</p>
\t\t\t\t<h2>Notre Concept</h2>
\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada feugiat. Curabitur fermentum bibendum nulla, non dictum ipsum tincidunt non. Quisque convallis pharetra tempor. Donec id pretium leo. Pellentesque luctus massa non elit viverra pellentesque. Cras vitae neque molestie, rhoncus ipsum sit amet, lobortis dui. Fusce in urna sem. Vivamus vehicula dignissim augue et scelerisque. Etiam quam nisi, molestie ac dolor in, tincidunt tincidunt arcu. Praesent sed justo finibus, fringilla velit quis, porta erat. Donec blandit metus ut arcu iaculis iaculis. Cras nec dolor fringilla justo ullamcorper auctor. Aliquam eget pretium velit. Morbi urna justo, pulvinar id lobortis in, aliquet placerat orci.</p>
\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada feugiat. Curabitur fermentum bibendum nulla, non dictum ipsum tincidunt non. Quisque convallis pharetra tempor. Donec id pretium leo. Pellentesque luctus massa non elit viverra pellentesque. Cras vitae neque molestie, rhoncus ipsum sit amet, lobortis dui. Fusce in urna sem. Vivamus vehicula dignissim augue et scelerisque. Etiam quam nisi, molestie ac dolor in, tincidunt tincidunt arcu. Praesent sed justo finibus, fringilla velit quis, porta erat. Donec blandit metus ut arcu iaculis iaculis. Cras nec dolor fringilla justo ullamcorper auctor. Aliquam eget pretium velit. Morbi urna justo, pulvinar id lobortis in, aliquet placerat orci.</p>
\t\t\t\t<aside>
\t\t\t\t\t<div class =\"container padding\">
\t\t\t\t
\t\t\t\t\t\t<article>
\t\t\t\t\t\t\t<img src=\"{{asset(\"assets/img/concept/1.svg\" )}}\" alt=\"theillère\">
\t\t\t\t\t\t\t<h3>Lorem ipsum</h3>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada feugiat. Curabitur fermentum bibendum nulla, non dictum ipsum tincidunt non. Quisque convallis pharetra tempor. Donec id pretium leo. Pellentesque luctus massa non elit viverra pellentesque. Cras vitae neque molestie, rhoncus ipsum sit amet, lobortis dui. Fusce in urna sem. Vivamus vehicula dignissim augue et scelerisque. Etiam quam nisi, molestie ac dolor in, tincidunt tincidunt arcu. Praesent sed justo finibus, fringilla velit quis, porta erat. Donec blandit metus ut arcu iaculis iaculis. Cras nec dolor fringilla justo ullamcorper auctor. Aliquam eget pretium velit. Morbi urna justo, pulvinar id lobortis in, aliquet placerat orci.</p>
\t\t\t\t\t\t</article>
\t\t\t\t\t\t
\t\t\t\t\t\t<article>
\t\t\t\t\t\t\t<img src=\"{{asset(\"assets/img/concept/2.svg\")}}\" alt=\"coeur\">
\t\t\t\t\t\t\t<h3>Dolor sit amet</h3>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada feugiat. Curabitur fermentum bibendum nulla, non dictum ipsum tincidunt non. Quisque convallis pharetra tempor. Donec id pretium leo. Pellentesque luctus massa non elit viverra pellentesque. Cras vitae neque molestie, rhoncus ipsum sit amet, lobortis dui. Fusce in urna sem. Vivamus vehicula dignissim augue et scelerisque. Etiam quam nisi, molestie ac dolor in, tincidunt tincidunt arcu. Praesent sed justo finibus, fringilla velit quis, porta erat. Donec blandit metus ut arcu iaculis iaculis. Cras nec dolor fringilla justo ullamcorper auctor. Aliquam eget pretium velit. Morbi urna justo, pulvinar id lobortis in, aliquet placerat orci.</p>
\t\t\t\t\t\t</article>
\t\t\t\t\t\t
\t\t\t\t\t\t<article>
\t\t\t\t\t\t\t<img src=\"{{asset(\"assets/img/concept/3.svg\" )}}\"alt=\"smile\">
\t\t\t\t\t\t\t<h3>Consectetur</h3>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada feugiat. Curabitur fermentum bibendum nulla, non dictum ipsum tincidunt non. Quisque convallis pharetra tempor. Donec id pretium leo. Pellentesque luctus massa non elit viverra pellentesque. Cras vitae neque molestie, rhoncus ipsum sit amet, lobortis dui. Fusce in urna sem. Vivamus vehicula dignissim augue et scelerisque. Etiam quam nisi, molestie ac dolor in, tincidunt tincidunt arcu. Praesent sed justo finibus, fringilla velit quis, porta erat. Donec blandit metus ut arcu iaculis iaculis. Cras nec dolor fringilla justo ullamcorper auctor. Aliquam eget pretium velit. Morbi urna justo, pulvinar id lobortis in, aliquet placerat orci.</p>
\t\t\t\t\t\t</article>
\t\t\t\t\t</div>\t
\t\t\t\t</aside>\t
\t\t\t</div>
\t\t</section>
\t\t

    </main>
    <footer>
        <div id=\"assurance\">
            <div class=\"container flexassu\">
                <nav>
                    <a href=\"\" class=\"upper\"><i class=\"fas fa-lock\"></i>paiment sécurisé</a>
                    <a href=\"\" class=\"upper\"><i class=\"fas fa-truck\"></i>livraison offerte</a>
                    <a href=\"\" class=\"upper\"><i class=\"fas fa-money-bill-alt\"></i>carte de fidélité</a>
                    <a href=\"\" class=\"upper\"><i class=\"fas fa-phone\"></i>service client</a>
                    <a href=\"\" class=\"upper\"><i class=\"fas fa-check-circle\"></i>garantie qualité</a>
                </nav>
            </div>
        </div>

        <div id=\"liste\">
            <div class=\"container flexul\">
                <ul>
                    <li><h4 class=\"upper\">cup of tea</h4></li>
                    <li><a href=\"\">Notre histoire</a></li>
                    <li><a href=\"\">Nos boutiques</a></li>
                    <li><a href=\"\">Le thé de A à Z</a></li>
                    <li><a href=\"\">Espace Clients Professionnels</a></li>
                    <li><a href=\"\">Recrutement</a></li>
                    <li><a href=\"\">Contactez-nous!</a></li>
                    <li><a href=\"\">L'Ecole du thé</a></li>
                </ul>
                <ul>
                    <li><h4 class=\"upper\">commander en ligne</h4></li>
                    <li><a href=\"\">Première visite</a></li>
                    <li><a href=\"\">Aide - FAQ</a></li>
                    <li><a href=\"\">Service client</a></li>
                    <li><a href=\"\">Suivre ma commande</a></li>
                    <li><a href=\"\">Conditions générales de vente</a></li>
                    <li><a href=\"\">Information légales</a></li>
                    
                </ul>
                <ul>
                    <li><h4 class=\"upper\">suivez-nous</h4></li>
                    <li><a href=\"\">Notre histoire</a></li>
                    <li><a href=\"\">Nous boutiques</a></li>
                    <li><a href=\"\">le Thé de A à Z</a></li>
                    <li><a href=\"\">Espace cliets professionnels</a></li> 
                </ul>
            </div>
        </div>
        <div id=\"footer\" class=\"padding\">
            <div class=\"container\">
                <a href=\"https://3wa.fr/inscription-a-la-prochaine-reunion-dinformation-porte-ouverte/?gclid=EAIaIQobChMIrpnjnpG45wIVClXTCh0WpwJ-EAAYASAAEgK5PPD_BwE\">
                <img id=\"logo\" src=\"{{asset(\"assets/img/big.png\" )}}\" alt=\"logo 3wa\">
                </a>  
                <p>Cet exercice de <a href=\"\">3W Academy</a> est mis à disposition <a href=\"\">pour l'usage personnel des étudiants, Pas de Rediffusion - Attribution - Pas d'Utilisation Commerciale - Pas de Modification - International.<br></a> Les autorisations au-delà du champ de cette licence peuvent être obtenues auprès de <a href=\"\">contact@3wa.fr</a>. Les maquettes ont été réalisées par <a href=\"\">Justine Muller</a>.</p>
            </div>    
        </div>
    </footer>
    
</body>
</html> #}
", "home/about.html.twig", "C:\\Users\\ASUS ROG STRIX\\Desktop\\bac+5\\apprendre\\Nouveau dossier\\Tiptop101123\\Tiptop\\Tiptop\\templates\\home\\about.html.twig");
    }
}
