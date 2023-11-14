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

/* employe/index.html.twig */
class __TwigTemplate_3d4ea1549046d9a3f90ceeb6e5206e2d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "employe/index.html.twig", 1);
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

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<style>
.error-container {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 25vh; /* Ajustez la hauteur si nécessaire pour votre mise en page */
}

.error-card {
  width: 100rem; /* ou la largeur que vous préférez */
  background-color: #dc3545; /* rouge bootstrap */
  color: white;
  margin-top: -50px; /* ajustement pour la centrer verticalement si nécessaire */
  border-radius: 0.25rem;
}

.error-header {
  padding: 0.75rem 1.25rem;
  background-color: rgba(0,0,0,.03);
  border-bottom: 1px solid rgba(0,0,0,.125);
}

.error-body {
  padding: 1.25rem;
}

.error-title {
  margin-bottom: 0.75rem;
}

.error-text {
  margin-bottom: 0;
}

</style>

";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "session", [], "any", false, false, false, 46), "flashbag", [], "any", false, false, false, 46), "get", ["Erreur"], "method", false, false, false, 46));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 47
            echo "<div class=\"error-container\">
  <div class=\"error-card\">
      <div class=\"error-header\">Erreur</div>
      <div class=\"error-body\">
          <h5 class=\"error-title\">Attention !</h5>
          <p class=\"error-text\">";
            // line 52
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
      </div>
  </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "


";
        // line 66
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
        // line 108
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

   <div class=\"container\">
        <div class=\"justify-content-center row\">
            <div class=\"col-md-8\">
                <div class=\"card-group \">
                    <div class=\"text-white py-5 d-md-down-none card cardSubmitEmailCustomer\" style=\"background-color: rgba(50, 205, 50, 0.3); border: 1px solid #4CAF50;\">
                        <div class=\"text-center card-body\" id=\"listCustomerTickets\">
                            <div class=\"col-12 contentUserGain\" id=\"blockUserGain\">
                                <h2 class=\"text-white\">Indiquez l'email du client pour voir ses gains :</h2>
                                <p id=\"result\"></p>
                                <form method=\"POST\" action=\"/employe/checkuser/checkcode\">
                                <div class=\"input-group\">
                                <div class=\"col-6\">
                                <input name=\"mail\" type=\"email\" placeholder=\"Email\" class=\"form-control\">
                                </div>
                                <div class=\"col-4\">
                                <input type=\"submit\"  value=\"valider\" class=\"btn btn-success btn-block\">
                                </div>
                               </div>
                             </form>
                        </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
</div>
<br><br> <br> <br> <br>
<br> <br> <br><br><br>
<br> <br>  <br>  <br> <br> 
<br> 

       
   


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "employe/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 108,  175 => 66,  170 => 57,  159 => 52,  152 => 47,  148 => 46,  110 => 10,  100 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Thé Tiotop{% endblock %}

{% block stylesheets %}
    
{% endblock %}

{% block body %}
<style>
.error-container {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 25vh; /* Ajustez la hauteur si nécessaire pour votre mise en page */
}

.error-card {
  width: 100rem; /* ou la largeur que vous préférez */
  background-color: #dc3545; /* rouge bootstrap */
  color: white;
  margin-top: -50px; /* ajustement pour la centrer verticalement si nécessaire */
  border-radius: 0.25rem;
}

.error-header {
  padding: 0.75rem 1.25rem;
  background-color: rgba(0,0,0,.03);
  border-bottom: 1px solid rgba(0,0,0,.125);
}

.error-body {
  padding: 1.25rem;
}

.error-title {
  margin-bottom: 0.75rem;
}

.error-text {
  margin-bottom: 0;
}

</style>

{% for message in app.session.flashbag.get('Erreur') %}
<div class=\"error-container\">
  <div class=\"error-card\">
      <div class=\"error-header\">Erreur</div>
      <div class=\"error-body\">
          <h5 class=\"error-title\">Attention !</h5>
          <p class=\"error-text\">{{ message }}</p>
      </div>
  </div>
</div>
{% endfor %}



{# {% for message in app.session.flashbag.get('Erreur') %}
<div class=\"alert alert-dismissible alert-danger\">
  <h4 class=\"alert-heading\"> {{ message }}</h4>
</div>
<br>
{% endfor %}  #}
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

   <div class=\"container\">
        <div class=\"justify-content-center row\">
            <div class=\"col-md-8\">
                <div class=\"card-group \">
                    <div class=\"text-white py-5 d-md-down-none card cardSubmitEmailCustomer\" style=\"background-color: rgba(50, 205, 50, 0.3); border: 1px solid #4CAF50;\">
                        <div class=\"text-center card-body\" id=\"listCustomerTickets\">
                            <div class=\"col-12 contentUserGain\" id=\"blockUserGain\">
                                <h2 class=\"text-white\">Indiquez l'email du client pour voir ses gains :</h2>
                                <p id=\"result\"></p>
                                <form method=\"POST\" action=\"/employe/checkuser/checkcode\">
                                <div class=\"input-group\">
                                <div class=\"col-6\">
                                <input name=\"mail\" type=\"email\" placeholder=\"Email\" class=\"form-control\">
                                </div>
                                <div class=\"col-4\">
                                <input type=\"submit\"  value=\"valider\" class=\"btn btn-success btn-block\">
                                </div>
                               </div>
                             </form>
                        </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
</div>
<br><br> <br> <br> <br>
<br> <br> <br><br><br>
<br> <br>  <br>  <br> <br> 
<br> 

       
   


{% endblock %}
", "employe/index.html.twig", "C:\\Users\\ASUS ROG STRIX\\Desktop\\bac+5\\apprendre\\Nouveau dossier\\Tiptop101123\\Tiptop\\Tiptop\\templates\\employe\\index.html.twig");
    }
}
