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

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
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

        </style>
        <main id=\"main\">

        <div class=\"noel\">
            <div class=\"container\">
                <p id=\"titrenoel\">C'est noël, profitez-en</p>
                <img class =\"offre\"src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/offre-noel.jpg"), "html", null, true);
        echo "\" alt=\"\">
                <p>*Pour toute commande effectué avant le 20 décembre</p>
                <div class=\"flexslider\">
                    <ul class=\"slides\">
                    <li> 
                        <img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/slider/1.jpg"), "html", null, true);
        echo "\" />
                    </li>
                    <li>
                        <img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/slider/2.jpg"), "html", null, true);
        echo "\"/>
                    </li>
                    </ul>
                </div>
            </div>
                
        </div>

        <section id=\"choix\">

            <div class=\"container\">
                <div class=\"padding\">

                    <h1>Choisissez votre thé</h1>
                    <center><p>Découvrez la richesse de nos thés sélectionnés avec soin pour éveiller vos sens et enrichir vos moments de détente. Chaque variété offre une expérience unique:
                    </p></center> </div>

                <div class =\"fig\">
                    <figure>
                        <img src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/tea/1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        <figcaption>Thé noir</figcaption>
                        <p>Profond et corsé, notre thé noir est une invitation à la tradition. Parfait pour commencer la journée avec énergie. </p> 
                    </figure>
                    <figure>
                        <img src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/tea/2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        <figcaption>Thé vert</figcaption>
                        <p>Léger et rafraîchissant, le thé vert est connu pour ses propriétés antioxydantes et son goût délicat qui stimule l'esprit sans excès de stimulation. </p> 
                    </figure>
                    <figure>
                        <img src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/tea/3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        <figcaption>Oolong</figcaption>
                        <p> Équilibré entre le thé vert et le thé noir, l'Oolong offre une complexité de saveurs avec une finition douce et une fragrance florale. </p> 
                    </figure>
                    <figure>
                        <img src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/tea/4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        <figcaption>Thé blanc</figcaption>
                        <p>Le plus délicat de nos thés, récolté et traité avec la plus grande délicatesse pour préserver sa légèreté et ses nuances subtiles. </p> 
                    </figure>
                    <figure>
                        <img src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/tea/5.jpg"), "html", null, true);
        echo "\" alt=\"\">
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
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/product/product1.jpg"), "html", null, true);
        echo "\" alt=\"\">
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
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/product/product2.jpg"), "html", null, true);
        echo "\" alt=\"\">
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
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/product/product3.jpg"), "html", null, true);
        echo "\" alt=\"\">
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
        return array (  259 => 165,  244 => 153,  229 => 141,  208 => 123,  200 => 118,  192 => 113,  184 => 108,  176 => 103,  154 => 84,  148 => 81,  140 => 76,  68 => 6,  58 => 5,  35 => 1,);
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

        </style>
        <main id=\"main\">

        <div class=\"noel\">
            <div class=\"container\">
                <p id=\"titrenoel\">C'est noël, profitez-en</p>
                <img class =\"offre\"src=\"{{asset(\"assets/img/offre-noel.jpg\")}}\" alt=\"\">
                <p>*Pour toute commande effectué avant le 20 décembre</p>
                <div class=\"flexslider\">
                    <ul class=\"slides\">
                    <li> 
                        <img src=\"{{asset(\"assets/img/slider/1.jpg\")}}\" />
                    </li>
                    <li>
                        <img src=\"{{asset(\"assets/img/slider/2.jpg\")}}\"/>
                    </li>
                    </ul>
                </div>
            </div>
                
        </div>

        <section id=\"choix\">

            <div class=\"container\">
                <div class=\"padding\">

                    <h1>Choisissez votre thé</h1>
                    <center><p>Découvrez la richesse de nos thés sélectionnés avec soin pour éveiller vos sens et enrichir vos moments de détente. Chaque variété offre une expérience unique:
                    </p></center> </div>

                <div class =\"fig\">
                    <figure>
                        <img src=\"{{asset(\"assets/img/tea/1.jpg\")}}\" alt=\"\">
                        <figcaption>Thé noir</figcaption>
                        <p>Profond et corsé, notre thé noir est une invitation à la tradition. Parfait pour commencer la journée avec énergie. </p> 
                    </figure>
                    <figure>
                        <img src=\"{{asset(\"assets/img/tea/2.jpg\")}}\" alt=\"\">
                        <figcaption>Thé vert</figcaption>
                        <p>Léger et rafraîchissant, le thé vert est connu pour ses propriétés antioxydantes et son goût délicat qui stimule l'esprit sans excès de stimulation. </p> 
                    </figure>
                    <figure>
                        <img src=\"{{asset(\"assets/img/tea/3.jpg\")}}\" alt=\"\">
                        <figcaption>Oolong</figcaption>
                        <p> Équilibré entre le thé vert et le thé noir, l'Oolong offre une complexité de saveurs avec une finition douce et une fragrance florale. </p> 
                    </figure>
                    <figure>
                        <img src=\"{{asset(\"assets/img/tea/4.jpg\")}}\" alt=\"\">
                        <figcaption>Thé blanc</figcaption>
                        <p>Le plus délicat de nos thés, récolté et traité avec la plus grande délicatesse pour préserver sa légèreté et ses nuances subtiles. </p> 
                    </figure>
                    <figure>
                        <img src=\"{{asset(\"assets/img/tea/5.jpg\")}}\" alt=\"\">
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
                            <img src=\"{{asset(\"assets/img/product/product1.jpg\")}}\" alt=\"\">
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
                            <img src=\"{{asset(\"assets/img/product/product2.jpg\")}}\" alt=\"\">
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
                            <img src=\"{{asset(\"assets/img/product/product3.jpg\")}}\" alt=\"\">
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
