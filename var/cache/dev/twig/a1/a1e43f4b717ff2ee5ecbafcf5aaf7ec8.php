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

/* home/faq.html.twig */
class __TwigTemplate_b5bf15e3fbd7c238f30c3b23a20c6b7a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/faq.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/faq.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/faq.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<style>
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    line-height: 1.6;
    background-color: #f4f4f4;
  }
  .faq-section {
    background-color: #fff;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    margin: 50px;
    border-radius: 5px;
    padding: 15px;
  }
  .faq-toggle {
    background-color: #4CAF50;
    color: white;
    cursor: pointer;
    padding: 14px 20px;
    width: 50%;
    text-align: left;
    border: none;
    outline: none;
    transition: 0.4s;
    border-bottom: 1px solid #ddd;
    border-radius: 5px;
    margin-bottom: 5px;
    font-size: 18px;
  }
  .faq-toggle:hover, .faq-toggle.active {
    background-color: #66bb6a;
  }
  .faq-content {
    padding: 0 18px;
    background-color: white;
    display: none;
    overflow: hidden;
    border-radius: 5px;
  }
  .faq-content.active {
    display: block;
  }
</style>
</head>
<body>

<div class=\"faq-section\">
  <button type=\"button\" onclick=\"toggleFaq('faq1')\" class=\"faq-toggle\">Comment puis-je participer au jeu concours actuel ?</button>
  <div id=\"faq1\" class=\"faq-content\">
Pour participer à notre jeu concours en cours, suivez ces étapes simples :
Faites un achat en boutique ou en ligne d'une valeur minimale de 49€.
Consultez notre site web et créez un compte si vous n'en avez pas déjà un. Si vous avez déjà un compte, connectez vous.
Une fois connecté, remplissez le formulaire de participation au jeu concours disponible sur notre site web.  </div>

  <button type=\"button\" onclick=\"toggleFaq('faq2')\" class=\"faq-toggle\">Pouvez-vous me parler de vos méthodes de fabrication à la main ?</button>
  <div id=\"faq2\" class=\"faq-content\">
Chez nous, chaque feuille de thé est manipulée avec soin par nos artisans expérimentés. Le fait de préparer nos thés à la main nous permet de contrôler chaque étape du processus pour garantir une qualité supérieure et des saveurs uniques.
  </div>

  <button type=\"button\" onclick=\"toggleFaq('faq3')\" class=\"faq-toggle\">Quelles sont les récompenses que je peux gagner ?</button>
  <div id=\"faq3\" class=\"faq-content\">
Les participants au jeu concours ont la chance de remporter des coffrets-cadeaux spéciaux contenant une sélection de nos thés biologiques faits à la main, ainsi que des accessoires de thé élégants.
  </div>

  <button type=\"button\" onclick=\"toggleFaq('faq4')\" class=\"faq-toggle\">Qu'est-ce qui distingue nos thés des autres ?</button>
  <div id=\"faq4\" class=\"faq-content\">
Notre gamme de thés se démarque par son engagement envers la qualité biologique et l'artisanat. Tous nos thés sont soigneusement sélectionnés parmi les meilleures récoltes biologiques et sont préparés à la main pour garantir une expérience exceptionnelle.
  </div>
</div>

<script>
  function toggleFaq(faqId) {
    var faqs = document.getElementsByClassName('faq-content');
    for (var i = 0; i < faqs.length; i++) {
      faqs[i].classList.remove('active');
    }
    var faq = document.getElementById(faqId);
    faq.classList.add('active');

    var toggles = document.getElementsByClassName('faq-toggle');
    for (var i = 0; i < toggles.length; i++) {
      toggles[i].classList.remove('active');
    }
    event.currentTarget.classList.add('active');
  }
</script>


 ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/faq.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %} 


{% block body %}
<style>
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    line-height: 1.6;
    background-color: #f4f4f4;
  }
  .faq-section {
    background-color: #fff;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    margin: 50px;
    border-radius: 5px;
    padding: 15px;
  }
  .faq-toggle {
    background-color: #4CAF50;
    color: white;
    cursor: pointer;
    padding: 14px 20px;
    width: 50%;
    text-align: left;
    border: none;
    outline: none;
    transition: 0.4s;
    border-bottom: 1px solid #ddd;
    border-radius: 5px;
    margin-bottom: 5px;
    font-size: 18px;
  }
  .faq-toggle:hover, .faq-toggle.active {
    background-color: #66bb6a;
  }
  .faq-content {
    padding: 0 18px;
    background-color: white;
    display: none;
    overflow: hidden;
    border-radius: 5px;
  }
  .faq-content.active {
    display: block;
  }
</style>
</head>
<body>

<div class=\"faq-section\">
  <button type=\"button\" onclick=\"toggleFaq('faq1')\" class=\"faq-toggle\">Comment puis-je participer au jeu concours actuel ?</button>
  <div id=\"faq1\" class=\"faq-content\">
Pour participer à notre jeu concours en cours, suivez ces étapes simples :
Faites un achat en boutique ou en ligne d'une valeur minimale de 49€.
Consultez notre site web et créez un compte si vous n'en avez pas déjà un. Si vous avez déjà un compte, connectez vous.
Une fois connecté, remplissez le formulaire de participation au jeu concours disponible sur notre site web.  </div>

  <button type=\"button\" onclick=\"toggleFaq('faq2')\" class=\"faq-toggle\">Pouvez-vous me parler de vos méthodes de fabrication à la main ?</button>
  <div id=\"faq2\" class=\"faq-content\">
Chez nous, chaque feuille de thé est manipulée avec soin par nos artisans expérimentés. Le fait de préparer nos thés à la main nous permet de contrôler chaque étape du processus pour garantir une qualité supérieure et des saveurs uniques.
  </div>

  <button type=\"button\" onclick=\"toggleFaq('faq3')\" class=\"faq-toggle\">Quelles sont les récompenses que je peux gagner ?</button>
  <div id=\"faq3\" class=\"faq-content\">
Les participants au jeu concours ont la chance de remporter des coffrets-cadeaux spéciaux contenant une sélection de nos thés biologiques faits à la main, ainsi que des accessoires de thé élégants.
  </div>

  <button type=\"button\" onclick=\"toggleFaq('faq4')\" class=\"faq-toggle\">Qu'est-ce qui distingue nos thés des autres ?</button>
  <div id=\"faq4\" class=\"faq-content\">
Notre gamme de thés se démarque par son engagement envers la qualité biologique et l'artisanat. Tous nos thés sont soigneusement sélectionnés parmi les meilleures récoltes biologiques et sont préparés à la main pour garantir une expérience exceptionnelle.
  </div>
</div>

<script>
  function toggleFaq(faqId) {
    var faqs = document.getElementsByClassName('faq-content');
    for (var i = 0; i < faqs.length; i++) {
      faqs[i].classList.remove('active');
    }
    var faq = document.getElementById(faqId);
    faq.classList.add('active');

    var toggles = document.getElementsByClassName('faq-toggle');
    for (var i = 0; i < toggles.length; i++) {
      toggles[i].classList.remove('active');
    }
    event.currentTarget.classList.add('active');
  }
</script>


 {% endblock %}", "home/faq.html.twig", "C:\\Users\\ASUS ROG STRIX\\Desktop\\bac+5\\apprendre\\Nouveau dossier\\Tiptop101123\\Tiptop\\Tiptop\\templates\\home\\faq.html.twig");
    }
}
