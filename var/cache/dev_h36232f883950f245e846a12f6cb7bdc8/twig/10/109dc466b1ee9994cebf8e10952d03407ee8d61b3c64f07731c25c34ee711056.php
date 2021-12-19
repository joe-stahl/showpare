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

/* @Storefront/storefront/component/analytics.html.twig */
class __TwigTemplate_fe5da33c185cd5807418b4ec9ee80e291b03396853b5293ee836745346654ba7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_head_analytics' => [$this, 'block_component_head_analytics'],
            'component_head_analytics_tag_config' => [$this, 'block_component_head_analytics_tag_config'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/analytics.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/analytics.html.twig"));

        // line 1
        $this->displayBlock('component_head_analytics', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_component_head_analytics($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_head_analytics"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_head_analytics"));

        // line 2
        echo "    ";
        $context["googleAnalyticsIsAllowed"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 2), "cookies", [], "any", false, false, false, 2), "get", [0 => "google-analytics-enabled"], "method", false, false, false, 2) === "1");
        // line 3
        echo "
    ";
        // line 4
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 4), "analytics", [], "any", false, false, false, 4) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 4), "analytics", [], "any", false, false, false, 4), "isActive", [], "method", false, false, false, 4)) && ($context["googleAnalyticsIsAllowed"] ?? null))) {
            // line 5
            echo "        ";
            $context["trackingId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 5), "analytics", [], "any", false, false, false, 5), "getTrackingId", [], "method", false, false, false, 5);
            // line 6
            echo "        <script async src=\"https://www.googletagmanager.com/gtag/js?id=";
            echo twig_escape_filter($this->env, ($context["trackingId"] ?? null), "html", null, true);
            echo "\"></script>
        <script>
            window.gtagActive = true;
            window.controllerName = '";
            // line 9
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["controllerName"] ?? null)), "html", null, true);
            echo "';
            window.actionName = '";
            // line 10
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["controllerAction"] ?? null)), "html", null, true);
            echo "';
            window.dataLayer = window.dataLayer || [];
            window.trackOrders = '";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 12), "analytics", [], "any", false, false, false, 12), "isTrackOrders", [], "method", false, false, false, 12), "html", null, true);
            echo "';

            function gtag() { dataLayer.push(arguments); }

            ";
            // line 16
            $this->displayBlock('component_head_analytics_tag_config', $context, $blocks);
            // line 27
            echo "        </script>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_component_head_analytics_tag_config($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_head_analytics_tag_config"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_head_analytics_tag_config"));

        // line 17
        echo "                window.gtagCallback = function gtagCallbackFunction() {
                    gtag('js', new Date());

                    gtag('config', '";
        // line 20
        echo twig_escape_filter($this->env, ($context["trackingId"] ?? null), "html", null, true);
        echo "', {
                        'anonymize_ip': '";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 21), "analytics", [], "any", false, false, false, 21), "isAnonymizeIp", [], "method", false, false, false, 21), "html", null, true);
        echo "',
                        'cookie_domain': 'none',
                        'cookie_prefix': '_swag_ga',
                    });
                };
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/analytics.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  131 => 21,  127 => 20,  122 => 17,  112 => 16,  100 => 27,  98 => 16,  91 => 12,  86 => 10,  82 => 9,  75 => 6,  72 => 5,  70 => 4,  67 => 3,  64 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block component_head_analytics %}
    {% set googleAnalyticsIsAllowed = (app.request.cookies.get('google-analytics-enabled') is same as ('1')) %}

    {% if context.salesChannel.analytics and context.salesChannel.analytics.isActive() and googleAnalyticsIsAllowed %}
        {% set trackingId = context.salesChannel.analytics.getTrackingId() %}
        <script async src=\"https://www.googletagmanager.com/gtag/js?id={{ trackingId }}\"></script>
        <script>
            window.gtagActive = true;
            window.controllerName = '{{ controllerName|lower }}';
            window.actionName = '{{ controllerAction|lower }}';
            window.dataLayer = window.dataLayer || [];
            window.trackOrders = '{{ context.salesChannel.analytics.isTrackOrders() }}';

            function gtag() { dataLayer.push(arguments); }

            {% block component_head_analytics_tag_config %}
                window.gtagCallback = function gtagCallbackFunction() {
                    gtag('js', new Date());

                    gtag('config', '{{ trackingId }}', {
                        'anonymize_ip': '{{ context.salesChannel.analytics.isAnonymizeIp() }}',
                        'cookie_domain': 'none',
                        'cookie_prefix': '_swag_ga',
                    });
                };
            {% endblock %}
        </script>
    {% endif %}
{% endblock %}
", "@Storefront/storefront/component/analytics.html.twig", "/var/www/stage.joes-toolbox.de/vendor/shopware/storefront/Resources/views/storefront/component/analytics.html.twig");
    }
}
