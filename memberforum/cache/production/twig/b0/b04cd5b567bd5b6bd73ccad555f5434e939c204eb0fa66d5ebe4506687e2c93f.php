<?php

/* @gfksx_ThanksForPosts/memberlist_view_thanks.html */
class __TwigTemplate_2c71885645a60f7d229d2f5807ed239f7f70fb2cf431d3f0e4629340d50b4352 extends Twig_Template
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
        if ((isset($context["THANKS_PROFILELIST_VIEW"]) ? $context["THANKS_PROFILELIST_VIEW"] : null)) {
            // line 2
            echo "<div class=\"panel bg1 profile-thanks\">
\t<div class=\"row\">
\t\t<h3>";
            // line 4
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GRATITUDES");
            echo "</h3>
\t\t<div>
\t\t\t<dl>
\t\t\t\t<dt>
\t\t\t\t\t";
            // line 8
            if ((isset($context["S_MOD_THANKS"]) ? $context["S_MOD_THANKS"] : null)) {
                echo "<a href=\"";
                echo (isset($context["U_CLEAR_LIST_THANKS_GIVE"]) ? $context["U_CLEAR_LIST_THANKS_GIVE"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CLEAR_LIST_THANKS");
                echo "\" class=\"button button-icon-only\"><i aria-hidden=\"true\" class=\"icon fa-fw fa-recycle\"></i><span class=\"sr-only\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CLEAR_LIST_THANKS");
                echo "</span></a>";
            }
            // line 9
            echo "\t\t\t\t\t";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GIVEN");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " ";
            if (((isset($context["POSTER_GIVE_COUNT"]) ? $context["POSTER_GIVE_COUNT"] : null) && ((isset($context["POSTER_GIVE_COUNT"]) ? $context["POSTER_GIVE_COUNT"] : null) > 0))) {
                echo "<a href=\"";
                echo (isset($context["POSTER_GIVE_COUNT_LINK"]) ? $context["POSTER_GIVE_COUNT_LINK"] : null);
                echo "\">";
                echo (isset($context["POSTER_GIVE_COUNT"]) ? $context["POSTER_GIVE_COUNT"] : null);
                echo "</a>";
            } else {
                echo "0";
            }
            // line 10
            echo "\t\t\t\t</dt>
\t\t\t\t<dd><div class=\"list\">
    \t\t\t\t";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["THANKSLIST"]) ? $context["THANKSLIST"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["ITEM"]) {
                // line 13
                echo "\t\t\t\t\t\t<span>";
                echo $this->getAttribute($context["ITEM"], "user", array());
                echo " &#8592; <a href=\"";
                echo $this->getAttribute($context["ITEM"], "url", array());
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FOR_MESSAGE");
                echo "</a></span>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ITEM'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "\t\t\t\t\t";
            if ((isset($context["MORE_THANKS"]) ? $context["MORE_THANKS"] : null)) {
                echo "<span>";
                echo (isset($context["MORE_THANKS"]) ? $context["MORE_THANKS"] : null);
                echo "</span>";
            }
            // line 16
            echo "\t\t\t\t</div></dd>
\t\t\t</dl>
\t\t</div>
\t\t<br>
\t\t<div>
\t\t\t<dl>
\t\t\t\t<dt>
\t\t\t\t\t";
            // line 23
            if ((isset($context["S_MOD_THANKS"]) ? $context["S_MOD_THANKS"] : null)) {
                echo "<a href=\"";
                echo (isset($context["U_CLEAR_LIST_THANKS_RECEIVE"]) ? $context["U_CLEAR_LIST_THANKS_RECEIVE"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CLEAR_LIST_THANKS");
                echo "\" class=\"button button-icon-only\"><i aria-hidden=\"true\" class=\"icon fa-fw fa-recycle\"></i><span class=\"sr-only\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CLEAR_LIST_THANKS");
                echo "</span></a>";
            }
            // line 24
            echo "\t\t\t\t\t";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RECEIVED");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " ";
            if (((isset($context["POSTER_RECEIVE_COUNT"]) ? $context["POSTER_RECEIVE_COUNT"] : null) && ((isset($context["POSTER_RECEIVE_COUNT"]) ? $context["POSTER_RECEIVE_COUNT"] : null) > 0))) {
                echo "<a href=\"";
                echo (isset($context["POSTER_RECEIVE_COUNT_LINK"]) ? $context["POSTER_RECEIVE_COUNT_LINK"] : null);
                echo "\">";
                echo (isset($context["POSTER_RECEIVE_COUNT"]) ? $context["POSTER_RECEIVE_COUNT"] : null);
                echo "</a>";
            } else {
                echo "0";
            }
            // line 25
            echo "\t\t\t\t</dt>
\t\t\t\t<dd><div class=\"list\">
    \t\t\t\t";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["THANKEDLIST"]) ? $context["THANKEDLIST"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["ITEM"]) {
                // line 28
                echo "\t\t\t\t\t\t<span>";
                echo $this->getAttribute($context["ITEM"], "user", array());
                echo " &#8592; <a href=\"";
                echo $this->getAttribute($context["ITEM"], "url", array());
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FOR_MESSAGE");
                echo "</a></span>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ITEM'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "\t\t\t\t\t";
            if ((isset($context["MORE_THANKED"]) ? $context["MORE_THANKED"] : null)) {
                echo "<span>";
                echo (isset($context["MORE_THANKED"]) ? $context["MORE_THANKED"] : null);
                echo "</span>";
            }
            // line 31
            echo "\t\t\t\t</div></dd>
\t\t\t</dl>
\t\t</div>
\t</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@gfksx_ThanksForPosts/memberlist_view_thanks.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 31,  138 => 30,  125 => 28,  121 => 27,  117 => 25,  103 => 24,  93 => 23,  84 => 16,  77 => 15,  64 => 13,  60 => 12,  56 => 10,  42 => 9,  32 => 8,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gfksx_ThanksForPosts/memberlist_view_thanks.html", "");
    }
}
