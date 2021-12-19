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

/* @Storefront/storefront/page/product-detail/configurator.html.twig */
class __TwigTemplate_8f4f3e3d1a6f5fbd5ae8ea2979dfa682f71b50239de63f79f2ff9f595b37a45e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_product_detail_configurator' => [$this, 'block_page_product_detail_configurator'],
            'page_product_detail_configurator_form' => [$this, 'block_page_product_detail_configurator_form'],
            'page_product_detail_configurator_csrf' => [$this, 'block_page_product_detail_configurator_csrf'],
            'page_product_detail_configurator_groups' => [$this, 'block_page_product_detail_configurator_groups'],
            'page_product_detail_configurator_group' => [$this, 'block_page_product_detail_configurator_group'],
            'page_product_detail_configurator_group_title' => [$this, 'block_page_product_detail_configurator_group_title'],
            'page_product_detail_configurator_group_title_text' => [$this, 'block_page_product_detail_configurator_group_title_text'],
            'page_product_detail_configurator_options' => [$this, 'block_page_product_detail_configurator_options'],
            'page_product_detail_configurator_option' => [$this, 'block_page_product_detail_configurator_option'],
            'page_product_detail_configurator_option_radio' => [$this, 'block_page_product_detail_configurator_option_radio'],
            'page_product_detail_configurator_option_radio_label' => [$this, 'block_page_product_detail_configurator_option_radio_label'],
            'page_product_detail_configurator_option_radio_label_media' => [$this, 'block_page_product_detail_configurator_option_radio_label_media'],
            'page_product_detail_configurator_option_radio_label_text' => [$this, 'block_page_product_detail_configurator_option_radio_label_text'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/product-detail/configurator.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/product-detail/configurator.html.twig"));

        // line 1
        $this->displayBlock('page_product_detail_configurator', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_product_detail_configurator($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator"));

        // line 2
        echo "    <div class=\"product-detail-configurator\">
        ";
        // line 3
        $context["config"] = ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("frontend.detail.switch", ["productId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 4
($context["page"] ?? null), "product", [], "any", false, false, false, 4), "parentId", [], "any", false, false, false, 4)])];
        // line 6
        echo "
        ";
        // line 7
        $this->displayBlock('page_product_detail_configurator_form', $context, $blocks);
        // line 112
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_page_product_detail_configurator_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator_form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator_form"));

        // line 8
        echo "            <form data-variant-switch=\"true\" data-variant-switch-options=\"";
        echo twig_escape_filter($this->env, json_encode(($context["config"] ?? null)), "html", null, true);
        echo "\">

                ";
        // line 10
        $this->displayBlock('page_product_detail_configurator_csrf', $context, $blocks);
        // line 13
        echo "
                ";
        // line 14
        $this->displayBlock('page_product_detail_configurator_groups', $context, $blocks);
        // line 110
        echo "            </form>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_page_product_detail_configurator_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator_csrf"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator_csrf"));

        // line 11
        echo "                    ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.detail.switch");
        echo "
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_page_product_detail_configurator_groups($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator_groups"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator_groups"));

        // line 15
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "configuratorSettings", [], "any", false, false, false, 15));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 16
            echo "                        ";
            $this->displayBlock('page_product_detail_configurator_group', $context, $blocks);
            // line 108
            echo "                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_page_product_detail_configurator_group($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator_group"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator_group"));

        // line 17
        echo "                            <div class=\"product-detail-configurator-group\">
                                ";
        // line 18
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "displayType", [], "any", false, false, false, 18), "select"))) {
            // line 19
            echo "                                    ";
            $this->loadTemplate("@Storefront/storefront/page/product-detail/configurator/select.html.twig", "@Storefront/storefront/page/product-detail/configurator.html.twig", 19)->display($context);
            // line 20
            echo "                                ";
        } else {
            // line 21
            echo "                                    ";
            $this->displayBlock('page_product_detail_configurator_group_title', $context, $blocks);
            // line 28
            echo "
                                    ";
            // line 29
            $this->displayBlock('page_product_detail_configurator_options', $context, $blocks);
            // line 105
            echo "                                ";
        }
        // line 106
        echo "                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_page_product_detail_configurator_group_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator_group_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator_group_title"));

        // line 22
        echo "                                        <div class=\"product-detail-configurator-group-title\">
                                            ";
        // line 23
        $this->displayBlock('page_product_detail_configurator_group_title_text', $context, $blocks);
        // line 26
        echo "                                        </div>
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_page_product_detail_configurator_group_title_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator_group_title_text"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator_group_title_text"));

        // line 24
        echo "                                                ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "translated", [], "any", false, false, false, 24), "name", [], "any", false, false, false, 24), "html", null, true);
        echo "
                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_page_product_detail_configurator_options($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator_options"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator_options"));

        // line 30
        echo "                                        <div class=\"product-detail-configurator-options\">
                                            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "options", [], "any", false, false, false, 31));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 32
            echo "
                                                ";
            // line 33
            $context["optionIdentifier"] = twig_join_filter([0 => twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "id", [], "any", false, false, false, 33), 1 => twig_get_attribute($this->env, $this->source, $context["option"], "id", [], "any", false, false, false, 33)], "-");
            // line 34
            echo "                                                ";
            $context["isActive"] = false;
            // line 35
            echo "                                                ";
            $context["isCombinableCls"] = "is-combinable";
            // line 36
            echo "
                                                ";
            // line 37
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["option"], "id", [], "any", false, false, false, 37), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 37), "optionIds", [], "any", false, false, false, 37))) {
                // line 38
                echo "                                                    ";
                $context["isActive"] = true;
                // line 39
                echo "                                                ";
            }
            // line 40
            echo "
                                                ";
            // line 41
            if ( !twig_get_attribute($this->env, $this->source, $context["option"], "combinable", [], "any", false, false, false, 41)) {
                // line 42
                echo "                                                    ";
                $context["isCombinableCls"] = false;
                // line 43
                echo "                                                ";
            }
            // line 44
            echo "
                                                ";
            // line 45
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["option"], "configuratorSetting", [], "any", false, false, false, 45), "media", [], "any", false, false, false, 45)) {
                // line 46
                echo "                                                    ";
                $context["displayType"] = "media";
                // line 47
                echo "                                                    ";
                $context["media"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["option"], "configuratorSetting", [], "any", false, false, false, 47), "media", [], "any", false, false, false, 47);
                // line 48
                echo "                                                ";
            } else {
                // line 49
                echo "                                                    ";
                $context["displayType"] = twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "displayType", [], "any", false, false, false, 49);
                // line 50
                echo "                                                    ";
                if (twig_get_attribute($this->env, $this->source, $context["option"], "media", [], "any", false, false, false, 50)) {
                    // line 51
                    echo "                                                        ";
                    $context["media"] = twig_get_attribute($this->env, $this->source, $context["option"], "media", [], "any", false, false, false, 51);
                    // line 52
                    echo "                                                    ";
                } else {
                    // line 53
                    echo "                                                        ";
                    $context["media"] = false;
                    // line 54
                    echo "                                                    ";
                }
                // line 55
                echo "                                                ";
            }
            // line 56
            echo "
                                                ";
            // line 57
            $this->displayBlock('page_product_detail_configurator_option', $context, $blocks);
            // line 102
            echo "                                            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "                                        </div>
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 57
    public function block_page_product_detail_configurator_option($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator_option"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator_option"));

        // line 58
        echo "                                                    <div class=\"product-detail-configurator-option\">
                                                        ";
        // line 59
        $this->displayBlock('page_product_detail_configurator_option_radio', $context, $blocks);
        // line 100
        echo "                                                    </div>
                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 59
    public function block_page_product_detail_configurator_option_radio($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator_option_radio"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator_option_radio"));

        // line 60
        echo "                                                            <input type=\"radio\"
                                                                   name=\"";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "id", [], "any", false, false, false, 61), "html", null, true);
        echo "\"
                                                                   value=\"";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "id", [], "any", false, false, false, 62), "html", null, true);
        echo "\"
                                                                   class=\"product-detail-configurator-option-input";
        // line 63
        if (($context["isCombinableCls"] ?? null)) {
            echo " ";
            echo twig_escape_filter($this->env, ($context["isCombinableCls"] ?? null), "html", null, true);
        }
        echo "\"
                                                                   title=\"";
        // line 64
        echo twig_escape_filter($this->env, ($context["optionIdentifier"] ?? null), "html", null, true);
        echo "\"
                                                                   id=\"";
        // line 65
        echo twig_escape_filter($this->env, ($context["optionIdentifier"] ?? null), "html", null, true);
        echo "\"
                                                                   ";
        // line 66
        if (($context["isActive"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo ">

                                                            ";
        // line 68
        $this->displayBlock('page_product_detail_configurator_option_radio_label', $context, $blocks);
        // line 99
        echo "                                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 68
    public function block_page_product_detail_configurator_option_radio_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator_option_radio_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator_option_radio_label"));

        // line 69
        echo "                                                                <label class=\"product-detail-configurator-option-label";
        if (($context["isCombinableCls"] ?? null)) {
            echo " ";
            echo twig_escape_filter($this->env, ($context["isCombinableCls"] ?? null), "html", null, true);
        }
        echo " is-display-";
        echo twig_escape_filter($this->env, ($context["displayType"] ?? null), "html", null, true);
        echo "\"
                                                                       ";
        // line 70
        if (((0 === twig_compare(($context["displayType"] ?? null), "color")) && twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "colorHexCode", [], "any", false, false, false, 70))) {
            // line 71
            echo "                                                                       style=\"background-color: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "colorHexCode", [], "any", false, false, false, 71), "html", null, true);
            echo "\"
                                                                       ";
        }
        // line 73
        echo "                                                                       title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "translated", [], "any", false, false, false, 73), "name", [], "any", false, false, false, 73), "html", null, true);
        echo "\"
                                                                       for=\"";
        // line 74
        echo twig_escape_filter($this->env, ($context["optionIdentifier"] ?? null), "html", null, true);
        echo "\">

                                                                    ";
        // line 76
        if (((0 === twig_compare(($context["displayType"] ?? null), "media")) && ($context["media"] ?? null))) {
            // line 77
            echo "                                                                        ";
            $this->displayBlock('page_product_detail_configurator_option_radio_label_media', $context, $blocks);
            // line 90
            echo "                                                                    ";
        } elseif ((((0 === twig_compare(($context["displayType"] ?? null), "text")) || ((0 === twig_compare(        // line 91
($context["displayType"] ?? null), "media")) &&  !($context["media"] ?? null))) || ((0 === twig_compare(        // line 92
($context["displayType"] ?? null), "color")) &&  !twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "colorHexCode", [], "any", false, false, false, 92)))) {
            // line 93
            echo "                                                                        ";
            $this->displayBlock('page_product_detail_configurator_option_radio_label_text', $context, $blocks);
            // line 96
            echo "                                                                    ";
        }
        // line 97
        echo "                                                                </label>
                                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 77
    public function block_page_product_detail_configurator_option_radio_label_media($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator_option_radio_label_media"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator_option_radio_label_media"));

        // line 78
        echo "                                                                            ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/thumbnail.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/product-detail/configurator.html.twig", 78);
        })())->display(twig_array_merge($context, ["media" =>         // line 79
($context["media"] ?? null), "sizes" => ["default" => "52px"], "attributes" => ["class" => "product-detail-configurator-option-image", "alt" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 85
($context["option"] ?? null), "translated", [], "any", false, false, false, 85), "name", [], "any", false, false, false, 85), "title" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 86
($context["option"] ?? null), "translated", [], "any", false, false, false, 86), "name", [], "any", false, false, false, 86)], "name" => "configurator-option-img-thumbnails"]));
        // line 89
        echo "                                                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 93
    public function block_page_product_detail_configurator_option_radio_label_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator_option_radio_label_text"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator_option_radio_label_text"));

        // line 94
        echo "                                                                            ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "translated", [], "any", false, false, false, 94), "name", [], "any", false, false, false, 94), "html", null, true);
        echo "
                                                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/product-detail/configurator.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  617 => 94,  607 => 93,  597 => 89,  595 => 86,  594 => 85,  593 => 79,  585 => 78,  575 => 77,  564 => 97,  561 => 96,  558 => 93,  556 => 92,  555 => 91,  553 => 90,  550 => 77,  548 => 76,  543 => 74,  538 => 73,  532 => 71,  530 => 70,  520 => 69,  510 => 68,  500 => 99,  498 => 68,  491 => 66,  487 => 65,  483 => 64,  476 => 63,  472 => 62,  468 => 61,  465 => 60,  455 => 59,  444 => 100,  442 => 59,  439 => 58,  429 => 57,  418 => 103,  404 => 102,  402 => 57,  399 => 56,  396 => 55,  393 => 54,  390 => 53,  387 => 52,  384 => 51,  381 => 50,  378 => 49,  375 => 48,  372 => 47,  369 => 46,  367 => 45,  364 => 44,  361 => 43,  358 => 42,  356 => 41,  353 => 40,  350 => 39,  347 => 38,  345 => 37,  342 => 36,  339 => 35,  336 => 34,  334 => 33,  331 => 32,  314 => 31,  311 => 30,  301 => 29,  288 => 24,  278 => 23,  267 => 26,  265 => 23,  262 => 22,  252 => 21,  241 => 106,  238 => 105,  236 => 29,  233 => 28,  230 => 21,  227 => 20,  224 => 19,  222 => 18,  219 => 17,  209 => 16,  199 => 109,  185 => 108,  182 => 16,  164 => 15,  154 => 14,  141 => 11,  131 => 10,  120 => 110,  118 => 14,  115 => 13,  113 => 10,  107 => 8,  97 => 7,  86 => 112,  84 => 7,  81 => 6,  79 => 4,  78 => 3,  75 => 2,  56 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block page_product_detail_configurator %}
    <div class=\"product-detail-configurator\">
        {% set config = {
            url: url('frontend.detail.switch', { productId: page.product.parentId })
        } %}

        {% block page_product_detail_configurator_form %}
            <form data-variant-switch=\"true\" data-variant-switch-options=\"{{ config|json_encode }}\">

                {% block page_product_detail_configurator_csrf %}
                    {{ sw_csrf('frontend.detail.switch') }}
                {% endblock %}

                {% block page_product_detail_configurator_groups %}
                    {% for group in page.configuratorSettings %}
                        {% block page_product_detail_configurator_group %}
                            <div class=\"product-detail-configurator-group\">
                                {% if group.displayType == 'select' %}
                                    {% sw_include '@Storefront/storefront/page/product-detail/configurator/select.html.twig' %}
                                {% else %}
                                    {% block page_product_detail_configurator_group_title %}
                                        <div class=\"product-detail-configurator-group-title\">
                                            {% block page_product_detail_configurator_group_title_text %}
                                                {{ group.translated.name }}
                                            {% endblock %}
                                        </div>
                                    {% endblock %}

                                    {% block page_product_detail_configurator_options %}
                                        <div class=\"product-detail-configurator-options\">
                                            {% for option in group.options %}

                                                {% set optionIdentifier = [group.id, option.id]|join('-') %}
                                                {% set isActive = false %}
                                                {% set isCombinableCls = 'is-combinable' %}

                                                {% if option.id in page.product.optionIds %}
                                                    {% set isActive = true %}
                                                {% endif %}

                                                {% if not option.combinable %}
                                                    {% set isCombinableCls = false %}
                                                {% endif %}

                                                {% if option.configuratorSetting.media %}
                                                    {% set displayType = 'media' %}
                                                    {% set media = option.configuratorSetting.media %}
                                                {% else %}
                                                    {% set displayType = group.displayType %}
                                                    {% if option.media %}
                                                        {% set media = option.media %}
                                                    {% else %}
                                                        {% set media = false %}
                                                    {% endif %}
                                                {% endif %}

                                                {% block page_product_detail_configurator_option %}
                                                    <div class=\"product-detail-configurator-option\">
                                                        {% block page_product_detail_configurator_option_radio %}
                                                            <input type=\"radio\"
                                                                   name=\"{{ group.id }}\"
                                                                   value=\"{{ option.id }}\"
                                                                   class=\"product-detail-configurator-option-input{% if isCombinableCls %} {{ isCombinableCls }}{% endif %}\"
                                                                   title=\"{{ optionIdentifier }}\"
                                                                   id=\"{{ optionIdentifier }}\"
                                                                   {% if isActive %}checked=\"checked\"{% endif %}>

                                                            {% block page_product_detail_configurator_option_radio_label %}
                                                                <label class=\"product-detail-configurator-option-label{% if isCombinableCls %} {{ isCombinableCls }}{% endif %} is-display-{{ displayType }}\"
                                                                       {% if displayType == 'color' and option.colorHexCode %}
                                                                       style=\"background-color: {{ option.colorHexCode }}\"
                                                                       {% endif %}
                                                                       title=\"{{ option.translated.name }}\"
                                                                       for=\"{{ optionIdentifier }}\">

                                                                    {% if displayType == 'media' and media %}
                                                                        {% block page_product_detail_configurator_option_radio_label_media %}
                                                                            {% sw_thumbnails 'configurator-option-img-thumbnails' with {
                                                                                media: media,
                                                                                sizes: {
                                                                                    'default': '52px'
                                                                                },
                                                                                attributes: {
                                                                                    'class': 'product-detail-configurator-option-image',
                                                                                    'alt': option.translated.name,
                                                                                    'title': option.translated.name
                                                                                }
                                                                            } %}
                                                                        {% endblock %}
                                                                    {% elseif displayType == 'text' or
                                                                              (displayType == 'media' and not media) or
                                                                              (displayType == 'color' and not option.colorHexCode) %}
                                                                        {% block page_product_detail_configurator_option_radio_label_text %}
                                                                            {{ option.translated.name }}
                                                                        {% endblock %}
                                                                    {% endif %}
                                                                </label>
                                                            {% endblock %}
                                                        {% endblock %}
                                                    </div>
                                                {% endblock %}
                                            {% endfor %}
                                        </div>
                                    {% endblock %}
                                {% endif %}
                            </div>
                        {% endblock %}
                    {% endfor %}
                {% endblock %}
            </form>
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/page/product-detail/configurator.html.twig", "/var/www/stage.joes-toolbox.de/vendor/shopware/storefront/Resources/views/storefront/page/product-detail/configurator.html.twig");
    }
}
