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
		global $wgSiteJS;
		parent::initPage( $out );
		$out->addModuleScripts( 'skins.bootstrapmediawiki' );
		$out->addModuleScripts( 'ext.socialprofile.usersitefollows.js' );
		$out->addMeta( 'viewport', 'width=device-width, initial-scale=1, maximum-scale=1' );
	}//end initPage

	/**
	 * prepares the skin's CSS
	 */
	public function setupSkinUserCss( OutputPage $out ) {
		global $wgSiteCSS;

		parent::setupSkinUserCss( $out );

		$out->addModuleStyles( 'skins.bootstrapmediawiki' );

		// we need to include this here so the file pathing is right
		$out->addStyle( 'bootstrap-mediawiki/font-awesome/css/font-awesome.min.css' );
	}//end setupSkinUserCss
}

/**
 * @package MediaWiki
 * @subpackage Skins
 */
class BootstrapMediaWikiTemplate extends QuickTemplate {
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
		global $wgParser, $wgTitle;

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
		<div id="wrapper">
            <div class="modal alert-return">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <p>good</p>
                    </div>
                </div>
            </div>

        <div class="modal fade user-login" tabindex="-1" role="dialog" aria-labelledby="userLoginModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="exampleModalLabel">Login in</h4>
                    </div>
                    <div class="modal-body">
                        <div class="mw-ui-container login-wrap">
                            <div id="userloginprompt"></div>
                            <div id="userloginForm">
                                <form name="userlogin" class="mw-ui-vform" method="post">
                                    <section class="mw-form-header">
                                    </section>

                                    <div class="mw-ui-vform-field user-name">
                                        <label for="wpName1">
                                            用户名
                                        </label>
                                        <input class="loginText mw-ui-input form-control" type="text"  tabindex="1" size="20" placeholder="请输入你的用户名" name="wpName">
                                    </div>

                                    <div class="mw-ui-vform-field">
                                        <label for="wpPassword1">
                                            密码 <a href="/wiki/%E7%89%B9%E6%AE%8A:%E9%87%8D%E8%AE%BE%E5%AF%86%E7%A0%81" title="特殊:重设密码" class="mw-ui-flush-right">忘记密码？</a>
                                        </label>
                                        <input class="loginPassword mw-ui-input form-control"  tabindex="2" size="20" autofocus="" placeholder="请输入你的密码" type="password" name="wpPassword">
                                    </div>



                                    <div class="mw-ui-vform-field">
                                        <div class="">
                                            <input name="wpRemember" type="checkbox" value="1" id="wpRemember" tabindex="4" style="margin-right: 5px;"><label for="wpRemember">
                                                记住我的登录状态</label>
                                        </div>
                                    </div>

                                    <div class="mw-ui-vform-field">
                                        <input id="wpLoginAttempt" tabindex="6" class="mw-ui-button  mw-ui-block mw-ui-constructive btn btn-primary" type="button" value="登录" name="wpLoginAttempt">
                                    </div>

                                    <div class="mw-ui-vform-field" id="mw-userlogin-help">
                                        <a href="https://www.mediawiki.org/wiki/Special:MyLanguage/Help:Logging_in">登录帮助</a>
                                    </div>

                                    <div id="mw-createaccount-cta">
                                        没有账户？<a href="/index.php?title=%E7%89%B9%E6%AE%8A:%E7%94%A8%E6%88%B7%E7%99%BB%E5%BD%95&amp;type=signup" id="mw-createaccount-join" tabindex="7">加入zs</a>
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
                <!-- Sidebar -->
	        <div id="sidebar-wrapper">
	          	
	            <ul class="sidebar-nav">
                    <li>
                        <ul>
                            <li>
                                <a class="navbar-brand logo-wiki-user" href="<?php echo $this->data['nav_urls']['mainpage']['href'] ?>" title="<?php echo $wgSitename ?>"><?php echo isset( $wgSiteLogo ) && $wgSiteLogo ? "<img src='{$wgSiteLogo}' alt='Logo'/> " : ''; echo $wgSitenameshort ?: $wgSitename; ?></a>
                            </li>
                            <li><button id="user-site-follow" class="mw-ui-button mw-ui-progressive <?php echo $followed?'unfollow':'' ?> "><?php echo $followed?'取消关注':'关注'.$wgSitename ?></button>	</li>
                        	<li><p>已有<span id="site-follower-count"><?php echo UserSiteFollow::getSiteCount($wgHuijiPrefix) ?></span>人关注;
                        </ul>
                    </li>
                    <li class="sidebar-brand left-nav">
                        <a href="#">
                            站点导航
                        </a>
                        <ul>
                            <?php echo $this->nav( $this->get_page_links( 'Bootstrap:Subnav' ) ); ?>
                        </ul>
                    </li>
                    <li class="sidebar-brand left-tool">
                        <a href="#">
                            工具
                        </a>
                        <ul>
                            <li><a href="<?php echo $url_prefix; ?>Special:RecentChanges" class="recent-changes"><i class="fa fa-edit"></i> 最近更改</a></li>
                            <li><a href="<?php echo $url_prefix; ?>Special:SpecialPages" class="special-pages"><i class="fa fa-star-o"></i> 特殊页面</a></li>
                            <?php if ( $wgEnableUploads ) { ?>
                                <li><a href="<?php echo $url_prefix; ?>Special:Upload" class="upload-a-file"><i class="fa fa-upload"></i> 上传文件</a></li>
                            <?php } ?>
                        </ul>
                    </li>
                	<?php if (($NS==0 or $NS==1) and ($action != 'edit')) { ?>
					<li class="sidebar-brand left-author">
	                    <a href="#">
	                        主要编辑者
	                    </a>
                        <?php

                        $contrib = '{{#contributors:{{FULLPAGENAME}}}}';
                        $wgParserOptions = new ParserOptions($wgUser);
                        $parserOutput = $wgParser->parse($contrib, $this->getSkin()->getTitle(), $wgParserOptions);
                        echo $parserOutput->getText();
                        }
                        ?>
	                </li>

	                <?php if($this->data['language_urls']){ ?>
	                <li class="sidebar-brand ">
	                    <a href="#">
	                        语言
	                    </a>	                	
	                </li>
	                <?php
	                	$langlinks = $this->data['language_urls'];
	                	echo $this->nav($this->listAdapter($langlinks));
	                } ?>
	            </ul>
	        </div>
            <script>
                var menutoggle=localStorage.getItem('menu-toggle');
                $('#wrapper').attr('class',menutoggle);
            </script>
	        <!-- /#sidebar-wrapper -->
			<div class="navbar navbar-default navbar-fixed-top <?php echo $wgNavBarClasses; ?>" role="navigation">
					<div class="navbar-container">
                        <a class="navbar-brand" href="#menu-toggle" id="menu-toggle">
                            <img src="/resources/assets/huiji_logo_white.png">
                        </a>
						<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
						<div class="navbar-header">
							<button class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="<?php echo $this->data['nav_urls']['mainpage']['href'] ?>" title="<?php echo $wgSitename ?>"><?php echo isset( $wgLogo ) && $wgLogo ? "<img src='{$wgLogo}' alt='Logo'/> " : ''; ?></a>
						</div>

						<div class="collapse navbar-collapse">
							<ul id="icon-section" class="nav navbar-nav">
									<li>
										<a href="<?php echo $this->data['nav_urls']['mainpage']['href'] ?>">主页</a>
									</li>
							</ul>
							<ul class="nav navbar-nav">
								<?php echo $this->nav( $this->get_page_links( 'Bootstrap:TitleBar' ) ); ?>
							</ul>
						<?php
						if ( $wgUser->isLoggedIn() ) {
							if ( count( $this->data['personal_urls'] ) > 0 ) {
								$avatar = new wAvatar( $wgUser->getID(), 'l' );
								// $user_icon = '<span class="user-icon"><img src="https://secure.gravatar.com/avatar/'.md5(strtolower( $wgUser->getEmail())).'.jpg?s=20&r=g"/></span>';
								$user_icon = '<span class="user-icon" style="border: 0px;">'.$avatar->getAvatarURL().'</span>';
								$name =  $wgUser->getName() ;
								$personal_urls = $this->data['personal_urls'];
								unset($personal_urls['notifications']);
								$user_nav = $this->dropdownAdapter( $personal_urls, $user_icon . $name, 'user' );
								$user_notify = $this->nav_notification($this->notificationAdapter($this->data['personal_urls']));
								?>
								<ul<?php $this->html('userlangattributes') ?> class="nav navbar-nav navbar-right">
									<?php echo $user_notify; ?><?php echo $user_nav; ?>
								</ul>
								<?php
							}//end if

						/*	if ( count( $this->data['content_actions']) > 0 ) {
								$content_nav = $this->get_array_links( $this->data['content_actions'], 'Page', 'page' );
								?>
								<ul class="nav navbar-nav navbar-right content-actions"><?php echo $content_nav; ?></ul>
								<?php
							}//end if */
						} else {  // else if is logged in 
									//old login 
							?>

							<ul class="nav navbar-nav navbar-right">
								<li id= "pt-login" data-toggle="modal" data-target=".user-login">
                                    <a class="login-in">登录</a>
<!--									--><?php //echo Linker::linkKnown( SpecialPage::getTitleFor('Userlogin'), wfMsg( 'login' ), array('id' => 'pt-anonlogin' ) ); ?>
								</li>	
							</ul>
							<?php
						}
						?>
						<form class="navbar-search navbar-form navbar-right" action="<?php $this->text( 'wgScript' ) ?>" id="searchform" role="search">
							<div>
								<input class="form-control" type="search" name="search" placeholder="Search" title="Search <?php echo $wgSitename; ?> [ctrl-option-f]" accesskey="f" id="searchInput" autocomplete="off">
								<input type="hidden" name="title" value="Special:Search">
							</div>
						</form>
						</div>
					</div>
			</div><!-- topbar -->


			<div id="wiki-outer-body">
                <?php
                if(($subnav_links = $this->listAdapter( $this->data['content_actions'])) && $NS !== NS_USER && $NS !== NS_USER_TALK ) {
                    ?>
                    <div id="content-actions" class="subnav subnav-fixed">
                        <div class="container">
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

                                <?php echo $this->nav( $subnav_links ); ?>
                                <!-- 							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i>工具 <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo $url_prefix; ?>Special:RecentChanges" class="recent-changes"><i class="fa fa-edit"></i> 最近更改</a></li>
									<li><a href="<?php echo $url_prefix; ?>Special:SpecialPages" class="special-pages"><i class="fa fa-star-o"></i> 特殊页面</a></li>
									<?php if ( $wgEnableUploads ) { ?>
									<li><a href="<?php echo $url_prefix; ?>Special:Upload" class="upload-a-file"><i class="fa fa-upload"></i> 上传文件</a></li>
									<?php } ?>
								</ul>
							</li> 	 -->
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
									<section class="col-md-12 col-sm-12 col-xs-12 wiki-body-section" role="main">
									
									
								<?php
							}//end if
						?>
						<?php if ( $this->data['isarticle'] ) { ?><div id="siteSub" class="alert alert-info visible-print-block" role="alert"><?php $this->msg( 'tagline' ); ?></div><?php } ?>

						<?php if( $this->data['sitenotice'] ) { ?><div id="siteNotice" class="alert-message warning"><?php $this->html('sitenotice') ?></div><?php } ?>
						<?php if ( $this->data['undelete'] ): ?>
						<!-- undelete -->
						<div id="contentSub2" class="alert alert-warning alert-dismissible"><?php $this->html( 'undelete' ) ?></div>
						<!-- /undelete -->
						<?php endif; ?>
						<?php if($this->data['newtalk'] ): ?>
						<!-- newtalk -->
						<div class="usermessage"><?php $this->html( 'newtalk' )  ?></div>
						<!-- /newtalk -->
						<?php endif; ?>

						<div id="firstHeading" class="pagetitle page-header">
							<h1><?php $this->html( 'title' ) ?> <div id="contentSub"><small><?php $this->html('subtitle') ?></small></div></h1>
						</div>	

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
					<?php $this->includePage('Bootstrap:Footer'); ?>
					<footer>
						<p>&copy; <?php echo date('Y'); ?> by <a href="<?php echo (isset($wgCopyrightLink) ? $wgCopyrightLink : 'http://borkweb.com'); ?>"><?php echo (isset($wgCopyright) ? $wgCopyright : 'BorkWeb'); ?></a> 
							&bull; Powered by <a href="http://mediawiki.org">MediaWiki</a> <a href="http://www.miitbeian.gov.cn/">京ICP备15015138号</a>
						</p>
						
					</footer>
				</div><!-- container -->
			</div><!-- bottom -->
	    </div>
	    <!-- /#wrapper -->
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

	/**
	 * Render one or more navigations elements by name, automatically reveresed
	 * when UI is in RTL mode
	 */
	private function nav( $nav ) {
		$output = '';
		foreach ( $nav as $topItem ) {
			$pageTitle = Title::newFromText( $topItem['link'] ?: $topItem['title'] );
			if ( array_key_exists( 'sublinks', $topItem ) ) {
				$output .= '<li class="dropdown">';
				$output .= '<a href="#" class="dropdown-toggle" data-toggle="dropdown">' . $topItem['title'] . ' <b class="caret"></b></a>';
				$output .= '<ul class="dropdown-menu">';

				foreach ( $topItem['sublinks'] as $subLink ) {
					if ( 'divider' == $subLink ) {
						$output .= "<li class='divider'></li>\n";
					} elseif ( $subLink['textonly'] ) {
						$output .= "<li class='nav-header'>{$subLink['title']}</li>\n";
					} else {
						if( $subLink['local'] && $pageTitle = Title::newFromText( $subLink['link'] ) ) {
							$href = $pageTitle->getLocalURL();
						} else {
							$href = $subLink['link'];
						}//end else

						$slug = strtolower( str_replace(' ', '-', preg_replace( '/[^a-zA-Z0-9 ]/', '', trim( strip_tags( $subLink['title'] ) ) ) ) );
						$output .= "<li {$subLink['attributes']}><a href='{$href}' class='{$subLink['class']} {$slug}'>{$subLink['title']}</a>";
					}//end else
				}
				$output .= '</ul>';
				$output .= '</li>';
			} else {
				$requestUrl = $this->getSkin()->getRequest()->getRequestURL();
				$myLink = $topItem['link'];
				$query = explode('&', $requestUrl);
				if (count($query) > 1 && strpos( $requestUrl ,'action' )!== false){
					$match = ($query[1] === explode('&amp;', $myLink)[1]) &&  ($query[0] === explode('&amp;', $myLink)[0]);
				}else{
					$match = (strpos($requestUrl , $myLink) !==false);
				}
				$output .= '<li' . ( $match ? ' class="active"' : '') . '><a href="' . ( $topItem['link']  ) . '">' . $topItem['title'] . '</a></li>';
			}//end else
		}//end foreach
		return $output;
	}//end nav
	/**
	 * Render one or more navigations elements by name as notifications, automatically reveresed
	 * when UI is in RTL mode
	 */
	private function nav_notification( $nav ) {
		$output = '';
		foreach ( $nav as $topItem ) {
			$pageTitle = Title::newFromText( $topItem['link'] ?: $topItem['title'] );

			$output .= '<li id="pt-notifications" ><a class="'.$topItem['class'].'" href="' . ( $topItem['link']  ) . '">' . $topItem['title'] . '</a></li>';
			
		}//end foreach
		return $output;
	}//end nav
	/**
	 * Render one or more navigations elements by name in a dropdown select style, automatically reveresed
	 * when UI is in RTL mode
	 */
	private function nav_select( $nav ) {
		$output = '';
		foreach ( $nav as $topItem ) {
			$pageTitle = Title::newFromText( $topItem['link'] ?: $topItem['title'] );
			$output .= '<optgroup label="'.strip_tags( $topItem['title'] ).'">';
			if ( array_key_exists( 'sublinks', $topItem ) ) {
				foreach ( $topItem['sublinks'] as $subLink ) {
					if ( 'divider' == $subLink ) {
						$output .= "<option value='' disabled='disabled' class='unclickable'>----</option>\n";
					} elseif ( $subLink['textonly'] ) {
						$output .= "<option value='' disabled='disabled' class='unclickable'>{$subLink['title']}</option>\n";
					} else {
						if( $subLink['local'] && $pageTitle = Title::newFromText( $subLink['link'] ) ) {
							$href = $pageTitle->getLocalURL();
						} else {
							$href = $subLink['link'];
						}//end else

						$output .= "<option value='{$href}'>{$subLink['title']}</option>";
					}//end else
				}//end foreach
			} else {
				$output .= '<option value="' . $topItem['link'] . '">' . $topItem['title'] . '</option>';
			}//end else
			$output .= '</optgroup>';
		}//end foreach

		return $output;
	}//end nav_select

	/* generate links from a source page */
	private function get_page_links( $source ) {
		$titleBar = $this->getPageRawText( $source );
		$nav = array();
		foreach(explode("\n", $titleBar) as $line) {
			if(trim($line) == '') continue;
			if( preg_match('/^\*\*\s*divider/', $line ) ) {
				$nav[ count( $nav ) - 1]['sublinks'][] = 'divider';
				continue;
			}//end if

			$sub = false;
			$link = false;
			$external = false;

			if(preg_match('/^\*\s*([^\*]*)\[\[:?(.+)\]\]/', $line, $match)) {
				$sub = false;
				$link = true;
			}elseif(preg_match('/^\*\s*([^\*\[]*)\[([^\[ ]+) (.+)\]/', $line, $match)) {
				$sub = false;
				$link = true;
				$external = true;
			}elseif(preg_match('/^\*\*\s*([^\*\[]*)\[([^\[ ]+) (.+)\]/', $line, $match)) {
				$sub = true;
				$link = true;
				$external = true;
			}elseif(preg_match('/\*\*\s*([^\*]*)\[\[:?(.+)\]\]/', $line, $match)) {
				$sub = true;
				$link = true;
			}elseif(preg_match('/\*\*\s*([^\* ]*)(.+)/', $line, $match)) {
				$sub = true;
				$link = false;
			}elseif(preg_match('/^\*\s*(.+)/', $line, $match)) {
				$sub = false;
				$link = false;
			}

			if( strpos( $match[2], '|' ) !== false ) {
				$item = explode( '|', $match[2] );
				$item = array(
					'title' => $match[1] . $item[1],
					'link' => $item[0],
					'local' => true,
				);
			} else {
				if( $external ) {
					$item = $match[2];
					$title = $match[1] . $match[3];
				} else {
					$item = $match[1] . $match[2];
					$title = $item;
				}//end else

				if( $link ) {
					$item = array('title'=> $title, 'link' => $item, 'local' => ! $external , 'external' => $external );
				} else {
					$item = array('title'=> $title, 'link' => $item, 'textonly' => true, 'external' => $external );
				}//end else
			}//end else

			if( $sub ) {
				$nav[count( $nav ) - 1]['sublinks'][] = $item;
			} else {
				$nav[] = $item;
			}//end else
		}

		return $nav;	
	}//end get_page_links

	/* notification adapter */
	private function notificationAdapter($array){
		$nav = array();
		$item = next($array);
		$key = key($array);
		$link = array(
			'id' => Sanitizer::escapeId( $key ),
			'attributes' => $item['attributes'],
			'link' => htmlspecialchars( $item['href'] ),
			'key' => $item['key'],
			'class' => htmlspecialchars( $item['class'] ),
			'title' => htmlspecialchars( $item['text'] ),
		);
		$link['title'] = '<i class="fa fa-bell"></i> <span class="badge">' . $link['title'] .'</span>';
		$nav[] = $link;
		return $nav;		
	}

	/* dropdown button adapter */
	private function dropdownAdapter( $array, $title, $which ) {
		$nav = array();
		$nav[] = array('title' => $title );
		foreach( $array as $key => $item ) {
			$link = array(
				'id' => Sanitizer::escapeId( $key ),
				'attributes' => $item['attributes'],
				'link' => htmlspecialchars( $item['href'] ),
				'key' => $item['key'],
				'class' => htmlspecialchars( $item['class'] ),
				'title' => htmlspecialchars( $item['text'] ),
			);

			if( 'page' == $which ) {
				switch( $link['title'] ) {
				case 'Page': $icon = 'file'; break;
				case 'Discussion': $icon = 'comment'; break;
				case 'Edit': $icon = 'pencil'; break;
				case 'History': $icon = 'clock-o'; break;
				case 'Delete': $icon = 'remove'; break;
				case 'Move': $icon = 'arrows'; break;
				case 'Protect': $icon = 'lock'; break;
				case 'Watch': $icon = 'eye-open'; break;
				case 'Unwatch': $icon = 'eye-slash'; break;
				}//end switch

				$link['title'] = '<i class="fa fa-' . $icon . '"></i> ' . $link['title'];
			} elseif( 'user' == $which ) {
				switch( $link['title'] ) {
				case '讨论': $icon = 'comment'; break;
				case '设置': $icon = 'cog'; break;
				case '监视列表': $icon = 'eye'; break;
				case '贡献': $icon = 'list-alt'; break;
				case '退出': $icon = 'power-off'; break;
				default: $icon = 'user'; break;
				}//end switch

				$link['title'] = '<i class="fa fa-' . $icon . '"></i> ' . $link['title'];
			}//end elseif

			$nav[0]['sublinks'][] = $link;
		}//end foreach

		return $this->nav( $nav );
	}//end get_array_links

	/* general a list of links adater */
	private function listAdapter( $array ) {
		$nav = array();
		foreach( $array as $key => $item ) {

			$link = array(
				'id' => Sanitizer::escapeId( $key ),
				'attributes' => $item['attributes'],
				'link' => htmlspecialchars( $item['href'] ),
				'key' => $item['key'],
				'class' => htmlspecialchars( $item['class'] ),
				'title' => htmlspecialchars( $item['text'] ),
			);
			switch( $link['title'] ) {
				case '页面': $icon = 'file'; break;
				case '讨论': $icon = 'comment'; break;
				case '编辑': case '编辑源代码': $icon = 'pencil'; break;
				case '历史': $icon = 'clock-o'; break;
				case '删除': $icon = 'remove'; break;
				case '移动': $icon = 'arrows'; break;
				case '保护': $icon = 'lock'; break;
				case '监视': $icon = 'eye'; break;
				case '取消监视': $icon = 'eye-slash'; break;
				case '创建': $icon = 'plus'; break;
				case '创建源代码': $icon = 'plus'; break;
				default: $icon = 'user'; break;
			}
			$link['title'] = '<i class="fa fa-' . $icon . '"></i> ' . $link['title'];
			$nav[] = $link;
		}//end foreach
		return $nav ;
	}//end get_edit_links	
	function getPageRawText($title) {
		global $wgParser, $wgUser;
		$pageTitle = Title::newFromText($title);
		if(!$pageTitle->exists()) {
			return 'Create the page [[Bootstrap:TitleBar]]';
		} else {
			$article = new Article($pageTitle);
			$wgParserOptions = new ParserOptions($wgUser);
			// get the text as static wiki text, but with already expanded templates,
			// which also e.g. to use {{#dpl}} (DPL third party extension) for dynamic menus.
			$parserOutput = $wgParser->preprocess($article->getRawText(), $pageTitle, $wgParserOptions );
			return $parserOutput;
		}
	}

	function includePage($title) {
		global $wgParser, $wgUser;
		$pageTitle = Title::newFromText($title);
		if(!$pageTitle->exists()) {
			echo 'The page [[' . $title . ']] was not found.';
		} else {
			$article = new Article($pageTitle);
			$wgParserOptions = new ParserOptions($wgUser);
			$parserOutput = $wgParser->parse($article->getRawText(), $pageTitle, $wgParserOptions);
			echo $parserOutput->getText();
		}
	}

	public static function link() { }
}

