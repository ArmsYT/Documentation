<?php
require_once(".././functions/functions.php");

$title = "RageUI V2";
require_once(".././functions/navbar.php");
?>

<p class="text-center font-bold text-white mb-2 mt-6 text-[1.7rem]">Coté Config</p>
<main id="config" class="grid grid-cols-3 gap-5 p-0 m-0 text-[0.9rem] text-[#567482] break-normal whitespace-pre bg-transparent b-0 mx-24" role="main">
            <pre class="bg-[#10141c] p-[0.8rem] mt-0 mb-[1rem] text-[#567482] text-wrap border-[0.3rem] border-solid border-[#10141c]"><code class="px-[2px] py-[4px] text-[0.8rem]"><span class="text-lime-400">fx_version</span> <span class="text-[#e3fa8c]">'adamant'</span>
<span class="text-lime-400">game</span> <span class="text-[#e3fa8c]">'gta5'</span>
<span class="text-lime-400">lua54</span> <span class="text-[#e3fa8c]">'false'</span>
<span class="text-lime-400">this_is_a_map</span> <span class="text-[#e3fa8c]">'false'</span>

<span class="text-lime-400">name</span> <span class="text-[#e3fa8c]">'Toto'</span>
<span class="text-lime-400">author</span> <span class="text-[#e3fa8c]">'Arms'</span>
<span class="text-lime-400">description</span> <span class="text-[#e3fa8c]">'Description'</span>
<span class="text-lime-400">version</span> <span class="text-[#e3fa8c]">'1.0'</span>

<span class="text-lime-400">client_scripts</span> <span class="text-[#d8d700]">{</span>
    <span class="text-[#e3fa8c]">"client/*.lua"</span><span class="text-white">,</span>
<span class="text-[#d8d700]">}</span>

<span class="text-lime-400">server_scripts</span> <span class="text-[#d8d700]">{</span>
    <span class="text-[#e3fa8c]">"server/*.lua"</span><span class="text-white">,</span>
<span class="text-[#d8d700]">}</span>

<span class="text-lime-400">shared_scripts</span> <span class="text-[#d8d700]">{</span>
    <span class="text-[#e3fa8c]">"shared/*.lua"</span><span class="text-white">,</span>
<span class="text-[#d8d700]">}</span>

<span class="text-lime-400">esgrow_scripts</span> <span class="text-[#d8d700]">{</span>
    <span class="text-[#e3fa8c]">"shared/*.lua"</span><span class="text-white">,</span>
    <span class="text-[#e3fa8c]">"client/*.lua"</span><span class="text-white">,</span>
    <span class="text-[#e3fa8c]">"server/*.lua"</span><span class="text-white">,</span>
    <span class="text-[#d8d700]">}</span></code></pre>

</main>

<p class="text-center font-bold text-white mb-2 mt-6 text-[1.7rem]">Coté Client</p>
<main id="clientside" class="grid grid-cols-3 gap-5 p-0 m-0 text-[0.9rem] text-[#567482] break-normal whitespace-pre bg-transparent b-0 mx-24" role="main">

<pre class="bg-[#10141c] p-[0.8rem] mt-0 mb-[1rem] text-[#567482] text-wrap border-[0.3rem] border-solid border-[#10141c]"><code class="px-[2px] py-[4px] text-[0.8rem]"><span class="text-white">Menu</span> <span class="text-[#c169c6]">=</span> <span class="text-white">RageUI.</span><span class="text-lime-400">CreateMenu</span><span class="text-[#efc810]">(</span><span class="text-[#f1fa8c]">'Titre'</span><span class="text-white">,</span> <span class="text-[#f1fa8c]">'Sous Titre'</span><span class="text-[#efc810]">)</span></code></pre>

<pre class="bg-[#10141c] p-[0.8rem] mt-0 mb-[1rem] text-[#567482] text-wrap border-[0.3rem] border-solid border-[#10141c]"><code class="px-[2px] py-[4px] text-[0.8rem]"><span class="text-white">SubMenu</span> <span class="text-[#c169c6]">=</span> <span class="text-white">RageUI.</span><span class="text-lime-400">CreateSubMenu</span><span class="text-[#efc810]">(</span><span class="text-white">Menu,</span><span class="text-[#f1fa8c]">'Titre'</span><span class="text-white">,</span> <span class="text-[#f1fa8c]">'Sous Titre'</span><span class="text-[#efc810]">)</span></code></pre>

<pre class="bg-[#10141c] p-[0.8rem] mt-0 mb-[1rem] text-[#567482] text-wrap border-[0.3rem] border-solid border-[#10141c]"><code class="px-[2px] py-[4px] text-[0.8rem]"><span class="text-white">RageUI.</span><span class="text-lime-400">IsVisible</span><span class="text-[#efc810]">(</span><span class="text-white">Menu, </span><span class="text-[#c169c6]">function</span><span class="text-[#129ff1]">()</span>
<span class="text-[#c169c6]">end</span><span class="text-[#efc810]">)</span></code></pre>

<pre class="bg-[#10141c] p-[0.8rem] mt-0 mb-[1rem] text-[#567482] text-wrap border-[0.3rem] border-solid border-[#10141c]"><code class="px-[2px] py-[4px] text-[0.8rem]"><span class="text-white">RageUI.</span><span class="text-lime-400">Button</span><span class="text-[#129ff1]">(</span><span class="text-[#f1fa8c]">"Text"</span><span class="text-white">,</span> <span class="text-[#f1fa8c]">"Description"</span><span class="text-white">,</span> <span class="text-[#efc810]">{</span><span class="text-white">RightLabel</span> <span class="text-[#c169c6]">=</span> <span class="text-[#f1fa8c]">"→→→"</span><span class="text-[#efc810]">}</span><span class="text-white">,</span> <span class="text-[#f0a941]">true</span><span class="text-white">,</span> <span class="text-[#efc810]">{</span>
    <span class="text-white">onSelected</span> <span class="text-[#c169c6]">= function</span><span class="text-[#129ff1]">()</span>
    <span class="text-[#c169c6]">end</span>
<span class="text-[#efc810]">}</span><span class="text-[#129ff1]">)</span></code></pre>

<pre class="bg-[#10141c] p-[0.8rem] mt-0 mb-[1rem] text-[#567482] text-wrap border-[0.3rem] border-solid border-[#10141c]"><code class="px-[2px] py-[4px] text-[0.8rem]"><span class="text-white">RageUI.</span><span class="text-lime-400">Separator</span><span class="text-[#efc810]">(</span><span class="text-[#f1fa8c]">'Text'</span><span class="text-[#efc810]">)</span></code></pre>

<pre class="bg-[#10141c] p-[0.8rem] mt-0 mb-[1rem] text-[#567482] text-wrap border-[0.3rem] border-solid border-[#10141c]"><code class="px-[2px] py-[4px] text-[0.8rem]"><span class="text-[#c169c6]">local</span> <span class="text-white">checkbox</span> <span class="text-[#c169c6]">=</span> <span class="text-[#f0a941]">false</span>

<span class="text-white">RageUI</span><span class="text-white">.</span><span class="text-white">Checkbox</span><span class="text-white">(</span><span class="text-[#f1fa8c]">"Checkbox"</span><span class="text-white">,</span> <span class="text-[#f0a941]">nil</span><span class="text-white">,</span> <span class="text-white">checkbox</span><span class="text-white">,</span> <span class="text-[#efc810]">{}</span><span class="text-white">,</span> <span class="text-[#efc810]">{</span>
    <span class="text-white">onChecked</span> <span class="text-[#c169c6]">= function()</span>
        <span class="text-white">checkbox</span> <span class="text-[#c169c6]">=</span> <span class="text-[#f0a941]">true</span>
    <span class="text-[#c169c6]">end</span><span class="text-white">,</span>
    <span class="text-white">onUnChecked</span> <span class="text-[#c169c6]">= function()</span>
        <span class="text-white">checkbox</span> <span class="text-[#c169c6]">=</span> <span class="text-[#f0a941]">false</span>
    <span class="text-[#c169c6]">end</span><span class="text-white">,</span>
    <span class="text-white">onSelected</span> <span class="text-[#c169c6]">= function</span><span class="text-[#129ff1]">(</span><span class="text-[#f0a941]">Index</span><span class="text-[#129ff1]">)</span>
        <span class="text-white">checkbox</span> <span class="text-[#c169c6]">=</span> <span class="text-white">index</span>
    <span class="text-[#c169c6]">end</span>
<span class="text-[#efc810]">}</span><span class="text-[#129ff1]">)</span></code></pre>
</code></pre>

<pre class="bg-[#10141c] p-[0.8rem] mt-0 mb-[1rem] text-[#567482] text-wrap border-[0.3rem] border-solid border-[#10141c]"><code class="px-[2px] py-[4px] text-[0.8rem]"><span class="text-[#c169c6]">local</span> <span class="text-white">list</span> <span class="text-[#c169c6]">=</span> <span class="text-[#efc810]">1</span>

<span class="text-white">RageUI</span><span class="text-white">.</span><span class="text-lime-400">List</span><span class="text-[#129ff1]">(</span><span class="text-[#f1fa8c]">"Gilet pare-balles"</span><span class="text-white">, </span><span class="text-[#efc810]">{</span><span class="text-[#f1fa8c]">"Petit"</span><span class="text-white">, </span><span class="text-[#f1fa8c]">"Moyen"</span><span class="text-white">, </span><span class="text-[#f1fa8c]">"Grand"</span><span class="text-[#efc810]">}</span><span class="text-white">, IndexList,</span> <span class="text-[#f0a941]">nil</span><span class="text-white">,</span><span class="text-[#efc810]">{}</span><span class="text-white">,</span> <span class="text-[#f0a941]">true</span><span class="text-white">, </span><span class="text-[#efc810]">{</span>
    <span class="text-white">onListChange</span> <span class="text-[#c169c6]">= function(</span><span class="text-[#f0a941]">Index</span><span class="text-[#c169c6]">)</span>
        <span class="text-white">list</span> <span class="text-[#c169c6]">=</span> <span class="text-white">Index</span>
    <span class="text-[#c169c6]">end</span><span class="text-white">,</span>
    <span class="text-white">onSelected</span> <span class="text-[#c169c6]">=</span> <span class="text-[#c169c6]">function(</span><span class="text-[#f0a941]">index</span><span class="text-[#c169c6]">)</span>
        <span class="text-white">print</span><span class="text-[#c169c6]">(</span><span class="text-white">index</span><span class="text-[#c169c6]">)</span>
    <span class="text-[#c169c6]">end</span>
<span class="text-[#efc810]">}</span><span class="text-[#129ff1]">)</span></code></pre>

<pre class="bg-[#10141c] p-[0.8rem] mt-0 mb-[1rem] text-[#567482] text-wrap border-[0.3rem] border-solid border-[#10141c]"><code class="px-[2px] py-[4px] text-[0.8rem]"><span class="text-[#c169c6]">local</span> <span class="text-white">progressmin</span> <span class="text-[#c169c6]">=</span> <span class="text-[#efc810]">0</span>
<span class="text-[#c169c6]">local</span> <span class="text-white">progressmax</span> <span class="text-[#c169c6]">=</span> <span class="text-[#efc810]">100</span>


<span class="text-white">RageUI.</span><span class="text-lime-400">Slider</span><span class="text-[#129ff1]">(</span><span class="text-[#f1fa8c]">'Slider'</span><span class="text-white">,</span> <span class="text-white">progressmin</span><span class="text-white">,</span> <span class="text-white">progressmax</span><span class="text-white">,</span> <span class="text-[#f0a941]">nil</span><span class="text-white">,</span> <span class="text-[#efc810]">50</span><span class="text-white">,</span> <span class="text-[#efc810]">{}</span><span class="text-white">,</span> <span class="text-[#f0a941]">true</span><span class="text-white">,</span> <span class="text-[#efc810]">{}</span><span class="text-[#129ff1]">)</span>
</code></pre>

<pre class="bg-[#10141c] p-[0.8rem] mt-0 mb-[1rem] text-[#567482] text-wrap border-[0.3rem] border-solid border-[#10141c]"><code class="px-[2px] py-[4px] text-[0.8rem]"><span class="text-[#c169c6]">local</span> <span class="text-white">sliderheritage</span> <span class="text-[#c169c6]">=</span> <span class="text-[#efc810]">1</span>

<span class="text-white">RageUI.</span><span class="text-lime-400">UISliderHeritage</span><span class="text-[#129ff1]">(</span><span class="text-[#f1fa8c]">'SliderHeritage'</span><span class="text-white">,</span> <span class="text-white">sliderheritage</span><span class="text-white">,</span> <span class="text-[#f0a941]">nil</span><span class="text-white">,</span> <span class="text-[#efc810]">{}</span><span class="text-white">,</span> <span class="text-[#efc810]">1</span><span class="text-[#129ff1]">)</span></code></pre>

<pre class="bg-[#10141c] p-[0.8rem] mt-0 mb-[1rem] text-[#567482] text-wrap border-[0.3rem] border-solid border-[#10141c]"><code class="px-[2px] py-[4px] text-[0.8rem]"><span class="text-white">RageUI.</span><span class="text-lime-400">BoutonPanel</span><span class="text-[#129ff1]">(</span><span class="text-[#f1fa8c]">'Gauche'</span><span class="text-white">,</span> <span class="text-[#f1fa8c]">'Droite'</span><span class="text-white">,</span> <span class="text-[#efc810]">1</span><span class="text-[#129ff1]">)</span></code></pre>

<pre class="bg-[#10141c] p-[0.8rem] mt-0 mb-[1rem] text-[#567482] text-wrap border-[0.3rem] border-solid border-[#10141c]"><code class="px-[2px] py-[4px] text-[0.8rem]"><span class="text-[#c169c6]">local</span> <span class="text-white">PanelIndex</span> <span class="text-[#c169c6]">=</span> <span class="text-[#efc810]">1</span>
<span class="text-[#c169c6]">local</span> <span class="text-white">minimalIndexColor</span> <span class="text-[#c169c6]">=</span> <span class="text-[#efc810]">1</span>
<span class="text-[#c169c6]">local</span> <span class="text-white">currentIndexColor</span> <span class="text-[#c169c6]">=</span> <span class="text-[#efc810]">1</span>

<span class="text-white">RageUI.</span><span class="text-lime-400">ColourPanel</span><span class="text-[#129ff1]">(</span><span class="text-[#f1fa8c]">"Couleur"</span><span class="text-white">,</span> <span class="text-white">RageUI</span><span class="text-white">.</span><span class="text-white">PanelColour</span><span class="text-white">.</span><span class="text-white">HairCut</span><span class="text-white">,</span> <span class="text-white">minimalIndexColor1</span><span class="text-white">,</span> <span class="text-white">currentIndexColor1</span><span class="text-white">,</span> <span class="text-[#efc810]">{</span>
    <span class="text-white">onColorChange</span> <span class="text-[#c169c6]">= function(</span><span class="text-[#f0a941]">MinimumIndex</span><span class="text-white">,</span> <span class="text-[#f0a941]">CurrentIndex</span><span class="text-[#c169c6]">)</span>
        <span class="text-white">minimalIndexColor</span> <span class="text-[#c169c6]">=</span> <span class="text-white">MinimumIndex</span>
        <span class="text-white">currentIndexColor</span> <span class="text-[#c169c6]">=</span> <span class="text-white">CurrentIndex</span>
    <span class="text-[#c169c6]">end</span><span class="text-white">,</span>
<span class="text-[#efc810]">}</span><span class="text-white">, PanelIndex</span><span class="text-white">,</span> <span class="text-[#efc810]">{}</span><span class="text-[#129ff1]">)</span></code></pre>
            </div>
        </div>

<pre class="bg-[#10141c] p-[0.8rem] mt-0 mb-[1rem] text-[#567482] text-wrap border-[0.3rem] border-solid border-[#10141c]"><code class="px-[2px] py-[4px] text-[0.8rem]"><span class="text-white">RageUI.</span><span class="text-lime-400">StatisticPanel</span><span class="text-[#129ff1]">(</span><span class="text-[#efc810]">0</span><span class="text-white">.</span><span class="text-[#efc810]">5</span><span class="text-white">,</span> <span class="text-[#f1fa8c]">'StatisticPanel'</span><span class="text-white">,</span> <span class="text-[#efc810]">1</span><span class="text-[#129ff1]">)</span></code></pre>

<pre class="bg-[#10141c] p-[0.8rem] mt-0 mb-[1rem] text-[#567482] text-wrap border-[0.3rem] border-solid border-[#10141c]"><code class="px-[2px] py-[4px] text-[0.8rem]"><span class="text-white">RageUI.</span><span class="text-lime-400">StatisticPanelAdvanced</span><span class="text-[#129ff1]">(</span><span class="text-[#f1fa8c]">'StatisticPanelAdvanced'</span><span class="text-white">,</span> <span class="text-[#efc810]">0</span><span class="text-white">.</span><span class="text-[#efc810]">5</span><span class="text-white">,</span> <span class="text-[#f0a941]">nil</span><span class="text-white">,</span> <span class="text-[#efc810]">0</span><span class="text-white">.</span><span class="text-[#efc810]">5</span><span class="text-white">,</span> <span class="text-[#f0a941]">nil</span><span class="text-white">,</span> <span class="text-[#f0a941]">nil</span><span class="text-white">,</span> <span class="text-[#efc810]">1</span><span class="text-[#129ff1]">)</span></code></pre>

<pre class="bg-[#10141c] p-[0.8rem] mt-0 mb-[1rem] text-[#567482] text-wrap border-[0.3rem] border-solid border-[#10141c]"><code class="px-[2px] py-[4px] text-[0.8rem]"><span class="text-white">Keys.</span><span class="text-lime-400">Register</span><span class="text-[#efc810]">(</span><span class="text-[#f1fa8c]">"E"</span><span class="text-white">,</span> <span class="text-[#f1fa8c]">"E"</span><span class="text-white">,</span> <span class="text-[#f1fa8c]">"Exemple"</span><span class="text-white">,</span> <span class="text-[#c169c6]">function()</span>
    <span class="text-white">print</span><span class="text-[#c169c6]">(</span><span class="text-[#f1fa8c]">"toto"</span><span class="text-[#c169c6]">)</span>
<span class="text-[#c169c6]">end</span><span class="text-[#efc810]">)</span>

<span class="text-lime-400">RegisterKeyMapping</span><span class="text-[#efc810]">(</span><span class="text-[#f1fa8c]">"Commande"</span><span class="text-white">,</span> <span class="text-[#f1fa8c]">"Description"</span><span class="text-white">,</span> <span class="text-[#f1fa8c]">"keyboard"</span><span class="text-white">,</span> <span class="text-[#f1fa8c]">"F16"</span><span class="text-[#efc810]">)</span>
</code></pre>

</main>

<p class="text-center font-bold text-white mb-2 mt-6 text-[1.7rem]">Example</p>
<main id="example" class="grid grid-cols-1 gap-5 p-0 m-0 text-[0.9rem] text-[#567482] break-normal whitespace-pre bg-transparent b-0 mx-auto" role="main">
<pre class="bg-[#10141c] p-[0.8rem] mt-0 mb-[1rem] text-[#567482] text-wrap border-[0.3rem] border-solid border-[#10141c]"><code class="px-[2px] py-[4px] text-[0.8rem]"><span class="text-white">Menu</span> <span class="text-[#c169c6]">=</span> <span class="text-white">RageUI.</span><span class="text-lime-400">CreateMenu</span><span class="text-[#efc810]">(</span><span class="text-[#f1fa8c]">'Titre'</span><span class="text-white">,</span> <span class="text-[#f1fa8c]">'Sous Titre'</span><span class="text-[#efc810]">)</span>
<span class="text-white">SubMenu</span> <span class="text-[#c169c6]">=</span> <span class="text-white">RageUI.</span><span class="text-lime-400">CreateSubMenu</span><span class="text-[#efc810]">(</span><span class="text-white">Menu,</span><span class="text-[#f1fa8c]">'Titre'</span><span class="text-white">,</span> <span class="text-[#f1fa8c]">'Sous Titre'</span><span class="text-[#efc810]">)</span>

<span class="text-white">RageUI.</span><span class="text-lime-400">IsVisible</span><span class="text-[#efc810]">(</span><span class="text-white">Menu, </span><span class="text-[#c169c6]">function</span><span class="text-[#129ff1]">()</span>
    <span class="text-white">RageUI.</span><span class="text-lime-400">Separator</span><span class="text-[#efc810]">(</span><span class="text-[#f1fa8c]">'↓ ~g~Véhicule Normaux ~s~↓'</span><span class="text-[#efc810]">)</span>
    <span class="text-white">RageUI.</span><span class="text-lime-400">Button</span><span class="text-[#129ff1]">(</span><span class="text-[#f1fa8c]">"Text"</span><span class="text-white">,</span> <span class="text-[#f1fa8c]">"Description"</span><span class="text-white">,</span> <span class="text-[#efc810]">{</span><span class="text-white">RightLabel</span> <span class="text-[#c169c6]">=</span> <span class="text-[#f1fa8c]">"→→→"</span><span class="text-[#efc810]">}</span><span class="text-white">,</span> <span class="text-[#f0a941]">true</span><span class="text-white">,</span> <span class="text-[#efc810]">{</span>
        <span class="text-white">onSelected</span> <span class="text-[#c169c6]">= function</span><span class="text-[#129ff1]">()</span>
        <span class="text-[#c169c6]">end</span>
    <span class="text-[#efc810]">}</span><span class="text-[#129ff1]">)</span>
    <span class="text-white">RageUI.</span><span class="text-lime-400">Separator</span><span class="text-[#efc810]">(</span><span class="text-[#f1fa8c]">'↓ ~g~Véhicules Moddées ~s~↓'</span><span class="text-[#efc810]">)</span>
    <span class="text-white">RageUI.</span><span class="text-lime-400">Button</span><span class="text-[#129ff1]">(</span><span class="text-[#f1fa8c]">"Text"</span><span class="text-white">,</span> <span class="text-[#f1fa8c]">"Description"</span><span class="text-white">,</span> <span class="text-[#efc810]">{</span><span class="text-white">RightLabel</span> <span class="text-[#c169c6]">=</span> <span class="text-[#f1fa8c]">"→→→"</span><span class="text-[#efc810]">}</span><span class="text-white">,</span> <span class="text-[#f0a941]">true</span><span class="text-white">,</span> <span class="text-[#efc810]">{</span>
        <span class="text-white">onSelected</span> <span class="text-[#c169c6]">= function</span><span class="text-[#129ff1]">()</span>
        <span class="text-[#c169c6]">end</span>
    <span class="text-[#efc810]">}</span><span class="text-[#129ff1]">)</span>
    <span class="text-white">RageUI.</span><span class="text-lime-400">Button</span><span class="text-[#129ff1]">(</span><span class="text-[#f1fa8c]">"Text"</span><span class="text-white">,</span> <span class="text-[#f1fa8c]">"Description"</span><span class="text-white">,</span> <span class="text-[#efc810]">{</span><span class="text-white">RightLabel</span> <span class="text-[#c169c6]">=</span> <span class="text-[#f1fa8c]">"→→→"</span><span class="text-[#efc810]">}</span><span class="text-white">,</span> <span class="text-[#f0a941]">true</span><span class="text-white">,</span> <span class="text-[#efc810]">{</span>
        <span class="text-white">onSelected</span> <span class="text-[#c169c6]">= function</span><span class="text-[#129ff1]">()</span>
        <span class="text-[#c169c6]">end</span>
    <span class="text-[#efc810]">}</span><span class="text-[#129ff1]">)</span>
<span class="text-[#c169c6]">end</span><span class="text-[#efc810]">)</span></code></pre>

</main>

<?php require_once(".././functions/footer.php"); ?>