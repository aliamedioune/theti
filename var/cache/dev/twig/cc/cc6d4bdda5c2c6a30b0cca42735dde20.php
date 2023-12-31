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

/* home/Homepage.html.twig */
class __TwigTemplate_1c13cc249230735b1c383d07c72b5140 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/Homepage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/Homepage.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/Homepage.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "        <style>
        #choix {
  text-align: center;
  background: #f4f4f4;
  padding: 40px 0;
}

#choix .container {
  max-width: 1200px;
  margin: auto;
  padding: 0 20px;
}

#choix h1 {
  color: #3e7c17;
  margin-bottom: 20px;
  font-size: 3rem; /* Larger font size for the title */
}

#choix p {
  color: #333;
  font-size: 1.6rem; /* Larger font size for text */
  line-height: 1.8; /* Increased line height for better readability */
}

#choix .fig {
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
  gap: 30px; /* Increased gap for more space between items */
}

#choix figure {
  background: #fff;
  padding: 30px; /* Increased padding for a more spacious look */
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.1);
  width: 300px; /* Increased width for a larger figure */
  margin: auto;
  transition: transform 0.3s ease; /* Added for a subtle hover effect */
}

#choix figure:hover {
  transform: translateY(-5px); /* Lift the figure slightly on hover */
}

#choix img {
  width: 100%;
  height: auto;
  border-radius: 5px;
  margin-bottom: 15px; /* Space between image and caption */
}

#choix figcaption {
  color: #3e7c17;
  font-size: 3rem; /* Larger font size for captions */
  margin-bottom: 10px;
}

#choix figure p {
  color: #666;
  font-size: 1.2rem; /* Adjusted font size for figure paragraphs */
}



  .noel .container p {
        color: #3e7c17; /* Vert foncé pour un contraste agréable avec le fond clair */
        font-size: 1.4rem; /* Taille de police légèrement plus grande pour la lisibilité */
        margin: 10px 0; /* Espacement vertical pour aérer le texte */
    }

    .noel .container p#titrenoel {
        font-weight: bold; /* Gras pour le titre */
        font-size: 2.2rem; /* Taille de police plus grande pour le titre */
        margin-bottom: 30px; /* Espacement supplémentaire après le titre */
    }

    .noel .container .offre {
        max-width: 100%; /* Pour s'assurer que l'image ne dépasse pas son conteneur */
        height: auto;
        margin-bottom: 20px; /* Espacement après l'image */
    }

    .noel .container a button {
        background-color: #e74c3c; /* Couleur de fond du bouton */
        color: white; /* Texte du bouton en blanc */
        border: none; /* Pas de bordure pour le bouton */
        padding: 20px 5px; /* Padding pour élargir le bouton */
        border-radius: 10px; /* Arrondir les coins du bouton */
        cursor: pointer; /* Curseur en forme de pointeur pour indiquer qu'il est cliquable */
        font-size: 5rem; /* Taille de la police du bouton */
        transition: background-color 0.3s ease; /* Transition pour l'effet au survol */
    }

    .noel .container a button:hover {
        background-color: #c0392b; /* Assombrir le bouton au survol */
    }

    ";
        // line 107
        echo "body, html {
  margin: 0;
  padding: 0;
  height: 100%;
  font-family: 'Arial', sans-serif;
}

.banner {
  background-image: url('your-image.jpg'); /* Replace with your image path */
  background-size: cover;
  background-position: center;
  height: 300px; /* Set the height of the banner */
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  color: white;
}

.banner-content h1 {
  font-size: 2em; /* Adjust the size as needed */
  margin-bottom: 0.5em;
}

.banner-content p {
  font-size: 1em; /* Adjust the size as needed */
  margin-bottom: 1em;
}

.banner-button {
  text-decoration: none;
  color: white;
  background-color: #4CAF50; /* Your button color */
  padding: 10px 20px;
  border-radius: 5px;
  transition: background-color 0.3s;
}

.banner-button:hover {
  background-color: #367C39; /* Darker shade for the hover effect */
}



        </style>
                    
            
<div id=\"cookie-consent-banner\" style=\"background-color: #f1f1f1; padding: 8px; position: fixed; bottom: 0; width: 20%; text-align: center;\">
    <p>Ce site utilise des cookies. En continuant à naviguer, vous acceptez notre utilisation des cookies.</p>
    <button id=\"accept-cookies\" style=\"background-color: #4caf50; color: white; padding: 4px 8px; border: none; border-radius: 3px; cursor: pointer; font-size: 14px;\">Accepter</button>
    <a href=\"\" style=\"color: #4caf50; text-decoration: underline; font-size: 14px; margin-left: 8px;\">En savoir plus</a>
</div>

<script>
    document.getElementById('accept-cookies').addEventListener('click', function () {
        // Ajoutez ici le code pour définir un cookie ou effectuer d'autres actions côté client
        document.getElementById('cookie-consent-banner').style.display = 'none';
    });
</script>
        <main id=\"main\">
        <div class=\"noel\">
            <div class=\"container\">
                <div class=\"flexslider\">
                    <ul class=\"slides\">
                    <li> 
                        <img src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/slider/11.jpg"), "html", null, true);
        echo "\" alt=\"jeu concour participer \"/>
                    </li>
                    <li>
                        <img src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/slider/22.jpg"), "html", null, true);
        echo "\"  alt=\"the categorie\"/>
                    </li>
                    ";
        // line 180
        echo "                    </ul>
                </div>
             <h1>Coffret Découverte de 39€ à remporter !</h1>
                
                <center><p id=\"titrenoel\">profitez-en Vous pourriez être l'un des chanceux à remporter notre coffret découverte d'une valeur de 39€.</p></center>



                <img class =\"offre\"src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/offre-noel.jpg"), "html", null, true);
        echo "\" alt=\"offert thé\">
                <a href=\"/login\" > <button type=\"button\" onclick=\"window.location.href='/login\">Participer</button> </p>

                <p>*Pour toute commande effectué avant le 20 décembre</p>
                ";
        // line 205
        echo "            </div>
                
        </div> 

       
        <section id=\"choix\">

            <div class=\"container\">
                <div class=\"padding\">

                    <h1>Choisissez votre thé</h1>
                    <center>Découvrez la richesse de nos thés sélectionnés avec soin pour éveiller vos sens et enrichir vos moments de détente. Chaque variété offre une expérience unique:
                    </center> </div>

                <div class =\"fig\">
                    <figure>
                        <img src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/tea/1.jpg"), "html", null, true);
        echo "\" alt=\"Thé noir\">
                        <figcaption>Thé noir</figcaption>
                        <p>Profond et corsé, notre thé noir est une invitation à la tradition. Parfait pour commencer la journée avec énergie. </p> 
                    </figure>
                    <figure>
                        <img src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/tea/2.jpg"), "html", null, true);
        echo "\" alt=\"Thé vert\">
                        <figcaption>Thé vert</figcaption>
                        <p>Léger et rafraîchissant, le thé vert est connu pour ses propriétés antioxydantes et son goût délicat qui stimule l'esprit sans excès de stimulation. </p> 
                    </figure>
                    <figure>
                        <img src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/tea/3.jpg"), "html", null, true);
        echo "\" alt=\"Oolong\">
                        <figcaption>Oolong</figcaption>
                        <p> Équilibré entre le thé vert et le thé noir, l'Oolong offre une complexité de saveurs avec une finition douce et une fragrance florale. </p> 
                    </figure>
                    <figure>
                        <img src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/tea/4.jpg"), "html", null, true);
        echo "\" alt=\"Thé blanc\">
                        <figcaption>Thé blanc</figcaption>
                        <p>Le plus délicat de nos thés, récolté et traité avec la plus grande délicatesse pour préserver sa légèreté et ses nuances subtiles. </p> 
                    </figure>
                    <figure>
                        <img src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/tea/5.jpg"), "html", null, true);
        echo "\" alt=\"Rooibos\">
                        <figcaption>Rooibos</figcaption>
                        <p>Sans caféine et riche en minéraux, le Rooibos est doux et apaisant, parfait pour un moment de calme à tout moment de la journée. </p> 
                    </figure>
                </div> 

            </div>

        </section>
        <section id=\"selection\">

            <div class=\"container padding\">
                <h2>Notre sélection</h2>

                <div class=\"article\">
                    <article>
                        <h3><span>Notre nouveauté</span></h3>
                        <figure>
                            <img src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/product/product1.jpg"), "html", null, true);
        echo "\" alt=\"Thé du hammam\">
                            <figcaption>Thé du hammam</figcaption>
                        </figure>
                        <p>S'inspirant de la tradition orientale, le Thé du Hammam est un mélange envoûtant de thé vert parfumé avec une touche de rose, de datte verte, et d'orange douce. Une invitation à l'évasion qui évoque les délices d'un bain de vapeur lointain.</p>
                        <p>A partir de</p>
                        <p class=\"prix\">8,50€</p>
                        <a href=\"produit\" class=\"upper achat\">voir ce produit</a>
                    </article>

                    <article>
                        <h3><span>Notre best-seller</span></h3>
                        <figure>
                            <img src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/product/product2.jpg"), "html", null, true);
        echo "\" alt=\"Infusion Herboriste\">
                            <figcaption>Infusion Herboriste</figcaption>
                        </figure>
                        <p>Notre mélange signature, l'Infusion Herboriste, combine des herbes choisies pour leurs vertus apaisantes et digestives. Des morceaux de pomme, de la verveine, et des éclats de cannelle se mêlent dans cette tisane réconfortante.</p>
                        <p>A partir de</p>
                        <p class=\"prix\">7,60€</p>
                        <a href=\"produit\" class=\"upper achat\">voir ce produit</a>
                    </article>

                    <article>
                        <h3><span>Notre coup de coeur</span></h3>
                        <figure>
                            <img src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/product/product3.jpg"), "html", null, true);
        echo "\" alt=\"Blue of London\">
                            <figcaption>Blue of London</figcaption>
                        </figure>
                        <p>Blue of London est un élégant Earl Grey rehaussé de la subtile fleur de bleuet. Ce thé noir aromatique, agrémenté d'une pointe de bergamote, est notre hommage aux après-midis britanniques raffinés.</p>
                        <p>A partir de</p>
                        <p class=\"prix\">9,00€</p>
                        <a href=\"produit\" class=\"upper achat\">voir ce produit</a>
                    </article>
                </div>

            </div>
        </section>

    </main>

        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/Homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 283,  350 => 271,  335 => 259,  314 => 241,  306 => 236,  298 => 231,  290 => 226,  282 => 221,  264 => 205,  257 => 188,  247 => 180,  242 => 175,  236 => 172,  169 => 107,  68 => 7,  58 => 6,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %} 




{% block body %}
        <style>
        #choix {
  text-align: center;
  background: #f4f4f4;
  padding: 40px 0;
}

#choix .container {
  max-width: 1200px;
  margin: auto;
  padding: 0 20px;
}

#choix h1 {
  color: #3e7c17;
  margin-bottom: 20px;
  font-size: 3rem; /* Larger font size for the title */
}

#choix p {
  color: #333;
  font-size: 1.6rem; /* Larger font size for text */
  line-height: 1.8; /* Increased line height for better readability */
}

#choix .fig {
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
  gap: 30px; /* Increased gap for more space between items */
}

#choix figure {
  background: #fff;
  padding: 30px; /* Increased padding for a more spacious look */
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.1);
  width: 300px; /* Increased width for a larger figure */
  margin: auto;
  transition: transform 0.3s ease; /* Added for a subtle hover effect */
}

#choix figure:hover {
  transform: translateY(-5px); /* Lift the figure slightly on hover */
}

#choix img {
  width: 100%;
  height: auto;
  border-radius: 5px;
  margin-bottom: 15px; /* Space between image and caption */
}

#choix figcaption {
  color: #3e7c17;
  font-size: 3rem; /* Larger font size for captions */
  margin-bottom: 10px;
}

#choix figure p {
  color: #666;
  font-size: 1.2rem; /* Adjusted font size for figure paragraphs */
}



  .noel .container p {
        color: #3e7c17; /* Vert foncé pour un contraste agréable avec le fond clair */
        font-size: 1.4rem; /* Taille de police légèrement plus grande pour la lisibilité */
        margin: 10px 0; /* Espacement vertical pour aérer le texte */
    }

    .noel .container p#titrenoel {
        font-weight: bold; /* Gras pour le titre */
        font-size: 2.2rem; /* Taille de police plus grande pour le titre */
        margin-bottom: 30px; /* Espacement supplémentaire après le titre */
    }

    .noel .container .offre {
        max-width: 100%; /* Pour s'assurer que l'image ne dépasse pas son conteneur */
        height: auto;
        margin-bottom: 20px; /* Espacement après l'image */
    }

    .noel .container a button {
        background-color: #e74c3c; /* Couleur de fond du bouton */
        color: white; /* Texte du bouton en blanc */
        border: none; /* Pas de bordure pour le bouton */
        padding: 20px 5px; /* Padding pour élargir le bouton */
        border-radius: 10px; /* Arrondir les coins du bouton */
        cursor: pointer; /* Curseur en forme de pointeur pour indiquer qu'il est cliquable */
        font-size: 5rem; /* Taille de la police du bouton */
        transition: background-color 0.3s ease; /* Transition pour l'effet au survol */
    }

    .noel .container a button:hover {
        background-color: #c0392b; /* Assombrir le bouton au survol */
    }

    {#  #}
body, html {
  margin: 0;
  padding: 0;
  height: 100%;
  font-family: 'Arial', sans-serif;
}

.banner {
  background-image: url('your-image.jpg'); /* Replace with your image path */
  background-size: cover;
  background-position: center;
  height: 300px; /* Set the height of the banner */
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  color: white;
}

.banner-content h1 {
  font-size: 2em; /* Adjust the size as needed */
  margin-bottom: 0.5em;
}

.banner-content p {
  font-size: 1em; /* Adjust the size as needed */
  margin-bottom: 1em;
}

.banner-button {
  text-decoration: none;
  color: white;
  background-color: #4CAF50; /* Your button color */
  padding: 10px 20px;
  border-radius: 5px;
  transition: background-color 0.3s;
}

.banner-button:hover {
  background-color: #367C39; /* Darker shade for the hover effect */
}



        </style>
                    
            
<div id=\"cookie-consent-banner\" style=\"background-color: #f1f1f1; padding: 8px; position: fixed; bottom: 0; width: 20%; text-align: center;\">
    <p>Ce site utilise des cookies. En continuant à naviguer, vous acceptez notre utilisation des cookies.</p>
    <button id=\"accept-cookies\" style=\"background-color: #4caf50; color: white; padding: 4px 8px; border: none; border-radius: 3px; cursor: pointer; font-size: 14px;\">Accepter</button>
    <a href=\"\" style=\"color: #4caf50; text-decoration: underline; font-size: 14px; margin-left: 8px;\">En savoir plus</a>
</div>

<script>
    document.getElementById('accept-cookies').addEventListener('click', function () {
        // Ajoutez ici le code pour définir un cookie ou effectuer d'autres actions côté client
        document.getElementById('cookie-consent-banner').style.display = 'none';
    });
</script>
        <main id=\"main\">
        <div class=\"noel\">
            <div class=\"container\">
                <div class=\"flexslider\">
                    <ul class=\"slides\">
                    <li> 
                        <img src=\"{{asset(\"assets/img/slider/11.jpg\")}}\" alt=\"jeu concour participer \"/>
                    </li>
                    <li>
                        <img src=\"{{asset(\"assets/img/slider/22.jpg\")}}\"  alt=\"the categorie\"/>
                    </li>
                    {# <li>
                        <img src=\"{{asset(\"assets/img/slider/3.jpg\")}}\"/>
                    </li> #}
                    </ul>
                </div>
             <h1>Coffret Découverte de 39€ à remporter !</h1>
                
                <center><p id=\"titrenoel\">profitez-en Vous pourriez être l'un des chanceux à remporter notre coffret découverte d'une valeur de 39€.</p></center>



                <img class =\"offre\"src=\"{{asset(\"assets/img/offre-noel.jpg\")}}\" alt=\"offert thé\">
                <a href=\"/login\" > <button type=\"button\" onclick=\"window.location.href='/login\">Participer</button> </p>

                <p>*Pour toute commande effectué avant le 20 décembre</p>
                {# <div class=\"flexslider\">
                    <ul class=\"slides\">
                    <li> 
                        <img src=\"{{asset(\"assets/img/slider/11.jpg\")}}\" />
                    </li>
                    <li>
                        <img src=\"{{asset(\"assets/img/slider/22.jpg\")}}\"/>
                    </li>
                    {# <li>
                        <img src=\"{{asset(\"assets/img/slider/3.jpg\")}}\"/>
                    </li>
                    </ul>
                </div> #}
            </div>
                
        </div> 

       
        <section id=\"choix\">

            <div class=\"container\">
                <div class=\"padding\">

                    <h1>Choisissez votre thé</h1>
                    <center>Découvrez la richesse de nos thés sélectionnés avec soin pour éveiller vos sens et enrichir vos moments de détente. Chaque variété offre une expérience unique:
                    </center> </div>

                <div class =\"fig\">
                    <figure>
                        <img src=\"{{asset(\"assets/img/tea/1.jpg\")}}\" alt=\"Thé noir\">
                        <figcaption>Thé noir</figcaption>
                        <p>Profond et corsé, notre thé noir est une invitation à la tradition. Parfait pour commencer la journée avec énergie. </p> 
                    </figure>
                    <figure>
                        <img src=\"{{asset(\"assets/img/tea/2.jpg\")}}\" alt=\"Thé vert\">
                        <figcaption>Thé vert</figcaption>
                        <p>Léger et rafraîchissant, le thé vert est connu pour ses propriétés antioxydantes et son goût délicat qui stimule l'esprit sans excès de stimulation. </p> 
                    </figure>
                    <figure>
                        <img src=\"{{asset(\"assets/img/tea/3.jpg\")}}\" alt=\"Oolong\">
                        <figcaption>Oolong</figcaption>
                        <p> Équilibré entre le thé vert et le thé noir, l'Oolong offre une complexité de saveurs avec une finition douce et une fragrance florale. </p> 
                    </figure>
                    <figure>
                        <img src=\"{{asset(\"assets/img/tea/4.jpg\")}}\" alt=\"Thé blanc\">
                        <figcaption>Thé blanc</figcaption>
                        <p>Le plus délicat de nos thés, récolté et traité avec la plus grande délicatesse pour préserver sa légèreté et ses nuances subtiles. </p> 
                    </figure>
                    <figure>
                        <img src=\"{{asset(\"assets/img/tea/5.jpg\")}}\" alt=\"Rooibos\">
                        <figcaption>Rooibos</figcaption>
                        <p>Sans caféine et riche en minéraux, le Rooibos est doux et apaisant, parfait pour un moment de calme à tout moment de la journée. </p> 
                    </figure>
                </div> 

            </div>

        </section>
        <section id=\"selection\">

            <div class=\"container padding\">
                <h2>Notre sélection</h2>

                <div class=\"article\">
                    <article>
                        <h3><span>Notre nouveauté</span></h3>
                        <figure>
                            <img src=\"{{asset(\"assets/img/product/product1.jpg\")}}\" alt=\"Thé du hammam\">
                            <figcaption>Thé du hammam</figcaption>
                        </figure>
                        <p>S'inspirant de la tradition orientale, le Thé du Hammam est un mélange envoûtant de thé vert parfumé avec une touche de rose, de datte verte, et d'orange douce. Une invitation à l'évasion qui évoque les délices d'un bain de vapeur lointain.</p>
                        <p>A partir de</p>
                        <p class=\"prix\">8,50€</p>
                        <a href=\"produit\" class=\"upper achat\">voir ce produit</a>
                    </article>

                    <article>
                        <h3><span>Notre best-seller</span></h3>
                        <figure>
                            <img src=\"{{asset(\"assets/img/product/product2.jpg\")}}\" alt=\"Infusion Herboriste\">
                            <figcaption>Infusion Herboriste</figcaption>
                        </figure>
                        <p>Notre mélange signature, l'Infusion Herboriste, combine des herbes choisies pour leurs vertus apaisantes et digestives. Des morceaux de pomme, de la verveine, et des éclats de cannelle se mêlent dans cette tisane réconfortante.</p>
                        <p>A partir de</p>
                        <p class=\"prix\">7,60€</p>
                        <a href=\"produit\" class=\"upper achat\">voir ce produit</a>
                    </article>

                    <article>
                        <h3><span>Notre coup de coeur</span></h3>
                        <figure>
                            <img src=\"{{asset(\"assets/img/product/product3.jpg\")}}\" alt=\"Blue of London\">
                            <figcaption>Blue of London</figcaption>
                        </figure>
                        <p>Blue of London est un élégant Earl Grey rehaussé de la subtile fleur de bleuet. Ce thé noir aromatique, agrémenté d'une pointe de bergamote, est notre hommage aux après-midis britanniques raffinés.</p>
                        <p>A partir de</p>
                        <p class=\"prix\">9,00€</p>
                        <a href=\"produit\" class=\"upper achat\">voir ce produit</a>
                    </article>
                </div>

            </div>
        </section>

    </main>

        {% endblock %}", "home/Homepage.html.twig", "C:\\Users\\ASUS ROG STRIX\\Desktop\\bac+5\\apprendre\\Nouveau dossier\\Tiptop101123\\Tiptop\\Tiptop\\templates\\home\\Homepage.html.twig");
    }
}
