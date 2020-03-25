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

/* product/edit.html.twig */
class __TwigTemplate_dae034b7bec1900bf1292519ffcc86ecba6be74794295fcd883e37e948752d23 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/edit.html.twig", 1);
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
        echo "    <h2>Edit product</h2>
    <form class=\"d-flex flex-column justify-content-center w-50 mx-auto mt-2 mb-5\" method=\"post\" action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products.update", ["idProduct" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 5, $this->source); })()), "getId", [], "any", false, false, false, 5)]), "html", null, true);
        echo "\">
        <div class=\"form-group\">
            <label for=\"Name\">Name</label>
            <input type=\"text\" class=\"form-control\" id=\"Name\" name=\"Name\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 8, $this->source); })()), "getName", [], "any", false, false, false, 8), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <label for=\"Price\">Price</label>
            <input type=\"text\" class=\"form-control\" id=\"Price\" name=\"Price\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 12, $this->source); })()), "getPrice", [], "any", false, false, false, 12), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <label for=\"Quantity\">Quantity</label>
            <input type=\"text\" class=\"form-control\" id=\"Quantity\" name=\"Quantity\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 16, $this->source); })()), "getQuantity", [], "any", false, false, false, 16), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <label for=\"Description\">Description</label>
            <textarea class=\"form-control\" id=\"Description\" name=\"Description\" rows=\"3\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 20, $this->source); })()), "getDescription", [], "any", false, false, false, 20), "html", null, true);
        echo "</textarea>
        </div>
        <button type=\"submit\" class=\"btn btn-success\">Edit</button>
    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "product/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 20,  82 => 16,  75 => 12,  68 => 8,  62 => 5,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block content %}
    <h2>Edit product</h2>
    <form class=\"d-flex flex-column justify-content-center w-50 mx-auto mt-2 mb-5\" method=\"post\" action=\"{{ path('products.update', {idProduct:product.getId}) }}\">
        <div class=\"form-group\">
            <label for=\"Name\">Name</label>
            <input type=\"text\" class=\"form-control\" id=\"Name\" name=\"Name\" value=\"{{ product.getName }}\">
        </div>
        <div class=\"form-group\">
            <label for=\"Price\">Price</label>
            <input type=\"text\" class=\"form-control\" id=\"Price\" name=\"Price\" value=\"{{product.getPrice}}\">
        </div>
        <div class=\"form-group\">
            <label for=\"Quantity\">Quantity</label>
            <input type=\"text\" class=\"form-control\" id=\"Quantity\" name=\"Quantity\" value=\"{{product.getQuantity}}\">
        </div>
        <div class=\"form-group\">
            <label for=\"Description\">Description</label>
            <textarea class=\"form-control\" id=\"Description\" name=\"Description\" rows=\"3\">{{ product.getDescription }}</textarea>
        </div>
        <button type=\"submit\" class=\"btn btn-success\">Edit</button>
    </form>
{% endblock %}", "product/edit.html.twig", "/home/wwwroot/sf4/templates/product/edit.html.twig");
    }
}
