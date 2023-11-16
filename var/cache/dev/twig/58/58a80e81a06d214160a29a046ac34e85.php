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
        // line 222
        return "baseEmploye.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/index.html.twig"));

        $this->parent = $this->loadTemplate("baseEmploye.html.twig", "employe/index.html.twig", 222);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 224
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Gestion des Gains";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 226
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 227
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<style>
    body {
        background-color: #f8f9fa; /* A light grey background */
    }
    .container {
        background-color: #fff; /* White background for the content */
        border-radius: 0.25rem;
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075); /* Subtle shadow for depth */
        padding: 2rem;
        margin-top: 2rem;
    }
    .card {
        background-color: #007bff; /* Bootstrap primary color */
        border-color: #007bff; /* Consistent with the background */
    }
    .card h2 {
        color: #fff; /* White text for readability */
    }
    .card input, .card button {
        margin-top: 0.5rem;
    }
    .table {
        margin-top: 2rem;
    }
    thead {
        background-color: #0062cc; /* A darker shade of primary color */
        color: #fff;
    }
    .btn-custom {
        background-color: #28a745; /* Bootstrap success color */
        color: white;
        border: none;
        border-radius: 0.25rem;
        padding: 10px 50px; /* Increased padding */
        font-size: 50px; /* Larger font size */
        transition: background-color 1s ease-in-out;
    }
    .btn-custom:hover, .btn-custom:focus {
        background-color: #218838; /* A darker shade for hover/focus */
        color: #fff;
        text-decoration: none;
    }
    /* Ensure that the buttons are not being overridden by other styles */
    button.btn-custom {
        background-color: #28a745 !important; /* Use !important as a last resort */
    }
    .badge {
        font-size: 100%;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 280
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 281
        echo "<div class=\"container\">
    <div class=\"card\">
        <div class=\"card-body\">
            <h2 class=\"text-center\">Indiquez l'email du client pour voir ses gains :</h2>
            <form method=\"POST\" action=\"/employe/checkuser/checkcode\" class=\"form-inline justify-content-center\">
                <input name=\"mail\" type=\"email\" placeholder=\"Email\" class=\"form-control mr-2\">
                <span class=\"badge badge-success\"><button type=\"submit\" class=\"btn btn-custom\">Valider</button></span>
            </form>
        </div>
    </div>

    <h2 class=\"text-center my-4\">Liste des utilisateurs avec gains</h2>

    ";
        // line 294
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 294, $this->source); })()), "flashes", ["success"], "method", false, false, false, 294));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 295
            echo "    <div class=\"alert alert-success text-center\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 297
        echo "
    ";
        // line 298
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 298, $this->source); })()), "flashes", ["error"], "method", false, false, false, 298));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 299
            echo "    <div class=\"alert alert-danger text-center\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 301
        echo "
    <div class=\"table-responsive\">
        <table class=\"table\">
            <thead>
                <tr>
                    <th>Utilisateur</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 312
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users_with_gains"]) || array_key_exists("users_with_gains", $context) ? $context["users_with_gains"] : (function () { throw new RuntimeError('Variable "users_with_gains" does not exist.', 312, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 313
            echo "            <tr>
                <td>";
            // line 314
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 314), "html", null, true);
            echo "</td>
                <td>";
            // line 315
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 315), "html", null, true);
            echo "</td>
                <td>
                 
                  <span class=\"badge badge-info\">  <button onclick=\"toggleGains('gains-";
            // line 318
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 318), "html", null, true);
            echo "')\" class=\"btn btn-custom\">Voir les gains</button></span>
                </td>
            </tr>
            <tr>
                <td colspan=\"3\">
                    <div class=\"collapse\" id=\"gains-";
            // line 323
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 323), "html", null, true);
            echo "\">
                        <table class=\"table\">
                            <thead>
                                <tr>
                                    <th>Type de gain</th>
                                    <th>État de gain</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            ";
            // line 333
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "winningTickets", [], "any", false, false, false, 333));
            foreach ($context['_seq'] as $context["_key"] => $context["win"]) {
                // line 334
                echo "                                <tr>
                                    <td>";
                // line 335
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["win"], "ticket", [], "any", false, false, false, 335), "title", [], "any", false, false, false, 335), "html", null, true);
                echo "</td>
                                    <td>
                                        ";
                // line 337
                if ( !twig_get_attribute($this->env, $this->source, $context["win"], "send", [], "any", false, false, false, 337)) {
                    // line 338
                    echo "                                            <span class=\"badge badge-warning\">Pas encore distribué</span>
                                        ";
                } else {
                    // line 340
                    echo "                                            <span class=\"badge badge-success\">Déjà distribué</span>
                                        ";
                }
                // line 342
                echo "                                    </td>
                                    <td>
                                        ";
                // line 344
                if ( !twig_get_attribute($this->env, $this->source, $context["win"], "send", [], "any", false, false, false, 344)) {
                    // line 345
                    echo "                                            <form method=\"post\" action=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_code_send");
                    echo "\">
                                                <input type=\"hidden\" name=\"gain_id\" value=\"";
                    // line 346
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["win"], "id", [], "any", false, false, false, 346), "html", null, true);
                    echo "\">
                                                <span class=\"badge badge-success\"><button type=\"submit\" class=\"btn btn-custom\">Donner le gain</button></span>
                                                
                                            </form>
                                        ";
                }
                // line 351
                echo "                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['win'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 354
            echo "                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 360
        echo "            </tbody>
        </table>
    </div>
</div>

<script>
    function toggleGains(id) {
        var element = document.getElementById(id);
        if (element.style.display === \"none\") {
            element.style.display = \"block\";
        } else {
            element.style.display = \"none\";
        }
    }
</script>

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
        return array (  316 => 360,  305 => 354,  297 => 351,  289 => 346,  284 => 345,  282 => 344,  278 => 342,  274 => 340,  270 => 338,  268 => 337,  263 => 335,  260 => 334,  256 => 333,  243 => 323,  235 => 318,  229 => 315,  225 => 314,  222 => 313,  218 => 312,  205 => 301,  196 => 299,  192 => 298,  189 => 297,  180 => 295,  176 => 294,  161 => 281,  151 => 280,  89 => 227,  79 => 226,  60 => 224,  37 => 222,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% extends 'base.html.twig' %}

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

      

{% endblock %} #}
{% extends 'baseEmploye.html.twig' %}

{% block title %}Gestion des Gains{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    body {
        background-color: #f8f9fa; /* A light grey background */
    }
    .container {
        background-color: #fff; /* White background for the content */
        border-radius: 0.25rem;
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075); /* Subtle shadow for depth */
        padding: 2rem;
        margin-top: 2rem;
    }
    .card {
        background-color: #007bff; /* Bootstrap primary color */
        border-color: #007bff; /* Consistent with the background */
    }
    .card h2 {
        color: #fff; /* White text for readability */
    }
    .card input, .card button {
        margin-top: 0.5rem;
    }
    .table {
        margin-top: 2rem;
    }
    thead {
        background-color: #0062cc; /* A darker shade of primary color */
        color: #fff;
    }
    .btn-custom {
        background-color: #28a745; /* Bootstrap success color */
        color: white;
        border: none;
        border-radius: 0.25rem;
        padding: 10px 50px; /* Increased padding */
        font-size: 50px; /* Larger font size */
        transition: background-color 1s ease-in-out;
    }
    .btn-custom:hover, .btn-custom:focus {
        background-color: #218838; /* A darker shade for hover/focus */
        color: #fff;
        text-decoration: none;
    }
    /* Ensure that the buttons are not being overridden by other styles */
    button.btn-custom {
        background-color: #28a745 !important; /* Use !important as a last resort */
    }
    .badge {
        font-size: 100%;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container\">
    <div class=\"card\">
        <div class=\"card-body\">
            <h2 class=\"text-center\">Indiquez l'email du client pour voir ses gains :</h2>
            <form method=\"POST\" action=\"/employe/checkuser/checkcode\" class=\"form-inline justify-content-center\">
                <input name=\"mail\" type=\"email\" placeholder=\"Email\" class=\"form-control mr-2\">
                <span class=\"badge badge-success\"><button type=\"submit\" class=\"btn btn-custom\">Valider</button></span>
            </form>
        </div>
    </div>

    <h2 class=\"text-center my-4\">Liste des utilisateurs avec gains</h2>

    {% for message in app.flashes('success') %}
    <div class=\"alert alert-success text-center\">{{ message }}</div>
    {% endfor %}

    {% for message in app.flashes('error') %}
    <div class=\"alert alert-danger text-center\">{{ message }}</div>
    {% endfor %}

    <div class=\"table-responsive\">
        <table class=\"table\">
            <thead>
                <tr>
                    <th>Utilisateur</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            {% for user in users_with_gains %}
            <tr>
                <td>{{ user.name }}</td>
                <td>{{ user.email }}</td>
                <td>
                 
                  <span class=\"badge badge-info\">  <button onclick=\"toggleGains('gains-{{ user.id }}')\" class=\"btn btn-custom\">Voir les gains</button></span>
                </td>
            </tr>
            <tr>
                <td colspan=\"3\">
                    <div class=\"collapse\" id=\"gains-{{ user.id }}\">
                        <table class=\"table\">
                            <thead>
                                <tr>
                                    <th>Type de gain</th>
                                    <th>État de gain</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            {% for win in user.winningTickets %}
                                <tr>
                                    <td>{{ win.ticket.title }}</td>
                                    <td>
                                        {% if not win.send %}
                                            <span class=\"badge badge-warning\">Pas encore distribué</span>
                                        {% else %}
                                            <span class=\"badge badge-success\">Déjà distribué</span>
                                        {% endif %}
                                    </td>
                                    <td>
                                        {% if not win.send %}
                                            <form method=\"post\" action=\"{{ path('app_code_send') }}\">
                                                <input type=\"hidden\" name=\"gain_id\" value=\"{{ win.id }}\">
                                                <span class=\"badge badge-success\"><button type=\"submit\" class=\"btn btn-custom\">Donner le gain</button></span>
                                                
                                            </form>
                                        {% endif %}
                                    </td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
</div>

<script>
    function toggleGains(id) {
        var element = document.getElementById(id);
        if (element.style.display === \"none\") {
            element.style.display = \"block\";
        } else {
            element.style.display = \"none\";
        }
    }
</script>

{% endblock %}
", "employe/index.html.twig", "C:\\Users\\ASUS ROG STRIX\\Desktop\\bac+5\\apprendre\\Nouveau dossier\\Tiptop101123\\Tiptop\\Tiptop\\templates\\employe\\index.html.twig");
    }
}
