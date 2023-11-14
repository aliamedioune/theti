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

/* home/terms-and-conditions.html.twig */
class __TwigTemplate_ee78e6c71d93c989d6ef49fb23932acb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/terms-and-conditions.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/terms-and-conditions.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/terms-and-conditions.html.twig", 1);
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
        echo "<div class=\"container\">
  <h2>Conditions Générales</h2>
  
  <section id=\"site-edition\">
    <h2>1 - Édition du site</h2>
    <p>Les présentes Conditions Générales de Vente et d'Utilisation (\"CGVU\") régissent l'utilisation du site internet et des services fournis par l'entreprise ThéTipTop (\"nous\", \"notre\", \"nos\"). En accédant à notre site, en effectuant des achats ou en utilisant nos services, vous acceptez d'être lié par ces CGVU. Veuillez les lire attentivement avant d'utiliser nos services.</p>
  </section>

  <!-- Other sections similar to the \"site-edition\" section would go here -->

  <section id=\"intellectual-property\">
    <h3>4. Propriété Intellectuelle</h3>
    <p>4.1. Tous les contenus présents sur notre site, tels que les textes, images, logos, etc., sont protégés par des droits de propriété intellectuelle et sont la propriété exclusive de ThéTipTop ou de ses fournisseurs. Toute utilisation non autorisée est strictement interdite.</p>
  </section>

  <section id=\"confidentiality\">
    <h3>5. Confidentialité</h3>
    <p>5.1. Nous collectons et utilisons vos informations conformément à notre Politique de Confidentialité. En utilisant nos services, vous consentez à cette collecte et utilisation.</p>
  </section>

  <section id=\"contact\">
    <h3>6. Contact</h3>
    <p>6.1. Pour toute question, demande d'assistance ou réclamation, veuillez nous contacter à [adresse e-mail ou numéro de téléphone].</p>
  </section>

  <section id=\"cgvu-modification\">
    <h3>7. Modification des CGVU</h3>
    <p>7.1. Nous nous réservons le droit de modifier ces CGVU à tout moment. Les modifications prendront effet dès leur publication sur notre site. Veuillez vérifier périodiquement les CGVU pour rester informé des éventuelles mises à jour.</p>
  </section>

  <section id=\"conclusion\">
    <p>En utilisant notre site et nos services, vous acceptez les présentes CGVU. Nous vous remercions de votre confiance envers ThéTipTop et espérons que votre expérience avec nos produits sera aussi agréable que de siroter une tasse de notre délicieux thé.</p>
  </section>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/terms-and-conditions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container\">
  <h2>Conditions Générales</h2>
  
  <section id=\"site-edition\">
    <h2>1 - Édition du site</h2>
    <p>Les présentes Conditions Générales de Vente et d'Utilisation (\"CGVU\") régissent l'utilisation du site internet et des services fournis par l'entreprise ThéTipTop (\"nous\", \"notre\", \"nos\"). En accédant à notre site, en effectuant des achats ou en utilisant nos services, vous acceptez d'être lié par ces CGVU. Veuillez les lire attentivement avant d'utiliser nos services.</p>
  </section>

  <!-- Other sections similar to the \"site-edition\" section would go here -->

  <section id=\"intellectual-property\">
    <h3>4. Propriété Intellectuelle</h3>
    <p>4.1. Tous les contenus présents sur notre site, tels que les textes, images, logos, etc., sont protégés par des droits de propriété intellectuelle et sont la propriété exclusive de ThéTipTop ou de ses fournisseurs. Toute utilisation non autorisée est strictement interdite.</p>
  </section>

  <section id=\"confidentiality\">
    <h3>5. Confidentialité</h3>
    <p>5.1. Nous collectons et utilisons vos informations conformément à notre Politique de Confidentialité. En utilisant nos services, vous consentez à cette collecte et utilisation.</p>
  </section>

  <section id=\"contact\">
    <h3>6. Contact</h3>
    <p>6.1. Pour toute question, demande d'assistance ou réclamation, veuillez nous contacter à [adresse e-mail ou numéro de téléphone].</p>
  </section>

  <section id=\"cgvu-modification\">
    <h3>7. Modification des CGVU</h3>
    <p>7.1. Nous nous réservons le droit de modifier ces CGVU à tout moment. Les modifications prendront effet dès leur publication sur notre site. Veuillez vérifier périodiquement les CGVU pour rester informé des éventuelles mises à jour.</p>
  </section>

  <section id=\"conclusion\">
    <p>En utilisant notre site et nos services, vous acceptez les présentes CGVU. Nous vous remercions de votre confiance envers ThéTipTop et espérons que votre expérience avec nos produits sera aussi agréable que de siroter une tasse de notre délicieux thé.</p>
  </section>
</div>
{% endblock %}
", "home/terms-and-conditions.html.twig", "C:\\Users\\ASUS ROG STRIX\\Desktop\\bac+5\\apprendre\\Nouveau dossier\\Tiptop101123\\Tiptop\\Tiptop\\templates\\home\\terms-and-conditions.html.twig");
    }
}
