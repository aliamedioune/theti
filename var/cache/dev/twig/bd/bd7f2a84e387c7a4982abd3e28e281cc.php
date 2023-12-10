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

/* user/index.html.twig */
class __TwigTemplate_d06356274994f216692b7bd8f4761783 extends Template
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
        return "baseEmploye.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("baseEmploye.html.twig", "user/index.html.twig", 1);
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

        echo "Mes Gains";
        
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
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<style>
    .container {
        max-width: 700px; /* Adjust the width as necessary */
        background: #fff; /* White background */
        padding: 20px;
        border-radius: 10px; /* Rounded corners */
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        margin-top: 30px;
        margin-bottom: 30px;
    }
    h2.card-title {
        text-align: center;
        color: #333; /* Dark grey color for the text */
        margin-bottom: 20px;
    }
    .table {
        width: 100%; /* Full width */
        margin-bottom: 1rem;
        color: #212529;
    }
    .table th {
        vertical-align: bottom;
        border-bottom: 2px solid #dee2e6;
    }
    .table td {
        padding: .75rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6;
    }
    .badge {
        display: inline-block;
        padding: 0.5em 0.75em;
        font-size: 0.75em;
        font-weight: 700;
        line-height: 1;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: 0.375rem;
        background-color: #f0ad4e; /* Using Bootstrap warning color */
        color: white;
    }
    /* Additional styles for table */
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 53
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 54
        echo "<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-12\">
            <h2 class=\"card-title\">Mes Gains</h2>
            ";
        // line 58
        if (((isset($context["ticketsCount"]) || array_key_exists("ticketsCount", $context) ? $context["ticketsCount"] : (function () { throw new RuntimeError('Variable "ticketsCount" does not exist.', 58, $this->source); })()) > 0)) {
            // line 59
            echo "            <p>Vous avez gagné <span class=\"badge\">";
            echo twig_escape_filter($this->env, (isset($context["ticketsCount"]) || array_key_exists("ticketsCount", $context) ? $context["ticketsCount"] : (function () { throw new RuntimeError('Variable "ticketsCount" does not exist.', 59, $this->source); })()), "html", null, true);
            echo "</span> cadeau(x). Voici la liste de vos gains :</p>
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>Gain</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ticketsOwnByUser"]) || array_key_exists("ticketsOwnByUser", $context) ? $context["ticketsOwnByUser"] : (function () { throw new RuntimeError('Variable "ticketsOwnByUser" does not exist.', 67, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
                // line 68
                echo "                        <tr>
                            <td>";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ticket"], "ticket", [], "any", false, false, false, 69), "title", [], "any", false, false, false, 69), "html", null, true);
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "                </tbody>
            </table>
            ";
        } else {
            // line 75
            echo "                <p>Vous n'avez pas de gain.</p>
            ";
        }
        // line 77
        echo "        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 77,  196 => 75,  191 => 72,  182 => 69,  179 => 68,  175 => 67,  163 => 59,  161 => 58,  155 => 54,  145 => 53,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseEmploye.html.twig' %}

{% block title %}Mes Gains{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    .container {
        max-width: 700px; /* Adjust the width as necessary */
        background: #fff; /* White background */
        padding: 20px;
        border-radius: 10px; /* Rounded corners */
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        margin-top: 30px;
        margin-bottom: 30px;
    }
    h2.card-title {
        text-align: center;
        color: #333; /* Dark grey color for the text */
        margin-bottom: 20px;
    }
    .table {
        width: 100%; /* Full width */
        margin-bottom: 1rem;
        color: #212529;
    }
    .table th {
        vertical-align: bottom;
        border-bottom: 2px solid #dee2e6;
    }
    .table td {
        padding: .75rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6;
    }
    .badge {
        display: inline-block;
        padding: 0.5em 0.75em;
        font-size: 0.75em;
        font-weight: 700;
        line-height: 1;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: 0.375rem;
        background-color: #f0ad4e; /* Using Bootstrap warning color */
        color: white;
    }
    /* Additional styles for table */
</style>
{% endblock %}

{% block body %}
<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-12\">
            <h2 class=\"card-title\">Mes Gains</h2>
            {% if ticketsCount > 0 %}
            <p>Vous avez gagné <span class=\"badge\">{{ ticketsCount }}</span> cadeau(x). Voici la liste de vos gains :</p>
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>Gain</th>
                    </tr>
                </thead>
                <tbody>
                    {% for ticket in ticketsOwnByUser %}
                        <tr>
                            <td>{{ ticket.ticket.title }}</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
            {% else %}
                <p>Vous n'avez pas de gain.</p>
            {% endif %}
        </div>
    </div>
</div>
{% endblock %}
", "user/index.html.twig", "C:\\Users\\ASUS ROG STRIX\\Desktop\\bac+5\\apprendre\\Nouveau dossier\\Tiptop101123\\Tiptop\\Tiptop\\templates\\user\\index.html.twig");
    }
}
