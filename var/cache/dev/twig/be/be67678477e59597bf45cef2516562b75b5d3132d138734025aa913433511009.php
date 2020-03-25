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

/* order/index.html.twig */
class __TwigTemplate_981745323e49c4ef78aab7b87526938591822576c1251367d0e27d081bb8ffc8 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/index.html.twig"));

        // line 2
        $context["basket"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "session", [], "any", false, false, false, 2), "get", [0 => "basket"], "method", false, false, false, 2);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "order/index.html.twig", 1);
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
        echo "    <h2>Basket</h2>
    <table class=\"table\">
        <thead class=\"thead-dark\">
        <tr>
            <th>Id</th>
            <th>image</th>
            <th>Name</th>
            <th>price</th>
            <th>quantity</th>
            <th>Actions</th>
        </tr>
        </thead>
        ";
        // line 27
        if (1 === twig_compare((isset($context["basket"]) || array_key_exists("basket", $context) ? $context["basket"] : (function () { throw new RuntimeError('Variable "basket" does not exist.', 27, $this->source); })()), 0)) {
            // line 28
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["basket"]) || array_key_exists("basket", $context) ? $context["basket"] : (function () { throw new RuntimeError('Variable "basket" does not exist.', 28, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 29
                echo "                <tr>
                    <td>";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 30), "getId", [], "any", false, false, false, 30), "html", null, true);
                echo "</td>
                    <td><img width=\"100\" src=\"";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 31), "getImageUrl", [], "any", false, false, false, 31), "html", null, true);
                echo " \" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 31), "getName", [], "any", false, false, false, 31), "html", null, true);
                echo "\" > </td>
                    <td>";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 32), "getName", [], "any", false, false, false, 32), "html", null, true);
                echo "</td>
                    <td>";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\PriceExtension']->formatPrice(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 33), "getPrice", [], "any", false, false, false, 33)), "html", null, true);
                echo "</td>
                    <td>";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 34), "html", null, true);
                echo "</td>
                    <td>
                        <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order.delete", ["idProduct" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 36), "getId", [], "any", false, false, false, 36)]), "html", null, true);
                echo "\" class=\"btn btn-danger\"><i class=\"fas fa-clipboard-list\"></i>Delete</a>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "        ";
        } else {
            // line 41
            echo "            <tr>
                <td colspan=\"6\" class=\"text-center\"> Your basket is empty</td>
            </tr>
        ";
        }
        // line 45
        echo "        <tr>
            <td colspan=\"6\">
                <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order.index");
        echo "\" class=\"btn btn-success\">Submit basket</a>
            </td>
        </tr>
    </table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "order/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 47,  163 => 45,  157 => 41,  154 => 40,  144 => 36,  139 => 34,  135 => 33,  131 => 32,  125 => 31,  121 => 30,  118 => 29,  113 => 28,  111 => 27,  97 => 15,  91 => 14,  79 => 8,  74 => 7,  69 => 6,  65 => 5,  62 => 4,  55 => 3,  47 => 1,  45 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% set basket = app.session.get('basket') %}
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
    <h2>Basket</h2>
    <table class=\"table\">
        <thead class=\"thead-dark\">
        <tr>
            <th>Id</th>
            <th>image</th>
            <th>Name</th>
            <th>price</th>
            <th>quantity</th>
            <th>Actions</th>
        </tr>
        </thead>
        {% if basket > 0 %}
            {% for product in basket %}
                <tr>
                    <td>{{ product.product.getId }}</td>
                    <td><img width=\"100\" src=\"{{ product.product.getImageUrl }} \" alt=\"{{ product.product.getName }}\" > </td>
                    <td>{{ product.product.getName }}</td>
                    <td>{{ product.product.getPrice| price }}</td>
                    <td>{{ product.quantity }}</td>
                    <td>
                        <a href=\"{{ path('order.delete', {idProduct: product.product.getId }) }}\" class=\"btn btn-danger\"><i class=\"fas fa-clipboard-list\"></i>Delete</a>
                    </td>
                </tr>
            {% endfor %}
        {% else %}
            <tr>
                <td colspan=\"6\" class=\"text-center\"> Your basket is empty</td>
            </tr>
        {% endif %}
        <tr>
            <td colspan=\"6\">
                <a href=\"{{ path('order.index') }}\" class=\"btn btn-success\">Submit basket</a>
            </td>
        </tr>
    </table>

{% endblock %}", "order/index.html.twig", "/home/wwwroot/sf4/templates/order/index.html.twig");
    }
}
