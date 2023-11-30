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
class __TwigTemplate_264383660a9dfcb9b3a81941fd485c63 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "home/about.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
\t\t\t\t<h1>A propos de nousssssssss</h1>
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
        return array (  116 => 56,  107 => 50,  98 => 44,  80 => 29,  71 => 23,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/about.html.twig", "/var/www/html/templates/home/about.html.twig");
    }
}
