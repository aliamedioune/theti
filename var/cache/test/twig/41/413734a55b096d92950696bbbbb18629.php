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

/* registration/register.html.twig */
class __TwigTemplate_870615b27efb4089d425952c0f44b599 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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

        echo "S'inscrire";
        
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
        echo "<style>
 .buttonSubmitLogin {
    background-color: #5cb85c !important; /* Green background */
    color: white !important;
    border: none !important;
    padding: 10px 20px !important;
    text-align: center !important;
    text-decoration: none !important;
    display: inline-block !important;
    margin: 4px 2px !important;
    cursor: pointer !important;
    border-radius: 25px !important; /* Rounded borders */
    transition: background-color 0.3s ease !important; /* Smooth transition for hover effect */
}
";
        // line 76
        echo "/* Style général de la page */
body {
    font-family: 'Open Sans', sans-serif;
    background-color: #f7f7f7; /* Couleur de fond de la page */
}

/* Centre le formulaire d'inscription */
.inscription-container {
    width: 300px;
    margin: 100px auto;
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Ombre portée pour donner un effet en relief */
}

/* Style des champs de saisie */
input[type=\"text\"],
input[type=\"password\"],
input[type=\"email\"] {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ddd;
    box-sizing: border-box; /* Permet de garder la largeur de 100% même après ajout du padding */
}

/* Style du bouton de soumission */
button {
    width: 100%;
    padding: 10px;
    background-color: #5fbae9; /* Couleur de fond du bouton */
    border: none;
    color: white;
    cursor: pointer;
}

button:hover {
    background-color: #3a9ad9; /* Changement de couleur au survol */
}

/* Ajout de marges pour les titres */
h2 {
    text-align: center;
    margin-bottom: 20px;
}

</style>
<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\" style=\"opacity:0.85;\">
  ";
        // line 142
        echo "</nav>
<br> <br> <br>

<div class=\"app d-flex flex-row align-items-center\">
    <div class=\"container\">
        <div class=\"justify-content-center row\">
            <div class=\"col-md-9 col-lg-7 col-xl-6\">
                <div class=\"card border-primary mb-3\" style=\"background-color: rgba(245, 245, 245, 0.9)\">
                    <div class=\"card-body\" >
                       <center> <h1>Inscription</h1> </center>
                        <hr />
                        ";
        // line 153
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 153, $this->source); })()), 'form_start');
        echo "
                            <div class=\"mb-3 form-group\">
                               
                                ";
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 156, $this->source); })()), "surname", [], "any", false, false, false, 156), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                </div>
                               
                           
                            <div class=\"mb-3 input-group\">
                            
                                 ";
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 162, $this->source); })()), "name", [], "any", false, false, false, 162), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                              
                            </div>
                            <div class=\"mb-3 input-group\">
                                ";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 166, $this->source); })()), "address", [], "any", false, false, false, 166), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            <div class=\"row\">
                            <div class=\"col-6\">
                            <div class=\"input-group\">
                                ";
        // line 171
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 171, $this->source); })()), "city", [], "any", false, false, false, 171), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            </div>
                            <div class=\"col-6\">
                            <div class=\"input-group\">
                                ";
        // line 176
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 176, $this->source); })()), "country", [], "any", false, false, false, 176), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            </div>
                            </div>
                            <div class=\"row\" >
                            <div class=\"col-7\">
                            <div class=\"mt-4 input-group\">
                                ";
        // line 183
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 183, $this->source); })()), "aboutUs", [], "any", false, false, false, 183), 'label', ["label" => "Comment avez-vous entendu parlez du jeu ?"]);
        echo "
                            </div>
                            </div>
                            
                            <div class=\"col-5\">
                            <div class=\"mt-3 mb-3 input-group\">
                                ";
        // line 189
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 189, $this->source); })()), "aboutUs", [], "any", false, false, false, 189), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            </div>
                            </div>
                            <div class=\"mb-3 input-group\">
                                ";
        // line 194
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 194, $this->source); })()), "email", [], "any", false, false, false, 194), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                             <div>
                            ";
        // line 197
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 197, $this->source); })()), "plainPassword", [], "any", false, false, false, 197), "first", [], "any", false, false, false, 197), 'errors', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            <div class=\" mb-3 input-group\">
                           
                                ";
        // line 201
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 201, $this->source); })()), "plainPassword", [], "any", false, false, false, 201), "first", [], "any", false, false, false, 201), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            <div class=\"input-group\">
                                ";
        // line 204
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 204, $this->source); })()), "plainPassword", [], "any", false, false, false, 204), "second", [], "any", false, false, false, 204), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            <div class=\"row\" >
                            <div class=\"col-1 col-md-1\">
                            <div class=\"mt-4 input-group\">
                                ";
        // line 209
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 209, $this->source); })()), "agreeTerms", [], "any", false, false, false, 209), 'widget');
        echo "
                            </div>
                            </div>
                          <div class=\"col-11 col-md-11\">
                            <div class=\"mt-3 input-group\">
                                ";
        // line 214
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 214, $this->source); })()), "agreeTerms", [], "any", false, false, false, 214), 'label', ["label" => "Accepter les conditions d'utilisation"]);
        echo "
                            </div>
                                
                            </div>
                            </div>
                            <div class=\"row\" >
                            <div class=\"col-1 col-md-1\">
                            <div class=\"mt-4 input-group\">
                                ";
        // line 222
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 222, $this->source); })()), "newsletter", [], "any", false, false, false, 222), 'widget');
        echo "
                            </div>
                            </div>
                            <div class=\"col-11 col-md-11\">
                            <div class=\"mt-3 input-group\">
                                ";
        // line 227
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 227, $this->source); })()), "newsletter", [], "any", false, false, false, 227), 'label', ["label" => "J’accepte de recevoir la newsletter de TeaTipTop"]);
        echo "
                                
                            </div>
                            </div>
                            </div>
                            <hr />
                            <div class=\"mt-3 row\" >
                            
                            <input type=\"submit\" class=\"btn buttonSubmitLogin btn-block\" value=\"S'inscrire\" />
                            </div>
                        ";
        // line 237
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 237, $this->source); })()), 'form_end');
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 237,  286 => 227,  278 => 222,  267 => 214,  259 => 209,  251 => 204,  245 => 201,  238 => 197,  232 => 194,  224 => 189,  215 => 183,  205 => 176,  197 => 171,  189 => 166,  182 => 162,  173 => 156,  167 => 153,  154 => 142,  104 => 76,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}S'inscrire{% endblock %}

{% block body %}
<style>
 .buttonSubmitLogin {
    background-color: #5cb85c !important; /* Green background */
    color: white !important;
    border: none !important;
    padding: 10px 20px !important;
    text-align: center !important;
    text-decoration: none !important;
    display: inline-block !important;
    margin: 4px 2px !important;
    cursor: pointer !important;
    border-radius: 25px !important; /* Rounded borders */
    transition: background-color 0.3s ease !important; /* Smooth transition for hover effect */
}
{#
.buttonSubmitLogin:hover {
    background-color: #4cae4c !important; /* Slightly darker green on hover */
}

  /* Style général du site */
  body {
    font-family: 'Arial', sans-serif; /* Utilisez la police de votre site */
    color: #333; /* Couleur de texte générale */
  }

  /* Style du navbar */
  .navbar {
    background-color: #A7CC7D; /* Couleur verte, ajustez selon votre marque */
    /* Pas besoin d'opacité réduite ici si cela ne correspond pas à votre design */
  }

  .navbar .navbar-brand {
    color: white;
  }

  .navbar .nav-link {
    color: white;
  }

  /* Style du bouton */
  .btn-success {
    background-color: #6A994E; /* Vert, ajustez selon votre marque */
    border-color: #6A994E;
  }

  .btn-success:hover {
    background-color: #89AC76; /* Vert plus clair au survol */
    border-color: #89AC76;
  }

  /* Style de la carte */
  .card {
    border-color: #A7CC7D; /* Vert, ajustez selon votre marque */
    background-color: rgba(255, 255, 255, 0.9); /* Fond légèrement transparent */
  }

  /* Style des inputs et des labels */
  .form-control {
    border: 1px solid #A7CC7D; /* Bordure verte */
    color: #333; /* Couleur de texte pour les inputs */
  }

  .form-label, .card h1 {
    color: #6A994E; /* Vert, ajustez selon votre marque */
  }

  /* Style des erreurs */
  .form-error {
    color: #D9534F; /* Couleur d'erreur, généralement rouge */
  } #}
/* Style général de la page */
body {
    font-family: 'Open Sans', sans-serif;
    background-color: #f7f7f7; /* Couleur de fond de la page */
}

/* Centre le formulaire d'inscription */
.inscription-container {
    width: 300px;
    margin: 100px auto;
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Ombre portée pour donner un effet en relief */
}

/* Style des champs de saisie */
input[type=\"text\"],
input[type=\"password\"],
input[type=\"email\"] {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ddd;
    box-sizing: border-box; /* Permet de garder la largeur de 100% même après ajout du padding */
}

/* Style du bouton de soumission */
button {
    width: 100%;
    padding: 10px;
    background-color: #5fbae9; /* Couleur de fond du bouton */
    border: none;
    color: white;
    cursor: pointer;
}

button:hover {
    background-color: #3a9ad9; /* Changement de couleur au survol */
}

/* Ajout de marges pour les titres */
h2 {
    text-align: center;
    margin-bottom: 20px;
}

</style>
<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\" style=\"opacity:0.85;\">
  {# <div class=\"container\">
    {# <a class=\"navbar-brand\" href=\"/employe\">TeaTipTop</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button> 
    <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
          <ul class=\"navbar-nav me-auto\">
       
      
            
      </ul>
      <form class=\"d-flex\">
         <li class=\"nav-item d-flex\">
                  <b>  <a class=\"btn buttonSubmitLogin btn-block\" style=\"color:white;\" href=\"/login\">Se connecter</a></b>
            </li>
      </form>
    </div>
  </div>   #}
</nav>
<br> <br> <br>

<div class=\"app d-flex flex-row align-items-center\">
    <div class=\"container\">
        <div class=\"justify-content-center row\">
            <div class=\"col-md-9 col-lg-7 col-xl-6\">
                <div class=\"card border-primary mb-3\" style=\"background-color: rgba(245, 245, 245, 0.9)\">
                    <div class=\"card-body\" >
                       <center> <h1>Inscription</h1> </center>
                        <hr />
                        {{ form_start(registrationForm) }}
                            <div class=\"mb-3 form-group\">
                               
                                {{ form_widget(registrationForm.surname,{'attr' : {'class':'form-control'}}) }}
                                </div>
                               
                           
                            <div class=\"mb-3 input-group\">
                            
                                 {{ form_widget(registrationForm.name,{'attr' : {'class':'form-control'}}) }}
                              
                            </div>
                            <div class=\"mb-3 input-group\">
                                {{ form_widget(registrationForm.address,{'attr' : {'class':'form-control'}}) }}
                            </div>
                            <div class=\"row\">
                            <div class=\"col-6\">
                            <div class=\"input-group\">
                                {{ form_widget(registrationForm.city,{'attr' : {'class':'form-control'}}) }}
                            </div>
                            </div>
                            <div class=\"col-6\">
                            <div class=\"input-group\">
                                {{ form_widget(registrationForm.country,{'attr' : {'class':'form-control'}}) }}
                            </div>
                            </div>
                            </div>
                            <div class=\"row\" >
                            <div class=\"col-7\">
                            <div class=\"mt-4 input-group\">
                                {{ form_label(registrationForm.aboutUs, 'Comment avez-vous entendu parlez du jeu ?') }}
                            </div>
                            </div>
                            
                            <div class=\"col-5\">
                            <div class=\"mt-3 mb-3 input-group\">
                                {{ form_widget(registrationForm.aboutUs,{'attr' : {'class':'form-control'}}) }}
                            </div>
                            </div>
                            </div>
                            <div class=\"mb-3 input-group\">
                                {{ form_widget(registrationForm.email,{'attr' : {'class':'form-control'}}) }}
                            </div>
                             <div>
                            {{ form_errors(registrationForm.plainPassword.first,{'attr' : {'class':'form-control'}}) }}
                            </div>
                            <div class=\" mb-3 input-group\">
                           
                                {{ form_widget(registrationForm.plainPassword.first,{'attr' : {'class':'form-control'}}) }}
                            </div>
                            <div class=\"input-group\">
                                {{ form_widget(registrationForm.plainPassword.second,{'attr' : {'class':'form-control'}}) }}
                            </div>
                            <div class=\"row\" >
                            <div class=\"col-1 col-md-1\">
                            <div class=\"mt-4 input-group\">
                                {{ form_widget(registrationForm.agreeTerms) }}
                            </div>
                            </div>
                          <div class=\"col-11 col-md-11\">
                            <div class=\"mt-3 input-group\">
                                {{ form_label(registrationForm.agreeTerms, \"Accepter les conditions d\\'utilisation\") }}
                            </div>
                                
                            </div>
                            </div>
                            <div class=\"row\" >
                            <div class=\"col-1 col-md-1\">
                            <div class=\"mt-4 input-group\">
                                {{ form_widget(registrationForm.newsletter) }}
                            </div>
                            </div>
                            <div class=\"col-11 col-md-11\">
                            <div class=\"mt-3 input-group\">
                                {{ form_label(registrationForm.newsletter, \"J’accepte de recevoir la newsletter de TeaTipTop\") }}
                                
                            </div>
                            </div>
                            </div>
                            <hr />
                            <div class=\"mt-3 row\" >
                            
                            <input type=\"submit\" class=\"btn buttonSubmitLogin btn-block\" value=\"S'inscrire\" />
                            </div>
                        {{ form_end(registrationForm) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "registration/register.html.twig", "C:\\Users\\ASUS ROG STRIX\\Desktop\\bac+5\\apprendre\\Nouveau dossier\\Tiptop101123\\Tiptop\\Tiptop\\templates\\registration\\register.html.twig");
    }
}
