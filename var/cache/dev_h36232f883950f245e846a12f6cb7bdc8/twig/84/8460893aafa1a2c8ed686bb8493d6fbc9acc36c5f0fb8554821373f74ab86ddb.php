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

/* @Storefront/storefront/layout/navigation/offcanvas/back-link.html.twig */
class __TwigTemplate_7907010ebbe4d4ea5cb5b73a6875a7756a7a0cb3e5c77574392352fc8c0883b9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_navigation_offcanvas_navigation_category_back_link_text' => [$this, 'block_layout_navigation_offcanvas_navigation_category_back_link_text'],
            'layout_utilities_offcanvas_close_icon' => [$this, 'block_layout_utilities_offcanvas_close_icon'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/navigation/offcanvas/back-link.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/navigation/offcanvas/back-link.html.twig"));

        // line 1
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "parentId", [], "any", false, false, false, 1), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 1), "navigationCategoryId", [], "any", false, false, false, 1)))) {
            // line 2
            echo "    ";
            $context["url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.menu.offcanvas");
        } else {
            // line 4
            echo "    ";
            $context["url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.menu.offcanvas", ["navigationId" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "parentId", [], "any", false, false, false, 4)]);
        }
        // line 6
        echo "
<a class=\"nav-item nav-link is-back-link navigation-offcanvas-link js-navigation-offcanvas-link\"
   href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "\"
   itemprop=\"url\"
   title=\"";
        // line 10
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.back")), "html", null, true);
        echo "\">
    ";
        // line 11
        $this->displayBlock('layout_navigation_offcanvas_navigation_category_back_link_text', $context, $blocks);
        // line 22
        echo "</a>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_layout_navigation_offcanvas_navigation_category_back_link_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_offcanvas_navigation_category_back_link_text"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_offcanvas_navigation_category_back_link_text"));

        // line 12
        echo "        <span class=\"navigation-offcanvas-link-icon js-navigation-offcanvas-loading-icon\">
            ";
        // line 13
        $this->displayBlock('layout_utilities_offcanvas_close_icon', $context, $blocks);
        // line 16
        echo "        </span>

        <span itemprop=\"name\">
            ";
        // line 19
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.back"));
        echo "
        </span>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_layout_utilities_offcanvas_close_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_utilities_offcanvas_close_icon"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_utilities_offcanvas_close_icon"));

        // line 14
        echo "                ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/navigation/offcanvas/back-link.html.twig", 14);
        })())->display(twig_array_merge($context, ["pack" => "solid", "size" => "sm", "name" => "arrow-medium-left"]));
        // line 15
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/navigation/offcanvas/back-link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 15,  124 => 14,  114 => 13,  101 => 19,  96 => 16,  94 => 13,  91 => 12,  81 => 11,  70 => 22,  68 => 11,  64 => 10,  59 => 8,  55 => 6,  51 => 4,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if item.parentId == context.salesChannel.navigationCategoryId %}
    {% set url = path('frontend.menu.offcanvas') %}
{% else %}
    {% set url = path('frontend.menu.offcanvas', { 'navigationId': item.parentId }) %}
{% endif %}

<a class=\"nav-item nav-link is-back-link navigation-offcanvas-link js-navigation-offcanvas-link\"
   href=\"{{ url }}\"
   itemprop=\"url\"
   title=\"{{ \"general.back\"|trans|striptags }}\">
    {% block layout_navigation_offcanvas_navigation_category_back_link_text %}
        <span class=\"navigation-offcanvas-link-icon js-navigation-offcanvas-loading-icon\">
            {% block layout_utilities_offcanvas_close_icon %}
                {% sw_icon 'arrow-medium-left' style { 'pack':'solid', 'size': 'sm' } %}
            {% endblock %}
        </span>

        <span itemprop=\"name\">
            {{ \"general.back\"|trans|sw_sanitize }}
        </span>
    {% endblock %}
</a>
", "@Storefront/storefront/layout/navigation/offcanvas/back-link.html.twig", "/var/www/stage.joes-toolbox.de/vendor/shopware/storefront/Resources/views/storefront/layout/navigation/offcanvas/back-link.html.twig");
    }
}
