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

/* product/index.html.twig */
class __TwigTemplate_2964e0da192ea635253717bffd10bddec60703df1bd2f4870f17262a81b97e8f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "flashes", [], "any", false, false, false, 5));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 6
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 7
                echo "            <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo " alert-dismissible fade show\" role=\"alert\">
                ";
                // line 8
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    <h2>Products list</h2>
    <div class=\"m-3\">
        <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products.add");
        echo "\" class=\"btn btn-success\"><i class=\"fas fa-plus\"></i> Add product</a>
    </div>
    <table class=\"table\">
        <thead class=\"thead-dark\">
            <tr>
                <th>Id</th>
                <th>image</th>
                <th>Name</th>
                <th>price</th>
                <th>quantity</th>
                <th>Category</th>
                <th>description</th>
                <th>create at</th>
                <th>Add to basket</th>
                <th>Actions</th>
            </tr>
        </thead>

        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 36
            echo "            <tr>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                <td><img width=\"100\" src=\"";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getImageUrl", [], "any", false, false, false, 38), "html", null, true);
            echo " \" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getName", [], "any", false, false, false, 38), "html", null, true);
            echo "\" > </td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getName", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\PriceExtension']->formatPrice(twig_get_attribute($this->env, $this->source, $context["product"], "getPrice", [], "any", false, false, false, 40)), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getQuantity", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getCategory", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getDescription", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getCreatedAt", [], "any", false, false, false, 44), "Y-m-d"), "html", null, true);
            echo "</td>
                <td>
                    <form action=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order.tobasket", ["idProduct" => twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\" method=\"post\">
                        <input type=\"number\" name=\"commandQuantity\" min=\"1\" value=\"1\" style=\"width: 25%\" class=\"m-1\">
                        <button type=\"submit\" class=\"btn btn-default border border-dark m-1\">Add</button>
                    </form>
                </td>
                <td>
                    <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products.show", ["idProduct" => twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i class=\"fas fa-clipboard-list\"></i>Details</a>
                    <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products.edit", ["idProduct" => twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\" class=\"btn btn-warning\"><i class=\"fas fa-pen\"></i>Edit</a>
                    <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products.delete", ["idProduct" => twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\" class=\"btn btn-danger\"><i class=\"fas fa-times\"></i>Delete</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 58,  178 => 54,  174 => 53,  170 => 52,  161 => 46,  156 => 44,  152 => 43,  148 => 42,  144 => 41,  140 => 40,  136 => 39,  130 => 38,  126 => 37,  123 => 36,  119 => 35,  98 => 17,  94 => 15,  88 => 14,  76 => 8,  71 => 7,  66 => 6,  62 => 5,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block content %}

    {% for label, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"alert alert-{{ label }} alert-dismissible fade show\" role=\"alert\">
                {{ message }}
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
        {% endfor %}
    {% endfor %}
    <h2>Products list</h2>
    <div class=\"m-3\">
        <a href=\"{{ path('products.add') }}\" class=\"btn btn-success\"><i class=\"fas fa-plus\"></i> Add product</a>
    </div>
    <table class=\"table\">
        <thead class=\"thead-dark\">
            <tr>
                <th>Id</th>
                <th>image</th>
                <th>Name</th>
                <th>price</th>
                <th>quantity</th>
                <th>Category</th>
                <th>description</th>
                <th>create at</th>
                <th>Add to basket</th>
                <th>Actions</th>
            </tr>
        </thead>

        {% for product in products %}
            <tr>
                <td>{{ product.getId }}</td>
                <td><img width=\"100\" src=\"{{ product.getImageUrl }} \" alt=\"{{ product.getName }}\" > </td>
                <td>{{ product.getName }}</td>
                <td>{{ product.getPrice| price }}</td>
                <td>{{ product.getQuantity }}</td>
                <td>{{ product.getCategory }}</td>
                <td>{{ product.getDescription }}</td>
                <td>{{ product.getCreatedAt|date('Y-m-d') }}</td>
                <td>
                    <form action=\"{{ path('order.tobasket', {idProduct: product.getId }) }}\" method=\"post\">
                        <input type=\"number\" name=\"commandQuantity\" min=\"1\" value=\"1\" style=\"width: 25%\" class=\"m-1\">
                        <button type=\"submit\" class=\"btn btn-default border border-dark m-1\">Add</button>
                    </form>
                </td>
                <td>
                    <a href=\"{{ path('products.show', {idProduct: product.getId }) }}\" class=\"btn btn-primary\"><i class=\"fas fa-clipboard-list\"></i>Details</a>
                    <a href=\"{{ path('products.edit', {idProduct: product.getId }) }}\" class=\"btn btn-warning\"><i class=\"fas fa-pen\"></i>Edit</a>
                    <a href=\"{{ path('products.delete', {idProduct: product.getId }) }}\" class=\"btn btn-danger\"><i class=\"fas fa-times\"></i>Delete</a>
                </td>
            </tr>
        {% endfor %}
    </table>
{% endblock %}", "product/index.html.twig", "/home/wwwroot/sf4/templates/product/index.html.twig");
    }
}
