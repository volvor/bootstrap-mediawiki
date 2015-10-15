<div class="wrapper">
    <div class="content-wrapper">
        <script>
            if(localStorage.getItem('view') == 'notfirst'){
                $('.content-wrapper').addClass('hide').remove();
            }else{
                $('.wrapper').addClass('first-view');
            }
        </script>
        <header>
            <img src="/resources/frontpage/huiji_white.png" class="logo">
            <div class="login">
                <div><a href="#home-content-signup">注册用户</a></div>
                <div><a href="http://www.huiji.wiki/wiki/%E5%88%9B%E5%BB%BA%E6%96%B0wiki">创建站点</a></div>
            </div>
        </header>
        <div class="head">
        <script>
            var pagetop = ($('body').height()-150);
                if(pagetop<550){
                    pagetop = 550;
                }
            $(".head").css('height',pagetop+"px");
        </script>
            <div class="intro-container">
                <div class="intro">
                    <p><span>你的兴趣 在此起飞</span><span>有多热爱 就飞多高</span></p>
                    <span class="page-front-enter"></span>
                </div>
            </div>
        </div>
        <div class="page-front-content">
        <div class="head-content">
        </div>
        <div class="firstbg perspectivebg lazy" data-original="/resources/frontpage/lotr.jpg">
            <a href="http://lotr.huiji.wiki" target="_black"><div class="firstbg-intro"></div></a>
        </div>
        <div class="fmain-content">
            <ul class="fmain-content-list">
                <li>
                    <img src="/resources/frontpage/iconsearch.png">
                    <h2>邂逅</h2>
                    <p>频率相同的“机”友</p>
                </li>
                <li>
                    <img src="/resources/frontpage/iconwrite.png">
                    <h2>构建</h2>
                    <p>你的专属兴趣世界</p>
                </li>
                <li>
                    <img src="/resources/frontpage/iconidea.png">
                    <h2>发现</h2>
                    <p>不受束缚的热情创造</p>
                </li>
            </ul>
        </div>
        <div class="secondbg perspectivebg lazy" data-original="/resources/frontpage/asoiaf.jpg">
            <a href="http://asoiaf.huiji.wiki" target="_black"><div class="secondbg-intro"></div></a>
        </div>
        <div class="smain-content">

        </div>
        <div class="thirdbg perspectivebg lazy" data-original="/resources/frontpage/spn.jpg">
            <a href="http://spn.huiji.wiki" target="_black"><div class="thirdbg-intro"></div></a>
        </div>
        <div class="content-bottom">
            <div class="bottom-wrapper">
                <div class="bottom-intro">
                    <h2>灰机wiki</h2>
                    <p>——你的兴趣，在这里起飞。</p>
                </div>
                <div class="bottom-login">
                    <form id="home-content-signup">
                        <input type="text" placeholder="昵称" class="sign-username">
                        <input type="text" placeholder="邮箱" class="sign-email">
                        <input type="password" placeholder="密码" class="sign-pass">
                        <!--<input type="password" placeholder="再次输入密码" class="sign-pass-agin">-->
                        <!--<div class="login-error"></div>-->
                        <div class="signup-submit">注册灰机</div>
                    </form>
                </div>
            </div>
            <a class="scroll"></a>
        </div>
        </div>
    </div>
    <div class="wiki-wrapper">
    <script>
        if(localStorage.getItem('static') == 'back'){
            $('.wiki-wrapper').addClass('back');
        }
    </script>
    <?php include 'View/Sidebar.php'; ?>
    <?php
        echo $this->showHeader();
    ?>
<<<<<<< HEAD
    <article class="home-main">
        <div class="home-info-wrapper">
            <div class="home-info">
                <div class="info-header">
                    <div class="info-intro">
                        <p><strong>灰机wiki</strong>是一个自由、开放的免费维基平台，基于最新版本的MediaWiki构建，并进行了多方面的优化设计。</p>
                        <p>您可以在这里创建维基站点，与同道好友一起建设你所擅长领域的最全资料站！</p>
                    </div>
                    <blockquote>
                        <p>Omnium rerum principia parva sunt</p>
                                            <p class="quote-author">————Cicero</p>
                    </blockquote>
                </div>
                <nav class="info-tabs">
                    <ul class="" role="tablist">
                        <li role="presentation" class="active"><a href="/wiki/Special:UserActivity?filter=FOLLOWING_SITES" aria-controls="following_sites" role="tab">我关注的站点</a></li>
                        <li role="presentation"><a href="/wiki/Special:UserActivity?filter=FOLLOWING" aria-controls="following" role="tab">我关注的用户</a></li>
                        <li role="presentation"><a href="/wiki/Special:UserActivity?filter=USER" aria-controls="user" role="tab">我自己</a></li>
                        <li role="presentation"><a href="/wiki/Special:UserActivity?filter=ALL" aria-controls="all" role="tab">精彩推荐</a></li>
                    </ul>
                </nav>
                <div class="info-user-list">
                    <h5>您还没有关注的用户或站点，也许你会对下面的内容感兴趣。</h5>
                    <ul>
                        <li>
                            <img src="/uploads/avatars/my_wiki_15_l.png?r=1441075020" alt="avatar" border="0" class="headimg" data-name="Volvo">
                            <div>
                                <b><a>Volvo</a></b>
                                <span>+关注</span>
                            </div>
                        </li>
                        <li>
                            <img src="/uploads/avatars/my_wiki_15_l.png?r=1441075020" alt="avatar" border="0" class="headimg" data-name="Volvo">
                            <div>
                                <b><a>Volvo</a></b>
                                <span>+关注</span>
                            </div>
                        </li>
                        <li>
                            <img src="/uploads/avatars/my_wiki_15_l.png?r=1441075020" alt="avatar" border="0" class="headimg" data-name="Volvo">
                            <div>
                                <b><a>Volvo</a></b>
                                <span>+关注</span>
                            </div>
                        </li>
                        <li>
                            <img src="/uploads/avatars/my_wiki_15_l.png?r=1441075020" alt="avatar" border="0" class="headimg" data-name="Volvo">
                            <div>
                                <b><a>Volvo</a></b>
                                <span>+关注</span>
                            </div>
                        </li>
                        <li>
                            <img src="/uploads/avatars/my_wiki_15_l.png?r=1441075020" alt="avatar" border="0" class="headimg" data-name="Volvo">
                            <div>
                                <b><a>Volvo</a></b>
                                <span>+关注</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="user-home-feed" data-filter="FOLLOWING" data-limit="30" data-item_type="default">
                    <div class="user-home-activity">
                        <div class="user-home-item-owner-avatar">
                            <img src="/uploads/avatars/my_wiki_15_l.png?r=1441075020" alt="avatar" border="0" class="headimg" data-name="Volvo">
                        </div>
                        <div class="user-home-item-body">
                            <div class="user-home-item-owner-username">
                                 <b><a href="http://lol.huiji.wiki/wiki/%E7%94%A8%E6%88%B7:Volvo" title="Volvo">Volvo</a></b>
                            </div>
                            <div class="user-home-item-timestamp">
                                <p class="time-ago"><strong class="numb"> 13天前 </strong></p>
                            </div>
                            <div class="user-home-item-description">
                                 <b><a href="http://lol.huiji.wiki/wiki/%E7%94%A8%E6%88%B7:Volvo" title="Volvo">Volvo</a></b>吐槽了<a href="http://mcu.huiji.wiki/">漫威电影宇宙资料站</a>的页面 <a href="http://mcu.huiji.wiki/wiki/%E9%92%A2%E9%93%81%E4%BE%A0(%E7%94%B5%E5%BD%B1)">钢铁侠(电影)</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <aside class="home-aside">
            <div class="aside-top">
                <img src="/resources/feed/huijilargelogo.png">
            </div>
            <div class="aside-bottom">
                <ul class="home-statistics clear">
                    <li><b>8,125</b><span>文件上传</span></li>
                    <li><b>28,125</b><span>维基站点</span></li>
                    <li><b>8,125</b><span>注册用户</span></li>
                    <li></li>
                    <li><b>348,125</b><span>编辑次数</span></li>
                    <li><b>328,125</b><span>内容页面</span></li>
                </ul>
                <ul class="wiki-href">
                    <li><i class="icon-book-open"></i><a>编辑手册</a></li>
                    <li><i class="icon-plane"></i><a>灰机停机坪</a></li>
                    <li><i class="icon-envolope"></i><a>support@huiji.wiki</a></li>
                </ul>
                <div class="user-info row">
                    <div class="user-avatar col-md-3">
                        <img src="http://cdn.huijiwiki.com/www/uploads/avatars/my_wiki_15_l.png?r=1442918710" alt="avatar" border="0" class="headimg" data-name="Volvo">
                    </div>
                    <div class="col-md-9">
                        <p><span class="user-name">volvo</span><span class="icon-lv18"></span></p>
                        <ul class="user-follow-msg">
                            <li><h5>编辑</h5><a href="/index.php?title=%E7%89%B9%E6%AE%8A:%E7%94%A8%E6%88%B7%E8%B4%A1%E7%8C%AE&amp;target=Volvo&amp;contribs=user" title="特殊:用户贡献">48</a></li>
                            <li></li>
                            <li><h5>关注</h5><a href="/index.php?title=%E7%89%B9%E6%AE%8A:ViewFollows&amp;user=Volvo&amp;rel_type=1" title="特殊:ViewFollows" id="user-following-count">0</a></li>
                            <li></li>
                            <li><h5>被关注</h5><a href="/index.php?title=%E7%89%B9%E6%AE%8A:ViewFollows&amp;user=Volvo&amp;rel_type=2" title="特殊:ViewFollows" id="user-follower-count">2</a></li>
                        </ul>
                        <div class="cleared"></div>
                    </div>
                    <div class="col-md-12">
                        <div class="svg-wrap">
                            <svg width="721" height="110" class=" ">
                                <g transform="translate(20, 20)">
                                    <g transform="translate(0, 0)"><rect class="day" width="11" height="11" y="13" fill="#eee" data-count="0" data-date="2014-09-29" title="" data-original-title="2014-09-29 编辑0次"></rect><rect class="day" width="11" height="11" y="26" fill="#eee" data-count="0" data-date="2014-09-30" title="" data-original-title="2014-09-30 编辑0次"></rect><rect class="day" width="11" height="11" y="39" fill="#eee" data-count="0" data-date="2014-10-01" title="" data-original-title="2014-10-01 编辑0次"></rect><rect class="day" width="11" height="11" y="52" fill="#eee" data-count="0" data-date="2014-10-02" title="" data-original-title="2014-10-02 编辑0次"></rect><rect class="day" width="11" height="11" y="65" fill="#eee" data-count="0" data-date="2014-10-03" title="" data-original-title="2014-10-03 编辑0次"></rect><rect class="day" width="11" height="11" y="78" fill="#eee" data-count="0" data-date="2014-10-04" title="" data-original-title="2014-10-04 编辑0次"></rect></g>
                                    <g transform="translate(13, 0)"><rect class="day" width="11" height="11" y="0" fill="#eee" data-count="0" data-date="2014-10-05" title="" data-original-title="2014-10-05 编辑0次"></rect><rect class="day" width="11" height="11" y="13" fill="#eee" data-count="0" data-date="2014-10-06" title="" data-original-title="2014-10-06 编辑0次"></rect><rect class="day" width="11" height="11" y="26" fill="#eee" data-count="0" data-date="2014-10-07" title="" data-original-title="2014-10-07 编辑0次"></rect><rect class="day" width="11" height="11" y="39" fill="#eee" data-count="0" data-date="2014-10-08" title="" data-original-title="2014-10-08 编辑0次"></rect><rect class="day" width="11" height="11" y="52" fill="#eee" data-count="0" data-date="2014-10-09" title="" data-original-title="2014-10-09 编辑0次"></rect><rect class="day" width="11" height="11" y="65" fill="#eee" data-count="0" data-date="2014-10-10" title="" data-original-title="2014-10-10 编辑0次"></rect><rect class="day" width="11" height="11" y="78" fill="#eee" data-count="0" data-date="2014-10-11" title="" data-original-title="2014-10-11 编辑0次"></rect></g>
                                    <g transform="translate(26, 0)"><rect class="day" width="11" height="11" y="0" fill="#eee" data-count="0" data-date="2014-10-12" title="" data-original-title="2014-10-12 编辑0次"></rect><rect class="day" width="11" height="11" y="13" fill="#eee" data-count="0" data-date="2014-10-13" title="" data-original-title="2014-10-13 编辑0次"></rect><rect class="day" width="11" height="11" y="26" fill="#eee" data-count="0" data-date="2014-10-14" title="" data-original-title="2014-10-14 编辑0次"></rect><rect class="day" width="11" height="11" y="39" fill="#eee" data-count="0" data-date="2014-10-15" title="" data-original-title="2014-10-15 编辑0次"></rect><rect class="day" width="11" height="11" y="52" fill="#eee" data-count="0" data-date="2014-10-16" title="" data-original-title="2014-10-16 编辑0次"></rect><rect class="day" width="11" height="11" y="65" fill="#eee" data-count="0" data-date="2014-10-17" title="" data-original-title="2014-10-17 编辑0次"></rect><rect class="day" width="11" height="11" y="78" fill="#eee" data-count="0" data-date="2014-10-18" title="" data-original-title="2014-10-18 编辑0次"></rect></g>
                                    <g transform="translate(39, 0)"><rect class="day" width="11" height="11" y="0" fill="#eee" data-count="0" data-date="2014-10-19" title="" data-original-title="2014-10-19 编辑0次"></rect><rect class="day" width="11" height="11" y="13" fill="#eee" data-count="0" data-date="2014-10-20" title="" data-original-title="2014-10-20 编辑0次"></rect><rect class="day" width="11" height="11" y="26" fill="#eee" data-count="0" data-date="2014-10-21" title="" data-original-title="2014-10-21 编辑0次"></rect><rect class="day" width="11" height="11" y="39" fill="#eee" data-count="0" data-date="2014-10-22" title="" data-original-title="2014-10-22 编辑0次"></rect><rect class="day" width="11" height="11" y="52" fill="#eee" data-count="0" data-date="2014-10-23" title="" data-original-title="2014-10-23 编辑0次"></rect><rect class="day" width="11" height="11" y="65" fill="#eee" data-count="0" data-date="2014-10-24" title="" data-original-title="2014-10-24 编辑0次"></rect><rect class="day" width="11" height="11" y="78" fill="#eee" data-count="0" data-date="2014-10-25" title="" data-original-title="2014-10-25 编辑0次"></rect></g>
                                    <g transform="translate(52, 0)"><rect class="day" width="11" height="11" y="0" fill="#eee" data-count="0" data-date="2014-10-26" title="" data-original-title="2014-10-26 编辑0次"></rect><rect class="day" width="11" height="11" y="13" fill="#eee" data-count="0" data-date="2014-10-27" title="" data-original-title="2014-10-27 编辑0次"></rect><rect class="day" width="11" height="11" y="26" fill="#eee" data-count="0" data-date="2014-10-28" title="" data-original-title="2014-10-28 编辑0次"></rect><rect class="day" width="11" height="11" y="39" fill="#eee" data-count="0" data-date="2014-10-29" title="" data-original-title="2014-10-29 编辑0次"></rect><rect class="day" width="11" height="11" y="52" fill="#eee" data-count="0" data-date="2014-10-30" title="" data-original-title="2014-10-30 编辑0次"></rect><rect class="day" width="11" height="11" y="65" fill="#eee" data-count="0" data-date="2014-10-31" title="" data-original-title="2014-10-31 编辑0次"></rect><rect class="day" width="11" height="11" y="78" fill="#eee" data-count="0" data-date="2014-11-01" title="" data-original-title="2014-11-01 编辑0次"></rect></g>
                                    <g transform="translate(65, 0)"><rect class="day" width="11" height="11" y="0" fill="#eee" data-count="0" data-date="2014-11-02" title="" data-original-title="2014-11-02 编辑0次"></rect><rect class="day" width="11" height="11" y="13" fill="#eee" data-count="0" data-date="2014-11-03" title="" data-original-title="2014-11-03 编辑0次"></rect><rect class="day" width="11" height="11" y="26" fill="#eee" data-count="0" data-date="2014-11-04" title="" data-original-title="2014-11-04 编辑0次"></rect><rect class="day" width="11" height="11" y="39" fill="#eee" data-count="0" data-date="2014-11-05" title="" data-original-title="2014-11-05 编辑0次"></rect><rect class="day" width="11" height="11" y="52" fill="#eee" data-count="0" data-date="2014-11-06" title="" data-original-title="2014-11-06 编辑0次"></rect><rect class="day" width="11" height="11" y="65" fill="#eee" data-count="0" data-date="2014-11-07" title="" data-original-title="2014-11-07 编辑0次"></rect><rect class="day" width="11" height="11" y="78" fill="#eee" data-count="0" data-date="2014-11-08" title="" data-original-title="2014-11-08 编辑0次"></rect></g>
                                    <g transform="translate(78, 0)"><rect class="day" width="11" height="11" y="0" fill="#eee" data-count="0" data-date="2014-11-09" title="" data-original-title="2014-11-09 编辑0次"></rect><rect class="day" width="11" height="11" y="13" fill="#eee" data-count="0" data-date="2014-11-10" title="" data-original-title="2014-11-10 编辑0次"></rect><rect class="day" width="11" height="11" y="26" fill="#eee" data-count="0" data-date="2014-11-11" title="" data-original-title="2014-11-11 编辑0次"></rect><rect class="day" width="11" height="11" y="39" fill="#eee" data-count="0" data-date="2014-11-12" title="" data-original-title="2014-11-12 编辑0次"></rect><rect class="day" width="11" height="11" y="52" fill="#eee" data-count="0" data-date="2014-11-13" title="" data-original-title="2014-11-13 编辑0次"></rect><rect class="day" width="11" height="11" y="65" fill="#eee" data-count="0" data-date="2014-11-14" title="" data-original-title="2014-11-14 编辑0次"></rect><rect class="day" width="11" height="11" y="78" fill="#eee" data-count="0" data-date="2014-11-15" title="" data-original-title="2014-11-15 编辑0次"></rect></g>
                                    <g transform="translate(91, 0)"><rect class="day" width="11" height="11" y="0" fill="#eee" data-count="0" data-date="2014-11-16" title="" data-original-title="2014-11-16 编辑0次"></rect><rect class="day" width="11" height="11" y="13" fill="#eee" data-count="0" data-date="2014-11-17" title="" data-original-title="2014-11-17 编辑0次"></rect><rect class="day" width="11" height="11" y="26" fill="#eee" data-count="0" data-date="2014-11-18" title="" data-original-title="2014-11-18 编辑0次"></rect><rect class="day" width="11" height="11" y="39" fill="#eee" data-count="0" data-date="2014-11-19" title="" data-original-title="2014-11-19 编辑0次"></rect><rect class="day" width="11" height="11" y="52" fill="#eee" data-count="0" data-date="2014-11-20" title="" data-original-title="2014-11-20 编辑0次"></rect><rect class="day" width="11" height="11" y="65" fill="#eee" data-count="0" data-date="2014-11-21" title="" data-original-title="2014-11-21 编辑0次"></rect><rect class="day" width="11" height="11" y="78" fill="#eee" data-count="0" data-date="2014-11-22" title="" data-original-title="2014-11-22 编辑0次"></rect></g>
                                    <g transform="translate(104, 0)"><rect class="day" width="11" height="11" y="0" fill="#eee" data-count="0" data-date="2014-11-23" title="" data-original-title="2014-11-23 编辑0次"></rect><rect class="day" width="11" height="11" y="13" fill="#eee" data-count="0" data-date="2014-11-24" title="" data-original-title="2014-11-24 编辑0次"></rect><rect class="day" width="11" height="11" y="26" fill="#eee" data-count="0" data-date="2014-11-25" title="" data-original-title="2014-11-25 编辑0次"></rect><rect class="day" width="11" height="11" y="39" fill="#eee" data-count="0" data-date="2014-11-26" title="" data-original-title="2014-11-26 编辑0次"></rect><rect class="day" width="11" height="11" y="52" fill="#eee" data-count="0" data-date="2014-11-27" title="" data-original-title="2014-11-27 编辑0次"></rect><rect class="day" width="11" height="11" y="65" fill="#eee" data-count="0" data-date="2014-11-28" title="" data-original-title="2014-11-28 编辑0次"></rect><rect class="day" width="11" height="11" y="78" fill="#eee" data-count="0" data-date="2014-11-29" title="" data-original-title="2014-11-29 编辑0次"></rect></g>
                                    <g transform="translate(117, 0)"><rect class="day" width="11" height="11" y="0" fill="#eee" data-count="0" data-date="2014-11-30" title="" data-original-title="2014-11-30 编辑0次"></rect><rect class="day" width="11" height="11" y="13" fill="#eee" data-count="0" data-date="2014-12-01" title="" data-original-title="2014-12-01 编辑0次"></rect><rect class="day" width="11" height="11" y="26" fill="#eee" data-count="0" data-date="2014-12-02" title="" data-original-title="2014-12-02 编辑0次"></rect><rect class="day" width="11" height="11" y="39" fill="#eee" data-count="0" data-date="2014-12-03" title="" data-original-title="2014-12-03 编辑0次"></rect><rect class="day" width="11" height="11" y="52" fill="#eee" data-count="0" data-date="2014-12-04" title="" data-original-title="2014-12-04 编辑0次"></rect><rect class="day" width="11" height="11" y="65" fill="#eee" data-count="0" data-date="2014-12-05" title="" data-original-title="2014-12-05 编辑0次"></rect><rect class="day" width="11" height="11" y="78" fill="#eee" data-count="0" data-date="2014-12-06" title="" data-original-title="2014-12-06 编辑0次"></rect></g>
                                    <g transform="translate(130, 0)"><rect class="day" width="11" height="11" y="0" fill="#eee" data-count="0" data-date="2014-12-07" title="" data-original-title="2014-12-07 编辑0次"></rect><rect class="day" width="11" height="11" y="13" fill="#eee" data-count="0" data-date="2014-12-08" title="" data-original-title="2014-12-08 编辑0次"></rect><rect class="day" width="11" height="11" y="26" fill="#eee" data-count="0" data-date="2014-12-09" title="" data-original-title="2014-12-09 编辑0次"></rect><rect class="day" width="11" height="11" y="39" fill="#eee" data-count="0" data-date="2014-12-10" title="" data-original-title="2014-12-10 编辑0次"></rect><rect class="day" width="11" height="11" y="52" fill="#eee" data-count="0" data-date="2014-12-11" title="" data-original-title="2014-12-11 编辑0次"></rect><rect class="day" width="11" height="11" y="65" fill="#eee" data-count="0" data-date="2014-12-12" title="" data-original-title="2014-12-12 编辑0次"></rect><rect class="day" width="11" height="11" y="78" fill="#eee" data-count="0" data-date="2014-12-13" title="" data-original-title="2014-12-13 编辑0次"></rect></g>
                                    <g transform="translate(143, 0)"><rect class="day" width="11" height="11" y="0" fill="#eee" data-count="0" data-date="2014-12-14" title="" data-original-title="2014-12-14 编辑0次"></rect><rect class="day" width="11" height="11" y="13" fill="#eee" data-count="0" data-date="2014-12-15" title="" data-original-title="2014-12-15 编辑0次"></rect><rect class="day" width="11" height="11" y="26" fill="#eee" data-count="0" data-date="2014-12-16" title="" data-original-title="2014-12-16 编辑0次"></rect><rect class="day" width="11" height="11" y="39" fill="#eee" data-count="0" data-date="2014-12-17" title="" data-original-title="2014-12-17 编辑0次"></rect><rect class="day" width="11" height="11" y="52" fill="#eee" data-count="0" data-date="2014-12-18" title="" data-original-title="2014-12-18 编辑0次"></rect><rect class="day" width="11" height="11" y="65" fill="#eee" data-count="0" data-date="2014-12-19" title="" data-original-title="2014-12-19 编辑0次"></rect><rect class="day" width="11" height="11" y="78" fill="#eee" data-count="0" data-date="2014-12-20" title="" data-original-title="2014-12-20 编辑0次"></rect></g>
                                    <g transform="translate(156, 0)"><rect class="day" width="11" height="11" y="0" fill="#eee" data-count="0" data-date="2014-12-21" title="" data-original-title="2014-12-21 编辑0次"></rect><rect class="day" width="11" height="11" y="13" fill="#eee" data-count="0" data-date="2014-12-22" title="" data-original-title="2014-12-22 编辑0次"></rect><rect class="day" width="11" height="11" y="26" fill="#eee" data-count="0" data-date="2014-12-23" title="" data-original-title="2014-12-23 编辑0次"></rect><rect class="day" width="11" height="11" y="39" fill="#eee" data-count="0" data-date="2014-12-24" title="" data-original-title="2014-12-24 编辑0次"></rect><rect class="day" width="11" height="11" y="52" fill="#eee" data-count="0" data-date="2014-12-25" title="" data-original-title="2014-12-25 编辑0次"></rect><rect class="day" width="11" height="11" y="65" fill="#eee" data-count="0" data-date="2014-12-26" title="" data-original-title="2014-12-26 编辑0次"></rect><rect class="day" width="11" height="11" y="78" fill="#eee" data-count="0" data-date="2014-12-27" title="" data-original-title="2014-12-27 编辑0次"></rect></g>
                                    <g transform="translate(169, 0)"><rect class="day" width="11" height="11" y="0" fill="#eee" data-count="0" data-date="2014-12-28" title="" data-original-title="2014-12-28 编辑0次"></rect><rect class="day" width="11" height="11" y="13" fill="#eee" data-count="0" data-date="2014-12-29" title="" data-original-title="2014-12-29 编辑0次"></rect><rect class="day" width="11" height="11" y="26" fill="#eee" data-count="0" data-date="2014-12-30" title="" data-original-title="2014-12-30 编辑0次"></rect><rect class="day" width="11" height="11" y="39" fill="#eee" data-count="0" data-date="2014-12-31" title="" data-original-title="2014-12-31 编辑0次"></rect><rect class="day" width="11" height="11" y="52" fill="#eee" data-count="0" data-date="2015-01-01" title="" data-original-title="2015-01-01 编辑0次"></rect><rect class="day" width="11" height="11" y="65" fill="#eee" data-count="0" data-date="2015-01-02" title="" data-original-title="2015-01-02 编辑0次"></rect><rect class="day" width="11" height="11" y="78" fill="#eee" data-count="0" data-date="2015-01-03" title="" data-original-title="2015-01-03 编辑0次"></rect></g>
                                    <g transform="translate(182, 0)"><rect class="day" width="11" height="11" y="0" fill="#eee" data-count="0" data-date="2015-01-04" title="" data-original-title="2015-01-04 编辑0次"></rect><rect class="day" width="11" height="11" y="13" fill="#eee" data-count="0" data-date="2015-01-05" title="" data-original-title="2015-01-05 编辑0次"></rect><rect class="day" width="11" height="11" y="26" fill="#eee" data-count="0" data-date="2015-01-06" title="" data-original-title="2015-01-06 编辑0次"></rect><rect class="day" width="11" height="11" y="39" fill="#eee" data-count="0" data-date="2015-01-07" title="" data-original-title="2015-01-07 编辑0次"></rect><rect class="day" width="11" height="11" y="52" fill="#eee" data-count="0" data-date="2015-01-08" title="" data-original-title="2015-01-08 编辑0次"></rect><rect class="day" width="11" height="11" y="65" fill="#eee" data-count="0" data-date="2015-01-09" title="" data-original-title="2015-01-09 编辑0次"></rect><rect class="day" width="11" height="11" y="78" fill="#eee" data-count="0" data-date="2015-01-10" title="" data-original-title="2015-01-10 编辑0次"></rect></g>
                                    <g transform="translate(195, 0)"><rect class="day" width="11" height="11" y="0" fill="#eee" data-count="0" data-date="2015-01-11" title="" data-original-title="2015-01-11 编辑0次"></rect><rect class="day" width="11" height="11" y="13" fill="#eee" data-count="0" data-date="2015-01-12" title="" data-original-title="2015-01-12 编辑0次"></rect><rect class="day" width="11" height="11" y="26" fill="#eee" data-count="0" data-date="2015-01-13" title="" data-original-title="2015-01-13 编辑0次"></rect><rect class="day" width="11" height="11" y="39" fill="#eee" data-count="0" data-date="2015-01-14" title="" data-original-title="2015-01-14 编辑0次"></rect><rect class="day" width="11" height="11" y="52" fill="#eee" data-count="0" data-date="2015-01-15" title="" data-original-title="2015-01-15 编辑0次"></rect><rect class="day" width="11" height="11" y="65" fill="#eee" data-count="0" data-date="2015-01-16" title="" data-original-title="2015-01-16 编辑0次"></rect><rect class="day" width="11" height="11" y="78" fill="#eee" data-count="0" data-date="2015-01-17" title="" data-original-title="2015-01-17 编辑0次"></rect></g>
                                    <g transform="translate(208, 0)"><rect class="day" width="11" height="11" y="0" fill="#eee" data-count="0" data-date="2015-01-18" title="" data-original-title="2015-01-18 编辑0次"></rect><rect class="day" width="11" height="11" y="13" fill="#eee" data-count="0" data-date="2015-01-19" title="" data-original-title="2015-01-19 编辑0次"></rect><rect class="day" width="11" height="11" y="26" fill="#eee" data-count="0" data-date="2015-01-20" title="" data-original-title="2015-01-20 编辑0次"></rect><rect class="day" width="11" height="11" y="39" fill="#eee" data-count="0" data-date="2015-01-21" title="" data-original-title="2015-01-21 编辑0次"></rect><rect class="day" width="11" height="11" y="52" fill="#eee" data-count="0" data-date="2015-01-22" title="" data-original-title="2015-01-22 编辑0次"></rect><rect class="day" width="11" height="11" y="65" fill="#eee" data-count="0" data-date="2015-01-23" title="" data-original-title="2015-01-23 编辑0次"></rect><rect class="day" width="11" height="11" y="78" fill="#eee" data-count="0" data-date="2015-01-24" title="" data-original-title="2015-01-24 编辑0次"></rect></g>
                                    <g transform="translate(221, 0)"><rect class="day" width="11" height="11" y="0" fill="#eee" data-count="0" data-date="2015-01-25" title="" data-original-title="2015-01-25 编辑0次"></rect><rect class="day" width="11" height="11" y="13" fill="#eee" data-count="0" data-date="2015-01-26" title="" data-original-title="2015-01-26 编辑0次"></rect><rect class="day" width="11" height="11" y="26" fill="#eee" data-count="0" data-date="2015-01-27" title="" data-original-title="2015-01-27 编辑0次"></rect><rect class="day" width="11" height="11" y="39" fill="#eee" data-count="0" data-date="2015-01-28" title="" data-original-title="2015-01-28 编辑0次"></rect><rect class="day" width="11" height="11" y="52" fill="#eee" data-count="0" data-date="2015-01-29" title="" data-original-title="2015-01-29 编辑0次"></rect><rect class="day" width="11" height="11" y="65" fill="#eee" data-count="0" data-date="2015-01-30" title="" data-original-title="2015-01-30 编辑0次"></rect><rect class="day" width="11" height="11" y="78" fill="#eee" data-count="0" data-date="2015-01-31" title="" data-original-title="2015-01-31 编辑0次"></rect></g>
                                    <g transform="translate(234, 0)"><rect class="day" width="11" height="11" y="0" fill="#eee" data-count="0" data-date="2015-02-01" title="" data-original-title="2015-02-01 编辑0次"></rect><rect class="day" width="11" height="11" y="13" fill="#eee" data-count="0" data-date="2015-02-02" title="" data-original-title="2015-02-02 编辑0次"></rect><rect class="day" width="11" height="11" y="26" fill="#eee" data-count="0" data-date="2015-02-03" title="" data-original-title="2015-02-03 编辑0次"></rect><rect class="day" width="11" height="11" y="39" fill="#eee" data-count="0" data-date="2015-02-04" title="" data-original-title="2015-02-04 编辑0次"></rect><rect class="day" width="11" height="11" y="52" fill="#eee" data-count="0" data-date="2015-02-05" title="" data-original-title="2015-02-05 编辑0次"></rect><rect class="day" width="11" height="11" y="65" fill="#eee" data-count="0" data-date="2015-02-06" title="" data-original-title="2015-02-06 编辑0次"></rect><rect class="day" width="11" height="11" y="78" fill="#eee" data-count="0" data-date="2015-02-07" title="" data-original-title="2015-02-07 编辑0次"></rect></g>
                                    <g transform="translate(247, 0)"><rect class="day" width="11" height="11" y="0" fill="#eee" data-count="0" data-date="2015-02-08" title="" data-original-title="2015-02-08 编辑0次"></rect><rect class="day" width="11" height="11" y="13" fill="#eee" data-count="0" data-date="2015-02-09" title="" data-original-title="2015-02-09 编辑0次"></rect><rect class="day" width="11" height="11" y="26" fill="#eee" data-count="0" data-date="2015-02-10" title="" data-original-title="2015-02-10 编辑0次"></rect><rect class="day" width="11" height="11" y="39" fill="#eee" data-count="0" data-date="2015-02-11" title="" data-original-title="2015-02-11 编辑0次"></rect><rect class="day" width="11" height="11" y="52" fill="#eee" data-count="0" data-date="2015-02-12" title="" data-original-title="2015-02-12 编辑0次"></rect><rect class="day" width="11" height="11" y="65" fill="#eee" data-count="0" data-date="2015-02-13" title="" data-original-title="2015-02-13 编辑0次"></rect><rect class="day" width="11" height="11" y="78" fill="#eee" data-count="0" data-date="2015-02-14" title="" data-original-title="2015-02-14 编辑0次"></rect></g>
                                    <g transform="translate(260, 0)"><rect class="day" width="11" height="11" y="0" fill="#eee" data-count="0" data-date="2015-02-15" title="" data-original-title="2015-02-15 编辑0次"></rect><rect class="day" width="11" height="11" y="13" fill="#eee" data-count="0" data-date="2015-02-16" title="" data-original-title="2015-02-16 编辑0次"></rect><rect class="day" width="11" height="11" y="26" fill="#eee" data-count="0" data-date="2015-02-17" title="" data-original-title="2015-02-17 编辑0次"></rect><rect class="day" width="11" height="11" y="39" fill="#eee" data-count="0" data-date="2015-02-18" title="" data-original-title="2015-02-18 编辑0次"></rect><rect class="day" width="11" height="11" y="52" fill="#eee" data-count="0" data-date="2015-02-19" title="" data-original-title="2015-02-19 编辑0次"></rect><rect class="day" width="11" height="11" y="65" fill="#eee" data-count="0" data-date="2015-02-20" title="" data-original-title="2015-02-20 编辑0次"></rect><rect class="day" width="11" height="11" y="78" fill="#eee" data-count="0" data-date="2015-02-21" title="" data-original-title="2015-02-21 编辑0次"></rect></g>
                                    <g transform="translate(273, 0)"><rect class="day" width="11" height="11" y="0" fill="#eee" data-count="0" data-date="2015-02-22" title="" data-original-title="2015-02-22 编辑0次"></rect><rect class="day" width="11" height="11" y="13" fill="#eee" data-count="0" data-date="2015-02-23" title="" data-original-title="2015-02-23 编辑0次"></rect><rect class="day" width="11" height="11" y="26" fill="#eee" data-count="0" data-date="2015-02-24" title="" data-original-title="2015-02-24 编辑0次"></rect><rect class="day" width="11" height="11" y="39" fill="#eee" data-count="0" data-date="2015-02-25" title="" data-original-title="2015-02-25 编辑0次"></rect><rect class="day" width="11" height="11" y="52" fill="#eee" data-count="0" data-date="2015-02-26" title="" data-original-title="2015-02-26 编辑0次"></rect><rect class="day" width="11" height="11" y="65" fill="#eee" data-count="0" data-date="2015-02-27" title="" data-original-title="2015-02-27 编辑0次"></rect><rect class="day" width="11" height="11" y="78" fill="#eee" data-count="0" data-date="2015-02-28" title="" data-original-title="2015-02-28 编辑0次"></rect></g>
                                    <g transform="translate(286, 0)"><rect class="day" width="11" height="11" y="0" fill="#eee" data-count="0" data-date="2015-03-01" title="" data-original-title="2015-03-01 编辑0次"></rect><rect class="day" width="11" height="11" y="13" fill="#eee" data-count="0" data-date="2015-03-02" title="" data-original-title="2015-03-02 编辑0次"></rect><rect class="day" width="11" height="11" y="26" fill="#eee" data-count="0" data-date="2015-03-03" title="" data-original-title="2015-03-03 编辑0次"></rect><rect class="day" width="11" height="11" y="39" fill="#eee" data-count="0" data-date="2015-03-04" title="" data-original-title="2015-03-04 编辑0次"></rect><rect class="day" width="11" height="11" y="52" fill="#eee" data-count="0" data-date="2015-03-05" title="" data-original-title="2015-03-05 编辑0次"></rect><rect class="day" width="11" height="11" y="65" fill="#eee" data-count="0" data-date="2015-03-06" title="" data-original-title="2015-03-06 编辑0次"></rect><rect class="day" width="11" height="11" y="78" fill="#eee" data-count="0" data-date="2015-03-07" title="" data-original-title="2015-03-07 编辑0次"></rect></g>
                                    <g transform="translate(299, 0)"><rect class="day" width="11" height="11" y="0" fill="#eee" data-count="0" data-date="2015-03-08" title="" data-original-title="2015-03-08 编辑0次"></rect><rect class="day" width="11" height="11" y="13" fill="#eee" data-count="0" data-date="2015-03-09" title="" data-original-title="2015-03-09 编辑0次"></rect><rect class="day" width="11" height="11" y="26" fill="#eee" data-count="0" data-date="2015-03-10" title="" data-original-title="2015-03-10 编辑0次"></rect><rect class="day" width="11" height="11" y="39" fill="#eee" data-count="0" data-date="2015-03-11" title="" data-original-title="2015-03-11 编辑0次"></rect><rect class="day" width="11" height="11" y="52" fill="#eee" data-count="0" data-date="2015-03-12" title="" data-original-title="2015-03-12 编辑0次"></rect><rect class="day" width="11" height="11" y="65" fill="#eee" data-count="0" data-date="2015-03-13" title="" data-original-title="2015-03-13 编辑0次"></rect><rect class="day" width="11" height="11" y="78" fill="#eee" data-count="0" data-date="2015-03-14" title="" data-original-title="2015-03-14 编辑0次"></rect></g>
                                    <g transform="translate(312, 0)"><rect class="day" width="11" height="11" y="0" fill="#eee" data-count="0" data-date="2015-03-15" title="" data-original-title="2015-03-15 编辑0次"></rect><rect class="day" width="11" height="11" y="13" fill="#eee" data-count="0" data-date="2015-03-16" title="" data-original-title="2015-03-16 编辑0次"></rect><rect class="day" width="11" height="11" y="26" fill="#eee" data-count="0" data-date="2015-03-17" title="" data-original-title="2015-03-17 编辑0次"></rect><rect class="day" width="11" height="11" y="39" fill="#eee" data-count="0" data-date="2015-03-18" title="" data-original-title="2015-03-18 编辑0次"></rect><rect class="day" width="11" height="11" y="52" fill="#eee" data-count="0" data-date="2015-03-19" title="" data-original-title="2015-03-19 编辑0次"></rect><rect class="day" width="11" height="11" y="65" fill="#eee" data-count="0" data-date="2015-03-20" title="" data-original-title="2015-03-20 编辑0次"></rect><rect class="day" width="11" height="11" y="78" fill="#eee" data-count="0" data-date="2015-03-21" title="" data-original-title="2015-03-21 编辑0次"></rect></g>
                                    <g transform="translate(325, 0)"><rect class="day" width="11" height="11" y="0" fill="#eee" data-count="0" data-date="2015-03-22" title="" data-original-title="2015-03-22 编辑0次"></rect><rect class="day" width="11" height="11" y="13" fill="#eee" data-count="0" data-date="2015-03-23" title="" data-original-title="2015-03-23 编辑0次"></rect><rect class="day" width="11" height="11" y="26" fill="#eee" data-count="0" data-date="2015-03-24" title="" data-original-title="2015-03-24 编辑0次"></rect><rect class="day" width="11" height="11" y="39" fill="#eee" data-count="0" data-date="2015-03-25" title="" data-original-title="2015-03-25 编辑0次"></rect><rect class="day" width="11" height="11" y="52" fill="#eee" data-count="0" data-date="2015-03-26" title="" data-original-title="2015-03-26 编辑0次"></rect><rect class="day" width="11" height="11" y="65" fill="#eee" data-count="0" data-date="2015-03-27" title="" data-original-title="2015-03-27 编辑0次"></rect><rect class="day" width="11" height="11" y="78" fill="#eee" data-count="0" data-date="2015-03-28" title="" data-original-title="2015-03-28 编辑0次"></rect></g>
                                    <g transform="translate(338, 0)"><rect class="day" width="11" height="11" y="0" fill="#eee" data-count="0" data-date="2015-03-29" title="" data-original-title="2015-03-29 编辑0次"></rect><rect class="day" width="11" height="11" y="13" fill="#eee" data-count="0" data-date="2015-03-30" title="" data-original-title="2015-03-30 编辑0次"></rect><rect class="day" width="11" height="11" y="26" fill="#eee" data-count="0" data-date="2015-03-31" title="" data-original-title="2015-03-31 编辑0次"></rect><rect class="day" width="11" height="11" y="39" fill="#eee" data-count="0" data-date="2015-04-01" title="" data-original-title="2015-04-01 编辑0次"></rect><rect class="day" width="11" height="11" y="52" fill="#eee" data-count="0" data-date="2015-04-02" title="" data-original-title="2015-04-02 编辑0次"></rect><rect class="day" width="11" height="11" y="65" fill="#eee" data-count="0" data-date="2015-04-03" title="" data-original-title="2015-04-03 编辑0次"></rect><rect class="day" width="11" height="11" y="78" fill="#eee" data-count="0" data-date="2015-04-04" title="" data-original-title="2015-04-04 编辑0次"></rect></g>
                                    <g transform="translate(351, 0)"><rect class="day" width="11" height="11" y="0" fill="#eee" data-count="0" data-date="2015-04-05" title="" data-original-title="2015-04-05 编辑0次"></rect><rect class="day" width="11" height="11" y="13" fill="#eee" data-count="0" data-date="2015-04-06" title="" data-original-title="2015-04-06 编辑0次"></rect><rect class="day" width="11" height="11" y="26" fill="#eee" data-count="0" data-date="2015-04-07" title="" data-original-title="2015-04-07 编辑0次"></rect><rect class="day" width="11" height="11" y="39" fill="#eee" data-count="0" data-date="2015-04-08" title="" data-original-title="2015-04-08 编辑0次"></rect><rect class="day" width="11" height="11" y="52" fill="#eee" data-count="0" data-date="2015-04-09" title="" data-original-title="2015-04-09 编辑0次"></rect><rect class="day" width="11" height="11" y="65" fill="#eee" data-count="0" data-date="2015-04-10" title="" data-original-title="2015-04-10 编辑0次"></rect><rect class="day" width="11" height="11" y="78" fill="#eee" data-count="0" data-date="2015-04-11" title="" data-original-title="2015-04-11 编辑0次"></rect></g>
                                    <g transform="translate(364, 0)"><rect class="day" width="11" height="11" y="0" fill="#eee" data-count="0" data-date="2015-04-12" title="" data-original-title="2015-04-12 编辑0次"></rect><rect class="day" width="11" height="11" y="13" fill="#eee" data-count="0" data-date="2015-04-13" title="" data-original-title="2015-04-13 编辑0次"></rect><rect class="day" width="11" height="11" y="26" fill="#eee" data-count="0" data-date="2015-04-14" title="" data-original-title="2015-04-14 编辑0次"></rect><rect class="day" width="11" height="11" y="39" fill="#eee" data-count="0" data-date="2015-04-15" title="" data-original-title="2015-04-15 编辑0次"></rect><rect class="day" width="11" height="11" y="52" fill="#eee" data-count="0" data-date="2015-04-16" title="" data-original-title="2015-04-16 编辑0次"></rect><rect class="day" width="11" height="11" y="65" fill="#eee" data-count="0" data-date="2015-04-17" title="" data-original-title="2015-04-17 编辑0次"></rect><rect class="day" width="11" height="11" y="78" fill="#eee" data-count="0" data-date="2015-04-18" title="" data-original-title="2015-04-18 编辑0次"></rect></g>
                                    <g transform="translate(377, 0)"><rect class="day" width="11" height="11" y="0" fill="#eee" data-count="0" data-date="2015-04-19" title="" data-original-title="2015-04-19 编辑0次"></rect><rect class="day" width="11" height="11" y="13" fill="#eee" data-count="0" data-date="2015-04-20" title="" data-original-title="2015-04-20 编辑0次"></rect><rect class="day" width="11" height="11" y="26" fill="#eee" data-count="0" data-date="2015-04-21" title="" data-original-title="2015-04-21 编辑0次"></rect><rect class="day" width="11" height="11" y="39" fill="#eee" data-count="0" data-date="2015-04-22" title="" data-original-title="2015-04-22 编辑0次"></rect><rect class="day" width="11" height="11" y="52" fill="#eee" data-count="0" data-date="2015-04-23" title="" data-original-title="2015-04-23 编辑0次"></rect><rect class="day" width="11" height="11" y="65" fill="#eee" data-count="0" data-date="2015-04-24" title="" data-original-title="2015-04-24 编辑0次"></rect><rect class="day" width="11" height="11" y="78" fill="#eee" data-count="0" data-date="2015-04-25" title="" data-original-title="2015-04-25 编辑0次"></rect></g>
                                    <g transform="translate(390, 0)"><rect class="day" width="11" height="11" y="0" fill="#eee" data-count="0" data-date="2015-04-26" title="" data-original-title="2015-04-26 编辑0次"></rect><rect class="day" width="11" height="11" y="13" fill="#eee" data-count="0" data-date="2015-04-27" title="" data-original-title="2015-04-27 编辑0次"></rect><rect class="day" width="11" height="11" y="26" fill="#eee" data-count="0" data-date="2015-04-28" title="" data-original-title="2015-04-28 编辑0次"></rect><rect class="day" width="11" height="11" y="39" fill="#eee" data-count="0" data-date="2015-04-29" title="" data-original-title="2015-04-29 编辑0次"></rect><rect class="day" width="11" height="11" y="52" fill="#eee" data-count="0" data-date="2015-04-30" title="" data-original-title="2015-04-30 编辑0次"></rect><rect class="day" width="11" height="11" y="65" fill="#eee" data-count="0" data-date="2015-05-01" title="" data-original-title="2015-05-01 编辑0次"></rect><rect class="day" width="11" height="11" y="78" fill="#eee" data-count="0" data-date="2015-05-02" title="" data-original-title="2015-05-02 编辑0次"></rect></g>
                                    <g transform="translate(403, 0)"><rect class="day" width="11" height="11" y="0" fill="#eee" data-count="0" data-date="2015-05-03" title="" data-original-title="2015-05-03 编辑0次"></rect><rect class="day" width="11" height="11" y="13" fill="#eee" data-count="0" data-date="2015-05-04" title="" data-original-title="2015-05-04 编辑0次"></rect><rect class="day" width="11" height="11" y="26" fill="#eee" data-count="0" data-date="2015-05-05" title="" data-original-title="2015-05-05 编辑0次"></rect><rect class="day" width="11" height="11" y="39" fill="#eee" data-count="0" data-date="2015-05-06" title="" data-original-title="2015-05-06 编辑0次"></rect><rect class="day" width="11" height="11" y="52" fill="#eee" data-count="0" data-date="2015-05-07" title="" data-original-title="2015-05-07 编辑0次"></rect><rect class="day" width="11" height="11" y="65" fill="#eee" data-count="0" data-date="2015-05-08" title="" data-original-title="2015-05-08 编辑0次"></rect><rect class="day" width="11" height="11" y="78" fill="#eee" data-count="0" data-date="2015-05-09" title="" data-original-title="2015-05-09 编辑0次"></rect></g>
                                    <g transform="translate(416, 0)"><rect class="day" width="11" height="11" y="0" fill="#eee" data-count="0" data-date="2015-05-10" title="" data-original-title="2015-05-10 编辑0次"></rect><rect class="day" width="11" height="11" y="13" fill="#eee" data-count="0" data-date="2015-05-11" title="" data-original-title="2015-05-11 编辑0次"></rect><rect class="day" width="11" height="11" y="26" fill="#eee" data-count="0" data-date="2015-05-12" title="" data-original-title="2015-05-12 编辑0次"></rect><rect class="day" width="11" height="11" y="39" fill="#eee" data-count="0" data-date="2015-05-13" title="" data-original-title="2015-05-13 编辑0次"></rect><rect class="day" width="11" height="11" y="52" fill="#eee" data-count="0" data-date="2015-05-14" title="" data-original-title="2015-05-14 编辑0次"></rect><rect class="day" width="11" height="11" y="65" fill="#eee" data-count="0" data-date="2015-05-15" title="" data-original-title="2015-05-15 编辑0次"></rect><rect class="day" width="11" height="11" y="78" fill="#eee" data-count="0" data-date="2015-05-16" title="" data-original-title="2015-05-16 编辑0次"></rect></g>
                                    <g transform="translate(429, 0)"><rect class="day" width="11" height="11" y="0" fill="#eee" data-count="0" data-date="2015-05-17" title="" data-original-title="2015-05-17 编辑0次"></rect><rect class="day" width="11" height="11" y="13" fill="#eee" data-count="0" data-date="2015-05-18" title="" data-original-title="2015-05-18 编辑0次"></rect><rect class="day" width="11" height="11" y="26" fill="#eee" data-count="0" data-date="2015-05-19" title="" data-original-title="2015-05-19 编辑0次"></rect><rect class="day" width="11" height="11" y="39" fill="#eee" data-count="0" data-date="2015-05-20" title="" data-original-title="2015-05-20 编辑0次"></rect><rect class="day" width="11" height="11" y="52" fill="#eee" data-count="0" data-date="2015-05-21" title="" data-original-title="2015-05-21 编辑0次"></rect><rect class="day" width="11" height="11" y="65" fill="#eee" data-count="0" data-date="2015-05-22" title="" data-original-title="2015-05-22 编辑0次"></rect><rect class="day" width="11" height="11" y="78" fill="#eee" data-count="0" data-date="2015-05-23" title="" data-original-title="2015-05-23 编辑0次"></rect></g>
                                    <g transform="translate(442, 0)"><rect class="day" width="11" height="11" y="0" fill="#eee" data-count="0" data-date="2015-05-24" title="" data-original-title="2015-05-24 编辑0次"></rect><rect class="day" width="11" height="11" y="13" fill="#eee" data-count="0" data-date="2015-05-25" title="" data-original-title="2015-05-25 编辑0次"></rect><rect class="day" width="11" height="11" y="26" fill="#eee" data-count="0" data-date="2015-05-26" title="" data-original-title="2015-05-26 编辑0次"></rect><rect class="day" width="11" height="11" y="39" fill="#eee" data-count="0" data-date="2015-05-27" title="" data-original-title="2015-05-27 编辑0次"></rect><rect class="day" width="11" height="11" y="52" fill="#eee" data-count="0" data-date="2015-05-28" title="" data-original-title="2015-05-28 编辑0次"></rect><rect class="day" width="11" height="11" y="65" fill="#eee" data-count="0" data-date="2015-05-29" title="" data-original-title="2015-05-29 编辑0次"></rect><rect class="day" width="11" height="11" y="78" fill="#eee" data-count="0" data-date="2015-05-30" title="" data-original-title="2015-05-30 编辑0次"></rect></g>
                                    <g transform="translate(455, 0)"><rect class="day" width="11" height="11" y="0" fill="#eee" data-count="0" data-date="2015-05-31" title="" data-original-title="2015-05-31 编辑0次"></rect><rect class="day" width="11" height="11" y="13" fill="#eee" data-count="0" data-date="2015-06-01" title="" data-original-title="2015-06-01 编辑0次"></rect><rect class="day" width="11" height="11" y="26" fill="#eee" data-count="0" data-date="2015-06-02" title="" data-original-title="2015-06-02 编辑0次"></rect><rect class="day" width="11" height="11" y="39" fill="#eee" data-count="0" data-date="2015-06-03" title="" data-original-title="2015-06-03 编辑0次"></rect><rect class="day" width="11" height="11" y="52" fill="#eee" data-count="0" data-date="2015-06-04" title="" data-original-title="2015-06-04 编辑0次"></rect><rect class="day" width="11" height="11" y="65" fill="#eee" data-count="0" data-date="2015-06-05" title="" data-original-title="2015-06-05 编辑0次"></rect><rect class="day" width="11" height="11" y="78" fill="#eee" data-count="0" data-date="2015-06-06" title="" data-original-title="2015-06-06 编辑0次"></rect></g>
                                    <g transform="translate(468, 0)"><rect class="day" width="11" height="11" y="0" fill="#eee" data-count="0" data-date="2015-06-07" title="" data-original-title="2015-06-07 编辑0次"></rect><rect class="day" width="11" height="11" y="13" fill="#eee" data-count="0" data-date="2015-06-08" title="" data-original-title="2015-06-08 编辑0次"></rect><rect class="day" width="11" height="11" y="26" fill="#eee" data-count="0" data-date="2015-06-09" title="" data-original-title="2015-06-09 编辑0次"></rect><rect class="day" width="11" height="11" y="39" fill="#eee" data-count="0" data-date="2015-06-10" title="" data-original-title="2015-06-10 编辑0次"></rect><rect class="day" width="11" height="11" y="52" fill="#eee" data-count="0" data-date="2015-06-11" title="" data-original-title="2015-06-11 编辑0次"></rect><rect class="day" width="11" height="11" y="65" fill="#eee" data-count="0" data-date="2015-06-12" title="" data-original-title="2015-06-12 编辑0次"></rect><rect class="day" width="11" height="11" y="78" fill="#eee" data-count="0" data-date="2015-06-13" title="" data-original-title="2015-06-13 编辑0次"></rect></g>
                                    <g transform="translate(481, 0)"><rect class="day" width="11" height="11" y="0" fill="#eee" data-count="0" data-date="2015-06-14" title="" data-original-title="2015-06-14 编辑0次"></rect><rect class="day" width="11" height="11" y="13" fill="#eee" data-count="0" data-date="2015-06-15" title="" data-original-title="2015-06-15 编辑0次"></rect><rect class="day" width="11" height="11" y="26" fill="#eee" data-count="0" data-date="2015-06-16" title="" data-original-title="2015-06-16 编辑0次"></rect><rect class="day" width="11" height="11" y="39" fill="#eee" data-count="0" data-date="2015-06-17" title="" data-original-title="2015-06-17 编辑0次"></rect><rect class="day" width="11" height="11" y="52" fill="#eee" data-count="0" data-date="2015-06-18" title="" data-original-title="2015-06-18 编辑0次"></rect><rect class="day" width="11" height="11" y="65" fill="#eee" data-count="0" data-date="2015-06-19" title="" data-original-title="2015-06-19 编辑0次"></rect><rect class="day" width="11" height="11" y="78" fill="#eee" data-count="0" data-date="2015-06-20" title="" data-original-title="2015-06-20 编辑0次"></rect></g>
                                    <g transform="translate(494, 0)"><rect class="day" width="11" height="11" y="0" fill="#eee" data-count="0" data-date="2015-06-21" title="" data-original-title="2015-06-21 编辑0次"></rect><rect class="day" width="11" height="11" y="13" fill="#eee" data-count="0" data-date="2015-06-22" title="" data-original-title="2015-06-22 编辑0次"></rect><rect class="day" width="11" height="11" y="26" fill="#eee" data-count="0" data-date="2015-06-23" title="" data-original-title="2015-06-23 编辑0次"></rect><rect class="day" width="11" height="11" y="39" fill="#eee" data-count="0" data-date="2015-06-24" title="" data-original-title="2015-06-24 编辑0次"></rect><rect class="day" width="11" height="11" y="52" fill="#eee" data-count="0" data-date="2015-06-25" title="" data-original-title="2015-06-25 编辑0次"></rect><rect class="day" width="11" height="11" y="65" fill="#eee" data-count="0" data-date="2015-06-26" title="" data-original-title="2015-06-26 编辑0次"></rect><rect class="day" width="11" height="11" y="78" fill="#eee" data-count="0" data-date="2015-06-27" title="" data-original-title="2015-06-27 编辑0次"></rect></g>
                                    <g transform="translate(507, 0)"><rect class="day" width="11" height="11" y="0" fill="#eee" data-count="0" data-date="2015-06-28" title="" data-original-title="2015-06-28 编辑0次"></rect><rect class="day" width="11" height="11" y="13" fill="#eee" data-count="0" data-date="2015-06-29" title="" data-original-title="2015-06-29 编辑0次"></rect><rect class="day" width="11" height="11" y="26" fill="#eee" data-count="0" data-date="2015-06-30" title="" data-original-title="2015-06-30 编辑0次"></rect><rect class="day" width="11" height="11" y="39" fill="#eee" data-count="0" data-date="2015-07-01" title="" data-original-title="2015-07-01 编辑0次"></rect><rect class="day" width="11" height="11" y="52" fill="#eee" data-count="0" data-date="2015-07-02" title="" data-original-title="2015-07-02 编辑0次"></rect><rect class="day" width="11" height="11" y="65" fill="#eee" data-count="0" data-date="2015-07-03" title="" data-original-title="2015-07-03 编辑0次"></rect><rect class="day" width="11" height="11" y="78" fill="#eee" data-count="0" data-date="2015-07-04" title="" data-original-title="2015-07-04 编辑0次"></rect></g>
                                    <g transform="translate(520, 0)"><rect class="day" width="11" height="11" y="0" fill="#eee" data-count="0" data-date="2015-07-05" title="" data-original-title="2015-07-05 编辑0次"></rect><rect class="day" width="11" height="11" y="13" fill="#eee" data-count="0" data-date="2015-07-06" title="" data-original-title="2015-07-06 编辑0次"></rect><rect class="day" width="11" height="11" y="26" fill="#eee" data-count="0" data-date="2015-07-07" title="" data-original-title="2015-07-07 编辑0次"></rect><rect class="day" width="11" height="11" y="39" fill="#eee" data-count="0" data-date="2015-07-08" title="" data-original-title="2015-07-08 编辑0次"></rect><rect class="day" width="11" height="11" y="52" fill="#eee" data-count="0" data-date="2015-07-09" title="" data-original-title="2015-07-09 编辑0次"></rect><rect class="day" width="11" height="11" y="65" fill="#eee" data-count="0" data-date="2015-07-10" title="" data-original-title="2015-07-10 编辑0次"></rect><rect class="day" width="11" height="11" y="78" fill="#eee" data-count="0" data-date="2015-07-11" title="" data-original-title="2015-07-11 编辑0次"></rect></g>
                                    <g transform="translate(533, 0)"><rect class="day" width="11" height="11" y="0" fill="#eee" data-count="0" data-date="2015-07-12" title="" data-original-title="2015-07-12 编辑0次"></rect><rect class="day" width="11" height="11" y="13" fill="#eee" data-count="0" data-date="2015-07-13" title="" data-original-title="2015-07-13 编辑0次"></rect><rect class="day" width="11" height="11" y="26" fill="#eee" data-count="0" data-date="2015-07-14" title="" data-original-title="2015-07-14 编辑0次"></rect><rect class="day" width="11" height="11" y="39" fill="#eee" data-count="0" data-date="2015-07-15" title="" data-original-title="2015-07-15 编辑0次"></rect><rect class="day" width="11" height="11" y="52" fill="#eee" data-count="0" data-date="2015-07-16" title="" data-original-title="2015-07-16 编辑0次"></rect><rect class="day" width="11" height="11" y="65" fill="#eee" data-count="0" data-date="2015-07-17" title="" data-original-title="2015-07-17 编辑0次"></rect><rect class="day" width="11" height="11" y="78" fill="#eee" data-count="0" data-date="2015-07-18" title="" data-original-title="2015-07-18 编辑0次"></rect></g>
                                    <g transform="translate(546, 0)"><rect class="day" width="11" height="11" y="0" fill="#eee" data-count="0" data-date="2015-07-19" title="" data-original-title="2015-07-19 编辑0次"></rect><rect class="day" width="11" height="11" y="13" fill="#eee" data-count="0" data-date="2015-07-20" title="" data-original-title="2015-07-20 编辑0次"></rect><rect class="day" width="11" height="11" y="26" fill="#eee" data-count="0" data-date="2015-07-21" title="" data-original-title="2015-07-21 编辑0次"></rect><rect class="day" width="11" height="11" y="39" fill="#eee" data-count="0" data-date="2015-07-22" title="" data-original-title="2015-07-22 编辑0次"></rect><rect class="day" width="11" height="11" y="52" fill="#eee" data-count="0" data-date="2015-07-23" title="" data-original-title="2015-07-23 编辑0次"></rect><rect class="day" width="11" height="11" y="65" fill="#eee" data-count="0" data-date="2015-07-24" title="" data-original-title="2015-07-24 编辑0次"></rect><rect class="day" width="11" height="11" y="78" fill="#eee" data-count="0" data-date="2015-07-25" title="" data-original-title="2015-07-25 编辑0次"></rect></g>
                                    <g transform="translate(559, 0)"><rect class="day" width="11" height="11" y="0" fill="#eee" data-count="0" data-date="2015-07-26" title="" data-original-title="2015-07-26 编辑0次"></rect><rect class="day" width="11" height="11" y="13" fill="#eee" data-count="0" data-date="2015-07-27" title="" data-original-title="2015-07-27 编辑0次"></rect><rect class="day" width="11" height="11" y="26" fill="#eee" data-count="0" data-date="2015-07-28" title="" data-original-title="2015-07-28 编辑0次"></rect><rect class="day" width="11" height="11" y="39" fill="#eee" data-count="0" data-date="2015-07-29" title="" data-original-title="2015-07-29 编辑0次"></rect><rect class="day" width="11" height="11" y="52" fill="#eee" data-count="0" data-date="2015-07-30" title="" data-original-title="2015-07-30 编辑0次"></rect><rect class="day" width="11" height="11" y="65" fill="#eee" data-count="0" data-date="2015-07-31" title="" data-original-title="2015-07-31 编辑0次"></rect><rect class="day" width="11" height="11" y="78" fill="#eee" data-count="0" data-date="2015-08-01" title="" data-original-title="2015-08-01 编辑0次"></rect></g>
                                    <g transform="translate(572, 0)"><rect class="day" width="11" height="11" y="0" fill="#eee" data-count="0" data-date="2015-08-02" title="" data-original-title="2015-08-02 编辑0次"></rect><rect class="day" width="11" height="11" y="13" fill="#eee" data-count="0" data-date="2015-08-03" title="" data-original-title="2015-08-03 编辑0次"></rect><rect class="day" width="11" height="11" y="26" fill="#eee" data-count="0" data-date="2015-08-04" title="" data-original-title="2015-08-04 编辑0次"></rect><rect class="day" width="11" height="11" y="39" fill="#eee" data-count="0" data-date="2015-08-05" title="" data-original-title="2015-08-05 编辑0次"></rect><rect class="day" width="11" height="11" y="52" fill="#eee" data-count="0" data-date="2015-08-06" title="" data-original-title="2015-08-06 编辑0次"></rect><rect class="day" width="11" height="11" y="65" fill="#eee" data-count="0" data-date="2015-08-07" title="" data-original-title="2015-08-07 编辑0次"></rect><rect class="day" width="11" height="11" y="78" fill="#eee" data-count="0" data-date="2015-08-08" title="" data-original-title="2015-08-08 编辑0次"></rect></g>
                                    <g transform="translate(585, 0)"><rect class="day" width="11" height="11" y="0" fill="#eee" data-count="0" data-date="2015-08-09" title="" data-original-title="2015-08-09 编辑0次"></rect><rect class="day" width="11" height="11" y="13" fill="#eee" data-count="0" data-date="2015-08-10" title="" data-original-title="2015-08-10 编辑0次"></rect><rect class="day" width="11" height="11" y="26" fill="#eee" data-count="0" data-date="2015-08-11" title="" data-original-title="2015-08-11 编辑0次"></rect><rect class="day" width="11" height="11" y="39" fill="#eee" data-count="0" data-date="2015-08-12" title="" data-original-title="2015-08-12 编辑0次"></rect><rect class="day" width="11" height="11" y="52" fill="#eee" data-count="0" data-date="2015-08-13" title="" data-original-title="2015-08-13 编辑0次"></rect><rect class="day" width="11" height="11" y="65" fill="#eee" data-count="0" data-date="2015-08-14" title="" data-original-title="2015-08-14 编辑0次"></rect><rect class="day" width="11" height="11" y="78" fill="#eee" data-count="0" data-date="2015-08-15" title="" data-original-title="2015-08-15 编辑0次"></rect></g>
                                    <g transform="translate(598, 0)"><rect class="day" width="11" height="11" y="0" fill="#eee" data-count="0" data-date="2015-08-16" title="" data-original-title="2015-08-16 编辑0次"></rect><rect class="day" width="11" height="11" y="13" fill="#256fb1" data-count="23" data-date="2015-08-17" title="" data-original-title="2015-08-17 编辑23次"></rect><rect class="day" width="11" height="11" y="26" fill="#5ea2de" data-count="11" data-date="2015-08-18" title="" data-original-title="2015-08-18 编辑11次"></rect><rect class="day" width="11" height="11" y="39" fill="#eee" data-count="0" data-date="2015-08-19" title="" data-original-title="2015-08-19 编辑0次"></rect><rect class="day" width="11" height="11" y="52" fill="#eee" data-count="0" data-date="2015-08-20" title="" data-original-title="2015-08-20 编辑0次"></rect><rect class="day" width="11" height="11" y="65" fill="#86beee" data-count="1" data-date="2015-08-21" title="" data-original-title="2015-08-21 编辑1次"></rect><rect class="day" width="11" height="11" y="78" fill="#eee" data-count="0" data-date="2015-08-22" title="" data-original-title="2015-08-22 编辑0次"></rect></g>
                                    <g transform="translate(611, 0)"><rect class="day" width="11" height="11" y="0" fill="#eee" data-count="0" data-date="2015-08-23" title="" data-original-title="2015-08-23 编辑0次"></rect><rect class="day" width="11" height="11" y="13" fill="#86beee" data-count="1" data-date="2015-08-24" title="" data-original-title="2015-08-24 编辑1次"></rect><rect class="day" width="11" height="11" y="26" fill="#eee" data-count="0" data-date="2015-08-25" title="" data-original-title="2015-08-25 编辑0次"></rect><rect class="day" width="11" height="11" y="39" fill="#eee" data-count="0" data-date="2015-08-26" title="" data-original-title="2015-08-26 编辑0次"></rect><rect class="day" width="11" height="11" y="52" fill="#86beee" data-count="5" data-date="2015-08-27" title="" data-original-title="2015-08-27 编辑5次"></rect><rect class="day" width="11" height="11" y="65" fill="#eee" data-count="0" data-date="2015-08-28" title="" data-original-title="2015-08-28 编辑0次"></rect><rect class="day" width="11" height="11" y="78" fill="#eee" data-count="0" data-date="2015-08-29" title="" data-original-title="2015-08-29 编辑0次"></rect></g>
                                    <g transform="translate(624, 0)"><rect class="day" width="11" height="11" y="0" fill="#eee" data-count="0" data-date="2015-08-30" title="" data-original-title="2015-08-30 编辑0次"></rect><rect class="day" width="11" height="11" y="13" fill="#eee" data-count="0" data-date="2015-08-31" title="" data-original-title="2015-08-31 编辑0次"></rect><rect class="day" width="11" height="11" y="26" fill="#eee" data-count="0" data-date="2015-09-01" title="" data-original-title="2015-09-01 编辑0次"></rect><rect class="day" width="11" height="11" y="39" fill="#eee" data-count="0" data-date="2015-09-02" title="" data-original-title="2015-09-02 编辑0次"></rect><rect class="day" width="11" height="11" y="52" fill="#eee" data-count="0" data-date="2015-09-03" title="" data-original-title="2015-09-03 编辑0次"></rect><rect class="day" width="11" height="11" y="65" fill="#eee" data-count="0" data-date="2015-09-04" title="" data-original-title="2015-09-04 编辑0次"></rect><rect class="day" width="11" height="11" y="78" fill="#eee" data-count="0" data-date="2015-09-05" title="" data-original-title="2015-09-05 编辑0次"></rect></g>
                                    <g transform="translate(637, 0)"><rect class="day" width="11" height="11" y="0" fill="#eee" data-count="0" data-date="2015-09-06" title="" data-original-title="2015-09-06 编辑0次"></rect><rect class="day" width="11" height="11" y="13" fill="#eee" data-count="0" data-date="2015-09-07" title="" data-original-title="2015-09-07 编辑0次"></rect><rect class="day" width="11" height="11" y="26" fill="#eee" data-count="0" data-date="2015-09-08" title="" data-original-title="2015-09-08 编辑0次"></rect><rect class="day" width="11" height="11" y="39" fill="#eee" data-count="0" data-date="2015-09-09" title="" data-original-title="2015-09-09 编辑0次"></rect><rect class="day" width="11" height="11" y="52" fill="#256fb1" data-count="27" data-date="2015-09-10" title="" data-original-title="2015-09-10 编辑27次"></rect><rect class="day" width="11" height="11" y="65" fill="#eee" data-count="0" data-date="2015-09-11" title="" data-original-title="2015-09-11 编辑0次"></rect><rect class="day" width="11" height="11" y="78" fill="#eee" data-count="0" data-date="2015-09-12" title="" data-original-title="2015-09-12 编辑0次"></rect></g>
                                    <g transform="translate(650, 0)"><rect class="day" width="11" height="11" y="0" fill="#eee" data-count="0" data-date="2015-09-13" title="" data-original-title="2015-09-13 编辑0次"></rect><rect class="day" width="11" height="11" y="13" fill="#86beee" data-count="2" data-date="2015-09-14" title="" data-original-title="2015-09-14 编辑2次"></rect><rect class="day" width="11" height="11" y="26" fill="#86beee" data-count="3" data-date="2015-09-15" title="" data-original-title="2015-09-15 编辑3次"></rect><rect class="day" width="11" height="11" y="39" fill="#256fb1" data-count="23" data-date="2015-09-16" title="" data-original-title="2015-09-16 编辑23次"></rect><rect class="day" width="11" height="11" y="52" fill="#86beee" data-count="3" data-date="2015-09-17" title="" data-original-title="2015-09-17 编辑3次"></rect><rect class="day" width="11" height="11" y="65" fill="#256fb1" data-count="30" data-date="2015-09-18" title="" data-original-title="2015-09-18 编辑30次"></rect><rect class="day" width="11" height="11" y="78" fill="#eee" data-count="0" data-date="2015-09-19" title="" data-original-title="2015-09-19 编辑0次"></rect></g>
                                    <g transform="translate(663, 0)"><rect class="day" width="11" height="11" y="0" fill="#eee" data-count="0" data-date="2015-09-20" title="" data-original-title="2015-09-20 编辑0次"></rect><rect class="day" width="11" height="11" y="13" fill="#eee" data-count="0" data-date="2015-09-21" title="" data-original-title="2015-09-21 编辑0次"></rect><rect class="day" width="11" height="11" y="26" fill="#eee" data-count="0" data-date="2015-09-22" title="" data-original-title="2015-09-22 编辑0次"></rect><rect class="day" width="11" height="11" y="39" fill="#eee" data-count="0" data-date="2015-09-23" title="" data-original-title="2015-09-23 编辑0次"></rect><rect class="day" width="11" height="11" y="52" fill="#eee" data-count="0" data-date="2015-09-24" title="" data-original-title="2015-09-24 编辑0次"></rect><rect class="day" width="11" height="11" y="65" fill="#eee" data-count="0" data-date="2015-09-25" title="" data-original-title="2015-09-25 编辑0次"></rect><rect class="day" width="11" height="11" y="78" fill="#eee" data-count="0" data-date="2015-09-26" title="" data-original-title="2015-09-26 编辑0次"></rect></g>
                                    <g transform="translate(676, 0)"><rect class="day" width="11" height="11" y="0" fill="#eee" data-count="0" data-date="2015-09-27" title="" data-original-title="2015-09-27 编辑0次"></rect><rect class="day" width="11" height="11" y="13" fill="#eee" data-count="0" data-date="2015-09-28" title="" data-original-title="2015-09-28 编辑0次"></rect></g><text x="13" y="-5" class="2014">10月</text><text x="65" y="-5" class="2014">11月</text><text x="130" y="-5" class="2014">12月</text><text x="182" y="-5" class="2015">1月</text><text x="234" y="-5" class="2015">2月</text><text x="286" y="-5" class="2015">3月</text><text x="351" y="-5" class="2015">4月</text><text x="403" y="-5" class="2015">5月</text><text x="468" y="-5" class="2015">6月</text><text x="520" y="-5" class="2015">7月</text><text x="572" y="-5" class="2015">8月</text><text x="637" y="-5" class="2015">9月</text>
                                    <text text-anchor="middle" class="wday" dx="-10" dy="9" style="display: none;">S</text>
                                    <text text-anchor="middle" class="wday" dx="-10" dy="22">M</text>
                                    <text text-anchor="middle" class="wday" dx="-10" dy="35" style="display: none;">T</text>
                                    <text text-anchor="middle" class="wday" dx="-10" dy="48">W</text>
                                    <text text-anchor="middle" class="wday" dx="-10" dy="61" style="display: none;">T</text>
                                    <text text-anchor="middle" class="wday" dx="-10" dy="74">F</text>
                                    <text text-anchor="middle" class="wday" dx="-10" dy="87" style="display: none;">S</text>
                              </g>
                            </svg>
                        </div>
                    <div class="svg-total">
                        <p>今日编辑 <span>1</span>次</p>
                        <p>连续编辑 <span>1</span>天</p>
                    </div>
                    <div class="clear"><p class="contact">联系我们<span>SURPPORT@huiji.wiki</span></p></div>
                    <div class="top">
                        <ul id="home-rank-tab" class="nav nav-pills" role="tablist">
                            <li role="presentation"><a href="#user" id="user-tab" role="tab" data-toggle="tab" aria-controls="user" aria-expanded="true">用户排名</a></li>
                            <li role="presentation" class="active"><a href="#site" role="tab" id="site-tab" data-toggle="tab" aria-controls="site">站点排名</a></li>
                        </ul>
                        <div id="home-rank-content" class="tab-content">
                            <ul role="tabpanel" class="tab-pane fade" id="user" aria-labelledby="user-tab">

                            </ul>
                            <ul role="tabpanel" class="tab-pane fade in active" id="site" aria-labelledby="site-tab">
                                <li>
                                    <span class="home-rank-point">66.6</span>
                                    <div class="home-rank-right clear">
                                        <span class="backslash">\</span>
                                        <span class="home-rank-list">1</span>
                                        <div class="home-rank-msg">
                                            <a>冰与火之歌中文维基</a>
                                            <ul>
                                                <li><span>4231<span></li>
                                                <li></li>
                                                <li><span>324<span></li>
                                                <li></li>
                                                <li><span>65732<span></li>
                                                <li></li>
                                                <li><span>867<span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <span class="home-rank-point">66.6</span>
                                    <div class="home-rank-right clear">
                                        <span class="backslash">\</span>
                                        <span class="home-rank-list">1</span>
                                        <div class="home-rank-msg">
                                            <a>冰与火之歌中文维基</a>
                                            <ul>
                                                <li><span>4231<span></li>
                                                <li></li>
                                                <li><span>324<span></li>
                                                <li></li>
                                                <li><span>65732<span></li>
                                                <li></li>
                                                <li><span>867<span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <span class="home-rank-point">66.6</span>
                                    <div class="home-rank-right clear">
                                        <span class="backslash">\</span>
                                        <span class="home-rank-list">1</span>
                                        <div class="home-rank-msg">
                                            <a>冰与火之歌中文维基</a>
                                            <ul>
                                                <li><span>4231<span></li>
                                                <li></li>
                                                <li><span>324<span></li>
                                                <li></li>
                                                <li><span>65732<span></li>
                                                <li></li>
                                                <li><span>867<span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </aside>
        <div class="resource-logo">
            <span class="b-logo">B</span>
            <span class="m-logo">
                <img src="/resources/feed/mediawiki-logo.png">
            </span>
        </div>
        <img src="/resources/feed/whole-huiji.png" class="home-huiji">
    </article>
</div>
=======
        <div class="wiki-top">
            <div class="wiki-flog-left">
                <img src="/resources/frontpage/asoiafbannerleft.jpg">
            </div>
            <div class="wiki-flog-right">
                <img src="/resources/frontpage/asoiafbannerright.jpg">
            </div>
            <div class="wiki-flog-wrap">
                <div class="wiki-flog">
                    <ul id="sb-slider" class="sb-slider">
                        <li class="wiki-flog-1">
                            <div class="wiki-flog-asoiaf-intro"></div>
                            <img src="/resources/frontpage/asoiafbanner.jpg" data-src="asoiafbanner">
                        </li>
                        <li class="wiki-flog-1">
                            <div class="wiki-flog-lotr-intro"></div>
                            <img src="/resources/frontpage/lotrbanner.jpg" data-src="lotrbanner">
                        </li>
                        <li class="wiki-flog-1">
                            <div class="wiki-flog-spn-intro"></div>
                            <img src="/resources/frontpage/spnbanner.jpg" data-src="spnbanner">
                        </li>
                    </ul>
                </div>
                <div class="wiki-top-right">
                    <img src="/resources/frontpage/huijilargelogo.png">
                    <h3><a href="http://www.huiji.wiki/wiki/%E7%81%B0%E6%9C%BA%E5%81%9C%E6%9C%BA%E5%9D%AA">推荐wiki >></a></h3>
                    <ul>
                        <li>
                            <h5>现有条目</h5>
                            <p>45,270</p>
                        </li>
                        <li>
                            <h5>文件上传</h5>
                            <p>22,356</p>
                        </li>
                        <li>
                            <h5>编辑次数</h5>
                            <p>286,321</p>
                        </li>
                        <li>
                            <h5>页面浏览</h5>
                            <p>4,861,338</p>
                        </li>
                        <li>
                            <h5>注册用户</h5>
                            <p>6,540</p>
                        </li>
                        <li>
                            <h5>引用次数</h5>
                            <p>95,360</p>
                        </li>
                    </ul>
                </div>
                <a class="previous"></a>
                <a class="next"></a>
            </div>
        </div>
        <div class="wiki-content">
            <div class="wiki-content-header">
                <ul>
                    <li>
                        <a href="http://allglory.huiji.wiki">
                            <div class="avatar1 wiki-thumbnail"></div>
                            <div class="thumbnail-intro">
                                <h4>荣耀百科全书</h4>
                                <h3>编写者招募中！</h3>
                                <p>起点中文网第一部千盟作品，蝴蝶蓝长篇网游小说《全职高手》相关wiki，记录有关荣耀大陆和职业联盟的一切，欢迎粉丝加入编写队伍！入群暗号：虫爹是设定的敌人！</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="http://spn.huiji.wiki">
                            <div class="avatar2 wiki-thumbnail"></div>
                            <div class="thumbnail-intro">
                                <h4>邪恶力量中文维基</h4>
                                <h3>编写者招募中！</h3>
                                <p>人物，剧集，鬼怪，神器，还有来自剧集粉丝与靠谱编辑的爱意。一切尽在国内最精准、最详尽的邪恶力量wiki！料足劲大好卖安利！</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="http://boardwalkempire.huiji.wiki">
                            <div class="avatar3 wiki-thumbnail"></div>
                            <div class="thumbnail-intro">
                                <h4>大西洋帝国中文维基</h4>
                                <h3>编写者招募中！</h3>
                                <p>如果来城里的人想要阅读《圣经》，我们就给他们《圣经》。但是没有人想要《圣经》。他们想要的是美酒、女人和赌博，于是我们就给他们这一切。</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="http://downtonabbey.huiji.wiki">
                            <div class="avatar4 wiki-thumbnail"></div>
                            <div class="thumbnail-intro">
                                <h4>唐顿庄园中文维基</h4>
                                <h3>编写者招募中！</h3>
                                <p>“你看到的是终将到来的残砖败瓦，断壁颓垣，风霜侵蚀，荒凉满目”，我看到的是我们在一起即将建立起一座充满希望的新家园。庄园风雨后，你我相依时。</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="http://wire.huiji.wiki">
                            <div class="avatar5 wiki-thumbnail"></div>
                            <div class="thumbnail-intro">
                                <h4>The Wire中文维基</h4>
                                <h3>编写者招募中！</h3>
                                <p>HBO纪实主义力作，被誉为美剧教科书的现象级经典。随着高清/BD重置版的发售和腾讯视频的正版引进，重新掀起观剧热潮。The Wire中文维基欢迎粉丝加入！</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <aside class="wiki-sidebar">
                <div class="user-rank">
                    <div class="chart">
                        <p>灰机里程榜</p>
                    </div>
                    <!-- weekly -->
                    <div class="tab-content">
                    <div class="top-users weekly-rank">
                        <?php
                            $count = 10;
                            $params['ORDER BY'] = 'up_points DESC';
                            $params['LIMIT'] = $count;

                            $dbr = wfGetDB( DB_SLAVE );
                            $res = $dbr->select(
                                "user_points_weekly",
                                array( 'up_user_id', 'up_user_name', 'up_points' ),
                                array( 'up_user_id <> 0' ),
                                __METHOD__,
                                $params
                            );

                            foreach ( $res as $row ) {
                                $userObj = User::newFromId( $row->up_user_id );
                                $user_group = $userObj->getEffectiveGroups();
                                if ( !in_array('bot', $user_group) && !in_array('bot-global',$user_group)  ) {
                                    $user_list[] = array(
                                        'user_id' => $row->up_user_id,
                                        'user_name' => $row->up_user_name,
                                        'points' => $row->up_points
                                    );
                                }
                            }
                            $x = 0;
                            foreach ( $user_list as $user ) {
                                $user_title = Title::makeTitle( NS_USER, $user['user_name'] );
                                $avatar = new wAvatar( $user['user_id'], 'ml' );
                                $avatarImage = $avatar->getAvatarURL();
                                $x++;
                        ?>
                        <div class="top-fan-row">
                            <span class="top-fan-num"><?php echo $x; ?></span>
                            <span class="top-fan">
                                <?php echo $avatarImage; ?> <a href="<?php echo htmlspecialchars( $user_title->getFullURL() ); ?>"><?php echo $user['user_name']; ?></a>
                            </span>
                            <span class="top-fan-points">
                                <b><?php echo number_format($user['points']>=0?$user['points']:0) ;?></b> 公里
                            </span>
                            <div class="cleared">

                            </div>
                        </div>
                        <?php
                            }
                        ?>

                    </div>
                    <!-- monthly -->
                    <div class="top-users monthly-rank hide">
                        <?php
                            $count = 10;
                            $params['ORDER BY'] = 'up_points DESC';
                            $params['LIMIT'] = $count;

                            $dbr = wfGetDB( DB_SLAVE );
                            $res = $dbr->select(
                                "user_points_monthly",
                                array( 'up_user_id', 'up_user_name', 'up_points' ),
                                array( 'up_user_id <> 0' ),
                                __METHOD__,
                                $params
                            );

                            foreach ( $res as $row ) {
                                $userObj = User::newFromId( $row->up_user_id );
                                $user_group = $userObj->getEffectiveGroups();
                                if ( !in_array('bot', $user_group) && !in_array('bot-global',$user_group)  ) {
                                    $user_list_month[] = array(
                                        'user_id' => $row->up_user_id,
                                        'user_name' => $row->up_user_name,
                                        'points' => $row->up_points
                                    );
                                }
                            }
                            $y = 0;
                            foreach ( $user_list_month as $user ) {
                                $user_title = Title::makeTitle( NS_USER, $user['user_name'] );
                                $avatar = new wAvatar( $user['user_id'], 'ml' );
                                $avatarImage = $avatar->getAvatarURL();
                                $y++;
                        ?>
                        <div class="top-fan-row">
                            <span class="top-fan-num"><?php echo $y; ?></span>
                            <span class="top-fan">
                                <?php echo $avatarImage; ?> <a href="<?php echo htmlspecialchars( $user_title->getFullURL() ); ?>"><?php echo $user['user_name']; ?></a>
                            </span>
                            <span class="top-fan-points">
                                <b><?php echo number_format($user['points']>=0?$user['points']:0) ;?></b> 公里
                            </span>
                            <div class="cleared">

                            </div>
                        </div>
                        <?php
                            }
                        ?>

                    </div>
                    <!-- total -->
                    <div class="top-users total-rank hide">
                    <?php
                        $count = 20;
                        $params['ORDER BY'] = 'stats_total_points DESC';
                        $params['LIMIT'] = $count;
                        $dbr = wfGetDB( DB_SLAVE );
                        $res = $dbr->select(
                            'user_stats',
                            array( 'stats_user_id', 'stats_user_name', 'stats_total_points' ),
                            array( 'stats_user_id <> 0' ),
                            __METHOD__,
                            $params
                        );
                        foreach ( $res as $row ) {
                            $userObj = User::newFromId( $row->stats_user_id );
                            $user_group = $userObj->getEffectiveGroups();
                            if ( !in_array('bot', $user_group) && !in_array('bot-global',$user_group)  ) {
                                $user_list_total[] = array(
                                    'user_id' => $row->stats_user_id,
                                    'user_name' => $row->stats_user_name,
                                    'points' => $row->stats_total_points
                                );
                            }
                        }
                        $z = 0;
                        $user_list_total = array_slice($user_list_total, 0, 10);  
                        foreach ( $user_list_total as $user ) {
                                $user_title = Title::makeTitle( NS_USER, $user['user_name'] );
                                $avatar = new wAvatar( $user['user_id'], 'ml' );
                                $avatarImage = $avatar->getAvatarURL();
                                $z++;
                    ?>
                    <div class="top-fan-row">
                        <span class="top-fan-num"><?php echo $z; ?></span>
                        <span class="top-fan">
                            <?php echo $avatarImage; ?> <a href="<?php echo htmlspecialchars( $user_title->getFullURL() ); ?>"><?php echo $user['user_name']; ?></a>
                        </span>
                        <span class="top-fan-points">
                            <b><?php echo number_format($user['points']>=0?$user['points']:0) ;?></b> 公里
                        </span>
                        <div class="cleared">
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                    </div>
                    </div>
                    <ul class="nav-tab">
                        <li class="active">周里程<span>/</span></li>
                        <li>月里程<span>/</span></li>
                        <li>总里程</li>
                    </ul>
                </div>
            </aside>
            <div class="wikis-wrap ">
                <ul class="wikis">
                <?php
                    $block = BootstrapMediaWikiTemplate::getIndexBlock( '首页/Admin' );
                    $n = count($block);
                    // if( $block ){
                        for ($i=0; $i < $n; $i++) {
                ?>
                    <li>
                        <a href="<?php echo $block[$i]->wikiurl; ?>" class="wiki-entry" >
                            <img src="/resources/frontpage/grey.gif" class="lazy" data-original="<?php echo $block[$i]->backgroungimg; ?>">
                            <div class="relative">

                                <div class="wiki-info">
                                    <div class="entry-header">
                                        <p><?php echo $block[$i]->title; ?></p>
                                        <p><?php echo $block[$i]->wikiname; ?></p>
                                    </div>
                                    <div class="entry-content">
                                        <p><?php echo $block[$i]->desc; ?></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                <?php
                        }
                    // }
                ?>
                    <li class="cleared"></li>
                </ul>
            </div>
        </div>
        <div class="bottom">
            <div class="container">
                <?php self::includePage('Bootstrap:Footer'); ?>
                <footer>
                    <p class="text-center"><a class="mw-ui-anchor mw-ui-progressive mw-ui-quiet" href="http://www.huiji.wiki/wiki/%E7%81%B0%E6%9C%BA%E5%81%9C%E6%9C%BA%E5%9D%AA">灰机停机坪</a> | <a class="mw-ui-anchor mw-ui-progressive mw-ui-quiet" href="http://www.huiji.wiki/wiki/%E7%BB%B4%E5%9F%BA%E5%AE%B6%E5%9B%AD%E8%AE%A1%E5%88%92">维基家园计划</a> | <a class="mw-ui-anchor mw-ui-progressive mw-ui-quiet" href="http://www.huiji.wiki/wiki/%E5%AE%87%E5%AE%99%E5%B0%BD%E5%A4%B4%E7%9A%84%E7%81%B0%E6%9C%BAwiki">关于灰机wiki</a><br>Powered by <a class="mw-ui-anchor mw-ui-progressive mw-ui-quiet" href="http://mediawiki.org">MediaWiki</a> <a class="mw-ui-anchor mw-ui-progressive mw-ui-quiet" href="http://www.miitbeian.gov.cn/">京ICP备15015138号</a></p> 
                </footer>
            </div><!-- container -->
        </div><!-- bottom -->
    </div>
</div>
<?php include ('View/Modal.php'); ?>
>>>>>>> c935f77b70c503d0e1daf46fbcb9258ee53a991a
