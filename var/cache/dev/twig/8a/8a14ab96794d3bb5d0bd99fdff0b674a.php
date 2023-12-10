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

/* employe/gains.html.twig */
class __TwigTemplate_ccbc25a26f15d420f91599e1a465618a extends Template
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
        return "baseEmploye.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/gains.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/gains.html.twig"));

        $this->parent = $this->loadTemplate("baseEmploye.html.twig", "employe/gains.html.twig", 1);
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

        echo "Gains";
        
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


    .custom-table {
        margin: auto;
        width: 80%; /* You can adjust the width as needed */
        background-color: #f4d9e7; /* Light pink background */
        border-collapse: collapse;
    }

    .custom-table th,
    .custom-table td {
        border: 1px solid #ddd; /* Adding a light border to your table cells */
        padding: 8px; /* Adding some padding for table cell content */
        text-align: center; /* Center aligning the text */
    }

    .custom-button {
        width: 100%; /* Make the button expand the full width of the cell */
        padding: 5px 10px; /* Adding some padding */
        border: none;
        border-radius: 5px; /* Rounded corners for the button */
        background-color: #28a745; /* Bootstrap success color */
        color: white;
        cursor: pointer; /* Change cursor to pointer on hover */
    }

    .custom-button:hover {
        background-color: #218838; /* A slightly darker shade on hover */
    }

    .alert-center {
        width: 50%;
        margin: 20px auto; /* Centering the alert and adding some margin */
    }
    .custom-alert1 {
        background-color: #dc3545; /* Bootstrap red */
        color: white; /* Text color */
        padding: 15px; /* Alert padding */
        border-radius: 5px; /* Rounded corners */
        border: none;
        margin-bottom: 20px; /* Space below the alert */
        width: 50%; /* Width of the alert */
        margin: 20px auto; /* Centering the alert */
    }
</style>

<div class=\"container\">
    <div class=\"justify-content-center row\">
        ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "session", [], "any", false, false, false, 55), "flashbag", [], "any", false, false, false, 55), "get", ["Success"], "method", false, false, false, 55));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 56
            echo "            <div class=\"alert alert-dismissible custom-alert\">
            <h4 class=\"alert-heading text-center\">";
            // line 57
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</h4>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "
        ";
        // line 61
        if ((isset($context["wins"]) || array_key_exists("wins", $context) ? $context["wins"] : (function () { throw new RuntimeError('Variable "wins" does not exist.', 61, $this->source); })())) {
            // line 62
            echo "            <table class=\"table custom-table mt-4\">
                <thead>
                    <tr>
                        <th>Utilisateur</th>
                        <th>Type de gain</th>
                        <th>L'état de gain</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["wins"]) || array_key_exists("wins", $context) ? $context["wins"] : (function () { throw new RuntimeError('Variable "wins" does not exist.', 72, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["win"]) {
                // line 73
                echo "                        <tr>
                            <td>";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["win"], "user", [], "any", false, false, false, 74), "surname", [], "any", false, false, false, 74), "html", null, true);
                echo "</td>
                            <td>";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["win"], "ticket", [], "any", false, false, false, 75), "title", [], "any", false, false, false, 75), "html", null, true);
                echo "</td>
                            <td>
                                ";
                // line 77
                if ((twig_get_attribute($this->env, $this->source, $context["win"], "send", [], "any", false, false, false, 77) == 0)) {
                    // line 78
                    echo "                                    <span class=\"badge bg-warning\">Gains pas encore distribué</span>
                                ";
                } else {
                    // line 80
                    echo "                                    <span class=\"badge bg-info\">Gains est déja distribué</span>
                                ";
                }
                // line 82
                echo "                            </td>
                            <td>
                                ";
                // line 84
                if ((twig_get_attribute($this->env, $this->source, $context["win"], "send", [], "any", false, false, false, 84) == 0)) {
                    // line 85
                    echo "                                    <form method=\"POST\" action=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_code_send");
                    echo "\">
                                        <input type=\"hidden\" value=\"";
                    // line 86
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["win"], "id", [], "any", false, false, false, 86), "html", null, true);
                    echo "\" name=\"gain_id\">
                                        <button type=\"submit\" class=\"custom-button\">Donner le gain</button>
                                    </form>
                                ";
                }
                // line 90
                echo "                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['win'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "                </tbody>
            </table>
        ";
        }
        // line 96
        echo "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "employe/gains.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 96,  224 => 93,  216 => 90,  209 => 86,  204 => 85,  202 => 84,  198 => 82,  194 => 80,  190 => 78,  188 => 77,  183 => 75,  179 => 74,  176 => 73,  172 => 72,  160 => 62,  158 => 61,  155 => 60,  146 => 57,  143 => 56,  139 => 55,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseEmploye.html.twig' %}

{% block title %}Gains{% endblock %}

{% block body %}
<style>


    .custom-table {
        margin: auto;
        width: 80%; /* You can adjust the width as needed */
        background-color: #f4d9e7; /* Light pink background */
        border-collapse: collapse;
    }

    .custom-table th,
    .custom-table td {
        border: 1px solid #ddd; /* Adding a light border to your table cells */
        padding: 8px; /* Adding some padding for table cell content */
        text-align: center; /* Center aligning the text */
    }

    .custom-button {
        width: 100%; /* Make the button expand the full width of the cell */
        padding: 5px 10px; /* Adding some padding */
        border: none;
        border-radius: 5px; /* Rounded corners for the button */
        background-color: #28a745; /* Bootstrap success color */
        color: white;
        cursor: pointer; /* Change cursor to pointer on hover */
    }

    .custom-button:hover {
        background-color: #218838; /* A slightly darker shade on hover */
    }

    .alert-center {
        width: 50%;
        margin: 20px auto; /* Centering the alert and adding some margin */
    }
    .custom-alert1 {
        background-color: #dc3545; /* Bootstrap red */
        color: white; /* Text color */
        padding: 15px; /* Alert padding */
        border-radius: 5px; /* Rounded corners */
        border: none;
        margin-bottom: 20px; /* Space below the alert */
        width: 50%; /* Width of the alert */
        margin: 20px auto; /* Centering the alert */
    }
</style>

<div class=\"container\">
    <div class=\"justify-content-center row\">
        {% for message in app.session.flashbag.get('Success') %}
            <div class=\"alert alert-dismissible custom-alert\">
            <h4 class=\"alert-heading text-center\">{{ message }}</h4>
        </div>
        {% endfor %}

        {% if wins %}
            <table class=\"table custom-table mt-4\">
                <thead>
                    <tr>
                        <th>Utilisateur</th>
                        <th>Type de gain</th>
                        <th>L'état de gain</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    {% for win in wins %}
                        <tr>
                            <td>{{ win.user.surname }}</td>
                            <td>{{ win.ticket.title }}</td>
                            <td>
                                {% if win.send == 0 %}
                                    <span class=\"badge bg-warning\">Gains pas encore distribué</span>
                                {% else %}
                                    <span class=\"badge bg-info\">Gains est déja distribué</span>
                                {% endif %}
                            </td>
                            <td>
                                {% if win.send == 0 %}
                                    <form method=\"POST\" action=\"{{ path('app_code_send') }}\">
                                        <input type=\"hidden\" value=\"{{ win.id }}\" name=\"gain_id\">
                                        <button type=\"submit\" class=\"custom-button\">Donner le gain</button>
                                    </form>
                                {% endif %}
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        {% endif %}
    </div>
</div>
{% endblock %}
", "employe/gains.html.twig", "C:\\Users\\ASUS ROG STRIX\\Desktop\\bac+5\\apprendre\\Nouveau dossier\\Tiptop101123\\Tiptop\\Tiptop\\templates\\employe\\gains.html.twig");
    }
}
