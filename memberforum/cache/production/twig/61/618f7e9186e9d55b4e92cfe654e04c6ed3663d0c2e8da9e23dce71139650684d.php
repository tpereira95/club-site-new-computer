<?php

/* @paul999_mention/mention.html */
class __TwigTemplate_8c570a7059364f2975ff293916a3addc10967c5f2ae9cbe43f96248a75419ca6 extends Twig_Template
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
        if ((isset($context["UA_AJAX_MENTION_URL"]) ? $context["UA_AJAX_MENTION_URL"] : null)) {
            // line 2
            if ( !$this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "INCLUDED_TRIBUTEJS", array())) {
                // line 3
                $asset_file = "@paul999_mention/js/utils/tribute.min.js";
                $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
                if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                    $asset_path = $asset->get_path();                    $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                    if (!file_exists($local_file)) {
                        $local_file = $this->getEnvironment()->findTemplate($asset_path);
                        $asset->set_path($local_file, true);
                    }
                    $asset->add_assets_version('6');
                }
                $this->getEnvironment()->get_assets_bag()->add_script($asset);                // line 4
                $value = true;
                $context['definition']->set('INCLUDED_TRIBUTEJS', $value);
            }
            // line 6
            echo "<script>
    var U_AJAX_MENTION_URL = '";
            // line 7
            echo (isset($context["UA_AJAX_MENTION_URL"]) ? $context["UA_AJAX_MENTION_URL"] : null);
            echo "';
</script>
";
            // line 9
            $asset_file = "@paul999_mention/js/mention.js";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                }
                $asset->add_assets_version('6');
            }
            $this->getEnvironment()->get_assets_bag()->add_script($asset);        }
    }

    public function getTemplateName()
    {
        return "@paul999_mention/mention.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 9,  41 => 7,  38 => 6,  34 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@paul999_mention/mention.html", "");
    }
}
