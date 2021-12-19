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

/* @Storefront/storefront/component/delivery-information.html.twig */
class __TwigTemplate_35444b3e851c4ea592aa39f3fe0415b81f5c05270a561f6d469135cfd0ad404f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_delivery_information' => [$this, 'block_component_delivery_information'],
            'component_delivery_information_shipping_free' => [$this, 'block_component_delivery_information_shipping_free'],
            'component_delivery_information_not_available' => [$this, 'block_component_delivery_information_not_available'],
            'component_delivery_information_pre_order' => [$this, 'block_component_delivery_information_pre_order'],
            'component_delivery_information_available' => [$this, 'block_component_delivery_information_available'],
            'component_delivery_information_soldout' => [$this, 'block_component_delivery_information_soldout'],
            'component_delivery_information_restock' => [$this, 'block_component_delivery_information_restock'],
            'component_delivery_information_default' => [$this, 'block_component_delivery_information_default'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/delivery-information.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/delivery-information.html.twig"));

        // line 1
        $this->displayBlock('component_delivery_information', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_component_delivery_information($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_delivery_information"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_delivery_information"));

        // line 2
        echo "    ";
        // line 3
        echo "    ";
        if ((array_key_exists("page", $context) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", true, true, false, 3))) {
            // line 4
            echo "        ";
            $context["product"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 4);
            // line 5
            echo "    ";
        }
        // line 6
        echo "
    <div class=\"product-delivery-information\">
        ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "shippingFree", [], "any", false, false, false, 8)) {
            // line 9
            echo "            ";
            $this->displayBlock('component_delivery_information_shipping_free', $context, $blocks);
            // line 15
            echo "        ";
        }
        // line 16
        echo "
        ";
        // line 17
        if ( !twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "active", [], "any", false, false, false, 17)) {
            // line 18
            echo "            ";
            $this->displayBlock('component_delivery_information_not_available', $context, $blocks);
            // line 26
            echo "        ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "releaseDate", [], "any", false, false, false, 26) && (1 === twig_compare(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "releaseDate", [], "any", false, false, false, 26), "U"), twig_date_format_filter($this->env, "now", "U"))))) {
            // line 27
            echo "            ";
            $this->displayBlock('component_delivery_information_pre_order', $context, $blocks);
            // line 35
            echo "        ";
        } elseif (((0 <= twig_compare(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "availableStock", [], "any", false, false, false, 35), twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "minPurchase", [], "any", false, false, false, 35))) && twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "deliveryTime", [], "any", false, false, false, 35))) {
            // line 36
            echo "            ";
            $this->displayBlock('component_delivery_information_available', $context, $blocks);
            // line 46
            echo "        ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "isCloseout", [], "any", false, false, false, 46) && (-1 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "availableStock", [], "any", false, false, false, 46), twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "minPurchase", [], "any", false, false, false, 46))))) {
            // line 47
            echo "            ";
            $this->displayBlock('component_delivery_information_soldout', $context, $blocks);
            // line 54
            echo "        ";
        } elseif ((((-1 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "availableStock", [], "any", false, false, false, 54), twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "minPurchase", [], "any", false, false, false, 54))) && twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "deliveryTime", [], "any", false, false, false, 54)) && twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "restockTime", [], "any", false, false, false, 54))) {
            // line 55
            echo "            ";
            $this->displayBlock('component_delivery_information_restock', $context, $blocks);
            // line 66
            echo "        ";
        } else {
            // line 67
            echo "            ";
            $this->displayBlock('component_delivery_information_default', $context, $blocks);
            // line 68
            echo "        ";
        }
        // line 69
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_component_delivery_information_shipping_free($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_delivery_information_shipping_free"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_delivery_information_shipping_free"));

        // line 10
        echo "                <p class=\"delivery-information delivery-shipping-free\">
                    <span class=\"delivery-status-indicator bg-info\"></span>
                    ";
        // line 12
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.deliveryShippingFree"));
        echo "
                </p>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_component_delivery_information_not_available($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_delivery_information_not_available"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_delivery_information_not_available"));

        // line 19
        echo "                <link itemprop=\"availability\"
                      href=\"http://schema.org/LimitedAvailability\"/>
                <p class=\"delivery-information delivery-not-available\">
                    <span class=\"delivery-status-indicator bg-danger\"></span>
                    ";
        // line 23
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.deliveryNotAvailable"));
        echo "
                </p>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 27
    public function block_component_delivery_information_pre_order($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_delivery_information_pre_order"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_delivery_information_pre_order"));

        // line 28
        echo "                <link itemprop=\"availability\"
                      href=\"http://schema.org/PreOrder\"/>
                <p class=\"delivery-information delivery-preorder\">
                    <span class=\"delivery-status-indicator bg-warning\"></span>
                    ";
        // line 32
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.deliveryShipping"));
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "releaseDate", [], "any", false, false, false, 32), "long", "", null, "gregorian", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 32), "locale", [], "any", false, false, false, 32)), "html", null, true);
        echo "
                </p>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_component_delivery_information_available($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_delivery_information_available"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_delivery_information_available"));

        // line 37
        echo "                <link itemprop=\"availability\" href=\"http://schema.org/InStock\"/>
                <p class=\"delivery-information delivery-available\">
                    <span class=\"delivery-status-indicator bg-success\"></span>

                    ";
        // line 41
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.deliveryTimeAvailable", ["%name%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 42
($context["product"] ?? null), "deliveryTime", [], "any", false, false, false, 42), "translation", [0 => "name"], "method", false, false, false, 42)]));
        // line 43
        echo "
                </p>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 47
    public function block_component_delivery_information_soldout($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_delivery_information_soldout"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_delivery_information_soldout"));

        // line 48
        echo "                <link itemprop=\"availability\" href=\"http://schema.org/LimitedAvailability\"/>
                <p class=\"delivery-information delivery-soldout\">
                    <span class=\"delivery-status-indicator bg-danger\"></span>
                    ";
        // line 51
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.soldOut"));
        echo "
                </p>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 55
    public function block_component_delivery_information_restock($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_delivery_information_restock"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_delivery_information_restock"));

        // line 56
        echo "                <link itemprop=\"availability\" href=\"http://schema.org/LimitedAvailability\"/>
                <p class=\"delivery-information delivery-restock\">
                    <span class=\"delivery-status-indicator bg-warning\"></span>
                    ";
        // line 59
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.deliveryTimeRestock", ["%count%" => twig_get_attribute($this->env, $this->source,         // line 60
($context["product"] ?? null), "restockTime", [], "any", false, false, false, 60), "%restockTime%" => twig_get_attribute($this->env, $this->source,         // line 61
($context["product"] ?? null), "restockTime", [], "any", false, false, false, 61), "%name%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 62
($context["product"] ?? null), "deliveryTime", [], "any", false, false, false, 62), "translation", [0 => "name"], "method", false, false, false, 62)]));
        // line 63
        echo "
                </p>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 67
    public function block_component_delivery_information_default($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_delivery_information_default"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_delivery_information_default"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/delivery-information.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  323 => 67,  311 => 63,  309 => 62,  308 => 61,  307 => 60,  306 => 59,  301 => 56,  291 => 55,  278 => 51,  273 => 48,  263 => 47,  251 => 43,  249 => 42,  248 => 41,  242 => 37,  232 => 36,  217 => 32,  211 => 28,  201 => 27,  188 => 23,  182 => 19,  172 => 18,  159 => 12,  155 => 10,  145 => 9,  134 => 69,  131 => 68,  128 => 67,  125 => 66,  122 => 55,  119 => 54,  116 => 47,  113 => 46,  110 => 36,  107 => 35,  104 => 27,  101 => 26,  98 => 18,  96 => 17,  93 => 16,  90 => 15,  87 => 9,  85 => 8,  81 => 6,  78 => 5,  75 => 4,  72 => 3,  70 => 2,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block component_delivery_information %}
    {# @var product \\Shopware\\Core\\Content\\Product\\ProductEntity #}
    {% if page is defined and page.product is defined %}
        {% set product = page.product %}
    {% endif %}

    <div class=\"product-delivery-information\">
        {% if product.shippingFree %}
            {% block component_delivery_information_shipping_free %}
                <p class=\"delivery-information delivery-shipping-free\">
                    <span class=\"delivery-status-indicator bg-info\"></span>
                    {{ \"general.deliveryShippingFree\"|trans|sw_sanitize }}
                </p>
            {% endblock %}
        {% endif %}

        {% if not product.active %}
            {% block component_delivery_information_not_available %}
                <link itemprop=\"availability\"
                      href=\"http://schema.org/LimitedAvailability\"/>
                <p class=\"delivery-information delivery-not-available\">
                    <span class=\"delivery-status-indicator bg-danger\"></span>
                    {{ \"general.deliveryNotAvailable\"|trans|sw_sanitize }}
                </p>
            {% endblock %}
        {% elseif product.releaseDate and product.releaseDate|date('U') > \"now\"|date('U') %}
            {% block component_delivery_information_pre_order %}
                <link itemprop=\"availability\"
                      href=\"http://schema.org/PreOrder\"/>
                <p class=\"delivery-information delivery-preorder\">
                    <span class=\"delivery-status-indicator bg-warning\"></span>
                    {{ \"general.deliveryShipping\"|trans|sw_sanitize }} {{ product.releaseDate|format_date('long', locale=app.request.locale) }}
                </p>
            {% endblock %}
        {% elseif product.availableStock >= product.minPurchase and product.deliveryTime %}
            {% block component_delivery_information_available %}
                <link itemprop=\"availability\" href=\"http://schema.org/InStock\"/>
                <p class=\"delivery-information delivery-available\">
                    <span class=\"delivery-status-indicator bg-success\"></span>

                    {{ \"detail.deliveryTimeAvailable\"|trans({
                        '%name%': product.deliveryTime.translation('name')
                    })|sw_sanitize }}
                </p>
            {% endblock %}
        {% elseif product.isCloseout and product.availableStock < product.minPurchase %}
            {% block component_delivery_information_soldout %}
                <link itemprop=\"availability\" href=\"http://schema.org/LimitedAvailability\"/>
                <p class=\"delivery-information delivery-soldout\">
                    <span class=\"delivery-status-indicator bg-danger\"></span>
                    {{ \"detail.soldOut\"|trans|sw_sanitize }}
                </p>
            {% endblock %}
        {% elseif product.availableStock < product.minPurchase and product.deliveryTime and product.restockTime %}
            {% block component_delivery_information_restock %}
                <link itemprop=\"availability\" href=\"http://schema.org/LimitedAvailability\"/>
                <p class=\"delivery-information delivery-restock\">
                    <span class=\"delivery-status-indicator bg-warning\"></span>
                    {{ \"detail.deliveryTimeRestock\"|trans({
                        '%count%': product.restockTime,
                        '%restockTime%': product.restockTime,
                        '%name%': product.deliveryTime.translation('name')
                    })|sw_sanitize }}
                </p>
            {% endblock %}
        {% else %}
            {% block component_delivery_information_default %}{% endblock %}
        {% endif %}
    </div>
{% endblock %}
", "@Storefront/storefront/component/delivery-information.html.twig", "/var/www/stage.joes-toolbox.de/vendor/shopware/storefront/Resources/views/storefront/component/delivery-information.html.twig");
    }
}
