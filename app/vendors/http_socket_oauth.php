


<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
        <title>http_socket_oauth.php at master from neilcrookes/http_socket_oauth - GitHub</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub" />
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub" />

    
    

    <meta content="authenticity_token" name="csrf-param" />
<meta content="cde7adf882aad0015de3614c8598a20514049b92" name="csrf-token" />

    <link href="https://a248.e.akamai.net/assets.github.com/stylesheets/bundle_github.css?f1574ff38ae6c7332dc59f4404ecf5eec4559a16" media="screen" rel="stylesheet" type="text/css" />
    

    <script src="https://a248.e.akamai.net/assets.github.com/javascripts/bundle_jquery.js?1cda878e9113acce74087d5ff1a5e1c49fb94eeb" type="text/javascript"></script>
    <script src="https://a248.e.akamai.net/assets.github.com/javascripts/bundle_github.js?2b35c96ca1b146fe22a6cae17037fe0954ca714c" type="text/javascript"></script>
    

      <link rel='permalink' href='/neilcrookes/http_socket_oauth/blob/d5adb51f309ca0ccbe4d189c286217dbf9610f81/http_socket_oauth.php'>
    

    <meta name="description" content="http_socket_oauth - Extension to CakePHP HttpSocket class to support OAuth" />
  <link href="https://github.com/neilcrookes/http_socket_oauth/commits/master.atom" rel="alternate" title="Recent Commits to http_socket_oauth:master" type="application/atom+xml" />

  </head>


  <body class="logged_out page-blob windows env-production ">
    


    

    <div id="main">
      <div id="header" class="true">
          <a class="logo" href="https://github.com">
            <img alt="github" class="default svg" height="45" src="https://a248.e.akamai.net/assets.github.com/images/modules/header/logov6.svg" />
            <img alt="github" class="default png" height="45" src="https://a248.e.akamai.net/assets.github.com/images/modules/header/logov6.png" />
            <!--[if (gt IE 8)|!(IE)]><!-->
            <img alt="github" class="hover svg" height="45" src="https://a248.e.akamai.net/assets.github.com/images/modules/header/logov6-hover.svg" />
            <img alt="github" class="hover png" height="45" src="https://a248.e.akamai.net/assets.github.com/images/modules/header/logov6-hover.png" />
            <!--<![endif]-->
          </a>

        <div class="topsearch">
    <!--
      make sure to use fully qualified URLs here since this nav
      is used on error pages on other domains
    -->
    <ul class="nav logged_out">
        <li class="pricing"><a href="https://github.com/plans">Signup and Pricing</a></li>
        <li class="explore"><a href="https://github.com/explore">Explore GitHub</a></li>
      <li class="features"><a href="https://github.com/features">Features</a></li>
        <li class="blog"><a href="https://github.com/blog">Blog</a></li>
      <li class="login"><a href="https://github.com/login?return_to=%2Fneilcrookes%2Fhttp_socket_oauth%2Fblob%2Fmaster%2Fhttp_socket_oauth.php">Login</a></li>
    </ul>
</div>

      </div>

      
            <div class="site">
      <div class="pagehead repohead vis-public   instapaper_ignore readability-menu">


      <div class="title-actions-bar">
        <h1>
          <a href="/neilcrookes">neilcrookes</a> /
          <strong><a href="/neilcrookes/http_socket_oauth" class="js-current-repository">http_socket_oauth</a></strong>
        </h1>
        



            <ul class="pagehead-actions">

        <li>
            <a href="/neilcrookes/http_socket_oauth/toggle_watch" class="minibutton btn-watch watch-button" onclick="var f = document.createElement('form'); f.style.display = 'none'; this.parentNode.appendChild(f); f.method = 'POST'; f.action = this.href;var s = document.createElement('input'); s.setAttribute('type', 'hidden'); s.setAttribute('name', 'authenticity_token'); s.setAttribute('value', 'cde7adf882aad0015de3614c8598a20514049b92'); f.appendChild(s);f.submit();return false;"><span><span class="icon"></span>Watch</span></a>
        </li>
            <li><a href="/neilcrookes/http_socket_oauth/fork" class="minibutton btn-fork fork-button" onclick="var f = document.createElement('form'); f.style.display = 'none'; this.parentNode.appendChild(f); f.method = 'POST'; f.action = this.href;var s = document.createElement('input'); s.setAttribute('type', 'hidden'); s.setAttribute('name', 'authenticity_token'); s.setAttribute('value', 'cde7adf882aad0015de3614c8598a20514049b92'); f.appendChild(s);f.submit();return false;"><span><span class="icon"></span>Fork</span></a></li>

      <li class="repostats">
        <ul class="repo-stats">
          <li class="watchers ">
            <a href="/neilcrookes/http_socket_oauth/watchers" title="Watchers" class="tooltipped downwards">
              34
            </a>
          </li>
          <li class="forks">
            <a href="/neilcrookes/http_socket_oauth/network" title="Forks" class="tooltipped downwards">
              11
            </a>
          </li>
        </ul>
      </li>
    </ul>

      </div>

        

  <ul class="tabs">
    <li><a href="/neilcrookes/http_socket_oauth" class="selected" highlight="repo_sourcerepo_downloadsrepo_commitsrepo_tagsrepo_branches">Code</a></li>
    <li><a href="/neilcrookes/http_socket_oauth/network" highlight="repo_networkrepo_fork_queue">Network</a>
    <li><a href="/neilcrookes/http_socket_oauth/pulls" highlight="repo_pulls">Pull Requests <span class='counter'>1</span></a></li>

      <li><a href="/neilcrookes/http_socket_oauth/issues" highlight="repo_issues">Issues <span class='counter'>3</span></a></li>


    <li><a href="/neilcrookes/http_socket_oauth/graphs" highlight="repo_graphsrepo_contributors">Stats &amp; Graphs</a></li>

  </ul>

  
<div class="frame frame-center tree-finder" style="display:none"
      data-tree-list-url="/neilcrookes/http_socket_oauth/tree-list/d5adb51f309ca0ccbe4d189c286217dbf9610f81"
      data-blob-url-prefix="/neilcrookes/http_socket_oauth/blob/d5adb51f309ca0ccbe4d189c286217dbf9610f81"
    >

  <div class="breadcrumb">
    <b><a href="/neilcrookes/http_socket_oauth">http_socket_oauth</a></b> /
    <input class="tree-finder-input" type="text" name="query" autocomplete="off" spellcheck="false">
  </div>

    <div class="octotip">
      <p>
        <a href="/neilcrookes/http_socket_oauth/dismiss-tree-finder-help" class="dismiss js-dismiss-tree-list-help" title="Hide this notice forever">Dismiss</a>
        <strong>Octotip:</strong> You've activated the <em>file finder</em>
        by pressing <span class="kbd">t</span> Start typing to filter the
        file list. Use <span class="kbd badmono">↑</span> and
        <span class="kbd badmono">↓</span> to navigate,
        <span class="kbd">enter</span> to view files.
      </p>
    </div>

  <table class="tree-browser" cellpadding="0" cellspacing="0">
    <tr class="js-header"><th>&nbsp;</th><th>name</th></tr>
    <tr class="js-no-results no-results" style="display: none">
      <th colspan="2">No matching files</th>
    </tr>
    <tbody class="js-results-list">
    </tbody>
  </table>
</div>

<div id="jump-to-line" style="display:none">
  <h2>Jump to Line</h2>
  <form>
    <input class="textfield" type="text">
    <div class="full-button">
      <button type="submit" class="classy">
        <span>Go</span>
      </button>
    </div>
  </form>
</div>


<div class="subnav-bar">

  <ul class="actions">
    
      <li class="switcher">

        <div class="context-menu-container js-menu-container">
          <span class="text">Current branch:</span>
          <a href="#"
             class="minibutton bigger switcher context-menu-button js-menu-target js-commitish-button btn-branch repo-tree"
             data-master-branch="master"
             data-ref="master">
            <span><span class="icon"></span>master</span>
          </a>

          <div class="context-pane commitish-context js-menu-content">
            <a href="javascript:;" class="close js-menu-close"></a>
            <div class="title">Switch Branches/Tags</div>
            <div class="body pane-selector commitish-selector js-filterable-commitishes">
              <div class="filterbar">
                <div class="placeholder-field js-placeholder-field">
                  <label class="placeholder" for="context-commitish-filter-field" data-placeholder-mode="sticky">Filter branches/tags</label>
                  <input type="text" id="context-commitish-filter-field" class="commitish-filter" />
                </div>

                <ul class="tabs">
                  <li><a href="#" data-filter="branches" class="selected">Branches</a></li>
                  <li><a href="#" data-filter="tags">Tags</a></li>
                </ul>
              </div>

                <div class="commitish-item branch-commitish selector-item">
                  <h4>
                      <a href="/neilcrookes/http_socket_oauth/blob/master/http_socket_oauth.php" data-name="master">master</a>
                  </h4>
                </div>


              <div class="no-results" style="display:none">Nothing to show</div>
            </div>
          </div><!-- /.commitish-context-context -->
        </div>

      </li>
  </ul>

  <ul class="subnav">
    <li><a href="/neilcrookes/http_socket_oauth" class="selected" highlight="repo_source">Files</a></li>
    <li><a href="/neilcrookes/http_socket_oauth/commits/master" highlight="repo_commits">Commits</a></li>
    <li><a href="/neilcrookes/http_socket_oauth/branches" class="" highlight="repo_branches">Branches <span class="counter">1</span></a></li>
    <li><a href="/neilcrookes/http_socket_oauth/tags" class="blank" highlight="repo_tags">Tags <span class="counter">0</span></a></li>
    <li><a href="/neilcrookes/http_socket_oauth/downloads" class="blank" highlight="repo_downloads">Downloads <span class="counter">0</span></a></li>
  </ul>

</div>

  
  
  


        

      </div><!-- /.pagehead -->

      




  
  <p class="last-commit">Latest commit to the <strong>master</strong> branch</p>

<div class="commit commit-tease js-details-container">
  <p class="commit-title ">
      <a href="/neilcrookes/http_socket_oauth"><a href="/neilcrookes/http_socket_oauth/commit/d5adb51f309ca0ccbe4d189c286217dbf9610f81" class="message">Exposing the Authorization Header logic as a public method for use with ...</a></a>
      <a href="javascript:;" class="minibutton expander-minibutton js-details-target"><span>…</span></a>
  </p>
    <div class="commit-desc"><pre>...delegated authentication as used by twitpic and yfrog APIs</pre></div>
  <div class="commit-meta">
    <a href="/neilcrookes/http_socket_oauth/commit/d5adb51f309ca0ccbe4d189c286217dbf9610f81" class="sha-block">commit <span class="sha">d5adb51f30</span></a>

    <div class="authorship">
      <img src="https://secure.gravatar.com/avatar/32378c4f76f261d63c3c3a941054e440?s=140&d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-140.png" alt="" width="20" height="20" class="gravatar" />
      <span class="author-name">Neil Crookes</span>
      authored <time class="js-relative-date" datetime="2010-07-02T16:27:42-07:00" title="2010-07-02 16:27:42">July 02, 2010</time>

    </div>
  </div>
</div>


  <div id="slider">

    <div class="breadcrumb" data-path="http_socket_oauth.php/">
      <b><a href="/neilcrookes/http_socket_oauth/tree/d5adb51f309ca0ccbe4d189c286217dbf9610f81" class="js-rewrite-sha">http_socket_oauth</a></b> / http_socket_oauth.php       <span style="display:none" id="clippy_3244" class="clippy-text">http_socket_oauth.php</span>
      
      <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"
              width="110"
              height="14"
              class="clippy"
              id="clippy" >
      <param name="movie" value="https://a248.e.akamai.net/assets.github.com/flash/clippy.swf?v5"/>
      <param name="allowScriptAccess" value="always" />
      <param name="quality" value="high" />
      <param name="scale" value="noscale" />
      <param NAME="FlashVars" value="id=clippy_3244&amp;copied=copied!&amp;copyto=copy to clipboard">
      <param name="bgcolor" value="#FFFFFF">
      <param name="wmode" value="opaque">
      <embed src="https://a248.e.akamai.net/assets.github.com/flash/clippy.swf?v5"
             width="110"
             height="14"
             name="clippy"
             quality="high"
             allowScriptAccess="always"
             type="application/x-shockwave-flash"
             pluginspage="http://www.macromedia.com/go/getflashplayer"
             FlashVars="id=clippy_3244&amp;copied=copied!&amp;copyto=copy to clipboard"
             bgcolor="#FFFFFF"
             wmode="opaque"
      />
      </object>
      

    </div>

    <div class="frames">
      <div class="frame frame-center" data-path="http_socket_oauth.php/" data-permalink-url="/neilcrookes/http_socket_oauth/blob/d5adb51f309ca0ccbe4d189c286217dbf9610f81/http_socket_oauth.php" data-title="http_socket_oauth.php at master from neilcrookes/http_socket_oauth - GitHub" data-type="blob">
          <ul class="big-actions">
            <li><a class="file-edit-link minibutton js-rewrite-sha" href="/neilcrookes/http_socket_oauth/edit/d5adb51f309ca0ccbe4d189c286217dbf9610f81/http_socket_oauth.php" data-method="post"><span>Edit this file</span></a></li>
          </ul>

        <div id="files">
          <div class="file">
            <div class="meta">
              <div class="info">
                <span class="icon"><img alt="Txt" height="16" src="https://a248.e.akamai.net/assets.github.com/images/icons/txt.png" width="16" /></span>
                <span class="mode" title="File Mode">100644</span>
                  <span>298 lines (264 sloc)</span>
                <span>12.287 kb</span>
              </div>
              <ul class="actions">
                <li><a href="/neilcrookes/http_socket_oauth/raw/master/http_socket_oauth.php" id="raw-url">raw</a></li>
                  <li><a href="/neilcrookes/http_socket_oauth/blame/master/http_socket_oauth.php">blame</a></li>
                <li><a href="/neilcrookes/http_socket_oauth/commits/master/http_socket_oauth.php">history</a></li>
              </ul>
            </div>
              <div class="data type-php">
      <table cellpadding="0" cellspacing="0" class="lines">
        <tr>
          <td>
            <pre class="line_numbers"><span id="L1" rel="#L1">1</span>
<span id="L2" rel="#L2">2</span>
<span id="L3" rel="#L3">3</span>
<span id="L4" rel="#L4">4</span>
<span id="L5" rel="#L5">5</span>
<span id="L6" rel="#L6">6</span>
<span id="L7" rel="#L7">7</span>
<span id="L8" rel="#L8">8</span>
<span id="L9" rel="#L9">9</span>
<span id="L10" rel="#L10">10</span>
<span id="L11" rel="#L11">11</span>
<span id="L12" rel="#L12">12</span>
<span id="L13" rel="#L13">13</span>
<span id="L14" rel="#L14">14</span>
<span id="L15" rel="#L15">15</span>
<span id="L16" rel="#L16">16</span>
<span id="L17" rel="#L17">17</span>
<span id="L18" rel="#L18">18</span>
<span id="L19" rel="#L19">19</span>
<span id="L20" rel="#L20">20</span>
<span id="L21" rel="#L21">21</span>
<span id="L22" rel="#L22">22</span>
<span id="L23" rel="#L23">23</span>
<span id="L24" rel="#L24">24</span>
<span id="L25" rel="#L25">25</span>
<span id="L26" rel="#L26">26</span>
<span id="L27" rel="#L27">27</span>
<span id="L28" rel="#L28">28</span>
<span id="L29" rel="#L29">29</span>
<span id="L30" rel="#L30">30</span>
<span id="L31" rel="#L31">31</span>
<span id="L32" rel="#L32">32</span>
<span id="L33" rel="#L33">33</span>
<span id="L34" rel="#L34">34</span>
<span id="L35" rel="#L35">35</span>
<span id="L36" rel="#L36">36</span>
<span id="L37" rel="#L37">37</span>
<span id="L38" rel="#L38">38</span>
<span id="L39" rel="#L39">39</span>
<span id="L40" rel="#L40">40</span>
<span id="L41" rel="#L41">41</span>
<span id="L42" rel="#L42">42</span>
<span id="L43" rel="#L43">43</span>
<span id="L44" rel="#L44">44</span>
<span id="L45" rel="#L45">45</span>
<span id="L46" rel="#L46">46</span>
<span id="L47" rel="#L47">47</span>
<span id="L48" rel="#L48">48</span>
<span id="L49" rel="#L49">49</span>
<span id="L50" rel="#L50">50</span>
<span id="L51" rel="#L51">51</span>
<span id="L52" rel="#L52">52</span>
<span id="L53" rel="#L53">53</span>
<span id="L54" rel="#L54">54</span>
<span id="L55" rel="#L55">55</span>
<span id="L56" rel="#L56">56</span>
<span id="L57" rel="#L57">57</span>
<span id="L58" rel="#L58">58</span>
<span id="L59" rel="#L59">59</span>
<span id="L60" rel="#L60">60</span>
<span id="L61" rel="#L61">61</span>
<span id="L62" rel="#L62">62</span>
<span id="L63" rel="#L63">63</span>
<span id="L64" rel="#L64">64</span>
<span id="L65" rel="#L65">65</span>
<span id="L66" rel="#L66">66</span>
<span id="L67" rel="#L67">67</span>
<span id="L68" rel="#L68">68</span>
<span id="L69" rel="#L69">69</span>
<span id="L70" rel="#L70">70</span>
<span id="L71" rel="#L71">71</span>
<span id="L72" rel="#L72">72</span>
<span id="L73" rel="#L73">73</span>
<span id="L74" rel="#L74">74</span>
<span id="L75" rel="#L75">75</span>
<span id="L76" rel="#L76">76</span>
<span id="L77" rel="#L77">77</span>
<span id="L78" rel="#L78">78</span>
<span id="L79" rel="#L79">79</span>
<span id="L80" rel="#L80">80</span>
<span id="L81" rel="#L81">81</span>
<span id="L82" rel="#L82">82</span>
<span id="L83" rel="#L83">83</span>
<span id="L84" rel="#L84">84</span>
<span id="L85" rel="#L85">85</span>
<span id="L86" rel="#L86">86</span>
<span id="L87" rel="#L87">87</span>
<span id="L88" rel="#L88">88</span>
<span id="L89" rel="#L89">89</span>
<span id="L90" rel="#L90">90</span>
<span id="L91" rel="#L91">91</span>
<span id="L92" rel="#L92">92</span>
<span id="L93" rel="#L93">93</span>
<span id="L94" rel="#L94">94</span>
<span id="L95" rel="#L95">95</span>
<span id="L96" rel="#L96">96</span>
<span id="L97" rel="#L97">97</span>
<span id="L98" rel="#L98">98</span>
<span id="L99" rel="#L99">99</span>
<span id="L100" rel="#L100">100</span>
<span id="L101" rel="#L101">101</span>
<span id="L102" rel="#L102">102</span>
<span id="L103" rel="#L103">103</span>
<span id="L104" rel="#L104">104</span>
<span id="L105" rel="#L105">105</span>
<span id="L106" rel="#L106">106</span>
<span id="L107" rel="#L107">107</span>
<span id="L108" rel="#L108">108</span>
<span id="L109" rel="#L109">109</span>
<span id="L110" rel="#L110">110</span>
<span id="L111" rel="#L111">111</span>
<span id="L112" rel="#L112">112</span>
<span id="L113" rel="#L113">113</span>
<span id="L114" rel="#L114">114</span>
<span id="L115" rel="#L115">115</span>
<span id="L116" rel="#L116">116</span>
<span id="L117" rel="#L117">117</span>
<span id="L118" rel="#L118">118</span>
<span id="L119" rel="#L119">119</span>
<span id="L120" rel="#L120">120</span>
<span id="L121" rel="#L121">121</span>
<span id="L122" rel="#L122">122</span>
<span id="L123" rel="#L123">123</span>
<span id="L124" rel="#L124">124</span>
<span id="L125" rel="#L125">125</span>
<span id="L126" rel="#L126">126</span>
<span id="L127" rel="#L127">127</span>
<span id="L128" rel="#L128">128</span>
<span id="L129" rel="#L129">129</span>
<span id="L130" rel="#L130">130</span>
<span id="L131" rel="#L131">131</span>
<span id="L132" rel="#L132">132</span>
<span id="L133" rel="#L133">133</span>
<span id="L134" rel="#L134">134</span>
<span id="L135" rel="#L135">135</span>
<span id="L136" rel="#L136">136</span>
<span id="L137" rel="#L137">137</span>
<span id="L138" rel="#L138">138</span>
<span id="L139" rel="#L139">139</span>
<span id="L140" rel="#L140">140</span>
<span id="L141" rel="#L141">141</span>
<span id="L142" rel="#L142">142</span>
<span id="L143" rel="#L143">143</span>
<span id="L144" rel="#L144">144</span>
<span id="L145" rel="#L145">145</span>
<span id="L146" rel="#L146">146</span>
<span id="L147" rel="#L147">147</span>
<span id="L148" rel="#L148">148</span>
<span id="L149" rel="#L149">149</span>
<span id="L150" rel="#L150">150</span>
<span id="L151" rel="#L151">151</span>
<span id="L152" rel="#L152">152</span>
<span id="L153" rel="#L153">153</span>
<span id="L154" rel="#L154">154</span>
<span id="L155" rel="#L155">155</span>
<span id="L156" rel="#L156">156</span>
<span id="L157" rel="#L157">157</span>
<span id="L158" rel="#L158">158</span>
<span id="L159" rel="#L159">159</span>
<span id="L160" rel="#L160">160</span>
<span id="L161" rel="#L161">161</span>
<span id="L162" rel="#L162">162</span>
<span id="L163" rel="#L163">163</span>
<span id="L164" rel="#L164">164</span>
<span id="L165" rel="#L165">165</span>
<span id="L166" rel="#L166">166</span>
<span id="L167" rel="#L167">167</span>
<span id="L168" rel="#L168">168</span>
<span id="L169" rel="#L169">169</span>
<span id="L170" rel="#L170">170</span>
<span id="L171" rel="#L171">171</span>
<span id="L172" rel="#L172">172</span>
<span id="L173" rel="#L173">173</span>
<span id="L174" rel="#L174">174</span>
<span id="L175" rel="#L175">175</span>
<span id="L176" rel="#L176">176</span>
<span id="L177" rel="#L177">177</span>
<span id="L178" rel="#L178">178</span>
<span id="L179" rel="#L179">179</span>
<span id="L180" rel="#L180">180</span>
<span id="L181" rel="#L181">181</span>
<span id="L182" rel="#L182">182</span>
<span id="L183" rel="#L183">183</span>
<span id="L184" rel="#L184">184</span>
<span id="L185" rel="#L185">185</span>
<span id="L186" rel="#L186">186</span>
<span id="L187" rel="#L187">187</span>
<span id="L188" rel="#L188">188</span>
<span id="L189" rel="#L189">189</span>
<span id="L190" rel="#L190">190</span>
<span id="L191" rel="#L191">191</span>
<span id="L192" rel="#L192">192</span>
<span id="L193" rel="#L193">193</span>
<span id="L194" rel="#L194">194</span>
<span id="L195" rel="#L195">195</span>
<span id="L196" rel="#L196">196</span>
<span id="L197" rel="#L197">197</span>
<span id="L198" rel="#L198">198</span>
<span id="L199" rel="#L199">199</span>
<span id="L200" rel="#L200">200</span>
<span id="L201" rel="#L201">201</span>
<span id="L202" rel="#L202">202</span>
<span id="L203" rel="#L203">203</span>
<span id="L204" rel="#L204">204</span>
<span id="L205" rel="#L205">205</span>
<span id="L206" rel="#L206">206</span>
<span id="L207" rel="#L207">207</span>
<span id="L208" rel="#L208">208</span>
<span id="L209" rel="#L209">209</span>
<span id="L210" rel="#L210">210</span>
<span id="L211" rel="#L211">211</span>
<span id="L212" rel="#L212">212</span>
<span id="L213" rel="#L213">213</span>
<span id="L214" rel="#L214">214</span>
<span id="L215" rel="#L215">215</span>
<span id="L216" rel="#L216">216</span>
<span id="L217" rel="#L217">217</span>
<span id="L218" rel="#L218">218</span>
<span id="L219" rel="#L219">219</span>
<span id="L220" rel="#L220">220</span>
<span id="L221" rel="#L221">221</span>
<span id="L222" rel="#L222">222</span>
<span id="L223" rel="#L223">223</span>
<span id="L224" rel="#L224">224</span>
<span id="L225" rel="#L225">225</span>
<span id="L226" rel="#L226">226</span>
<span id="L227" rel="#L227">227</span>
<span id="L228" rel="#L228">228</span>
<span id="L229" rel="#L229">229</span>
<span id="L230" rel="#L230">230</span>
<span id="L231" rel="#L231">231</span>
<span id="L232" rel="#L232">232</span>
<span id="L233" rel="#L233">233</span>
<span id="L234" rel="#L234">234</span>
<span id="L235" rel="#L235">235</span>
<span id="L236" rel="#L236">236</span>
<span id="L237" rel="#L237">237</span>
<span id="L238" rel="#L238">238</span>
<span id="L239" rel="#L239">239</span>
<span id="L240" rel="#L240">240</span>
<span id="L241" rel="#L241">241</span>
<span id="L242" rel="#L242">242</span>
<span id="L243" rel="#L243">243</span>
<span id="L244" rel="#L244">244</span>
<span id="L245" rel="#L245">245</span>
<span id="L246" rel="#L246">246</span>
<span id="L247" rel="#L247">247</span>
<span id="L248" rel="#L248">248</span>
<span id="L249" rel="#L249">249</span>
<span id="L250" rel="#L250">250</span>
<span id="L251" rel="#L251">251</span>
<span id="L252" rel="#L252">252</span>
<span id="L253" rel="#L253">253</span>
<span id="L254" rel="#L254">254</span>
<span id="L255" rel="#L255">255</span>
<span id="L256" rel="#L256">256</span>
<span id="L257" rel="#L257">257</span>
<span id="L258" rel="#L258">258</span>
<span id="L259" rel="#L259">259</span>
<span id="L260" rel="#L260">260</span>
<span id="L261" rel="#L261">261</span>
<span id="L262" rel="#L262">262</span>
<span id="L263" rel="#L263">263</span>
<span id="L264" rel="#L264">264</span>
<span id="L265" rel="#L265">265</span>
<span id="L266" rel="#L266">266</span>
<span id="L267" rel="#L267">267</span>
<span id="L268" rel="#L268">268</span>
<span id="L269" rel="#L269">269</span>
<span id="L270" rel="#L270">270</span>
<span id="L271" rel="#L271">271</span>
<span id="L272" rel="#L272">272</span>
<span id="L273" rel="#L273">273</span>
<span id="L274" rel="#L274">274</span>
<span id="L275" rel="#L275">275</span>
<span id="L276" rel="#L276">276</span>
<span id="L277" rel="#L277">277</span>
<span id="L278" rel="#L278">278</span>
<span id="L279" rel="#L279">279</span>
<span id="L280" rel="#L280">280</span>
<span id="L281" rel="#L281">281</span>
<span id="L282" rel="#L282">282</span>
<span id="L283" rel="#L283">283</span>
<span id="L284" rel="#L284">284</span>
<span id="L285" rel="#L285">285</span>
<span id="L286" rel="#L286">286</span>
<span id="L287" rel="#L287">287</span>
<span id="L288" rel="#L288">288</span>
<span id="L289" rel="#L289">289</span>
<span id="L290" rel="#L290">290</span>
<span id="L291" rel="#L291">291</span>
<span id="L292" rel="#L292">292</span>
<span id="L293" rel="#L293">293</span>
<span id="L294" rel="#L294">294</span>
<span id="L295" rel="#L295">295</span>
<span id="L296" rel="#L296">296</span>
<span id="L297" rel="#L297">297</span>
<span id="L298" rel="#L298">298</span>
</pre>
          </td>
          <td width="100%">
                <div class="highlight"><pre><div class='line' id='LC1'><span class="cp">&lt;?php</span></div><div class='line' id='LC2'><span class="nx">App</span><span class="o">::</span><span class="na">import</span><span class="p">(</span><span class="s1">&#39;Core&#39;</span><span class="p">,</span> <span class="s1">&#39;HttpSocket&#39;</span><span class="p">);</span></div><div class='line' id='LC3'><br/></div><div class='line' id='LC4'><span class="sd">/**</span></div><div class='line' id='LC5'><span class="sd"> * Extension to CakePHP core HttpSocket class that overrides the request method</span></div><div class='line' id='LC6'><span class="sd"> * and intercepts requests whose $request[&#39;auth&#39;][&#39;method&#39;] param is &#39;OAuth&#39;.</span></div><div class='line' id='LC7'><span class="sd"> *</span></div><div class='line' id='LC8'><span class="sd"> * The correct OAuth Authorization header is determined from the request params</span></div><div class='line' id='LC9'><span class="sd"> * and then set in the $request[&#39;header&#39;][&#39;Authorization&#39;] param of the request</span></div><div class='line' id='LC10'><span class="sd"> * array before passing it back to HttpSocket::request() to send the request and</span></div><div class='line' id='LC11'><span class="sd"> * parse the response.</span></div><div class='line' id='LC12'><span class="sd"> *</span></div><div class='line' id='LC13'><span class="sd"> * So to trigger OAuth, add $request[&#39;auth&#39;][&#39;method&#39;] = &#39;OAuth&#39; to your</span></div><div class='line' id='LC14'><span class="sd"> * request. In addition, you&#39;ll need to add your consumer key in the</span></div><div class='line' id='LC15'><span class="sd"> * $request[&#39;auth&#39;][&#39;oauth_consumer_key&#39;] and your consumer secret in the</span></div><div class='line' id='LC16'><span class="sd"> * $request[&#39;auth&#39;][&#39;oauth_consumer_secret&#39;] param. These are given to you by</span></div><div class='line' id='LC17'><span class="sd"> * the OAuth provider. And once you have them, $request[&#39;auth&#39;][&#39;oauth_token&#39;]</span></div><div class='line' id='LC18'><span class="sd"> * and $request[&#39;auth&#39;][&#39;oauth_token_secret&#39;] params. Your OAuth provider may</span></div><div class='line' id='LC19'><span class="sd"> * require you to send additional params too. Include them in the</span></div><div class='line' id='LC20'><span class="sd"> * $request[&#39;auth&#39;] array and they&#39;ll be passed on in the Authorization header</span></div><div class='line' id='LC21'><span class="sd"> * and considered when signing the request.</span></div><div class='line' id='LC22'><span class="sd"> *</span></div><div class='line' id='LC23'><span class="sd"> * @author Neil Crookes &lt;neil@neilcrookes.com&gt;</span></div><div class='line' id='LC24'><span class="sd"> * @link http://www.neilcrookes.com</span></div><div class='line' id='LC25'><span class="sd"> * @copyright (c) 2010 Neil Crookes</span></div><div class='line' id='LC26'><span class="sd"> * @license MIT License - http://www.opensource.org/licenses/mit-license.php</span></div><div class='line' id='LC27'><span class="sd"> */</span></div><div class='line' id='LC28'><span class="k">class</span> <span class="nc">HttpSocketOauth</span> <span class="k">extends</span> <span class="nx">HttpSocket</span> <span class="p">{</span></div><div class='line' id='LC29'><br/></div><div class='line' id='LC30'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC31'><span class="sd">   * Default OAuth parameters. These get merged into the $request[&#39;auth&#39;] param.</span></div><div class='line' id='LC32'><span class="sd">   *</span></div><div class='line' id='LC33'><span class="sd">   * @var array</span></div><div class='line' id='LC34'><span class="sd">   */</span></div><div class='line' id='LC35'>	<span class="k">var</span> <span class="nv">$defaults</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span></div><div class='line' id='LC36'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;oauth_version&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;1.0&#39;</span><span class="p">,</span></div><div class='line' id='LC37'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;oauth_signature_method&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;HMAC-SHA1&#39;</span><span class="p">,</span></div><div class='line' id='LC38'>&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC39'><br/></div><div class='line' id='LC40'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC41'><span class="sd">   * Overrides HttpSocket::request() to handle cases where</span></div><div class='line' id='LC42'><span class="sd">   * $request[&#39;auth&#39;][&#39;method&#39;] is &#39;OAuth&#39;.</span></div><div class='line' id='LC43'><span class="sd">   *</span></div><div class='line' id='LC44'><span class="sd">   * @param array $request As required by HttpSocket::request(). NOTE ONLY</span></div><div class='line' id='LC45'><span class="sd">   *   THE ARRAY TYPE OF REQUEST IS SUPPORTED</span></div><div class='line' id='LC46'><span class="sd">   * @return array</span></div><div class='line' id='LC47'><span class="sd">   */</span></div><div class='line' id='LC48'>&nbsp;&nbsp;<span class="k">function</span> <span class="nf">request</span><span class="p">(</span><span class="nv">$request</span> <span class="o">=</span> <span class="k">array</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC49'><br/></div><div class='line' id='LC50'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// If the request does not need OAuth Authorization header, let the parent</span></div><div class='line' id='LC51'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// deal with it.</span></div><div class='line' id='LC52'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$request</span><span class="p">[</span><span class="s1">&#39;auth&#39;</span><span class="p">][</span><span class="s1">&#39;method&#39;</span><span class="p">])</span> <span class="o">||</span> <span class="nv">$request</span><span class="p">[</span><span class="s1">&#39;auth&#39;</span><span class="p">][</span><span class="s1">&#39;method&#39;</span><span class="p">]</span> <span class="o">!=</span> <span class="s1">&#39;OAuth&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC53'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">parent</span><span class="o">::</span><span class="na">request</span><span class="p">(</span><span class="nv">$request</span><span class="p">);</span></div><div class='line' id='LC54'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC55'><br/></div><div class='line' id='LC56'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Generate the OAuth Authorization Header content for this request from the</span></div><div class='line' id='LC57'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// request data and add it into the request&#39;s Authorization Header. Note, we</span></div><div class='line' id='LC58'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// don&#39;t just add the header directly in the request variable and return the</span></div><div class='line' id='LC59'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// whole thing from the authorizationHeader() method because in some cases</span></div><div class='line' id='LC60'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// we may not want the authorization header content in the request&#39;s</span></div><div class='line' id='LC61'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// authorization header, for example, OAuth Echo as used by Twitpic and</span></div><div class='line' id='LC62'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Twitter includes an Authorization Header as required by twitter&#39;s verify</span></div><div class='line' id='LC63'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// credentials API in the X-Verify-Credentials-Authorization header.</span></div><div class='line' id='LC64'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$request</span><span class="p">[</span><span class="s1">&#39;header&#39;</span><span class="p">][</span><span class="s1">&#39;Authorization&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">authorizationHeader</span><span class="p">(</span><span class="nv">$request</span><span class="p">);</span></div><div class='line' id='LC65'><br/></div><div class='line' id='LC66'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Now the Authorization header is built, fire the request off to the parent</span></div><div class='line' id='LC67'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// HttpSocket class request method that we intercepted earlier.</span></div><div class='line' id='LC68'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">parent</span><span class="o">::</span><span class="na">request</span><span class="p">(</span><span class="nv">$request</span><span class="p">);</span></div><div class='line' id='LC69'><br/></div><div class='line' id='LC70'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC71'><br/></div><div class='line' id='LC72'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC73'><span class="sd">   * Returns the OAuth Authorization Header string for a given request array.</span></div><div class='line' id='LC74'><span class="sd">   *</span></div><div class='line' id='LC75'><span class="sd">   * This method is called by request but can also be called directly, which is</span></div><div class='line' id='LC76'><span class="sd">   * useful if you need to get the OAuth Authorization Header string, such as</span></div><div class='line' id='LC77'><span class="sd">   * when integrating with a service that uses OAuth Echo (Authorization</span></div><div class='line' id='LC78'><span class="sd">   * Delegation) e.g. Twitpic. In this case you send a normal unauthenticated</span></div><div class='line' id='LC79'><span class="sd">   * request to the service e.g. Twitpic along with 2 extra headers:</span></div><div class='line' id='LC80'><span class="sd">   * - X-Auth-Service-Provider - effectively, this is the realm that identity</span></div><div class='line' id='LC81'><span class="sd">   *   delegation should be sent to - in the case of Twitter, just set this to</span></div><div class='line' id='LC82'><span class="sd">   *   https://api.twitter.com/1/account/verify_credentials.json;</span></div><div class='line' id='LC83'><span class="sd">   * - X-Verify-Credentials-Authorization - Consumer should create all the OAuth</span></div><div class='line' id='LC84'><span class="sd">   *   parameters necessary so it could call</span></div><div class='line' id='LC85'><span class="sd">   *   https://api.twitter.com/1/account/verify_credentials.json using OAuth in</span></div><div class='line' id='LC86'><span class="sd">   *   the HTTP header (e.g. it should look like OAuth oauth_consumer_key=&quot;...&quot;,</span></div><div class='line' id='LC87'><span class="sd">   *   oauth_token=&quot;...&quot;, oauth_signature_method=&quot;...&quot;, oauth_signature=&quot;...&quot;,</span></div><div class='line' id='LC88'><span class="sd">   *   oauth_timestamp=&quot;...&quot;, oauth_nonce=&quot;...&quot;, oauth_version=&quot;...&quot;.</span></div><div class='line' id='LC89'><span class="sd">   * </span></div><div class='line' id='LC90'><span class="sd">   * @param array $request As required by HttpSocket::request(). NOTE ONLY</span></div><div class='line' id='LC91'><span class="sd">   *   THE ARRAY TYPE OF REQUEST IS SUPPORTED</span></div><div class='line' id='LC92'><span class="sd">   * @return String</span></div><div class='line' id='LC93'><span class="sd">   */</span></div><div class='line' id='LC94'>&nbsp;&nbsp;<span class="k">function</span> <span class="nf">authorizationHeader</span><span class="p">(</span><span class="nv">$request</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC95'><br/></div><div class='line' id='LC96'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$request</span><span class="p">[</span><span class="s1">&#39;auth&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nb">array_merge</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">defaults</span><span class="p">,</span> <span class="nv">$request</span><span class="p">[</span><span class="s1">&#39;auth&#39;</span><span class="p">]);</span></div><div class='line' id='LC97'><br/></div><div class='line' id='LC98'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Nonce, or number used once is used to distinguish between different</span></div><div class='line' id='LC99'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// requests to the OAuth provider</span></div><div class='line' id='LC100'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$request</span><span class="p">[</span><span class="s1">&#39;auth&#39;</span><span class="p">][</span><span class="s1">&#39;oauth_nonce&#39;</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC101'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$request</span><span class="p">[</span><span class="s1">&#39;auth&#39;</span><span class="p">][</span><span class="s1">&#39;oauth_nonce&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nb">md5</span><span class="p">(</span><span class="nb">uniqid</span><span class="p">(</span><span class="nx">rand</span><span class="p">(),</span> <span class="k">true</span><span class="p">));</span></div><div class='line' id='LC102'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC103'><br/></div><div class='line' id='LC104'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$request</span><span class="p">[</span><span class="s1">&#39;auth&#39;</span><span class="p">][</span><span class="s1">&#39;oauth_timestamp&#39;</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC105'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$request</span><span class="p">[</span><span class="s1">&#39;auth&#39;</span><span class="p">][</span><span class="s1">&#39;oauth_timestamp&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nb">time</span><span class="p">();</span></div><div class='line' id='LC106'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC107'><br/></div><div class='line' id='LC108'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Now starts the process of signing the request. The signature is a hash of</span></div><div class='line' id='LC109'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// a signature base string with the secret keys. The signature base string</span></div><div class='line' id='LC110'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// is made up of the request http verb, the request uri and the request</span></div><div class='line' id='LC111'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// params, and the secret keys are the consumer secret (for your</span></div><div class='line' id='LC112'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// application) and the access token secret generated for the user by the</span></div><div class='line' id='LC113'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// provider, e.g. twitter, when the user authorizes your app to access their</span></div><div class='line' id='LC114'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// details.</span></div><div class='line' id='LC115'><br/></div><div class='line' id='LC116'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Building the request uri, note we don&#39;t include the query string or</span></div><div class='line' id='LC117'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// fragment. Standard ports must not be included but non standard ones must.</span></div><div class='line' id='LC118'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$uriFormat</span> <span class="o">=</span> <span class="s1">&#39;%scheme://%host&#39;</span><span class="p">;</span></div><div class='line' id='LC119'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$request</span><span class="p">[</span><span class="s1">&#39;uri&#39;</span><span class="p">][</span><span class="s1">&#39;port&#39;</span><span class="p">])</span> <span class="o">&amp;&amp;</span> <span class="o">!</span><span class="nb">in_array</span><span class="p">(</span><span class="nv">$request</span><span class="p">[</span><span class="s1">&#39;uri&#39;</span><span class="p">][</span><span class="s1">&#39;port&#39;</span><span class="p">],</span> <span class="k">array</span><span class="p">(</span><span class="mi">80</span><span class="p">,</span> <span class="mi">443</span><span class="p">)))</span> <span class="p">{</span></div><div class='line' id='LC120'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$uriFormat</span> <span class="o">.=</span> <span class="s1">&#39;:&#39;</span> <span class="o">.</span> <span class="nv">$request</span><span class="p">[</span><span class="s1">&#39;uri&#39;</span><span class="p">][</span><span class="s1">&#39;port&#39;</span><span class="p">];</span></div><div class='line' id='LC121'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC122'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$uriFormat</span> <span class="o">.=</span> <span class="s1">&#39;/%path&#39;</span><span class="p">;</span></div><div class='line' id='LC123'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$requestUrl</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">_buildUri</span><span class="p">(</span><span class="nv">$request</span><span class="p">[</span><span class="s1">&#39;uri&#39;</span><span class="p">],</span> <span class="nv">$uriFormat</span><span class="p">);</span></div><div class='line' id='LC124'><br/></div><div class='line' id='LC125'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// OAuth reference states that the request params, i.e. oauth_ params, body</span></div><div class='line' id='LC126'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// params and query string params need to be normalised, i.e. combined in a</span></div><div class='line' id='LC127'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// single string, separated by &#39;&amp;&#39; in the format name=value. But they also</span></div><div class='line' id='LC128'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// need to be sorted by key, then by value. You can&#39;t just merge the auth,</span></div><div class='line' id='LC129'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// body and query arrays together then do a ksort because there may be</span></div><div class='line' id='LC130'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// parameters with the same name. Instead we&#39;ve got to get them into an</span></div><div class='line' id='LC131'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// array of array(&#39;name&#39; =&gt; &#39;&lt;name&gt;&#39;, &#39;value&#39; =&gt; &#39;&lt;value&gt;&#39;) elements, then</span></div><div class='line' id='LC132'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// sort those elements.</span></div><div class='line' id='LC133'><br/></div><div class='line' id='LC134'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Let&#39;s start with the auth params - however, we shouldn&#39;t include the auth</span></div><div class='line' id='LC135'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// method (OAuth), and OAuth reference says not to include the realm or the</span></div><div class='line' id='LC136'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// consumer or token secrets</span></div><div class='line' id='LC137'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$requestParams</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assocToNumericNameValue</span><span class="p">(</span><span class="nb">array_diff_key</span><span class="p">(</span></div><div class='line' id='LC138'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$request</span><span class="p">[</span><span class="s1">&#39;auth&#39;</span><span class="p">],</span></div><div class='line' id='LC139'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">array_flip</span><span class="p">(</span><span class="k">array</span><span class="p">(</span><span class="s1">&#39;realm&#39;</span><span class="p">,</span> <span class="s1">&#39;method&#39;</span><span class="p">,</span> <span class="s1">&#39;oauth_consumer_secret&#39;</span><span class="p">,</span> <span class="s1">&#39;oauth_token_secret&#39;</span><span class="p">))</span></div><div class='line' id='LC140'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">));</span></div><div class='line' id='LC141'><br/></div><div class='line' id='LC142'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Next add the body params if there are any and the content type header is</span></div><div class='line' id='LC143'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// not set, or it&#39;s application/x-www-form-urlencoded</span></div><div class='line' id='LC144'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$request</span><span class="p">[</span><span class="s1">&#39;body&#39;</span><span class="p">])</span> <span class="o">&amp;&amp;</span> <span class="p">(</span><span class="o">!</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$request</span><span class="p">[</span><span class="s1">&#39;header&#39;</span><span class="p">][</span><span class="s1">&#39;Content-Type&#39;</span><span class="p">])</span> <span class="o">||</span> <span class="nb">stristr</span><span class="p">(</span><span class="nv">$request</span><span class="p">[</span><span class="s1">&#39;header&#39;</span><span class="p">][</span><span class="s1">&#39;Content-Type&#39;</span><span class="p">],</span> <span class="s1">&#39;application/x-www-form-urlencoded&#39;</span><span class="p">)))</span> <span class="p">{</span></div><div class='line' id='LC145'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$requestParams</span> <span class="o">=</span> <span class="nb">array_merge</span><span class="p">(</span><span class="nv">$requestParams</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assocToNumericNameValue</span><span class="p">(</span><span class="nv">$request</span><span class="p">[</span><span class="s1">&#39;body&#39;</span><span class="p">]));</span></div><div class='line' id='LC146'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC147'><br/></div><div class='line' id='LC148'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Finally the query params</span></div><div class='line' id='LC149'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$request</span><span class="p">[</span><span class="s1">&#39;uri&#39;</span><span class="p">][</span><span class="s1">&#39;query&#39;</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC150'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$requestParams</span> <span class="o">=</span> <span class="nb">array_merge</span><span class="p">(</span><span class="nv">$requestParams</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assocToNumericNameValue</span><span class="p">(</span><span class="nv">$request</span><span class="p">[</span><span class="s1">&#39;uri&#39;</span><span class="p">][</span><span class="s1">&#39;query&#39;</span><span class="p">]));</span></div><div class='line' id='LC151'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC152'><br/></div><div class='line' id='LC153'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Now we can sort them by name then value</span></div><div class='line' id='LC154'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">usort</span><span class="p">(</span><span class="nv">$requestParams</span><span class="p">,</span> <span class="k">array</span><span class="p">(</span><span class="nv">$this</span><span class="p">,</span> <span class="s1">&#39;sortByNameThenByValue&#39;</span><span class="p">));</span></div><div class='line' id='LC155'><br/></div><div class='line' id='LC156'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Now we concatenate them together in name=value pairs separated by &amp;</span></div><div class='line' id='LC157'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$normalisedRequestParams</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC158'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">foreach</span> <span class="p">(</span><span class="nv">$requestParams</span> <span class="k">as</span> <span class="nv">$k</span> <span class="o">=&gt;</span> <span class="nv">$requestParam</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC159'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$k</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC160'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$normalisedRequestParams</span> <span class="o">.=</span> <span class="s1">&#39;&amp;&#39;</span><span class="p">;</span></div><div class='line' id='LC161'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC162'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$normalisedRequestParams</span> <span class="o">.=</span> <span class="nv">$requestParam</span><span class="p">[</span><span class="s1">&#39;name&#39;</span><span class="p">]</span> <span class="o">.</span> <span class="s1">&#39;=&#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">parameterEncode</span><span class="p">(</span><span class="nv">$requestParam</span><span class="p">[</span><span class="s1">&#39;value&#39;</span><span class="p">]);</span></div><div class='line' id='LC163'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC164'><br/></div><div class='line' id='LC165'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// The signature base string consists of the request method (uppercased) and</span></div><div class='line' id='LC166'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// concatenated with the request URL and normalised request parameters</span></div><div class='line' id='LC167'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// string, both encoded, and separated by &amp;</span></div><div class='line' id='LC168'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$signatureBaseString</span> <span class="o">=</span> <span class="nx">strtoupper</span><span class="p">(</span><span class="nv">$request</span><span class="p">[</span><span class="s1">&#39;method&#39;</span><span class="p">])</span> <span class="o">.</span> <span class="s1">&#39;&amp;&#39;</span></div><div class='line' id='LC169'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">parameterEncode</span><span class="p">(</span><span class="nv">$requestUrl</span><span class="p">)</span> <span class="o">.</span> <span class="s1">&#39;&amp;&#39;</span></div><div class='line' id='LC170'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">parameterEncode</span><span class="p">(</span><span class="nv">$normalisedRequestParams</span><span class="p">);</span></div><div class='line' id='LC171'><br/></div><div class='line' id='LC172'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// The signature base string is hashed with a key which is the consumer</span></div><div class='line' id='LC173'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// secret (assigned to your application by the provider) and the token</span></div><div class='line' id='LC174'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// secret (also known as the access token secret, if you&#39;ve got it yet),</span></div><div class='line' id='LC175'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// both encoded and separated by an &amp;</span></div><div class='line' id='LC176'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$key</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC177'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$request</span><span class="p">[</span><span class="s1">&#39;auth&#39;</span><span class="p">][</span><span class="s1">&#39;oauth_consumer_secret&#39;</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC178'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$key</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">parameterEncode</span><span class="p">(</span><span class="nv">$request</span><span class="p">[</span><span class="s1">&#39;auth&#39;</span><span class="p">][</span><span class="s1">&#39;oauth_consumer_secret&#39;</span><span class="p">]);</span></div><div class='line' id='LC179'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC180'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$key</span> <span class="o">.=</span> <span class="s1">&#39;&amp;&#39;</span><span class="p">;</span></div><div class='line' id='LC181'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$request</span><span class="p">[</span><span class="s1">&#39;auth&#39;</span><span class="p">][</span><span class="s1">&#39;oauth_token_secret&#39;</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC182'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$key</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">parameterEncode</span><span class="p">(</span><span class="nv">$request</span><span class="p">[</span><span class="s1">&#39;auth&#39;</span><span class="p">][</span><span class="s1">&#39;oauth_token_secret&#39;</span><span class="p">]);</span></div><div class='line' id='LC183'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC184'><br/></div><div class='line' id='LC185'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Finally construct the signature according to the value of the</span></div><div class='line' id='LC186'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// oauth_signature_method auth param in the request array.</span></div><div class='line' id='LC187'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">switch</span> <span class="p">(</span><span class="nv">$request</span><span class="p">[</span><span class="s1">&#39;auth&#39;</span><span class="p">][</span><span class="s1">&#39;oauth_signature_method&#39;</span><span class="p">])</span> <span class="p">{</span></div><div class='line' id='LC188'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;HMAC-SHA1&#39;</span><span class="o">:</span></div><div class='line' id='LC189'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$request</span><span class="p">[</span><span class="s1">&#39;auth&#39;</span><span class="p">][</span><span class="s1">&#39;oauth_signature&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nb">base64_encode</span><span class="p">(</span><span class="nb">hash_hmac</span><span class="p">(</span><span class="s1">&#39;sha1&#39;</span><span class="p">,</span> <span class="nv">$signatureBaseString</span><span class="p">,</span> <span class="nv">$key</span><span class="p">,</span> <span class="k">true</span><span class="p">));</span></div><div class='line' id='LC190'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC191'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">default</span><span class="o">:</span></div><div class='line' id='LC192'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// @todo implement the other 2 hashing methods</span></div><div class='line' id='LC193'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC194'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC195'><br/></div><div class='line' id='LC196'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Finally, we have all the Authorization header parameters so we can build</span></div><div class='line' id='LC197'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// the header string.</span></div><div class='line' id='LC198'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$authorizationHeader</span> <span class="o">=</span> <span class="s1">&#39;OAuth&#39;</span><span class="p">;</span></div><div class='line' id='LC199'><br/></div><div class='line' id='LC200'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// We don&#39;t want to include the realm, method or secrets though</span></div><div class='line' id='LC201'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$authorizationHeaderParams</span> <span class="o">=</span> <span class="nb">array_diff_key</span><span class="p">(</span></div><div class='line' id='LC202'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$request</span><span class="p">[</span><span class="s1">&#39;auth&#39;</span><span class="p">],</span></div><div class='line' id='LC203'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">array_flip</span><span class="p">(</span><span class="k">array</span><span class="p">(</span><span class="s1">&#39;method&#39;</span><span class="p">,</span> <span class="s1">&#39;oauth_consumer_secret&#39;</span><span class="p">,</span> <span class="s1">&#39;oauth_token_secret&#39;</span><span class="p">,</span> <span class="s1">&#39;realm&#39;</span><span class="p">))</span></div><div class='line' id='LC204'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC205'><br/></div><div class='line' id='LC206'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Add the Authorization header params to the Authorization header string,</span></div><div class='line' id='LC207'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// properly encoded.</span></div><div class='line' id='LC208'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$first</span> <span class="o">=</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC209'><br/></div><div class='line' id='LC210'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$request</span><span class="p">[</span><span class="s1">&#39;auth&#39;</span><span class="p">][</span><span class="s1">&#39;realm&#39;</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC211'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$authorizationHeader</span> <span class="o">.=</span> <span class="s1">&#39; realm=&quot;&#39;</span> <span class="o">.</span> <span class="nv">$request</span><span class="p">[</span><span class="s1">&#39;auth&#39;</span><span class="p">][</span><span class="s1">&#39;realm&#39;</span><span class="p">]</span> <span class="o">.</span> <span class="s1">&#39;&quot;&#39;</span><span class="p">;</span></div><div class='line' id='LC212'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$first</span> <span class="o">=</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC213'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC214'><br/></div><div class='line' id='LC215'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">foreach</span> <span class="p">(</span><span class="nv">$authorizationHeaderParams</span> <span class="k">as</span> <span class="nv">$name</span> <span class="o">=&gt;</span> <span class="nv">$value</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC216'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$first</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC217'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$authorizationHeader</span> <span class="o">.=</span> <span class="s1">&#39;,&#39;</span><span class="p">;</span></div><div class='line' id='LC218'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC219'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$authorizationHeader</span> <span class="o">.=</span> <span class="s1">&#39; &#39;</span><span class="p">;</span></div><div class='line' id='LC220'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$first</span> <span class="o">=</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC221'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC222'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$authorizationHeader</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">authorizationHeaderParamEncode</span><span class="p">(</span><span class="nv">$name</span><span class="p">,</span> <span class="nv">$value</span><span class="p">);</span></div><div class='line' id='LC223'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC224'><br/></div><div class='line' id='LC225'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$authorizationHeader</span><span class="p">;</span></div><div class='line' id='LC226'><br/></div><div class='line' id='LC227'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC228'><br/></div><div class='line' id='LC229'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC230'><span class="sd">   * Builds an Authorization header param string from the supplied name and</span></div><div class='line' id='LC231'><span class="sd">   * value. See below for example:</span></div><div class='line' id='LC232'><span class="sd">   *</span></div><div class='line' id='LC233'><span class="sd">   * @param string $name E.g. &#39;oauth_signature_method&#39;</span></div><div class='line' id='LC234'><span class="sd">   * @param string $value E.g. &#39;HMAC-SHA1&#39;</span></div><div class='line' id='LC235'><span class="sd">   * @return string E.g. &#39;oauth_signature_method=&quot;HMAC-SHA1&quot;&#39;</span></div><div class='line' id='LC236'><span class="sd">   */</span></div><div class='line' id='LC237'>&nbsp;&nbsp;<span class="k">function</span> <span class="nf">authorizationHeaderParamEncode</span><span class="p">(</span><span class="nv">$name</span><span class="p">,</span> <span class="nv">$value</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC238'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">parameterEncode</span><span class="p">(</span><span class="nv">$name</span><span class="p">)</span> <span class="o">.</span> <span class="s1">&#39;=&quot;&#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">parameterEncode</span><span class="p">(</span><span class="nv">$value</span><span class="p">)</span> <span class="o">.</span> <span class="s1">&#39;&quot;&#39;</span><span class="p">;</span></div><div class='line' id='LC239'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC240'><br/></div><div class='line' id='LC241'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC242'><span class="sd">   * Converts an associative array of name =&gt; value pairs to a numerically</span></div><div class='line' id='LC243'><span class="sd">   * indexed array of array(&#39;name&#39; =&gt; &#39;&lt;name&gt;&#39;, &#39;value&#39; =&gt; &#39;&lt;value&gt;&#39;) elements.</span></div><div class='line' id='LC244'><span class="sd">   *</span></div><div class='line' id='LC245'><span class="sd">   * @param array $array Associative array</span></div><div class='line' id='LC246'><span class="sd">   * @return array</span></div><div class='line' id='LC247'><span class="sd">   */</span></div><div class='line' id='LC248'>&nbsp;&nbsp;<span class="k">function</span> <span class="nf">assocToNumericNameValue</span><span class="p">(</span><span class="nv">$array</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC249'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$return</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC250'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">foreach</span> <span class="p">(</span><span class="nv">$array</span> <span class="k">as</span> <span class="nv">$name</span> <span class="o">=&gt;</span> <span class="nv">$value</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC251'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$return</span><span class="p">[]</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span></div><div class='line' id='LC252'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;name&#39;</span> <span class="o">=&gt;</span> <span class="nv">$name</span><span class="p">,</span></div><div class='line' id='LC253'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;value&#39;</span> <span class="o">=&gt;</span> <span class="nv">$value</span><span class="p">,</span></div><div class='line' id='LC254'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC255'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC256'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$return</span><span class="p">;</span></div><div class='line' id='LC257'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC258'><br/></div><div class='line' id='LC259'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC260'><span class="sd">   * User defined function to lexically sort an array of</span></div><div class='line' id='LC261'><span class="sd">   * array(&#39;name&#39; =&gt; &#39;&lt;name&gt;&#39;, &#39;value&#39; =&gt; &#39;&lt;value&gt;&#39;) elements by the value of</span></div><div class='line' id='LC262'><span class="sd">   * the name key, and if they&#39;re the same, then by the value of the value key.</span></div><div class='line' id='LC263'><span class="sd">   *</span></div><div class='line' id='LC264'><span class="sd">   * @param array $a Array with key for &#39;name&#39; and one for &#39;value&#39;</span></div><div class='line' id='LC265'><span class="sd">   * @param array $b Array with key for &#39;name&#39; and one for &#39;value&#39;</span></div><div class='line' id='LC266'><span class="sd">   * @return integer 1, 0 or -1 depending on whether a greater than b, less than</span></div><div class='line' id='LC267'><span class="sd">   *  or the same.</span></div><div class='line' id='LC268'><span class="sd">   */</span></div><div class='line' id='LC269'>&nbsp;&nbsp;<span class="k">function</span> <span class="nf">sortByNameThenByValue</span><span class="p">(</span><span class="nv">$a</span><span class="p">,</span> <span class="nv">$b</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC270'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$a</span><span class="p">[</span><span class="s1">&#39;name&#39;</span><span class="p">]</span> <span class="o">==</span> <span class="nv">$b</span><span class="p">[</span><span class="s1">&#39;name&#39;</span><span class="p">])</span> <span class="p">{</span></div><div class='line' id='LC271'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$a</span><span class="p">[</span><span class="s1">&#39;value&#39;</span><span class="p">]</span> <span class="o">==</span> <span class="nv">$b</span><span class="p">[</span><span class="s1">&#39;value&#39;</span><span class="p">])</span> <span class="p">{</span></div><div class='line' id='LC272'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="mi">0</span><span class="p">;</span></div><div class='line' id='LC273'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC274'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="p">(</span><span class="nv">$a</span><span class="p">[</span><span class="s1">&#39;value&#39;</span><span class="p">]</span> <span class="o">&gt;</span> <span class="nv">$b</span><span class="p">[</span><span class="s1">&#39;value&#39;</span><span class="p">])</span> <span class="o">?</span> <span class="mi">1</span> <span class="o">:</span> <span class="o">-</span><span class="mi">1</span><span class="p">;</span></div><div class='line' id='LC275'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC276'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="p">(</span><span class="nv">$a</span><span class="p">[</span><span class="s1">&#39;name&#39;</span><span class="p">]</span> <span class="o">&gt;</span> <span class="nv">$b</span><span class="p">[</span><span class="s1">&#39;name&#39;</span><span class="p">])</span> <span class="o">?</span> <span class="mi">1</span> <span class="o">:</span> <span class="o">-</span><span class="mi">1</span><span class="p">;</span></div><div class='line' id='LC277'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC278'><br/></div><div class='line' id='LC279'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC280'><span class="sd">   * Encodes paramters as per the OAuth spec by utf 8 encoding the param (if it</span></div><div class='line' id='LC281'><span class="sd">   * is not already utf 8 encoded) and then percent encoding it according to</span></div><div class='line' id='LC282'><span class="sd">   * RFC3986</span></div><div class='line' id='LC283'><span class="sd">   *</span></div><div class='line' id='LC284'><span class="sd">   * @param string $param</span></div><div class='line' id='LC285'><span class="sd">   * @return string</span></div><div class='line' id='LC286'><span class="sd">   */</span></div><div class='line' id='LC287'>&nbsp;&nbsp;<span class="k">function</span> <span class="nf">parameterEncode</span><span class="p">(</span><span class="nv">$param</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC288'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$encoding</span> <span class="o">=</span> <span class="nb">mb_detect_encoding</span><span class="p">(</span><span class="nv">$param</span><span class="p">);</span></div><div class='line' id='LC289'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$encoding</span> <span class="o">!=</span> <span class="s1">&#39;UTF-8&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC290'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$param</span> <span class="o">=</span> <span class="nb">mb_convert_encoding</span><span class="p">(</span><span class="nv">$param</span><span class="p">,</span> <span class="s1">&#39;UTF-8&#39;</span><span class="p">,</span> <span class="nv">$encoding</span><span class="p">);</span></div><div class='line' id='LC291'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC292'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$param</span> <span class="o">=</span> <span class="nb">rawurlencode</span><span class="p">(</span><span class="nv">$param</span><span class="p">);</span></div><div class='line' id='LC293'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$param</span> <span class="o">=</span> <span class="nb">str_replace</span><span class="p">(</span><span class="s1">&#39;%7E&#39;</span><span class="p">,</span> <span class="s1">&#39;~&#39;</span><span class="p">,</span> <span class="nv">$param</span><span class="p">);</span></div><div class='line' id='LC294'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$param</span><span class="p">;</span></div><div class='line' id='LC295'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC296'><br/></div><div class='line' id='LC297'><span class="p">}</span></div><div class='line' id='LC298'><span class="cp">?&gt;</span><span class="x"></span></div></pre></div>
          </td>
        </tr>
      </table>
  </div>

          </div>
        </div>
      </div>
    </div>

  </div>

<div class="frame frame-loading" style="display:none;" data-tree-list-url="/neilcrookes/http_socket_oauth/tree-list/d5adb51f309ca0ccbe4d189c286217dbf9610f81" data-blob-url-prefix="/neilcrookes/http_socket_oauth/blob/d5adb51f309ca0ccbe4d189c286217dbf9610f81">
  <img src="https://a248.e.akamai.net/assets.github.com/images/modules/ajax/big_spinner_336699.gif" height="32" width="32">
</div>

    </div>

    </div>

    <!-- footer -->
    <div id="footer" >
      
  <div class="upper_footer">
     <div class="site" class="clearfix">

       <!--[if IE]><h4 id="blacktocat_ie">GitHub Links</h4><![endif]-->
       <![if !IE]><h4 id="blacktocat">GitHub Links</h4><![endif]>

       <ul class="footer_nav">
         <h4>GitHub</h4>
         <li><a href="https://github.com/about">About</a></li>
         <li><a href="https://github.com/blog">Blog</a></li>
         <li><a href="https://github.com/features">Features</a></li>
         <li><a href="https://github.com/contact">Contact &amp; Support</a></li>
         <li><a href="https://github.com/training">Training</a></li>
         <li><a href="http://status.github.com/">Site Status</a></li>
       </ul>

       <ul class="footer_nav">
         <h4>Tools</h4>
         <li><a href="http://mac.github.com/">GitHub for Mac</a></li>
         <li><a href="http://mobile.github.com/">Issues for iPhone</a></li>
         <li><a href="https://gist.github.com">Gist: Code Snippets</a></li>
         <li><a href="http://fi.github.com/">Enterprise Install</a></li>
         <li><a href="http://jobs.github.com/">Job Board</a></li>
       </ul>

       <ul class="footer_nav">
         <h4>Extras</h4>
         <li><a href="http://shop.github.com/">GitHub Shop</a></li>
         <li><a href="http://octodex.github.com/">The Octodex</a></li>
       </ul>

       <ul class="footer_nav">
         <h4>Documentation</h4>
         <li><a href="http://help.github.com/">GitHub Help</a></li>
         <li><a href="http://developer.github.com/">Developer API</a></li>
         <li><a href="http://github.github.com/github-flavored-markdown/">GitHub Flavored Markdown</a></li>
         <li><a href="http://pages.github.com/">GitHub Pages</a></li>
       </ul>

     </div><!-- /.site -->
  </div><!-- /.upper_footer -->

<div class="lower_footer">
  <div class="site" class="clearfix">
    <!--[if IE]><div id="legal_ie"><![endif]-->
    <![if !IE]><div id="legal"><![endif]>
      <ul>
          <li><a href="https://github.com/site/terms">Terms of Service</a></li>
          <li><a href="https://github.com/site/privacy">Privacy</a></li>
          <li><a href="https://github.com/security">Security</a></li>
      </ul>

      <p>&copy; 2011 <span id="_rrt" title="0.08897s from fe9.rs.github.com">GitHub</span> Inc. All rights reserved.</p>
    </div><!-- /#legal or /#legal_ie-->

      <div class="sponsor">
        <a href="http://www.rackspace.com" class="logo">
          <img alt="Dedicated Server" height="36" src="https://a248.e.akamai.net/assets.github.com/images/modules/footer/rackspace_logo.png?v2" width="38" />
        </a>
        Powered by the <a href="http://www.rackspace.com ">Dedicated
        Servers</a> and<br/> <a href="http://www.rackspacecloud.com">Cloud
        Computing</a> of Rackspace Hosting<span>&reg;</span>
      </div>
  </div><!-- /.site -->
</div><!-- /.lower_footer -->

    </div><!-- /#footer -->

    

<div id="keyboard_shortcuts_pane" class="instapaper_ignore readability-extra" style="display:none">
  <h2>Keyboard Shortcuts <small><a href="#" class="js-see-all-keyboard-shortcuts">(see all)</a></small></h2>

  <div class="columns threecols">
    <div class="column first">
      <h3>Site wide shortcuts</h3>
      <dl class="keyboard-mappings">
        <dt>s</dt>
        <dd>Focus site search</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>?</dt>
        <dd>Bring up this help dialog</dd>
      </dl>
    </div><!-- /.column.first -->

    <div class="column middle" style='display:none'>
      <h3>Commit list</h3>
      <dl class="keyboard-mappings">
        <dt>j</dt>
        <dd>Move selection down</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>k</dt>
        <dd>Move selection up</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>c <em>or</em> o <em>or</em> enter</dt>
        <dd>Open commit</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>y</dt>
        <dd>Expand URL to its canonical form</dd>
      </dl>
    </div><!-- /.column.first -->

    <div class="column last" style='display:none'>
      <h3>Pull request list</h3>
      <dl class="keyboard-mappings">
        <dt>j</dt>
        <dd>Move selection down</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>k</dt>
        <dd>Move selection up</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>o <em>or</em> enter</dt>
        <dd>Open issue</dd>
      </dl>
    </div><!-- /.columns.last -->

  </div><!-- /.columns.equacols -->

  <div style='display:none'>
    <div class="rule"></div>

    <h3>Issues</h3>

    <div class="columns threecols">
      <div class="column first">
        <dl class="keyboard-mappings">
          <dt>j</dt>
          <dd>Move selection down</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>k</dt>
          <dd>Move selection up</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>x</dt>
          <dd>Toggle selection</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>o <em>or</em> enter</dt>
          <dd>Open issue</dd>
        </dl>
      </div><!-- /.column.first -->
      <div class="column middle">
        <dl class="keyboard-mappings">
          <dt>I</dt>
          <dd>Mark selection as read</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>U</dt>
          <dd>Mark selection as unread</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>e</dt>
          <dd>Close selection</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>y</dt>
          <dd>Remove selection from view</dd>
        </dl>
      </div><!-- /.column.middle -->
      <div class="column last">
        <dl class="keyboard-mappings">
          <dt>c</dt>
          <dd>Create issue</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>l</dt>
          <dd>Create label</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>i</dt>
          <dd>Back to inbox</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>u</dt>
          <dd>Back to issues</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>/</dt>
          <dd>Focus issues search</dd>
        </dl>
      </div>
    </div>
  </div>

  <div style='display:none'>
    <div class="rule"></div>

    <h3>Issues Dashboard</h3>

    <div class="columns threecols">
      <div class="column first">
        <dl class="keyboard-mappings">
          <dt>j</dt>
          <dd>Move selection down</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>k</dt>
          <dd>Move selection up</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>o <em>or</em> enter</dt>
          <dd>Open issue</dd>
        </dl>
      </div><!-- /.column.first -->
    </div>
  </div>

  <div style='display:none'>
    <div class="rule"></div>

    <h3>Network Graph</h3>
    <div class="columns equacols">
      <div class="column first">
        <dl class="keyboard-mappings">
          <dt><span class="badmono">←</span> <em>or</em> h</dt>
          <dd>Scroll left</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt><span class="badmono">→</span> <em>or</em> l</dt>
          <dd>Scroll right</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt><span class="badmono">↑</span> <em>or</em> k</dt>
          <dd>Scroll up</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt><span class="badmono">↓</span> <em>or</em> j</dt>
          <dd>Scroll down</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>t</dt>
          <dd>Toggle visibility of head labels</dd>
        </dl>
      </div><!-- /.column.first -->
      <div class="column last">
        <dl class="keyboard-mappings">
          <dt>shift <span class="badmono">←</span> <em>or</em> shift h</dt>
          <dd>Scroll all the way left</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>shift <span class="badmono">→</span> <em>or</em> shift l</dt>
          <dd>Scroll all the way right</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>shift <span class="badmono">↑</span> <em>or</em> shift k</dt>
          <dd>Scroll all the way up</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>shift <span class="badmono">↓</span> <em>or</em> shift j</dt>
          <dd>Scroll all the way down</dd>
        </dl>
      </div><!-- /.column.last -->
    </div>
  </div>

  <div >
    <div class="rule"></div>
    <div class="columns threecols">
      <div class="column first" >
        <h3>Source Code Browsing</h3>
        <dl class="keyboard-mappings">
          <dt>t</dt>
          <dd>Activates the file finder</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>l</dt>
          <dd>Jump to line</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>w</dt>
          <dd>Switch branch/tag</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>y</dt>
          <dd>Expand URL to its canonical form</dd>
        </dl>
      </div>
    </div>
  </div>
</div>

    <div id="markdown-help" class="instapaper_ignore readability-extra">
  <h2>Markdown Cheat Sheet</h2>

  <div class="cheatsheet-content">

  <div class="mod">
    <div class="col">
      <h3>Format Text</h3>
      <p>Headers</p>
      <pre>
# This is an &lt;h1&gt; tag
## This is an &lt;h2&gt; tag
###### This is an &lt;h6&gt; tag</pre>
     <p>Text styles</p>
     <pre>
*This text will be italic*
_This will also be italic_
**This text will be bold**
__This will also be bold__

*You **can** combine them*
</pre>
    </div>
    <div class="col">
      <h3>Lists</h3>
      <p>Unordered</p>
      <pre>
* Item 1
* Item 2
  * Item 2a
  * Item 2b</pre>
     <p>Ordered</p>
     <pre>
1. Item 1
2. Item 2
3. Item 3
   * Item 3a
   * Item 3b</pre>
    </div>
    <div class="col">
      <h3>Miscellaneous</h3>
      <p>Images</p>
      <pre>
![GitHub Logo](/images/logo.png)
Format: ![Alt Text](url)
</pre>
     <p>Links</p>
     <pre>
http://github.com - automatic!
[GitHub](http://github.com)</pre>
<p>Blockquotes</p>
     <pre>
As Kanye West said:
> We're living the future so
> the present is our past.
</pre>
    </div>
  </div>
  <div class="rule"></div>

  <h3>Code Examples in Markdown</h3>
  <div class="col">
      <p>Syntax highlighting with <a href="http://github.github.com/github-flavored-markdown/" title="GitHub Flavored Markdown" target="_blank">GFM</a></p>
      <pre>
```javascript
function fancyAlert(arg) {
  if(arg) {
    $.facebox({div:'#foo'})
  }
}
```</pre>
    </div>
    <div class="col">
      <p>Or, indent your code 4 spaces</p>
      <pre>
Here is a Python code example
without syntax highlighting:

    def foo:
      if not bar:
        return true</pre>
    </div>
    <div class="col">
      <p>Inline code for comments</p>
      <pre>
I think you should use an
`&lt;addr&gt;` element here instead.</pre>
    </div>
  </div>

  </div>
</div>

    <div class="context-overlay"></div>

    
    
    
  </body>
</html>

