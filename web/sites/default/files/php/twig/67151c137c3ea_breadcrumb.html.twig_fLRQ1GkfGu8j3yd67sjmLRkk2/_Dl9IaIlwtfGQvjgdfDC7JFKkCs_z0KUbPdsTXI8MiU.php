<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/honey/templates/navigation/breadcrumb.html.twig */
class __TwigTemplate_00fafafb2ba5792db49e28adea04bb59 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 10
        if (($context["breadcrumb"] ?? null)) {
            // line 11
            yield "  <nav class=\"breadcrumb\" role=\"navigation\" aria-labelledby=\"system-breadcrumb\">
    <h2 id=\"system-breadcrumb\" class=\"visually-hidden\">";
            // line 12
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Breadcrumb"));
            yield "</h2>
    <ol class=\"honey-breadcrumbs\">
    ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumb"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 15
                yield "      <li class=\"honey-breadcrumbs__list-item\">
        ";
                // line 16
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 16)) {
                    // line 17
                    yield "          <a href=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
                    yield "\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
                    yield "</a>
        ";
                } else {
                    // line 19
                    yield "          ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
                    yield "
        ";
                }
                // line 21
                yield "        <svg class=\"honey-breadcrumbs__icon\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 32 29.734\">
          <path d=\"M31.761 19.313a.791.791 0 10-1.51.471 2.517 2.517 0 01-.867 2.986c-1.593 1.169-4.565 1.121-7.4-.119a11.856 11.856 0 01-1.723-.928c-.178-.115-.355-.237-.525-.362-1.848-1.355-2.951-3.037-2.951-4.5a2.354 2.354 0 011.03-1.98 3.608 3.608 0 01.447-.278c2.26-1.179 6.3-.438 9.2 1.686a.79124459.79124459 0 10.936-1.276 13.548 13.548 0 00-5.608-2.39 10.606 10.606 0 00-2.506-.142 4.842 4.842 0 00-1.492-6.194l1.493-5.282a.791.791 0 00-1.522-.43l-1.417 5.011a4.809 4.809 0 00-2.646-.014l-1.413-5a.7914054.7914054 0 00-1.523.431l1.483 5.244a4.849 4.849 0 00-1.547 6.235 10.615 10.615 0 00-2.5.143 13.547 13.547 0 00-5.6 2.389C1.345 16.666 0 18.825 0 20.791a3.96 3.96 0 001.677 3.256 6.819 6.819 0 004.049 1.151 12.069 12.069 0 004.088-.765 10.457 10.457 0 00.617 1.428c1.277 2.425 3.357 3.873 5.564 3.873s4.289-1.449 5.566-3.875a10.475 10.475 0 00.617-1.428 12.067 12.067 0 004.094.767 6.819 6.819 0 004.049-1.151 4.057 4.057 0 001.44-4.734zM17.6 21.626h-3.205A9.1 9.1 0 0016 19.591a9.09 9.09 0 001.6 2.035zm-3.075-14.3A3.219 3.219 0 0116 6.972a3.259 3.259 0 011.5 6.152 3.264 3.264 0 01-3 0 3.26 3.26 0 01.03-5.806zM10 22.654c-2.828 1.237-5.8 1.284-7.39.116a2.354 2.354 0 01-1.03-1.98c0-1.463 1.1-3.146 2.951-4.5a11.634 11.634 0 016.569-2.247 5.721 5.721 0 012.631.558 3.6 3.6 0 01.45.279 2.354 2.354 0 011.03 1.98c0 1.464-1.1 3.146-2.951 4.5-.178.131-.363.258-.548.377l-.022.014a11.906 11.906 0 01-1.69.903zm6 5.498a4.4 4.4 0 01-3.429-1.88h6.842A4.465 4.465 0 0116 28.152zm4.37-3.46h-8.75a9.165 9.165 0 01-.348-.887c.367-.183.726-.383 1.072-.6h7.309c.345.214.7.412 1.067.6a9.17 9.17 0 01-.35.887z\"/>
          <path d=\"M29.704 16.636c-.118-.142-.242-.286-.37-.428a1.11865991 1.11865991 0 00-1.66 1.5c.107.119.211.239.309.357a1.1175765 1.1175765 0 101.722-1.425z\"/>
        </svg>
      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            yield "    </ol>
  </nav>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["breadcrumb"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/honey/templates/navigation/breadcrumb.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  88 => 27,  77 => 21,  71 => 19,  63 => 17,  61 => 16,  58 => 15,  54 => 14,  49 => 12,  46 => 11,  44 => 10,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/honey/templates/navigation/breadcrumb.html.twig", "/var/www/html/web/themes/honey/templates/navigation/breadcrumb.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 10, "for" => 14);
        static $filters = array("t" => 12, "escape" => 17);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['t', 'escape'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
