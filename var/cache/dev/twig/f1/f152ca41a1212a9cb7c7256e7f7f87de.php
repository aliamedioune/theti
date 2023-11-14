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

/* employe/list.html.twig */
class __TwigTemplate_eb017b66d59f2d265961e819349174b3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "employe/list.html.twig", 1);
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

        echo "Users";
        
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
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("v.css"), "html", null, true);
        echo "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "<style>
    .table-responsive {
        margin: 20px 0;
    }
    .table-hover tbody tr:hover td, .table-hover tbody tr:hover th {
        background-color: #f5f5f5;
    }
    /* Custom table headers */
    thead th {
        background-color: #4CAF50;
        color: white;
    }
    /* Zebra striping for table */
    tbody tr:nth-of-type(odd) {
        background-color: #f9f9f9;
    }
    tbody tr:nth-of-type(even) {
        background-color: #e9e9e9;
    }
    /* v.css or in a <style> block within your Twig template */
.btn-add-user {
    padding: 0.5rem 1rem;
    background: linear-gradient(45deg, #4CAF50, #8BC34A);
    border: none;
    color: white;
    text-transform: uppercase;
    font-weight: bold;
    border-radius: 30px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    text-decoration: none;
}

.btn-add-user:hover, .btn-add-user:focus {
    background: linear-gradient(45deg, #8BC34A, #4CAF50);
    box-shadow: 0 6px 8px rgba(0,0,0,0.15);
    transform: translateY(-2px);
}

</style>

<div class=\"container\">
    <h1 class=\"my-4\">Liste des Employées</h1>
    
    <!-- Button to add a new user -->
    <a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_new");
        echo "\" class=\"btn btn-add-user mb-3\">Ajouter un Employée</a>
    

    <div class=\"table-responsive\">
        <table class=\"table table-hover\">
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Rôles</th>
                    <th>Adresse</th>
                    <th>Ville</th>
                    <th>Pays</th>
                    ";
        // line 69
        echo "                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Newsletter</th>
                    <th>Actions</th> <!-- New column for actions -->

                </tr>
            </thead>
            <tbody>
                ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 77, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 78
            echo "                    <tr>
                        <td>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 79), "html", null, true);
            echo "</td>
                        <td>";
            // line 80
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 80), ", "), "html", null, true);
            echo "</td>
                        <td>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "address", [], "any", false, false, false, 81), "html", null, true);
            echo "</td>
                        <td>";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "city", [], "any", false, false, false, 82), "html", null, true);
            echo "</td>
                        <td>";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "country", [], "any", false, false, false, 83), "html", null, true);
            echo "</td>
                        ";
            // line 85
            echo "                        <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 85), "html", null, true);
            echo "</td>
                        <td>";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "surname", [], "any", false, false, false, 86), "html", null, true);
            echo "</td>
                        <td>";
            // line 87
            echo ((twig_get_attribute($this->env, $this->source, $context["user"], "newsletter", [], "any", false, false, false, 87)) ? ("Oui") : ("Non"));
            echo "</td>
                        <td>
                        <a href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 89)]), "html", null, true);
            echo "\" class=\"btn btn-sm\" style=\"background-color: #007bff; color: white; border-color: #007bff;\">Modifier</a>

                        <form action=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 91)]), "html", null, true);
            echo "\" method=\"post\" onsubmit=\"return confirm('Are you sure you want to delete this user?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 92))), "html", null, true);
            echo "\">
                            <button type=\"submit\" class=\"btn btn-sm\" style=\"background-color: #dc3545; color: white; border-color: #dc3545;\">Supprimer</button>
                        </form>

                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "            </tbody>
        </table>
    </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "employe/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 99,  239 => 92,  235 => 91,  230 => 89,  225 => 87,  221 => 86,  216 => 85,  212 => 83,  208 => 82,  204 => 81,  200 => 80,  196 => 79,  193 => 78,  189 => 77,  179 => 69,  164 => 56,  117 => 11,  107 => 10,  95 => 7,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Users{% endblock %}
{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"{{ asset('v.css') }}\">
{% endblock %}

{% block body %}
<style>
    .table-responsive {
        margin: 20px 0;
    }
    .table-hover tbody tr:hover td, .table-hover tbody tr:hover th {
        background-color: #f5f5f5;
    }
    /* Custom table headers */
    thead th {
        background-color: #4CAF50;
        color: white;
    }
    /* Zebra striping for table */
    tbody tr:nth-of-type(odd) {
        background-color: #f9f9f9;
    }
    tbody tr:nth-of-type(even) {
        background-color: #e9e9e9;
    }
    /* v.css or in a <style> block within your Twig template */
.btn-add-user {
    padding: 0.5rem 1rem;
    background: linear-gradient(45deg, #4CAF50, #8BC34A);
    border: none;
    color: white;
    text-transform: uppercase;
    font-weight: bold;
    border-radius: 30px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    text-decoration: none;
}

.btn-add-user:hover, .btn-add-user:focus {
    background: linear-gradient(45deg, #8BC34A, #4CAF50);
    box-shadow: 0 6px 8px rgba(0,0,0,0.15);
    transform: translateY(-2px);
}

</style>

<div class=\"container\">
    <h1 class=\"my-4\">Liste des Employées</h1>
    
    <!-- Button to add a new user -->
    <a href=\"{{ path('admin_user_new') }}\" class=\"btn btn-add-user mb-3\">Ajouter un Employée</a>
    

    <div class=\"table-responsive\">
        <table class=\"table table-hover\">
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Rôles</th>
                    <th>Adresse</th>
                    <th>Ville</th>
                    <th>Pays</th>
                    {# <th>À propos</th> #}
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Newsletter</th>
                    <th>Actions</th> <!-- New column for actions -->

                </tr>
            </thead>
            <tbody>
                {% for user in users %}
                    <tr>
                        <td>{{ user.email }}</td>
                        <td>{{ user.roles | join(', ') }}</td>
                        <td>{{ user.address }}</td>
                        <td>{{ user.city }}</td>
                        <td>{{ user.country }}</td>
                        {# <td>{{ user.about_Us }}</td> #}
                        <td>{{ user.name }}</td>
                        <td>{{ user.surname }}</td>
                        <td>{{ user.newsletter ? 'Oui' : 'Non' }}</td>
                        <td>
                        <a href=\"{{ path('admin_user_edit', {'id': user.id}) }}\" class=\"btn btn-sm\" style=\"background-color: #007bff; color: white; border-color: #007bff;\">Modifier</a>

                        <form action=\"{{ path('admin_user_delete', {'id': user.id}) }}\" method=\"post\" onsubmit=\"return confirm('Are you sure you want to delete this user?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ user.id) }}\">
                            <button type=\"submit\" class=\"btn btn-sm\" style=\"background-color: #dc3545; color: white; border-color: #dc3545;\">Supprimer</button>
                        </form>

                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
</div>

{% endblock %}", "employe/list.html.twig", "C:\\Users\\ASUS ROG STRIX\\Desktop\\bac+5\\apprendre\\Nouveau dossier\\Tiptop101123\\Tiptop\\Tiptop\\templates\\employe\\list.html.twig");
    }
}
