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

/* home/profil.html.twig */
class __TwigTemplate_b539eada17616cdd8b16bdc93a3b7a06 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/profil.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/profil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/profil.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Mon profil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        echo "
<style>
        :root {
            --main-color: #76b947; /* Primary color from the navbar */
            --text-color: #333; /* Text color for readability */
            --font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Main font family */
        }

        /* Card styles */
        
        /* Heading styles */
        .card h1 {
            color: var(--main-color);
            font-family: var(--font-family);
        }

        /* Body text styles */
             .card , .card-body {
            font-family: var(--font-family);
            background: #f9f9f9;
            border: 1px solid #ddd;
            margin-bottom: 20px;
            padding: 20px;
            }
        

        /* Label and value styles */
        .label, .value {
            font-size: 18px;
            color: var(--text-color);
        }

        /* Bold labels for a visual hierarchy */
        .label {
            font-weight: bold;
        }

        /* Consistent bottom margin for rows */
        .row {
            margin-bottom: 10px;
        }

        /* Custom horizontal rule to match the color theme */
        hr {
            border-top-color: var(--main-color);
        }

        /* Media queries for responsive adjustments */
        @media (max-width: 768px) {
            .label, .value {
                font-size: 16px;
            }
        }
    </style>
<br><br>
<br> <br> <br>

<div class=\"app d-flex flex-row align-items-center\">
    <div class=\"container\">
        <div class=\"justify-content-center row\">
            <div class=\"col-md-8 col-lg-8 col-xl-8\">
                <div class=\"card border-primary mb-3\" style=\"background-color: rgba(245, 245, 245, 0.9)\">
                    <div class=\"card-body\" style=\"background-color: rgba(50, 205, 50, 0.3); border: 1px solid #4CAF50;\">
                       <center> <h1>Mon Profil</h1> </center>
                        <hr />
                       
                            <div class=\"row\">
                              <div class=\"col-5\">
                                    <div class=\"input-group\">
                                 <b>     <label style=\"font-size:18px\">Prénom :<label></b>
                                    </div>
                               </div>
                               <div class=\"col-7\">
                                <div class=\"input-group\">
                                    <label style=\"font-size:18px\">";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "user", [], "any", false, false, false, 80), "surname", [], "any", false, false, false, 80), "html", null, true);
        echo "<label>
                                </div>
                               </div>
                            </div>
<br>
                          <div class=\"row\">
                              <div class=\"col-5\">
                                    <div class=\"input-group\">
                                <b>      <label style=\"font-size:18px\">Nom :<label></b>
                                    </div>
                               </div>
                               <div class=\"col-7\">
                                <div class=\"input-group\">
                                    <label style=\"font-size:18px\">";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 93, $this->source); })()), "user", [], "any", false, false, false, 93), "name", [], "any", false, false, false, 93), "html", null, true);
        echo "<label>
                                </div>
                               </div>
                            </div>

                            <br>
                          <div class=\"row\">
                              <div class=\"col-5\">
                                    <div class=\"input-group\">
                                <b>  <label style=\"font-size:18px\">Adresse :<label> </b>
                                    </div>
                               </div>
                               <div class=\"col-7\">
                                <div class=\"input-group\">
                                    <label style=\"font-size:18px\">";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 107, $this->source); })()), "user", [], "any", false, false, false, 107), "address", [], "any", false, false, false, 107), "html", null, true);
        echo "<label>
                                </div>
                               </div>
                            </div>
                                                        <br>
                          <div class=\"row\">
                              <div class=\"col-5\">
                                    <div class=\"input-group\">
                                 <b>     <label style=\"font-size:18px\">Ville :<label></b>
                                    </div>
                               </div>
                               <div class=\"col-7\">
                                <div class=\"input-group\">
                                    <label style=\"font-size:18px\">";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 120, $this->source); })()), "user", [], "any", false, false, false, 120), "city", [], "any", false, false, false, 120), "html", null, true);
        echo "<label>
                                </div>
                               </div>
                            </div>
                                                        <br>
                          <div class=\"row\">
                              <div class=\"col-5\">
                                    <div class=\"input-group\">
                                  <b>    <label style=\"font-size:18px\">Pays :<label></b>
                                    </div>
                               </div>
                               <div class=\"col-7\">
                                <div class=\"input-group\">
                                    <label style=\"font-size:18px\">";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 133, $this->source); })()), "user", [], "any", false, false, false, 133), "country", [], "any", false, false, false, 133), "html", null, true);
        echo "<label>
                                </div>
                               </div>
                            </div>

                                                             <br>
                          <div class=\"row\">
                              <div class=\"col-5\">
                                    <div class=\"input-group\">
                                  <b>    <label style=\"font-size:18px\">Email :<label></b>
                                    </div>
                               </div>
                               <div class=\"col-7\">
                                <div class=\"input-group\">
                                    <label style=\"font-size:18px\">";
        // line 147
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 147, $this->source); })()), "user", [], "any", false, false, false, 147), "email", [], "any", false, false, false, 147), "html", null, true);
        echo "<label>
                                </div>
                               </div>
                            </div>


                                                             <br>
                          <div class=\"row\">
                              <div class=\"col-5\">
                                    <div class=\"input-group\">
                                  <b>    <label style=\"font-size:18px\">Statut :<label></b>
                                    </div>
                               </div>
                               <div class=\"col-7\">
                                <div class=\"input-group\">
                                    <label style=\"font-size:18px\">";
        // line 162
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 162, $this->source); })()), "user", [], "any", false, false, false, 162), "roles", [], "any", false, false, false, 162), 0, [], "array", false, false, false, 162), "html", null, true);
        echo "<label>
                                </div>
                               </div>
                               <br>
                            </div>
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><br><br><br><br>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 162,  246 => 147,  229 => 133,  213 => 120,  197 => 107,  180 => 93,  164 => 80,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon profil{% endblock %}
  
{% block body %}

<style>
        :root {
            --main-color: #76b947; /* Primary color from the navbar */
            --text-color: #333; /* Text color for readability */
            --font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Main font family */
        }

        /* Card styles */
        
        /* Heading styles */
        .card h1 {
            color: var(--main-color);
            font-family: var(--font-family);
        }

        /* Body text styles */
             .card , .card-body {
            font-family: var(--font-family);
            background: #f9f9f9;
            border: 1px solid #ddd;
            margin-bottom: 20px;
            padding: 20px;
            }
        

        /* Label and value styles */
        .label, .value {
            font-size: 18px;
            color: var(--text-color);
        }

        /* Bold labels for a visual hierarchy */
        .label {
            font-weight: bold;
        }

        /* Consistent bottom margin for rows */
        .row {
            margin-bottom: 10px;
        }

        /* Custom horizontal rule to match the color theme */
        hr {
            border-top-color: var(--main-color);
        }

        /* Media queries for responsive adjustments */
        @media (max-width: 768px) {
            .label, .value {
                font-size: 16px;
            }
        }
    </style>
<br><br>
<br> <br> <br>

<div class=\"app d-flex flex-row align-items-center\">
    <div class=\"container\">
        <div class=\"justify-content-center row\">
            <div class=\"col-md-8 col-lg-8 col-xl-8\">
                <div class=\"card border-primary mb-3\" style=\"background-color: rgba(245, 245, 245, 0.9)\">
                    <div class=\"card-body\" style=\"background-color: rgba(50, 205, 50, 0.3); border: 1px solid #4CAF50;\">
                       <center> <h1>Mon Profil</h1> </center>
                        <hr />
                       
                            <div class=\"row\">
                              <div class=\"col-5\">
                                    <div class=\"input-group\">
                                 <b>     <label style=\"font-size:18px\">Prénom :<label></b>
                                    </div>
                               </div>
                               <div class=\"col-7\">
                                <div class=\"input-group\">
                                    <label style=\"font-size:18px\">{{app.user.surname}}<label>
                                </div>
                               </div>
                            </div>
<br>
                          <div class=\"row\">
                              <div class=\"col-5\">
                                    <div class=\"input-group\">
                                <b>      <label style=\"font-size:18px\">Nom :<label></b>
                                    </div>
                               </div>
                               <div class=\"col-7\">
                                <div class=\"input-group\">
                                    <label style=\"font-size:18px\">{{app.user.name}}<label>
                                </div>
                               </div>
                            </div>

                            <br>
                          <div class=\"row\">
                              <div class=\"col-5\">
                                    <div class=\"input-group\">
                                <b>  <label style=\"font-size:18px\">Adresse :<label> </b>
                                    </div>
                               </div>
                               <div class=\"col-7\">
                                <div class=\"input-group\">
                                    <label style=\"font-size:18px\">{{app.user.address}}<label>
                                </div>
                               </div>
                            </div>
                                                        <br>
                          <div class=\"row\">
                              <div class=\"col-5\">
                                    <div class=\"input-group\">
                                 <b>     <label style=\"font-size:18px\">Ville :<label></b>
                                    </div>
                               </div>
                               <div class=\"col-7\">
                                <div class=\"input-group\">
                                    <label style=\"font-size:18px\">{{app.user.city}}<label>
                                </div>
                               </div>
                            </div>
                                                        <br>
                          <div class=\"row\">
                              <div class=\"col-5\">
                                    <div class=\"input-group\">
                                  <b>    <label style=\"font-size:18px\">Pays :<label></b>
                                    </div>
                               </div>
                               <div class=\"col-7\">
                                <div class=\"input-group\">
                                    <label style=\"font-size:18px\">{{app.user.country}}<label>
                                </div>
                               </div>
                            </div>

                                                             <br>
                          <div class=\"row\">
                              <div class=\"col-5\">
                                    <div class=\"input-group\">
                                  <b>    <label style=\"font-size:18px\">Email :<label></b>
                                    </div>
                               </div>
                               <div class=\"col-7\">
                                <div class=\"input-group\">
                                    <label style=\"font-size:18px\">{{app.user.email}}<label>
                                </div>
                               </div>
                            </div>


                                                             <br>
                          <div class=\"row\">
                              <div class=\"col-5\">
                                    <div class=\"input-group\">
                                  <b>    <label style=\"font-size:18px\">Statut :<label></b>
                                    </div>
                               </div>
                               <div class=\"col-7\">
                                <div class=\"input-group\">
                                    <label style=\"font-size:18px\">{{app.user.roles[0]}}<label>
                                </div>
                               </div>
                               <br>
                            </div>
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><br><br><br><br>
{% endblock %}
", "home/profil.html.twig", "C:\\Users\\ASUS ROG STRIX\\Desktop\\bac+5\\apprendre\\Nouveau dossier\\Tiptop101123\\Tiptop\\Tiptop\\templates\\home\\profil.html.twig");
    }
}
