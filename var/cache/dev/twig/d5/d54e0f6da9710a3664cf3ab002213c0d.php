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

/* home/produit.html.twig */
class __TwigTemplate_9a7f39e023c8fd7887446b86a2bce345 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/produit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/produit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/produit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <main id=\"product\">
        <section id=\"secprod\">
            <div class=\"container padding\">
                <h1>Le meilleure thé</h1>
                <article>
                    <div class=\"flexthe\">
                        <div>
                            <h2>Blue of London</h2>
                            <h3>Thé noir à la bergamote</h3>
                            <p>Réf: 133742</p>
                        </div>
                        <div id=\"star\">
                        
                            <p>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                            </p>
                            <a href=\"\">voir les 56 avis</a>
                        </div>
                    </div>
                    <div class=\"flex\">
                        <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/product/product3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        <form action=\"\">
                            <select name=\"quantité\">
                                <option value=\"null\">Sachet de 100 g</option>
                                <option value=\"null\">Sachet de 200 g</option>
                            </select>
                            <input  value=9,00€ readonly/>
                            <button type=\"submit\" class=\"achat upper\">ajouter au panier</button>
                            <a href=\"\"><i class=\"fas fa-heart\"></i>Ajouter a ma liste d'envie</a>
                            
                        </form>
                    </div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius, libero porro quibusdam ullam id dolore ipsam nisi qui tenetur possimus enim voluptate quod beatae. Aspernatur odio atque accusamus modi rerum!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro consequatur nisi expedita sint voluptatibus, asperiores illum sunt non voluptate doloremque ullam dolorum deleniti maxime illo ducimus, ipsum veritatis, adipisci provident.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente aspernatur quae maxime tempore incidunt optio odio quidem veniam a beatae dolores, iusto vel, quasi laudantium magnam id sint deserunt dignissimos?</p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto explicabo ullam laudantium velit. Deleniti explicabo alias mollitia eaque et molestias obcaecati unde ex sunt aspernatur, cupiditate aperiam tempora? Velit, quibusdam.</p>

                </article>
            </div>
        </section>

    </main>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/produit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 28,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %} 
{% block body %}

    <main id=\"product\">
        <section id=\"secprod\">
            <div class=\"container padding\">
                <h1>Le meilleure thé</h1>
                <article>
                    <div class=\"flexthe\">
                        <div>
                            <h2>Blue of London</h2>
                            <h3>Thé noir à la bergamote</h3>
                            <p>Réf: 133742</p>
                        </div>
                        <div id=\"star\">
                        
                            <p>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                            </p>
                            <a href=\"\">voir les 56 avis</a>
                        </div>
                    </div>
                    <div class=\"flex\">
                        <img src=\"{{asset(\"assets/img/product/product3.jpg\" )}}\" alt=\"\">
                        <form action=\"\">
                            <select name=\"quantité\">
                                <option value=\"null\">Sachet de 100 g</option>
                                <option value=\"null\">Sachet de 200 g</option>
                            </select>
                            <input  value=9,00€ readonly/>
                            <button type=\"submit\" class=\"achat upper\">ajouter au panier</button>
                            <a href=\"\"><i class=\"fas fa-heart\"></i>Ajouter a ma liste d'envie</a>
                            
                        </form>
                    </div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius, libero porro quibusdam ullam id dolore ipsam nisi qui tenetur possimus enim voluptate quod beatae. Aspernatur odio atque accusamus modi rerum!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro consequatur nisi expedita sint voluptatibus, asperiores illum sunt non voluptate doloremque ullam dolorum deleniti maxime illo ducimus, ipsum veritatis, adipisci provident.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente aspernatur quae maxime tempore incidunt optio odio quidem veniam a beatae dolores, iusto vel, quasi laudantium magnam id sint deserunt dignissimos?</p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto explicabo ullam laudantium velit. Deleniti explicabo alias mollitia eaque et molestias obcaecati unde ex sunt aspernatur, cupiditate aperiam tempora? Velit, quibusdam.</p>

                </article>
            </div>
        </section>

    </main>
  {% endblock %}", "home/produit.html.twig", "C:\\Users\\ASUS ROG STRIX\\Desktop\\bac+5\\apprendre\\Nouveau dossier\\Tiptop101123\\Tiptop\\Tiptop\\templates\\home\\produit.html.twig");
    }
}
