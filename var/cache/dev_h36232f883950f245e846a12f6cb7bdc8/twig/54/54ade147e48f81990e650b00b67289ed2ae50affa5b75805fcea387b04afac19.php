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

/* @Storefront/storefront/page/product-detail/buy-widget.html.twig */
class __TwigTemplate_8fd56359c96c77bd432cb21a6807016c00499073a730b0148ab3ad9be98d778a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_product_detail_buy_inner' => [$this, 'block_page_product_detail_buy_inner'],
            'page_product_detail_rich_snippets' => [$this, 'block_page_product_detail_rich_snippets'],
            'page_product_detail_rich_snippets_brand' => [$this, 'block_page_product_detail_rich_snippets_brand'],
            'page_product_detail_rich_snippets_gtin13' => [$this, 'block_page_product_detail_rich_snippets_gtin13'],
            'page_product_detail_rich_snippets_mpn' => [$this, 'block_page_product_detail_rich_snippets_mpn'],
            'page_product_detail_rich_snippets_weight' => [$this, 'block_page_product_detail_rich_snippets_weight'],
            'page_product_detail_rich_snippets_height' => [$this, 'block_page_product_detail_rich_snippets_height'],
            'page_product_detail_rich_snippets_width' => [$this, 'block_page_product_detail_rich_snippets_width'],
            'page_product_detail_rich_snippets_depth' => [$this, 'block_page_product_detail_rich_snippets_depth'],
            'page_product_detail_rich_snippets_release_date' => [$this, 'block_page_product_detail_rich_snippets_release_date'],
            'page_product_detail_not_available' => [$this, 'block_page_product_detail_not_available'],
            'page_product_detail_buy_container' => [$this, 'block_page_product_detail_buy_container'],
            'page_product_detail_data' => [$this, 'block_page_product_detail_data'],
            'page_product_detail_data_rich_snippet_url' => [$this, 'block_page_product_detail_data_rich_snippet_url'],
            'page_product_detail_data_rich_snippet_price_range' => [$this, 'block_page_product_detail_data_rich_snippet_price_range'],
            'page_product_detail_data_rich_snippet_price_currency' => [$this, 'block_page_product_detail_data_rich_snippet_price_currency'],
            'page_product_detail_price' => [$this, 'block_page_product_detail_price'],
            'page_product_detail_tax' => [$this, 'block_page_product_detail_tax'],
            'page_product_detail_tax_link' => [$this, 'block_page_product_detail_tax_link'],
            'page_product_detail_reviews' => [$this, 'block_page_product_detail_reviews'],
            'page_product_detail_delivery_informations' => [$this, 'block_page_product_detail_delivery_informations'],
            'page_product_detail_configurator_include' => [$this, 'block_page_product_detail_configurator_include'],
            'page_product_detail_buy_form' => [$this, 'block_page_product_detail_buy_form'],
            'page_product_detail_wishlist' => [$this, 'block_page_product_detail_wishlist'],
            'page_product_detail_ordernumber_container' => [$this, 'block_page_product_detail_ordernumber_container'],
            'page_product_detail_ordernumber_label' => [$this, 'block_page_product_detail_ordernumber_label'],
            'page_product_detail_ordernumber' => [$this, 'block_page_product_detail_ordernumber'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/product-detail/buy-widget.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/product-detail/buy-widget.html.twig"));

        // line 1
        $this->displayBlock('page_product_detail_buy_inner', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_product_detail_buy_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_buy_inner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_buy_inner"));

        // line 2
        echo "    <div class=\"js-magnifier-zoom-image-container\">
        ";
        // line 3
        $this->displayBlock('page_product_detail_rich_snippets', $context, $blocks);
        // line 58
        echo "
        ";
        // line 59
        if ( !$this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("FEATURE_NEXT_16992")) {
            // line 60
            echo "            ";
            // line 61
            echo "            ";
            $this->displayBlock('page_product_detail_not_available', $context, $blocks);
            // line 63
            echo "        ";
        }
        // line 64
        echo "
        ";
        // line 65
        $this->displayBlock('page_product_detail_buy_container', $context, $blocks);
        // line 179
        echo "
        ";
        // line 180
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.cart.wishlistEnabled")) {
            // line 181
            echo "            ";
            $this->displayBlock('page_product_detail_wishlist', $context, $blocks);
            // line 188
            echo "        ";
        }
        // line 189
        echo "
        ";
        // line 190
        $this->displayBlock('page_product_detail_ordernumber_container', $context, $blocks);
        // line 210
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_page_product_detail_rich_snippets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets"));

        // line 4
        echo "            ";
        $this->displayBlock('page_product_detail_rich_snippets_brand', $context, $blocks);
        // line 10
        echo "
            ";
        // line 11
        $this->displayBlock('page_product_detail_rich_snippets_gtin13', $context, $blocks);
        // line 17
        echo "
            ";
        // line 18
        $this->displayBlock('page_product_detail_rich_snippets_mpn', $context, $blocks);
        // line 24
        echo "
            ";
        // line 25
        $this->displayBlock('page_product_detail_rich_snippets_weight', $context, $blocks);
        // line 31
        echo "
            ";
        // line 32
        $this->displayBlock('page_product_detail_rich_snippets_height', $context, $blocks);
        // line 38
        echo "
            ";
        // line 39
        $this->displayBlock('page_product_detail_rich_snippets_width', $context, $blocks);
        // line 45
        echo "
            ";
        // line 46
        $this->displayBlock('page_product_detail_rich_snippets_depth', $context, $blocks);
        // line 52
        echo "
            ";
        // line 53
        $this->displayBlock('page_product_detail_rich_snippets_release_date', $context, $blocks);
        // line 57
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_page_product_detail_rich_snippets_brand($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_brand"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_brand"));

        // line 5
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 5), "manufacturer", [], "any", false, false, false, 5)) {
            // line 6
            echo "                    <meta itemprop=\"brand\"
                          content=\"";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 7), "manufacturer", [], "any", false, false, false, 7), "translated", [], "any", false, false, false, 7), "name", [], "any", false, false, false, 7), "html", null, true);
            echo "\"/>
                ";
        }
        // line 9
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_page_product_detail_rich_snippets_gtin13($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_gtin13"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_gtin13"));

        // line 12
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 12), "ean", [], "any", false, false, false, 12)) {
            // line 13
            echo "                    <meta itemprop=\"gtin13\"
                          content=\"";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 14), "ean", [], "any", false, false, false, 14), "html", null, true);
            echo "\"/>
                ";
        }
        // line 16
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_page_product_detail_rich_snippets_mpn($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_mpn"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_mpn"));

        // line 19
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 19), "manufacturerNumber", [], "any", false, false, false, 19)) {
            // line 20
            echo "                    <meta itemprop=\"mpn\"
                          content=\"";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 21), "manufacturerNumber", [], "any", false, false, false, 21), "html", null, true);
            echo "\"/>
                ";
        }
        // line 23
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_page_product_detail_rich_snippets_weight($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_weight"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_weight"));

        // line 26
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 26), "weight", [], "any", false, false, false, 26)) {
            // line 27
            echo "                    <meta itemprop=\"weight\"
                          content=\"";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 28), "weight", [], "any", false, false, false, 28), "html", null, true);
            echo " kg\"/>
                ";
        }
        // line 30
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 32
    public function block_page_product_detail_rich_snippets_height($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_height"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_height"));

        // line 33
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 33), "height", [], "any", false, false, false, 33)) {
            // line 34
            echo "                    <meta itemprop=\"height\"
                          content=\"";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 35), "height", [], "any", false, false, false, 35), "html", null, true);
            echo " mm\"/>
                ";
        }
        // line 37
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 39
    public function block_page_product_detail_rich_snippets_width($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_width"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_width"));

        // line 40
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 40), "width", [], "any", false, false, false, 40)) {
            // line 41
            echo "                    <meta itemprop=\"width\"
                          content=\"";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 42), "width", [], "any", false, false, false, 42), "html", null, true);
            echo " mm\"/>
                ";
        }
        // line 44
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 46
    public function block_page_product_detail_rich_snippets_depth($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_depth"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_depth"));

        // line 47
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 47), "length", [], "any", false, false, false, 47)) {
            // line 48
            echo "                    <meta itemprop=\"depth\"
                          content=\"";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 49), "length", [], "any", false, false, false, 49), "html", null, true);
            echo " mm\"/>
                ";
        }
        // line 51
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 53
    public function block_page_product_detail_rich_snippets_release_date($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_release_date"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_release_date"));

        // line 54
        echo "                <meta itemprop=\"releaseDate\"
                      content=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 55), "releaseDate", [], "any", false, false, false, 55), "medium", "Y-MM-dd", null, "gregorian", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 55), "locale", [], "any", false, false, false, 55)), "html", null, true);
        echo "\"/>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 61
    public function block_page_product_detail_not_available($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_not_available"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_not_available"));

        // line 62
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 65
    public function block_page_product_detail_buy_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_buy_container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_buy_container"));

        // line 66
        echo "            <div itemprop=\"offers\"
                 itemscope
                 itemtype=\"";
        // line 68
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 68), "calculatedPrices", [], "any", false, false, false, 68)), 1))) {
            echo "http://schema.org/AggregateOffer";
        } else {
            echo "http://schema.org/Offer";
        }
        echo "\">
                ";
        // line 69
        $this->displayBlock('page_product_detail_data', $context, $blocks);
        // line 161
        echo "
                ";
        // line 162
        $this->displayBlock('page_product_detail_configurator_include', $context, $blocks);
        // line 169
        echo "
                ";
        // line 170
        $this->displayBlock('page_product_detail_buy_form', $context, $blocks);
        // line 177
        echo "            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 69
    public function block_page_product_detail_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_data"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_data"));

        // line 70
        echo "                    ";
        $this->displayBlock('page_product_detail_data_rich_snippet_url', $context, $blocks);
        // line 74
        echo "
                    ";
        // line 75
        $this->displayBlock('page_product_detail_data_rich_snippet_price_range', $context, $blocks);
        // line 94
        echo "
                    ";
        // line 95
        $this->displayBlock('page_product_detail_data_rich_snippet_price_currency', $context, $blocks);
        // line 99
        echo "
                    ";
        // line 100
        $this->displayBlock('page_product_detail_price', $context, $blocks);
        // line 105
        echo "
                    ";
        // line 106
        $this->displayBlock('page_product_detail_tax', $context, $blocks);
        // line 127
        echo "
                    ";
        // line 128
        $context["remoteClickOptions"] = ["selector" => "#review-tab", "scrollToElement" => true];
        // line 132
        echo "
                    ";
        // line 133
        $this->displayBlock('page_product_detail_reviews', $context, $blocks);
        // line 154
        echo "
                    ";
        // line 155
        $this->displayBlock('page_product_detail_delivery_informations', $context, $blocks);
        // line 160
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 70
    public function block_page_product_detail_data_rich_snippet_url($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_data_rich_snippet_url"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_data_rich_snippet_url"));

        // line 71
        echo "                        <meta itemprop=\"url\"
                              content=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.detail.page", ["productId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 72), "id", [], "any", false, false, false, 72)]), "html", null, true);
        echo "\"/>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 75
    public function block_page_product_detail_data_rich_snippet_price_range($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_data_rich_snippet_price_range"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_data_rich_snippet_price_range"));

        // line 76
        echo "                        ";
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 76), "calculatedPrices", [], "any", false, false, false, 76)), 1))) {
            // line 77
            echo "                            ";
            $context["lowestPrice"] = false;
            // line 78
            echo "                            ";
            $context["highestPrice"] = false;
            // line 79
            echo "
                            ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 80), "calculatedPrices", [], "any", false, false, false, 80));
            foreach ($context['_seq'] as $context["_key"] => $context["price"]) {
                // line 81
                echo "                                ";
                if (( !($context["lowestPrice"] ?? null) || (-1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["price"], "unitPrice", [], "any", false, false, false, 81), ($context["lowestPrice"] ?? null))))) {
                    // line 82
                    echo "                                    ";
                    $context["lowestPrice"] = twig_get_attribute($this->env, $this->source, $context["price"], "unitPrice", [], "any", false, false, false, 82);
                    // line 83
                    echo "                                ";
                }
                // line 84
                echo "                                ";
                if (( !($context["highestPrice"] ?? null) || (1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["price"], "unitPrice", [], "any", false, false, false, 84), ($context["highestPrice"] ?? null))))) {
                    // line 85
                    echo "                                    ";
                    $context["highestPrice"] = twig_get_attribute($this->env, $this->source, $context["price"], "unitPrice", [], "any", false, false, false, 85);
                    // line 86
                    echo "                                ";
                }
                // line 87
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['price'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "
                            <meta itemprop=\"lowPrice\" content=\"";
            // line 89
            echo twig_escape_filter($this->env, ($context["lowestPrice"] ?? null), "html", null, true);
            echo "\"/>
                            <meta itemprop=\"highPrice\" content=\"";
            // line 90
            echo twig_escape_filter($this->env, ($context["highestPrice"] ?? null), "html", null, true);
            echo "\"/>
                            <meta itemprop=\"offerCount\" content=\"";
            // line 91
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 91), "calculatedPrices", [], "any", false, false, false, 91)), "html", null, true);
            echo "\"/>
                        ";
        }
        // line 93
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 95
    public function block_page_product_detail_data_rich_snippet_price_currency($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_data_rich_snippet_price_currency"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_data_rich_snippet_price_currency"));

        // line 96
        echo "                        <meta itemprop=\"priceCurrency\"
                              content=\"";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "currency", [], "any", false, false, false, 97), "translated", [], "any", false, false, false, 97), "shortName", [], "any", false, false, false, 97), "html", null, true);
        echo "\"/>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 100
    public function block_page_product_detail_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price"));

        // line 101
        echo "                        <div class=\"product-detail-price-container\">
                            ";
        // line 102
        $this->loadTemplate("@Storefront/storefront/page/product-detail/buy-widget-price.html.twig", "@Storefront/storefront/page/product-detail/buy-widget.html.twig", 102)->display($context);
        // line 103
        echo "                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 106
    public function block_page_product_detail_tax($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_tax"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_tax"));

        // line 107
        echo "                        <div class=\"product-detail-tax-container\">
                            ";
        // line 108
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "taxState", [], "any", false, false, false, 108), "gross"))) {
            // line 109
            echo "                                ";
            $context["taxText"] = $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.grossTaxInformation"));
            // line 110
            echo "                            ";
        } else {
            // line 111
            echo "                                ";
            $context["taxText"] = $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.netTaxInformation"));
            // line 112
            echo "                            ";
        }
        // line 113
        echo "
                            <p class=\"product-detail-tax\">
                                ";
        // line 115
        $this->displayBlock('page_product_detail_tax_link', $context, $blocks);
        // line 124
        echo "                            </p>
                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 115
    public function block_page_product_detail_tax_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_tax_link"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_tax_link"));

        // line 116
        echo "                                    <a class=\"product-detail-tax-link\"
                                       href=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page", ["id" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.shippingPaymentInfoPage")]), "html", null, true);
        echo "\"
                                       title=\"";
        // line 118
        echo twig_escape_filter($this->env, ($context["taxText"] ?? null), "html", null, true);
        echo "\"
                                       data-toggle=\"modal\"
                                       data-url=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page", ["id" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.shippingPaymentInfoPage")]), "html", null, true);
        echo "\">
                                        ";
        // line 121
        echo twig_escape_filter($this->env, ($context["taxText"] ?? null), "html", null, true);
        echo "
                                    </a>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 133
    public function block_page_product_detail_reviews($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_reviews"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_reviews"));

        // line 134
        echo "                        ";
        if ((((1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 134), "ratingAverage", [], "any", false, false, false, 134), 0)) && (1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "reviews", [], "any", false, false, false, 134), "totalReviews", [], "any", false, false, false, 134), 0))) && $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.listing.showReview"))) {
            // line 135
            echo "                            <div class=\"product-detail-reviews\">

                                ";
            // line 137
            $this->loadTemplate("@Storefront/storefront/component/review/rating.html.twig", "@Storefront/storefront/page/product-detail/buy-widget.html.twig", 137)->display(twig_array_merge($context, ["points" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 138
($context["page"] ?? null), "product", [], "any", false, false, false, 138), "ratingAverage", [], "any", false, false, false, 138), "style" => "text-primary"]));
            // line 141
            echo "                                <a data-toggle=\"tab\"
                                   class=\"product-detail-reviews-link\"
                                   data-offcanvas-tabs=\"true\"
                                   data-remote-click=\"true\"
                                   data-remote-click-options='";
            // line 145
            echo twig_escape_filter($this->env, json_encode(($context["remoteClickOptions"] ?? null)), "html", null, true);
            echo "'
                                   href=\"#review-tab-pane\"
                                   aria-controls=\"review-tab-pane\">
                                    ";
            // line 148
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "reviews", [], "any", false, false, false, 148), "totalReviews", [], "any", false, false, false, 148), "html", null, true);
            echo "
                                    ";
            // line 149
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewLinkText", ["%count%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "reviews", [], "any", false, false, false, 149), "totalReviews", [], "any", false, false, false, 149)]));
            echo "
                                </a>
                            </div>
                        ";
        }
        // line 153
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 155
    public function block_page_product_detail_delivery_informations($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_delivery_informations"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_delivery_informations"));

        // line 156
        echo "                        <div class=\"product-detail-delivery-information\">
                            ";
        // line 157
        $this->loadTemplate("@Storefront/storefront/component/delivery-information.html.twig", "@Storefront/storefront/page/product-detail/buy-widget.html.twig", 157)->display($context);
        // line 158
        echo "                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 162
    public function block_page_product_detail_configurator_include($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator_include"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator_include"));

        // line 163
        echo "                    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 163), "parentId", [], "any", false, false, false, 163) && (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "configuratorSettings", [], "any", false, false, false, 163)), 0)))) {
            // line 164
            echo "                        <div class=\"product-detail-configurator-container\">
                            ";
            // line 165
            $this->loadTemplate("@Storefront/storefront/page/product-detail/configurator.html.twig", "@Storefront/storefront/page/product-detail/buy-widget.html.twig", 165)->display($context);
            // line 166
            echo "                        </div>
                    ";
        }
        // line 168
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 170
    public function block_page_product_detail_buy_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_buy_form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_buy_form"));

        // line 171
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 171), "active", [], "any", false, false, false, 171)) {
            // line 172
            echo "                        <div class=\"product-detail-form-container\">
                            ";
            // line 173
            $this->loadTemplate("@Storefront/storefront/page/product-detail/buy-widget-form.html.twig", "@Storefront/storefront/page/product-detail/buy-widget.html.twig", 173)->display($context);
            // line 174
            echo "                        </div>
                    ";
        }
        // line 176
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 181
    public function block_page_product_detail_wishlist($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_wishlist"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_wishlist"));

        // line 182
        echo "                ";
        $this->loadTemplate("@Storefront/storefront/component/product/card/wishlist.html.twig", "@Storefront/storefront/page/product-detail/buy-widget.html.twig", 182)->display(twig_array_merge($context, ["showText" => true, "size" => "md", "productId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 185
($context["page"] ?? null), "product", [], "any", false, false, false, 185), "id", [], "any", false, false, false, 185)]));
        // line 187
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 190
    public function block_page_product_detail_ordernumber_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_ordernumber_container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_ordernumber_container"));

        // line 191
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 191), "productNumber", [], "any", false, false, false, 191)) {
            // line 192
            echo "                <div class=\"product-detail-ordernumber-container\">
                    ";
            // line 193
            $this->displayBlock('page_product_detail_ordernumber_label', $context, $blocks);
            // line 198
            echo "
                    ";
            // line 199
            $this->displayBlock('page_product_detail_ordernumber', $context, $blocks);
            // line 207
            echo "                </div>
            ";
        }
        // line 209
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 193
    public function block_page_product_detail_ordernumber_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_ordernumber_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_ordernumber_label"));

        // line 194
        echo "                        <span class=\"product-detail-ordernumber-label\">
                            ";
        // line 195
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.productNumberLabel"));
        echo "
                        </span>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 199
    public function block_page_product_detail_ordernumber($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_ordernumber"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_ordernumber"));

        // line 200
        echo "                        <meta itemprop=\"productID\"
                              content=\"";
        // line 201
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 201), "id", [], "any", false, false, false, 201), "html", null, true);
        echo "\"/>
                        <span class=\"product-detail-ordernumber\"
                              itemprop=\"sku\">
                            ";
        // line 204
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 204), "productNumber", [], "any", false, false, false, 204), "html", null, true);
        echo "
                        </span>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/product-detail/buy-widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1047 => 204,  1041 => 201,  1038 => 200,  1028 => 199,  1015 => 195,  1012 => 194,  1002 => 193,  992 => 209,  988 => 207,  986 => 199,  983 => 198,  981 => 193,  978 => 192,  975 => 191,  965 => 190,  955 => 187,  953 => 185,  951 => 182,  941 => 181,  931 => 176,  927 => 174,  925 => 173,  922 => 172,  919 => 171,  909 => 170,  899 => 168,  895 => 166,  893 => 165,  890 => 164,  887 => 163,  877 => 162,  866 => 158,  864 => 157,  861 => 156,  851 => 155,  841 => 153,  834 => 149,  830 => 148,  824 => 145,  818 => 141,  816 => 138,  815 => 137,  811 => 135,  808 => 134,  798 => 133,  785 => 121,  781 => 120,  776 => 118,  772 => 117,  769 => 116,  759 => 115,  747 => 124,  745 => 115,  741 => 113,  738 => 112,  735 => 111,  732 => 110,  729 => 109,  727 => 108,  724 => 107,  714 => 106,  703 => 103,  701 => 102,  698 => 101,  688 => 100,  676 => 97,  673 => 96,  663 => 95,  653 => 93,  648 => 91,  644 => 90,  640 => 89,  637 => 88,  631 => 87,  628 => 86,  625 => 85,  622 => 84,  619 => 83,  616 => 82,  613 => 81,  609 => 80,  606 => 79,  603 => 78,  600 => 77,  597 => 76,  587 => 75,  575 => 72,  572 => 71,  562 => 70,  552 => 160,  550 => 155,  547 => 154,  545 => 133,  542 => 132,  540 => 128,  537 => 127,  535 => 106,  532 => 105,  530 => 100,  527 => 99,  525 => 95,  522 => 94,  520 => 75,  517 => 74,  514 => 70,  504 => 69,  493 => 177,  491 => 170,  488 => 169,  486 => 162,  483 => 161,  481 => 69,  473 => 68,  469 => 66,  459 => 65,  449 => 62,  439 => 61,  427 => 55,  424 => 54,  414 => 53,  404 => 51,  399 => 49,  396 => 48,  393 => 47,  383 => 46,  373 => 44,  368 => 42,  365 => 41,  362 => 40,  352 => 39,  342 => 37,  337 => 35,  334 => 34,  331 => 33,  321 => 32,  311 => 30,  306 => 28,  303 => 27,  300 => 26,  290 => 25,  280 => 23,  275 => 21,  272 => 20,  269 => 19,  259 => 18,  249 => 16,  244 => 14,  241 => 13,  238 => 12,  228 => 11,  218 => 9,  213 => 7,  210 => 6,  207 => 5,  197 => 4,  187 => 57,  185 => 53,  182 => 52,  180 => 46,  177 => 45,  175 => 39,  172 => 38,  170 => 32,  167 => 31,  165 => 25,  162 => 24,  160 => 18,  157 => 17,  155 => 11,  152 => 10,  149 => 4,  139 => 3,  128 => 210,  126 => 190,  123 => 189,  120 => 188,  117 => 181,  115 => 180,  112 => 179,  110 => 65,  107 => 64,  104 => 63,  101 => 61,  99 => 60,  97 => 59,  94 => 58,  92 => 3,  89 => 2,  70 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block page_product_detail_buy_inner %}
    <div class=\"js-magnifier-zoom-image-container\">
        {% block page_product_detail_rich_snippets %}
            {% block page_product_detail_rich_snippets_brand %}
                {% if page.product.manufacturer %}
                    <meta itemprop=\"brand\"
                          content=\"{{ page.product.manufacturer.translated.name }}\"/>
                {% endif %}
            {% endblock %}

            {% block page_product_detail_rich_snippets_gtin13 %}
                {% if page.product.ean %}
                    <meta itemprop=\"gtin13\"
                          content=\"{{ page.product.ean }}\"/>
                {% endif %}
            {% endblock %}

            {% block page_product_detail_rich_snippets_mpn %}
                {% if page.product.manufacturerNumber %}
                    <meta itemprop=\"mpn\"
                          content=\"{{ page.product.manufacturerNumber }}\"/>
                {% endif %}
            {% endblock %}

            {% block page_product_detail_rich_snippets_weight %}
                {% if page.product.weight %}
                    <meta itemprop=\"weight\"
                          content=\"{{ page.product.weight }} kg\"/>
                {% endif %}
            {% endblock %}

            {% block page_product_detail_rich_snippets_height %}
                {% if page.product.height %}
                    <meta itemprop=\"height\"
                          content=\"{{ page.product.height }} mm\"/>
                {% endif %}
            {% endblock %}

            {% block page_product_detail_rich_snippets_width %}
                {% if page.product.width %}
                    <meta itemprop=\"width\"
                          content=\"{{ page.product.width }} mm\"/>
                {% endif %}
            {% endblock %}

            {% block page_product_detail_rich_snippets_depth %}
                {% if page.product.length %}
                    <meta itemprop=\"depth\"
                          content=\"{{ page.product.length }} mm\"/>
                {% endif %}
            {% endblock %}

            {% block page_product_detail_rich_snippets_release_date %}
                <meta itemprop=\"releaseDate\"
                      content=\"{{ page.product.releaseDate|format_date(pattern=\"Y-MM-dd\", locale=app.request.locale) }}\"/>
            {% endblock %}
        {% endblock %}

        {% if not feature('FEATURE_NEXT_16992') %}
            {# @deprecated tag:v6.5.0 tag:)(FEATURE_NEXT_16992) - Block will be removed in v6.5.0 #}
            {% block page_product_detail_not_available %}
            {% endblock %}
        {% endif %}

        {% block page_product_detail_buy_container %}
            <div itemprop=\"offers\"
                 itemscope
                 itemtype=\"{% if page.product.calculatedPrices|length > 1 %}http://schema.org/AggregateOffer{% else %}http://schema.org/Offer{% endif %}\">
                {% block page_product_detail_data %}
                    {% block page_product_detail_data_rich_snippet_url %}
                        <meta itemprop=\"url\"
                              content=\"{{ seoUrl('frontend.detail.page', { productId: page.product.id }) }}\"/>
                    {% endblock %}

                    {% block page_product_detail_data_rich_snippet_price_range %}
                        {% if page.product.calculatedPrices|length > 1 %}
                            {% set lowestPrice = false %}
                            {% set highestPrice = false %}

                            {% for price in page.product.calculatedPrices %}
                                {% if not lowestPrice or price.unitPrice < lowestPrice %}
                                    {% set lowestPrice = price.unitPrice %}
                                {% endif %}
                                {% if not highestPrice or price.unitPrice > highestPrice %}
                                    {% set highestPrice = price.unitPrice %}
                                {% endif %}
                            {% endfor %}

                            <meta itemprop=\"lowPrice\" content=\"{{ lowestPrice }}\"/>
                            <meta itemprop=\"highPrice\" content=\"{{ highestPrice }}\"/>
                            <meta itemprop=\"offerCount\" content=\"{{ page.product.calculatedPrices|length }}\"/>
                        {% endif %}
                    {% endblock %}

                    {% block page_product_detail_data_rich_snippet_price_currency %}
                        <meta itemprop=\"priceCurrency\"
                              content=\"{{ context.currency.translated.shortName }}\"/>
                    {% endblock %}

                    {% block page_product_detail_price %}
                        <div class=\"product-detail-price-container\">
                            {% sw_include '@Storefront/storefront/page/product-detail/buy-widget-price.html.twig' %}
                        </div>
                    {% endblock %}

                    {% block page_product_detail_tax %}
                        <div class=\"product-detail-tax-container\">
                            {% if context.taxState == \"gross\" %}
                                {% set taxText = \"general.grossTaxInformation\"|trans|sw_sanitize %}
                            {% else %}
                                {% set taxText = \"general.netTaxInformation\"|trans|sw_sanitize %}
                            {% endif %}

                            <p class=\"product-detail-tax\">
                                {% block page_product_detail_tax_link %}
                                    <a class=\"product-detail-tax-link\"
                                       href=\"{{ path('frontend.cms.page',{ id: config('core.basicInformation.shippingPaymentInfoPage') }) }}\"
                                       title=\"{{ taxText }}\"
                                       data-toggle=\"modal\"
                                       data-url=\"{{ path('frontend.cms.page',{ id: config('core.basicInformation.shippingPaymentInfoPage') }) }}\">
                                        {{ taxText }}
                                    </a>
                                {% endblock %}
                            </p>
                        </div>
                    {% endblock %}

                    {% set remoteClickOptions = {
                        selector: \"#review-tab\",
                        scrollToElement: true
                    } %}

                    {% block page_product_detail_reviews %}
                        {% if page.product.ratingAverage > 0 and page.reviews.totalReviews > 0 and config('core.listing.showReview') %}
                            <div class=\"product-detail-reviews\">

                                {% sw_include '@Storefront/storefront/component/review/rating.html.twig' with {
                                    points: page.product.ratingAverage,
                                    style: 'text-primary'
                                } %}
                                <a data-toggle=\"tab\"
                                   class=\"product-detail-reviews-link\"
                                   data-offcanvas-tabs=\"true\"
                                   data-remote-click=\"true\"
                                   data-remote-click-options='{{ remoteClickOptions|json_encode }}'
                                   href=\"#review-tab-pane\"
                                   aria-controls=\"review-tab-pane\">
                                    {{ page.reviews.totalReviews }}
                                    {{ \"detail.reviewLinkText\"|trans({'%count%': page.reviews.totalReviews})|sw_sanitize }}
                                </a>
                            </div>
                        {% endif %}
                    {% endblock %}

                    {% block page_product_detail_delivery_informations %}
                        <div class=\"product-detail-delivery-information\">
                            {% sw_include '@Storefront/storefront/component/delivery-information.html.twig' %}
                        </div>
                    {% endblock %}
                {% endblock %}

                {% block page_product_detail_configurator_include %}
                    {% if page.product.parentId and page.configuratorSettings|length > 0 %}
                        <div class=\"product-detail-configurator-container\">
                            {% sw_include '@Storefront/storefront/page/product-detail/configurator.html.twig' %}
                        </div>
                    {% endif %}
                {% endblock %}

                {% block page_product_detail_buy_form %}
                    {% if page.product.active %}
                        <div class=\"product-detail-form-container\">
                            {% sw_include '@Storefront/storefront/page/product-detail/buy-widget-form.html.twig' %}
                        </div>
                    {% endif %}
                {% endblock %}
            </div>
        {% endblock %}

        {% if config('core.cart.wishlistEnabled') %}
            {% block page_product_detail_wishlist %}
                {% sw_include '@Storefront/storefront/component/product/card/wishlist.html.twig' with {
                    showText: true,
                    size: 'md',
                    productId: page.product.id
                } %}
            {% endblock %}
        {% endif %}

        {% block page_product_detail_ordernumber_container %}
            {% if page.product.productNumber %}
                <div class=\"product-detail-ordernumber-container\">
                    {% block page_product_detail_ordernumber_label %}
                        <span class=\"product-detail-ordernumber-label\">
                            {{ \"detail.productNumberLabel\"|trans|sw_sanitize }}
                        </span>
                    {% endblock %}

                    {% block page_product_detail_ordernumber %}
                        <meta itemprop=\"productID\"
                              content=\"{{ page.product.id }}\"/>
                        <span class=\"product-detail-ordernumber\"
                              itemprop=\"sku\">
                            {{ page.product.productNumber }}
                        </span>
                    {% endblock %}
                </div>
            {% endif %}
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/page/product-detail/buy-widget.html.twig", "/var/www/stage.joes-toolbox.de/vendor/shopware/storefront/Resources/views/storefront/page/product-detail/buy-widget.html.twig");
    }
}
