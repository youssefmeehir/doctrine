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

/* product/show.html.twig */
class __TwigTemplate_d9f5b883aa8d06669bffe1fa3b60fa8999af80044c19f9be4bc55a53031fa248 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/show.html.twig", 1);
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
        echo "    <h2>Show product</h2>
    <div class=\"d-flex justify-content-around m-5\">
        <table>
            <tr>
                <th>Name</th>
                <td>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 9, $this->source); })()), "getName", [], "any", false, false, false, 9), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 13, $this->source); })()), "getDescription", [], "any", false, false, false, 13), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Quantity</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 17, $this->source); })()), "getQuantity", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\PriceExtension']->formatPrice(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 21, $this->source); })()), "getPrice", [], "any", false, false, false, 21)), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Created at</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 25, $this->source); })()), "getCreatedAt", [], "any", false, false, false, 25), "Y-m-d"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td colspan=\"2\"><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products.edit", ["idProduct" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 28, $this->source); })()), "getId", [], "any", false, false, false, 28)]), "html", null, true);
        echo "\" class=\"btn btn-warning\"><i class=\"fas fa-pen\"></i>Edit</a></td>
            </tr>
        </table>
        <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 31, $this->source); })()), "getImageUrl", [], "any", false, false, false, 31), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 31, $this->source); })()), "getName", [], "any", false, false, false, 31), "html", null, true);
        echo "\" class=\"img-thumbnail\" width=\"200\">
    </div>

    <h2>Orders related to this product</h2>
    <table class=\"table\">
        <thead  class=\"thead-dark\">
            <tr>
                <th>Command Id</th>
                <th>Product</th>
                <th>Unit price</th>
                <th>Quantity</th>
            </tr>
        </thead>
        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orderDetails"]) || array_key_exists("orderDetails", $context) ? $context["orderDetails"] : (function () { throw new RuntimeError('Variable "orderDetails" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["orderDetail"]) {
            // line 45
            echo "            <tr>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderDetail"], "getOrderProduct", [], "any", false, false, false, 46), "getId", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderDetail"], "getProduct", [], "any", false, false, false, 47), "getName", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\PriceExtension']->formatPrice(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderDetail"], "getProduct", [], "any", false, false, false, 48), "getPrice", [], "any", false, false, false, 48)), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderDetail"], "quantity", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderDetail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "

    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "product/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 52,  143 => 49,  139 => 48,  135 => 47,  131 => 46,  128 => 45,  124 => 44,  106 => 31,  100 => 28,  94 => 25,  87 => 21,  80 => 17,  73 => 13,  66 => 9,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block content %}
    <h2>Show product</h2>
    <div class=\"d-flex justify-content-around m-5\">
        <table>
            <tr>
                <th>Name</th>
                <td>{{ product.getName }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ product.getDescription }}</td>
            </tr>
            <tr>
                <th>Quantity</th>
                <td>{{ product.getQuantity }}</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>{{ product.getPrice| price }}</td>
            </tr>
            <tr>
                <th>Created at</th>
                <td>{{ product.getCreatedAt|date('Y-m-d')  }}</td>
            </tr>
            <tr>
                <td colspan=\"2\"><a href=\"{{ path('products.edit', {idProduct: product.getId }) }}\" class=\"btn btn-warning\"><i class=\"fas fa-pen\"></i>Edit</a></td>
            </tr>
        </table>
        <img src=\"{{ product.getImageUrl }}\" alt=\"{{ product.getName }}\" class=\"img-thumbnail\" width=\"200\">
    </div>

    <h2>Orders related to this product</h2>
    <table class=\"table\">
        <thead  class=\"thead-dark\">
            <tr>
                <th>Command Id</th>
                <th>Product</th>
                <th>Unit price</th>
                <th>Quantity</th>
            </tr>
        </thead>
        {% for orderDetail in orderDetails %}
            <tr>
                <td>{{ orderDetail.getOrderProduct.getId }}</td>
                <td>{{ orderDetail.getProduct.getName }}</td>
                <td>{{ orderDetail.getProduct.getPrice| price }}</td>
                <td>{{ orderDetail.quantity }}</td>
            </tr>
        {% endfor %}


    </table>
{% endblock %}", "product/show.html.twig", "/home/wwwroot/sf4/templates/product/show.html.twig");
    }
}
