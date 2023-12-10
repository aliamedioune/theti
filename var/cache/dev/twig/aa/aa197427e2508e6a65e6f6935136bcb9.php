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

/* admin/edit.html.twig */
class __TwigTemplate_9c583842a569e9d4ca90f77dfa0ff8a5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/edit.html.twig", 1);
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

        echo "Edit User";
        
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
/* Adjust body padding to ensure content doesn't overlap with fixed navbar and footer */
";
        // line 14
        echo "
/* Styling for the form container */
.container1 {
    background-color: #fff;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin: 0 auto; /* Center the container */
    max-width: 600px; /* Adjust the width as necessary */
}

/* Styling for form inputs and select */
input[type=text],
input[type=email],
input[type=password],
select,
textarea {
    width: 100%; /* Full width */
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
}

/* Styling for the submit button */
button[type=submit] {
    width: 100%;
    padding: 15px 20px;
    border: none;
    border-radius: 4px;
    background-color: #5cb85c;
    color: white;
    font-size: 1rem;
    cursor: pointer;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    margin-top: 10px;
}

button[type=submit]:hover {
    background-color: #449d44;
}

/* Transition effects for interactions */
input,
button[type=submit] {
    transition: all 0.3s ease;
}

/* Hover and focus states for better user interaction */
input[type=text]:hover,
input[type=email]:hover,
input[type=password]:hover,
input[type=text]:focus,
input[type=email]:focus,
input[type=password]:focus {
    border-color: #aacfe4;
    outline: none;
}
.btn-return {
    display: inline-block; /* Allows it to behave like a button */
    padding: 10px 20px; /* Same padding as your 'Enregistrer' button */
    font-size: 16px; /* Adjust the font size as needed */
    border-radius: 4px; /* Rounded corners */
    text-align: center;
    vertical-align: middle;
    border: 1px solid transparent;
    text-decoration: none; /* Removes underline from link */
    color: #fff; /* White text */
    background-color: #f0ad4e; /* Bootstrap 'btn-warning' color for example */
    transition: background-color 0.2s; /* Smooth transition for hover effect */
}

.btn-return:hover {
    background-color: #ec971f; /* Darker shade for hover effect */
    text-decoration: none; /* Keeps text underline from coming back on hover */
    color: #fff; /* Ensure text color does not change on hover */
}
</style>
<div class=\"container\">
    <h1>Modifer un utilisateur</h1>
    ";
        // line 95
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 95, $this->source); })()), 'form_start');
        echo "
        ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 96, $this->source); })()), "email", [], "any", false, false, false, 96), 'row');
        echo "
        ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 97, $this->source); })()), "roles", [], "any", false, false, false, 97), 'row');
        echo "
        ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 98, $this->source); })()), "plainPassword", [], "any", false, false, false, 98), 'row');
        echo "  
        ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 99, $this->source); })()), "address", [], "any", false, false, false, 99), 'row');
        echo "
        ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 100, $this->source); })()), "city", [], "any", false, false, false, 100), 'row');
        echo "
        ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 101, $this->source); })()), "country", [], "any", false, false, false, 101), 'row');
        echo "
        ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 102, $this->source); })()), "aboutUs", [], "any", false, false, false, 102), 'row');
        echo "
        ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 103, $this->source); })()), "name", [], "any", false, false, false, 103), 'row');
        echo "
        ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 104, $this->source); })()), "surname", [], "any", false, false, false, 104), 'row');
        echo "
        ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 105, $this->source); })()), "newsletter", [], "any", false, false, false, 105), 'row');
        echo "
        
        
        
        
       
        
        <button type=\"submit\" class=\"btn btn-primary\">Enregister</button>
    ";
        // line 113
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 113, $this->source); })()), 'form_end');
        echo "
    
    ";
        // line 116
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_list");
        echo "\" class=\"btn-return\">Retourne a la liste</a>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 116,  228 => 113,  217 => 105,  213 => 104,  209 => 103,  205 => 102,  201 => 101,  197 => 100,  193 => 99,  189 => 98,  185 => 97,  181 => 96,  177 => 95,  94 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edit User{% endblock %}

{% block body %}


<style>
/* Adjust body padding to ensure content doesn't overlap with fixed navbar and footer */
{# body {
    padding-top: 100px; /* Height of your fixed navbar */
    padding-bottom: 100px; /* Height of your fixed footer */
} #}

/* Styling for the form container */
.container1 {
    background-color: #fff;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin: 0 auto; /* Center the container */
    max-width: 600px; /* Adjust the width as necessary */
}

/* Styling for form inputs and select */
input[type=text],
input[type=email],
input[type=password],
select,
textarea {
    width: 100%; /* Full width */
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
}

/* Styling for the submit button */
button[type=submit] {
    width: 100%;
    padding: 15px 20px;
    border: none;
    border-radius: 4px;
    background-color: #5cb85c;
    color: white;
    font-size: 1rem;
    cursor: pointer;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    margin-top: 10px;
}

button[type=submit]:hover {
    background-color: #449d44;
}

/* Transition effects for interactions */
input,
button[type=submit] {
    transition: all 0.3s ease;
}

/* Hover and focus states for better user interaction */
input[type=text]:hover,
input[type=email]:hover,
input[type=password]:hover,
input[type=text]:focus,
input[type=email]:focus,
input[type=password]:focus {
    border-color: #aacfe4;
    outline: none;
}
.btn-return {
    display: inline-block; /* Allows it to behave like a button */
    padding: 10px 20px; /* Same padding as your 'Enregistrer' button */
    font-size: 16px; /* Adjust the font size as needed */
    border-radius: 4px; /* Rounded corners */
    text-align: center;
    vertical-align: middle;
    border: 1px solid transparent;
    text-decoration: none; /* Removes underline from link */
    color: #fff; /* White text */
    background-color: #f0ad4e; /* Bootstrap 'btn-warning' color for example */
    transition: background-color 0.2s; /* Smooth transition for hover effect */
}

.btn-return:hover {
    background-color: #ec971f; /* Darker shade for hover effect */
    text-decoration: none; /* Keeps text underline from coming back on hover */
    color: #fff; /* Ensure text color does not change on hover */
}
</style>
<div class=\"container\">
    <h1>Modifer un utilisateur</h1>
    {{ form_start(userForm) }}
        {{ form_row(userForm.email) }}
        {{ form_row(userForm.roles) }}
        {{ form_row(userForm.plainPassword) }}  
        {{ form_row(userForm.address) }}
        {{ form_row(userForm.city) }}
        {{ form_row(userForm.country) }}
        {{ form_row(userForm.aboutUs) }}
        {{ form_row(userForm.name) }}
        {{ form_row(userForm.surname) }}
        {{ form_row(userForm.newsletter) }}
        
        
        
        
       
        
        <button type=\"submit\" class=\"btn btn-primary\">Enregister</button>
    {{ form_end(userForm) }}
    
    {# Link back to the user list #}
    <a href=\"{{ path('admin_users_list') }}\" class=\"btn-return\">Retourne a la liste</a>
</div>
{% endblock %}
", "admin/edit.html.twig", "C:\\Users\\ASUS ROG STRIX\\Desktop\\bac+5\\apprendre\\Nouveau dossier\\Tiptop101123\\Tiptop\\Tiptop\\templates\\admin\\edit.html.twig");
    }
}
