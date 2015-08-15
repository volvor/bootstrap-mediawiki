<?php
/**
 * Bootstrap - A basic MediaWiki skin based on Twitter's excellent Bootstrap CSS framework
 *
 * @Version 1.0.0
 * @Author Matthew Batchelder <borkweb@gmail.com>
 * @Copyright Matthew Batchelder 2012 - http://borkweb.com/
 * @License: GPLv2 (http://www.gnu.org/copyleft/gpl.html)
 */
if ( ! defined( 'MEDIAWIKI' ) ) {
    die( -1 );
}//end if
//File removed on new mediawiki versions (1.24.1 at least).
//require_once('includes/SkinTemplate.php');
if(file_exists('includes/SkinTemplate.php')){
    require_once('includes/SkinTemplate.php');
}
/**
 * Inherit main code from SkinTemplate, set the CSS and template filter.
 * @package MediaWiki
 * @subpackage Skins
 */
class SkinBootstrapMediaWiki extends SkinTemplate {
    /** Using Bootstrap */
    public $skinname = 'bootstrap-mediawiki';
    public $stylename = 'bootstrap-mediawiki';
    public $template = 'BootstrapMediaWikiTemplate';
    public $useHeadElement = true;
    /**
     * initialize the page
     */
    public function initPage( OutputPage $out ) {
        global $wgSiteJS, $wgHuijiPrefix, $wgSiteNotice;
        // set site notice programatically.
        $wgSiteNotice = BootstrapMediaWikiTemplate::getPageRawText('huiji:MediaWiki:Sitenotice');
        parent::initPage( $out );
        if (($wgHuijiPrefix === 'test' || $wgHuijiPrefix === 'home' || $wgHuijiPrefix === 'slx.test' ) && ($this->getSkin()->getTitle()->isMainPage()) ){
            $out->addModules( 'skins.frontpage');
            $out->addMeta( 'description', '灰机wiki是关注动漫游戏影视等领域的兴趣百科社区，追求深度、系统、合作，你也可以来创建和编写。在这里邂逅与你频率相同的“机”友，构建你的专属兴趣世界，不受束缚的热情创造。贴吧大神、微博达人、重度粉、分析狂人、考据党都在这里！');
        } 
        $out->addModules( 
            array('skins.bootstrapmediawiki.bottom')
        ); # add js and messages  
        $out->addModuleScripts( 'skins.bootstrapmediawiki.top' );          
	if ($wgHuijiPrefix !== 'home'){
		$out->setHTMLTitle( $out->getHTMLTitle() . ' - 灰机wiki' );
	}
        $out->addMeta( 'viewport', 'width=device-width, initial-scale=1, maximum-scale=1' );
    }//end initPage
    /**
     * prepares the skin's CSS
     */
    public function setupSkinUserCss( OutputPage $out ) {
        global $wgSiteCSS, $wgHuijiPrefix;
        parent::setupSkinUserCss( $out );
        $out->addModuleStyles( 'skins.bootstrapmediawiki.top' ); 
        // we need to include this here so the file pathing is right
        $out->addStyle( '//cdn.bootcss.com/font-awesome/4.4.0/css/font-awesome.min.css' );
    }//end setupSkinUserCss
}
/**
 * @package MediaWiki
 * @subpackage Skins
 */
class BootstrapMediaWikiTemplate extends HuijiSkinTemplate {
    /**
     * @var Cached skin object
     */
    public $skin;
    /**
     * Template filter callback for Bootstrap skin.
     * Takes an associative array of data set from a SkinTemplate-based
     * class, and a wrapper for MediaWiki's localization database, and
     * outputs a formatted page.
     *
     * @access private
     */
    public function execute() {
        global $wgRequest, $wgUser, $wgSitename, $wgSitenameshort, $wgCopyrightLink, $wgCopyright, $wgBootstrap, $wgArticlePath, $wgGoogleAnalyticsID, $wgSiteCSS;
        global $wgEnableUploads;
        global $wgLogo, $wgHuijiPrefix;
        global $wgTOCLocation;
        global $wgNavBarClasses;
        global $wgSubnavBarClasses;
        global $wgParser, $wgTitle, $wgEmailAuthentication;

        $this->skin = $this->data['skin'];
        $action = $wgRequest->getText( 'action' );
        $url_prefix = str_replace( '$1', '', $wgArticlePath );
        $NS = $wgTitle->getNamespace();
        // Suppress warnings to prevent notices about missing indexes in $this->data
        wfSuppressWarnings();
        $this->html('headelement');
        if ($wgUser->isLoggedIn()){
            $usf = new UserSiteFollow();
            $followed = ($usf->checkUserSiteFollow($wgUser, $wgHuijiPrefix) !== false);         
        }else{
            $followed = false;
        }
        ?>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-10190882-3', 'auto');
            ga('send', 'pageview');
        </script>

        <div id="wrapper" class="toggled">
        <script>
            var menutoggle;
            document.domain = "huiji.wiki";
            menutoggle = localStorage.getItem("menu-toggle");
            $("#wrapper").attr("class",menutoggle);
        </script>
            <div class="modal alert-return">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <p></p>
                    </div>
                </div>
            </div>
        <!-- followed list -->
            <div class="modal fade follow-msg" tabindex="-1" role="dialog" aria-labelledby="mySmModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="gridSystemModalLabel">关注了本站的用户</h4>
                        </div>
                        <div class="modal-body">
                           <ul class="follow-modal">
                           </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade user-login" tabindex="-1" role="dialog" aria-labelledby="userLoginModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="ModalLabel">登录</h4>
                        </div>
                        <div class="modal-body">
                            <div class="mw-ui-container login-wrap">
                                <div class="userloginprompt"></div>
                                <div class="userloginForm">
                                    <form name="userlogin" class="mw-ui-vform" method="post">
                                        <section class="mw-form-header">
                                        </section>

                                        <div class="mw-ui-vform-field user-name">
                                            <label for="wpName1">
                                                用户名
                                            </label>
                                            <input id="login-user-name" class="loginText mw-ui-input form-control" type="text"  tabindex="1" size="20" placeholder="请输入你的用户名" name="wpName">
                                        </div>

                                        <div class="mw-ui-vform-field">
                                            <label for="wpPassword1">
                                                密码 <a href="/wiki/%E7%89%B9%E6%AE%8A:%E9%87%8D%E8%AE%BE%E5%AF%86%E7%A0%81" title="特殊:重设密码" class="mw-ui-flush-right">忘记密码？</a>
                                            </label>
                                            <input id="login-user-password" class="loginPassword mw-ui-input form-control"  tabindex="2" size="20" autofocus="" placeholder="请输入你的密码" type="password" name="wpPassword">
                                        </div>



                                        <div class="mw-ui-vform-field">
                                            <div class="">
                                                <input name="wpRemember" type="checkbox" value="1" id="wpRemember" tabindex="4" style="margin-right: 5px;"><label for="wpRemember">
                                                    记住我的登录状态</label>
                                            </div>
                                        </div>

                                        <div class="mw-ui-vform-field">
                                            <input id="wpLoginAttempt" tabindex="6" class="mw-ui-button  mw-ui-block mw-ui-constructive" type="button" value="登录" name="wpLoginAttempt">
                                        </div>

    <!--                                     <div class="mw-ui-vform-field" id="mw-userlogin-help">
                                            <a href="https://www.mediawiki.org/wiki/Special:MyLanguage/Help:Logging_in">登录帮助</a>
                                        </div> -->

                                        <div id="mw-createaccount-cta">
                                            没有账户？<?php echo Linker::linkKnown( SpecialPage::getTitleFor('Userlogin'), '注册', array('id' => 'pt-createaccount' ),array('type' => 'signup') ); ?>
                                        </div>
                                        <input type="hidden" name="wpLoginToken" value="5b59d95be44d1173971ec0b44d9fffa4">
                                    </form>
                                </div>
                            </div>



                        </div>
    <!--                    <div class="modal-footer">-->
    <!--                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
    <!--                    </div>-->
                    </div>
                </div>
            </div>

<!--            <div class="alert-wrap">-->
<!--                <div class="alert" role="alert">good</div>-->
<!--            </div>-->

       


        <?php if (($wgHuijiPrefix === 'test' || $wgHuijiPrefix === 'home'  || $wgHuijiPrefix === 'slx.test') && ($this->getSkin()->getTitle()->isMainPage()) ){ 
            include ('frontpage.php');
        } else {?>
            <?php echo $this->showHeader(); ?>

            <?php include 'View/Sidebar.php';?>

            <div id="wiki-outer-body">
                <?php
                if(($subnav_links = $this->listAdapter( $this->data['content_actions']))) {
                    ?>
                    <div id="content-actions" class="subnav subnav-fixed">
                        <div class="container-fluid">
                            <?php
                            $subnav_select = $this->nav_select( $subnav_links );
                            if ( trim( $subnav_select ) ) {
                                ?>
                                <select id="subnav-select">
                                    <?php echo $subnav_select; ?>
                                </select>
                            <?php
                            }//end if
                            ?>
                            <ul class="nav nav-pills">
                                <li>
                                    <a class="navbar-brand logo-wiki-user" href="<?php echo $this->data['nav_urls']['mainpage']['href'] ?>" title="<?php echo $wgSitename ?>"><?php echo isset( $wgSiteLogo ) && $wgSiteLogo ? "<img src='{$wgSiteLogo}' alt='Logo'/> " : ''; echo $wgSitenameshort ?: $wgSitename; ?></a>
                                </li>
                                <li><span id="user-site-follow" class="mw-ui-button <?php echo $followed?'':'mw-ui-progressive' ?><?php echo $followed?'unfollow':'' ?> "><?php echo $followed?'取消关注':'<span class="glyphicon glyphicon-plus"></span>关注' ?></span> </li>
                                <?php echo $this->nav( $this->get_page_links( 'Bootstrap:Subnav' ) ); ?>
                                <li class="site-count"><p><a id="site-article-count" href="<?php echo $url_prefix; ?>Special:AllPages"><?php
                                    $dbr = wfGetDB( DB_SLAVE );
                                    $counter = new SiteStatsInit( $dbr );
                                    $result = self::format_nice_number($counter->articles());
                                    $result2 = self::format_nice_number($counter->files());
                                    echo $result;
                                ?></a>页面<a><?php echo $result2; ?></a>文件<a id="site-follower-count" data-toggle="modal" data-target=".follow-msg"><?php echo self::format_nice_number(UserSiteFollow::getSiteCount($wgHuijiPrefix)) ?></a>关注</p></li>
                                <span id="subnav-toggle"><i class="fa fa-ellipsis-h"></i></span>
                            </ul>
                        </div>
                    </div>
                <?php
                }//end if
                ?>
                <div id="wiki-body" class="container">
                    <div id="content">
                        <?php
                            if ( 'sidebar' == $wgTOCLocation ) {
                                ?>
                                <div class="row">
                                    <nav class="hidden-md hidden-sm hidden-xs hidden-print toc-sidebar" role="complementary navigation"></nav>
                                    <section class="col-md-12 wiki-body-section" role="main">
                                <?php
                            }//end if
                        ?>

                        <div id="firstHeading" class="pagetitle page-header">
                            <div class="pull-right"><?php if ( $this->data['isarticle'] ) { echo $this->getIndicators();} ?> </div>
                            <h1><?php $this->html( 'title' ) ?> <div id="contentSub"><small><?php $this->html('subtitle') ?>
                            <?php
                                if ($this->data['isarticle'] &&  !($this->getSkin()->getTitle()->isMainPage()) && $this->getSkin()->getTitle()->exists()){
                                    $revPageId = $this->getSkin()->getTitle()->getArticleId();
                                    $editinfo = UserStats::getLastEditer($revPageId,$wgHuijiPrefix);
                                    $userPage = Title::makeTitle( NS_USER, $editinfo['rev_user_text'] );
                                    $userPageURL = htmlspecialchars( $userPage->getFullURL() );
                                    $bjtime = strtotime( $editinfo['rev_timestamp'] ) + 8*60*60;
                                    $edittime = CommentFunctions::getTimeAgo( $bjtime );
                                    echo '<a class="mw-ui-anchor mw-ui-progressive mw-ui-quiet" href="'.$userPageURL.'">'.$editinfo['rev_user_text'].'</a>于'.$edittime.'前编辑了此页面';
                                    
                                }
                            ?>
                            </small></div></h1>
                        </div>  
                        <?php if ( $this->data['isarticle'] ) { ?><div id="siteSub" class="alert alert-info visible-print-block" role="alert"><?php $this->msg( 'tagline' ); ?></div><?php } ?>
                        <!-- ConfirmEmail -->
                        <?php
                            if ( $wgUser->isLoggedIn()&&!$wgUser->isEmailConfirmed() && !($this->getSkin()->getTitle()->isMainPage()) ) {
                        ?>
                        <div class="alert alert-danger" role="alert">
                            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                            <span class="sr-only">Error:</span>
                            只有确认邮件后才能对页面进行编辑&nbsp:)
                            <a href="/wiki/%E7%89%B9%E6%AE%8A:%E7%A1%AE%E8%AE%A4%E7%94%B5%E5%AD%90%E9%82%AE%E4%BB%B6">点此确认</a>&nbsp|&nbsp
                            <a href="/wiki/特殊:修改邮箱地址">修改邮箱地址</a>
                        </div> 
                        <?php
                            }
                        ?>  
                        <!-- /ConfirmEmail -->
                        <?php if ( $this->data['undelete'] ): ?>
                        <!-- undelete -->
                        <div id="contentSub2" class="alert alert-warning alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <?php $this->html( 'undelete' ) ?>
                        </div>
                        <!-- /undelete -->
                        <?php endif; ?>
                        <?php if($this->data['newtalk'] ): ?>
                        <!-- newtalk -->
                        <div class="usermessage"><?php $this->html( 'newtalk' )  ?></div>
                        <!-- /newtalk -->
                        <?php endif; ?>
                        <div id="bodyContent" class="body">                     
                        <?php $this->html( 'bodytext' ) ?>
                        </div>
                        <?php if ( $this->data['catlinks'] ): ?>
                        <div class="category-links">
                        <!-- catlinks -->
                        <?php $this->html( 'catlinks' ); ?>
                        <!-- /catlinks -->
                        </div>
                        <?php endif; ?>
                        <?php 
                        if ($this->data['isarticle'] &&  !($this->getSkin()->getTitle()->isMainPage()) && $this->getSkin()->getTitle()->exists()){
                            $commentHtml = '<div class="clearfix"></div>';
                            $wgParser->setTitle($this->getSkin()->getTitle());
                            $commentHtml .= CommentsHooks::displayComments( '', array(), $wgParser); 
                            echo $commentHtml;
                        }?>
                        <?php if ( $this->data['dataAfterContent'] ): ?>
                        <div class="data-after-content">
                        <!-- dataAfterContent -->
                        <?php $this->html( 'dataAfterContent' ); ?>                    
                        <!-- /dataAfterContent -->
                        </div>
                        <?php endif; ?>
                        <?php
                            if ( 'sidebar' == $wgTOCLocation ) {
                                ?>
                                </section></section>
                                <?php
                            }//end if
                        ?>
                    </div>
                </div><!-- container -->
            </div>
            <div class="bottom">
                <div class="container">
                    <?php self::includePage('Bootstrap:Footer'); ?>
                    <?php if( $this->data['sitenotice'] ) { ?>
                        <div id="siteNotice" class="site-notice">
                            <?php $this->html('sitenotice') ?>
                        </div>
                    <?php } ?>
                    <footer>
                        <p class="text-center"><a class="mw-ui-anchor mw-ui-progressive mw-ui-quiet" href="http://home.huiji.wiki/wiki/%E7%81%B0%E6%9C%BA%E5%81%9C%E6%9C%BA%E5%9D%AA">灰机停机坪</a> | <a class="mw-ui-anchor mw-ui-progressive mw-ui-quiet" href="http://home.huiji.wiki/wiki/%E7%BB%B4%E5%9F%BA%E5%AE%B6%E5%9B%AD%E8%AE%A1%E5%88%92">维基家园计划</a> | <a class="mw-ui-anchor mw-ui-progressive mw-ui-quiet" href="http://home.huiji.wiki/wiki/%E5%AE%87%E5%AE%99%E5%B0%BD%E5%A4%B4%E7%9A%84%E7%81%B0%E6%9C%BAwiki">关于灰机wiki</a><br>Powered by <a class="mw-ui-anchor mw-ui-progressive mw-ui-quiet" href="http://mediawiki.org">MediaWiki</a> <a class="mw-ui-anchor mw-ui-progressive mw-ui-quiet" href="http://www.miitbeian.gov.cn/">京ICP备15015138号</a></p> 
                    </footer>
                </div><!-- container -->
            </div><!-- bottom -->
        </div><!-- /#wrapper -->
        <?php }?> <!-- mainpage if -->

        <?php
        $this->html('bottomscripts'); /* JS call to runBodyOnloadHook */
        $this->html('reporttime');
        if ( $this->data['debug'] ) {
            ?>
            <!-- Debug output:
            <?php $this->text( 'debug' ); ?>
            -->
            <?php
        }//end if
        ?>
        </body>
        </html>
        <?php
    }//end execute
}
