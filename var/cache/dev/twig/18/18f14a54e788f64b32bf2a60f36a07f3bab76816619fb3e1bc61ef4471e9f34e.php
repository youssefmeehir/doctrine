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

/* pages/home.html.twig */
class __TwigTemplate_e8e97683e8d36e7143e2eb950015e1023d435b86b1730dce335021822f353e87 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/home.html.twig", 1);
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
    <div class=\"container marketing\">

        <!-- Three columns of text below the carousel -->
        <div class=\"row\">
            <h2 class=\"col-lg-12\">Our last products</h2>
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 11
            echo "                <div class=\"col-lg-4 p-auto\">
                    <img class=\"rounded-circle mx-auto d-block\" src=\"";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getImageUrl", [], "any", false, false, false, 12), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getName", [], "any", false, false, false, 12), "html", null, true);
            echo "\" width=\"140\" height=\"140\">
                    <h4 class=\"text-center\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getName", [], "any", false, false, false, 13), "html", null, true);
            echo "<small>(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getPrice", [], "any", false, false, false, 13), "html", null, true);
            echo " DH)</small></h4>
                    <p class=\"text-center\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getDescription", [], "any", false, false, false, 14), "html", null, true);
            echo "</p>
";
            // line 16
            echo "                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "            <!-- /.col-lg-4 -->

        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

";
        // line 26
        echo "
";
        // line 36
        echo "
";
        // line 38
        echo "
";
        // line 48
        echo "
";
        // line 50
        echo "
";
        // line 60
        echo "
";
        // line 62
        echo "
        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pages/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 62,  121 => 60,  118 => 50,  115 => 48,  112 => 38,  109 => 36,  106 => 26,  97 => 18,  90 => 16,  86 => 14,  80 => 13,  74 => 12,  71 => 11,  67 => 10,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block content %}

    <div class=\"container marketing\">

        <!-- Three columns of text below the carousel -->
        <div class=\"row\">
            <h2 class=\"col-lg-12\">Our last products</h2>
            {% for product in products %}
                <div class=\"col-lg-4 p-auto\">
                    <img class=\"rounded-circle mx-auto d-block\" src=\"{{ product.getImageUrl }}\" alt=\"{{ product.getName }}\" width=\"140\" height=\"140\">
                    <h4 class=\"text-center\">{{ product.getName }}<small>({{ product.getPrice }} DH)</small></h4>
                    <p class=\"text-center\">{{ product.getDescription }}</p>
{#                    <p><a class=\"btn btn-secondary\" href=\"#\" role=\"button\">View details &raquo;</a></p>#}
                </div>
            {% endfor %}
            <!-- /.col-lg-4 -->

        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

{#        <hr class=\"featurette-divider\">#}

{#        <div class=\"row featurette\">#}
{#            <div class=\"col-md-7\">#}
{#                <h2 class=\"featurette-heading\">First featurette heading. <span class=\"text-muted\">It'll blow your mind.</span></h2>#}
{#                <p class=\"lead\">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>#}
{#            </div>#}
{#            <div class=\"col-md-5\">#}
{#                <img class=\"featurette-image img-fluid mx-auto\" data-src=\"holder.js/500x500/auto\" alt=\"Generic placeholder image\">#}
{#            </div>#}
{#        </div>#}

{#        <hr class=\"featurette-divider\">#}

{#        <div class=\"row featurette\">#}
{#            <div class=\"col-md-7 order-md-2\">#}
{#                <h2 class=\"featurette-heading\">Oh yeah, it's that good. <span class=\"text-muted\">See for yourself.</span></h2>#}
{#                <p class=\"lead\">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>#}
{#            </div>#}
{#            <div class=\"col-md-5 order-md-1\">#}
{#                <img class=\"featurette-image img-fluid mx-auto\" data-src=\"holder.js/500x500/auto\" alt=\"Generic placeholder image\">#}
{#            </div>#}
{#        </div>#}

{#        <hr class=\"featurette-divider\">#}

{#        <div class=\"row featurette\">#}
{#            <div class=\"col-md-7\">#}
{#                <h2 class=\"featurette-heading\">And lastly, this one. <span class=\"text-muted\">Checkmate.</span></h2>#}
{#                <p class=\"lead\">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>#}
{#            </div>#}
{#            <div class=\"col-md-5\">#}
{#                <img class=\"featurette-image img-fluid mx-auto\" data-src=\"holder.js/500x500/auto\" alt=\"Generic placeholder image\">#}
{#            </div>#}
{#        </div>#}

{#        <hr class=\"featurette-divider\">#}

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->


{% endblock %}", "pages/home.html.twig", "/home/wwwroot/sf4/templates/pages/home.html.twig");
    }
}
