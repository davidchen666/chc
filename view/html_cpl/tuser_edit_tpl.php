<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
    <title> DataTables</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <meta name="MobileOptimized" content="320">
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link id="bs-theme-stylesheet" rel="stylesheet" data-href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" href="data:text/css;charset=utf-8,">
    <link rel="stylesheet" href="../assets/css/patch.css">
    <link rel="stylesheet" href="../assets/css/docs.min.css"></
    <script src="../assets/js/ie-emulation-modes-warning.js"></script>

</head>
<body>
<div class="container bs-docs-container">

    <div class="row">
        <div role="main" class="col-md-9">
            <div class="bs-docs-section">
                <h1 class="page-header" id="overview"><a data-anchorjs-icon="" aria-label="Anchor link for: overview" href="#overview" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>概览</h1>

                <p class="lead">深入了解 Bootstrap 底层结构的关键部分，包括我们让 web 开发变得更好、更快、更强壮的最佳实践。</p>

                <h2 id="overview-doctype"><a data-anchorjs-icon="" aria-label="Anchor link for: overview doctype" href="#overview-doctype" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>HTML5 文档类型</h2>
                <p>Bootstrap 使用到的某些 HTML 元素和 CSS 属性需要将页面设置为 HTML5 文档类型。在你项目中的每个页面都要参照下面的格式进行设置。</p>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="cp">&lt;!DOCTYPE html&gt;</span>
                            <span class="nt">&lt;html</span> <span class="na">lang=</span><span class="s">"zh-CN"</span><span class="nt">&gt;</span>
                            ...
                            <span class="nt">&lt;/html&gt;</span></code></pre></div>

                <h2 id="overview-mobile"><a data-anchorjs-icon="" aria-label="Anchor link for: overview mobile" href="#overview-mobile" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>移动设备优先</h2>
                <p>在 Bootstrap 2 中，我们对框架中的某些关键部分增加了对移动设备友好的样式。而在 Bootstrap 3 中，我们重写了整个框架，使其一开始就是对移动设备友好的。这次不是简单的增加一些可选的针对移动设备的样式，而是直接融合进了框架的内核中。也就是说，<strong>Bootstrap 是移动设备优先的</strong>。针对移动设备的样式融合进了框架的每个角落，而不是增加一个额外的文件。</p>
                <p>为了确保适当的绘制和触屏缩放，需要在 <code>&lt;head&gt;</code> 之中<strong>添加 viewport 元数据标签</strong>。</p>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;meta</span> <span class="na">name=</span><span class="s">"viewport"</span> <span class="na">content=</span><span class="s">"width=device-width, initial-scale=1"</span><span class="nt">&gt;</span></code></pre></div>
                <p>在移动设备浏览器上，通过为视口（viewport）设置 meta 属性为 <code>user-scalable=no</code> 可以禁用其缩放（zooming）功能。这样禁用缩放功能后，用户只能滚动屏幕，就能让你的网站看上去更像原生应用的感觉。注意，这种方式我们并不推荐所有网站使用，还是要看你自己的情况而定！</p>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;meta</span> <span class="na">name=</span><span class="s">"viewport"</span> <span class="na">content=</span><span class="s">"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"</span><span class="nt">&gt;</span></code></pre></div>

                <h2 id="overview-type-links"><a data-anchorjs-icon="" aria-label="Anchor link for: overview type links" href="#overview-type-links" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>排版与链接</h2>
                <p>Bootstrap 排版、链接样式设置了基本的全局样式。分别是：</p>
                <ul>
                    <li>为 <code>body</code> 元素设置 <code>background-color: #fff;</code></li>
                    <li>使用 <code>@font-family-base</code>、<code>@font-size-base</code> 和 <code>@line-height-base</code> a变量作为排版的基本参数</li>
                    <li>为所有链接设置了基本颜色 <code>@link-color</code> ，并且当链接处于 <code>:hover</code> 状态时才添加下划线</li>
                </ul>
                <p>这些样式都能在 <code>scaffolding.less</code> 文件中找到对应的源码。</p>

                <h2 id="overview-normalize"><a data-anchorjs-icon="" aria-label="Anchor link for: overview normalize" href="#overview-normalize" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Normalize.css</h2>
                <p>为了增强跨浏览器表现的一致性，我们使用了 <a target="_blank" href="http://necolas.github.io/normalize.css/">Normalize.css</a>，这是由 <a target="_blank" href="https://twitter.com/necolas">Nicolas Gallagher</a> 和 <a target="_blank" href="https://twitter.com/jon_neal">Jonathan Neal</a> 维护的一个CSS 重置样式库。</p>

                <h2 id="overview-container"><a data-anchorjs-icon="" aria-label="Anchor link for: overview container" href="#overview-container" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>布局容器</h2>
                <p>Bootstrap 需要为页面内容和栅格系统包裹一个 <code>.container</code> 容器。我们提供了两个作此用处的类。注意，由于 <code>padding</code> 等属性的原因，这两种 容器类不能互相嵌套。</p>
                <p><code>.container</code> 类用于固定宽度并支持响应式布局的容器。</p>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
                            ...
                            <span class="nt">&lt;/div&gt;</span></code></pre></div>
                <p><code>.container-fluid</code> 类用于 100% 宽度，占据全部视口（viewport）的容器。</p>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container-fluid"</span><span class="nt">&gt;</span>
                            ...
                            <span class="nt">&lt;/div&gt;</span></code></pre></div>
            </div>

            <div class="bs-docs-section">
                <h1 class="page-header" id="grid"><a data-anchorjs-icon="" aria-label="Anchor link for: grid" href="#grid" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>栅格系统</h1>

                <p class="lead">Bootstrap 提供了一套响应式、移动设备优先的流式栅格系统，随着屏幕或视口（viewport）尺寸的增加，系统会自动分为最多12列。它包含了易于使用的<a href="#grid-example-basic">预定义类</a>，还有强大的<a href="#grid-less">mixin 用于生成更具语义的布局</a>。</p>

                <h2 id="grid-intro"><a data-anchorjs-icon="" aria-label="Anchor link for: grid intro" href="#grid-intro" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>简介</h2>
                <p>栅格系统用于通过一系列的行（row）与列（column）的组合来创建页面布局，你的内容就可以放入这些创建好的布局中。下面就介绍一下 Bootstrap 栅格系统的工作原理：</p>
                <ul>
                    <li>“行（row）”必须包含在 <code>.container</code> （固定宽度）或 <code>.container-fluid</code> （100% 宽度）中，以便为其赋予合适的排列（aligment）和内补（padding）。</li>
                    <li>通过“行（row）”在水平方向创建一组“列（column）”。</li>
                    <li>你的内容应当放置于“列（column）”内，并且，只有“列（column）”可以作为行（row）”的直接子元素。</li>
                    <li>类似 <code>.row</code> 和 <code>.col-xs-4</code> 这种预定义的类，可以用来快速创建栅格布局。Bootstrap 源码中定义的 mixin 也可以用来创建语义化的布局。</li>
                    <li>通过为“列（column）”设置 <code>padding</code> 属性，从而创建列与列之间的间隔（gutter）。通过为 <code>.row</code> 元素设置负值 <code>margin</code> 从而抵消掉为 <code>.container</code> 元素设置的 <code>padding</code>，也就间接为“行（row）”所包含的“列（column）”抵消掉了<code>padding</code>。</li>
                    <li>负值的 margin就是下面的示例为什么是向外突出的原因。在栅格列中的内容排成一行。</li>
                    <li>栅格系统中的列是通过指定1到12的值来表示其跨越的范围。例如，三个等宽的列可以使用三个  <code>.col-xs-4</code> 来创建。</li>
                    <li>如果一“行（row）”中包含了的“列（column）”大于 12，多余的“列（column）”所在的元素将被作为一个整体另起一行排列。</li>
                    <li>栅格类适用于与屏幕宽度大于或等于分界点大小的设备 ， 并且针对小屏幕设备覆盖栅格类。 因此，在元素上应用任何 <code>.col-md-*</code> 栅格类适用于与屏幕宽度大于或等于分界点大小的设备 ， 并且针对小屏幕设备覆盖栅格类。 因此，在元素上应用任何 <code>.col-lg-*</code> 不存在， 也影响大屏幕设备。</li>
                </ul>
                <p>通过研究后面的实例，可以将这些原理应用到你的代码中。</p>

                <h2 id="grid-media-queries"><a data-anchorjs-icon="" aria-label="Anchor link for: grid media queries" href="#grid-media-queries" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>媒体查询</h2>
                <p>在栅格系统中，我们在 Less 文件中使用以下媒体查询（media query）来创建关键的分界点阈值。</p>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="scss" class="language-scss"><span class="cm">/* 超小屏幕（手机，小于 768px） */</span>
                            <span class="cm">/* 没有任何媒体查询相关的代码，因为这在 Bootstrap 中是默认的（还记得 Bootstrap 是移动设备优先的吗？） */</span>

                            <span class="cm">/* 小屏幕（平板，大于等于 768px） */</span>
                            <span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span class="nd">:</span> <span class="o">@</span><span class="nt">screen-sm-min</span><span class="o">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>

                            <span class="cm">/* 中等屏幕（桌面显示器，大于等于 992px） */</span>
                            <span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span class="nd">:</span> <span class="o">@</span><span class="nt">screen-md-min</span><span class="o">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>

                            <span class="cm">/* 大屏幕（大桌面显示器，大于等于 1200px） */</span>
                            <span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span class="nd">:</span> <span class="o">@</span><span class="nt">screen-lg-min</span><span class="o">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span></code></pre></div>
                <p>我们偶尔也会在媒体查询代码中包含 <code>max-width</code> 从而将 CSS 的影响限制在更小范围的屏幕大小之内。</p>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="scss" class="language-scss"><span class="k">@media</span> <span class="o">(</span><span class="nt">max-width</span><span class="nd">:</span> <span class="o">@</span><span class="nt">screen-xs-max</span><span class="o">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
                            <span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span class="nd">:</span> <span class="o">@</span><span class="nt">screen-sm-min</span><span class="o">)</span> <span class="nt">and</span> <span class="o">(</span><span class="nt">max-width</span><span class="nd">:</span> <span class="o">@</span><span class="nt">screen-sm-max</span><span class="o">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
                            <span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span class="nd">:</span> <span class="o">@</span><span class="nt">screen-md-min</span><span class="o">)</span> <span class="nt">and</span> <span class="o">(</span><span class="nt">max-width</span><span class="nd">:</span> <span class="o">@</span><span class="nt">screen-md-max</span><span class="o">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
                            <span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span class="nd">:</span> <span class="o">@</span><span class="nt">screen-lg-min</span><span class="o">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span></code></pre></div>

                <h2 id="grid-options"><a data-anchorjs-icon="" aria-label="Anchor link for: grid options" href="#grid-options" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>栅格参数</h2>
                <p>通过下表可以详细查看 Bootstrap 的栅格系统是如何在多种屏幕设备上工作的。</p>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th></th>
                            <th>
                                超小屏幕
                                <small>手机 (&lt;768px)</small>
                            </th>
                            <th>
                                小屏幕
                                <small>平板 (≥768px)</small>
                            </th>
                            <th>
                                中等屏幕
                                <small>桌面显示器 (≥992px)</small>
                            </th>
                            <th>
                                大屏幕
                                <small>大桌面显示器 (≥1200px)</small>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row" class="text-nowrap">栅格系统行为</th>
                            <td>总是水平排列</td>
                            <td colspan="3">开始是堆叠在一起的，当大于这些阈值时将变为水平排列C</td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-nowrap"><code>.container</code> 最大宽度</th>
                            <td>None （自动）</td>
                            <td>750px</td>
                            <td>970px</td>
                            <td>1170px</td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-nowrap">类前缀</th>
                            <td><code>.col-xs-</code></td>
                            <td><code>.col-sm-</code></td>
                            <td><code>.col-md-</code></td>
                            <td><code>.col-lg-</code></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-nowrap">列（column）数</th>
                            <td colspan="4">12</td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-nowrap">最大列（column）宽</th>
                            <td class="text-muted">自动</td>
                            <td>~62px</td>
                            <td>~81px</td>
                            <td>~97px</td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-nowrap">槽（gutter）宽</th>
                            <td colspan="4">30px （每列左右均有 15px）</td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-nowrap">可嵌套</th>
                            <td colspan="4">是</td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-nowrap">偏移（Offsets）</th>
                            <td colspan="4">是</td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-nowrap">列排序</th>
                            <td colspan="4">是</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <h2 id="grid-example-basic"><a data-anchorjs-icon="" aria-label="Anchor link for: grid example basic" href="#grid-example-basic" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>实例：从堆叠到水平排列</h2>
                <p>使用单一的一组 <code>.col-md-*</code> 栅格类，就可以创建一个基本的栅格系统，在手机和平板设备上一开始是堆叠在一起的（超小屏幕到小屏幕这一范围），在桌面（中等）屏幕设备上变为水平排列。所有“列（column）必须放在 ” <code>.row</code> 内。</p>
                <div class="bs-docs-grid">
                    <div class="row show-grid">
                        <div class="col-md-1">.col-md-1</div>
                        <div class="col-md-1">.col-md-1</div>
                        <div class="col-md-1">.col-md-1</div>
                        <div class="col-md-1">.col-md-1</div>
                        <div class="col-md-1">.col-md-1</div>
                        <div class="col-md-1">.col-md-1</div>
                        <div class="col-md-1">.col-md-1</div>
                        <div class="col-md-1">.col-md-1</div>
                        <div class="col-md-1">.col-md-1</div>
                        <div class="col-md-1">.col-md-1</div>
                        <div class="col-md-1">.col-md-1</div>
                        <div class="col-md-1">.col-md-1</div>
                    </div>
                    <div class="row show-grid">
                        <div class="col-md-8">.col-md-8</div>
                        <div class="col-md-4">.col-md-4</div>
                    </div>
                    <div class="row show-grid">
                        <div class="col-md-4">.col-md-4</div>
                        <div class="col-md-4">.col-md-4</div>
                        <div class="col-md-4">.col-md-4</div>
                    </div>
                    <div class="row show-grid">
                        <div class="col-md-6">.col-md-6</div>
                        <div class="col-md-6">.col-md-6</div>
                    </div>
                </div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-8"</span><span class="nt">&gt;</span>.col-md-8<span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4"</span><span class="nt">&gt;</span>.col-md-4<span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4"</span><span class="nt">&gt;</span>.col-md-4<span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4"</span><span class="nt">&gt;</span>.col-md-4<span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4"</span><span class="nt">&gt;</span>.col-md-4<span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-6"</span><span class="nt">&gt;</span>.col-md-6<span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-6"</span><span class="nt">&gt;</span>.col-md-6<span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;/div&gt;</span></code></pre></div>

                <h2 id="grid-example-fluid"><a data-anchorjs-icon="" aria-label="Anchor link for: grid example fluid" href="#grid-example-fluid" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>实例：流式布局容器</h2>
                <p>将最外面的布局元素 <code>.container</code> 修改为 <code>.container-fluid</code>，就可以将固定宽度的栅格布局转换为 100% 宽度的布局。</p>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container-fluid"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
                            ...
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;/div&gt;</span></code></pre></div>

                <h2 id="grid-example-mixed"><a data-anchorjs-icon="" aria-label="Anchor link for: grid example mixed" href="#grid-example-mixed" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>实例：移动设备和桌面屏幕</h2>
                <p>是否不希望在小屏幕设备上所有列都堆叠在一起？那就使用针对超小屏幕和中等屏幕设备所定义的类吧，即 <code>.col-xs-*</code> 和 <code>.col-md-*</code>。请看下面的实例，研究一下这些是如何工作的。</p>
                <div class="bs-docs-grid">
                    <div class="row show-grid">
                        <div class="col-xs-12 col-md-8">.col-xs-12 .col-md-8</div>
                        <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
                    </div>
                    <div class="row show-grid">
                        <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
                        <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
                        <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
                    </div>
                    <div class="row show-grid">
                        <div class="col-xs-6">.col-xs-6</div>
                        <div class="col-xs-6">.col-xs-6</div>
                    </div>
                </div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="c">&lt;!-- Stack the columns on mobile by making one full-width and the other half-width --&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-12 col-md-8"</span><span class="nt">&gt;</span>.col-xs-12 .col-md-8<span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-md-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-md-4<span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>

                            <span class="c">&lt;!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop --&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-md-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-md-4<span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-md-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-md-4<span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-md-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-md-4<span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>

                            <span class="c">&lt;!-- Columns are always 50% wide, on mobile and desktop --&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6"</span><span class="nt">&gt;</span>.col-xs-6<span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6"</span><span class="nt">&gt;</span>.col-xs-6<span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;/div&gt;</span></code></pre></div>

                <h2 id="grid-example-mixed-complete"><a data-anchorjs-icon="" aria-label="Anchor link for: grid example mixed complete" href="#grid-example-mixed-complete" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>实例：手机、平板、桌面</h2>
                <p>在上面案例的基础上，通过使用针对平板设备的 <code>.col-sm-*</code> 类，我们来创建更加动态和强大的布局吧。</p>
                <div class="bs-docs-grid">
                    <div class="row show-grid">
                        <div class="col-xs-12 col-sm-6 col-md-8">.col-xs-12 .col-sm-6 .col-md-8</div>
                        <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
                    </div>
                    <div class="row show-grid">
                        <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
                        <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
                        <!-- Optional: clear the XS cols if their content doesn't match in height -->
                        <div class="clearfix visible-xs-block"></div>
                        <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
                    </div>
                </div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-12 col-sm-6 col-md-8"</span><span class="nt">&gt;</span>.col-xs-12 .col-sm-6 .col-md-8<span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-md-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-md-4<span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-sm-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-sm-4<span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-sm-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-sm-4<span class="nt">&lt;/div&gt;</span>
                            <span class="c">&lt;!-- Optional: clear the XS cols if their content doesn't match in height --&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"clearfix visible-xs-block"</span><span class="nt">&gt;&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-sm-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-sm-4<span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;/div&gt;</span></code></pre></div>

                <h2 id="grid-example-wrapping"><a data-anchorjs-icon="" aria-label="Anchor link for: grid example wrapping" href="#grid-example-wrapping" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>实例：多余的列（column）将另起一行排列</h2>
                <p>如果在一个 <code>.row</code> 内包含的列（column）大于12个，包含多余列（column）的元素将作为一个整体单元被另起一行排列。</p>
                <div class="bs-docs-grid">
                    <div class="row show-grid">
                        <div class="col-xs-9">.col-xs-9</div>
                        <div class="col-xs-4">.col-xs-4<br>Since 9 + 4 = 13 &gt; 12, this 4-column-wide div gets wrapped onto a new line as one contiguous unit.</div>
                        <div class="col-xs-6">.col-xs-6<br>Subsequent columns continue along the new line.</div>
                    </div>
                </div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-9"</span><span class="nt">&gt;</span>.col-xs-9<span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-4"</span><span class="nt">&gt;</span>.col-xs-4<span class="nt">&lt;br&gt;</span>Since 9 + 4 = 13 <span class="ni">&amp;gt;</span> 12, this 4-column-wide div gets wrapped onto a new line as one contiguous unit.<span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6"</span><span class="nt">&gt;</span>.col-xs-6<span class="nt">&lt;br&gt;</span>Subsequent columns continue along the new line.<span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;/div&gt;</span></code></pre></div>

                <h2 id="grid-responsive-resets"><a data-anchorjs-icon="" aria-label="Anchor link for: grid responsive resets" href="#grid-responsive-resets" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>响应式列重置</h2>
                <p>即便有上面给出的四组栅格class，你也不免会碰到一些问题，例如，在某些阈值时，某些列可能会出现比别的列高的情况。为了克服这一问题，建议联合使用 <code>.clearfix</code> 和 <a href="#responsive-utilities">响应式工具类</a>。</p>
                <div class="bs-docs-grid">
                    <div class="row show-grid">
                        <div class="col-xs-6 col-sm-3">
                            .col-xs-6 .col-sm-3
                            <br>
                            Resize your viewport or check it out on your phone for an example.
                        </div>
                        <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>

                        <!-- Add the extra clearfix for only the required viewport -->
                        <div class="clearfix visible-xs-block"></div>

                        <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
                        <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
                    </div>
                </div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-sm-3"</span><span class="nt">&gt;</span>.col-xs-6 .col-sm-3<span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-sm-3"</span><span class="nt">&gt;</span>.col-xs-6 .col-sm-3<span class="nt">&lt;/div&gt;</span>

                            <span class="c">&lt;!-- Add the extra clearfix for only the required viewport --&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"clearfix visible-xs-block"</span><span class="nt">&gt;&lt;/div&gt;</span>

                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-sm-3"</span><span class="nt">&gt;</span>.col-xs-6 .col-sm-3<span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-sm-3"</span><span class="nt">&gt;</span>.col-xs-6 .col-sm-3<span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;/div&gt;</span></code></pre></div>
                <p>除了列在分界点清除响应， 您可能需要 <strong>重置偏移, 后推或前拉某个列</strong>。请看此<a href="../examples/grid/">栅格实例</a>。</p>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-5 col-md-6"</span><span class="nt">&gt;</span>.col-sm-5 .col-md-6<span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-0"</span><span class="nt">&gt;</span>.col-sm-5 .col-sm-offset-2 .col-md-6 .col-md-offset-0<span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>

                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-6 col-md-5 col-lg-6"</span><span class="nt">&gt;</span>.col-sm-6 .col-md-5 .col-lg-6<span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-6 col-md-5 col-md-offset-2 col-lg-6 col-lg-offset-0"</span><span class="nt">&gt;</span>.col-sm-6 .col-md-5 .col-md-offset-2 .col-lg-6 .col-lg-offset-0<span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;/div&gt;</span></code></pre></div>


                <h2 id="grid-offsetting"><a data-anchorjs-icon="" aria-label="Anchor link for: grid offsetting" href="#grid-offsetting" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>列偏移</h2>
                <p>使用 <code>.col-md-offset-*</code> 类可以将列向右侧偏移。这些类实际是通过使用 <code>*</code> 选择器为当前元素增加了左侧的边距（margin）。例如，<code>.col-md-offset-4</code> 类将 <code>.col-md-4</code> 元素向右侧偏移了4个列（column）的宽度。</p>
                <div class="bs-docs-grid">
                    <div class="row show-grid">
                        <div class="col-md-4">.col-md-4</div>
                        <div class="col-md-4 col-md-offset-4">.col-md-4 .col-md-offset-4</div>
                    </div>
                    <div class="row show-grid">
                        <div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
                        <div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
                    </div>
                    <div class="row show-grid">
                        <div class="col-md-6 col-md-offset-3">.col-md-6 .col-md-offset-3</div>
                    </div>
                </div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4"</span><span class="nt">&gt;</span>.col-md-4<span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4 col-md-offset-4"</span><span class="nt">&gt;</span>.col-md-4 .col-md-offset-4<span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-3 col-md-offset-3"</span><span class="nt">&gt;</span>.col-md-3 .col-md-offset-3<span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-3 col-md-offset-3"</span><span class="nt">&gt;</span>.col-md-3 .col-md-offset-3<span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-6 col-md-offset-3"</span><span class="nt">&gt;</span>.col-md-6 .col-md-offset-3<span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;/div&gt;</span></code></pre></div>


                <h2 id="grid-nesting"><a data-anchorjs-icon="" aria-label="Anchor link for: grid nesting" href="#grid-nesting" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>嵌套列</h2>
                <p>为了使用内置的栅格系统将内容再次嵌套，可以通过添加一个新的 <code>.row</code> 元素和一系列 <code>.col-sm-*</code> 元素到已经存在的 <code>.col-sm-*</code> 元素内。被嵌套的行（row）所包含的列（column）的个数不能超过12（其实，没有要求你必须占满12列）。</p>
                <div class="row show-grid">
                    <div class="col-sm-9">
                        Level 1: .col-sm-9
                        <div class="row show-grid">
                            <div class="col-xs-8 col-sm-6">
                                Level 2: .col-xs-8 .col-sm-6
                            </div>
                            <div class="col-xs-4 col-sm-6">
                                Level 2: .col-xs-4 .col-sm-6
                            </div>
                        </div>
                    </div>
                </div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-9"</span><span class="nt">&gt;</span>
                            Level 1: .col-sm-9
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-8 col-sm-6"</span><span class="nt">&gt;</span>
                            Level 2: .col-xs-8 .col-sm-6
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-4 col-sm-6"</span><span class="nt">&gt;</span>
                            Level 2: .col-xs-4 .col-sm-6
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;/div&gt;</span></code></pre></div>

                <h2 id="grid-column-ordering"><a data-anchorjs-icon="" aria-label="Anchor link for: grid column ordering" href="#grid-column-ordering" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>列排序</h2>
                <p>通过使用 <code>.col-md-push-*</code> 和 <code>.col-md-pull-*</code> 类就可以很容易的改变列（column）的顺序。</p>
                <div class="row show-grid">
                    <div class="col-md-9 col-md-push-3">.col-md-9 .col-md-push-3</div>
                    <div class="col-md-3 col-md-pull-9">.col-md-3 .col-md-pull-9</div>
                </div>

                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-9 col-md-push-3"</span><span class="nt">&gt;</span>.col-md-9 .col-md-push-3<span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-3 col-md-pull-9"</span><span class="nt">&gt;</span>.col-md-3 .col-md-pull-9<span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;/div&gt;</span></code></pre></div>

                <h2 id="grid-less"><a data-anchorjs-icon="" aria-label="Anchor link for: grid less" href="#grid-less" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Less mixin 和变量</h2>
                <p>除了用于快速布局的<a href="#grid-example-basic">预定义栅格类</a>，Bootstrap 还包含了一组 Less 变量和 mixin 用于帮你生成简单、语义化的布局。</p>

                <h3 id=""><a data-anchorjs-icon="" aria-label="Anchor link for: " href="#" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>变量</h3>
                <p>通过变量来定义列数、槽（gutter）宽、媒体查询阈值（用于确定合适让列浮动）。我们使用这些变量生成预定义的栅格类，如上所示，还有如下所示的定制 mixin。</p>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="scss" class="language-scss"><span class="k">@grid-columns</span><span class="nd">:</span>              <span class="nt">12</span><span class="p">;</span>
                            <span class="k">@grid-gutter-width</span><span class="nd">:</span>         <span class="nt">30px</span><span class="p">;</span>
                            <span class="k">@grid-float-breakpoint</span><span class="nd">:</span>     <span class="nt">768px</span><span class="p">;</span></code></pre></div>

                <h3 id="mixin"><a data-anchorjs-icon="" aria-label="Anchor link for: mixin" href="#mixin" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>mixin</h3>
                <p>mixin 用来和栅格变量一同使用，为每个列（column）生成语义化的 CSS 代码。</p>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="scss" class="language-scss"><span class="c1">// Creates a wrapper for a series of columns
</span><span class="err">.</span><span class="na">make-row</span><span class="err">(@</span><span class="na">gutter</span><span class="p">:</span> <span class="o">@</span><span class="n">grid-gutter-width</span><span class="p">)</span> <span class="p">{</span>
                                <span class="c1">// Then clear the floated columns
                                </span>  <span class="nc">.clearfix</span><span class="o">()</span><span class="p">;</span>

                                <span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span class="nd">:</span> <span class="o">@</span><span class="nt">screen-sm-min</span><span class="o">)</span> <span class="p">{</span>
                                <span class="nl">margin-left</span><span class="p">:</span>  <span class="p">(</span><span class="o">@</span><span class="n">gutter</span> <span class="o">/</span> <span class="m">-2</span><span class="p">);</span>
                                <span class="nl">margin-right</span><span class="p">:</span> <span class="p">(</span><span class="o">@</span><span class="n">gutter</span> <span class="o">/</span> <span class="m">-2</span><span class="p">);</span>
                                <span class="p">}</span>

                                <span class="c1">// Negative margin nested rows out to align the content of columns
                                </span>  <span class="nc">.row</span> <span class="p">{</span>
                                <span class="nl">margin-left</span><span class="p">:</span>  <span class="p">(</span><span class="o">@</span><span class="n">gutter</span> <span class="o">/</span> <span class="m">-2</span><span class="p">);</span>
                                <span class="nl">margin-right</span><span class="p">:</span> <span class="p">(</span><span class="o">@</span><span class="n">gutter</span> <span class="o">/</span> <span class="m">-2</span><span class="p">);</span>
                                <span class="p">}</span>
                                <span class="p">}</span>

<span class="c1">// Generate the extra small columns
</span><span class="nc">.make-xs-column</span><span class="o">(@</span><span class="nt">columns</span><span class="p">;</span> <span class="k">@gutter</span><span class="nd">:</span> <span class="o">@</span><span class="nt">grid-gutter-width</span><span class="o">)</span> <span class="p">{</span>
                                <span class="nl">position</span><span class="p">:</span> <span class="nb">relative</span><span class="p">;</span>
                                <span class="c1">// Prevent columns from collapsing when empty
                                </span>  <span class="nl">min-height</span><span class="p">:</span> <span class="m">1px</span><span class="p">;</span>
                                <span class="c1">// Inner gutter via padding
                                </span>  <span class="nl">padding-left</span><span class="p">:</span>  <span class="p">(</span><span class="o">@</span><span class="n">gutter</span> <span class="o">/</span> <span class="m">2</span><span class="p">);</span>
                                <span class="nl">padding-right</span><span class="p">:</span> <span class="p">(</span><span class="o">@</span><span class="n">gutter</span> <span class="o">/</span> <span class="m">2</span><span class="p">);</span>

                                <span class="c1">// Calculate width based on number of columns available
                                </span>  <span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span class="nd">:</span> <span class="o">@</span><span class="nt">grid-float-breakpoint</span><span class="o">)</span> <span class="p">{</span>
                                <span class="nl">float</span><span class="p">:</span> <span class="nb">left</span><span class="p">;</span>
                                <span class="nl">width</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">((</span><span class="o">@</span><span class="n">columns</span> <span class="o">/</span> <span class="o">@</span><span class="n">grid-columns</span><span class="p">));</span>
                                <span class="p">}</span>
                                <span class="p">}</span>

<span class="c1">// Generate the small columns
</span><span class="nc">.make-sm-column</span><span class="o">(@</span><span class="nt">columns</span><span class="p">;</span> <span class="k">@gutter</span><span class="nd">:</span> <span class="o">@</span><span class="nt">grid-gutter-width</span><span class="o">)</span> <span class="p">{</span>
                                <span class="nl">position</span><span class="p">:</span> <span class="nb">relative</span><span class="p">;</span>
                                <span class="c1">// Prevent columns from collapsing when empty
                                </span>  <span class="nl">min-height</span><span class="p">:</span> <span class="m">1px</span><span class="p">;</span>
                                <span class="c1">// Inner gutter via padding
                                </span>  <span class="nl">padding-left</span><span class="p">:</span>  <span class="p">(</span><span class="o">@</span><span class="n">gutter</span> <span class="o">/</span> <span class="m">2</span><span class="p">);</span>
                                <span class="nl">padding-right</span><span class="p">:</span> <span class="p">(</span><span class="o">@</span><span class="n">gutter</span> <span class="o">/</span> <span class="m">2</span><span class="p">);</span>

                                <span class="c1">// Calculate width based on number of columns available
                                </span>  <span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span class="nd">:</span> <span class="o">@</span><span class="nt">screen-sm-min</span><span class="o">)</span> <span class="p">{</span>
                                <span class="nl">float</span><span class="p">:</span> <span class="nb">left</span><span class="p">;</span>
                                <span class="nl">width</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">((</span><span class="o">@</span><span class="n">columns</span> <span class="o">/</span> <span class="o">@</span><span class="n">grid-columns</span><span class="p">));</span>
                                <span class="p">}</span>
                                <span class="p">}</span>

<span class="c1">// Generate the small column offsets
</span><span class="nc">.make-sm-column-offset</span><span class="o">(@</span><span class="nt">columns</span><span class="o">)</span> <span class="p">{</span>
                                <span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span class="nd">:</span> <span class="o">@</span><span class="nt">screen-sm-min</span><span class="o">)</span> <span class="p">{</span>
                                <span class="nl">margin-left</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">((</span><span class="o">@</span><span class="n">columns</span> <span class="o">/</span> <span class="o">@</span><span class="n">grid-columns</span><span class="p">));</span>
                                <span class="p">}</span>
                                <span class="p">}</span>
                            <span class="nc">.make-sm-column-push</span><span class="o">(@</span><span class="nt">columns</span><span class="o">)</span> <span class="p">{</span>
                                <span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span class="nd">:</span> <span class="o">@</span><span class="nt">screen-sm-min</span><span class="o">)</span> <span class="p">{</span>
                                <span class="nl">left</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">((</span><span class="o">@</span><span class="n">columns</span> <span class="o">/</span> <span class="o">@</span><span class="n">grid-columns</span><span class="p">));</span>
                                <span class="p">}</span>
                                <span class="p">}</span>
                            <span class="nc">.make-sm-column-pull</span><span class="o">(@</span><span class="nt">columns</span><span class="o">)</span> <span class="p">{</span>
                                <span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span class="nd">:</span> <span class="o">@</span><span class="nt">screen-sm-min</span><span class="o">)</span> <span class="p">{</span>
                                <span class="nl">right</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">((</span><span class="o">@</span><span class="n">columns</span> <span class="o">/</span> <span class="o">@</span><span class="n">grid-columns</span><span class="p">));</span>
                                <span class="p">}</span>
                                <span class="p">}</span>

<span class="c1">// Generate the medium columns
</span><span class="nc">.make-md-column</span><span class="o">(@</span><span class="nt">columns</span><span class="p">;</span> <span class="k">@gutter</span><span class="nd">:</span> <span class="o">@</span><span class="nt">grid-gutter-width</span><span class="o">)</span> <span class="p">{</span>
                                <span class="nl">position</span><span class="p">:</span> <span class="nb">relative</span><span class="p">;</span>
                                <span class="c1">// Prevent columns from collapsing when empty
                                </span>  <span class="nl">min-height</span><span class="p">:</span> <span class="m">1px</span><span class="p">;</span>
                                <span class="c1">// Inner gutter via padding
                                </span>  <span class="nl">padding-left</span><span class="p">:</span>  <span class="p">(</span><span class="o">@</span><span class="n">gutter</span> <span class="o">/</span> <span class="m">2</span><span class="p">);</span>
                                <span class="nl">padding-right</span><span class="p">:</span> <span class="p">(</span><span class="o">@</span><span class="n">gutter</span> <span class="o">/</span> <span class="m">2</span><span class="p">);</span>

                                <span class="c1">// Calculate width based on number of columns available
                                </span>  <span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span class="nd">:</span> <span class="o">@</span><span class="nt">screen-md-min</span><span class="o">)</span> <span class="p">{</span>
                                <span class="nl">float</span><span class="p">:</span> <span class="nb">left</span><span class="p">;</span>
                                <span class="nl">width</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">((</span><span class="o">@</span><span class="n">columns</span> <span class="o">/</span> <span class="o">@</span><span class="n">grid-columns</span><span class="p">));</span>
                                <span class="p">}</span>
                                <span class="p">}</span>

<span class="c1">// Generate the medium column offsets
</span><span class="nc">.make-md-column-offset</span><span class="o">(@</span><span class="nt">columns</span><span class="o">)</span> <span class="p">{</span>
                                <span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span class="nd">:</span> <span class="o">@</span><span class="nt">screen-md-min</span><span class="o">)</span> <span class="p">{</span>
                                <span class="nl">margin-left</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">((</span><span class="o">@</span><span class="n">columns</span> <span class="o">/</span> <span class="o">@</span><span class="n">grid-columns</span><span class="p">));</span>
                                <span class="p">}</span>
                                <span class="p">}</span>
                            <span class="nc">.make-md-column-push</span><span class="o">(@</span><span class="nt">columns</span><span class="o">)</span> <span class="p">{</span>
                                <span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span class="nd">:</span> <span class="o">@</span><span class="nt">screen-md-min</span><span class="o">)</span> <span class="p">{</span>
                                <span class="nl">left</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">((</span><span class="o">@</span><span class="n">columns</span> <span class="o">/</span> <span class="o">@</span><span class="n">grid-columns</span><span class="p">));</span>
                                <span class="p">}</span>
                                <span class="p">}</span>
                            <span class="nc">.make-md-column-pull</span><span class="o">(@</span><span class="nt">columns</span><span class="o">)</span> <span class="p">{</span>
                                <span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span class="nd">:</span> <span class="o">@</span><span class="nt">screen-md-min</span><span class="o">)</span> <span class="p">{</span>
                                <span class="nl">right</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">((</span><span class="o">@</span><span class="n">columns</span> <span class="o">/</span> <span class="o">@</span><span class="n">grid-columns</span><span class="p">));</span>
                                <span class="p">}</span>
                                <span class="p">}</span>

<span class="c1">// Generate the large columns
</span><span class="nc">.make-lg-column</span><span class="o">(@</span><span class="nt">columns</span><span class="p">;</span> <span class="k">@gutter</span><span class="nd">:</span> <span class="o">@</span><span class="nt">grid-gutter-width</span><span class="o">)</span> <span class="p">{</span>
                                <span class="nl">position</span><span class="p">:</span> <span class="nb">relative</span><span class="p">;</span>
                                <span class="c1">// Prevent columns from collapsing when empty
                                </span>  <span class="nl">min-height</span><span class="p">:</span> <span class="m">1px</span><span class="p">;</span>
                                <span class="c1">// Inner gutter via padding
                                </span>  <span class="nl">padding-left</span><span class="p">:</span>  <span class="p">(</span><span class="o">@</span><span class="n">gutter</span> <span class="o">/</span> <span class="m">2</span><span class="p">);</span>
                                <span class="nl">padding-right</span><span class="p">:</span> <span class="p">(</span><span class="o">@</span><span class="n">gutter</span> <span class="o">/</span> <span class="m">2</span><span class="p">);</span>

                                <span class="c1">// Calculate width based on number of columns available
                                </span>  <span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span class="nd">:</span> <span class="o">@</span><span class="nt">screen-lg-min</span><span class="o">)</span> <span class="p">{</span>
                                <span class="nl">float</span><span class="p">:</span> <span class="nb">left</span><span class="p">;</span>
                                <span class="nl">width</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">((</span><span class="o">@</span><span class="n">columns</span> <span class="o">/</span> <span class="o">@</span><span class="n">grid-columns</span><span class="p">));</span>
                                <span class="p">}</span>
                                <span class="p">}</span>

<span class="c1">// Generate the large column offsets
</span><span class="nc">.make-lg-column-offset</span><span class="o">(@</span><span class="nt">columns</span><span class="o">)</span> <span class="p">{</span>
                                <span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span class="nd">:</span> <span class="o">@</span><span class="nt">screen-lg-min</span><span class="o">)</span> <span class="p">{</span>
                                <span class="nl">margin-left</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">((</span><span class="o">@</span><span class="n">columns</span> <span class="o">/</span> <span class="o">@</span><span class="n">grid-columns</span><span class="p">));</span>
                                <span class="p">}</span>
                                <span class="p">}</span>
                            <span class="nc">.make-lg-column-push</span><span class="o">(@</span><span class="nt">columns</span><span class="o">)</span> <span class="p">{</span>
                                <span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span class="nd">:</span> <span class="o">@</span><span class="nt">screen-lg-min</span><span class="o">)</span> <span class="p">{</span>
                                <span class="nl">left</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">((</span><span class="o">@</span><span class="n">columns</span> <span class="o">/</span> <span class="o">@</span><span class="n">grid-columns</span><span class="p">));</span>
                                <span class="p">}</span>
                                <span class="p">}</span>
                            <span class="nc">.make-lg-column-pull</span><span class="o">(@</span><span class="nt">columns</span><span class="o">)</span> <span class="p">{</span>
                                <span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span class="nd">:</span> <span class="o">@</span><span class="nt">screen-lg-min</span><span class="o">)</span> <span class="p">{</span>
                                <span class="nl">right</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">((</span><span class="o">@</span><span class="n">columns</span> <span class="o">/</span> <span class="o">@</span><span class="n">grid-columns</span><span class="p">));</span>
                                <span class="p">}</span>
                                <span class="p">}</span></code></pre></div>

                <h3 id="-1"><a data-anchorjs-icon="" aria-label="Anchor link for:  1" href="#-1" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>实例展示</h3>
                <p>你可以重新修改这些变量的值，或者用默认值调用这些 mixin。下面就是一个利用默认设置生成两列布局（列之间有间隔）的案例。</p>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="scss" class="language-scss"><span class="nc">.wrapper</span> <span class="p">{</span>
                                <span class="nc">.make-row</span><span class="o">()</span><span class="p">;</span>
                                <span class="p">}</span>
                            <span class="nc">.content-main</span> <span class="p">{</span>
                                <span class="nc">.make-lg-column</span><span class="o">(</span><span class="nt">8</span><span class="o">)</span><span class="p">;</span>
                                <span class="p">}</span>
                            <span class="nc">.content-secondary</span> <span class="p">{</span>
                                <span class="nc">.make-lg-column</span><span class="o">(</span><span class="nt">3</span><span class="o">)</span><span class="p">;</span>
                                <span class="nc">.make-lg-column-offset</span><span class="o">(</span><span class="nt">1</span><span class="o">)</span><span class="p">;</span>
                                <span class="p">}</span></code></pre></div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"wrapper"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"content-main"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"content-secondary"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;/div&gt;</span></code></pre></div>
            </div>

            <div class="bs-docs-section">
                <h1 class="page-header" id="type"><a data-anchorjs-icon="" aria-label="Anchor link for: type" href="#type" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>排版</h1>

                <!-- Headings -->
                <h2 id="type-headings"><a data-anchorjs-icon="" aria-label="Anchor link for: type headings" href="#type-headings" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>标题</h2>
                <p>HTML 中的所有标题标签，<code>&lt;h1&gt;</code> 到 <code>&lt;h6&gt;</code> 均可使用。另外，还提供了 <code>.h1</code> 到 <code>.h6</code> 类，为的是给内联（inline）属性的文本赋予标题的样式。</p>
                <div data-example-id="simple-headings" class="bs-example bs-example-type">
                    <table class="table">
                        <tbody>
                        <tr>
                            <td><h1>h1. Bootstrap heading</h1></td>
                            <td class="type-info">Semibold 36px</td>
                        </tr>
                        <tr>
                            <td><h2>h2. Bootstrap heading</h2></td>
                            <td class="type-info">Semibold 30px</td>
                        </tr>
                        <tr>
                            <td><h3>h3. Bootstrap heading</h3></td>
                            <td class="type-info">Semibold 24px</td>
                        </tr>
                        <tr>
                            <td><h4>h4. Bootstrap heading</h4></td>
                            <td class="type-info">Semibold 18px</td>
                        </tr>
                        <tr>
                            <td><h5>h5. Bootstrap heading</h5></td>
                            <td class="type-info">Semibold 14px</td>
                        </tr>
                        <tr>
                            <td><h6>h6. Bootstrap heading</h6></td>
                            <td class="type-info">Semibold 12px</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;h1&gt;</span>h1. Bootstrap heading<span class="nt">&lt;/h1&gt;</span>
                            <span class="nt">&lt;h2&gt;</span>h2. Bootstrap heading<span class="nt">&lt;/h2&gt;</span>
                            <span class="nt">&lt;h3&gt;</span>h3. Bootstrap heading<span class="nt">&lt;/h3&gt;</span>
                            <span class="nt">&lt;h4&gt;</span>h4. Bootstrap heading<span class="nt">&lt;/h4&gt;</span>
                            <span class="nt">&lt;h5&gt;</span>h5. Bootstrap heading<span class="nt">&lt;/h5&gt;</span>
                            <span class="nt">&lt;h6&gt;</span>h6. Bootstrap heading<span class="nt">&lt;/h6&gt;</span></code></pre></div>

                <p>在标题内还可以包含 <code>&lt;small&gt;</code> 标签或赋予 <code>.small</code> 类的元素，可以用来标记副标题。</p>
                <div data-example-id="small-headings" class="bs-example bs-example-type">
                    <table class="table">
                        <tbody>
                        <tr>
                            <td><h1>h1. Bootstrap heading <small>Secondary text</small></h1></td>
                        </tr>
                        <tr>
                            <td><h2>h2. Bootstrap heading <small>Secondary text</small></h2></td>
                        </tr>
                        <tr>
                            <td><h3>h3. Bootstrap heading <small>Secondary text</small></h3></td>
                        </tr>
                        <tr>
                            <td><h4>h4. Bootstrap heading <small>Secondary text</small></h4></td>
                        </tr>
                        <tr>
                            <td><h5>h5. Bootstrap heading <small>Secondary text</small></h5></td>
                        </tr>
                        <tr>
                            <td><h6>h6. Bootstrap heading <small>Secondary text</small></h6></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;h1&gt;</span>h1. Bootstrap heading <span class="nt">&lt;small&gt;</span>Secondary text<span class="nt">&lt;/small&gt;&lt;/h1&gt;</span>
                            <span class="nt">&lt;h2&gt;</span>h2. Bootstrap heading <span class="nt">&lt;small&gt;</span>Secondary text<span class="nt">&lt;/small&gt;&lt;/h2&gt;</span>
                            <span class="nt">&lt;h3&gt;</span>h3. Bootstrap heading <span class="nt">&lt;small&gt;</span>Secondary text<span class="nt">&lt;/small&gt;&lt;/h3&gt;</span>
                            <span class="nt">&lt;h4&gt;</span>h4. Bootstrap heading <span class="nt">&lt;small&gt;</span>Secondary text<span class="nt">&lt;/small&gt;&lt;/h4&gt;</span>
                            <span class="nt">&lt;h5&gt;</span>h5. Bootstrap heading <span class="nt">&lt;small&gt;</span>Secondary text<span class="nt">&lt;/small&gt;&lt;/h5&gt;</span>
                            <span class="nt">&lt;h6&gt;</span>h6. Bootstrap heading <span class="nt">&lt;small&gt;</span>Secondary text<span class="nt">&lt;/small&gt;&lt;/h6&gt;</span></code></pre></div>


                <!-- Body copy -->
                <h2 id="type-body-copy"><a data-anchorjs-icon="" aria-label="Anchor link for: type body copy" href="#type-body-copy" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>页面主体</h2>
                <p>Bootstrap 将全局 <code>font-size</code> 设置为 <strong>14px</strong>，<code>line-height</code> 设置为 <strong>1.428</strong>。这些属性直接赋予 <code>&lt;body&gt;</code> 元素和所有段落元素。另外，<code>&lt;p&gt;</code> （段落）元素还被设置了等于 1/2 行高（即 10px）的底部外边距（margin）。</p>
                <div data-example-id="body-copy" class="bs-example">
                    <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla.</p>
                    <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                </div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;p&gt;</span>...<span class="nt">&lt;/p&gt;</span></code></pre></div>

                <!-- Body copy .lead -->
                <h3 id="-2"><a data-anchorjs-icon="" aria-label="Anchor link for:  2" href="#-2" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>中心内容</h3>
                <p>通过添加 <code>.lead</code> 类可以让段落突出显示。</p>
                <div data-example-id="lead-copy" class="bs-example">
                    <p class="lead">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.</p>
                </div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"lead"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span></code></pre></div>

                <!-- Using Less -->
                <h3 id="less-1"><a data-anchorjs-icon="" aria-label="Anchor link for: less 1" href="#less-1" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>使用 Less 工具构建</h3>
                <p><strong>variables.less</strong> 文件中定义的两个 Less 变量决定了排版尺寸：<code>@font-size-base</code> 和 <code>@line-height-base</code>。第一个变量定义了全局 font-size 基准，第二个变量是 line-height 基准。我们使用这些变量和一些简单的公式计算出其它所有页面元素的 margin、 padding 和 line-height。自定义这些变量即可改变 Bootstrap 的默认样式。</p>

                <!-- Inline text elements -->
                <h2 id="type-inline-text"><a data-anchorjs-icon="" aria-label="Anchor link for: type inline text" href="#type-inline-text" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>内联文本元素</h2>
                <h3 id="marked-text"><a data-anchorjs-icon="" aria-label="Anchor link for: marked text" href="#marked-text" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Marked text</h3>
                <p>For highlighting a run of text due to its relevance in another context, use the <code>&lt;mark&gt;</code> tag.</p>
                <div data-example-id="simple-mark" class="bs-example">
                    <p>You can use the mark tag to <mark>highlight</mark> text.</p>
                </div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html">You can use the mark tag to <span class="nt">&lt;mark&gt;</span>highlight<span class="nt">&lt;/mark&gt;</span> text.</code></pre></div>


                <h3 id="-3"><a data-anchorjs-icon="" aria-label="Anchor link for:  3" href="#-3" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>被删除的文本</h3>
                <p>对于被删除的文本使用 <code>&lt;del&gt;</code> 标签。</p>
                <div data-example-id="simple-del" class="bs-example">
                    <p><del>This line of text is meant to be treated as deleted text.</del></p>
                </div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;del&gt;</span>This line of text is meant to be treated as deleted text.<span class="nt">&lt;/del&gt;</span></code></pre></div>

                <h3 id="-4"><a data-anchorjs-icon="" aria-label="Anchor link for:  4" href="#-4" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>无用文本</h3>
                <p>对于没用的文本使用 <code>&lt;s&gt;</code> 标签。</p>
                <div data-example-id="simple-s" class="bs-example">
                    <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
                </div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;s&gt;</span>This line of text is meant to be treated as no longer accurate.<span class="nt">&lt;/s&gt;</span></code></pre></div>

                <h3 id="-5"><a data-anchorjs-icon="" aria-label="Anchor link for:  5" href="#-5" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>插入文本</h3>
                <p>额外插入的文本使用 <code>&lt;ins&gt;</code> 标签。</p>
                <div data-example-id="simple-ins" class="bs-example">
                    <p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
                </div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;ins&gt;</span>This line of text is meant to be treated as an addition to the document.<span class="nt">&lt;/ins&gt;</span></code></pre></div>

                <h3 id="-6"><a data-anchorjs-icon="" aria-label="Anchor link for:  6" href="#-6" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>带下划线的文本</h3>
                <p>为文本添加下划线，使用 <code>&lt;u&gt;</code> 标签。</p>
                <div data-example-id="simple-u" class="bs-example">
                    <p><u>This line of text will render as underlined</u></p>
                </div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;u&gt;</span>This line of text will render as underlined<span class="nt">&lt;/u&gt;</span></code></pre></div>

                <p>利用 HTML 自带的表示强调意味的标签来为文本增添少量样式。</p>

                <h3 id="-7"><a data-anchorjs-icon="" aria-label="Anchor link for:  7" href="#-7" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>小号文本</h3>
                <p>对于不需要强调的inline或block类型的文本，使用 <code>&lt;small&gt;</code> 标签包裹，其内的文本将被设置为父容器字体大小的 85%。标题元素中嵌套的 <code>&lt;small&gt;</code> 元素被设置不同的 <code>font-size</code> 。</p>
                <p>你还可以为行内元素赋予 <code>.small</code> 类以代替任何 <code>&lt;small&gt;</code> 元素。</p>
                <div data-example-id="simple-small" class="bs-example">
                    <p><small>This line of text is meant to be treated as fine print.</small></p>
                </div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;small&gt;</span>This line of text is meant to be treated as fine print.<span class="nt">&lt;/small&gt;</span></code></pre></div>


                <h3 id="-8"><a data-anchorjs-icon="" aria-label="Anchor link for:  8" href="#-8" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>着重</h3>
                <p>通过增加 font-weight 值强调一段文本。</p>
                <div data-example-id="simple-strong" class="bs-example">
                    <p>The following snippet of text is <strong>rendered as bold text</strong>.</p>
                </div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;strong&gt;</span>rendered as bold text<span class="nt">&lt;/strong&gt;</span></code></pre></div>

                <h3 id="-9"><a data-anchorjs-icon="" aria-label="Anchor link for:  9" href="#-9" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>斜体</h3>
                <p>用斜体强调一段文本。</p>
                <div data-example-id="simple-em" class="bs-example">
                    <p>The following snippet of text is <em>rendered as italicized text</em>.</p>
                </div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;em&gt;</span>rendered as italicized text<span class="nt">&lt;/em&gt;</span></code></pre></div>

                <div id="callout-type-b-i-elems" class="bs-callout bs-callout-info">
                    <h4>Alternate elements</h4>
                    <p>在 HTML5 中可以放心使用 <code>&lt;b&gt;</code> 和 <code>&lt;i&gt;</code> 标签。<code>&lt;b&gt;</code> 用于高亮单词或短语，不带有任何着重的意味；而 <code>&lt;i&gt;</code> 标签主要用于发言、技术词汇等。</p>
                </div>

                <h2 id="type-alignment"><a data-anchorjs-icon="" aria-label="Anchor link for: type alignment" href="#type-alignment" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>对齐</h2>
                <p>通过文本对齐类，可以简单方便的将文字重新对齐。</p>
                <div data-example-id="text-alignment" class="bs-example">
                    <p class="text-left">Left aligned text.</p>
                    <p class="text-center">Center aligned text.</p>
                    <p class="text-right">Right aligned text.</p>
                    <p class="text-justify">Justified text.</p>
                    <p class="text-nowrap">No wrap text.</p>
                </div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-left"</span><span class="nt">&gt;</span>Left aligned text.<span class="nt">&lt;/p&gt;</span>
                            <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-center"</span><span class="nt">&gt;</span>Center aligned text.<span class="nt">&lt;/p&gt;</span>
                            <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-right"</span><span class="nt">&gt;</span>Right aligned text.<span class="nt">&lt;/p&gt;</span>
                            <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-justify"</span><span class="nt">&gt;</span>Justified text.<span class="nt">&lt;/p&gt;</span>
                            <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-nowrap"</span><span class="nt">&gt;</span>No wrap text.<span class="nt">&lt;/p&gt;</span></code></pre></div>

                <h2 id="type-transformation"><a data-anchorjs-icon="" aria-label="Anchor link for: type transformation" href="#type-transformation" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>改变大小写</h2>
                <p>通过这几个类可以改变文本的大小写。</p>
                <div data-example-id="text-capitalization" class="bs-example">
                    <p class="text-lowercase">Lowercased text.</p>
                    <p class="text-uppercase">Uppercased text.</p>
                    <p class="text-capitalize">Capitalized text.</p>
                </div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-lowercase"</span><span class="nt">&gt;</span>Lowercased text.<span class="nt">&lt;/p&gt;</span>
                            <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-uppercase"</span><span class="nt">&gt;</span>Uppercased text.<span class="nt">&lt;/p&gt;</span>
                            <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-capitalize"</span><span class="nt">&gt;</span>Capitalized text.<span class="nt">&lt;/p&gt;</span></code></pre></div>

                <!-- Abbreviations -->
                <h2 id="type-abbreviations"><a data-anchorjs-icon="" aria-label="Anchor link for: type abbreviations" href="#type-abbreviations" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>缩略语</h2>
                <p>当鼠标悬停在缩写和缩写词上时就会显示完整内容，Bootstrap 实现了对 HTML 的 <code>&lt;abbr&gt;</code> 元素的增强样式。缩略语元素带有 <code>title</code> 属性，外观表现为带有较浅的虚线框，鼠标移至上面时会变成带有“问号”的指针。如想看完整的内容可把鼠标悬停在缩略语上（对使用辅助技术的用户也可见）, 但需要包含 title 属性。</p>

                <h3 id="-10"><a data-anchorjs-icon="" aria-label="Anchor link for:  10" href="#-10" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>基本缩略语</h3>
                <div data-example-id="simple-abbr" class="bs-example">
                    <p>An abbreviation of the word attribute is <abbr title="attribute">attr</abbr>.</p>
                </div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;abbr</span> <span class="na">title=</span><span class="s">"attribute"</span><span class="nt">&gt;</span>attr<span class="nt">&lt;/abbr&gt;</span></code></pre></div>

                <h3 id="-11"><a data-anchorjs-icon="" aria-label="Anchor link for:  11" href="#-11" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>首字母缩略语</h3>
                <p>为缩略语添加 <code>.initialism</code> 类，可以让 font-size 变得稍微小些。</p>
                <div data-example-id="simple-initialism" class="bs-example">
                    <p><abbr class="initialism" title="HyperText Markup Language">HTML</abbr> is the best thing since sliced bread.</p>
                </div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;abbr</span> <span class="na">title=</span><span class="s">"HyperText Markup Language"</span> <span class="na">class=</span><span class="s">"initialism"</span><span class="nt">&gt;</span>HTML<span class="nt">&lt;/abbr&gt;</span></code></pre></div>


                <!-- Addresses -->
                <h2 id="type-addresses"><a data-anchorjs-icon="" aria-label="Anchor link for: type addresses" href="#type-addresses" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>地址</h2>
                <p>让联系信息以最接近日常使用的格式呈现。在每行结尾添加 <code>&lt;br&gt;</code> 可以保留需要的样式。</p>
                <div data-example-id="simple-address" class="bs-example">
                    <address>
                        <strong>Twitter, Inc.</strong><br>
                        795 Folsom Ave, Suite 600<br>
                        San Francisco, CA 94107<br>
                        <abbr title="Phone">P:</abbr> (123) 456-7890
                    </address>
                    <address>
                        <strong>Full Name</strong><br>
                        <a href="mailto:#">first.last@example.com</a>
                    </address>
                </div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;address&gt;</span>
                            <span class="nt">&lt;strong&gt;</span>Twitter, Inc.<span class="nt">&lt;/strong&gt;&lt;br&gt;</span>
                            795 Folsom Ave, Suite 600<span class="nt">&lt;br&gt;</span>
                            San Francisco, CA 94107<span class="nt">&lt;br&gt;</span>
                            <span class="nt">&lt;abbr</span> <span class="na">title=</span><span class="s">"Phone"</span><span class="nt">&gt;</span>P:<span class="nt">&lt;/abbr&gt;</span> (123) 456-7890
                            <span class="nt">&lt;/address&gt;</span>

                            <span class="nt">&lt;address&gt;</span>
                            <span class="nt">&lt;strong&gt;</span>Full Name<span class="nt">&lt;/strong&gt;&lt;br&gt;</span>
                            <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"mailto:#"</span><span class="nt">&gt;</span>first.last@example.com<span class="nt">&lt;/a&gt;</span>
                            <span class="nt">&lt;/address&gt;</span></code></pre></div>


                <!-- Blockquotes -->
                <h2 id="type-blockquotes"><a data-anchorjs-icon="" aria-label="Anchor link for: type blockquotes" href="#type-blockquotes" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>引用</h2>
                <p>在你的文档中引用其他来源的内容。</p>

                <h3 id="-12"><a data-anchorjs-icon="" aria-label="Anchor link for:  12" href="#-12" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>默认样式的引用</h3>
                <p>将任何 <abbr title="HyperText Markup Language">HTML</abbr> 元素包裹在 <code>&lt;blockquote&gt;</code> 中即可表现为引用样式。对于直接引用，我们建议用 <code>&lt;p&gt;</code> 标签。</p>
                <div data-example-id="simple-blockquote" class="bs-example">
                    <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    </blockquote>
                </div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;blockquote&gt;</span>
                            <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
                            <span class="nt">&lt;/blockquote&gt;</span></code></pre></div>

                <h3 id="-13"><a data-anchorjs-icon="" aria-label="Anchor link for:  13" href="#-13" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>多种引用样式</h3>
                <p>对于标准样式的 <code>&lt;blockquote&gt;</code>，可以通过几个简单的变体就能改变风格和内容。</p>

                <h4 id="-14"><a data-anchorjs-icon="" aria-label="Anchor link for:  14" href="#-14" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>命名来源</h4>
                <p>添加 <code>&lt;footer&gt;</code> 用于标明引用来源。来源的名称可以包裹进 <code>&lt;cite&gt;</code>标签中。</p>
                <div data-example-id="blockquote-cite" class="bs-example">
                    <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                    </blockquote>
                </div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;blockquote&gt;</span>
                            <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
                            <span class="nt">&lt;footer&gt;</span>Someone famous in <span class="nt">&lt;cite</span> <span class="na">title=</span><span class="s">"Source Title"</span><span class="nt">&gt;</span>Source Title<span class="nt">&lt;/cite&gt;&lt;/footer&gt;</span>
                            <span class="nt">&lt;/blockquote&gt;</span></code></pre></div>

                <h4 id="-15"><a data-anchorjs-icon="" aria-label="Anchor link for:  15" href="#-15" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>另一种展示风格</h4>
                <p>通过赋予 <code>.blockquote-reverse</code> 类可以让引用呈现内容右对齐的效果。</p>
                <div data-example-id="blockquote-reverse" style="overflow: hidden;" class="bs-example">
                    <blockquote class="blockquote-reverse">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                    </blockquote>
                </div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;blockquote</span> <span class="na">class=</span><span class="s">"blockquote-reverse"</span><span class="nt">&gt;</span>
                            ...
                            <span class="nt">&lt;/blockquote&gt;</span></code></pre></div>


                <!-- Lists -->
                <h2 id="type-lists"><a data-anchorjs-icon="" aria-label="Anchor link for: type lists" href="#type-lists" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>列表</h2>

                <h3 id="-16"><a data-anchorjs-icon="" aria-label="Anchor link for:  16" href="#-16" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>无序列表</h3>
                <p>排列顺序<em>无关紧要</em>的一列元素。</p>
                <div data-example-id="simple-ul" class="bs-example">
                    <ul>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Consectetur adipiscing elit</li>
                        <li>Integer molestie lorem at massa</li>
                        <li>Facilisis in pretium nisl aliquet</li>
                        <li>Nulla volutpat aliquam velit
                            <ul>
                                <li>Phasellus iaculis neque</li>
                                <li>Purus sodales ultricies</li>
                                <li>Vestibulum laoreet porttitor sem</li>
                                <li>Ac tristique libero volutpat at</li>
                            </ul>
                        </li>
                        <li>Faucibus porta lacus fringilla vel</li>
                        <li>Aenean sit amet erat nunc</li>
                        <li>Eget porttitor lorem</li>
                    </ul>
                </div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;ul&gt;</span>
                            <span class="nt">&lt;li&gt;</span>...<span class="nt">&lt;/li&gt;</span>
                            <span class="nt">&lt;/ul&gt;</span></code></pre></div>

                <h3 id="-17"><a data-anchorjs-icon="" aria-label="Anchor link for:  17" href="#-17" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>有序列表</h3>
                <p>顺序<em>至关重要</em>的一组元素。</p>
                <div data-example-id="simple-ol" class="bs-example">
                    <ol>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Consectetur adipiscing elit</li>
                        <li>Integer molestie lorem at massa</li>
                        <li>Facilisis in pretium nisl aliquet</li>
                        <li>Nulla volutpat aliquam velit</li>
                        <li>Faucibus porta lacus fringilla vel</li>
                        <li>Aenean sit amet erat nunc</li>
                        <li>Eget porttitor lorem</li>
                    </ol>
                </div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;ol&gt;</span>
                            <span class="nt">&lt;li&gt;</span>...<span class="nt">&lt;/li&gt;</span>
                            <span class="nt">&lt;/ol&gt;</span></code></pre></div>

                <h3 id="-18"><a data-anchorjs-icon="" aria-label="Anchor link for:  18" href="#-18" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>无样式列表</h3>
                <p>移除了默认的 <code>list-style</code> 样式和左侧外边距的一组元素（只针对直接子元素）。<strong>这是针对直接子元素的</strong>，也就是说，你需要对所有嵌套的列表都添加这个类才能具有同样的样式。</p>
                <div data-example-id="unstyled-list" class="bs-example">
                    <ul class="list-unstyled">
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Consectetur adipiscing elit</li>
                        <li>Integer molestie lorem at massa</li>
                        <li>Facilisis in pretium nisl aliquet</li>
                        <li>Nulla volutpat aliquam velit
                            <ul>
                                <li>Phasellus iaculis neque</li>
                                <li>Purus sodales ultricies</li>
                                <li>Vestibulum laoreet porttitor sem</li>
                                <li>Ac tristique libero volutpat at</li>
                            </ul>
                        </li>
                        <li>Faucibus porta lacus fringilla vel</li>
                        <li>Aenean sit amet erat nunc</li>
                        <li>Eget porttitor lorem</li>
                    </ul>
                </div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-unstyled"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;li&gt;</span>...<span class="nt">&lt;/li&gt;</span>
                            <span class="nt">&lt;/ul&gt;</span></code></pre></div>

                <h3 id="-19"><a data-anchorjs-icon="" aria-label="Anchor link for:  19" href="#-19" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>内联列表</h3>
                <p>通过设置 <code>display: inline-block;</code> 并添加少量的内补（padding），将所有元素放置于同一行。</p>
                <div data-example-id="list-inline" class="bs-example">
                    <ul class="list-inline">
                        <li>Lorem ipsum</li>
                        <li>Phasellus iaculis</li>
                        <li>Nulla volutpat</li>
                    </ul>
                </div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-inline"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;li&gt;</span>...<span class="nt">&lt;/li&gt;</span>
                            <span class="nt">&lt;/ul&gt;</span></code></pre></div>

                <h3 id="-20"><a data-anchorjs-icon="" aria-label="Anchor link for:  20" href="#-20" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>描述</h3>
                <p>带有描述的短语列表。</p>
                <div data-example-id="simple-dl" class="bs-example">
                    <dl>
                        <dt>Description lists</dt>
                        <dd>A description list is perfect for defining terms.</dd>
                        <dt>Euismod</dt>
                        <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                        <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                        <dt>Malesuada porta</dt>
                        <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                    </dl>
                </div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;dl&gt;</span>
                            <span class="nt">&lt;dt&gt;</span>...<span class="nt">&lt;/dt&gt;</span>
                            <span class="nt">&lt;dd&gt;</span>...<span class="nt">&lt;/dd&gt;</span>
                            <span class="nt">&lt;/dl&gt;</span></code></pre></div>

                <h4 id="-21"><a data-anchorjs-icon="" aria-label="Anchor link for:  21" href="#-21" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>水平排列的描述</h4>
                <p><code>.dl-horizontal</code> 可以让 <code>&lt;dl&gt;</code> 内的短语及其描述排在一行。开始是像 <code>&lt;dl&gt;</code> 的默认样式堆叠在一起，随着导航条逐渐展开而排列在一行。</p>
                <div data-example-id="horizontal-dl" class="bs-example">
                    <dl class="dl-horizontal">
                        <dt>Description lists</dt>
                        <dd>A description list is perfect for defining terms.</dd>
                        <dt>Euismod</dt>
                        <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                        <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                        <dt>Malesuada porta</dt>
                        <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                        <dt>Felis euismod semper eget lacinia</dt>
                        <dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
                    </dl>
                </div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;dl</span> <span class="na">class=</span><span class="s">"dl-horizontal"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;dt&gt;</span>...<span class="nt">&lt;/dt&gt;</span>
                            <span class="nt">&lt;dd&gt;</span>...<span class="nt">&lt;/dd&gt;</span>
                            <span class="nt">&lt;/dl&gt;</span></code></pre></div>

                <div id="callout-type-dl-truncate" class="bs-callout bs-callout-info">
                    <h4>自动截断</h4>
                    <p>通过 <code>text-overflow</code> 属性，水平排列的描述列表将会截断左侧太长的短语。在较窄的视口（viewport）内，列表将变为默认堆叠排列的布局方式。</p>
                </div>
            </div>

            <div class="bs-docs-section">
                <h1 class="page-header" id="code"><a data-anchorjs-icon="" aria-label="Anchor link for: code" href="#code" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>代码</h1>

                <h2 id="code-inline"><a data-anchorjs-icon="" aria-label="Anchor link for: code inline" href="#code-inline" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>内联代码</h2>
                <p>通过 <code>&lt;code&gt;</code> 标签包裹内联样式的代码片段。</p>
                <div data-example-id="inline-code" class="bs-example">
                    For example, <code>&lt;section&gt;</code> should be wrapped as inline.
                </div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html">For example, <span class="nt">&lt;code&gt;</span><span class="ni">&amp;lt;</span>section<span class="ni">&amp;gt;</span><span class="nt">&lt;/code&gt;</span> should be wrapped as inline.</code></pre></div>

                <h2 id="code-user-input"><a data-anchorjs-icon="" aria-label="Anchor link for: code user input" href="#code-user-input" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>用户输入</h2>
                <p>通过 <code>&lt;kbd&gt;</code> 标签标记用户通过键盘输入的内容。=</p>
                <div data-example-id="simple-kbd" class="bs-example">
                    To switch directories, type <kbd>cd</kbd> followed by the name of the directory.<br>
                    To edit settings, press <kbd><kbd>ctrl</kbd> + <kbd>,</kbd></kbd>
                </div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html">To switch directories, type <span class="nt">&lt;kbd&gt;</span>cd<span class="nt">&lt;/kbd&gt;</span> followed by the name of the directory.<span class="nt">&lt;br&gt;</span>
                            To edit settings, press <span class="nt">&lt;kbd&gt;&lt;kbd&gt;</span>ctrl<span class="nt">&lt;/kbd&gt;</span> + <span class="nt">&lt;kbd&gt;</span>,<span class="nt">&lt;/kbd&gt;&lt;/kbd&gt;</span></code></pre></div>

                <h2 id="code-block"><a data-anchorjs-icon="" aria-label="Anchor link for: code block" href="#code-block" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>代码块</h2>
                <p>多行代码可以使用 <code>&lt;pre&gt;</code> 标签。为了正确的展示代码，注意将尖括号做转义处理。</p>
                <div data-example-id="simple-pre" class="bs-example">
                    <pre>&lt;p&gt;Sample text here...&lt;/p&gt;</pre>
                </div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;pre&gt;</span><span class="ni">&amp;lt;</span>p<span class="ni">&amp;gt;</span>Sample text here...<span class="ni">&amp;lt;</span>/p<span class="ni">&amp;gt;</span><span class="nt">&lt;/pre&gt;</span></code></pre></div>

                <p>还可以使用 <code>.pre-scrollable</code> 类，其作用是设置 max-height 为 350px ，并在垂直方向展示滚动条。</p>
                <h2 id="code-variables"><a data-anchorjs-icon="" aria-label="Anchor link for: code variables" href="#code-variables" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>变量</h2>
                <p>通过 <code>&lt;var&gt;</code> 标签标记变量。</p>
                <div data-example-id="simple-var" class="bs-example">
                    <p><var>y</var> = <var>m</var><var>x</var> + <var>b</var></p>

                </div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;var&gt;</span>y<span class="nt">&lt;/var&gt;</span> = <span class="nt">&lt;var&gt;</span>m<span class="nt">&lt;/var&gt;&lt;var&gt;</span>x<span class="nt">&lt;/var&gt;</span> + <span class="nt">&lt;var&gt;</span>b<span class="nt">&lt;/var&gt;</span></code></pre></div>

                <h2 id="code-sample-output"><a data-anchorjs-icon="" aria-label="Anchor link for: code sample output" href="#code-sample-output" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>程序输出</h2>
                <p>通过 <code>&lt;samp&gt;</code> 标签来标记程序输出的内容。</p>
                <div data-example-id="simple-samp" class="bs-example">
                    <p><samp>This text is meant to be treated as sample output from a computer program.</samp></p>
                </div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;samp&gt;</span>This text is meant to be treated as sample output from a computer program.<span class="nt">&lt;/samp&gt;</span></code></pre></div>
            </div>

            <div class="bs-docs-section">
                <h1 class="page-header" id="tables"><a data-anchorjs-icon="" aria-label="Anchor link for: tables" href="#tables" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>表格</h1>

                <h2 id="tables-example"><a data-anchorjs-icon="" aria-label="Anchor link for: tables example" href="#tables-example" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>基本实例</h2>
                <p>为任意 <code>&lt;table&gt;</code> 标签添加 <code>.table</code> 类可以为其赋予基本的样式 &mdash; 少量的内补（padding）和水平方向的分隔线。这种方式看起来很多余！？但是我们觉得，表格元素使用的很广泛，如果我们为其赋予默认样式可能会影响例如日历和日期选择之类的插件，所以我们选择将此样式独立出来。</p>
                <div data-example-id="simple-table" class="bs-example">
                    <table class="table">
                        <caption>Optional table caption.</caption>
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        </tbody>
                    </table>
                </div><!-- /example -->
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table"</span><span class="nt">&gt;</span>
                            ...
                            <span class="nt">&lt;/table&gt;</span></code></pre></div>


                <h2 id="tables-striped"><a data-anchorjs-icon="" aria-label="Anchor link for: tables striped" href="#tables-striped" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>条纹状表格</h2>
                <p>通过 <code>.table-striped</code> 类可以给 <code>&lt;tbody&gt;</code> 之内的每一行增加斑马条纹样式。</p>
                <div id="callout-tables-striped-ie8" class="bs-callout bs-callout-danger">
                    <h4>跨浏览器兼容性</h4>
                    <p>条纹状表格是依赖 <code>:nth-child</code> CSS 选择器实现的，而这一功能不被 Internet Explorer 8 支持。</p>
                </div>
                <div data-example-id="striped-table" class="bs-example">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        </tbody>
                    </table>
                </div><!-- /example -->
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-striped"</span><span class="nt">&gt;</span>
                            ...
                            <span class="nt">&lt;/table&gt;</span></code></pre></div>


                <h2 id="tables-bordered"><a data-anchorjs-icon="" aria-label="Anchor link for: tables bordered" href="#tables-bordered" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>带边框的表格</h2>
                <p>添加 <code>.table-bordered</code> 类为表格和其中的每个单元格增加边框。</p>
                <div data-example-id="bordered-table" class="bs-example">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        </tbody>
                    </table>
                </div><!-- /example -->
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-bordered"</span><span class="nt">&gt;</span>
                            ...
                            <span class="nt">&lt;/table&gt;</span></code></pre></div>


                <h2 id="tables-hover-rows"><a data-anchorjs-icon="" aria-label="Anchor link for: tables hover rows" href="#tables-hover-rows" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>鼠标悬停</h2>
                <p>通过添加 <code>.table-hover</code> 类可以让 <code>&lt;tbody&gt;</code> 中的每一行对鼠标悬停状态作出响应。</p>
                <div data-example-id="hoverable-table" class="bs-example">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        </tbody>
                    </table>
                </div><!-- /example -->
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-hover"</span><span class="nt">&gt;</span>
                            ...
                            <span class="nt">&lt;/table&gt;</span></code></pre></div>


                <h2 id="tables-condensed"><a data-anchorjs-icon="" aria-label="Anchor link for: tables condensed" href="#tables-condensed" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>紧缩表格</h2>
                <p>通过添加 <code>.table-condensed</code> 类可以让表格更加紧凑，单元格中的内补（padding）均会减半。</p>
                <div data-example-id="condensed-table" class="bs-example">
                    <table class="table table-condensed">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        </tbody>
                    </table>
                </div><!-- /example -->
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-condensed"</span><span class="nt">&gt;</span>
                            ...
                            <span class="nt">&lt;/table&gt;</span></code></pre></div>


                <h2 id="tables-contextual-classes"><a data-anchorjs-icon="" aria-label="Anchor link for: tables contextual classes" href="#tables-contextual-classes" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>状态类</h2>
                <p>通过这些状态类可以为行或单元格设置颜色。</p>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <colgroup>
                            <col class="col-xs-1">
                            <col class="col-xs-7">
                        </colgroup>
                        <thead>
                        <tr>
                            <th>Class</th>
                            <th>描述</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">
                                <code>.active</code>
                            </th>
                            <td>鼠标悬停在行或单元格上时所设置的颜色</td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <code>.success</code>
                            </th>
                            <td>标识成功或积极的动作</td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <code>.info</code>
                            </th>
                            <td>标识普通的提示信息或动作</td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <code>.warning</code>
                            </th>
                            <td>标识警告或需要用户注意</td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <code>.danger</code>
                            </th>
                            <td>标识危险或潜在的带来负面影响的动作</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div data-example-id="contextual-table" class="bs-example">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Column heading</th>
                            <th>Column heading</th>
                            <th>Column heading</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="active">
                            <th scope="row">1</th>
                            <td>Column content</td>
                            <td>Column content</td>
                            <td>Column content</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Column content</td>
                            <td>Column content</td>
                            <td>Column content</td>
                        </tr>
                        <tr class="success">
                            <th scope="row">3</th>
                            <td>Column content</td>
                            <td>Column content</td>
                            <td>Column content</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Column content</td>
                            <td>Column content</td>
                            <td>Column content</td>
                        </tr>
                        <tr class="info">
                            <th scope="row">5</th>
                            <td>Column content</td>
                            <td>Column content</td>
                            <td>Column content</td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>Column content</td>
                            <td>Column content</td>
                            <td>Column content</td>
                        </tr>
                        <tr class="warning">
                            <th scope="row">7</th>
                            <td>Column content</td>
                            <td>Column content</td>
                            <td>Column content</td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td>Column content</td>
                            <td>Column content</td>
                            <td>Column content</td>
                        </tr>
                        <tr class="danger">
                            <th scope="row">9</th>
                            <td>Column content</td>
                            <td>Column content</td>
                            <td>Column content</td>
                        </tr>
                        </tbody>
                    </table>
                </div><!-- /example -->
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="c">&lt;!-- On rows --&gt;</span>
                            <span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"active"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
                            <span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"success"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
                            <span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"warning"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
                            <span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"danger"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
                            <span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"info"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>

                            <span class="c">&lt;!-- On cells (`td` or `th`) --&gt;</span>
                            <span class="nt">&lt;tr&gt;</span>
                            <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"active"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
                            <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"success"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
                            <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"warning"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
                            <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"danger"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
                            <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"info"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
                            <span class="nt">&lt;/tr&gt;</span></code></pre></div>
                <div class="bs-callout bs-callout-warning">
                    <h4>向使用辅助技术的用户传达用意</h4>
                    <p>通过为表格中的一行或一个单元格添加颜色而赋予不同的意义只是提供了一种视觉上的表现，并不能为使用辅助技术 -- 例如屏幕阅读器 -- 浏览网页的用户提供更多信息。因此，请确保通过颜色而赋予的不同意义可以通过内容本身来表达（即在相应行或单元格中的可见的文本内容）；或者通过包含额外的方式 -- 例如应用了 <code>.sr-only</code> 类而隐藏的文本 -- 来表达出来。 </p>
                </div>

                <h2 id="tables-responsive"><a data-anchorjs-icon="" aria-label="Anchor link for: tables responsive" href="#tables-responsive" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>响应式表格</h2>
                <p>将任何 <code>.table</code> 元素包裹在 <code>.table-responsive</code> 元素内，即可创建响应式表格，其会在小屏幕设备上（小于768px）水平滚动。当屏幕大于 768px 宽度时，水平滚动条消失。</p>

                <div id="callout-tables-responsive-overflow" class="bs-callout bs-callout-warning">
                    <h4>垂直方向的内容截断</h4>
                    <p>响应式表格使用了 <code>overflow-y: hidden</code> 属性，这样就能将超出表格底部和顶部的内容截断。特别是，也可以截断下拉菜单和其他第三方组件。 </p>
                </div>
                <div id="callout-tables-responsive-ff-fieldset" class="bs-callout bs-callout-warning">
                    <h4>Firefox 和 <code>fieldset</code> 元素</h4>
                    <p>Firefox 浏览器对 <code>fieldset</code> 元素设置了一些影响 <code>width</code> 属性的样式，导致响应式表格出现问题。除非使用我们下面提供的针对 Firefox 的 hack 代码，否则无解：</p>
                    <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="css" class="language-css"><span class="k">@-moz-document</span> <span class="n">url-prefix</span><span class="p">()</span> <span class="p">{</span>
                                    <span class="nt">fieldset</span> <span class="p">{</span> <span class="nl">display</span><span class="p">:</span> <span class="nb">table-cell</span><span class="p">;</span> <span class="p">}</span>
                                    <span class="p">}</span></code></pre></div>
                    <p>更多信息请参考 <a href="https://stackoverflow.com/questions/17408815/fieldset-resizes-wrong-appears-to-have-unremovable-min-width-min-content/17863685#17863685">this Stack Overflow answer</a>.</p>
                </div>

                <div data-example-id="simple-responsive-table" class="bs-example">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Table heading</th>
                                <th>Table heading</th>
                                <th>Table heading</th>
                                <th>Table heading</th>
                                <th>Table heading</th>
                                <th>Table heading</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                            </tr>
                            </tbody>
                        </table>
                    </div><!-- /.table-responsive -->

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Table heading</th>
                                <th>Table heading</th>
                                <th>Table heading</th>
                                <th>Table heading</th>
                                <th>Table heading</th>
                                <th>Table heading</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                            </tr>
                            </tbody>
                        </table>
                    </div><!-- /.table-responsive -->
                </div><!-- /example -->
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"table-responsive"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table"</span><span class="nt">&gt;</span>
                            ...
                            <span class="nt">&lt;/table&gt;</span>
                            <span class="nt">&lt;/div&gt;</span></code></pre></div>
            </div>

            <div class="bs-docs-section">
                <h1 class="page-header" id="forms"><a data-anchorjs-icon="" aria-label="Anchor link for: forms" href="#forms" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>表单</h1>

                <h2 id="forms-example"><a data-anchorjs-icon="" aria-label="Anchor link for: forms example" href="#forms-example" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>基本实例</h2>
                <p>单独的表单控件会被自动赋予一些全局样式。所有设置了 <code>.form-control</code> 类的 <code>&lt;input&gt;</code>、<code>&lt;textarea&gt;</code> 和 <code>&lt;select&gt;</code> 元素都将被默认设置宽度属性为 <code>width: 100%;</code>。 将 <code>label</code> 元素和前面提到的控件包裹在 <code>.form-group</code> 中可以获得最好的排列。</p>
                <div data-example-id="basic-forms" class="bs-example">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" placeholder="Email" id="exampleInputEmail1" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" placeholder="Password" id="exampleInputPassword1" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <input type="file" id="exampleInputFile">
                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Check me out
                            </label>
                        </div>
                        <button class="btn btn-default" type="submit">Submit</button>
                    </form>
                </div><!-- /example -->
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;form&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"exampleInputEmail1"</span><span class="nt">&gt;</span>Email address<span class="nt">&lt;/label&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleInputEmail1"</span> <span class="na">placeholder=</span><span class="s">"Email"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"exampleInputPassword1"</span><span class="nt">&gt;</span>Password<span class="nt">&lt;/label&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"password"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleInputPassword1"</span> <span class="na">placeholder=</span><span class="s">"Password"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"exampleInputFile"</span><span class="nt">&gt;</span>File input<span class="nt">&lt;/label&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"file"</span> <span class="na">id=</span><span class="s">"exampleInputFile"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"help-block"</span><span class="nt">&gt;</span>Example block-level help text here.<span class="nt">&lt;/p&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;label&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span> Check me out
                            <span class="nt">&lt;/label&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Submit<span class="nt">&lt;/button&gt;</span>
                            <span class="nt">&lt;/form&gt;</span></code></pre></div>
                <div id="callout-formgroup-inputgroup" class="bs-callout bs-callout-warning">
                    <h4>不要将表单组合输入框组混合使用</h4>
                    <p>不要将表单组直接和<a href="/components/#input-groups">输入框组</a>混合使用。建议将输入框组嵌套到表单组中使用。</p>
                </div>


                <h2 id="forms-inline"><a data-anchorjs-icon="" aria-label="Anchor link for: forms inline" href="#forms-inline" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>内联表单</h2>
                <p>为 <code>&lt;form&gt;</code> 元素添加 <code>.form-inline</code> 类可使其内容左对齐并且表现为 <code>inline-block</code> 级别的控件。<strong>只适用于视口（viewport）至少在 768px 宽度时（视口宽度再小的话就会使表单折叠）。</strong></p>
                <div id="callout-inline-form-width" class="bs-callout bs-callout-danger">
                    <h4>可能需要手动设置宽度</h4>
                    <p>在 Bootstrap 中，输入框和单选/多选框控件默认被设置为 <code>width: 100%;</code> 宽度。在内联表单，我们将这些元素的宽度设置为 <code>width: auto;</code>，因此，多个控件可以排列在同一行。根据你的布局需求，可能需要一些额外的定制化组件。</p>
                </div>
                <div id="callout-inline-form-labels" class="bs-callout bs-callout-warning">
                    <h4>一定要添加 <code>label</code> 标签</h4>
                    <p>如果你没有为每个输入控件设置 <code>label</code> 标签，屏幕阅读器将无法正确识别。对于这些内联表单，你可以通过为 <code>label</code> 设置 <code>.sr-only</code> 类将其隐藏。还有一些辅助技术提供label标签的替代方案，比如 <code>aria-label</code>、<code>aria-labelledby</code> 或 <code>title</code> 属性。如果这些都不存在，屏幕阅读器可能会采取使用 <code>placeholder</code> 属性，如果存在的话，使用占位符来替代其他的标记，但要注意，这种方法是不妥当的。</p>
                </div>

                <div data-example-id="simple-form-inline" class="bs-example">
                    <form class="form-inline">
                        <div class="form-group">
                            <label for="exampleInputName2">Name</label>
                            <input type="text" placeholder="Jane Doe" id="exampleInputName2" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail2">Email</label>
                            <input type="email" placeholder="jane.doe@example.com" id="exampleInputEmail2" class="form-control">
                        </div>
                        <button class="btn btn-default" type="submit">Send invitation</button>
                    </form>
                </div><!-- /example -->
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-inline"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"exampleInputName2"</span><span class="nt">&gt;</span>Name<span class="nt">&lt;/label&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleInputName2"</span> <span class="na">placeholder=</span><span class="s">"Jane Doe"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"exampleInputEmail2"</span><span class="nt">&gt;</span>Email<span class="nt">&lt;/label&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleInputEmail2"</span> <span class="na">placeholder=</span><span class="s">"jane.doe@example.com"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Send invitation<span class="nt">&lt;/button&gt;</span>
                            <span class="nt">&lt;/form&gt;</span></code></pre></div>

                <div data-example-id="simple-form-inline" class="bs-example">
                    <form class="form-inline">
                        <div class="form-group">
                            <label for="exampleInputEmail3" class="sr-only">Email address</label>
                            <input type="email" placeholder="Email" id="exampleInputEmail3" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword3" class="sr-only">Password</label>
                            <input type="password" placeholder="Password" id="exampleInputPassword3" class="form-control">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember me
                            </label>
                        </div>
                        <button class="btn btn-default" type="submit">Sign in</button>
                    </form>
                </div><!-- /example -->
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-inline"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"sr-only"</span> <span class="na">for=</span><span class="s">"exampleInputEmail3"</span><span class="nt">&gt;</span>Email address<span class="nt">&lt;/label&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleInputEmail3"</span> <span class="na">placeholder=</span><span class="s">"Email"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"sr-only"</span> <span class="na">for=</span><span class="s">"exampleInputPassword3"</span><span class="nt">&gt;</span>Password<span class="nt">&lt;/label&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"password"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleInputPassword3"</span> <span class="na">placeholder=</span><span class="s">"Password"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;label&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span> Remember me
                            <span class="nt">&lt;/label&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Sign in<span class="nt">&lt;/button&gt;</span>
                            <span class="nt">&lt;/form&gt;</span></code></pre></div>

                <div data-example-id="form-inline-with-input-group" class="bs-example">
                    <form class="form-inline">
                        <div class="form-group">
                            <label for="exampleInputAmount" class="sr-only">Amount (in dollars)</label>
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
                                <input type="text" placeholder="Amount" id="exampleInputAmount" class="form-control">
                                <div class="input-group-addon">.00</div>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Transfer cash</button>
                    </form>
                </div><!-- /example -->
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-inline"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"sr-only"</span> <span class="na">for=</span><span class="s">"exampleInputAmount"</span><span class="nt">&gt;</span>Amount (in dollars)<span class="nt">&lt;/label&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>$<span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleInputAmount"</span> <span class="na">placeholder=</span><span class="s">"Amount"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>.00<span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Transfer cash<span class="nt">&lt;/button&gt;</span>
                            <span class="nt">&lt;/form&gt;</span></code></pre></div>

                <h2 id="forms-horizontal"><a data-anchorjs-icon="" aria-label="Anchor link for: forms horizontal" href="#forms-horizontal" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>水平排列的表单</h2>
                <p>通过为表单添加 <code>.form-horizontal</code> 类，并联合使用 Bootstrap 预置的栅格类，可以将 <code>label</code> 标签和控件组水平并排布局。这样做将改变 <code>.form-group</code> 的行为，使其表现为栅格系统中的行（row），因此就无需再额外添加 <code>.row</code> 了。</p>
                <div data-example-id="simple-horizontal-form" class="bs-example">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="inputEmail3">Email</label>
                            <div class="col-sm-10">
                                <input type="email" placeholder="Email" id="inputEmail3" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="inputPassword3">Password</label>
                            <div class="col-sm-10">
                                <input type="password" placeholder="Password" id="inputPassword3" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Remember me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button class="btn btn-default" type="submit">Sign in</button>
                            </div>
                        </div>
                    </form>
                </div><!-- /.bs-example -->
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-horizontal"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"inputEmail3"</span> <span class="na">class=</span><span class="s">"col-sm-2 control-label"</span><span class="nt">&gt;</span>Email<span class="nt">&lt;/label&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-10"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputEmail3"</span> <span class="na">placeholder=</span><span class="s">"Email"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"inputPassword3"</span> <span class="na">class=</span><span class="s">"col-sm-2 control-label"</span><span class="nt">&gt;</span>Password<span class="nt">&lt;/label&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-10"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"password"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputPassword3"</span> <span class="na">placeholder=</span><span class="s">"Password"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-offset-2 col-sm-10"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;label&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span> Remember me
                            <span class="nt">&lt;/label&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-offset-2 col-sm-10"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Sign in<span class="nt">&lt;/button&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;/form&gt;</span></code></pre></div>


                <h2 id="forms-controls"><a data-anchorjs-icon="" aria-label="Anchor link for: forms controls" href="#forms-controls" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>被支持的控件</h2>
                <p>表单布局实例中展示了其所支持的标准表单控件。</p>

                <h3 id="-22"><a data-anchorjs-icon="" aria-label="Anchor link for:  22" href="#-22" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>输入框</h3>
                <p>包括大部分表单控件、文本输入域控件，还支持所有 HTML5 类型的输入控件： <code>text</code>、<code>password</code>、<code>datetime</code>、<code>datetime-local</code>、<code>date</code>、<code>month</code>、<code>time</code>、<code>week</code>、<code>number</code>、<code>email</code>、<code>url</code>、<code>search</code>、<code>tel</code> 和 <code>color</code>。</p>
                <div id="callout-input-needs-type" class="bs-callout bs-callout-danger">
                    <h4>必须添加类型声明</h4>
                    <p>只有正确设置了 <code>type</code> 属性的输入控件才能被赋予正确的样式。</p>
                </div>
                <div data-example-id="text-form-control" class="bs-example">
                    <form>
                        <input type="text" placeholder="Text input" class="form-control">
                    </form>
                </div><!-- /.bs-example -->
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Text input"</span><span class="nt">&gt;</span></code></pre></div>
                <div id="callout-xref-input-group" class="bs-callout bs-callout-info">
                    <h4>输入控件组</h4>
                    <p>如需在文本输入域 <code>&lt;input&gt;</code> 前面或后面添加文本内容或按钮控件，请参考<a href="../components/#input-groups">输入控件组</a>。</p>
                </div>

                <h3 id="-23"><a data-anchorjs-icon="" aria-label="Anchor link for:  23" href="#-23" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>文本域</h3>
                <p>支持多行文本的表单控件。可根据需要改变 <code>rows</code> 属性。</p>
                <div data-example-id="textarea-form-control" class="bs-example">
                    <form>
                        <textarea placeholder="Textarea" rows="3" class="form-control"></textarea>
                    </form>
                </div><!-- /.bs-example -->
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;textarea</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">rows=</span><span class="s">"3"</span><span class="nt">&gt;&lt;/textarea&gt;</span></code></pre></div>

                <h3 id="-24"><a data-anchorjs-icon="" aria-label="Anchor link for:  24" href="#-24" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>多选和单选框</h3>
                <p>多选框（checkbox）用于选择列表中的一个或多个选项，而单选框（radio）用于从多个选项中只选择一个。</p>
                <p>设置了 <code>disabled</code> 属性的单选或多选框都能被赋予合适的样式。对于和多选或单选框联合使用的 <code>&lt;label&gt;</code> 标签，如果也希望将悬停于上方的鼠标设置为“禁止点击”的样式，请将 <code>.disabled</code> 类赋予 <code>.radio</code>、<code>.radio-inline</code>、<code>.checkbox</code>、<code>.checkbox-inline</code> 或 <code>&lt;fieldset&gt;</code>。</p>
                <h4 id="-25"><a data-anchorjs-icon="" aria-label="Anchor link for:  25" href="#-25" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>默认外观（堆叠在一起）</h4>
                <div data-example-id="block-checkboxes-radios" class="bs-example">
                    <form>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="">
                                Option one is this and that&mdash;be sure to include why it's great
                            </label>
                        </div>
                        <div class="checkbox disabled">
                            <label>
                                <input type="checkbox" disabled="" value="">
                                Option two is disabled
                            </label>
                        </div>
                        <br>
                        <div class="radio">
                            <label>
                                <input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios">
                                Option one is this and that&mdash;be sure to include why it's great
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios">
                                Option two can be something else and selecting it will deselect option one
                            </label>
                        </div>
                        <div class="radio disabled">
                            <label>
                                <input type="radio" disabled="" value="option3" id="optionsRadios3" name="optionsRadios">
                                Option three is disabled
                            </label>
                        </div>
                    </form>
                </div><!-- /.bs-example -->
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;label&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">value=</span><span class="s">""</span><span class="nt">&gt;</span>
                            Option one is this and that<span class="ni">&amp;mdash;</span>be sure to include why it's great
                            <span class="nt">&lt;/label&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"checkbox disabled"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;label&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">value=</span><span class="s">""</span> <span class="na">disabled</span><span class="nt">&gt;</span>
                            Option two is disabled
                            <span class="nt">&lt;/label&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>

                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"radio"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;label&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"optionsRadios"</span> <span class="na">id=</span><span class="s">"optionsRadios1"</span> <span class="na">value=</span><span class="s">"option1"</span> <span class="na">checked</span><span class="nt">&gt;</span>
                            Option one is this and that<span class="ni">&amp;mdash;</span>be sure to include why it's great
                            <span class="nt">&lt;/label&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"radio"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;label&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"optionsRadios"</span> <span class="na">id=</span><span class="s">"optionsRadios2"</span> <span class="na">value=</span><span class="s">"option2"</span><span class="nt">&gt;</span>
                            Option two can be something else and selecting it will deselect option one
                            <span class="nt">&lt;/label&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"radio disabled"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;label&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"optionsRadios"</span> <span class="na">id=</span><span class="s">"optionsRadios3"</span> <span class="na">value=</span><span class="s">"option3"</span> <span class="na">disabled</span><span class="nt">&gt;</span>
                            Option three is disabled
                            <span class="nt">&lt;/label&gt;</span>
                            <span class="nt">&lt;/div&gt;</span></code></pre></div>

                <h4 id="-26"><a data-anchorjs-icon="" aria-label="Anchor link for:  26" href="#-26" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>内联单选和多选框</h4>
                <p>通过将 <code>.checkbox-inline</code> 或 <code>.radio-inline</code> 类应用到一系列的多选框（checkbox）或单选框（radio）控件上，可以使这些控件排列在一行。</p>
                <div data-example-id="inline-checkboxes-radios" class="bs-example">
                    <form>
                        <label class="checkbox-inline">
                            <input type="checkbox" value="option1" id="inlineCheckbox1"> 1
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" value="option2" id="inlineCheckbox2"> 2
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" value="option3" id="inlineCheckbox3"> 3
                        </label>
                    </form>
                    <br>
                    <form>
                        <label class="radio-inline">
                            <input type="radio" value="option1" id="inlineRadio1" name="inlineRadioOptions"> 1
                        </label>
                        <label class="radio-inline">
                            <input type="radio" value="option2" id="inlineRadio2" name="inlineRadioOptions"> 2
                        </label>
                        <label class="radio-inline">
                            <input type="radio" value="option3" id="inlineRadio3" name="inlineRadioOptions"> 3
                        </label>
                    </form>
                </div><!-- /.bs-example -->
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"checkbox-inline"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">id=</span><span class="s">"inlineCheckbox1"</span> <span class="na">value=</span><span class="s">"option1"</span><span class="nt">&gt;</span> 1
                            <span class="nt">&lt;/label&gt;</span>
                            <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"checkbox-inline"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">id=</span><span class="s">"inlineCheckbox2"</span> <span class="na">value=</span><span class="s">"option2"</span><span class="nt">&gt;</span> 2
                            <span class="nt">&lt;/label&gt;</span>
                            <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"checkbox-inline"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">id=</span><span class="s">"inlineCheckbox3"</span> <span class="na">value=</span><span class="s">"option3"</span><span class="nt">&gt;</span> 3
                            <span class="nt">&lt;/label&gt;</span>

                            <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"radio-inline"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"inlineRadioOptions"</span> <span class="na">id=</span><span class="s">"inlineRadio1"</span> <span class="na">value=</span><span class="s">"option1"</span><span class="nt">&gt;</span> 1
                            <span class="nt">&lt;/label&gt;</span>
                            <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"radio-inline"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"inlineRadioOptions"</span> <span class="na">id=</span><span class="s">"inlineRadio2"</span> <span class="na">value=</span><span class="s">"option2"</span><span class="nt">&gt;</span> 2
                            <span class="nt">&lt;/label&gt;</span>
                            <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"radio-inline"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"inlineRadioOptions"</span> <span class="na">id=</span><span class="s">"inlineRadio3"</span> <span class="na">value=</span><span class="s">"option3"</span><span class="nt">&gt;</span> 3
                            <span class="nt">&lt;/label&gt;</span></code></pre></div>

                <h4 id="labelcheckbox-radio"><a data-anchorjs-icon="" aria-label="Anchor link for: labelcheckbox radio" href="#labelcheckbox-radio" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>不带label文本的Checkbox 和 radio</h4>
                <p>如果需要 <code>&lt;label&gt;</code> 内没有文字，输入框（input）正是你说期望的。 <strong>目前只适用于非内联的 checkbox 和 radio。</strong> 请记住，仍然需要为使用辅助技术的用户提供某种形式的 label（例如，使用 <code>aria-label</code>）。</p>
                <div data-example-id="checkboxes-radios-without-labels" class="bs-example">
                    <form>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" aria-label="Checkbox without label text" value="option1" id="blankCheckbox">
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" aria-label="Radio button without label text" value="option1" id="blankRadio1" name="blankRadio">
                            </label>
                        </div>
                    </form>
                </div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;label&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">id=</span><span class="s">"blankCheckbox"</span> <span class="na">value=</span><span class="s">"option1"</span> <span class="na">aria-label=</span><span class="s">"..."</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;/label&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"radio"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;label&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"blankRadio"</span> <span class="na">id=</span><span class="s">"blankRadio1"</span> <span class="na">value=</span><span class="s">"option1"</span> <span class="na">aria-label=</span><span class="s">"..."</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;/label&gt;</span>
                            <span class="nt">&lt;/div&gt;</span></code></pre></div>

                <h3 id="select"><a data-anchorjs-icon="" aria-label="Anchor link for: select" href="#select" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>下拉列表（select）</h3>
                <p>注意，很多原生选择菜单 - 即在 Safari 和 Chrome 中 - 的圆角是无法通过修改 <code>border-radius</code> 属性来改变的。</p>
                <div data-example-ids="select-form-control" class="bs-example">
                    <form>
                        <select class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </form>
                </div><!-- /.bs-example -->
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;select</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;option&gt;</span>1<span class="nt">&lt;/option&gt;</span>
                            <span class="nt">&lt;option&gt;</span>2<span class="nt">&lt;/option&gt;</span>
                            <span class="nt">&lt;option&gt;</span>3<span class="nt">&lt;/option&gt;</span>
                            <span class="nt">&lt;option&gt;</span>4<span class="nt">&lt;/option&gt;</span>
                            <span class="nt">&lt;option&gt;</span>5<span class="nt">&lt;/option&gt;</span>
                            <span class="nt">&lt;/select&gt;</span></code></pre></div>

                <p>对于标记了 <code>multiple</code> 属性的 <code>&lt;select&gt;</code> 控件来说，默认显示多选项。</p>

                <div data-example-ids="select-multiple-form-control" class="bs-example">
                    <form>
                        <select class="form-control" multiple="">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </form>
                </div><!-- /.bs-example -->

                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;select</span> <span class="na">multiple</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;option&gt;</span>1<span class="nt">&lt;/option&gt;</span>
                            <span class="nt">&lt;option&gt;</span>2<span class="nt">&lt;/option&gt;</span>
                            <span class="nt">&lt;option&gt;</span>3<span class="nt">&lt;/option&gt;</span>
                            <span class="nt">&lt;option&gt;</span>4<span class="nt">&lt;/option&gt;</span>
                            <span class="nt">&lt;option&gt;</span>5<span class="nt">&lt;/option&gt;</span>
                            <span class="nt">&lt;/select&gt;</span></code></pre></div>

                <h2 id="forms-controls-static"><a data-anchorjs-icon="" aria-label="Anchor link for: forms controls static" href="#forms-controls-static" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>静态控件</h2>
                <p>如果需要在表单中将一行纯文本和 <code>label</code> 元素放置于同一行，为 <code>&lt;p&gt;</code> 元素添加 <code>.form-control-static</code> 类即可。</p>
                <div data-example-id="horizontal-static-form-control" class="bs-example">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <p class="form-control-static">email@example.com</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="inputPassword">Password</label>
                            <div class="col-sm-10">
                                <input type="password" placeholder="Password" id="inputPassword" class="form-control">
                            </div>
                        </div>
                    </form>
                </div><!-- /.bs-example -->
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-horizontal"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"col-sm-2 control-label"</span><span class="nt">&gt;</span>Email<span class="nt">&lt;/label&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-10"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"form-control-static"</span><span class="nt">&gt;</span>email@example.com<span class="nt">&lt;/p&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"inputPassword"</span> <span class="na">class=</span><span class="s">"col-sm-2 control-label"</span><span class="nt">&gt;</span>Password<span class="nt">&lt;/label&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-10"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"password"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputPassword"</span> <span class="na">placeholder=</span><span class="s">"Password"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;/form&gt;</span></code></pre></div>
                <div data-example-id="inline-static-form-control" class="bs-example">
                    <form class="form-inline">
                        <div class="form-group">
                            <label class="sr-only">Email</label>
                            <p class="form-control-static">email@example.com</p>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="inputPassword2">Password</label>
                            <input type="password" placeholder="Password" id="inputPassword2" class="form-control">
                        </div>
                        <button class="btn btn-default" type="submit">Confirm identity</button>
                    </form>
                </div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-inline"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>Email<span class="nt">&lt;/label&gt;</span>
                            <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"form-control-static"</span><span class="nt">&gt;</span>email@example.com<span class="nt">&lt;/p&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"inputPassword2"</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>Password<span class="nt">&lt;/label&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"password"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputPassword2"</span> <span class="na">placeholder=</span><span class="s">"Password"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Confirm identity<span class="nt">&lt;/button&gt;</span>
                            <span class="nt">&lt;/form&gt;</span></code></pre></div>

                <h2 id="forms-control-focus"><a data-anchorjs-icon="" aria-label="Anchor link for: forms control focus" href="#forms-control-focus" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>焦点状态</h2>
                <p>我们将某些表单控件的默认 <code>outline</code> 样式移除，然后对 <code>:focus</code> 状态赋予 <code>box-shadow</code> 属性。</p>
                <div class="bs-example">
                    <form>
                        <input type="text" value="Demonstrative focus state" id="focusedInput" class="form-control">
                    </form>
                </div>
                <div id="callout-focus-demo" class="bs-callout bs-callout-info">
                    <h4>演示<code>:focus</code> 状态</h4>
                    <p>在本文档中，我们为上面实例中的输入框赋予了自定义的样式，用于演示 <code>.form-control</code> 元素的 <code>:focus</code> 状态。</p>
                </div>


                <h2 id="forms-control-disabled"><a data-anchorjs-icon="" aria-label="Anchor link for: forms control disabled" href="#forms-control-disabled" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>禁用状态</h2>
                <p>为输入框设置 <code>disabled</code> 属性可以禁止其与用户有任何交互（焦点、输入等）。被禁用的输入框颜色更浅，并且还添加了 <code>not-allowed</code> 鼠标状态。</p>
                <div data-example-id="text-form-control-disabled" class="bs-example">
                    <form>
                        <input type="text" disabled="" placeholder="Disabled input here…" id="disabledInput" class="form-control">
                    </form>
                </div><!-- /.bs-example -->
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"disabledInput"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Disabled input here..."</span> <span class="na">disabled</span><span class="nt">&gt;</span></code></pre></div>

                <h3 id="forms-disabled-fieldsets"><a data-anchorjs-icon="" aria-label="Anchor link for: forms disabled fieldsets" href="#forms-disabled-fieldsets" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>被禁用的 <code>fieldset</code></h3>
                <p>为<code>&lt;fieldset&gt;</code> 设置 <code>disabled</code> 属性,可以禁用 <code>&lt;fieldset&gt;</code> 中包含的所有控件。</p>

                <div id="callout-fieldset-disabled-pointer-events" class="bs-callout bs-callout-warning">
                    <h4><code>&lt;a&gt;</code> 标签的链接功能不受影响</h4>
                    <p>默认情况下，浏览器会将 <code>&lt;fieldset disabled&gt;</code> 内所有的原生的表单控件（<code>&lt;input&gt;</code>、<code>&lt;select&gt;</code> 和 <code>&lt;button&gt;</code> 元素）设置为禁用状态，防止键盘和鼠标与他们交互。然而，如果如果表单中还包含 <code>&lt;a ... class="btn btn-*"&gt;</code> 元素，这些元素将只被赋予 <code>pointer-events: none</code> 属性。正如在关于 <a href="#buttons-disabled">禁用状态的按钮</a> 章节中（尤其是关于锚点元素的子章节中）所描述的那样，该 CSS 属性尚不规范，并且在 Opera 18 及更低版本的浏览器或 Internet Explorer 11 总没有得到全面支持，并且不会阻止键盘用户能够获取焦点或激活这些链接。所以为了安全起见，建议使用自定义 JavaScript 来禁用这些链接。</p>
                </div>

                <div id="callout-fieldset-disabled-ie" class="bs-callout bs-callout-danger">
                    <h4>跨浏览器兼容性</h4>
                    <p>虽然 Bootstrap 会将这些样式应用到所有浏览器上，Internet Explorer 11 及以下浏览器中的 <code>&lt;fieldset&gt;</code> 元素并不完全支持 <code>disabled</code> 属性。因此建议在这些浏览器上通过 JavaScript 代码来禁用 <code>&lt;fieldset&gt;</code>。</p>
                </div>

                <div data-example-id="disabled-fieldset" class="bs-example">
                    <form>
                        <fieldset disabled="">
                            <div class="form-group">
                                <label for="disabledTextInput">Disabled input</label>
                                <input type="text" placeholder="Disabled input" class="form-control" id="disabledTextInput">
                            </div>
                            <div class="form-group">
                                <label for="disabledSelect">Disabled select menu</label>
                                <select class="form-control" id="disabledSelect">
                                    <option>Disabled select</option>
                                </select>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Can't check this
                                </label>
                            </div>
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </fieldset>
                    </form>
                </div><!-- /.bs-example -->
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;form&gt;</span>
                            <span class="nt">&lt;fieldset</span> <span class="na">disabled</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"disabledTextInput"</span><span class="nt">&gt;</span>Disabled input<span class="nt">&lt;/label&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">id=</span><span class="s">"disabledTextInput"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Disabled input"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"disabledSelect"</span><span class="nt">&gt;</span>Disabled select menu<span class="nt">&lt;/label&gt;</span>
                            <span class="nt">&lt;select</span> <span class="na">id=</span><span class="s">"disabledSelect"</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;option&gt;</span>Disabled select<span class="nt">&lt;/option&gt;</span>
                            <span class="nt">&lt;/select&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;label&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span> Can't check this
                            <span class="nt">&lt;/label&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Submit<span class="nt">&lt;/button&gt;</span>
                            <span class="nt">&lt;/fieldset&gt;</span>
                            <span class="nt">&lt;/form&gt;</span></code></pre></div>


                <h2 id="forms-control-readonly"><a data-anchorjs-icon="" aria-label="Anchor link for: forms control readonly" href="#forms-control-readonly" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>只读状态</h2>
                <p>为输入框设置 <code>readonly</code> 属性可以禁止用户修改输入框中的内容。处于只读状态的输入框颜色更浅（就像被禁用的输入框一样），但是仍然保留标准的鼠标状态。</p>
                <div data-example-id="readonly-text-form-control" class="bs-example">
                    <form>
                        <input type="text" readonly="" placeholder="Readonly input here…" class="form-control">
                    </form>
                </div><!-- /.bs-example -->
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Readonly input here…"</span> <span class="na">readonly</span><span class="nt">&gt;</span></code></pre></div>


                <h2 id="forms-control-validation"><a data-anchorjs-icon="" aria-label="Anchor link for: forms control validation" href="#forms-control-validation" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>校验状态</h2>
                <p>Bootstrap 对表单控件的校验状态，如 error、warning 和 success 状态，都定义了样式。使用时，添加 <code>.has-warning</code>、<code>.has-error</code> 或 <code>.has-success</code> 类到这些控件的父元素即可。任何包含在此元素之内的 <code>.control-label</code>、<code>.form-control</code> 和 <code>.help-block</code> 元素都将接受这些校验状态的样式。</p>

                <div id="callout-form-validation-state-accessibility" class="bs-callout bs-callout-warning">
                    <h4>将验证状态传达给辅助设备和盲人用户</h4>
                    <p>使用这些校验样式只是为表单控件提供一个可视的、基于色彩的提示，但是并不能将这种提示信息传达给使用辅助设备的用户 - 例如屏幕阅读器 - 或者色盲用户。</p>
                    <p>为了确保所有用户都能获取正确信息，Bootstrap 还提供了另一种提示方式。例如，你可以在表单控件的 <code>&lt;label&gt;</code> 标签上以文本的形式显示提示信息（就像下面代码中所展示的）；包含一个 <a href="../components/#glyphicons">Glyphicon 字体图标</a> （还有赋予 <code>.sr-only</code> 类的文本信息 - 参考<a href="../components/#glyphicons-examples">Glyphicon 字体图标实例</a>）；或者提供一个额外的 <a href="#forms-help-text">辅助信息</a> 块。另外，对于使用辅助设备的用户，无效的表单控件还可以赋予一个 <code>aria-invalid="true"</code> 属性。</p>
                </div>

                <div data-example-id="form-validation-states" class="bs-example">
                    <form>
                        <div class="form-group has-success">
                            <label for="inputSuccess1" class="control-label">Input with success</label>
                            <input type="text" id="inputSuccess1" class="form-control">
                        </div>
                        <div class="form-group has-warning">
                            <label for="inputWarning1" class="control-label">Input with warning</label>
                            <input type="text" id="inputWarning1" class="form-control">
                        </div>
                        <div class="form-group has-error">
                            <label for="inputError1" class="control-label">Input with error</label>
                            <input type="text" id="inputError1" class="form-control">
                        </div>
                        <div class="has-success">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="option1" id="checkboxSuccess">
                                    Checkbox with success
                                </label>
                            </div>
                        </div>
                        <div class="has-warning">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="option1" id="checkboxWarning">
                                    Checkbox with warning
                                </label>
                            </div>
                        </div>
                        <div class="has-error">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="option1" id="checkboxError">
                                    Checkbox with error
                                </label>
                            </div>
                        </div>
                    </form>
                </div><!-- /.bs-example -->
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-success"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"control-label"</span> <span class="na">for=</span><span class="s">"inputSuccess1"</span><span class="nt">&gt;</span>Input with success<span class="nt">&lt;/label&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputSuccess1"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-warning"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"control-label"</span> <span class="na">for=</span><span class="s">"inputWarning1"</span><span class="nt">&gt;</span>Input with warning<span class="nt">&lt;/label&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputWarning1"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-error"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"control-label"</span> <span class="na">for=</span><span class="s">"inputError1"</span><span class="nt">&gt;</span>Input with error<span class="nt">&lt;/label&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputError1"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"has-success"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;label&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">id=</span><span class="s">"checkboxSuccess"</span> <span class="na">value=</span><span class="s">"option1"</span><span class="nt">&gt;</span>
                            Checkbox with success
                            <span class="nt">&lt;/label&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"has-warning"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;label&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">id=</span><span class="s">"checkboxWarning"</span> <span class="na">value=</span><span class="s">"option1"</span><span class="nt">&gt;</span>
                            Checkbox with warning
                            <span class="nt">&lt;/label&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"has-error"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;label&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">id=</span><span class="s">"checkboxError"</span> <span class="na">value=</span><span class="s">"option1"</span><span class="nt">&gt;</span>
                            Checkbox with error
                            <span class="nt">&lt;/label&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;/div&gt;</span></code></pre></div>

                <h3 id="-27"><a data-anchorjs-icon="" aria-label="Anchor link for:  27" href="#-27" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>添加额外的图标</h3>
                <p>你还可以针对校验状态为输入框添加额外的图标。只需设置相应的 <code>.has-feedback</code> 类并添加正确的图标即可。</p>
                <p><strong class="text-danger">反馈图标（feedback icon）只能使用在文本输入框 <code>&lt;input class="form-control"&gt;</code> 元素上。</strong></p>
                <div id="callout-has-feedback-icon-positioning" class="bs-callout bs-callout-warning">
                    <h4>图标、<code>label</code>  和输入控件组</h4>
                    <p>对于不带有 <code>label</code> 标签的输入框以及右侧带有附加组件的<a href="../components#input-groups">输入框组</a>，需要手动为其图标定位。为了让所有用户都能访问你的网站，我们强烈建议为所有输入框添加 <code>label</code> 标签。如果你不希望将 <code>label</code> 标签展示出来，可以通过添加 <code>.sr-only</code> 类来实现。如果的确不能添加 <code>label</code> 标签，请调整图标的 <code>top</code> 值。对于输入框组，请根据你的实际情况调整 <code>right</code> 值。</p>
                </div>
                <div id="callout-has-feedback-icon-accessibility" class="bs-callout bs-callout-warning">
                    <h4>向辅助技术设备传递图标的含义</h4>
                    <p>为了确保辅助技术- 如屏幕阅读器 - 正确传达一个图标的含义，额外的隐藏的文本应包含在 <code>.sr-only</code> 类中，并明确关联使用了 <code>aria-describedby</code> 的表单控件。或者，以某些其他形式（例如，文本输入字段有一个特定的警告信息）传达含义，例如改变与表单控件实际相关联的 <code>&lt;label&gt;</code> 的文本。</p>
                    <p>虽然下面的例子已经提到各自表单控件本身的 <code>&lt;label&gt;</code> 文本的验证状态，上述技术（使用 <code>.sr-only</code> 文本 和 <code>aria-describedby</code>) ）已经包括了需要说明的目的。</p>
                </div>
                <div data-example-id="form-validation-states-with-icons" class="bs-example">
                    <form>
                        <div class="form-group has-success has-feedback">
                            <label for="inputSuccess2" class="control-label">Input with success</label>
                            <input type="text" aria-describedby="inputSuccess2Status" id="inputSuccess2" class="form-control">
                            <span aria-hidden="true" class="glyphicon glyphicon-ok form-control-feedback"></span>
                            <span class="sr-only" id="inputSuccess2Status">(success)</span>
                        </div>
                        <div class="form-group has-warning has-feedback">
                            <label for="inputWarning2" class="control-label">Input with warning</label>
                            <input type="text" aria-describedby="inputWarning2Status" id="inputWarning2" class="form-control">
                            <span aria-hidden="true" class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
                            <span class="sr-only" id="inputWarning2Status">(warning)</span>
                        </div>
                        <div class="form-group has-error has-feedback">
                            <label for="inputError2" class="control-label">Input with error</label>
                            <input type="text" aria-describedby="inputError2Status" id="inputError2" class="form-control">
                            <span aria-hidden="true" class="glyphicon glyphicon-remove form-control-feedback"></span>
                            <span class="sr-only" id="inputError2Status">(error)</span>
                        </div>
                        <div class="form-group has-success has-feedback">
                            <label for="inputGroupSuccess1" class="control-label">Input group with success</label>
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
                                <input type="text" aria-describedby="inputGroupSuccess1Status" id="inputGroupSuccess1" class="form-control">
                            </div>
                            <span aria-hidden="true" class="glyphicon glyphicon-ok form-control-feedback"></span>
                            <span class="sr-only" id="inputGroupSuccess1Status">(success)</span>
                        </div>
                    </form>
                </div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-success has-feedback"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"control-label"</span> <span class="na">for=</span><span class="s">"inputSuccess2"</span><span class="nt">&gt;</span>Input with success<span class="nt">&lt;/label&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputSuccess2"</span> <span class="na">aria-describedby=</span><span class="s">"inputSuccess2Status"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"glyphicon glyphicon-ok form-control-feedback"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/span&gt;</span>
                            <span class="nt">&lt;span</span> <span class="na">id=</span><span class="s">"inputSuccess2Status"</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(success)<span class="nt">&lt;/span&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-warning has-feedback"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"control-label"</span> <span class="na">for=</span><span class="s">"inputWarning2"</span><span class="nt">&gt;</span>Input with warning<span class="nt">&lt;/label&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputWarning2"</span> <span class="na">aria-describedby=</span><span class="s">"inputWarning2Status"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"glyphicon glyphicon-warning-sign form-control-feedback"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/span&gt;</span>
                            <span class="nt">&lt;span</span> <span class="na">id=</span><span class="s">"inputWarning2Status"</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(warning)<span class="nt">&lt;/span&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-error has-feedback"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"control-label"</span> <span class="na">for=</span><span class="s">"inputError2"</span><span class="nt">&gt;</span>Input with error<span class="nt">&lt;/label&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputError2"</span> <span class="na">aria-describedby=</span><span class="s">"inputError2Status"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"glyphicon glyphicon-remove form-control-feedback"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/span&gt;</span>
                            <span class="nt">&lt;span</span> <span class="na">id=</span><span class="s">"inputError2Status"</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(error)<span class="nt">&lt;/span&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-success has-feedback"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"control-label"</span> <span class="na">for=</span><span class="s">"inputGroupSuccess1"</span><span class="nt">&gt;</span>Input group with success<span class="nt">&lt;/label&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>@<span class="nt">&lt;/span&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputGroupSuccess1"</span> <span class="na">aria-describedby=</span><span class="s">"inputGroupSuccess1Status"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"glyphicon glyphicon-ok form-control-feedback"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/span&gt;</span>
                            <span class="nt">&lt;span</span> <span class="na">id=</span><span class="s">"inputGroupSuccess1Status"</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(success)<span class="nt">&lt;/span&gt;</span>
                            <span class="nt">&lt;/div&gt;</span></code></pre></div>

                <h4 id="-28"><a data-anchorjs-icon="" aria-label="Anchor link for:  28" href="#-28" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>为水平排列的表单和内联表单设置可选的图标</h4>
                <div data-example-id="horizontal-form-validation-state-with-icon" class="bs-example">
                    <form class="form-horizontal">
                        <div class="form-group has-success has-feedback">
                            <label for="inputSuccess3" class="control-label col-sm-3">Input with success</label>
                            <div class="col-sm-9">
                                <input type="text" aria-describedby="inputSuccess3Status" id="inputSuccess3" class="form-control">
                                <span aria-hidden="true" class="glyphicon glyphicon-ok form-control-feedback"></span>
                                <span class="sr-only" id="inputSuccess3Status">(success)</span>
                            </div>
                        </div>
                        <div class="form-group has-success has-feedback">
                            <label for="inputGroupSuccess2" class="control-label col-sm-3">Input group with success</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <span class="input-group-addon">@</span>
                                    <input type="text" aria-describedby="inputGroupSuccess2Status" id="inputGroupSuccess2" class="form-control">
                                </div>
                                <span aria-hidden="true" class="glyphicon glyphicon-ok form-control-feedback"></span>
                                <span class="sr-only" id="inputGroupSuccess2Status">(success)</span>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-horizontal"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-success has-feedback"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"control-label col-sm-3"</span> <span class="na">for=</span><span class="s">"inputSuccess3"</span><span class="nt">&gt;</span>Input with success<span class="nt">&lt;/label&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-9"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputSuccess3"</span> <span class="na">aria-describedby=</span><span class="s">"inputSuccess3Status"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"glyphicon glyphicon-ok form-control-feedback"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/span&gt;</span>
                            <span class="nt">&lt;span</span> <span class="na">id=</span><span class="s">"inputSuccess3Status"</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(success)<span class="nt">&lt;/span&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-success has-feedback"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"control-label col-sm-3"</span> <span class="na">for=</span><span class="s">"inputGroupSuccess2"</span><span class="nt">&gt;</span>Input group with success<span class="nt">&lt;/label&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-9"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>@<span class="nt">&lt;/span&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputGroupSuccess2"</span> <span class="na">aria-describedby=</span><span class="s">"inputGroupSuccess2Status"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"glyphicon glyphicon-ok form-control-feedback"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/span&gt;</span>
                            <span class="nt">&lt;span</span> <span class="na">id=</span><span class="s">"inputGroupSuccess2Status"</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(success)<span class="nt">&lt;/span&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;/form&gt;</span></code></pre></div>

                <div data-example-id="inline-form-validation-state-with-icon" class="bs-example">
                    <form class="form-inline">
                        <div class="form-group has-success has-feedback">
                            <label for="inputSuccess4" class="control-label">Input with success</label>
                            <input type="text" aria-describedby="inputSuccess4Status" id="inputSuccess4" class="form-control">
                            <span aria-hidden="true" class="glyphicon glyphicon-ok form-control-feedback"></span>
                            <span class="sr-only" id="inputSuccess4Status">(success)</span>
                        </div>
                    </form>
                    <br>
                    <form class="form-inline">
                        <div class="form-group has-success has-feedback">
                            <label for="inputGroupSuccess3" class="control-label">Input group with success</label>
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
                                <input type="text" aria-describedby="inputGroupSuccess3Status" id="inputGroupSuccess3" class="form-control">
                            </div>
                            <span aria-hidden="true" class="glyphicon glyphicon-ok form-control-feedback"></span>
                            <span class="sr-only" id="inputGroupSuccess3Status">(success)</span>
                        </div>
                    </form>
                </div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-inline"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-success has-feedback"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"control-label"</span> <span class="na">for=</span><span class="s">"inputSuccess4"</span><span class="nt">&gt;</span>Input with success<span class="nt">&lt;/label&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputSuccess4"</span> <span class="na">aria-describedby=</span><span class="s">"inputSuccess4Status"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"glyphicon glyphicon-ok form-control-feedback"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/span&gt;</span>
                            <span class="nt">&lt;span</span> <span class="na">id=</span><span class="s">"inputSuccess4Status"</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(success)<span class="nt">&lt;/span&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;/form&gt;</span>
                            <span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-inline"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-success has-feedback"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"control-label"</span> <span class="na">for=</span><span class="s">"inputGroupSuccess3"</span><span class="nt">&gt;</span>Input group with success<span class="nt">&lt;/label&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>@<span class="nt">&lt;/span&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputGroupSuccess3"</span> <span class="na">aria-describedby=</span><span class="s">"inputGroupSuccess3Status"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"glyphicon glyphicon-ok form-control-feedback"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/span&gt;</span>
                            <span class="nt">&lt;span</span> <span class="na">id=</span><span class="s">"inputGroupSuccess3Status"</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(success)<span class="nt">&lt;/span&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;/form&gt;</span></code></pre></div>

                <h4 id="sr-only-label"><a data-anchorjs-icon="" aria-label="Anchor link for: sr only label" href="#sr-only-label" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>可选的图标与设置 <code>.sr-only</code> 类的 <code>label</code> </h4>
                <p>如果你使用 <code>.sr-only</code> 类来隐藏表单控件的 <code>&lt;label&gt;</code> （而不是使用其它标签选项，如 <code>aria-label</code> 属性）， 一旦它被添加，Bootstrap 会自动调整图标的位置。</p>
                <div data-example-id="form-validation-state-with-icon-without-label" class="bs-example">
                    <div class="form-group has-success has-feedback">
                        <label for="inputSuccess5" class="control-label sr-only">Hidden label</label>
                        <input type="text" aria-describedby="inputSuccess5Status" id="inputSuccess5" class="form-control">
                        <span aria-hidden="true" class="glyphicon glyphicon-ok form-control-feedback"></span>
                        <span class="sr-only" id="inputSuccess5Status">(success)</span>
                    </div>
                    <div class="form-group has-success has-feedback">
                        <label for="inputGroupSuccess4" class="control-label sr-only">Input group with success</label>
                        <div class="input-group">
                            <span class="input-group-addon">@</span>
                            <input type="text" aria-describedby="inputGroupSuccess4Status" id="inputGroupSuccess4" class="form-control">
                        </div>
                        <span aria-hidden="true" class="glyphicon glyphicon-ok form-control-feedback"></span>
                        <span class="sr-only" id="inputGroupSuccess4Status">(success)</span>
                    </div>
                </div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-success has-feedback"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"control-label sr-only"</span> <span class="na">for=</span><span class="s">"inputSuccess5"</span><span class="nt">&gt;</span>Hidden label<span class="nt">&lt;/label&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputSuccess5"</span> <span class="na">aria-describedby=</span><span class="s">"inputSuccess5Status"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"glyphicon glyphicon-ok form-control-feedback"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/span&gt;</span>
                            <span class="nt">&lt;span</span> <span class="na">id=</span><span class="s">"inputSuccess5Status"</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(success)<span class="nt">&lt;/span&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-success has-feedback"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"control-label sr-only"</span> <span class="na">for=</span><span class="s">"inputGroupSuccess4"</span><span class="nt">&gt;</span>Input group with success<span class="nt">&lt;/label&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>@<span class="nt">&lt;/span&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputGroupSuccess4"</span> <span class="na">aria-describedby=</span><span class="s">"inputGroupSuccess4Status"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"glyphicon glyphicon-ok form-control-feedback"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/span&gt;</span>
                            <span class="nt">&lt;span</span> <span class="na">id=</span><span class="s">"inputGroupSuccess4Status"</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(success)<span class="nt">&lt;/span&gt;</span>
                            <span class="nt">&lt;/div&gt;</span></code></pre></div>


                <h2 id="forms-control-sizes"><a data-anchorjs-icon="" aria-label="Anchor link for: forms control sizes" href="#forms-control-sizes" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>控件尺寸</h2>
                <p>通过 <code>.input-lg</code> 类似的类可以为控件设置高度，通过 <code>.col-lg-*</code> 类似的类可以为控件设置宽度。</p>

                <h3 id="-29"><a data-anchorjs-icon="" aria-label="Anchor link for:  29" href="#-29" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>高度尺寸</h3>
                <p>创建大一些或小一些的表单控件以匹配按钮尺寸。</p>
                <div data-example-id="form-control-height-sizes" class="bs-example bs-example-control-sizing">
                    <form>
                        <div class="controls">
                            <input type="text" placeholder=".input-lg" class="form-control input-lg">
                            <input type="text" placeholder="Default input" class="form-control">
                            <input type="text" placeholder=".input-sm" class="form-control input-sm">

                            <select class="form-control input-lg">
                                <option value="">.input-lg</option>
                            </select>
                            <select class="form-control">
                                <option value="">Default select</option>
                            </select>
                            <select class="form-control input-sm">
                                <option value="">.input-sm</option>
                            </select>
                        </div>
                    </form>
                </div><!-- /.bs-example -->
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control input-lg"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">".input-lg"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Default input"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control input-sm"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">".input-sm"</span><span class="nt">&gt;</span>

                            <span class="nt">&lt;select</span> <span class="na">class=</span><span class="s">"form-control input-lg"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/select&gt;</span>
                            <span class="nt">&lt;select</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/select&gt;</span>
                            <span class="nt">&lt;select</span> <span class="na">class=</span><span class="s">"form-control input-sm"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/select&gt;</span></code></pre></div>

                <h3 id="-30"><a data-anchorjs-icon="" aria-label="Anchor link for:  30" href="#-30" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>水平排列的表单组的尺寸</h3>
                <p>通过添加 <code>.form-group-lg</code> 或 <code>.form-group-sm</code> 类，为 <code>.form-horizontal</code> 包裹的 <code>label</code> 元素和表单控件快速设置尺寸。</p>
                <div data-example-id="form-group-height-sizes" class="bs-example">
                    <form class="form-horizontal">
                        <div class="form-group form-group-lg">
                            <label for="formGroupInputLarge" class="col-sm-2 control-label">Large label</label>
                            <div class="col-sm-10">
                                <input type="text" placeholder="Large input" id="formGroupInputLarge" class="form-control">
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="formGroupInputSmall" class="col-sm-2 control-label">Small label</label>
                            <div class="col-sm-10">
                                <input type="text" placeholder="Small input" id="formGroupInputSmall" class="form-control">
                            </div>
                        </div>
                    </form>
                </div><!-- /.bs-example -->
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-horizontal"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group form-group-lg"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"col-sm-2 control-label"</span> <span class="na">for=</span><span class="s">"formGroupInputLarge"</span><span class="nt">&gt;</span>Large label<span class="nt">&lt;/label&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-10"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">id=</span><span class="s">"formGroupInputLarge"</span> <span class="na">placeholder=</span><span class="s">"Large input"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group form-group-sm"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"col-sm-2 control-label"</span> <span class="na">for=</span><span class="s">"formGroupInputSmall"</span><span class="nt">&gt;</span>Small label<span class="nt">&lt;/label&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-10"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">id=</span><span class="s">"formGroupInputSmall"</span> <span class="na">placeholder=</span><span class="s">"Small input"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;/form&gt;</span></code></pre></div>


                <h3 id="column"><a data-anchorjs-icon="" aria-label="Anchor link for: column" href="#column" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>调整列（column）尺寸</h3>
                <p>用栅格系统中的列（column）包裹输入框或其任何父元素，都可很容易的为其设置宽度。</p>
                <div data-example-id="form-control-column-sizing" class="bs-example">
                    <form>
                        <div class="row">
                            <div class="col-xs-2">
                                <input type="text" placeholder=".col-xs-2" class="form-control">
                            </div>
                            <div class="col-xs-3">
                                <input type="text" placeholder=".col-xs-3" class="form-control">
                            </div>
                            <div class="col-xs-4">
                                <input type="text" placeholder=".col-xs-4" class="form-control">
                            </div>
                        </div>
                    </form>
                </div><!-- /.bs-example -->
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-2"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">".col-xs-2"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-3"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">".col-xs-3"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-4"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">".col-xs-4"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;/div&gt;</span></code></pre></div>

                <h2 id="forms-help-text"><a data-anchorjs-icon="" aria-label="Anchor link for: forms help text" href="#forms-help-text" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>辅助文本</h2>
                <p>针对表单控件的“块（block）”级辅助文本。</p>
                <div id="callout-help-text-accessibility" class="bs-callout bs-callout-info">
                    <h4>与表单控件相关联的帮助文本</h4>
                    <p>与表单控件相关联的帮助文本 <code>aria-describedby</code> 属性的表单控件关联，这将确保使用辅助技术- 如屏幕阅读器 - 的用户获取控件焦点或进入控制时显示这个帮助文本。</p>
                </div>
                <div data-example-id="simple-help-text" class="bs-example">
                    <form>
                        <div class="form-group">
                            <label for="inputHelpBlock">Input with help text</label>
                            <input type="text" aria-describedby="helpBlock" class="form-control" id="inputHelpBlock">
                        </div>
                        <span class="help-block" id="helpBlock">A block of help text that breaks onto a new line and may extend beyond one line.</span>
                    </form>
                </div><!-- /.bs-example -->
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"sr-only"</span> <span class="na">for=</span><span class="s">"inputHelpBlock"</span><span class="nt">&gt;</span>Input with help text<span class="nt">&lt;/label&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">id=</span><span class="s">"inputHelpBlock"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">aria-describedby=</span><span class="s">"helpBlock"</span><span class="nt">&gt;</span>
                            ...
                            <span class="nt">&lt;span</span> <span class="na">id=</span><span class="s">"helpBlock"</span> <span class="na">class=</span><span class="s">"help-block"</span><span class="nt">&gt;</span>A block of help text that breaks onto a new line and may extend beyond one line.<span class="nt">&lt;/span&gt;</span></code></pre></div>
            </div>

            <div class="bs-docs-section">
                <h1 class="page-header" id="buttons"><a data-anchorjs-icon="" aria-label="Anchor link for: buttons" href="#buttons" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>按钮</h1>

                <h2 id="buttons-tags"><a data-anchorjs-icon="" aria-label="Anchor link for: buttons tags" href="#buttons-tags" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>可作为按钮使用的标签或元素</h2>
                <p>为 <code>&lt;a&gt;</code>、<code>&lt;button&gt;</code> 或 <code>&lt;input&gt;</code> 元素添加按钮类（button class）即可使用 Bootstrap 提供的样式。</p>
                <form data-example-id="btn-tags" class="bs-example">
                    <a role="button" href="#" class="btn btn-default">Link</a>
                    <button type="submit" class="btn btn-default">Button</button>
                    <input type="button" value="Input" class="btn btn-default">
                    <input type="submit" value="Submit" class="btn btn-default">
                </form>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"btn btn-default"</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">role=</span><span class="s">"button"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
                            <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-default"</span> <span class="na">type=</span><span class="s">"submit"</span><span class="nt">&gt;</span>Button<span class="nt">&lt;/button&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"btn btn-default"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">value=</span><span class="s">"Input"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"btn btn-default"</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">value=</span><span class="s">"Submit"</span><span class="nt">&gt;</span></code></pre></div>

                <div id="callout-buttons-context-usage" class="bs-callout bs-callout-warning">
                    <h4>针对组件的注意事项</h4>
                    <p>虽然按钮类可以应用到 <code>&lt;a&gt;</code> 和 <code>&lt;button&gt;</code> 元素上，但是，导航和导航条组件只支持 <code>&lt;button&gt;</code> 元素。</p>
                </div>

                <div id="callout-buttons-anchor-accessibility" class="bs-callout bs-callout-warning">
                    <h4>链接被作为按钮使用时的注意事项</h4>
                    <p>如果 <code>&lt;a&gt;</code> 元素被作为按钮使用 -- 并用于在当前页面触发某些功能 -- 而不是用于链接其他页面或链接当前页面中的其他部分，那么，务必为其设置 <code>role="button"</code> 属性。</p>
                </div>

                <div id="callout-buttons-ff-height" class="bs-callout bs-callout-warning">
                    <h4>跨浏览器展现</h4>
                    <p>我们总结的最佳实践是：<strong>强烈建议尽可能使用 <code>&lt;button&gt;</code> 元素</strong>来获得在各个浏览器上获得相匹配的绘制效果。</p>
                    <p>另外，我们还发现了 <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=697451">Firefox &lt;30 版本的浏览器上出现的一个 bug</a>，其表现是：阻止我们为基于 <code>&lt;input&gt;</code> 元素所创建的按钮设置 <code>line-height</code> 属性，这就导致在 Firefox 浏览器上不能完全和其他按钮保持一致的高度。</p>
                </div>

                <h2 id="buttons-options"><a data-anchorjs-icon="" aria-label="Anchor link for: buttons options" href="#buttons-options" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>预定义样式</h2>
                <p>使用下面列出的类可以快速创建一个带有预定义样式的按钮。</p>
                <div class="bs-example">
                    <button class="btn btn-default" type="button">（默认样式）Default</button>
                    <button class="btn btn-primary" type="button">（首选项）Primary</button>
                    <button class="btn btn-success" type="button">（成功）Success</button>
                    <button class="btn btn-info" type="button">（一般信息）Info</button>
                    <button class="btn btn-warning" type="button">（警告）Warning</button>
                    <button class="btn btn-danger" type="button">（危险）Danger</button>
                    <button class="btn btn-link" type="button">（链接）Link</button>
                </div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="c">&lt;!-- Standard button --&gt;</span>
                            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>（默认样式）Default<span class="nt">&lt;/button&gt;</span>

                            <span class="c">&lt;!-- Provides extra visual weight and identifies the primary action in a set of buttons --&gt;</span>
                            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>（首选项）Primary<span class="nt">&lt;/button&gt;</span>

                            <span class="c">&lt;!-- Indicates a successful or positive action --&gt;</span>
                            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-success"</span><span class="nt">&gt;</span>（成功）Success<span class="nt">&lt;/button&gt;</span>

                            <span class="c">&lt;!-- Contextual button for informational alert messages --&gt;</span>
                            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-info"</span><span class="nt">&gt;</span>（一般信息）Info<span class="nt">&lt;/button&gt;</span>

                            <span class="c">&lt;!-- Indicates caution should be taken with this action --&gt;</span>
                            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-warning"</span><span class="nt">&gt;</span>（警告）Warning<span class="nt">&lt;/button&gt;</span>

                            <span class="c">&lt;!-- Indicates a dangerous or potentially negative action --&gt;</span>
                            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-danger"</span><span class="nt">&gt;</span>（危险）Danger<span class="nt">&lt;/button&gt;</span>

                            <span class="c">&lt;!-- Deemphasize a button by making it look like a link while maintaining button behavior --&gt;</span>
                            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-link"</span><span class="nt">&gt;</span>（链接）Link<span class="nt">&lt;/button&gt;</span></code></pre></div>

                <div id="callout-buttons-color-accessibility" class="bs-callout bs-callout-warning">
                    <h4>Conveying meaning to assistive technologies</h4>
                    <p>为按钮添加不同的颜色只是一种视觉上的信息表达方式，但是，对于使用辅助技术 -- 例如屏幕阅读器 -- 的用户来说，颜色是不可见的。建议，确保通过颜色表达的信息或者通过内容自身表达出来（按钮上的文字），或者通过其他方式 -- 例如通过 <code>.sr-only</code> 类隐藏的额外文本 -- 表达出来。</p>
                </div>

                <h2 id="buttons-sizes"><a data-anchorjs-icon="" aria-label="Anchor link for: buttons sizes" href="#buttons-sizes" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>尺寸</h2>
                <p>需要让按钮具有不同尺寸吗？使用 <code>.btn-lg</code>、<code>.btn-sm</code> 或 <code>.btn-xs</code> 就可以获得不同尺寸的按钮。</p>
                <div data-example-id="btn-sizes" class="bs-example">
                    <p>
                        <button class="btn btn-primary btn-lg" type="button">（大按钮）Large button</button>
                        <button class="btn btn-default btn-lg" type="button">（大按钮）Large button</button>
                    </p>
                    <p>
                        <button class="btn btn-primary" type="button">（默认尺寸）Default button</button>
                        <button class="btn btn-default" type="button">（默认尺寸）Default button</button>
                    </p>
                    <p>
                        <button class="btn btn-primary btn-sm" type="button">（小按钮）Small button</button>
                        <button class="btn btn-default btn-sm" type="button">（小按钮）Small button</button>
                    </p>
                    <p>
                        <button class="btn btn-primary btn-xs" type="button">（超小尺寸）Extra small button</button>
                        <button class="btn btn-default btn-xs" type="button">（超小尺寸）Extra small button</button>
                    </p>
                </div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;p&gt;</span>
                            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-lg"</span><span class="nt">&gt;</span>（大按钮）Large button<span class="nt">&lt;/button&gt;</span>
                            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default btn-lg"</span><span class="nt">&gt;</span>（大按钮）Large button<span class="nt">&lt;/button&gt;</span>
                            <span class="nt">&lt;/p&gt;</span>
                            <span class="nt">&lt;p&gt;</span>
                            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>（默认尺寸）Default button<span class="nt">&lt;/button&gt;</span>
                            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>（默认尺寸）Default button<span class="nt">&lt;/button&gt;</span>
                            <span class="nt">&lt;/p&gt;</span>
                            <span class="nt">&lt;p&gt;</span>
                            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-sm"</span><span class="nt">&gt;</span>（小按钮）Small button<span class="nt">&lt;/button&gt;</span>
                            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default btn-sm"</span><span class="nt">&gt;</span>（小按钮）Small button<span class="nt">&lt;/button&gt;</span>
                            <span class="nt">&lt;/p&gt;</span>
                            <span class="nt">&lt;p&gt;</span>
                            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-xs"</span><span class="nt">&gt;</span>（超小尺寸）Extra small button<span class="nt">&lt;/button&gt;</span>
                            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default btn-xs"</span><span class="nt">&gt;</span>（超小尺寸）Extra small button<span class="nt">&lt;/button&gt;</span>
                            <span class="nt">&lt;/p&gt;</span></code></pre></div>

                <p>通过给按钮添加 <code>.btn-block</code> 类可以将其拉伸至父元素100%的宽度，而且按钮也变为了块级（block）元素。</p>
                <div data-example-id="block-btns" class="bs-example">
                    <div style="max-width: 400px;" class="well center-block">
                        <button class="btn btn-primary btn-lg btn-block" type="button">（块级元素）Block level button</button>
                        <button class="btn btn-default btn-lg btn-block" type="button">（块级元素）Block level button</button>
                    </div>
                </div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-lg btn-block"</span><span class="nt">&gt;</span>（块级元素）Block level button<span class="nt">&lt;/button&gt;</span>
                            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default btn-lg btn-block"</span><span class="nt">&gt;</span>（块级元素）Block level button<span class="nt">&lt;/button&gt;</span></code></pre></div>


                <h2 id="buttons-active"><a data-anchorjs-icon="" aria-label="Anchor link for: buttons active" href="#buttons-active" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>激活状态</h2>
                <p>当按钮处于激活状态时，其表现为被按压下去（底色更深、边框夜色更深、向内投射阴影）。对于 <code>&lt;button&gt;</code> 元素，是通过 <code>:active</code> 状态实现的。对于 <code>&lt;a&gt;</code> 元素，是通过 <code>.active</code> 类实现的。然而，你还可以将 <code>.active</code> 应用到 <code>&lt;button&gt;</code> 上（包含 <code>aria-pressed="true"</code> 属性)），并通过编程的方式使其处于激活状态。</p>

                <h3 id="button"><a data-anchorjs-icon="" aria-label="Anchor link for: button" href="#button" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>button 元素</h3>
                <p>由于 <code>:active</code> 是伪状态，因此无需额外添加，但是在需要让其表现出同样外观的时候可以添加 <code>.active</code> 类。</p>
                <p data-example-id="active-button-btns" class="bs-example">
                    <button class="btn btn-primary btn-lg active" type="button">Primary button</button>
                    <button class="btn btn-default btn-lg active" type="button">Button</button>
                </p>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-lg active"</span><span class="nt">&gt;</span>Primary button<span class="nt">&lt;/button&gt;</span>
                            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default btn-lg active"</span><span class="nt">&gt;</span>Button<span class="nt">&lt;/button&gt;</span></code></pre></div>

                <h3 id="a"><a data-anchorjs-icon="" aria-label="Anchor link for: a" href="#a" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>链接（<code>&lt;a&gt;</code>）元素</h3>
                <p>可以为基于 <code>&lt;a&gt;</code> 元素创建的按钮添加 <code>.active</code> 类。</p>
                <p data-example-id="active-anchor-btns" class="bs-example">
                    <a role="button" class="btn btn-primary btn-lg active" href="#">Primary link</a>
                    <a role="button" class="btn btn-default btn-lg active" href="#">Link</a>
                </p>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-lg active"</span> <span class="na">role=</span><span class="s">"button"</span><span class="nt">&gt;</span>Primary link<span class="nt">&lt;/a&gt;</span>
                            <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-default btn-lg active"</span> <span class="na">role=</span><span class="s">"button"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span></code></pre></div>


                <h2 id="buttons-disabled"><a data-anchorjs-icon="" aria-label="Anchor link for: buttons disabled" href="#buttons-disabled" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>禁用状态</h2>
                <p>通过为按钮的背景设置 <code>opacity</code> 属性就可以呈现出无法点击的效果。</p>

                <h3 id="button-1"><a data-anchorjs-icon="" aria-label="Anchor link for: button 1" href="#button-1" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>button 元素</h3>
                <p>为 <code>&lt;button&gt;</code> 元素添加 <code>disabled</code> 属性，使其表现出禁用状态。</p>
                <p data-example-id="disabled-button-btns" class="bs-example">
                    <button disabled="disabled" class="btn btn-primary btn-lg" type="button">Primary button</button>
                    <button disabled="disabled" class="btn btn-default btn-lg" type="button">Button</button>
                </p>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-lg btn-primary"</span> <span class="na">disabled=</span><span class="s">"disabled"</span><span class="nt">&gt;</span>Primary button<span class="nt">&lt;/button&gt;</span>
                            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default btn-lg"</span> <span class="na">disabled=</span><span class="s">"disabled"</span><span class="nt">&gt;</span>Button<span class="nt">&lt;/button&gt;</span></code></pre></div>

                <div id="callout-buttons-ie-disabled" class="bs-callout bs-callout-danger">
                    <h4>跨浏览器兼容性</h4>
                    <p>如果为 <code>&lt;button&gt;</code> 元素添加 <code>disabled</code> 属性，Internet Explorer 9 及更低版本的浏览器将会把按钮中的文本绘制为灰色，并带有恶心的阴影，目前我们还没有解决办法。</p>
                </div>

                <h3 id="a-1"><a data-anchorjs-icon="" aria-label="Anchor link for: a 1" href="#a-1" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>链接（<code>&lt;a&gt;</code>）元素</h3>
                <p>为基于 <code>&lt;a&gt;</code> 元素创建的按钮添加 <code>.disabled</code> 类。</p>
                <p data-example-id="disabled-anchor-btns" class="bs-example">
                    <a role="button" class="btn btn-primary btn-lg disabled" href="#">Primary link</a>
                    <a role="button" class="btn btn-default btn-lg disabled" href="#">Link</a>
                </p>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-lg disabled"</span> <span class="na">role=</span><span class="s">"button"</span><span class="nt">&gt;</span>Primary link<span class="nt">&lt;/a&gt;</span>
                            <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-default btn-lg disabled"</span> <span class="na">role=</span><span class="s">"button"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span></code></pre></div>
                <p>
                    我们把 <code>.disabled</code> 作为工具类使用，就像 <code>.active</code> 类一样，因此不需要增加前缀。
                </p>
                <div id="callout-buttons-disabled-anchor" class="bs-callout bs-callout-warning">
                    <h4>链接的原始功能不受影响</h4>
                    <p>上面提到的类只是通过设置 <code>pointer-events: none</code> 来禁止 <code>&lt;a&gt;</code> 元素作为链接的原始功能，但是，这一 CSS 属性并没有被标准化，并且 Opera 18 及更低版本的浏览器并没有完全支持这一属性，同样，Internet Explorer 11 也不支持。In addition, even in browsers that do support <code>pointer-events: none</code>, keyboard navigation remains unaffected, meaning that sighted keyboard users and users of assistive technologies will still be able to activate these links. 因此，为了安全起见，建议通过 JavaScript 代码来禁止链接的原始功能。</p>
                </div>
            </div>

            <div class="bs-docs-section">
                <h1 class="page-header" id="images"><a data-anchorjs-icon="" aria-label="Anchor link for: images" href="#images" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>图片</h1>

                <h2 id="images-responsive"><a data-anchorjs-icon="" aria-label="Anchor link for: images responsive" href="#images-responsive" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>响应式图片</h2>
                <p>在 Bootstrap 版本 3 中，通过为图片添加 <code>.img-responsive</code> 类可以让图片支持响应式布局。其实质是为图片设置了 <code>max-width: 100%;</code>、 <code>height: auto;</code> 和 <code>display: block;</code> 属性，从而让图片在其父元素中更好的缩放。</p>
                <p>如果需要让使用了 <code>.img-responsive</code> 类的图片水平居中，请使用 <code>.center-block</code> 类，不要用 <code>.text-center</code>。 <a href="../css/#helper-classes-center">请参考助手类章节</a> 了解更多关于 <code>.center-block</code> 的用法。</p>
                <div id="callout-images-ie-svg" class="bs-callout bs-callout-warning">
                    <h4>SVG 图像和 IE 8-10</h4>
                    <p>在 Internet Explorer 8-10 中，设置为 <code>.img-responsive</code> 的 SVG 图像显示出的尺寸不匀称。为了解决这个问题，在出问题的地方添加 <code>width: 100% \9;</code> 即可。Bootstrap 并没有自动为所有图像元素设置这一属性，因为这会导致其他图像格式出现错乱。</p>
                </div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">class=</span><span class="s">"img-responsive"</span> <span class="na">alt=</span><span class="s">"Responsive image"</span><span class="nt">&gt;</span></code></pre></div>

                <h2 id="images-shapes"><a data-anchorjs-icon="" aria-label="Anchor link for: images shapes" href="#images-shapes" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>图片形状</h2>
                <p>通过为 <code>&lt;img&gt;</code> 元素添加以下相应的类，可以让图片呈现不同的形状。</p>
                <div id="callout-images-ie-rounded-corners" class="bs-callout bs-callout-danger">
                    <h4>跨浏览器兼容性</h4>
                    <p>请时刻牢记：Internet Explorer 8 不支持 CSS3 中的圆角属性。</p>
                </div>
                <div data-example-id="image-shapes" class="bs-example bs-example-images">
                    <img alt="140x140" class="img-rounded" data-src="holder.js/140x140" style="width: 140px; height: 140px;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgdmlld0JveD0iMCAwIDE0MCAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzE0MHgxNDAKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTM4ODdlNjgzZCB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1Mzg4N2U2ODNkIj48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjQzLjUiIHk9Ijc0LjgiPjE0MHgxNDA8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" data-holder-rendered="true">
                    <img alt="140x140" class="img-circle" data-src="holder.js/140x140" style="width: 140px; height: 140px;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgdmlld0JveD0iMCAwIDE0MCAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzE0MHgxNDAKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTM4ODdlZGM5YSB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1Mzg4N2VkYzlhIj48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjQzLjUiIHk9Ijc0LjgiPjE0MHgxNDA8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" data-holder-rendered="true">
                    <img alt="140x140" class="img-thumbnail" data-src="holder.js/140x140" style="width: 140px; height: 140px;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgdmlld0JveD0iMCAwIDE0MCAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzE0MHgxNDAKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTM4ODdlYTgyYiB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1Mzg4N2VhODJiIj48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjQzLjUiIHk9Ijc0LjgiPjE0MHgxNDA8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" data-holder-rendered="true">
                </div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"..."</span> <span class="na">class=</span><span class="s">"img-rounded"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"..."</span> <span class="na">class=</span><span class="s">"img-circle"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"..."</span> <span class="na">class=</span><span class="s">"img-thumbnail"</span><span class="nt">&gt;</span></code></pre></div>
            </div>

            <div class="bs-docs-section">
                <h1 class="page-header" id="helper-classes"><a data-anchorjs-icon="" aria-label="Anchor link for: helper classes" href="#helper-classes" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>辅助类</h1>

                <h3 id="helper-classes-colors"><a data-anchorjs-icon="" aria-label="Anchor link for: helper classes colors" href="#helper-classes-colors" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>情境文本颜色</h3>
                <p>通过颜色来展示意图，Bootstrap 提供了一组工具类。这些类可以应用于链接，并且在鼠标经过时颜色可以还可以加深，就像默认的链接一样。</p>
                <div data-example-id="contextual-colors-helpers" class="bs-example">
                    <p class="text-muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
                    <p class="text-primary">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p class="text-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                    <p class="text-info">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
                    <p class="text-warning">Etiam porta sem malesuada magna mollis euismod.</p>
                    <p class="text-danger">Donec ullamcorper nulla non metus auctor fringilla.</p>
                </div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
                            <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-primary"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
                            <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-success"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
                            <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-info"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
                            <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-warning"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
                            <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-danger"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span></code></pre></div>
                <div id="callout-helper-context-color-specificity" class="bs-callout bs-callout-info">
                    <h4>处理差异</h4>
                    <p>Sometimes emphasis classes cannot be applied due to the specificity of another selector. In most cases, a sufficient workaround is to wrap your text in a <code>&lt;span&gt;</code> with the class.</p>
                </div>
                <div id="callout-helper-context-color-accessibility" class="bs-callout bs-callout-warning">
                    <h4>Conveying meaning to assistive technologies</h4>
                    <p>Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies &ndash; such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (the contextual colors are only used to reinforce meaning that is already present in the text/markup), or is included through alternative means, such as additional text hidden with the <code>.sr-only</code> class.</p>
                </div>

                <h3 id="helper-classes-backgrounds"><a data-anchorjs-icon="" aria-label="Anchor link for: helper classes backgrounds" href="#helper-classes-backgrounds" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>情境背景色</h3>
                <p>和情境文本颜色类一样，使用任意情境背景色类就可以设置元素的背景。链接组件在鼠标经过时颜色会加深，就像上面所讲的情境文本颜色类一样。</p>
                <div data-example-id="contextual-backgrounds-helpers" class="bs-example bs-example-bg-classes">
                    <p class="bg-primary">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p class="bg-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                    <p class="bg-info">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
                    <p class="bg-warning">Etiam porta sem malesuada magna mollis euismod.</p>
                    <p class="bg-danger">Donec ullamcorper nulla non metus auctor fringilla.</p>
                </div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"bg-primary"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
                            <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"bg-success"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
                            <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"bg-info"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
                            <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"bg-warning"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
                            <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"bg-danger"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span></code></pre></div>
                <div id="callout-helper-bg-specificity" class="bs-callout bs-callout-info">
                    <h4>处理差异</h4>
                    <p>Sometimes contextual background classes cannot be applied due to the specificity of another selector. In some cases, a sufficient workaround is to wrap your element's content in a <code>&lt;div&gt;</code> with the class.</p>
                </div>
                <div id="callout-helper-bg-accessibility" class="bs-callout bs-callout-warning">
                    <h4>Conveying meaning to assistive technologies</h4>
                    <p>As with <a href="#helper-classes-colors">contextual colors</a>, ensure that any meaning conveyed through color is also conveyed in a format that is not purely presentational.</p>
                </div>

                <h3 id="helper-classes-close"><a data-anchorjs-icon="" aria-label="Anchor link for: helper classes close" href="#helper-classes-close" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>关闭按钮</h3>
                <p>通过使用一个象征关闭的图标，可以让模态框和警告框消失。</p>
                <div data-example-id="close-icon" class="bs-example">
                    <p><button aria-label="Close" class="close" type="button"><span aria-hidden="true">×</span></button></p>
                </div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"close"</span> <span class="na">aria-label=</span><span class="s">"Close"</span><span class="nt">&gt;&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;times;</span><span class="nt">&lt;/span&gt;&lt;/button&gt;</span></code></pre></div>


                <h3 id="helper-classes-carets"><a data-anchorjs-icon="" aria-label="Anchor link for: helper classes carets" href="#helper-classes-carets" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>三角符号</h3>
                <p>通过使用三角符号可以指示某个元素具有下拉菜单的功能。注意，<a href="../components/#btn-dropdowns-dropup">向上弹出式菜单</a>中的三角符号是反方向的。</p>
                <div data-example-id="caret" class="bs-example">
                    <span class="caret"></span>
                </div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;</span></code></pre></div>


                <h3 id="helper-classes-floats"><a data-anchorjs-icon="" aria-label="Anchor link for: helper classes floats" href="#helper-classes-floats" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>快速浮动</h3>
                <p>通过添加一个类，可以将任意元素向左或向右浮动。<code>!important</code> 被用来明确 CSS 样式的优先级。这些类还可以作为 mixin（参见 less 文档） 使用。</p>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"pull-left"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"pull-right"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span></code></pre></div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="scss" class="language-scss"><span class="c1">// Classes
</span><span class="nc">.pull-left</span> <span class="p">{</span>
                                <span class="nl">float</span><span class="p">:</span> <span class="nb">left</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span>
                                <span class="p">}</span>
                            <span class="nc">.pull-right</span> <span class="p">{</span>
                                <span class="nl">float</span><span class="p">:</span> <span class="nb">right</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span>
                                <span class="p">}</span>

<span class="c1">// Usage as mixins
</span><span class="nc">.element</span> <span class="p">{</span>
                                <span class="nc">.pull-left</span><span class="o">()</span><span class="p">;</span>
                                <span class="p">}</span>
                            <span class="nc">.another-element</span> <span class="p">{</span>
                                <span class="nc">.pull-right</span><span class="o">()</span><span class="p">;</span>
                                <span class="p">}</span></code></pre></div>

                <div id="callout-helper-pull-navbar" class="bs-callout bs-callout-warning">
                    <h4>不能用于导航条组件中</h4>
                    <p>排列导航条中的组件时可以使用这些工具类：<code>.navbar-left</code> 或 <code>.navbar-right</code> 。 <a href="../components/#navbar-component-alignment">参见导航条文档</a>以获取更多信息。</p>
                </div>


                <h3 id="helper-classes-center"><a data-anchorjs-icon="" aria-label="Anchor link for: helper classes center" href="#helper-classes-center" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>让内容块居中</h3>
                <p>为任意元素设置 <code>display: block</code> 属性并通过 <code>margin</code> 属性让其中的内容居中。下面列出的类还可以作为 mixin 使用。</p>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"center-block"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span></code></pre></div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="scss" class="language-scss"><span class="c1">// Class
</span><span class="nc">.center-block</span> <span class="p">{</span>
                                <span class="nl">display</span><span class="p">:</span> <span class="nb">block</span><span class="p">;</span>
                                <span class="nl">margin-left</span><span class="p">:</span> <span class="nb">auto</span><span class="p">;</span>
                                <span class="nl">margin-right</span><span class="p">:</span> <span class="nb">auto</span><span class="p">;</span>
                                <span class="p">}</span>

<span class="c1">// Usage as a mixin
</span><span class="nc">.element</span> <span class="p">{</span>
                                <span class="nc">.center-block</span><span class="o">()</span><span class="p">;</span>
                                <span class="p">}</span></code></pre></div>


                <h3 id="helper-classes-clearfix"><a data-anchorjs-icon="" aria-label="Anchor link for: helper classes clearfix" href="#helper-classes-clearfix" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>清除浮动</h3>
                <p><strong>通过为父元素</strong>添加 <code>.clearfix</code> 类可以很容易地清除浮动（<code>float</code>）。这里所使用的是 Nicolas Gallagher 创造的 <a href="http://nicolasgallagher.com/micro-clearfix-hack/">micro clearfix</a> 方式。此类还可以作为 mixin 使用。</p>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="c">&lt;!-- Usage as a class --&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"clearfix"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span></code></pre></div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="scss" class="language-scss"><span class="c1">// Mixin itself
</span><span class="nc">.clearfix</span><span class="o">()</span> <span class="p">{</span>
                                <span class="k">&amp;</span><span class="nd">:before</span><span class="o">,</span>
                                <span class="k">&amp;</span><span class="nd">:after</span> <span class="p">{</span>
                                <span class="nl">content</span><span class="p">:</span> <span class="s2">" "</span><span class="p">;</span>
                                <span class="nl">display</span><span class="p">:</span> <span class="n">table</span><span class="p">;</span>
                                <span class="p">}</span>
                                <span class="k">&amp;</span><span class="nd">:after</span> <span class="p">{</span>
                                <span class="nl">clear</span><span class="p">:</span> <span class="nb">both</span><span class="p">;</span>
                                <span class="p">}</span>
                                <span class="p">}</span>

<span class="c1">// Usage as a mixin
</span><span class="nc">.element</span> <span class="p">{</span>
                                <span class="nc">.clearfix</span><span class="o">()</span><span class="p">;</span>
                                <span class="p">}</span></code></pre></div>


                <h3 id="helper-classes-show-hide"><a data-anchorjs-icon="" aria-label="Anchor link for: helper classes show hide" href="#helper-classes-show-hide" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>显示或隐藏内容</h3>
                <p><code>.show</code> 和 <code>.hidden</code> 类可以强制任意元素显示或隐藏(<strong>对于屏幕阅读器也能起效</strong>)。这些类通过 <code>!important</code> 来避免 CSS 样式优先级问题，就像 <a href="#helper-classes-floats">quick floats</a> 一样的做法。注意，这些类只对块级元素起作用，另外，还可以作为 mixin 使用。</p>
                <p><code>.hide</code> 类仍然可用，但是它不能对屏幕阅读器起作用，并且从 v3.0.1 版本开始就<strong>不建议使用</strong>了。请使用 <code>.hidden</code> 或 <code>.sr-only</code> 。</p>
                <p>另外，<code>.invisible</code> 类可以被用来仅仅影响元素的可见性，也就是所，元素的 <code>display</code> 属性不被改变，并且这个元素仍然能够影响文档流的排布。</p>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"show"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"hidden"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span></code></pre></div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="scss" class="language-scss"><span class="c1">// Classes
</span><span class="nc">.show</span> <span class="p">{</span>
                                <span class="nl">display</span><span class="p">:</span> <span class="nb">block</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span>
                                <span class="p">}</span>
                            <span class="nc">.hidden</span> <span class="p">{</span>
                                <span class="nl">display</span><span class="p">:</span> <span class="nb">none</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span>
                                <span class="p">}</span>
                            <span class="nc">.invisible</span> <span class="p">{</span>
                                <span class="nl">visibility</span><span class="p">:</span> <span class="nb">hidden</span><span class="p">;</span>
                                <span class="p">}</span>

<span class="c1">// Usage as mixins
</span><span class="nc">.element</span> <span class="p">{</span>
                                <span class="nc">.show</span><span class="o">()</span><span class="p">;</span>
                                <span class="p">}</span>
                            <span class="nc">.another-element</span> <span class="p">{</span>
                                <span class="nc">.hidden</span><span class="o">()</span><span class="p">;</span>
                                <span class="p">}</span></code></pre></div>


                <h3 id="helper-classes-screen-readers"><a data-anchorjs-icon="" aria-label="Anchor link for: helper classes screen readers" href="#helper-classes-screen-readers" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>屏幕阅读器和键盘导航</h3>
                <p><code>.sr-only</code> 类可以对<strong>屏幕阅读器以外</strong>的设备隐藏内容。<code>.sr-only</code> 和 <code>.sr-only-focusable</code> 联合使用的话可以在元素有焦点的时候再次显示出来（例如，使用键盘导航的用户）。对于遵循 <a href="../getting-started/#accessibility">可访问性的最佳实践</a> 很有必要。这个类也可以作为 mixin 使用。</p>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"sr-only sr-only-focusable"</span> <span class="na">href=</span><span class="s">"#content"</span><span class="nt">&gt;</span>Skip to main content<span class="nt">&lt;/a&gt;</span></code></pre></div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="scss" class="language-scss"><span class="c1">// Usage as a mixin
</span><span class="nc">.skip-navigation</span> <span class="p">{</span>
                                <span class="nc">.sr-only</span><span class="o">()</span><span class="p">;</span>
                                <span class="nc">.sr-only-focusable</span><span class="o">()</span><span class="p">;</span>
                                <span class="p">}</span></code></pre></div>


                <h3 id="helper-classes-image-replacement"><a data-anchorjs-icon="" aria-label="Anchor link for: helper classes image replacement" href="#helper-classes-image-replacement" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>图片替换</h3>
                <p>使用 <code>.text-hide</code> 类或对应的 mixin 可以用来将元素的文本内容替换为一张背景图。</p>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="html" class="language-html"><span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">"text-hide"</span><span class="nt">&gt;</span>Custom heading<span class="nt">&lt;/h1&gt;</span></code></pre></div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="scss" class="language-scss"><span class="c1">// Usage as a mixin
</span><span class="nc">.heading</span> <span class="p">{</span>
                                <span class="nc">.text-hide</span><span class="o">()</span><span class="p">;</span>
                                <span class="p">}</span></code></pre></div>
            </div>

            <div class="bs-docs-section">
                <h1 class="page-header" id="responsive-utilities"><a data-anchorjs-icon="" aria-label="Anchor link for: responsive utilities" href="#responsive-utilities" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>响应式工具</h1>

                <p class="lead">为了加快对移动设备友好的页面开发工作，利用媒体查询功能并使用这些工具类可以方便的针对不同设备展示或隐藏页面内容。另外还包含了针对打印机显示或隐藏内容的工具类。</p>
                <p>有针对性的使用这类工具类，从而避免为同一个网站创建完全不同的版本。相反，通过使用这些工具类可以在不同设备上提供不同的展现形式。</p>


                <h2 id="responsive-utilities-classes"><a data-anchorjs-icon="" aria-label="Anchor link for: responsive utilities classes" href="#responsive-utilities-classes" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>可用的类</h2>
                <p>通过单独或联合使用以下列出的类，可以针对不同屏幕尺寸隐藏或显示页面内容。</p>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped responsive-utilities">
                        <thead>
                        <tr>
                            <th></th>
                            <th>
                                超小屏幕
                                <small>手机 (&lt;768px)</small>
                            </th>
                            <th>
                                小屏幕
                                <small>平板 (≥768px)</small>
                            </th>
                            <th>
                                中等屏幕
                                <small>桌面 (≥992px)</small>
                            </th>
                            <th>
                                大屏幕
                                <small>桌面 (≥1200px)</small>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row"><code>.visible-xs-*</code></th>
                            <td class="is-visible">可见</td>
                            <td class="is-hidden">隐藏</td>
                            <td class="is-hidden">隐藏</td>
                            <td class="is-hidden">隐藏</td>
                        </tr>
                        <tr>
                            <th scope="row"><code>.visible-sm-*</code></th>
                            <td class="is-hidden">隐藏</td>
                            <td class="is-visible">可见</td>
                            <td class="is-hidden">隐藏</td>
                            <td class="is-hidden">隐藏</td>
                        </tr>
                        <tr>
                            <th scope="row"><code>.visible-md-*</code></th>
                            <td class="is-hidden">隐藏</td>
                            <td class="is-hidden">隐藏</td>
                            <td class="is-visible">可见</td>
                            <td class="is-hidden">隐藏</td>
                        </tr>
                        <tr>
                            <th scope="row"><code>.visible-lg-*</code></th>
                            <td class="is-hidden">隐藏</td>
                            <td class="is-hidden">隐藏</td>
                            <td class="is-hidden">隐藏</td>
                            <td class="is-visible">可见</td>
                        </tr>
                        </tbody>
                        <tbody>
                        <tr>
                            <th scope="row"><code>.hidden-xs</code></th>
                            <td class="is-hidden">隐藏</td>
                            <td class="is-visible">可见</td>
                            <td class="is-visible">可见</td>
                            <td class="is-visible">可见</td>
                        </tr>
                        <tr>
                            <th scope="row"><code>.hidden-sm</code></th>
                            <td class="is-visible">可见</td>
                            <td class="is-hidden">隐藏</td>
                            <td class="is-visible">可见</td>
                            <td class="is-visible">可见</td>
                        </tr>
                        <tr>
                            <th scope="row"><code>.hidden-md</code></th>
                            <td class="is-visible">可见</td>
                            <td class="is-visible">可见</td>
                            <td class="is-hidden">隐藏</td>
                            <td class="is-visible">可见</td>
                        </tr>
                        <tr>
                            <th scope="row"><code>.hidden-lg</code></th>
                            <td class="is-visible">可见</td>
                            <td class="is-visible">可见</td>
                            <td class="is-visible">可见</td>
                            <td class="is-hidden">隐藏</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <p>从 v3.2.0 版本起，形如 <code>.visible-*-*</code> 的类针对每种屏幕大小都有了三种变体，每个针对 CSS 中不同的 <code>display</code> 属性，列表如下：</p>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>类组</th>
                            <th>CSS <code>display</code></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row"><code>.visible-*-block</code></th>
                            <td><code>display: block;</code></td>
                        </tr>
                        <tr>
                            <th scope="row"><code>.visible-*-inline</code></th>
                            <td><code>display: inline;</code></td>
                        </tr>
                        <tr>
                            <th scope="row"><code>.visible-*-inline-block</code></th>
                            <td><code>display: inline-block;</code></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <p>因此，以超小屏幕（<code>xs</code>）为例，可用的 <code>.visible-*-*</code> 类是：<code>.visible-xs-block</code>、<code>.visible-xs-inline</code> 和 <code>.visible-xs-inline-block</code>。</p>
                <p><code>.visible-xs</code>、<code>.visible-sm</code>、<code>.visible-md</code> 和 <code>.visible-lg</code> 类也同时存在。但是<strong>从 v3.2.0 版本开始不再建议使用</strong>。除了 <code>&lt;table&gt;</code> 相关的元素的特殊情况外，它们与 <code>.visible-*-block</code> 大体相同。</p>

                <h2 id="responsive-utilities-print"><a data-anchorjs-icon="" aria-label="Anchor link for: responsive utilities print" href="#responsive-utilities-print" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>打印类</h2>
                <p>和常规的响应式类一样，使用下面的类可以针对打印机隐藏或显示某些内容。</p>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped responsive-utilities">
                        <thead>
                        <tr>
                            <th>class</th>
                            <th>浏览器</th>
                            <th>打印机</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">
                                <code>.visible-print-block</code><br>
                                <code>.visible-print-inline</code><br>
                                <code>.visible-print-inline-block</code>
                            </th>
                            <td class="is-hidden">隐藏</td>
                            <td class="is-visible">可见</td>
                        </tr>
                        <tr>
                            <th scope="row"><code>.hidden-print</code></th>
                            <td class="is-visible">可见</td>
                            <td class="is-hidden">隐藏</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <p><code>.visible-print</code> 类也是存在的，但是从 v3.2.0 版本开始<strong>不建议使用</strong>。它与 <code>.visible-print-block</code> 类大致相同，除了 <code>&lt;table&gt;</code> 相关元素的特殊情况外。</p>


                <h2 id="responsive-utilities-tests"><a data-anchorjs-icon="" aria-label="Anchor link for: responsive utilities tests" href="#responsive-utilities-tests" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>测试用例</h2>
                <p>调整你的浏览器大小，或者用其他设备打开页面，都可以测试这些响应式工具类。</p>

                <h3 id="-31"><a data-anchorjs-icon="" aria-label="Anchor link for:  31" href="#-31" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>在...上可见</h3>
                <p>带有绿色标记的元素表示其在当前浏览器视口（viewport）中是<strong>可见的</strong>。</p>
                <div class="row responsive-utilities-test visible-on">
                    <div class="col-xs-6">
                        <span class="hidden-xs">超小屏幕</span>
                        <span class="visible-xs-block">✔ 在超小屏幕上可见</span>
                    </div>
                    <div class="col-xs-6">
                        <span class="hidden-sm">小屏幕</span>
                        <span class="visible-sm-block">✔ 在小屏幕上可见</span>
                    </div>
                    <div class="clearfix visible-xs-block"></div>
                    <div class="col-xs-6">
                        <span class="hidden-md">中等屏幕</span>
                        <span class="visible-md-block">✔ 在中等屏幕上可见</span>
                    </div>
                    <div class="col-xs-6">
                        <span class="hidden-lg">大屏幕</span>
                        <span class="visible-lg-block">✔ 在大屏幕上可见</span>
                    </div>
                </div>
                <div class="row responsive-utilities-test visible-on">
                    <div class="col-xs-6 col-sm-6">
                        <span class="hidden-xs hidden-sm">超小屏幕和小屏幕</span>
                        <span class="visible-xs-block visible-sm-block">✔ 在超小屏幕和小屏幕上可见</span>
                    </div>
                    <div class="col-xs-6 col-sm-6">
                        <span class="hidden-md hidden-lg">中等屏幕和大屏幕</span>
                        <span class="visible-md-block visible-lg-block">✔ 在中等屏幕和大屏幕上可见</span>
                    </div>
                    <div class="clearfix visible-xs-block"></div>
                    <div class="col-xs-6 col-sm-6">
                        <span class="hidden-xs hidden-md">超小屏幕和中等屏幕</span>
                        <span class="visible-xs-block visible-md-block">✔ 在超小屏幕和中等屏幕上可见</span>
                    </div>
                    <div class="col-xs-6 col-sm-6">
                        <span class="hidden-sm hidden-lg">小屏幕和大屏幕</span>
                        <span class="visible-sm-block visible-lg-block">✔ 在小屏幕和大屏幕上可见</span>
                    </div>
                    <div class="clearfix visible-xs-block"></div>
                    <div class="col-xs-6 col-sm-6">
                        <span class="hidden-xs hidden-lg">超小屏幕和大屏幕</span>
                        <span class="visible-xs-block visible-lg-block">✔ 在超小屏幕和大屏幕上可见</span>
                    </div>
                    <div class="col-xs-6 col-sm-6">
                        <span class="hidden-sm hidden-md">小屏幕和中等屏幕</span>
                        <span class="visible-sm-block visible-md-block">✔ 在小屏幕和中等屏幕上可见</span>
                    </div>
                </div>

                <h3 id="-32"><a data-anchorjs-icon="" aria-label="Anchor link for:  32" href="#-32" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>在...上隐藏</h3>
                <p>带有绿色标记的元素表示其在当前浏览器视口（viewport）中是<strong>隐藏的</strong>。</p>
                <div class="row responsive-utilities-test hidden-on">
                    <div class="col-xs-6 col-sm-3">
                        <span class="hidden-xs">超小屏幕</span>
                        <span class="visible-xs-block">✔ 在超小屏幕上隐藏</span>
                    </div>
                    <div class="col-xs-6 col-sm-3">
                        <span class="hidden-sm">小屏幕</span>
                        <span class="visible-sm-block">✔ 在小屏幕上隐藏</span>
                    </div>
                    <div class="clearfix visible-xs-block"></div>
                    <div class="col-xs-6 col-sm-3">
                        <span class="hidden-md">中等屏幕</span>
                        <span class="visible-md-block">✔ 在中等屏幕上隐藏</span>
                    </div>
                    <div class="col-xs-6 col-sm-3">
                        <span class="hidden-lg">大屏幕</span>
                        <span class="visible-lg-block">✔ 在大屏幕上隐藏</span>
                    </div>
                </div>
                <div class="row responsive-utilities-test hidden-on">
                    <div class="col-xs-6">
                        <span class="hidden-xs hidden-sm">超小屏幕与小屏幕</span>
                        <span class="visible-xs-block visible-sm-block">✔ 在超小屏幕和小屏幕上隐藏</span>
                    </div>
                    <div class="col-xs-6">
                        <span class="hidden-md hidden-lg">中等屏幕和大屏幕</span>
                        <span class="visible-md-block visible-lg-block">✔ 在 medium 和 large 上隐藏</span>
                    </div>
                    <div class="clearfix visible-xs-block"></div>
                    <div class="col-xs-6">
                        <span class="hidden-xs hidden-md">超小屏幕和中等屏幕</span>
                        <span class="visible-xs-block visible-md-block">✔ 在超小屏幕和中等屏幕上隐藏</span>
                    </div>
                    <div class="col-xs-6">
                        <span class="hidden-sm hidden-lg">小屏幕和大屏幕</span>
                        <span class="visible-sm-block visible-lg-block">✔ 在小屏幕和大屏幕上隐藏</span>
                    </div>
                    <div class="clearfix visible-xs-block"></div>
                    <div class="col-xs-6">
                        <span class="hidden-xs hidden-lg">超小屏幕和大屏幕</span>
                        <span class="visible-xs-block visible-lg-block">✔ 在超小屏幕和大屏幕上隐藏</span>
                    </div>
                    <div class="col-xs-6">
                        <span class="hidden-sm hidden-md">小屏幕和中等屏幕</span>
                        <span class="visible-sm-block visible-md-block">✔ 在小屏幕和中等屏幕上隐藏</span>
                    </div>
                </div>
            </div>

            <div class="bs-docs-section">
                <h1 class="page-header" id="less"><a data-anchorjs-icon="" aria-label="Anchor link for: less" href="#less" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>使用 Less</h1>

                <p class="lead">Bootstrap 的 CSS 文件是通过 Less 源码编译而来的。Less 是一门预处理语言，支持变量、mixin、函数等额外功能。对于希望使用 Less 源码而非编译而来的 CSS 文件的用户，Bootstrap 框架中包含的大量变量、mixin 将非常有价值。</p>

                <p>针对栅格系统的变量和 mixin 包含在<a href="#grid-less">栅格系统</a>章节。</p>


                <h2 id="less-bootstrap"><a data-anchorjs-icon="" aria-label="Anchor link for: less bootstrap" href="#less-bootstrap" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>编译 Bootstrap</h2>
                <p>可以通过两种方式使用 Bootstrap ：使用编译后的 CSS 文件或者使用 Less 源码文件。若要编译 Less 文件，<a href="../getting-started/#grunt">请参考“起步”章节的内容</a>以了解如何设置开发环境并运行必须的编译指令。</p>

                <h2 id="less-variables"><a data-anchorjs-icon="" aria-label="Anchor link for: less variables" href="#less-variables" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>变量</h2>
                <p>整个 Bootstrap 项目中使用了大量的变量，这些变量被用来代表颜色、空白（内部、边距）、字体等。详细内容请参考<a href="../customize/#less-variables-section">定制工具</a>。</p>

                <h3 id="less-variables-colors"><a data-anchorjs-icon="" aria-label="Anchor link for: less variables colors" href="#less-variables-colors" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>颜色</h3>
                <p>Bootstrap 使用了两种颜色模式：灰度颜色和语义颜色。灰度颜色用于快速获取常用的黑色色调；语义颜色包含了各种赋予语义的颜色值。</p>
                <div class="bs-example">
                    <div class="color-swatches">
                        <div class="color-swatch gray-darker"></div>
                        <div class="color-swatch gray-dark"></div>
                        <div class="color-swatch gray"></div>
                        <div class="color-swatch gray-light"></div>
                        <div class="color-swatch gray-lighter"></div>
                    </div>
                </div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="scss" class="language-scss"><span class="k">@gray-darker</span><span class="nd">:</span>  <span class="nt">lighten</span><span class="o">(</span><span class="nn">#000</span><span class="o">,</span> <span class="nt">13</span><span class="nc">.5</span><span class="nv">%</span><span class="o">)</span><span class="p">;</span> <span class="c1">// #222
</span><span class="k">@gray-dark</span><span class="nd">:</span>    <span class="nt">lighten</span><span class="o">(</span><span class="nn">#000</span><span class="o">,</span> <span class="nt">20</span><span class="nv">%</span><span class="o">)</span><span class="p">;</span>   <span class="c1">// #333
</span><span class="k">@gray</span><span class="nd">:</span>         <span class="nt">lighten</span><span class="o">(</span><span class="nn">#000</span><span class="o">,</span> <span class="nt">33</span><span class="nc">.5</span><span class="nv">%</span><span class="o">)</span><span class="p">;</span> <span class="c1">// #555
</span><span class="k">@gray-light</span><span class="nd">:</span>   <span class="nt">lighten</span><span class="o">(</span><span class="nn">#000</span><span class="o">,</span> <span class="nt">46</span><span class="nc">.7</span><span class="nv">%</span><span class="o">)</span><span class="p">;</span> <span class="c1">// #777
</span><span class="k">@gray-lighter</span><span class="nd">:</span> <span class="nt">lighten</span><span class="o">(</span><span class="nn">#000</span><span class="o">,</span> <span class="nt">93</span><span class="nc">.5</span><span class="nv">%</span><span class="o">)</span><span class="p">;</span> <span class="o">//</span> <span class="nn">#eee</span></code></pre></div>

                <div class="bs-example">
                    <div class="color-swatches">
                        <div class="color-swatch brand-primary"></div>
                        <div class="color-swatch brand-success"></div>
                        <div class="color-swatch brand-info"></div>
                        <div class="color-swatch brand-warning"></div>
                        <div class="color-swatch brand-danger"></div>
                    </div>
                </div>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="scss" class="language-scss"><span class="k">@brand-primary</span><span class="nd">:</span> <span class="nt">darken</span><span class="o">(</span><span class="nn">#428bca</span><span class="o">,</span> <span class="nt">6</span><span class="nc">.5</span><span class="nv">%</span><span class="o">)</span><span class="p">;</span> <span class="c1">// #337ab7
</span><span class="k">@brand-success</span><span class="nd">:</span> <span class="nn">#5cb85c</span><span class="p">;</span>
                            <span class="k">@brand-info</span><span class="nd">:</span>    <span class="nn">#5bc0de</span><span class="p">;</span>
                            <span class="k">@brand-warning</span><span class="nd">:</span> <span class="nn">#f0ad4e</span><span class="p">;</span>
                            <span class="k">@brand-danger</span><span class="nd">:</span>  <span class="nn">#d9534f</span><span class="p">;</span></code></pre></div>

                <p>你在项目中可以使用这些预定义的颜色变量，或者重新为其赋予别名，使其更有语义。</p>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="scss" class="language-scss"><span class="c1">// Use as-is
</span><span class="nc">.masthead</span> <span class="p">{</span>
                                <span class="nl">background-color</span><span class="p">:</span> <span class="o">@</span><span class="n">brand-primary</span><span class="p">;</span>
                                <span class="p">}</span>

<span class="c1">// Reassigned variables in Less
</span><span class="k">@alert-message-background</span><span class="nd">:</span> <span class="o">@</span><span class="nt">brand-info</span><span class="p">;</span>
                            <span class="nc">.alert</span> <span class="p">{</span>
                                <span class="nl">background-color</span><span class="p">:</span> <span class="o">@</span><span class="n">alert-message-background</span><span class="p">;</span>
                                <span class="p">}</span></code></pre></div>

                <h3 id="less-variables-scaffolding"><a data-anchorjs-icon="" aria-label="Anchor link for: less variables scaffolding" href="#less-variables-scaffolding" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Scaffolding</h3>
                <p>某几个变量是改变网站外观的关键要素。</p>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="scss" class="language-scss"><span class="c1">// Scaffolding
</span><span class="k">@body-bg</span><span class="nd">:</span>    <span class="nn">#fff</span><span class="p">;</span>
                            <span class="k">@text-color</span><span class="nd">:</span> <span class="o">@</span><span class="nt">black-50</span><span class="p">;</span></code></pre></div>

                <h3 id="less-variables-links"><a data-anchorjs-icon="" aria-label="Anchor link for: less variables links" href="#less-variables-links" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>链接</h3>
                <p>仅仅通过改变一个变量，可以很容易地为链接赋予正确的颜色。</p>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="scss" class="language-scss"><span class="c1">// Variables
</span><span class="k">@link-color</span><span class="nd">:</span>       <span class="o">@</span><span class="nt">brand-primary</span><span class="p">;</span>
                            <span class="k">@link-hover-color</span><span class="nd">:</span> <span class="nt">darken</span><span class="o">(@</span><span class="nt">link-color</span><span class="o">,</span> <span class="nt">15</span><span class="nv">%</span><span class="o">)</span><span class="p">;</span>

<span class="c1">// Usage
</span><span class="nt">a</span> <span class="p">{</span>
                                <span class="nl">color</span><span class="p">:</span> <span class="o">@</span><span class="n">link-color</span><span class="p">;</span>
                                <span class="nl">text-decoration</span><span class="p">:</span> <span class="nb">none</span><span class="p">;</span>

                                <span class="k">&amp;</span><span class="nd">:hover</span> <span class="p">{</span>
                                <span class="nl">color</span><span class="p">:</span> <span class="o">@</span><span class="n">link-hover-color</span><span class="p">;</span>
                                <span class="nl">text-decoration</span><span class="p">:</span> <span class="nb">underline</span><span class="p">;</span>
                                <span class="p">}</span>
                                <span class="p">}</span></code></pre></div>
                <p>注意：<code>@link-hover-color</code> 使用了 Less 提供的一个内置函数，用于自动为鼠标悬停设置合适的颜色。你还可以使用 <code>darken</code>、<code>lighten</code>、<code>saturate</code> 和 <code>desaturate</code> 等 Less 内置的函数。</p>

                <h3 id="less-variables-typography"><a data-anchorjs-icon="" aria-label="Anchor link for: less variables typography" href="#less-variables-typography" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>排版</h3>
                <p>通过几个变量就能轻松的设置字体、字号、行距等。Bootstrap 利用这些变量提供了简单地定制排版的功能。</p>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="scss" class="language-scss"><span class="k">@font-family-sans-serif</span><span class="nd">:</span>  <span class="s2">"Helvetica Neue"</span><span class="o">,</span> <span class="nt">Helvetica</span><span class="o">,</span> <span class="nt">Arial</span><span class="o">,</span> <span class="nt">sans-serif</span><span class="p">;</span>
                            <span class="k">@font-family-serif</span><span class="nd">:</span>       <span class="nt">Georgia</span><span class="o">,</span> <span class="s2">"Times New Roman"</span><span class="o">,</span> <span class="nt">Times</span><span class="o">,</span> <span class="nt">serif</span><span class="p">;</span>
                            <span class="k">@font-family-monospace</span><span class="nd">:</span>   <span class="nt">Menlo</span><span class="o">,</span> <span class="nt">Monaco</span><span class="o">,</span> <span class="nt">Consolas</span><span class="o">,</span> <span class="s2">"Courier New"</span><span class="o">,</span> <span class="nt">monospace</span><span class="p">;</span>
                            <span class="k">@font-family-base</span><span class="nd">:</span>        <span class="o">@</span><span class="nt">font-family-sans-serif</span><span class="p">;</span>

                            <span class="k">@font-size-base</span><span class="nd">:</span>          <span class="nt">14px</span><span class="p">;</span>
                            <span class="k">@font-size-large</span><span class="nd">:</span>         <span class="nt">ceil</span><span class="o">((@</span><span class="nt">font-size-base</span> <span class="o">*</span> <span class="nt">1</span><span class="nc">.25</span><span class="o">))</span><span class="p">;</span> <span class="c1">// ~18px
</span><span class="k">@font-size-small</span><span class="nd">:</span>         <span class="nt">ceil</span><span class="o">((@</span><span class="nt">font-size-base</span> <span class="o">*</span> <span class="nt">0</span><span class="nc">.85</span><span class="o">))</span><span class="p">;</span> <span class="c1">// ~12px
</span>
                            <span class="k">@font-size-h1</span><span class="nd">:</span>            <span class="nt">floor</span><span class="o">((@</span><span class="nt">font-size-base</span> <span class="o">*</span> <span class="nt">2</span><span class="nc">.6</span><span class="o">))</span><span class="p">;</span> <span class="c1">// ~36px
</span><span class="k">@font-size-h2</span><span class="nd">:</span>            <span class="nt">floor</span><span class="o">((@</span><span class="nt">font-size-base</span> <span class="o">*</span> <span class="nt">2</span><span class="nc">.15</span><span class="o">))</span><span class="p">;</span> <span class="c1">// ~30px
</span><span class="k">@font-size-h3</span><span class="nd">:</span>            <span class="nt">ceil</span><span class="o">((@</span><span class="nt">font-size-base</span> <span class="o">*</span> <span class="nt">1</span><span class="nc">.7</span><span class="o">))</span><span class="p">;</span> <span class="c1">// ~24px
</span><span class="k">@font-size-h4</span><span class="nd">:</span>            <span class="nt">ceil</span><span class="o">((@</span><span class="nt">font-size-base</span> <span class="o">*</span> <span class="nt">1</span><span class="nc">.25</span><span class="o">))</span><span class="p">;</span> <span class="c1">// ~18px
</span><span class="k">@font-size-h5</span><span class="nd">:</span>            <span class="o">@</span><span class="nt">font-size-base</span><span class="p">;</span>
                            <span class="k">@font-size-h6</span><span class="nd">:</span>            <span class="nt">ceil</span><span class="o">((@</span><span class="nt">font-size-base</span> <span class="o">*</span> <span class="nt">0</span><span class="nc">.85</span><span class="o">))</span><span class="p">;</span> <span class="c1">// ~12px
</span>
                            <span class="k">@line-height-base</span><span class="nd">:</span>        <span class="nt">1</span><span class="nc">.428571429</span><span class="p">;</span> <span class="c1">// 20/14
</span><span class="k">@line-height-computed</span><span class="nd">:</span>    <span class="nt">floor</span><span class="o">((@</span><span class="nt">font-size-base</span> <span class="o">*</span> <span class="o">@</span><span class="nt">line-height-base</span><span class="o">))</span><span class="p">;</span> <span class="c1">// ~20px
</span>
                            <span class="k">@headings-font-family</span><span class="nd">:</span>    <span class="nt">inherit</span><span class="p">;</span>
                            <span class="k">@headings-font-weight</span><span class="nd">:</span>    <span class="nt">500</span><span class="p">;</span>
                            <span class="k">@headings-line-height</span><span class="nd">:</span>    <span class="nt">1</span><span class="nc">.1</span><span class="p">;</span>
                            <span class="k">@headings-color</span><span class="nd">:</span>          <span class="nt">inherit</span><span class="p">;</span></code></pre></div>

                <h3 id="less-variables-icons"><a data-anchorjs-icon="" aria-label="Anchor link for: less variables icons" href="#less-variables-icons" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>图标</h3>
                <p>以下两个变量用于设置图标文件的位置和文件名。</p>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="scss" class="language-scss"><span class="k">@icon-font-path</span><span class="nd">:</span>          <span class="s2">"../fonts/"</span><span class="p">;</span>
                            <span class="k">@icon-font-name</span><span class="nd">:</span>          <span class="s2">"glyphicons-halflings-regular"</span><span class="p">;</span></code></pre></div>

                <h3 id="less-variables-components"><a data-anchorjs-icon="" aria-label="Anchor link for: less variables components" href="#less-variables-components" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>组件</h3>
                <p>组件贯穿整个 Bootstrap 框架，他们通过一些变量来设置默认值。下面列出的是常用的几个。</p>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="scss" class="language-scss"><span class="k">@padding-base-vertical</span><span class="nd">:</span>          <span class="nt">6px</span><span class="p">;</span>
                            <span class="k">@padding-base-horizontal</span><span class="nd">:</span>        <span class="nt">12px</span><span class="p">;</span>

                            <span class="k">@padding-large-vertical</span><span class="nd">:</span>         <span class="nt">10px</span><span class="p">;</span>
                            <span class="k">@padding-large-horizontal</span><span class="nd">:</span>       <span class="nt">16px</span><span class="p">;</span>

                            <span class="k">@padding-small-vertical</span><span class="nd">:</span>         <span class="nt">5px</span><span class="p">;</span>
                            <span class="k">@padding-small-horizontal</span><span class="nd">:</span>       <span class="nt">10px</span><span class="p">;</span>

                            <span class="k">@padding-xs-vertical</span><span class="nd">:</span>            <span class="nt">1px</span><span class="p">;</span>
                            <span class="k">@padding-xs-horizontal</span><span class="nd">:</span>          <span class="nt">5px</span><span class="p">;</span>

                            <span class="k">@line-height-large</span><span class="nd">:</span>              <span class="nt">1</span><span class="nc">.33</span><span class="p">;</span>
                            <span class="k">@line-height-small</span><span class="nd">:</span>              <span class="nt">1</span><span class="nc">.5</span><span class="p">;</span>

                            <span class="k">@border-radius-base</span><span class="nd">:</span>             <span class="nt">4px</span><span class="p">;</span>
                            <span class="k">@border-radius-large</span><span class="nd">:</span>            <span class="nt">6px</span><span class="p">;</span>
                            <span class="k">@border-radius-small</span><span class="nd">:</span>            <span class="nt">3px</span><span class="p">;</span>

                            <span class="k">@component-active-color</span><span class="nd">:</span>         <span class="nn">#fff</span><span class="p">;</span>
                            <span class="k">@component-active-bg</span><span class="nd">:</span>            <span class="o">@</span><span class="nt">brand-primary</span><span class="p">;</span>

                            <span class="k">@caret-width-base</span><span class="nd">:</span>               <span class="nt">4px</span><span class="p">;</span>
                            <span class="k">@caret-width-large</span><span class="nd">:</span>              <span class="nt">5px</span><span class="p">;</span></code></pre></div>


                <h2 id="less-mixins-vendor"><a data-anchorjs-icon="" aria-label="Anchor link for: less mixins vendor" href="#less-mixins-vendor" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>特定浏览器厂商的 mixin</h2>
                <p>特定浏览器厂商的 mixin 用于为不同厂商的浏览器使用相应的 CSS 属性前缀来支持各厂商的浏览器。</p>


                <h3 id="less-mixins-box-sizing"><a data-anchorjs-icon="" aria-label="Anchor link for: less mixins box sizing" href="#less-mixins-box-sizing" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Box-sizing</h3>
                <p>通过这一个 mixin 来为所有组件设置盒模型。请参考这篇 <a target="_blank" href="https://developer.mozilla.org/en-US/docs/CSS/box-sizing">来自 Mozilla 的文章</a>。</p>
                <p>此 mixin 从 v3.2.0 版本开始就被列为 <strong>不建议使用</strong> 了，取而代之的是使用 Autoprefixer。为了保持向后兼容，在 v4 版本之前，Bootstrap 将在内部继续使用这些 mixin。</p>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="scss" class="language-scss"><span class="nc">.box-sizing</span><span class="o">(@</span><span class="nt">box-model</span><span class="o">)</span> <span class="p">{</span>
                                <span class="na">-webkit-box-sizing</span><span class="p">:</span> <span class="o">@</span><span class="n">box-model</span><span class="p">;</span> <span class="c1">// Safari &lt;= 5
                                </span>     <span class="na">-moz-box-sizing</span><span class="p">:</span> <span class="o">@</span><span class="n">box-model</span><span class="p">;</span> <span class="c1">// Firefox &lt;= 19
                                </span>          <span class="nl">box-sizing</span><span class="p">:</span> <span class="o">@</span><span class="n">box-model</span><span class="p">;</span>
                                <span class="p">}</span></code></pre></div>

                <h3 id="less-mixins-rounded-corners"><a data-anchorjs-icon="" aria-label="Anchor link for: less mixins rounded corners" href="#less-mixins-rounded-corners" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>圆角</h3>
                <p>现在，所有现代浏览器都支持不带厂商前缀的 <code>border-radius</code> 属性了。有鉴于此，我们没有提供 <code>.border-radius()</code> mixin，但是，Bootstrap does 提供了用于快速设置同一侧圆角的 mixin 。</p>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="scss" class="language-scss"><span class="nc">.border-top-radius</span><span class="o">(@</span><span class="nt">radius</span><span class="o">)</span> <span class="p">{</span>
                                <span class="nl">border-top-right-radius</span><span class="p">:</span> <span class="o">@</span><span class="n">radius</span><span class="p">;</span>
                                <span class="nl">border-top-left-radius</span><span class="p">:</span> <span class="o">@</span><span class="n">radius</span><span class="p">;</span>
                                <span class="p">}</span>
                            <span class="nc">.border-right-radius</span><span class="o">(@</span><span class="nt">radius</span><span class="o">)</span> <span class="p">{</span>
                                <span class="nl">border-bottom-right-radius</span><span class="p">:</span> <span class="o">@</span><span class="n">radius</span><span class="p">;</span>
                                <span class="nl">border-top-right-radius</span><span class="p">:</span> <span class="o">@</span><span class="n">radius</span><span class="p">;</span>
                                <span class="p">}</span>
                            <span class="nc">.border-bottom-radius</span><span class="o">(@</span><span class="nt">radius</span><span class="o">)</span> <span class="p">{</span>
                                <span class="nl">border-bottom-right-radius</span><span class="p">:</span> <span class="o">@</span><span class="n">radius</span><span class="p">;</span>
                                <span class="nl">border-bottom-left-radius</span><span class="p">:</span> <span class="o">@</span><span class="n">radius</span><span class="p">;</span>
                                <span class="p">}</span>
                            <span class="nc">.border-left-radius</span><span class="o">(@</span><span class="nt">radius</span><span class="o">)</span> <span class="p">{</span>
                                <span class="nl">border-bottom-left-radius</span><span class="p">:</span> <span class="o">@</span><span class="n">radius</span><span class="p">;</span>
                                <span class="nl">border-top-left-radius</span><span class="p">:</span> <span class="o">@</span><span class="n">radius</span><span class="p">;</span>
                                <span class="p">}</span></code></pre></div>

                <h3 id="less-mixins-box-shadow"><a data-anchorjs-icon="" aria-label="Anchor link for: less mixins box shadow" href="#less-mixins-box-shadow" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Box (Drop) 隐形</h3>
                <p>如果你的目标用户使用的是最新版本和更高级的浏览器和设备，只需单独使用 <code>box-shadow</code> 属性即可。如果你需要兼容较老的 Android (低于 v4) 和 iOS 设备 (低于 iOS 5)，可以使用下面这个 <strong>不建议使用</strong> 的 mixin，便于帮你添加 <code>-webkit</code> 前缀。</p>
                <p>由于 Bootstrap 并未官方提供对过时（不支持标准属性）平台的支持，此 mixin 从 v3.1.0 版本期就 <strong>不建议使用</strong> 了。为了保持向后兼容，Bootstrap 将继续在内部使用此 mixin， 直到 Bootstrap v4。</p>
                <p>在设置 box 阴影时务必使用 <code>rgba()</code> 颜色，这样可以使他们尽可能地与背景无缝融入。</p>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="scss" class="language-scss"><span class="err">.</span><span class="nl">box-shadow</span><span class="err">(@</span><span class="na">shadow</span><span class="p">:</span> <span class="m">0</span> <span class="m">1px</span> <span class="m">3px</span> <span class="nf">rgba</span><span class="p">(</span><span class="m">0</span><span class="o">,</span><span class="m">0</span><span class="o">,</span><span class="m">0</span><span class="o">,.</span><span class="m">25</span><span class="p">))</span> <span class="p">{</span>
                                <span class="na">-webkit-box-shadow</span><span class="p">:</span> <span class="o">@</span><span class="n">shadow</span><span class="p">;</span> <span class="c1">// iOS &lt;4.3 &amp; Android &lt;4.1
                                </span>          <span class="nl">box-shadow</span><span class="p">:</span> <span class="o">@</span><span class="n">shadow</span><span class="p">;</span>
                                <span class="p">}</span></code></pre></div>

                <h3 id="less-mixins-transitions"><a data-anchorjs-icon="" aria-label="Anchor link for: less mixins transitions" href="#less-mixins-transitions" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>过渡效果</h3>
                <p>有多个 mixin 供你灵活使用。可以一次性设置所有的过渡效果的属性，或者根据需要只是指定延时和持续时间。</p>
                <p>此 mixin 从 v3.2.0 版本开始就被列为 <strong>不建议使用</strong> 了，取而代之的是使用 Autoprefixer。为了保持向后兼容，在 v4 版本之前，Bootstrap 将在内部继续使用这些 mixin。</p>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="scss" class="language-scss"><span class="nc">.transition</span><span class="o">(@</span><span class="nt">transition</span><span class="o">)</span> <span class="p">{</span>
                                <span class="na">-webkit-transition</span><span class="p">:</span> <span class="o">@</span><span class="n">transition</span><span class="p">;</span>
                                <span class="nl">transition</span><span class="p">:</span> <span class="o">@</span><span class="n">transition</span><span class="p">;</span>
                                <span class="p">}</span>
                            <span class="nc">.transition-property</span><span class="o">(@</span><span class="nt">transition-property</span><span class="o">)</span> <span class="p">{</span>
                                <span class="na">-webkit-transition-property</span><span class="p">:</span> <span class="o">@</span><span class="n">transition-property</span><span class="p">;</span>
                                <span class="nl">transition-property</span><span class="p">:</span> <span class="o">@</span><span class="n">transition-property</span><span class="p">;</span>
                                <span class="p">}</span>
                            <span class="nc">.transition-delay</span><span class="o">(@</span><span class="nt">transition-delay</span><span class="o">)</span> <span class="p">{</span>
                                <span class="na">-webkit-transition-delay</span><span class="p">:</span> <span class="o">@</span><span class="n">transition-delay</span><span class="p">;</span>
                                <span class="nl">transition-delay</span><span class="p">:</span> <span class="o">@</span><span class="n">transition-delay</span><span class="p">;</span>
                                <span class="p">}</span>
                            <span class="nc">.transition-duration</span><span class="o">(@</span><span class="nt">transition-duration</span><span class="o">)</span> <span class="p">{</span>
                                <span class="na">-webkit-transition-duration</span><span class="p">:</span> <span class="o">@</span><span class="n">transition-duration</span><span class="p">;</span>
                                <span class="nl">transition-duration</span><span class="p">:</span> <span class="o">@</span><span class="n">transition-duration</span><span class="p">;</span>
                                <span class="p">}</span>
                            <span class="nc">.transition-timing-function</span><span class="o">(@</span><span class="nt">timing-function</span><span class="o">)</span> <span class="p">{</span>
                                <span class="na">-webkit-transition-timing-function</span><span class="p">:</span> <span class="o">@</span><span class="n">timing-function</span><span class="p">;</span>
                                <span class="nl">transition-timing-function</span><span class="p">:</span> <span class="o">@</span><span class="n">timing-function</span><span class="p">;</span>
                                <span class="p">}</span>
                            <span class="nc">.transition-transform</span><span class="o">(@</span><span class="nt">transition</span><span class="o">)</span> <span class="p">{</span>
                                <span class="na">-webkit-transition</span><span class="p">:</span> <span class="o">-</span><span class="n">webkit-transform</span> <span class="o">@</span><span class="n">transition</span><span class="p">;</span>
                                <span class="na">-moz-transition</span><span class="p">:</span> <span class="o">-</span><span class="n">moz-transform</span> <span class="o">@</span><span class="n">transition</span><span class="p">;</span>
                                <span class="na">-o-transition</span><span class="p">:</span> <span class="o">-</span><span class="n">o-transform</span> <span class="o">@</span><span class="n">transition</span><span class="p">;</span>
                                <span class="nl">transition</span><span class="p">:</span> <span class="n">transform</span> <span class="o">@</span><span class="n">transition</span><span class="p">;</span>
                                <span class="p">}</span></code></pre></div>

                <h3 id="less-mixins-transformations"><a data-anchorjs-icon="" aria-label="Anchor link for: less mixins transformations" href="#less-mixins-transformations" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>变形</h3>
                <p>旋转、缩放、平移（移动）或倾斜任何对象。</p>
                <p>此 mixin 从 v3.2.0 版本开始就被列为 <strong>不建议使用</strong> 了，取而代之的是使用 Autoprefixer。为了保持向后兼容，在 v4 版本之前，Bootstrap 将在内部继续使用这些 mixin。</p>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="scss" class="language-scss"><span class="nc">.rotate</span><span class="o">(@</span><span class="nt">degrees</span><span class="o">)</span> <span class="p">{</span>
                                <span class="na">-webkit-transform</span><span class="p">:</span> <span class="nf">rotate</span><span class="p">(</span><span class="o">@</span><span class="n">degrees</span><span class="p">);</span>
                                <span class="na">-ms-transform</span><span class="p">:</span> <span class="nf">rotate</span><span class="p">(</span><span class="o">@</span><span class="n">degrees</span><span class="p">);</span> <span class="c1">// IE9 only
                                </span>          <span class="nl">transform</span><span class="p">:</span> <span class="nf">rotate</span><span class="p">(</span><span class="o">@</span><span class="n">degrees</span><span class="p">);</span>
                                <span class="p">}</span>
                            <span class="nc">.scale</span><span class="o">(@</span><span class="nt">ratio</span><span class="p">;</span> <span class="k">@ratio-y</span><span class="nc">...</span><span class="o">)</span> <span class="p">{</span>
                                <span class="na">-webkit-transform</span><span class="p">:</span> <span class="nf">scale</span><span class="p">(</span><span class="o">@</span><span class="n">ratio</span><span class="o">,</span> <span class="o">@</span><span class="n">ratio-y</span><span class="p">);</span>
                                <span class="na">-ms-transform</span><span class="p">:</span> <span class="nf">scale</span><span class="p">(</span><span class="o">@</span><span class="n">ratio</span><span class="o">,</span> <span class="o">@</span><span class="n">ratio-y</span><span class="p">);</span> <span class="c1">// IE9 only
                                </span>          <span class="nl">transform</span><span class="p">:</span> <span class="nf">scale</span><span class="p">(</span><span class="o">@</span><span class="n">ratio</span><span class="o">,</span> <span class="o">@</span><span class="n">ratio-y</span><span class="p">);</span>
                                <span class="p">}</span>
                            <span class="nc">.translate</span><span class="o">(@</span><span class="nt">x</span><span class="p">;</span> <span class="k">@y</span><span class="o">)</span> <span class="p">{</span>
                                <span class="na">-webkit-transform</span><span class="p">:</span> <span class="nf">translate</span><span class="p">(</span><span class="o">@</span><span class="n">x</span><span class="o">,</span> <span class="o">@</span><span class="n">y</span><span class="p">);</span>
                                <span class="na">-ms-transform</span><span class="p">:</span> <span class="nf">translate</span><span class="p">(</span><span class="o">@</span><span class="n">x</span><span class="o">,</span> <span class="o">@</span><span class="n">y</span><span class="p">);</span> <span class="c1">// IE9 only
                                </span>          <span class="nl">transform</span><span class="p">:</span> <span class="nf">translate</span><span class="p">(</span><span class="o">@</span><span class="n">x</span><span class="o">,</span> <span class="o">@</span><span class="n">y</span><span class="p">);</span>
                                <span class="p">}</span>
                            <span class="nc">.skew</span><span class="o">(@</span><span class="nt">x</span><span class="p">;</span> <span class="k">@y</span><span class="o">)</span> <span class="p">{</span>
                                <span class="na">-webkit-transform</span><span class="p">:</span> <span class="nf">skew</span><span class="p">(</span><span class="o">@</span><span class="n">x</span><span class="o">,</span> <span class="o">@</span><span class="n">y</span><span class="p">);</span>
                                <span class="na">-ms-transform</span><span class="p">:</span> <span class="nf">skewX</span><span class="p">(</span><span class="o">@</span><span class="n">x</span><span class="p">)</span> <span class="nf">skewY</span><span class="p">(</span><span class="o">@</span><span class="n">y</span><span class="p">);</span> <span class="c1">// See https://github.com/twbs/bootstrap/issues/4885; IE9+
                                </span>          <span class="nl">transform</span><span class="p">:</span> <span class="nf">skew</span><span class="p">(</span><span class="o">@</span><span class="n">x</span><span class="o">,</span> <span class="o">@</span><span class="n">y</span><span class="p">);</span>
                                <span class="p">}</span>
                            <span class="nc">.translate3d</span><span class="o">(@</span><span class="nt">x</span><span class="p">;</span> <span class="k">@y</span><span class="p">;</span> <span class="k">@z</span><span class="o">)</span> <span class="p">{</span>
                                <span class="na">-webkit-transform</span><span class="p">:</span> <span class="nf">translate3d</span><span class="p">(</span><span class="o">@</span><span class="n">x</span><span class="o">,</span> <span class="o">@</span><span class="n">y</span><span class="o">,</span> <span class="o">@</span><span class="n">z</span><span class="p">);</span>
                                <span class="nl">transform</span><span class="p">:</span> <span class="nf">translate3d</span><span class="p">(</span><span class="o">@</span><span class="n">x</span><span class="o">,</span> <span class="o">@</span><span class="n">y</span><span class="o">,</span> <span class="o">@</span><span class="n">z</span><span class="p">);</span>
                                <span class="p">}</span>

                            <span class="nc">.rotateX</span><span class="o">(@</span><span class="nt">degrees</span><span class="o">)</span> <span class="p">{</span>
                                <span class="na">-webkit-transform</span><span class="p">:</span> <span class="nf">rotateX</span><span class="p">(</span><span class="o">@</span><span class="n">degrees</span><span class="p">);</span>
                                <span class="na">-ms-transform</span><span class="p">:</span> <span class="nf">rotateX</span><span class="p">(</span><span class="o">@</span><span class="n">degrees</span><span class="p">);</span> <span class="c1">// IE9 only
                                </span>          <span class="nl">transform</span><span class="p">:</span> <span class="nf">rotateX</span><span class="p">(</span><span class="o">@</span><span class="n">degrees</span><span class="p">);</span>
                                <span class="p">}</span>
                            <span class="nc">.rotateY</span><span class="o">(@</span><span class="nt">degrees</span><span class="o">)</span> <span class="p">{</span>
                                <span class="na">-webkit-transform</span><span class="p">:</span> <span class="nf">rotateY</span><span class="p">(</span><span class="o">@</span><span class="n">degrees</span><span class="p">);</span>
                                <span class="na">-ms-transform</span><span class="p">:</span> <span class="nf">rotateY</span><span class="p">(</span><span class="o">@</span><span class="n">degrees</span><span class="p">);</span> <span class="c1">// IE9 only
                                </span>          <span class="nl">transform</span><span class="p">:</span> <span class="nf">rotateY</span><span class="p">(</span><span class="o">@</span><span class="n">degrees</span><span class="p">);</span>
                                <span class="p">}</span>
                            <span class="nc">.perspective</span><span class="o">(@</span><span class="nt">perspective</span><span class="o">)</span> <span class="p">{</span>
                                <span class="na">-webkit-perspective</span><span class="p">:</span> <span class="o">@</span><span class="n">perspective</span><span class="p">;</span>
                                <span class="na">-moz-perspective</span><span class="p">:</span> <span class="o">@</span><span class="n">perspective</span><span class="p">;</span>
                                <span class="nl">perspective</span><span class="p">:</span> <span class="o">@</span><span class="n">perspective</span><span class="p">;</span>
                                <span class="p">}</span>
                            <span class="nc">.perspective-origin</span><span class="o">(@</span><span class="nt">perspective</span><span class="o">)</span> <span class="p">{</span>
                                <span class="na">-webkit-perspective-origin</span><span class="p">:</span> <span class="o">@</span><span class="n">perspective</span><span class="p">;</span>
                                <span class="na">-moz-perspective-origin</span><span class="p">:</span> <span class="o">@</span><span class="n">perspective</span><span class="p">;</span>
                                <span class="nl">perspective-origin</span><span class="p">:</span> <span class="o">@</span><span class="n">perspective</span><span class="p">;</span>
                                <span class="p">}</span>
                            <span class="nc">.transform-origin</span><span class="o">(@</span><span class="nt">origin</span><span class="o">)</span> <span class="p">{</span>
                                <span class="na">-webkit-transform-origin</span><span class="p">:</span> <span class="o">@</span><span class="n">origin</span><span class="p">;</span>
                                <span class="na">-moz-transform-origin</span><span class="p">:</span> <span class="o">@</span><span class="n">origin</span><span class="p">;</span>
                                <span class="na">-ms-transform-origin</span><span class="p">:</span> <span class="o">@</span><span class="n">origin</span><span class="p">;</span> <span class="c1">// IE9 only
                                </span>          <span class="nl">transform-origin</span><span class="p">:</span> <span class="o">@</span><span class="n">origin</span><span class="p">;</span>
                                <span class="p">}</span></code></pre></div>

                <h3 id="less-mixins-animations"><a data-anchorjs-icon="" aria-label="Anchor link for: less mixins animations" href="#less-mixins-animations" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>动画</h3>
                <p>仅适用一个 mixin 就可以在一个声明中使用所有 CSS3 所提供的动画属性，其他 mixin 用于设置单个属性。</p>
                <p>T此 mixin 从 v3.2.0 版本开始就 <strong>不建议使用</strong> 了，取而代之的是使用 Autoprefixer。为了保持向后兼容，在 v4 版本之前，Bootstrap 将在内部继续使用这些 mixin。</p>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="scss" class="language-scss"><span class="nc">.animation</span><span class="o">(@</span><span class="nt">animation</span><span class="o">)</span> <span class="p">{</span>
                                <span class="na">-webkit-animation</span><span class="p">:</span> <span class="o">@</span><span class="n">animation</span><span class="p">;</span>
                                <span class="nl">animation</span><span class="p">:</span> <span class="o">@</span><span class="n">animation</span><span class="p">;</span>
                                <span class="p">}</span>
                            <span class="nc">.animation-name</span><span class="o">(@</span><span class="nt">name</span><span class="o">)</span> <span class="p">{</span>
                                <span class="na">-webkit-animation-name</span><span class="p">:</span> <span class="o">@</span><span class="n">name</span><span class="p">;</span>
                                <span class="nl">animation-name</span><span class="p">:</span> <span class="o">@</span><span class="n">name</span><span class="p">;</span>
                                <span class="p">}</span>
                            <span class="nc">.animation-duration</span><span class="o">(@</span><span class="nt">duration</span><span class="o">)</span> <span class="p">{</span>
                                <span class="na">-webkit-animation-duration</span><span class="p">:</span> <span class="o">@</span><span class="n">duration</span><span class="p">;</span>
                                <span class="nl">animation-duration</span><span class="p">:</span> <span class="o">@</span><span class="n">duration</span><span class="p">;</span>
                                <span class="p">}</span>
                            <span class="nc">.animation-timing-function</span><span class="o">(@</span><span class="nt">timing-function</span><span class="o">)</span> <span class="p">{</span>
                                <span class="na">-webkit-animation-timing-function</span><span class="p">:</span> <span class="o">@</span><span class="n">timing-function</span><span class="p">;</span>
                                <span class="nl">animation-timing-function</span><span class="p">:</span> <span class="o">@</span><span class="n">timing-function</span><span class="p">;</span>
                                <span class="p">}</span>
                            <span class="nc">.animation-delay</span><span class="o">(@</span><span class="nt">delay</span><span class="o">)</span> <span class="p">{</span>
                                <span class="na">-webkit-animation-delay</span><span class="p">:</span> <span class="o">@</span><span class="n">delay</span><span class="p">;</span>
                                <span class="nl">animation-delay</span><span class="p">:</span> <span class="o">@</span><span class="n">delay</span><span class="p">;</span>
                                <span class="p">}</span>
                            <span class="nc">.animation-iteration-count</span><span class="o">(@</span><span class="nt">iteration-count</span><span class="o">)</span> <span class="p">{</span>
                                <span class="na">-webkit-animation-iteration-count</span><span class="p">:</span> <span class="o">@</span><span class="n">iteration-count</span><span class="p">;</span>
                                <span class="nl">animation-iteration-count</span><span class="p">:</span> <span class="o">@</span><span class="n">iteration-count</span><span class="p">;</span>
                                <span class="p">}</span>
                            <span class="nc">.animation-direction</span><span class="o">(@</span><span class="nt">direction</span><span class="o">)</span> <span class="p">{</span>
                                <span class="na">-webkit-animation-direction</span><span class="p">:</span> <span class="o">@</span><span class="n">direction</span><span class="p">;</span>
                                <span class="nl">animation-direction</span><span class="p">:</span> <span class="o">@</span><span class="n">direction</span><span class="p">;</span>
                                <span class="p">}</span></code></pre></div>

                <h3 id="less-mixins-opacity"><a data-anchorjs-icon="" aria-label="Anchor link for: less mixins opacity" href="#less-mixins-opacity" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>透明度</h3>
                <p>为所有浏览器设置透明度，并为IE8提供 <code>filter</code> 备用滤镜。</p>
                <div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="scss" class="language-scss"><span class="nc">.opacity</span><span class="o">(@</span><span class="nt">opacity</span><span class="o">)</span> <span class="p">{</span>
<span class="nl">opacity</span><span class="p">:</span> <span class="o">@</span><span class="n">opacity</span><span class="p">;</span>
<span class="c1">// IE8 filter
</span>  <span class="k">@opacity-ie</span><span class="nd">:</span> <span class="o">(@</span><span class="nt">opacity</span> <span class="o">*</span> <span class="nt">100</span><span class="o">)</span><span class="p">;</span>
<span class="nl">filter</span><span class="p">:</span> <span class="o">~</span><span class="s2">"alpha(opacity=@{opacity-ie})"</span><span class="p">;</span>
<span class="p">}</span></code></pre></div>

  <h3 id="less-mixins-placeholder"><a data-anchorjs-icon="" aria-label="Anchor link for: less mixins placeholder" href="#less-mixins-placeholder" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>占位符文本</h3>
  <p>为表单控件中每个文本域提供占位符（Placeholder）文本的颜色。</p>
<div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="scss" class="language-scss"><span class="err">.</span><span class="na">placeholder</span><span class="err">(@</span><span class="nl">color</span><span class="p">:</span> <span class="o">@</span><span class="n">input-color-placeholder</span><span class="p">)</span> <span class="p">{</span>
<span class="err">&amp;</span><span class="p">:</span><span class="o">:-</span><span class="n">moz-placeholder</span>           <span class="p">{</span> <span class="nl">color</span><span class="p">:</span> <span class="o">@</span><span class="n">color</span><span class="p">;</span> <span class="p">}</span> <span class="c1">// Firefox
</span>  <span class="err">&amp;</span><span class="p">:</span><span class="o">-</span><span class="n">ms-input-placeholder</span>       <span class="p">{</span> <span class="nl">color</span><span class="p">:</span> <span class="o">@</span><span class="n">color</span><span class="p">;</span> <span class="p">}</span> <span class="c1">// Internet Explorer 10+
</span>  <span class="err">&amp;</span><span class="p">:</span><span class="o">:-</span><span class="n">webkit-input-placeholder</span>  <span class="p">{</span> <span class="nl">color</span><span class="p">:</span> <span class="o">@</span><span class="n">color</span><span class="p">;</span> <span class="p">}</span> <span class="c1">// Safari and Chrome
</span><span class="p">}</span></code></pre></div>

  <h3 id="less-mixins-columns"><a data-anchorjs-icon="" aria-label="Anchor link for: less mixins columns" href="#less-mixins-columns" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>列</h3>
  <p>通过CSS在一个单独的元素中生成列。</p>
<div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="scss" class="language-scss"><span class="nc">.content-columns</span><span class="o">(@</span><span class="nt">width</span><span class="p">;</span> <span class="k">@count</span><span class="p">;</span> <span class="k">@gap</span><span class="o">)</span> <span class="p">{</span>
<span class="na">-webkit-column-width</span><span class="p">:</span> <span class="o">@</span><span class="n">width</span><span class="p">;</span>
<span class="na">-moz-column-width</span><span class="p">:</span> <span class="o">@</span><span class="n">width</span><span class="p">;</span>
<span class="nl">column-width</span><span class="p">:</span> <span class="o">@</span><span class="n">width</span><span class="p">;</span>
<span class="na">-webkit-column-count</span><span class="p">:</span> <span class="o">@</span><span class="n">count</span><span class="p">;</span>
<span class="na">-moz-column-count</span><span class="p">:</span> <span class="o">@</span><span class="n">count</span><span class="p">;</span>
<span class="nl">column-count</span><span class="p">:</span> <span class="o">@</span><span class="n">count</span><span class="p">;</span>
<span class="na">-webkit-column-gap</span><span class="p">:</span> <span class="o">@</span><span class="n">gap</span><span class="p">;</span>
<span class="na">-moz-column-gap</span><span class="p">:</span> <span class="o">@</span><span class="n">gap</span><span class="p">;</span>
<span class="nl">column-gap</span><span class="p">:</span> <span class="o">@</span><span class="n">gap</span><span class="p">;</span>
<span class="p">}</span></code></pre></div>

  <h3 id="less-mixins-gradients"><a data-anchorjs-icon="" aria-label="Anchor link for: less mixins gradients" href="#less-mixins-gradients" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>渐变</h3>
  <p>便于把任何两种颜色变成背景渐变色。想要使他更高级些，可以设置一个direction（方向），使用三种颜色，也可以使用径向（radial）渐变。使用一个mixin（混入），你就可以得到所有需要的前缀语法。</p>
<div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="scss" class="language-scss"><span class="nn">#gradient</span> <span class="o">&gt;</span> <span class="nc">.vertical</span><span class="o">(</span><span class="nn">#333</span><span class="p">;</span> <span class="nn">#000</span><span class="o">)</span><span class="p">;</span>
<span class="nn">#gradient</span> <span class="o">&gt;</span> <span class="nc">.horizontal</span><span class="o">(</span><span class="nn">#333</span><span class="p">;</span> <span class="nn">#000</span><span class="o">)</span><span class="p">;</span>
<span class="nn">#gradient</span> <span class="o">&gt;</span> <span class="nc">.radial</span><span class="o">(</span><span class="nn">#333</span><span class="p">;</span> <span class="nn">#000</span><span class="o">)</span><span class="p">;</span></code></pre></div>
  <p>你也可以为标准的里两颜色线性渐变指定角度：</p>
<div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="scss" class="language-scss"><span class="nn">#gradient</span> <span class="o">&gt;</span> <span class="nc">.directional</span><span class="o">(</span><span class="nn">#333</span><span class="p">;</span> <span class="nn">#000</span><span class="p">;</span> <span class="nt">45deg</span><span class="o">)</span><span class="p">;</span></code></pre></div>
  <p>如果你需要一个条纹风格的渐变，这也很容易。只要指定一个颜色，我们将该颜色半透明的条纹覆盖其上。</p>
<div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="scss" class="language-scss"><span class="nn">#gradient</span> <span class="o">&gt;</span> <span class="nc">.striped</span><span class="o">(</span><span class="nn">#333</span><span class="p">;</span> <span class="nt">45deg</span><span class="o">)</span><span class="p">;</span></code></pre></div>
  <p>再来试试三种颜色。利用此 mixin ，并为其设置第一种颜色、第二种颜色、第二种颜色的色标（例如 25%），还有第三种颜色：</p>
<div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="scss" class="language-scss"><span class="nn">#gradient</span> <span class="o">&gt;</span> <span class="nc">.vertical-three-colors</span><span class="o">(</span><span class="nn">#777</span><span class="p">;</span> <span class="nn">#333</span><span class="p">;</span> <span class="nt">25</span><span class="nv">%</span><span class="p">;</span> <span class="nn">#000</span><span class="o">)</span><span class="p">;</span>
<span class="nn">#gradient</span> <span class="o">&gt;</span> <span class="nc">.horizontal-three-colors</span><span class="o">(</span><span class="nn">#777</span><span class="p">;</span> <span class="nn">#333</span><span class="p">;</span> <span class="nt">25</span><span class="nv">%</span><span class="p">;</span> <span class="nn">#000</span><span class="o">)</span><span class="p">;</span></code></pre></div>
  <p><strong>当心！</strong> 如果你想删除某个渐变，确保将你所添加的针对 IE 的 <code>filter</code> 一并删除。你可以通过使用 <code>.reset-filter()</code> mixin 和 <code>background-image: none;</code> 达到目的。</p>


  <h2 id="less-mixins-utility"><a data-anchorjs-icon="" aria-label="Anchor link for: less mixins utility" href="#less-mixins-utility" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>实用工具 mixin</h2>
  <p>实用工具 mixin 用于与不相关的 CSS 结合以达到特定目的或任务。</p>

  <h3 id="less-mixins-clearfix"><a data-anchorjs-icon="" aria-label="Anchor link for: less mixins clearfix" href="#less-mixins-clearfix" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Clearfix -- 清除浮动</h3>
  <p>建议为需要清除浮动的元素使用 <code>.clearfix()</code> mixin ，尽量不要直接添加 <code>class="clearfix"</code> 类。基于 <a target="_blank" href="https://twitter.com/necolas">Nicolas Gallagher</a> 的 <a target="_blank" href="http://nicolasgallagher.com/micro-clearfix-hack/">micro clearfix</a> 代码。</p>
<div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="scss" class="language-scss"><span class="c1">// Mixin
</span><span class="nc">.clearfix</span><span class="o">()</span> <span class="p">{</span>
<span class="k">&amp;</span><span class="nd">:before</span><span class="o">,</span>
<span class="k">&amp;</span><span class="nd">:after</span> <span class="p">{</span>
<span class="nl">content</span><span class="p">:</span> <span class="s2">" "</span><span class="p">;</span>
<span class="nl">display</span><span class="p">:</span> <span class="n">table</span><span class="p">;</span>
<span class="p">}</span>
<span class="k">&amp;</span><span class="nd">:after</span> <span class="p">{</span>
<span class="nl">clear</span><span class="p">:</span> <span class="nb">both</span><span class="p">;</span>
<span class="p">}</span>
<span class="p">}</span>

<span class="c1">// Usage
</span><span class="nc">.container</span> <span class="p">{</span>
<span class="nc">.clearfix</span><span class="o">()</span><span class="p">;</span>
<span class="p">}</span></code></pre></div>

  <h3 id="less-mixins-centering"><a data-anchorjs-icon="" aria-label="Anchor link for: less mixins centering" href="#less-mixins-centering" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>水平居中</h3>
  <p>让元素在其父元素中水平居中。<strong>需要设置 <code>width</code> 或 <code>max-width</code> 属性。</strong></p>
<div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="scss" class="language-scss"><span class="c1">// Mixin
</span><span class="nc">.center-block</span><span class="o">()</span> <span class="p">{</span>
<span class="nl">display</span><span class="p">:</span> <span class="nb">block</span><span class="p">;</span>
<span class="nl">margin-left</span><span class="p">:</span> <span class="nb">auto</span><span class="p">;</span>
<span class="nl">margin-right</span><span class="p">:</span> <span class="nb">auto</span><span class="p">;</span>
<span class="p">}</span>

<span class="c1">// Usage
</span><span class="nc">.container</span> <span class="p">{</span>
<span class="nl">width</span><span class="p">:</span> <span class="m">940px</span><span class="p">;</span>
<span class="nc">.center-block</span><span class="o">()</span><span class="p">;</span>
<span class="p">}</span></code></pre></div>

  <h3 id="less-mixins-sizing"><a data-anchorjs-icon="" aria-label="Anchor link for: less mixins sizing" href="#less-mixins-sizing" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>尺寸助手 mixin</h3>
  <p>用于方便的指定对象的尺寸。</p>
<div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="scss" class="language-scss"><span class="c1">// Mixins
</span><span class="nc">.size</span><span class="o">(@</span><span class="nt">width</span><span class="p">;</span> <span class="k">@height</span><span class="o">)</span> <span class="p">{</span>
<span class="nl">width</span><span class="p">:</span> <span class="o">@</span><span class="n">width</span><span class="p">;</span>
<span class="nl">height</span><span class="p">:</span> <span class="o">@</span><span class="n">height</span><span class="p">;</span>
<span class="p">}</span>
<span class="nc">.square</span><span class="o">(@</span><span class="nt">size</span><span class="o">)</span> <span class="p">{</span>
<span class="nc">.size</span><span class="o">(@</span><span class="nt">size</span><span class="p">;</span> <span class="k">@size</span><span class="o">)</span><span class="p">;</span>
<span class="p">}</span>

<span class="c1">// Usage
</span><span class="nc">.image</span> <span class="p">{</span> <span class="nc">.size</span><span class="o">(</span><span class="nt">400px</span><span class="p">;</span> <span class="nt">300px</span><span class="o">)</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.avatar</span> <span class="p">{</span> <span class="nc">.square</span><span class="o">(</span><span class="nt">48px</span><span class="o">)</span><span class="p">;</span> <span class="p">}</span></code></pre></div>

  <h3 id="less-mixins-resizable"><a data-anchorjs-icon="" aria-label="Anchor link for: less mixins resizable" href="#less-mixins-resizable" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>可调整大小的文本域</h3>
  <p>方便设置任何文本域或其他元素的尺寸可调整。默认依循浏览器默认行为 (<code>both</code>)，即垂直、水平都可以调整。</p>
<div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="scss" class="language-scss"><span class="err">.</span><span class="na">resizable</span><span class="err">(@</span><span class="nl">direction</span><span class="p">:</span> <span class="nb">both</span><span class="p">)</span> <span class="p">{</span>
<span class="c1">// Options: horizontal, vertical, both
</span>  <span class="nl">resize</span><span class="p">:</span> <span class="o">@</span><span class="n">direction</span><span class="p">;</span>
<span class="c1">// Safari fix
</span>  <span class="nl">overflow</span><span class="p">:</span> <span class="nb">auto</span><span class="p">;</span>
<span class="p">}</span></code></pre></div>

  <h3 id="less-mixins-truncating"><a data-anchorjs-icon="" aria-label="Anchor link for: less mixins truncating" href="#less-mixins-truncating" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>截断文本</h3>
  <p>此 mixin 用来以省略号代替被截断的文本。<strong>元素必须是 <code>block</code> 或 <code>inline-block</code> 级。</strong></p>
<div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="scss" class="language-scss"><span class="c1">// Mixin
</span><span class="nc">.text-overflow</span><span class="o">()</span> <span class="p">{</span>
<span class="nl">overflow</span><span class="p">:</span> <span class="nb">hidden</span><span class="p">;</span>
<span class="nl">text-overflow</span><span class="p">:</span> <span class="n">ellipsis</span><span class="p">;</span>
<span class="nl">white-space</span><span class="p">:</span> <span class="nb">nowrap</span><span class="p">;</span>
<span class="p">}</span>

<span class="c1">// Usage
</span><span class="nc">.branch-name</span> <span class="p">{</span>
<span class="nl">display</span><span class="p">:</span> <span class="n">inline-block</span><span class="p">;</span>
<span class="nl">max-width</span><span class="p">:</span> <span class="m">200px</span><span class="p">;</span>
<span class="nc">.text-overflow</span><span class="o">()</span><span class="p">;</span>
<span class="p">}</span></code></pre></div>

  <h3 id="less-mixins-retina-images"><a data-anchorjs-icon="" aria-label="Anchor link for: less mixins retina images" href="#less-mixins-retina-images" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>视网膜屏幕（Retina）下的图片</h3>
  <p>通过指定两个图片路径和 @1x 图片尺寸，Bootstrap 还提供了对 @2x 媒体查询的支持。 <strong>如果你的页面上有很多图片，建议在一个单独的媒体查询中手工编写针对视网膜屏幕的 CSS 代码。</strong></p>
<div class="zero-clipboard"><span class="btn-clipboard">复制</span></div><div class="highlight"><pre><code data-lang="scss" class="language-scss"><span class="nc">.img-retina</span><span class="o">(@</span><span class="nt">file-1x</span><span class="p">;</span> <span class="k">@file-2x</span><span class="p">;</span> <span class="k">@width-1x</span><span class="p">;</span> <span class="k">@height-1x</span><span class="o">)</span> <span class="p">{</span>
<span class="nl">background-image</span><span class="p">:</span> <span class="sx">url("@{file-1x}")</span><span class="p">;</span>

  <span class="k">@media</span>
  <span class="nt">only</span> <span class="nt">screen</span> <span class="nt">and</span> <span class="o">(</span><span class="nt">-webkit-min-device-pixel-ratio</span><span class="nd">:</span> <span class="nt">2</span><span class="o">),</span>
  <span class="nt">only</span> <span class="nt">screen</span> <span class="nt">and</span> <span class="o">(</span>   <span class="nt">min--moz-device-pixel-ratio</span><span class="nd">:</span> <span class="nt">2</span><span class="o">),</span>
  <span class="nt">only</span> <span class="nt">screen</span> <span class="nt">and</span> <span class="o">(</span>     <span class="nt">-o-min-device-pixel-ratio</span><span class="nd">:</span> <span class="nt">2</span><span class="o">/</span><span class="nt">1</span><span class="o">),</span>
  <span class="nt">only</span> <span class="nt">screen</span> <span class="nt">and</span> <span class="o">(</span>        <span class="nt">min-device-pixel-ratio</span><span class="nd">:</span> <span class="nt">2</span><span class="o">),</span>
  <span class="nt">only</span> <span class="nt">screen</span> <span class="nt">and</span> <span class="o">(</span>                <span class="nt">min-resolution</span><span class="nd">:</span> <span class="nt">192dpi</span><span class="o">),</span>
  <span class="nt">only</span> <span class="nt">screen</span> <span class="nt">and</span> <span class="o">(</span>                <span class="nt">min-resolution</span><span class="nd">:</span> <span class="nt">2dppx</span><span class="o">)</span> <span class="p">{</span>
<span class="nl">background-image</span><span class="p">:</span> <span class="sx">url("@{file-2x}")</span><span class="p">;</span>
<span class="nl">background-size</span><span class="p">:</span> <span class="o">@</span><span class="n">width-1x</span> <span class="o">@</span><span class="n">height-1x</span><span class="p">;</span>
<span class="p">}</span>
<span class="p">}</span>

<span class="c1">// Usage
</span><span class="nc">.jumbotron</span> <span class="p">{</span>
<span class="nc">.img-retina</span><span class="o">(</span><span class="s2">"/img/bg-1x.png"</span><span class="o">,</span> <span class="s2">"/img/bg-2x.png"</span><span class="o">,</span> <span class="nt">100px</span><span class="o">,</span> <span class="nt">100px</span><span class="o">)</span><span class="p">;</span>
<span class="p">}</span></code></pre></div>
</div>

<div class="bs-docs-section">
  <h1 class="page-header" id="sass"><a data-anchorjs-icon="" aria-label="Anchor link for: sass" href="#sass" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>使用 Sass</h1>
  <p class="lead">虽然 Bootstrap 是基于 Less 构建的，我们还提供了一套<a href="https://github.com/twbs/bootstrap-sass">官方支持的 Sass 移植版</a>代码。我们将这个版本放在单独的 GitHub 仓库中进行维护，并通过脚本处理源码更新。</p>

  <h2 id="sass-contents"><a data-anchorjs-icon="" aria-label="Anchor link for: sass contents" href="#sass-contents" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>包含的内容</h2>
  <p>由于 Sass 移植版存放于单独的仓库，并针对不同的使用群体，这个项目中的内容与 Bootstrap 主项目有很大不同。这也是为了保证 Sass 移植版与更多基于 Sass 的系统相兼容。</p>

  <div class="table-responsive">
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>路径</th>
          <th>描述</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row"><code>lib/</code></th>
          <td>Ruby gem code (Sass configuration, Rails and Compass integrations)</td>
        </tr>
        <tr>
          <th scope="row"><code>tasks/</code></th>
          <td>Converter scripts (turning upstream Less to Sass)</td>
        </tr>
        <tr>
          <th scope="row"><code>test/</code></th>
          <td>Compilation tests</td>
        </tr>
        <tr>
          <th scope="row"><code>templates/</code></th>
          <td>Compass package manifest</td>
        </tr>
        <tr>
          <th scope="row"><code>vendor/assets/</code></th>
          <td>Sass, JavaScript, and font files</td>
        </tr>
        <tr>
          <th scope="row"><code>Rakefile</code></th>
          <td>Internal tasks, such as rake and convert</td>
        </tr>
      </tbody>
    </table>
  </div>
  <p>请访问 <a href="https://github.com/twbs/bootstrap-sass">Sass 移植版在 GitHub 上的仓库</a> 来了解这些文件。</p>


  <h2 id="sass-installation"><a data-anchorjs-icon="" aria-label="Anchor link for: sass installation" href="#sass-installation" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>安装</h2>
  <p>关于如何安装并使用 Bootstrap 的 Sass 移植版，请参考<a href="https://github.com/twbs/bootstrap-sass">GitHub 仓库中的 readme 文件</a>。 此仓库中包含了最新的源码以及如何与 Rails、Compass 以及标准 Sass 项目一同使用的详细信息。</p>
  <p>
    <a href="https://github.com/twbs/bootstrap-sass" class="btn btn-lg btn-outline">Bootstrap for Sass</a>
  </p>
</div>


        </div>
        
        <div role="complementary" class="col-md-3">
          <nav class="bs-docs-sidebar hidden-print hidden-xs hidden-sm affix">
            <ul class="nav bs-docs-sidenav">
              
                <li>
  <a href="#overview">概览</a>
  <ul class="nav">
    <li><a href="#overview-doctype">HTML5 文档类型</a></li>
    <li><a href="#overview-mobile">移动设备优先</a></li>
    <li><a href="#overview-type-links">排版与链接</a></li>
    <li><a href="#overview-normalize">Normalize.css</a></li>
    <li><a href="#overview-container">布局容器</a></li>
  </ul>
</li>
<li>
  <a href="#grid">栅格系统</a>
  <ul class="nav">
    <li><a href="#grid-intro">简介</a></li>
    <li><a href="#grid-media-queries">媒体查询</a></li>
    <li><a href="#grid-options">栅格参数</a></li>
    <li><a href="#grid-example-basic">实例：从堆叠到水平排列</a></li>
    <li><a href="#grid-example-fluid">实例：流式布局容器</a></li>
    <li><a href="#grid-example-mixed">实例：移动设备和桌面屏幕</a></li>
    <li><a href="#grid-example-mixed-complete">实例：手机、平板、桌面</a></li>
    <li><a href="#grid-example-wrapping">实例：多余的列（column）将另起一行排列</a></li>
    <li><a href="#grid-responsive-resets">Responsive column resets</a></li>
    <li><a href="#grid-offsetting">列偏移</a></li>
    <li><a href="#grid-nesting">嵌套列</a></li>
    <li><a href="#grid-column-ordering">列排序</a></li>
    <li><a href="#grid-less">Less mixin 和变量</a></li>
  </ul>
</li>
<li>
  <a href="#type">排版</a>
  <ul class="nav">
    <li><a href="#type-headings">标题</a></li>
    <li><a href="#type-body-copy">页面主体</a></li>
    <li><a href="#type-inline-text">内联文本元素</a></li>
    <li><a href="#type-alignment">对齐</a></li>
    <li><a href="#type-transformation">改变大小写</a></li>
    <li><a href="#type-abbreviations">缩略语</a></li>
    <li><a href="#type-addresses">地址</a></li>
    <li><a href="#type-blockquotes">引用</a></li>
    <li><a href="#type-lists">列表</a></li>
  </ul>
</li>
<li>
  <a href="#code">代码</a>
  <ul class="nav">
    <li><a href="#code-inline">内联代码</a></li>
    <li><a href="#code-user-input">用户输入</a></li>
    <li><a href="#code-block">基本代码块</a></li>
    <li><a href="#code-variables">变量</a></li>
    <li><a href="#code-sample-output">程序输出</a></li>
  </ul>
</li>
<li>
  <a href="#tables">表格</a>
  <ul class="nav">
    <li><a href="#tables-example">基本实例</a></li>
    <li><a href="#tables-striped">条纹状表格</a></li>
    <li><a href="#tables-bordered">带边框的表格</a></li>
    <li><a href="#tables-hover-rows">鼠标悬停</a></li>
    <li><a href="#tables-condensed">紧缩表格</a></li>
    <li><a href="#tables-contextual-classes">状态类</a></li>
    <li><a href="#tables-responsive">响应式表格</a></li>
  </ul>
</li>
<li class="active">
  <a href="#forms">表单</a>
  <ul class="nav">
    <li><a href="#forms-example">基本实例</a></li>
    <li class="active"><a href="#forms-inline">内联表单</a></li>
    <li><a href="#forms-horizontal">水平排列的表单</a></li>
    <li><a href="#forms-controls">被支持的控件</a></li>
    <li><a href="#forms-controls-static">静态控件</a></li>
    <li><a href="#forms-control-focus">焦点状态</a></li>
    <li><a href="#forms-control-disabled">禁用状态</a></li>
    <li><a href="#forms-control-readonly">只读状态</a></li>
    <li><a href="#forms-control-validation">校验状态</a></li>
    <li><a href="#forms-control-sizes">控件尺寸</a></li>
    <li><a href="#forms-help-text">辅助文本</a></li>
  </ul>
</li>
<li>
  <a href="#buttons">按钮</a>
  <ul class="nav">
    <li><a href="#buttons-tags">可作为按钮使用的标签或元素</a></li>
    <li><a href="#buttons-options">预定义样式</a></li>
    <li><a href="#buttons-sizes">尺寸</a></li>
    <li><a href="#buttons-active">激活状态</a></li>
    <li><a href="#buttons-disabled">禁用状态</a></li>
  </ul>
</li>
<li>
  <a href="#images">图片</a>
  <ul class="nav">
    <li><a href="#images-responsive">响应式图片</a></li>
    <li><a href="#images-shapes">图片形状</a></li>
  </ul>
</li>
<li>
  <a href="#helper-classes">辅助类</a>
  <ul class="nav">
    <li><a href="#helper-classes-colors">情境文本颜色</a></li>
    <li><a href="#helper-classes-backgrounds">情境背景色</a></li>
    <li><a href="#helper-classes-close">关闭按钮</a></li>
    <li><a href="#helper-classes-carets">三角符号</a></li>
    <li><a href="#helper-classes-floats">快速浮动</a></li>
    <li><a href="#helper-classes-center">让内容块居中</a></li>
    <li><a href="#helper-classes-clearfix">清除浮动</a></li>
    <li><a href="#helper-classes-show-hide">显示或隐藏内容</a></li>
    <li><a href="#helper-classes-screen-readers">屏幕阅读器和键盘导航</a></li>
    <li><a href="#helper-classes-image-replacement">图片替换</a></li>
  </ul>
</li>
<li>
  <a href="#responsive-utilities">响应式工具</a>
  <ul class="nav">
    <li><a href="#responsive-utilities-classes">可用的类</a></li>
    <li><a href="#responsive-utilities-print">打印类</a></li>
    <li><a href="#responsive-utilities-tests">测试用例</a></li>
  </ul>
</li>
<li>
  <a href="#less">使用 Less</a>
  <ul class="nav">
    <li><a href="#less-bootstrap">编译 Bootstrap</a></li>
    <li><a href="#less-variables">变量</a></li>
    <li><a href="#less-mixins-vendor">针对特定厂商的 mixin</a></li>
    <li><a href="#less-mixins-utility">工具 mixin</a></li>
  </ul>
</li>
<li>
  <a href="#sass">使用 Sass</a>
  <ul class="nav">
    <li><a href="#sass-contents">包含的内容</a></li>
    <li><a href="#sass-installation">安装</a></li>
  </ul>
</li>

              
            </ul>
            <a href="#top" class="back-to-top">
              返回顶部
            </a>
            
            <a role="button" class="bs-docs-theme-toggle" href="#">
              主题预览
            </a>
            
          </nav>
        </div>
        
      </div>
    </div>

</body>
</html>