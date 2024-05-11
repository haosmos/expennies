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

/* dashboard.twig */
class __TwigTemplate_b37f759e6be7ee08f276bd755f1eead3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.twig", "dashboard.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 5
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("dashboard");
        echo "
";
    }

    // line 8
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 10
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("dashboard");
        echo "
";
    }

    // line 13
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Dashboard";
    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    <div class=\"dashboard\">
        <div class=\"top-container mb-4 row g-0 rounded-4\">
            <div class=\"col-8 border-end border-3\">
                <div class=\"row justify-content-between\">
                    <div class=\"col p-4\">Expense \$</div>
                    <div class=\"col p-4\">Income \$</div>
                    <div class=\"col p-4\">Net \$</div>
                </div>
                <div class=\"row\">
                    <div class=\"col p-4\">Line/Bar/Donut Graph</div>
                </div>
            </div>
            <div class=\"col p-4\">
                Latest Transactions
            </div>
        </div>
        <div class=\"categories-container row\">
            <div class=\"col\">
                <div class=\"category-card p-4 rounded-4\">Category 1</div>
            </div>
            <div class=\"col\">
                <div class=\"category-card p-4 rounded-4\">Category 2</div>
            </div>
            <div class=\"col\">
                <div class=\"category-card p-4 rounded-4\">Category 3</div>
            </div>
            <div class=\"col\">
                <div class=\"category-card p-4 rounded-4\">Category 4</div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "dashboard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 16,  86 => 15,  79 => 13,  73 => 10,  68 => 9,  64 => 8,  58 => 5,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dashboard.twig", "/var/www/resources/views/dashboard.twig");
    }
}
