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

/* admin/list.html.twig */
class __TwigTemplate_5e55dfb48d4148dae1c5276b02678362 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/list.html.twig", 1);
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
        margin: 20px auto;
        width: 80%; /* Adjust the width as necessary */
    }
    .table-hover tbody tr:hover td, .table-hover tbody tr:hover th {
        background-color: #f5f5f5;
    }
    thead th {
        background-color: #4CAF50;
        color: white;
    }
    tbody tr:nth-of-type(odd) {
        background-color: #f9f9f9;
    }
    tbody tr:nth-of-type(even) {
        background-color: #e9e9e9;
    }
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
        display: inline-block; /* This will help center the button */
        margin-bottom: 20px;
    }
    .btn-add-user:hover, .btn-add-user:focus {
        background: linear-gradient(45deg, #8BC34A, #4CAF50);
        box-shadow: 0 6px 8px rgba(0,0,0,0.15);
        transform: translateY(-2px);
        text-decoration: none;
    }
</style>

<div class=\"container\">
    <h1 class=\"my-4 text-center\">Liste des utilisateurs</h1>
    
    <div class=\"text-center\">
        <a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_new");
        echo "\" class=\"btn btn-add-user\">Ajouter un utilisateur</a>
    </div>

    <div class=\"table-responsive\">
        <table class=\"table table-hover\">
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Rôles</th>
                    <th>Adresse</th>
                    <th>Ville</th>
                    <th>Pays</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Newsletter</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 74, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 75
            echo "                    <tr>
                        <td>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 76), "html", null, true);
            echo "</td>
                        <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 77), ", "), "html", null, true);
            echo "</td>
                        <td>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "address", [], "any", false, false, false, 78), "html", null, true);
            echo "</td>
                        <td>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "city", [], "any", false, false, false, 79), "html", null, true);
            echo "</td>
                        <td>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "country", [], "any", false, false, false, 80), "html", null, true);
            echo "</td>
                        <td>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 81), "html", null, true);
            echo "</td>
                        <td>";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "surname", [], "any", false, false, false, 82), "html", null, true);
            echo "</td>
                        <td>";
            // line 83
            echo ((twig_get_attribute($this->env, $this->source, $context["user"], "newsletter", [], "any", false, false, false, 83)) ? ("Oui") : ("Non"));
            echo "</td>
                        <td>
                            <a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 85)]), "html", null, true);
            echo "\" class=\"btn btn-sm\" style=\"background-color: #007bff; color: white; border-color: #007bff;\">Modifier</a>
                            <form action=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 86)]), "html", null, true);
            echo "\" method=\"post\" onsubmit=\"return confirm('Are you sure you want to delete this user?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 87))), "html", null, true);
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
        // line 93
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
        return "admin/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 93,  233 => 87,  229 => 86,  225 => 85,  220 => 83,  216 => 82,  212 => 81,  208 => 80,  204 => 79,  200 => 78,  196 => 77,  192 => 76,  189 => 75,  185 => 74,  163 => 55,  117 => 11,  107 => 10,  95 => 7,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
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
        margin: 20px auto;
        width: 80%; /* Adjust the width as necessary */
    }
    .table-hover tbody tr:hover td, .table-hover tbody tr:hover th {
        background-color: #f5f5f5;
    }
    thead th {
        background-color: #4CAF50;
        color: white;
    }
    tbody tr:nth-of-type(odd) {
        background-color: #f9f9f9;
    }
    tbody tr:nth-of-type(even) {
        background-color: #e9e9e9;
    }
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
        display: inline-block; /* This will help center the button */
        margin-bottom: 20px;
    }
    .btn-add-user:hover, .btn-add-user:focus {
        background: linear-gradient(45deg, #8BC34A, #4CAF50);
        box-shadow: 0 6px 8px rgba(0,0,0,0.15);
        transform: translateY(-2px);
        text-decoration: none;
    }
</style>

<div class=\"container\">
    <h1 class=\"my-4 text-center\">Liste des utilisateurs</h1>
    
    <div class=\"text-center\">
        <a href=\"{{ path('admin_user_new') }}\" class=\"btn btn-add-user\">Ajouter un utilisateur</a>
    </div>

    <div class=\"table-responsive\">
        <table class=\"table table-hover\">
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Rôles</th>
                    <th>Adresse</th>
                    <th>Ville</th>
                    <th>Pays</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Newsletter</th>
                    <th>Actions</th>
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

{% endblock %}
", "admin/list.html.twig", "C:\\Users\\ASUS ROG STRIX\\Desktop\\bac+5\\apprendre\\Nouveau dossier\\Tiptop101123\\Tiptop\\Tiptop\\templates\\admin\\list.html.twig");
    }
}
