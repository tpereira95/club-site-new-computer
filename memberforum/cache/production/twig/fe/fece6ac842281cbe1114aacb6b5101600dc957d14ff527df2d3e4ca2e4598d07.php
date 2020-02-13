<?php

/* @gfksx_ThanksForPosts/partials/star_rating.html */
class __TwigTemplate_7ebcf1c001aa8858db5987205d8b0ed464cd95f36b9614e1e6c749d2d8d7862f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((isset($context["STAR_RATING"]) ? $context["STAR_RATING"] : null)) {
            // line 2
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["STAR_RATING"]) ? $context["STAR_RATING"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["ACTUAL_RATING_STAR"]) {
                // line 3
                echo "\t\t<i aria-hidden=\"true\" class=\"icon icon-tiny fa-fw fa-";
                echo $context["ACTUAL_RATING_STAR"];
                echo "\"></i>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ACTUAL_RATING_STAR'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "@gfksx_ThanksForPosts/partials/star_rating.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gfksx_ThanksForPosts/partials/star_rating.html", "");
    }
}
