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

/* security/login.html.twig */
class __TwigTemplate_986ef76e3bbe660afd275d746557f39c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

        echo "Thé Tiotop";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "        
       
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<style>
  body {
    font-family: 'Arial', sans-serif;
    background-color: #f7f7f7;
    color: #333;
    margin: 0;
    padding: 0;
  }
  .buttonSubmitLogin , .buttonSubmitRegister {
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

.buttonSubmitLogin:hover  {
    background-color: #4cae4c !important; /* Slightly darker green on hover */
}

  .secondary-button {
    background-color: #6c757d;
  }

  .secondary-button:hover {
    background-color: #5a6268;
  }

  ";
        // line 51
        echo "
  .header {
    background-color: #4CAF50;
    color: #fff;
    padding: 20px;
    text-align: center;
  }

  .main-content {
    padding: 20px;
  }

  hr {
    border: 0;
    height: 1px;
    background: #ddd;
    margin: 20px 0;
  }

  h1 {
    font-size: 24px;
    color: #333;
  }

  ul {
    list-style: none;
    padding: 0;
  }

  ul li {
    padding: 5px 0;
  }

  .card {
    background: #f9f9f9;
    border: 1px solid #ddd;
    margin-bottom: 20px;
    padding: 20px;
  }

  .button {
    background-color: #5cb85c;
    color: white;
    border: none;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 4px;
  }

  .button:hover {
    background-color: #4cae4c;
  }

  .secondary-button {
    background-color: #6c757d;
  }

  .secondary-button:hover {
    background-color: #5a6268;
  }
  
  .card-group {
    display: flex;
    justify-content: space-between;
  }

  .card-group > div {
    flex: 1;
    margin-right: 10px;
  }

  .card-group > div:last-child {
    margin-right: 0;
  }

  .input-group {
    margin-bottom: 20px;
  }

  .input-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
  }

  .text-center {
    text-align: center;
  }
</style>

";
        // line 165
        echo "
                   
<br/><br/>

    <div class=\"container\">
        <div class=\"justify-content-center row\">
            <div class=\"col-md-10 \">
            <div class=\"card border-primary mb-3\" style=\"background-color: rgba(245, 245, 245, 0.9)\">
              <center>  <h1 style=\"font-size:35px\"> Bienvenue sur Thé TipTop le jeu-concours! Inscrivez-vous et entrez votre numéro de caisse.</h1>  </center>
              <hr>
               <center>  <p style=\"font-size:20px\">Si vous avez un ticket de caisse ou une facture entre le <b>";
        // line 175
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 175, $this->source); })()), "closingDate", [], "any", false, false, false, 175), "-30 day"), "d-m-Y"), "html", null, true);
        echo " </b> et le <b>";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 175, $this->source); })()), "closingDate", [], "any", false, false, false, 175), "d-m-Y"), "html", null, true);
        echo " </b> et supérieure à 49 € vous êtes éligible à  participer à ce jeu de concours.</p></center> 
              <center>  <p style=\"font-size:20px\">Le grand tirage au sort aura lieu le <b>";
        // line 176
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 176, $this->source); })()), "closingDate", [], "any", false, false, false, 176), "d-m-Y"), "html", null, true);
        echo " </b>pour détermier un gagnant parmi les participants d'un an de thé d'une valeur de 360 €.</b> .</p></center> 
<hr>
                <b><p style=\"font-size:18px\">- 1 500 000 Cadeaux à gagner :</p></b>
                 <ul style=\"font-size:16px\">
                 <li>60% des tickets offrent un infuseur à thé</li>
                 <li>20% des tickets offrent une boite de 100g d’un thé detox ou infusion</li>
                 <li>10% des tickets offrent une boite de 100g de thé signature</li>
                 <li>6% des tickets offrent un coffret découverte d’une valeur de 39 €</li>
                 <li>4% des tickets offrent un coffret découverte d’une valeur de 69 €</li>
                 </ul>
                    
                <div class=\"card-group\">
                    <div class=\"p-4 card\">
                        <div class=\"card-body\">
                            <form method=\"post\">
                                ";
        // line 191
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 191, $this->source); })())) {
            // line 192
            echo "                                    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 192, $this->source); })()), "messageKey", [], "any", false, false, false, 192), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 192, $this->source); })()), "messageData", [], "any", false, false, false, 192), "security"), "html", null, true);
            echo "</div>
                                ";
        }
        // line 194
        echo "                                <h1>Connexion</h1>
                                
                                <div class=\"mb-3 input-group\">
                                    <input type=\"email\" value=\"";
        // line 197
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 197, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"email\" autocomplete=\"email\" required autofocus>
                                </div>
                                <div class=\"mb-2 input-group\">
                                    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"mot de passe\" autocomplete=\"current-password\" required>
                                </div>
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                                <div class=\"row mt-3\">
                                        <button type=\"submit\" class=\"btn buttonSubmitLogin btn-block\">Se connecter</button>
                                </div>
                            </form>
         
                        </div>
                    </div>
                    <div class=\"text-white cardCreatAccount py-5 d-md-down-none card\">
                        <div class=\"text-center card-body\">
                            <div>
                                <h2 class=\"text-white\">Créer un compte</h2>
                                <p>Si vous souhaitez participer au jeu-concours et voir l'historique de vos gains, vous devez créer un compte.</p>
                                <a href=\"/register\">
                                    <button tabindex=\"-1\" class=\"mt-3 btn buttonSubmitRegister\">Rejoindre !</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script>



   
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 202,  293 => 197,  288 => 194,  282 => 192,  280 => 191,  262 => 176,  256 => 175,  244 => 165,  147 => 51,  111 => 9,  101 => 8,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Thé Tiotop{% endblock %}
        {% block stylesheets %}
        
       
        {% endblock %}
{% block body %}
<style>
  body {
    font-family: 'Arial', sans-serif;
    background-color: #f7f7f7;
    color: #333;
    margin: 0;
    padding: 0;
  }
  .buttonSubmitLogin , .buttonSubmitRegister {
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

.buttonSubmitLogin:hover  {
    background-color: #4cae4c !important; /* Slightly darker green on hover */
}

  .secondary-button {
    background-color: #6c757d;
  }

  .secondary-button:hover {
    background-color: #5a6268;
  }

  {# .container {
    max-width: 800px;
    margin: 20px auto;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    overflow: hidden;
  } #}

  .header {
    background-color: #4CAF50;
    color: #fff;
    padding: 20px;
    text-align: center;
  }

  .main-content {
    padding: 20px;
  }

  hr {
    border: 0;
    height: 1px;
    background: #ddd;
    margin: 20px 0;
  }

  h1 {
    font-size: 24px;
    color: #333;
  }

  ul {
    list-style: none;
    padding: 0;
  }

  ul li {
    padding: 5px 0;
  }

  .card {
    background: #f9f9f9;
    border: 1px solid #ddd;
    margin-bottom: 20px;
    padding: 20px;
  }

  .button {
    background-color: #5cb85c;
    color: white;
    border: none;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 4px;
  }

  .button:hover {
    background-color: #4cae4c;
  }

  .secondary-button {
    background-color: #6c757d;
  }

  .secondary-button:hover {
    background-color: #5a6268;
  }
  
  .card-group {
    display: flex;
    justify-content: space-between;
  }

  .card-group > div {
    flex: 1;
    margin-right: 10px;
  }

  .card-group > div:last-child {
    margin-right: 0;
  }

  .input-group {
    margin-bottom: 20px;
  }

  .input-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
  }

  .text-center {
    text-align: center;
  }
</style>

{# <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\" style=\"opacity:0.85;\">
  <div class=\"container\">
    <a class=\"navbar-brand\" href=\"/employe\">TeaTipTop</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
          <ul class=\"navbar-nav me-auto\">
       
    
      </ul>
      <form class=\"d-flex\">
         <li class=\"nav-item d-flex\">
              <b>  <a class=\"nav-link\" style=\"color:white;\" href=\"/register\">Inscriptionnnnnnnnn</a></b>
            </li>
      </form>
    </div>
  </div>  
</nav>  #}

                   
<br/><br/>

    <div class=\"container\">
        <div class=\"justify-content-center row\">
            <div class=\"col-md-10 \">
            <div class=\"card border-primary mb-3\" style=\"background-color: rgba(245, 245, 245, 0.9)\">
              <center>  <h1 style=\"font-size:35px\"> Bienvenue sur Thé TipTop le jeu-concours! Inscrivez-vous et entrez votre numéro de caisse.</h1>  </center>
              <hr>
               <center>  <p style=\"font-size:20px\">Si vous avez un ticket de caisse ou une facture entre le <b>{{ date.closingDate|date_modify(\"-30 day\")|date('d-m-Y') }} </b> et le <b>{{ date.closingDate|date('d-m-Y') }} </b> et supérieure à 49 € vous êtes éligible à  participer à ce jeu de concours.</p></center> 
              <center>  <p style=\"font-size:20px\">Le grand tirage au sort aura lieu le <b>{{ date.closingDate|date('d-m-Y') }} </b>pour détermier un gagnant parmi les participants d'un an de thé d'une valeur de 360 €.</b> .</p></center> 
<hr>
                <b><p style=\"font-size:18px\">- 1 500 000 Cadeaux à gagner :</p></b>
                 <ul style=\"font-size:16px\">
                 <li>60% des tickets offrent un infuseur à thé</li>
                 <li>20% des tickets offrent une boite de 100g d’un thé detox ou infusion</li>
                 <li>10% des tickets offrent une boite de 100g de thé signature</li>
                 <li>6% des tickets offrent un coffret découverte d’une valeur de 39 €</li>
                 <li>4% des tickets offrent un coffret découverte d’une valeur de 69 €</li>
                 </ul>
                    
                <div class=\"card-group\">
                    <div class=\"p-4 card\">
                        <div class=\"card-body\">
                            <form method=\"post\">
                                {% if error %}
                                    <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                                {% endif %}
                                <h1>Connexion</h1>
                                
                                <div class=\"mb-3 input-group\">
                                    <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"email\" autocomplete=\"email\" required autofocus>
                                </div>
                                <div class=\"mb-2 input-group\">
                                    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"mot de passe\" autocomplete=\"current-password\" required>
                                </div>
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                                <div class=\"row mt-3\">
                                        <button type=\"submit\" class=\"btn buttonSubmitLogin btn-block\">Se connecter</button>
                                </div>
                            </form>
         
                        </div>
                    </div>
                    <div class=\"text-white cardCreatAccount py-5 d-md-down-none card\">
                        <div class=\"text-center card-body\">
                            <div>
                                <h2 class=\"text-white\">Créer un compte</h2>
                                <p>Si vous souhaitez participer au jeu-concours et voir l'historique de vos gains, vous devez créer un compte.</p>
                                <a href=\"/register\">
                                    <button tabindex=\"-1\" class=\"mt-3 btn buttonSubmitRegister\">Rejoindre !</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script>



   
</script>
{% endblock %}

", "security/login.html.twig", "C:\\Users\\ASUS ROG STRIX\\Desktop\\bac+5\\apprendre\\Nouveau dossier\\Tiptop101123\\Tiptop\\Tiptop\\templates\\security\\login.html.twig");
    }
}
